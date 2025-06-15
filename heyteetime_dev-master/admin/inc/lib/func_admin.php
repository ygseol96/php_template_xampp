<?php
/** ---------------------------------------------------------------
@program : 어드민 함수 정의
@description : 
@fileinfo : /inc/lib/func_admin.php
@filedescription : function

@auth : 현민원
@since : 2024.01
------------------------------------------------------------------**/


function get_admin_leftmenu($seq) {
	global $myconn, $_INC;

	
	
	if(!$seq) return;

	if(in_array($_SESSION['admin_id'], $_INC['super_id'])) {


		//소메뉴
		$sql = "
			select * from menu_snb
			where
				view_yn = 'Y'
				and mg_seq = '".$seq."'
			order by order_no asc
		";
		$_snb = my_select($sql, $myconn);

		
		

		$html = '';
		

		for($i=0; $i < my_count($_snb);$i++ ) {
			//print_r($myconn);

			$html .= '
				<li data-extension="open">
			
				<div class="main-title"><span class="folder"> </span> <a>'.$_snb[$i]['sg_title'].'</a></div>
				<ul class="sub lsub">
			';
			
			

			//상세메뉴
			$sql = "
				select * from  menu_dnb
				where
					view_yn = 'Y'
					and ms_seq =  '".$_snb[$i]['ms_seq']."'

				order by order_no asc
			";

			//print_r($myconn);
			
			$srow = my_select($sql, $myconn);
			$srow_cnt = my_count($srow);

			for($j=0; $j < $srow_cnt; $j++) {

				$html .= '
					 <li class="lmenu_'.$srow[$j]['md_seq'].' " onclick=\'gomenu("'.$srow[$j]['url'].'")\'>'.$srow[$j]['dg_title'].'</li>
				';
			}

			$html .= '</ul>
				</li>
			';

		}
	}
	else {

		//소메뉴
		$sql = "
			
			SELECT 
				b.ms_seq,
				b.sg_title

			FROM menu_snb AS b 
				INNER JOIN menu_dnb AS c ON b.ms_seq = c.ms_seq
				INNER JOIN admin_member_dnb AS d ON c.md_seq = d.md_seq
			WHERE
				b.view_yn ='Y'
				AND c.view_yn = 'Y'
				AND b.mg_seq ='".$seq."'
				AND d.adm_seq = '".$_SESSION['admin_seq']."'

			GROUP BY 1
			ORDER BY b.order_no ASC
		";
		$_snb = my_select($sql, $myconn);

		


		$html = '';
		

		for($i=0; $i < my_count($_snb);$i++ ) {
			

			$html .= '
				<li data-extension="open">
			
				<div class="main-title"><span class="folder"> </span> <a>'.$_snb[$i]['sg_title'].'</a></div>
				<ul class="sub lsub">
			';



			//상세메뉴
			$sql = "
				select a.* 
				from  menu_dnb as a
					inner join admin_member_dnb AS b ON a.md_seq = b.md_seq
				where
					a.view_yn = 'Y'
					and a.ms_seq =  '".$_snb[$i]['ms_seq']."'
					AND b.adm_seq = '".$_SESSION['admin_seq']."'
					
				group by 1

				order by a.order_no asc
			";
			$srow = my_select($sql, $myconn);
			$srow_cnt = my_count($srow);

			for($j=0; $j < $srow_cnt; $j++) {

				$html .= '
					 <li class="lmenu_'.$srow[$j]['md_seq'].' " onclick=\'gomenu("'.$srow[$j]['url'].'")\'>'.$srow[$j]['dg_title'].'</li>
				';
			}

			$html .= '</ul>
				</li>
			';

		}
	}

	return $html;
}


//관리자 메뉴 권한 적용하기
function set_admin_member_auth($menu_dnb, $adm_seq, $mode="insert") {
	global $myconn, $_INC;

	$result = array();
	
	if($mode == "update") {
		$sql = "
			delete from admin_member_dnb
			where
				adm_seq = '".$adm_seq."'
		";
		$rt = my_query($sql, $myconn);
	}


	$menu_dnb_cnt = my_count($menu_dnb);

	$sql = "
		insert into admin_member_dnb (adm_seq, md_seq) values
	";

	for($i=0; $i < $menu_dnb_cnt;$i++) {
		if($i > 0 ) $sql .= ",";

		$sql .= "
			('".$adm_seq."'	,'".$menu_dnb[$i]."'	)
		";
	}

	

	$rt = my_query($sql, $myconn);
	if(!$rt) {
		my_rollback($myconn, $sql);
		
		$result['result'] ='N';
		$result['msg'] = '사용자 메뉴권한 입력실패';
		return $result;
	}
	

	$result['result'] ='Y';
	$result['msg'] = '';
	return $result;

		

}



// 관리자페이지 권한 존재여부 체크
function get_admin_auth($dmenu) {
	global $myconn, $_INC;

	$result = array();

	if(in_array($_SESSION['admin_id'], $_INC['super_id'])) {
		$result['result'] = 'Y';
		$result['msg'] = '';
	}
	else {

		$sql = "
			select count(*) from admin_member_dnb
			where
				adm_seq = '".$_SESSION['admin_seq']."'
				and md_seq = '".$dmenu."'
		";
		$cnt = my_read($sql, $myconn);

		

		if($cnt == 0 ) {
			$result['result'] = 'N';
			$result['msg'] = '해당 메뉴에 접근권한이 없습니다.';
			return $result;
		}

		$result['result'] = 'Y';
		$result['msg'] = '';
	}
	return $result;

}


//관리자 작업이력 저장
function log_admin($md_seq, $memo='') {
	global $myconn;

	if(empty($_SESSION['admin_seq'])) return;

	$sql = "
		insert into log_admin
		set
			md_seq = '".$md_seq."'
			, adm_seq = '".$_SESSION['admin_seq']."'
			, memo = '".dbEscape($memo)."'
			, regdt = now()
	";
	$rt = my_query($sql, $myconn);
}


//도시코드 만들기
function make_city_code($nat_cd) {
	global $myconn;

	$sql = "
		select count(*)+1 as cnt from code_city
		where
			nat_cd = '".$nat_cd."'
	";
	$cnt = my_read($sql, $myconn);
		
	$city_code = $nat_cd."C".str_pad($cnt, 4, "0", STR_PAD_LEFT);

	return $city_code;

}


//지역코드 만들기
function make_state_code($nat_cd) {
	global $myconn;

	$sql = "
		select count(*)+1 as cnt from code_state
		where
			nat_cd = '".$nat_cd."'
	";
	$cnt = my_read($sql, $myconn);
		
	$code = $nat_cd.str_pad($cnt, 4, "0", STR_PAD_LEFT);

	return $code;

}


////// select 만들기

//국가 select option
function select_nation($where='') {
	global $myconn;

	$sql = "
		select
			nat_cd as value,
			concat(nat_nm_kr,'(',nat_cd,')') as name
		from code_nation
		where
			1
			{$where}
		order by nat_nm_kr asc
	";
	$row = my_select($sql, $myconn);

	return $row;

}

//지역 select option
function select_state($nat_cd='', $where='') {
	global $myconn;

	if(!empty($nat_cd)) $s_where = " nat_cd = '".$nat_cd."' ";
	if(!empty($where)) $s_where .= $where;
	

	$sql = "
		select
			state_cd as value,
			concat(state_nm_kr,'(', state_cd,')') as name
		from code_state
		where
			{$s_where}
		order by state_nm_kr asc
	";
	$row = my_select($sql, $myconn);

	return $row;

}


//도시 select option
function select_city($nat_cd='', $where='') {
	global $myconn;

	if(!empty($nat_cd)) $s_where = " nat_cd = '".$nat_cd."' ";
	if(!empty($where)) $s_where .= $where;

	$sql = "
		select
			city_code as value,
			concat(city_nm_kr, '(',city_code,')') as name
		from code_city
		where
			{$s_where}
		order by city_nm_kr asc
	";
	$row = my_select($sql, $myconn);

	return $row;

}


//도시 select option
function select_airport($nat_cd='', $where='') {
	global $myconn;

	if(!empty($nat_cd)) $s_where = " nat_cd = '".$nat_cd."' ";
	if(!empty($where)) $s_where .= $where;

	$sql = "
		select
			airport_code as value,
			concat(airport_nm_kr,'(',airport_code,')') as name
		from code_airport
		where
			{$s_where}
		order by airport_nm_kr asc
	";
	$row = my_select($sql, $myconn);

	return $row;

}


//국가별 전화번호 select option
function select_nation_phone($nat_cd='', $where='') {
	global $myconn;


	if(!empty($nat_cd)) $s_where = " a.nat_cd = '".$nat_cd."' ";
	if(!empty($where)) $s_where .= $where;

	$sql = "
		select
			a.np_seq as value,
			concat('+ ', a.phone_code, ' (', b.nat_nm_kr,')') as name
		from code_nation_phone as a
			inner join code_nation as b on a.nat_cd = b.nat_cd
		where
			{$s_where}
		order by b.nat_nm_kr asc
	";
	$row = my_select($sql, $myconn);

	return $row;

}



///// php excel download - by phpspreadsheet
// https://github.com/PHPOffice/PhpSpreadsheet
function make_excel($header, $data, $filename='excel') {
	global  $_common_path, $spreadsheet;

	
	
	//print_r($header);
	//echo "header_cnt = ".my_count($header);

	
    
    

   
    
	
	// 첫 행
	$firstRow = $spreadsheet->setActiveSheetIndex(0);

	$startCell ='A';
	$endCell =$startCell;

	for($i=0; $i < my_count($header); $i++) {
		$cellname = $endCell."1";
		$firstRow->setCellValue($cellname, $header[$i]);
		if($i != my_count($header)-1) $endCell++;
	}

	//echo "startCell = $startCell , endCell = $endCell";

	/*
    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue("A1", "번호")
        ->setCellValue("B1", "가입 일자")
        ->setCellValue("C1", "아이디")
        ->setCellValue("D1", "이름")
        ->setCellValue("E1", "생년월일")
        ->setCellValue("F1", "전화번호")
        ->setCellValue("G1", "기타 정보");
    */
	
	/*
    // 각 열 크기
    $spreadsheet->getActiveSheet()->getColumnDimension("A")->setWidth(5);
    $spreadsheet->getActiveSheet()->getColumnDimension("B")->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension("C")->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension("D")->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension("E")->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension("F")->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension("G")->setWidth(20);
	*/
    
	
	
	// 각 열 백그라운드 색상

	$header_range = $startCell."1:".$endCell."1";
	$header_align = $startCell.":".$endCell;
	$spreadsheet->getActiveSheet()->getStyle($header_range)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB("DDDDDD");

	$spreadsheet->getActiveSheet()->getStyle($header_range)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // 수평 중앙 정렬
    $spreadsheet->getActiveSheet()->getStyle($header_align)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // 수직 중앙 정렬

	$spreadsheet->getActiveSheet()->getStyle($header_align)->getAlignment()->setWrapText(true); // 셀에 여러 줄 표시

	/*
    $spreadsheet->getActiveSheet()->getStyle("A1:G1")->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB("DDDDDD");
    // 각 열 정렬
    $spreadsheet->getActiveSheet()->getStyle("A1:G1")->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // 수평 중앙 정렬
    $spreadsheet->getActiveSheet()->getStyle("A:G")->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // 수직 중앙 정렬
    $spreadsheet->getActiveSheet()->getStyle("A:G")->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
	
    $spreadsheet->getActiveSheet()->getStyle("A:G")->getAlignment()->setWrapText(true); // 셀에 여러 줄 표시
	*/

	$data_cnt = my_count($data);

	if($data_cnt == 0 ) {
		$data_range = $startCell."2:".$endCell."2";
		$spreadsheet->getActiveSheet()->mergeCells($data_range);
		$spreadsheet->getActiveSheet()->setCellValue("A2", "자료가 없습니다.");
	}
	else {
		for($i=0; $i < $data_cnt; $i++) {
			
			//데이터 열증가순번
			$data_inc =0;
			for($j='A'; $j<=$endCell;$j++) {
				//echo "j = $j <br>";

				//셀 이름 설정
				$in_i = $i+2;
				$cellname = $j.$in_i;

				//데이터 설정
				$cellvalue = $data[$i][$data_inc];
				

				//데이터 쓰기
				$spreadsheet->getActiveSheet()->setCellValue($cellname, $cellvalue);

				//데이터 열증가 업데이트
				$data_inc++;
			}
		}
	}

	/*
    // 각 열 값
    $noArr = $_POST["noArr"];
    global $mysqli;
    $sql = "select * from table where key in (".$noArr.") order by key desc";
    $result = $mysqli->query($sql);
    $cnt = 2;
    while($row = $result->fetch_array()){
        $spreadsheet->getActiveSheet()->setCellValue("A".$cnt, $row["key"]);
        $spreadsheet->getActiveSheet()->setCellValue("B".$cnt, $row["가입 일자"]);
        $spreadsheet->getActiveSheet()->setCellValue("C".$cnt, $row["아이디"]);
        $spreadsheet->getActiveSheet()->setCellValue("D".$cnt, $row["이름"]);
        $spreadsheet->getActiveSheet()->setCellValue("E".$cnt, $row["생년월일"]);
        $spreadsheet->getActiveSheet()->setCellValue("F".$cnt, $row["전화번호"]);
        $spreadsheet->getActiveSheet()->setCellValue("G".$cnt, $row["기타 정보"]);
        ++$cnt;
    }
	*/
   //return $spreed;
   
}



/////// 관리별 메뉴코드
function make_code_menu($seq) {
	global $myconn;

	$result = array();

	// 상위 메뉴 정보 가져오기
	$sql = "
		select * from code_menu 
		where cmenu_seq = '".$_POST['seq']."'
	";
	$org = my_select_one($sql, $myconn);
	if(empty($org['cmenu_seq'])) {
		//return_json('N','해당 메뉴정보를 찾을 수 없습니다.');
		$result['result'] ='N';
		$result['msg'] = '해당 메뉴정보를 찾을 수 없습니다.';

		return $result;
	}

	//소메뉴 생성시
	if($org['depth'] == '1') {

		$gijun_code = substr($org['ccode'],0,1);

		$sql = "
			select count(*)+1 as cnt from code_menu
			where
				depth ='2'
				and ccode like '".$gijun_code."%'
		";

		$cnt = my_read($sql, $myconn);		
		$cnt = str_pad($cnt,2, "0", STR_PAD_LEFT);

		$code = $gijun_code.$cnt."000";

		$temp = array(
			'ccode'	=> $code,
			'depth'	=> '2',
			'mg_seq'	=> $org['mg_seq'],
		);


		
	}
	//상세메뉴
	else if($org['depth'] == '2') {

		$gijun_code = substr($org['ccode'],0,3);

		$sql = "
			select count(*)+1 as cnt from code_menu
			where
				depth ='3'
				and ccode like '".$gijun_code."%'
		";

		$cnt = my_read($sql, $myconn);		
		$cnt = str_pad($cnt,3, "0", STR_PAD_LEFT);

		$code = $gijun_code.$cnt;

		$temp = array(
			'ccode'	=> $code,
			'depth'	=> '3',
			'mg_seq'	=> $org['mg_seq'],
		);

		
	}


	$result['result'] = 'Y';
	$result['msg'] = $temp;

	return $result;



}


//메뉴별코드 DB반영
function make_code_menu_use($catecode, $table, $arr, $use_seq, $trans='N') {
	global $myconn;
	

	//
	$result = array();



	// 카테고리 확인
	$sql = "
		select * from code_menu
		where
			ccode = '".$catecode."'
			and depth='2'
	";
	$cate = my_select_one($sql, $myconn);
	if(empty($cate['cmenu_seq'])) {
		$result['result'] = 'N';
		$result['msg'] = '카테고리 데이터 확인불가';
		return $result;
	}
	

	$arr_txt = "";
	foreach($arr as $key=>$value) {
		if($arr_txt) $arr_txt .=",";
		$arr_txt .= $value;
	}

	//echo "arr_txt = ".$arr_txt;

	// 넘어온 아이템 외의 아이템 삭제
	if($arr_txt > '' ) {
		$sql = "
			delete from code_menu_use
			where
				use_table = '".$table."'
				and use_seq = '".$use_seq."'
				and cate_seq = '".$cate['cmenu_seq']."'
				and code_seq not in (".$arr_txt.")
			
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			if($trans == 'Y') {
				my_rollback($myconn, $sql);
			}
			$result['result'] = 'N';
			$result['msg'] = '기존 미적용 데이터 삭제실패';
			return $result;
		}
	}

	// 중복검사 하면서 입력
	foreach($arr as $key=>$value) {

		$sql = "
			select count(*)
			from code_menu_use
			where
				use_table = '".$table."'
				and use_seq = '".$use_seq."'
				and cate_seq = '".$cate['cmenu_seq']."'
				and code_seq ='".$value."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt == 0 ) {
			$sql = "
				insert into code_menu_use
				set
					use_table = '".$table."'
					, use_seq = '".$use_seq."'
					, cate_seq = '".$cate['cmenu_seq']."'
					, code_seq ='".$value."'
				
			";
			$rt = my_query($sql, $myconn);
			if(!$rt) {
				if($trans == 'Y') {
					my_rollback($myconn, $sql);
				}
				$result['result'] = 'N';
				$result['msg'] = '기존 미적용 데이터 삭제실패';
				return $result;
			}
		}
	}

	$result['result'] = 'Y';
	$result['msg'] = 'success';
	return $result;

}


//호텔코드 생성
function make_code_hotel($nat_cd) {
	global $myconn;

	$head = "H".$nat_cd;

	$sql = "
		select count(*)+ 1 as cnt from code_hotel
		where
			hotel_code like '".$head."%'
	";
	$cnt = my_read($sql, $myconn);
	$hotel_code = $head .str_pad($cnt, 5, "0", STR_PAD_LEFT);

	return $hotel_code;
}


//code_menu의 카테고리에 속한 코드 리스트 가져오기
function select_code_menu($cate_seq) {
	global $myconn;
	

	$result = array();


	//카테고리 코드 정보 가져오기
	$sql = "
		select * from code_menu
		where
			cmenu_seq = '".$cate_seq."'
	";
	$cate = my_select_one($sql, $myconn);
	if(empty($cate['cmenu_seq'])) {
		
		return false;
	}

	//코드정보 가져오기
	$sql = "
		select
			cmenu_seq as value
			, cname as name
		from code_menu
		where
			ccode like '".substr($cate['ccode'],0,3)."%'
			and depth ='3'

		order by order_no asc

	";
	$row = my_select($sql, $myconn);
	
	return $row;
	
}

// poi_master 홀/파 업데이트
function update_poi_master($poi_seq) {
	global $myconn;

	$sql = "
		select * from poi_master
		where
			poi_seq = '".$poi_seq."'
	";
	$data = my_select_one($sql, $myconn);
	if(empty($data['poi_seq'])) return;

	$sql = "
		SELECT 
			b.par AS par_cnt
			, b.holes AS hole_cnt
		FROM poi_tee AS a
			INNER JOIN poi_course AS b ON a.poi_cseq = b.poi_cseq
			
		WHERE
			b.poi_seq = '".$poi_seq."'
		ORDER BY a.total_distance DESC
		LIMIT 1
	";
	$tee = my_select_one($sql, $myconn);

	if(!empty($tee['hole_cnt']) && !empty($tee['par_cnt']) ) {
		$sql = "
			update poi_master
			set
				hole_cnt = '".$tee['hole_cnt']."'
				, par_cnt = '".$tee['par_cnt']."'
			where
				poi_seq = '".$poi_seq."'
		";
		my_query($sql, $myconn);
	}
}


//
//   템플릿 관련함수
//

//기본 인클루드 설정
function include_tpl($body, $data=null) {
	global $tpl, $myconn, $_gnb, $_snb, $leftmenu, $hgnb, $_worklist;

	$tpl->define(array(
		'head'      => 'include/head.tpl',
		'bottom'    => 'include/bottom.tpl',
        'header'    => 'include/_header.tpl',
		'body'      => $body				// 메인
	));

    $tpl->assign(array(
        'data'  => $data,
        $tpl->define(array(
            'mobile_menu'   => 'include/_mobile_menu.tpl',
            'side_menu'   => 'include/_side_menu.tpl'
        ))
    ));
}

function include_tpl_popup($body) {
	global $tpl;

	

	$tpl->define(array(
		'head'=> 'include/head_popup.tpl',			
		'bottom'=> 'include/bottom_popup.tpl',
		'body'=> $body				// 메인
	));
}


// 기본인클루드에 들어갈 변수값 설정
function basic_tpl() {
	global $tpl, $_INC, $REQUEST, $POST, $GET, $_NAV;
	
	//헤더 메뉴설정
	//$menu = getHeadMenu();
  
	$tpl->assign(array( 
		
		'INC'	=> $_INC,
        'NAV'   => $_NAV,
		//'menu'	=>$menu,
		
		
	)); 
	
	$tpl->assign('REQUEST'	,$REQUEST);
	$tpl->assign('POST'		,$POST);
	$tpl->assign('GET'		,$GET);

}
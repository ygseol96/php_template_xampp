<?php
/** ---------------------------------------------------------------
@program : 시스템관리 처리
@description : 
@fileinfo : /sys/ajax_sys.php
@filedescription : 

@auth : 현민원
@since : 2024.1
------------------------------------------------------------------**/

include_once $_SERVER['DOCUMENT_ROOT']."/inc/setup.php";
?>
<?php
if(!$_POST['mode']) close();
if(!$_SESSION['admin_id']) {
	return_json('N','로그인 후 사용가능합니다.');
}


switch($_POST['mode']) {
	

	/////// 직급관리

	//직급 등록/수정폼 가져오기
	case "form_comp_jikgub" :
		if(empty($_POST['submode'])) close();
		
		
		if($_POST['submode'] == "comp_jikgub_update") {
			if(empty($_POST['seq'])) close();

			$sql = "
				select * from comp_jikgub
				where
					cj_seq = '".$_POST['seq']."'
			";
			$data = my_select_one($sql, $myconn);
			if(!$data['cj_seq']) {
				return_json('N', '해당 데이터를 찾을 수 없습니다.');
			}

			$mode_txt = "수정";

			
		}
		else {
			$mode_txt = "등록";
			$_POST['seq']="";
			$data = array(
				'jk_name'	=> '',
				'use_yn'	=> 'Y',
			);
		}

	

		$html = '
			<form name="popForm" id="popForm">
			<input type="hidden" name="mode" id="popmode" value="'.$_POST['submode'].'">
			<input type="hidden" name="seq" id="popseq" value="'.$_POST['seq'].'">
			<div id="SYTopTitle" class="txtTitle" >직급 '.$mode_txt.'</div>
				<div id="SYPopupContent">
					<div id="SYMainContent" >

						
						<table class="SYWirteTableMini">
							<colgroup>
								<col style="width:20%">
								<col  >
								
							</colgroup>
							<tr>
								<td class="Title" >
									직급명
								</td>
								<td class="Content" >
									 <input type="text" name="jk_name" id="jk_name" class="SYInputStyle02" style="width:150px;" value="'.dbUnEscape($data['jk_name']).'" placeholder="직급명" autocomplete="off">
								</td>
							</tr>
							
							<tr>
								<td class="Title" >
									사용여부
								</td>
								<td class="Content" colspan=3>
									<select name="use_yn" id="use_yn" class="SYSelectBox01" >
										<option value="Y" '.($data['use_yn'] == "Y" ? "selected":"").'>사용</option>
										<option value="N" '.($data['use_yn'] == "N" ? "selected":"").'>미사용</option>
									</select>
								</td>
							</tr>
							
							
						</table>


						<div class="SYButtonArea">
							<input type="button" class="SYButtonWrite02" value="저장" onclick="jikgub_save()">
							<input type="button" class="SYButtonCancel02" value="닫기" onclick="viewLayer(\'off\',\'popCommon\')">
						</div>

					</div>
				</div>
			</div>
			</form>
		';

		return_json('Y',$html);
		break;

	//직급 등록
	case "comp_jikgub_insert" :
		if(empty($_POST['jk_name'])) close();
		

		$sql = "
			select count(*) from comp_jikgub
			where
				jk_name = '".dbEscape($_POST['jk_name'])."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt > 0 ) {
			return_json('N', '중복된 직급명이 있습니다.');
		}

		$sql = "
			select count(*) +1 from comp_jikgub
			
		";
		$order_no = my_read($sql, $myconn);

		$sql = "
			insert into comp_jikgub
			set
				jk_name = '".dbEscape($_POST['jk_name'])."'
				, order_no = '".$order_no."'
				, use_yn = '".$_POST['use_yn']."'
				, regdt = now()
				, moddt = now()

		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','등록실패');
		}
		
		$log = dbEscape($_POST['jk_name']). " 직급 등록";
		log_admin(8, $log);

		return_json('Y');
		break;


	//직급 수정
	case "comp_jikgub_update" :
		if(empty($_POST['seq'])) close();

		$sql = "
			select * from comp_jikgub
			where
				cj_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['cj_seq'])) {
			return_json('N', '해당 데이터를 찾을 수 없습니다.');
		}

		$sql = "
			select count(*) from comp_jikgub
			where
				jk_name = '".dbEscape($_POST['jk_name'])."'
				and cj_seq <> '".$_POST['seq']."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt > 0 ) {
			return_json('N', '중복된 직급명이 있습니다.');
		}


		$sql = "
			update comp_jikgub
			set
				jk_name = '".dbEscape($_POST['jk_name'])."'
				, use_yn = '".$_POST['use_yn']."'
			where
				cj_seq = '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','수정실패');
		}


		$log = $data['jk_name']."->".dbEscape($_POST['jk_name']). " 직급 수정";
		log_admin(8, $log);


		return_json('Y');
		break;

	//직급삭제
	case "comp_jikgub_delete" :

		if(empty($_POST['seq'])) close();

		$sql = "
			select * from comp_jikgub
			where
				cj_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['cj_seq'])) {
			return_json('N', '해당 데이터를 찾을 수 없습니다.');
		}

		$sql = "
			select count(*) from admin_member
			where
				cj_seq = '".$_POST['seq']."'
		";
		$cnt = my_read($sql, $myconn);

		if($cnt  > 0 ) {
			return_json('N','해당 직급을 사용하는 사용자가 존재하여 삭제할 수 없습니다.');
		}


		my_begin_trans($myconn);


		$sql = "
			delete from comp_jikgub
			where
				cj_seq = '".$_POST['seq']."'

		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			my_rollback($myconn, $sql);
			return_json('N','삭제실패');
		}

		$sql = "
			select 
				cj_seq
			from comp_jikgub
			order by order_no asc
				
		";
		$row = my_select($sql, $myconn);
		$row_cnt = my_count($row);

		for($i=0; $i < $row_cnt; $i++) {
			$order_no = $i+1;
			$sql = "
				update comp_jikgub
				set
					order_no ='".$order_no."'
				where
					cj_seq = '".$row[$i]['cj_seq']."'

			";
			$rt = my_query($sql, $myconn);
			if(!$rt) {
				my_rollback($myconn, $sql);
				return_json('N','순서조정실패');
			}
		}

		my_commit($myconn);

		$log = $data['jk_name']. " 직급 삭제";
		log_admin(8, $log);

	
		return_json('Y');
		break;

	

	//직급 순서정렬
	case "comp_jikgub_order" :
		if(empty($_POST['sort1'])) {
			return_json('N','순서를 조정할 데이터가 없습니다.');
		}
		
		
		$data = $_POST['sort1'];
		
		$cnt = my_count($data);
		if($cnt < 2 ) {
			return_json('N','순서를 조정할 데이터가 없습니다.');
		}

		
		
		my_begin_trans($myconn);

		for($i=0; $i < $cnt; $i++) {
			$order = $i+1;

			$sql = "
				update comp_jikgub
				set
					order_no = '".$order."'
				where
					cj_seq = '".$data[$i]."'
			";
			$rt = my_query($sql, $myconn);
			if(!$rt) {
				my_rollback($myconn, $sql);
				return_json('N','순서조정 실패');
			}
		}

		my_commit($myconn);


		$log = "직급 순서조정";
		log_admin(8, $log);

		return_json('Y');
		break;
	


	///////// 부서관리

	//부서명 등록/수정폼 가져오기
	case "form_comp_part" :
		if(empty($_POST['submode'])) close();
		
		
		if($_POST['submode'] == "comp_part_update") {
			if(empty($_POST['seq'])) close();

			$sql = "
				select * from comp_part
				where
					cp_seq = '".$_POST['seq']."'
			";
			$data = my_select_one($sql, $myconn);
			if(!$data['cp_seq']) {
				return_json('N', '해당 데이터를 찾을 수 없습니다.');
			}

			$mode_txt = "수정";

			
		}
		else {
			$mode_txt = "등록";
			$_POST['seq']="";
			$data = array(
				'part_name'	=> '',
				'use_yn'	=> 'Y',
			);
		}

	

		$html = '
			<form name="popForm" id="popForm">
			<input type="hidden" name="mode" id="popmode" value="'.$_POST['submode'].'">
			<input type="hidden" name="seq" id="popseq" value="'.$_POST['seq'].'">
			<div id="SYTopTitle" class="txtTitle" >부서 '.$mode_txt.'</div>
				<div id="SYPopupContent">
					<div id="SYMainContent" >

						
						<table class="SYWirteTableMini">
							<colgroup>
								<col style="width:20%">
								<col  >
								
							</colgroup>
							<tr>
								<td class="Title" >
									부서명
								</td>
								<td class="Content" >
									 <input type="text" name="part_name" id="part_name" class="SYInputStyle02" style="width:150px;" value="'.dbUnEscape($data['part_name']).'" placeholder="부서명" autocomplete="off">
								</td>
							</tr>
							
							<tr>
								<td class="Title" >
									사용여부
								</td>
								<td class="Content" colspan=3>
									<select name="use_yn" id="use_yn" class="SYSelectBox01" >
										<option value="Y" '.($data['use_yn'] == "Y" ? "selected":"").'>사용</option>
										<option value="N" '.($data['use_yn'] == "N" ? "selected":"").'>미사용</option>
									</select>
								</td>
							</tr>
							
							
						</table>


						<div class="SYButtonArea">
							<input type="button" class="SYButtonWrite02" value="저장" onclick="jikgub_save()">
							<input type="button" class="SYButtonCancel02" value="닫기" onclick="viewLayer(\'off\',\'popCommon\')">
						</div>

					</div>
				</div>
			</div>
			</form>
		';

		return_json('Y',$html);
		break;

	//부서명 등록
	case "comp_part_insert" :
		if(empty($_POST['part_name'])) close();
		

		$sql = "
			select count(*) from comp_part
			where
				part_name = '".dbEscape($_POST['part_name'])."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt > 0 ) {
			return_json('N', '중복된 직급명이 있습니다.');
		}

		$sql = "
			select count(*) +1 from comp_part
			
		";
		$order_no = my_read($sql, $myconn);

		$sql = "
			insert into comp_part
			set
				part_name = '".dbEscape($_POST['part_name'])."'
				, order_no = '".$order_no."'
				, use_yn = '".$_POST['use_yn']."'
				, regdt = now()
				, moddt = now()

		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','등록실패');
		}


		$log = dbEscape($_POST['part_name'])." 부서 등록";
		log_admin(7, $log);

		return_json('Y');
		break;


	//부서명 수정
	case "comp_part_update" :
		if(empty($_POST['seq'])) close();

		$sql = "
			select * from comp_part
			where
				cp_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['cp_seq'])) {
			return_json('N', '해당 데이터를 찾을 수 없습니다.');
		}

		$sql = "
			select count(*) from comp_part
			where
				part_name = '".dbEscape($_POST['part_name'])."'
				and cp_seq <> '".$_POST['seq']."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt > 0 ) {
			return_json('N', '중복된 직급명이 있습니다.');
		}


		$sql = "
			update comp_part
			set
				part_name = '".dbEscape($_POST['part_name'])."'
				, use_yn = '".$_POST['use_yn']."'
			where
				cp_seq = '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','수정실패');
		}


		$log = $data['part_name']."->".dbEscape($_POST['part_name'])." 부서 수정";
		log_admin(7, $log);


		return_json('Y');
		break;

	//부서삭제
	case "comp_part_delete" :

		if(empty($_POST['seq'])) close();

		$sql = "
			select * from comp_part
			where
				cp_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['cp_seq'])) {
			return_json('N', '해당 데이터를 찾을 수 없습니다.');
		}

		$sql = "
			select count(*) from admin_member
			where
				adm_part_seq = '".$_POST['seq']."'
		";
		$cnt = my_read($sql, $myconn);

		if($cnt  > 0 ) {
			return_json('N','해당 부서를 사용하는 사용자가 존재하여 삭제할 수 없습니다.');
		}


		my_begin_trans($myconn);


		$sql = "
			delete from comp_part
			where
				cp_seq = '".$_POST['seq']."'

		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			my_rollback($myconn, $sql);
			return_json('N','삭제실패');
		}

		$sql = "
			select 
				cp_seq
			from comp_part
			order by order_no asc
				
		";
		$row = my_select($sql, $myconn);
		$row_cnt = my_count($row);

		for($i=0; $i < $row_cnt; $i++) {
			$order_no = $i+1;
			$sql = "
				update comp_part
				set
					order_no ='".$order_no."'
				where
					cp_seq = '".$row[$i]['cp_seq']."'

			";
			$rt = my_query($sql, $myconn);
			if(!$rt) {
				my_rollback($myconn, $sql);
				return_json('N','순서조정실패');
			}
		}

		my_commit($myconn);


		$log = $data['part_name']." 부서 삭제";
		log_admin(7, $log);
	
		return_json('Y');
		break;

	

	//부서 순서정렬
	case "comp_part_order" :
		if(empty($_POST['sort1'])) {
			return_json('N','순서를 조정할 데이터가 없습니다.');
		}
		
		
		$data = $_POST['sort1'];
		
		$cnt = my_count($data);
		if($cnt < 2 ) {
			return_json('N','순서를 조정할 데이터가 없습니다.');
		}

		
		
		my_begin_trans($myconn);

		for($i=0; $i < $cnt; $i++) {
			$order = $i+1;

			$sql = "
				update comp_part
				set
					order_no = '".$order."'
				where
					cp_seq = '".$data[$i]."'
			";
			$rt = my_query($sql, $myconn);
			if(!$rt) {
				my_rollback($myconn, $sql);
				return_json('N','순서조정 실패');
			}
		}

		my_commit($myconn);


		$log = "부서 순서조정";
		log_admin(7, $log);

		return_json('Y');
		break;


	/////// 부서별 권한 설정
	//부서권한 정보 저장
	case "part_menu_save" :
		if(empty($_POST['seq'])) close();

		//print_r($_POST);
		

		//기존 설정 삭제
		$sql = "
			delete from admin_part_menu
			where
				cp_seq = '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','기존 저장정보 삭제 실패');
		}

		$sql = "
			insert into admin_part_menu ( cp_seq, md_seq) values
		";

		for($i=0; $i < my_count($_POST['dmenu']);$i++) {
			if($i > 0 ) $sql .= ", ";
			$sql .= "( '".$_POST['seq']."', '".$_POST['dmenu'][$i]."' ) ";
		}

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','정보 저장 실패');
		}

		$sql = "
			select * from comp_part
			where
				cp_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);

		$log = $data['part_name']." 부서별 권한 수정";
		log_admin(5, $log);
		

		return_json('Y');
		break;

	///// 사용자 ///////////////////////////////////


	//부서별 권한 html가져오기

	case "get_part_auth" :

		if(empty($_POST['part_seq'])) close();
		

		//부서별 권한 정보 가져오기
		$sql = "
			SELECT
				*
			FROM comp_part as a
			where 
				a.cp_seq = '".$_POST['part_seq']."'
				
				
		";

		//write($sql);
		$part = my_select_one($sql, $myconn);

		//부서별 권한 정보 가져오기
		$sql = "
			SELECT
				*
			FROM admin_part_menu as a
			where 
				a.cp_seq = '".$_POST['part_seq']."'
				
				
		";

		//write($sql);
		$data = my_select($sql, $myconn);

		$sql = "
			SELECT * 
			FROM menu_gnb
			where
				view_yn = 'Y'
			order by order_no asc
		";
		$gmenu = my_select($sql, $myconn);
		$gmenu_cnt = my_count($gmenu);

		for($i=0; $i < $gmenu_cnt; $i++) {
			$sql = "
				select * from menu_snb
				where
					mg_seq = '".$gmenu[$i]['mg_seq']."'
					and view_yn='Y'
				order by order_no asc
			";
			$gmenu[$i]['smenu'] = my_select($sql, $myconn);
			$row = $gmenu[$i]['smenu'];
			$row_cnt = my_count($row);


			for($j=0; $j < $row_cnt; $j++) {
				$sql = "
					select 
						a.* ,
						(select count(*) from admin_part_menu where cp_seq = '".$_POST['part_seq']."' and md_seq = a.md_seq) as cnt
					from menu_dnb as a
					where
						a.ms_seq = '".$row[$j]['ms_seq']."'
						and a.view_yn = 'Y'
					order by a.order_no asc
				";
				$gmenu[$i]['smenu'][$j]['dmenu'] = my_select($sql, $myconn);

			}
		}

		$html = '';

		for($i=0; $i < $gmenu_cnt; $i++) {

			$row = $gmenu[$i]['smenu'];
			$row_cnt = my_count($row);

			$html .= '
				<h3 style="font-size:16px; font-weight:900; padding:10px;margin-top:10px;">
					'.$gmenu[$i]['mg_title'].'
				</h3>
				<table class="SYWirteTable" >
				<colgroup>
					<col style="width:25%">
					<col style="width:75%">
				</colgroup>
			';



			for($j=0; $j < $row_cnt; $j++) {

				$srow = $gmenu[$i]['smenu'][$j]['dmenu'];
				$srow_cnt = my_count($srow);

				$html .= '
					<tr>
					<td class="Title" >
						'.$row[$j]['sg_title'].'
					</td> 
					<td class="Content" style="text-align:left;" >
				';
				for($k=0; $k < $srow_cnt; $k++) {
						$html .= '
						<label><input type="checkbox" name="dmenu[]" id="dmenu_'.$srow[$k]['md_seq'].'"  value="'.$srow[$k]['md_seq'].'" class="SYCheckBox01 gmenu_'.$gmenu[$i]['mg_seq'].' smenu_'.$row[$j]['ms_seq'].'" onclick="auth_changed()" 
						';

						if($srow[$k]['cnt'] > 0 ) {
							$html .= ' checked';
						}

						$html .= '>'.$srow[$k]['dg_title'].'</label>';

				}
				$html .= '	
					</td> 
				</tr>
				';
			}

			$html .='</table>';
		}

		//echo $html;


		return_json('Y',$html);
		break;

	//사용자 메뉴 권한 가져오기
	case "get_user_auth" :

		if(empty($_POST['user_seq'])) close();

		$sql = "
			select * from admin_member
			where
				adm_seq = '".$_POST['user_seq']."'
		";

		$member = my_select_one($sql, $myconn);
		

		

		$sql = "
			SELECT * 
			FROM menu_gnb
			where
				view_yn = 'Y'
			order by order_no asc
		";
		$gmenu = my_select($sql, $myconn);
		$gmenu_cnt = my_count($gmenu);

		for($i=0; $i < $gmenu_cnt; $i++) {
			$sql = "
				select * from menu_snb
				where
					mg_seq = '".$gmenu[$i]['mg_seq']."'
					and view_yn='Y'
				order by order_no asc
			";
			$gmenu[$i]['smenu'] = my_select($sql, $myconn);
			$row = $gmenu[$i]['smenu'];
			$row_cnt = my_count($row);


			for($j=0; $j < $row_cnt; $j++) {
				$sql = "
					select 
						a.* ,
						(select count(*) from admin_member_dnb where adm_seq = '".$_POST['user_seq']."' and md_seq = a.md_seq) as cnt
					from menu_dnb as a
					where
						a.ms_seq = '".$row[$j]['ms_seq']."'
						and a.view_yn = 'Y'
					order by a.order_no asc
				";
				$gmenu[$i]['smenu'][$j]['dmenu'] = my_select($sql, $myconn);

			}
		}

		$html = '';

		for($i=0; $i < $gmenu_cnt; $i++) {

			$row = $gmenu[$i]['smenu'];
			$row_cnt = my_count($row);

			$html .= '
				<h3 style="font-size:16px; font-weight:900; padding:10px;margin-top:10px;">
					'.$gmenu[$i]['mg_title'].'
				</h3>
				<table class="SYWirteTable" >
				<colgroup>
					<col style="width:25%">
					<col style="width:75%">
				</colgroup>
			';



			for($j=0; $j < $row_cnt; $j++) {

				$srow = $gmenu[$i]['smenu'][$j]['dmenu'];
				$srow_cnt = my_count($srow);

				$html .= '
					<tr>
					<td class="Title" >
						'.$row[$j]['sg_title'].'
					</td> 
					<td class="Content" style="text-align:left;" >
				';
				for($k=0; $k < $srow_cnt; $k++) {
						$html .= '
						<label><input type="checkbox" name="dmenu[]" id="dmenu_'.$srow[$k]['md_seq'].'"  value="'.$srow[$k]['md_seq'].'" class="SYCheckBox01 gmenu_'.$gmenu[$i]['mg_seq'].' smenu_'.$row[$j]['ms_seq'].'" onclick="auth_changed()" 
						';

						if($srow[$k]['cnt'] > 0 ) {
							$html .= ' checked';
						}

						$html .= '>'.$srow[$k]['dg_title'].'</label>';

				}
				$html .= '	
					</td> 
				</tr>
				';
			}

			$html .='</table>';
		}

		//echo $html;


		return_json('Y',$html);
		break;

	//관리자 아이디 중복체크
	case "check_admin_id" :
		if(empty($_POST['id'])) close();
		
		$sql = "
			select count(*) from admin_member
			where
				adm_id = '".$_POST['id']."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt > 0 ) {
			return_json('N','중복된 아이디가 있습니다.');
		}

		return_json('Y');
		break;


	//관리자 등록
	case "admin_member_insert" :
		

		//아이디 중복검사

		$sql = "
			select count(*) from admin_member
			where
				adm_id = '".$_POST['adm_id']."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt > 0 ) {
			return_json('N','중복된 아이디가 있습니다.');
		}

		my_begin_trans($myconn);

		$sql = "
			insert into admin_member
			set
				adm_id = '".$_POST['adm_id']."'
				, adm_pwd = aes_encrypt('".$_POST['pwd']."', '".$_INC['env']['encrypt_key']."')
				, adm_name = '".dbEscape($_POST['adm_name'])."'
				, adm_part_seq = '".$_POST['adm_part_seq']."'
				, cj_seq = '".$_POST['cj_seq']."'
				, email = '".$_POST['email']."'
				, confirm_yn = '".$_POST['confirm_yn']."'
				, work_yn = '".$_POST['work_yn']."'
				, regdt = now()
				, moddt = now()
				
				
		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			my_rollback($myconn, $sql);
			return_json('N', '관리자 등록실패');
		}

		$idx = my_insert_id($myconn);
		

		$result = set_admin_member_auth($_POST['dmenu'],$idx);

		if($result['result'] != 'Y') {
			return_json('N', $result['msg']);
		}

		my_commit($myconn);


		$log = dbEscape($_POST['adm_name'])." 사용자 추가";
		log_admin(6, $log);


		return_json('Y');
		break;


	//관리자 수정
	case "admin_member_update" :
		if(empty($_POST['seq'])) close();

		$sql_add= "";
		
		if(!empty($_POST['pwd'])) {
			$sql_add .= ",  adm_pwd = aes_encrypt('".$_POST['pwd']."', '".$_INC['env']['encrypt_key']."') ";
		}
		

		
		my_begin_trans($myconn);

		$sql = "
			update admin_member
			set
				adm_name = '".dbEscape($_POST['adm_name'])."'
				, adm_part_seq = '".$_POST['adm_part_seq']."'
				, cj_seq = '".$_POST['cj_seq']."'
				, email = '".$_POST['email']."'
				, confirm_yn = '".$_POST['confirm_yn']."'
				, work_yn = '".$_POST['work_yn']."'
				, moddt = now()
				{$sql_add}
			where
				adm_seq = '".$_POST['seq']."'
				
				
		";


		

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			my_rollback($myconn, $sql);
			return_json('N', '관리자 수정실패');
		}

		if($_POST['is_change'] == 'Y') {
			$result = set_admin_member_auth($_POST['dmenu'],$_POST['seq'],"update");

			if($result['result'] != 'Y') {
				return_json('N', $result['msg']);
			}
		}

		my_commit($myconn);

		$log = dbEscape($_POST['adm_name'])." 사용자 수정, seq =".$_POST['seq'];
		log_admin(6, $log);


		return_json('Y');
		break;

	//사용자 삭제
	case "admin_member_delete" :
		if(empty($_POST['seq'])) close();
		

		$sql= "
			select count(*) from admin_member
			where
				adm_seq = '".$_POST['seq']."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt == 0 ) {
			return_json('N','해당 사용자를 확인할 수 없습니다.');
		}

		$sql = "
			update admin_member
			set
				use_yn ='N'
			where
				adm_seq = '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '관리자 삭제실패');
		}


		$log = "사용자 삭제, seq =".$_POST['seq'];
		log_admin(6, $log);

		return_json('Y');
		break;


	//사용자 권한 수정
	case "admin_member_confirm" :
		if(empty($_POST['seq'])) close();
		if(empty($_POST['confirm_yn'])) close();

		$sql = "
			update admin_member
			set
				confirm_yn = '".$_POST['confirm_yn']."'
				 
			where
				adm_seq= '".$_POST['seq']."'
		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '관리자 삭제실패');
		}


		$log = "사용자 권한수정, seq =".$_POST['seq'].", 승인 :".$_POST['confirm_yn'];
		log_admin(6, $log);

		return_json('Y');
		break;



	/////////// 국가코드

	//국가코드 등록
	case "code_nation_insert" :
		if(empty($_POST['nat_cd'])) close();
		
		//중복검사
		$sql = "
			select count(*)
			from code_nation
			where
				nat_cd = '".$_POST['nat_cd']."'

		";
		$cnt = my_read($sql, $myconn);
		if($cnt  > 0 ) {
			return_json('N','중복된 국가코드가 존재합니다.');
		}


		$sql = "
			insert into code_nation
			set
				nat_cd = '".$_POST['nat_cd']."',
				area_cd = '".$_POST['area_cd']."',
				nat_nm_kr = '".dbEscape($_POST['nat_nm_kr'])."',
				nat_nm_en = '".dbEscape($_POST['nat_nm_en'])."',
				nat_nm_jp = '".dbEscape($_POST['nat_nm_jp'])."',
				nat_nm_cn = '".dbEscape($_POST['nat_nm_cn'])."',
				curr_cd = '".dbEscape($_POST['curr_cd'])."',
				curr_cd_nm = '".dbEscape($_POST['curr_cd_nm'])."',
				curr_cd2 = '".dbEscape($_POST['curr_cd2'])."',
				curr_cd_nm2 = '".dbEscape($_POST['curr_cd_nm2'])."',
				cd = '".$_POST['cd']."',
				view_yn = '".$_POST['view_yn']."'
				
				
		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','국가코드 저장실패');
		}

		$log = "국가코드 추가 , ".$_POST['nat_cd'];
		log_admin(87, $log);

		return_json('Y');
		break;


	//국가코드 수정
	case "code_nation_update" :
		if(empty($_POST['seq'])) close();
		
		//데이터 존재 검사
		$sql = "
			select *
			from code_nation
			where
				nat_seq = '".$_POST['seq']."'

		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['nat_seq'] )) {
			return_json('N','해당 데이터를 확인할 수 없습니다.');
		}


		$sql = "
			update code_nation
			set
				area_cd = '".$_POST['area_cd']."',
				nat_nm_kr = '".dbEscape($_POST['nat_nm_kr'])."',
				nat_nm_en = '".dbEscape($_POST['nat_nm_en'])."',
				nat_nm_jp = '".dbEscape($_POST['nat_nm_jp'])."',
				nat_nm_cn = '".dbEscape($_POST['nat_nm_cn'])."',
				curr_cd = '".dbEscape($_POST['curr_cd'])."',
				curr_cd_nm = '".dbEscape($_POST['curr_cd_nm'])."',
				curr_cd2 = '".dbEscape($_POST['curr_cd2'])."',
				curr_cd_nm2 = '".dbEscape($_POST['curr_cd_nm2'])."',
				cd = '".$_POST['cd']."',
				view_yn = '".$_POST['view_yn']."'
			where
				nat_seq = '".$_POST['seq']."'
				
		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','국가코드 수정실패');
		}

		$log = "국가코드 수정 , ".$data['nat_cd'];
		log_admin(87, $log);

		return_json('Y');
		break;

	//국가코드 삭제
	case "code_nation_delete" :

		if(empty($_POST['seq'])) close();

		//데이터 존재 검사
		$sql = "
			select *
			from code_nation
			where
				nat_seq = '".$_POST['seq']."'

		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['nat_seq'] )) {
			return_json('N','해당 데이터를 확인할 수 없습니다.');
		}

		$sql = "
			update code_nation
			set
				use_yn ='N'
			where
				nat_seq = '".$_POST['seq']."'

		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '삭제실패');
		}

		$log = "국가코드 삭제 , ".$data['nat_cd'];
		log_admin(87, $log);

		return_json('Y');
		break;
	



	/////////// 지역코드

	//지역코드 등록
	case "code_state_insert" :
		if(empty($_POST['nat_cd'])) close();
		
		//지역코드 생성
		$state_code = make_state_code($_POST['nat_cd']);


		$sql = "
			insert into code_state
			set
				nat_cd = '".$_POST['nat_cd']."',
				state_cd = '".$state_code."',
				state_nm_kr = '".dbEscape($_POST['state_nm_kr'])."',
				state_nm_en = '".dbEscape($_POST['state_nm_en'])."',
				state_nm_jp = '".dbEscape($_POST['state_nm_jp'])."',
				state_gubun = '".$_POST['state_gubun']."',
				view_yn = '".$_POST['view_yn']."'
				
				
		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','지역코드 저장실패');
		}

		$log = "지역코드 추가 , ".$_POST['nat_cd']." : ".dbEscape($_POST['state_nm_kr']);
		log_admin(88, $log);

		return_json('Y');
		break;


	//지역코드 수정
	case "code_state_update" :
		if(empty($_POST['seq'])) close();
		
		//데이터 존재 검사
		$sql = "
			select *
			from code_state
			where
				state_seq = '".$_POST['seq']."'

		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['state_seq'] )) {
			return_json('N','해당 데이터를 확인할 수 없습니다.');
		}


		$sql = "
			update code_state
			set
				state_nm_kr = '".dbEscape($_POST['state_nm_kr'])."',
				state_nm_en = '".dbEscape($_POST['state_nm_en'])."',
				state_nm_jp = '".dbEscape($_POST['state_nm_jp'])."',
				state_gubun = '".$_POST['state_gubun']."',
				view_yn = '".$_POST['view_yn']."'
			where
				state_seq = '".$_POST['seq']."'
				
		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','지역코드 수정실패');
		}

		$log = "지역코드 수정 , ".$data['nat_cd'] ." :". $data['state_nm_kr'];
		log_admin(88, $log);

		return_json('Y');
		break;

	//지역코드 삭제
	case "code_state_delete" :

		if(empty($_POST['seq'])) close();

		//데이터 존재 검사
		$sql = "
			select *
			from code_state
			where
				state_seq = '".$_POST['seq']."'

		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['state_seq'] )) {
			return_json('N','해당 데이터를 확인할 수 없습니다.');
		}

		$sql = "
			update code_state
			set
				use_yn ='N'
			where
				state_seq = '".$_POST['seq']."'

		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '삭제실패');
		}

		$log = "지역코드 삭제 , ".$data['nat_cd']." : ".  $data['state_nm_kr'];
		log_admin(88, $log);

		return_json('Y');
		break;



	//////////////////// 표준도시코드

	//도시코드 생성
	case "make_city_code" :
		if(empty($_POST['nat_cd'])) close();
		
		$city_code = make_city_code($_POST['nat_cd']);

		return_json('Y', $city_code);
		break;
	

	//도시코드 등록
	case "code_city_insert" :
		if(empty($_POST['nat_cd'])) close();
		if(empty($_POST['city_code'])) close();

		$city_code = make_city_code($_POST['nat_cd']);

		$sql = "
			insert into code_city
			set
				nat_cd = '".$_POST['nat_cd']."'
				, city_code = '".$city_code."'
				, city_nm_kr = '".dbEscape($_POST['city_nm_kr'])."'
				, city_nm_en = '".dbEscape($_POST['city_nm_en'])."'
				, city_nm_jp = '".dbEscape($_POST['city_nm_jp'])."'
				, city_nm_cn = '".dbEscape($_POST['city_nm_cn'])."'
				, city_nm_keyword = '".dbEscape($_POST['city_nm_keyword'])."'
				, view_yn = '".$_POST['view_yn']."'
				, regdt = now()
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '등록실패');
		}

		$log = "도시코드 추가 , 국가코드:".$_POST['nat_cd'].", 도시코드 :".$city_code;
		log_admin(97, $log);

		return_json('Y');
		break;


	//도시코드 수정
	case "code_city_update" :
		if(empty($_POST['seq'])) close();

		$sql = "
			select * from code_city
			where
				city_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);

		if(!$data['city_seq']) {
			return_json('N','해당 코드를 찾을 수 없습니다.');
		}
		
		$sql = "
			update code_city
			set
				city_nm_kr = '".dbEscape($_POST['city_nm_kr'])."'
				, city_nm_en = '".dbEscape($_POST['city_nm_en'])."'
				, city_nm_jp = '".dbEscape($_POST['city_nm_jp'])."'
				, city_nm_cn = '".dbEscape($_POST['city_nm_cn'])."'
				, city_nm_keyword = '".dbEscape($_POST['city_nm_keyword'])."'
				, view_yn = '".$_POST['view_yn']."'
			where
				city_seq = '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '수정실패');
		}

		$log = "도시코드 수정 , 국가코드:".$data['nat_cd'].", 도시코드 :".$data['city_code'];
		log_admin(97, $log);

		return_json('Y');
		break;


	//도시코드 삭제
	case "code_city_delete" :
		if(empty($_POST['seq'])) close();

		$sql = "
			select * from code_city
			where
				city_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);

		if(!$data['city_seq']) {
			return_json('N','해당 코드를 찾을 수 없습니다.');
		}

		$sql = "
			update code_city
			set
				use_yn = 'N'
			where
				city_seq = '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '삭제실패');
		}

		$log = "도시코드 삭제 , 국가코드:".$data['nat_cd'].", 도시코드 :".$data['city_code'];
		log_admin(97, $log);

		return_json('Y');
		break;


	
	//////// 공항코드

	// 국가선택시 도시코드 select option
	case "select_city_code" :
		if(empty($_POST['nat_cd'])) close();
		

		$sql = "
			select * from code_city
			where
				nat_cd ='".$_POST['nat_cd']."'
			order by city_nm_kr asc
		";

		$row = my_select($sql, $myconn);
		$row_cnt=my_count($row);
		
		$html = '<option value="">도시코드 선택</option>';
		for($i=0; $i < $row_cnt; $i++) {
			$html .= '<option value="'.$row[$i]['city_code'].'">'.$row[$i]['city_nm_kr'].'('.$row[$i]['city_code'].')</option>';

		}

		return_json('Y', $html);
		break;

	//공항코드 등록
	case "code_airport_insert" :
		if(empty($_POST['nat_cd'])) close();
		if(empty($_POST['city_code'])) close();
		if(empty($_POST['airport_code'])) close();

		$sql = "
			select count(*) from code_airport
			where
				airport_code = '".$_POST['airport_code']."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt > 0 ) {
			return_json('N','중복된 공항코드가 존재합니다.');
		}

		$sql = "
			insert into code_airport
			set
				nat_cd = '".$_POST['nat_cd']."'
				, city_code = '".$_POST['city_code']."'
				, airport_code = '".$_POST['airport_code']."'
				, airport_nm_kr = '".dbEscape($_POST['airport_nm_kr'])."'
				, airport_nm_en = '".dbEscape($_POST['airport_nm_en'])."'
				, airport_nm_jp = '".dbEscape($_POST['airport_nm_jp'])."'
				, airport_nm_cn = '".dbEscape($_POST['airport_nm_cn'])."'
				, airport_nm_keyword = '".dbEscape($_POST['airport_nm_keyword'])."'
				, view_yn = '".$_POST['view_yn']."'
				, regdt = now()
				, moddt = now()
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','공항코드 등록실패');
		}

		$log = "공항코드 등록 , 공항코드:".$_POST['airport_code'];
		log_admin(98, $log);

		return_json('Y');
		break;


	//공항코드 수정
	case "code_airport_update" :
		if(empty($_POST['seq'])) close();
		

		$sql = "
			select * from code_airport
			where
				airp_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(!$data['airp_seq']) {
			return_json('N','해당 데이터를 확인할 수 없습니다.');
		}

		$sql = "
			update code_airport
			set
				airport_nm_kr = '".dbEscape($_POST['airport_nm_kr'])."'
				, airport_nm_en = '".dbEscape($_POST['airport_nm_en'])."'
				, airport_nm_jp = '".dbEscape($_POST['airport_nm_jp'])."'
				, airport_nm_cn = '".dbEscape($_POST['airport_nm_cn'])."'
				, airport_nm_keyword = '".dbEscape($_POST['airport_nm_keyword'])."'
				, view_yn = '".$_POST['view_yn']."'
				, moddt = now()
			where
				airp_seq = '".$_POST['seq']."'
				
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','공항코드 수정실패');
		}

		$log = "공항코드 수정 , 공항코드:".$data['airport_code'];
		log_admin(98, $log);

		return_json('Y');
		break;



	//공항코드 삭제
	case "code_airport_delete" :
		if(empty($_POST['seq'])) close();
		

		$sql = "
			select * from code_airport
			where
				airp_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(!$data['airp_seq']) {
			return_json('N','해당 데이터를 확인할 수 없습니다.');
		}


		$sql = "
			update code_airport
			set
				use_yn = 'N'
			where
				airp_seq = '".$_POST['seq']."'
				
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','공항코드 삭제실패');
		}

		$log = "공항코드 삭제 , 공항코드:".$data['airport_code'];
		log_admin(98, $log);

		return_json('Y');
		break;



	//////// 국가번호 
	//등록
	case "code_phone_insert" :

		if(empty($_POST['nat_cd'])) close();
		if(empty($_POST['phone_code'])) close();

		
		$sql = "
			insert into code_nation_phone
			set
				nat_cd = '".$_POST['nat_cd']."'
				, phone_code = '".$_POST['phone_code']."'
				, view_yn = '".$_POST['view_yn']."'
				, regdt = now()
				, moddt = now()
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','국가번호 등록실패');
		}

		$log = "국가번호 등록 , 국가코드:".$_POST['nat_cd'].", 국가번호 : ".$_POST['phone_code'];
		log_admin(99, $log);

		return_json('Y');
		break;


	//수정
	case "code_phone_update" :

		if(empty($_POST['seq'])) close();

		$sql = "
			select * from code_nation_phone
			where
				np_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(!$data['np_seq']) {
			return_json('N','해당 정보를 찾을 수 없습니다.');
		}
		

		
		$sql = "
			update code_nation_phone
			set
				phone_code = '".$_POST['phone_code']."'
				, view_yn = '".$_POST['view_yn']."'
				, moddt = now()
			where
				np_seq = '".$_POST['seq']."'
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','국가번호 수정실패');
		}


		$logmsg = "";
		if($_POST['phone_code'] != $data['phone_code']) {
			$logmsg .="국가번호 ".$data['phone_code']." -> ". $_POST['phone_code'];
		}

		if($_POST['view_yn'] != $data['view_yn']) {
			if($logmsg) $logmsg .= ",";
			$logmsg .="노출여부 ".$data['view_yn']." -> ". $_POST['view_yn'];
		}

		$log = "국가번호 수정 - ".$logmsg;
		log_admin(99, $log);

		return_json('Y');
		break;


	//삭제
	case "code_phone_delete" :

		if(empty($_POST['seq'])) close();

		$sql = "
			select * from code_nation_phone
			where
				np_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(!$data['np_seq']) {
			return_json('N','해당 정보를 찾을 수 없습니다.');
		}
		

		
		$sql = "
			update code_nation_phone
			set
				use_yn = 'N'
			where
				np_seq = '".$_POST['seq']."'
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','국가번호 삭제실패');
		}


		$logmsg = "";
		
		$logmsg .= $data['phone_code'];
		

		

		$log = "국가번호 삭제 - ".$logmsg;
		log_admin(99, $log);

		return_json('Y');
		break;


	//////// 국가령 관리 
	//등록
	case "code_colony_insert" :

		if(empty($_POST['col_name'])) close();

		$sql = "
			select count(*) from code_colony
			where
				col_name = '".dbEscape($_POST['col_name'])."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt  > 0 ) {
			return_json('N','중복된 국가령 이름이 존재합니다.');
		}


		
		$sql = "
			insert into code_colony
			set
				col_name = '".dbEscape($_POST['col_name'])."'
				, view_yn = '".$_POST['view_yn']."'
				, regdt = now()
				, moddt = now()
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','국가령 등록실패');
		}

		$idx = my_insert_id($myconn);

		$log = "국가령 등록 , 국가령:".dbEscape($_POST['col_name']);
		log_admin(100, $log);

		return_json('Y', $idx);
		break;


	//수정
	case "code_colony_update" :

		if(empty($_POST['seq'])) close();

		$sql = "
			select * from code_colony
			where
				col_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(!$data['col_seq']) {
			return_json('N','해당 정보를 찾을 수 없습니다.');
		}

		$sql = "
			select count(*) from code_colony
			where
				col_name = '".dbEscape($_POST['col_name'])."'
				and col_seq <> '".$_POST['seq']."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt  > 0 ) {
			return_json('N','중복된 국가령 이름이 존재합니다.');
		}
		

		
		$sql = "
			update code_colony
			set
				col_name = '".$_POST['col_name']."'
				, view_yn = '".$_POST['view_yn']."'
				, moddt = now()
			where
				col_seq = '".$_POST['seq']."'
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','국가령 수정실패');
		}




		$logmsg = "";
		if(dbEscape($_POST['col_name']) != $data['col_name']) {
			$logmsg .="국가령 이름 ".$data['col_name']." -> ". dbEscape($_POST['col_name']);
		}

		if($_POST['view_yn'] != $data['view_yn']) {
			if($logmsg) $logmsg .= ",";
			$logmsg .="노출여부 ".$data['view_yn']." -> ". $_POST['view_yn'];
		}
		
		if($logmsg) {
			$log = "국가령 수정 - ".$logmsg;
			log_admin(100, $log);
		}

		return_json('Y');
		break;


	//삭제
	case "code_colony_delete" :

		if(empty($_POST['seq'])) close();

		$sql = "
			select * from code_colony
			where
				col_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(!$data['col_seq']) {
			return_json('N','해당 정보를 찾을 수 없습니다.');
		}

		
		my_begin_trans($myconn);
		
		$sql = "
			update code_colony
			set
				use_yn = 'N'
			where
				col_seq = '".$_POST['seq']."'
				
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			my_rollback($myconn, $sql);
			return_json('N','국가령 삭제실패');
		}

		$sql = "
			update code_nation
			set
				col_seq = 0
			where
				col_seq= '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			my_rollback($myconn, $sql);
			return_json('N','국가령 국가연결 삭제실패');
		}




		my_commit($myconn);
		$logmsg = "";
		
		$logmsg .= $data['col_name'];
		

		

		$log = "국가령 삭제 - ".$logmsg;
		log_admin(100, $log);

		return_json('Y');
		break;

	//국가령에 국가 등록
	case "set_colony_nation" :
		if(empty($_POST['seq'])) close();
		if(empty($_POST['nation_name'])) close();

		$sql = "
			select * from code_colony
			where
				col_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(!$data['col_seq']) {
			return_json('N','해당 국가령 정보를 찾을 수 없습니다.');
		}


		
		$temp = explode("(", $_POST['nation_name']);

		//국가명 검색
		$sql = "
			select * from code_nation 
			where
				nat_cd = '".$temp[0]."'
		";
		$nation = my_select_one($sql, $myconn);
		if(!$nation['nat_cd']) {
			return_json('N', '매칭되는 국가가 없습니다.');
		}
		

		//이미 추가된 경우
		if($nation['col_seq'] == $_POST['seq']) {
			return_json('N','이미 추가된 국가입니다.');
		}

		$sql = "
			update code_nation
			set
				col_seq = '".$_POST['seq']."'
			where
				nat_seq = '".$nation['nat_seq']."'
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '국가 추가 실패');
		}


		$log = "국가령 ".$data['col_name']."에 국가추가 - ".$nation['nat_cd'];
		log_admin(100, $log);

		


		$return_value = $nation['nat_seq'].'|'.$nation['nat_cd']."|".$nation['nat_nm_kr'];

		return_json('Y', $return_value);
		

		break;


	//국가령에서 국가 삭제
	case "delete_colony_nation" :
		if(empty($_POST['seq'])) close();
		if(empty($_POST['nat_seq'])) close();

		$sql = "
			select * from code_colony
			where
				col_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(!$data['col_seq']) {
			return_json('N','해당 국가령 정보를 찾을 수 없습니다.');
		}

		//국가명 검색
		$sql = "
			select * from code_nation 
			where
				nat_seq = '".$_POST['nat_seq']."'
		";
		$nation = my_select_one($sql, $myconn);
		if(!$nation['nat_cd']) {
			return_json('N', '매칭되는 국가가 없습니다.');
		}
		

		

		$sql = "
			update code_nation
			set
				col_seq = '0'
			where
				nat_seq = '".$nation['nat_seq']."'
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N', '국가 삭제 실패');
		}


		$log = "국가령 ".$data['col_name']."에 국가 삭제 - ".$nation['nat_cd'];
		log_admin(100, $log);

		
		return_json('Y');
		break;




	////////////////////// skin_default 

	case "form_code_nation" :
		if(empty($_POST['seq'])) {
			$editmode = "code_nation_insert";

			$data = array(
				'nat_cd'	=> '',
				'cd'		=> '',
				'nat_nm_kr'	=> '',
				'nat_nm_en'	=> '',
				'nat_nm_jp'	=> '',
				'nat_nm_cn'	=> '',
			);

		}
		else {
			$editmode = "code_nation_update";

			$sql = "
				select * from code_nation
				where
					nat_seq = '".$_POST['seq']."'
			";
			$data = my_select_one($sql, $myconn);
		}

		

		//대륙 가져오기
		$sql = "
			select
				cd as value
				, cd_name as name
			from code_continent
			
			order by cd_name asc
		";
		$ct = my_select($sql, $myconn);

		//노선가져오기
		$sql = "
			select
				area_cd as value
				, area_nm as name
			from code_area
			order by area_nm asc
		";
		$area = my_select($sql, $myconn);



		$html = '
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">국가코드 등록</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form name="popform" id="popform">
							<input type="hidden" name="mode" id="popmode" value="'.$editmode.'" >
						<div class="form-group">
							<label for="nat_cd" class="col-form-label">
								국가코드 
								<span class="text-danger">*</span>
							</label>
							<input type="text" class="form-control engOnly upper" name="nat_cd" id="nat_cd" value="'.$data['nat_cd'].'" autocomplete="off" maxlength=2>
							<small class="text-danger bc-description" id="txt_nat_cd">* ISO 2코드 영문2자리. 중복된 코드 등록불가</small>
						</div>
						<div class="form-group">
							<label for="cd" class="col-form-label">
								대륙
								<span class="text-danger">*</span>
							</label>
							<select name="cd" id="cd" class="custom-select"  >
								<option value="">-- 선택 --</option>
								'.selectOption($ct, $data['cd'], 'db').'
							</select>
							<small class="text-danger bc-description" id="txt_cd"></small>
						</div>
						<div class="form-group">
							<label for="nat_nm_kr" class="col-form-label">
								국가명 한글
								<span class="text-danger">*</span>
							</label>
							<input type="text" class="form-control engOnly upper" name="nat_nm_kr" id="nat_nm_kr" value="'.dbUnEscape($data['nat_nm_kr']).'" autocomplete="off" maxlength=2>
							<small class="text-danger bc-description" id="txt_nat_nm_kr"></small>
						</div>
						<div class="form-group">
							<label for="nat_nm_en" class="col-form-label">
								국가명 영문
								
							</label>
							<input type="text" class="form-control engOnly upper" name="nat_nm_en" id="nat_nm_en" value="'.dbUnEscape($data['nat_nm_en']).'" autocomplete="off" maxlength=2>
							<small class="text-danger bc-description" id="nat_nm_en"></small>
						</div>
						<div class="form-group">
							<label for="nat_nm_jp" class="col-form-label">
								국가명 일본어
								
							</label>
							<input type="text" class="form-control engOnly upper" name="nat_nm_jp" id="nat_nm_kr" value="'.dbUnEscape($data['nat_nm_jp']).'" autocomplete="off" maxlength=2>
							<small class="text-danger bc-description" id="txt_nat_nm_jp"></small>
						</div>
						<div class="form-group">
							<label for="nat_nm_cn" class="col-form-label">
								국가명 중국어
								
							</label>
							<input type="text" class="form-control engOnly upper" name="nat_nm_cn" id="nat_nm_cn" value="'.dbUnEscape($data['nat_nm_cn']).'" autocomplete="off" maxlength=2>
							<small class="text-danger bc-description" id="txt_nat_nm_cn"></small>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" onclick="code_nation_save()">저장</button>
						<button type="button" class="btn btn-danger">삭제</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
						
						
					</div>
					</form>
				</div>
			</div>
		';

		return_json('Y', $html);
		break;
	


	/////// 메뉴별 관리코드

	case "code_menu_list" :
		if(empty($_POST['seq'])) close();

		$sql = "
			select * from code_menu 
			where cmenu_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['cmenu_seq'])) {
			return_json('N','해당 메뉴정보를 찾을 수 없습니다.');
		}


		//대메뉴 선택시 소메뉴 정보 가져옴
		if($data['depth'] == '1') {
			$sort_gubun = "1";
			$sort_class = "sortable";
			$target = "smenu_area";
			$title = $data['cname']." > 카테고리";

			$sql = "
				select * from code_menu
				where
					ccode like '".substr($data['ccode'],0,1)."%'
					and depth ='2'
				order by order_no asc
			";
			
		}
		//소메뉴 선택시 상세메뉴 정보 가져옴
		else if($data['depth'] == '2') {
			$sort_gubun = "2";
			$sort_class = "sortable2";
			$target = "dmenu_area";
			$title = $data['cname']." > 코드";


			$sql = "
				select * from code_menu
				where
					ccode like '".substr($data['ccode'],0,3)."%'
					and depth ='3'
				order by order_no asc
			";
		}

		//상세메뉴시 가져옴
		else {
			$sort_gubun = "2";
			$sort_class = "sortable2";
			$target = "dmenu_area";
			$title = $data['cname']." > 코드";


			$sql = "
				select * from code_menu
				where
					ccode like '".substr($data['ccode'],0,3)."%'
					and depth ='3'
				order by order_no asc
			";
		}

		$row = my_select($sql, $myconn);
		$row_cnt = my_count($row);

		$html = '
			<table class="SYManagerTable01 '.$sort_class.'">
				<tr class="Title">
					<td style="width:75px;">순서</td>
					<td >'.$title.'</td>

					<td style="width:70px;"><input type="button" class="SYButtonType03" value="등록" onclick="code_menu_add('.$_POST['seq'].')" ></td>
					<td style="width:70px;"><input type="button" class="SYButtonType04 bgRed" value="순서저장" onclick="code_reorder('.$sort_gubun.', '.$_POST['seq'].')" ></td>
					
					
					
				</tr>
				<tbody>
		';

		if($row_cnt == 0) {
			$html .= '<tr><td colspan=10 class="ce">-+- 검색된 내용이 없습니다. -+-</td></tr>';
		}
		else {
			for($i=0; $i < $row_cnt; $i++) {

				$html .= '
					<tr >	
						<td  class="ce">
							<input type="hidden" name="sort1[]" value="'.$row[$i]['cmenu_seq'].'" />
							<input type="button" class="buttonOrderUp" value="" title="위로"  onclick="moveUp(this)"> 
							<input type="button" class="buttonOrderDown" value="" title="아래로"  onclick="moveDown(this)"> 
						</td>
						<td  class="ce">'.$row[$i]['cname'].'</td>

				';
				

				

				$html .= '
						<td  class="ce">
							<input type="button" class="SYButtonType03" value="수정" onclick="code_menu_mod('.$row[$i]['cmenu_seq'].')" >
						</td>
						
						
					
				';

				//카테고리선택시
				if($data['depth'] == '1') {

					$html .= '
							<td  class="ce">
								<input type="button" class="SYButtonType03" value="등록" onclick="code_menu_list('.$row[$i]['cmenu_seq'].')" >
							</td>
					';
				}
				else {
					
					$html .= '
							<td  class="ce">
								<input type="button" class="SYButtonType03" value="삭제" onclick="code_menu_delete('.$row[$i]['cmenu_seq'].')" >
							</td>
					';
				}

				$html .= '</tr>';


				
			}
		}
		
		$html .= '
				</tbody>
			</table>
		';

		return_json('Y', $html, $target);
		break;

	

	// 메뉴등록 폼
	case "form_code_menu_add" :
		if(empty($_POST['seq'])) close();
		if(!empty($_POST['subseq'])) {
			$submode = "code_menu_update";
		}
		else {
			$submode = "code_menu_insert";
		}

		$sql = "
			select * from code_menu 
			where cmenu_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['cmenu_seq'])) {
			return_json('N','해당 메뉴정보를 찾을 수 없습니다.');
		}

		$sdata = array(
			'cname'	=> '',
			'view_yn'	=> 'Y',
		);
		

		//대메뉴에 소메뉴 추가시
		if($data['depth'] == '1') {
			$target = "smenu_area";
			
			$title = $data['cname']." > 카테고리";
			$code_title = '카테고리명';




			if($submode =="code_menu_insert" ) {
				$title .= " 등록";
			}
			else {
				$title .= " 수정";
			}
			

			
			
		}
		//소메뉴 선택시 상세메뉴 정보 가져옴
		else if($data['depth'] == '2') {

			$target = "dmenu_area";

			$title = $data['cname']." > 코드";
			$code_title = '코드명';

			
		}




		$html = '
			<form name="popForm" id="popForm">
			<input type="hidden" name="seq" id="popseq" value="'.$_POST['seq'].'">
			<input type="hidden" name="mode" id="popmode" value="'.$submode.'">
			<input type="hidden" name="target" id="poptarget" value="'.$target.'">
			
			<div id="SYTopTitle" class="txtTitle" >'.$title.'</div>
				<div id="SYPopupContent">
					<div id="SYMainContent" >

						
						<table class="SYWirteTableMini">
							<colgroup>
								<col style="width:25%">
								<col  >
								
							</colgroup>
							<tr>
								<td class="Title" >
									'.$code_title.'
								</td>
								<td class="Content" >
									 <input type="text" name="cname" id="cname" class="SYInputStyle02" style="width:150px;" value="'.dbUnEscape($sdata['cname']).'" placeholder="코드명" autocomplete="off" onkeypress="if(event.keyCode==13) { code_menu_save(); return false; }">
								</td>
							</tr>
							
							<tr>
								<td class="Title" >
									노출여부
								</td>
								<td class="Content" colspan=3>
									<select name="view_yn" id="view_yn" class="SYSelectBox01" >
										<option value="Y" '.($sdata['view_yn'] == "Y" ? "selected":"").'>사용</option>
										<option value="N" '.($sdata['view_yn'] == "N" ? "selected":"").'>미사용</option>
									</select>
								</td>
							</tr>
							
							
						</table>


						<div class="SYButtonArea">
							<input type="button" class="SYButtonWrite02" value="저장" onclick="code_menu_save()">
							<input type="button" class="SYButtonCancel02" value="닫기" onclick="viewLayer(\'off\',\'popCommon\')">
						</div>

					</div>
				</div>
			</div>
			</form>
		';

		return_json('Y',$html);
		break;
	


	// 메뉴수정 폼
	case "form_code_menu_mod" :
		if(empty($_POST['seq'])) close();
		
		$submode = "code_menu_update";
		

		$sql = "
			select * from code_menu 
			where cmenu_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['cmenu_seq'])) {
			return_json('N','해당 메뉴정보를 찾을 수 없습니다.');
		}

		$sdata = array(
			'cname'	=> '',
			'view_yn'	=> 'Y',
		);
		

		//대메뉴에 소메뉴 추가시
		if($data['depth'] == '2') {
			$target = "smenu_area";
			
			$title = $data['cname']." > 카테고리 수정";
			$code_title = '카테고리명';

			

			
			
		}
		//소메뉴 선택시 상세메뉴 정보 가져옴
		else if($data['depth'] == '3') {

			$target = "dmenu_area";

			$title = $data['cname']." > 코드 수정";
			$code_title = '코드명';

			
		}




		$html = '
			<form name="popForm" id="popForm">
			<input type="hidden" name="seq" id="popseq" value="'.$_POST['seq'].'">
			<input type="hidden" name="mode" id="popmode" value="'.$submode.'">
			<input type="hidden" name="target" id="poptarget" value="'.$target.'">
			
			<div id="SYTopTitle" class="txtTitle" >'.$title.'</div>
				<div id="SYPopupContent">
					<div id="SYMainContent" >

						
						<table class="SYWirteTableMini">
							<colgroup>
								<col style="width:25%">
								<col  >
								
							</colgroup>
							<tr>
								<td class="Title" >
									'.$code_title.'
								</td>
								<td class="Content" >
									 <input type="text" name="cname" id="cname" class="SYInputStyle02" style="width:150px;" value="'.dbUnEscape($data['cname']).'" placeholder="코드명" autocomplete="off" onkeypress="if(event.keyCode==13) {code_menu_save(); return false;}">
								</td>
							</tr>
							
							<tr>
								<td class="Title" >
									노출여부
								</td>
								<td class="Content" colspan=3>
									<select name="view_yn" id="view_yn" class="SYSelectBox01" >
										<option value="Y" '.($data['view_yn'] == "Y" ? "selected":"").'>사용</option>
										<option value="N" '.($data['view_yn'] == "N" ? "selected":"").'>미사용</option>
									</select>
								</td>
							</tr>
							
							
						</table>


						<div class="SYButtonArea">
							<input type="button" class="SYButtonWrite02" value="저장" onclick="code_menu_save()">
							<input type="button" class="SYButtonCancel02" value="닫기" onclick="viewLayer(\'off\',\'popCommon\')">
						</div>

					</div>
				</div>
			</div>
			</form>
		';

		return_json('Y',$html);
		break;
	
	// 메뉴별 관리코드 등록
	case "code_menu_insert" :

		if(empty($_POST['seq'])) close();
		if(empty($_POST['target'])) close();
		if(empty($_POST['cname'])) close();
		


		$result = make_code_menu($_POST['seq']);

		//print_r($result);

		if($result['result'] != 'Y') {
			return_json('N',$result['msg']);
		}

		

		$sql = "
			insert into code_menu
			set
				mg_seq = '".$result['msg']['mg_seq']."'
				, depth = '".$result['msg']['depth']."'
				, ccode = '".$result['msg']['ccode']."'
				, cname = '".dbEscape($_POST['cname'])."'
				, view_yn = '".$_POST['view_yn']."'
				, adm_seq = '".$_SESSION['admin_seq']."'
				
		";
		//echo $sql;

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','등록실패');
		}
		

		//작업로그 저장
		switch($result['msg']['depth']) {
			case "2" :
				$log = " 카테고리 : ".dbEscape($_POST['cname'])." 추가";
				break;

			case "3" :
				$log = " 코드 : ".dbEscape($_POST['cname'])." 추가";
				break;
			
		}

		
		log_admin(89, $log);


		return_json('Y','');
		break;



	// 메뉴별 관리코드 등록
	case "code_menu_update" :
		

		if(empty($_POST['seq'])) close();
		if(empty($_POST['target'])) close();
		if(empty($_POST['cname'])) close();

		
		
		$sql = "
			select * from code_menu
			where
				cmenu_seq = '".$_POST['seq']."'
		";

		$data = my_select_one($sql, $myconn);
		if(empty($data['cmenu_seq'])) {
			return_json('N','해당 데이터를 확인할 수 없습니다.');
		}
		

		$sql = "
			update code_menu
			set
				cname = '".dbEscape($_POST['cname'])."'
				, view_yn = '".$_POST['view_yn']."'
				, adm_seq = '".$_SESSION['admin_seq']."'
			where
				cmenu_seq = '".$_POST['seq']."'
				
		";
		//echo $sql;

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','수정실패');
		}
		

		//작업로그 저장
		switch($data['depth']) {
			case "2" :
				$log = " 카테고리 : ".dbEscape($_POST['cname'])." 수정";
				break;

			case "3" :
				$log = " 코드 : ".dbEscape($_POST['cname'])." 수정";
				break;
			
		}

		
		log_admin(89, $log);

		$parent['cmenu_seq'] = '';
		if($data['depth'] == '2') {
			$sql = "
				select * from code_menu
				where
					depth='1'
					and ccode like '".substr($data['ccode'],0,1)."%'

			";

			$parent = my_select_one($sql, $myconn);
		}


		return_json('Y', $parent['cmenu_seq']);
		break;

	// 메뉴별 코드 삭제
	case "code_menu_delete" :

		if(empty($_POST['seq'])) close();
		//if(empty($_POST['target'])) close();
		//if(empty($_POST['cname'])) close();

		
		
		$sql = "
			select * from code_menu
			where
				cmenu_seq = '".$_POST['seq']."'
		";

		$data = my_select_one($sql, $myconn);
		if(empty($data['cmenu_seq'])) {
			return_json('N','해당 데이터를 확인할 수 없습니다.');
		}

		$sql = "
			update code_menu
			set
				use_yn ='N'
				, view_yn ='N'
			where
				cmenu_seq = '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','삭제 실패');
		}



		//작업로그 저장
		switch($data['depth']) {
			case "2" :
				$log = " 카테고리 : ".dbEscape($data['cname'])." 삭제";
				break;

			case "3" :
				$log = " 코드 : ".dbEscape($data['cname'])." 삭제";
				break;
			
		}

		
		log_admin(89, $log);



		$parent['cmenu_seq'] = '';
		if($data['depth'] == '3') {
			$sql = "
				select * from code_menu
				where
					depth='2'
					and ccode like '".substr($data['ccode'],0,3)."%'

			";

			$parent = my_select_one($sql, $myconn);
		}

		return_json('Y', $parent['cmenu_seq']);

		

		break;

	

	/// 순서 저장
	case "code_menu_reorder" :

		if(empty($_POST['seq'])) close();
		

		my_begin_trans($myconn);
		for($i=0; $i < my_count($_POST['sort1']); $i++) {
			$sql = "
				update code_menu
				set
					order_no = '".($i+1)."'
				where
					cmenu_seq = '".$_POST['sort1'][$i]."'
			";
			$rt = my_query($sql, $myconn);
			if(!$rt) {
				my_rollback($myconn, $sql);
				return_json('N','순서 저장실패');
			}
		}
		my_commit($myconn);

		return_json('Y');
		break;


	////////////// 호텔코드 관리
	

	//호텔 등록
	case "code_hotel_insert" :
		if(empty($_POST['nat_cd'])) close();

		

		


		//국가코드 확인
		

		$sql = "
			select * from code_nation
			where
				nat_cd = '".$_POST['nat_cd']."'
		";
		$nation = my_select_one($sql, $myconn);
		if(!$nation['nat_cd']) {
			return_json('N','국가코드를 확인할 수 없습니다.');
		}

		$sql_add = "";

		if(empty($_POST['state_cd'])) $_POST['state_cd'] ="";

		if(!empty($_POST['state_cd'])) {
			$sql= "
				select count(*)
				from code_state
				where
					nat_cd = '".$_POST['nat_cd']."'
					and state_cd = '".$_POST['state_cd']."'
			";
			$cnt = my_read($sql, $myconn);

			if($cnt == 0 ) {
				return_json('N','지역코드를 확인할 수 없습니다.');
			}
		}

		if(!empty($_POST['city_code'])) {
			$sql= "
				select count(*)
				from code_city
				where
					nat_cd = '".$_POST['nat_cd']."'
					and city_code = '".$_POST['city_code']."'
			";
			$cnt = my_read($sql, $myconn);

			if($cnt == 0 ) {
				return_json('N','도시코드를 확인할 수 없습니다.');
			}
		}


		if(!empty($_POST['airport_code'])) {
			$sql= "
				select count(*)
				from code_airport
				where
					nat_cd = '".$_POST['nat_cd']."'
					and airport_code = '".$_POST['airport_code']."'
			";
			$cnt = my_read($sql, $myconn);

			if($cnt == 0 ) {
				return_json('N','공항코드를 확인할 수 없습니다.');
			}
		}


		if(empty($_POST['state_cd'])) $_POST['state_cd'] ="";
		if(empty($_POST['city_code'])) $_POST['city_code'] ="";
		if(empty($_POST['airport_code'])) $_POST['airport_code'] ="";


		if($_POST['phone_tail']) {

			$sql = "
				select * from code_nation_phone
				where
					np_seq = '".$_POST['phone_head']."'
			";
			$np = my_select_one($sql, $myconn);
			if(empty($np['np_seq'])) {
				return_json('N','전화번호의 국가번호 코드를 확인할 수 없습니다.');
			}
			$phone = "+".$np['phone_code']." ".trim($_POST['phone_tail']);
		}
		else {
			$phone = "";
		}


		if($_POST['fax_tail']) {

			$sql = "
				select * from code_nation_phone
				where
					np_seq = '".$_POST['phone_head']."'
			";
			$np = my_select_one($sql, $myconn);
			if(empty($np['np_seq'])) {
				return_json('N','fax의 국가번호 코드를 확인할 수 없습니다.');
			}

			$fax = "+".$np['phone_code']." ".trim($_POST['fax_tail']);
		}
		else {
			$fax = "";
		}


		$hotel_code = make_code_hotel($_POST['nat_cd']);

		if(empty($_POST['use_yn'])) $_POST['use_yn'] = 'N';
		if(empty($_POST['view_yn'])) $_POST['view_yn'] = 'N';




		$sql = "
			insert into code_hotel
			set
				hotel_code = '".$hotel_code."'
				, nat_cd = '".$_POST['nat_cd']."'
				, state_cd = '".$_POST['state_cd']."'
				, city_code = '".$_POST['city_code']."'
				, airport_code = '".$_POST['airport_code']."'
				, dist_airport = '".dbEscape($_POST['dist_airport'])."'
				, min_airport = '".dbEscape($_POST['min_airport'])."'
				, grade = '".$_POST['grade']."'
				, phone = '".$phone."'
				, fax = '".$fax."'
				, email = '".$_POST['email']."'
				, website = '".dbEscape($_POST['website'])."'
				, lat = '".$_POST['lat']."'
				, lng = '".$_POST['lng']."'
				, hotel_nm = '".dbEscape($_POST['hotel_nm'])."'
				, hotel_nm_en = '".dbEscape($_POST['hotel_nm_en'])."'
				, hotel_nm_jp = '".dbEscape($_POST['hotel_nm_jp'])."'

				, intro = '".dbEscape($_POST['intro'])."'
				, intro_en = '".dbEscape($_POST['intro_en'])."'
				, intro_jp = '".dbEscape($_POST['intro_jp'])."'

				, traffic = '".dbEscape($_POST['traffic'])."'
				, traffic_en = '".dbEscape($_POST['traffic_en'])."'
				, traffic_jp = '".dbEscape($_POST['traffic_jp'])."'

				, info = '".dbEscape($_POST['info'])."'
				, info_en = '".dbEscape($_POST['info_en'])."'
				, info_jp = '".dbEscape($_POST['info_jp'])."'

				, use_yn = '".$_POST['use_yn']."'
				, view_yn = '".$_POST['view_yn']."'
				, regdt = now()
				, moddt = now()
				, adm_seq = '".$_SESSION['admin_seq']."'
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','등록실패');
		}

		$log = "호텔등록 - ".dbEscape($_POST['hotel_nm']);
		log_admin(105, $log);

		return_json('Y');
		break;
	



	//호텔 수정
	case "code_hotel_update" :
		if(empty($_POST['seq'])) close();

		
		$sql = "
			select * from code_hotel
			where
				hotel_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['hotel_seq'])) {
			return_json('N','호텔정보 확인불가');
		}

		


		if(empty($_POST['state_cd'])) $_POST['state_cd'] ="";

		if(!empty($_POST['state_cd'])) {
			$sql= "
				select count(*)
				from code_state
				where
					nat_cd = '".$_POST['nat_cd']."'
					and state_cd = '".$_POST['state_cd']."'
			";
			$cnt = my_read($sql, $myconn);

			if($cnt == 0 ) {
				return_json('N','지역코드를 확인할 수 없습니다.');
			}
		}

		if(!empty($_POST['city_code'])) {
			$sql= "
				select count(*)
				from code_city
				where
					nat_cd = '".$_POST['nat_cd']."'
					and city_code = '".$_POST['city_code']."'
			";
			$cnt = my_read($sql, $myconn);

			if($cnt == 0 ) {
				return_json('N','도시코드를 확인할 수 없습니다.');
			}
		}


		if(!empty($_POST['airport_code'])) {
			$sql= "
				select count(*)
				from code_airport
				where
					nat_cd = '".$_POST['nat_cd']."'
					and airport_code = '".$_POST['airport_code']."'
			";
			$cnt = my_read($sql, $myconn);

			if($cnt == 0 ) {
				return_json('N','공항코드를 확인할 수 없습니다.');
			}
		}


		if(empty($_POST['state_cd'])) $_POST['state_cd'] ="";
		if(empty($_POST['city_code'])) $_POST['city_code'] ="";
		if(empty($_POST['airport_code'])) $_POST['airport_code'] ="";


		if($_POST['phone_tail']) {

			$sql = "
				select * from code_nation_phone
				where
					np_seq = '".$_POST['phone_head']."'
			";
			$np = my_select_one($sql, $myconn);
			if(empty($np['np_seq'])) {
				return_json('N','전화번호의 국가번호 코드를 확인할 수 없습니다.');
			}
			$phone = "+".$np['phone_code']." ".trim($_POST['phone_tail']);
		}
		else {
			$phone = "";
		}


		if($_POST['fax_tail']) {

			$sql = "
				select * from code_nation_phone
				where
					np_seq = '".$_POST['phone_head']."'
			";
			$np = my_select_one($sql, $myconn);
			if(empty($np['np_seq'])) {
				return_json('N','fax의 국가번호 코드를 확인할 수 없습니다.');
			}

			$fax = "+".$np['phone_code']." ".trim($_POST['fax_tail']);
		}
		else {
			$fax = "";
		}


		$hotel_code = make_code_hotel($_POST['nat_cd']);

		if(empty($_POST['use_yn'])) $_POST['use_yn'] = 'N';
		if(empty($_POST['view_yn'])) $_POST['view_yn'] = 'N';




		$sql = "
			update code_hotel
			set
				state_cd = '".$_POST['state_cd']."'
				, city_code = '".$_POST['city_code']."'
				, airport_code = '".$_POST['airport_code']."'
				, dist_airport = '".dbEscape($_POST['dist_airport'])."'
				, min_airport = '".dbEscape($_POST['min_airport'])."'
				, grade = '".$_POST['grade']."'
				, phone = '".$phone."'
				, fax = '".$fax."'
				, email = '".$_POST['email']."'
				, website = '".dbEscape($_POST['website'])."'
				, lat = '".$_POST['lat']."'
				, lng = '".$_POST['lng']."'
				, hotel_nm = '".dbEscape($_POST['hotel_nm'])."'
				, hotel_nm_en = '".dbEscape($_POST['hotel_nm_en'])."'
				, hotel_nm_jp = '".dbEscape($_POST['hotel_nm_jp'])."'

				, intro = '".dbEscape($_POST['intro'])."'
				, intro_en = '".dbEscape($_POST['intro_en'])."'
				, intro_jp = '".dbEscape($_POST['intro_jp'])."'

				, traffic = '".dbEscape($_POST['traffic'])."'
				, traffic_en = '".dbEscape($_POST['traffic_en'])."'
				, traffic_jp = '".dbEscape($_POST['traffic_jp'])."'

				, info = '".dbEscape($_POST['info'])."'
				, info_en = '".dbEscape($_POST['info_en'])."'
				, info_jp = '".dbEscape($_POST['info_jp'])."'

				, use_yn = '".$_POST['use_yn']."'
				, view_yn = '".$_POST['view_yn']."'
				, moddt = now()
				, adm_seq = '".$_SESSION['admin_seq']."'
			where
				hotel_seq = '".$_POST['seq']."'
				
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','수정실패');
		}

		$log = "호텔수정 - ".dbEscape($data['hotel_nm']);
		log_admin(105, $log);

		return_json('Y');
		break;


	//호텔 삭제
	case "code_hotel_delete" :
		if(empty($_POST['seq'])) close();

		
		$sql = "
			select * from code_hotel
			where
				hotel_seq = '".$_POST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		if(empty($data['hotel_seq'])) {
			return_json('N','호텔정보 확인불가');
		}


		$sql = "
			update code_hotel
			set
				use_yn='N'
				, moddt = now()
				, adm_seq = '".$_SESSION['admin_seq']."'
			where
				hotel_seq = '".$_POST['seq']."'
		";
		$rt = my_query($sql, $myconn);
		if(!$rt) {
			return_json('N','삭제실패');
		}

		$log = "호텔삭제 - ".dbEscape($data['hotel_nm']);
		log_admin(105, $log);

		return_json('Y');
		break;



		
}
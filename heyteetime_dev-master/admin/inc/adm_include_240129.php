<?php
/** ---------------------------------------------------------------
@program : 서비스 인클루드
@description : 서비스에 필요한 라이브러리 인클루드
@fileinfo : /inc/adm_include.php
@filedescription : include

@auth : 현민원
@since : 2024.01
	
------------------------------------------------------------------**/


include_once $_SERVER['DOCUMENT_ROOT']."/inc/setup.php";
include_once $_SERVER['DOCUMENT_ROOT']."/tpl/Template.class.php";



if(empty($_NO_LOGIN)) $_NO_LOGIN = false;
if(empty($_SESSION['adm_skin'])) $_SESSION['adm_skin'] = "skin_ko";
if(empty($_SESSION['admin_id'])) $_SESSION['admin_id'] = "";


$_SESSION['adm_skin'] = "skin_ko";

//허용된 아이피만 접근가능하다.
if(!in_array($_SERVER['REMOTE_ADDR'], $_INC['admin_ip']) ) {
	exit;

}



if($_NO_LOGIN == true) {
	if($_SESSION['admin_id']) {
		if($_SERVER['SCRIPT_NAME'] == '/login.html') {
			header("Location:/");
			exit;
		}
	}

	
}
else {
	if(!$_SESSION['admin_id']) {
		if($_SERVER['SCRIPT_NAME'] != '/login.html') {
			header("Location:/login.html");
			exit;
		}
	}
	
	session_regenerate_id();

	

	//print_r($member_view);


	$html = '';

	////메뉴 가져오기

	if(in_array($_SESSION['admin_id'], $_INC['super_id'])) {
	
		//대메뉴
		$sql = "
			select 
				*,
				case mg_seq 
					when 1 then 'fas fa-desktop'
					when 2 then 'fa fa-user'
					when 3 then 'fa fa-briefcase'
					when 4 then 'fa fa-key'
					when 5 then 'fa fa-dollar'
					when 6 then 'fa fa-gear'
				else 'fa fa-calendar-o'
				end as icon
			from menu_gnb
			where
				view_yn = 'Y'
			order by order_no asc
		";
		$_gnb = my_select($sql, $myconn);

		if($_SESSION['adm_skin'] == "skin_default" ) {
			$_gnb_cnt = my_count($_gnb);

		}

		for($k=0; $k < $_gnb_cnt; $k++) {

			$html .= '
				<li class="parent">
					<a href="#" onclick="toggle_menu(\'gnbmenu_'.$_gnb[$k]['mg_seq'].'\'); return false" class=""><i class="'.$_gnb[$k]['icon'].' mr-3"> </i>
						<span class="none">'.$_gnb[$k]['mg_title'].' <i class="fa fa-angle-down pull-right align-bottom"></i></span>
					</a>

					<ul class="children" id="gnbmenu_'.$_gnb[$k]['mg_seq'].'">
			';



			//소메뉴
			$sql = "
				select * from menu_snb
				where
					view_yn = 'Y'
					and mg_seq = '".$_gnb[$k]['mg_seq']."'
				order by order_no asc
			";
			$_snb = my_select($sql, $myconn);
			$_snb_cnt = my_count($_snb);


			
		

			for($i=0; $i < $_snb_cnt;$i++ ) {
				//print_r($myconn);

				$html .= "\t\t\t";
				$html .= '<li class="child"><a href="#" class="ml-2"><i class="fa fa-folder-open mr-2"></i> '.$_snb[$i]['sg_title'].'</a></li>';
				$html .= "\n";
				


				
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
					$html .= "\t\t\t";
					$html .= "\t\t\t";

					$html .= '<li class="child"><a href="'.$srow[$j]['url'].'" class="ml-4"><i class="fa fa-angle-right mr-2"></i> '.$srow[$j]['dg_title'].'</a></li>';
					$html .= "\n";
				}

				$html .= "\t\t\t";
				$html .= "\t\t";

				
				$html .= "\n";

				

			}
			$html .='</ul>';
			$html .='</li>';


		}

		$slide_leftmenu = $html;
	}
	else {

		/*
		$sql = "
			SELECT 
			a.mg_seq,
			a.mg_title

			FROM menu_gnb AS a
				INNER JOIN menu_snb AS b ON a.mg_seq = b.mg_seq
				INNER JOIN menu_dnb AS c ON b.ms_seq = c.ms_seq
				INNER JOIN admin_member_dnb AS d ON c.md_seq = d.md_seq
			WHERE
				a.view_yn ='Y'
				AND b.view_yn ='Y'
				AND c.view_yn = 'Y'
				AND d.adm_seq = '".$_SESSION['admin_seq']."'
			GROUP BY 1
			ORDER BY a.order_no ASC
		";
		$_gnb = my_select($sql, $myconn);

		if($_SESSION['adm_skin'] == "skin_default" ) {
			$_gnb_cnt = my_count($_gnb);

		}
		*/

		//대메뉴
		$sql = "
			SELECT 
			a.mg_seq,
			a.mg_title

			FROM menu_gnb AS a
				INNER JOIN menu_snb AS b ON a.mg_seq = b.mg_seq
				INNER JOIN menu_dnb AS c ON b.ms_seq = c.ms_seq
				INNER JOIN admin_member_dnb AS d ON c.md_seq = d.md_seq
			WHERE
				a.view_yn ='Y'
				AND b.view_yn ='Y'
				AND c.view_yn = 'Y'
				AND d.adm_seq = '".$_SESSION['admin_seq']."'
			GROUP BY 1
			ORDER BY a.order_no ASC
		";
		$_gnb = my_select($sql, $myconn);

		if($_SESSION['adm_skin'] == "skin_default" ) {
			$_gnb_cnt = my_count($_gnb);

		}

		for($k=0; $k < $_gnb_cnt; $k++) {

			$html .= '
				<li class="parent">
					<a href="#" onclick="toggle_menu(\'gnbmenu_'.$_gnb[$k]['mg_seq'].'\'); return false" class=""><i class="fa fa-calendar-o mr-3"> </i>
						<span class="none">'.$_gnb[$k]['mg_title'].' <i class="fa fa-angle-down pull-right align-bottom"></i></span>
					</a>

					<ul class="children" id="gnbmenu_'.$_gnb[$k]['mg_seq'].'">
			';



			//소메뉴
			$sql = "
				select * from menu_snb
				where
					view_yn = 'Y'
					and mg_seq = '".$_gnb[$k]['mg_seq']."'
				order by order_no asc
			";

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
					AND b.mg_seq ='".$_gnb[$k]['mg_seq']."'
					AND d.adm_seq = '".$_SESSION['admin_seq']."'

				GROUP BY 1
				ORDER BY b.order_no ASC
			";


			$_snb = my_select($sql, $myconn);
			$_snb_cnt = my_count($_snb);


			
		

			for($i=0; $i < $_snb_cnt;$i++ ) {
				//print_r($myconn);

				$html .= "\t\t\t";
				$html .= '<li class="child"><a href="#" class="ml-2"><i class="fa fa-folder-open mr-2"></i> '.$_snb[$i]['sg_title'].'</a></li>';
				$html .= "\n";
				


				
				//상세메뉴
				$sql = "
					select * from  menu_dnb
					where
						view_yn = 'Y'
						and ms_seq =  '".$_snb[$i]['ms_seq']."'

					order by order_no asc
				";

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

				//print_r($myconn);
				
				$srow = my_select($sql, $myconn);
				$srow_cnt = my_count($srow);

				for($j=0; $j < $srow_cnt; $j++) {
					$html .= "\t\t\t";
					$html .= "\t\t\t";

					$html .= '<li class="child"><a href="'.$srow[$j]['url'].'" class="ml-4"><i class="fa fa-angle-right mr-2"></i> '.$srow[$j]['dg_title'].'</a></li>';
					$html .= "\n";
				}

				$html .= "\t\t\t";
				$html .= "\t\t";

				
				$html .= "\n";

				

			}
			$html .='</ul>';
			$html .='</li>';


		}

		$slide_leftmenu = $html;
	}

	

	//오늘 작업내역
	$sql = "
		SELECT 
			fn_admin_nav(a.md_seq) AS nav,
			a.memo,
			a.regdt,
			a.memo,
			b.url
			
		FROM log_admin AS a
			INNER JOIN menu_dnb AS b ON a.md_seq = b.md_seq
		WHERE
			a.adm_seq = '".$_SESSION['admin_seq']."'
			and a.regdt like '".date('Y-m-d')."%'
	";
	$_worklist = my_select($sql, $myconn);
	

	
	

	
}




?>
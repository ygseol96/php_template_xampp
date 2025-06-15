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
/*if(!in_array($_SERVER['REMOTE_ADDR'], $_INC['admin_ip']) ) {
    // localhost 일경우 내 실아이피 가져와서 체크
    $real_ip = gethostbynamel(php_uname('n'));
    if( $real_ip[0] !== '172.30.1.16' ) exit;
}*/

/* 로그인 개발후 주석 제거
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

	////메뉴 가져오기

	if(in_array($_SESSION['admin_id'], $_INC['super_id'])) {
	
		//대메뉴
		$sql = "
			select * from menu_gnb
			where
				view_yn = 'Y'
			order by order_no asc
		";
		$_gnb = my_select($sql, $myconn);
		$_gnb_cnt = my_count($_gnb);

		
	}
	else {
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
		$_gnb_cnt = my_count($_gnb);
	}


	for($i=0; $i < $_gnb_cnt; $i++) {
		switch($_gnb[$i]['mg_seq']) {
			case "1" :
				$_gnb[$i]['icon'] = '<i class="fa-solid fa-database" style="color:#005ca4; font-size:30px; "></i> ';
				break;

			case "2" :
				//$_gnb[$i]['icon'] = '<i class="fa-solid fa-user-tie" style="color:#d7d700; font-size:30px"></i> ';
				$_gnb[$i]['icon'] = '<i class="fa-solid fa-user-tie" style="color:#005ca4; font-size:30px"></i> ';
				break;

			case "3" :
				//$_gnb[$i]['icon'] = '<i class="fa-brands fa-product-hunt" style="color:#008080; font-size:30px"></i> ';
				//$_gnb[$i]['icon'] = '<i class="fa-brands fa-product-hunt" style="color:#005ca4; font-size:30px"></i> ';
				//$_gnb[$i]['icon'] = '<i class="fa-brands fa-shopify" style="color:#005ca4; font-size:30px"></i> ';
				$_gnb[$i]['icon'] = '<i class="fa-solid fa-cart-plus" style="color:#005ca4; font-size:30px"></i> ';
				
				break;


			case "4" :
				//$_gnb[$i]['icon'] = '<i class="fa-brands fa-windows" style="color:#aaaaaa; font-size:30px"></i> ';
				$_gnb[$i]['icon'] = '<i class="fa-brands fa-windows" style="color:#005ca4; font-size:30px"></i> ';
				break;

			case "5" :
				//$_gnb[$i]['icon'] = '<i class="fa-regular fa-credit-card" style="color:#ff8080; font-size:30px"></i> ';
				$_gnb[$i]['icon'] = '<i class="fa-regular fa-credit-card" style="color:#005ca4; font-size:30px"></i> ';
				break;

			case "6" :
				//$_gnb[$i]['icon'] = '<i class="fa-solid fa-gear" style="color:#808080; font-size:30px"></i> ';
				$_gnb[$i]['icon'] = '<i class="fa-solid fa-gear" style="color:#005ca4; font-size:30px"></i> ';
				break;
		}
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
		order by a.la_seq desc
		limit 30
	";
	$_worklist = my_select($sql, $myconn);
	

	
	

	
}
*/

// 메뉴정보 조회
$query = "
    SELECT
        *
    FROM
        ht_admin_menu
    ORDER BY gubun ASC, idx ASC 
";
$result   = my_select($query, $myconn);
$_GNB = array();
foreach( $result AS $menu ) {
    if( $menu['gubun'] == 0 ) {
        $_GNB[$menu['idx']]['idx'] = $menu['idx'];
        $_GNB[$menu['idx']]['code_name'] = $menu['code_name'];
        $_GNB[$menu['idx']]['gubun'] = $menu['gubun'];
        $_GNB[$menu['idx']]['name'] = $menu['name'];
        $_GNB[$menu['idx']]['url'] = $menu['url'];
    } else {
        $count = isset( $_GNB[$menu['p_idx']]['menu'] ) ? count( $_GNB[$menu['p_idx']]['menu'] ) : 0;

        $_GNB[$menu['p_idx']]['menu'][$count]['idx'] = $menu['idx'];
        $_GNB[$menu['p_idx']]['menu'][$count]['code_name'] = $menu['code_name'];
        $_GNB[$menu['p_idx']]['menu'][$count]['gubun'] = $menu['gubun'];
        $_GNB[$menu['p_idx']]['menu'][$count]['name'] = $menu['name'];
        $_GNB[$menu['p_idx']]['menu'][$count]['url'] = $menu['url'];
    }
}

$i = 0;
foreach( $_GNB AS $key => $val ) {
    unset($_GNB[$key] );

    $new_key = $i;
    $_GNB[$new_key] = $val;

    $i++;
}

// 부서별 권한 설정
$query = "
    SELECT
        *
    FROM
        ht_department_auth_menu
";
$result = my_select($query, $myconn);
$_AUTH_DEPARTMENT = array();
foreach( $result AS $obj ) {
    // 부서
    $_AUTH_DEPARTMENT[$obj['department_idx']][$obj['admin_menu_idx']] = 1;
}
?>
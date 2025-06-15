<?php
/** ---------------------------------------------------------------
@program : 관리자
@description : 대시보드
@fileinfo : /sys/dashboard.php
@filedescription :

@auth : 강명관
@since : 2024.4.19
------------------------------------------------------------------**/

// 관리자 설정파일 호출
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

$myConn = myConn();

$query = "
    SELECT
        *
    FROM
        ht_admin_menu
    WHERE
        gubun=0
    ORDER BY idx ASC
";
$result = my_select($query,$myConn);

db_close();

// 템플릿 데이터 셋팅
$data = [
    'data'  => $result,
    // 좌측메뉴 active 설정
    'menu'  => [
        'group' => 'service',
        'item'  => 'menu',
    ],
    // 화면 상단 네비게이션
    'nav'   => [
        '0' => '서비스관리',
        '1' => '메뉴 관리',
        '2' => '메뉴 관리',
    ],
    // 항목별 공통 스크립트 파일
    'js'=> [
        '0'  => [
            'name'  => 'service/menu.js',
        ],
    ],
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('service/service_menu.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
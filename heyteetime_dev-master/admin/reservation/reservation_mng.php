<?php
/** ---------------------------------------------------------------
@program : 관리자
@description : 예약목록
@fileinfo : /sys/reservation/reservation_mng.php
@filedescription :

@auth : 강명관
@since : 2024.05.16
------------------------------------------------------------------**/

// 관리자 설정파일 호출
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";
include_once $_SERVER['DOCUMENT_ROOT']."/Location.php";

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

// 템플릿 데이터 셋팅
$data = [
    // 좌측메뉴 active 설정
    'menu'  => [
        'group' => 'reservation',
        'item'  => 'reservation',
    ],
    // 화면 상단 네비게이션
    'nav'   => [
        '0' => '예약관리',
        '1' => '예약관리',
        '2' => '예약목록',
    ],
    'continents' => Location::getContinents(),
//    'nations' => Location::getNations(),
//    'cities' => Location::getCities(),
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('reservation/reservation_mng.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
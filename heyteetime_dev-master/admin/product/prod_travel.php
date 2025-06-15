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

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
$data = [
    'menu'  => [
        'group' => 'product',
        'item'  => 'travel',
    ],
    'nav'   => [
        '0' => '상품관리',
        '1' => '여행상품 관리',
        '2' => '여행상품 목록',
    ],
    'script'=> ''
];
include_tpl('product/prod_travel.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
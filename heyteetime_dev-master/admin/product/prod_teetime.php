<?php
/** ---------------------------------------------------------------
@program : 관리자
@description : 티타임관리
@fileinfo : /sys//product/prod_teetime.php
@filedescription :

@auth : 강명관
@since : 2024.4.19
------------------------------------------------------------------**/

// 관리자 설정파일 호출
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";
include_once $_SERVER['DOCUMENT_ROOT'] ."/product/productService.php";

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

$productService = new ProductService();

$data = [
    'f_area' => $productService->getAreaList(),
    'prod_kind' => $_INC['prod_kind'],
    'menu'  => [
        'group' => 'product',
        'item'  => 'teetime',
    ],
    'nav'   => [
        '0' => '상품관리',
        '1' => '티타임 관리',
        '2' => '티타임 목록',
    ],
    'js'=> [
        '0'  => [
            'name'  => 'product/teetime.js',
        ],
    ],
];

include_tpl('product/prod_teetime.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
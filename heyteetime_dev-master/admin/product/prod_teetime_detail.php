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
include_once $_SERVER['DOCUMENT_ROOT'] ."/product/productService.php";
include_once $_SERVER['DOCUMENT_ROOT'] ."/infomation/infomationService.php";

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

if(isset($_GET['field_id']) && $_GET['field_id'] == '') {
    $location = $_SERVER['HTTP_REFERER'] ?? '/product/prod_teetime.php';
//    $_SESSION['message'] = '잘못된 요청입니다.';
    header('Location: ' .$location);
    exit();
}
$productService = new ProductService();
$infomationService = new InfomationService();

$data = $productService->getProductDetail( $_GET['field_id'] );

$data['location'] = '';
if( isset( $data['AREA_NAME'] ) && trim( $data['AREA_NAME'] ) ) {
    $data['location'] .= $data['location'] ? ' > '.$data['AREA_NAME'] : $data['AREA_NAME'];
}
if( isset( $data['NAT_NM'] ) && trim( $data['NAT_NM'] ) ) {
    $data['location'] .= $data['location'] ? ' > '.$data['NAT_NM'] : $data['NAT_NM'];
}
if( isset( $data['STATE_NM'] ) && trim( $data['STATE_NM'] ) ) {
    $data['location'] .= $data['location'] ? ' > '.$data['STATE_NM'] : $data['STATE_NM'];
}
if( isset( $data['CITY_NM'] ) && trim( $data['CITY_NM'] ) ) {
    $data['location'] .= $data['location'] ? ' > '.$data['CITY_NM'] : $data['CITY_NM'];
}

$data['lang_kind'] = $infomationService->getLanguageKind();
$data['exchang_kind'] = $infomationService->getCurrencyKind();
$data['fieldId'] = $_GET['field_id'];

$ratio = $productService->getProductRatio($_GET['field_id']);
if( !empty( $ratio ) ) {
    foreach ($ratio as $r => $row) {
        $tmp = isset($tmp) && isset($data['ratio'][$tmp]) ? $tmp++ : 0;
        $data['ratio'][$tmp]['channel'] = $row['CLIENT_CD'];
        $data['ratio'][$tmp][$row['CURRENCY']]['currency'] = $row['CURRENCY'];
        $data['ratio'][$tmp][$row['CURRENCY']]['gubun'] = $row['RATIO_GUBUN'];
        $data['ratio'][$tmp][$row['CURRENCY']]['RATIO'] = $row['RATIO'];
    }
} else {
    foreach( $data['exchang_kind'] AS $e => $row ) {
        $data['ratio'][0]['channel'] = '99';    // 공통 ( 기본 )
        $data['ratio'][0][$row['currency_code']]['currency'] = $row['currency_code'];
        $data['ratio'][0][$row['currency_code']]['gubun'] = 'F';
        $data['ratio'][0][$row['currency_code']]['RATIO'] = 0;
    }
}

if( isset( $data['UPTDATE'] ) && $data['UPTDATE'] != '-' ) {
    $data['UPTDATE'] = substr( str_replace('-', '.', $data['UPTDATE'] ), 0, 10);
}

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
$data = [
    'data'  => $data,
    'menu'  => [
        'group' => 'product',
        'item'  => 'teetime',
    ],
    'nav'   => [
        '0' => '상품관리',
        '1' => '티타임 관리',
        '2' => '티타임 상세',
    ],
    'js'=> [
        '0'  => [
            'name'  => 'product/teetime.js',
        ],
    ],
];
include_tpl('product/prod_teetime_detail.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
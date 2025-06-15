<?php
/** ---------------------------------------------------------------
@program : 관리자
@description : 예약상세
@fileinfo : /sys/reservation/reservation_detail.php
@filedescription :

@auth : 강명관
@since : 2024.05.16
------------------------------------------------------------------**/

// 관리자 설정파일 호출
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/reservation/ReservationService.php";

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

$reservationService = new ReservationService();
$data = $reservationService->getReservationDetail($_GET['idx']);
$productCnt = count($data['product']);

// 템플릿 데이터 셋팅
$data = [
    // 좌측메뉴 active 설정
    'menu'  => [
        'group' => 'reservation',
        'item'  => 'detail',
    ],
    // 화면 상단 네비게이션
    'nav'   => [
        '0' => '에약관리',
        '1' => '예약관리',
        '2' => '예약상세',
    ],
    'data' => $data,
    'productSize' => $productCnt,
    // 항목별 공통 스크립트 파일
//    'js'=> [
//        '0'  => [
//            'name'  => 'reservation/detail.js',
//        ],
//    ],
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('reservation/reservation_detail.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
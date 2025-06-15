<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/inc/adm_include.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/reservation/ReservationService.php";

header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_REQUEST['type'];
}

if(empty($type)) {
    http_response_code(400);
    echo json_encode(array('statusCode'=>400, 'message'=>'잘못된 요청입니다.'));
    exit;
}

$reservationService = new ReservationService();

switch ($type) {
    case 'getReservationList':
        echo json_encode($reservationService->getReservationList($_GET, false));
        exit;

    case 'postReservationDetail':
        $result = $reservationService->postReservationDetail($_POST);
        if(!$result['status']) {
            http_response_code($result['code']);
        }
        echo json_encode($result);
        exit;

    case 'patchReservationDetail':
        $result = $reservationService->patchReservationDetail($_POST);
        if(!$result['status']) {
            http_response_code($result['code']);
        }
        echo json_encode($result);
        exit;

    case 'patchConfirmReservation':
        $result = $reservationService->patchConfirmReservation($_POST['idx']);
        if(!$result['status']) {
            http_response_code($result['code']);
        }
        echo json_encode($result);
        exit;

    case 'patchCancelReservation':
        $result = $reservationService->patchCancelReservation($_POST);
        if(!$result['status']) {
            http_response_code($result['code']);
        }
        echo json_encode($result);
        exit;

    case 'getExcelForReservationList':
        require $_SERVER['DOCUMENT_ROOT'] .'/reservation/reservation_export_to_excel.php';
        $inquiryList = $reservationService->getReservationList($_REQUEST, true);
        exportToReservationList($inquiryList['data'], $_REQUEST['fileName']);
        exit;

    // 회원 예약목록 조회
    case 'getMemberReservationList' :
        print_re( $_REQUEST );
        //$aa = $reservationService->getMemberReservationList($_REQUEST);
        //print_re( $aa );
        exit;

    default:
        http_response_code(400);
        echo json_encode(array('statusCode'=>400, 'message'=>'존재하지 않는 타입입니다.'));
        exit;
}
<?php
/** ---------------------------------------------------------------
 * 상품관리 처리
 * create kr.kevin 2024.05.20
 *
------------------------------------------------------------------**/

include_once $_SERVER['DOCUMENT_ROOT'] . "/inc/adm_include.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/product/productService.php";

//header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_REQUEST['type'];
}

if(empty($type)) {
    http_response_code(400);
    echo json_encode(array('statusCode'=>400, 'message'=>'잘못된 요청입니다.'));
    exit;
}

$productService = new ProductService();

switch( $type ) {
    case 'getTeetimeList' :
        echo json_encode($productService->getTeeTimeList($_REQUEST));
        exit;
    case 'getFilterNation' :
        echo json_encode($productService->getNationList($_REQUEST));
        exit;
    case 'getFilterState' :
        echo json_encode($productService->getStateList($_REQUEST));
        exit;
    case 'getFilterCity' :
        echo json_encode($productService->getCityList($_REQUEST));
        exit;
    case 'exportExcelForTeetimeList' :
        require $_SERVER['DOCUMENT_ROOT'] .'/product/export_to_excel.php';
        $teetimeList = $productService->getTeeTimeList($_REQUEST, 1);
        exportToTeetimeList($teetimeList['data'], $_REQUEST['fileName']);
        exit;
    // 상품상세 Ratio 설정
    case 'getTeetimeRatio' :
        $data = [];
        $data['field_id']   = $_REQUEST['teetime_field_id'];
        $data['point_type'] = $_REQUEST['point_type'];
        $data['point']      = $_REQUEST['point'] > 0 ? str_replace( ',', '', $_REQUEST['point'] ) : 0;
        $data['use_yn']     = $_REQUEST['teetime_2'];

        for( $i = 0; $i < count( $_REQUEST['channel_code'] ); $i++ ) {
            for( $j = 0; $j < count( $_REQUEST['currency'] ); $j++ ) {
                $key = $_REQUEST['currency'][$j];
                $data['columns'][$key]['channel']   = $_REQUEST['channel_code'][$i];
                $data['columns'][$key]['type']      = $_REQUEST[$key.'_type'][$i];
                $data['columns'][$key]['price']     = str_replace( ',', '', $_REQUEST[$key.'_price'][$i] );
            }
        }

        // transaction start
        ms_begin_trans(msConn());
        // 기존설정 삭제
        $q1 = $productService->delTeeTimeRatio($data['field_id']);
        $q2 = $productService->delTeeTimePoint($data['field_id']);

        // 새로 등록
        $q3 = $productService->inTeeTimeRatio($data);
        $q4 = $productService->inTeeTimePoint($data);

        echo 1;
        exit;
    default:
        exit;
}
?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/inc/adm_include.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/member/memberService.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Location.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/File.php";

header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_REQUEST['type'];
}


if(empty($type)) {
    http_response_code(400);
    echo json_encode(array('statusCode'=>400, 'message'=>'잘못된 요청입니다.'));
    exit;
}

$memberService = new MemberService();


switch ($type) {
    case 'getMemberList':
        echo json_encode($memberService->getMemberList($_REQUEST, false));
        exit;

    case 'getMember':
        echo json_encode($memberService->getMember($_REQUEST, true));
        exit;

    case 'getExcelForMemberList':
        require $_SERVER['DOCUMENT_ROOT'] .'/member/member_export_to_excel.php';
        $memberList = $memberService->getMemberList($_REQUEST, true);
        exportToMemberList($memberList['data'], $_REQUEST['fileName']);
        exit;


    case "getInquiryList":
        echo json_encode($memberService->getInquiryList($_REQUEST, true));
        exit;

    case 'patchInquiryResponse':

        // 유효성 검사
        if (is_null($_REQUEST['idx']) || !isset($_REQUEST['idx']) || empty(trim($_REQUEST['idx']))) {
            http_response_code(400);
            echo json_encode(array('statusCode'=>400, 'message'=>'문의건에 대한 인덱스 정보가 존재하지 않습니다.'));
            exit;
        }

        // 첨부파일 확인
        if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            // 파일저장
            $result = File::uploadOne($_FILES['file'], 'member');

            if($result['status']) {
                // 파일정보 DB 저장
                $result2 = $memberService->postInquiryFile($_REQUEST['idx'], $_FILES['file'], $result['path']);
                if(!$result2['status']) {
                    http_response_code($result2['code']);
                    echo json_encode($result2);
                    exit;
                }

                // API 호출
                $param = encrypt($result['path']);
                $url = "https://aglmedia.tigergds.com/api/viewimage.php?image=".$param;

                $apiResult =sendCurlRequest($url);

                if(!$apiResult['status']) {
                    http_response_code($apiResult['code']);
                    echo json_encode($apiResult);
                    exit;
                }

            } else {
                http_response_code($result['code']);
                echo json_encode($result);
                exit;
            }
        }
        echo json_encode($memberService->patchInquiryResponse($_REQUEST));
        exit;

    case 'getExcelForMileageList':
        require $_SERVER['DOCUMENT_ROOT'] .'/member/member_export_to_excel.php';
        $mileageList = $memberService->getMileageList($_REQUEST);
        exportToMileageList($mileageList['data'], $_REQUEST['fileName']);
        exit;

    case 'getExcelForInquiryList':
        require $_SERVER['DOCUMENT_ROOT'] .'/member/member_export_to_excel.php';
        $inquiryList = $memberService->getInquiryList($_REQUEST, false);
        exportToInquiryList($inquiryList['data'], $_REQUEST['fileName']);
        exit;

    case 'updateMember':
        // 회원 정보 업데이트
        $result = $memberService->updateMember($_POST);
        if(!$result['status']) {
            http_response_code($result['code']);
        }
        echo json_encode($result);
        exit;

    case 'resetPassword':
        $memberId = $_POST['memberId'];
        $newPassword = $memberService->resetPassword($memberId);

        if ($newPassword !== false) {
            echo json_encode(['success' => true, 'newPassword' => $newPassword]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to reset password.']);
        }
        exit;

    case 'resetReceive':
        $idx = $_REQUEST['id'];
        $response = $memberService->resetReceive($idx);
        echo json_encode($response);
        exit;

    case 'coupon_insert' :
        echo json_encode( $memberService->insertCoupon( $_REQUEST ) );
        exit;
    case "getCouponList":
        echo json_encode($memberService->getCouponList($_REQUEST, true));
        exit;

    case 'mileage_insert' :
        echo json_encode( $memberService->insertMileage( $_REQUEST ) );
        exit;

    case "getMileageList":
        echo json_encode($memberService->getMileageList($_REQUEST));
        exit;

    case 'mileage_insertKind' :
        echo json_encode( $memberService->insertKindMileage($_REQUEST) );
        exit;

    case 'searchMembers':
        $query = $_GET['query'];
        $response = $memberService->searchMembers($query);
        echo json_encode($response);
        exit;


    // 유틸리티
    case 'getNation':
        echo json_encode(Location::getNations($_REQUEST['idx']));
        exit;

    case 'getCities':
        echo json_encode(Location::getCities($_REQUEST['idx']));
        exit;

    default:
        http_response_code(400);
        echo json_encode(array('statusCode'=>400, 'message'=>'존재하지 않는 타입입니다.'));
        exit;
}

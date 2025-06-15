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
include_once $_SERVER['DOCUMENT_ROOT'] ."/member/memberService.php";

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

if(isset($_GET['idx']) && $_GET['idx'] == '') {
    $location = $_SERVER['HTTP_REFERER'] ?? '/member/member_inquiry.php';
//    $_SESSION['message'] = '잘못된 요청입니다.';
    header('Location: ' .$location);
    exit();
}
$memberService = new MemberService();
$data = $memberService->getInquiryDetail($_GET['idx']);

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
$data = [
    'menu'  => [
        'group' => 'member',
        'item'  => 'inquiry',
    ],
    'nav'   => [
        '0' => '회원관리',
        '1' => '1:1문의 관리',
        '2' => '1:1문의 상세',
    ],
    'script'=> '',
    'data' => $data,
];
include_tpl('member/member_inquiry_detail.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
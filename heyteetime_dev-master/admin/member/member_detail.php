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
include_once $_SERVER['DOCUMENT_ROOT']."/member/memberService.php";
include_once $_SERVER['DOCUMENT_ROOT']."/Location.php";

if(!isset($_GET['id'])) {
    echo "잘못된 접근입니다.";
    header("Location: /member/member_list.php");
    exit;
}

// TODO: 존재하지 않는 idx로 조회할 시에 회원 목록으로 redirect 로직 구현 필요


$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];
$memberService = new MemberService();

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
$data = [
    'menu'  => [
        'group' => 'member',
        'item'  => 'member',
    ],
    'nav'   => [
        '0' => '회원관리',
        '1' => '회원관리',
        '2' => '회원상세',
    ],
    'script'=> '',
    'channel'=> $memberService->getChannelList(),
    'phoneCodes' => $memberService->getPhoneCodes(),
    'nationalityOptions' => Location::getNations(),
    'member'=>  $memberService->getMember($_GET['id']),
];

include_tpl('member/member_detail.tpl', $data);


// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();


// 템플릿 출력
$tpl->print_('body');
?>
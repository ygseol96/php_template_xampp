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

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];
$memberService = new MemberService();

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
$data = [

    'menu'  => [
        'group' => 'member',
        'item'  => 'mileage',
    ],
    'nav'   => [
        '0' => '회원관리',
        '1' => '마일리지 관리',
        '2' => '마일리지 지급',
    ],
    'js'=> [
        '0'  => [
            'name'  => 'member/maileage.js',
        ],
    ],
	'KindList'=> $memberService->getSelectKindList(),
    'LanguageList' => $memberService->getLanguageList(),
    'MemberList' => $memberService->searchMembers($_GET['query'] ?? '')
];
include_tpl('member/member_mileage_regist.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');

?>
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

$data = [
    'menu'  => [
        'group' => 'member',
        'item'  => 'member',
    ],
    'nav'   => [
        '0' => '회원관리',
        '1' => '회원관리',
        '2' => '회원목록',
    ],
    'script'=> '',
    'nationality'=> $memberService->getNationalityList(),
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('member/member_list.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
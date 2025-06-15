<?php
/** ---------------------------------------------------------------
@program : 관리자
@description : 정보관리 > 지역정보관리
@fileinfo : information/information_local_mng.php
@filedescription :

@auth : 강명관
@since : 2024.6.05
------------------------------------------------------------------**/


// 관리자 설정파일 호출
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";
include_once $_SERVER['DOCUMENT_ROOT']."/service/ServiceService.php";
include_once $_SERVER['DOCUMENT_ROOT'] ."/infomation/infomationService.php";

session_start();
$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];
$ServiceService = new ServiceService();
$infomationService = new InfomationService();


if (!isset($_GET['idx'])) {
    if (!isset($_SESSION['idx'])) {
        error_log("idx is not set in GET or SESSION parameters.");
        die("idx is missing");
    } else {
        $idx = $_SESSION['idx'];
        error_log("idx from SESSION: " . $idx);
    }
} else {
    $idx = $_GET['idx'];
    $_SESSION['idx'] = $idx; // 세션에 저장
    error_log("idx from GET: " . $idx);
}


$data = $ServiceService->getNoticeDetail($idx);
$data['lang_kind'] = $ServiceService->getNoticeLanguageKind($idx);
$data['main_idx'] = $idx;
error_log("Template data: " . print_r($data, true));
// 템플릿 데이터 셋팅
$data = [
    // 좌측메뉴 active 설정
    'data'  => $data,
    'menu'  => [
        'group' => 'service',
        'item'  => 'notice',
    ],
    // 화면 상단 네비게이션
    'nav'   => [
        '0' => '서비스관리',
        '1' => '공지관리',
        '2' => '공지수정',
    ],
    // 항목별 공통 스크립트 파일
    'js'=> [
        '0'  => [
            'name'  => 'service/notice.js',
        ],
    ],
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('service/service_notice_modify.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
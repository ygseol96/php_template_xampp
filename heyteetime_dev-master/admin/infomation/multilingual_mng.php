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
include_once $_SERVER['DOCUMENT_ROOT'] ."/infomation/infomationService.php";

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

$infomationService = new InfomationService();
$result = $infomationService->getCategoryList(0);
$langKind = $infomationService->getLanguageKind();

// 템플릿 데이터 셋팅
$data = [
    'list'  => $result,
    'lKind' => $langKind,
    // 좌측메뉴 active 설정
    'menu'  => [
        'group' => 'infomation',
        'item'  => 'multilingual',
    ],
    // 화면 상단 네비게이션
    'nav'   => [
        '0' => '정보관리',
        '1' => '다국어 관리',
        '2' => '',
    ],
    // 항목별 공통 스크립트 파일
    'js'=> [
        '0'  => [
            'name'  => 'infomation/multilingual.js',
        ],
    ],
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('infomation/multilingual_mng.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
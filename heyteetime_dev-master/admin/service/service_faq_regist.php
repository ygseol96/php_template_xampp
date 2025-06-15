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

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];
$ServiceService = new ServiceService();
$infomationService = new InfomationService();

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];
$data['lang_kind'] = $infomationService->getLanguageKind();
// 템플릿 데이터 셋팅
$data = [
    'data'  => $data,
    'menu'  => [
        'group' => 'service',
        'item'  => 'faq',
    ],
    // 화면 상단 네비게이션
    'nav'   => [
        '0' => '서비스관리',
        '1' => 'FAQ 관리',
        '2' => 'FAQ 등록',
    ],
    // 항목별 공통 스크립트 파일
    'js'=> [
        '0'  => [
            'name'  => 'service/faq.js',
        ],
        '1'  => [
            'name'  => 'service/common.js',
        ],
    ],
    'KindList'=> $ServiceService->getFaqSelectKindList(),
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('service/service_faq_regist.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
<?php
/** ---------------------------------------------------------------
@program : 관리자
@description : 기획전수정(상세)
@fileinfo : /sys/display/exhibition_special_modify.php
@filedescription :

@auth : 강명관
@since : 2024.05.16
------------------------------------------------------------------**/

// 관리자 설정파일 호출
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

// 템플릿 데이터 셋팅
$data = [
    // 좌측메뉴 active 설정
    'menu'  => [
        'group' => 'display',
        'item'  => 'special',
    ],
    // 화면 상단 네비게이션
    'nav'   => [
        '0' => '전시관리',
        '1' => '기획전관리',
        '2' => '기획전수정',
    ],
    // 항목별 공통 스크립트 파일
    'js'=> [
        '0'  => [
            'name'  => 'display/special.js',
        ],
    ],
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('display/exhibition_special_modify.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
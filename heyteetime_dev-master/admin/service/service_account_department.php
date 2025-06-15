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

$tpl = new Template;
$tpl->skin = $_SESSION['adm_skin'];

$myConn = myConn();

$data = array();
// 부서정보 조회
$query = "
    SELECT
        *
    FROM
        ht_department
    ORDER BY idx ASC
";
$department = my_select($query,$myConn);

$data = [
    'department'  => $department,
    'auth'  => $_AUTH_DEPARTMENT,
    'gnb'   => $_GNB,
    'menu'  => [
        'group' => 'service',
        'item'  => 'account',
    ],
    'nav'   => [
        '0' => '서비스관리',
        '1' => '계정 관리',
        '2' => '부서별 권한 관리',
    ],
    // 항목별 공통 스크립트 파일
    'js'=> [
        '0'  => [
            'name'  => 'service/account.js',
        ],
    ],
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('service/service_account_department.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
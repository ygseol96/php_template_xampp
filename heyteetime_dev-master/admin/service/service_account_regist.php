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
db_close();

$msConn = msConn();
$query = "
    SELECT
        hcn.*,
        hcnp.NP_SEQ,
        hcnp.PHONE_CODE
    FROM
        HTT_CODE_NATION AS hcn
        LEFT JOIN HTT_CODE_NATION_PHONE AS hcnp ON hcnp.NAT_CD=hcn.NAT_CD
    WHERE
        hcnp.VIEW_YN='Y'
        AND hcnp.USE_YN='Y'
    ORDER BY hcnp.PHONE_CODE ASC, hcn.NAT_NM_KR ASC
";
$nationPhone = ms_select($query, $msConn);
ms_close();

$data = [
    'department'    => $department,
    'nationPhone'   => $nationPhone,
    'menu'  => [
        'group' => 'service',
        'item'  => 'account',
    ],
    'nav'   => [
        '0' => '서비스관리',
        '1' => '계정 관리',
        '2' => '계정 등록',
    ],
    'js'=> [
        '0'  => [
            'name'  => 'service/account.js',
        ],
    ],
    'status'    => $_INC['account_status'],
    'accType'   => 0,   // 등록(0), 수정(1)
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('service/service_account_regist.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
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

$query = "
    SELECT
        ha.idx,
        AES_DECRYPT(ha.account, '".$_INC['env']['encrypt_key']."') AS account,
        AES_DECRYPT(ha.name, '".$_INC['env']['encrypt_key']."') as name,
        ha.status,
        ha.reg_date,
        hd.name AS department_name
    FROM
        ht_admin AS ha
        LEFT JOIN ht_department AS hd ON hd.idx=ha.department_idx
    ORDER BY ha.department_idx ASC, ha.reg_date DESC
";
$result = my_select($query, $myConn);
$data = array();
if( !empty( $result ) ) {
    foreach ($result as $key => $item) {
        $data[$key]['number'] = $item['idx'];
        $data[$key]['department'] = $item['department_name'];
        $data[$key]['account'] = mytory_asterisk( $item['account'] );
        $data[$key]['name'] = mytory_asterisk( $item['name'] );
        $data[$key]['state'] = $_INC['account_status'][$item['status']]['name'];
        $data[$key]['date'] = str_replace('-', '.', SUBSTR( $item['reg_date'], 0, 10 ) );
    }
}
//{number:1, department:"경영", account:"TESTID", name:"사용자", state:"정상", date:"24.01.01"},

$data = [
    'list'  => json_encode( $data ),
    'menu'  => [
        'group' => 'service',
        'item'  => 'account',
    ],
    'nav'   => [
        '0' => '서비스관리',
        '1' => '계정 관리',
        '2' => '계정 목록',
    ],
    'js'=> ''
];

// 기본 인클루드 설정 header, footer 등을 아래설정한 템플릿 파일에 적용하겠다
include_tpl('service/service_account.tpl', $data);

// 기본 변수값 설정 $_POST, $_GET, $_REQUEST 등
basic_tpl();

// 템플릿 출력
$tpl->print_('body');
?>
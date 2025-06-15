<?php
/** ---------------------------------------------------------------
  @program : setup
  @description : 사이트 환경설정, 개발/운영에 따른 설정값 저장
  @fileinfo : /inc/setup.php
  @filedescription : setup

  @auth : 현민원
  @since : 2021.7
  ------------------------------------------------------------------* */
/*
$_abspath = realpath(__FILE__);

$_apspath_array = explode("/", $_abspath);

$_common_path = "/".$_apspath_array[1]."/".$_apspath_array[2]."/".$_apspath_array[3];

include_once $_common_path .'/common.php';
*/
$_abspath = explode( '/', $_SERVER['DOCUMENT_ROOT']);
array_pop($_abspath);
$_common_path = implode('/', $_abspath);
include_once $_common_path.'/common.php';

if($_SYSTEM_MODE == "real") {

	//// Directory
    $_INC['folder'] = Array(
        "root_dir" => "/home/agl/www/admin",
        "file_dir" => "/home/agl/www/admin/_files",
        "file_dir_web" => "/_files"
    );
	
	
    
} 
else {
   

    //// Directory
    $_INC['folder'] = Array(
        "root_dir" => "/home/agl/www/admin",
        "file_dir" => "/home/agl/www/admin/_files",
        "file_dir_web" => "/_files"
    );

   
}




$_INC['etc'] = array(
	'회사명' => 'AGL',
	'사업자번호' => '',
	'대표자' => '',
	'개인정보책임자' => '',
	'주소' => '',
	'고객센터' => '',

	// 발신정보
	'발신이메일' => '',
	//'발신이메일' => 'ikozen@dev-miwm.kr',
	'발신이메일이름' => '에이지엘',
	'sms_callback'	=> '',
	'bank_nm'	=> '',
	'bank_account'	=> '',
	'bank_owner'	=> '(주)에이지엘',


	
       
);


/////////////////////////// basic setup ////////////////////////////////////

$_INC['system_mode'] = $_SYSTEM_MODE;
$_INC['homepage_title'] = "AGL ADMINISTRATOR";
$_INC['favicon'] = "favicons.ico";

// 공통클래스 및 함수
//include_once $_common_path ."/code.php";
include_once $_common_path ."/func.php";
include_once $_common_path ."/image.php";
include_once $_common_path ."/mysql.php";
include_once $_common_path ."/mssql.php";


//어드민 함수
include_once "lib/func_admin.php";


date_default_timezone_set('Asia/Seoul');

if($_SYSTEM_MODE == "test" ) {
	//@ini_set("session.cookie_domain", ".dev-miwm.kr");
	ini_set("session.cookie_domain", ".tigergds.com");
} else if ($_SYSTEM_MODE == "develop") {

}
else {
	ini_set("session.cookie_domain", ".tigergds.com");
}

$_session_time = 86400 * 30;
ini_set("session.cache_expire", $_session_time); 
ini_set("session.gc_maxlifetime", $_session_time);
ini_set("session.cookie_lifetime", $_session_time);
ini_set("session.cookie_samesite", "None");
ini_set("session.cookie_secure", true);

session_start();

/**
 * 로그인여부 확인
 */
if($_SERVER['PHP_SELF'] == '/login.php' || $_SERVER['PHP_SELF'] == '/login/ajax_login.php') {
    if(isset($_SESSION['admin_idx'])) {
        header('Location: /dashboard.php');
        exit();
    }
} else {
    if(!isset($_SESSION['admin_idx'])) {
        header('Location: /login.php');
        exit();
    }
}

/**
 * CSRF 토큰
 * : GET 요청을 제외한 모든 요청은 CSRF 토큰 값 확인 필요
 */
$_SESSION['CSRF_TOKEN'] = empty($_SESSION['CSRF_TOKEN']) ? md5(uniqid(rand(), true)) : $_SESSION['CSRF_TOKEN'];

if($_SERVER['REQUEST_METHOD'] != 'GET') {
    if(!isset($_SERVER['HTTP_X_CSRF_TOKEN']) || is_null($_SERVER['HTTP_X_CSRF_TOKEN'])) {
        header("Content-type:application/json; charset=utf-8");
        http_response_code(403);
        echo json_encode(array('statusCode'=>403, 'message'=>'CSRF 토큰이 존재하지 않습니다.'));
        exit();
    }

    if($_SERVER['HTTP_X_CSRF_TOKEN'] !== $_SESSION['CSRF_TOKEN']) {
        header("Content-type:application/json; charset=utf-8");
        http_response_code(403);
        echo json_encode(array('statusCode'=>403, 'message'=>'유효한 CSRF 토큰값이 아닙니다.'));
        exit();
    }
}

if ($_BATCH_FLAG) {

    header("Content-type:text/html; charset=utf-8");
} else {

    $temp = explode("/", $_SERVER["SCRIPT_NAME"]);
    if ($temp[1] == "api") {
        header("Content-type:application/json; charset=utf-8");
    } else {
        header("Content-type:text/html; charset=utf-8");
    }
}

error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);


$myconn = myConn();


// 파라미터를 배열에서 오브젝트로 전환
$REQUEST = (object) $_REQUEST;
$POST = (object) $_POST;
$GET = (object) $_GET;
<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/login/loginService.php';

if(!isset($_POST['account']) || !isset($_POST['password']) || !isset($_SERVER['HTTP_X_CSRF_TOKEN'])
    || is_null($_POST['account']) || is_null($_POST['password']) || is_null($_SERVER['HTTP_X_CSRF_TOKEN']) ) {
    http_response_code(400);
    echo json_encode(array('statusCode'=>400, 'message'=>'아이디와 비밀번호 모두 입력해주세요.'));
    exit;
}
if(!LoginService::isLoggedIn()) {
    $loginService = new LoginService();
    $loginService->login($_POST['account'], $_POST['password']);
    echo json_encode(array('statusCode'=>200, 'message'=>'로그인 성공'));
} else {
    http_response_code(302);
    echo json_encode(array('statusCode'=>302, 'message'=>'이미 로그인한 사용자입니다.'));
}

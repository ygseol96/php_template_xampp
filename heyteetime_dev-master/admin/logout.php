<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/login/loginService.php';

LoginService::logout();
header('Location: /login.php');

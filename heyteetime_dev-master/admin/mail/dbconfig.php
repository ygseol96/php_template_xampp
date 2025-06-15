<?php

$servername = "dev-phpbo.c4lf1j5zgbxo.ap-northeast-2.rds.amazonaws.com";
$username = "aglsc";
$password = "aglsctest!@#$";
$dbname = "aglsc";
$port = "3306";

// 데이터베이스에 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
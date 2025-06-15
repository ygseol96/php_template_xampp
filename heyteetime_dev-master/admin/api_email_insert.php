<?php
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";

$email_type = "예약취소";
$email_html = "temp_cancel.html";
$email_subject ="[AGL] 골프여행 예약 확정 되었습니다.";
$product_code = "20240614000020";
$reservation_date = "2024-06-16 10:10:10";

cronMailInsert( $email_type, $email_html, $email_subject, $product_code, $reservation_date);

?>

<?php
require_once 'dbconfig.php';
include_once $_SERVER['DOCUMENT_ROOT']."/inc/setup_api.php";
require 'vendor/autoload.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$requestUri = $_SERVER["REQUEST_URI"];
$input = json_decode(file_get_contents('php://input'), true);


if($input['type'] === 'mail'){

	//테스트이메일 강제입력
	$to_email = $input['content']['to_email'];
	$from_email = "hdcresort@hdc-resort.com";

	if($input['content']['send_YN'] === "Y"){ //즉발

		// SendGrid API 키를 설정합니다.
		$apiKey = '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';
		$sendgrid = new \SendGrid($apiKey);

		// 이메일을 구성합니다.
		$email = new \SendGrid\Mail\Mail();
		$email->setFrom($from_email, "AGL");
		$email->setSubject($input['content']['email_subject']);
		$email->addTo($to_email, "");
		$email->addContent("text/html", $input['content']['email_contents']);

		$response = $sendgrid->send($email);
		header('Content-Type: application/json');
		$cc = $response->statusCode();


		$stmt = $conn->prepare("INSERT INTO ht_email (email_type, email_subject, email_to, email_from, reg_date, reservation_date, send_YN) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$send_YN = "Y";
		$to_day = date("Y-m-d H:i:s");

		$stmt->bind_param("sssssss",
			$input['content']['email_type'],
			$input['content']['email_subject'],
			$to_email,
			$from_email,
			$to_day,
			$reservation_date,
			$send_YN
		);

		// SQL 쿼리 실행
		if ($stmt->execute()) {
			echo $cc;
		} else {
			echo "Error: " . $stmt->error;
		}

	}else if($input['content']['send_YN'] === "N"){ //크론

		$reservation_date = $input['content']['reservation_date'] ? $input['content']['reservation_date'] : date("Y-m-d H:i:s");

		$stmt = $conn->prepare("INSERT INTO ht_email (email_type, email_subject, email_to, email_from, reg_date, reservation_date, send_YN) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$send_YN = "N";
		$to_day = date("Y-m-d H:i:s");

		$stmt->bind_param("sssssss",
			$input['content']['email_type'],
			$input['content']['email_subject'],
			$to_email,
			$from_email,
			$to_day,
			$reservation_date,
			$send_YN
		);

		// SQL 쿼리 실행
		if ($stmt->execute()) {
			echo "202";
		} else {
			echo "Error: " . $stmt->error;
		}
	}
}

?>
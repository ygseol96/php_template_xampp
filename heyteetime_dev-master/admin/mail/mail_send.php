<?php
require 'vendor/autoload.php';

function mail_send($TemplateHTML, $sendValue, $subject, $to_email)
{
    // SendGrid API 키를 설정합니다.
    $apiKey = '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';
    $sendgrid = new \SendGrid($apiKey);

    // HTML 파일을 읽어옵니다.
    $htmlContent = file_get_contents(__DIR__ . "/" . $TemplateHTML);
    if ($htmlContent === false) {
        die('Failed to read HTML file');
    }

    foreach ($sendValue as $key => $value) {
        $htmlContent = str_replace($key, $value, $htmlContent);
    }

    //테스트이메일 강제입력
    $to_email = "dev.codeidea@gmail.com";

    // 이메일을 구성합니다.
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("hdcresort@hdc-resort.com", "AGL");
    $email->setSubject($subject);
    $email->addTo($to_email, "");
    $email->addContent("text/html", $htmlContent);

    $response = $sendgrid->send($email);

    return $response->statusCode();

}
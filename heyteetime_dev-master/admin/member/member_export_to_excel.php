<?php
$_abspath = explode( '/', $_SERVER['DOCUMENT_ROOT'] );
array_pop($_abspath);
$_common_path = implode("/", $_abspath);

require $_common_path .'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
function exportToMemberList($list, $filename)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('회원목록');

    //열 넓이
    $sheet->getColumnDimension('B')->setWidth(15);
    $sheet->getColumnDimension('C')->setWidth(15);
    $sheet->getColumnDimension('D')->setWidth(20);
    $sheet->getColumnDimension('E')->setWidth(20);

    //컬럼
    $sheet->setCellValue('A1', '번호');
    $sheet->setCellValue('B1', '가입구분');
    $sheet->setCellValue('C1', '회원명');
    $sheet->setCellValue('D1', '이메일');
    $sheet->setCellValue('E1', '전화번호');
    $sheet->setCellValue('F1', '성별');
    $sheet->setCellValue('G1', '국적');
    $sheet->setCellValue('H1', '회원상태');
    $sheet->setCellValue('I1', '가입일');

    //데이터
    for($i=0; $i<count($list); $i++) {
        $sheet->setCellValue('A'.($i+2), $i+1);
        $sheet->setCellValue('B'.($i+2), $list[$i]['social_name']);
        $sheet->setCellValue('C'.($i+2), $list[$i]['first_name'] .' ' .$list[$i]['last_name']);
        $sheet->setCellValue('D'.($i+2), $list[$i]['account']);
        $sheet->setCellValueExplicit('E'.($i+2), $list[$i]['country_code'].' '. $list[$i]['phone_number'], DataType::TYPE_STRING);
        $sheet->setCellValue('F'.($i+2), $list[$i]['sex']);
        $sheet->setCellValue('G'.($i+2), $list[$i]['nat_nm_kr']);
        $sheet->setCellValue('H'.($i+2), $list[$i]['status']);
        $sheet->setCellValue('I'.($i+2), $list[$i]['reg_date']);
    }

    // 엑셀 파일 출력
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}

function exportToInquiryList($list, $filename)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('1-1문의목록');

    //열 넓이
    $sheet->getColumnDimension('B')->setWidth(12);
    $sheet->getColumnDimension('C')->setWidth(30);
    $sheet->getColumnDimension('D')->setWidth(30);
    $sheet->getColumnDimension('E')->setWidth(20);
    $sheet->getColumnDimension('F')->setWidth(15);
    $sheet->getColumnDimension('G')->setWidth(12);
    $sheet->getColumnDimension('H')->setWidth(12);


    //컬럼
    $sheet->setCellValue('A1', '번호');
    $sheet->setCellValue('B1', '문의일');
    $sheet->setCellValue('C1', '문의구분');
    $sheet->setCellValue('D1', '문의제목');
    $sheet->setCellValue('E1', '아이디');
    $sheet->setCellValue('F1', '성명');
    $sheet->setCellValue('G1', '답변여부');
    $sheet->setCellValue('H1', '답변일');

    //데이터
    for($i=0; $i<count($list); $i++) {
        $sheet->setCellValue('A'.($i+2), $i+1);
        $sheet->setCellValue('B'.($i+2), $list[$i]['reg_date']);
        $sheet->setCellValue('C'.($i+2), $list[$i]['gubun_name']);
        $sheet->setCellValue('D'.($i+2), $list[$i]['subject']);
        $sheet->setCellValue('E'.($i+2), $list[$i]['account']);
        $sheet->setCellValue('F'.($i+2), $list[$i]['name_kr']);
        $sheet->setCellValue('G'.($i+2), $list[$i]['status_name']);
        $sheet->setCellValue('H'.($i+2), $list[$i]['answer_date']);
    }

    // 엑셀 파일 출력
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}

function exportToMileageList($list, $filename)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('마일리지 지급목록');

    //열 넓이
    $sheet->getColumnDimension('B')->setWidth(12);
    $sheet->getColumnDimension('C')->setWidth(30);
    $sheet->getColumnDimension('D')->setWidth(30);
    $sheet->getColumnDimension('E')->setWidth(20);
    $sheet->getColumnDimension('F')->setWidth(15);
    $sheet->getColumnDimension('G')->setWidth(12);
    $sheet->getColumnDimension('H')->setWidth(12);



    //컬럼
    $sheet->setCellValue('A1', '번호');
    $sheet->setCellValue('B1', '아이디');
    $sheet->setCellValue('C1', '성명');
    $sheet->setCellValue('D1', '지급사유');
    $sheet->setCellValue('E1', '이벤트');
    $sheet->setCellValue('F1', '수령일');
    $sheet->setCellValue('G1', '수령액');
    $sheet->setCellValue('H1', '지급일');


    //데이터
    for($i=0; $i<count($list); $i++) {
        $sheet->setCellValue('A'.($i+2), $i+1);
        $sheet->setCellValue('B'.($i+2), $list[$i]['id']);
        $sheet->setCellValue('C'.($i+2), $list[$i]['name']);
        $sheet->setCellValue('D'.($i+2), $list[$i]['reason']);
        $sheet->setCellValue('E'.($i+2), $list[$i]['event']);
        $sheet->setCellValue('F'.($i+2), $list[$i]['receipt']);
        $sheet->setCellValue('G'.($i+2), $list[$i]['receive']);
        $sheet->setCellValue('H'.($i+2), $list[$i]['date']);
    }

    // 엑셀 파일 출력
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}

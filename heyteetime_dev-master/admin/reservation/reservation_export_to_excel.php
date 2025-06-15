<?php
require $_SERVER['DOCUMENT_ROOT'] .'/../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function exportToReservationList($list, $filename)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('예약목록');

    //컬럼
    $sheet->setCellValue('A1', '번호');
    $sheet->setCellValue('B1', '예약번호');
    $sheet->setCellValue('C1', '예약상태');
    $sheet->setCellValue('D1', '예약지역');
    $sheet->setCellValue('E1', '예약상품명');
    $sheet->setCellValue('F1', '인원수');
    $sheet->setCellValue('G1', '옵션');
    $sheet->setCellValue('H1', '결제상태');
    $sheet->setCellValue('I1', '결제수단');
    $sheet->setCellValue('J1', '예약총액');
    $sheet->setCellValue('K1', '결제금액');
    $sheet->setCellValue('L1', '쿠폰명');
    $sheet->setCellValue('M1', '마일리지');
    $sheet->setCellValue('N1', '내장자');
    $sheet->setCellValue('O1', '연락처');
    $sheet->setCellValue('P1', '예약일');
    $sheet->setCellValue('Q1', '취소일');

    //데이터
    for($i=0; $i<count($list); $i++) {
        $sheet->setCellValue('A'.($i+2), $i+1);
        $sheet->setCellValueExplicit('B'.($i+2), $list[$i]['booking_number'], DataType::TYPE_STRING);
        $sheet->setCellValue('C'.($i+2), $list[$i]['booking_status']);
//        $sheet->setCellValue('D'.($i+2), $list[$i]['continent_name'] .'>' .$list[$i]['nation_name'] .'>' .$list[$i]['state_code'] .'>' .$list[$i]['city_code']);
        $sheet->setCellValue('D'.($i+2), $list[$i]['continent_name'] .'>' .$list[$i]['nation_name']);
        $sheet->setCellValue('E'.($i+2), $list[$i]['prod_name']);
        $sheet->setCellValue('F'.($i+2), $list[$i]['person_count']);
        $sheet->setCellValue('G'.($i+2), $list[$i]['selectedOption_kr']);
        $sheet->setCellValue('H'.($i+2), $list[$i]['payment_status']);
        $sheet->setCellValue('I'.($i+2), $list[$i]['payment_method']);
        $sheet->setCellValue('J'.($i+2), $list[$i]['currency_code'].' ' .$list[$i]['sale_price']);
        $sheet->setCellValue('K'.($i+2), $list[$i]['currency_code'].' ' .$list[$i]['price']);
        $sheet->setCellValue('L'.($i+2), $list[$i]['used_coupon_name']);
        $sheet->setCellValue('M'.($i+2), $list[$i]['is_point_used']);
        $sheet->setCellValue('N'.($i+2), $list[$i]['partner_info_input_status']);
        $sheet->setCellValueExplicit('O'.($i+2), $list[$i]['rev_phone_number'], DataType::TYPE_STRING);
        $sheet->setCellValue('P'.($i+2), $list[$i]['reg_date']);
        $sheet->setCellValue('Q'.($i+2), $list[$i]['cancel_date']);
    }

    // 엑셀 파일 출력
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}

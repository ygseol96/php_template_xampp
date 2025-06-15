<?php
$_abspath = explode( '/', $_SERVER['DOCUMENT_ROOT'] );
array_pop($_abspath);
$_common_path = implode("/", $_abspath);

require $_common_path .'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
function exportToTeetimeList($list, $filename)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('티타임 목록');

    //열 넓이
    $sheet->getColumnDimension('B')->setWidth(15);
    $sheet->getColumnDimension('C')->setWidth(20);
    $sheet->getColumnDimension('D')->setWidth(30);
    $sheet->getColumnDimension('E')->setWidth(20);

    //컬럼
    $sheet->setCellValue('A1', '번호');
    $sheet->setCellValue('B1', '지역');
    $sheet->setCellValue('C1', '상품구분');
    $sheet->setCellValue('D1', '골프장명');
    $sheet->setCellValue('E1', '티타임');
    $sheet->setCellValue('F1', '소비자가');
    $sheet->setCellValue('G1', '공급가');
    $sheet->setCellValue('H1', '정상가');
    $sheet->setCellValue('I1', '판매가');
    $sheet->setCellValue('J1', '사용여부');
    $sheet->setCellValue('K1', '수정여부');
    $sheet->setCellValue('L1', '수정일');

    //데이터
    for( $i = 0; $i < count($list); $i++ )
    {
        $location = '';
        if( isset( $list[$i]['AREA_NAME'] ) && trim( $list[$i]['AREA_NAME'] ) ) {
            $location .= $location ? ' > '.$list[$i]['AREA_NAME'] : $list[$i]['AREA_NAME'];
        }
        if( isset( $list[$i]['NAT_NM'] ) && trim( $list[$i]['NAT_NM'] ) ) {
            $location .= $location ? ' > '.$list[$i]['NAT_NM'] : $list[$i]['NAT_NM'];
        }
        if( isset( $list[$i]['STATE_NM'] ) && trim( $list[$i]['STATE_NM'] ) ) {
            $location .= $location ? ' > '.$list[$i]['STATE_NM'] : $list[$i]['STATE_NM'];
        }
        if( isset( $list[$i]['CITY_NM'] ) && trim( $list[$i]['CITY_NM'] ) ) {
            $location .= $location ? ' > '.$list[$i]['CITY_NM'] : $list[$i]['CITY_NM'];
        }

        $sheet->setCellValue('A'.($i+2), $i+1);
        $sheet->setCellValue('B'.($i+2), $location);
        $sheet->setCellValue('C'.($i+2), $list[$i]['PRODUCT_TYPE']);
        $sheet->setCellValue('D'.($i+2), $list[$i]['PRD_NAME'].'('.$list[$i]['FIELD_ID'].')');
        $sheet->setCellValue('E'.($i+2), $list[$i]['TEETIME']);
        $sheet->setCellValue('F'.($i+2), 0);
        $sheet->setCellValue('G'.($i+2), $list[$i]['ORIGIN_PRICE']);
        $sheet->setCellValue('H'.($i+2), $list[$i]['MARKET_PRICE']);
        $sheet->setCellValue('I'.($i+2), $list[$i]['SALES_PRICE']);
        $sheet->setCellValue('J'.($i+2), $list[$i]['H_USE_YN']);
        $sheet->setCellValue('K'.($i+2), $list[$i]['MOD_TEXT']);
        $sheet->setCellValue('L'.($i+2), $list[$i]['UPTDATE']);
    }

    // 엑셀 파일 출력
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}

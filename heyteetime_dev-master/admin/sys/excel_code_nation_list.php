<?php
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";
/*
require $_common_path .'/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//require $_common_path . '/vendor/Header.php';


$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();
$activeWorksheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
*/

require $_common_path .'/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$sql = "
	SELECT 
		nat_cd,
		nat_nm_kr,
		nat_nm_en,
		nat_nm_jp,
		nat_nm_cn,
		curr_cd,
		curr_cd_nm,
		(SELECT cd_name FROM code_continent WHERE cd =a.cd) AS cont_name
	FROM code_nation AS a
";
$data = my_select($sql, $myconn, 'num');


$header = array(
	"국가코드",
	"국가명 한글",
	"국가명 영문",
	"국가명 일본어",
	"국가명 중국어",
	"통화코드",
	"통화코드명",
	"대륙명",
);

//$spreadsheet = new Spreadsheet();
//make_excel($header, $data);

 $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue("A1", "국가코드")
        ->setCellValue("B1", "국가명 한글")
        ->setCellValue("C1", "국가명 영문")
        ->setCellValue("D1", "국가명 일본어")
        ->setCellValue("E1", "국가명 중국어")
        ->setCellValue("F1", "통화코드")
        ->setCellValue("G1", "통화코드명");
        ->setCellValue("H1", "대륙명");

// 각 열 크기
$spreadsheet->getActiveSheet()->getColumnDimension("A")->setWidth(5);
$spreadsheet->getActiveSheet()->getColumnDimension("B")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("C")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("D")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("E")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("F")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("G")->setWidth(20);


$fileName = "국가코드_".date("YmdHis").".xlsx";
$Xlsxwrite = new Xlsx($spreadsheet);
ob_end_clean();
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=".$fileName);
header("Cache-Control: max-age=0");
$Xlsxwrite->save("php://output");
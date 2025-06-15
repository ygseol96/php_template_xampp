<?php
/** ---------------------------------------------------------------
@program : 사용자
@description : 시스템관리  > 사용자 리스트
@fileinfo : /sys/adm_list.html
@filedescription : 

@auth : 현민원
@since : 2024.1
------------------------------------------------------------------**/


include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";


////// test mssql 테스트 //////////////
echo "<br><br><br><br> ===================== test mssql ========================<br>";
$msconn = msConn('agl_test');

$sql = "
	SELECT 
		TOP 3 *
	FROM poi_mst
";
write($sql);

$row = ms_select($sql, $msconn);
print_r($row);

unset($msconn);

exit;
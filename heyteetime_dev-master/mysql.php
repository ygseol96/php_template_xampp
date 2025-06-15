<?php
/** ---------------------------------------------------------------
@program : MYSQL 함수
@description : MYSQL 함수
@fileinfo : /inc/lib/mysql.php
@filedescription : function
@auth : 현민원
@since : 2017

------------------------------------------------------------------**/

//function myConn($dbselect='master') {
function myConn($dbselect='master') {
	global $_INC;

    $db = $_INC['db'][$dbselect];
	
	$mysqli = new mysqli($db['host'],$db['user'],$db['pass'], $db['db'], $db['port']);
	

	
	$mysqli->query("set names utf8mb4");
    $mysqli->query("set time_zone = 'Asia/Seoul'");

	//$mysqli->report_mode =MYSQLI_REPORT_OFF;
	

		
	return $mysqli;
}
function my_selectdb($str,$mysqli) {
	$mysqli->select_db($str);
}

function my_select($sql,$mysqli, $mode='assoc') {
	global $_SYSTEM_MODE;
	

	$row = array();

	try {
		$result = $mysqli->query($sql);

		if($mode == 'assoc') {	
			while($tmp = $result->fetch_array(MYSQLI_ASSOC)) $row[] = $tmp;
		}
		else {
			while($tmp = $result->fetch_array(MYSQLI_NUM)) $row[] = $tmp;
		}
		$result->free();
	}
	catch(mysqli_sql_exception $e) {

		my_savelog($sql,  'select', $e->getMessage() );
		echo "error : ".$e->getMessage();
		return false;
	}


	
	return $row;
}


function my_select_one($sql,$myconn) {
	global $_SYSTEM_MODE;

	$row = array();

	try {
		$result = $myconn->query($sql);

		while($tmp = $result->fetch_array(MYSQLI_ASSOC)) $row[] = $tmp;
		$result->free();
	}
	catch(mysqli_sql_exception $e) {
		my_savelog($sql,  'selectone', $e->getMessage() );
		echo "error : ".$e->getMessage();
		return false;
	}

	if(empty($row[0])) {
		$rt = array();
	}
	else {
		$rt = $row[0];
	}

	
	
	
	return $rt;
}

function call_proc($str, $mysqli) {

	$row = array();

	try {
		$result = $mysqli->query($str);

		if(count($result) > 0 ) {
			while($tmp = $result->fetch_array(MYSQLI_ASSOC)) $row[] = $tmp;
			$result->free();

			// 프로시저 버그 삭제코드
			while($mysqli->more_results())
			{
				if($mysqli->next_result())
				{
					if( $sp_result = $mysqli->use_result() )  $sp_result->close();
				}
			}
			// 프로시저 버그 삭제코드 끝
		}
	}
	catch(mysqli_sql_exception $e) {
		my_savelog($str,  'proc', $e->getMessage() );
		echo "error : ".$e->getMessage();
		return false;
	}


	
		
	return $row;
}

function my_read($str,$mysqli) {
	global $_SYSTEM_MODE;

	

	try {
		$result = $mysqli->query($str);
	}
	catch(mysqli_sql_exception $e) {
		my_savelog($str,  'read', $e->getMessage() );

		return false;
	}

	$val = $result->fetch_array(MYSQLI_NUM);
	$result->free();

	//echo "cnt = $val[0] ";
	if(!empty($val[0])) $rt = $val[0];
	else $rt =0;
	return $rt;
}

function my_query($str,$mysqli) {
	global $_SYSTEM_MODE;
	
	
	try {
		$mysqli->query($str);
	}
	catch(mysqli_sql_exception $e) {
		//my_savelog($str,  'query', $mysqli->error );
		my_savelog($str,  'query', $e->getMessage() );
		return false;
	}

	return true;
}

function my_insert_id($mysqli) {
   $sql = "SELECT last_insert_id()";
   $result = $mysqli->query($sql);
   $val = $result->fetch_array(MYSQLI_NUM);
   $result->free();
   return $val[0];	   
}
function my_begin_trans($mysqli) {
	$mysqli->query("START TRANSACTION");
}
function my_commit($mysqli) {
	$mysqli->query("commit");
	
}
function my_rollback($mysqli, $sql="") {
	$mysqli->query("rollback");
	if($sql) {
		my_savelog($sql);
	}
	
}

function db_close() {
   global $myconn, $row, $data, $tpl, $msconn;
   @$myconn->close();

   if(!empty($msconn)) {
	   //@sqlsrv_close($msconn);
	   unset($msconn);
   }

   if(!empty($row)) unset($row);
   if(!empty($data)) unset($data);
   if(!empty($tpl)) unset($tpl);
}

function my_savelog($qry, $mode='', $err='') {
	global $_INC, $myconn;

	$qry = str_replace('"','＂',$qry);
	$qry = str_replace("'",'＇',$qry);
	
	if(!empty($_SERVER['QUERY_STRING'])) {
		$arg = str_replace('"','＂',$_SERVER['QUERY_STRING']);
		$arg = str_replace("'",'＇',$arg);
	}
	if(!empty($err)) {
		$err = str_replace('"','＂',$err);
		$err = str_replace("'",'＇',$err);
	}

	$script_url = $_SERVER['SCRIPT_FILENAME'];
	if(!empty($arg)) $script_url .="?".$arg;

	$sql = "
		insert into ".$_INC['db']['master']['db'].".tb_log_sqlerror
		set
			sql_txt ='".$qry."'
			, reg_date = now()
			, script_url ='".$script_url."'
			, sqlmode = '$mode'
			, sqlerror = '$err'
	";
	//echo $sql;


	if($myconn) {		
		
		$myconn->query($sql);
	}
	else {
		$myconn = myConn();
		
		$myconn->query($sql);
		$myconn->close();
	}
}

function my_update_cnt($mysqli) {
	return $mysqli->affected_rows;
}

function my_debug_sql($qry) {
	global $myconn, $_INC;

	$qry = str_replace('"','＂',$qry);
	$qry = str_replace("'",'＇',$qry);

	$sql = "
		insert into ".$_INC['db_master']['db'].".tb_log_sqlerror
		set
			sql_txt ='".$qry."'
			, reg_date = now()
			, script_url =''
			, sqlmode = 'debug'
			, sqlerror = ''

	";
	$myconn->query($sql);
}

function my_select_array_txt($sql, $mysqli) {
	
	$row = array();


	try {
		$result = $mysqli->query($sql);

		while($tmp = $result->fetch_array(MYSQLI_ASSOC)) $row[] = $tmp;
		$result->free();
		
		$return = "";
		if(my_count($row) > 0 ) {

			for($i=0; $i < my_count($row); $i++) {
				if($i > 0 ) $return .= ",";
				$return .= '"'.$row[$i]['arr_value'].'"';

			}
		}
	}
	catch(mysqli_sql_exception $e) {
		//my_savelog($str,  'query', $mysqli->error );
		my_savelog($sql,  'selectarray', $e->getMessage() );
		return false;
	}

	
	
	
	return $return;
	
}
?>
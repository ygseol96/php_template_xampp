<?php
/** ---------------------------------------------------------------
@program : MSSQL 함수 - 
@description : pdo 사용
@fileinfo : /inc/lib/mssql.php
@filedescription : function
@auth : 현민원
@since : 2024.1

------------------------------------------------------------------**/

function msConn($dbselect='HTT20') {
	global $_INC;

	
	$db = $_INC['db'][$dbselect];
	
	$conn = new PDO("sqlsrv:Server=".$db['host'].",".$db['port'].";Database=".$db['db'], $db['user'], $db['pass']);
	$conn->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_UTF8);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $conn;
}


function ms_select($sql,$msconn) {
	global $_SYSTEM_MODE;
	

	try {
	
		$stmt = $msconn->prepare($sql);
		$stmt->execute();
		
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $result;
	}
	catch(PDOException $e) {
		echo $e->getMessage();

		my_savelog($sql,  'msselect', $e->getMessage() );
	}
}




function ms_select_one($sql,$msconn) {
	global $_SYSTEM_MODE;

	try {

		$stmt = $msconn->prepare($sql);
		$stmt->execute();

		//$stmt->nextRowset();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $result[0];
	}
	catch(PDOException $e) {
		echo $e->getMessage();

		my_savelog($sql,  'msselectone', $e->getMessage() );
	}
}



function ms_read($sql,$msconn) {
	global $_SYSTEM_MODE;


	try {

		$stmt = $msconn->prepare($sql);
		$stmt->execute();

		//$stmt->nextRowset();
		$result = $stmt->fetchAll(PDO::FETCH_NUM);
		
		return $result[0][0];
	}
	catch(PDOException $e) {
		echo $e->getMessage();

		my_savelog($sql,  'msread', $e->getMessage() );
	}
}

function ms_query($sql,$msconn) {
	global $_SYSTEM_MODE;

	try {

		$stmt = $msconn->prepare($sql);
		$stmt->execute();

		return 1;
	}

	catch(PDOException $e) {
		echo $e->getMessage();

		my_savelog($sql,  'msquery', $e->getMessage() );

		return ;
	}
}

function ms_insert_id($msconn) {
   $sql = "SELECT @@IDENTITY AS SEQ";
   $val = ms_read($sql, $msconn);
   return $val;	   
}
function ms_begin_trans($msconn) {
	$msconn->beginTransaction();  
}
function ms_commit($msconn) {
	$msconn->commit();  
	
}
function ms_rollback($msconn, $sql="") {
	$msconn->rollback();
}

function ms_close() {
   global $msconn;
   //@sqlsrv_close($msconn);
   $msconn = null;
}

function formatErrors($errors)
{
    // Display errors
    echo "Error information: <br/>";
    foreach ($errors as $error) {
        echo "SQLSTATE: ". $error['SQLSTATE'] . "<br/>";
        echo "Code: ". $error['code'] . "<br/>";
        echo "Message: ". $error['message'] . "<br/>";
    }
}


function ms_proc($msconn, $sp_name, $sp_param, $mode="select") {

	$param_cnt = my_count($sp_param);
	

	$str = "";
	for($i=0; $i < $param_cnt; $i++) {
		if($i > 0 ) $str .=",";
		$str .="?";
	}


	$sp_txt = "{call ".$sp_name."(".$str.")}";

	try {

		$sth = $msconn->prepare($sp_txt);
		
		for($i=0; $i < $param_cnt; $i++) {
			$in_i = $i+1;

			$sth->bindParam($in_i, $sp_param[$i]);

		}
	
		$sth->execute();

		if($mode == "select") {

			$sth->nextRowset();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
		else {
			return 1;
		}

	}
	catch(PDOException $e) {
		echo $e->getMessage();

		$sql = $sp_txt;

		my_savelog($sql,  'msproc', $e->getMessage() );

		return ;
	}


	
}




?>
<?php




/*
 * 원장데이타 넣기
*/
function my_input_moneyhistory($data) {
	global $_MG,$myconn;

	$table = "member_bank_history";

   // build query...
   $sql  = "INSERT INTO $table";
   // implode keys of $array...
   $sql .= " (`".implode("`, `", array_keys($data))."`)";
   // implode values of $array...
   $sql .= " VALUES ('".implode("', '", $data)."') ";

 			error_log(date("Ymd His"). " 원장데이타 넣기 :  data=> ".print_r($data,TRUE) ."".$sql." \n",3, $_SERVER['DOCUMENT_ROOT']."/test/log/Log_moneyhistory_".date("Ymd")."_log.txt");

	$rt = my_query($sql, $myconn);
	if(!$rt) {
 			error_log(date("Ymd His"). " 원장데이타 넣기 에러 :  rt=> ".print_r($rt,TRUE) ."".$sql."  \n",3, $_SERVER['DOCUMENT_ROOT']."/test/log/Log_moneyhistory_".date("Ymd")."_log.txt");
			//return "N";
	}


	//return "Y";
}
/*
ex:
{ // 원장테이블 데이타 입력 by Peter @ 2018-05-30
		include  $_SERVER['DOCUMENT_ROOT']."/inc/lib/myfunc.php";
		$mydata = array(
			"member_no"	=>"",
			"use_div"			=>"", //용도 구분 , 1: FX거래, 2:은행입출금, 3:대여금거래	
			"inout_div"		=>"", //입출금 구분 1: 입금, 2: 출금	
			"money_div"	=>"", //FX구매거래구분 E,P,R	 
			"amount"			=>"", //입출금액 	 
			"balance"		=>"", //잔고 		
			"desc_txt"		=>"", //거래내용	 :
			"regdt"			=> date("Y-m-d H:i:s"), //등록일시	
			"regip"			=>"$_SERVER['REMOTE_ADDR']", //등록ip	
			"regid"			=>"$_SESSION['svc_id']", //등록자ID
		);
		@my_input_moneyhistory($mydata) ;
}

*/




/*
 * 원장데이타 넣기
*/
function my_input_moneyhistory_2($data) {


	$table = "member_bank_history";

   // build query...
   $sql  = "INSERT INTO $table";
   // implode keys of $array...
   $sql .= " (`".implode("`, `", array_keys($data))."`)";
   // implode values of $array...
   $sql .= " VALUES ('".implode("', '", $data)."') ";

 			error_log(date("Ymd His"). " 원장데이타 넣기 :  data=> ".print_r($data,TRUE) ."".$sql." \n",3, $_SERVER['DOCUMENT_ROOT']."/test/log/Log_moneyhistory_".date("Ymd")."_log.txt");

	$rt = mysql_query($sql);

	if(!$rt) {
 			error_log(date("Ymd His"). " 원장데이타 넣기 에러 :  rt=> ".print_r($rt,TRUE) ."".$sql."  \n",3, $_SERVER['DOCUMENT_ROOT']."/test/log/Log_moneyhistory_".date("Ymd")."_log.txt");
			//return "N";
	}


	//return "Y";
}
/*
ex:
{ // 원장테이블 데이타 입력 by Peter @ 2018-05-30
		include  $_SERVER['DOCUMENT_ROOT']."/inc/lib/myfunc.php";
		$mydata = array(
			"member_no"	=>"",
			"use_div"			=>"", //용도 구분 , 1: FX거래, 2:은행입출금, 3:대여금거래	
			"inout_div"		=>"", //입출금 구분 1: 입금, 2: 출금	
			"money_div"	=>"", //FX구매거래구분 E,P,R	 
			"amount"			=>"", //입출금액 	 
			"balance"		=>"", //잔고 		
			"desc_txt"		=>"", //거래내용	 :
			"regdt"			=> date("Y-m-d H:i:s"), //등록일시	
			"regip"			=>"$_SERVER['REMOTE_ADDR']", //등록ip	
			"regid"			=>"$_SESSION['svc_id']", //등록자ID
		);
		@my_input_moneyhistory($mydata) ;
}

*/


?>
<?php
/** ---------------------------------------------------------------
@program : 함수 정의
@description : 공통함수 정의
@fileinfo : /inc/lib/func.php
@filedescription : function

@auth : 현민원
@since : 2018.04
------------------------------------------------------------------**/
	
////
////
//// 공통함수
////
////


// 파라미터 함수 - empty 체크시는 사용불가
function post($arg) {
	return $_POST[$arg];
}

function get($arg) {
	return $_GET[$arg];
}

function request($arg) {
	return $_REQUEST[$arg];
}
function session($arg) {
	return $_SESSION[$arg];
}



function close() {
	global $myconn;

	if($myconn) db_close();
	exit;
}

function cronMailInsert( $email_type, $email_html, $email_subject, $product_code, $reservation_date) {
	global $myconn;


	$query = "
	INSERT INTO ht_email SET
	    email_type = '".$email_type."',
	    email_html = '".$email_html."',
	    email_subject = '".$email_subject."',
	    product_code = '".$product_code."',
	    reg_date = '".date("Y-m-d h:i:s")."',
	    reservation_date = '$reservation_date' ";

	my_query($query, $myconn);
}

function write($str='') {
	echo "<pre>";
	echo $str;
	echo "</pre>";
}

function utf8_to_kr($str) {
	return iconv('utf-8','euc-kr', $str);
}
function kr_to_utf8($str) {
	return iconv('euc-kr','utf-8', $str);
}
// select option 만들기
function selectOption($arr, $selectedValue, $opt="default") {
	
	if($opt == "array") {
		$str ="";
		foreach($arr as $name=>$value) {
			$str .="<option value='".$value."' ";
			
			if($value == $selectedValue ) $str .= " selected";
			$str .=">".$name."</option>\n";
		}		
	}
	else if($opt == "array_name") {
		$str ="";
		foreach($arr as $name=>$value) {
			$str .="<option value='".$name."' ";
			
			if($name == $selectedValue ) $str .= " selected";
			$str .=">".$name."</option>\n";
		}		
	}
	else if($opt == "array_reverse") {
		$str ="";
		foreach($arr as $name=>$value) {
			$str .="<option value='".$name."' ";
			
			if($name == $selectedValue ) $str .= " selected";
			$str .=">".$value."</option>\n";
		}		
	}
	else if($opt == "db") {
		$str="";
		for($i=0; $i < my_count($arr); $i++) {
			$str .="<option value='".$arr[$i]['value']."' ";
			if($arr[$i]['value'] == $selectedValue ) $str .= " selected";
			//if($arr[$i]['value'] == $selectedValue || ) $str .= " selected";
			$str .=">".$arr[$i]['name']."</option>\n";
		}
	}
	else if($opt == "dbcolor") {
		$str="";
		for($i=0; $i < my_count($arr); $i++) {
			$str .="<option value='".$arr[$i]['value']."' ";
			if($arr[$i]['value'] == $selectedValue) $str .= " selected";
			if($arr[$i]['style'] > '' ) {
				$str .= " style='".$arr[$i]['style']."' ";
			}
			$str .=">".$arr[$i]['name']."</option>\n";
		}
	}
	else if($opt == "default") {
		$str="";
		for($i=0; $i < my_count($arr); $i++) {
			$str .="<option value='".$arr[$i]."' ";
			if($arr[$i] == $selectedValue) $str .= " selected";
			$str .=">".$arr[$i]."</option>\n";
		}
	}
	else if($opt == "array1") {
		$str ="";
		foreach($arr as $name=>$value) {
			$str .="<option value='".$name."' ";
			
			if($name == $selectedValue ) $str .= " selected";
			$str .=" style='color:".$value[1]."'>".$value[0]."</option>\n";
		}	
	}

	else if($opt == "array2") {
		$str ="";
		foreach($arr as $name=>$value) {
			$str .="<option value='".$name."' ";
			
			if($name == $selectedValue ) $str .= " selected";
			$str .=">".$value[0]." (".$value[1].")</option>\n";
		}	
	}

	else if($opt == "array3") {
		$str ="";
		foreach($arr as $name=>$value) {
			$str .="<option value='".$name."' ";
			
			if($name == $selectedValue ) $str .= " selected";
			$str .=">".$value[0]." (".$value[1].") -> ".number_format($value[2])."원</option>\n";
		}	
	}

	else if($opt == "array_1st") {
		$str ="";
		foreach($arr as $name=>$value) {
			$str .="<option value='".$name."' ";
			
			if($name == $selectedValue ) $str .= " selected";
			$str .=">".$value[0]."</option>\n";
		}	
	}
	else if($opt == "array_2nd") {
		$str ="";
		foreach($arr as $name=>$value) {
			$str .="<option value='".$name."' ";
			
			if($name == $selectedValue ) $str .= " selected";
			$str .=">".$value[1]."</option>\n";
		}	
	}
	
	
	return $str;
}
// 년도 select option 만들기
function selectOptionYear($year, $selected_year='', $orderby="desc") {
	$rt ="";
	$now_year = (int) $year;
	if($orderby == "desc") {
		for($i=$now_year; $i >= 2020; $i--) {
			$rt .="<option value='$i' ";
			if($i == $selected_year ) $rt .= " selected";
			$rt .=">$i</option>\n";
		}
	}
	return $rt;
}

// 년도 select option 만들기
function selectOptionYear2($syear, $selected_year=2024) {
	$rt ="";
	$now_year = (int) $syear;
	$end_year = date('Y',strtotime("+1year"));
	
	if(!$syear) {
		$syear = "2022";
	}

	for($i=$syear; $i <= $end_year; $i++) {
		$rt .="<option value='$i' ";
		if($i == $selected_year ) $rt .= " selected";
		$rt .=">$i</option>\n";
	}
		
	
	return $rt;
}

// 월 select option 만들기
function selectOptionMonth($month) {
	$rt ="";
	
	for($i=1; $i <= 12; $i++) {
		if($i <10) $in_i = "0".$i;
		else $in_i = $i;

		$rt .="<option value='$in_i' ";
		if($i == $month ) $rt .= " selected";
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}

function selectOptionMonth2($month, $arg =0) {
	$rt ="";
	
	for($i=$arg; $i <= 12; $i++) {
		$in_i = $i;

		$rt .="<option value='$in_i' ";
		if($i == $month ) $rt .= " selected";
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}

function selectOptionWeek($week, $arg =1) {
	$rt ="";
	
	for($i=$arg; $i <= 7; $i++) {
		$in_i = $i;

		$rt .="<option value='$in_i' ";
		if($i == $week ) $rt .= " selected";
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}

function selectOptionWeek2($week, $arg =1) {
	$rt ="";
	
	for($i=$arg; $i <= 18; $i++) {
		$in_i = $i;

		$rt .="<option value='$in_i' ";
		if($i == $week ) $rt .= " selected";
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}


// 일자 select option 만들기
function selectOptionDay($day) {
	$rt ="";
	
	for($i=1; $i <= 31; $i++) {
		if($i <10) $in_i = "0".$i;
		else $in_i = $i;

		$rt .="<option value='$in_i' ";
		if($i == $day ) $rt .= " selected";
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}

// 일자 select option 만들기
function selectOptionDay2($day) {

	$day = (int) $day;
	$rt ="";
	
	for($i=1; $i <= 31; $i++) {
		if($i <10) $in_i = "0".$i;
		else $in_i = $i;

		$rt .="<option value='$in_i' ";
		if($i == $day ) $rt .= " selected";
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}

// 일자 select option 만들기
function selectOptionDay3($day=31) {

	$day = (int) $day;
	$rt ="";
	
	for($i=1; $i <= 31; $i++) {
		$in_i = $i;

		$rt .="<option value='$in_i' ";
		if($i == $day ) $rt .= " selected";
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}

function selectYM($syear=2020,$smonth="10", $date='') {

	$now_year = date('Y');

	$temp = explode("-", $date);

	if($now_year == $syear) {
	

		

		if($temp[0] == $syear) {
			$smonth = 10;
			$emonth = (int) date('m');
			
		}
		else {
			$smonth =1;
			$emonth = 12;

		}
		
		$rtvar ="";

		for($i=$smonth; $i <= $emonth; $i++) {
			if($i < 10) $in_i = "0".$i;
			else $in_i = $i;

			$val = $syear."-".$in_i;
			$txt = $syear."년 ".$i."월";

			$rtvar .= "<option value='".$val."' ";
			if($val == $date) $rtvar .=" selected";
			$rtvar .=">".$txt."</option>\n";
		}
	}
	else {
		
		for($i=$syear; $i <= $now_year; $i++) {
			if($i == $syear) {
				$smonth = 10;
				$emonth = 12;
			}
			else if($i == $now_year){
				$smonth = 1;
				$emonth = (int) date('m');
			}
			else {
				$smonth=1;
				$emonth=12;
			}
			for($j=$smonth; $j <= $emonth; $j++) {
				if($j < 10) $in_i = "0".$j;
				else $in_i = $j;

				$val = $i."-".$in_i;
				$txt = $i."년 ".$j."월";

				$rtvar .= "<option value='".$val."' ";
				if($val == $date) $rtvar .=" selected";
				$rtvar .=">".$txt."</option>\n";
			}
		}

	}
	return $rtvar;
}


// 시간 select option 만들기
function selectOptionHour($hour="") {
	$rt ="";
	
	for($i=0; $i <= 23; $i++) {
		if($i <10) $in_i = "0".$i;
		else $in_i = $i;

		$rt .="<option value='$in_i' ";
		if($hour > "") {
			if($i == $hour ) $rt .= " selected";
		}
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}


// 분 select option 만들기
function selectOptionMinute($min="") {
	$rt ="";
	
	for($i=0; $i <= 59; $i++) {
		if($i <10) $in_i = "0".$i;
		else $in_i = $i;

		$rt .="<option value='$in_i' ";
		if($min > "") {
			if($i == $min ) $rt .= " selected";
		}
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}

// 분 select option 만들기(15분 단위)
function selectOptionMinute15($min="") {
	$rt ="";
	
	for($i=0; $i <= 59; $i=$i+15) {
		if($i <10) $in_i = "0".$i;
		else $in_i = $i;

		$rt .="<option value='$in_i' ";
		if($min > "") {
			if($i == $min ) $rt .= " selected";
		}
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}

// 분 select option 만들기(15분 단위)
function selectOptionMinute5($min="") {
	$rt ="";
	
	for($i=0; $i <= 59; $i=$i+5) {
		if($i <10) $in_i = "0".$i;
		else $in_i = $i;

		$rt .="<option value='$in_i' ";
		if($min > "") {
			if($i == $min ) $rt .= " selected";
		}
		$rt .=">$in_i</option>\n";
	}
	
	return $rt;
}
/*
function selectDiv($id,  $title='', $data= array(), $selected='', $selected_name='', $width=100, $gubun ='db', $style='', $submit = 'Y', $func='' ) {
	
	if($gubun =='db') {
		$html ='<div class="dropdown" style="width:'.$width.'px">
					  <div  onclick="drop_search(\''.$id.'\')" class="dropbtn" id="'.$id.'_title">
		';
		
		if($selected > '' ) {
			if( $selected_name) {
				$html .= $selected_name;
			}
			else {
				$html .= $title;
			}
		}
		else {
			$html .= $title;
		}
		$html .=	 '</div>';

		$html .= '			  
					  <div id="'.$id.'_input" class="dropdown-search" >
						<input type="text" placeholder="검색" class="drop_input" name="'.$id.'_txt" id="'.$id.'_txt" value ="'.$selected_name.'" onkeyup="dropFilter(\''.$id.'\')" autocomplete="off">
						<input type="hidden"  name="'.$id.'" id="'.$id.'" value ="'.$selected.'">
					  </div>
					  <div id="'.$id.'_contents" class="dropdown-content" >
		';

		if( $selected > '' ) {
			$html .='	<a href="javascript:drop_selected(\''.$id.'\',\'\',\''.$title.'\',\''.$submit.'\',\''.$func.'\')"><b>'.$title.'</b></a> ';
		}

		$count = my_count($data);

		for($i=0; $i < $count; $i++) {

			$html .='	<a href="javascript:drop_selected(\''.$id.'\',\''.$data[$i]['value'].'\',\''.$data[$i]['name'].'\',\''.$submit.'\',\''.$func.'\')"';
			if($data[$i]['style'] > '') $html .= ' style= "'.$data[$i]['style'].'" ';
			$html .='>'.$data[$i]['name'].'</a> ';
			$html .= "\n";
		}
						
		$html .= '			  </div>
					</div>
		';
	}

	return $html;
}

*/
function selectDiv($id,  $title='', $data= array(), $selected='', $selected_name='', $width=100, $gubun ='db', $style='', $submit = 'Y', $func='' ) {
	
	if($gubun =='db') {
		$html ='<div class="dropdown" style="width:'.$width.'px">
					  <div  onclick="drop_search(\''.$id.'\')" class="dropbtn" id="'.$id.'_title">
		';
		
		if($selected > '' ) {
			if( $selected_name) {
				$html .= $selected_name;
			}
			else {
				$html .= $title;
			}
		}
		else {
			$html .= $title;
		}
		$html .=	 '</div>';

		$html .= '			  
					  <div id="'.$id.'_input" class="dropdown-search" >
						<input type="text" placeholder="검색" class="drop_input" name="'.$id.'_txt" id="'.$id.'_txt" value ="'.$selected_name.'" onkeyup="dropFilter(\''.$id.'\')" autocomplete="off">
						<input type="hidden"  name="'.$id.'" id="'.$id.'" value ="'.$selected.'">
					  </div>
					  <div id="'.$id.'_contents" class="dropdown-content" >
		';

		if( $selected > '' ) {
			//$html .='	<a href="javascript:drop_selected(\''.$id.'\',\'\',\''.$title.'\',\''.$submit.'\',\''.$func.'\')"><b>'.$title.'</b></a> ';
			$html .='	<a href="javascript:drop_selected(\''.$id.'\',\'\',\''.$title.'\',\''.$submit.'\' ';
			if($func > '' ) $html .= ','.$func;
			$html .=')"><b>'.$title.'</b></a> ';
		}

		$count = my_count($data);

		for($i=0; $i < $count; $i++) {

			//$html .='	<a href="javascript:drop_selected(\''.$id.'\',\''.$data[$i]['value'].'\',\''.$data[$i]['name'].'\',\''.$submit.'\',\''.$func.'\')"';
			$html .='	<a href="javascript:drop_selected(\''.$id.'\',\''.$data[$i]['value'].'\',\''.$data[$i]['name'].'\',\''.$submit.'\' ';
			if($func > '' ) $html .=','.$func;
			$html .=')"';
			if($data[$i]['style'] > '') $html .= ' style= "'.$data[$i]['style'].'" ';
			$html .='>'.$data[$i]['name'].'</a> ';
			$html .= "\n";
		}
						
		$html .= '			  </div>
					</div>
		';
	}

	return $html;
}



function selectShop($id,  $title='', $data= array(), $selected='', $selected_name='', $width=100, $gubun ='db' ) {

	
	
	if($gubun =='db') {
		$html ='<div class="dropdown" style="width:'.$width.'px">
					  <div  onclick="drop_search(\''.$id.'\')" class="dropbtn" id="'.$id.'_title">
		';
		
		if($selected > '' ) {
			if( $selected_name) {
				$html .= $selected_name;
			}
			else {
				$html .= $title;
			}
		}
		else {
			$html .= $title;
		}
		$html .=	 '</div>';

		$html .= '			  
					  <div id="'.$id.'_input" class="dropdown-search" >
						<input type="text" placeholder="검색" class="drop_input" name="'.$id.'_txt" id="'.$id.'_txt" value ="'.$selected_name.'" onkeyup="dropFilter(\''.$id.'\')" autocomplete="off">
						<input type="hidden"  name="'.$id.'" id="'.$id.'" value ="'.$selected.'">
					  </div>
					  <div id="'.$id.'_contents" class="dropdown-content" >
		';

		if( $selected > '' ) {
			$html .='	<a href="javascript:shop_selected(\''.$id.'\',\'\',\'\')"><b>'.$title.'</b></a> ';
		}

		$count = my_count($data);

		for($i=0; $i < $count; $i++) {

			$html .='	<a href="javascript:shop_selected(\''.$id.'\',\''.$data[$i]['value'].'\',\''.$data[$i]['name'].'\')">'.$data[$i]['name'].'</a> ';
			$html .= "\n";
		}
						
		$html .= '			  </div>
					</div>
		';
	}

	return $html;
}




// 이메일 발송 함수
/*
function send_htmlmail($fromEmail,$fromName, $toEmail, $toName, $subject, $message, $files='', $bccEmail='', $filename=''){

	
	///////////////////// header 설정 ////////////////////////////////
	// HTML 내용을 메일로 보낼때는 Content-type을 설정해야한다
	$headers  = 'MIME-Version: 1.0' . "\r\n";
		
	$boundary = md5(uniqid(microtime())); // 이메일 내용 구분자 설정
	if($files) $headers .= "Content-Type: Multipart/mixed; boundary = \"$boundary\"";
	else $headers .= 'Content-type: text/html; charset=utf-8; ' . "\r\n";


	
	// 받는사람 표시	
	//$headers .= "To: "."\"=?UTF-8?B?".base64_encode($toName)."?=\"<". $toEmail.">" . "\r\n";
	//$headers .= "To: <". $toEmail.">" . "\r\n";
	//$headers .= "To: ".$toName."<". $toEmail.">" . "\r\n";

	

	// 보내는사람
	$headers .= "From: "."\"=?UTF-8?B?".base64_encode($fromName)."?=\" <".$fromEmail.">" . "\r\n"."Reply-To: ".$fromEmail . "\r\n" ;

	$headers .= "Return-Path: <$fromEmail>". "\r\n" ;

	
	
	// 참조
	//if($bccEmail) $headers .= "Bcc: ".$bccEmail. "\r\n";

	// 숨은참조
	//if($bccEmail) $headers .= "Cc: ".$bccEmail . "\r\n";

	$headers .= 'X-Mailer: PHP/' . phpversion();


	//받는사람 설정
	$toEmailStr = "\"=?UTF-8?B?".base64_encode($toName)."?=\"<". $toEmail.">";
	
	// 제목
	$subject = "=?UTF-8?B?".base64_encode($subject)."?=";

	

	///////////////////////// message 설정 ///////////////////////////
	if($files) {
		
		$send_message .= "--$boundary\r\n"; // 내용 구분자 추가
		$send_message .= "Content-Type: text/html; charset=\"utf-8\"\r\n"; 
		$send_message .= "Content-Transfer-Encoding:  base64\r\n\r\n"; 
		$send_message .= chunk_split(base64_encode($message))."\r\n\r\n";
		

		
		
		//================== 파일첨부파트
		
		if(!$filename) {
			$filename = basename($files); // 파일명만 추출 후 $filename에 저장
		}
		
		$fp = fopen($files, "r"); // 파일 open
		$file = fread($fp, filesize($files)); // 파일 내용을 읽음
		fclose($fp); // 파일 close

				
		$send_message .= "--$boundary\r\n"; // 내용 구분자 추가
		// 여기부터는 어떤 내용이라는 것을 알려줌
		$send_message.= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";

		 //암호화 방식을 알려줌
		$send_message .= "Content-Transfer-Encoding: base64\r\n";
		 // 첨부파일임을 알려줌
		$send_message .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
		 // 파일 내요을 암호화 하여 추가
		$send_message .= chunk_split(base64_encode($file))."\r\n\r\n";

		$send_message .= "--".$boundary."--"; 

		

	}
	else {

		$send_message = $message. "\r\n\r\n"; 
		
	}
	
	//echo $headers;
	
	// 메일 보내기
	//$rt = mail($toEmailStr, $subject, $send_message, $headers, '-f'.$fromEmail);
	$rt = mail($toEmailStr, $subject, $send_message, $headers);
	return $rt;


}
*/

function send_htmlmail($fromEmail,$fromName, $toEmail, $toName, $subject, $message){

	
	///////////////////// header 설정 ////////////////////////////////
	// HTML 내용을 메일로 보낼때는 Content-type을 설정해야한다
	$headers  = 'MIME-Version: 1.0' . "\r\n";
		
	$boundary = md5(uniqid(microtime())); // 이메일 내용 구분자 설정
	$headers .= 'Content-type: text/html; charset=utf-8; ' . "\r\n";


	
	// 받는사람 표시	
	//$headers .= "To: "."\"=?UTF-8?B?".base64_encode($toName)."?=\"<". $toEmail.">" . "\r\n";
	//$headers .= "To: <". $toEmail.">" . "\r\n";
	//$headers .= "To: ".$toName."<". $toEmail.">" . "\r\n";

	

	// 보내는사람
	$headers .= "From: "."\"=?UTF-8?B?".base64_encode($fromName)."?=\" <".$fromEmail.">" . "\r\n"."Reply-To: ".$fromEmail . "\r\n" ;

	$headers .= "Return-Path: <$fromEmail>". "\r\n" ;

	
	
	//$headers .= 'X-Mailer: PHP/' . phpversion();
	


	//받는사람 설정
	$toEmailStr = "\"=?UTF-8?B?".base64_encode($toName)."?=\"<". $toEmail.">";
	
	// 제목
	$subject = "=?UTF-8?B?".base64_encode($subject)."?=";

	

	///////////////////////// message 설정 ///////////////////////////
	
		
	
	//$send_message .= "Content-Type: text/html; charset=\"utf-8\"\r\n"; 
	//$send_message .= "Content-Transfer-Encoding:  base64\r\n\r\n"; 
	//$send_message .= chunk_split(base64_encode($message))."\r\n\r\n";
	$send_message  ="<html><head>";
	$send_message .="<meta http-equiv='Content-Type' content='text/htm;charset=utf-8'>";
	$send_message .="</head>";
	$send_message .="<body>";
	$send_message .=  $message;
	$send_message .="</body>";
	$send_message .="</html>";

	//echo $send_message;
	


	
	
	//echo $headers;
	
	// 메일 보내기
	$rt = mail($toEmailStr, $subject, $send_message, $headers, $fromEmail);

	//print_r($rt);
	return $rt;


}


// 체크박스 선택 코드로 배열만들기
function makeArray($arr, $match_str) {
	$return_array= array();

	foreach($arr as $name=>$value) {
		$return_array[] = array('name'=>$name, 'value'=>$value);
	}
	//print_r($return_array);
	$match_str = " ".$match_str;
	for($i=0; $i < count($return_array); $i++) {
		if(strpos($match_str, $return_array[$i]['value']) > 0 ) $return_array[$i]['matched'] = "matched";
		else $return_array[$i]['matched'] = "";
	}
	//print_r($return_array);

	return $return_array;
}
function array_random(&$arr, $num='') {
	if($num=='') $num=count($arr);
	if(empty($arr)) return false;
	$keys = array_keys($arr);
	shuffle($keys);
	$r = array();
	for ($i = 0; $i < $num; $i++) {
		$r[$keys[$i]] = $arr[$keys[$i]];
	}
	return $r;
}

function array_map_recursive($callback, $array) {
	foreach ($array as $key => $value) {
		if (is_array($array[$key])) {
			$array[$key] = array_map_recursive($callback, $array[$key]);
		}
		else {
			$array[$key] = call_user_func($callback, $array[$key]);
		}
	}
	return $array;
}


/////////
// 문자열
/////////

function dateView($datevar, $mode) {
	$datevar = str_replace("-","", $datevar);
	$datevar = str_replace(" ","", $datevar);
	$datevar = str_replace(":","", $datevar);

	switch($mode) {
		case "dot_date":
			$rtvar = substr($datevar, 0, 4).".".substr($datevar, 4, 2).".".substr($datevar, 6, 2);
			break;
		case "dot_datetime":
			$rtvar = substr($datevar, 0, 4).".".substr($datevar, 4, 2).".".substr($datevar, 6, 2);
			$rtvar .= " ". substr($datevar, 8, 2).":".substr($datevar, 10, 2);
			break;
		case "dot_datesec":
			$rtvar = substr($datevar, 0, 4).".".substr($datevar, 4, 2).".".substr($datevar, 6, 2);
			$rtvar .= " ". substr($datevar, 8, 2).":".substr($datevar, 10, 2).":".substr($datevar, 12, 2);
			break;
	}
	return $rtvar;
}

// 값과 매칭되는 배열명 가져오기
function findArrayName($arr, $data, $opt='array') {		
	$str ="";
	if($opt == 'array') {
		foreach($arr as $name=>$value) {
			if($data == $value) $str = $name;
		}
	}
	else if($opt == "db") {
		for($i=0; $i < count($arr); $i++) {
			
			if($arr[$i]['value'] == $data) $str = $arr[$i]['name'];

		}
	}
	return $str;
}



//xss데이타 포함여부 확인
function xssCkeck($vars='', $stop=1){
	$rst=true;
	$pattern = '/(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|cookie|xml)[^>]*+>/i';
	if(is_array($vars)){
		foreach($vars as $key => $value){
			if(preg_match($pattern, $value)){
				$rst=false;
				break;
			}
		}
	}else{
		if(preg_match($pattern, $vars)){
			$rst=false;
		}
	}
	if($stop==1){
		if ( $rst==false ) {
			echo '데이타에 올바르지 않은 값이 포함되어 있습니다';
			exit;
		}
	}else if($stop==2){
		if ( $rst==false ) {
			return $rst;
		}
	}else{
		if ( $rst==false ) {
			echo '<script type="text/javascript">';
			echo 'alert("데이타에 올바르지 않은 값이 포함되어 있습니다");';
			echo 'if(opener){';
			echo '	self.window.close();';
			echo '}else{';
			echo '	history.back(); }';
			echo '</script>';
			exit;
		}
	}
}

//랜덤문자열 생성(세션등에 저장하여, 인증코드로 사용)
function randomStrMake($length=10,$gbn='char'){
	if($gbn=='char'){
		$characters = "ABCDEFGHIJKLMNOPRQSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	}else{
		$characters = "0123456789";
	}

	$num_characters = strlen($characters) - 1;
	while (strlen($return) < $length) {
		$return.= $characters[mt_rand(0, $num_characters)];
	}
	return $return;
}

function br2nl($string) {
	return preg_replace('/\<br(\s*)?\/?\>/i',"\n", $string);
}
function br2null($string) {
	return preg_replace('/\<br(\s*)?\/?\>/i',"", $string);
}




// 알럿창 띄우기
function alert($msg, $action="", $url="") {
	global $myconn;

	if($myconn) db_close();

	echo "<script>alert('$msg');";
	if($action == "back") {
		echo "history.back();";
	}
	else if($action == "url") {
		echo "location.href='$url';";
	}
	else if($action == "url_parent") {
		echo "parent.location.href='$url';";
	}
	else if($action == "url_parent_parent") {
		echo "parent.location.href='$url';";
	}
	else if($action == "parent_submit") {
		$str = "
		var submitform = '<form name=\"submitform\" method=\"post\" action =\"$url\" target=\"_parent\"></form>';\n
		$(\"body\").append(submitform);\n
		document.submitform.submit(); ";
		echo $str;

	}
	else if($action == "popup_close") {
		echo "self.close();";	

	}
	else if($action == "popup_oreload") {
		echo "opener.location.reload(); self.close();";	

	}
	else if($action == "parent_close") {
		echo "parent.window.close();";	

	}
	else if($action == "top_close") {
		echo "top.window.close();";	

	}
	else if($action == "iframe_close") {
		echo "parent.document.getElementById('$url').style.display='none'; parent.document.location.reload();";	

	}

	else if($action == "func") {
		echo $url;	

	}

	echo "</script>";
	exit;	// 알럿창이후론 실행하지 않음
}

// 현재 사이트주소값 가져오기
function getURL(){ 
	$server=$_SERVER["SERVER_NAME"]; 
	$file=$_SERVER["REQUEST_URI"]; 
	$url="http://$server$file"; 
	//if($query) $url.="?$query"; 

	//echo "url = $url";
	return $url; 
} 

// 유저별 디렉토리 설정 및 생성
function userDirectory($seq, $mode='system') {
	global $_INC;

	if(!$seq) { return; }
	
	//// 회원 상위폴더 생성
	// 회원 1000 개씩 하나의 폴더로 처리

	$dirno = floor($seq/1000) + 1;
	$len = strlen($dirno);

	$ilen = 4 - $len;
	
	$temp="";
	for($i=0; $i < $ilen; $i++) {
		$temp .= "0";
	}
	
	$userdir = "U".$temp.$dirno;

	if($mode == "get") {
		return $userdir;
	}

	//echo $userdir."<br>";
	$makedir = $_INC['folder']['file_dir']."/members/".$userdir;

	if(!is_dir($makedir)) {
		exec("mkdir $makedir");
		exec("chmod -R 777 $makedir");
	}
	

	//// 회원폴더 생성
	$make_userdir = $makedir."/".$seq;

	if(!is_dir($make_userdir)) {
		exec("mkdir $make_userdir");
		exec("chmod -R 777 $make_userdir");
	}


	if($mode == 'system') {
		$return_dir = $make_userdir;
	}
	else if($mode == 'user') {
		$return_dir = "/members/".$userdir."/".$seq;
	}
	else {
		$return_dir = $_INC['folder']['file_dir_web']."/members/".$userdir."/".$seq;
	}
	return $return_dir;


}



////
////
//// DB 관련함수
////
////

//전달된 값을 DB입력값으로 변환
function dbInput($str){
	if(blank($str)){
		return "NULL";
	}else{
		return dbEscape($str);
	}
}

//전달된 값을 DB문자열입력값으로 변환
function dbInputChar($str){
	if(blank($str)){
		return "NULL";
	}else{
		return "'".dbInput($str)."'";
	}
}

//DB값을 다시 원래 입력값으로 변환
function dbOutput($str){
	return dbUnEscape($str);
}


//해당 전달값을 SQLInjection 처리된 값으로 반환

function dbEscape($str=''){
	if(empty($str)){return '';}
	
	
	$str = str_replace(array("'", '"'), array('＇', '＂'), $str);
	$str = str_replace('\\','\\\\', $str);
	
	
	
	return $str;
} 

function editorEscape($str=''){
	if(empty($str)){return '';}
	
	
	$str = str_replace(array("'"), array('＇'), $str);
	$str = str_replace('\\','\\\\', $str);
	
	
	
	return $str;
} 

//SQLInjection 처리된 값을 원래 값으로 변환

function dbUnEscape($str=''){
	if(empty($str)){return '';}
	
	$str = str_replace(array('＇', '＂'), array("'", "\""), $str);
	

	$str = str_replace('\\','', $str);
	
	return $str;
}

function dbBatEscape($str=''){
	if(empty($str)){return '';}
	
	
	$str = str_replace(array("'", '"'), array('＇', '＂'), $str);
	$str = str_replace(array("\r\n","\r","\n"),'',$str); 
	$str = str_replace('\\','', $str);
	
	
	
	return $str;
} 


//전달된 값을 DB입력값으로 변환
function html_input($str){
	
	return htmlspecialchars($str);
	
}

function html_output($str){
	
	return htmlspecialchars_decode($str);
	
}


//정규식치환함수
function pregReplace($patten, $str, $replaceStr='',  $limit = -1){
	//$limit = -1이면 전체
	if($limit=='' || $limit==0){$limit=-1;}
	return preg_replace($patten, $replaceStr, $str, $limit);
}




////
////
//// JSON 관련함수
////
////


//json을 php객체로 변환
function jsonToObj($jsonText) {
	$json = new Services_JSON();	
	$resJson = $json->decode($jsonText);

	return $resJson;
}



//json변경용 배열에서 문자열에 한글포함시 인코딩한다.
function jsonText($txt) {
	$str = str_replace("'", "\'", $txt);
	$str = str_replace('"', '\"', $str);
	//$str = str_replace('\'', '\\', $str);
	//$str = str_replace('\n', '\\n', $str);
	//$str = str_replace('\r\n', '\\n', $str);

	//$escapers = array("\\", "\"", "\n", "\r", "\t", "\x08", "\x0c");
   // $replacements = array("\\\\",  "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
	$escapers = array("\\",  "\n", "\r", "\t", "\x08", "\x0c");
    $replacements = array("\\\\",   "\\n", "\\r", "\\t", "\\f", "\\b");
    $str = str_replace($escapers, $replacements, $str);

	$str = urlencode($str);

	return $str;
}

//json변경용 배열에서 문자열에 한글포함시 인코딩한다.
function jsonArrayText($arr) {
	//print_r($arr);
	$temp = array();
	foreach($arr as $key => $value) {
		$temp[$key] = jsonText($value);

	}
	

	return $temp;
}

//배열을 json형태로 변경
function arrayToJson($arr) {
	$json = new Services_JSON();
	$resJson = json_format($json->encode(array_map_recursive("jsonText",$arr)));
	

	$resJson =jsonDecode($resJson);

	return $resJson;
}

// 디코딩 후 따옴표 처리
function jsonDecode($str) {
	$str = urldecode($str);
	
	return	$str;
}

function json_format($json) 
{ 
	$tab = "  "; 
	$new_json = ""; 
	$indent_level = 0; 
	$in_string = false; 

	$json_obj = json_decode($json); 

	if($json_obj === false) 
		return false; 

	$json = json_encode($json_obj); 
	$len = strlen($json); 

	for($c = 0; $c < $len; $c++) 
	{ 
		$char = $json[$c]; 
		switch($char) 
		{ 
			case '{': 
			case '[': 
				if(!$in_string) 
				{ 
					$new_json .= $char . "\n" . str_repeat($tab, $indent_level+1); 
					$indent_level++; 
				} 
				else 
				{ 
					$new_json .= $char; 
				} 
				break; 
			case '}': 
			case ']': 
				if(!$in_string) 
				{ 
					$indent_level--; 
					$new_json .= "\n" . str_repeat($tab, $indent_level) . $char; 
				} 
				else 
				{ 
					$new_json .= $char; 
				} 
				break; 
			case ',': 
				if(!$in_string) 
				{ 
					$new_json .= ",\n" . str_repeat($tab, $indent_level); 
				} 
				else 
				{ 
					$new_json .= $char; 
				} 
				break; 
			case ':': 
				if(!$in_string) 
				{ 
					$new_json .= ": "; 
				} 
				else 
				{ 
					$new_json .= $char; 
				} 
				break; 
			case '"': 
				if($c > 0 && $json[$c-1] != '\\') 
				{ 
					$in_string = !$in_string; 
				} 
			default: 
				$new_json .= $char; 
				break;                    
		} 
	} 

	return $new_json; 
} 



// json 결과처리
function return_json($result, $result_msg='success', $opt_msg='', $result2='Y', $result_msg2='') {
	global $myconn, $row, $data;

	if($myconn) { db_close();}

	echo '{"result":"'.$result.'", "msg":"'.rawurlencode($result_msg).'", "opt_msg":"'.rawurlencode($opt_msg).'", "result2":"'.$result2.'", "result_msg2":"'.rawurlencode($result_msg2).'"}';

	unset($row);
	unset($data);
	exit;
}



function date_view($datetime, $mode="date") {
	switch($mode) {


		case "date" :
			$rtvar = substr(str_replace("-",".",$datetime),0,10);
			break;

		//
		case "datemin" :
			
			$rtvar = substr(str_replace("-",".",$datetime),0,10)." ". substr($datetime, 11,5 );
			break;

		case "datestr" :
			
			if($datetime > "" ) {
				$rtvar = substr($datetime,0,4). ".". substr($datetime,4,2). "." . substr($datetime,6,2);
			}
			else {
				$rtvar = "";
			}
			break;

		case "datestr2" :
			
			if($datetime > "" ) {
				$rtvar = substr($datetime,0,4). "-". substr($datetime,4,2). "-" . substr($datetime,6,2);
			}
			else {
				$rtvar = "";
			}
			break;

		case "datestr3" :
			
			if($datetime > "" ) {
				$rtvar = substr($datetime,0,4). ".". substr($datetime,4,2). "." . substr($datetime,6,2)." ". substr($datetime,8,2)."시";
			}
			else {
				$rtvar = "";
			}
			break;

		case "timetolist" :
			$rtvar = date("Y.m.d",$datetime);
			break;


		case "timetodetail" :
			$rtvar = date("Y-m-d H:i:s",$datetime);
			break;

		case "time" :
			$temp = explode(" ", $datetime);
			
			$rtvar = $temp[1];
			break;


		case "all" :
			
			$rtvar = str_replace("-",".",$datetime);
			break;
			
	}
	return $rtvar;
}

function date_lastday($date='') {
	if(!$date) $date = date('Y-m')."-01";

	$last_day = date('t',strtotime($date));
	return $last_day;
}

function api_json($arr) {
	global $myconn;
	db_close();

	$json = arrayToJson($arr);
	echo $json;
	exit;

}

////
////
//// CURL 관련함수
////
////



// curl send
function curl_post($url, $param) {
	$cu = curl_init(); 

	curl_setopt($cu, CURLOPT_URL,$url); // 데이타를 보낼 URL 설정
	curl_setopt($cu, CURLOPT_POST, true); // 데이타를 get/post 로 보낼지 설정
	curl_setopt($cu, CURLOPT_POSTFIELDS, $param);
	curl_setopt($cu, CURLOPT_TIMEOUT, 50); // 타임아웃값
	curl_setopt($cu, CURLOPT_RETURNTRANSFER,1);	//결과받을지 여부

	$res = curl_exec($cu);	

	curl_close($cu);

	return $res;
}

// curl send
function curl_get($url, $param='') {
	$cu = curl_init(); 
	$url = $url."?".$param;
	curl_setopt($cu, CURLOPT_URL,$url); // 데이타를 보낼 URL 설정
	curl_setopt($cu, CURLOPT_POST, false); // 데이타를 get/post 로 보낼지 설정
	curl_setopt($cu, CURLOPT_TIMEOUT, 50); // 타임아웃값
	curl_setopt($cu, CURLOPT_RETURNTRANSFER,1);	//결과받을지 여부

	$res = curl_exec($cu);	

	curl_close($cu);
	return $res;
}


// kakao curl put send
function curl_put( $url, $header, $json='') {
	
	date_default_timezone_set("GMT");

	/*
	$headers = array(
		'Content-type: application/json',
		'Date:'.date("D, d M Y h:i:s e",time())
		
	);
	*/
	
	$cu = curl_init(); 
	
	
	curl_setopt($cu, CURLOPT_URL, $url); // 데이타를 보낼 URL 설정
	curl_setopt($cu, CURLOPT_CUSTOMREQUEST, "PUT");
	//curl_setopt($cu, CURLOPT_HEADER, true);
	curl_setopt($cu, CURLOPT_HTTPHEADER, $header);
	curl_setopt($cu, CURLOPT_POSTFIELDS, $json);

	//curl_setopt($cu, CURLOPT_POST, false); // 데이타를 get/post 로 보낼지 설정
	curl_setopt($cu, CURLOPT_TIMEOUT, 100); // 타임아웃값
	curl_setopt($cu, CURLOPT_RETURNTRANSFER,1);	//결과받을지 여부

	$res = curl_exec($cu);	

	
	return $res;
}



//// qr코드 
function qrcode($url, $size=100)
{
    if (is_null($url)) return null;
    $url = rawurlencode($url);
    $datas = array(
        "cht" => "qr",
        "chs" => "{$size}x{$size}",
        "choe" => "Shift_JIS",
        "chl" => $url
    );
    $qrcode = createUri($datas);
    return $qrcode;
}
 
function createUri($datas)
{
    $uri = 'http://chart.apis.google.com/chart?';
    $query = "";
    foreach($datas as $key => $val){
        if( strcmp($query, "") != 0 ){
            $query .= "&";
        }
        $query .= "$key=$val";
    }
    $uri .= $query;
    return $uri;
}

function qrcode_svc($size=100)
{
	$url = 'http://'.$_SERVER['SERVER_NAME'].'/m';
    $url = rawurlencode($url);
    $datas = array(
        "cht" => "qr",
        "chs" => "{$size}x{$size}",
        "choe" => "Shift_JIS",
        "chl" => $url
    );
    $qrcode = createUri($datas);
    return $qrcode;
}



////
//// 세션처리함수
////

// 서비스 세션초기화
function svc_session_init() {
	global $myconn;
	

	foreach($_SESSION as $key=>$val) {
		if(strpos(" ".$key, "svc_" ) > 0 ) {
			$_SESSION[$key] = "";
		}
	}

	if($_SESSION['svc_bno']) {
		site_update($_SESSION['svc_bno']);
	}
}




// 배열번호 리턴 
function arr_number($arr, $val) {

	$rt_val ="";
	for($i=0; $i <count($arr);$i++) {
		if($val == $arr[$i]) $rt_val = $i;
	}

	return $rt_val;


}






//////////////////////
/////// FILE /////////
//////////////////////

// 파일 내용을 읽어 문자열로 리턴
function file2str($file_path) {
	$fp = fopen($file_path, "r");
	$file_content = fread($fp, filesize($file_path));
	fclose($fp);

	return $file_content;
}

// 파일에 내용추가
function log_write($file_path, $txt) {
	if(!file_exists($file_path)) {
		exec("touch ".$file_path);
		exec("chmod 777 $file_path");

	}

	$fp = fopen($file_path, 'a');
	fwrite($fp, $txt."\r\n");
	fclose($fp);
}

// 빈파일 생성
function make_empty_file($file_path, $owner='', $own_grp='', $mode='') {
	exec("touch ".$file_path);
	if($owner && $own_grp) {
		exec("chown ".$owner.":".$own_grp." ".$file_path);
	}
	if($mode) {
		exec("chmod ".$mode." ".$file_path);
	}
	
}


//////////////////////////
////////// time //////////
//////////////////////////
function get_time() {
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}


//날짜 차이를 일수로 구하기
function date_interval($sdate, $edate) {
	$d1 = new DateTime($sdate);
	$d2 = new DateTime($edate);
	
	$days = round(($d2->format('U') - $d1->format('U')) / (60*60*24));

	return $days;

}

function month_interval($sdate, $edate) {
	$d1 = new DateTime($sdate);
	$d2 = new DateTime($edate);
	
	$interval = $d1->diff($d2);

	
	return $interval->m;

}

//날짜 차이를 분/초로 구하기
function date_interval_sec($sdate, $edate) {
	$d1 = new DateTime($sdate);
	$d2 = new DateTime($edate);
	
	$secs = round($d2->format('U') - $d1->format('U'));

	if($secs >59) {
		$min = floor($secs/60);
		$sec = $secs%60;
	}
	else {
		$min = 0;
		$sec = $secs;
	}

	$rt = array(
		'min'	=> $min,
		'sec'	=> $sec,
	);

	return $rt;

}

function date_convert($value, $gubun='toSec') {
	
	switch($gubun) {
		//시분초를 초로 변환
		case "toSec" :

			if($value =="") $value="000000";
			$hour = substr($value,0,2)*3600;
			$min = substr($value,2,2)*60;
			$sec = substr($value,4,2);

			$rt = $hour + $min + $sec;

			break;

		//초를 시:분:초로 변환
		case "toHis" :
			$rt = gmdate("H:i:s", $value);

			break;

		//초를 시분초로 변환
		case "His" :
			$rt = gmdate("His", $value);

			break;
	}

	return $rt;
}

	

//////////////////////////
////////// 암호화 /////////
//////////////////////////
function base64url_encode($plainText)
{
    return str_replace('=', '', strtr(base64_encode($plainText), '+/', '-_')); // 뒤에붙는  = 을 생략해도 문제가 되지 않음.. mod_rewrite에서 문제가 없도록  = 삭제처리
}

/*function base64url_encode($plainText)
{
    return strtr(base64_encode($plainText), '+/', '-_');
}
*/

function base64url_decode($b64Text)
{
    return base64_decode(strtr($b64Text, '-_', '+/'));
}


function hash_encrypt($plaintext, $password)
{
    // 보안을 최대화하기 위해 비밀번호를 해싱한다.
    
    $password = hash('sha256', $password, true);
    
    // 용량 절감과 보안 향상을 위해 평문을 압축한다.
    
    $plaintext = gzcompress($plaintext);
    
    // 초기화 벡터를 생성한다.
    
    $iv_source = defined('MCRYPT_DEV_URANDOM') ? MCRYPT_DEV_URANDOM : MCRYPT_RAND;
    $iv = mcrypt_create_iv(32, $iv_source);
    
    // 암호화한다.
    
    $ciphertext = mcrypt_encrypt('rijndael-256', $password, $plaintext, 'cbc', $iv);
    
    // 위변조 방지를 위한 HMAC 코드를 생성한다. (encrypt-then-MAC)
    
    $hmac = hash_hmac('sha256', $ciphertext, $password, true);
    
    // 암호문, 초기화 벡터, HMAC 코드를 합하여 반환한다.
    
    return base64_encode($ciphertext . $iv . $hmac);
}

// 위의 함수로 암호화한 문자열을 복호화한다.
// 복호화 과정에서 오류가 발생하거나 위변조가 의심되는 경우 false를 반환한다.

function hash_decrypt($ciphertext, $password)
{
    // 초기화 벡터와 HMAC 코드를 암호문에서 분리하고 각각의 길이를 체크한다.
    
    $ciphertext = @base64_decode($ciphertext, true);
    if ($ciphertext === false) return false;
    $len = strlen($ciphertext);
    if ($len < 64) return false;
    $iv = substr($ciphertext, $len - 64, 32);
    $hmac = substr($ciphertext, $len - 32, 32);
    $ciphertext = substr($ciphertext, 0, $len - 64);
    
    // 암호화 함수와 같이 비밀번호를 해싱한다.
    
    $password = hash('sha256', $password, true);
    
    // HMAC 코드를 사용하여 위변조 여부를 체크한다.
    
    $hmac_check = hash_hmac('sha256', $ciphertext, $password, true);
    if ($hmac !== $hmac_check) return false;
    
    // 복호화한다.
    
    $plaintext = @mcrypt_decrypt('rijndael-256', $password, $ciphertext, 'cbc', $iv);
    if ($plaintext === false) return false;
    
    // 압축을 해제하여 평문을 얻는다.
    
    $plaintext = @gzuncompress($plaintext);
    if ($plaintext === false) return false;
    
    // 이상이 없는 경우 평문을 반환한다.
    
    return $plaintext;
}

function my_encrypt($str, $key) {
    $data = hash_encrypt($str, $key);
    $rt = base64url_encode($data);
    
    return $rt;
}

function my_decrypt($str, $key) {
    $data = base64url_decode($str);
    $rt = hash_decrypt($data, $key);
    
    return $rt;
}


// 숫자->한글 변환 phpschool
function number2hangul($number){ 

        $num = array('', '일', '이', '삼', '사', '오', '육', '칠', '팔', '구'); 
        $unit4 = array('', '만', '억', '조', '경'); 
        $unit1 = array('', '십', '백', '천'); 

        $res = array(); 

        $number = str_replace(',','',$number); 
        $split4 = str_split(strrev((string)$number),4); 

        for($i=0;$i<count($split4);$i++){ 
			$temp = array(); 
			$split1 = str_split((string)$split4[$i], 1); 
			for($j=0;$j<count($split1);$j++){ 
					$u = (int)$split1[$j]; 
					if($u > 0) $temp[] = $num[$u].$unit1[$j]; 
			} 
			if(count($temp) > 0) $res[] = implode('', array_reverse($temp)).$unit4[$i]; 
        } 
        return implode('', array_reverse($res)); 
}
?>
<?php


	

	function golistform( $frm_action) {
		$frm = "<form name='golistform' id='golistform' method='get' action='".$frm_action."'>\n";
		foreach($_REQUEST as $key=>$value) {
			$head = substr($key,0,2);

			if($head == "s_") {
				$frm .="<input type='hidden' name='".$key."' value='".rawurlencode($value)."'>\n";
			}

			if($key == 'brd') {
				$frm .="<input type='hidden' name='".$key."' value='".rawurlencode($value)."'>\n";
			}

			if($key == 'date') {
				$frm .="<input type='hidden' name='".$key."' value='".rawurlencode($value)."'>\n";
			}
		}

		$frm .= "</form>\n";
		echo $frm;

	}

function golist($list_url='') {
	//print_r($_SESSION);
	
	if($_SESSION['list_url']) {

		

		
		$list_url = $_SESSION['list_url'];

		$temp = explode("?", $list_url);

		

		if(substr($temp[0],0,5) == "http:") {
			$temp_url = substr($temp[0],7);
		}
		else if(substr($temp[0],0,5) == "https"){
			$temp_url = substr($temp[0],8);
		}
		else {
			return;
		}

		

		
		$action = str_replace($_SERVER['SERVER_NAME'],"", $temp_url);

		$html = "<form name='golistform' id='golistform' action='".$action."'>\n";

		$param_array = explode("&", $temp[1]);

		//print_r($param_array);

		for($i=0; $i < count($param_array); $i++) {
			$params = explode("=", $param_array[$i]);
			if($params[0]) {
				//$html .= "<input type='hidden' name='".$params[0]."' value='".$params[1]."' >\n";
				$html .= "<input type='hidden' name='".$params[0]."' value=\"".urldecode($params[1])."\" >\n";
//					$html .= "<input type='hidden' name='".$params[0]."' value='".rawurldecode($params[1])."' >\n";
			}

		}

		
		$html .="</form>";
		$html .="<script type='text/javascript'>
				function golist() {
					document.golistform.submit();
				}
				</script>";

		//$_SESSION['list_url'] ='';

		

	}
	else {
		if(!$list_url) $list_url = "/";	//없는경우 메인으로

		if($_REQUEST['brd']) {
			$param = "?brd=".$_REQUEST['brd'];
		}
		
		$html = "<script>
					function golist() {
						location.href ='".$list_url.$param."';
					}
				</script>";
		

	}
	

	return $html;

}


function golist_test($list_url='') {
	
	if($_SESSION['list_url']) {
		$list_url = $_SESSION['list_url'];

		$temp = explode("?", $list_url);

		

		if(substr($temp[0],0,5) == "http:") {
			$temp_url = substr($temp[0],7);
		}
		else if(substr($temp[0],0,5) == "https"){
			$temp_url = substr($temp[0],8);
		}
		else {
			return;
		}

		

		
		$action = str_replace($_SERVER['SERVER_NAME'],"", $temp_url);

		$html = "<form name='golistform' id='golistform' action='".$action."'>\n";

		$param_array = explode("&", $temp[1]);

		//print_r($param_array);

		for($i=0; $i < count($param_array); $i++) {
			$params = explode("=", $param_array[$i]);
			if($params[0]) {
				//$html .= "<input type='hidden' name='".$params[0]."' value='".$params[1]."' >\n";
				$html .= "<input type='hidden' name='".$params[0]."' value=\"".urldecode($params[1])."\" >\n";
//					$html .= "<input type='hidden' name='".$params[0]."' value='".rawurldecode($params[1])."' >\n";
			}

		}

		/*
		if($_REQUEST['brd']) {
			$html .= "<input type='hidden' name='brd' value=\"".urldecode($_REQUEST['brd'])."\" >\n";
		}
		*/
		$html .="</form>";
		$html .="<script type='text/javascript'>
				function golist() {
					document.golistform.submit();
				}
				</script>";

		//$_SESSION['list_url'] ='';
		

	}
	else {
		if(!$list_url) $list_url = "/";	//없는경우 메인으로

		if($_REQUEST['brd']) {
			$param = "?brd=".$_REQUEST['brd'];
		}
		
		$html = "<script>
					function golist() {
						location.href ='".$list_url.$param."';
					}
				</script>";
		

	}
	

	return $html;

}


function golistsub($list_url='', $seq='') {
	
	if($_SESSION['list_url_sub']) {
		$list_url = $_SESSION['list_url_sub'];

		$temp = explode("?", $list_url);

		

		if(substr($temp[0],0,5) == "http:") {
			$temp_url = substr($temp[0],7);
		}
		else if(substr($temp[0],0,5) == "https"){
			$temp_url = substr($temp[0],8);
		}
		else {
			return;
		}

		

		
		$action = str_replace($_SERVER['SERVER_NAME'],"", $temp_url);

		$html = "<form name='golistform' id='golistform' action='".$action."'>\n";

		$param_array = explode("&", $temp[1]);

		//print_r($param_array);

		for($i=0; $i < count($param_array); $i++) {
			$params = explode("=", $param_array[$i]);
			if($params[0]) {
				//$html .= "<input type='hidden' name='".$params[0]."' value='".$params[1]."' >\n";
				$html .= "<input type='hidden' name='".$params[0]."' value=\"".urldecode($params[1])."\" >\n";
//					$html .= "<input type='hidden' name='".$params[0]."' value='".rawurldecode($params[1])."' >\n";
			}

		}

	
		if($_REQUEST['seq']) {
			$html .= "<input type='hidden' name='seq' value=\"".urldecode($_REQUEST['seq'])."\" >\n";
		}
		
		$html .="</form>";
		$html .="<script type='text/javascript'>
				function golistsub() {
					document.golistform.submit();
				}
				</script>";

		//$_SESSION['list_url'] ='';
		

	}
	else {
		if(!$list_url) $list_url = "/";	//없는경우 메인으로

		if($_REQUEST['seq']) {
			$param = "?seq=".$_REQUEST['seq'];
		}
		
		$html = "<script>
					function golistsub() {
						location.href ='".$list_url.$param."';
					}
				</script>";
		

	}
	

	return $html;

}




//엑셀 업로드 데이터 추출
function excel_upload($upname) {

	include_once $_SERVER['DOCUMENT_ROOT']."/inc/lib/php_excel/Classes/PHPExcel.php";
	
	$UpFile	= $_FILES[$upname];

	$UpFileName = $UpFile["name"];

	$rtarr = array();
	

	$UpFilePathInfo = pathinfo($UpFileName);
	$UpFileExt		= strtolower($UpFilePathInfo["extension"]);
	

	if($UpFileExt != "xls" && $UpFileExt != "xlsx") {
		$rtarr['result'] ='N';
		$rtarr['msg'] ="엑셀파일만 업로드 가능합니다. (xls, xlsx 확장자의 파일포멧)";
		return $rtarr;
	}

	//-- 읽을 범위 필터 설정 (아래는 A열만 읽어오도록 설정함  => 속도를 중가시키기 위해)
	class MyReadFilter implements PHPExcel_Reader_IReadFilter
	{
		public function readCell($column, $row, $worksheetName = '') {
			// Read rows 1 to 7 and columns A to E only
			if (in_array($column,range('A','E'))) {
				return true;
			}
			return false;
		}
	}
	$filterSubset = new MyReadFilter();

	//파일 타입 설정 (확자자에 따른 구분)
	$inputFileType = 'Excel2007';
	if($UpFileExt == "xls") {
		$inputFileType = 'Excel5';	
	}

	
	//엑셀리더 초기화
	$objReader = PHPExcel_IOFactory::createReader($inputFileType);

	//데이터만 읽기(서식을 모두 무시해서 속도 증가 시킴)
	$objReader->setReadDataOnly(true);	

	//범위 지정(위에 작성한 범위필터 적용)
	$objReader->setReadFilter($filterSubset);

	//업로드된 엑셀 파일 읽기
	$objPHPExcel = $objReader->load($UpFile['tmp_name']);

	//첫번째 시트로 고정
	$objPHPExcel->setActiveSheetIndex(0);

	//고정된 시트 로드
	$objWorksheet = $objPHPExcel->getActiveSheet();

  //시트의 지정된 범위 데이터를 모두 읽어 배열로 저장
	$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
	$total_rows = count($sheetData);
	/*
	foreach($sheetData as $rows) {

		$fieldData = $rows["A"];				//A열값을 가져온다.
	

	}
	*/

	//print_r($sheetData);
	$rtarr['result'] ='Y';
	$rtarr['msg'] = $sheetData;

	return $rtarr;


}





//  파일 업로드 

function file_upload($fileinfo, $subdir, $name_org = true, $datedir=true) {
	global $_INC;
	
	if($subdir) {
		$dir_name = "/_files/".$subdir;
		$save_dir = $_INC['folder']['root_dir'].$dir_name;
		
		if(!is_dir($save_dir)) {
			mkdir($save_dir, 0777);
			chmod($save_dir, 0777);
		}
	}
	else {
		$dir_name = "/files";
		$save_dir = $_INC['folder']['root_dir'].$dir_name;
	}

	if($datedir == true) {
		$dir_name .= "/".date('Ym');
		$save_dir .= "/".date('Ym');

		//echo "dir_name = $dir_name \n";
		//echo "save_dir = $save_dir \n";

		if(!is_dir($save_dir)) {
			mkdir($save_dir, 0777);
			chmod($save_dir, 0777);
		}

	}
	//$save_dir = $_INC['folder']['root_dir']."/files/option_file";
	
	$orgfilename = basename($fileinfo['name']);

	//파일명 그대로 업로드 하는경우
	if($name_org) {

		$save_file = $save_dir ."/". basename($fileinfo['name']);
		$save_file_web = $dir_name ."/". basename($fileinfo['name']);

		$filename =  basename($fileinfo['name']);


		if(file_exists($save_file)) {
			for($i=1; $i<=100; $i++) {
				$filename =  basename($fileinfo['name']);
				$pos = strrpos($filename, "." );

				
				$file_head = substr($filename, 0, $pos);
				$file_tail = substr($filename, $pos+1);

				$filename = $file_head.$i.".".$file_tail;

				$save_file = $save_dir."/".$filename;
				$save_file_web = $dir_name."/".$filename;

				if(!file_exists($save_file)) { break; }
			}
		}
	}
	else {
		$temp_filename =  basename($fileinfo['name']);
		$pos = strrpos($temp_filename, "." );
				
		$file_head = substr($temp_filename, 0, $pos);
		$file_tail = strtolower(substr($temp_filename, $pos+1));

		$filename = uniqid().".".$file_tail;

		$save_file = $save_dir ."/". $filename;
		$save_file_web = $dir_name."/".$filename;

		$filename = $temp_filename;


	}

	if (!move_uploaded_file($fileinfo['tmp_name'], $save_file)) {
		
		
		$rtarr['result'] ='N';
		$rtarr['msg'] ='파일업로드 실패';
		return $rtarr;

	} 
	else {
		chmod($save_file, 0777);
	}

	$rtarr['result'] ='Y';
	$rtarr['msg'] ='success';
	$rtarr['filename'] =$filename;
	$rtarr['dbpath'] =$save_file_web;
	$rtarr['orgfilename'] =$orgfilename;
	$rtarr['size'] =$fileinfo['size'];
	
	return $rtarr;
}


/*
function file_upload_resize($fileinfo, $subdir, $name_org = true, $width=1920) {
	global $_INC;
	
	if($subdir) {
		$dir_name = "/files/".$subdir;
		$save_dir = $_INC['folder']['root_dir'].$dir_name;
		
		if(!is_dir($save_dir)) {
			mkdir($save_dir, 0777);
			chmod($save_dir, 0777);
		}
	}
	else {
		$dir_name = "/files";
		$save_dir = $_INC['folder']['root_dir'].$dir_name;
	}
	//$save_dir = $_INC['folder']['root_dir']."/files/option_file";
	
	
	//파일명 그대로 업로드 하는경우
	if($name_org) {

		$save_file = $save_dir ."/". basename($fileinfo['name']);
		$save_file_web = $dir_name ."/". basename($fileinfo['name']);

		$filename =  basename($fileinfo['name']);

		

		if(file_exists($save_file)) {
			for($i=1; $i<=100; $i++) {
				$filename =  basename($fileinfo['name']);
				$pos = strrpos($filename, "." );

				
				$file_head = substr($filename, 0, $pos);
				$file_tail = substr($filename, $pos+1);

				$filename = $file_head.$i.".".$file_tail;

				$save_file = $save_dir."/".$filename;
				$save_file_web = $dir_name."/".$filename;

				if(!file_exists($save_file)) { break; }
			}
		}

		$view_filename = $filename;
	}
	else {
		$temp_filename =  basename($fileinfo['name']);
		$pos = strrpos($temp_filename, "." );
				
		$file_head = substr($temp_filename, 0, $pos);
		$file_tail = strtolower(substr($temp_filename, $pos+1));

		$filename = uniqid().".".$file_tail;

		$save_file = $save_dir ."/". $filename;
		$save_file_web = $dir_name."/".$filename;

		

		$view_filename = $temp_filename;


	}
	

	resizeImage($fileinfo['tmp_name'],$width,0,$save_dir,  $filename);

	$rtarr['result'] ='Y';
	$rtarr['msg'] ='success';
	$rtarr['filename'] =$view_filename;
	$rtarr['dbpath'] =$save_file_web;
	
	return $rtarr;
}
*/



function file_upload_resize($fileinfo, $subdir,  $dateflag = 'Y', $name_org = false, $width=1920) {
	global $_INC;
	
	if($subdir) {
		$dir_name = "/_files/".$subdir;
		$save_dir = $_INC['folder']['root_dir'].$dir_name;
		
		if(!is_dir($save_dir)) {
			mkdir($save_dir, 0777);
			chmod($save_dir, 0777);
		}

		if($dateflag =='Y') {
			$datedir = date('Ym');
			$dir_name .= "/".$datedir;

			$save_dir = $_INC['folder']['root_dir'].$dir_name;
			
			if(!is_dir($save_dir)) {
				mkdir($save_dir, 0777);
				chmod($save_dir, 0777);
			}

		}
	}
	else {
		$dir_name = "/_files";
		$save_dir = $_INC['folder']['root_dir'].$dir_name;

		if($dateflag =='Y') {
			$datedir = date('Ym');
			$dir_name .= "/".$datedir;

			$save_dir = $_INC['folder']['root_dir'].$dir_name;
			
			if(!is_dir($save_dir)) {
				mkdir($save_dir, 0777);
				chmod($save_dir, 0777);
			}

		}
	}
	//$save_dir = $_INC['folder']['root_dir']."/files/option_file";
	
	
	//파일명 그대로 업로드 하는경우
	if($name_org) {

		$save_file = $save_dir ."/". basename($fileinfo['name']);
		$save_file_web = $dir_name ."/". basename($fileinfo['name']);

		$filename =  basename($fileinfo['name']);

		

		if(file_exists($save_file)) {
			for($i=1; $i<=100; $i++) {
				$filename =  basename($fileinfo['name']);
				$pos = strrpos($filename, "." );

				
				$file_head = substr($filename, 0, $pos);
				$file_tail = substr($filename, $pos+1);

				$filename = $file_head.$i.".".$file_tail;

				$save_file = $save_dir."/".$filename;
				$save_file_web = $dir_name."/".$filename;

				if(!file_exists($save_file)) { break; }
			}
		}

		$view_filename = $filename;
	}
	else {
		$temp_filename =  basename($fileinfo['name']);
		$pos = strrpos($temp_filename, "." );
				
		$file_head = substr($temp_filename, 0, $pos);
		$file_tail = strtolower(substr($temp_filename, $pos+1));

		$filename = uniqid().".".$file_tail;

		$save_file = $save_dir ."/". $filename;
		$save_file_web = $dir_name."/".$filename;

		

		$view_filename = $temp_filename;


	}
	/*
	if (!move_uploaded_file($fileinfo['tmp_name'], $save_file)) {
		//my_rollback($myconn);
		//return_json('N', '파일 업로드 실패');
		$rtarr['result'] ='N';
		$rtarr['msg'] ='파일업로드 실패';
		return $rtarr;

	} 
	*/

	resizeImage($fileinfo['tmp_name'],$width,0,$save_dir,  $filename);

	$rtarr['result'] ='Y';
	$rtarr['msg'] ='success';
	$rtarr['filename'] =$view_filename;
	$rtarr['dbpath'] =$save_file_web;
	
	return $rtarr;
}


function view_filesize($gubun='mb',$size=0) {
	switch($gubun) {
		case "kb" :
			$rt = round($size/1024,2)." KB";
			break;
		default :
			$rt = round($size/1024/1024,2)." MB";
			break;
	}

	return $rt;

}

function view_resize($img, $width=200) {
	global $myconn, $_INC;

	$imgs = $_INC['foler']['root_dir']. $img;
	if(!file_exists($imgs)) {
		return;
	}

	$info = getimagesize($imgs);
	$rt['width'] = $info[0];
	$rt['height'] = $info[1];
	$rt['type'] = $info['mime'];

	if($info[0] <= $width) {
		$rt['vwidth'] = $info[0];
		$rt['vheight'] = $info[1];
	}
	else {
		$p = $width/$info[0];

		$height = $info[1]*$p;

		$rt['vwidth'] = $width;
		$rt['vheight'] = $height;


	}

	return $rt;



}


// 로그인 권한 체크
/*
function admChk() {
	if(!$_SESSION['svc_id']) {
		alert('login first!','url','/');
	}

	if($_SESSION['svc_adm_level'] == '1') {
		return true;
	}
	else {
		return false;
	}
}
*/






function chk_adm_page($member_level) {
	if(in_array($_SESSION['admin_level'], $member_level ) ) {
		$rtvar = true;
	}
	else {
		$rtvar = false;
	}

	if($rtvar == false) {
		alert('권한이 없습니다.','back');
	}
}


function chk_adm_menu($gnb, $snb) {
	switch($gnb) {
		case "1" :
			switch($snb) {
				case "1" :
					if($_SESSION['adm_member_group'] == '9') {
						if($_SESSION['adm_member_status'] >= '7') {
							$rtvar = true;
						}
						else {
							$rtvar = false;
						}
					}
					else {
						$rtvar = false;
					}
					break;
				case "2" :
					if($_SESSION['adm_member_group'] == '9') {
						if($_SESSION['adm_member_status'] >= '5') {
							$rtvar = true;
						}
						else {
							$rtvar = false;
						}
					}
					else {
						$rtvar = false;
					}
					break;
				
					
				default :
					$rtvar = true;
					break;
			}
			break;

		case "2" :
			$rtvar = true;
			break;
		case "3" :
			$rtvar = true;
			break;
		case "4" :
			switch($snb) {
				case "2" :

					if($_SESSION['adm_level'] == '99') {
						$rtvar = true;
					}
					else {
						$rtvar = false;
					}

					break;
					
				default :
					$rtvar = true;
					break;
			}

			break;
		

		default :
			$rtvar = true;
			break;

	}

	return $rtvar;
	
}



//배열 파티션나누기
function arr_partition( $list, $p ) {
    $listlen = count( $list );
    $partlen = floor( $listlen / $p );
    $partrem = $listlen % $p;
    $partition = array();
    $mark = 0;
    for ($px = 0; $px < $p; $px++) {
        $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
        $partition[$px] = array_slice( $list, $mark, $incr );
        $mark += $incr;
    }
    return $partition;
}



function strtoint($val) {
	$val = (int) $val;
	return $val;
}



function sock_post($host,$target,$posts,$cookies,$referer='',$port=443) { 
	if(is_array($posts)) { 
		foreach($posts AS $name=>$value) $postValues .= urlencode($name) . "=" . urlencode($value) . '&'; 
		$postValues = substr($postValues, 0, -1); 
	} 


	$postLength = strlen($postValues); 

	if(is_array($cookies)) { 
		foreach($cookies AS $name=>$value) $cookieValues .= urlencode($name) . "=" . urlencode($value) . ';'; 
		$cookieValues = substr($cookieValues, 0, -1); 
	} 

	$request  = "POST $target HTTP/1.1\r\n"; 
	$request .= "Host: $host\r\n"; 
	$request .= "Content-Type: application/x-www-form-urlencoded\r\n"; 
	$request .= "Content-Length: " . $postLength . "\r\n"; 
	$request .= "Connection: close\r\n"; 
	$request .= "\r\n"; 
	$request .= $postValues; 

	$ret = ''; 
	
	$context = stream_context_create();
	$result = stream_context_set_option($context, 'ssl', 'verify_peer', false);
	$result = stream_context_set_option($context, 'ssl', 'verify_host', false);
	
	//$socket  = fsockopen("ssl://".$host, $port, $errno, $errstr, 10); // 소켓 타임아웃 10초
	$socket  = stream_socket_client("ssl://".$host.':'.$port, $errno, $errstr, 10, STREAM_CLIENT_CONNECT, $context); // 소켓 타임아웃 10초
	

	
	if ( ! $socket )
	{
		return false;
	}
	
	fputs($socket, $request); 
		while(!feof($socket)) $ret .= fgets($socket, 1024); 
	fclose($socket); 

	return $ret; 
}



function RemoveXSS($val) {
 // remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed
 // this prevents some character re-spacing such as <java\0script>
 // note that you have to handle splits with \n, \r, and \t later since they *are*
 // allowed in some inputs
 $val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val);

 // straight replacements, the user should never need these since they're normal characters
 // this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&
 // #X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29>
 $search = 'abcdefghijklmnopqrstuvwxyz';
   $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
   $search .= '1234567890!@#$%^&*()'; 
   $search .= '~`";:?+/={}[]-_|\'\\'; 
   for ($i = 0; $i < strlen($search); $i++) { 
 // ;? matches the ;, which is optional
  // 0{0,7} matches any padded zeros, which are optional and go up to 8 chars

 // &#x0040 @ search for the hex values
 $val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val);
 // with a ;

 // &#00064 @ 0{0,7} matches '0' zero to seven times
 $val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ;
 }

 // now the only remaining whitespace attacks are \t, \n, and \r
 $ra1 = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'style',
 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base');
   $ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload'); 
 $ra = array_merge($ra1, $ra2);
    
   $found = true; // keep replacing as long as the previous round replaced something 
 while ($found == true) {
 $val_before = $val;
 for ($i = 0; $i < sizeof($ra); $i++) {
 $pattern = '/';
 for ($j = 0; $j < strlen($ra[$i]); $j++) {
 if ($j > 0) {
  $pattern .= '(';
  $pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?';
  $pattern .= '|(&#0{0,8}([9][10][13]);?)?';
   $pattern .= ')?';
  }
   $pattern .= $ra[$i][$j];
         } 
         $pattern .= '/i'; 
   $replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2); // add in <> to nerf the tag
   $val = preg_replace($pattern, $replacement, $val); // filter out the hex tags
   if ($val_before == $val) {
   // no replacements were made, so exit the loop
   $found = false;
 }
 }
}
return $val;
}


/**
 *  PHP 파일 다운로드 함수.
 *  Version 1.3
 *
 *  Copyright (c) 2014 성기진 Kijin Sung
 *
 *  License: MIT License (a.k.a. X11 License)
 *  http://www.olis.or.kr/ossw/license/license/detail.do?lid=1006
 *
 *  아래와 같은 기능을 수행한다.
 *
 *  1. UTF-8 파일명이 깨지지 않도록 한다. (RFC2231/5987 표준 및 브라우저 버전별 특성 감안)
 *  2. 일부 OS에서 파일명에 사용할 수 없는 문자가 있는 경우 제거 또는 치환한다.
 *  3. 캐싱을 원할 경우 적절한 Cache-Control, Expires 등의 헤더를 넣어준다.
 *  4. IE 8 이하에서 캐싱방지 헤더 사용시 다운로드 오류가 발생하는 문제를 보완한다.
 *  5. 이어받기를 지원한다. (Range 헤더 자동 감지, Accept-Ranges 헤더 자동 생성)
 *  6. 일부 PHP 버전에서 대용량 파일 다운로드시 메모리 누수를 막는다.
 *  7. 다운로드 속도를 제한할 수 있다.
 *
 *  사용법  :  send_attachment('클라이언트에게 보여줄 파일명', '서버측 파일 경로', [캐싱할 기간], [속도 제한]);
 *
 *             아래의 예는 foo.jpg라는 파일을 사진.jpg라는 이름으로 다운로드한다.
 *             send_attachment('사진.jpg', '/srv/www/files/uploads/foo.jpg');
 *
 *             아래의 예는 bar.mp3라는 파일을 24시간 동안 캐싱하고 다운로드 속도를 300KB/s로 제한한다.
 *             send_attachment('bar.mp3', '/srv/www/files/uploads/bar.mp3', 60 * 60 * 24, 300);
 *
 *  반환값  :  전송에 성공한 경우 true, 실패한 경우 false를 반환한다.
 *
 *  주  의  :  1. 전송이 완료된 후 다른 내용을 또 출력하면 파일이 깨질 수 있다.
 *                가능하면 그냥 곧바로 exit; 해주기를 권장한다.
 *             2. PHP 5.1 미만, UTF-8 환경이 아닌 경우 정상 작동을 보장할 수 없다.
 *                특히 EUC-KR 환경에서는 틀림없이 파일명이 깨진다.
 *             3. FastCGI/FPM 환경에서 속도 제한 기능을 사용할 경우 PHP 프로세스를 오랫동안 점유할 수 있다.
 *                따라서 가능하면 웹서버 자체의 속도 제한 기능을 사용하는 것이 좋다.
 *             4. 안드로이드 일부 버전의 기본 브라우저에서 한글 파일명이 깨질 수 있다.
 */

function send_attachment($filename, $server_filename, $expires = 0, $speed_limit = 0) {
    
    // 서버측 파일명을 확인한다.
    
    if (!file_exists($server_filename) || !is_readable($server_filename)) {
        return false;
    }
    if (($filesize = filesize($server_filename)) == 0) {
        return false;
    }
    if (($fp = @fopen($server_filename, 'rb')) === false) {
        return false;
    }
    
    // 파일명에 사용할 수 없는 문자를 모두 제거하거나 안전한 문자로 치환한다.
    
    $illegal = array('\\', '/', '<', '>', '{', '}', ':', ';', '|', '"', '~', '`', '@', '#', '$', '%', '^', '&', '*', '?');
    $replace = array('', '', '(', ')', '(', ')', '_', ',', '_', '', '_', '\'', '_', '_', '_', '_', '_', '_', '', '');
    $filename = str_replace($illegal, $replace, $filename);
    $filename = preg_replace('/([\\x00-\\x1f\\x7f\\xff]+)/', '', $filename);
    
    // 유니코드가 허용하는 다양한 공백 문자들을 모두 일반 공백 문자(0x20)로 치환한다.
    
    $filename = trim(preg_replace('/[\\pZ\\pC]+/u', ' ', $filename));
    
    // 위에서 치환하다가 앞뒤에 점이 남거나 대체 문자가 중복된 경우를 정리한다.
    
    $filename = trim($filename, ' .-_');
    $filename = preg_replace('/__+/', '_', $filename);
    if ($filename === '') {
        return false;
    }
    
    // 브라우저의 User-Agent 값을 받아온다.
    
    $ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $old_ie = (bool)preg_match('#MSIE [3-8]\.#', $ua);
    
    // 파일명에 숫자와 영문 등만 포함된 경우 브라우저와 무관하게 그냥 헤더에 넣는다.
    
    if (preg_match('/^[a-zA-Z0-9_.-]+$/', $filename)) {
        $header = 'filename="' . $filename . '"';
    }
    
    // IE 9 미만 또는 Firefox 5 미만의 경우.
    
    elseif ($old_ie || preg_match('#Firefox/(\d+)\.#', $ua, $matches) && $matches[1] < 5) {
        $header = 'filename="' . rawurlencode($filename) . '"';
    }
    
    // Chrome 11 미만의 경우.
    
    elseif (preg_match('#Chrome/(\d+)\.#', $ua, $matches) && $matches[1] < 11) {
        $header = 'filename=' . $filename;
    }
    
    // Safari 6 미만의 경우.
    
    elseif (preg_match('#Safari/(\d+)\.#', $ua, $matches) && $matches[1] < 6) {
        $header = 'filename=' . $filename;
    }
    
    // 안드로이드 브라우저의 경우. (버전에 따라 여전히 한글은 깨질 수 있다. IE보다 못한 녀석!)
    
    elseif (preg_match('#Android #', $ua, $matches)) {
        $header = 'filename="' . $filename . '"';
    }
    
    // 그 밖의 브라우저들은 RFC2231/5987 표준을 준수하는 것으로 가정한다.
    // 단, 만약에 대비하여 Firefox 구 버전 형태의 filename 정보를 한 번 더 넣어준다.
    
    else {
        $header = "filename*=UTF-8''" . rawurlencode($filename) . '; filename="' . rawurlencode($filename) . '"';
    }
    
    // 캐싱이 금지된 경우...
    
    if (!$expires) {
        
        // 익스플로러 8 이하 버전은 SSL 사용시 no-cache 및 pragma 헤더를 알아듣지 못한다.
        // 그냥 알아듣지 못할 뿐 아니라 완전 황당하게 오작동하는 경우도 있으므로
        // 캐싱 금지를 원할 경우 아래와 같은 헤더를 사용해야 한다.
        
        if ($old_ie) {
            header('Cache-Control: private, must-revalidate, post-check=0, pre-check=0');
            header('Expires: Sat, 01 Jan 2000 00:00:00 GMT');
        }
        
        // 그 밖의 브라우저들은 말을 잘 듣는 착한 어린이!
        
        else {
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            header('Expires: Sat, 01 Jan 2000 00:00:00 GMT');
        }
    }
    
    // 캐싱이 허용된 경우...
    
    else {
        header('Cache-Control: max-age=' . (int)$expires);
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + (int)$expires) . ' GMT');
    }
    
    // 이어받기를 요청한 경우 여기서 처리해 준다.
    
    if (isset($_SERVER['HTTP_RANGE']) && preg_match('/^bytes=(\d+)-/', $_SERVER['HTTP_RANGE'], $matches)) {
        $range_start = $matches[1];
        if ($range_start < 0 || $range_start > $filesize) {
            header('HTTP/1.1 416 Requested Range Not Satisfiable');
            return false;
        }
        header('HTTP/1.1 206 Partial Content');
        header('Content-Range: bytes ' . $range_start . '-' . ($filesize - 1) . '/' . $filesize);
        header('Content-Length: ' . ($filesize - $range_start));
    } else {
        $range_start = 0;
        header('Content-Length: ' . $filesize);
    }
    
    // 나머지 모든 헤더를 전송한다.
    
    header('Accept-Ranges: bytes');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; ' . $header);
    
    // 출력 버퍼를 비운다.
    // 파일 앞뒤에 불필요한 내용이 붙는 것을 막고, 메모리 사용량을 줄이는 효과가 있다.
    
    while (ob_get_level()) {
        ob_end_clean();
    }
    
    // 파일을 64KB마다 끊어서 전송하고 출력 버퍼를 비운다.
    // readfile() 함수 사용시 메모리 누수가 발생하는 경우가 가끔 있다.
    
    $block_size = 16 * 1024;
    $speed_sleep = $speed_limit > 0 ? round(($block_size / $speed_limit / 1024) * 1000000) : 0;
    
    $buffer = '';
    if ($range_start > 0) {
        fseek($fp, $range_start);
        $alignment = (ceil($range_start / $block_size) * $block_size) - $range_start;
        if ($alignment > 0) {
            $buffer = fread($fp, $alignment);
            echo $buffer; unset($buffer); flush();
        }
    }
    while (!feof($fp)) {
        $buffer = fread($fp, $block_size);
        echo $buffer; unset($buffer); flush();
        usleep($speed_sleep);
    }
    
    fclose($fp);
    
    // 전송에 성공했으면 true를 반환한다.
    
    return true;
}



// 배열갯수 카운트 - 배열이 값이 없으면 php7.4에서 에러발생함
function my_count($arr) {
	if(is_array($arr)) {
		$rtvar = count($arr);
	}
	else {
		$rtvar = 0 ;
	}

	return $rtvar;
}

//csv 출력용 데이터 변환
function csv_data($str) {
	if(is_numeric($str)) {
		$str = "=\"" .$str. "\"";
	}
	$str = str_replace("\r\n","", $str);
	$str = str_replace("\r","", $str);
	$str = str_replace("\n","", $str);
	$str = str_replace("\t","", $str);
	$str = str_replace(",","", $str);

	
	$str = iconv("UTF-8","EUC-KR",($str));
	return $str;
}

function csv_txt($str) {
	
	$str = "=\"" .$str. "\"";
	
	$str = str_replace("\r\n","", $str);
	$str = str_replace("\n","", $str);
	$str = str_replace("\r","", $str);
	$str = str_replace("\t","", $str);
	$str = str_replace(",","", $str);

	
	$str = iconv("UTF-8","EUC-KR",($str));
	return $str;
}




// 날짜 timestamp형태로 변경 - 날짜 Y-m-d H:i:s 형태로 입력시 timestamp로 변환함
function dateToStamp($date) {
	if(!$date) return '';

	$temp = explode(' ', $date);

	$day = explode("-", $temp[0]);
	$time  = explode(":", $temp[1]);

	$data = mktime((int) $time[0],(int) $time[1],(int) $time[2],$day[1],$day[2],$day[0]);
	return $data;

}



//function read_html($url, $skin='skin_ko') {
function read_html($url, $skin='') {
	global $_INC;
	

	$file = $_INC['folder']['root_dir']."/_global/".$skin."/".$url;
	$fp = @fopen($file, "r");

	if(!$fp) {
		$result['result'] = 'N';
		$result['msg'] = '파일읽기 실패';

		return $result;
	}
	
	$html = "";
	while($line = fgets($fp)) {
		$html .= $line ."\n";
	}
	@fclose($fp);

	$result['result'] = 'Y';
	$result['msg'] = '';
	$result['html'] = $html;

	return $result;


}

function get_ext_format($fpath) {
	$temp = explode(".", $fpath);
	$temp_cnt = my_count($temp);

	$ext = strtolower($temp[$temp_cnt-1]);

	if($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif" || $ext == "bmp" ) {
		$return = "image";
	}
	else {
		$return = "file";
	}

	return $return;
}

function set_image_size($fpath, $width=80) {
	$rt = getimagesize($fpath);
	
	$org_width = $rt[0];
	$org_height = $rt[1];


	$return = array();

	if($org_width <= $width ) {
		$return['width'] = $org_width;
		$return['height'] = $org_height;
		
		return $return;
	}

	$p = $width/$org_width;
	$height = floor($org_height*$p);

	//echo "width = $width";
	//echo "height = $height";

	$return['width'] = $width;
	$return['height'] = $height;

	return $return;
}

// html table to array
function html_table2array($html) {
	
	$DOM = new  DOMDocument('1.0', 'UTF-8');
	$rt = @$DOM->loadHTML('<?xml encoding="utf-8"?>' .$html);
	//echo "rt= $rt";

	$Header = $DOM->getElementsByTagName('th');
	$Detail = $DOM->getElementsByTagName('td');

	//print_r($Detail);

	$aDataTableHeaderHTML = array();

	//#Get header name of the table
	foreach($Header as $NodeHeader) 
	{
		$aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
	}
	//print_r($aDataTableHeaderHTML); die();

	//#Get row data/detail table without header name as key
	$i = 0;
	$j = 0;
	//$Detail = $Detail->item(0);
	foreach($Detail as $sNodeDetail) 
	{
		//print_r($sNodeDetail);
		//$aDataTableDetailHTML[$j][] = trim($sNodeDetail->textContent);
		$aDataTableDetailHTML[$j][] = trim($sNodeDetail->nodeValue);
		//$aDataTableDetailHTML[$j][] = trim($Detail->item(0));
		$i = $i + 1;

		if(my_count($aDataTableHeaderHTML) > 0 ) {
			$j = $i % my_count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
		}
	}
	//print_r($aDataTableDetailHTML);
	return $aDataTableDetailHTML;
}


// html table to array
function html_findimg($html) {
	
	$result = array();
	$dom = new  DOMDocument('1.0', 'UTF-8');
	$dom->loadHTML('<?xml encoding="utf-8"?>' .$html);
	//$dom->loadHTML($html);
	//echo "rt= $rt";

	$dom->preserveWhiteSpace = false;
	$images = $dom->getElementsByTagName('img');
	foreach ($images as $image) {
	  //echo $image->getAttribute('src');
	  $result[] = $image->getAttribute('src');
	}

	return $result;
}


function arrayToList($arr= array()) {

	if(!is_array($arr)) return;
	
	$list = array();
	foreach($arr as $key => $value) {
		$temp = array(
			'key'	=>$key,
			'value' =>$value
		);
		$list[] = $temp;
	}

	return $list;
}

/**
 * PHP 로그 확인
 */
function print_re($arr = array())
{
	if( empty( $arr ) ) return false;

	echo "<pre>";
	print_r( $arr );
	echo "</pre>";
}

/**
 * 문자열 마스킹 처리
 */
function mytory_asterisk($string)
{
	$string = trim($string);
	$length = mb_strlen($string, 'utf-8');
	$string_changed = $string;
	if ($length <= 2) {
		// 한두 글자면 그냥 뒤에 별표 붙여서 내보낸다.
		$string_changed = mb_substr($string, 0, 1, 'utf-8') . '*';
	}

	if ($length >= 3) {
		// 3으로 나눠서 앞뒤.
		$leave_length = floor($length/3); // 남겨 둘 길이. 반올림하니 너무 많이 남기게 돼, 내림으로 해서 남기는 걸 줄였다.
		$asterisk_length = $length - ($leave_length * 2);
		$offset = $leave_length + $asterisk_length;
		$head = mb_substr($string, 0, $leave_length, 'utf-8');
		$tail = mb_substr($string, $offset, $leave_length, 'utf-8');
		$string_changed = $head . implode('', array_fill(0, $asterisk_length, '*')) . $tail;
	}
	return $string_changed;
}

/**
 * stringToDateWithDelimiter("20240101", "-") -> 2024-01-01
 */
function stringToDateWithDelimiter(string $dateString, string $delimiter): string
{
	if(is_null($dateString) || $dateString === '') return '';

	$year = substr($dateString, 0, 4);
	$month = substr($dateString, 4, 2);
	$day = substr($dateString, 6, 2);

	return  $year . $delimiter . $month . $delimiter . $day;
}

/**
 * stringToDateTimeWithDelimiter("20240101073009", "-") -> 2024-01-01 07:30:09
 */
function stringToDateTimeWithDelimiter(string $dateTimeString, string $delimiter): string
{
	if(is_null($dateTimeString) || $dateTimeString === '') return '';

	$year = substr($dateTimeString, 0, 4);
	$month = substr($dateTimeString, 4, 2);
	$day = substr($dateTimeString, 6, 2);
	$hour = substr($dateTimeString, 8, 2);
	$minute = substr($dateTimeString, 10, 2);
	$second = substr($dateTimeString, 12, 2);

	return  $year . $delimiter . $month . $delimiter . $day . ' ' . $hour . ':' . $minute . ':' . $second;
}

/**
 * stringToTime(1200) -> 12:00
 */
function stringToTime(string $timeString) : string
{
	if(is_null($timeString) || $timeString === '') return '';

	return substr($timeString, 0, 2) .':'.substr($timeString, 2, 2);
}

/**
 * 8201012341234 -> +82 010-1234-1234
 */
function stringToPhoneNumberWithNationalCode(string $string) : string
{
	if(!$string) return '';

	$string = preg_replace('/\D/', '', $string);

	// 국가 코드와 나머지 전화번호를 분리
	$nationalCode = substr($string, 0, 2);
	$remainingNumber = substr($string, 2);

	// 전화번호가 10자리인 경우
	if (strlen($remainingNumber) == 10) {
		$formattedPhoneNumber = sprintf("%s-%s-%s",
			substr($remainingNumber, 0, 3),
			substr($remainingNumber, 3, 3),
			substr($remainingNumber, 6, 4)
		);
	}
	// 전화번호가 11자리인 경우
	elseif (strlen($remainingNumber) == 11) {
		$formattedPhoneNumber = sprintf("%s-%s-%s",
			substr($remainingNumber, 0, 3),
			substr($remainingNumber, 3, 4),
			substr($remainingNumber, 7, 4)
		);
	}
	else {
		return $string;
	}

	return "+" . $nationalCode . " " . $formattedPhoneNumber;
}

function addCommasToNumberString (string $numberString=null) {
	if(is_null($numberString) || $numberString == '') return '';

	return  preg_replace('/\B(?=(\d{3})+(?!\d))/', ',', $numberString);
}

function replaceNullWithCustomValue(array $arr, string $replacement)
{
	if(!count($arr)) return;

	foreach ($arr as $key => $value) {
		if (is_null($value)) {
			$arr[$key] = $replacement;
		}
	}

	return $arr;
}

function nameMasking(string $name=null)
{
	if(is_null($name)) return '';
	switch (mb_strlen($name, 'UTF-8')) {
		case 2:
			$name = mb_substr($name, 0, 1, 'UTF-8') .'*';
			break;

		case 3:
			$name = mb_substr($name, 0, 1, 'UTF-8') .'*' .mb_substr($name, -1, 1,'UTF-8');
			break;

		case 4:
			$name = mb_substr($name, 0, 1, 'UTF-8') .'**' .mb_substr($name, -1, 1,'UTF-8');

		default :
			$name = mb_substr($name, 0, 1, 'UTF-8') .'**' .mb_substr($name, -1, 1,'UTF-8');
			break;
	}

	return $name;
}

function phoneMasking(string $phoneNumber=null)
{
	if(is_null($phoneNumber) || $phoneNumber == '' || strlen($phoneNumber) === 1) return '';

	return substr($phoneNumber, 0, 3) .'***' .substr($phoneNumber, -3);
}

function accountMasking(string $account=null)
{
	if(is_null($account) || $account == '') return '';

	return substr($account, 0, 3) .'***' .substr($account, -3);
}

function getCurrentYearMonth()
{
	$current = new DateTime();
	return $current->format('Ym');
}

function generateUniqueFilename($extension = '') {
	$uniqueId = uniqid();

	$filename = str_replace('.', '', $uniqueId);

	if (!empty($extension)) {
		$filename .= '.' . $extension;
	}

	return $filename;
}

function encrypt($plaintext) {
    global $_INC;
    $iv = substr( hash( 'sha256', $_INC['env']['nfs_key'] ), 0, 16 );

	return base64_encode(openssl_encrypt($plaintext, "AES-128-CBC", $_INC['env']['nfs_key'], OPENSSL_RAW_DATA, $iv));
}

function sendCurlRequest(string $url)
{
	$ch = curl_init($url);

//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 응답을 문자열로 반환

	$response = curl_exec($ch);

	if (curl_errno($ch)) {
		curl_close($ch);
		return array('status'=>false, 'code'=> 500, 'msg'=> 'API 호출에 실패했습니다.', 'msg2'=>curl_error($ch));
	} else {
		// 응답 처리
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if ($httpcode == 200 && $response == 1) {
			return array('status' => true);
		} else {
			return array('status'=>false, 'code'=> $httpcode, 'msg'=> 'API 통신 중 오류가 발생했습니다.');
		}
	}
}
?>

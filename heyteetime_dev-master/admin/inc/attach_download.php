<?php
/** ---------------------------------------------------------------
@program : 파일다운로드
@description : 
@fileinfo : /inc/attach_download.php
@filedescription : 

@auth : 현민원
@since : 2019.2
------------------------------------------------------------------**/

include_once $_SERVER['DOCUMENT_ROOT']."/inc/setup.php";

if(!$_SESSION['admin_id']) {
	alert('logout','로그아웃 되었습니다!');

}



if(!$_REQUEST['gubun']) close();


switch($_REQUEST['gubun']) {

	//회원사진
	case "user_photo" :
		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select  km_no, filepath from _KOZEN_MEMBERS where km_no = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if(!$data['filepath'] ) {
			alert('해당 파일정보를 찾을 수 없습니다.','back');
		}
		
		$temp = explode(".", $data['filepath']);
		$temp_cnt = my_count($temp);
		$ext = $temp[$temp_cnt-1];
		
		$filepath = $_INC['folder']['root_dir'].$data['filepath'];

		

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}




		

		$file_name = $data['km_no'].".".$ext;
		$file_path = $filepath;

		echo "file_name = $file_name ";
		echo "file_path = $file_path ";

		send_attachment($file_name, $file_path);

		break;

	//시설 공지사항 다운로드
	case "bbs_center_notice" :
		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select file1, file1_name from _bbs_center_notice where num = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if(!$data['file1'] ) {
			alert('해당 파일정보를 찾을 수 없습니다.','back');
		}

		
		$filepath = $_INC['folder']['root_dir'].$data['file1'];

		//echo "filepath = $filepath ";

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}




		

		$file_name = $data['file1_name'];
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;


	//시설 게시판 다운로드
	case "bbs_center_free" :
		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select file1, file1_name from _bbs_center_free where num = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if(!$data['file1'] ) {
			alert('해당 파일정보를 찾을 수 없습니다.','back');
		}

		
		$filepath = $_INC['folder']['root_dir'].$data['file1'];

		//echo "filepath = $filepath ";

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}




		

		$file_name = $data['file1_name'];
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;


	//환불csv 샘플 다운로드
	case "csv_refund_sample" :

		$filepath = $_INC['folder']['root_dir']."/jungsan/refund_upload_sample.csv";

		//alert($filepath);

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = "환불샘플.csv";
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;

	//가상계좌문자발송 csv 샘플 다운로드
	case "csv_vsms_sample" :

		$filepath = $_INC['folder']['root_dir']."/jungsan/vsms_sample.csv";

		//alert($filepath);

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = "가상계좌문자발송샘플.csv";
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;
	

	//CMS결제결과연동 csv 샘플 다운로드
	case "csv_cmsref_sample" :

		$filepath = $_INC['folder']['root_dir']."/jungsan/cms_result_sample.csv";

		//alert($filepath);

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = "CMS결제결과연동샘플.csv";
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;


	//직접입금내역 csv 샘플 다운로드
	case "csv_admin_pay_sample" :

		$filepath = $_INC['folder']['root_dir']."/jungsan/admin_pay_sample.csv";

		//alert($filepath);

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = "직접입금내역등록샘플.csv";
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;


	//직접입금내역 csv 다운로드
	case "csv_admin_pay" :

		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select * from _kozen_dues_upload where kdu_no = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if(!$data['filepath'] ) {
			alert('해당 파일정보를 찾을 수 없습니다.','back');
		}

		
		$filepath = $_INC['folder']['root_dir'].$data['filepath'];

		//echo "filepath = $filepath ";

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = $data['filename'];
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;



	//후불제출금결과 csv 샘플 다운로드
	case "csv_later_pay_sample" :

		$filepath = $_INC['folder']['root_dir']."/jungsan/later_pay_sample.csv";

		//alert($filepath);

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = "후불제출금결과샘플.csv";
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;


	//후불제출금결과 csv 다운로드
	case "csv_later_pay" :

		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select * from _kozen_dues_upload where kdu_no = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if(!$data['filepath'] ) {
			alert('해당 파일정보를 찾을 수 없습니다.','back');
		}

		
		$filepath = $_INC['folder']['root_dir'].$data['filepath'];

		//echo "filepath = $filepath ";

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = $data['filename'];
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;
	

	//동의자료 검색 - ARS파일 다운로드
	case "sch_ars" :

		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select * from _KOZEN_ARS_RESPONSE where idx = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if($data['result_yn'] == 'N' ) {
			alert('해당ARS는 실패했습니다.','back');
		}
		
		if($data['auth_kind'] == 'SIGN') {
			$ym_folder = str_replace("-","",substr($data['insert_date'],0,7));
			
			$file_name = $data['km_no']."_서명".$data['sign_path'];
			$file_path =$_INC['folder']['file_dir']."/cms/ars/".$ym_folder."/".$data['sign_path'];
			 
			log_write($file_path, $str);
		
			send_attachment($file_name, $file_path);

		}
		else {


			$json = json_decode(dbUnEscape($data['json_data']));
			$str = $json->RESP_DATA[0]->RECORD_DATA;

			$str = pack("H*", $str);

			$date = str_replace(array(":"," ","-"),"", $data['insert_date']);

			$file_name = "ars_".$data['km_no']."_".$date.".mp3";
			$file_path = $_INC['folder']['file_dir']."/cms/".$data['km_no']."_".date('YmdHis').".mp3";
			log_write($file_path, $str);
		
			send_attachment($file_name, $file_path);

			@unlink($file_path);
		}

		break;


	//이메일 예약발송 csv 다운로드
	case "email_reserve" :
		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select filename,filepath from _kozen_email_reserve where idx = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if(!$data['filepath'] ) {
			alert('해당 파일정보를 찾을 수 없습니다.','back');
		}

		
		$filepath = $_INC['folder']['root_dir'].$data['filepath'];

		//echo "filepath = $filepath ";

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}




		

		$file_name = $data['filename'];
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;



	//게시판 파일 다운로드
	case "board" :
		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select * from _board_file where brf_seq = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if(!$data['fpath'] ) {
			alert('해당 파일정보를 찾을 수 없습니다.','back');
		}

		
		$filepath = $_INC['folder']['root_dir'].$data['fpath'];

		//echo "filepath = $filepath ";

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}




		

		$file_name = $data['fname'];
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;
	

	case "cpnsend" :

		if(empty($_REQUEST['seq'])) close();
		
		$sql = "
			select * from _kozen_life_cpnsend where lc_seq = '".$_REQUEST['seq']."'
		";
		$data = my_select_one($sql, $myconn);
		

		if(!$data['fpath'] ) {
			alert('해당 파일정보를 찾을 수 없습니다.','back');
		}

		
		$filepath = $_INC['folder']['root_dir'].$data['fpath'];

		//echo "filepath = $filepath ";

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}




		

		$file_name = $data['fname'];
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;


	//후불제출금결과 csv 다운로드
	case "csv_push" :

		$filepath = $_INC['folder']['root_dir']."/manage/push_sample.csv";

		//alert($filepath);

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = "push_sample.csv";
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;
	

	//회원별이용이력 csv 다운로드
	case "csv_cls_user" :

		$filepath = $_INC['folder']['root_dir']."/manage/push_sample.csv";

		//alert($filepath);

		if(!file_exists($filepath)) {
			alert('해당 파일이 존재하지 않습니다.','back');
		}

		$file_name = "회원별이용이력_sample.csv";
		$file_path = $filepath;
		send_attachment($file_name, $file_path);

		break;

	
}
<?php
/**
@program : CKEDITOR 이미지 업로드
@description : CKEDITOR 이미지 업로드
@fileinfo : /include/ckeditor/upload.php
@filedescription : 
@auth : 현민원
@since : 2016.05.12

**/ 

include_once $_SERVER['DOCUMENT_ROOT']."/inc/setup.php";



if(!$_SESSION['admin_id'] ) {
	alert('권한이 없습니다');
}



if ($_FILES["upload"]["size"] > 0 ){

	//// 디렉터리 생성
	
	//에디터 디렉터리
	$editor_dir = $_INC['folder']['root_dir']."/_files/editor_attach";
	$editor_dir_web = "/_files/editor_attach";
	

	if(!is_dir($editor_dir)) {
		exec("mkdir $editor_dir");
		exec("chmod -R 777 $editor_dir");
	}

	//월별 디렉터리
	$save_dir = $editor_dir."/".date("Ym");
	$save_dir_web = $editor_dir_web."/".date("Ym");

	if(!is_dir($save_dir)) {
		exec("mkdir $save_dir");
		exec("chmod -R 777 $save_dir");
	}


	//// 파일 리사이징

	$temp = pathinfo($_FILES['upload']['name']);
	$ext = strtolower($temp['extension']);

	
	
	if(!($ext == "jpg" || $ext == "jpeg" || $ext == "gif" || $ext == "png" )) {
		echo "<script type='text/javascript'>alert('jpg,gif,png파일만 업로드가능합니다.');</script>;";
		exit;
	}

	$save_name = uniqid().".".$ext;

	

	

		

	$rt = resizeImage_class($_FILES["upload"]["tmp_name"],1920,1080,$save_dir, $save_name);
	if(!$rt) {
		 echo "<script type='text/javascript'>alert('파일저장 실패.');</script>;";
		 exit;
	}
	

	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 's' : '') . '://';
	
	$fileurl = $http.$_SERVER['SERVER_NAME'].$save_dir_web."/".$save_name;
	//$fileurl = $save_dir_web."/".$save_name;
	//$fileurl = $_SERVER['SERVER_NAME'].$save_dir_web."/".$save_name;

	


 
}else{
	db_close();
    exit;
 
}
db_close(); 
echo "<script type='text/javascript'> window.parent.CKEDITOR.tools.callFunction({$_GET['CKEditorFuncNum']}, '".$fileurl."');</script>;";
//echo "<script type='text/javascript'> window.parent.CKEDITOR.tools.callFunction({$_GET['ckCsrfToken']}, '".$fileurl."');</script>;";
 //Content-Disposition: form-data; name="ckCsrfToken"
//echo '{"filename" : "'.$save_name.'", "uploaded" : 1, "url":"'.$fileurl.'"}';
?>

<?php
/**
@program : 이미지 처리 함수
@description : 이미지 처리 함수 모음
@fileinfo : /inc/lib/image.php
@filedescription : class
@auth : 현민원
@since : 2016.05.25


**/


function resizeImage($srcfile,$maxWidth,$maxHeight=0,$save_dir='',  $save_name='')
{
	global $_INC;

	$image_size = getimagesize($srcfile);
	$image_quality = 8;
		
	$img_width = $image_size[0];
	$img_height = $image_size[1];

	if($maxWidth < $img_width ) 
	{
		$percent = $img_width/$maxWidth;

		$width = $maxWidth;
		$height = $img_height/$percent;
	}	
	else 
	{
		$width = $img_width;
		$height = $img_height;
	}
	
	$imginfo = getimagesize($srcfile);

	//파일명이 없는 경우
	if(empty($save_name)) {
		$temp_name =  uniqid();

		switch($imginfo['mime']) 
		{
			case "image/bmp":
			case "image/jpg":
			case "image/jpeg":
			case "image/pjpeg":
				$ext = "jpg";
			break;
			
			case "image/gif":
				$ext = "gif";
			break;
			
			case "image/png":
				$ext = "png";
			break;
			default :
				$ext = "jpg";
		}

		$save_name = $temp_name.".".$ext;


	}
	
	//저장 파일명
	$savefilename = $save_dir."/". $save_name;
	$webfilename = str_replace($_INC['folder']['root_dir'],'',$savefilename);

	$return_arr = array(
		'savefile_path'		=> $savefilename,
		'webfile_path'			=> $webfilename,
		'save_name'			=> $save_name

	);
	

	


	$is_animated = is_animated_gif($srcfile);
	
	if(!$is_animated)
	{

		$tmp_images = imagecreatetruecolor($width,$height);
		if(!$tmp_images) { return false; }
		

		// mime타입으로 읽을시 파일오류가 존재하면 업로드 에러가 발생하여 파일형태로 읽어서 처리한다.
		$fh = fopen($srcfile, 'rb'); 
		$str = ''; 
		while($fh !== false && !feof($fh))
		{ 
			$str .= fread($fh, 1024); 
		} 

		$source = @imagecreatefromstring($str);

		if(!$source) 
		{
			switch($imginfo['mime']) 
			{
				case "image/bmp":
					$source = imagecreatefrombmp2 ($srcfile) ;
					
				break;
				
				case "image/jpg":
				case "image/jpeg":
				case "image/pjpeg":
					$source = imagecreatefromjpeg($srcfile) ;
				break;
				
				case "image/gif":
					$source = imagecreatefromgif($srcfile) ;
					
				break;
				
				case "image/png":
					$source = imagecreatefrompng($srcfile) ;

					
					break;
			}
		}
		
		
		//////////////
		// 모바일 이미지 로테이션이 있는경우 회전시켜줘야 함 
		
		$exif = @exif_read_data($srcfile);

		

		if(!empty($exif['Orientation'])) {
			switch($exif['Orientation']) {
				case 8:
					$source = imagerotate($source,90,0);
					$tmp_width = $width;
					$tmp_height = $height;

					$width = $tmp_height;
					$height = $tmp_width;

					$tmp_src_w =$imginfo[0];
					$tmp_src_h =$imginfo[1];

					$imginfo[0] = $tmp_src_h;
					$imginfo[1] = $tmp_src_w;
					break;
				case 3:
					$source = imagerotate($source,180,0);
					break;
				case 6:
					$source = imagerotate($source,-90,0);
					
					$tmp_width = $width;
					$tmp_height = $height;

					$width = $tmp_height;
					$height = $tmp_width;

					$tmp_src_w =$imginfo[0];
					$tmp_src_h =$imginfo[1];

					$imginfo[0] = $tmp_src_h;
					$imginfo[1] = $tmp_src_w;

					

					break;
			}
		}
		//////////////
		
		
		
		$tmp_images = imagecreatetruecolor($width,$height);

		imagealphablending($tmp_images, false);
		imagesavealpha($tmp_images,true);
		
		$transparent = imagecolorallocatealpha($tmp_images, 255, 255, 255, 127);
		imagefilledrectangle($tmp_images, 0, 0, $imginfo[0], $imginfo[1], $transparent);


		//$rt = imagecopyresampled($tmp_images,$source,0,0,0,0,$width,$height,$imginfo[0],$imginfo[1]);
		$rt = imagecopyresized($tmp_images,$source,0,0,0,0,$width,$height,$imginfo[0],$imginfo[1]);
		if(!$rt) { return false; }
		
		switch($imginfo['mime']) 
		{
			case "image/bmp":			
			case "image/jpg":
			case "image/jpeg":
			case "image/pjpeg":
				$rt = imagejpeg($tmp_images,$savefilename,80);
				if(!$rt) { return false; }
			break;
			
			case "image/gif":
				$rt = imagegif($tmp_images,$savefilename,80);
				if(!$rt) { return false; }
			break;
			
			case "image/png":
				$rt = imagepng($tmp_images,$savefilename,8);
				if(!$rt) { return false; }
				break;
		}
		
		

		@chmod($savefilename, 0777);
		imagedestroy($tmp_images);


		//return $savefilename;
	}
	else
	{
		$savefilename = $save_dir."/". $save_name;
		copy($srcfile, $savefilename);
		@chmod($savefilename, 0777);
		//return $savefilename;
	}

	return $return_arr;


}


//class img upload + resize
function resizeImage_class($srcfile,$maxWidth,$maxHeight=0,$save_dir='',  $save_name='')
{
	global $_INC;

	$image_size = getimagesize($srcfile);
	$image_quality = 8;
		
	$img_width = $image_size[0];
	$img_height = $image_size[1];

	if($maxWidth < $img_width ) 
	{
		$percent = $img_width/$maxWidth;

		$width = $maxWidth;
		$height = $img_height/$percent;
	}	
	else 
	{
		$width = $img_width;
		$height = $img_height;
	}
	
	$imginfo = getimagesize($srcfile);

	//파일명이 없는 경우
	if(empty($save_name)) {
		$temp_name =  uniqid();

		switch($imginfo['mime']) 
		{
			case "image/bmp":
			case "image/jpg":
			case "image/jpeg":
			case "image/pjpeg":
				$ext = "jpg";
			break;
			
			case "image/gif":
				$ext = "gif";
			break;
			
			case "image/png":
				$ext = "png";
			break;
			default :
				$ext = "jpg";
		}

		$save_name = $temp_name.".".$ext;


	}
	
	//저장 파일명
	$savefilename = $save_dir."/". $save_name;
	$webfilename = str_replace($_INC['folder']['root_dir'],'',$savefilename);

	$return_arr = array(
		'savefile_path'		=> $savefilename,
		'webfile_path'			=> $webfilename,
		'save_name'			=> $save_name

	);
	

	


	$is_animated = is_animated_gif($srcfile);
	
	if(!$is_animated)
	{

		$tmp_images = imagecreatetruecolor($width,$height);
		if(!$tmp_images) { return false; }
		

		// mime타입으로 읽을시 파일오류가 존재하면 업로드 에러가 발생하여 파일형태로 읽어서 처리한다.
		$fh = fopen($srcfile, 'rb'); 
		$str = ''; 
		while($fh !== false && !feof($fh))
		{ 
			$str .= fread($fh, 1024); 
		} 

		$source = @imagecreatefromstring($str);

		if(!$source) 
		{
			switch($imginfo['mime']) 
			{
				case "image/bmp":
					$source = imagecreatefrombmp2 ($srcfile) ;
					
				break;
				
				case "image/jpg":
				case "image/jpeg":
				case "image/pjpeg":
					$source = imagecreatefromjpeg($srcfile) ;
				break;
				
				case "image/gif":
					$source = imagecreatefromgif($srcfile) ;
					
				break;
				
				case "image/png":
					$source = imagecreatefrompng($srcfile) ;

					
					break;
			}
		}
		
		
		//////////////
		// 모바일 이미지 로테이션이 있는경우 회전시켜줘야 함 
		
		$exif = @exif_read_data($srcfile);

		

		if(!empty($exif['Orientation'])) {
			switch($exif['Orientation']) {
				case 8:
					$source = imagerotate($source,90,0);
					$tmp_width = $width;
					$tmp_height = $height;

					$width = $tmp_height;
					$height = $tmp_width;

					$tmp_src_w =$imginfo[0];
					$tmp_src_h =$imginfo[1];

					$imginfo[0] = $tmp_src_h;
					$imginfo[1] = $tmp_src_w;
					break;
				case 3:
					$source = imagerotate($source,180,0);
					break;
				case 6:
					$source = imagerotate($source,-90,0);
					
					$tmp_width = $width;
					$tmp_height = $height;

					$width = $tmp_height;
					$height = $tmp_width;

					$tmp_src_w =$imginfo[0];
					$tmp_src_h =$imginfo[1];

					$imginfo[0] = $tmp_src_h;
					$imginfo[1] = $tmp_src_w;

					

					break;
			}
		}
		//////////////
		
		
		
		$tmp_images = imagecreatetruecolor($width,$height);

		imagealphablending($tmp_images, false);
		imagesavealpha($tmp_images,true);
		
		$transparent = imagecolorallocatealpha($tmp_images, 255, 255, 255, 127);
		imagefilledrectangle($tmp_images, 0, 0, $imginfo[0], $imginfo[1], $transparent);


		//$rt = imagecopyresampled($tmp_images,$source,0,0,0,0,$width,$height,$imginfo[0],$imginfo[1]);
		$rt = imagecopyresized($tmp_images,$source,0,0,0,0,$width,$height,$imginfo[0],$imginfo[1]);
		if(!$rt) { return false; }
		
		switch($imginfo['mime']) 
		{
			case "image/bmp":			
			case "image/jpg":
			case "image/jpeg":
			case "image/pjpeg":
				$rt = imagejpeg($tmp_images,$savefilename,80);
				if(!$rt) { return false; }
			break;
			
			case "image/gif":
				$rt = imagegif($tmp_images,$savefilename,80);
				if(!$rt) { return false; }
			break;
			
			case "image/png":
				$rt = imagepng($tmp_images,$savefilename,8);
				if(!$rt) { return false; }
				break;
		}
		
		

		@chmod($savefilename, 0777);
		imagedestroy($tmp_images);


		//return $savefilename;
	}
	else
	{
		$savefilename = $save_dir."/". $save_name;
		copy($srcfile, $savefilename);
		@chmod($savefilename, 0777);
		//return $savefilename;
	}

	return $return_arr;


}

// 워터마크 생성
function addLogo($file, $water, $loc="center", $opt="100") {
	global $_INC;
	

	list ( $ow, $oh, $src_t, $src_a ) = getimagesize($file); 
	list ( $sw, $sh, $ssrc_t, $ssrc_a ) = getimagesize($water); 
		
	$file_ext = strtolower(substr($file,-3,3));

	$imginfo = getimagesize($file);
	//print_r($imginfo);
	//echo $file;

	switch($imginfo['mime'] ) {
		case "image/png" :
			$src_im = @ImageCreateFromPNG($file);
			break;
		case "image/igf" :
			$src_im = @ImageCreateFromGIF($file);
			break;
		default :
			$src_im = @ImageCreateFromJPEG($file);
			break;
		
	}
	
	
	//// 워터마크 불러오기

	//echo "water = $water \n";
	
	$wat_source = ImageCreateFromPNG($water);
	

	// 원본이미지 넓이가 800 이하인경우
	if($ow < 800 ) {
		
		//비율에 맞게 워터마크를 리사이즈 한다.
		$percent = floor($ow/800 *100) /100;

		$wat_newWidth = floor($sw*$percent*100)/100;
		$wat_newHeight = floor($sh*$percent*100)/100;

		

		$new_img = imagecreatetruecolor($wat_newWidth,$wat_newHeight)or die("두번째 실패");


		
		imagealphablending($new_img, false);
		imagesavealpha($new_img,true);

		
		$transparent = imagecolorallocatealpha($new_img, 255, 255, 255, 127);
		imagefilledrectangle($new_img, 0, 0, $wat_newWidth, $wat_newHeight, $transparent);
		imagecolortransparent ( $new_img , $transparent );


		
		
		
		imagecopyresized($new_img,$wat_source, 0,0,0,0,$wat_newWidth,$wat_newHeight,$sw, $sh)or die("세번째실패");

		$wat_source = $new_img;
		

	}
	else {

		
		//$percent = floor($ow/800 *100) /100;

		$wat_newWidth = $sw;
		$wat_newHeight = $sh;
	}

	
		
		
	// 워터마크위치 - 센터
	//$span_x=($ow/2) - ($wat_newWidth/2); 
	//$span_y=($oh/2) - ($wat_newHeight/2);

	switch($loc) {
		case "center":
			$span_x=($ow/2) - ($wat_newWidth/2); 
			$span_y=($oh/2) - ($wat_newHeight/2);

			
			break;
		case "lefttop":
			$span_x=10; 
			$span_y=10;
			break;

		case "centertop":
			$span_x=($ow/2) - ($wat_newWidth/2); 
			$span_y=10;
			break;

		case "righttop":
			$span_x=($ow/2) ; 
			$span_y=10;
			break;
		
		case "leftmiddle":
			$span_x=10; 
			$span_y=($oh/2) - ($wat_newHeight/2);
			break;
		
		case "rightmiddle":
			$span_x=($ow/2); 
			$span_y=($oh/2) - ($wat_newHeight/2);
			break;

		case "leftbottom":
			$span_x=10; 
			$span_y=$oh - $wat_newHeight;
			break;
		case "centerbottom":
			$span_x=($ow/2) - ($wat_newWidth/2) ;
			$span_y=$oh - $wat_newHeight ;
			break;
		case "rightbottom":
			$span_x=($ow/2) ;
			$span_y=$oh - $wat_newHeight ;
			break;
		default:
			$span_x=($ow/2) - ($wat_newWidth/2); 
			$span_y=($oh/2) - ($wat_newHeight/2);
	}

	

		
	//echo "file_ext = ".$file_ext;
	
	
	imagecopymerge($src_im,$wat_source,$span_x,$span_y,0,0,$wat_newWidth,$wat_newHeight, $opt);
	
	/*
	imagealphablending($src_im, 1);
	imagealphablending($wat_source, 1);
	imagesavealpha($wat_source,true);
	imagecopymerge ( $src_im ,$wat_source ,$span_y,$span_y,0,0,$wat_newWidth,$wat_newHeight , 100 );
	
	
	imagealphablending($wat_source, false);
	imagesavealpha($wat_source,true);
	imagecopyresampled($src_im,$wat_source,$span_x,$span_y, 0,0,$wat_newWidth,$wat_newHeight,$wat_newWidth, $wat_newHeight);
	*/

	
	

	if($file_ext =="jpg" || $file_ext =="peg") ImageJPEG($src_im, $file, 80);
	else if($file_ext =="png") imagepng($src_im,$file,9) ;
	else if($file_ext =="gif") imagegif($src_im,$file,80) ;
	

	exec("chmod 777 $file");
	imagedestroy($src_im);
	imagedestroy($wat_source);
}

function makeMemberWatermark($bno, $new_yn) {			// 중개사번호, 새로작성여부
	global $myconn, $_INC;

	// ========================== 유효성 검사 ===============================//
	if(!$bno || !$new_yn) return;

	// =========================== 환경설정 ============================//
	
	//// font
	//폰트위치
	$img[fontPath] = $_INC[folder][root_dir]."/inc/font/NanumGothicExtraBold.ttf";

	//폰트색깔
	//$img[fontColor] = hexTodec("ffffff");
	$img[fontColor] ="255,255,255";
	

	//폰트사이즈
	$img[fontSize] = "13";

	//배경색깔
	$img[bgColor] = "255,255,255";

	//저장포맷
	$img[format] = "PNG";

	//폰트위치
	$img[xpos] = "0";
	$img[ypos] = "13";

	//// user
	// 유저파일 위치

	$watermark_folder = userDirectory("system")."/company";
	if(!is_dir($watermark_folder)) {
		
		exec("mkdir $watermark_folder");
		exec("chmod -R 777 $watermark_folder");
	}

	$img[userPath] =  userDirectory("system")."/company/memberWatermark_".$bno.".png";
	$img[userViewPath] =  userDirectory("web")."/company/memberWatermark_".$bno.".png";

	

	// =======================  회원정보 가져오기 =============================//
	$sql = " select com_nm from thebiz_member.tb_bmember where bno= $bno ";
	$companyName = my_read($sql, $myconn);

	// ===================  기존 로고 존재여부 검사 ===========================//

	if( file_exists($img[userPath]) ) $img[oldfile_exist] ="Y";
	else $img[oldfile_exist] ="N";

		
	// 새로생성이 아니면 중단
	if($img[oldfile_exist] =="Y" ) {
		
		if($new_yn =="N" ) return;
		else if($new_yn =="Y" ) @unlink($img[userPath]);
	}
		


	
	// 글자설정
	
	//$companyName ="방주부동산뉴스공인중개사사무소";
	//$img[fontText] = getucs2($companyName); // 문자열 변환하지 않으면 영문만 가능...
	$img[fontText] = $companyName; // 문자열 변환하지 않으면 영문만 가능...


	//// 워터마크 생성하기

	//이미지 크기 설정
	$img[width] = mb_strlen($companyName, "euc-kr") * ($img[fontSize] -3);
	$img[height] = 18;

	
	$image = imagecreatetruecolor($img[width], $img[height]); // 텍스트 박스 메모리에 생성

	imageAlphaBlending($image, false);
	imagesavealpha($image, true);

	$bgcolor = explode(",", $img[bgColor]); 
	$BgColor = imagecolorallocatealpha($image, $bgcolor[0], $bgcolor[1], $bgcolor[2],127); // 텍스트 박스 BGcolor 설정 
	
	// 박스 생성 및 배경투명 처리
	imagefilledrectangle($image, 0, 0, $img[width], $img[height], $BgColor); // 각 설정에 따른 사각형 텍스트 박스 생성 
	//imagecolortransparent($image,$BgColor);//배경색 투명으로 바꿈

	
	$fontcolor = explode(",", $img[fontColor]); 

	//$TextColor = ImageColorAllocate($image, $fontcolor[0], $fontcolor[1], $fontcolor[2]); // 텍스트 컬러 설정 
	$TextColor = imagecolorallocatealpha($image, $fontcolor[0], $fontcolor[1], $fontcolor[2], 40); // 텍스트 컬러 설정 

	


	//중개업소명 쓰기
	ImageTTFText($image, $img[fontSize], 0, $img[xpos],  $img[ypos], $TextColor, $img[fontPath], $img[fontText]); // 생성된 텍스트 박스에 설정좌표에 글씨쓰기 


	//이미지 저장
	imagePNG($image,$img[userPath],9,PNG_ALL_FILTERS );

	//메모리상 이미지 삭제
	imagedestroy($image); // 메모리에 올려져 있는 이미지 지우기 

	exec("chmod 777 ".$img[userPath]);
		
}


//bmp파일처리
function imagecreatefrombmp2($p_sFile) 
 { 
	 //    Load the image into a string 
	 $file    =    fopen($p_sFile,"rb"); 
	 $read    =    fread($file,10); 
	 while(!feof($file)&&($read<>"")) 
		 $read    .=    fread($file,1024); 
	 
	 $temp    =    unpack("H*",$read); 
	 $hex    =    $temp[1]; 
	 $header    =    substr($hex,0,108); 
	 
	 //    Process the header 
	 //    Structure: http://www.fastgraph.com/help/bmp_header_format.html 
	 if (substr($header,0,4)=="424d") 
	 { 
		 //    Cut it in parts of 2 bytes 
		 $header_parts    =    str_split($header,2); 
		 
		 //    Get the width        4 bytes 
		 $width            =    hexdec($header_parts[19].$header_parts[18]); 
		 
		 //    Get the height        4 bytes 
		 $height            =    hexdec($header_parts[23].$header_parts[22]); 
		 
		 //    Unset the header params 
		 unset($header_parts); 
	 } 
	 
	 //    Define starting X and Y 
	 $x                =    0; 
	 $y                =    1; 
	 
	 //    Create newimage 
	 $image            =    imagecreatetruecolor($width,$height); 
	 
	 //    Grab the body from the image 
	 $body            =    substr($hex,108); 

	 //    Calculate if padding at the end-line is needed 
	 //    Divided by two to keep overview. 
	 //    1 byte = 2 HEX-chars 
	 $body_size        =    (strlen($body)/2); 
	 $header_size    =    ($width*$height); 

	 //    Use end-line padding? Only when needed 
	 $usePadding        =    ($body_size>($header_size*3)+4); 
	 
	 //    Using a for-loop with index-calculation instaid of str_split to avoid large memory consumption 
	 //    Calculate the next DWORD-position in the body 
	 for ($i=0;$i<$body_size;$i+=3) 
	 { 
		 //    Calculate line-ending and padding 
		 if ($x>=$width) 
		 { 
			 //    If padding needed, ignore image-padding 
			 //    Shift i to the ending of the current 32-bit-block 
			 if ($usePadding) 
				 $i    +=    $width%4; 
			 
			 //    Reset horizontal position 
			 $x    =    0; 
			 
			 //    Raise the height-position (bottom-up) 
			 $y++; 
			 
			 //    Reached the image-height? Break the for-loop 
			 if ($y>$height) 
				 break; 
		 } 
		 
		 //    Calculation of the RGB-pixel (defined as BGR in image-data) 
		 //    Define $i_pos as absolute position in the body 
		 $i_pos    =    $i*2; 
		 $r        =    hexdec($body[$i_pos+4].$body[$i_pos+5]); 
		 $g        =    hexdec($body[$i_pos+2].$body[$i_pos+3]); 
		 $b        =    hexdec($body[$i_pos].$body[$i_pos+1]); 
		 
		 //    Calculate and draw the pixel 
		 $color    =    imagecolorallocate($image,$r,$g,$b); 
		 imagesetpixel($image,$x,$height-$y,$color); 
		 
		 //    Raise the horizontal position 
		 $x++; 
	 } 
	 
	 //    Unset the body / free the memory 
	 unset($body); 
	 
	 //    Return image-object 
	 return $image; 
 } 

function is_animated_gif( $filename )
{
    $raw = file_get_contents( $filename );

    $offset = 0;
    $frames = 0;
    while ($frames < 2)
    {
    	$where1 = strpos($raw, "\x00\x21\xF9\x04", $offset);
    	if ( $where1 === false )
    	{
    		break;
    	}
    	else
    	{
    		$offset = $where1 + 1;
    		$where2 = strpos( $raw, "\x00\x2C", $offset );
    		if ( $where2 === false )
    		{
    			break;
    		}
    		else
    		{
    			if ( $where1 + 8 == $where2 )
    			{
    				$frames ++;
    			}
    			$offset = $where2 + 1;
    		}
    	}
    }

    return $frames > 1;
}

function getucs2( $str )
{
	$str = mb_convert_encoding($str, "UCS-2", "EUC-KR");

	for ( $i = 0; $i < strlen($str); $i+=2 ){
		$ret .= "&#" . (ord(substr($str, $i, 1))*256 + ord(substr($str, $i+1, 1))) . ";";
	}
	return $ret;
}

function logo_proc($save_dir, $save_img, $head_str,$phone, $name="",  $headcolor='', $font_kind='', $textalign='center',$opt=100) {
	 global $_INC;
	
	
	// 머릿글 쓰기
	$selfont = $_INC['folder']['root_dir'].$_INC['font'][$font_kind]['url'];
	
	$Width = 450; // 텍스트 박스 가로크기 
	$Height = 100; // 텍스트 박스 세로크기 
	
	
	$FontColor = hexTodec($headcolor); // 글자 폰트색

	$tempcolor = explode(",", $FontColor);
	
	if($tempcolor[2] == "0") $tempcolor[2] = 1;
	else if($tempcolor[2] == "255") $tempcolor[2] = 254;
	else $tempcolor[2] = $tempcolor[2]+1;
	
	$BGColor = $tempcolor[0].",".($tempcolor[1] ).",".$tempcolor[2];

	$layercolor = "250,250,250";
	
	
	$TextPosX = 0; // 글자 시작위치(X좌표)
	//$TextPosY = 35; // 글자 시작위치(Y좌표)
	$TextPosY = $_INC['font'][$font_kind]['업소명Y좌표']; // 글자 시작위치(Y좌표) 
	$FontSize = $_INC['font'][$font_kind]['크기1']; // 글씨폰트 크기  - 중개업소명
	

	////// 정렬

	// 중개업소명 왼쪽 시작좌표 
	$head_str_size = mb_strlen($head_str, "utf-8");
	$area_cnt  = floor(400/12);
	$TextPosX = (12 - $head_str_size)*$area_cnt/2 + 40;
	
	
	// 전화번호 왼쪽시작좌표
	if(strlen($phone) <=11) $phone_x = 160;
	else $phone_x = 175;

			


	//echo "x = $TextPosX <br>";
	//$String = getucs2($head_str); // 문자열 변환하지 않으면 영문만 가능...
	$String = $head_str; // 문자열 변환하지 않으면 영문만 가능...
	
	$FontPath = $selfont; // 표현할 폰트종류(일부 폰트만 지원/트루타입) 

	
	
	//$String = $head_str; // 문자열 변환하지 않으면 영문만 가능... 
	$format = "PNG"; // 생성된 이미지를 출력할 포멧(JPG/GIF/PNG) 
	$quality = 9; // JPG포멧의 이미지품질 (높을수록 품질좋음/용량커짐) 

	
	$image = imagecreatetruecolor($Width, $Height); // 텍스트 박스 메모리에 생성
	
	 
	$bgcolor = explode(",", $BGColor); 
	$BgColor = ImageColorAllocate($image, $bgcolor[0], $bgcolor[1], $bgcolor[2]); // 텍스트 박스 BGcolor 설정 
	
	$fontcolor = explode(",", $FontColor); 
	$TextColor = ImageColorAllocate($image, $fontcolor[0], $fontcolor[1], $fontcolor[2]); // 텍스트 컬러 설정 

	 
	imagefilledrectangle($image, 0, 0, $Width+2, $Height+2, $BgColor); // 각 설정에 따른 사각형 텍스트 박스 생성 
	imagecolortransparent($image,$BgColor);//배경색 투명으로 바꿈

	
	//중개업소명
	ImageTTFText($image, $FontSize, 0, $TextPosX, $TextPosY, -$TextColor, $FontPath, $String); // 생성된 텍스트 박스에 설정좌표에 글씨쓰기 
	
	//전화번호

	if($phone) {
	
		//$phone_y = 75;
		$phone_y = $_INC['font'][$font_kind]['전화번호Y좌표'];
		$phone_size =  $_INC['font'][$font_kind]['크기2']; 
		$phone = "Tel) ".$phone; // 문자열 변환하지 않으면 영문만 가능... 
		
		$phone_font =  $selfont;
		ImageTTFText($image, $phone_size, 0, $phone_x, $phone_y, -$TextColor, $phone_font, $phone); // 생성된 텍스트 박스에 설정좌표에 글씨쓰기 

	}
	

	$String = iconv("utf-8", "euc-kr", $String); 
	///// 설정 포멧에 맞게 이미지 뿌려주기 ///// 
	if($format=="JPG"){ 
	  //  header("Content-Type:image/jpeg"); 
		imageJpeg($image, $save_dir."/".$save_img, $quality);
	} else if($format=="PNG"){ 	   
		 
		imagePNG($image,$save_dir."/".$save_img,9,PNG_ALL_FILTERS );
	} else if($format=="GIF"){ 
	  
		imageGIF($image,$save_dir."/".$save_img);
	} 
	imagedestroy($image); // 메모리에 올려져 있는 이미지 지우기 
 }

 function hexTodec($str) {
	 $head = substr($str,1,2);
	 $body = substr($str,3,2);
	 $tail = substr($str,5,2);

	 $result = hexdec($head).",".hexdec($body).",".hexdec($tail);
	 
	 return $result;
 }
 // 한글 문자열 자르기(문자열, 자를 길이, 자른후 출력 문자)
function strStringCut($str, $len){
	if($len >= strlen($str)){ return $str; }

	$klen	= $len - 1;

	while(ord($str[$klen]) & 0x80){
		$klen--;
	}

	return substr($str, 0, $len - (($len + $klen + 1) % 2));
}


function noimage_make( $head_str, $phone, $headcolor="#4b4b4b", $font_code='') {
	 global $_INC;

	//============ 기본이미지 생성 ==================//
	$noimg_ori = $_INC['folder']['root_dir']."/adm/images/no_img.jpg";
	$save_dir =  $_INC['folder']['root_dir'].userDirectory($_SESSION['adm_bno'], 'sys');
	$save_img = '/noimg_wat_'.$_SESSION['adm_bno'].".gif";
	$save_jpgfile = $save_dir.'/noimg_'. $_SESSION['adm_bno'].".jpg";

	//echo "save_jpgfile = $save_jpgfile ";
	//if(file_exists($save_jpgfile)) @unlink($save_jpgfile);
	//copy($noimg_ori, $save_jpgfile);

	

	
	
	$FontPath = $_INC['folder']['root_dir'].$_INC['font'][$font_code]['url'];
	//echo $FontPath;
	$Width = 730; // 텍스트 박스 가로크기 
	$Height = 120; // 텍스트 박스 세로크기 
	//$headcolor = "#4b4b4b";
	$FontColor = hexTodec($headcolor); // 글자 폰트색
	$format = "PNG"; // 생성된 이미지를 출력할 포멧(JPG/GIF/PNG) 
	$quality = 9; // JPG포멧의 이미지품질 (높을수록 품질좋음/용량커짐) 


	$tempcolor = explode(",", $FontColor);
	
	if($tempcolor[2] == "0") $tempcolor[2] = 1;
	else if($tempcolor[2] == "255") $tempcolor[2] = 254;
	else $tempcolor[2] = $tempcolor[2]+1;
	
	$BGColor = $tempcolor[0].",".($tempcolor[1] ).",".$tempcolor[2];

	$layercolor = "250,250,250";
	
	
	
	$String = $head_str; // 문자열 변환하지 않으면 영문만 가능...

	// 중개업소명 왼쪽 시작좌표 
	$head_str_size = mb_strlen($head_str, "utf-8");
	$area_cnt  = 42;
	$TextPosX = (13-($head_str_size))*($area_cnt/2) +100 ;


	$TextPosY = $_INC['font'][$font_code]['업소명Y좌표']; // 글자 시작위치(Y좌표) 
	$FontSize = $_INC['font'][$font_code]['크기1'] +7; // 글씨폰트 크기  - 중개업소명
	
	$image = imagecreatetruecolor($Width, $Height); // 텍스트 박스 메모리에 생성
	
	 
	$bgcolor = explode(",", $BGColor); 
	$BgColor = ImageColorAllocate($image, $bgcolor[0], $bgcolor[1], $bgcolor[2]); // 텍스트 박스 BGcolor 설정 
	
	$fontcolor = explode(",", $FontColor); 
	$TextColor = ImageColorAllocate($image, $fontcolor[0], $fontcolor[1], $fontcolor[2]); // 텍스트 컬러 설정 


	imagefilledrectangle($image, 0, 0, $Width+2, $Height+2, $BgColor); // 각 설정에 따른 사각형 텍스트 박스 생성 
	imagecolortransparent($image,$BgColor);//배경색 투명으로 바꿈

	
	//중개업소명
	ImageTTFText($image, $FontSize, 0, $TextPosX, $TextPosY, -$TextColor, $FontPath, $String); // 생성된 텍스트 박스에 설정좌표에 글씨쓰기 

	//전화번호

	// 전화번호 왼쪽시작좌표
	
	$phone_x = 275;
	$phone_y = 105;
	
	$phone_size = $_INC['font'][$font_code]['크기2']+7;
	$phone = "Tel) ".$phone; // 문자열 변환하지 않으면 영문만 가능... 
	
	ImageTTFText($image, $phone_size, 0, $phone_x, $phone_y, -$TextColor, $FontPath, $phone); // 생성된 텍스트 박스에 설정좌표에 글씨쓰기 
	
		

	
	///// 설정 포멧에 맞게 이미지 뿌려주기 ///// 
	if($format=="JPG"){ 
	  //  header("Content-Type:image/jpeg"); 
		imageJpeg($image, $save_dir.$save_img, $quality);
	} else if($format=="PNG"){ 	   
		 
		imagePNG($image,$save_dir.$save_img,9,PNG_ALL_FILTERS );
	} else if($format=="GIF"){ 
		

		imageGIF($image,$save_dir.$save_img);
	} 
	imagedestroy($image); // 메모리에 올려져 있는 이미지 지우기 
	
	if(file_exists($save_jpgfile)) @unlink($save_jpgfile);
	copy($noimg_ori, $save_jpgfile);
	
	addLogo($save_jpgfile, $save_dir.$save_img);
	unlink($save_dir.$save_img);

}

function noimage_thumb_make($head_str, $headcolor = "#4b4b4b", $font_code='') {
	 global $_INC;

	//============ 기본이미지 생성 ==================//
	$noimg_ori = $_INC['folder']['root_dir']."/adm/images/no_img_thumb.jpg";
	$save_dir =  $_INC['folder']['root_dir'].userDirectory($_SESSION['adm_bno'], 'sys');
	$save_img = '/noimg_wat_'.$_SESSION['adm_bno'].".png";
	$save_jpgfile = $save_dir.'/noimg_thumb_'. $_SESSION['adm_bno'].".jpg";

	
	$FontPath = $_INC['folder']['root_dir'].$_INC['font'][$font_code]['url'];
	$Width = 730; // 텍스트 박스 가로크기 
	$Height = 170; // 텍스트 박스 세로크기 
	
	$FontColor = hexTodec($headcolor); // 글자 폰트색
	$format = "PNG"; // 생성된 이미지를 출력할 포멧(JPG/GIF/PNG) 
	$quality = 9; // JPG포멧의 이미지품질 (높을수록 품질좋음/용량커짐) 


	$tempcolor = explode(",", $FontColor);
	
	if($tempcolor[2] == "0") $tempcolor[2] = 1;
	else if($tempcolor[2] == "255") $tempcolor[2] = 254;
	else $tempcolor[2] = $tempcolor[2]+1;
	
	$BGColor = $tempcolor[0].",".($tempcolor[1] ).",".$tempcolor[2];

	$layercolor = "250,250,250";
	
	
	$String = $head_str; // 문자열 변환하지 않으면 영문만 가능...

	// 중개업소명 왼쪽 시작좌표 
	


	$TextPosY = 140;
	$FontSize = $_INC['font'][$font_code]['크기1']*3 + 40 ; // 글씨폰트 크기  - 중개업소명

	$head_str_size = mb_strlen($head_str, "utf-8");
	$area_cnt  = 100;
	$TextPosX = (5-($head_str_size))*($area_cnt/2) + ($FontSize *0.3);

	$image = imagecreatetruecolor($Width, $Height); // 텍스트 박스 메모리에 생성
	 
	$bgcolor = explode(",", $BGColor); 
	$BgColor = ImageColorAllocate($image, $bgcolor[0], $bgcolor[1], $bgcolor[2]); // 텍스트 박스 BGcolor 설정 
	
	$fontcolor = explode(",", $FontColor); 
	$TextColor = ImageColorAllocate($image, $fontcolor[0], $fontcolor[1], $fontcolor[2]); // 텍스트 컬러 설정 


	imagefilledrectangle($image, 0, 0, $Width+2, $Height+2, $BgColor); // 각 설정에 따른 사각형 텍스트 박스 생성 
	imagecolortransparent($image,$BgColor);//배경색 투명으로 바꿈

	
	//중개업소명1
	ImageTTFText($image, $FontSize, 0, $TextPosX, $TextPosY, -$TextColor, $FontPath, $String); // 생성된 텍스트 박스에 설정좌표에 글씨쓰기 
	

	
	///// 설정 포멧에 맞게 이미지 뿌려주기 ///// 
	if($format=="JPG"){ 
	  //  header("Content-Type:image/jpeg"); 
		imageJpeg($image, $save_dir.$save_img, $quality);
	} else if($format=="PNG"){ 	   
		 
		imagePNG($image,$save_dir.$save_img,9,PNG_ALL_FILTERS );
	} else if($format=="GIF"){ 
	  
	   imageGIF($image,$save_dir.$save_img);
	} 
	imagedestroy($image); // 메모리에 올려져 있는 이미지 지우기 
	

	if(file_exists($save_jpgfile)) @unlink($save_jpgfile);
	copy($noimg_ori, $save_jpgfile);
	
	addLogo($save_jpgfile, $save_dir.$save_img);
	//unlink($save_dir.$save_img);
	//echo "save_jpg = $save_jpgfile";
	//echo "file = ".$save_dir.$save_img;

	

}


function utf8_length($str) {
  $len = strlen($str);
  for ($i = $length = 0; $i < $len; $length++) {
   $high = ord($str[$i]);
   if ($high < 0x80)//0<= code <128 범위의 문자(ASCII 문자)는 인덱스 1칸이동
    $i += 1;
   else if ($high < 0xE0)//128 <= code < 224 범위의 문자(확장 ASCII 문자)는 인덱스 2칸이동
    $i += 2;
   else if ($high < 0xF0)//224 <= code < 240 범위의 문자(유니코드 확장문자)는 인덱스 3칸이동 
    $i += 3;
   else//그외 4칸이동 (미래에 나올문자)
    $i += 4;
  }
  return $length;
}
?>
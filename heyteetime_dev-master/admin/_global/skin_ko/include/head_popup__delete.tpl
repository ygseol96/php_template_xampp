<!DOCTYPE HTML>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<title>::가인지캠퍼스 - Administrator</title>
	
	<link href="../css/SYdesignStyle.css" rel="stylesheet" type="text/css">
	<link href="../css/SYdesignLogoStyle.css" rel="stylesheet" type="text/css">
	<link href="../css/SYdesignMemberStyle.css" rel="stylesheet" type="text/css">
	<link href="../css/SYdesignPopupStyle.css" rel="stylesheet" type="text/css">
	
	<link rel="shortcut icon" href="/_global/img/favicons.ico">
	{INC.header_script}

	<script type="text/javascript">
	
		function gnbselect(arg,arg2) {
			//alert(arg);
			$('.TitleArea ul li h3').removeClass('SYTopMenuOn');
			$('#TopGNB'+arg).addClass('SYTopMenuOn');
			$('.Menu').hide();
			$('#subgnb'+arg).show();

		}

		$(function() {
			gnbselect('{menu.gnb}','{menu.snb}');
		});
	
	</script>
 
</head>
<body style="overflow:hidden"> 
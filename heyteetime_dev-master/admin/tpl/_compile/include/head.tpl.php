<?php /* Template_ 2.2.8 2024/05/10 15:15:27 C:\xampp\heytee_dev\admin\_global\include\head.tpl 000001120 */ ?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link href="/_global/dist/images/heyteetime/logo.svg" rel="shortcut icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>heyteetime</title>
	<link rel="stylesheet" href="/_global/dist/css/app.css?v=<?=time()?>" />
	<link rel="stylesheet" href="/_global/dist/css/swiper-bundle.min.css?v=<?=time()?>" />
	<link rel="stylesheet" href="/_global/dist/css/custom.css?v=<?=time()?>" />

	<!-- https://www.daterangepicker.com //-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css?v=<?=time()?>" />
</head>
<body>
<?php $this->print_("mobile_menu",$TPL_SCP,1);?>

<!-- 모바일 메뉴 //-->
<div class="flex mt-[4.7rem] md:mt-0">
	<!-- 사이드메뉴 -->
<?php $this->print_("side_menu",$TPL_SCP,1);?>

	<!-- 컨텐츠 시작 -->
	<div class="content">
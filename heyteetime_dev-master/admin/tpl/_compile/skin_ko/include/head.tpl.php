<?php /* Template_ 2.2.8 2024/06/19 15:21:22 C:\xampp\heyteetime_dev\admin\_global\skin_ko\include\head.tpl 000001348 */ ?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="<?php echo $_SESSION['CSRF_TOKEN']?>">

	<link href="/_global/<?php echo $_SESSION['adm_skin']?>/dist/images/heyteetime/logo.svg" rel="shortcut icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>heyteetime</title>
	<link rel="stylesheet" href="/_global/<?php echo $_SESSION['adm_skin']?>/dist/css/app.css" />
	<link rel="stylesheet" href="/_global/<?php echo $_SESSION['adm_skin']?>/dist/css/swiper-bundle.min.css" />
	<link rel="stylesheet" href="/_global/<?php echo $_SESSION['adm_skin']?>/dist/css/custom.css" />

	<!-- https://www.daterangepicker.com //-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body>
<?php $this->print_("mobile_menu",$TPL_SCP,1);?>

<!-- 모바일 메뉴 //-->
<div class="flex mt-[4.7rem] md:mt-0">
	<!-- 사이드메뉴 -->
<?php $this->print_("side_menu",$TPL_SCP,1);?>

	<!-- 컨텐츠 시작 -->
	<div class="content">
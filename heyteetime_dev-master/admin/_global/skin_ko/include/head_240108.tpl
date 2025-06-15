<!DOCTYPE HTML>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<title>::AGL - Administrator</title>
	
	<link href="/_global/css/SYdesignStyle.css?{=date('Ymd')}" rel="stylesheet" type="text/css">
	<link href="/_global/css/SYdesignPopupStyle.css?{=date('Ymd')}" rel="stylesheet" type="text/css">
	<!--<link href="../css/SYdesignLogoStyle.css" rel="stylesheet" type="text/css">
	<link href="../css/SYdesignMemberStyle.css" rel="stylesheet" type="text/css">
	
	-->
   	
	<!--<link rel="shortcut icon" href="/_global/skin_ko/img/favicons.ico">-->
	{INC.header_script}
	<script type="text/javascript">
	$(function() {
		var title = $('title').html();

		if($('#SYMenuTitle').html() > '' ) {
			title = $('#SYMenuTitle').html() + title;
		}

		if(!opener) {
			$('#SYLeftArea').show();
			$('#RightUser').show();

			$('title').html(title);
			$('.SYLogout01').show();
			$('.SYLogout02').hide();
		}
		else {
			$('title').html('[팝업] '+title);
			$('.SYLogout01').hide();
			$('.SYLogout02').show();
		}
	});

	function goMain() {
		if(!opener) {
			location.href='/';
		}
		
	}

	function gomenu(url) {
		location.href=url;
	}
	</script>

	
 
</head>
<body> 
<div id="SYTopGNB">
	<div class="GNBHeader">
		
		
		<ul>
			<li id="AdminLogo" class="AHLogo"><a href="javascript:goMain()"><img src="../img/agl_logo.png" style="width: 100px; height:30px"></a></li>
		</ul>
		<ul class="GNBTopMenu" >
			{@ gnb}
			<li > {.mg_title} {? .size_ -1 != .index_ }<span class="bar">|</span>{/}</li>
			{/}
			<!--
			<li class="on">회원관리 <span class="bar">|</span></li>
			<li >회원관리</li>
			-->
		</ul>
		<ul>
			<li class="LoginArea" style="width:380px; ">
				
				<span class="name">{_SESSION.admin_name} 님 ({_SESSION.admin_level_txt})</span>
				<input type="button" class="SYLogout01" value="" title="로그아웃" onclick="logout()">
				<input type="button" class="SYLogout02" value="팝업닫기" title="" onclick="window.close()">
							
				
			</li>
		</ul>
	</div>
</div>

<div id="SY">		
    
    <ul class="acc-menu" id="SYLeftArea" style="display:none">
        <li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>메인</a></div>
            <ul class="sub">
                <li onclick='gomenu("/")'>처음으로</li>
                <li onclick='gomenu("/main/clsadd_stat.html")'>시설추가요청 현황</li>
                <li onclick='gomenu("/main/clsjehyu_stat.html")'>시설제휴문의 현황</li>
                <li onclick='gomenu("/main/cls2jehyu_stat.html")'>사업장제휴문의 현황</li>
                <li onclick='gomenu("/main/dashboard.html")'>대시보드</li>
                <!--<li>전체현황</li>
                <li>아이코젠현황</li>
                <li>더코젠현황</li>-->
                <li onclick='gomenu("/main/popup_list.html?s_gubun=I")'>팝업관리</li>
            </ul>
        </li>
    
        <li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>회원관리</a></div>
            <ul class="sub">
                <li onclick='gomenu("/member/member_list.html")'>전체회원</li>
                <li onclick='gomenu("/member/member_delete_history.html")'>회원삭제이력</li>
                <li onclick='gomenu("/member/bank_change.html")'>계좌변경신청</li>
                <li onclick='gomenu("/member/out_reserve.html")'>탈퇴예약</li>
                <li onclick='gomenu("/member/grp_change_list.html")'>그룹변경예약</li>
                <li onclick='gomenu("/member/workconfirm.html")'>재직확인대상자</li>
                <li onclick='gomenu("/member/memo_reg.html")'>임의메모일괄등록</li>
                <li onclick='gomenu("/member/ml_list.html")'>마일리지 지급내역</li>
                <li onclick='gomenu("/member/recom_list.html")'>친구추천 리스트</li>
				<li onclick='gomenu("/member/memo_list.html")'>상담이력</li>
				<li onclick='gomenu("/member/member_switch.html")'>임직원 권한양도 리스트</li>
				<li onclick='gomenu("/member/member_stop.html")'>이용정지신청 </li>
            </ul>
        </li>
        <li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>이용신청</a> </div>
            <ul class="sub">
                <li onclick='gomenu("/useapply/apply_list.html")'>전체내역</li>
                
				{_SESSION.apply_menu}
				<li onclick='gomenu("/useapply/apply_point_list.html")'>포인트적용대상</li>
                
            </ul>
        </li>
        <li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>사업장관리</a></div>
			<ul class="sub">
                <li onclick='gomenu("/biz/biz_list.html")'>사업장현황</li>
                <li onclick='gomenu("/biz/comp_stat_ranker.html")'>사업장별 실적상위</li>
                <li onclick='gomenu("/biz/comp_stat_used.html")'>사업장별 이용현황</li>
                <li onclick='gomenu("/biz/comp_join_optlist.html")'>사업장 가입옵션</li>
                
                <li onclick='gomenu("/biz/main_cls2_list.html")'>메인노출사업장(회원가입)</li>
				
               
            </ul>
        </li>
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>시설관리</a></div>
			<ul class="sub">
                <li onclick='gomenu("/facil/facil_list.html?s_onoff=N")'>시설현황</li>
                <li onclick='gomenu("/facil/facil_stat_ranker.html")'>시설별 실적상위</li>
                <li onclick='gomenu("/facil/facil_stat_used.html")'>시설별 이용현황</li>
                <li onclick='gomenu("/facil/cls_fav.html")'>관심센터 목록</li>
                <li onclick='gomenu("/facil/facil_pre_list.html")'>선급금센터 목록</li>
                <li onclick='gomenu("/facil/cls_ad_list.html")'>광고신청 시설목록</li>
                <li onclick='gomenu("/facil/cls_grp_list.html")'>그룹관리</li>
                <li onclick='gomenu("/facil/grp_batch_list.html")'>그룹자동설정</li>
                <li onclick='gomenu("/facil/cls_batch_list.html")'>시설자동설정</li>
                <li onclick='gomenu("/facil/brd_notice_list.html")'>시설 공지사항</li>
                <li onclick='gomenu("/facil/brd_free_list.html")'>시설 게시판</li>
                <li onclick='gomenu("/facil/cls_sugi.html")'>수기입력 및 이용실적 삭제</li>
                <li onclick='gomenu("/facil/cls_user_history.html")'>회원별 이용이력</li>
                <li onclick='gomenu("/facil/cls_sugi_history.html")'>수기입력리스트</li>
                <li onclick='gomenu("/facil/cls_used_history.html")'>시설별 이용실적</li>
                <li onclick='gomenu("/facil/cls_used_delhistory.html")'>시설별 이용실적 삭제이력</li>
				<li onclick='gomenu("/facil/area_list.html")'>지역관리</li>
                
            </ul>
        </li>
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>제휴할인점관리</a></div>
			<ul class="sub">
                <li onclick='gomenu("/jehyu/jehyu_list.html")'>제휴점관리</li>
               
                
            </ul>
        </li>
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>정산/CMS관리</a></div>
			<ul class="sub">
                <li onclick='gomenu("/jungsan/af_jungsan.html")'>임직원/배우자 정산</li>
                <li onclick='gomenu("/jungsan/cms_changed.html")'>CMS변동자료</li>
                <li onclick='gomenu("/jungsan/card_paylist.html")'>CARD 결제예정자</li>
                <li onclick='gomenu("/jungsan/point_paylist.html")'>포인트 결제예정자</li>
                <li onclick='gomenu("/jungsan/point_payresult.html")'>포인트 결제내역</li>
                <li onclick='gomenu("/jungsan/point_jungsan.html")'>포인트정산</li>
				<li onclick='gomenu("/jungsan/bene_payresult.html")'>베네피아 결제내역</li>
                <li onclick='gomenu("/jungsan/bene_jungsan.html")'>베네피아정산</li>
                <li onclick='gomenu("/jungsan/cms_phone.html")'>CMS휴대폰적용</li>
                <li onclick='gomenu("/jungsan/refund_reqlist.html")'>환불요청명단</li>
                <!--<li onclick='gomenu("/jungsan/refund_list.html")'>환불리스트</li>-->
                <li onclick='gomenu("/jungsan/chk_monthprice.html")'>회비체크(정/그룹별)</li>
                <li onclick='gomenu("/jungsan/chk_joinprice.html")'>이용신청비체크(일반)</li>
                <li onclick='gomenu("/jungsan/chk_joinprice_card.html")'>이용신청비체크(카드)</li>
                <li onclick='gomenu("/jungsan/chk_joinprice_point.html")'>이용신청비체크(포인트)</li>
                
                <li onclick='gomenu("/jungsan/v_sms_reg.html")'>가상계좌문자발송등록</li>
                <li onclick='gomenu("/jungsan/cms_pay_reg.html")'>CMS결제결과연동</li>
				<li onclick='gomenu("/jungsan/admin_pay_reg.html")'>직접입금내역등록</li>
				<li onclick='gomenu("/jungsan/later_pay_reg.html")'>후불제출금결과등록</li>
                <li onclick='gomenu("/jungsan/sch_ars.html")'>동의자료검색</li>

				<li onclick='gomenu("/jungsan/pre_jungsan.html")'>다음달 예상정산</li>
				<li onclick='gomenu("/jungsan/cls_daily.html")'>시설 일별정산</li>
				<li onclick='gomenu("/jungsan/apply_monthly.html")'>일별 수입지출현황</li>
				
            </ul>
        </li>
		
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>이력조회 발송</a> </div>
            <ul class="sub">
                <li onclick='gomenu("/send/sms_history.html")'>문자발송이력</li>
                <li onclick='gomenu("/send/send_sms.html")'>SMS템플릿발송</li>
                <li onclick='gomenu("/send/email_reserve.html")'>이메일 예약발송</li>
				
            </ul>
        </li>
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>관리</a> </div>
            <ul class="sub">
                <li onclick='gomenu("/manage/main.html")'>주요관리설정</li>
                <li onclick='gomenu("/manage/set_day.html")'>일자설정</li>
                <li onclick='gomenu("/manage/set_holiday.html")'>공휴일설정</li>
                <li onclick='gomenu("/manage/chk_card.html")'>삼성카드중복테스트</li>
                <li onclick='gomenu("/manage/chk_point.html")'>포인트결제 중복테스트</li>

				<li onclick='gomenu("/manage/manager_list.html")'>관리자관리</li>
                <li onclick='gomenu("/manage/cls_banner.html")'>메인 추천시설관리</li>
                <li onclick='gomenu("/manage/mv_banner.html")'>메인 비주얼관리</li>
                <li onclick='gomenu("/manage/footer_banner.html")'>메인 하단배너관리</li>
                <li onclick='gomenu("/manage/cgv_cpn_list.html")'>CGV 쿠폰관리</li>
                <li onclick='gomenu("/manage/cgvpx_cpn_list.html")'>CGV-PX 쿠폰관리</li>
				<li onclick='gomenu("/manage/push_list.html")'>푸시알림관리</li>
				
                
            </ul>
        </li>
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>코인관리</a> </div>
            <ul class="sub">
                <li onclick='gomenu("/coin/coin_history.html")'>코인내역</li>
                <li onclick='gomenu("/coin/coin_stat.html")'>코인통계</li>
                <li onclick='gomenu("/coin/coin_cls.html")'>코인시설이용현황</li>
                <li onclick='gomenu("/coin/coin_pay.html")'>코인결제내역</li>
                <li onclick='gomenu("/coin/coin_jungsan.html")'>코인 정산내역</li>
                <li onclick='gomenu("/coin/coin_prd.html")'>코인 상품관리</li>
                <li onclick='gomenu("/coin/coin_gift.html")'>상품권 관리</li>
               
            </ul>
        </li>
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>후불제관리</a> </div>
            <ul class="sub">
                <li onclick='gomenu("/paylater/pl_member.html")'>후불제 결제관리</li>
                <li onclick='gomenu("/paylater/golf_member.html")'>회원별 후불제 이용내역</li>
                <li onclick='gomenu("/paylater/cls_golf_member.html")'>시설별 후불제 이용내역</li>
            </ul>
        </li>
		
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>코젠BIZ</a> </div>
            <ul class="sub">
                <li onclick='gomenu("/kobiz/kobiz_list.html")'>BIZ 사업장관리</li>
               
            </ul>
        </li>
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>라이프</a> </div>
            <ul class="sub">
                <li onclick='gomenu("/life/galaxia_list.html")'>GALAXIA 정산</li>
                <li onclick='gomenu("/life/pays_list.html")'>PAYS 정산</li>
                <li onclick='gomenu("/life/wincube_list.html")'>WINCUBE 정산</li>
                <li onclick='gomenu("/life/lcpn_list.html")'>쿠폰이력조회</li>
                <li onclick='gomenu("/life/prd_list.html")'>라이프 상품관리</li>
                <li onclick='gomenu("/life/lcpn_reg.html")'>라이프 수동발급</li>
                <li onclick='gomenu("/life/cgv_history.html")'>CGV 이력조회</li>
                <li onclick='gomenu("/life/cgvpx_history.html")'>CGV매점 발권이력</li>
                <li onclick='gomenu("/life/cpnsend_list.html")'>라이프 쿠폰 일괄발송내역</li>
                
                
            </ul>
        </li>
		<li data-extension="close">
            <div class="main-title"><span class="folder"> </span> <a>게시판관리</a> </div>
            <ul class="sub">
                <li onclick='gomenu("/board/board_list.html?s_brd=notice")'>공지사항</li>
                <li onclick='gomenu("/board/board_list.html?s_brd=counsel")'>1:1문의</li>
                <li onclick='gomenu("/board/board_list.html?s_brd=faq")'>자주하는 질문</li>
                <li onclick='gomenu("/board/ev_list.html?s_gubun=I")'>일반이벤트</li>
                <li onclick='gomenu("/board/evc_list.html?s_gubun=I")'>챌린지이벤트</li>
				<!-- <li onclick='gomenu("/board/board_list.html?s_brd=faq")'>문구/이미지 관리</li>-->
                
            </ul>
        </li>
    </ul>
    
    <script>
        $(function () {
			// 인스턴스 생성
			var accordion = new AccordionMenu('.acc-menu');
			accordion.selectMenu({gnb}, {snb}, true);

			// 애니메이션 타입으로 0번째 메뉴 열기
			// accordion.openSubMenuAt(0, true);

			// 즉시 2번째 메뉴 닫기
			// accordion.closeSubMenuAt(2, false);

			accordion.$accordionMenu.on('open', function (e) {
				console.log('open', e.$target.find('.main-title a').text());
			});

			accordion.$accordionMenu.on('close', function (e) {
				console.log('close', e.$target.find('.main-title a').text());
			});

			accordion.$accordionMenu.on('selected', function (e) {
				var oldText = '없음';

				if(e.$oldItem) {
					oldText = e.$oldItem.text();
				}
				console.log('select old = ', oldText + ', new = ' + e.$newItem.text()  );
			});

		});



    </script>
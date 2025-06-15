{#head}

<script type="text/javascript">
	$(function() {
		$('.lmenu_{dmenu}').addClass("on");
		

		//등록 리스너
		$(window).on("keydown", function(e) {
			if(e.ctrlKey && e.keyCode == 45) {
				adm_member_write();
			}
		});
		
	});

	function get_prev_month() {
		var s_sdate = $('#datepicker1').val();
		$.post('/inc/ajax_common.php', { mode: 'grp_prev_month', sdate:s_sdate  },
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
					var sdate = decodeURIComponent(obj.msg);
					var edate = decodeURIComponent(obj.opt_msg);
					
					$('#datepicker1').val(sdate);
					$('#datepicker2').val(edate);
					sch_list('schForm');

				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);
	}

	function get_next_month() {
		var s_sdate = $('#datepicker1').val();
		$.post('/inc/ajax_common.php', { mode: 'grp_next_month', sdate:s_sdate  },
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
					var sdate = decodeURIComponent(obj.msg);
					var edate = decodeURIComponent(obj.opt_msg);
					
					$('#datepicker1').val(sdate);
					$('#datepicker2').val(edate);
					sch_list('schForm');

				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);
	}

	function adm_member_write(seq) {
		var url = 'adm_write.html';
		if(seq) url += '?seq='+seq;
		window.open(url);
	}

	function adm_member_del(seq) {
		var ans = confirm('해당 사용자를 삭제하시겠습니까? 삭제시 복구할 수 없습니다.');
		if(!ans) return;

		$.post('ajax_sys.php', { mode: 'admin_member_delete', seq:seq  },
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
					document.location.reload();
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);


	}

	function set_confirm(seq) {
		//console.log("seq="+seq);

		//console.log($('#confirm_yn_'+seq).is(':checked'));
		if($('#confirm_yn_'+seq).is(':checked') == true) {
			var confirm_yn ='Y';
		}
		else {
			var confirm_yn ='N';
		}

		$.post('ajax_sys.php', { mode: 'admin_member_confirm', seq:seq , confirm_yn:confirm_yn },
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
					//document.location.reload();
					if(  confirm_yn == 'Y' ) {

						toast('관리자승인','승인되었습니다.', 'success');

						/*
						$.toast({
							heading: '관리자승인',
							text: '처리되었습니다.',
							position: 'mid-center',
							stack: false,
							icon: 'success'
						})
						*/
					}
					else {
						
						toast('관리자승인 해제','해제되었습니다.', 'error');
						
					}
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);
	}
	


</script>
<style type="text/css">
	.listTitle { font-size:12px; font-weight:bold; padding:15px 0 0px 0 }
</style>

<form name="schForm" id="schForm" >
	<input type="hidden" name="mode" id="mode" >

	{PageStr}	
	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">사용자</li>
			   <li id="SYMenuNavi" class="Navi">시스템관리 > 권한관리 > 사용자 리스트</li>
			</ul>
	   </div>


	    <div class="SYSearchBox01" >
			<div class="TitleBar" >
				<ul>
					<li class="Left">
						<span class="Title">검색 전체</span> : <span id="intTotalCountID" class="Number">{=number_format(TotalCnt)}</span>건
						(<span id="pageID" class="Number">{=number_format(mwPaging->GetCurPage())}</span><span class="bar">/</span><span id="intTotalPageID" class="Number">{=number_format(mwPaging->GetTotalPage())}</span> page)


					</li>
					<li class="Right" style='width:550px'>
						
					</li>
					
				</ul>
			</div>
			
			<div style="position:relative;padding:10px; border:1px solid #ddd;"  >
				<ul >
					<li >	
					
						

						
						<!--
						날짜
						<input type="button" class="SYButtonType04" value="<<" onclick="get_prev_month()" title="이전달">
						<input type="text" name="s_sdate" class="SYInputStyle01 datepicker" style="width:80px;" value="{_REQUEST.s_sdate}" id="s_sdate" placeholder="시작일시" autocomplete="off">
						<span class="bar">~</span>
						<input type="text" name="s_edate" class="SYInputStyle01 monthpicker" style="width:80px;" value="{_REQUEST.s_edate}"  id="s_edate" placeholder="종료일시" autocomplete="off">
						<input type="button" class="SYButtonType04" value=">>" onclick="get_next_month()" title="다음달">
						
						<span class="bar">|</span>
						-->

						<select name='s_confirm_yn' id='s_confirm_yn' class="SYSelectBox01" >
							<option value=''>승인여부</option>
							<option value='Y' {? _REQUEST.s_confirm_yn == 'Y'} selected{/}>승인</option>
							<option value='N' {? _REQUEST.s_confirm_yn == 'N'} selected{/}>대기</option>
							
						</select>
						<span class="bar">|</span>

						<select name='s_work_yn' id='s_work_yn' class="SYSelectBox01" >
							<option value=''>재직상태</option>
							<option value='Y' {? _REQUEST.s_work_yn == 'Y'} selected{/}>재직중</option>
							<option value='N' {? _REQUEST.s_work_yn == 'N'} selected{/}>퇴사</option>
							<option value='W' {? _REQUEST.s_work_yn == 'W'} selected{/}>휴직중</option>
						</select>
						<span class="bar">|</span>

						<select name='s_part' id='s_part' class="SYSelectBox01" >
							<option value=''>부서</option>
							{=selectOption(part, _REQUEST.s_part, 'db')}
							
						</select>
						<span class="bar">|</span>

						<select name='s_jk' id='s_jk' class="SYSelectBox01" >
							<option value=''>직급</option>
							{=selectOption(jk, _REQUEST.s_jk, 'db')}
							
						</select>
						<span class="bar">|</span>

						<select name="s_keyselect" class="SYSelectBox01">
							<option value="adm_name" {? _REQUEST.s_keyselect == 'adm_name'} selected{/}>사용자명</option>
							<option value="adm_id" {? _REQUEST.s_keyselect == 'adm_id'} selected{/}>사용자ID</option>
							
							
					    </select>
					    <input type="text" name="s_keyfield" class="SYInputStyle02" style="width:150px;" value="{_REQUEST.s_keyfield}" >
						<span class="bar">|</span>

					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
						<span class="bar">|</span>

					    <input type="button" class="SYButtonType04" value="초기화" onclick="location.href='adm_list.html'">

						
					</li>
					  
				</ul>
			</div>
		</div>
				
		<div class="SYTableTitleBar">
			<ul>
				<li class="Left" style="width:600px">
					<input type="button" class="SYButtonType03" value="등록" onclick="adm_member_write()" >
					<!--
					<span class="bar">|</span>
					<input type="button" class="SYButtonExcel03" title="엑셀다운로드" onclick="excel_down('memo_list')">
					-->
					
				</li>
				<li class="Right">
					
					<select id="s_orderby" name="s_orderby" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="1" {? _REQUEST.s_orderby == '1'} selected{/}>등록 최신순</option>
						<option value="2" {? _REQUEST.s_orderby == '2'} selected{/}>등록 오래전순</option>
						<option value="3" {? _REQUEST.s_orderby == '3'} selected{/}>이름 오름차순</option>
						<option value="4" {? _REQUEST.s_orderby == '4'} selected{/}>이름 내림차순</option>
					</select>
					<select id="s_viewCount" name="s_viewCount" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="10" {? _REQUEST.s_viewCount == '10'} selected{/}>10개</option>
						<option value="20" {? _REQUEST.s_viewCount == '20'} selected{/}>20개</option>
						<option value="30" {? _REQUEST.s_viewCount == '30'} selected{/}>30개</option>
					</select>
				</li>
			</ul>
		</div>
		<p class="Tip" style="margin:5px;"> CTRL + Insert 시 등록창이 열립니다. </p>
			  
</form>
<form name="listForm" id="listForm" >
		
	{PageStr}
				
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
		<table class="SYManagerTable01">
			<tr class="Title">
				<td style="width:45px;">No.</td>
				<td style="width:175px;">아이디</td>
				<td style="width:60px;">사용자명</td>
				<td style="width:180px;">부서</td>
				<td style="width:60px;">재직상태</td>

				<td style="width:60px;">승인여부</td>
				<td style="width:70px;">직급</td>
				<td style="width:60px;">수정</td>
				<td style="width:60px;">삭제</td>
				<td > </td>
				
				
			</tr>
			<tbody>
			{? TotalCnt == 0 }
			<tr >						
			  <td colspan=10 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
			</tr>
			{:}
				{@ data}
				<tr >						
					<td  class="ce">{mwPaging->GetStartNo() - data.index_}</td>
					<td  class="ce">{.adm_id}</td>
					<td  class="ce">{.adm_name}</td>
					<td  class="ce">{.part_name}</td>
					<td  class="ce">{.work_txt}	</td>

					<td  class="ce">
						
						<div style="display:inline-block;position:relative; ">
							<label class="switch">
							  <input type="checkbox" name="confirm_yn_{.adm_seq}" id="confirm_yn_{.adm_seq}" value="Y" {? data.confirm_yn == 'Y'} checked{/} onclick="set_confirm({.adm_seq})">  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
					</td>
					<td  class="ce">{.jk_name}</td>
					<td  class="ce">
						<input type="button" class="SYButtonType03" value="수정" onclick="adm_member_write('{.adm_seq}')" >
						
					</td>
					<td  class="ce">
						<input type="button" class="SYButtonDelete01" onclick="adm_member_del('{.adm_seq}')" >
						
					</td>
					<td > </td>
				</tr>
				{/}
			{/}
			</tbody>
		</table>
	</div>
	{Paging}
	
	<div class="btnlistarea" >
		<div class="btnlistleft">
			&nbsp;
		</div>
		<div class="btnlistright">
			&nbsp;
		</div>
	</div>

	
					  
	

						
		  
</form>
</div>
{#bottom}

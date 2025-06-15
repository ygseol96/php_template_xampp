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

		$('.ui-widget input').on("keyup", function(e) {
			//console.log(e.keyCode);
			if(e.keyCode == 13) {
				//sch_list('schForm');
			}
		});
		
	});

	function get_prev_month() {
		var s_sdate = $('#s_sdate').val();
		$.post('/inc/ajax_common.php', { mode: 'grp_prev_month', sdate:s_sdate  },
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
					var sdate = decodeURIComponent(obj.msg);
					var edate = decodeURIComponent(obj.opt_msg);
					
					$('#s_sdate').val(sdate);
					$('#s_edate').val(edate);
					sch_list('schForm');

				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);
	}

	function get_next_month() {
		var s_sdate = $('#s_edate').val();
		$.post('/inc/ajax_common.php', { mode: 'grp_next_month', sdate:s_sdate  },
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
					var sdate = decodeURIComponent(obj.msg);
					var edate = decodeURIComponent(obj.opt_msg);
					
					$('#s_sdate').val(sdate);
					$('#s_edate').val(edate);
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
	


</script>
<style type="text/css">
	.listTitle { font-size:12px; font-weight:bold; padding:15px 0 0px 0 }
	.ui-widget input {width:280px;}
</style>

<form name="schForm" id="schForm" >
	<input type="hidden" name="mode" id="mode" >

	{PageStr}	
	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">시스템로그</li>
			   <li id="SYMenuNavi" class="Navi">시스템관리 > 이력 > 시스템로그 리스트</li>
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
						
						
						날짜
						<input type="text" name="s_sdate" id="s_sdate" class="SYInputStyle01 datepicker" style="width:80px;" value="{_REQUEST.s_sdate}" id="s_sdate" placeholder="시작일시" autocomplete="off">
						<span class="bar">~</span>
						<input type="text" name="s_edate" id="s_edate" class="SYInputStyle01 datepicker" style="width:80px;" value="{_REQUEST.s_edate}"  id="s_edate" placeholder="종료일시" autocomplete="off">
						
						<span class="bar">|</span>
						

						<div class="ui-widget" >
							<label>사용자</label>
							<select name='s_adm' id='s_adm' class="select-combobox" >
								<option value>Select one...</option>
								{=selectOption(admin_member, _REQUEST.s_adm, 'db')}
							</select>
						</div>
						<span class="bar">|</span>

						

						
					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
						

						
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
						
					</select>
					<select id="s_viewCount" name="s_viewCount" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="30" {? _REQUEST.s_viewCount == '30'} selected{/}>30개</option>
						<option value="100" {? _REQUEST.s_viewCount == '100'} selected{/}>100개</option>
						<option value="200" {? _REQUEST.s_viewCount == '200'} selected{/}>200개</option>
					</select>
				</li>
			</ul>
		</div>
		
			  
</form>
<form name="listForm" id="listForm" >
		
	{PageStr}
				
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
		<table class="SYManagerTable01">
			<tr class="Title">
				<td style="width:45px;">No.</td>
				<td style="width:325px;">네비게이션</td>
				<td>작업내용</td>
				<td style="width:250px;">사용자명</td>
				<td style="width:80px;">작업일시</td>
				
				
				
				
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
					<td  class="ce">{.nav}</td>
					<td  class="le">{.memo}</td>
					<td  class="ce">{.adm_name}</td>
					<td  class="ce">{.regdt}</td>
					
					
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

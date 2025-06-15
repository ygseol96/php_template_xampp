{#head}

<script type="text/javascript">
	$(function() {
		$('.lmenu_{dmenu}').addClass("on");
		

		//등록 리스너
		$(window).on("keydown", function(e) {
			if(e.ctrlKey && e.keyCode == 45) {
				code_state_write();
			}
		});

		
		
	});

	
	function code_state_write(seq) {
		var url = 'code_state_write.html';
		if(seq) url += '?seq='+seq;
		window.open(url);
	}

	function code_state_del(seq) {
		var ans = confirm('해당 국가코드를 삭제하시겠습니까? 삭제시 복구할 수 없습니다.');
		if(!ans) return;

		$.post('ajax_sys.php', { mode: 'code_state_delete', seq:seq  },
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
	.ui-widget input {width:50px;}	
	
</style>

<form name="schForm" id="schForm" >
	<input type="hidden" name="mode" id="mode" >

	{PageStr}	
	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">지역코드</li>
			   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 지역코드 리스트</li>
			</ul>
	   </div>


	    <div class="SYSearchBox01" >
			<div class="TitleBar" >
				<ul>
					<li class="Left">
						<span class="Title">검색 전체</span> : <span id="intTotalCountID" class="Number">{=number_format(TotalCnt,0)}</span>건
						(<span id="pageID" class="Number">{=number_format(mwPaging->GetCurPage())}</span><span class="bar">/</span><span id="intTotalPageID" class="Number">{=number_format(mwPaging->GetTotalPage())}</span> page)


					</li>
					<li class="Right" style='width:550px'>
						
					</li>
					
				</ul>
			</div>
			
			<div style="position:relative;padding:10px; border:1px solid #ddd;"  >
				<ul >
					<li >	
						지역명,국가명
					    <input type="text" name="s_keyfield" class="SYInputStyle02" style="width:150px;" value="{_REQUEST.s_keyfield}" >
						<span class="bar">|</span>

					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
						<span class="bar">|</span>

					    <input type="button" class="SYButtonType04" value="초기화" onclick="location.href='code_state.html'">

						
					</li>
					  
				</ul>
			</div>
		</div>
				
		<div class="SYTableTitleBar">
			<ul>
				<li class="Left" style="width:600px">
					<input type="button" class="SYButtonType03" value="등록" onclick="code_state_write()" >
					
					<!--<span class="bar">|</span>
					<input type="button" class="SYButtonExcel03" title="엑셀다운로드" onclick="excel_down('code_state_list')">-->
					
					
				</li>
				<li class="Right">
					
					<select id="s_orderby" name="s_orderby" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="1" {? _REQUEST.s_orderby == '1'} selected{/}>등록 최신순</option>
						<option value="2" {? _REQUEST.s_orderby == '2'} selected{/}>등록 오래전순</option>
						<option value="3" {? _REQUEST.s_orderby == '3'} selected{/}>국가명 오름차순</option>
						<option value="4" {? _REQUEST.s_orderby == '4'} selected{/}>국가명 내림차순</option>
					</select>
					<select id="s_viewCount" name="s_viewCount" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="30" {? _REQUEST.s_viewCount == '30'} selected{/}>30개</option>
						<option value="100" {? _REQUEST.s_viewCount == '100'} selected{/}>100개</option>
						<option value="200" {? _REQUEST.s_viewCount == '200'} selected{/}>200개</option>
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
				<td style="width:75px;">지역코드</td>
				<td style="width:175px;">지역명</td>
				<td style="width:175px;">지역명(영어)</td>
				<td style="width:175px;">지역명(일본어)</td>
				<td style="width:65px;">지역구분</td>
				<td style="width:65px;">국가코드</td>

				<td style="width:175px;">국가명 </td>

				<td style="width:60px;">노출여부</td>
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
					<td  class="ce">{.state_cd}</td>
					<td  class="ce">{.state_nm_kr}</td>
					<td  class="ce">{.state_nm_en}</td>
					<td  class="ce">{.state_nm_jp}</td>
					<td  class="ce">{.state_gubun_txt}</td>

					<td  class="ce">{.nat_cd}</td>
					<td  class="ce">{.nat_name}</td>
					
					<td  class="ce">{.view_yn_txt}</td>
					<td  class="ce">
						<input type="button" class="SYButtonType03" value="수정" onclick="code_state_write('{.state_seq}')" >
						
					</td>
					<td  class="ce">
						<input type="button" class="SYButtonDelete01" onclick="code_state_del('{.state_seq}')" >
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

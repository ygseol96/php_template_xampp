{#head}

<script type="text/javascript">
	$(function() {
		$('.lmenu_{dmenu}').addClass("on");
		

		//등록 리스너
		$(window).on("keydown", function(e) {
			if(e.ctrlKey && e.keyCode == 45) {
				code_city_write();
			}
		});


		var schtags = [
			{schkey}
		];
		$( "#s_keyfield" ).autocomplete({
		  source: schtags
		});

		
		
	});

	
	function code_city_write(seq) {
		var url = 'code_city_write.html';
		if(seq) url += '?seq='+seq;
		window.open(url);
	}

	function code_city_del(seq) {
		var ans = confirm('해당 도시코드를 삭제하시겠습니까? 삭제시 복구할 수 없습니다.');
		if(!ans) return;

		$.post('ajax_sys.php', { mode: 'code_city_delete', seq:seq  },
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
			   <li id="SYMenuTitle" class="Title">도시코드</li>
			   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 도시코드 리스트</li>
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

						<select name='s_nat' id='s_nat' class="SYSelectBox01" >
								<option value>국가선택</option>
								{=selectOption(nation, _REQUEST.s_nat, 'db')}
							</select>
						<span class="bar">|</span>

						<label for="s_keyfield">도시코드, 도시명, 키워드 </label>
					    <input type="text" name="s_keyfield" id="s_keyfield" class="SYInputStyle02" style="width:150px;" value="{_REQUEST.s_keyfield}" >
						<span class="bar">|</span>

					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
						<span class="bar">|</span>

					    <input type="button" class="SYButtonType04" value="초기화" onclick="location.href='code_city_list.html'">

						
					</li>
					  
				</ul>
			</div>
		</div>
				
		<div class="SYTableTitleBar">
			<ul>
				<li class="Left" style="width:600px">
					<input type="button" class="SYButtonType03" value="등록" onclick="code_city_write()" >
					<!--
					<span class="bar">|</span>
					<input type="button" class="SYButtonExcel03" title="엑셀다운로드" onclick="excel_down('memo_list')">
					-->
					
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
				
				<td style="width:55px;">도시코드</td>
				<td style="width:155px;">도시명 (한글)</td>

				<td style="width:155px;">도시명 (영어)</td>
				<td style="width:155px;">도시명 (일본어)</td>
				<td style="width:155px;">국가명 (중국어)</td>
				<td style="width:55px;">국가코드</td>
				<td style="width:155px;">국가명 (한글)</td>
				<td style="width:315px;">검색키워드</td>
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
					
					<td  class="ce">{.city_code}</td>
					<td  class="ce">{.city_nm_kr}</td>

					<td  class="ce">{.city_nm_en}</td>
					<td  class="ce">{.city_nm_jp}</td>
					<td  class="ce">{.city_nm_cn}</td>
					<td  class="ce">{.nat_cd}</td>
					<td  class="ce">{.nat_name}</td>
					<td  class="ce">{=dbUnEscape(.city_nm_keyword)}</td>
					<td  class="ce">{.view_yn_txt}</td>
					<td  class="ce">
						<input type="button" class="SYButtonType03" value="수정" onclick="code_city_write('{.city_seq}')" >
						
					</td>
					<td  class="ce">
						<input type="button" class="SYButtonDelete01" onclick="code_city_del('{.city_seq}')" >
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

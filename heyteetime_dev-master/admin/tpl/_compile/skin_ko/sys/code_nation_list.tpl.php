<?php /* Template_ 2.2.8 2024/02/22 13:44:54 /home/agl/www/admin/_global/skin_ko/sys/code_nation_list.tpl 000006673 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>


<script type="text/javascript">
	$(function() {
		$('.lmenu_<?php echo $TPL_VAR["dmenu"]?>').addClass("on");
		

		//등록 리스너
		$(window).on("keydown", function(e) {
			if(e.ctrlKey && e.keyCode == 45) {
				code_nation_write();
			}
		});

		
		
	});

	
	function code_nation_write(seq) {
		var url = 'code_nation_write.html';
		if(seq) url += '?seq='+seq;
		window.open(url);
	}

	function code_nation_del(seq) {
		var ans = confirm('해당 국가코드를 삭제하시겠습니까? 삭제시 복구할 수 없습니다.');
		if(!ans) return;

		$.post('ajax_sys.php', { mode: 'code_nation_delete', seq:seq  },
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

	<?php echo $TPL_VAR["PageStr"]?>

	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">국가코드</li>
			   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 국가코드 리스트</li>
			</ul>
	   </div>


	    <div class="SYSearchBox01" >
			<div class="TitleBar" >
				<ul>
					<li class="Left">
						<span class="Title">검색 전체</span> : <span id="intTotalCountID" class="Number"><?php echo number_format($TPL_VAR["TotalCnt"])?></span>건
						(<span id="pageID" class="Number"><?php echo number_format($TPL_VAR["mwPaging"]->GetCurPage())?></span><span class="bar">/</span><span id="intTotalPageID" class="Number"><?php echo number_format($TPL_VAR["mwPaging"]->GetTotalPage())?></span> page)


					</li>
					<li class="Right" style='width:550px'>
						
					</li>
					
				</ul>
			</div>
			
			<div style="position:relative;padding:10px; border:1px solid #ddd;"  >
				<ul >
					<li >	
						국가코드,국가명
					    <input type="text" name="s_keyfield" class="SYInputStyle02" style="width:150px;" value="<?php echo $_REQUEST["s_keyfield"]?>" >
						<span class="bar">|</span>

					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
						<span class="bar">|</span>

					    <input type="button" class="SYButtonType04" value="초기화" onclick="location.href='code_nation_list.html'">

						
					</li>
					  
				</ul>
			</div>
		</div>
				
		<div class="SYTableTitleBar">
			<ul>
				<li class="Left" style="width:600px">
					<input type="button" class="SYButtonType03" value="등록" onclick="code_nation_write()" >
					<!--
					<span class="bar">|</span>
					<input type="button" class="SYButtonExcel03" title="엑셀다운로드" onclick="excel_down('code_nation_list')">
					-->
					
					
				</li>
				<li class="Right">
					
					<select id="s_orderby" name="s_orderby" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="1" <?php if($_REQUEST["s_orderby"]=='1'){?> selected<?php }?>>등록 최신순</option>
						<option value="2" <?php if($_REQUEST["s_orderby"]=='2'){?> selected<?php }?>>등록 오래전순</option>
						<option value="3" <?php if($_REQUEST["s_orderby"]=='3'){?> selected<?php }?>>국가명 오름차순</option>
						<option value="4" <?php if($_REQUEST["s_orderby"]=='4'){?> selected<?php }?>>국가명 내림차순</option>
					</select>
					<select id="s_viewCount" name="s_viewCount" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="30" <?php if($_REQUEST["s_viewCount"]=='30'){?> selected<?php }?>>30개</option>
						<option value="100" <?php if($_REQUEST["s_viewCount"]=='100'){?> selected<?php }?>>100개</option>
						<option value="200" <?php if($_REQUEST["s_viewCount"]=='200'){?> selected<?php }?>>200개</option>
					</select>
				</li>
			</ul>
		</div>
		<p class="Tip" style="margin:5px;"> CTRL + Insert 시 등록창이 열립니다. </p>
			  
</form>
<form name="listForm" id="listForm" >
		
	<?php echo $TPL_VAR["PageStr"]?>

				
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
		<table class="SYManagerTable01">
			<tr class="Title">
				<td style="width:45px;">No.</td>
				<td style="width:65px;">국가코드</td>
				<td style="width:175px;">국가명 (한글)</td>
				<td style="width:175px;">국가명 (영어)</td>
				<td style="width:175px;">국가명 (일본어)</td>
				<td style="width:175px;">국가명 (중국어)</td>
				<td style="width:100px;">대륙</td>
				<td style="width:60px;">통화코드</td>
				<td style="width:180px;">통화명</td>

				<td style="width:60px;">노출여부</td>
				<td style="width:60px;">수정</td>
				<td style="width:60px;">삭제</td>
				<td > </td>
				
				
			</tr>
			<tbody>
<?php if($TPL_VAR["TotalCnt"]== 0){?>
			<tr >						
			  <td colspan=10 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
			</tr>
<?php }else{?>
<?php if($TPL_data_1){$TPL_I1=-1;foreach($TPL_VAR["data"] as $TPL_V1){$TPL_I1++;?>
				<tr >						
					<td  class="ce"><?php echo $TPL_VAR["mwPaging"]->GetStartNo()-$TPL_I1?></td>
					<td  class="ce"><?php echo $TPL_V1["nat_cd"]?></td>
					<td  class="ce"><?php echo $TPL_V1["nat_nm_kr"]?></td>
					<td  class="ce"><?php echo $TPL_V1["nat_nm_en"]?></td>
					<td  class="ce"><?php echo $TPL_V1["nat_nm_jp"]?></td>
					<td  class="ce"><?php echo $TPL_V1["nat_nm_cn"]?></td>
					<td  class="ce"><?php echo $TPL_V1["cd_name"]?></td>
					<td  class="ce"><?php echo $TPL_V1["curr_cd"]?></td>
					<td  class="ce"><?php echo $TPL_V1["curr_cd_nm"]?>	</td>

					<td  class="ce"><?php echo $TPL_V1["view_yn_txt"]?></td>
					<td  class="ce">
						<input type="button" class="SYButtonType03" value="수정" onclick="code_nation_write('<?php echo $TPL_V1["nat_seq"]?>')" >
						
					</td>
					<td  class="ce">
						<input type="button" class="SYButtonDelete01" onclick="code_nation_del('<?php echo $TPL_V1["nat_seq"]?>')" >
					</td>
					<td > </td>
				</tr>
<?php }}?>
<?php }?>
			</tbody>
		</table>
	</div>
	<?php echo $TPL_VAR["Paging"]?>

	
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
<?php $this->print_("bottom",$TPL_SCP,1);?>
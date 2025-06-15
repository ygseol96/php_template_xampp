<?php /* Template_ 2.2.8 2024/02/16 08:59:08 /home/agl/www/admin/_global/skin_ko/account/grp_sale_reg.tpl 000009758 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>


<script type="text/javascript">
	$(function() {
		$('.lmenu_<?php echo $TPL_VAR["dmenu"]?>').addClass("on");
		
		var schtags = [
			<?php echo $TPL_VAR["schkey"]?>

		];
		$( "#s_keyfield" ).autocomplete({
		  source: schtags
		});


		var schfid = [
			<?php echo $TPL_VAR["fid"]?>

		];
		$( "#fid" ).autocomplete({
		  source: schfid
		});
		
	});

	
	

	function grp_sale_del(seq) {

		var ans = confirm('해당 데이터를 삭제하시겠습니까?');
		if(!ans) return;

		$.post('ajax_account.php', { mode: 'grp_sale_delete', seq:seq },
			function(json) { 
				var obj = $.parseJSON(json); 
				var msg = decodeURIComponent(obj.msg);
				
				if(obj.result == 'Y') {
					document.location.reload();
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);


	}

	function grp_sale_write(seq) {

		$.post('ajax_account.php', { mode: 'grp_sale_update_data', seq:seq },
			function(json) { 
				var obj = $.parseJSON(json); 
				var msg = decodeURIComponent(obj.msg);
				
				if(obj.result == 'Y') {
					form_grp_sale_update(seq, msg);
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);
		
	}
	function form_grp_sale_update(seq, msg) {

		var temp = msg.split('||');
		$('#mode').val('grp_sale_update');
		$('#seq').val(seq);
		$('#fid').val(temp[0]);
		$('#buy_gubun').val(temp[1]);
		$('#sdate').val(temp[3]);
		$('#edate').val(temp[4]);

		$("#use_yn").val(temp[2]).prop("selected", true);




		
	}


	function grp_sale_reg() {

		var fid = $('#fid').val();
		if(!fid) {
			alert('GC코드를 입력하세요');
			$('#fid').focus();
			return;
		}

		var sdate = $('#sdate').val();
		if(!sdate) {
			alert('시작일을 입력하세요');
			$('#sdate').focus();
			return;
		}

		var edate = $('#edate').val();
		if(!edate) {
			alert('종료일을 입력하세요');
			$('#edate').focus();
			return;
		}

		$('#regform').ajaxSubmit({
					
			dataType:  'json',
			url : 'ajax_account.php',
			type : 'post',
			success:  function (obj) {
				var msg = decodeURIComponent(obj.msg);
				var opt_msg = decodeURIComponent(obj.opt_msg);
				
				if(obj.result == "Y") {
					document.location.reload();
				}
				else {
					alert(msg);	
					//$('#btn-popreg').attr("disabled", false);
				}
			}
		});

	}

	

</script>
<style type="text/css">
	.listTitle { font-size:12px; font-weight:bold; padding:15px 0 0px 0 }
	.ui-widget input {width:50px;}	
	.trinput {border:none; text-align:center; width:80px;}
	.trinput:focus {border:none; }

	.SYManagerTable01 input[type="text"]  {width:80px}
	
</style>

<form name="schForm" id="schForm" >
	
	

	<?php echo $TPL_VAR["PageStr"]?>

	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">그룹상품 매출인식</li>
			   <li id="SYMenuNavi" class="Navi">회계관리 > 매출 > 그룹상품 매출인식 리스트</li>
			</ul>
	   </div>


	   <div class="SYSearchBox01" >
			<h1 class="main_h1">검색</h1>
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
					<li>	
						<label for="s_keyfield">GC 코드, GC명 </label>
					    <input type="text" name="s_keyfield" id="s_keyfield" class="SYInputStyle02" style="width:150px;" value="<?php echo $_REQUEST["s_keyfield"]?>" >
						
						<span class="bar">|</span>
					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
					</li>
					  
				</ul>
			</div>
		</div>
				
		
		
		
			  
</form>
<form name="regform" id="regform" >
	<input type="hidden" name="seq" id="seq" >
	<input type="hidden" name="mode" id="mode" value="grp_sale_insert" >
		<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
			<h1 class="main_h1">등록</h1>
			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:120px">
					<col style="width:280px">
					<col style="width:150px">
					<col style="width:300px">
					<col>
				</colgroup>
				
				<tr>
					<td class="Title" >GC 코드 *</td> 
					<td class="Content"  >
						<input type="text" name="fid" id="fid" class="SYInputStyle02" style="width:250px;" value=""  autocomplete="off">
					</td>
					<td class="Title" >구매처 </td> 
					<td class="Content" >
						<input type="text" name="buy_gubun" id="buy_gubun" class="SYInputStyle02"  value=""  autocomplete="off">		
					</td>
					
					<td></td>
				</tr>
				<tr>
					
					
					
					<td class="Title" >시작/종료일 </td> 
					<td class="Content"  >
						<input type="text" name="sdate" id="sdate" class="SYInputStyle01 datepicker"  value=""  autocomplete="off" style="width:80px"> ~
						<input type="text" name="edate" id="edate" class="SYInputStyle01 datepicker"  value=""  autocomplete="off" style="width:80px"> 

						
					</td>

					<td class="Title" >그룹매출인식 </td> 
					<td class="Content" >
						
						<select name='use_yn' id='use_yn' class="SYSelectBox01"  >
							<option value='Y' >Y</option>
							<option value='N' >N</option>
						</select>
						
					</td>
					<td></td>
				</tr>
			</table>
		</div>

		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" id="" class="SYButtonSubmit04" value="저장하기" onclick="grp_sale_reg()">
				
				
			</div>
			<div class="btnlistright">
				&nbsp;

			</div>
		</div>
</form>		

		<h1 class="main_h1" style="margin-top:30px">리스트</h1>
		<p class="Tip" style="margin-top:10px; margin-left:10px">
			리스트에 등록된 골프장은 설정한 기간동안 그룹상품 매출로 인식되며, 기간에 해당하지 않을 경우 단품상품 매출로 인식됩니다.

		</p>
		<div class="SYTableTitleBar">
			<ul>
				<li class="Left" style="width:600px">
					<!--<input type="button" class="SYButtonType03" value="등록" onclick="adm_member_write()" >
					
					<span class="bar">|</span>
					<input type="button" class="SYButtonExcel03" title="엑셀다운로드" onclick="excel_down('memo_list')">
					-->
					
				</li>
				<li class="Right">
					
					<select id="s_orderby" name="s_orderby" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="1" <?php if($_REQUEST["s_orderby"]=='1'){?> selected<?php }?>>등록 최신순</option>
						<option value="2" <?php if($_REQUEST["s_orderby"]=='2'){?> selected<?php }?>>등록 오래전순</option>
						
					</select>
					<select id="s_viewCount" name="s_viewCount" class="SYSelectBox01" onchange="sch_list('schForm');">
						<option value="30" <?php if($_REQUEST["s_viewCount"]=='30'){?> selected<?php }?>>30개</option>
						<option value="100" <?php if($_REQUEST["s_viewCount"]=='100'){?> selected<?php }?>>100개</option>
						<option value="200" <?php if($_REQUEST["s_viewCount"]=='200'){?> selected<?php }?>>200개</option>
					</select>
				</li>
			</ul>
		</div>


<form name="listForm" id="listForm" >
		
	<?php echo $TPL_VAR["PageStr"]?>

	
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
		<table class="SYManagerTable01">
			<tr class="Title">
				<td style="width:45px;">No.</td>
				<td style="width:77px;">GC 코드</td>
				<td style="width:155px;">GC</td>
				<td style="width:75px;">그룹매출인식</td>
				<td style="width:75px;">시작일</td>

				<td style="width:75px;">종료일</td>
				<td style="width:105px;">등록자</td>
				<td style="width:100px;">등록일</td>
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
					<td  class="ce"><?php echo $TPL_V1["fid"]?></td>
					<td  class="ce"><?php echo $TPL_V1["fname"]?></td>
					<td  class="ce"><?php echo $TPL_V1["use_yn"]?></td>
					<td  class="ce"><?php echo $TPL_V1["sdate"]?></td>
					
					<td  class="ce"><?php echo $TPL_V1["edate"]?></td>
					<td  class="ce"><?php echo $TPL_V1["adm_name"]?></td>
					<td  class="ce"><?php echo $TPL_V1["regdt"]?></td>
					<td  class="ce">
						<input type="button" class="SYButtonType03" value="수정" onclick="grp_sale_write('<?php echo $TPL_V1["gs_seq"]?>')" >
					</td>
					<td  class="ce">
						<input type="button" class="SYButtonDelete01" onclick="grp_sale_del('<?php echo $TPL_V1["gs_seq"]?>')" >
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
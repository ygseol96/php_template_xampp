<?php /* Template_ 2.2.8 2024/02/16 08:59:08 /home/agl/www/admin/_global/skin_ko/account/pass_fee.tpl 000006091 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>


<script type="text/javascript">
	$(function() {
		$('.lmenu_<?php echo $TPL_VAR["dmenu"]?>').addClass("on");
		

		
		
		
	});

	
	function view_gcfee_list(seq) {
		console.log('seq='+seq);
		$.post('ajax_account.php', { mode: 'view_gcfee_list', seq:seq  },
			function(json) { 
				var obj = $.parseJSON(json); 
				var msg = decodeURIComponent(obj.msg);
				if(obj.result == 'Y') {
					
					$('#view_fee').html(msg);
					$('.vform').show();

					$('#sseq').val(seq);
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);
	}

	function form_fee(seq)  {
		var orgseq = $('#sseq').val();

		$.post('ajax_account.php', { mode: 'form_fee', seq:seq , orgseq:orgseq },
			function(json) { 
				var obj = $.parseJSON(json); 
				var msg = decodeURIComponent(obj.msg);
				if(obj.result == 'Y') {

					$('#popCommon').css("width", "600px");
					$('#popCommon').html(msg);

					basic_script();
					viewLayer('on', 'popCommon');

					
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);

	}

	function gc_fee_save() {
		//var orgseq = $('#popseq').val();
		//var sseq = $('#popsubseq').val();
		$('#popForm').ajaxSubmit({
					
			dataType:  'json',
			url : 'ajax_account.php',
			type : 'post',
			success:  function (obj) {
				var msg = decodeURIComponent(obj.msg);
				var opt_msg = decodeURIComponent(obj.opt_msg);
				
				if(obj.result == "Y") {
					alert('저장되었습니다.');
					document.location.reload();
				}
				else {
					alert(msg);	
					//$('#btn-popreg').attr("disabled", false);
				}
			}
		});
		

	}

	function delete_fee(seq) {
		var ans = confirm('해당 데이터를 삭제하시겠습니까? 삭제시 복구할 수 없습니다.');
		if(!ans) return;

		$.post('ajax_account.php', { mode: 'fee_delete', seq:seq  },
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

	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">PASS 수수료 관리</li>
			   <li id="SYMenuNavi" class="Navi">회계관리 > 매출 > PASS 수수료</li>
			</ul>
	   </div>


	    <div class="SYSearchBox01" >
			<div class="TitleBar" >
				<ul>
					<li class="Left">
						<span class="Title">검색 전체</span> : <span id="intTotalCountID" class="Number"><?php echo number_format($TPL_data_1)?></span>건
						
					</li>
					<li class="Right" style='width:550px'>
						
					</li>
					
				</ul>
			</div>
			
			<div style="position:relative;padding:10px; border:1px solid #ddd;"  >
				<ul >
					<li >	
						등록구분
						<select id="s_src_gubun" name="s_src_gubun" class="SYSelectBox01" onchange="sch_list('schForm');">
							<option value="">선택</option>
							<option value="1" <?php if($_REQUEST["s_src_gubun"]=='1'){?> selected<?php }?>>OTA</option>
							<option value="2" <?php if($_REQUEST["s_src_gubun"]=='2'){?> selected<?php }?>>사용자</option>
							
						</select>
						<span class="bar">|</span>

						채널명
					    <input type="text" name="s_keyfield" id="s_keyfield" class="SYInputStyle02" style="width:150px;" value="<?php echo $_REQUEST["s_keyfield"]?>" >
						<span class="bar">|</span>

					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
						<span class="bar">|</span>

					    <input type="button" class="SYButtonType04" value="초기화" onclick="location.href='prd_setup.html'">

						
					</li>
					  
				</ul>
			</div>
		</div>
				
		
		
			  
</form>
<form name="listForm" id="listForm" >
		
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
		<table class="SYManagerTable01">
			<tr class="Title">
				<td style="width:45px;">No.</td>
				<td style="width:175px;">Field ID</td>
				<td style="width:175px;">골프장명</td>
				<td style="width:60px;">수수료</td>
				<td style="width:60px;">관리</td>
				

				
				<td > </td>
				
				
			</tr>
			<tbody>
			
<?php if($TPL_data_1){$TPL_I1=-1;foreach($TPL_VAR["data"] as $TPL_V1){$TPL_I1++;?>
				<tr >						
					<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
					<td  class="ce"><?php echo $TPL_V1["fid"]?></td>
					<td  class="ce"><?php echo $TPL_V1["fname"]?></td>
					<td  class="ce"><?php echo $TPL_V1["fee"]?></td>
					
					<td  class="ce">
						<input type="button" class="SYButtonType03" value="보기" onclick="view_gcfee_list('<?php echo $TPL_V1["gc_seq"]?>')" >
						
					</td>
					
					<td > </td>
				</tr>
<?php }}?>
			
			</tbody>
		</table>
	</div>
</form>

<form name="vForm" id="vForm" >
	<input type="hidden" name="mode" id="smode" value="">
	<input type="hidden" name="seq" id="sseq" value="">
	
	<div  class="SYManagerTable vform" style="margin-top:20px; display:none" >
		<h1 class="main_h1">수수료리스트 <input type="button" class="SYButtonType03" value="등록" onclick="form_fee()" ></h1>
		<table class="SYManagerTable01" style="margin-top:10px">
			<tr class="Title">
				<td style="width:45px;">No.</td>
				<td style="width:195px;">Field ID(골프장명)</td>
				<td style="width:100px;">시작일</td>
				<td style="width:100px;">종료일</td>
				<td style="width:60px;">수수료</td>
				<td style="width:60px;">수정</td>
				<td style="width:60px;">삭제</td>
				

				
				<td > </td>
				
				
			</tr>
			<tbody id="view_fee">
			
				
			
			</tbody>
		</table>
	</div>

</form>	
					  
	

						
		  

</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
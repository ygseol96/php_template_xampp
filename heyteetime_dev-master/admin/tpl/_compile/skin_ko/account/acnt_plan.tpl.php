<?php /* Template_ 2.2.8 2024/02/16 08:59:08 /home/agl/www/admin/_global/skin_ko/account/acnt_plan.tpl 000009139 */ 
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

		
		
	});

	
	function acnt_plan_write(seq) {

		
		$('.trclass_'+seq).attr("readonly",false);
		$('.trclass_'+seq).removeClass("trinput");
		$('.trclass_'+seq).css("border", "1px solid gray");


		var html = '<input type="button" class="SYButtonType03" value="저장" onclick="acnt_plan_update('+seq+')" >';
		html += ' <input type="button" class="SYButtonType03" value="취소" onclick="acnt_plan_cancel('+seq+')" >';
		
		$('#btn_area_'+seq).html(html);

		$('#trid_m1_'+seq).focus();
		
		
	}

	function acnt_plan_cancel(seq) {

		$('.trclass_'+seq).attr("readonly",true);
		$('.trclass_'+seq).addClass("trinput");
		$('.trclass_'+seq).css("border", "none");


		var html = '<input type="button" class="SYButtonType03" value="수정" onclick="acnt_plan_write('+seq+')" >';
		
		$('#btn_area_'+seq).html(html);
	}

	function acnt_plan_update(seq) {

		var m1 = $('#trid_m1_'+seq).val();
		var m2 = $('#trid_m2_'+seq).val();
		var m3 = $('#trid_m3_'+seq).val();
		var m4 = $('#trid_m4_'+seq).val();
		var m5 = $('#trid_m5_'+seq).val();
		var m6 = $('#trid_m6_'+seq).val();
		var m7 = $('#trid_m7_'+seq).val();
		var m8 = $('#trid_m8_'+seq).val();
		var m9 = $('#trid_m9_'+seq).val();
		var m10 = $('#trid_m10_'+seq).val();
		var m11 = $('#trid_m11_'+seq).val();
		var m12 = $('#trid_m12_'+seq).val();

		var post_data = m1+'|'+m2+'|'+m3+'|'+m4+'|'+m5+'|'+m6+'|'+m7+'|'+m8+'|'+m9+'|'+m10+'|'+m11+'|'+m12;


		$.post('ajax_account.php', { mode: 'acnt_plan_update', seq:seq , post_data: post_data },
			function(json) { 
				var obj = $.parseJSON(json); 
				
				if(obj.result == 'Y') {
					//document.location.reload();
					acnt_plan_cancel(seq);
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);
		
	}
	function acnt_plan_detail(seq) {

		var url = 'acnt_plan_detail.html?seq='+seq;
		window.open(url);
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
	<input type="hidden" name="mode" id="mode" >
	<input type="hidden" name="save_seq" id="save_seq" >
	<input type="hidden" name="save_flag" id="save_flag" value="N" >

	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">그룹별 목표매출 - <?php echo date('Y')?></li>
			   <li id="SYMenuNavi" class="Navi">회계관리 > 매출 > 그룹별 목표매출 리스트</li>
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
			<!--
			<div style="position:relative;padding:10px; border:1px solid #ddd;"  >
				<ul >
					<li >	
						
						목표년도
						<select id="s_year" name="s_year" class="SYSelectBox01" onchange="sch_list('schForm');">
							<?php echo selectOptionYear2(date('Y'),$_REQUEST["s_year"])?>

						</select>
						<span class="bar">|</span>
						
						채널명
					    <input type="text" name="s_keyfield" id="s_keyfield" class="SYInputStyle02" style="width:150px;" value="<?php echo $_REQUEST["s_keyfield"]?>" >
						<span class="bar">|</span>

					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
						<span class="bar">|</span>

					    <input type="button" class="SYButtonType04" value="초기화" onclick="location.href='acnt_plan.html'">
						
						
					</li>
					  
				</ul>
			</div>
			-->
		</div>
				
		
		
			  
</form>
<form name="listForm" id="listForm" >
		
				
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
		<p class="Tip">그룹명을 눌러서 해당 그룹의 채널등록 및 채널의 매출 수기등록을 할 수 있습니다.</p>
		<table class="SYManagerTable01">
			<tr class="Title">
				<td style="width:175px;">그룹명</td>
				
				

				<td style="width:100px;">1월</td>
				<td style="width:100px;">2월</td>
				<td style="width:100px;">3월</td>
				<td style="width:100px;">4월</td>
				<td style="width:100px;">5월</td>
				<td style="width:100px;">6월</td>
				<td style="width:100px;">7월</td>
				<td style="width:100px;">8월</td>
				<td style="width:100px;">9월</td>
				<td style="width:100px;">10월</td>
				<td style="width:100px;">11월</td>
				<td style="width:100px;">12월</td>
				
				<td style="width:120px;">수정</td>
				<td > </td>
				
				
			</tr>
			<tbody>
			
			
			
<?php if($TPL_data_1){foreach($TPL_VAR["data"] as $TPL_V1){?>
				<tr >						
					<td  class="ce">
						<a href="javascript:acnt_plan_detail('<?php echo $TPL_V1["acg_seq"]?>')"><?php echo $TPL_V1["gname"]?></a>
					</td>
					<td  class="ce"><input type="text" name="trid_m1_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m1_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m1"])?>" class="Comma trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m2_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m2_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m2"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m3_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m3_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m3"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m4_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m4_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m4"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m5_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m5_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m5"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m6_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m6_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m6"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m7_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m7_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m7"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m8_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m8_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m8"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m9_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m9_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m9"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m10_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m10_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m10"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m11_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m11_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m11"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					<td  class="ce"><input type="text" name="trid_m12_<?php echo $TPL_V1["agp_seq"]?>" id="trid_m12_<?php echo $TPL_V1["agp_seq"]?>" value="<?php echo number_format($TPL_V1["m12"])?>" class="trinput trclass_<?php echo $TPL_V1["agp_seq"]?>" readonly> </td>
					
					
					<td  class="ce" id="btn_area_<?php echo $TPL_V1["agp_seq"]?>">
						<input type="button" class="SYButtonType03" value="수정" onclick="acnt_plan_write('<?php echo $TPL_V1["agp_seq"]?>')" >
						
						
					</td>
					
					<td > </td>
				</tr>
<?php }}?>
			
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
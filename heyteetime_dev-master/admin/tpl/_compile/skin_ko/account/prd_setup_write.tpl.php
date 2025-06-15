<?php /* Template_ 2.2.8 2024/02/01 17:15:21 /home/agl/www/admin/_global/skin_ko/account/prd_setup_write.tpl 000004571 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

	
	<script type="text/javascript">

		$(function() {
			
		});

		

		function prd_setup_save() {

			
			var client_nm = $('#client_nm').val();
			if(!client_nm) {
				alert('채널명을 입력하세요');
				$('#client_nm').focus();
				return;
				
			}


			$('#iform').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_account.php',
				type : 'post',
				success:  function (obj) {
					var msg = decodeURIComponent(obj.msg);
					var opt_msg = decodeURIComponent(obj.opt_msg);
					
					if(obj.result == "Y") {
						alert('저장되었습니다.');
						window.close();
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
		.SYWirteTable td.Title {height:40px;}
	</style>
	
	<form name="iform" id="iform">
		<input type="hidden" name="mode" id="mode" value="<?php echo $TPL_VAR["editmode"]?>" />
		<input type="hidden" name="seq" id="seq" value="<?php echo $_REQUEST["seq"]?>" />
		
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> 판매채널 상세 <?php if($TPL_VAR["editmode"]=="prd_setup_update"){?> - <?php echo $TPL_VAR["data"]["client_nm"]?><?php }?></li>
				   <li id="SYMenuNavi" class="Navi">회계관리 > 매출 > 판매채널 설정 > 상세</li>
				</ul>
			</div>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:120px">
					<col style="width:280px">
					<col style="width:150px">
					<col style="width:300px">
					<col>
				</colgroup>
				
				<tr>
					<td class="Title" >채널명 *</td> 
					<td class="Content"  >
						<input type="text" name="client_nm" id="client_nm" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["client_nm"])?>"  autocomplete="off"  >
						<p class="Tip" > </p>
						
						
					</td>
					<td class="Title" >채널ID *</td> 
					<td class="Content"  >
<?php if($TPL_VAR["editmode"]=="prd_setup_insert"){?>
							자동등록
<?php }else{?>
							<?php echo $TPL_VAR["data"]["client_id"]?>

<?php }?>
						
					</td>
					<td></td>
				</tr>
				<tr>
					
					<td class="Title" >채널명 영어 </td> 
					<td class="Content"  >
						<input type="text" name="client_nm_en" id="client_nm_en" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["client_nm_en"])?>"  autocomplete="off">
						
					</td>
					<td class="Title" >테스트구분 </td> 
					<td class="Content" >
						<select name='test_yn' id='test_yn' class="SYSelectBox01"  >
							<option value='N' <?php if($TPL_VAR["data"]["test_yn"]=='N'){?> selected<?php }?>>N</option>
							<option value='Y' <?php if($TPL_VAR["data"]["test_yn"]=='Y'){?> selected<?php }?>>Y</option>
							
						</select>		
					</td>

					<td></td>
				</tr>
				
				<tr>
					
					<td class="Title" >노출여부 </td> 
					<td class="Content" colspan=3>
						
						<select name='view_yn' id='view_yn' class="SYSelectBox01"  >
							<option value='Y' <?php if($TPL_VAR["data"]["view_yn"]=='Y'){?> selected<?php }?>>노출</option>
							<option value='N' <?php if($TPL_VAR["data"]["view_yn"]=='N'){?> selected<?php }?>>미노출</option>
						</select>
						
					</td>
					<td></td>
				</tr>

<?php if($TPL_VAR["editmode"]=="prd_setup_update"){?>
				<tr>
					<td class="Title" >등록구분</td> 
					<td class="Content"  colspan=3>
						<?php echo $TPL_VAR["data"]["src_gubun_txt"]?>

						
					</td>
					
					
					<td></td>
				</tr>
<?php }?>
			</table>
		</div>


		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="prd_setup_save()">
				
				<input type="button" class="SYButtonBack04" value="목록으로" title="목록으로" onclick="golist()" id="btn-list">
				<input type="button" class="SYButtonBack04" value="닫기" title="닫기" onclick="self.close()" id="btn-close">
			</div>
			<div class="btnlistright">
				&nbsp;

			</div>
		</div>
  </div>
	 
</form>
	
</div>
<div id="popLayer" class="popLayer" style="width:450px">

	<div style="text-align:center; padding:20px">
		<img src="/_global/img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
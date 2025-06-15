<?php /* Template_ 2.2.8 2024/02/16 08:59:10 /home/agl/www/admin/_global/skin_ko/sys/code_nation_write.tpl 000007210 */ 
$TPL_phone_1=empty($TPL_VAR["phone"])||!is_array($TPL_VAR["phone"])?0:count($TPL_VAR["phone"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	
	<script type="text/javascript">

		$(function() {
			
		});

		

		function code_nation_save() {

<?php if($TPL_VAR["editmode"]=="code_nation_insert"){?>
			
			var nat_cd = $('#nat_cd').val();

			if(nat_cd.length < 2 ) {
				alert('국가코드는 2자입니다.');
				return;			

			}
<?php }?>

			


			var cd = $('#cd option:selected').val();
			if(!cd) {
				alert('대륙코드를 선택하세요');
				return;
			}

			

			var nat_nm_kr = $('#nat_nm_kr').val();
			if(!nat_nm_kr) {
				alert('국가명 한글을 입력하세요');
				$('#nat_nm_kr').focus();
				return;
				
			}


			$('#iform').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_sys.php',
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
				   <li id="SYMenuTitle" class="Title"> 국가코드 상세 <?php if($TPL_VAR["editmode"]=="code_nation_update"){?> - <?php echo $TPL_VAR["data"]["nat_nm_kr"]?><?php }?></li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 국가코드 > 상세</li>
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
					<td class="Title" >국가코드 *</td> 
					<td class="Content"  >
<?php if($TPL_VAR["editmode"]=="code_nation_insert"){?>
						<input type="text" name="nat_cd" id="nat_cd" class="SYInputStyle02 engOnly upper"  value="<?php echo $TPL_VAR["data"]["nat_cd"]?>"  autocomplete="off" maxlength=2 style="width:30px; ">
						<p class="Tip" > ISO 2코드 영문2자리. 중복된 코드 등록불가</p>
<?php }else{?>
						<?php echo $TPL_VAR["data"]["nat_cd"]?>

<?php }?>

						
					</td>
					<td class="Title" >대륙 *</td> 
					<td class="Content"  >
						<select name='cd' id='cd' class="SYSelectBox01"  >
							<option value=''>대륙선택</option>
							<?php echo selectOption($TPL_VAR["ct"],$TPL_VAR["data"]["cd"],'db')?>

						</select>
						
					</td>
					<td></td>
				</tr>
				<tr>
					
					<td class="Title" >국가명 한글 *</td> 
					<td class="Content"  >
						<input type="text" name="nat_nm_kr" id="nat_nm_kr" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["nat_nm_kr"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >국가명 중국어 </td> 
					<td class="Content" >
						<input type="text" name="nat_nm_cn" id="nat_nm_cn" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["nat_nm_cn"]?>"  autocomplete="off">	
												
					</td>

					<td></td>
				</tr>
				<tr>
					<td class="Title" >국가명 영문 </td> 
					<td class="Content"  >
						<input type="text" name="nat_nm_en" id="nat_nm_en" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["nat_nm_en"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >국가명 일본어 </td> 
					<td class="Content"  >
						<input type="text" name="nat_nm_jp" id="nat_nm_jp" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["nat_nm_jp"]?>"  autocomplete="off">
						
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td class="Title" >통화코드 </td> 
					<td class="Content"  >
						<input type="text" name="curr_cd" id="curr_cd" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["curr_cd"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >통화코드명 </td> 
					<td class="Content"  >
						<input type="text" name="curr_cd_nm" id="curr_cd_nm" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["curr_cd_nm"]?>"  autocomplete="off">
						
					</td>
					<td></td>
				</tr>
				<tr>
					<td class="Title" >통화코드2 </td> 
					<td class="Content"  >
						<input type="text" name="curr_cd2" id="curr_cd2" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["curr_cd2"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >통화코드명2 </td> 
					<td class="Content"  >
						<input type="text" name="curr_cd_nm2" id="curr_cd_nm2" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["curr_cd_nm2"]?>"  autocomplete="off">
						
					</td>
					<td></td>
				</tr>
				<tr>
					<td class="Title" >노선 </td> 
					<td class="Content"  >
						<select name='area_cd' id='area_cd' class="SYSelectBox01"  >
							<option value=''>노선선택</option>
							<?php echo selectOption($TPL_VAR["area"],$TPL_VAR["data"]["area_cd"],'db')?>

						</select>
						
					</td>
					<td class="Title" >노출여부 </td> 
					<td class="Content" >
						
						<select name='view_yn' id='view_yn' class="SYSelectBox01"  >
							<option value='Y' <?php if($TPL_VAR["data"]["view_yn"]=='Y'){?> selected<?php }?>>노출</option>
							<option value='N' <?php if($TPL_VAR["data"]["view_yn"]=='N'){?> selected<?php }?>>미노출</option>
						</select>
						
					</td>
					<td></td>
				</tr>

<?php if($TPL_VAR["editmode"]=="code_nation_update"){?>
				<tr>
					<td class="Title" >국가번호 정보 </td> 
					<td class="Content"  >
<?php if($TPL_phone_1){foreach($TPL_VAR["phone"] as $TPL_V1){?>
						<label style="margin-right:10px"><?php echo $TPL_V1["phone_code"]?></label>
<?php }}?>
					</td>
					<td class="Title" >국가령 정보 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["col_name"]?>

						
					</td>
					
					<td></td>
				</tr>
<?php }?>
			</table>
		</div>


		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="code_nation_save()">
				
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
		<img src="/_global/skin_ko/img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
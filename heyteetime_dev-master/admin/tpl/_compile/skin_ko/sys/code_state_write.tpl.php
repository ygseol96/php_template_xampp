<?php /* Template_ 2.2.8 2024/02/26 18:07:02 /home/agl/www/admin/_global/skin_ko/sys/code_state_write.tpl 000005574 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

	
	<script type="text/javascript">

		$(function() {
			
		});

		

		function code_state_save() {

<?php if($TPL_VAR["editmode"]=="code_state_insert"){?>
			
			var nat_cd = $('#nat_cd').val();

			if(nat_cd.length < 2 ) {
				alert('국가코드는 2자입니다.');
				return;			

			}
<?php }?>

			


			
			

			var state_nm_kr = $('#state_nm_kr').val();
			if(!state_nm_kr) {
				alert('지역명 한글을 입력하세요');
				$('#state_nm_kr').focus();
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
				   <li id="SYMenuTitle" class="Title"> 지역코드 상세 <?php if($TPL_VAR["editmode"]=="code_state_update"){?> - <?php echo $TPL_VAR["data"]["nat_name"]?> > <?php echo $TPL_VAR["data"]["state_nm_kr"]?><?php }?></li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 지역코드 > 상세</li>
				</ul>
			</div>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:120px">
					<col style="width:280px">
					<col style="width:150px">
					<col style="width:300px">
					<col style="width:150px">
					<col style="width:300px">
					<col>
				</colgroup>
				
				<tr>
					<td class="Title" >지역코드 *</td> 
					<td class="Content"  >
<?php if($TPL_VAR["editmode"]=="code_state_insert"){?>
						
						<p class="Tip" > 자동생성</p>
<?php }else{?>
						<?php echo $TPL_VAR["data"]["state_cd"]?>

<?php }?>

						
					</td>
					<td class="Title" >국가코드 *</td> 
					<td class="Content" colspan=3 >

<?php if($TPL_VAR["editmode"]=="code_state_insert"){?>
						<select name='nat_cd' id='nat_cd' class="SYSelectBox01"  >
							<option value=''>국가코드</option>
							<?php echo selectOption(select_nation(),$TPL_VAR["data"]["nat_cd"],'db')?>

						</select>
<?php }else{?>
						<?php echo $TPL_VAR["data"]["nat_cd"]?> ( <?php echo $TPL_VAR["data"]["nat_name"]?> )
<?php }?>

						
					</td>
					<td></td>
				</tr>
				<tr>
					
					<td class="Title" >지역명 한글 *</td> 
					<td class="Content"  >
						<input type="text" name="state_nm_kr" id="state_nm_kr" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["state_nm_kr"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >지역명 영어 </td> 
					<td class="Content" >
						<input type="text" name="state_nm_en" id="state_nm_en" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["state_nm_en"]?>"  autocomplete="off">	
												
					</td>

					<td class="Title" >지역명 일본어 </td> 
					<td class="Content" >
						<input type="text" name="state_nm_jp" id="state_nm_jp" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["state_nm_jp"]?>"  autocomplete="off">	
												
					</td>

					<td></td>
				</tr>
				
				
				<tr>
					<td class="Title" >지역구분 * </td> 
					<td class="Content" >
						<select name='state_gubun' id='state_gubun' class="SYSelectBox01"  >
							<option value=''>선택</option>
							<option value='1' <?php if($TPL_VAR["data"]["state_gubun"]=='1'){?> selected<?php }?>>주</option>
							<option value='2' <?php if($TPL_VAR["data"]["state_gubun"]=='2'){?> selected<?php }?>>자치국</option>
							<option value='9' <?php if($TPL_VAR["data"]["state_gubun"]=='9'){?> selected<?php }?>>기타</option>
							
						</select>
						
					</td>
					<td class="Title" >노출여부 </td> 
					<td class="Content" colspan=3 >
						
						<select name='view_yn' id='view_yn' class="SYSelectBox01"  >
							<option value='Y' <?php if($TPL_VAR["data"]["view_yn"]=='Y'){?> selected<?php }?>>노출</option>
							<option value='N' <?php if($TPL_VAR["data"]["view_yn"]=='N'){?> selected<?php }?>>미노출</option>
						</select>
						
					</td>
					<td></td>
					
				</tr>
				
				
				
			</table>
		</div>


		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="code_state_save()">
				
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
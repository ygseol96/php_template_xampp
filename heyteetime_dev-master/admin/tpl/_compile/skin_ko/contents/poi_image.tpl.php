<?php /* Template_ 2.2.8 2024/02/23 17:08:44 /home/agl/www/admin/_global/skin_ko/contents/poi_image.tpl 000011138 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);
$TPL_image_1=empty($TPL_VAR["image"])||!is_array($TPL_VAR["image"])?0:count($TPL_VAR["image"]);
$TPL_video_1=empty($TPL_VAR["video"])||!is_array($TPL_VAR["video"])?0:count($TPL_VAR["video"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	<style type="text/css">
		#dropzone {       
			border:2px dotted #3292A2;        
			width:90%;        
			height:150px;        
			color:#92AAB0;        
			text-align:center;        
			font-size:16px;        
			padding-top:12px;        
			margin-top:10px;    
		}
	</style>
	
	<script type="text/javascript">

		$(function() {

			
			
		});
		

		function poi_image_write() {

			var seq = $('#seq').val();

			$.post('ajax_contents.php', { mode: 'form_poi_image', seq:seq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {

						$('#popCommon').css("width", "800px");

						var html = decodeURIComponent(obj.msg);
						$('#popCommon').html(html);
						basic_script();
						viewLayer('on', 'popCommon');

						////// 파일 업로드
						multi_upload('dropzone');
						
						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);

		}


		// 파일 멀티 업로드
		function _FileMultiUpload(files, obj) {     

			var seq = $('#seq').val();
		         
			var data = new FormData();         
			for (var i = 0; i < files.length; i++) {            
				data.append('file[]', files[i]);         
			}

			data.append('mode','poi_image_insert');
			data.append('seq',seq);

			
        		
			var url = "ajax_contents.php";         
			$.ajax({            
				url: url,            
				method: 'post',            
				data: data,            
				dataType: 'json',            
				processData: false,            
				contentType: false,            
				success: function(obj) {                
					if(obj.result == "Y") {
						//alert('저장되었습니다.');
						document.location.reload();
					}
					else {
						alert(msg);	
						//$('#btn-popreg').attr("disabled", false);
					}         
				}         
			});     
			
		}
		


		

		function poi_rule_save() {
			
			
			$('#popForm').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_contents.php',
				type : 'post',
				success:  function (obj) {
					var msg = decodeURIComponent(obj.msg);
					var opt_msg = decodeURIComponent(obj.opt_msg);
					
					if(obj.result == "Y") {
						//alert('저장되었습니다.');
						document.location.reload();
					}
					else {
						alert(msg);	
						//$('#btn-popreg').attr("disabled", false);
					}
				}
			}); 
		}


		
		function poi_image_del (seq) {
			
			var ans = confirm('해당 데이터를 삭제하시겠습니까?');
			if(!ans) return;


			

			$.post('ajax_contents.php', { mode: 'poi_image_delete', seq:seq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						$('#tr_image_'+seq).fadeOut();
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);


		}

		function set_view(seq) {
		//console.log("seq="+seq);

			//console.log($('#confirm_yn_'+seq).is(':checked'));
			if($('#view_yn_'+seq).is(':checked') == true) {
				var view_yn ='Y';
			}
			else {
				var view_yn ='N';
			}

			$.post('ajax_contents.php', { mode: 'poi_image_view_yn', seq:seq , view_yn:view_yn },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						if(view_yn == 'Y' ) {
							toast('노출완료','승인되었습니다.', 'success');
						}
						else {
							toast('노출해제','해제되었습니다.', 'error');
						}
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}


		function chg_catecode(seq, code) {
			console.log('seq='+seq);
			console.log('code='+code);


			$.post('ajax_contents.php', { mode: 'poi_image_cate_change', seq:seq , code:code },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						toast('변경완료','처리되었습니다.', 'success');
					}
					else {
						var msg = decodeURIComponent(obj.msg);
						toast('변경실패',msg, 'error');
						//alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}


		function poi_video_write() {

			var seq = $('#seq').val();

			$.post('ajax_contents.php', { mode: 'form_poi_video', seq:seq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {

						$('#popCommon').css("width", "800px");

						var html = decodeURIComponent(obj.msg);
						$('#popCommon').html(html);
						basic_script();
						viewLayer('on', 'popCommon');

						
						
						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);

		}


		function poi_video_save() {

			var url = $('#file_path').val();
			if(!url){
				alert('영상주소를 입력하세요');
				return;
			}


			
			
			$('#popForm').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_contents.php',
				type : 'post',
				success:  function (obj) {
					var msg = decodeURIComponent(obj.msg);
					var opt_msg = decodeURIComponent(obj.opt_msg);
					
					if(obj.result == "Y") {
						//alert('저장되었습니다.');
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
		.SYWirteTable td.Title {height:20px;}
		.sigleNumber {background-color:#FFF; border:1px solid #DDD;width:40px; height:16px; color:#303030; font-size:12px; padding:3px; text-align:center; border-radius:5px;}
	</style>
	
	<form name="iform" id="iform">
		<input type="hidden" name="mode" id="mode" value="<?php echo $TPL_VAR["editmode"]?>" />
		<input type="hidden" name="seq" id="seq" value="<?php echo $_REQUEST["seq"]?>" />
	</form>	
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> POI <?php if($TPL_data_1> 0){?> 이미지/영상  - <?php echo $TPL_VAR["data"]["club_nm"]?><?php }?></li>
				   <li id="SYMenuNavi" class="Navi">Contents관리 > POI > POI 이미지/영상 </li>
				</ul>
			</div>

<?php $this->print_("poi_tab",$TPL_SCP,1);?>

<?php $this->print_("poi_info",$TPL_SCP,1);?>

			

	

			<h1 class="main_h1">이미지 <input type="button" class="SYButtonType03" value="등록" onclick="poi_image_write()" ></h1>

			<table class="SYManagerTable01" style="margin-top:10px">
				<tr class="Title">
					<td style="width:45px;">No.</td>
					<td style="width:150px;">카테고리명</td>
					<td >이미지 </td>
					
					<td style="width:50px;">노출</td>
					<td style="width:50px;">삭제</td>
					
					
				</tr>
				<tbody>
<?php if($TPL_image_1== 0){?>
				<tr >						
				  <td colspan=16 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
				</tr>
<?php }else{?>
<?php if($TPL_image_1){$TPL_I1=-1;foreach($TPL_VAR["image"] as $TPL_V1){$TPL_I1++;?>
					<tr id="tr_image_<?php echo $TPL_V1["pimg_seq"]?>">						
						<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
						<td  class="ce">
							<select name="cateimg_<?php echo $TPL_V1["pimg_seq"]?>" id="cateimg_<?php echo $TPL_V1["pimg_seq"]?>" class="SYSelectBox01" onchange="chg_catecode(<?php echo $TPL_V1["pimg_seq"]?>, this.value)">
								<?php echo selectOption($TPL_VAR["cate"],$TPL_V1["code_seq"],'db')?>

							</select>
						</td>
						<td  class="le">
							<img src="<?php echo $TPL_V1["file_path"]?>" style="width:120px" onclick="view_image('<?php echo $TPL_V1["pimg_seq"]?>')">
							<div id="img_<?php echo $TPL_V1["pimg_seq"]?>" style="display:none">
								<img src="<?php echo $TPL_V1["file_path"]?>">
							</div>
						</td>
						<td  class="ce">
							<div style="display:inline-block;position:relative; ">
							<label class="switch">
							  <input type="checkbox" name="view_yn_<?php echo $TPL_V1["pimg_seq"]?>" id="view_yn_<?php echo $TPL_V1["pimg_seq"]?>" value="Y" <?php if($TPL_VAR["data"]["view_yn"]=='Y'){?> checked<?php }?> onclick="set_view(<?php echo $TPL_V1["pimg_seq"]?>)">  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
						</td>

						
						<td  class="ce">
							<input type="button" class="SYButtonDelete01" onclick="poi_image_del('<?php echo $TPL_V1["pimg_seq"]?>')" >
						</td>
						
						
					</tr>
<?php }}?>
<?php }?>
				</tbody>
			</table>



			<h1 class="main_h1" style="margin-top:20px">영상정보 <input type="button" class="SYButtonType03" value="등록" onclick="poi_video_write()" ></h1>

			<table class="SYManagerTable01" style="margin-top:10px">
				<tr class="Title">
					<td style="width:45px;">No.</td>
					<td style="width:150px;">카테고리명</td>
					<td >영상주소 </td>
					
					<td style="width:50px;">노출</td>
					<td style="width:50px;">삭제</td>
					
					
				</tr>
				<tbody>
<?php if($TPL_video_1== 0){?>
				<tr >						
				  <td colspan=16 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
				</tr>
<?php }else{?>
<?php if($TPL_video_1){$TPL_I1=-1;foreach($TPL_VAR["video"] as $TPL_V1){$TPL_I1++;?>
					<tr id="tr_image_<?php echo $TPL_V1["pimg_seq"]?>">						
						<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
						<td  class="ce">
							<select name="cateimg_<?php echo $TPL_V1["pimg_seq"]?>" id="cateimg_<?php echo $TPL_V1["pimg_seq"]?>" class="SYSelectBox01" onchange="chg_catecode(<?php echo $TPL_V1["pimg_seq"]?>, this.value)">
								<?php echo selectOption($TPL_VAR["cate"],$TPL_V1["code_seq"],'db')?>

							</select>
						</td>
						<td  class="le">
							<?php echo $TPL_V1["file_path"]?>

						</td>
						<td  class="ce">
							<div style="display:inline-block;position:relative; ">
							<label class="switch">
							  <input type="checkbox" name="view_yn_<?php echo $TPL_V1["pimg_seq"]?>" id="view_yn_<?php echo $TPL_V1["pimg_seq"]?>" value="Y" <?php if($TPL_VAR["data"]["view_yn"]=='Y'){?> checked<?php }?> onclick="set_view(<?php echo $TPL_V1["pimg_seq"]?>)">  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
						</td>

						
						<td  class="ce">
							<input type="button" class="SYButtonDelete01" onclick="poi_image_del('<?php echo $TPL_V1["pimg_seq"]?>')" >
						</td>
						
						
					</tr>
<?php }}?>
<?php }?>
				</tbody>
			</table>



  </div>
	 

	
</div>
<div id="popLayer" class="popLayer" style="width:450px">

	<div style="text-align:center; padding:20px">
		<img src="/_global/img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
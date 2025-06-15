<?php /* Template_ 2.2.8 2024/02/22 18:48:15 /home/agl/www/admin/_global/skin_ko/contents/poi_hotel.tpl 000005302 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);
$TPL_hotel_1=empty($TPL_VAR["hotel"])||!is_array($TPL_VAR["hotel"])?0:count($TPL_VAR["hotel"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	
	<script type="text/javascript">

		$(function() {
			
		});
		

		function poi_hotel_write() {

			var seq = $('#seq').val();

			$.post('ajax_contents.php', { mode: 'form_poi_hostel_list', seq:seq},
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

		function key_find_hotel() {
			if(event.keyCode == 13) {
				find_hotel();
			}
			return false;
		}

		function find_hotel() {
			var sch = $('#sch_nm').val();

			$.post('ajax_contents.php', { mode: 'poi_hotel_schlist', sch:sch},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						var html = decodeURIComponent(obj.msg);
						$('#result_of_sch').html(html);
						basic_script();
						
						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);


		}

		function poi_hotel_insert() {
			var obj = $('input[name="hotel[]"]');
			if(obj.length == 0 ) {
				alert('검색된 호텔이 없습니다.');
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


		
		function poi_hotel_del (seq) {
			
			var ans = confirm('해당 호텔을 삭제하시겠습니까?');
			if(!ans) return;

			$.post('ajax_contents.php', { mode: 'poi_hotel_delete', seq:seq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						$('#tr_hotel_'+seq).fadeOut();
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);

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
				   <li id="SYMenuTitle" class="Title"> POI <?php if($TPL_data_1> 0){?> 코스정보  - <?php echo $TPL_VAR["data"]["club_nm"]?><?php }?></li>
				   <li id="SYMenuNavi" class="Navi">Contents관리 > POI > POI 코스정보 </li>
				</ul>
			</div>

<?php $this->print_("poi_tab",$TPL_SCP,1);?>

<?php $this->print_("poi_info",$TPL_SCP,1);?>

			

	

			<h1 class="main_h1">호텔정보 <input type="button" class="SYButtonType03" value="등록" onclick="poi_hotel_write()" ></h1>

			<table class="SYManagerTable01" style="margin-top:10px">
				<tr class="Title">
					<td style="width:45px;">No.</td>
					<td style="width:150px;">호텔명</td>
					<td style="width:150px;">호텔명 영어 </td>
					<td style="width:150px;">호텔명 일본어</td>
					<td style="width:50px;">국가코드 </td>
					<td style="width:120px;">등급</td>
					<td style="width:50px;">삭제</td>
					<td ></td>
					
					
					
					
				</tr>
				<tbody>
<?php if($TPL_hotel_1== 0){?>
				<tr >						
				  <td colspan=16 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
				</tr>
<?php }else{?>
<?php if($TPL_hotel_1){$TPL_I1=-1;foreach($TPL_VAR["hotel"] as $TPL_V1){$TPL_I1++;?>
					<tr id="tr_hotel_<?php echo $TPL_V1["photel_seq"]?>">						
						<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
						<td  class="ce"><?php echo $TPL_V1["hotel_nm"]?></td>
						<td  class="ce"><?php echo $TPL_V1["hotel_nm_en"]?></td>
						<td  class="ce"><?php echo $TPL_V1["hotel_nm_jp"]?></td>
						<td  class="ce"><?php echo $TPL_V1["nat_cd"]?></td>
						<td  class="ce"><?php echo $TPL_V1["grade"]?></td>

						
						<td  class="ce">
							<input type="button" class="SYButtonDelete01" onclick="poi_hotel_del('<?php echo $TPL_V1["photel_seq"]?>')" >
						</td>
						<td ></td>
						
					</tr>
<?php }}?>
<?php }?>
				</tbody>
			</table>



			<div id="layer_tee" style="margin-top:20px"></div>
			
			
		

		
  </div>
	 

	
</div>
<div id="popLayer" class="popLayer" style="width:450px">

	<div style="text-align:center; padding:20px">
		<img src="/_global/img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
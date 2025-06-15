<?php /* Template_ 2.2.8 2024/02/23 14:28:16 /home/agl/www/admin/_global/skin_ko/contents/poi_rule.tpl 000009500 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);
$TPL_rule_1=empty($TPL_VAR["rule"])||!is_array($TPL_VAR["rule"])?0:count($TPL_VAR["rule"]);
$TPL_award_1=empty($TPL_VAR["award"])||!is_array($TPL_VAR["award"])?0:count($TPL_VAR["award"]);
$TPL_ship_1=empty($TPL_VAR["ship"])||!is_array($TPL_VAR["ship"])?0:count($TPL_VAR["ship"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	
	<script type="text/javascript">

		$(function() {
			
		});
		

		function poi_rule_write(subseq) {

			var seq = $('#seq').val();

			$.post('ajax_contents.php', { mode: 'form_poi_rule', seq:seq, subseq:subseq},
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


		function poi_award_write(subseq) {

			var seq = $('#seq').val();

			$.post('ajax_contents.php', { mode: 'form_poi_award', seq:seq, subseq:subseq},
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


		function poi_ship_write(subseq) {

			var seq = $('#seq').val();

			$.post('ajax_contents.php', { mode: 'form_poi_ship', seq:seq, subseq:subseq},
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

			$.post('ajax_contents.php', { mode: 'poi_rule_schlist', sch:sch},
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


		
		function poi_rule_del (seq) {
			
			var ans = confirm('해당 데이터를 삭제하시겠습니까?');
			if(!ans) return;


			

			$.post('ajax_contents.php', { mode: 'poi_rule_delete', seq:seq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						$('#tr_rule_'+seq).fadeOut();
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
				   <li id="SYMenuTitle" class="Title"> POI <?php if($TPL_data_1> 0){?> 규정정보  - <?php echo $TPL_VAR["data"]["club_nm"]?><?php }?></li>
				   <li id="SYMenuNavi" class="Navi">Contents관리 > POI > POI 규정정보 </li>
				</ul>
			</div>

<?php $this->print_("poi_tab",$TPL_SCP,1);?>

<?php $this->print_("poi_info",$TPL_SCP,1);?>

			

	

			<h1 class="main_h1">규정정보 <input type="button" class="SYButtonType03" value="등록" onclick="poi_rule_write()" ></h1>

			<table class="SYManagerTable01" style="margin-top:10px">
				<tr class="Title">
					<td style="width:45px;">No.</td>
					<td style="width:150px;">카테고리명</td>
					<td >내용 </td>
					<td style="width:70px;">시작일 </td>
					<td style="width:70px;">종료일</td>

					<td style="width:50px;">사용</td>
					<td style="width:50px;">수정</td>
					<td style="width:50px;">삭제</td>
					
					
				</tr>
				<tbody>
<?php if($TPL_rule_1== 0){?>
				<tr >						
				  <td colspan=16 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
				</tr>
<?php }else{?>
<?php if($TPL_rule_1){$TPL_I1=-1;foreach($TPL_VAR["rule"] as $TPL_V1){$TPL_I1++;?>
					<tr id="tr_rule_<?php echo $TPL_V1["usedata_seq"]?>">						
						<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
						<td  class="ce"><?php echo $TPL_V1["cate_nm"]?></td>
						<td  class="le"><?php echo nl2br($TPL_V1["data_kr"])?></td>
						<td  class="ce"><?php echo $TPL_V1["sdate"]?></td>
						<td  class="ce"><?php echo $TPL_V1["edate"]?></td>
						<td  class="ce"><?php echo $TPL_V1["use_yn"]?></td>

						<td  class="ce">
							<input type="button" class="SYButtonType03" value="수정" onclick="poi_rule_write('<?php echo $TPL_V1["usedata_seq"]?>')" >
						</td>
						<td  class="ce">
							<input type="button" class="SYButtonDelete01" onclick="poi_rule_del('<?php echo $TPL_V1["usedata_seq"]?>')" >
						</td>
						
						
					</tr>
<?php }}?>
<?php }?>
				</tbody>
			</table>



			<h1 class="main_h1" style="margin-top:20px">수상정보 <input type="button" class="SYButtonType03" value="등록" onclick="poi_award_write()" ></h1>

			<table class="SYManagerTable01" style="margin-top:10px">
				<tr class="Title">
					<td style="width:45px;">No.</td>
					<td style="width:70px;">연도 </td>
					<td >내용 </td>
					

					<td style="width:50px;">사용</td>
					<td style="width:50px;">수정</td>
					<td style="width:50px;">삭제</td>
					
					
				</tr>
				<tbody>
<?php if($TPL_award_1== 0){?>
				<tr >						
				  <td colspan=16 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
				</tr>
<?php }else{?>
<?php if($TPL_award_1){$TPL_I1=-1;foreach($TPL_VAR["award"] as $TPL_V1){$TPL_I1++;?>
					<tr id="tr_rule_<?php echo $TPL_V1["usedata_seq"]?>">						
						<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
						<td  class="ce"><?php echo $TPL_V1["sdate"]?></td>
						<td  class="le"><?php echo nl2br($TPL_V1["data_kr"])?></td>
						
						
						<td  class="ce"><?php echo $TPL_V1["use_yn"]?></td>

						<td  class="ce">
							<input type="button" class="SYButtonType03" value="수정" onclick="poi_award_write('<?php echo $TPL_V1["usedata_seq"]?>')" >
						</td>
						<td  class="ce">
							<input type="button" class="SYButtonDelete01" onclick="poi_rule_del('<?php echo $TPL_V1["usedata_seq"]?>')" >
						</td>
						
						
					</tr>
<?php }}?>
<?php }?>
				</tbody>
			</table>


			<h1 class="main_h1" style="margin-top:20px">대회정보 <input type="button" class="SYButtonType03" value="등록" onclick="poi_ship_write()" ></h1>

			<table class="SYManagerTable01" style="margin-top:10px">
				<tr class="Title">
					<td style="width:45px;">No.</td>
					<td style="width:70px;">시작일 </td>
					<td style="width:70px;">종료일</td>
					<td >내용 </td>
					

					<td style="width:50px;">사용</td>
					<td style="width:50px;">수정</td>
					<td style="width:50px;">삭제</td>
					
					
				</tr>
				<tbody>
<?php if($TPL_ship_1== 0){?>
				<tr >						
				  <td colspan=16 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
				</tr>
<?php }else{?>
<?php if($TPL_ship_1){$TPL_I1=-1;foreach($TPL_VAR["ship"] as $TPL_V1){$TPL_I1++;?>
					<tr id="tr_rule_<?php echo $TPL_V1["usedata_seq"]?>">						
						<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
						<td  class="ce"><?php echo $TPL_V1["sdate"]?></td>
						<td  class="ce"><?php echo $TPL_V1["edate"]?></td>
						
						<td  class="le"><?php echo nl2br($TPL_V1["data_kr"])?></td>
						<td  class="ce"><?php echo $TPL_V1["use_yn"]?></td>

						<td  class="ce">
							<input type="button" class="SYButtonType03" value="수정" onclick="poi_ship_write('<?php echo $TPL_V1["usedata_seq"]?>')" >
						</td>
						<td  class="ce">
							<input type="button" class="SYButtonDelete01" onclick="poi_rule_del('<?php echo $TPL_V1["usedata_seq"]?>')" >
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
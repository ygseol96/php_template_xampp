<?php /* Template_ 2.2.8 2024/02/16 08:59:10 /home/agl/www/admin/_global/skin_ko/sys/grp_auth_write.tpl 000004145 */ 
$TPL_gmenu_1=empty($TPL_VAR["gmenu"])||!is_array($TPL_VAR["gmenu"])?0:count($TPL_VAR["gmenu"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	
	<script type="text/javascript">
		function chk_gmenu(gseq) {
			console.log('gseq='+gseq);
			var gid = 'gmenu_'+gseq;

			var gcheck = $('#'+gid).is(':checked');
			$('.'+gid).prop('checked', gcheck);
		}

		function chk_smenu(seq) {
			console.log('seq='+seq);
			var sid = 'smenu_'+seq;

			var scheck = $('#'+sid).is(':checked');
			$('.'+sid).prop('checked', scheck);
		}

		function part_menu_save() {

			var ans = confirm('저장하시겠습니까?');
			if(!ans) return;

			$('#iform').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_sys.php',
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
	</script>
	
	<form name="iform" id="iform">
		<input type="hidden" name="mode" id="mode" value="part_menu_save" />
		<input type="hidden" name="seq" id="seq" value="<?php echo $_REQUEST["seq"]?>" />
  
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> 부서별 권한관리 - <?php echo $TPL_VAR["part"]["part_name"]?></li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 권한관리 > 부서별 권한 관리</li>
				</ul>
			</div>

<?php if($TPL_gmenu_1){foreach($TPL_VAR["gmenu"] as $TPL_V1){
$TPL_smenu_2=empty($TPL_V1["smenu"])||!is_array($TPL_V1["smenu"])?0:count($TPL_V1["smenu"]);?>
			<h3 style="font-size:16px; font-weight:900; padding:10px;margin-top:10px">
				<label><input type="checkbox" name="gmenu[]" id="gmenu_<?php echo $TPL_V1["mg_seq"]?>" value="Y" class="SYCheckBox01 gmenu_<?php echo $TPL_V1["mg_seq"]?>" onclick="chk_gmenu(<?php echo $TPL_V1["mg_seq"]?>)"><?php echo $TPL_V1["mg_title"]?></label> 
			</h3>
			
			<table class="SYWirteTable" >
				<colgroup>
					<col style="width:25%">
					<col style="width:75%">
				</colgroup>
<?php if($TPL_smenu_2){foreach($TPL_V1["smenu"] as $TPL_V2){
$TPL_dmenu_3=empty($TPL_V2["dmenu"])||!is_array($TPL_V2["dmenu"])?0:count($TPL_V2["dmenu"]);?>
				<tr>
					<td class="Title" >
						<label><input type="checkbox" name="smenu[]" id="smenu_<?php echo $TPL_V2["ms_seq"]?>" value="" class="SYCheckBox01 gmenu_<?php echo $TPL_V1["mg_seq"]?> smenu_<?php echo $TPL_V2["ms_seq"]?>" onclick="chk_smenu(<?php echo $TPL_V2["ms_seq"]?>)"><?php echo $TPL_V2["sg_title"]?></label> 
					</td> 
					<td class="Content" >
<?php if($TPL_dmenu_3){foreach($TPL_V2["dmenu"] as $TPL_V3){?>
						<label><input type="checkbox" name="dmenu[]" id="dmenu_<?php echo $TPL_V3["md_seq"]?>"  value="<?php echo $TPL_V3["md_seq"]?>" class="SYCheckBox01 gmenu_<?php echo $TPL_V1["mg_seq"]?> smenu_<?php echo $TPL_V2["ms_seq"]?>" <?php if($TPL_V3["cnt"]> 0){?>checked<?php }?>><?php echo $TPL_V3["dg_title"]?></label>
<?php }}?>
					</td> 
					
					
				</tr>
				
<?php }}?>
				
			</table>
			
<?php }}?>
		</div>

			
				

		<div class="btnlistarea" style="margin-top:20px">
			<div class="btnlistleft">
				&nbsp;
			</div>
			<div class="btnlistright">
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="part_menu_save()">
				
				<input type="button" class="SYButtonBack04" value="목록으로" title="목록으로" onclick="golist()" id="btn-list">
				<input type="button" class="SYButtonBack04" value="닫기" title="닫기" onclick="self.close()" id="btn-close">

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
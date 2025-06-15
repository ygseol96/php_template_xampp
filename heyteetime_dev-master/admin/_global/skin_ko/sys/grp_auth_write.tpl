{#head}
	
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
		<input type="hidden" name="seq" id="seq" value="{_REQUEST.seq}" />
  
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> 부서별 권한관리 - {part.part_name}</li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 권한관리 > 부서별 권한 관리</li>
				</ul>
			</div>

			{@ gmenu}
			<h3 style="font-size:16px; font-weight:900; padding:10px;margin-top:10px">
				<label><input type="checkbox" name="gmenu[]" id="gmenu_{.mg_seq}" value="Y" class="SYCheckBox01 gmenu_{.mg_seq}" onclick="chk_gmenu({.mg_seq})">{.mg_title}</label> 
			</h3>
			
			<table class="SYWirteTable" >
				<colgroup>
					<col style="width:25%">
					<col style="width:75%">
				</colgroup>
				{@ smenu}
				<tr>
					<td class="Title" >
						<label><input type="checkbox" name="smenu[]" id="smenu_{smenu.ms_seq}" value="" class="SYCheckBox01 gmenu_{.mg_seq} smenu_{smenu.ms_seq}" onclick="chk_smenu({smenu.ms_seq})">{smenu.sg_title}</label> 
					</td> 
					<td class="Content" >
						{@dmenu}
						<label><input type="checkbox" name="dmenu[]" id="dmenu_{dmenu.md_seq}"  value="{dmenu.md_seq}" class="SYCheckBox01 gmenu_{.mg_seq} smenu_{smenu.ms_seq}" {? dmenu.cnt > 0 }checked{/}>{dmenu.dg_title}</label>
						{/}
					</td> 
					
					
				</tr>
				
				{/}
				
			</table>
			
			{/}
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
		<img src="../img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
{#bottom}
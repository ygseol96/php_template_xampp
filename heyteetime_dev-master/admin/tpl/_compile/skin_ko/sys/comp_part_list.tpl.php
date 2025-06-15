<?php /* Template_ 2.2.8 2024/02/16 08:59:10 /home/agl/www/admin/_global/skin_ko/sys/comp_part_list.tpl 000006408 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>


<script type="text/javascript">
	$(function() {
		$('.SYManagerTable01 tbody').sortable({
			update : function(event, ui) {
				/*
				$(this).children().each(function(index) {
					$(this).find('td').first().html(index+1);
				});
				
				order_updated = true;
				$('#order_updated').val('1');
				*/
			}
		});

		$('.lmenu_<?php echo $TPL_VAR["dmenu"]?>').addClass("on");

		//등록 리스너
		$(window).on("keydown", function(e) {
			if(e.ctrlKey && e.keyCode == 45) {
				part_write();
			}
		});
		
	});




	function moveUp(el){
		order_updated = true;
		var $tr = $(el).parent().parent(); // 클릭한 버튼이 속한 tr 요소
		$tr.prev().before($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
	}

	function moveDown(el){
		order_updated = true;
		var $tr = $(el).parent().parent(); // 클릭한 버튼이 속한 tr 요소
		$tr.next().after($tr); // 현재 tr 의 다음 tr 뒤에 선택한 tr 넣기
	}


	function jikgub_save() {

		var popmode = $('#popmode').val();
		
		if(!$('#part_name').val()) {
			alert('부서명을 입력하세요');
			return;
		}


		$('#popForm').ajaxSubmit({
					
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

	function order_save() {
		
		

		$('#listForm').ajaxSubmit({
					
			dataType:  'json',
			url : 'ajax_sys.php',
			type : 'post',
			success:  function (obj) {
				var msg = decodeURIComponent(obj.msg);
				var opt_msg = decodeURIComponent(obj.opt_msg);
				
				if(obj.result == "Y") {
					alert('순서가 저장되었습니다.');
					document.location.reload();
				}
				else {
					alert(msg);	
					//$('#btn-popreg').attr("disabled", false);
				}
			}
		});
	}

	function part_write(seq) {
		
		
		if(seq) {
			var submode = "comp_part_update";
		}
		else {
			var submode = "comp_part_insert";
		}
		


		$('#popCommon').css("width", "800px");

		$.post('ajax_sys.php', { mode: 'form_comp_part', submode:submode,  seq:seq},
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
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

	function part_del(seq) {
		var ans = confirm('해당 데이터를 삭제하시겠습니까? 삭제시 복구가 불가능합니다.');
		if(!ans) return;

		$.post('ajax_sys.php', { mode: 'comp_part_delete', seq:seq},
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
					alert('삭제되었습니다');
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
</style>

<form name="schForm" id="schForm" >
	<input type="hidden" name="mode" id="mode" >
	

	
	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">부서 관리</li>
			   <li id="SYMenuNavi" class="Navi">시스템관리 > 권한관리 > 부서관리 리스트</li>
			</ul>
	   </div>
	   
		<div class="SYTableTitleBar">
			<ul>
				<li class="Left" style="width:600px">
					<input type="button" class="SYButtonType03" value="등록" onclick="part_write()" >
					<span class="bar">|</span>
					<input type="button" class="SYButtonType05 bgRed" value="순서저장" onclick="order_save()" >
					
				</li>
				<li class="Right">
					
					
				</li>
			</ul>
		</div>

	    	  
</form>
<form name="listForm" id="listForm" >
	<input type="hidden" name="mode" id="listmode" value="comp_part_order" >
	<input type="hidden" name="gubun" id="gubun"  >
	
				
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
		
		<!--<h3 style="font-size:18px; "></h3>-->
		<div class="Tip" style="margin:10px 0">* 행을 드래그&드랍으로 순서를 조정할 수 있습니다. 조정 후 아래 순서저장을 눌러주세요.</div>
		<p class="Tip" style="margin:10px 0;"> CTRL + Insert 시 등록창이 열립니다. </p>
		<table class="SYManagerTable01">
			<tr class="Title">
				<td style="width:55px;">순서</td>
				<td style="width:180px;">부서명</td>
				<td style="width:100px;">사용여부</td>
				
				<td style="width:60px;">수정</td>
				<td style="width:60px;">삭제</td>
				<td > </td>
			</tr>
			<tbody>
			
<?php if($TPL_data_1){foreach($TPL_VAR["data"] as $TPL_V1){?>
				<tr >						
					<td  class="ce">
						<input type='hidden' name='sort1[]' value='<?php echo $TPL_V1["cp_seq"]?>' />
						<input type="button" class="buttonOrderUp" value="" title="위로"  onclick="moveUp(this)"> 
						<input type="button" class="buttonOrderDown" value="" title="아래로"  onclick="moveDown(this)"> 
					  </td>
					<td  class="ce"><?php echo $TPL_V1["part_name"]?></td>
					<td  class="ce"><?php echo $TPL_V1["use_yn_txt"]?></td>
					
					<td  class="ce">
						<input type="button" class="SYButtonType03" value="수정" onclick="part_write('<?php echo $TPL_V1["cp_seq"]?>')" >
						
					</td>
					<td  class="ce">
						<input type="button" class="SYButtonDelete01" onclick="part_del('<?php echo $TPL_V1["cp_seq"]?>')" >
						
					</td>
					<td > </td>
					
				</tr>
<?php }}?>
			
			</tbody>
		</table>
	</div>
	
	
	<!--
	
	<div class="btnlistarea" style="margin-top:20px">
		<div class="btnlistleft">
			&nbsp;
			<input type="button" class="SYButtonSubmit03" value="순서저장" title="순서저장" onclick="order_save()"> 
		</div>
		<div class="btnlistright">
			<input type="button" class="SYButtonSubmit04" value="등록" title="등록" onclick="part_write()">
			&nbsp;
		</div>
	</div>
	-->
	

	
					  
	

						
		  
</form>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
<?php /* Template_ 2.2.8 2024/02/16 08:59:10 /home/agl/www/admin/_global/skin_ko/sys/grp_auth_list.tpl 000004826 */ 
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

	function partauth_write(seq) {
		
		var url = 'grp_auth_write.html';
		if(seq) url += '?seq='+seq;
		window.open(url);
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
			   <li id="SYMenuTitle" class="Title">부서별 권한 관리</li>
			   <li id="SYMenuNavi" class="Navi">시스템관리 > 권한관리 > 부서별 권한 관리 리스트</li>
			</ul>
	   </div>
	   


	    	  
</form>
<form name="listForm" id="listForm" >
	<input type="hidden" name="mode" id="listmode" value="comp_part_order" >
	<input type="hidden" name="gubun" id="gubun"  >
	
				
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
		
		<!--<h3 style="font-size:18px; "></h3>-->
		<div class="Tip" style="margin:10px 0">* 사용자 추가시 여기서 부서별로 설정한 권한으로 자동입력됩니다.</div>
		
		<table class="SYManagerTable01">
			<tr class="Title">
				<td style="width:55px;">No.</td>
				<td style="width:180px;">부서명</td>
				
				<td style="width:60px;">수정</td>
				<td > </td>
			</tr>
			<tbody>
			
<?php if($TPL_data_1){$TPL_I1=-1;foreach($TPL_VAR["data"] as $TPL_V1){$TPL_I1++;?>
				<tr >						
					<td  class="ce">
						<?php echo ($TPL_I1+ 1)?>

					</td>
					<td  class="ce"><?php echo $TPL_V1["part_name"]?></td>
					
					<td  class="ce">
						<input type="button" class="SYButtonType03" value="수정" onclick="partauth_write('<?php echo $TPL_V1["cp_seq"]?>')" >
						
					</td>
					<td > </td>
					
				</tr>
<?php }}?>
			
			</tbody>
		</table>
	</div>
	
	
	
	
	<div class="btnlistarea" style="margin-top:20px">
		<div class="btnlistleft">
			&nbsp;
			<!--<input type="button" class="SYButtonSubmit03" value="순서저장" title="순서저장" onclick="order_save()"> -->
		</div>
		<div class="btnlistright">
			<!--<input type="button" class="SYButtonSubmit04" value="등록" title="등록" onclick="partauth_write()">-->
			&nbsp;
		</div>
	</div>

	

	
					  
	

						
		  
</form>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
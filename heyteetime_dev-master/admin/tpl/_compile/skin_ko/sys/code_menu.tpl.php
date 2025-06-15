<?php /* Template_ 2.2.8 2024/02/16 18:20:44 /home/agl/www/admin/_global/skin_ko/sys/code_menu.tpl 000007577 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>


<script type="text/javascript">
	$(function() {
		$('.lmenu_<?php echo $TPL_VAR["dmenu"]?>').addClass("on");
		

		
		sort_enable();

		
		
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
	

	function code_reorder(gubun, seq) {
		if(gubun == 1) {

			var frm = 'sform';
			$('#sseq').val(seq);

		}
		else {
			var frm = 'dform';
			$('#dseq').val(seq);
		}


		$('#'+frm).ajaxSubmit({
					
			dataType:  'json',
			url : 'ajax_sys.php',
			type : 'post',
			success:  function (obj) {
				var msg = decodeURIComponent(obj.msg);
				var opt_msg = decodeURIComponent(obj.opt_msg);
				
				if(obj.result == "Y") {

					alert('저장되었습니다');
				}
				else {
					alert(msg);	
					//$('#btn-popreg').attr("disabled", false);
				}
			}
		});
	}
	
	function code_menu_list(seq) {
		$.post('ajax_sys.php', { mode: 'code_menu_list', seq:seq  },
			function(json) { 
				var obj = $.parseJSON(json); 
				var msg = decodeURIComponent(obj.msg);
				var opt_msg = decodeURIComponent(obj.opt_msg);

				console.log('opt_msg='+opt_msg);
				if(obj.result == 'Y') {

					
					

					if(opt_msg =='smenu_area') {
						$('#dmenu_area').html('');
					}

					$('#'+opt_msg).html(msg);

					sort_enable();
					
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);
	}
	

	//하위메뉴 추가
	function code_menu_add(seq) {

		
		$.post('ajax_sys.php', { mode: 'form_code_menu_add', seq:seq  },
			function(json) { 
				var obj = $.parseJSON(json); 
				var msg = decodeURIComponent(obj.msg);
				var opt_msg = decodeURIComponent(obj.opt_msg);

				
				console.log('opt_msg='+opt_msg);
				if(obj.result == 'Y') {
					
					$('#popCommon').css("width", "400px");

					var html = decodeURIComponent(obj.msg);
					$('#popCommon').html(html);
					basic_script();
					viewLayer('on', 'popCommon');

					$('#cname').focus();

					
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);

	}

	//코드/카테고리 수정
	function code_menu_mod (seq) {
		
		$.post('ajax_sys.php', { mode: 'form_code_menu_mod', seq:seq },
			function(json) { 
				var obj = $.parseJSON(json); 
				var msg = decodeURIComponent(obj.msg);
				var opt_msg = decodeURIComponent(obj.opt_msg);

				
				console.log('opt_msg='+opt_msg);
				if(obj.result == 'Y') {
					
					$('#popCommon').css("width", "400px");

					var html = decodeURIComponent(obj.msg);
					$('#popCommon').html(html);
					basic_script();
					viewLayer('on', 'popCommon');

					$('#cname').focus();

					
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);

	}

	//코드 메뉴 저장
	function code_menu_save() {
		var pseq = $('#popseq').val();
		var seq = $('#popsubseq').val();
		var mode = $('#popmode').val();
		var target = $('#poptarget').val();

		var cname = $('#cname').val();
		if(cname.length < 2) {
			alert('2자이상 입력하세요');
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

					viewLayer('off', 'popCommon');
					if(target == "smenu_area") {

						$('#dmenu_area').html('');
						
					}
					else {
					}

					if(msg > '') {
						//console.log('exe msg='+msg);
						code_menu_list(msg)
					}

					code_menu_list(pseq);
					//console.log('msg='+msg);

					

				}
				else {
					alert(msg);	
					//$('#btn-popreg').attr("disabled", false);
				}
			}
		});


	}

	function code_menu_delete(seq) {
		var ans = confirm('해당 코드를 삭제하시겠습니까? 삭제시 복구할 수 없습니다.');
		if(!ans) return;

		$.post('ajax_sys.php', { mode: 'code_menu_delete', seq:seq  },
			function(json) { 
				var obj = $.parseJSON(json); 

				var msg = decodeURIComponent(obj.msg);
				if(obj.result == 'Y') {
					if(msg) {
						//console.log('exe msg='+msg);
						code_menu_list(msg)
					}
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);

	}

	function sort_enable() {
		if($('.sortable ').length > 0 ) {

			console.log('sort enable');
			$('.sortable tbody').sortable({
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
		}


		if($('.sortable2 ').length > 0 ) {

			console.log('sort enable2');
			$('.sortable2 tbody').sortable({
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
		}


	}

</script>
<style type="text/css">
	.listTitle { font-size:12px; font-weight:bold; padding:15px 0 0px 0 }
	.ui-widget input {width:50px;}	
	.intable {margin-right:20px; width:500px;}
	
</style>

<form name="schForm" id="schForm" >
	<input type="hidden" name="mode" id="mode" >

	
	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">메뉴별 관리코드</li>
			   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 메뉴별 관리코드</li>
			</ul>
	   </div>


	    
				
		
			  
</form>
<form name="listForm" id="listForm" >
</form>		
	
				
	<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px; display:flex;">

		<div class="intable" id="gmenu_area">
			<table class="SYManagerTable01">
				<tr class="Title">
					<td style="width:45px;">No.</td>
					<td style="width:65px;">대메뉴명</td>
					<td style="width:60px;">등록</td>
					
					
					
				</tr>
				<tbody>
<?php if($TPL_data_1== 0){?>
				<tr >						
				  <td colspan=10 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
				</tr>
<?php }else{?>
<?php if($TPL_data_1){$TPL_I1=-1;foreach($TPL_VAR["data"] as $TPL_V1){$TPL_I1++;?>
					<tr >						
						<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
						<td  class="ce"><?php echo $TPL_V1["cname"]?></td>
						<td  class="ce">
							<input type="button" class="SYButtonType03" value="등록" onclick="code_menu_list('<?php echo $TPL_V1["cmenu_seq"]?>')" >
							
						</td>
						
						
					</tr>
<?php }}?>
<?php }?>
				</tbody>
			</table>
		</div>

		<form name="sform" id="sform" >
			<input type="hidden" name="seq" id="sseq">
			<input type="hidden" name="mode" id="smode" value="code_menu_reorder">
			<div class="intable" id="smenu_area">
				
			</div>
		</form>


		<form name="dform" id="dform" >
			<input type="hidden" name="seq" id="dseq">
			<input type="hidden" name="mode" id="dmode" value="code_menu_reorder">
			<div class="intable" id="dmenu_area">
				
			</div>

		</form>
	</div>
	
	
					  
	

						
		  
</form>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
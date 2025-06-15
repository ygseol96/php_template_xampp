<?php /* Template_ 2.2.8 2024/02/16 08:59:08 /home/agl/www/admin/_global/skin_ko/account/acnt_plan_detail_view.tpl 000009300 */ 
$TPL_sale_1=empty($TPL_VAR["sale"])||!is_array($TPL_VAR["sale"])?0:count($TPL_VAR["sale"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	<style type="text/css">
		table.SYManagerTable01 tr:hover td {
			background-color: rgb(0,0,0,0);
			
		}
	</style>
	<script type="text/javascript">

		$(function() {
			
		});

		

		function prd_setup_save() {

			
			var client_nm = $('#client_nm').val();
			if(!client_nm) {
				alert('채널명을 입력하세요');
				$('#client_nm').focus();
				return;
				
			}


			$('#iform').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_account.php',
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

		function form_channel_insert(seq) {
			if(seq) {
				var submode = "channel_update";
			}
			else {
				var submode = "channel_insert";
			}
			


			$('#popCommon').css("width", "400px");

			$.post('ajax_account.php', { mode: 'form_channel_insert', submode:submode,  subseq:seq, seq:$('#seq').val() },
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


		function channel_save() {

			var sname = $('#sname').val();
			if(sname.length < 2) {
				alert('채널명은 2자이상입니다.');
				$('#sname').focus();
				return;
			}

			var mode = $('#popmode').val();
			var popseq = $('#popseq').val();
			var popsubseq = $('#popsubseq').val();


			$.post('ajax_account.php', { mode: mode, popseq:popseq,  popsubseq:popsubseq, sname:sname },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						document.location.reload();

						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);	

		}

		function sale_write(sseq) {
			var pay_date = $('#pay_date_'+sseq).val();
			var pay_price = $('#pay_price_'+sseq).val();
			var pay_memo = $('#pay_memo_'+sseq).val();

			if(!pay_date) {
				alert('매출일자를 입력하세요');
				$('#pay_date_'+sseq).focus();
				return;
			}

			if(!pay_price) {
				alert('매출액을 입력하세요');
				$('#pay_price_'+sseq).focus();
				return;
			}


			$.post('ajax_account.php', { mode: 'channel_sale_insert', sseq:sseq,  pay_date:pay_date, pay_price:pay_price, pay_memo:pay_memo },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						document.location.reload();

						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);	

		}

		function sale_delete(sale_seq) {
			var ans = confirm('매출정보를 삭제하시겠습니까?');
			if(!ans) return;

			$.post('ajax_account.php', { mode: 'channel_sale_delete', sale_seq:sale_seq },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						document.location.reload();

						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);	

		}

		function channel_delete(sseq) {
			var ans = confirm('채널정보를 삭제하시겠습니까? 삭제시 입력된 매출정보도 함께 삭제됩니다.');
			if(!ans) return;

			$.post('ajax_account.php', { mode: 'channel_delete', sseq:sseq },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						document.location.reload();

						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);	
		}

		function form_sale_modify(pseq) {

			$('#popCommon').css("width", "400px");

			$.post('ajax_account.php', { mode: 'form_channel_sale_update',   pseq:pseq, seq:$('#seq').val() },
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

		function sale_update() {

			var pseq = $('#popsubseq').val()

			var pay_date = $('#pay_date').val();
			var pay_price = $('#pay_price').val();
			var pay_memo = $('#memo').val();

			if(!pay_date) {
				alert('매출일자를 입력하세요');
				$('#pay_date').focus();
				return;
			}

			if(!pay_price) {
				alert('매출액을 입력하세요');
				$('#pay_price').focus();
				return;
			}


			$.post('ajax_account.php', { mode: 'channel_sale_update', pseq:pseq,  pay_date:pay_date, pay_price:pay_price, pay_memo:pay_memo },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						document.location.reload();

						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);	
		}

		function view_channel_sale(cseq) {
			var seq = $('#seq').val();
			var url = 'acnt_plan_detail_view.html?seq='+cseq;
			window.open(url);

		}

		

		

		
	</script>
	<style type="text/css">
		.SYWirteTable td.Title {height:40px;}
	</style>
	
	
	<form name="schForm" id="schForm" >
		<input type="hidden" name="mode" id="mode" >
		<input type="hidden" name="seq" id="seq" value="<?php echo $_REQUEST["seq"]?>">
	
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> <?php echo $TPL_VAR["grp"]["gname"]?> > <?php echo $TPL_VAR["data"]["sname"]?>  </li>
				   <li id="SYMenuNavi" class="Navi">회계관리 > 매출 > 그룹별 목표 매출 > <?php echo $TPL_VAR["grp"]["gname"]?> 상세 > <?php echo $TPL_VAR["data"]["sname"]?></li>
				</ul>
			</div>
		
			<div class="SYSearchBox01" >
				<div class="TitleBar" >
					<ul>
						<li class="Left">
							<span class="Title">검색 전체</span> : <span id="intTotalCountID" class="Number"><?php echo $TPL_sale_1?></span>건
							


						</li>
						<li class="Right" style='width:550px'>
							
						</li>
						
					</ul>
				</div>
			
				<div style="position:relative;padding:10px; border:1px solid #ddd;"  >
					<ul >
						<li >	
							
							
							년월
							<input type="text" name="s_sdate" id="s_sdate" class="SYInputStyle01 monthpicker" style="width:80px;" value="<?php echo $_REQUEST["s_sdate"]?>" id="s_sdate" placeholder="시작일시" autocomplete="off">
							
							
							<span class="bar">|</span>
							
							<input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
							
						</li>
						  
					</ul>
				</div>
			</div>
	</form>
	<form name="listForm" id="listForm" >
			<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
				<table class="MWManagerTable01">
					<tr class="Title">
						<td style="width:200px;">매출일자</td>
						<td style="width:200px;">매출액</td>
						<td style="width:200px;">메모</td>
						<td style="width:200px;">등록자</td>
						
						<td style="width:60px;">수정</td>
						<td style="width:60px;">삭제</td>
						<td ></td>
						
						
					</tr>
					<tbody>
<?php if($TPL_sale_1== 0){?>
					<tr >						
					  <td colspan=10 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
					</tr>
<?php }else{?>
<?php if($TPL_sale_1){foreach($TPL_VAR["sale"] as $TPL_V1){?>
					
								
					<tr >						
					  <td  class="ce"><?php echo $TPL_V1["pay_date"]?></td>
					  <td  class="ce"><?php echo number_format($TPL_V1["pay_price"])?></td>
					  <td  class="ce"><?php echo $TPL_V1["memo"]?></td>
					  <td  class="ce"><?php echo $TPL_V1["adm_name"]?></td>
					  <td  class="ce"><input type="button" class="SYButtonType03" onclick="form_sale_modify('<?php echo $TPL_V1["chp_seq"]?>')" value="수정" ></td>
					  <td  class="ce"><input type="button" class="SYButtonDelete01" onclick="sale_delete('<?php echo $TPL_V1["chp_seq"]?>')" ></td>
					</tr>
<?php }}?>
					<tr>
						<td class="ce bgRed" >합계</td>
						<td class="ce bgRed" ><?php echo number_format($TPL_VAR["sum_price"])?></td>
						<td class="ce bgRed"> </td>
						<td class="ce bgRed"> </td>
						<td class="ce bgRed"> </td>
						<td class="ce bgRed"> </td>
					</tr>
<?php }?>
						
				</tbody>
								
				</table>
			</div>
		


			<div class="btnlistarea" style="margin-top:20px; ">
				<div class="btnlistleft" >
					&nbsp;
					
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
		<img src="/_global/img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
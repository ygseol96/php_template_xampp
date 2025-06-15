<?php /* Template_ 2.2.8 2024/02/16 08:59:08 /home/agl/www/admin/_global/skin_ko/account/acnt_plan_detail.tpl 000018212 */ 
$TPL_channel_1=empty($TPL_VAR["channel"])||!is_array($TPL_VAR["channel"])?0:count($TPL_VAR["channel"]);?>
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

		function form_sale_month_insert(seq) {

			$('#popCommon').css("width", "600px");

			$.post('ajax_account.php', { mode: 'form_sale_month_insert', subseq:seq, seq:$('#seq').val() },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						var html = decodeURIComponent(obj.msg);
						$('#popCommon').html(html);
						basic_script();
						viewLayer('on', 'popCommon');

						if($('#price1').length > 0 ) {
							$('#price1').focus();

						}

						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}

		function channel_sale_month_save() {

			$('#popForm').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_account.php',
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

		function pop_chg_sdate(newdate) {
			//console.log('newdate='+newdate);
			if(!newdate) return;

			$.post('ajax_account.php', { mode: 'set_channel_sale_newdate', newdate:newdate },
				function(json) { 
					var obj = $.parseJSON(json);
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {
						//document.location.reload();

						$('#layer_sale_month').html(msg);
						basic_script();

						
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

		function acnt_plan_save() {

			var seq = $('#seq').val();

			var m1 = $('#m1').val();
			var m2 = $('#m2').val();
			var m3 = $('#m3').val();
			var m4 = $('#m4').val();
			var m5 = $('#m5').val();
			var m6 = $('#m6').val();
			var m7 = $('#m7').val();
			var m8 = $('#m8').val();
			var m9 = $('#m9').val();
			var m10 = $('#m10').val();
			var m11 = $('#m11').val();
			var m12 = $('#m12').val();

			var post_data = m1+'|'+m2+'|'+m3+'|'+m4+'|'+m5+'|'+m6+'|'+m7+'|'+m8+'|'+m9+'|'+m10+'|'+m11+'|'+m12;


			$.post('ajax_account.php', { mode: 'acnt_plan_update', seq:seq , post_data: post_data },
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
				   <li id="SYMenuTitle" class="Title"> <?php echo $TPL_VAR["grp"]["gname"]?> - 목표 매출 상세  </li>
				   <li id="SYMenuNavi" class="Navi">회계관리 > 매출 > 그룹별 목표 매출 > <?php echo $TPL_VAR["grp"]["gname"]?> 상세</li>
				</ul>
			</div>

			<h1 class="main_h1"><?php echo $TPL_VAR["grp"]["gname"]?> - 목표매출 정보 (<?php echo $TPL_VAR["sale"]["pyear"]?>)</h1>

			<table class="SYWirteTable" style="margin-top:10px">
				<!--
				<colgroup>
					<col style="width:120px">
					<col style="width:280px">
					<col style="width:150px">
					<col style="width:300px">
					<col>
				</colgroup>
				-->
				
				<tr>
					<td class="Title ce" >1월 </td> 
					<td class="Title ce" >2월 </td> 
					<td class="Title ce" >3월 </td> 
					<td class="Title ce" >4월 </td> 
					<td class="Title ce" >5월 </td> 
					<td class="Title ce" >6월 </td> 
					<td class="Title ce" >7월 </td> 
					<td class="Title ce" >8월 </td> 
					<td class="Title ce" >9월 </td> 
					<td class="Title ce" >10월 </td> 
					<td class="Title ce" >11월 </td> 
					<td class="Title ce" >12월 </td> 
					<td></td>
				</tr>
				<tr>
					
					<td class="Content"  >
						<input type="text" name="m1" id="m1" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m1"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m2" id="m2" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m2"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m3" id="m3" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m3"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m4" id="m4" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m4"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m5" id="m5" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m5"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m6" id="m6" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m6"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m7" id="m7" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m7"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m8" id="m8" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m8"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m9" id="m9" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m9"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m10" id="m10" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m10"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m11" id="m11" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m11"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>
					<td class="Content"  >
						<input type="text" name="m12" id="m12" class="SYInputStyle02 Comma"  value="<?php echo number_format($TPL_VAR["sale"]["m12"], 0)?>"  autocomplete="off"  style="width:100px" >
					</td>

					<td></td>
				</tr>
				
			</table>
		

			<div class="btnlistarea" style="margin-top:20px; ">
				<div class="btnlistleft" >
					&nbsp;
					<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="acnt_plan_save()">
					
					<!--
					<input type="button" class="SYButtonBack04" value="목록으로" title="목록으로" onclick="golist()" id="btn-list">
					<input type="button" class="SYButtonBack04" value="닫기" title="닫기" onclick="self.close()" id="btn-close">
					-->
<?php if($TPL_VAR["grp"]["input_gubun"]!='sugi'){?>
					<input type="button" class="SYButtonBack04" value="닫기" title="닫기" onclick="self.close()" id="btn-close">
<?php }?>
				</div>
				<div class="btnlistright">
					&nbsp;

				</div>
			</div>
		
		</form>

		

<?php if($TPL_VAR["grp"]["input_gubun"]=='sugi'){?>
		<form name="form2" id="form2">
			<input type="hidden" name="mode" id="mode" value="channel_list" />

			<h1 class="main_h1" style="margin-top:30px"><?php echo $TPL_VAR["grp"]["gname"]?> - 채널 정보 </h1>
			<div id="SYBoardBox" class="SYManagerTable" style="margin-top:20px">
				<table class="MWManagerTable01">
					<tr class="Title">
						<td style="width:200px;">채널명</td>
						
						<td style="width:60px;">수정</td>
						<td style="width:60px;">삭제</td>
						<td style="width:70px;">매출정보보기</td>
						<td style="width:70px;">매출일괄입력</td>
						<td style="width:380px;">매출입력</td>
						<td >이번달 매출내역 </td>
						
						
					</tr>
					<tbody>
<?php if($TPL_channel_1== 0){?>
					<tr >						
					  <td colspan=10 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
					</tr>
<?php }else{?>
<?php if($TPL_channel_1){foreach($TPL_VAR["channel"] as $TPL_V1){
$TPL_item_2=empty($TPL_V1["item"])||!is_array($TPL_V1["item"])?0:count($TPL_V1["item"]);?>
						<tr >						
							<td  class="ce"><?php echo $TPL_V1["sname"]?></td>
							
							<td  class="ce">
								<input type="button" class="SYButtonType03" value="수정" onclick="form_channel_insert('<?php echo $TPL_V1["ach_seq"]?>')" >
							</td>
							<td  class="ce">
								<input type="button" class="SYButtonDelete01" onclick="channel_delete('<?php echo $TPL_V1["ach_seq"]?>')" >
							</td>
							<td  class="ce">
								<input type="button" class="SYButtonType03" value="보기" onclick="view_channel_sale('<?php echo $TPL_V1["ach_seq"]?>')" >
							</td>
							<td  class="ce">
								<input type="button" class="SYButtonType05" value="일괄등록" onclick="form_sale_month_insert('<?php echo $TPL_V1["ach_seq"]?>')" >
							</td>
							<td  class="ce">
								<input type="text" name="pay_date_<?php echo $TPL_V1["ach_seq"]?>" id="pay_date_<?php echo $TPL_V1["ach_seq"]?>" class="SYInputStyle01 datepicker" style="width:80px;" value="<?php echo date('Y-m-d')?>" placeholder="매출일자" autocomplete="off">
								<input type="text" name="pay_price_<?php echo $TPL_V1["ach_seq"]?>" id="pay_price_<?php echo $TPL_V1["ach_seq"]?>" class="SYInputStyle02 Comma" style="width:80px;" value="" placeholder="매출액(KRW)" autocomplete="off">

								<input type="text" name="pay_memo_<?php echo $TPL_V1["ach_seq"]?>" id="pay_memo_<?php echo $TPL_V1["ach_seq"]?>" class="SYInputStyle02" style="width:120px;" value="" placeholder="매출메모" autocomplete="off">
								<input type="button" class="SYButtonType02" value="등록" onclick="sale_write('<?php echo $TPL_V1["ach_seq"]?>')" >
							</td>
							<td > 
								<table class="MWManagerTable01">
									<tr class="Title">
										<td style="width:70px;">매출일자</td>
										<td style="width:100px;">매출액</td>
										<td style="width:250px;">매출내용</td>
										<td style="width:60px;">등록자</td>
										<td style="width:60px;">수정</td>
										<td style="width:60px;">삭제</td>
										<td> </td>
									</tr>
									<tbody id="view_sale_list_detail_<?php echo $TPL_V1["ach_seq"]?>">
<?php if($TPL_item_2== 0){?>
										<tr >						
										  <td colspan=6 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
										</tr>
<?php }else{?>
<?php if($TPL_item_2){foreach($TPL_V1["item"] as $TPL_V2){?>
										<tr >						
										  <td  class="ce"><?php echo $TPL_V2["pay_date"]?></td>
										  <td  class="ce"><?php echo number_format($TPL_V2["pay_price"])?></td>
										  <td  class="ce"><?php echo $TPL_V2["memo"]?></td>
										  <td  class="ce"><?php echo $TPL_V2["adm_name"]?></td>
										  <td  class="ce"><input type="button" class="SYButtonType03" onclick="form_sale_modify('<?php echo $TPL_V2["chp_seq"]?>')" value="수정" ></td>
										  <td  class="ce"><input type="button" class="SYButtonDelete01" onclick="sale_delete('<?php echo $TPL_V2["chp_seq"]?>')" ></td>
										</tr>
<?php }}?>
										<tr>
											<td class="ce bgRed" >합계</td>
											<td class="ce bgRed" ><?php echo number_format($TPL_V1["sum_price"])?></td>
											<td class="ce bgRed"> </td>
											<td class="ce bgRed"> </td>
											<td class="ce bgRed"> </td>
											<td class="ce bgRed"> </td>
										</tr>
<?php }?>
											
									</tbody>
								</table>	
							</td>
						</tr>
<?php }}?>
<?php }?>
					</tbody>
				</table>
			</div>
		


			<div class="btnlistarea" style="margin-top:20px; ">
				<div class="btnlistleft" >
					&nbsp;
					<input type="button" class="SYButtonSubmit04" value="채널등록" onclick="form_channel_insert()">
					<!--
					<input type="button" class="SYButtonBack04" value="목록으로" title="목록으로" onclick="golist()" id="btn-list">-->
					<input type="button" class="SYButtonBack04" value="닫기" title="닫기" onclick="self.close()" id="btn-close">
					
				</div>
				<div class="btnlistright">
					&nbsp;

				</div>
			</div>

			
<?php }?>

  </div>
  </div>
	 

	
</div>
<div id="popLayer" class="popLayer" style="width:450px">

	<div style="text-align:center; padding:20px">
		<img src="/_global/img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
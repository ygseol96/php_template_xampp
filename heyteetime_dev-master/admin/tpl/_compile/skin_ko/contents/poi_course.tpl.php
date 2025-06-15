<?php /* Template_ 2.2.8 2024/02/23 17:21:58 /home/agl/www/admin/_global/skin_ko/contents/poi_course.tpl 000011396 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);
$TPL_course_1=empty($TPL_VAR["course"])||!is_array($TPL_VAR["course"])?0:count($TPL_VAR["course"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	
	<script type="text/javascript">

		$(function() {
			
		});
		

		function serial_input(id, data, tseq) {
			//var seq = $('#cseq').val();
			
			var temp = data.split("\t");
			
			var check = /^[0-9]+$/; 

			


			for(i=0; i <18; i++) {
				var no = i+1;

				if(id == 'hole') {
					var idx = tseq +'_'+id+no;
				}
				else if(id == 'par') {
					var idx = tseq +'_'+'hole'+no+'_par';
				}
				else if(id == 'handi') {
					var idx = tseq +'_'+'hole'+no+'_handicap';
				}

				
				var data = temp[i];
				if(data > '' && check.test(data) ){
					$('#'+idx).val(temp[i]);
				}
			}

			calc_serial_sum( id, tseq)

		}


		function serial_input2(id, data, tseq) {
			//var seq = $('#cseq').val();
			
			var temp = data.split("\t");
			
			var check = /^[0-9]+$/; 

			


			for(i=0; i <9; i++) {
				var no = i+10;

				if(id == 'hole') {
					var idx = tseq +'_'+id+no;
				}
				else if(id == 'par') {
					var idx = tseq +'_'+'hole'+no+'_par';
				}
				else if(id == 'handi') {
					var idx = tseq +'_'+'hole'+no+'_handicap';
				}

				
				var input_data = temp[i];
				if(input_data > '' && check.test(input_data) ){
					$('#'+idx).val(temp[i]);
				}
			}

			calc_serial_sum( id, tseq)

		}

		function calc_serial_sum( gubun, tseq) {

			var sum=0;

			var sum1_idx = "sum1_"+gubun+"_"+tseq;
			var sum2_idx = "sum2_"+gubun+"_"+tseq;
			
			



			var sum1 = 0;
			
			for(i=1; i <=9; i++ ) {

				if(gubun == 'hole') {
					var obj_nm = tseq+"_"+gubun+ i;
				}
				else if(gubun == 'par') {
					var obj_nm = tseq+"_hole"+ i+"_par";
				}
				else if(gubun == 'handi') {
					var obj_nm = tseq+"_hole"+ i+"_handicap";
				}

				
				if( parseInt($('#'+obj_nm).val()) > 0 ) {
					sum1 += parseInt($('#'+obj_nm).val());
					
				}
				

			}

			$('#'+sum1_idx).html(sum1);


			var sum2 = 0;
			
			for(i=10; i <=18; i++ ) {

				if(gubun == 'hole') {
					var obj_nm = tseq+"_"+gubun+ i;
				}
				else if(gubun == 'par') {
					var obj_nm = tseq+"_hole"+ i+"_par";
				}
				else if(gubun == 'handi') {
					var obj_nm = tseq+"_hole"+ i+"_handicap";
				}

				
				if( parseInt($('#'+obj_nm).val()) > 0 ) {
					sum2 += parseInt($('#'+obj_nm).val());
					
				}
				


			}

			$('#'+sum2_idx).html(sum2);

			var total_sum = sum1 + sum2;

			var total_idx = 'sum_'+gubun+'_'+tseq;

			$('#'+total_idx).html(total_sum);

			//$('#total_tee_'+tseq).val(total_sum);


		}

		function poi_course_write(subseq) {
			var seq = $('#seq').val();

			$('#popCommon').css("width", "800px");

			$.post('ajax_contents.php', { mode: 'form_poi_course', seq:seq, subseq:subseq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						var html = decodeURIComponent(obj.msg);
						$('#popCommon').html(html);
						basic_script();
						viewLayer('on', 'popCommon');

						if(!subseq) {
							$('#course_nm').focus();
						}

						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}

		function poi_course_save() {

			var course_nm = $('#course_nm').val();

			if(course_nm.length < 2) {
				alert('코스명은 2자이상 입니다.');
				$('#course_nm').focus();
				return;
			}

			var holes = $('#holes').val();

			if(holes.length < 1) {
				alert('홀수를 입력하세요.');
				$('#holes').focus();
				return;
			}

			var par = $('#par').val();

			if(par.length < 1) {
				alert('Par수를 입력하세요.');
				$('#par').focus();
				return;
			}

			var popmode = $('#popmode').val();




			$('#popForm').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_contents.php',
				type : 'post',
				success:  function (obj) {
					var msg = decodeURIComponent(obj.msg);
					var opt_msg = decodeURIComponent(obj.opt_msg);
					
					if(obj.result == "Y") {
						document.location.reload();
					}
					else {
						alert(msg);	
						//$('#btn-popreg').attr("disabled", false);
					}
				}
			});
		}

		function poi_course_del(seq) {
			var ans = confirm('해당 코스를 삭제하시겠습니까?');
			if(!ans) return;

			$.post('ajax_contents.php', { mode: 'poi_course_delete', seq:seq},
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

		function poi_course_copy(seq) {


			$.post('ajax_contents.php', { mode: 'poi_course_copy', seq:seq},
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




		function tee_list(seq) {

			$.post('ajax_contents.php', { mode: 'poi_tee_list', seq:seq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						var html = decodeURIComponent(obj.msg);
						$('#layer_tee').html(html);
						basic_script();
						
						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}
		


		function poi_tee_add () {
			var cseq = $('#cseq').val();
			//console.log('cseq='+cseq);

			$.post('ajax_contents.php', { mode: 'poi_tee_insert', cseq:cseq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						tee_list(cseq);
						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}

		function poi_tee_write(tseq) {
			var frm = "frm_"+tseq;

			$('#'+ frm).ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_contents.php',
				type : 'post',
				success:  function (obj) {
					var msg = decodeURIComponent(obj.msg);
					var opt_msg = decodeURIComponent(obj.opt_msg);
					
					if(obj.result == "Y") {
						alert('저장되었습니다.');
					}
					else {
						alert(msg);	
						//$('#btn-popreg').attr("disabled", false);
					}
				}
			}); 


		}

		function poi_tee_del (tseq) {
			
			var ans = confirm('해당 Tee 를 삭제하시겠습니까?');
			if(!ans) return;


			

			$.post('ajax_contents.php', { mode: 'poi_tee_delete', tseq:tseq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						var id = "frm_"+tseq;
						$('#'+id).fadeOut();
						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);


		}


		function poi_tee_copy(tseq) {
			var cseq = $('#cseq').val();

			$.post('ajax_contents.php', { mode: 'poi_tee_copy', tseq:tseq},
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						tee_list(cseq);
						
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

			

	

			<h1 class="main_h1">코스정보 <input type="button" class="SYButtonType03" value="등록" onclick="poi_course_write()" ></h1>

			<table class="SYManagerTable01" style="margin-top:10px">
				<tr class="Title">
					<td style="width:45px;">No.</td>
					<td >코스명</td>
					<td style="width:50px;">Hole </td>
					<td style="width:50px;">Par </td>
					<td style="width:120px;">코스타입</td>

					<td style="width:100px;">페어웨이</td>
					<td style="width:100px;">그린</td>
					<td style="width:50px;">게스트</td>
					<td style="width:50px;">통화</td>
					<td style="width:80px;">주중요금</td>
					<td style="width:80px;">주말요금</td>

					<td style="width:80px;">야간요금</td>
					<td style="width:70px;">수정일</td>
					<td style="width:50px;">사용여부</td>
					<td style="width:50px;">노출여부</td>
					
					<td style="width:50px;">수정</td>
					<td style="width:50px;">삭제</td>
					<td style="width:50px;">복사</td>
					<td style="width:70px;">Tee</td>
					
					
					
				</tr>
				<tbody>
<?php if($TPL_course_1== 0){?>
				<tr >						
				  <td colspan=16 class="ce">-+- 검색된 내용이 없습니다. -+-</td>
				</tr>
<?php }else{?>
<?php if($TPL_course_1){$TPL_I1=-1;foreach($TPL_VAR["course"] as $TPL_V1){$TPL_I1++;?>
					<tr >						
						<td  class="ce"><?php echo ($TPL_I1+ 1)?></td>
						<td  class="ce"><?php echo $TPL_V1["course_nm"]?></td>
						<td  class="ce"><?php echo $TPL_V1["holes"]?></td>
						<td  class="ce"><?php echo $TPL_V1["par"]?></td>
						<td  class="ce"><?php echo $TPL_V1["course_type"]?></td>

						<td  class="ce"><?php echo $TPL_V1["fairway"]?></td>
						<td  class="ce"><?php echo $TPL_V1["green"]?></td>
						<td  class="ce"><?php echo $TPL_V1["guest_open_yn"]?></td>
						<td  class="ce"><?php echo $TPL_V1["currency"]?></td>
						<td  class="ce"><?php echo $TPL_V1["weekday_price"]?></td>
						<td  class="ce"><?php echo $TPL_V1["weekend_price"]?></td>

						<td  class="ce"><?php echo $TPL_V1["twilight_price"]?></td>
						<td  class="ce"><?php echo $TPL_V1["moddt"]?>	</td>
						<td  class="ce"><?php echo $TPL_V1["use_yn_txt"]?></td>
						<td  class="ce"><?php echo $TPL_V1["view_yn_txt"]?></td>
						
						<td  class="ce">
							<input type="button" class="SYButtonType03" value="수정" onclick="poi_course_write('<?php echo $TPL_V1["poi_cseq"]?>')" >
						</td>
						<td  class="ce">
							<input type="button" class="SYButtonDelete01" onclick="poi_course_del('<?php echo $TPL_V1["poi_cseq"]?>')" >
						</td>
						<td  class="ce">
							<input type="button" class="SYButtonType03 bgRed" value="복사" onclick="poi_course_copy('<?php echo $TPL_V1["poi_cseq"]?>')" >
						</td>
						<td  class="ce">
							<input type="button" class="SYButtonType05" value="Tee <?php echo $TPL_V1["tee_cnt"]?>개" onclick="tee_list('<?php echo $TPL_V1["poi_cseq"]?>')" >
							
						</td>
						
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
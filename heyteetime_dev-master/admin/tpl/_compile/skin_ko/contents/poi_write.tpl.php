<?php /* Template_ 2.2.8 2024/02/22 14:06:53 /home/agl/www/admin/_global/skin_ko/contents/poi_write.tpl 000026046 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

	
	<script type="text/javascript">

		$(function() {

			var schtags = [
				<?php echo $TPL_VAR["keyword"]["nation"]?>

			];
			$( "#input_nat_cd" ).autocomplete({
			  source: schtags
			});

			
		});
		

		function chg_nat_cd() {
			$('#view_nat_cd').css("color","red");
			$('#view_nat_cd').html("미매칭");
			$('#chk_nat_cd').val('N');
		}

		function fchk_nat_cd() {
			var nat_cd = $('#input_nat_cd').val();

			$.post('/inc/ajax_common.php', { mode: 'chk_nat_cd', nat_cd:nat_cd  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {
						$('#view_nat_cd').css("color","blue");
						$('#view_nat_cd').html("사용가능");
						$('#chk_nat_cd').val('Y');
						$('#nat_cd').val(msg);

						init_with_nation();


					}
					else {
						//alert(decodeURIComponent(obj.msg));
						$('#view_nat_cd').css("color","red");
						$('#view_nat_cd').html("미매칭");
						$('#chk_nat_cd').val('N');
						
						
					}
					
				}
			);


		}


		function init_with_nation() {
			init_state();
			init_city();
			init_airport();
			init_nation_phone();
		}


		function init_state() {
			var nat_cd = $('#nat_cd').val();

			$.post('ajax_contents.php', { mode: 'init_poi_state', nat_cd:nat_cd  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {
						msg = '<option value="">== 옵션선택 ==</option>' + msg;
						$('#state_cd').html(msg);

					}
					else {
						alert(decodeURIComponent(obj.msg));
						
						
						
					}
					
				}
			);
		}


		function init_city() {
			var nat_cd = $('#nat_cd').val();

			$.post('ajax_contents.php', { mode: 'init_poi_city', nat_cd:nat_cd  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {
						msg = '<option value="">== 옵션선택 ==</option>' + msg;
						$('#city_code').html(msg);

					}
					else {
						alert(decodeURIComponent(obj.msg));
						
						
						
					}
					
				}
			);
		}


		function init_airport() {
			var nat_cd = $('#nat_cd').val();

			$.post('ajax_contents.php', { mode: 'init_poi_airport', nat_cd:nat_cd  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {
						msg = '<option value="">== 옵션선택 ==</option>' + msg;
						$('#airport_code').html(msg);

					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}


		function init_nation_phone() {
			var nat_cd = $('#nat_cd').val();

			$.post('ajax_contents.php', { mode: 'init_poi_nation_phone', nat_cd:nat_cd  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {
						msg = '<option value="">== 옵션선택 ==</option>' + msg;
						$('#phone_head').html(msg);
						$('#fax_head').html(msg);

					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}

		function chg_state_cd () {
		}

		function goout_url(obj) {
			var url = $('#'+obj).val();

			if(url > '' ) {
				window.open(url);
			}
		}
		

		function poi_save() {

			
			
			var nat_cd = $('#nat_cd').val();

			if(nat_cd.length < 2 ) {
				alert('국가코드를 입력하세요.');
				return;		
			}
			


			var club_nm = $('#club_nm').val();
			if(!club_nm) {
				alert('골프장명 한글을 입력하세요');
				$('#club_nm').focus();
				return;
				
			}

			if($('#dist_airport').val().length > 0 ) {
				var airport_code = $('#airport_code option:selected').val();
				if(!airport_code) {
					alert('공항으로부터의 거리를 입력시에는 공항코드는 필수 입니다.');
					$('#airport_code').focus();
					return;
				}
			}

			if($('#phone_tail').val().length > 0 ) {
				var phone_head = $('#phone_head option:selected').val();
				if(!phone_head) {
					alert('전화번호 입력시 앞에 국가통신코드는 필수 입니다.');
					$('#phone_head').focus();
					return;
				}
			}

			if($('#fax_tail').val().length > 0 ) {
				var fax_head = $('#fax_head option:selected').val();
				if(!fax_head) {
					alert('팩스 입력시 앞에 국가통신코드는 필수 입니다.');
					$('#fax_head').focus();
					return;
				}
			}

			if($('#email').val().length > 0 ) {

				if(!emailcheck($('#email').val()) ) {
					alert('공식이메일주소가 유효하지 않습니다.');
					$('#email').focus();
					return;
				}
			}

			if($('#contact_email').val().length > 0 ) {

				if(!emailcheck($('#contact_email').val()) ) {
					alert('담당자 이메일주소가 유효하지 않습니다.');
					$('#contact_email').focus();
					return;
				}
			}


			$('#iform').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_contents.php',
				type : 'post',
				success:  function (obj) {
					var msg = decodeURIComponent(obj.msg);
					var opt_msg = decodeURIComponent(obj.opt_msg);
					
					if(obj.result == "Y") {
						var editmode = $('#editmode').val();

						if(editmode == "poi_insert") {
							location.href = "poi_facil.html?seq="+ msg;
						}
						else {
							alert('저장되었습니다.');
							document.location.reload();
						}
					}
					else {
						alert(msg);	
						//$('#btn-popreg').attr("disabled", false);
					}
				}
			});

		}

		

		

		
	</script>
	<style type="text/css">
		.SYWirteTable td.Title {height:20px;}
	</style>
	
	<form name="iform" id="iform">
		<input type="hidden" name="mode" id="editmode" value="<?php echo $TPL_VAR["editmode"]?>" />
		<input type="hidden" name="seq" id="seq" value="<?php echo $_REQUEST["seq"]?>" />
		<input type="hidden" name="chk_nat_cd" id="chk_nat_cd" value="<?php echo $TPL_VAR["data"]["chk_nat_cd"]?>" />
		
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> POI <?php if($TPL_VAR["editmode"]=="poi_update"){?>상세  - <?php echo $TPL_VAR["data"]["club_nm"]?><?php }else{?>등록<?php }?></li>
				   <li id="SYMenuNavi" class="Navi">Contents관리 > POI > POI 정보 > 상세</li>
				</ul>
			</div>

<?php $this->print_("poi_tab",$TPL_SCP,1);?>

			

			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:120px">
					<col style="width:300px">
					<col style="width:120px">
					<col style="width:300px">
					<col style="width:170px">
					
					<col>
				</colgroup>
				
				<tr>
					<td class="Title" >POI 고유번호 </td> 
					<td class="Content"  >
<?php if($TPL_VAR["editmode"]=="poi_insert"){?>
						<p class="Tip" > 자동생성</p>
<?php }else{?>
						<?php echo $TPL_VAR["data"]["poi_seq"]?>

<?php }?>

						
					</td>
					<td class="Title" >W/L 코드 </td> 
					<td class="Content"  >
						<input type="text" name="code_wl" id="code_wl" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["code_wl"]?>"  autocomplete="off">
						<p class="Tip01" > * W/L 에서 사용하는 Field ID</p>
						
					</td>

					<td class="Title" >GDS 코드 </td> 
					<td class="Content"  >
						<input type="text" name="code_gds" id="code_gds" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["code_gds"]?>"  autocomplete="off">
						<p class="Tip01" > * GDS 2.0 에서 사용하는 골프장ID</p>
						
					</td>
					
				</tr>
				<tr>
					
					<td class="Title" >국가코드 *</td> 
					<td class="Content"  >
						<!--
						<select name="nat_cd" id="nat_cd" class="SYSelectBox01" onchange="chg_nat_cd(this.value)">
							<?php echo selectOption(select_nation(),$TPL_VAR["data"]["nat_cd"],'db')?>

						</select>
						-->
						<input type="text" name="input_nat_cd" id="input_nat_cd" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["input_nat_cd"]?>"  autocomplete="off" onkeyup="chg_nat_cd()">

						<input type="hidden" name="nat_cd" id="nat_cd" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["nat_cd"]?>"  autocomplete="off">

						<input type="button" class="SYButtonType03" value="확인" onclick="fchk_nat_cd()" >

						<span id="view_nat_cd" style="<?php if($TPL_VAR["data"]["nat_cd"]>''){?>color:blue<?php }?>"><?php if($TPL_VAR["data"]["nat_cd"]>''){?>사용가능<?php }?>
						</span>

						<p class="Tip01" > * 변경시 확인클릭!</p>
					</td>
					<td class="Title" >지역코드</td> 
					<td class="Content"  >
						<select name="state_cd" id="state_cd" class="SYSelectBox01" onchange="chg_state_cd(this.value)">
							<option value="">== 옵션선택 ==</option>
							<?php echo selectOption(select_state($TPL_VAR["data"]["nat_cd"]),$TPL_VAR["data"]["state_cd"],'db')?>

						</select>
						
					</td>

					<td class="Title" >도시코드 /공항코드<br>(공항까지 거리/분) </td> 
					<td class="Content"  >
						<select name="city_code" id="city_code" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							<?php echo selectOption(select_city($TPL_VAR["data"]["nat_cd"]),$TPL_VAR["data"]["city_code"],'db')?>

						</select>
						/

						<select name="airport_code" id="airport_code" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							<?php echo selectOption(select_airport($TPL_VAR["data"]["nat_cd"]),$TPL_VAR["data"]["airport_code"],'db')?>

						</select>
						
						(
						<input type="text" name="dist_airport" id="dist_airport" class="SYInputStyle02 floatOnly"  value="<?php echo $TPL_VAR["data"]["dist_airport"]?>"  autocomplete="off" style="width:60px">km
						<input type="text" name="min_airport" id="min_airport" class="SYInputStyle02 floatOnly"  value="<?php echo $TPL_VAR["data"]["min_airport"]?>"  autocomplete="off" style="width:60px">분
						)


						
					</td>
					
				</tr>
				<tr>
					<td class="Title" >전화번호 </td> 
					<td class="Content"  >

						<select name="phone_head" id="phone_head" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							<?php echo selectOption(select_nation_phone($TPL_VAR["data"]["nat_cd"]),$TPL_VAR["data"]["np_seq"],'db')?>

						</select>
						<input type="text" name="phone_tail" id="phone_tail" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["phone_tail"])?>"  autocomplete="off" style="width:150px">

					</td>
					<td class="Title" >팩스</td> 
					<td class="Content"  >
						<select name="fax_head" id="fax_head" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							<?php echo selectOption(select_nation_phone($TPL_VAR["data"]["nat_cd"]),$TPL_VAR["data"]["np_seq_fax"],'db')?>

						</select>
						<input type="text" name="fax_tail" id="fax_tail" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["fax_tail"])?>"  autocomplete="off" style="width:150px">
						
					</td>

					<td class="Title" >공식이메일 </td> 
					<td class="Content"  >
						<input type="text" name="email" id="email" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["email"])?>"  autocomplete="off" style="width:97%">
						
					</td>
				</tr>

				<tr>
					<td class="Title" >담당자명 </td> 
					<td class="Content"  >

						<input type="text" name="contact_name" id="contact_name" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["contact_name"])?>"  autocomplete="off" style="width:98%">

					</td>
					<td class="Title" >담당자 직책</td> 
					<td class="Content"  >
						<input type="text" name="contact_title" id="contact_title" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["contact_title"])?>"  autocomplete="off" style="width:98%">
						
					</td>

					<td class="Title" >담당자 이메일 </td> 
					<td class="Content"  >
						<input type="text" name="contact_email" id="contact_email" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["contact_email"])?>"  autocomplete="off" style="width:97%">
						
					</td>
				</tr>
			</table>
			
			<h1 class="main_h1">URL </h1>
			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:150px">
					<col style="width:650px">

					<col style="width:150px">
					<col>
				</colgroup>
				<tr>
					
					<td class="Title" >홈페이지 </td> 
					<td class="Content"  >
						<input type="text" name="website1" id="website1" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["website1"])?>"  autocomplete="off" style="width:90%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('website1')" >
						
						<br>
						<input type="text" name="website2" id="website2" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["website2"])?>"  autocomplete="off" style="width:90%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('website2')" >

						<br>
						<input type="text" name="website3" id="website3" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["website3"])?>"  autocomplete="off" style="width:90%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('website3')" >

					</td>

					<td class="Title" >Youtube </td> 
					<td class="Content"  >
						<input type="text" name="url_youtube" id="url_youtube" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["url_youtube"])?>"  autocomplete="off" style="width:80%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('url_youtube')" >
					</td>
					
				</tr>
				<tr>
					<td class="Title" >Instagram </td> 
					<td class="Content"  >
						<input type="text" name="url_insta" id="url_insta" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["url_insta"])?>"  autocomplete="off" style="width:90%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('url_youtube')" >
					</td>
					<td class="Title" >Facebook </td> 
					<td class="Content"  >
						<input type="text" name="url_fb" id="url_fb" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["url_fb"])?>"  autocomplete="off" style="width:80%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('url_fb')" >
					</td>
				</tr>
				
				<tr>
					<td class="Title" >Twitter(X) </td> 
					<td class="Content"  >
						<input type="text" name="url_x" id="url_x" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["url_x"])?>"  autocomplete="off" style="width:90%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('url_x')" >
					</td>
				
					<td class="Title" >WhatsApp </td> 
					<td class="Content"  >
						<input type="text" name="url_wa" id="url_wa" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["url_wa"])?>"  autocomplete="off" style="width:80%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('url_wa')" >
					</td>
				</tr>
			</table>
			

			<h1 class="main_h1">골프장명 </h1>

			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:250px">
					<col style="width:250px">
					<col style="width:250px">
					<col style="width:250px">
					<col style="width:250px">

					<col >
					
					
				</colgroup>

				<tr>
					<td class="Title" > 골프장명 (한글) *</td> 
					<td class="Title" > 골프장명 (영어)</td> 
					<td class="Title" > 골프장명 (일본)</td> 
					<td class="Title" > 골프장명 (중국)</td> 
					<td class="Title" > 골프장명 (태국)</td> 

					<td class="Title" > 골프장명 (베트남)</td> 
					
					
					
				</tr>
				
				<tr>
					<td class="Content"  >
						<input type="text" name="club_nm" id="club_nm" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm"])?>"  autocomplete="off" style="width:230px">
					</td>
					<td class="Content"><input type="text" name="club_nm_en" id="club_nm_en" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_en"])?>"  autocomplete="off" style="width:230px"></td>
					<td class="Content"><input type="text" name="club_nm_jp" id="club_nm_jp" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_jp"])?>"  autocomplete="off" style="width:230px"></td>
					<td class="Content"><input type="text" name="club_nm_cn" id="club_nm_cn" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_cn"])?>"  autocomplete="off" style="width:230px"></td>
					<td class="Content"><input type="text" name="club_nm_th" id="club_nm_th" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_th"])?>"  autocomplete="off" style="width:230px"></td>

					<td class="Content"><input type="text" name="club_nm_vn" id="club_nm_vn" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_vn"])?>"  autocomplete="off" style="width:230px"></td>
					
					
				</tr>
				
				<tr>
					
					<td class="Title" > 골프장명 (프랑스)</td> 
					<td class="Title" > 골프장명 (독일)</td> 
					<td class="Title" > 골프장명 (스페인)</td> 
					<td class="Title" > 골프장명 (러시아)</td> 

					<td class="Title" > 골프장명 (힌두)</td> 
					<td class="Title" > 골프장명 (아랍)</td> 
					
					
				</tr>
				
				<tr>
					
					<td class="Content"><input type="text" name="club_nm_fr" id="club_nm_fr" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_fr"])?>"  autocomplete="off" style="width:230px"></td>
					<td class="Content"><input type="text" name="club_nm_de" id="club_nm_de" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_de"])?>"  autocomplete="off" style="width:230px"></td>
					<td class="Content"><input type="text" name="club_nm_sp" id="club_nm_sp" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_sp"])?>"  autocomplete="off" style="width:230px"></td>
					<td class="Content"><input type="text" name="club_nm_ru" id="club_nm_ru" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_ru"])?>"  autocomplete="off" style="width:230px"></td>

					<td class="Content"><input type="text" name="club_nm_hd" id="club_nm_hd" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_hd"])?>"  autocomplete="off" style="width:230px"></td>
					<td class="Content"><input type="text" name="club_nm_ar" id="club_nm_ar" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["club_nm_ar"])?>"  autocomplete="off" style="width:230px"></td>
					
				</tr>

				
			</table>

			<h1 class="main_h1">주소 </h1>
			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:150px">
					<col>
				</colgroup>

				<tr>
					<td class="Title" >POSTAL CODE </td> 
					<td class="Content"  >
						<input type="text" name="postal_code" id="postal_code" class="SYInputStyle02 numOnly"  value="<?php echo dbUnEscape($TPL_VAR["data"]["postal_code"])?>"  autocomplete="off" style="width:150px" maxlength=5>

						<input type="button" class="SYButtonType03" value="찾기" onclick="window.open('https://worldpostalcode.com/')" >


					
					</td>
				</tr>
				<tr>
					<td class="Title" >위/경도 </td> 
					<td class="Content"  >
						<input type="text" name="lat" id="lat" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["lat"])?>"  autocomplete="off" style="width:120px" placeholder="latitude">
						<input type="text" name="lng" id="lng" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["lng"])?>"  autocomplete="off" style="width:120px" placeholder="longitude">

						<input type="button" class="SYButtonType03" value="찾기" onclick="window.open('https://www.google.co.kr/maps/?hl=ko')" >
						
					</td>
				</tr>
				<tr>
					<td class="Title" >주소 (한글) </td> 
					<td class="Content"  ><input type="text" name="addr" id="addr" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (영어) </td> 
					<td class="Content"  ><input type="text" name="addr_en" id="addr_en" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_en"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (일본어) </td> 
					<td class="Content"  ><input type="text" name="addr_jp" id="addr_jp" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_jp"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (중국어) </td> 
					<td class="Content"  ><input type="text" name="addr_cn" id="addr_cn" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_cn"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (태국어) </td> 
					<td class="Content"  ><input type="text" name="addr_th" id="addr_th" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_th"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (베트남어) </td> 
					<td class="Content"  ><input type="text" name="addr_vn" id="addr_vn" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_vn"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>

				<tr>
					<td class="Title" >주소 (프랑스어) </td> 
					<td class="Content"  ><input type="text" name="addr_fr" id="addr_fr" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_fr"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (독일어) </td> 
					<td class="Content"  ><input type="text" name="addr_de" id="addr_de" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_de"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (스페인어) </td> 
					<td class="Content"  ><input type="text" name="addr_sp" id="addr_sp" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_sp"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (러시아어) </td> 
					<td class="Content"  ><input type="text" name="addr_ru" id="addr_ru" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_ru"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (힌두어) </td> 
					<td class="Content"  ><input type="text" name="addr_hd" id="addr_hd" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_hd"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
				<tr>
					<td class="Title" >주소 (아랍어) </td> 
					<td class="Content"  ><input type="text" name="addr_ar" id="addr_ar" class="SYInputStyle02"  value="<?php echo dbUnEscape($TPL_VAR["data"]["addr_ar"])?>"  autocomplete="off" style="width:99%"></td>
				</tr>
			</table>
			
			
			<h1 class="main_h1">노출/사용여부 </h1>
			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:150px">
					<col style="width:300px">
					<col style="width:150px">
					
					
					<col>
				</colgroup>
				<tr>
					
					<td class="Title" >노출여부 </td> 
					<td class="Content" >
						
						<select name='view_yn' id='view_yn' class="SYSelectBox01"  >
							<option value='Y' <?php if($TPL_VAR["data"]["view_yn"]=='Y'){?> selected<?php }?>>노출</option>
							<option value='N' <?php if($TPL_VAR["data"]["view_yn"]=='N'){?> selected<?php }?>>미노출</option>
						</select>
						
					</td>
					<td class="Title" >사용여부 </td> 
					<td class="Content" >
						
						<select name='use_yn' id='use_yn' class="SYSelectBox01"  >
							<option value='Y' <?php if($TPL_VAR["data"]["use_yn"]=='Y'){?> selected<?php }?>>사용</option>
							<option value='N' <?php if($TPL_VAR["data"]["use_yn"]=='N'){?> selected<?php }?>>미사용</option>
						</select>
						
					</td>
					
				</tr>

<?php if($TPL_VAR["editmode"]=="poi_update"){?>
				<tr>
					<td class="Title" >등록일시 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["regdt"]?>

					</td>
					<td class="Title" >수정일시 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["moddt"]?>

						
					</td>
					
					
				</tr>
<?php }?>
			</table>
		</div>


		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="poi_save()">
				
				<input type="button" class="SYButtonBack04" value="목록으로" title="목록으로" onclick="golist()" id="btn-list">
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
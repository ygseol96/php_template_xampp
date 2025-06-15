{#head}
	
	<script type="text/javascript">

		$(function() {

			var schtags = [
				{keyword.nation}
			];
			$( "#input_nat_cd" ).autocomplete({
			  source: schtags
			});

			
		});

		function init_with_nation() {
			init_state();
			init_city();
			init_airport();
			init_nation_phone();
		}



		function chg_nat_cd() {
			$('#view_nat_cd').css("color","red");
			$('#view_nat_cd').html("미매칭");
			$('#chk_nat_cd').val('N');
		}

		function chg_state_cd () {
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

		function init_state() {
			var nat_cd = $('#nat_cd').val();

			$.post('/contents/ajax_contents.php', { mode: 'init_poi_state', nat_cd:nat_cd  },
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

			$.post('/contents/ajax_contents.php', { mode: 'init_poi_city', nat_cd:nat_cd  },
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

			$.post('/contents/ajax_contents.php', { mode: 'init_poi_airport', nat_cd:nat_cd  },
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

			$.post('/contents/ajax_contents.php', { mode: 'init_poi_nation_phone', nat_cd:nat_cd  },
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

		

		function code_hotel_save() {

			
			
			var nat_cd = $('#nat_cd').val();

			if(nat_cd.length < 2 ) {
				alert('국가선택은 필수입니다.');
				return;			

			}
			


			var hotel_nm = $('#hotel_nm').val();
			if(!hotel_nm) {
				alert('호텔명 한글을 입력하세요');
				$('#hotel_nm').focus();
				return;
				
			}

			if($('#phone_tail').val().length > 0 ) {
				if(!$('#phone_head option:selected').val() ) {
					alert('전화번호 입력시 앞에 국가통신번호를 선택하세요');
					$('#phone_head').focus();
					return;
				}
			}


			if($('#fax_tail').val().length > 0 ) {
				if(!$('#fax_head option:selected').val() ) {
					alert('팩스번호 입력시 앞에 국가통신번호를 선택하세요');
					$('#fax_head').focus();
					return;
				}
			}

			if($('#email').val().length > 0 ) {

				if(!emailcheck($('#email').val()) ) {
					alert('이메일주소가 유효하지 않습니다.');
					$('#email').focus();
					return;
				}
			}


			$('#iform').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_sys.php',
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

		

		

		
	</script>
	<style type="text/css">
		.SYWirteTable td.Title {height:40px;}
	</style>
	
	<form name="iform" id="iform">
		<input type="hidden" name="mode" id="mode" value="{editmode}" />
		<input type="hidden" name="seq" id="seq" value="{_REQUEST.seq}" />
		
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> 호텔코드 상세 {? editmode == "code_hotel_update" } - {data.hotel_nm}{/}</li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 호텔코드 > 상세</li>
				</ul>
			</div>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:130px">
					<col style="width:540px">
					<col style="width:150px">
					<col >
					
					
				</colgroup>
				
				<tr>
					<td class="Title" >호텔코드 *</td> 
					<td class="Content"  >
						{? editmode == "code_hotel_insert" }
						<p class="Tip" >자동생성</p>
						{:}
						{data.hotel_code}
						{/}

						
					</td>
					<td class="Title" >국가선택 *</td> 
					<td class="Content"  >
						{? editmode == "code_hotel_insert"}
						<input type="text" name="input_nat_cd" id="input_nat_cd" class="SYInputStyle02"  value="{data.input_nat_cd}"  autocomplete="off" onkeyup="chg_nat_cd()">

						

						<input type="button" class="SYButtonType03" value="확인" onclick="fchk_nat_cd()" >

						<span id="view_nat_cd" style="{? data.nat_cd > '' }color:blue{/}">{? data.nat_cd > '' }사용가능{/}
						</span>
						{:}
						{data.nat_cd}({data.nat_name})
						{/}


						<input type="hidden" name="nat_cd" id="nat_cd" class="SYInputStyle02"  value="{data.nat_cd}"  autocomplete="off">

						
					</td>
				</tr>
				<tr>
					<td class="Title" >지역코드/ 도시코드</td> 
					<td class="Content"  >
						<select name="state_cd" id="state_cd" class="SYSelectBox01" onchange="chg_state_cd(this.value)">
							<option value="">== 옵션선택 ==</option>
							{=selectOption(select_state(data.nat_cd), data.state_cd, 'db')}
						</select>
						<select name="city_code" id="city_code" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							{=selectOption(select_city(data.nat_cd), data.city_code, 'db')}
						</select>
						
					</td>

					<td class="Title" > 공항코드<br>(공항까지 거리/분) </td> 
					<td class="Content"  >
						
						
						<select name="airport_code" id="airport_code" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							{=selectOption(select_airport(data.nat_cd), data.airport_code, 'db')}
						</select>
						
						(
						<input type="text" name="dist_airport" id="dist_airport" class="SYInputStyle02 floatOnly"  value="{data.dist_airport}"  autocomplete="off" style="width:60px">km
						<input type="text" name="min_airport" id="min_airport" class="SYInputStyle02 floatOnly"  value="{data.min_airport}"  autocomplete="off" style="width:60px">분
						)


						
					</td>
					
				</tr>
				<tr>
					<td class="Title" >호텔등급 </td> 
					<td class="Content"  >
						<select name="grade" id="grade" class="SYSelectBox01">
							<option value="">==등급선택==</option>
							<option value="3" {? data.grade == '3'}selected{/}>3성</option>
							<option value="4" {? data.grade == '4'}selected{/}>4성</option>
							<option value="5" {? data.grade == '5'}selected{/}>5성</option>
							<option value="7" {? data.grade == '7'}selected{/}>7성</option>
						</select>
						
					</td>
					<td class="Title" >이메일 </td> 
					<td class="Content"  >
						<input type="text" name="email" id="email" class="SYInputStyle02"  value="{=dbUnEscape(data.email)}"  autocomplete="off" style="width:97%">
						
					</td>
					
				</tr>

				<tr>
					<td class="Title" >홈페이지 </td> 
					
					<td class="Content" colspan=3  >
						<input type="text" name="website" id="website" class="SYInputStyle02"  value="{=dbUnEscape(data.website)}"  autocomplete="off" style="width:87%;height:20px;" placeholder="https://"><input type="button" class="SYButtonType03" value="보기" onclick="goout_url('website')" >
						
					</td>
					
				</tr>

				
				<tr>
					<td class="Title" >전화번호 </td> 
					<td class="Content"  >
						<select name="phone_head" id="phone_head" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							{=selectOption(select_nation_phone(data.nat_cd), data.np_seq, 'db')}
						</select>
						<input type="text" name="phone_tail" id="phone_tail" class="SYInputStyle02"  value="{=dbUnEscape(data.phone_tail)}"  autocomplete="off" style="width:150px">
						
					</td>
					<td class="Title" >팩스 </td> 
					<td class="Content"  >
						<select name="fax_head" id="fax_head" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							{=selectOption(select_nation_phone(data.nat_cd), data.np_seq_fax, 'db')}
						</select>
						<input type="text" name="fax_tail" id="fax_tail" class="SYInputStyle02"  value="{=dbUnEscape(data.fax_tail)}"  autocomplete="off" style="width:150px">
						
					</td>
					
				</tr>
				<tr>
					<td class="Title" >위경도 </td> 
					<td class="Content"  >
						<input type="text" name="lat" id="lat" class="SYInputStyle02"  value="{=dbUnEscape(data.lat)}"  autocomplete="off" style="width:120px" placeholder="latitude">
						<input type="text" name="lng" id="lng" class="SYInputStyle02"  value="{=dbUnEscape(data.lng)}"  autocomplete="off" style="width:120px" placeholder="longitude">

						<input type="button" class="SYButtonType03" value="찾기" onclick="window.open('https://www.google.co.kr/maps/?hl=ko')" >
						
					</td>

					<td class="Title" >사용/노출 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; width:90px">
							<label class="switch">
							  <input type="checkbox" name="use_yn" id="use_yn" value="Y" {? data.use_yn !='N' } checked{/}>  
							  <span class="slider round"></span>
							  <span class="text"> 
								사용
							  </span>
							</label> 
						</div>

						<span class="bar">|</span>

						<div style="display:inline-block;position:relative;width:90px ">
							<label class="switch">
							  <input type="checkbox" name="view_yn" id="view_yn" value="Y" {? data.view_yn !='N'} checked{/}>  
							  <span class="slider round"></span>
							  <span class="text"> 
								노출
							  </span>
							</label> 
						</div>
						
					</td>
					
				</tr>
			</table>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:130px">
					<col style="width:130px">
					<col >
				</colgroup>
				<tr>
					<td class="Title" rowspan=3>호텔명 </td> 
					<td class="Title" >한글 *</td> 
					<td class="Content"  >
						<input type="text" name="hotel_nm" id="hotel_nm" class="SYInputStyle02"  value="{=dbUnEscape(data.hotel_nm)}"  autocomplete="off" style="width:80%" >
					</td>
					
				</tr>
				<tr>
					<td class="Title" >영어 </td> 
					<td class="Content"  >
						<input type="text" name="hotel_nm_en" id="hotel_nm_en" class="SYInputStyle02"  value="{=dbUnEscape(data.hotel_nm_en)}"  autocomplete="off" style="width:80%" >
					</td>
					
				</tr>
				<tr>
					<td class="Title" >일본어 </td> 
					<td class="Content"  >
						<input type="text" name="hotel_nm_jp" id="hotel_nm_jp" class="SYInputStyle02"  value="{=dbUnEscape(data.hotel_nm_jp)}"  autocomplete="off" style="width:80%" >
					</td>
					
				</tr>
			</table>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:130px">
					<col style="width:130px">
					<col >
				</colgroup>
				<tr>
					<td class="Title" rowspan=3>소개 </td> 
					<td class="Title" >한글 </td> 
					<td class="Content"  >
						<textarea name="intro" id="intro" class="MWTextareaStyle01"  >{=dbUnEscape(data.intro)}</textarea>
					</td>
					
				</tr>
				<tr>
					<td class="Title" >영어 </td> 
					<td class="Content"  >
						<textarea name="intro_en" id="intro_en" class="MWTextareaStyle01"  >{=dbUnEscape(data.intro_en)}</textarea>
					</td>
					
				</tr>
				<tr>
					<td class="Title" >일본어 </td> 
					<td class="Content"  >
						<textarea name="intro_jp" id="intro_jp" class="MWTextareaStyle01"  >{=dbUnEscape(data.intro_jp)}</textarea>
					</td>
					
				</tr>
			</table>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:130px">
					<col style="width:130px">
					<col >
				</colgroup>
				<tr>
					<td class="Title" rowspan=3>교통정보 </td> 
					<td class="Title" >한글 </td> 
					<td class="Content"  >
						<textarea name="traffic" id="traffic" class="MWTextareaStyle01"  >{=dbUnEscape(data.traffic)}</textarea>
					</td>
					
				</tr>
				<tr>
					<td class="Title" >영어 </td> 
					<td class="Content"  >
						<textarea name="traffic_en" id="traffic_en" class="MWTextareaStyle01"  >{=dbUnEscape(data.traffic_en)}</textarea>
					</td>
					
				</tr>
				<tr>
					<td class="Title" >일본어 </td> 
					<td class="Content"  >
						<textarea name="traffic_jp" id="traffic_jp" class="MWTextareaStyle01"  >{=dbUnEscape(data.traffic_jp)}</textarea>
					</td>
					
				</tr>
			</table>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:130px">
					<col style="width:130px">
					<col >
				</colgroup>
				<tr>
					<td class="Title" rowspan=3>내용 </td> 
					<td class="Title" >한글 </td> 
					<td class="Content"  >
						<textarea name="info" id="info" class="MWTextareaStyle01"  >{=dbUnEscape(data.info)}</textarea>
					</td>
					
				</tr>
				<tr>
					<td class="Title" >영어 </td> 
					<td class="Content"  >
						<textarea name="info_en" id="info_en" class="MWTextareaStyle01"  >{=dbUnEscape(data.info_en)}</textarea>
					</td>
					
				</tr>
				<tr>
					<td class="Title" >일본어 </td> 
					<td class="Content"  >
						<textarea name="info_jp" id="info_jp" class="MWTextareaStyle01"  >{=dbUnEscape(data.info_jp)}</textarea>
					</td>
					
				</tr>
			</table>


		</div>


		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="code_hotel_save()">
				
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
		<img src="../img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
{#bottom}
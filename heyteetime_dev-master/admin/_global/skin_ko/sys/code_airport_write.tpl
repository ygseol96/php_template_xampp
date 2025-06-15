{#head}
	
	<script type="text/javascript">

		$(function() {
			
		});

		

		function code_airport_save() {

			{? editmode == "code_airport_insert" }
			
			var nat_cd = $('#nat_cd option:selected').val();

			if(!nat_cd ) {
				alert('국가코드를 선택하세요.');
				return;			

			}

			var city_code = $('#city_code option:selected').val();

			if(!city_code ) {
				alert('도시코드를 선택하세요.');
				return;			

			}
			

			


			var airport_code = $('#airport_code').val();
			if(!airport_code) {
				alert('공항코드를 입력하세요');
				return;
			}
			{/}
			

			var airport_nm_kr = $('#airport_nm_kr').val();
			if(!airport_nm_kr) {
				alert('공항명 한글을 입력하세요');
				$('#airport_nm_kr').focus();
				return;
				
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

		function get_citycode(nat_cd) {
			$.post('ajax_sys.php', { mode: 'select_city_code', nat_cd:nat_cd  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {
						//document.location.reload();
						$('#city_code').html(msg);
						
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
		<input type="hidden" name="mode" id="mode" value="{editmode}" />
		<input type="hidden" name="seq" id="seq" value="{_REQUEST.seq}" />
		
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> 공항코드 상세 {? editmode == "code_airport_update" } - {data.airport_nm_kr}{/}</li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 표준도시코드 > 상세</li>
				</ul>
			</div>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:120px">
					<col style="width:280px">
					<col style="width:150px">
					<col style="width:300px">
					<col>
				</colgroup>
				
				<tr>
					<td class="Title" >국가코드 *</td> 
					<td class="Content"  >
						{? editmode == "code_airport_insert" }
							<select name='nat_cd' id='nat_cd' class="SYSelectBox01" onchange="get_citycode(this.value)">
								<option value="">선택</option>
								{=selectOption(nat, data.nat_cd, 'db')}
							</select>
						{:}
							{data.nat_cd}
						{/}
						
					</td>
					<td class="Title" >도시코드 *</td> 
					<td class="Content"  >
						{? editmode == "code_airport_insert" }
							<select name='city_code' id='city_code' class="SYSelectBox01" >
								<option value="">선택</option>
								{=selectOption(nat, data.city_code, 'db')}
							</select>
						{:}
							{data.city_code}
						{/}
						
					</td>
					<td></td>
				</tr>
				<tr>
					<td class="Title" >공항코드 *</td> 
					<td class="Content"  colspan=3>

						{? editmode == "code_airport_insert" }
							<input type="text" name="airport_code" id="airport_code" class="SYInputStyle02 upper"  value="{data.airport_code}"  autocomplete="off" maxlength=3 style="width:40px">
							<p class="Tip01">공항코드는 영문3자리 </p>
						{:}
							{data.airport_code}
						{/}
						
					</td>
					
					<td></td>
				</tr>
				<tr>
					
					
					<td class="Title" >공항명 한글 *</td> 
					<td class="Content" >
						<input type="text" name="airport_nm_kr" id="airport_nm_kr" class="SYInputStyle02"  value="{data.airport_nm_kr}"  autocomplete="off" style="width:200px">		
					</td>
					<td class="Title" >공항명 영문 </td> 
					<td class="Content"  >
						<input type="text" name="airport_nm_en" id="airport_nm_en" class="SYInputStyle02"  value="{data.airport_nm_en}"  autocomplete="off" style="width:200px">
						
					</td>

					<td></td>
				</tr>
				<tr>
					<td class="Title" >공항명 일본어 </td> 
					<td class="Content" >
						<input type="text" name="airport_nm_jp" id="airport_nm_jp" class="SYInputStyle02"  value="{data.airport_nm_jp}"  autocomplete="off" style="width:200px">		
					</td>
					<td class="Title" >공항명 중국어 </td> 
					<td class="Content"  >
						<input type="text" name="airport_nm_cn" id="airport_nm_cn" class="SYInputStyle02"  value="{data.airport_nm_cn}"  autocomplete="off" style="width:200px">
						
					</td>

					<td></td>
				</tr>
				
				<tr>
					<td class="Title" >검색키워드 </td> 
					<td class="Content" colspan=3 >
						<input type="text" name="airport_nm_keyword" id="airport_nm_keyword" class="SYInputStyle02"  style="width:400px" value="{data.airport_nm_keyword}"  autocomplete="off">
						
					</td>
					
				</tr>
				
				<tr>
					
					<td class="Title" >노출여부 </td> 
					<td class="Content" colspan=3 >
						
						<select name='view_yn' id='view_yn' class="SYSelectBox01"  >
							<option value='Y' {? data.view_yn =='Y'} selected{/}>노출</option>
							<option value='N' {? data.view_yn =='N'} selected{/}>미노출</option>
						</select>
						
					</td>
					<td></td>
				</tr>
			</table>
		</div>


		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="code_airport_save()">
				
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
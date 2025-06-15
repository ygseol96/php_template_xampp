{#head}
	
	<script type="text/javascript">

		$(function() {
			
		});

		

		function code_state_save() {

			{? editmode == "code_state_insert" }
			
			var nat_cd = $('#nat_cd').val();

			if(nat_cd.length < 2 ) {
				alert('국가코드는 2자입니다.');
				return;			

			}
			{/}

			


			
			

			var state_nm_kr = $('#state_nm_kr').val();
			if(!state_nm_kr) {
				alert('지역명 한글을 입력하세요');
				$('#state_nm_kr').focus();
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
				   <li id="SYMenuTitle" class="Title"> 지역코드 상세 {? editmode == "code_state_update" } - {data.nat_name} > {data.state_nm_kr}{/}</li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 지역코드 > 상세</li>
				</ul>
			</div>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:120px">
					<col style="width:280px">
					<col style="width:150px">
					<col style="width:300px">
					<col style="width:150px">
					<col style="width:300px">
					<col>
				</colgroup>
				
				<tr>
					<td class="Title" >지역코드 *</td> 
					<td class="Content"  >
						{? editmode == "code_state_insert" }
						
						<p class="Tip" > 자동생성</p>
						{:}
						{data.state_cd}
						{/}

						
					</td>
					<td class="Title" >국가코드 *</td> 
					<td class="Content" colspan=3 >

						{? editmode == "code_state_insert" }
						<select name='nat_cd' id='nat_cd' class="SYSelectBox01"  >
							<option value=''>국가코드</option>
							{=selectOption(select_nation(), data.nat_cd, 'db')}
						</select>
						{:}
						{data.nat_cd} ( {data.nat_name} )
						{/}

						
					</td>
					<td></td>
				</tr>
				<tr>
					
					<td class="Title" >지역명 한글 *</td> 
					<td class="Content"  >
						<input type="text" name="state_nm_kr" id="state_nm_kr" class="SYInputStyle02"  value="{data.state_nm_kr}"  autocomplete="off">
						
					</td>
					<td class="Title" >지역명 영어 </td> 
					<td class="Content" >
						<input type="text" name="state_nm_en" id="state_nm_en" class="SYInputStyle02"  value="{data.state_nm_en}"  autocomplete="off">	
												
					</td>

					<td class="Title" >지역명 일본어 </td> 
					<td class="Content" >
						<input type="text" name="state_nm_jp" id="state_nm_jp" class="SYInputStyle02"  value="{data.state_nm_jp}"  autocomplete="off">	
												
					</td>

					<td></td>
				</tr>
				
				
				<tr>
					<td class="Title" >지역구분 * </td> 
					<td class="Content" >
						<select name='state_gubun' id='state_gubun' class="SYSelectBox01"  >
							<option value=''>선택</option>
							<option value='1' {? data.state_gubun =='1'} selected{/}>주</option>
							<option value='2' {? data.state_gubun =='2'} selected{/}>자치국</option>
							<option value='9' {? data.state_gubun =='9'} selected{/}>기타</option>
							
						</select>
						
					</td>
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
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="code_state_save()">
				
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
{#head}
	
	<script type="text/javascript">

		$(function() {

			var schtags = [
				{nation_name}
			];

			$( "#nation_name" ).autocomplete({
			  source: schtags
			});
			
		});

		

		function code_colony_save() {

			
			var col_name = $('#col_name').val();

			if(col_name.length < 2 ) {
				alert('국가령 이름을 2자이상 입력하세요.');
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
						{? editmode == "code_colony_insert" }
						alert('국가를 등록하세요.');
						location.href = 'code_colony_write.html?seq='+msg;
						{:}

						window.close();
						{/}
					}
					else {
						alert(msg);	
						//$('#btn-popreg').attr("disabled", false);
					}
				}
			});

		}

		

		function select_nation_reg() {
			var seq = $('#seq').val();
			var nation_name = $('#nation_name').val();

			$.post('ajax_sys.php', { mode: 'set_colony_nation', nation_name:nation_name, seq:seq  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {

						var temp = msg.split('|');

						//객체존재여부
						if($('#nat_'+temp[0]).length > 0 ) {
							alert('이미 추가된 국가입니다.');
							return;
						}

						var html = '<div style="margin:5px;" id="nat_'+temp[0]+'">';
						html += '<input type="hidden" name="nat[]" id="nat_seq_'+temp[0]+'" value="'+temp[0]+'">';
						html += temp[1]+' ('+temp[2]+') ';
						html += '<input type="button" class="SYButtonDelete01" onclick="nation_del('+temp[0]+')" >';
						html += '</div>';

						$('#layer_nation').append(html);


						//document.location.reload();
						//$('#city_code').val(msg);
						//$('#city_nm_kr').focus();
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
		}

		function nation_del(nat_seq) {
			var seq = $('#seq').val();

			var ans = confirm('삭제하시겠습니까?');
			if(!ans) return;

			if($('#nat_'+nat_seq).length == 0 ) {
				alert('해당 국가코드가 없습니다');
				return;
			}

			$.post('ajax_sys.php', { mode: 'delete_colony_nation', nat_seq:nat_seq, seq:seq  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {

						$('#nat_'+nat_seq).remove();

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
				   <li id="SYMenuTitle" class="Title"> 국가령 상세 {? editmode == "code_colony_update" } - {data.col_name}{/}</li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 통합코드 > 국가령관리 > 상세</li>
				</ul>
			</div>

			<table class="SYWirteTable" style="margin-top:10px">
				<colgroup>
					<col style="width:120px">
					<col style="width:480px">
					<col>
				</colgroup>
				
				<tr>
					<td class="Title" >국가령 이름 *</td> 
					<td class="Content"  colspan=3>

						<input type="text" name="col_name" id="col_name" class="SYInputStyle02 "  value="{=dbUnEscape(data.col_name)}"  autocomplete="off" >
						
					</td>
					
				</tr>
				{? editmode == "code_colony_update" }
				<tr>
					<td class="Title" >국가선택 *</td> 
					<td class="Content"  colspan=3>

						<input type="text" name="nation_name" id="nation_name" class="SYInputStyle02" style="width:150px;" value="" >
						<input type="button" class="SYButtonType03" value="등록" onclick="select_nation_reg()" >

						<div id="layer_nation">
						{@ col_nation }
							<div style="margin:5px;" id="nat_{.nat_seq}">{.nat_cd} ({.nat_nm_kr}) <input type="button" class="SYButtonDelete01" onclick="nation_del({.nat_seq})" ></div>
						{/}
							
						</div>
						
					</td>
					
				</tr>
				{/}
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
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="code_colony_save()">
				
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
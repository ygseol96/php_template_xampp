{#head}
	
	<script type="text/javascript">

		$(function() {
			{? editmode == "admin_member_update" }
			get_user_auth({_REQUEST.seq});
			{/}
		});

		function chk_gmenu(gseq) {
			//console.log('gseq='+gseq);
			var gid = 'gmenu_'+gseq;

			var gcheck = $('#'+gid).is(':checked');
			$('.'+gid).prop('checked', gcheck);
		}

		function chk_smenu(seq) {
			//console.log('seq='+seq);
			var sid = 'smenu_'+seq;

			var scheck = $('#'+sid).is(':checked');
			$('.'+sid).prop('checked', scheck);
		}

		function admin_member_save() {

			{? editmode == "admin_member_insert" }
			
			var id_check = $('#id_check').val();
			if(id_check != 'Y') {
				alert('아이디 중복검사를 해주세요');
				return;
			}

			var pwd = $('#pwd').val();
			var pwd2 = $('#pwd2').val();
			if(pwd.length < 4) {
				alert('아이디는 4자이상 입니다.');
				return;
			}

			if(pwd != pwd2) {
				alert('비밀번호가 일치하지 않습니다.');
				return;
			}
			{:}
			
			var pwd = $('#pwd').val();

			if(pwd.length > 0 ) {
				var pwd2 = $('#pwd2').val();

				if(pwd.length < 4) {
					alert('아이디는 4자이상 입니다.');
					return;
				}

				if(pwd != pwd2) {
					alert('비밀번호가 일치하지 않습니다.');
					return;
				}

			}

			{/}


			var adm_part_seq = $('#adm_part_seq option:selected').val();
			if(!adm_part_seq) {
				alert('부서를 선택하세요');
				return;
			}

			var cj_seq = $('#cj_seq option:selected').val();
			if(!cj_seq) {
				alert('직급을 선택하세요');
				return;
			}

			var email = $('#email').val();

			if(email) {
				if(!emailcheck(email)) {
					alert('이메일주소가 유효하지 않습니다.');
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

		function get_part_auth(part_seq) {

			var editmode = $('#editmode').val();

			$.post('ajax_sys.php', { mode: 'get_part_auth', part_seq:part_seq  },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						var html = decodeURIComponent(obj.msg);
						$('#layer_auth').html(html);

						$('#is_change').val('Y');

					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);

		}

		function get_user_auth(user_seq) {

			var editmode = $('#editmode').val();

			$.post('ajax_sys.php', { mode: 'get_user_auth', user_seq:user_seq },
				function(json) { 
					var obj = $.parseJSON(json); 
					if(obj.result == 'Y') {
						
						var html = decodeURIComponent(obj.msg);
						$('#layer_auth').html(html);

					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);

		}

		function chk_dup_id() {

			var id = $('#adm_id').val();
			if(!id) {
				alert('아이디를 입력하세요');
				$('#adm_id').focus();
				return;
			}

			if(id.length < 4) {
				alert('아이디는 4자이상 입력하세요');
				$('#adm_id').focus();
				return;
			}


			$.post('ajax_sys.php', { mode: 'check_admin_id', id:id  },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg);
					if(obj.result == 'Y') {
						
						$('#id_check').val('Y');
						
						$('#view_id_dup').html('사용가능한 아이디입니다.');
						$('#view_id_dup').css("color", "blue");
					}
					else {
						$('#id_check').val('N');
						$('#view_id_dup').html(msg);
						$('#view_id_dup').css("color", "red");
						
					}
					
				}
			);

		}

		function auth_changed(){
			$('#is_change').val('Y');
		}
	</script>
	<style type="text/css">
		.SYWirteTable td.Title {height:40px;}
	</style>
	
	<form name="iform" id="iform">
		<input type="hidden" name="mode" id="mode" value="{editmode}" />
		<input type="hidden" name="seq" id="seq" value="{_REQUEST.seq}" />
		<input type="hidden" name="id_check" id="id_check" value="N" />
		<input type="hidden" name="is_change" id="is_change" value="N" />
  
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> 사용자 상세 {? editmode == "admin_member_update" } - {data.adm_name}{/}</li>
				   <li id="SYMenuNavi" class="Navi">시스템관리 > 권한관리 > 사용자 > 상세</li>
				</ul>
			</div>

			<table class="SYWirteTable" style="margin-top:10px">
					<colgroup>
						<col style="width:120px">
						<col style="width:240px">
						<col style="width:120px">
						<col style="width:550px">
						<col>
					</colgroup>
					
					<tr>
						<td class="Title" >사용자명 *</td> 
						<td class="Content"  >
							<input type="text" name="adm_name" id="adm_name" class="SYInputStyle02"  value="{data.adm_name}"  autocomplete="off">
							
							
						</td>
						<td class="Title" >사용자ID *</td> 
						<td class="Content"  >
							
							{? editmode == "admin_member_insert" }
							<input type="text" name="adm_id" id="adm_id" class="SYInputStyle02 idOnly"  value=""  autocomplete="off">
							<input type="button" class="SYButtonType04" value="중복검사" onclick="chk_dup_id()" title="중복검사">
							<p class="Tip" >아이디는 4자이상 영문,숫자,특수문자(언더바, 대쉬)만 가능합니다. 입력 후 중복검사를 해주세요</p>
							<p id="view_id_dup" ></p>
							{:}
							{data.adm_id}
							{/}
						</td>
						<td></td>
					</tr>
					<tr>
						<td class="Title" >비밀번호 </td> 
						<td class="Content"  >
							<input type="password" name="pwd" id="pwd" class="SYInputStyle02"  value=""  autocomplete="off" onkeyup="chk_valid_pwd()">
							<p class="Tip" >비밀번호는 4자이상 가능합니다.</p>
							<p id="view_pwd_valid" ></p>
						</td>
						<td class="Title" >비밀번호 확인 </td> 
						<td class="Content"  >
							<input type="password" name="pwd2" id="pwd2" class="SYInputStyle02"  value=""  autocomplete="off" onkeyup="chk_valid_pwd2()">
							<p id="view_pwd_valid2" ></p>
						</td>
						<td></td>
					</tr>
					<tr>
						<td class="Title" >이메일 </td> 
						<td class="Content" colspan=3>
							<input type="text" name="email" id="email" class="SYInputStyle02"  value="{data.email}"  autocomplete="off" style="width:200px">	
													
						</td>
						<td></td>
					</tr>
					<tr>
						<td class="Title" >부서 *</td> 
						<td class="Content" >
							<select name='adm_part_seq' id='adm_part_seq' class="SYSelectBox01" onchange="get_part_auth(this.value)" >
								<option value=''>부서선택</option>
								{=selectOption(part, data.adm_part_seq, 'db')}
							</select>
						</td>
						<td class="Title" >직급 *</td> 
						<td class="Content"  >
							<select name='cj_seq' id='cj_seq' class="SYSelectBox01" >
								<option value=''>직급선택</option>
								{=selectOption(jk, data.cj_seq, 'db')}
							</select>
							

						</td>
						<td></td>
					</tr>

					<tr>
						<td class="Title" >재직상태</td> 
						<td class="Content"  >
							<select name='work_yn' id='work_yn' class="SYSelectBox01" >
								<option value='Y' {? data.work_yn =='Y'}selected{/}>재직중</option>
								<option value='N' {? data.work_yn =='N'}selected{/}>퇴사</option>
								<option value='W' {? data.work_yn =='W'}selected{/}>휴직중</option>
								
							</select>

						</td>
						<td class="Title" >승인상태</td> 
						<td class="Content"  >
							<select name='confirm_yn' id='confirm_yn' class="SYSelectBox01" >
								<option value='Y' {? data.confirm_yn =='Y'}selected{/}>승인</option>
								<option value='N' {? data.confirm_yn =='N'}selected{/}>대기</option>
							</select>

						</td>
						<td></td>
					</tr>
					
				</table>
			
			
		</div>


		<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title">사용 권한</li>
				</ul>
			</div>

		<div id= "layer_auth" style="text-align:left">
		</div>

			
				

		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" class="SYButtonSubmit04" value="저장하기" onclick="admin_member_save()">
				
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
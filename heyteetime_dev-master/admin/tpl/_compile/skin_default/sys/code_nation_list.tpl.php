<?php /* Template_ 2.2.8 2024/01/29 17:45:57 /home/agl/www/admin/_global/skin_default/sys/code_nation_list.tpl 000008544 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

<!--Datatable-->
<link rel="stylesheet" href="/_global/skin_default/assets/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


<script type="text/javascript">
<!--
	$(function() {

		// Korean    
		var lang_kor = {        
			"decimal" : "",        
			"emptyTable" : "데이터가 없습니다.",        
			"info" : "_START_ - _END_ (총 _TOTAL_ 건)",        
			"infoEmpty" : "0명",        
			"infoFiltered" : "(전체 _MAX_ 건 중 검색결과)",        
			"infoPostFix" : "",        
			"thousands" : ",",        
			"lengthMenu" : "_MENU_ 개씩 보기",        
			"loadingRecords" : "로딩중...",        
			"processing" : "처리중...",        
			"search" : "검색 : ",        
			"zeroRecords" : "검색된 데이터가 없습니다.",        
			"paginate" : {            
				"first" : "첫 페이지",            
				"last" : "마지막 페이지",            
				"next" : "다음",            
				"previous" : "이전"        
			},        
			"aria" : {            
				"sortAscending" : " :  오름차순 정렬",            
				"sortDescending" : " :  내림차순 정렬"        
			}    
		};



		$('#tablelist').DataTable({
			"searching": true,
			"pageLength": 50,
			"paging": true,
			//"info": false,
			"responsive": true,
			"fixedHeader": {
				"headerOffset": -7
			},
			 searchPanes: {
				viewTotal: true
			},
			dom: 'Bfrtip',
			language : lang_kor,
			
			buttons: [
				{
					text: '등록',
					action: function ( e, dt, node, config ) {
						//alert( 'Button activated' );
						code_nation_write();
					}
				},
				/*
				{
					text: '엑셀다운로드',
					action: function ( e, dt, node, config ) {
						alert( 'Button activated' );
					}
				}
				*/
			]
			
			
		});

		
	

		
	});

	function code_nation_write(seq) {
		/*
		var url = 'code_nation_write.html';
		if(seq) url += '?seq='+seq;
		window.open(url);
		*/

		if(!seq) seq = '';

		$.post('ajax_sys.php', { mode: 'form_code_nation', seq:seq  },
			function(json) { 
				var obj = $.parseJSON(json);
				var msg = decodeURIComponent(obj.msg)
				if(obj.result == 'Y') {

					$('#layerPopup').html(msg);
					$('#layerPopup').modal('show');
					//document.location.reload();

					basic_script();

					$.validate({
						form : '#popform',
						modules : 'security'
					});
				}
				else {
					alert(decodeURIComponent(obj.msg));
					
				}
				
			}
		);

	}
	function code_nation_save() {

		var editmode = $('#popmode').val();
		

		if(editmode == "code_nation_insert") {
			var nat_cd = $('#nat_cd').val();

			if(nat_cd.length < 2 ) {
				alert('국가코드는 2자입니다.');
				return;			

			}
		}

		


		var cd = $('#cd option:selected').val();
		if(!cd) {
			alert('대륙코드를 선택하세요');
			return;
		}

		

		var nat_nm_kr = $('#nat_nm_kr').val();
		if(!nat_nm_kr) {
			alert('국가명 한글을 입력하세요');
			$('#nat_nm_kr').focus();
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
//-->
</script>
<style type="text/css">
	thead tr th{
    background-color:#fff;
   
}
</style>

<!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>국가코드</strong></h5>
                <span class="text-secondary">시스템관리 <i class="fa fa-angle-right"></i> 국가코드</span>
                
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <!--Datatable-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                            <h6 class="mb-2">국가코드</h6>
                            
                            <div class="table-responsive">
                                <table id="tablelist" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>국가코드</th>
                                            <th>국가명 (한글)</th>
                                            <th>국가명 (영어)</th>
                                            <th>국가명 (일본어)</th>
                                            <th>국가명 (중국어)</th>
                                            <th>대륙</th>
                                            <th>통화코드</th>
                                            <th>통화명</th>
                                            <th>노출여부</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php if($TPL_data_1){foreach($TPL_VAR["data"] as $TPL_V1){?>
                                        <tr>
                                            <td class="active"><a href="javascript:code_nation_write('<?php echo $TPL_V1["nat_seq"]?>')" style="text-decoration:underline;"><?php echo $TPL_V1["nat_cd"]?></a></td>
                                            <td><?php echo $TPL_V1["nat_nm_kr"]?></td>
                                            <td><?php echo $TPL_V1["nat_nm_en"]?></td>
                                            <td><?php echo $TPL_V1["nat_nm_jp"]?></td>
                                            <td><?php echo $TPL_V1["nat_nm_cn"]?></td>
                                            <td><?php echo $TPL_V1["cd_name"]?></td>
                                            <td><?php echo $TPL_V1["curr_cd"]?></td>
                                            <td><?php echo $TPL_V1["curr_cd_nm"]?></td>
                                            <td><?php echo $TPL_V1["view_yn_txt"]?></td>
                                            
                                            
                                        </tr>
<?php }}?>
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                        <!--/Datatable-->

                    </div>
                </div>


				<div class="modal fade" id="layerPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">New message</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Recipient:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
								<div class="form-group">
									<label for="message-text" class="col-form-label">Message:</label>
									<textarea class="form-control" id="message-text"></textarea>
								</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">저장</button>
								<button type="button" class="btn btn-danger">삭제</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
								
								
							</div>
						</div>
					</div>
				</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
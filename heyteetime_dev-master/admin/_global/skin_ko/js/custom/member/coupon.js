$(function() {
    var sel_files = [];
    $(document)
		// 쿠폰추가 취소시 리스트이동
        .on('click', '#add_coupon-form #btn_duplication', function(e) {
            e.stopPropagation();
			
			alert("중복체크");
        }) 
        // 쿠폰추가 취소시 리스트이동
        .on('click', '#coupon_reg_top .btn-danger', function(e) {
            e.stopPropagation();

            window.location.href = "./member_coupon_list.php";
        }) // 쿠폰등록버튼 누를경우
        .on('click', '#add_coupon-form .btn-primary', function(e) {
			//event.preventDefault();
            var formData = new FormData( $('#add_coupon-form')[0] );
/*
			for (const [key, value] of formData.entries()) {
                console.log(`${key}: ${value}`);
            }*/

			// 필수 입력값 체크
			/*
            var inputFlag = true;
            $('#add_coupon-form .required').each(function(e) {
                if ($(this).val() == '') {
                    alert($(this).attr('placeholder'));
                    $(this).focus();

                    inputFlag = false;
                    return false;
                }
            });

            if( inputFlag == false ) {
                return false;
            }
*/

			var inputCnt = 0;
			var inputFlags = true;
            $('#add_coupon-form .lang').each(function(e) {
				if(this.checked) {
					inputCnt = 1;
				}
            });
            if( inputCnt === 0 ) {
                alert("적용언어를 선택해주세요");
				inputFlags = false;
				return false;
            }
			

			var checkboxes = document.querySelectorAll('input[name="lang_type"]:checked'); // 선택된 체크박스 가져오기
			var checkedValues; // 체크된 값 저장할 배열
			checkboxes.forEach(function(checkbox) {
				if(!checkedValues){
					checkedValues = checkbox.value;
				}else{
					checkedValues = checkedValues + "," + checkbox.value;
				}
			});

			formData.append('type', 'coupon_insert');
			formData.append('langs', checkedValues);

			$.ajax({        // ajax
                url		    : '/member/ajax_member.php',
                type		: 'POST',
                enctype		: 'multipart/form-data',
                processData	: false,
                contentType	: false,
                data		: formData,
                async		: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                },
                success		: function(res) {
					
                    if( res ) {
						
                        window.location.href = "./member_coupon_list.php";
                    }
                }, error : function(e) {
						
                }
            });

        })

		.on('click', '#coupon_reg_bottom .btn-danger', function(e) {
            e.stopPropagation();

            window.history.back();
        }) // 쿠폰등록번튼 눌를경우
		.on('click', '#coupon_reg_bottom .btn-primary', function(e) {
            e.stopPropagation();

            window.history.back();
        })

});

//쿠폰설정값 안보이게 적용언어 선택하면 나타나게
$('#coupon_setting').hide();
$('#coupon-tab-1').hide();

/*active <!--disabled--> */
$('#coupon_ko').change(function() {
	if(this.checked) {
		$("#btn_coupon-1-tab").removeAttr('disabled');
		$("#coupon-tab-1").show();
	} else {
		$("#coupon-1-tab button").prop('disabled', true);
		$("#coupon-tab-1").hide();
	}
});

$('#coupon_en').change(function() {
	if(this.checked) {
		$("#btn_coupon-2-tab").removeAttr('disabled');
		$("#coupon-tab-2").show();
	} else {
		$("#coupon-2-tab button").prop('disabled', true);
		$("#coupon-tab-2").hide();
	}
});

$('#coupon_sp').change(function() {
	if(this.checked) {
		$("#btn_coupon-3-tab").removeAttr('disabled');
		$("#coupon-tab-3").show();
	} else {
		$("#coupon-3-tab button").prop('disabled', true);
		$("#coupon-tab-3").hide();
	}
});

$('#coupon_jp').change(function() {
	if(this.checked) {
		$("#btn_coupon-4-tab").removeAttr('disabled');
		$("#coupon-tab-4").show();
	} else {
		$("#coupon-4-tab button").prop('disabled', true);
		$("#coupon-tab-4").hide();
	}
});

$('#coupon_cn').change(function() {
	if(this.checked) {
		$("#btn_coupon-5-tab").removeAttr('disabled');
		$("#coupon-tab-5").show();
	} else {
		$("#coupon-5-tab button").prop('disabled', true);
		$("#coupon-tab-5").hide();
	}
});

//쿠폰 적용 언어
function LangClick(vals){


    // 버튼의 disabled 속성 제거
    $("#btn_coupon-1-tab").removeAttr('disabled');
	$("#coupon-tab-1").show();
   
}



$('#coupon_3_22').hide();
function use_target_control(gubun){
	
	if(gubun == 0){
		$('#coupon_3_22').hide();
	}else{
		$('#coupon_3_22').show();
	}
}

$('#coupon_4_22').hide();
function use_channel_control(gubun){
	
	if(gubun == 0){
		$('#coupon_4_22').hide();
	}else{
		$('#coupon_4_22').show();
	}

}

$('#ko_coupon_kind0').hide();
$('#ko_coupon_kind1').hide();
$('#en_coupon_kind0').hide();
$('#en_coupon_kind1').hide();
$('#sp_coupon_kind0').hide();
$('#sp_coupon_kind1').hide();
$('#cn_coupon_kind0').hide();
$('#cn_coupon_kind1').hide();
$('#jp_coupon_kind0').hide();
$('#jp_coupon_kind1').hide();
function coupon_kind_chage(vals){
	
	if(vals == "할인권"){
		$('#ko_coupon_kind0').hide();
		$('#ko_coupon_kind1').hide();
		$('#ko_coupon_kind2').show();
		$('#en_coupon_kind0').hide();
		$('#en_coupon_kind1').hide();
		$('#en_coupon_kind2').show();
		$('#jp_coupon_kind0').hide();
		$('#jp_coupon_kind1').hide();
		$('#jp_coupon_kind2').show();
		$('#cn_coupon_kind0').hide();
		$('#cn_coupon_kind1').hide();
		$('#cn_coupon_kind2').show();
		$('#sp_coupon_kind0').hide();
		$('#sp_coupon_kind1').hide();
		$('#sp_coupon_kind2').show();
	}else if(vals == "예약권"){
		$('#ko_coupon_kind0').show();
		$('#ko_coupon_kind1').hide();
		$('#ko_coupon_kind2').hide();
		$('#en_coupon_kind0').show();
		$('#en_coupon_kind1').hide();
		$('#en_coupon_kind2').hide();
		$('#jp_coupon_kind0').show();
		$('#jp_coupon_kind1').hide();
		$('#jp_coupon_kind2').hide();
		$('#cn_coupon_kind0').show();
		$('#cn_coupon_kind1').hide();
		$('#cn_coupon_kind2').hide();
		$('#sp_coupon_kind0').show();
		$('#sp_coupon_kind1').hide();
		$('#sp_coupon_kind2').hide();
	}else if(vals == "금액권"){
		$('#ko_coupon_kind0').hide();
		$('#ko_coupon_kind1').show();
		$('#ko_coupon_kind2').hide();
		$('#en_coupon_kind0').hide();
		$('#en_coupon_kind1').show();
		$('#en_coupon_kind2').hide();
		$('#jp_coupon_kind0').hide();
		$('#jp_coupon_kind1').show();
		$('#jp_coupon_kind2').hide();
		$('#cn_coupon_kind0').hide();
		$('#cn_coupon_kind1').show();
		$('#cn_coupon_kind2').hide();
		$('#sp_coupon_kind0').hide();
		$('#sp_coupon_kind1').show();
		$('#sp_coupon_kind2').hide();
	}else{
		$('#ko_coupon_kind0').hide();
		$('#ko_coupon_kind1').hide();
		$('#ko_coupon_kind2').hide();
		$('#en_coupon_kind0').hide();
		$('#en_coupon_kind1').hide();
		$('#en_coupon_kind2').hide();
		$('#jp_coupon_kind0').hide();
		$('#jp_coupon_kind1').hide();
		$('#jp_coupon_kind2').hide();
		$('#cn_coupon_kind0').hide();
		$('#cn_coupon_kind1').hide();
		$('#cn_coupon_kind2').hide();
		$('#sp_coupon_kind0').hide();
		$('#sp_coupon_kind1').hide();
		$('#sp_coupon_kind2').hide();
	}

}
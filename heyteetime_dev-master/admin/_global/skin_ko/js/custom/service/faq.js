$(function() {
    var sel_files = [];
    $(document)
        // 등록취소시 리스트이동
        .on('click', '#add_notice-form #btn_duplication', function(e) {
            //e.stopPropagation();

            alert("중복체크");
        })
        // 수정 취소시 리스트이동
        .on('click', '#modify_form .btn-danger', function(e) {
            //e.stopPropagation();
            window.location.href = "./service_faq_mng.php";

        })
        // 등록취소시 리스트이동
        .on('click', '#add_form .btn-danger', function(e) {
            //e.stopPropagation();
            window.location.href = "./service_faq_mng.php";

        }) // 추가 등록버튼 누를경우 insert
        .on('click', '#add_form .btn-primary', function(e) {
            //event.preventDefault();

            // 필수 입력값 체크
            var inputFlag = true;
            $('#add_point-form .required').each(function(e) {
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

            var formData = new FormData( $('#add_form')[0] );

            var checkboxes = document.querySelectorAll('input[name="lang_1"]:checked'); // 선택된 체크박스 가져오기
            var checkedValues = ""; // 체크된 값 저장할 문자열
            checkboxes.forEach(function(checkbox) {
                if (checkedValues.length > 0) {
                    checkedValues += ",";
                }
                checkedValues += checkbox.value;

                var index = checkbox.getAttribute('data-index');
                formData.append('subject-' + index, document.querySelector('input[name="subject-' + index + '"]').value);
                formData.append('content-' + index, document.querySelector('textarea[name="content-' + index + '"]').value);
                var fileInputs = document.querySelectorAll('input[name="uploaded_files-' + index + '[]"]');
                fileInputs.forEach(function(fileInput) {
                    if (fileInput.files.length > 0) {
                        for (var i = 0; i < fileInput.files.length; i++) {
                            formData.append('uploaded_files-' + index + '[]', fileInput.files[i]);
                        }
                    }
                });
            });

            formData.append('langs', checkedValues);
            formData.append('mode', 'FaqInsert');

            for (const [key, value] of formData.entries()) {
                console.log(`${key}: ${value}`);
            }


            $.ajax({        // ajax
                url		    : '/service/ajax_service.php',
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

                        window.location.href = "./service_faq_mng.php";
                    }
                }, error : function(e) {

                }
            });

        })
        // 수정 등록버튼 누를경우 modify
        .on('click', '#modify_form .btn-primary', function(e) {
            //event.preventDefault();

            // 필수 입력값 체크
            var inputFlag = true;
            $('#add_point-form .required').each(function(e) {
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

            var formData = new FormData( $('#modify_form')[0] );

            var checkboxes = document.querySelectorAll('input[name="lang_1"]:checked'); // 선택된 체크박스 가져오기
            var checkedValues; // 체크된 값 저장할 배열
            checkboxes.forEach(function(checkbox) {
                if(!checkedValues){
                    checkedValues = checkbox.value;
                }else{
                    checkedValues = checkedValues + "," + checkbox.value;
                }
            });

            formData.append('langs', checkedValues);
            formData.append('mode', 'FaqModify');

            for (const [key, value] of formData.entries()) {
                console.log(`${key}: ${value}`);
            }


            $.ajax({        // ajax
                url		    : '/service/ajax_service.php',
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

                        window.location.href = "./service_faq_mng.php";
                    }
                }, error : function(e) {

                }
            });

        })
});



//구분추가
function insertKind(){

    var formData = new FormData();

    // 폼 데이터 수집
    formData.append('ko', $('#ko').val());
    formData.append('en', $('#en').val());
    formData.append('sp', $('#sp').val());
    formData.append('jp', $('#jp').val());
    formData.append('cn', $('#cn').val());


    formData.append('mode', 'insertFaqKind');

    $.ajax({        // ajax
        url		    : '/service/ajax_service.php',
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

                window.location.href = "./service_faq_regist.php";
            }
        }, error : function(e) {

        }
    });
}
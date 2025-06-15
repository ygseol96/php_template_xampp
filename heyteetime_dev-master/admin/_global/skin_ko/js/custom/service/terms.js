$(function() {

    var sel_files = [];

    $(document)
        // 등록취소시 리스트이동
        .on('click', '#add_form #btn_duplication', function(e) {
            //e.stopPropagation();

            alert("중복체크");
        })
        // 등록취소시 리스트이동
        .on('click', '#add_form .btn-danger', function(e) {
            //e.stopPropagation();
            window.location.href = "./service_terms_mng.php";
        }) // 약관등록 버튼 누를경우
        .on('click', '#add_form .btn-primary', function(e) {
            event.preventDefault();

            const ko_content = ko_editor.getData();
            const en_content = en_editor.getData();
            const sp_content = sp_editor.getData();
            const cn_content = cn_editor.getData();
            const jp_content = jp_editor.getData();


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
/*
            for (const [key, value] of formData.entries()) {
                console.log(`${key}: ${value}`);
            }
*/

            formData.append('mode', 'TermsInsert');
            formData.append('ko_content', ko_content);
            formData.append('en_content', en_content);
            formData.append('sp_content', sp_content);
            formData.append('cn_content', cn_content);
            formData.append('jp_content', jp_content);

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

                       window.location.href = "./service_terms_mng.php";
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


    formData.append('mode', 'insertTermsKind');

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

                window.location.href = "./service_terms_mng.php";
            }
        }, error : function(e) {

        }
    });
}
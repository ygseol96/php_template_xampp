$(function() {
    var sel_files = [];
    var pwChk = /^(?=.*[a-zA-Z])(?=.*[!@#$%^~*+=-])(?=.*[0-9]).{8,16}$/;
    var mailChk = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-za-z0-9\-]+/;;

    $(document)
        // 부서 추가하기
        .on('click', '#department_add-modal button.btn-primary', function(e) {
            var inputFlag = true;
            $('#department_add-modal .required').each(function(e) {
                if( $(this).val() == '' ) {
                    alert( $(this).attr('placeholder') );
                    $(this).focus();

                    inputFlag = false;
                    return false;
                }
            });

            if( inputFlag == false ) {
                return false;
            }
            var formData = new FormData( $('#department_add-modal-form')[0] );
            formData.append('mode', 'department_regist');

            $.ajax({						// ajax
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
                        closeModal('department_add-modal');
                        location.reload();
                    }
                }, error : function(e) {

                }
            });
        })
        // 서비스관리 > 게정관리 > 부서별 권한 등록
        .on('click', '#sbm_department_auth', function(e) {
            e.stopPropagation();

            var formData = new FormData();
            $("#tabList li").each(function() {
                var tab = $(this).data('tab');
                var p_idx = $(this).data('p_idx');

                $('#department-tab-' + tab).find('.mTypeVal').each(function() {
                    if( $(this).is(':checked') ) {
                        formData.append("auth[" + p_idx + "][]", $(this).val());
                    }
                })
            });

            formData.append('mode', 'department_auth_regist');

            $.ajax({						// ajax
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
                    console.log( res );
                }, error : function(e) {

                }
            });
        })
        .on('change', 'select[name=department]', function(e) {
            setUserAuth();
        })
        // 서비스관리 > 계정등록
        .on('click', '.sbm_account_regist', function(e) {
            e.stopPropagation();

            var inputFlag = true;
            $('#service_account_regist_form .required').each(function(e) {
                if( $(this).val() == '' ) {
                    alert( $(this).attr('placeholder') );
                    $(this).focus();

                    inputFlag = false;
                    return false;
                }

                // 비밀번호일경우 비밀번호 타입 체크 ( 영문,숫자,특수문자포함 8자이상 )
                if( $(this).attr('name') == 'passwd') {
                    if( pwChk.test($(this).val()) === false ) {
                        alert( '비밀번호 : 영문,숫자,특수문자포함 8자이상' );
                        $(this).focus();

                        inputFlag = false;
                        return false;
                    }
                }

                if( $(this).attr('name') == 'email' ) {
                    if( mailChk.test( $(this).val() ) == false ) {
                        alert( '이메일 형식이 아닙니다.' );
                        $(this).focus();

                        inputFlag = false;
                        return false;
                    }
                }
            });

            if( inputFlag == false ) {
                return false;
            }

            var formData = new FormData( $('#service_account_regist_form')[0] );

            $('#authArea').find('.mTypeVal').each(function() {
                if( $(this).is(':checked') ) {
                    formData.append("auth[]", $(this).val());
                }
            });

            formData.append('mode', 'account_regist');

            $.ajax({						// ajax
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
                    if( res == 1 ) {
                        $(location).attr('href', '/sys/service/service_account.php');
                    }
                }, error : function(e) {

                }
            });
        })
    ;

    // 게정등록의 신규등록일경우 ( accType = 0 ), 수정일경우 ( accType = 1 )
    // 신규일경우 부서별 권한 세팅
    if( typeof accType == 'undefined' || accType == '0' ) {
        setUserAuth();
    }

    function setUserAuth(mode, department) {
        var formData = new FormData();

        formData.append('mode', 'set_department_auth');
        formData.append('department', $('select[name=department]').val());

        $.ajax({						// ajax
            url		    : '/service/ajax_service.php',
            type		: 'POST',
            enctype		: 'multipart/form-data',
            processData	: false,
            contentType	: false,
            data		: formData,
            async		: false,
            dataType    : 'JSON',
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success		: function(res) {
                $('#authArea').empty();
                $('#authArea').append( res.html );
            }, error : function(e) {

            }
        });
    }

    $('input[name="sch_date"]').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });

    $('input[name="sch_date"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });

    $('input[name="sch_date"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
});

$(function() {
    var sel_files = [];
    $(document)
        // 정보관리 > 언어관리 > 언어추가
        .on('click', '#add_lang-modal .btn-primary', function(e) {
            e.stopPropagation();

            // 필수 입력값 체크
            var inputFlag = true;
            $('#add_lang-modal .required').each(function(e) {
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

            var formData = new FormData( $('#add_lang-modal-form')[0] );
            var mode = 'lang_regist';

            formData.append('type', mode);

            $.ajax({						// ajax
                url		    : '/infomation/ajax_infomation.php',
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
                        closeModal('add_lang-modal');
                        location.reload();
                    }
                }, error : function(e) {

                }
            });
        })
        // 정보관리 > 언어관리 > 언어 아이콘 삭제
        .on('click', '.item_list button.btn-danger-soft', function(e) {
            e.stopPropagation();

            console.log( $(this).data('lang_idx') );
            var dd = confirm('아이콘을 삭제하시겠습니까?');
            if( dd ) {
                var formData = new FormData();

                formData.append('type', 'icon_delete');
                formData.append('idx', $(this).data('lang_idx'));

                $.ajax({						// ajax
                    url		    : '/infomation/ajax_infomation.php',
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
                            location.reload();
                        }
                    }, error : function(e) {

                    }
                });
            }
        })
        .on('click', '#btn_lang_all_save', function(e) {
            e.stopPropagation();

            var formData = new FormData( $('#lang_modify_form')[0] );
            // const data = [];
            $('div.item_list').each(function(index) {
                const item = [];
                var inputFile = $(this).find('input[type=file]');
                var _files = inputFile[0].files[0];

                var f_val = '';
                if( typeof _files != 'undefined' && _files != '' ) {
                    f_val = index;
                }

                formData.append('code[]', $(this).find('input[name=code]').val());
                formData.append('name[]', $(this).find('input[name=name]').val());
                formData.append('disp_name[]', $(this).find('input[name=disp_name]').val());
                formData.append('disp_order[]', $(this).find('select[name=disp_order]').val());
                formData.append('icon[]', f_val);
            });

            formData.append('type', 'lang_update');

            $.ajax({        // ajax
                url		    : '/infomation/ajax_infomation.php',
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
                        location.reload();
                    }
                }, error : function(e) {

                }
            });
        })
        // 다국어관리 > 카테고리 등록
        .on('click', '#add_category-modal button.btn-primary', function(e) {
            var inputFlag = true;
            $('#add_category-modal .required').each(function(e) {
                if( $(this).val() == '' ) {
                    alert($(this).attr('placeholder'));
                    $(this).focus();
                    inputFlag = false;
                    return false;
                }
            });

            if( inputFlag == false ) {
                return false;
            }

            var formData = new FormData( $('#add_category-modal-form')[0] );

            var idx     = $(this).data('idx');
            var pidx    = $(this).data('p_idx');
            var gubun   = $(this).data('gubun');

            var mode = 'category_regist';

            formData.append('gubun', gubun);
            formData.append('idx', idx);
            formData.append('p_idx', pidx);

            if( idx != '' ) {
                mode = 'category_modify';
            }
            formData.append('type', mode);

            $.ajax({						// ajax
                url		    : '/infomation/ajax_infomation.php',
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
                        closeModal('add_category-modal');
                        location.reload();
                    }
                }, error : function(e) {

                }
            });
        })
        // 다국어관리 > 카테고리 등록 ( 다국어 )
        .on('click', '#multilingual_save-modal button.btn-primary', function(e) {
            e.stopPropagation();

            var code1 = $('#categoryArea0').find('.border-primary').data('code');
            var code2 = $('#categoryArea1').find('.border-primary').data('code');
            var code3 = $('#categoryArea2').find('.border-primary').data('code');

            var p_code = code1 + '_' + code2 + '_' + code3;

            /*var data = [];
            $('#multilingual_save-modal input').each(function() {
                data.push({'name' : $(this).attr('name'), 'value' : $(this).val()});
            });

            data.push({'name' : 'type', 'value' : 'inMultilingual'});*/

            let data = new FormData();
            $('#multilingual_save-modal input').each(function() {
                data.append($(this).attr('name'), $(this).val() );
            });

            data.append('p_code', p_code);
            data.append('type', 'inMultilingual');

            $.ajax({						// ajax
                url		    : '/infomation/ajax_infomation.php',
                type		: 'POST',
                processData	: false,
                contentType	: false,
                data		: data,
                async		: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                },
                success		: function(res) {
                    console.log( res );
                    if( res == 1 ) {
                        location.reload();
                    }
                }, error : function(e) {
                    console.log( e );
                }
            });
        })
        // 서비스관리 > 메뉴관리 > 하위메뉴 호출
        .on('click', '.py-2 > .mb-2', function() {

            var idx = $(this).data('idx');
            var next = $(this).closest('.py-2').data('depth') + 1;
            var formData = new FormData();

            $("[id^='topCate']").each(function(e) {
                if( $(this).find('.py-2').data('depth') > next ) {
                    $(this).hide();
                }
            });

            $(this).closest('.py-2').find('.mb-2').removeClass('border-r-2 border-primary border-opacity-50');
            $(this).closest('.py-2').find('.flex').removeClass('border border-slate-200 bg-slate-50');

            $(this).addClass('border-r-2 border-primary border-opacity-50');
            $(this).find('.flex').addClass('border border-slate-200 bg-slate-50');

            formData.append('type', 'show_sub_category');
            formData.append('idx', idx);
            formData.append('depth', next);

            // 마지막 다국어 설정 탭일경우 코드값도 같이 넘겨줌
            if( next == 3 ) {
                var code1 = $('#categoryArea0').find('.border-primary').data('code');
                var code2 = $('#categoryArea1').find('.border-primary').data('code');
                var code3 = $('#categoryArea2').find('.border-primary').data('code');

                formData.append('code', code1 + '_' + code2 + '_' + code3 );
            }

            $.ajax({
                url: '/infomation/ajax_infomation.php',
                type: 'POST',
                processData: false,
                contentType: false,
                data: formData,
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function (res) {
                    var obj = JSON.parse( res );
                    var html = '';
                    $.each(obj, function(idx) {
                        html += '' +
                            '<div id="cate_' + obj[idx]['idx'] + '" class="mb-2 px-2" data-idx="' + obj[idx]['idx'] + '" data-code="' + obj[idx]['code_name'] + '">' +
                            '   <div class="flex items-center justify-between w-full p-3">' +
                            '       <div>' +
                            '           <p class="mt-1 font-bold text-base">' + obj[idx]['name'] + '</p>' +
                            '       </div>' +
                            '       <div class="dropdown">' +
                            '           <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown">' +
                            '               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-vertical" class="lucide lucide-more-vertical w-5 h-5 text-slate-500">' +
                            '                   <circle cx="12" cy="12" r="1"></circle>' +
                            '                   <circle cx="12" cy="5" r="1"></circle>' +
                            '                   <circle cx="12" cy="19" r="1"></circle>' +
                            '               </svg>' +
                            '           </button>' +
                            '           <div class="dropdown-menu w-32">' +
                            '               <ul class="dropdown-content">' +
                            '                   <li> <a href="javascript:;" class="dropdown-item" onclick="modify_menu(' + obj[idx]['idx'] + ')""> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>' +
                            '                   <li> <a href="javascript:;" class="dropdown-item" onclick="delete_menu(' + obj[idx]['idx'] + ')""> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>' +
                            '               </ul>' +
                            '           </div>' +
                            '       </div>' +
                            '   </div>' +
                            '</div>';
                    });
                    $('#categoryArea' + next).empty().append(html);
                    $('#topCate' + next).show();
                }
            });
        })
    ;
});

function create_category(gubun)
{
    // 폼 초기화
    $('#add_category-modal-form')[0].reset();

    // 저장 버튼에 구분값 추가 0: 대메뉴, 1: 중메뉴
    $('#add_category-modal button.btn-primary').data('gubun', gubun);
    $('#add_category-modal button.btn-primary').data('p_idx', '');
    $('#add_category-modal button.btn-primary').data('idx', '');

    if( gubun > 0 ) {
        var target = gubun - 1;
        var p_idx = $('#categoryArea'+target).find('.border-primary').data('idx');
        $('#add_category-modal button.btn-primary').data('p_idx', p_idx);
    }
    modalOpen('add_category-modal');
}

function create_multi_lang() {

    var code1 = $('#categoryArea0').find('.border-primary').data('code');
    var code2 = $('#categoryArea1').find('.border-primary').data('code');
    var code3 = $('#categoryArea2').find('.border-primary').data('code');

    $('#parent_code').text(code1 + '_' + code2 + '_' + code3);

    modalOpen('multilingual_save-modal');
}

// 정보관리 > 다국어관리 > 수정버튼
function modifyCategory( idx )
{
    // 폼 초기화
    $('#add_category-modal-form')[0].reset();

    let data = new FormData();
    data.append('type', 'get_category_content');
    data.append('idx', idx);

    $.ajax({						// ajax
        url: '/infomation/ajax_infomation.php',
        type: 'POST',
        processData: false,
        contentType: false,
        data: data,
        async: false,
        dataType: 'JSON',
        beforeSend: function(xhr) {
            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        },
        success: function (res) {
            if( res.idx != '' ) {
                $('#add_category-modal-form').find('input[name=code]').val(res.code_name);
                $('#add_category-modal-form').find('input[name=name]').val(res.name);
                $('#add_category-modal .btn-primary').data('idx', res.idx);
            } else {
                console.log('error');
            }
            modalOpen('add_category-modal');
        }
    });
}
$(function() {
    var sel_files = [];
    $(document)
        // 메뉴관리 > 메뉴추가 저장 버튼 클릭
        .on('click', '#menu_save-modal button.btn-primary', function(e) {
            var inputFlag = true;
            $('#menu_save-modal .required').each(function(e) {
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

            var formData = new FormData( $('#menu_save-modal-form')[0] );

            if( sel_files.length > 0 ) {
                for( var i = 0; i < sel_files.length; i++ ) {
                    formData.append( 'icon[]', sel_files[i] );
                }
                formData.append( 'image_count', sel_files.length );
            }

            var idx     = $(this).data('idx');
            var pidx    = $(this).data('p_idx');
            var gubun   = $(this).data('gubun');
            var mode = 'menu_regist';

            formData.append('gubun', gubun);
            formData.append('idx', idx);
            formData.append('p_idx', pidx);

            if( idx != '' ) {
                mode = 'menu_modify';
            }
            formData.append('mode', mode);

            /*
            console.log('------');
            console.log( 'mode : ' + formData.get('mode') );
            console.log( 'idx : ' + formData.get('idx') );
            console.log( 'p_idx : ' + formData.get('p_idx') );
            console.log( 'code_name : ' + formData.get('code_name') );
            console.log( 'gubun : ' + formData.get('gubun') );
            console.log( 'name : ' + formData.get('name') );
            console.log( 'url : ' + formData.get('url') );
            console.log('------');
            */
            $.ajax({						// ajax
                url		    : 'ajax_service.php',
                type		: 'POST',
                enctype		: 'multipart/form-data',
                processData	: false,
                contentType	: false,
                data		: formData,
                async		: false,
                success		: function(res) {
                    if( res ) {
                        closeModal('menu_save-modal');
                        location.reload();
                    }
                }, error : function(e) {

                }
            });
        })
        // 메뉴 아이콘 선택
        .on('change', '#menu_save-modal-upload_file', function(e) {

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);

            filesArr.forEach(function(f) {
                sel_files.push(f);
            });
        })
        // 서비스관리 > 메뉴관리 > 대메뉴 클릭 ( 중메뉴 노출 )
        .on('click', '#menuArea > .mb-2', function() {
            $('#menuArea > .mb-2').removeClass('border-r-2 border-primary border-opacity-50');
            $('#menuArea > .mb-2 > .flex').removeClass('border border-slate-200 bg-slate-50');

            $(this).addClass('border-r-2 border-primary border-opacity-50');
            $(this).find('.flex').addClass('border border-slate-200 bg-slate-50');

            var idx = $(this).data('idx');
            var formData = new FormData();

            formData.append('mode', 'show_sub_menu');
            formData.append('idx', idx);

            $.ajax({
                url: 'ajax_service.php',
                type: 'POST',
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                data: formData,
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function (res) {
                    console.log( res );
                    var obj = JSON.parse( res );
                    var html = '';
                    $.each(obj, function(idx) {
                        html += '' +
                            '<div class="mb-2 px-2">' +
                            '   <div class="flex items-center justify-between w-full p-3">' +
                            '       <div>' +
                            '           <span class="text-xs text-slate-500">' + obj[idx]['code_name'] + '</span>' +
                            '               <p class="mt-1 font-bold text-base">' + obj[idx]['name'] + '</p>' +
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
                    $('#subMenuArea').empty().append(html);
                    $('#subMenu').show();
                }
            });
        })
        // 서비스관리 > 메뉴관리 > 중메뉴 클릭 ( 중메뉴 노출 )
        .on('click', '#subMenuArea > .mb-2', function() {
            $('#subMenuArea > .mb-2').removeClass('border-r-2 border-primary border-opacity-50');
            $('#subMenuArea > .mb-2 > .flex').removeClass('border border-slate-200 bg-slate-50');

            $(this).addClass('border-r-2 border-primary border-opacity-50');
            $(this).find('.flex').addClass('border border-slate-200 bg-slate-50');
        })
    ;
});

/**
 * 메뉴관리 + 클릭시 모달창 등록
 * gubun : 0 => 대메뉴, 1 => 중메뉴
 */
function create_menu(gubun)
{
    // 폼 초기화
    $('#menu_save-modal-form')[0].reset();
    
    // 저장 버튼에 구분값 추가 0: 대메뉴, 1: 중메뉴
    $('#menu_save-modal button.btn-primary').data('gubun', gubun);
    $('#menu_save-modal button.btn-primary').data('p_idx', '');
    $('#menu_save-modal button.btn-primary').data('idx', '');

    if( gubun == 1 ) {
        var p_idx = $('#menuArea').find('.border-primary').data('idx');
        console.log( p_idx );
        $('#menu_save-modal button.btn-primary').data('p_idx', p_idx);
    }
    modalOpen('menu_save-modal');
}

/**
 * 메뉴관리 + 클릭시 모달창 수정
 * gubun : 0 => 대메뉴, 1 => 중메뉴
 */
function modify_menu(idx)
{
    // 폼 초기화
    $('#menu_save-modal-form')[0].reset();

    var code = $(this).closest('.text-xs').text();

    var formData = new FormData();
    formData.append('mode', 'get_menu_content');
    formData.append('idx', idx);

    $.ajax({						// ajax
        url: 'ajax_service.php',
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        async: false,
        dataType: 'json',
        success: function (res) {
            if( res.idx ) {
                $('#menu_save-modal input[name=code]').val(res.code_name);
                $('#menu_save-modal input[name=name]').val(res.name);
                $('#menu_save-modal input[name=url]').val(res.url);
                $('#menu_save-modal button.btn-primary').data('idx', res.idx);
                $('#menu_save-modal button.btn-primary').data('p_idx', res.p_idx);
                $('#menu_save-modal button.btn-primary').data('gubun', res.gubun);
            }
            modalOpen('menu_save-modal');
        }
    });
}

/**
 * 메뉴관리 + 클릭시 삭제 진행
 * gubun : 0 => 대메뉴, 1 => 중메뉴
 */
function delete_menu(idx='')
{
    if( idx == '' ) {
        return false;
    }

    var dd = confirm('선택하신 메뉴를 삭제하시겠습니까?');
    if( dd ) {
        var formData = new FormData();
        formData.append('idx', idx);
        formData.append('mode', 'delete_menu');

        $.ajax({						// ajax
            url: 'ajax_service.php',
            type: 'POST',
            processData: false,
            contentType: false,
            data: formData,
            async: false,
            //dataType: 'json',
            success: function (res) {
                if( res == 1 ) {
                    location.reload();
                } else {
                    alert('오류가 발생하였습니다.');
                    return false;
                }
            }
        });
    }
}

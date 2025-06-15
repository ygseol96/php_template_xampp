$(function() {

    let data;
    $(document)
        // 필터 > 지역정보 > 대륙 선택시 국가 항목 노출
        .on('change', 'select[name=filterArea]', function(e) {
            e.stopPropagation();

            // 국가, 지역, 도시 초기화
            $('#f_nation').not(':first').empty();
            $('#f_state').not(':first').empty();
            $('#f_city').not(':first').empty();

            $.get('/product/ajax_product.php', {
                'type':'getFilterNation',
                'f_area' : $(this).val()
            }, function(res){
                var html = '';
                $.each(res, function(index, item) {
                    html += '' +
                        '<option value="'+ item.NAT_CD +'">'+ item.NAT_NM +'</option>';
                       /* '<li class="flex items-center mt-0.5">' +
                        '   <input type="radio" class="form-check-input" value="' + item.NAT_CD + '" id="member_check_2_' + index + '" name="filterNation">' +
                        '   <label for="member_check_2_' + index + '" class="block w-full px-2 py-1">' + item.NAT_NM + '</label>' +
                        '</li>';*/
                });

                $('#f_nation').append(html);

            },'json');
        })
        // 필터 > 지역정보 > 국가 선택시 지역 항목 노출
        .on('change', 'select[name=filterNation]', function(e) {
            e.stopPropagation();

            // 지역, 도시 초기화
            $('#f_state').not(':first').empty();
            $('#f_city').not(':first').empty();

            $.get('/product/ajax_product.php', {
                'type':'getFilterState',
                'f_nation' : $(this).val()
            }, function(res, status){
                var html = '';
                $.each(res, function(index, item) {
                    console.log( res );
                    html += '' +
                        '<option value="'+ item.STATE_CD +'">'+ item.STATE_NM +'</option>';
                       /* '<li class="flex items-center mt-0.5">' +
                        '   <input type="radio" class="form-check-input" value="' + item.STATE_CD + '" id="member_check_3_' + index + '" name="filterState">' +
                        '   <label for="member_check_3_' + index + '" class="block w-full px-2 py-1">' + item.STATE_NM + '</label>' +
                        '</li>';*/
                });

                $('#f_state').append(html);

            },'json');
        })
        // 필터 > 지역정보 > 지역 선택시 지역 항목 노출
        .on('change', 'select[name=filterState]', function(e) {
            e.stopPropagation();

            // 도시 초기화
            $('#f_city').not(':first').empty();

            $.get('/product/ajax_product.php', {
                'type':'getFilterCity',
                'f_state' : $(this).val()
            }, function(res, status){
                var html = '';
                $.each(res, function(index, item) {
                    console.log( res );
                    html += '' +
                        '<option value="'+ item.CITY_NM +'">'+ item.CITY_NM +'</option>';
                });

                $('#f_city').append(html);

            },'json');
        })
        // 적용언어 선택시 골프장 설명탭 활성/비활성 처리
        .on('click', "[id^='teetime_1_']", function(e) {
            var isTab = false;
            $("[id^='teetime_1_']").each(function() {
                var _index = $(this).data('index');

                if( $(this).is(':checked') ) {
                    isTab = true;
                    $("#teetime-" + _index + "-tab").find('button').prop('disabled', false);
                } else {
                    $("#teetime-" + _index + "-tab").find('button').prop('disabled', true);
                    $("#teetime-" + _index + "-tab").find('button').removeClass('active');
                }
            });

            if( isTab == false ) {
                $('.nav-item > button').removeClass('active');
                $("[id^=teetime-tab-]").removeClass('active');
            }
        })
        // 티타임목록 엑셀 다운로드
        .on('click', '.btn-outline-secondary', function() {
            let fileName = '티타임_목록_' + getFormattedDate_yymmdd();

            let data = {
                type: 'exportExcelForTeetimeList',
                fileName : fileName,
                ...getParameterData()
            };

            $.ajax({
                url: '/product/ajax_product.php',
                method: 'GET',
                xhrFields: {
                    responseType: 'blob'
                },
                data: data,
                success: function(data) {
                    var blob = new Blob([data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = fileName +'.xlsx';
                    link.click();
                },
                error : function (request,status,error) {
                    console.log(error);
                }
            });
        })
        // 티타임저장하기
        .on('click', '.btn_submit', function(e) {
            e.stopPropagation();

            var formData = $('#teetimeRatioForm').serializeArray();
            formData.push({'name':'type', 'value':'getTeetimeRatio'});

            $.ajax({
                type : "GET",
                url : "/product/ajax_product.php",
                data : formData,
                success : function(res){
                    console.log(res);
                    if( res == 1 ) {
                        location.reload();
                    }
                },
                error : function(request, status, error){
                    console.log( error );
                }
            });
        })
    ;
});

function getProductList() {
    table.setData("/product/ajax_product.php", getParameterData());
}

function getParameterData() {

    let f_date= JSON.stringify($("#filterDate").val().split(' ~ ').map(date => date.replace(/\./g, '-')));
    var f_area  = $('input[name=filterArea]:checked').val();
    var f_nation= $('input[name=filterNation]:checked').val();
    var f_state = $('input[name=filterState]:checked').val();
    var f_city  = $('input[name=filterCity]:checked').val();
    var f_kind  = $('input[name=filterKind]:checked').val();
    var f_use_yn= $('input[name=filterUse]:checked').val()
    var f_text  = $('input[name=filterField]').val();

    return  {
        f_date,
        f_area,
        f_nation,
        f_state,
        f_city,
        f_kind,
        f_use_yn,
        f_text,
    };
}
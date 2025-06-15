<?php /* Template_ 2.2.8 2024/06/14 15:13:23 C:\Users\코드아이디어\projects\heyteetime_dev\admin\_global\skin_ko\reservation\reservation_mng.tpl 000021951 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center mt-8">
    <h2 class="text-xl font-bold mr-auto">예약 목록</h2>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약상태</div>
        <select id="reservation_status" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
<?php if(is_array($TPL_R1=$TPL_VAR["INC"]['reservation_type'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_K1=>$TPL_V1){?>
                <option value="<?php echo $TPL_K1?>"><?php echo $TPL_V1?></option>
<?php }}?>
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약일</div>
        <div class="relative w-full md:w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <input type="text" id="reservation_date" class="datepicker form-control pl-12">
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">지역</div>
        <div class="flex flex-wrap items-center gap-1 flex-1">
            <select name="" id="continents" class="form-select md:w-auto">
                <option value="" disabled hidden selected>대륙</option>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['continents'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                    <option value="<?php echo $TPL_V1["cd"]?>"><?php echo $TPL_V1["cd_name"]?></option>
<?php }}?>
            </select>
            <select name="" id="nations" class="form-select w-40">
                <option value="" disabled hidden selected>국가</option>
            </select>
            <select name="" id="cities" class="form-select w-40">
                <option value="" disabled hidden selected>도시</option>
            </select>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약번호</div>
        <input type="text" id="bookingNumber" class="form-control w-32">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">결제상태</div>
        <select id="payment_status" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
<?php if(is_array($TPL_R1=$TPL_VAR["INC"]['payment_type'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_K1=>$TPL_V1){?>
                <option value="<?php echo $TPL_K1?>"><?php echo $TPL_V1?></option>
<?php }}?>
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">마일리지</div>
        <select id="is_mileage_used" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
            <option value="Y">사용</option>
            <option value="N">미사용</option>
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">쿠폰</div>
        <select id="is_coupon_used" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
            <option value="Y">사용</option>
            <option value="N">미사용</option>
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상품구분</div>
        <select id="product_type" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
<?php if(is_array($TPL_R1=$TPL_VAR["INC"]['prod_kind'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_K1=>$TPL_V1){?>
                <option value="<?php echo $TPL_K1?>"><?php echo $TPL_V1?></option>
<?php }}?>
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약상품명</div>
        <input type="text" id="product_name" class="form-control w-44">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약인원수</div>
        <select id="total_partner" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">내장자</div>
        <select id="is_partner_info_entered" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
            <option value="N">미입력</option>
            <option value="Y">입력완료</option>
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약자명,연락처</div>
        <input type="text" id="reservationInfo" class="form-control w-36">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">동반자명</div>
        <input type="text" id="partnerInfo" class="form-control w-36">
    </div>
    <button class="btn btn-primary-soft" onclick="getInquiryList()">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 <span id="total">0</span>건</div>
        <div class="flex items-center gap-3">
            <button class="btn btn-primary w-30" onclick="modalOpen('confirm_check-modal')">예약확정</button>
            <button class="btn btn-danger w-30" onclick="modalOpen('cancel_check-modal')">예약취소</button>
            <div class="dropdown w-40 sm:w-auto">
                <button id="tabulator-export-xlsx" class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export </button>
            </div>
        </div>
    </div>

    <!-- 테이블 -->
    <div class="overflow-x-auto mt-3">
        <div id="tabulator" class="table-report table-report--tabulator"></div>
    </div>
</div>

<div id="confirm_check-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">안내</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="items-center gap-2 mb-2">
                    <div class="shrink-0  py-2 font-semibold message">예약을 확정하시겠습니까?</div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button class="px-6 btn btn-primary" onclick="confirmReservation()">확인</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="cancel_check-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">안내</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="items-center gap-2 mb-2">
                    <div class="shrink-0  py-2 font-semibold message">예약을 취소하시겠습니까?</div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button class="px-6 btn btn-primary" onclick="cancelReservation()">확인</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 멀티셀렉박스
    let reservation_status = new TomSelect('#reservation_status', options);
    let payment_status = new TomSelect('#payment_status', options);
    let is_mileage_used = new TomSelect('#is_mileage_used', options);
    let is_coupon_used = new TomSelect('#is_coupon_used', options);
    let product_type = new TomSelect('#product_type', options);
    let total_partner = new TomSelect('#total_partner', options);
    let is_partner_info_entered = new TomSelect('#is_partner_info_entered', options);

    // datepicker
    const inquiry_date = new Litepicker({
        element: document.querySelector('#reservation_date'),
        singleMode: false,
        firstDay: 0,
        format: 'YYYY.MM.DD',
        lang: "ko-KR",
        numberOfColumns: 2,
        numberOfMonths: 2,
        delimiter: " ~ ",
        tooltipText: {
            other: "일"
        },
        dropdowns: {
            minYear: 1990,
            maxYear: null,
            months: true,
            years: true
        },
        startDate : new Date(),
        endDate : new Date(new Date().setDate(new Date().getDate() + 30)),
    })

    // 지역 dropdown
    // 1. 대륙
    $("#continents").on('change', function (e) {
        $("#nations").val('');
        $("#cities").val('');
        $("#nations option").not(':first').remove();
        $("#cities option").not(':first').remove();

        let $continent = $(this).val();

        $.get('/member/ajax_member.php', {
            'type': 'getNation',
            'idx' : $continent,
        }, function(result) {
            if(result.length > 0) {
                for (const nation of result) {
                  $("#nations").append("<option value=" + nation.nat_seq +" data-continent="+ nation.cd + ">" + nation.nat_nm_kr + "</option>")
                }
            }
        },'json');
    })

    //2. 국가
    $("#nations").on('change', function (e) {
        $("#cities").val('');
        $("#cities option").not(':first').remove();

        const $nation = $(this).val();
        $.get('/member/ajax_member.php', {
            'type': 'getCities',
            'idx' : $nation,
        }, function(result) {
            console.log(result);
            if(result.length > 0) {
                for (const city of result) {
                  $("#cities").append("<option value="+ city.city_seq +" data-nation=" + city.nat_seq +">" + city.city_nm_kr + "</option>")
                }
            }
        },'json');
    })

    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        pagination: true,
        paginationMode: "remote",
        ajaxURL : "/reservation/ajax_reservation.php",
        ajaxParams: function() {
            return {
                type: 'getReservationList',
                ...getParameterData()
            };
        },
        ajaxResponse : function (url, params, response) {
            console.log(response);
            $("#total").text(response.total);
            return response;
        },
        printAsHtml: true,
        printStyled: true,
        paginationSize: 20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",
        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:100, headerSort:false, formatter:"html"},
            {title:"예약번호", field:"booking_number", minWidth:180, headerSort:false },
            {title:"예약상태", field:"state", minWidth:130, headerSort:false, formatter:"html"},
            {title:"예약지역<br/>예약상품명", field:"name", minWidth:150, headerSort:false, formatter:"html"},
            {title:"인원수<br/>옵션", field:"option", minWidth:150, headerSort:false, formatter:"html"},
            {title:"결제상태<br/>결제수단", field:"payment", minWidth:150, headerSort:false, formatter:"html"},
            {title:"예약총액<br/>결제금액", field:"total", minWidth:100, headerSort:false, formatter:"html"},
            {title:"쿠폰명<br/>마일리지", field:"coupon", minWidth:100, headerSort:false, formatter:"html"},
            {title:"내장자<br/>연락처", field:"phone", minWidth:100, headerSort:false, formatter:"html"},
            {title:"예약일<br/>취소일", field:"date", minWidth:100, headerSort:false, formatter:"html"},
        ],
        rowFormatter: function (row) {
            const data = row.getData();

            // 번호
            let number = ((table.getPage()-1) * table.getPageSize()) + row.getPosition(true);
			// 예약확정/예약취소인 경우 체크박스 숨기기
            row.getCell('number').setValue('<input type=\'checkbox\' class=\'form-check-input reservationListCheckBox\' value="'+ data.idx +'"/>&nbsp' + number);

            //예약상태, 예약정보
            let className = '';
            switch (data.booking_status) {
                case '예약요청':
                    className = 'text-danger';
                    break;
                case '예약확정':
                    className = 'text-primary';
                    break;
            }
            row.getCell('state').setValue("<span><b class='"+ className +"'>" + data.booking_status + "</b><br/></span>");

            // 예약지역, 예약상품명
            // row.getCell('name').setValue("<span>"+ data.continent_name + " > " + data.nation_name + " > " + data.state_name + " > " + data.city_name + "<br/>" + data.prod_name +"</span>");
            row.getCell('name').setValue("<span>"+ data.continent_name + " > " + data.nation_name + "<br/>" + data.prod_name +"</span>");

            // 인원수, 옵션
            row.getCell('option').setValue("<span>"+ data.person_count +"명<br/>" + data.selectedOption_kr + "</span>");

            //결제상태, 결제수단
            row.getCell('payment').setValue("<span>"+ data.payment_status +"<br/>"+ data.payment_method +"</span>");

            //예약총액, 결제금액
            row.getCell('total').setValue("<span>"+ data.currency_code + ' ' + data.sale_price +"<br/>"+ data.price_currency + ' ' + data.price +"</span>");

            //쿠폰명, 마일리지
            row.getCell('coupon').setValue("<span>"+ data.used_coupon_name +"<br/>"+ data.is_point_used +"</span>");

            //내장자, 연락처
            row.getCell('phone').setValue("<span>"+ data.partner_info_input_status +"<br/>"+ data.rev_phone_number +"</span>");

            //예약일, 취소일
            const cancelDate = data.cancel_date ?? '-';
            row.getCell('date').setValue("<span>"+ data.reg_date +"<br/>" + cancelDate + "</span>");
        }
    });

    // row 클릭시 detail 페이지로 링크
    table.on("cellClick", function(e, cell){
        if(cell.getField() !== 'number') {
            location.href='./reservation_detail.php?idx=' + cell.getData().idx;
        }
    });

    // 검색하기
    function getInquiryList() {
        table.setData("/reservation/ajax_reservation.php");
    }

    // Export
    $("#tabulator-export-xlsx").on("click", function (event) {
        let fileName = '예약목록_' + getFormattedDate_yymmdd();

        let data = {
            type: 'getExcelForReservationList',
            fileName : fileName,
            ...getParameterData()
        };

        $.ajax({
            url: '/reservation/ajax_reservation.php',
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
            error : function (e) {
                console.log(e);
            }
        });
    });

    function getParameterData() {
        // 예약상태
        let reservationStatus = reservation_status.getValue().includes('all') ? '' : JSON.stringify(reservation_status.getValue());

        // 예약일
        const reg_date = JSON.stringify($("#reservation_date").val().split(' ~ ').map(date => date.replace(/\./g, '-')));

        // 예약정보 입력여부

        // 지역(대륙)
        const continent = $("#continents").val() ?? '';

        // 지역(국가)
        const nation = $("#nations").val() ?? '';

        // 지역(도시)
        const city = $("#cities").val() ?? '';

        // 예약번호
        const bookingNumber = $("#bookingNumber").val();

        // 결제 상태

        // 결제 수단

        // 결제 금액

        // 마일리지
        const isMileageUsed = is_mileage_used.getValue().includes('all') ? '' : JSON.stringify(is_mileage_used.getValue());

        // 쿠폰
        const isCouponUsed = is_coupon_used.getValue().includes('all') ? '' : JSON.stringify(is_coupon_used.getValue());

        // 상품구분
        let productType = product_type.getValue().includes('all') ? '' : JSON.stringify(product_type.getValue());

        // 상품옵션
        // let productOption = [];
        // $(".product_option input:checked").each(function() {
        //     productOption.push($(this).val());
        // })
        // productOption = JSON.stringify(productOption);

        // 예약상품명
        const productName = $("#product_name").val();

        // 예약인원수
        let totalPartner = total_partner.getValue().includes('all') ? '' : JSON.stringify(total_partner.getValue());

        // 내장자정보 입력여부
        const isPartnerInfoEntered = is_partner_info_entered.getValue().includes('all') ? '' : JSON.stringify(is_partner_info_entered.getValue());

        // 예약자명, 연락처
        const reservationInfo = $("#reservationInfo").val();

        // 동반자명
        const partnerInfo = $("#partnerInfo").val();

        return {
            reservationStatus,
            reg_date,
            bookingNumber,
            continent,
            nation,
            city,
            isMileageUsed,
            isCouponUsed,
            productType,
            productName,
            totalPartner,
            isPartnerInfoEntered,
            reservationInfo,
            partnerInfo,
        }
    }

    function confirmReservation() {
        closeModal("confirm_check-modal");

        let arr = [];
        $(".reservationListCheckBox:checked").each(function() {
            arr.push($(this).val());
        })
        arr = arr.join(',');

        if(arr === '[]') {
            $('#submit_error-modal .message').text('예약확정할 예약건을 선택해주세요.');
            modalOpen("submit_error-modal")
            return;
        }

        $.ajax({
            url: '/reservation/ajax_reservation.php',
            method: 'POST',
            data : {
                type: 'patchConfirmReservation',
                idx: arr,
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (result) {
                console.log(result);
                getInquiryList();
            },
            error: function(e) {
                console.log(e)
                $('#submit_error-modal .message').text(e.responseJSON.msg);
                modalOpen("submit_error-modal")
            }
        })
    }

    function cancelReservation() {
        closeModal("cancel_check-modal");

        let arr = [];
        $(".reservationListCheckBox:checked").each(function() {
            arr.push($(this).val());
        })
        arr = arr.join(',');

        if(arr === '[]') {
            $('#submit_error-modal .message').text('예약취소할 예약건을 선택해주세요.');
            modalOpen("submit_error-modal")
            return;
        }

        $.ajax({
            url: '/reservation/ajax_reservation.php',
            method: 'POST',
            data : {
                type: 'patchCancelReservation',
                idx: arr,
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (result) {
                console.log(result);
                getInquiryList();
            },
            error: function(e) {
                console.log(e)
                $('#submit_error-modal .message').text(e.responseJSON.msg);
                modalOpen("submit_error-modal")
            }
        })
    }
</script>
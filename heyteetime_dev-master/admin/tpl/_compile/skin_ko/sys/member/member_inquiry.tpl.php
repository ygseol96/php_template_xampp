<?php /* Template_ 2.2.8 2024/05/20 18:04:32 C:\Users\H\projects\heyteetime_dev\admin\_global\skin_ko\sys\member\member_inquiry.tpl 000011363 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y mt-8">
    <h2 class="text-xl font-bold mr-auto">1:1문의 목록</h2>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">문의일</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" id="inquiry_date" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">답변일</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" id="answer_date" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">문의구분</div>
        <div class="dropdown" id="filter_gubun">
            <button class="dropdown-toggle form-select w-72 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" class="form-check-input" id="member_check_1_1" value="all" checked>
                        <label for="member_check_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
<?php if(is_array($TPL_R1=$TPL_VAR["INC"]['inquiry_gubun'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_1_<?php echo $TPL_I1+ 2?>" value="<?php echo $TPL_I1?>" checked>
                            <label for="member_check_1_<?php echo $TPL_I1+ 2?>" class="block w-full px-2 py-1"><?php echo $TPL_V1?></label>
                        </li>
<?php }}?>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">답변여부</div>
        <div class="dropdown" id="filter_status">
            <button class="dropdown-toggle form-select w-32 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_2_1" name="member_check_2" value="all" checked>
                        <label for="member_check_2_1" class="block w-full px-2 py-1">전체</label>
                    </li>
<?php if(is_array($TPL_R1=$TPL_VAR["INC"]['inquiry_status'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_K1=>$TPL_V1){$TPL_I1++;?>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_<?php echo $TPL_I1+ 2?>" name="member_check_2" value="<?php echo $TPL_K1?>">
                            <label for="member_check_2_<?php echo $TPL_I1+ 2?>" class="block w-full px-2 py-1"><?php echo $TPL_V1?></label>
                        </li>
<?php }}?>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">문의제목</div>
        <input type="text" class="form-control" id="filter_subject">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">문의자</div>
        <input type="text" class="form-control" id="filter_inquirer">
    </div>
    <button class="btn btn-primary-soft" onclick="setTimeout(() => {getInquiryList()}, 250);">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 <span id="total">0</span>건</div>
        <div class="flex items-center gap-3">
            <div class="w-40 sm:w-auto">
                <button class="btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" onclick="downloadExcel()"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export </button>
            </div>
            <!-- <button class="btn bg-emerald-600 border border-emerald-600 text-white"><img src="./dist/images/heyteetime/excel_icon.svg" class="mr-1">엑셀 다운로드</button> -->
        </div>
    </div>

    <!-- 테이블 -->
    <div class="overflow-x-auto mt-3">
        <div id="tabulator" class="table-report table-report--tabulator"></div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>

    /* 문의일 */
    const inquiry_date = new Litepicker({
        element: document.querySelector('#inquiry_date'),
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
        startDate : new Date(new Date().setDate(new Date().getDate() - 7)),
        endDate : new Date(),
        maxDate : new Date(),
    })

    /* 답변일 */
    const answer_date = new Litepicker({
        element: document.querySelector('#answer_date'),
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
        startDate : new Date(new Date().setDate(new Date().getDate() - 7)),
        endDate : new Date(),
        maxDate : new Date(),
    })

    /* checkbox */
    $('.dropdown .multi').each(function () {
        const $checkbox = $(this).find('input:checkbox');

        // 전체항목 클릭 시, 하위 항목 모두 적용
        $checkbox.eq(0).on('click', function () {
            $checkbox.prop('checked', $(this).prop('checked'));
        });

        // 전체 이외 항목
        $checkbox.not(':first').on('click', function () {
            $checkbox.eq(0).prop('checked', $checkbox.not(':first').length === $checkbox.not(':first').filter(':checked').length);
        })
    });

    // 테이블 tabulator 사용
    const table = new Tabulator("#tabulator", {
        pagination: true,
        paginationMode: "remote",
        ajaxURL : "/sys/member/ajax_service",
        ajaxParams: function() {
            let data = getParameterData();
            data.type = 'inquiryList';
            return data;
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
            {title:"번호", field:"number", minWidth:80, headerSort:false},
            {title:"문의일", field:"reg_date", minWidth:110, headerSort:false},
            {title:"문의구분", field:"gubun_name", minWidth:240, headerSort:false},
            {title:"문의제목", field:"subject", minWidth:130, headerSort:false},
            {title:"아이디", field:"account", minWidth:130, headerSort:false},
            {title:"성명", field:"name_kr", minWidth:100, headerSort:false},
            {title:"답변여부", field:"status_name", minWidth:110, headerSort:false},
            {title:"답변일", field:"answer_date", minWidth:110, headerSort:false},
        ],
        rowFormatter: function(row) {
            row.getCell("number").setValue(((table.getPage()-1) * table.getPageSize()) + row.getPosition(true));
        }
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./member_inquiry_detail.php?idx=' + row.getData().idx;
    });

    // Export
    $("#tabulator-export-csv").on("click", function (event) {
        table.download("csv", "data.csv");
    });
    $("#tabulator-export-json").on("click", function (event) {
        table.download("json", "data.json");
    });
    $("#tabulator-export-xlsx").on("click", function (event) {
        window.XLSX = xlsx;
        table.download("xlsx", "data.xlsx", {
            sheetName: "Products",
        });
    });
    $("#tabulator-export-html").on("click", function (event) {
        table.download("html", "data.html", {
            style: true,
        });
    });

    function getParameterData() {
        // 문의일
        let reg_date = JSON.stringify($("#inquiry_date").val().split(' ~ ').map(date => date.replace(/\./g, '-')));

        // 답변일
        let answer_date = JSON.stringify($("#answer_date").val().split(' ~ ').map(date => date.replace(/\./g, '-')));

        //문의 구분
        let gubun = [];
        if(!$("#filter_gubun input:checkbox:first").prop("checked")) {
            $("#filter_gubun input:checkbox:not(:first):checked").each(function () {
                gubun.push($(this).val());
            });
            gubun = JSON.stringify(gubun);
        }

        // 답변여부
        let status = $("#filter_status input:radio:checked").val();

        // 문의제목
        let subject = $("#filter_subject").val();

        // 문의자
        let name_kr = $("#filter_inquirer").val();

        return {
            reg_date,
            answer_date,
            gubun,
            status,
            subject,
            name_kr
        }
    }

    function getInquiryList() {
        table.setData("/sys/member/ajax_service.php", getParameterData());
    }

    function downloadExcel() {

    }

</script>
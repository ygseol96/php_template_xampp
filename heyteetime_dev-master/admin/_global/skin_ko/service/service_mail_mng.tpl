{#head}
{#header}
<div class="intro-y flex items-center mt-8">
    <h2 class="text-xl font-bold mr-auto">메일 목록</h2>
    <a href="./service_mail_regist.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>메일추가</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">발송일</div>
        <div class="relative w-full md:w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <input type="text" class="datepicker form-control pl-12">
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">발송구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="mail_status_1_1" name="mail_status">
                        <label for="mail_status_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="mail_status_1_2" name="mail_status">
                        <label for="mail_status_1_2" class="block w-full px-2 py-1">즉시발송</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="mail_status_1_3" name="mail_status">
                        <label for="mail_status_1_3" class="block w-full px-2 py-1">예약발송</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">발송상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="mail_shipping_status_1_1" name="mail_shipping_status">
                        <label for="mail_shipping_status_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="mail_shipping_status_1_2" name="mail_shipping_status">
                        <label for="mail_shipping_status_1_2" class="block w-full px-2 py-1">발송완료</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="mail_shipping_status_1_3" name="mail_shipping_status">
                        <label for="mail_shipping_status_1_3" class="block w-full px-2 py-1">발송중</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="mail_shipping_status_1_4" name="mail_shipping_status">
                        <label for="mail_shipping_status_1_4" class="block w-full px-2 py-1">발송예약</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="mail_shipping_status_1_5" name="mail_shipping_status">
                        <label for="mail_shipping_status_1_5" class="block w-full px-2 py-1">미발송</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="mail_shipping_status_1_6" name="mail_shipping_status">
                        <label for="mail_shipping_status_1_6" class="block w-full px-2 py-1">발송실패</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <div class="mb-1 text-slate-500 font-medium">메일명</div>
        <input type="text" class="form-control">
    </div>

    <button class="btn btn-primary-soft">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 000건</div>
        <div class="flex items-center gap-3">
            <div class="dropdown w-40 sm:w-auto">
                <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV </a>
                        </li>
                        <li>
                            <a id="tabulator-export-json" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON </a>
                        </li>
                        <li>
                            <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX </a>
                        </li>
                        <li>
                            <a id="tabulator-export-html" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <button class="btn bg-emerald-600 border border-emerald-600 text-white"><img src="./dist/images/heyteetime/excel_icon.svg" class="mr-1">엑셀 다운로드</button> -->
        </div>
    </div>

    <!-- 테이블 -->
    <div class="overflow-x-auto mt-3">
        <div id="tabulator" class="table-report table-report--tabulator"></div>
    </div>
</div>
{#bottom}
<script>
    // 데이터
    var tabledata = [
        {number:1, division:"즉시발송", reservation:"24.01.01 11시", mail_classification:"기획전", mail_name:"일본 아코디아 기획전", mail_shipping_status:"발송완료", number_senders:"100,000 / 100,000", sender:"홍길동", shipping_date:"24.01.01" },
        {number:2, division:"즉시발송", reservation:"24.01.01 11시", mail_classification:"기획전", mail_name:"일본 아코디아 기획전", mail_shipping_status:"발송완료", number_senders:"100,000 / 100,000", sender:"홍길동", shipping_date:"24.01.01" },
        {number:3, division:"즉시발송", reservation:"24.01.01 11시", mail_classification:"기획전", mail_name:"일본 아코디아 기획전", mail_shipping_status:"발송완료", number_senders:"100,000 / 100,000", sender:"홍길동", shipping_date:"24.01.01" },
    ]

    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        data:tabledata,
        printAsHtml: true,
        printStyled: true,
        pagination: "remote",
        paginationSize: 2,
        paginationInitialPage:2,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",

        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:50},
            {title:"발송구분", field:"division", minWidth:130},
            {title:"예약일시", field:"reservation", minWidth:150},
            {title:"메일구분", field:"mail_classification", minWidth:100},
            {title:"메일명", field:"mail_name", minWidth:150},
            {title:"발송상태", field:"mail_shipping_status", minWidth:100},
            {title:"발송/수신자수", field:"number_senders", minWidth:100},
            {title:"발송자", field:"sender", minWidth:100},
            {title:"발송일", field:"shipping_date", minWidth:100},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./service_mail_detail.php'
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
</script>
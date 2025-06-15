{#head}
{#header}
<div class="intro-y flex flex-wrap items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">검색/조회현황</h2>
    <p>건 : 예약,완료 / 금액 : 예약,완료 / 인원 : 예약자,내장자</p>
</div>

<!-- 현황 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div class="flex-col flex md:flex-row items-center gap-2 md:gap-6">
        <div class="flex items-center justify-center w-[80px] h-[80px] bg-cyan-500/20 text-cyan-500/60 rounded-full">
            <i data-lucide="search" class="w-8 h-8"></i>
        </div>
        <div class="flex flex-wrap items-center gap-2 md:gap-6 mt-5 md:mt-0">
            <div>
                <div class="mb-1 text-slate-500 font-medium">총 국가수</div>
                <div class="text-xl font-bold">100</div>
            </div>
            <div>
                <div class="mb-1 text-slate-500 font-medium">총 지역수</div>
                <div class="text-xl font-bold">100</div>
            </div>
            <div>
                <div class="mb-1 text-slate-500 font-medium">총 상품수</div>
                <div class="text-xl font-bold">1,000</div>
            </div>
            <div>
                <div class="mb-1 text-slate-500 font-medium">총 골프장수</div>
                <div class="text-xl font-bold">345</div>
            </div>
            <div>
                <div class="mb-1 text-slate-500 font-medium">총 키워드수</div>
                <div class="text-xl font-bold">1,000</div>
            </div>
        </div>
    </div>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-3 mt-5">
    <div>
        <div class="text-slate-500 font-medium">기간조회</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>
    <div>
        <div class="text-slate-500 font-medium">항목별</div>
        <div class="flex items-center gap-2">
            <div class="flex items-center justify-center h-[38px]">
                <input type="radio" class="form-check-input" id="search_radio_1_1" name="search_radio" checked>
                <label for="search_radio_1_1" class="block w-full px-2">국가별</label>
            </div>
            <div class="flex items-center justify-center h-[38px]">
                <input type="radio" class="form-check-input" id="search_radio_1_2" name="search_radio">
                <label for="search_radio_1_2" class="block w-full px-2">상품별</label>
            </div>
            <div class="flex items-center justify-center h-[38px]">
                <input type="radio" class="form-check-input" id="search_radio_1_3" name="search_radio">
                <label for="search_radio_1_3" class="block w-full px-2">상품 구분별</label>
            </div>
            <div class="flex items-center justify-center h-[38px]">
                <input type="radio" class="form-check-input" id="search_radio_1_4" name="search_radio">
                <label for="search_radio_1_4" class="block w-full px-2">키워드별</label>
            </div>
        </div>
    </div>
    <button class="btn btn-primary-soft">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 000건</div>
        <div class="flex flex-wrap items-center gap-2">
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
    // 지역/상품명/상품구분/키워드/건수 구분되어야함
    var tabledata = [
        {number:"1", continent:"2024.04", nation:"뉴질랜드", region:"지역이름", productname:'0000 유형한 골프장', productclass:"항공/숙박/차량+", keyword:"항공/숙박/차량+", numberofcase:"100,000,000"},
    ]

    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        data:tabledata,
        printAsHtml: true,
        printStyled: true,
        pagination: "remote",
        paginationSize: 20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",

        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:60, },
            {title:"대륙", field:"continent", minWidth:60},
            {title:"국가", field:"nation", minWidth:60},
            {title:"지역", field:"region", minWidth:100},
            {title:"상품명", field:"productname", minWidth:100},
            {title:"상품구분", field:"productclass", minWidth:100},
            {title:"키워드", field:"keyword", minWidth:100},
            {title:"건수", field:"numberofcase", minWidth:100, formatter:"html"},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    // table.on("rowClick", function(e, row){
    //     location.href='./prod_review_detail.php'
    // });

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
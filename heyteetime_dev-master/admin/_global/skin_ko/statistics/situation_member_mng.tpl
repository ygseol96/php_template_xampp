{#head}
{#header}
<div class="intro-y flex flex-wrap items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">회원현황</h2>
    <p>연령 : ~20,30,40,50,60~ / 대륙 : 미주,유럽,아시아,남태평양,아프리카,중동/기타</p>
</div>

<!-- 현황 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div class="flex-col flex md:flex-row items-center gap-2 md:gap-6">
        <div class="flex items-center justify-center w-[80px] h-[80px] bg-danger/20 text-danger/60 rounded-full">
            <i data-lucide="user" class="w-8 h-8"></i>
        </div>
        <div class="flex flex-wrap items-center gap-2 md:gap-6 mt-5 md:mt-0">
            <div>
                <div class="mb-1 text-slate-500 font-medium">총 회원수</div>
                <div class="text-xl font-bold">345,678</div>
            </div>
            <div>
                <div class="mb-1 text-slate-500 font-medium">금년</div>
                <div class="text-xl font-bold">345,678</div>
            </div>
            <div>
                <div class="mb-1 text-slate-500 font-medium">금월/증가율</div>
                <div class="text-xl font-bold flex items-center">
                    <span>345,678</span>
                    <span class="bg-primary/10 text-primary w-6 h-6 rounded-full flex items-center justify-center ml-0 md:ml-2"><i data-lucide="trending-up" class="w-4 h-4"></i></span>
                    <span class="text-primary font-bold text-sm">10%</span>
                </div>
            </div>
            <div>
                <div class="mb-1 text-slate-500 font-medium">금주/증가율</div>
                <div class="text-xl font-bold flex items-center">
                    <span>345,678</span>
                    <span class="bg-danger/10 text-danger w-6 h-6 rounded-full flex items-center justify-center ml-0 md:ml-2"><i data-lucide="trending-down" class="w-4 h-4"></i></span>
                    <span class="text-danger font-bold text-sm">10%</span>
                </div>
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
        <div class="text-slate-500 font-medium">상위노출</div>
        <div class="flex items-center gap-2">
            <div class="flex items-center justify-center h-[38px]">
                <input type="radio" class="form-check-input" id="member_radio_1_1" name="member_radio" checked>
                <label for="member_radio_1_1" class="block w-full px-2">월별</label>
            </div>
            <div class="flex items-center justify-center h-[38px]">
                <input type="radio" class="form-check-input" id="exposed_language_1_2" name="member_radio">
                <label for="member_radio_1_2" class="block w-full px-2">일별</label>
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
    var tabledata = [
        {number:"1", month:"2024.04", csubscribers:"123,456", cmsubscribers:"123,456", male:"123,456", female:"123,456", web:"123,456", pc:"123,456", mobile:"123,456", aos:'123,456', ios:'123,456', twenties:"123,456", sixties:"123,456", americas:"123,456", meast:"123,456", nonpurchase:"123,456", purchase:"123,456", repurchase:"123,456"},
        {number:"2", month:"2024.04", csubscribers:"123,456", cmsubscribers:"123,456", male:"123,456", female:"123,456", web:"123,456", pc:"123,456", mobile:"123,456", aos:'123,456', ios:'123,456', twenties:"123,456", sixties:"123,456", americas:"123,456", meast:"123,456", nonpurchase:"123,456", purchase:"123,456", repurchase:"123,456"},
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
            {title:"대상월", field:"month", minWidth:60},
            {title:"누적가입자", field:"csubscribers", minWidth:100},
            {title:"당월가입자", field:"cmsubscribers", minWidth:100},
            {title:"남성", field:"male", minWidth:60},
            {title:"여성", field:"female", minWidth:110},
            {title:"WEB", field:"web", minWidth:110},
            {title:"PC", field:"pc", minWidth:100},
            {title:"Mobile", field:"mobile", minWidth:100},
            {title:"AOS", field:"aos", minWidth:100},
            {title:"IOS", field:"ios", minWidth:100},
            {title:"~20대", field:"twenties", minWidth:100},
            {title:"60대~", field:"sixties", minWidth:100},
            {title:"미주", field:"americas", minWidth:100},
            {title:"중동/기타", field:"meast", minWidth:60},
            {title:"비구매", field:"nonpurchase", minWidth:60},
            {title:"구매", field:"purchase", minWidth:60},
            {title:"재구매", field:"repurchase", minWidth:60},
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
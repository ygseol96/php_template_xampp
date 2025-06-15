<?php /* Template_ 2.2.8 2024/06/05 19:32:38 C:\xampp\heytee_dev\admin\_global\skin_ko\statistics\situation_review_mng.tpl 000007745 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">후기현황</h2>
</div>

<!-- 현황 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div class="flex-col flex md:flex-row items-center gap-2 md:gap-6">
        <div class="flex items-center justify-center w-[80px] h-[80px] bg-violet-500/20 text-violet-500/60 rounded-full">
            <i data-lucide="message-square" class="w-8 h-8"></i>
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
        <div class="text-slate-500 font-medium">기간구분</div>
        <div class="flex items-center gap-2">
            <div class="flex items-center justify-center h-[38px]">
                <input type="radio" class="form-check-input" id="review_radio_1_1" name="review_radio" checked>
                <label for="review_radio_1_1" class="block w-full px-2">월별</label>
            </div>
            <div class="flex items-center justify-center h-[38px]">
                <input type="radio" class="form-check-input" id="review_radio_1_2" name="review_radio">
                <label for="review_radio_1_2" class="block w-full px-2">일별</label>
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
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 데이터
    // 지역/상품명/상품구분/키워드/건수 구분되어야함
    var tabledata = [
        {number:"1", month:"2024.04", golfers:"1,000", editors:"1,000", reviews:'1,000', average:"5.0", videos:"500", photos:"5,000", followers:"5,000", likes:"5,000"},
        {number:"1", month:"2024.04", golfers:"1,000", editors:"1,000", reviews:'1,000', average:"5.0", videos:"500", photos:"5,000", followers:"5,000", likes:"5,000"},
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
            {title:"골프장수", field:"golfers", minWidth:60},
            {title:"에디터수", field:"editors", minWidth:100},
            {title:"후기수", field:"reviews", minWidth:100},
            {title:"평점평균", field:"average", minWidth:100},
            {title:"영상수", field:"videos", minWidth:100},
            {title:"사진수", field:"photos", minWidth:100},
            {title:"팔로워수", field:"followers", minWidth:100},
            {title:"좋아요수", field:"likes", minWidth:100},
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
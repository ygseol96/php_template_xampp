<?php /* Template_ 2.2.8 2024/04/22 14:33:35 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\product\prod_travel.tpl 000018590 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">여행상품 목록</h2>
    <a href="./prod_travel_regist.php" class="btn btn-primary">여행상품 등록</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">출발일</div>
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
        <div class="mb-1 text-slate-500 font-medium">지역</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">대륙</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select multi">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" class="form-check-input" id="member_check_1_1">
                            <label for="member_check_1_1" class="block w-full px-2 py-1">대륙</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_1_2">
                            <label for="member_check_1_2" class="block w-full px-2 py-1">미주</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_1_3">
                            <label for="member_check_1_3" class="block w-full px-2 py-1">유럽</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_1_4">
                            <label for="member_check_1_4" class="block w-full px-2 py-1">아시아</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">국가</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="member_check_2_1" name="member_check_2">
                            <label for="member_check_2_1" class="block w-full px-2 py-1">국가</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_2" name="member_check_2">
                            <label for="member_check_2_2" class="block w-full px-2 py-1">대한민국</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_3" name="member_check_2">
                            <label for="member_check_2_3" class="block w-full px-2 py-1">일본</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_4" name="member_check_2">
                            <label for="member_check_2_4" class="block w-full px-2 py-1">중국</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">지역</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="member_check_3_1" name="member_check_3">
                            <label for="member_check_3_1" class="block w-full px-2 py-1">큐슈</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_3_2" name="member_check_3">
                            <label for="member_check_3_2" class="block w-full px-2 py-1">후쿠오카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_3_3" name="member_check_3">
                            <label for="member_check_3_3" class="block w-full px-2 py-1">간사이</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">도시</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="member_check_4_1" name="member_check_4">
                            <label for="member_check_4_1" class="block w-full px-2 py-1">도쿄</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_4_2" name="member_check_4">
                            <label for="member_check_4_2" class="block w-full px-2 py-1">오사카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_4_3" name="member_check_4">
                            <label for="member_check_4_3" class="block w-full px-2 py-1">나라</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상품구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-40 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_5_1" name="member_check_5">
                        <label for="member_check_5_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_2" name="member_check_5">
                        <label for="member_check_5_2" class="block w-full px-2 py-1">티타임 Only</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_3" name="member_check_5">
                        <label for="member_check_5_3" class="block w-full px-2 py-1">항공+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_4" name="member_check_5">
                        <label for="member_check_5_4" class="block w-full px-2 py-1">숙박+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_5" name="member_check_5">
                        <label for="member_check_5_5" class="block w-full px-2 py-1">송영+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_6" name="member_check_5">
                        <label for="member_check_5_6" class="block w-full px-2 py-1">항공/숙박+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_7" name="member_check_5">
                        <label for="member_check_5_7" class="block w-full px-2 py-1">항공/송영+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_8" name="member_check_5">
                        <label for="member_check_5_8" class="block w-full px-2 py-1">숙박/송영+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_9" name="member_check_5">
                        <label for="member_check_5_9" class="block w-full px-2 py-1">항공/숙박/송영+</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_4_1" name="member_check_4">
                        <label for="member_check_4_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_4_2" name="member_check_4">
                        <label for="member_check_4_2" class="block w-full px-2 py-1">사용</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_4_3" name="member_check_4">
                        <label for="member_check_4_3" class="block w-full px-2 py-1">미사용</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상품명,상품코드</div>
        <input type="text" class="form-control">
    </div>
    <button class="btn btn-primary-soft">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 000건</div>
        <div class="flex flex-wrap items-center gap-2">
            <button class="btn btn-dark w-20">노출</button>
            <button class="btn btn-primary w-20">미노출</button>
            <button class="btn btn-pending w-20">상품변경</button>
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
    var tabledata = [
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 1", continent:"아시아", nation:"일본", area:"큐슈", city:"도쿄", kind:"항공/숙박/송영+", product:"<a href='javascript:;' class='text-primary underline'>도쿄 유명한 골프장<br/>(AJA0001)</a>", tee:"<span>24.03.17 ~<br/>24.04.30</span>", consumer:"<span>1,100,000<br/>-00%</span>", supply:"1,000,000", normal:"1,300,000", selling:"<span>1,200,000<br/>+00%</span>", employee:"<span>1,050,000<br/>-00%</span>", state:"정상", date:"24.03.01", confirm:"<a href='javascript:;' class='text-primary underline'>5/10</a>" },
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 2", continent:"아시아", nation:"일본", area:"큐슈", city:"도쿄", kind:"항공/숙박/송영+", product:"<a href='javascript:;' class='text-primary underline'>도쿄 유명한 골프장<br/>(AJA0001)</a>", tee:"<span>24.03.17 ~<br/>24.04.30</span>", consumer:"<span>1,100,000<br/>-00%</span>", supply:"1,000,000", normal:"1,300,000", selling:"<span>1,200,000<br/>+00%</span>", employee:"<span>1,050,000<br/>-00%</span>", state:"정상", date:"24.03.01", confirm:"<a href='javascript:;' class='text-primary underline'>5/10</a>" },
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 3", continent:"아시아", nation:"일본", area:"큐슈", city:"도쿄", kind:"항공/숙박/송영+", product:"<a href='javascript:;' class='text-primary underline'>도쿄 유명한 골프장<br/>(AJA0001)</a>", tee:"<span>24.03.17 ~<br/>24.04.30</span>", consumer:"<span>1,100,000<br/>-00%</span>", supply:"1,000,000", normal:"1,300,000", selling:"<span>1,200,000<br/>+00%</span>", employee:"<span>1,050,000<br/>-00%</span>", state:"정상", date:"24.03.01", confirm:"<a href='javascript:;' class='text-primary underline'>5/10</a>" },
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
            // {title:"번호", field:"number", minWidth:70, formatter:"tickCross", editor:"tickCross"},
            {title:"번호", field:"number", minWidth:70, formatter:"html"},
            {title:"대륙", field:"continent", minWidth:70},
            {title:"국가", field:"nation", minWidth:70},
            {title:"지역", field:"area", minWidth:70},
            {title:"도시", field:"city", minWidth:70},
            {title:"상품구분", field:"kind", minWidth:110},
            {title:"상품명", field:"product", minWidth:110, formatter:"html"},
            {title:"출발일", field:"tee", minWidth:100, formatter:"html"},
            {title:"정상가", field:"normal", minWidth:100},
            {title:"공급가", field:"supply", minWidth:100},
            {title:"판매가", field:"selling", minWidth:100, formatter:"html"},
            {title:"채널가", field:"consumer", minWidth:100, formatter:"html"},
            {title:"임직원가", field:"employee", minWidth:100, formatter:"html"},
            {title:"상태", field:"state", minWidth:80},
            {title:"등록일", field:"date", minWidth:80},
            {title:"예약/확정", field:"confirm", minWidth:80},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    // table.on("rowClick", function(e, row){
    //     location.href='./member_coupon_detail.php'
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
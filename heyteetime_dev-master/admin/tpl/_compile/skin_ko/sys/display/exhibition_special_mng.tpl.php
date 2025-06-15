<?php /* Template_ 2.2.8 2024/05/16 11:45:42 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\display\exhibition_special_mng.tpl 000011936 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center mt-8">
    <h2 class="text-xl font-bold mr-auto">기획전 목록</h2>
    <a href="./exhibition_special_regist.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>기획전 추가</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">노출기간</div>
        <div class="relative w-full md:w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <input type="text" class="datepicker form-control pl-12">
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">노출여부</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" class="form-check-input" id="faq_category_1_1" name="faq_category">
                        <label for="faq_category_1_1" class="block w-full px-2 py-1">노출</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="faq_category_1_2" name="faq_category">
                        <label for="faq_category_1_2" class="block w-full px-2 py-1">미노출</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">노출상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" class="form-check-input" id="faq_category_2_1" name="faq_category_2">
                        <label for="faq_category_2_1" class="block w-full px-2 py-1">노출중</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="faq_category_2_2" name="faq_category_2">
                        <label for="faq_category_2_2" class="block w-full px-2 py-1">노출대기</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="faq_category_2_3" name="faq_category_2">
                        <label for="faq_category_2_3" class="block w-full px-2 py-1">노출종료</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">채널구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" class="form-check-input" id="faq_category_3_1" name="faq_category_3">
                        <label for="faq_category_3_1" class="block w-full px-2 py-1">OTA</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="faq_category_3_2" name="faq_category_3">
                        <label for="faq_category_3_2" class="block w-full px-2 py-1">여행사</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="faq_category_3_3" name="faq_category_3">
                        <label for="faq_category_3_3" class="block w-full px-2 py-1">골프부킹</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="faq_category_3_4" name="faq_category_3">
                        <label for="faq_category_3_4" class="block w-full px-2 py-1">항공</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">판매채널</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-40 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" class="form-check-input" id="faq_category_4_1" name="faq_category_4">
                        <label for="faq_category_4_1" class="block w-full px-2 py-1">HTT</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="faq_category_4_2" name="faq_category_4">
                        <label for="faq_category_4_2" class="block w-full px-2 py-1">Line dosi NFT</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="faq_category_4_3" name="faq_category_4">
                        <label for="faq_category_4_3" class="block w-full px-2 py-1">Google Boking</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="faq_category_4_4" name="faq_category_4">
                        <label for="faq_category_4_4" class="block w-full px-2 py-1">Google TTD</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">기획전명</div>
        <input type="text" class="form-control">
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
    var tabledata = [
        {number:"1",expose:"노출",range:"2024.01.01 - 2024.01.31",name:"일본 아코디아",channel:"전체",state:"노출대기",views:"000,000",writer:"홍길동",date:"24.01.01"},
        {number:"1",expose:"미노출",range:"2024.01.01 - 2024.01.31",name:"대한민국 코스",channel:"하나투어 외 3",state:"노출중",views:"000,000",writer:"홍길동",date:"24.01.01"},
        {number:"1",expose:"노출",range:"2024.01.01 - 2024.01.31",name:"일본 아코디아",channel:"AGODA",state:"노출종료",views:"000,000",writer:"홍길동",date:"24.01.01"},
        {number:"1",expose:"미노출",range:"2024.01.01 - 2024.01.31",name:"대한민국 코스",channel:"아시아나 외 3",state:"노출대기",views:"000,000",writer:"홍길동",date:"24.01.01"},
    ]

    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        data:tabledata,
        printAsHtml: true,
        printStyled: true,
        pagination: "remote",
        paginationSize: 20,
        paginationInitialPage:20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",

        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:80},
            {title:"노출여부", field:"expose", minWidth:130},
            {title:"노출기간", field:"range", minWidth:250},
            {title:"기획전명", field:"name", minWidth:150},
            {title:"판매채널", field:"channel", minWidth:150},
            {title:"노출상태", field:"state", minWidth:100},
            {title:"조회수", field:"views", minWidth:100},
            {title:"등록자", field:"writer", minWidth:100},
            {title:"등록일", field:"date", minWidth:100},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./exhibition_special_modify.php'
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
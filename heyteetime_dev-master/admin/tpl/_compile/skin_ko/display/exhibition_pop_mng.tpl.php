<?php /* Template_ 2.2.8 2024/05/21 18:41:55 C:\Users\H\projects\heyteetime_dev\admin\_global\skin_ko\display\exhibition_pop_mng.tpl 000013141 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center mt-8">
    <h2 class="text-xl font-bold mr-auto">팝업 목록</h2>
    <a href="./exhibition_pop_regist.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>팝업등록</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="pop_radio_0_1" name="pop_radio0">
                        <label for="pop_radio_0_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">사이트</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select multi">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="pop_radio_1_1" name="pop_radio1">
                            <label for="pop_radio_1_1" class="block w-full px-2 py-1">전체</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-32 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select multi">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="pop_radio_2_1" name="pop_radio2">
                            <label for="pop_radio_2_1" class="block w-full px-2 py-1">전체</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">고객사</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select multi">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="pop_radio_3_1" name="pop_radio3">
                            <label for="pop_radio_3_1" class="block w-full px-2 py-1">전체</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-32 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select multi">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="pop_radio_4_1" name="pop_radio4">
                            <label for="pop_radio_4_1" class="block w-full px-2 py-1">전체</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="pop_radio_5_1" name="pop_radio5">
                        <label for="pop_radio_5_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
        <div class="mb-1 text-slate-500 font-medium">등록기간</div>
        <div class="relative w-full md:w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <input type="text" class="datepicker form-control pl-12">
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
        <div class="mb-1 text-slate-500 font-medium">팝업명</div>
        <input type="text" class="form-control">
    </div>
    <button class="btn btn-primary-soft">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 000건</div>
        <div class="flex flex-wrap items-center gap-2">
            <button class="btn btn-pending w-24">팝업삭제</button>
            <button class="btn btn-success w-20 text-white">노출</button>
            <button class="btn btn-primary w-20">미노출</button>
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
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 1", division:"공통", site:"전체",customer:"UOB",banner:"세계 10대 골프장",period:"2024.01.31 ~ 2024~01.31",state:"노출중",writer:"홍길동",date:"24.01.01",order:'<select name="" id="" class="form-select"><option value="">1</option><option value="">2</option><option value="">3</option></select>'},
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 2", division:"공통", site:"전체",customer:"-",banner:"세계 10대 골프장",period:"2024.01.31 ~ 2024~01.31",state:"노출중",writer:"홍길동",date:"24.01.01",order:'<select name="" id="" class="form-select"><option value="">1</option><option value="">2</option><option value="">3</option></select>'},
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 3", division:"공통", site:"전체",customer:"UOB",banner:"세계 10대 골프장",period:"2024.01.31 ~ 2024~01.31",state:"노출중",writer:"홍길동",date:"24.01.01",order:'<select name="" id="" class="form-select"><option value="">1</option><option value="">2</option><option value="">3</option></select>'},
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
            {title:"번호", field:"number", minWidth:100, formatter:"html"},
            {title:"구분", field:"division", minWidth:80},
            {title:"사이트", field:"site", minWidth:130},
            {title:"고객사", field:"customer", minWidth:100},
            {title:"배너명", field:"banner", minWidth:200},
            {title:"노출기간", field:"period", minWidth:200},
            {title:"상태", field:"state", minWidth:100},
            {title:"등록자", field:"writer", minWidth:100},
            {title:"등록일", field:"date", minWidth:100},
            {title:"노출순서", field:"order", minWidth:100, formatter:"html"},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./exhibition_pop_detail.php'
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
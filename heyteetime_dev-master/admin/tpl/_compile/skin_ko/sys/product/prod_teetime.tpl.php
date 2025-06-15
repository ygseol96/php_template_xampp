<?php /* Template_ 2.2.8 2024/05/20 17:27:01 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\product\prod_teetime.tpl 000015167 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">티타임 목록</h2>
</div>

<!-- 필터 -->
<form name="teetimeFilterForm" id="teetimeFilterForm">
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">티타임</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" name="filterDate" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">지역</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="dropdown">
                <button type="button" class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">대륙</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select multi">
                        <li class="flex items-center">
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" name="filterArea" id="member_check_1_2">
                            <label for="member_check_1_2" class="block w-full px-2 py-1">미주</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" name="filterArea" id="member_check_1_3">
                            <label for="member_check_1_3" class="block w-full px-2 py-1">유럽</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" name="filterArea" id="member_check_1_4">
                            <label for="member_check_1_4" class="block w-full px-2 py-1">아시아</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button type="button" class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">국가</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_2" name="filterNation">
                            <label for="member_check_2_2" class="block w-full px-2 py-1">대한민국</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_3" name="filterNation">
                            <label for="member_check_2_3" class="block w-full px-2 py-1">일본</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_4" name="filterNation">
                            <label for="member_check_2_4" class="block w-full px-2 py-1">중국</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button type="button" class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">지역</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="member_check_3_1" name="filterState">
                            <label for="member_check_3_1" class="block w-full px-2 py-1">큐슈</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_3_2" name="filterState">
                            <label for="member_check_3_2" class="block w-full px-2 py-1">후쿠오카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_3_3" name="filterState">
                            <label for="member_check_3_3" class="block w-full px-2 py-1">간사이</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button type="button" class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">도시</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="member_check_4_1" name="filterCity">
                            <label for="member_check_4_1" class="block w-full px-2 py-1">도쿄</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_4_2" name="filterCity">
                            <label for="member_check_4_2" class="block w-full px-2 py-1">오사카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_4_3" name="filterCity">
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
            <button type="button" class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_5_1" name="filterKind">
                        <label for="member_check_5_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_2" name="filterKind">
                        <label for="member_check_5_2" class="block w-full px-2 py-1">티타임</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_3" name="filterKind">
                        <label for="member_check_5_3" class="block w-full px-2 py-1">숙박+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_4" name="filterKind">
                        <label for="member_check_5_4" class="block w-full px-2 py-1">송영+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_4" name="filterKind">
                        <label for="member_check_5_4" class="block w-full px-2 py-1">숙박/송영+</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">사용여부</div>
        <div class="dropdown">
            <button type="button" class="dropdown-toggle form-select w-40 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_6_1" name="filterUse">
                        <label for="member_check_6_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_6_2" name="filterUse">
                        <label for="member_check_6_2" class="block w-full px-2 py-1">사용</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_6_3" name="filterUse">
                        <label for="member_check_6_3" class="block w-full px-2 py-1">미사용</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">골프장명,코드</div>
        <input type="text" name="filterField" class="form-control">
    </div>
    <button type="button" class="btn btn-primary-soft">검색하기</button>
</div>
</form>

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
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        pagination: true,
        paginationMode: "remote",
        ajaxURL : "/sys/product/ajax_product.php",
        ajaxParams: function() {
            let data = getParameterData();
            data.mode = 'getTeetimeList';
            console.log( data );
            return data;
        },
        ajaxResponse : function (url, params, response) {
            console.log(response);
            $("#memberTotal").text(response.total);
            return response;
        },
        ajaxConfig: 'POST',
        printAsHtml: true,
        printStyled: true,
        paginationSize: 20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",
        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:70},
            {title:"대륙", field:"continent", minWidth:70},
            {title:"국가", field:"nation", minWidth:70},
            {title:"지역", field:"area", minWidth:70},
            {title:"도시", field:"city", minWidth:70},
            {title:"상품구분", field:"kind", minWidth:110},
            {title:"골프장명", field:"golf", minWidth:110, formatter:"html"},
            {title:"티타임", field:"tee", minWidth:100, formatter:"html"},
            {title:"소비자가", field:"consumer", minWidth:100},
            {title:"공급가", field:"supply", minWidth:100},
            {title:"정상가", field:"normal", minWidth:100},
            {title:"판매가", field:"selling", minWidth:100},
            {title:"사용여부", field:"use", minWidth:80},
            {title:"수정여부", field:"modify", minWidth:80},
            {title:"수정일", field:"modifydate", minWidth:80},
        ],
        rowFormatter: function(row) {
            row.getCell("number").setValue(((table.getPage()-1) * table.getPageSize()) + row.getPosition(true));
        }
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./prod_teetime_detail.php'
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
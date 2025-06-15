{#head}
{#header}
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
                <input type="text" name="filterDate" id="filterDate" class="form-control pl-12">
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">지역</div>
        <div class="flex flex-wrap items-center gap-1">
            <select name="filterArea" id="f_area" class="form-select md:w-auto">
                <option value="" disabled hidden selected>대륙</option>
                {@ data['f_area'] }
                    <option value="{.CD}">{.CD_NAME_KR}</option>
                {/}
            </select>
            <select name="filterNation" id="f_nation" class="form-select w-40">
                <option value="" disabled hidden selected>국가</option>
            </select>
            <select name="filterState" id="f_state" class="form-select w-40">
                <option value="" disabled hidden selected>지역</option>
            </select>
            <select name="filterArea" id="f_city" class="form-select w-40">
                <option value="" disabled hidden selected>도시</option>
            </select>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상품구분</div>
        <div class="dropdown">
            <button type="button" class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" value="" id="member_check_5_0" name="filterKind">
                        <label for="member_check_5_0" class="block w-full px-2 py-1">전체</label>
                    </li>
                    {@ data['prod_kind'] }
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" value="{.key_}" id="member_check_5_{.index_+1}" name="filterKind">
                        <label for="member_check_5_{.index_+1}" class="block w-full px-2 py-1">{.value_}</label>
                    </li>
                    {/}
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
                        <input type="radio" class="form-check-input" value="" id="member_check_6_1" name="filterUse">
                        <label for="member_check_6_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" value="Y" id="member_check_6_2" name="filterUse">
                        <label for="member_check_6_2" class="block w-full px-2 py-1">사용</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" value="N" id="member_check_6_3" name="filterUse">
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
    <button type="button" class="btn btn-primary-soft" onclick="setTimeout(() => {getProductList()}, 250);">검색하기</button>
</div>
</form>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 <span id="total_cnt"></span>건</div>
        <div class="flex items-center gap-3">
            <div class="dropdown w-40 sm:w-auto">
                <button type="button" class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                <!-- div class="dropdown-menu w-40">
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
                </div //-->
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
    /* 티타임 시간 */
    const inquiry_date = new Litepicker({
        element: document.querySelector('#filterDate'),
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

    var table = new Tabulator("#tabulator", {
        pagination: true,
        paginationMode: "remote",
        ajaxURL : "/product/ajax_product.php",
        ajaxParams: function() {
            var aa = {
                type : 'getTeetimeList',
                ...getParameterData()
            }

            console.log( aa );

            return aa;
        },
        ajaxResponse : function (url, params, response) {
            $("#total_cnt").text(response.total);
            return response;
        },
        printAsHtml: true,
        printStyled: true,
        paginationSize: 20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "",
        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:70, headerSort:false},
            {title:"대륙", field:"AREA_NAME", minWidth:70, headerSort:false},
            {title:"국가", field:"NAT_NM", minWidth:70, headerSort:false},
            {title:"지역", field:"STATE_NM", minWidth:70, headerSort:false},
            {title:"도시", field:"CITY_NM", minWidth:70, headerSort:false},
            {title:"상품구분", field:"PRODUCT_TYPE", minWidth:60, headerSort:false},
            {title:"골프장명", field:"PRD_NAME", minWidth:110, headerSort:false, formatter:"html"},
            {title:"티타임", field:"TEETIME", minWidth:140, headerSort:false},
            {title:"소비자가", field:"GREEN_FEE_CUSTOMER", minWidth:100, headerSort:false},
            {title:"공급가", field:"ORIGIN_PRICE", minWidth:100, headerSort:false, formatter:"money", formatterParams:{precision:2}},
            {title:"정상가", field:"MARKET_PRICE", minWidth:100, headerSort:false, formatter:"money", formatterParams:{precision:2}},
            {title:"판매가", field:"SALES_PRICE", minWidth:100, headerSort:false, formatter:"money", formatterParams:{precision:2}},
            {title:"사용여부", field:"H_USE_YN", minWidth:80, headerSort:false},
            {title:"수정여부", field:"MOD_TEXT", minWidth:80, headerSort:false},
            {title:"수정일", field:"UPTDATE", minWidth:80, headerSort:false}
        ],
        rowFormatter: function(row) {
            row.getCell("number").setValue(((table.getPage()-1) * table.getPageSize()) + row.getPosition(true));
            row.getCell('PRD_NAME').setValue("<span class='text-primary underline'>" + row.getData().PRD_NAME + '<br> (' + row.getData().FIELD_ID +")</span>");
        }
    });

    //row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./prod_teetime_detail.php?field_id='+row.getData().FIELD_ID;
    });

    // Export
    /*
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
    */
</script>
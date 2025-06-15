{#head}
{#header}
<div class="intro-y flex items-center mt-8">
    <h2 class="text-xl font-bold mr-auto">템플릿 목록</h2>
    <a href="./exhibition_template_regist.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>템플릿추가</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">템플릿대상</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-36 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="temradio_1_1" name="temradio1">
                        <label for="temradio_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="temradio_1_2" name="temradio1">
                        <label for="temradio_1_2" class="block w-full px-2 py-1">PC</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="temradio_1_3" name="temradio1">
                        <label for="temradio_1_3" class="block w-full px-2 py-1">MOBILE</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">템플릿내용</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-36 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="temradio_2_1" name="temradio2">
                        <label for="temradio_2_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="temradio_2_2" name="temradio2">
                        <label for="temradio_2_2" class="block w-full px-2 py-1">상품</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="temradio_2_3" name="temradio2">
                        <label for="temradio_2_3" class="block w-full px-2 py-1">콘텐츠</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">템플릿형태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-36 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="temcheck_1_1" name="temcheck1">
                        <label for="temcheck_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_1_2" name="temcheck1">
                        <label for="temcheck_1_2" class="block w-full px-2 py-1">고정형</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_1_3" name="temcheck1">
                        <label for="temcheck_1_3" class="block w-full px-2 py-1">롤링형</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_1_4" name="temcheck1">
                        <label for="temcheck_1_4" class="block w-full px-2 py-1">탭형</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">적용대상</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-36 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="temcheck_2_1" name="temcheck2">
                        <label for="temcheck_2_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_2_2" name="temcheck2">
                        <label for="temcheck_2_2" class="block w-full px-2 py-1">홈</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_2_3" name="temcheck2">
                        <label for="temcheck_2_3" class="block w-full px-2 py-1">상품</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_2_4" name="temcheck2">
                        <label for="temcheck_2_4" class="block w-full px-2 py-1">예약</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_2_5" name="temcheck2">
                        <label for="temcheck_2_5" class="block w-full px-2 py-1">마이페이지</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_2_6" name="temcheck2">
                        <label for="temcheck_2_6" class="block w-full px-2 py-1">고객센터</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="temcheck_2_7" name="temcheck2">
                        <label for="temcheck_2_7" class="block w-full px-2 py-1">기타</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">사용여부</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-36 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="temradio_3_1" name="temradio3">
                        <label for="temradio_3_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="temradio_3_2" name="temradio3">
                        <label for="temradio_3_2" class="block w-full px-2 py-1">사용</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="temradio_3_3" name="temradio3">
                        <label for="temradio_3_3" class="block w-full px-2 py-1">미사용</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">템플릿명</div>
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
{#bottom}
<script>
    // 데이터
    var tabledata = [
        {number:1, target:"PC", detail:"상품", form:"고정형", temname:"상품 템플릿 01", applicableto:"홈 외 2", use:'<select name="" id="" type="text" class="form-select"><option value="">사용</option><option value="">미사용</option></select>', registrant:"홍길동" , registration_date:"24.01.01" },
        {number:2, target:"PC", detail:"상품", form:"고정형", temname:"상품 템플릿 01", applicableto:"홈 외 2", use:'<select name="" id="" type="text" class="form-select"><option value="">사용</option><option value="">미사용</option></select>', registrant:"홍길동" , registration_date:"24.01.01" },
        {number:3, target:"PC", detail:"상품", form:"고정형", temname:"상품 템플릿 01", applicableto:"홈 외 2", use:'<select name="" id="" type="text" class="form-select"><option value="">사용</option><option value="">미사용</option></select>', registrant:"홍길동" , registration_date:"24.01.01" },
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
            {title:"대상", field:"target", minWidth:130},
            {title:"내용", field:"detail", minWidth:150},
            {title:"형태", field:"form", minWidth:150},
            {title:"템플릿명", field:"temname", minWidth:150},
            {title:"적용대상", field:"applicableto", minWidth:100},
            {title:"사용여부", field:"use", minWidth:50, formatter:"html"},
            {title:"등록자", field:"registrant", minWidth:100},
            {title:"등록일", field:"registration_date", minWidth:100},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        if(e.target.tagName !== "SELECT"){
            location.href='./exhibition_template_modify.php'
        }
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
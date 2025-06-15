{#head}
{#header}
<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">프로모션 목록</h2>
    <a href="./prod_promotion_regist.php" class="btn btn-primary">프로모션 등록</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">프로모션 기간</div>
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
        <div class="mb-1 text-slate-500 font-medium">프로모션 구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_0_1" name="member_check_0">
                        <label for="member_check_0_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_0_2" name="member_check_0">
                        <label for="member_check_0_2" class="block w-full px-2 py-1">재결제</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_0_3" name="member_check_0">
                        <label for="member_check_0_3" class="block w-full px-2 py-1">가입</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_0_4" name="member_check_0">
                        <label for="member_check_0_4" class="block w-full px-2 py-1">후기</label>
                    </li>
                </ul>
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
                            <input type="checkbox" class="form-check-input" id="member_check_2_1" name="member_check_2">
                            <label for="member_check_2_1" class="block w-full px-2 py-1">국가</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_2_2" name="member_check_2">
                            <label for="member_check_2_2" class="block w-full px-2 py-1">대한민국</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_2_3" name="member_check_2">
                            <label for="member_check_2_3" class="block w-full px-2 py-1">일본</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_2_4" name="member_check_2">
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
                            <input type="checkbox" class="form-check-input" id="member_check_3_1" name="member_check_3">
                            <label for="member_check_3_1" class="block w-full px-2 py-1">큐슈</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_3_2" name="member_check_3">
                            <label for="member_check_3_2" class="block w-full px-2 py-1">후쿠오카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_3_3" name="member_check_3">
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
                            <input type="checkbox" class="form-check-input" id="member_check_4_1" name="member_check_4">
                            <label for="member_check_4_1" class="block w-full px-2 py-1">도쿄</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_4_2" name="member_check_4">
                            <label for="member_check_4_2" class="block w-full px-2 py-1">오사카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_4_3" name="member_check_4">
                            <label for="member_check_4_3" class="block w-full px-2 py-1">나라</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">골프장명</div>
        <input type="text" class="form-control">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">프로모션명</div>
        <input type="text" class="form-control">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">혜택</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-40 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_5_1" name="member_check_5">
                        <label for="member_check_5_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_5_2" name="member_check_5">
                        <label for="member_check_5_2" class="block w-full px-2 py-1">마일리지</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_5_3" name="member_check_5">
                        <label for="member_check_5_3" class="block w-full px-2 py-1">쿠폰</label>
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
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_6_1" name="member_check_6">
                        <label for="member_check_6_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_6_2" name="member_check_6">
                        <label for="member_check_6_2" class="block w-full px-2 py-1">OTA</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_6_3" name="member_check_6">
                        <label for="member_check_6_3" class="block w-full px-2 py-1">골프부킹</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_6_4" name="member_check_6">
                        <label for="member_check_6_4" class="block w-full px-2 py-1">항공</label>
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
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_7_1" name="member_check_7">
                        <label for="member_check_7_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_7_2" name="member_check_7">
                        <label for="member_check_7_2" class="block w-full px-2 py-1">HTT</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_7_3" name="member_check_7">
                        <label for="member_check_7_3" class="block w-full px-2 py-1">Line dosi NFT</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_7_4" name="member_check_7">
                        <label for="member_check_7_4" class="block w-full px-2 py-1">Google Booking</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_7_4" name="member_check_7">
                        <label for="member_check_7_4" class="block w-full px-2 py-1">Google TTD</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">채널명</div>
        <input type="text" class="form-control">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">사용여부</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-24 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_8_1" name="member_check_8">
                        <label for="member_check_8_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_8_2" name="member_check_8">
                        <label for="member_check_8_2" class="block w-full px-2 py-1">사용</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_8_3" name="member_check_8">
                        <label for="member_check_8_3" class="block w-full px-2 py-1">미사용</label>
                    </li>
                </ul>
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
        {number:"1", kind:"결제", promotion_name:"프로모션명", period:"24.03.17~24.04.30", sale:"5%", mileage:"3%", coupon:"2,000", target:"<span>전체</span>", channel:"<span>채널<br/>(20)</span>", use:"사용", writer:"홍길동", date:"24.03.01"},
        {number:"2", kind:"재결제", promotion_name:"프로모션명", period:"24.03.17~24.04.30", sale:"5%", mileage:"3%", coupon:"2,000", target:"<span>골프장<br/>(20)</span>", channel:"<span>아시아나</span>", use:"사용", writer:"홍길동", date:"24.03.01"},
        {number:"3", kind:"가입", promotion_name:"프로모션명", period:"24.03.17~24.04.30", sale:"5%", mileage:"3%", coupon:"2,000", target:"<span>전체</span>", channel:"<span>채널<br/>(20)</span>", use:"사용", writer:"홍길동", date:"24.03.01"},
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
            {title:"번호", field:"number", minWidth:70},
            {title:"구분", field:"kind", minWidth:70},
            {title:"프로모션명", field:"promotion_name", minWidth:110},
            {title:"프로모션기간", field:"period", minWidth:110},
            {title:"할인", field:"sale", minWidth:70},
            {title:"마일리지", field:"mileage", minWidth:70},
            {title:"쿠폰", field:"coupon", minWidth:80},
            {title:"대상", field:"target", minWidth:100, formatter:"html"},
            {title:"채널", field:"channel", minWidth:100, formatter:"html"},
            {title:"사용여부", field:"use", minWidth:80},
            {title:"등록자", field:"writer", minWidth:80},
            {title:"등록일", field:"date", minWidth:80},
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
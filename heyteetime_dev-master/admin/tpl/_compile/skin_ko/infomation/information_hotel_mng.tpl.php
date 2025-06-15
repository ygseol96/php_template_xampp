<?php /* Template_ 2.2.8 2024/06/05 14:12:53 C:\xampp\heytee_dev\admin\_global\skin_ko\infomation\information_hotel_mng.tpl 000017407 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between mt-8">
    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-bold mr-auto">호텔정보 목록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <a href="./information_hotel_regist.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i>호텔 추가</a>
    </div>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">지역</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">대륙</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="hotel_check_1_1" name="hotel_check1">
                        <label for="hotel_check_1_1" class="block w-full px-2 py-1">미주</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="hotel_check_1_2" name="hotel_check1">
                        <label for="hotel_check_1_2" class="block w-full px-2 py-1">유럽</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="hotel_check_1_3" name="hotel_check1">
                        <label for="hotel_check_1_3" class="block w-full px-2 py-1">아시아</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="dropdown mt-1">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">국가</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="hotel_check_2_1" name="hotel_check2">
                        <label for="hotel_check_2_1" class="block w-full px-2 py-1">대한민국</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="hotel_check_2_2" name="hotel_check2">
                        <label for="hotel_check_2_2" class="block w-full px-2 py-1">일본</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="hotel_check_2_3" name="hotel_check2">
                        <label for="hotel_check_2_3" class="block w-full px-2 py-1">중국</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="dropdown mt-1">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">지역</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="hotel_check_3_1" name="hotel_check3">
                        <label for="hotel_check_3_1" class="block w-full px-2 py-1">큐슈</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="hotel_check_3_2" name="hotel_check3">
                        <label for="hotel_check_3_2" class="block w-full px-2 py-1">후쿠오카</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="hotel_check_3_3" name="hotel_check3">
                        <label for="hotel_check_3_3" class="block w-full px-2 py-1">간사이</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="dropdown mt-1">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">도시</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="hotel_check_4_1" name="hotel_check4">
                        <label for="hotel_check_4_1" class="block w-full px-2 py-1">도쿄</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="hotel_check_4_2" name="hotel_check4">
                        <label for="hotel_check_4_2" class="block w-full px-2 py-1">오사카</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="hotel_check_4_3" name="hotel_check4">
                        <label for="hotel_check_4_3" class="block w-full px-2 py-1">나라</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">사용여부</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="hotel_radio_1_1" name="hotel_radio1">
                        <label for="hotel_radio_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="hotel_radio_1_2" name="hotel_radio1">
                        <label for="hotel_radio_1_2" class="block w-full px-2 py-1">사용</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="hotel_radio_1_3" name="hotel_radio1">
                        <label for="hotel_radio_1_3" class="block w-full px-2 py-1">미사용</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">위도 경도</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="hotel_radio_2_1" name="hotel_radio2">
                        <label for="hotel_radio_2_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="hotel_radio_2_2" name="hotel_radio2">
                        <label for="hotel_radio_2_2" class="block w-full px-2 py-1">등록</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="hotel_radio_2_3" name="hotel_radio2">
                        <label for="hotel_radio_2_3" class="block w-full px-2 py-1">미등록</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상품가격</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="hotel_radio_3_1" name="hotel_radio3">
                        <label for="hotel_radio_3_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="hotel_radio_3_2" name="hotel_radio3">
                        <label for="hotel_radio_3_2" class="block w-full px-2 py-1">~5만원</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="hotel_radio_3_3" name="hotel_radio3">
                        <label for="hotel_radio_3_3" class="block w-full px-2 py-1">5~10만원</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="hotel_radio_3_4" name="hotel_radio3">
                        <label for="hotel_radio_3_4" class="block w-full px-2 py-1">10~20만원</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="hotel_radio_3_5" name="hotel_radio3">
                        <label for="hotel_radio_3_5" class="block w-full px-2 py-1">20만원~</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">연동업체</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="hotel_radio_4_1" name="hotel_radio4">
                        <label for="hotel_radio_4_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="hotel_radio_4_2" name="hotel_radio4">
                        <label for="hotel_radio_4_2" class="block w-full px-2 py-1">익스피디아</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="hotel_radio_4_3" name="hotel_radio4">
                        <label for="hotel_radio_4_3" class="block w-full px-2 py-1">아고다</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="hotel_radio_4_4" name="hotel_radio4">
                        <label for="hotel_radio_4_4" class="block w-full px-2 py-1">호텔스닷컴</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">호텔명</div>
        <input type="text" class="form-control">
    </div>
    <button class="btn btn-primary-soft">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 000명</div>
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
    // 데이터
    var tabledata = [
        {number:1, continent:"아시아", nation:"대한민국", region:"인천", city:"인천", hotelname:'<div class="!flex items-center gap-2 h-full"><img src="/_global/skin_ko/infomation/dist/images/sample_img.jpg" class="!w-[60px] h-[60px] object-cover" alt=""><p class="flex-1">도쿄 유명한 호텔</p></div>',price:"000,000",  whetherornot:"사용", latitude:"000.00000 / 0000.00000", registrant:"홍길동", registrantdate:'24.01.01' },
        {number:1, continent:"아시아", nation:"대한민국", region:"인천", city:"인천", hotelname:'<div class="!flex items-center gap-2 h-full"><img src="/_global/skin_ko/infomation/dist/images/sample_img.jpg" class="!w-[60px] h-[60px] object-cover" alt=""><p class="flex-1">도쿄 유명한 호텔</p></div>',price:"000,000",  whetherornot:"사용", latitude:"000.00000 / 0000.00000", registrant:"홍길동", registrantdate:'24.01.01' },
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
            {title:"번호", field:"number", minWidth:60},
            {title:"대륙", field:"continent", minWidth:60},
            {title:"국가", field:"nation", minWidth:100},
            {title:"지역", field:"region", minWidth:100},
            {title:"도시", field:"city", minWidth:100},
            {title:"호텔명", field:"hotelname", minWidth:200, formatter:"html"},
            {title:"가격", field:"price", minWidth:100},
            {title:"사용여부", field:"whetherornot", minWidth:60},
            {title:"위도/경도", field:"latitude", minWidth:200},
            {title:"등록자", field:"registrant", minWidth:60},
            {title:"등록일", field:"registrantdate", minWidth:60},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./information_hotel_regist.php'
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
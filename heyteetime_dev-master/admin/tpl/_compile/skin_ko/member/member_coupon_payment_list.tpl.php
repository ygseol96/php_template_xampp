<?php /* Template_ 2.2.8 2024/06/20 11:45:54 C:\xampp\heyteetime_dev\admin\_global\skin_ko\member\member_coupon_payment_list.tpl 000014955 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">쿠폰 지급 목록</h2>
    <a href="./member_coupon_payment.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 쿠폰지급</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">기간조회</div>
        <div class="flex flex-wrap items-center gap-1">
            <select class="form-select w-32">
                <option>등록일</option>
                <option>발급일</option>
                <option>유효일</option>
            </select>
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">쿠폰종류</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" class="form-check-input" id="member_check_1_1">
                        <label for="member_check_1_1" class="block w-full px-2 py-1">예약권</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_2">
                        <label for="member_check_1_2" class="block w-full px-2 py-1">금액권</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_3">
                        <label for="member_check_1_3" class="block w-full px-2 py-1">교환권</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_4">
                        <label for="member_check_1_4" class="block w-full px-2 py-1">정액할인</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_5">
                        <label for="member_check_1_5" class="block w-full px-2 py-1">정률할인</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_6">
                        <label for="member_check_1_6" class="block w-full px-2 py-1">멤버쉽</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_7">
                        <label for="member_check_1_7" class="block w-full px-2 py-1">할인샵</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">쿠폰구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_2_1" name="member_check_2">
                        <label for="member_check_2_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_2" name="member_check_2">
                        <label for="member_check_2_2" class="block w-full px-2 py-1">회원가입</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_3" name="member_check_2">
                        <label for="member_check_2_3" class="block w-full px-2 py-1">멤버쉽</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_4" name="member_check_2">
                        <label for="member_check_2_4" class="block w-full px-2 py-1">회원등급</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_5" name="member_check_2">
                        <label for="member_check_2_5" class="block w-full px-2 py-1">상품구매</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_6" name="member_check_2">
                        <label for="member_check_2_6" class="block w-full px-2 py-1">이벤트</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_7" name="member_check_2">
                        <label for="member_check_2_7" class="block w-full px-2 py-1">기타</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">쿠폰상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_3_1" name="member_check_3">
                        <label for="member_check_3_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_3_2" name="member_check_3">
                        <label for="member_check_3_2" class="block w-full px-2 py-1">정상</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_3_3" name="member_check_3">
                        <label for="member_check_3_3" class="block w-full px-2 py-1">만료</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_3_4" name="member_check_3">
                        <label for="member_check_3_4" class="block w-full px-2 py-1">일시정지</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">지급상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_4_1">
                        <label for="member_check_4_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_4_2">
                        <label for="member_check_4_2" class="block w-full px-2 py-1">지급</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_4_3">
                        <label for="member_check_4_3" class="block w-full px-2 py-1">미지급</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">쿠폰명</div>
        <input type="text" class="form-control">
    </div>
    <button class="btn btn-primary-soft">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 000쿠폰</div>
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
        {number:1, kind:"정액할인", division:"회원가입", coupon:"신규회원할인쿠폰", expiry:"<span>2024.01.01 ~<br/> 2024.03.31</span>", state:"정상", amount:"지급(25/1000)", person:"홍길동", date:"24.01.01" },
        {number:2, kind:"정액할인", division:"회원가입", coupon:"신규회원할인쿠폰", expiry:"<span>2024.01.01 ~<br/> 2024.03.31</span>", state:"정상", amount:"지급(25/1000)", person:"홍길동", date:"24.01.04" },
        {number:3, kind:"정액할인", division:"회원가입", coupon:"신규회원할인쿠폰", expiry:"<span>2024.01.01 ~<br/> 2024.03.31</span>", state:"만료", amount:"지급(1/100)", person:"홍길동", date:"24.01.03" },
        {number:4, kind:"정액할인", division:"회원가입", coupon:"신규회원할인쿠폰", expiry:"<span>2024.01.01 ~<br/> 2024.03.31</span>", state:"정상", amount:"미지급", person:"홍길동", date:"24.01.02" },
    ]

    const table = new Tabulator("#tabulator", {
        pagination: true,
        paginationMode: "remote",
        ajaxURL : "/member/ajax_member.php",
        ajaxParams: function() {
            return {
                type: 'getCouponList',
            };
        },
        ajaxResponse : function (url, params, response) {
            return response;
        },
        printAsHtml: true,
        printStyled: true,
        paginationSize: 20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",
        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:100},
            {title:"쿠폰종류", field:"kind", minWidth:130},
            {title:"쿠폰구분", field:"division", minWidth:130},
            {title:"쿠폰명", field:"coupon", minWidth:150},
            {title:"유효기간", field:"expiry", minWidth:150, formatter:"html"},
            {title:"쿠폰상태", field:"state", minWidth:150},
            {title:"지급수량", field:"amount", minWidth:100},
            {title:"등록자", field:"person", minWidth:100},
            {title:"등록일", field:"date", minWidth:100},
        ],
        rowFormatter: function(row) {
            row.getCell("number").setValue(((table.getPage()-1) * table.getPageSize()) + row.getPosition(true));
        }
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./member_coupon_payment_detail.php'
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
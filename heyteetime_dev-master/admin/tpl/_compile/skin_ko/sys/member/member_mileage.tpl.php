<?php /* Template_ 2.2.8 2024/04/22 13:09:56 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\member\member_mileage.tpl 000013374 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">마일리지 지급 목록</h2>
    <a href="./member_mileage_regist.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 마일리지 지급</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">수령일</div>
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
        <div class="mb-1 text-slate-500 font-medium">사용일</div>
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
        <div class="mb-1 text-slate-500 font-medium">지급사유</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" class="form-check-input" id="member_check_1_1">
                        <label for="member_check_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_2">
                        <label for="member_check_1_2" class="block w-full px-2 py-1">신규가입</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_3">
                        <label for="member_check_1_3" class="block w-full px-2 py-1">멤버쉽</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_4">
                        <label for="member_check_1_4" class="block w-full px-2 py-1">회원등급</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_5">
                        <label for="member_check_1_5" class="block w-full px-2 py-1">상품구매</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_6">
                        <label for="member_check_1_6" class="block w-full px-2 py-1">이벤트</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_7">
                        <label for="member_check_1_7" class="block w-full px-2 py-1">기타</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">사용사유</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_2_1" name="member_check_2">
                        <label for="member_check_2_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_2_2" name="member_check_2">
                        <label for="member_check_2_2" class="block w-full px-2 py-1">상품구매</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_2_3" name="member_check_2">
                        <label for="member_check_2_3" class="block w-full px-2 py-1">기간만료</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_2_4" name="member_check_2">
                        <label for="member_check_2_4" class="block w-full px-2 py-1">수령취소</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_2_5" name="member_check_2">
                        <label for="member_check_2_5" class="block w-full px-2 py-1">쿠폰구매</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">이벤트 수령</div>
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
                        <label for="member_check_3_2" class="block w-full px-2 py-1">이벤트1</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_3_3" name="member_check_3">
                        <label for="member_check_3_3" class="block w-full px-2 py-1">이벤트2</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_3_4" name="member_check_3">
                        <label for="member_check_3_4" class="block w-full px-2 py-1">이벤트3</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">수령자</div>
        <input type="text" class="form-control">
    </div>
    <button class="btn btn-primary-soft">검색하기</button>
</div>

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
    // 데이터
    var tabledata = [
        {number:1, id:"testid@test.com", name:"홍길동", reason:"<a href='./member_mileage_detail.php' class='text-primary underline'>이벤트</a>", event:"한국오픈", receipt:"2024.01.01", receive:"1000", use:"상품구매", amount:"-", date:"24.01.01", button:"<button class='btn btn-sm btn-danger'>지급취소</button>"},
        {number:2, id:"testid@test.com", name:"홍길동", reason:"<a href='./member_mileage_detail.php' class='text-primary underline'>신규가입</a>", event:"", receipt:"2024.01.01", receive:"1000", use:"상품구매", amount:"1000", date:"24.01.01", button:"<button class='btn btn-sm btn-danger'>지급취소</button>"},
        {number:3, id:"testid@test.com", name:"홍길동", reason:"<a href='./member_mileage_detail.php' class='text-primary underline'>신규가입</a>", event:"", receipt:"2024.01.01", receive:"-", use:"상품구매", amount:"-", date:"24.01.01", button:"<button class='btn btn-sm btn-danger'>지급취소</button>"},
        {number:4, id:"testid@test.com", name:"홍길동", reason:"<a href='./member_mileage_detail.php' class='text-primary underline'>신규가입</a>", event:"", receipt:"2024.01.01", receive:"1000", use:"상품구매", amount:"-", date:"24.01.01", button:"<button class='btn btn-sm btn-danger'>지급취소</button>"},
    ]

    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        data:tabledata,
        printAsHtml: true,
        printStyled: true,
        pagination: "local",
        paginationSize: 20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",

        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:80},
            {title:"아이디", field:"id", minWidth:110},
            {title:"성명", field:"name", minWidth:110},
            {title:"지급사유", field:"reason", minWidth:130, formatter:"html"},
            {title:"이벤트", field:"event", minWidth:150},
            {title:"수령일", field:"receipt", minWidth:150},
            {title:"수령액", field:"receive", minWidth:110},
            {title:"사용사유", field:"use", minWidth:110},
            {title:"사용액", field:"amount", minWidth:110},
            {title:"사용일", field:"date", minWidth:100},
            {title:"", field:"button", minWidth:100, formatter:"html"},
        ],
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
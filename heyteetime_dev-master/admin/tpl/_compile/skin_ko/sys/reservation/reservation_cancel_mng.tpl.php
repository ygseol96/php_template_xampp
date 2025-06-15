<?php /* Template_ 2.2.8 2024/05/16 10:56:19 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\reservation\reservation_cancel_mng.tpl 000016805 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center mt-8">
    <h2 class="text-xl font-bold mr-auto">취소 목록</h2>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">취소일</div>
        <div class="relative w-full md:w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <input type="text" class="datepicker form-control pl-12">
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약지역</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">대륙</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select multi">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" class="form-check-input" id="member_check_2_1">
                            <label for="member_check_2_1" class="block w-full px-2 py-1">대륙</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_2">
                            <label for="member_check_2_2" class="block w-full px-2 py-1">미주</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_3">
                            <label for="member_check_2_3" class="block w-full px-2 py-1">유럽</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_2_4">
                            <label for="member_check_2_4" class="block w-full px-2 py-1">아시아</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">국가</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="member_check_3_1" name="member_check_3">
                            <label for="member_check_3_1" class="block w-full px-2 py-1">국가</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_3_2" name="member_check_3">
                            <label for="member_check_3_2" class="block w-full px-2 py-1">대한민국</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_3_3" name="member_check_3">
                            <label for="member_check_3_3" class="block w-full px-2 py-1">일본</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_3_4" name="member_check_3">
                            <label for="member_check_3_4" class="block w-full px-2 py-1">중국</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">지역</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" id="member_check_4_1" name="member_check_4">
                            <label for="member_check_4_1" class="block w-full px-2 py-1">큐슈</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_4_2" name="member_check_4">
                            <label for="member_check_4_2" class="block w-full px-2 py-1">후쿠오카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="member_check_4_3" name="member_check_4">
                            <label for="member_check_4_3" class="block w-full px-2 py-1">간사이</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약번호</div>
        <input type="text" class="form-control w-32">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상품구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_10_1" name="member_check_10">
                        <label for="member_check_10_1" class="block w-full px-2 py-1">티타임</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_10_2" name="member_check_10">
                        <label for="member_check_10_2" class="block w-full px-2 py-1">항공+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_10_3" name="member_check_10">
                        <label for="member_check_10_3" class="block w-full px-2 py-1">숙박+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_10_4" name="member_check_10">
                        <label for="member_check_10_4" class="block w-full px-2 py-1">항공숙박+</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">예약자명,연락처</div>
        <input type="text" class="form-control w-36">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">취소사유</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-32 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_13_1" name="member_check_13">
                        <label for="member_check_13_1" class="block w-full px-2 py-1">단순변심</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_13_2" name="member_check_13">
                        <label for="member_check_13_2" class="block w-full px-2 py-1">상품변경</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_13_3" name="member_check_13">
                        <label for="member_check_13_3" class="block w-full px-2 py-1">상품가격</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_13_4" name="member_check_13">
                        <label for="member_check_13_4" class="block w-full px-2 py-1">위약기간임박</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_13_5" name="member_check_13">
                        <label for="member_check_13_5" class="block w-full px-2 py-1">예약확정지연</label>
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
        <div>총 000명</div>
        <div class="flex items-center gap-3">
            <button class="btn btn-dark w-24">결제요청</button>
            <button class="btn btn-primary w-24">예약확정</button>
            <button class="btn btn-danger w-24">예약취소</button>
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
<!-- 취소 사유 모달 -->
<div id="reser_cancel-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">취소사유</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body p-5 text-center">
                <div class="flex items-center gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">취소구분</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="코드를 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">취소사유</div>
                    <div class="flex-1">
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">예약취소</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 데이터
    var tabledata = [
        {number:"1", Rnumber:"11111", name:"<span>아시아 > 태국 > 치앙마이<br/>가산레가시</span>", option:"<span>8명<br/>숙박,송영</span>", payment:"<span>결제취소<br/>카드</span>", total:"<span>3,000,000<br/>3,000,000</span>", coupon:"<span>10%할인<br/>미사용</span>", phone:"<span>입력완료</span>", cancel:"<span>단순변심<br/><button data-tw-toggle='modal' data-tw-target='#reser_cancel-modal'><img class='w-4 h-4 mx-auto' src='/_global/dist/images/heyteetime/alert_icon.svg' /></button></span>", date:"2024.01.01" },
        {number:"1", Rnumber:"11111", name:"<span>아시아 > 태국 > 치앙마이<br/>가산레가시</span>", option:"<span>8명<br/>숙박,송영</span>", payment:"<span>결제취소<br/>카드</span>", total:"<span>3,000,000<br/>3,000,000</span>", coupon:"<span>10%할인<br/>미사용</span>", phone:"<span>미입력<br/>취소 - 2시간</span>", cancel:"<span>위약기간임박<br/><button data-tw-toggle='modal' data-tw-target='#reser_cancel-modal'><img class='w-4 h-4 mx-auto' src='/_global/dist/images/heyteetime/alert_icon.svg' /></button></span>", date:"2024.01.01" },
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
            {title:"번호", field:"number", minWidth:100, },
            {title:"예약번호", field:"Rnumber", minWidth:100},
            {title:"예약지역<br/>예약상품명", field:"name", minWidth:150, formatter:"html"},
            {title:"인원수<br/>옵션", field:"option", minWidth:150, formatter:"html"},
            {title:"결제상태<br/>결제수단", field:"payment", minWidth:150, formatter:"html"},
            {title:"예약총액<br/>결제금액", field:"total", minWidth:100, formatter:"html"},
            {title:"쿠폰명<br/>마일리지", field:"coupon", minWidth:100, formatter:"html"},
            {title:"내장자 여부<br/>연락처", field:"phone", minWidth:100, formatter:"html"},
            {title:"취소사유", field:"cancel", minWidth:100, formatter:"html"},
            {title:"취소일", field:"date", minWidth:100},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        if(e.target.tagName !== "IMG"){
            location.href='./reservation_cancel_detail.php'
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
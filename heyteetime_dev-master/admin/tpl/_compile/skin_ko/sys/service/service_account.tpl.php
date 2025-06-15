<?php /* Template_ 2.2.8 2024/05/10 15:18:31 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\service\service_account.tpl 000008144 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">계정 목록</h2>
    <div class="flex items-center gap-2">
        <a href="./service_account_regist.php" class="btn btn-primary">계정등록</a>
        <a href="./service_account_department.php" class="btn btn-primary">부서별 권한관리</a>
    </div>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">등록일</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" name="sch_date" class="form-control pl-12">
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">계정상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" class="form-check-input" id="member_check_1_1">
                        <label for="member_check_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_1_2">
                        <label for="member_check_1_2" class="block w-full px-2 py-1">정상</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_1_3">
                        <label for="member_check_1_3" class="block w-full px-2 py-1">일시정지</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_1_4">
                        <label for="member_check_1_4" class="block w-full px-2 py-1">삭제</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">부서</div>
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
                        <label for="member_check_2_2" class="block w-full px-2 py-1">경영</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_3" name="member_check_2">
                        <label for="member_check_2_3" class="block w-full px-2 py-1">전략</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_4" name="member_check_2">
                        <label for="member_check_2_4" class="block w-full px-2 py-1">사업</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_5" name="member_check_2">
                        <label for="member_check_2_5" class="block w-full px-2 py-1">기획</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_6" name="member_check_2">
                        <label for="member_check_2_6" class="block w-full px-2 py-1">운영</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_7" name="member_check_2">
                        <label for="member_check_2_7" class="block w-full px-2 py-1">개발</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_2_8" name="member_check_2">
                        <label for="member_check_2_8" class="block w-full px-2 py-1">기타</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">사용자 계정, 사용자명</div>
        <input type="text" class="form-control">
    </div>
    <button class="btn btn-primary-soft">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 000명</div>
    </div>

    <!-- 테이블 -->
    <div class="overflow-x-auto mt-3">
        <div id="tabulator" class="table-report table-report--tabulator"></div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 데이터
    var tabledata = <?php echo $TPL_VAR["data"]['list']?>;

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
            {title:"번호", field:"number", minWidth:100},
            {title:"부서", field:"department", minWidth:130},
            {title:"사용자계정", field:"account", minWidth:130},
            {title:"사용자명", field:"name", minWidth:150},
            {title:"상태", field:"state", minWidth:150},
            {title:"작성일", field:"date", minWidth:150},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    // table.on("rowClick", function(e, row){
    //     location.href='./member_coupon_payment_detail.php'
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
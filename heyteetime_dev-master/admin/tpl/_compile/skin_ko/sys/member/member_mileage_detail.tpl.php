<?php /* Template_ 2.2.8 2024/04/22 13:16:07 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\member\member_mileage_detail.tpl 000006646 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y">
    <div class="flex items-center mt-4">
        <a href="/sys/member/member_mileage.php" class="flex items-center gap-1 text-primary">
            <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 마일리지 지급목록
        </a>
    </div>
    <div class="flex items-center mt-2">
        <h2 class="text-xl font-bold mr-auto">마일리지지급 상세</h2>
    </div>
</div>

<!-- 마일리지 정보 -->
<div class="intro-y box p-5 mt-3">
    <div class="flex items-center justify-between mb-2">
        <h3 class="text-lg font-bold mr-auto">마일리지 정보</h3>
    </div>
    <div class="flex flex-wrap items-start gap-2 p-2 border border-slate-200 rounded whitespace-nowrap">
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">지급사유</div>
            <div>신규가입</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">이벤트</div>
            <div>-</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">지급구분</div>
            <div>건별지급</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">지급마일리지</div>
            <div>100000</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">지급일</div>
            <div>2024.01.01</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">지급대상</div>
            <div>00명</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">총마일리지</div>
            <div>000,000</div>
        </div>
    </div>
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
        {number:1, id:"testid@test.com", name:"홍길동", reason:"신규가입", receipt:"2024.01.01", button:"<button class='btn btn-sm btn-danger'>지급취소</button>" },
        {number:2, id:"testid@test.com", name:"홍길동", reason:"신규가입", receipt:"2024.01.01", button:"<button class='btn btn-sm btn-danger'>지급취소</button>" },
        {number:3, id:"testid@test.com", name:"홍길동", reason:"신규가입", receipt:"2024.01.01", button:"<button class='btn btn-sm btn-danger'>지급취소</button>" },
        {number:4, id:"testid@test.com", name:"홍길동", reason:"신규가입", receipt:"2024.01.01", button:"<button class='btn btn-sm btn-danger'>지급취소</button>" },
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
            {title:"번호", field:"number", minWidth:100},
            {title:"아이디", field:"id", minWidth:130},
            {title:"성명", field:"name", minWidth:130},
            {title:"수령사유", field:"reason", minWidth:150},
            {title:"지급일", field:"receipt", minWidth:150,},
            {title:"", field:"button", minWidth:100, formatter:"html"},
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
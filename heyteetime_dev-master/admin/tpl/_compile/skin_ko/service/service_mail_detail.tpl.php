<?php /* Template_ 2.2.8 2024/06/05 15:19:08 C:\xampp\heytee_dev\admin\_global\skin_ko\service\service_mail_detail.tpl 000018558 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between gap-2">
    <div>
        <div class="flex items-center mt-4">
            <a href="./service_mail_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 메일 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">메일발송 상세</h2>
        </div>
    </div>
</div>

<!-- 마일리지 정보 -->
<div class="intro-y box p-5 mt-3">
    <div class="flex flex-col gap-2 p-2 border border-slate-200 rounded">
        <div class="flex flex-wrap items-start gap-2 whitespace-nowrap">
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">발송구분</div>
                <div>즉시발송</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">예약일시</div>
                <div>-</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">메일구분</div>
                <div>기획전</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">메일명</div>
                <div>일본 아코디아 기획전</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">발송상태</div>
                <div>발송완료</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">발송자수</div>
                <div>000,000</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">수신자수</div>
                <div>000,000</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">발송자</div>
                <div>홍길동</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">발송일</div>
                <div>2024.01.01</div>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <div class="flex-1 flex flex-wrap items-center py-1.5 px-3">
                <div>
                    <div class="mb-0.5 text-slate-500">제목</div>
                    <div>일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전</div>
                </div>
                <button class="btn btn-primary-soft ml-auto" data-tw-toggle="modal" data-tw-target="#mail_content-modal">내용보기</button>
            </div>
        </div>
    </div>

</div>


<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-5">
    <div>
        <div class="mb-1 text-slate-500 font-medium">가입구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">미선택</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="subscription_category_1_1" name="subscription_category">
                        <label for="subscription_category_1_1" class="block w-full px-2 py-1">미선택</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="subscription_category_1_2" name="subscription_category">
                        <label for="subscription_category_1_2" class="block w-full px-2 py-1">구글</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="subscription_category_1_3" name="subscription_category">
                        <label for="subscription_category_1_3" class="block w-full px-2 py-1">애플</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="subscription_category_1_4" name="subscription_category">
                        <label for="subscription_category_1_4" class="block w-full px-2 py-1">페이스북</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="subscription_category_1_5" name="subscription_category">
                        <label for="subscription_category_1_5" class="block w-full px-2 py-1">라인</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="subscription_category_1_6" name="subscription_category">
                        <label for="subscription_category_1_6" class="block w-full px-2 py-1">카카오톡</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="subscription_category_1_7" name="subscription_category">
                        <label for="subscription_category_1_7" class="block w-full px-2 py-1">네이버</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="subscription_category_1_8" name="subscription_category">
                        <label for="subscription_category_1_8" class="block w-full px-2 py-1">일반</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">국적</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">미선택</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="push_nationality_1_1" name="push_nationality">
                        <label for="push_nationality_1_1" class="block w-full px-2 py-1">미선택</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="push_nationality_1_2" name="push_nationality">
                        <label for="push_nationality_1_2" class="block w-full px-2 py-1">미국 </label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="push_nationality_1_3" name="push_nationality">
                        <label for="push_nationality_1_3" class="block w-full px-2 py-1">한국</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="push_nationality_1_4" name="push_nationality">
                        <label for="push_nationality_1_4" class="block w-full px-2 py-1">중국</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="push_nationality_1_5" name="push_nationality">
                        <label for="push_nationality_1_5" class="block w-full px-2 py-1">일본</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="push_nationality_1_6" name="push_nationality">
                        <label for="push_nationality_1_6" class="block w-full px-2 py-1">프랑스</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">수신상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">미선택</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="reception_status_1_1" name="reception_status">
                        <label for="reception_status_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="reception_status_1_2" name="reception_status">
                        <label for="reception_status_1_2" class="block w-full px-2 py-1">발송완료</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="reception_status_1_3" name="reception_status">
                        <label for="reception_status_1_3" class="block w-full px-2 py-1">발송실패</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="reception_status_1_4" name="reception_status">
                        <label for="reception_status_1_4" class="block w-full px-2 py-1">확인완료</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <div class="mb-1 text-slate-500 font-medium">아이디, 성명</div>
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

<!-- 내용보기 메일내용 모달-->
<div id="mail_content-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">메일 내용</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <p class="max-h-80 overflow-y-scroll">일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전</p>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 데이터
    var tabledata = [
        {number:1, id:"testid@test.com", name:"홍길동", nationality:"대한민국", gender:"남", reception_status:"발송완료", confirmation_date:"-", },
        {number:2, id:"testid@test.com", name:"홍길동", nationality:"일본", gender:"여", reception_status:"발송실패", confirmation_date:"-", },
        {number:3, id:"testid@test.com", name:"홍길동", nationality:"프랑스", gender:"남", reception_status:"확인완료", confirmation_date:"2024.01.01 11:22:33", },
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
            {title:"국적", field:"nationality", minWidth:150},
            {title:"성별", field:"gender", minWidth:100},
            {title:"수신상태", field:"reception_status", minWidth:150},
            {title:"확인일", field:"confirmation_date", minWidth:150,},
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
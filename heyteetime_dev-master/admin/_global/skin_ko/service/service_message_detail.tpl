{#head}
{#header}
<div class="intro-y flex flex-wrap items-center justify-between gap-2">
    <div>
        <div class="flex items-center mt-4">
            <a href="./service_message_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 메세지 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">메세지 상세</h2>
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
                <div class="mb-0.5 text-slate-500">메세지구분</div>
                <div>기획전</div>
            </div>
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">메세지명</div>
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
            <div class="flex-1 py-1.5 px-3">
                <div class="mb-0.5 text-slate-500">발송형태</div>
                <div>MMS</div>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <div class="flex-1 flex flex-wrap items-center py-1.5 px-3">
                <div class="flex-1 flex flex-wrap items-start gap-2">
                    <div>
                        <img src="./dist/images/sample_img.jpg" class="w-full h-full md:w-[200px] md:h-[200px] object-cover" alt="">
                    </div>
                    <div class="w-4/5">
                        <div class="mb-0.5 text-slate-500">내용</div>
                        <div>일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전</div>
                        <div>http://www.heyteetime/search?field=aja010&lang=en&prcd=01010S</div>
                    </div>
                </div>
                <button class="btn btn-primary-soft ml-auto" data-tw-toggle="modal" data-tw-target="#message_content-modal">내용보기</button>
            </div>
        </div>
    </div>

</div>


<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-5">
    <div>
        <div class="mb-1 text-slate-500 font-medium">발송일</div>
        <div class="relative w-full md:w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <input type="text" class="datepicker form-control pl-12">
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">확인일</div>
        <div class="relative w-full md:w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <input type="text" class="datepicker form-control pl-12">
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
        <div class="mb-1 text-slate-500 font-medium">성별</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">미선택</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="push_gender_1_1" name="push_gender">
                        <label for="push_gender_1_1" class="block w-full px-2 py-1">미선택</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="push_gender_1_2" name="push_gender">
                        <label for="push_gender_1_2" class="block w-full px-2 py-1">미입력 </label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="push_gender_1_3" name="push_gender">
                        <label for="push_gender_1_3" class="block w-full px-2 py-1">남성</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="push_gender_1_4" name="push_gender">
                        <label for="push_gender_1_4" class="block w-full px-2 py-1">여성</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">발송상태</div>
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
                    <!-- 기획서상 없는데 혹시 몰라 넣어놈 -->
                    <!-- <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="reception_status_1_3" name="reception_status">
                        <label for="reception_status_1_3" class="block w-full px-2 py-1">발송실패</label>
                    </li> -->
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

<!-- 내용보기 메시지 내용 모달-->
<div id="message_content-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">메세지 내용</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex-1 flex flex-col items-center gap-2">
                    <div class="flex-1">
                        <img src="./dist/images/sample_img.jpg" class="w-full h-full md:w-[200px] md:h-[200px] object-cover" alt="">
                    </div>
                    <div class="flex-1 mt-2">
                        <div>일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전 일본 아코디아 기획전</div>
                        <div>http://www.heyteetime/search?field=aja010&lang=en&prcd=01010S</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{#bottom}
<script>
    // 데이터
    var tabledata = [
        {number:1, phone_number:"010-3504-3789", name:"홍길동", nationality:"대한민국", gender:"남", reception_status:"발송완료", shipping_date:"2024.01.01", confirmation_date:"2024.01.01 11:22:33", },
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
            {title:"번호", field:"number", minWidth:50},
            {title:"전화번호", field:"phone_number", minWidth:100},
            {title:"성명", field:"name", minWidth:130},
            {title:"국적", field:"nationality", minWidth:150},
            {title:"성별", field:"gender", minWidth:100},
            {title:"발송상태", field:"reception_status", minWidth:150},
            {title:"발송일", field:"shipping_date", minWidth:150},
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
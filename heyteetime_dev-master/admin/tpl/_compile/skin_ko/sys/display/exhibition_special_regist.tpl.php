<?php /* Template_ 2.2.8 2024/05/16 10:38:28 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\display\exhibition_special_regist.tpl 000025318 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./exhibition_special_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 기획전 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">기획전 등록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>기획전등록</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>등록취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="tem_mark_1_1" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_1">한국어</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_2" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_2">영어</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_3" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_3">스페인어</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_4" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_4">일본어</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_5" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_5">중국어</label>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">제목설정</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                <li id="bylanguage-1-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-1" type="button" role="tab" aria-controls="bylanguage-tab-1" aria-selected="true">한국어</button>
                </li>
                <li id="bylanguage-2-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-2" type="button" role="tab" aria-controls="bylanguage-tab-2" aria-selected="false">영어</button>
                </li>
                <li id="bylanguage-3-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-3" type="button" role="tab" aria-controls="bylanguage-tab-3" aria-selected="false" disabled>스페인어</button>
                </li>
                <li id="bylanguage-4-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-4" type="button" role="tab" aria-controls="bylanguage-tab-4" aria-selected="false">일본어</button>
                </li>
                <li id="bylanguage-5-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-5" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="false" disabled>중국어</button>
                </li>
            </ul>

            <div class="tab-content w-full border-b-2 border-primary">

                <!-- 한국어 -->
                <div id="bylanguage-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-1-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">키워드</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="#벛꽃골프 #갓성비일본">
                        </div>
                    </div>
                </div>

                <!-- 영어 -->
                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">키워드</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="#벛꽃골프 #갓성비일본">
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">키워드</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="#벛꽃골프 #갓성비일본">
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-4-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">키워드</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="#벛꽃골프 #갓성비일본">
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-5-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">키워드</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="#벛꽃골프 #갓성비일본">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">기획전 구성</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="flex justify-between w-full">
                <ul class="w-auto nav nav-boxed-tabs bg-slate-200 rounded-full" role="tablist">
                    <li id="exhibition-1-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !rounded-full active" data-tw-toggle="pill" data-tw-target="#exhibition-tab-1" type="button" role="tab" aria-controls="exhibition-tab-1" aria-selected="true">PC</button>
                    </li>
                    <li id="exhibition-2-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !rounded-full" data-tw-toggle="pill" data-tw-target="#exhibition-tab-2" type="button" role="tab" aria-controls="exhibition-tab-2" aria-selected="false">MOBILE</button>
                    </li>
                </ul>
                <button class="btn btn-primary" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
            </div>


            <div class="w-full">
                <div class="mb-4 flex w-full gap-3">
                    <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                        <div class="flex flex-wrap items-start gap-2">
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">대상</div>
                                <div>PC</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">템플릿</div>
                                <div>상품</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">템플릿명</div>
                                <div>메인 롤링 배너</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">형태</div>
                                <div>고정 (3*2)</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">정렬</div>
                                <div>등록순</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">항목수</div>
                                <div>6</div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-danger-soft">삭제</button>
                </div>
                <div class="mb-4 flex w-full gap-3">
                    <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                        <div class="flex flex-wrap items-start gap-2">
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">대상</div>
                                <div>PC</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">템플릿</div>
                                <div>상품</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">템플릿명</div>
                                <div>메인 롤링 배너</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">형태</div>
                                <div>고정 (3*2)</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">정렬</div>
                                <div>등록순</div>
                            </div>
                            <div class="flex-1 py-1.5 px-3">
                                <div class="text-slate-500">항목수</div>
                                <div>6</div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-danger-soft">삭제</button>
                </div>

            </div>

        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출여부</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="travel_2_1" class="form-check-input" type="radio" name="travel_2">
                    <label class="form-check-label" for="travel_2_1">미노출</label>
                </div>
                <div class="form-check">
                    <input id="travel_2_2" class="form-check-input" type="radio" name="travel_2">
                    <label class="form-check-label" for="travel_2_2">노출</label>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출기간</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="travel_3_1" class="form-check-input" type="radio" name="travel_3">
                    <label class="form-check-label" for="travel_3_1">제한없음</label>
                </div>
                <div class="form-check flex-wrap">
                    <input id="travel_3_2" class="form-check-input" type="radio" name="travel_3">
                    <label class="form-check-label" for="travel_3_2">기간설정</label>
                    <div class="relative w-full md:w-64 ml-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                        </div>
                        <input type="text" class="datepicker form-control pl-12">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="intro-y flex w-full items-center justify-between gap-2 mt-4">
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 기획전삭제</button>
    <div class="flex items-center gap-2">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 기획전등록</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 등록취소</button>
    </div>
</div>
<!-- 전시등록 / pc/mobile 텍스트만 변경 -->
<div id="exhibition_add-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog md:!w-[800px]">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">PC 전시 등록</h2>
                <button class="flex items-center gap-1"  data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <!-- 필터 -->
                <div class="flex flex-wrap gap-2">
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">구분</div>
                        <div>
                            <select class="form-select w-24">
                                <option>전체</option>
                                <option>상품</option>
                                <option>콘텐츠</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">전체</div>
                        <div>
                            <select class="form-select w-24">
                                <option>전체</option>
                                <option>고정</option>
                                <option>롤링</option>
                                <option>탭</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">제목</div>
                        <div>
                            <select class="form-select w-24">
                                <option>전체</option>
                                <option>제목</option>
                                <option>설명</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">언어</div>
                        <div>
                            <select class="form-select w-24">
                                <option>전체</option>
                                <option>한국어</option>
                                <option>영어</option>
                                <option>스페인어</option>
                                <option>일본어</option>
                                <option>중국-번체</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">템플릿명</div>
                        <div class="flex items-center gap-2">
                            <input type="text" class="form-control">
                            <button class="btn btn-primary w-24">검색</button>
                        </div>
                    </div>
                </div>

                <!-- 테이블 -->
                <div class="mt-5">
                    <div class="overflow-x-auto">
                        <div id="tabulator" class="table-report table-report--tabulator"></div>
                    </div>
                </div>


                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">닫기</button>
                    <button class="px-6 btn btn-primary">추가</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 데이터
    var tabledata = [
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 1", detail:"상품", form:"고정형", templatename:"상품 템플릿 01", lang:"한,영,스,일,번,간"},
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 2", detail:"상품", form:"고정형", templatename:"상품 템플릿 01", lang:"한,영,스,일,번,간"},
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 3", detail:"상품", form:"고정형", templatename:"상품 템플릿 01", lang:"한,영,스,일,번,간"},
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
            {title:"번호", field:"number", minWidth:50, formatter:"html"},
            {title:"내용", field:"detail", minWidth:100},
            {title:"형태", field:"form", minWidth:100},
            {title:"템플릿명", field:"templatename", minWidth:150},
            {title:"언어", field:"lang", minWidth:150},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    // table.on("rowClick", function(e, row){
    //     location.href='./service_message_detail.php'
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
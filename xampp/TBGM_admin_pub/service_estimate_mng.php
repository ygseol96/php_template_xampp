<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php
        $side_depth = 'service';
        $side_2depth = 'estimate';
        $depth_1 = '서비스관리';
        $depth_2 = '1:1견적';
        // $depth_3 = '1:1문의 목록'; 
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y mt-8">
                    <h2 class="text-xl font-bold mr-auto">1:1견적</h2>
                </div>

                <!-- 필터 -->
                <div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">견적일</div>
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
                        <div class="mb-1 text-slate-500 font-medium">답변일</div>
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
                        <div class="mb-1 text-slate-500 font-medium">견적구분</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="2">회원</option>
                            <option value="3">상품</option>
                            <option value="4">예약/취소</option>
                            <option value="5">결제/환불</option>
                            <option value="6">견적견적</option>
                            <option value="7">기타</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">답변여부</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="2">미답변</option>
                            <option value="3">답변중</option>
                            <option value="4">답변완료</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">견적제목</div>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">견적자</div>
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


            </div>

        </div>

        <?php include_once('_footer.php'); ?>

        <script>
                // 데이터
                var tabledata = [
                    {number:1, id:"testid@test.com", date:"2024.01.01", division:"회원", title:"제목1", uidse:"testid@test.com", name:"홍길동", answer:"미답변", date2:"24.01.01"},
                    {number:2, id:"testid@test.com", date:"2024.01.01", division:"상품", title:"제목1", uidse:"testid@test.com", name:"홍길동", answer:"답변중", date2:"24.01.01"},
                    {number:3, id:"testid@test.com", date:"2024.01.01", division:"예약/취소", title:"제목1", uidse:"testid@test.com", name:"홍길동", answer:"답변완료", date2:"24.01.01"},
                    {number:4, id:"testid@test.com", date:"2024.01.01", division:"결제/환불", title:"제목1", uidse:"testid@test.com", name:"홍길동", answer:"답변완료", date2:"24.01.01"},
                    {number:5, id:"testid@test.com", date:"2024.01.01", division:"견적견적", title:"제목1", uidse:"testid@test.com", name:"홍길동", answer:"답변완료", date2:"24.01.01"},
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
                        {title:"견적일", field:"date", minWidth:110},
                        {title:"견적구분", field:"division", minWidth:110},
                        {title:"견적제목", field:"title", minWidth:130},
                        {title:"아이디", field:"uidse", minWidth:130},
                        {title:"성명", field:"name", minWidth:100},
                        {title:"답변여부", field:"answer", minWidth:110},
                        {title:"답변일", field:"date2", minWidth:110},
                    ],
                });

                // row 클릭시 detail 페이지로 링크
                table.on("rowClick", function(e, row){
                    location.href='./service_estimate_detail.php'
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


    </body>
</html>
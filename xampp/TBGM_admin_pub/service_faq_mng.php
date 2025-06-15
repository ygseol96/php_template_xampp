<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php
        $side_depth = 'service';
        $side_2depth = 'faq';
        $depth_1 = '서비스관리';
        $depth_2 = '자주묻는질문';
        // $depth_3 = '1:1문의 목록'; 
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y mt-8">
                    <h2 class="text-xl font-bold mr-auto">자주묻는질문 목록</h2>
                </div>

                <!-- 필터 -->
                <div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">자주묻는질문 구분</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="1" selected>전체</option>
                            <option value="2">가입 변경 탈퇴</option>
                            <option value="3">티타임 예약</option>
                            <option value="4">결제 취소</option>
                            <option value="5">쿠폰</option>
                            <option value="6">여행후기</option>
                            <option value="7">신고</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">등록일</div>
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
                        <div class="mb-1 text-slate-500 font-medium">자주묻는질문 언어</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="2">한국어</option>
                            <option value="3">영어</option>
                            <option value="4">스페인어</option>
                            <option value="5">일본어</option>
                            <option value="6">중국어</option>
                            <option value="7">기타</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">노출여부</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="1">노출</option>
                            <option value="2">미노출</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">제목</div>
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
                    {number:1, division:"로그인, 가입, 탈퇴", title:"AGL에서 예약하는법", state:"노출", writer:"홍길동", date:"24.01.01", check:"1,000",},
                    {number:2, division:"결제,취소", title:"로그인이 안될떄", state:"노출", writer:"홍길동", date:"24.01.01", check:"1,000",},
                    {number:3, division:"로그인, 가입, 탈퇴", title:"결제를 환불하고싶어요", state:"노출", writer:"홍길동", date:"24.01.01", check:"1,000",},
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
                        {title:"질문 구분", field:"division", minWidth:110},
                        {title:"질문 제목", field:"title", minWidth:110},
                        {title:"상태", field:"state", minWidth:130},
                        {title:"작성자", field:"writer", minWidth:130},
                        {title:"작성일", field:"date", minWidth:100},
                        {title:"조회수", field:"check", minWidth:110},
                    ],
                });

                // row 클릭시 detail 페이지로 링크
                table.on("rowClick", function(e, row){
                    location.href='./service_faq_regist.php'
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
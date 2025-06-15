<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php
        $side_depth = 'inquiry';
        $side_2depth = 'inquiry';
        $depth_1 = '문의관리';
        $depth_2 = '문의목록';
        // $depth_3 = '1:1문의 목록'; 
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y mt-8">
                    <h2 class="text-xl font-bold mr-auto">문의 목록</h2>
                </div>

                <!-- 필터 -->
                <div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">문의일</div>
                        <div class="flex flex-wrap items-center gap-1">
                            <div class="relative w-full md:w-64">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> 
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                </div>
                                <input type="text" class="datepicker form-control pl-12">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">진행상태</div>
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
                            <div class="dropdown-menu w-full">
                                <ul class="dropdown-content custom_select multi">
                                    <li class="flex items-center">
                                        <input type="checkbox" class="form-check-input" id="in_inquiry_1_1" name="in_inquiry01">
                                        <label for="in_inquiry_1_1" class="block w-full px-2 py-1">전체</label>
                                    </li>
                                    <li class="flex items-center mt-0.5">
                                        <input type="checkbox" class="form-check-input" id="in_inquiry_1_2" name="in_inquiry01">
                                        <label for="in_inquiry_1_2" class="block w-full px-2 py-1">문의접수</label>
                                    </li>
                                    <li class="flex items-center mt-0.5">
                                        <input type="checkbox" class="form-check-input" id="in_inquiry_1_2" name="in_inquiry01">
                                        <label for="in_inquiry_1_2" class="block w-full px-2 py-1">예약요청</label>
                                    </li>
                                    <li class="flex items-center mt-0.5">
                                        <input type="checkbox" class="form-check-input" id="in_inquiry_1_2" name="in_inquiry01">
                                        <label for="in_inquiry_1_2" class="block w-full px-2 py-1">문의취소</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">회원구분</div>
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
                            <div class="dropdown-menu w-full">
                                <ul class="dropdown-content custom_select multi">
                                    <li class="flex items-center">
                                        <input type="radio" class="form-check-input" id="in_inquiry_2_1" name="in_inquiry02">
                                        <label for="in_inquiry_2_1" class="block w-full px-2 py-1">전체</label>
                                    </li>
                                    <li class="flex items-center mt-0.5">
                                        <input type="radio" class="form-check-input" id="in_inquiry_2_2" name="in_inquiry02">
                                        <label for="in_inquiry_2_2" class="block w-full px-2 py-1">기업</label>
                                    </li>
                                    <li class="flex items-center mt-0.5">
                                        <input type="radio" class="form-check-input" id="in_inquiry_2_3" name="in_inquiry02">
                                        <label for="in_inquiry_2_3" class="block w-full px-2 py-1">단체</label>
                                    </li>
                                    <li class="flex items-center mt-0.5">
                                        <input type="radio" class="form-check-input" id="in_inquiry_2_4" name="in_inquiry02">
                                        <label for="in_inquiry_2_4" class="block w-full px-2 py-1">개인</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">제목, 담당자</div>
                        <input type="text" class="form-control">
                    </div>
                    <button type="button" class="btn btn-primary-soft">검색하기</button>
                </div>

                <div class="intro-y box p-5 mt-5">
                    <!-- 테이블 -->
                    <div class="flex flex-wrap gap-2 items-center justify-between">
                        <div>총 000건</div>
                        <div class="flex items-center gap-3">
                            <div class="dropdown w-40 sm:w-auto">
                                <button type="button" class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
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
                            <!-- <button type="button" class="btn bg-emerald-600 border border-emerald-600 text-white"><img src="./dist/images/heyteetime/excel_icon.svg" class="mr-1">엑셀 다운로드</button> -->
                        </div>
                    </div>

                    <!-- 테이블 -->
                    <div class="overflow-x-auto mt-3">
                        <div id="tabulator" class="table-report table-report--tabulator"></div>
                    </div>
                </div>


            </div>

        </div>

        <!-- JS Assets-->
        <script src="./dist/js/app.js"></script>
        <!-- 테이블 js : tabulator -->
        <script src="./dist/js/tabulator.min.js"></script>
        <!-- JS Assets-->

        <script>
                // 데이터
                var tabledata = [
                    {number:241182, title:"[국내][경기] 3명, 경기도 골프장+프로 필드레슨 추천", company:"업체명", hope_day:"2024.05.01~<br/>2024.05.03", personnel:"20", inquiry_date:"2024.01.01", state:'<div class="!flex items-center gap-3 h-full"><button type="button" class="btn btn-primary-soft btn-sm">골프문의</button></div>'},
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
                        {title:"접수번호", field:"number", minWidth:100},
                        {title:"문의제목", field:"title", minWidth:500},
                        {title:"업체명", field:"company", minWidth:100},
                        {title:"희망일", field:"hope_day", minWidth:100,formatter:"html"},
                        {title:"인원수", field:"personnel", minWidth:100},
                        {title:"문의일", field:"inquiry_date", minWidth:100},
                        {title:"진행상태", field:"state", minWidth:100,formatter:"html"},
                    ],
                });

                // row 클릭시 detail 페이지로 링크
                table.on("rowClick", function(e, row){
                    location.href='./member_inquiry_detail.php'
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
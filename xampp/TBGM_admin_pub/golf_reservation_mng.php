<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'estimate';
        $side_2depth = 'reservation';
        $depth_1 = '견적관리';
        $depth_2 = '예약목록';
        // $depth_3 = '공지목록';
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-xl font-bold mr-auto">예약 목록</h2>
                </div>

                <!-- 필터 -->
                <div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">견적일</div>
                        <div class="relative w-full md:w-64">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> 
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                            </div>
                            <input type="text" class="datepicker form-control pl-12">
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">진행상태</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="2">예약요청</option>
                            <option value="3">추천견적</option>
                            <option value="4">예약요청</option>
                            <option value="5">미진행</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">회원구분</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="2">기업</option>
                            <option value="3">단체</option>
                            <option value="4">개인</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">기업,단체,개인명</div>
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
                    {number:241182, title:"경기도 골프장+프로 필드레슨", date_hope:"<div class='flex items-center justify-center'>2024.05.01~<br/>2024.05.03</div>", personnel:"20", region:"베어크리크(춘천)", amount:"100,000,000", department:"000지점 > 0000부서 > 000팀", manager:"홍길동", date_quote:"2024.01.01", state:'<div class="flex items-center justify-center"><img src="./dist/images/progress05.svg" class="!w-[45px] !shadow-none" alt="예약"></div>' },
                    {number:241182, title:"경기도 골프장+프로 필드레슨", date_hope:"<div class='flex items-center justify-center'>2024.05.01~<br/>2024.05.03</div>", personnel:"20", region:"베어크리크(춘천)", amount:"100,000,000", department:"000지점 > 0000부서 > 000팀", manager:"홍길동", date_quote:"2024.01.01", state:'<div class="flex items-center justify-center"><img src="./dist/images/progress06.svg" class="!w-[45px] !shadow-none" alt="결제"></div>' },
                    {number:241182, title:"경기도 골프장+프로 필드레슨", date_hope:"<div class='flex items-center justify-center'>2024.05.01~<br/>2024.05.03</div>", personnel:"20", region:"베어크리크(춘천)", amount:"100,000,000", department:"000지점 > 0000부서 > 000팀", manager:"홍길동", date_quote:"2024.01.01", state:'<div class="flex items-center justify-center"><img src="./dist/images/progress07.svg" class="!w-[45px] !shadow-none" alt="진행"></div>' },
                    {number:241182, title:"경기도 골프장+프로 필드레슨", date_hope:"<div class='flex items-center justify-center'>2024.05.01~<br/>2024.05.03</div>", personnel:"20", region:"베어크리크(춘천)", amount:"100,000,000", department:"000지점 > 0000부서 > 000팀", manager:"홍길동", date_quote:"2024.01.01", state:'<div class="flex items-center justify-center"><img src="./dist/images/progress08.svg" class="!w-[45px] !shadow-none" alt="종료"></div>' },
                ]

                // 테이블 tabulator 사용
                var table = new Tabulator("#tabulator", {
                    data:tabledata,
                    printAsHtml: true,
                    printStyled: true,
                    pagination: "remote",
                    paginationSize: 10,
                    paginationInitialPage:2,
                    paginationSizeSelector: [20, 50, 100],
                    layout: "fitColumns",
                    responsiveLayout: "collapse",
                    responsiveLayoutCollapseUseFormatters:false,
                    placeholder: "데이터가 없습니다.",

                    columns:[ //define the table columns
                        {title:"접수번호", field:"number", width:100},
                        {title:"견적제목", field:"title", minWidth:200},
                        {title:"희망일", field:"date_hope", width:120, formatter:"html"},
                        {title:"인원수", field:"personnel", width:90},
                        {title:"골프장", field:"region", width:160},
                        {title:"예약금액", field:"amount", width:160},
                        {title:"부서", field:"department", width:220},
                        {title:"담당자", field:"manager", width:80},
                        {title:"견적일", field:"date_quote", width:100},
                        {title:"진행상태", field:"state", width:90,formatter:"html"},
                    ],
                });

                // row 클릭시 detail 페이지로 링크
                table.on("rowClick", function(e, row){
                    location.href='./golf_estimate_detail.php'
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
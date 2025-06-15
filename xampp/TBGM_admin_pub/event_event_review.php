<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'event';
        $side_2depth = 'eventreview';
        $depth_1 = '행사관리';
        $depth_2 = '행사후기';
        // $depth_3 = '공지목록';
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-xl font-bold mr-auto">행사 후기</h2>
                </div>

                <!-- 필터 -->
                <div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">작성일</div>
                        <div class="relative w-full md:w-64">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> 
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                            </div>
                            <input type="text" class="datepicker form-control pl-12">
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">평점</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="2">5</option>
                            <option value="3">4-5</option>
                            <option value="4">3-4</option>
                            <option value="5">2-3</option>
                            <option value="6">1-2</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">회원구분</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="2">신고</option>
                            <option value="3">노출(정상)</option>
                            <option value="4">미노출</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">행사명,작성자명</div>
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
                    {number:"<input type='checkbox' class='form-check-input mr-1' /> 1", title:"[국내][강원] 하나은행 VIP 초청..", date_hope:"<하나은행 VIP 행사 너무 좋았다...", personnel:"4.5 / 5", region:"미노출", amount:"<div class='!flex items-center gap-2'><div class='relative !w-auto'><img src='./dist/images/banner/prod_2.png' class='!w-[44px] object-cover rounded-sm' alt='이미지'><p class='!w-6 !h-6 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white !flex items-center justify-center font-medium'>5</p></div><div class='relative !w-auto'><img src='./dist/images/banner/prod_2.png' class='!w-[44px] object-cover rounded-sm' alt='이미지'><p class='!w-6 !h-6 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white !flex items-center justify-center font-medium'>1</p></div></div>", department:"보험팀", manager:"김비서", date_quote:"2024.01.01"},
                    {number:"<input type='checkbox' class='form-check-input mr-1' /> 2", title:"[국내][강원] 하나은행 VIP 초청..", date_hope:"<하나은행 VIP 행사 너무 좋았다...", personnel:"4.5 / 5", region:"미노출", amount:"<div class='!flex items-center gap-2'><div class='relative !w-auto'><img src='./dist/images/banner/prod_2.png' class='!w-[44px] object-cover rounded-sm' alt='이미지'><p class='!w-6 !h-6 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white !flex items-center justify-center font-medium'>5</p></div><div class='relative !w-auto'><img src='./dist/images/banner/prod_2.png' class='!w-[44px] object-cover rounded-sm' alt='이미지'><p class='!w-6 !h-6 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white !flex items-center justify-center font-medium'>1</p></div></div>", department:"보험팀", manager:"김비서", date_quote:"2024.01.01"},
                    {number:"<input type='checkbox' class='form-check-input mr-1' /> 3", title:"[국내][강원] 하나은행 VIP 초청..", date_hope:"<하나은행 VIP 행사 너무 좋았다...", personnel:"4.5 / 5", region:"미노출", amount:"<div class='!flex items-center gap-2'><div class='relative !w-auto'><img src='./dist/images/banner/prod_2.png' class='!w-[44px] object-cover rounded-sm' alt='이미지'><p class='!w-6 !h-6 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white !flex items-center justify-center font-medium'>5</p></div><div class='relative !w-auto'><img src='./dist/images/banner/prod_2.png' class='!w-[44px] object-cover rounded-sm' alt='이미지'><p class='!w-6 !h-6 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white !flex items-center justify-center font-medium'>1</p></div></div>", department:"보험팀", manager:"김비서", date_quote:"2024.01.01"},
                    {number:"<input type='checkbox' class='form-check-input mr-1' /> 4", title:"[국내][강원] 하나은행 VIP 초청..", date_hope:"<하나은행 VIP 행사 너무 좋았다...", personnel:"4.5 / 5", region:"미노출", amount:"<div class='!flex items-center gap-2'><div class='relative !w-auto'><img src='./dist/images/banner/prod_2.png' class='!w-[44px] object-cover rounded-sm' alt='이미지'><p class='!w-6 !h-6 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white !flex items-center justify-center font-medium'>5</p></div><div class='relative !w-auto'><img src='./dist/images/banner/prod_2.png' class='!w-[44px] object-cover rounded-sm' alt='이미지'><p class='!w-6 !h-6 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white !flex items-center justify-center font-medium'>1</p></div></div>", department:"보험팀", manager:"김비서", date_quote:"2024.01.01"},
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
                    initialSort: [
                        { column: "number", dir: "desc" } // 'number' 필드를 기준으로 역순 정렬
                    ],

                    columns:[ //define the table columns
                        {title:"번호", field:"number", width:80,formatter:"html"},
                        {title:"행사명", field:"title", minWidth:200},
                        {title:"후기", field:"date_hope", minwidth:200},
                        {title:"평점", field:"personnel", width:80},
                        {title:"상태", field:"region", width:80},
                        {title:"사진 / 영상", field:"amount", width:130,formatter:"html"},
                        {title:"부서", field:"department", width:80},
                        {title:"작성자", field:"manager", width:80},
                        {title:"작성일", field:"date_quote", width:100},
                    ],
                });

                // row 클릭시 detail 페이지로 링크
                // table.on("rowClick", function(e, row){
                //     location.href='./golf_estimate_detail.php'
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


    </body>
</html>
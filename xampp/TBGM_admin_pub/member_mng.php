<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'member';
        $side_2depth = 'member';
        $depth_1 = '회원관리';
        $depth_2 = '회원목록';
        // $depth_3 = '회원목록';
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-xl font-bold mr-auto">회원 목록</h2>
                </div>

                <!-- 필터 -->
                <div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">가입일</div>
                        <div class="relative w-full md:w-64">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400"> 
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                            </div>
                            <input type="text" class="datepicker form-control pl-12">
                        </div>
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
                        <div class="mb-1 text-slate-500 font-medium">전체상태</div>
                        <select name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
                            <option value="all" selected>전체</option>
                            <option value="2">가입신청</option>
                            <option value="3">등록완료</option>
                            <option value="4">가입거절</option>
                        </select>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">회원명, 담당자명, 계정</div>
                        <input type="text" class="form-control">
                    </div>
                    <button type="button" class="btn btn-primary-soft">검색하기</button>
                </div>

                <div class="intro-y box p-5 mt-5">
                    <!-- 테이블 -->
                    <div class="flex flex-wrap gap-2 items-center justify-between">
                        <div>총 000명</div>
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
        
        <?php include_once('_footer.php'); ?>

        <script>
                // 데이터
                var tabledata = [
                    {number:1, category:"구분", logo:'<div class="flex items-center justify-center"><img src="./dist/images/customer_logo.jpg" style="width:100%" alt="고객사로고"></div>', name:"신한금융", branch:"000지점", hompage:'<a href="javascript:;" target="_blank" class="text-primary">[바로가기]</a>', bnumber:"111-22-33333", account:"shihan01", manager:"<div class='flex items-center justify-center'>홍길동<br/>010-1111-2222</div>", joindate:"2024.01.01", pstatus:'<button type="button" class="btn btn-warning btn-sm">가입신청</button>'},
                    {number:2, category:"구분", logo:'<div class="flex items-center justify-center"><img src="./dist/images/customer_logo.jpg" style="width:100%" alt="고객사로고"></div>', name:"신한금융", branch:"000지점", hompage:'미등록', bnumber:"111-22-33333", account:"shihan01", manager:"<div class='flex items-center justify-center'>홍길동<br/>010-1111-2222</div>", joindate:"2024.01.01", pstatus:'<button type="button" class="btn btn-success btn-sm">등록완료</button>'},
                    {number:3, category:"구분", logo:'<div class="flex items-center justify-center"><img src="./dist/images/customer_logo.jpg" style="width:100%" alt="고객사로고"></div>', name:"신한금융", branch:"000지점", hompage:'<a href="javascript:;" target="_blank" class="text-primary">[바로가기]</a>', bnumber:"111-22-33333", account:"shihan01", manager:"<div class='flex items-center justify-center'>홍길동<br/>010-1111-2222</div>", joindate:"2024.01.01", pstatus:'<button type="button" class="btn btn-secondary btn-sm">가입거절</button>'},
                ]

                // 테이블 tabulator 사용
                var table = new Tabulator("#tabulator", {
                    data:tabledata,
                    printAsHtml: true,
                    printStyled: true,
                    pagination: "remote",
                    paginationSize: 10,
                    // paginationInitialPage:2,
                    paginationSizeSelector: [20, 50, 100],
                    layout: "fitColumns",
                    responsiveLayout: "collapse",
                    responsiveLayoutCollapseUseFormatters:false,
                    placeholder: "데이터가 없습니다.",

                    columns:[ //define the table columns
                        {title:"번호", field:"number", width:80},
                        {title:"구분", field:"category", width:80},
                        {title:"로고", field:"logo", minWidth:150,formatter:"html"},
                        {title:"회원명", field:"name", minWidth:100},
                        {title:"지점명", field:"branch", minWidth:100},
                        {title:"홈페이지", field:"hompage", minWidth:100,formatter:"html"},
                        {title:"사업자번호", field:"bnumber", minWidth:150},
                        {title:"계정", field:"account", minWidth:100},
                        {title:"담당자", field:"manager", minWidth:140,formatter:"html"},
                        {title:"가입일", field:"joindate", minWidth:100},
                        {title:"진행상태", field:"pstatus", minWidth:100,formatter:"html"},
                    ],
                });

                // row 클릭시 detail 페이지로 링크
                // table.on("rowClick", function(e, row){
                //     location.href='./member_detail.php'
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
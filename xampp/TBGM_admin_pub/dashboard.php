<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php 
            $side_depth = 'dashboard';
            $depth_1 = '대시보드';
            $depth_2 = '대시보드';
            // $depth_3 = '';
            include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: 2024년 현황 -->
                            <div class="col-span-12 mt-8">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-bold truncate mr-5">
                                        2024년 현황
                                    </h2>
                                </div>
                                <div class="grid grid-cols-12 gap-6 mt-5">
                                    <div class="col-span-12 xl:col-span-4 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5 flex items-center gap-4">
                                                <div class="flex items-center justify-center w-16 h-16 bg-warning bg-opacity-20 rounded-full shrink-0">
                                                    <i data-lucide="badge-dollar-sign" class="report-box__icon text-warning"></i> 
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">총계</div>
                                                        <div class="text-lg font-bold leading-8">1,000,000,000원</div>
                                                    </div>
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">상품</div>
                                                        <div class="text-lg font-bold leading-8">1,000,000,000원</div>
                                                    </div>
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">견적</div>
                                                        <div class="text-lg font-bold leading-8">1,000,000,000원</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-4 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5 flex items-center gap-4">
                                                <div class="flex items-center justify-center w-16 h-16 bg-danger bg-opacity-20 rounded-full shrink-0">
                                                    <i data-lucide="user" class="report-box__icon text-danger"></i> 
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">인원</div>
                                                        <div class="text-lg font-bold leading-8">1,000,000명</div>
                                                    </div>
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">견적</div>
                                                        <div class="text-lg font-bold leading-8">1,000건</div>
                                                    </div>
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">예약</div>
                                                        <div class="text-lg font-bold leading-8">1,000 / 1,000건</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-4 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5 flex items-center gap-4">
                                                <div class="flex items-center justify-center w-16 h-16 bg-blue-600 bg-opacity-20 rounded-full">
                                                    <i data-lucide="repeat" class="report-box__icon text-blue-600"></i> 
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">객단가</div>
                                                        <div class="text-lg font-bold leading-8">1,000,000원/명</div>
                                                    </div>
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">이용률</div>
                                                        <div class="text-lg font-bold leading-8">20% (예약/문의)</div>
                                                    </div>
                                                    <div class="flex items-center flex-wrap ">
                                                        <div class="text-base text-slate-500 shrink-0 w-[60px]">이용비</div>
                                                        <div class="text-lg font-bold leading-8">45% (골프장) 55% (여행)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: 2024년 현황 -->

                            <!-- BEGIN: 매출 현황 -->
                            <div class="col-span-12 md:col-span-7 mt-6">
                                <div class="intro-y flex items-center justify-between h-10">
                                    <h2 class="text-lg font-bold truncate mr-5">매출 현황</h2>
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-1">
                                            <span class="w-4 h-6 rounded-full bg-[#0f766e]"></span>
                                            <span>견적</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="w-4 h-6 rounded-full bg-[#fbd13d]"></span>
                                            <span>상품</span>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="nav nav-boxed-tabs bg-slate-200 rounded-full" role="tablist">
                                            <li id="sales-1-tab" class="nav-item flex-1" role="presentation">
                                                <button class="nav-link w-full py-2 !rounded-full active" data-tw-toggle="pill" data-tw-target="#sales-tab-1" type="button" role="tab" aria-controls="sales-tab-1" aria-selected="true">월간</button>
                                            </li>
                                            <li id="sales-2-tab" class="nav-item flex-1" role="presentation">
                                                <button class="nav-link w-full py-2 !rounded-full" data-tw-toggle="pill" data-tw-target="#sales-tab-2" type="button" role="tab" aria-controls="sales-tab-2" aria-selected="false">주간</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="intro-y box p-5 mt-3">
                                    <div class="tab-content">
                                        <div id="sales-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="sales-1-tab">
                                            <div class="report-chart">
                                                <div class="h-[275px]">
                                                    <canvas id="sales_chart_01" class="mt-6 -mb-6"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="sales-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="sales-2-tab">
                                            <div class="report-chart">
                                                <div class="h-[275px]">
                                                    <canvas id="sales_chart_02" class="mt-6 -mb-6"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: 매출 현황 -->


                            <!-- BEGIN: 매출 분포 -->
                            <div class="col-span-12 md:col-span-5 mt-6">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-bold truncate mr-5">매출 분포</h2>
                                </div>
                                <div class="intro-y box p-5 mt-3">
                                    <div class="">
                                        <div class="h-[300px]">
                                            <canvas id="region_chart_01"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: 매출 분포 -->

                            <!-- BEGIN: 고객별 현황 -->
                            <div class="col-span-12 md:col-span-7 mt-6">
                                <div class="intro-y flex items-center justify-between h-10">
                                    <h2 class="text-lg font-bold truncate mr-5">고객별 현황</h2>
                                </div>
                                <div class="intro-y box p-5 mt-3 overflow-x-scroll">
                                    <table class="table h-[300px]">
                                        <thead>
                                            <tr class="text-center whitespace-nowrap">
                                                <th >No</th>
                                                <th>채널명</th>
                                                <th>문의(건)</th>
                                                <th>예약(건)</th>
                                                <th>여행(건)</th>
                                                <th>매출(만)</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center whitespace-nowrap">
                                            <tr>
                                                <td>1</td>
                                                <td>신한SOL</td>
                                                <td>5,520</td>
                                                <td>5,520</td>
                                                <td>5,520</td>
                                                <td>5,520</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>아시아나</td>
                                                <td>3,480</td>
                                                <td>3,480</td>
                                                <td>3,480</td>
                                                <td>3,480</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>제주항공</td>
                                                <td>3,350</td>
                                                <td>3,350</td>
                                                <td>3,350</td>
                                                <td>3,350</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>이지웰</td>
                                                <td>2,940</td>
                                                <td>2,940</td>
                                                <td>2,940</td>
                                                <td>2,940</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>UOB</td>
                                                <td>2,670</td>
                                                <td>2,670</td>
                                                <td>2,670</td>
                                                <td>2,670</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END: 고객별 현황 -->

                              <!-- BEGIN: 지역별 분포 -->
                              <div class="col-span-12 md:col-span-5 mt-6">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-bold truncate mr-5">지역별 분포</h2>
                                </div>
                                <div class="intro-y box p-5 mt-3">
                                    <div class="">
                                        <div class="h-[300px]">
                                            <canvas id="inflow_chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: 지역별 분포 -->
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <?php include_once('_footer.php'); ?>

        <!-- 차트 js 추가 -->
        <script src="./dist/js/chart.js"></script>
        <script src="./dist/js/datalabels.js"></script>

        <script>

            (function () {
                // 대시보드 차트 

                // 매출현황 - 월간
                if ($("#sales_chart_01").length) {
                    let ctx = $("#sales_chart_01")[0].getContext("2d");
                    let myChart = new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: [
                                "토요일",
                                "일요일",
                                "월요일",
                                "화요일",
                                "수요일",
                                "목요일",
                                "금요일",
                            ],
                            datasets: [
                                {
                                    label: "label_1",
                                    barPercentage: 0.5,
                                    barThickness: 12,
                                    minBarLength: 15,
                                    data: [480, 350, 320, 480, 320, 390, 390],
                                    backgroundColor: '#0f766e',
                                    borderRadius:50
                                },
                                {
                                    label: "label_2",
                                    barPercentage: 0.5,
                                    barThickness: 12,
                                    minBarLength: 15,
                                    data: [240, 130, 260, 380, 250, 250, 340],
                                    backgroundColor: '#fbd13d',
                                    borderRadius:50
                                },
                            ],
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display:false,
                                },
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        font: {
                                            size: 12,
                                        },
                                        color: '#718EBF',
                                    },
                                    grid: {
                                        display: false,
                                        drawBorder: false,
                                    },
                                },
                                y: {
                                    ticks: {
                                        font: {
                                            size: "12",
                                        },
                                        color: '#718EBF',
                                        // callback: function (value, index, values) {
                                        //     return "$" + value;
                                        // },
                                    },
                                    grid: {
                                        color: '#f3f3f5',
                                        borderDash: [2, 2],
                                        drawBorder: false,
                                    },
                                },
                            },
                        },
                    });
                }

                // 매출현황 - 주간
                if ($("#sales_chart_02").length) {
                    let ctx = $("#sales_chart_02")[0].getContext("2d");
                    let myChart = new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: [
                                "1week",
                                "2week",
                                "3week",
                                "4week",
                            ],
                            datasets: [
                                {
                                    label: "label_1",
                                    barPercentage: 0.5,
                                    barThickness: 12,
                                    minBarLength: 15,
                                    data: [480, 350, 320, 240],
                                    backgroundColor: '#0f766e',
                                    borderRadius:50
                                },
                                {
                                    label: "label_2",
                                    barPercentage: 0.5,
                                    barThickness: 12,
                                    minBarLength: 15,
                                    data: [240, 130, 250, 340],
                                    backgroundColor: '#fbd13d',
                                    borderRadius:50
                                },
                            ],
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display:false,
                                },
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        font: {
                                            size: 12,
                                        },
                                        color: '#718EBF',
                                    },
                                    grid: {
                                        display: false,
                                        drawBorder: false,
                                    },
                                },
                                y: {
                                    ticks: {
                                        font: {
                                            size: "12",
                                        },
                                        color: '#718EBF',
                                        // callback: function (value, index, values) {
                                        //     return "$" + value;
                                        // },
                                    },
                                    grid: {
                                        color: '#f3f3f5',
                                        borderDash: [2, 2],
                                        drawBorder: false,
                                    },
                                },
                            },
                        },
                    });
                }

                // 매출 분포 차트
                if ($("#region_chart_01").length) {
                    let ctx = $("#region_chart_01")[0].getContext("2d");
                    let myPieChart = new Chart(ctx, {
                        plugins: [ChartDataLabels],
                        type: "pie",
                        data: {
                            labels:['골프장','골프여행','견적'],
                            datasets: [
                                {
                                    data: [25, 25, 50],
                                    backgroundColor: ['#3E54CA','#0f766e','#3D3F44'],
                                    borderWidth: 5,
                                    borderColor: '#ffffff',
                                },
                            ],
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
                                },
                                tooltip:{
                                    enabled: false,
                                },
                                datalabels: { // datalables 플러그인 세팅
                                    formatter: function (value, context) {
                                        var idx = context.dataIndex; // 각 데이터 인덱스
                                        // 출력 텍스트
                                        return context.chart.data.labels[idx] + '\n' + value + '%';
                                    },
                                    align: 'center', // 도넛 차트에서 툴팁이 잘리는 경우 사용
                                    font: { // font 설정
                                        weight: 'bold',
                                        size: '16px',
                                    },
                                    textAlign: 'center',
                                    color: '#fff',
                                },
                            },
                            
                        },
                    });
                }

                // 지역별분포 차트
                if ($("#inflow_chart").length) {
                    let ctx = $("#inflow_chart")[0].getContext("2d");
                    let myChart = new Chart(ctx, {
                        plugins: [ChartDataLabels],
                        type: "pie",
                        data: {
                            labels: [
                                "동남아시아",
                                "유럽",
                                "일본",
                                "남태평양",
                            ],
                            datasets: [
                                {
                                    data: [30, 15, 35, 20],
                                    backgroundColor: ['#1B203B','#16C89D','#EF2DE7','#2D57EF'],
                                    borderWidth: 5,
                                    borderColor: '#ffffff',
                                },
                            ],
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
                                },
                                tooltip:{
                                    enabled: false,
                                },
                                datalabels: { // datalables 플러그인 세팅
                                    formatter: function (value, context) {
                                        var idx = context.dataIndex; // 각 데이터 인덱스
                                        // 출력 텍스트
                                        return context.chart.data.labels[idx] + '\n' + value + '%';
                                    },
                                    align: 'center', // 도넛 차트에서 툴팁이 잘리는 경우 사용
                                    font: { // font 설정
                                        weight: 'bold',
                                        size: '16px',
                                    },
                                    textAlign: 'center',
                                    color: '#fff',
                                },
                            },
                        },
                    });
                }
            })();
        </script>
        
    </body>
</html>
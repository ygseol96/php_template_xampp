<?php /* Template_ 2.2.8 2024/05/13 09:44:02 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\dashboard.tpl 000021207 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

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
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5 flex items-center gap-4">
                                <div class="flex items-center justify-center w-16 h-16 bg-warning bg-opacity-20 rounded-full">
                                    <i data-lucide="badge-dollar-sign" class="report-box__icon text-warning"></i>
                                </div>
                                <div>
                                    <div class="text-base text-slate-500 ">매출 (백만)</div>
                                    <div class="mt-1 text-3xl font-medium leading-8">100,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5 flex items-center gap-4">
                                <div class="flex items-center justify-center w-16 h-16 bg-danger bg-opacity-20 rounded-full">
                                    <i data-lucide="user" class="report-box__icon text-danger"></i>
                                </div>
                                <div>
                                    <div class="text-base text-slate-500 ">가입회원 (명)</div>
                                    <div class="mt-1 text-3xl font-medium leading-8">345,678</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5 flex items-center gap-4">
                                <div class="flex items-center justify-center w-16 h-16 bg-success bg-opacity-20 rounded-full">
                                    <i data-lucide="bar-chart" class="report-box__icon text-success"></i>
                                </div>
                                <div>
                                    <div class="text-base text-slate-500 ">방문자 (천명)</div>
                                    <div class="mt-1 text-3xl font-medium leading-8">7,920</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5 flex items-center gap-4">
                                <div class="flex items-center justify-center w-16 h-16 bg-blue-600 bg-opacity-20 rounded-full">
                                    <i data-lucide="repeat" class="report-box__icon text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="text-base text-slate-500 ">구매전환 (율)</div>
                                    <div class="mt-1 text-3xl font-medium leading-8">2.5% <b class="text-xl text-blue-600">(+0.3)</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: 2024년 현황 -->

            <!-- BEGIN: 매출 현황 -->
            <div class="col-span-12 sm:col-span-7 mt-6">
                <div class="intro-y flex items-center justify-between h-10">
                    <h2 class="text-lg font-bold truncate mr-5">매출 현황</h2>
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
                    <div class="relative font-medium text-slate-500">
                        <a href="javascript:;">See All</a>
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


            <!-- BEGIN: 지역별 분포 -->
            <div class="col-span-12 sm:col-span-5 mt-6">
                <div class="intro-y flex items-center justify-between h-10">
                    <h2 class="text-lg font-bold truncate mr-5">지역별 분포</h2>
                    <a href="" class="font-medium text-slate-500">See All</a>
                </div>
                <div class="intro-y box p-5 mt-3">
                    <div class="">
                        <div class="h-[300px]">
                            <canvas id="region_chart_01"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: 지역별 분포 -->

            <!-- BEGIN: 유입현황 -->
            <div class="col-span-12 md:col-span-7 sm:col-span-6 mt-6">
                <div class="intro-y flex items-center justify-between h-10">
                    <h2 class="text-lg font-bold truncate mr-5">유입현황</h2>
                    <div class="relative font-medium text-slate-500">
                        <a href="javascript:;">See All</a>
                    </div>
                </div>
                <div class="intro-y box p-5 mt-3">
                    <div class="report-chart">
                        <div class="h-[275px]">
                            <canvas id="inflow_chart" class="mt-6 -mb-6"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: 유입현황 -->


            <!-- BEGIN: 채널별 현황 -->
            <div class="col-span-12 md:col-span-5 sm:col-span-6 mt-6">
                <div class="intro-y flex items-center justify-between h-10">
                    <h2 class="text-lg font-bold truncate mr-5">채널별 현황</h2>
                    <a href="" class="font-medium text-slate-500">See All</a>
                </div>
                <div class="intro-y box p-5 mt-3">
                    <table class="table">
                        <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>채널명</th>
                            <th>매출(만)</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>신한SOL</td>
                            <td>5,520</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>아시아나</td>
                            <td>3,480</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>제주항공</td>
                            <td>3,350</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>이지웰</td>
                            <td>2,940</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>UOB</td>
                            <td>2,670</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END: 채널별 현황 -->

        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

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

        // 지역별 분포 차트
        if ($("#region_chart_01").length) {
            let ctx = $("#region_chart_01")[0].getContext("2d");
            let myPieChart = new Chart(ctx, {
                plugins: [ChartDataLabels],
                type: "pie",
                data: {
                    labels:['동남아시아','유럽','일본','남태평양'],
                    datasets: [
                        {
                            data: [25, 30, 15, 30],
                            backgroundColor: ['#0f766e','#84cc16','#f97316','#2563eb'],
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

        // 유입현황 차트
        if ($("#inflow_chart").length) {
            let ctx = $("#inflow_chart")[0].getContext("2d");
            let myChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: [
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                        "Jan",
                    ],
                    datasets: [
                        {
                            label: "Html Template",
                            data: [
                                0, 200, 250, 200, 500, 450, 850, 1050, 950, 1100,
                                900, 1200,
                            ],
                            borderWidth: 2,
                            borderColor: '#12766e',
                            backgroundColor: "#0f766e59",
                            pointBorderColor: "transparent",
                            fill: true,
                            tension: 0.4,
                        }
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display:false,
                        },
                        tooltip:{
                            enabled: true,
                            position:'nearest',
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        x: {
                            ticks: {
                                font: {
                                    size: "12",
                                },
                                color: '#718EBF',
                            },
                            grid: {
                                color: '#f3f3f5',
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
                                drawBorder: false,
                            },
                        },
                    },
                },
            });
        }
    })();
</script>
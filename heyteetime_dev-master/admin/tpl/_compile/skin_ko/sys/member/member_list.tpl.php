<?php /* Template_ 2.2.8 2024/05/20 17:34:47 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\member\member_list.tpl 000016986 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

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
            <input type="text" class="datepicker form-control pl-12" id="filter_reg_date">
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">회원상태</div>
        <div class="dropdown" id="filter_status">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" class="form-check-input" id="member_check_1_1" value="all" checked>
                        <label for="member_check_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_2" value="1" checked>
                        <label for="member_check_1_2" class="block w-full px-2 py-1">정상</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_1_3" value="0" checked>
                        <label for="member_check_1_3" class="block w-full px-2 py-1">탈퇴</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">회원구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-24 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">회원등급</div>
        <div class="dropdown" id="filter_level">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">가입구분</div>
        <div class="dropdown" id="filter_channel">
            <button class="dropdown-toggle form-select w-52 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_4_1" checked>
                        <label for="member_check_4_1" class="block w-full px-2 py-1">전체</label>
                    </li>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['channel'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="member_check_4_<?php echo $TPL_V1["CLIENT_CODE"]?>" checked value="<?php echo $TPL_V1["CLIENT_CODE"]?>">
                            <label for="member_check_4_<?php echo $TPL_V1["CLIENT_CODE"]?>" class="block w-full px-2 py-1"><?php echo $TPL_V1["CLIENT_NAME"]?></label>
                        </li>
<?php }}?>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">성별</div>
        <div class="dropdown" id="filter_sex">
            <button class="dropdown-toggle form-select w-24 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_5_1" name="member_check_5" value="all" checked>
                        <label for="member_check_5_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_2" name="member_check_5" value="none">
                        <label for="member_check_5_2" class="block w-full px-2 py-1">미입력</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_3" name="member_check_5" value="M">
                        <label for="member_check_5_3" class="block w-full px-2 py-1">남성</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_5_4" name="member_check_5" value="W">
                        <label for="member_check_5_4" class="block w-full px-2 py-1">여성</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">국적</div>
        <div class="dropdown" id="filter_nationality_type">
            <button class="dropdown-toggle form-select w-24 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="member_check_6_1" checked>
                        <label for="member_check_6_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_6_2" checked>
                        <label for="member_check_6_2" class="block w-full px-2 py-1">미입력</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_6_3" checked>
                        <label for="member_check_6_3" class="block w-full px-2 py-1">미국</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_6_4" checked>
                        <label for="member_check_6_4" class="block w-full px-2 py-1">한국</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_6_5" checked>
                        <label for="member_check_6_5" class="block w-full px-2 py-1">중국</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="member_check_6_6" checked>
                        <label for="member_check_6_6" class="block w-full px-2 py-1">일본</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">회원명, 이메일, 전화번호</div>
        <input type="text" class="form-control" id="filter_text">
    </div>
    <button class="btn btn-primary-soft" onclick="setTimeout(() => {getMemberList()}, 250);">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 <span id="memberTotal">0</span>명</div>
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
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    /****** 필터링 ******/
    /* 가입일 */
    const picker = new Litepicker({
        element: document.querySelector('.datepicker'),
        singleMode: false,
        firstDay: 0,
        format: 'YYYY.MM.DD',
        lang: "ko-KR",
        numberOfColumns: 2,
        numberOfMonths: 2,
        delimiter: " ~ ",
        tooltipText: {
            other: "일"
        },
        dropdowns: {
            minYear: 1990,
            maxYear: null,
            months: true,
            years: true
        },
        startDate : new Date(new Date().setDate(new Date().getDate() - 7)),
        endDate : new Date(),
        maxDate : new Date(),
        onSelect: function(start, end) {
            console.log(start, end); // 날짜 선택 시 호출될 콜백
        }
    })

    /* checkbox */
    $('.dropdown .multi').each(function () {
        const $checkbox = $(this).find('input:checkbox');

        // 전체항목 클릭 시, 하위 항목 모두 적용
        $(this).find('input:checkbox').eq(0).on('click', function () {
            if($(this).prop('checked')) {
                $checkbox.prop('checked', true);
            } else {
                $checkbox.prop('checked', false);
            }
        });

        // 전체 이외 항목
        $(this).find('input:checkbox').not(':first').on('click', function () {
            if($(this).closest('ul').find('input:checkbox').eq(0).prop('checked')) {
                $(this).closest('ul').find('input:checkbox').eq(0).prop('checked', false);
            } else if($checkbox.length-1  ===  $checkbox.not(':first').filter(':checked').length) {
                $checkbox.prop('checked', true);
            }
        })
    });

    // 테이블 tabulator 사용
    const table = new Tabulator("#tabulator", {
        pagination: true,
        paginationMode: "remote",
        ajaxURL : "/sys/member/ajax_service.php",
        ajaxParams: function() {
            let data = getParameterData();
            data.type = 'memberList';
            return data;
        },
        ajaxResponse : function (url, params, response) {
            console.log(response);
            $("#memberTotal").text(response.total);
            return response;
        },
        printAsHtml: true,
        printStyled: true,
        paginationSize: 20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",
        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:100, headerSort:false},
            {title:"가입구분", field:"channel_name", minWidth:130, headerSort:false},
            {title:"회원명", field:"name_kr", minWidth:150, headerSort:false},
            {title:"이메일", field:"account", minWidth:150, headerSort:false},
            {title:"전화번호", field:"hp_number", minWidth:150, headerSort:false},
            {title:"성별", field:"sex", minWidth:100, headerSort:false},
            {title:"국적", field:"nationality_type", minWidth:100, headerSort:false},
            {title:"회원상태", field:"status", minWidth:100, headerSort:false},
            {title:"가입일", field:"reg_date", minWidth:100, headerSort:false},
        ],
        rowFormatter: function(row) {
            row.getCell("number").setValue(((table.getPage()-1) * table.getPageSize()) + row.getPosition(true));
        }
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./member_detail.php'
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

    function getParameterData() {

        //가입일
        let reg_date = JSON.stringify($("#filter_reg_date").val().split(' ~ ').map(date => date.replace(/\./g, '-')));

        //회원상태
        let status = [];
        if(!$("#filter_status input:checkbox:first").prop("checked")) {
            $("#filter_status input:checkbox:not(:first):checked").each(function () {
                status.push(parseInt($(this).val()));
            });
            status = JSON.stringify(status);
        }

        //회원구분 -> 2차개발

        //회원등급 -> 2차개발

        //가입구분
        let channel = [];
        if(!$("#filter_channel input:checkbox:first").prop("checked")) {
            $("#filter_channel input:checkbox:not(:first):checked").each(function () {
                channel.push($(this).val());
            });
            channel = JSON.stringify(channel);
        }

        //성별
        let sex = $("#filter_sex input:radio:checked").val();

        //국적
        let nationality_type = [];
        if(!$("#filter_nationality_type input:checkbox:first").prop("checked")){
            $("#filter_nationality_type input:checkbox:not(:first):checked").each(function () {
                nationality_type.push($(this).val());
            });
            nationality_type = JSON.stringify(nationality_type);
        }

        //회원명, 이메일, 전화번호
        let text = $("#filter_text").val();

        return {
            reg_date,
            status,
            channel,
            sex,
            nationality_type,
            text,
        };
    }

    function getMemberList() {
        table.setData("/sys/member/ajax_service", getParameterData());
    }

</script>
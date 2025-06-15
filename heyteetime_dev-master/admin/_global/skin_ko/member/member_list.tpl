{#head}
{#header}
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
        <select id="filter_status" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
            <option value="1">정상</option>
            <option value="2">탈퇴</option>
{*            <option value="">접속제한</option>*}
        </select>
    </div>
    {*<div>
        <div class="mb-1 text-slate-500 font-medium">회원구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-24 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_2_1" name="member_check_2">
                        <label for="member_check_2_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_2_2" name="member_check_2">
                        <label for="member_check_2_2" class="block w-full px-2 py-1">일반</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_2_3" name="member_check_2">
                        <label for="member_check_2_3" class="block w-full px-2 py-1">멤버쉽</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>*}
    {*<div>
        <div class="mb-1 text-slate-500 font-medium">회원등급</div>
        <div class="dropdown" id="filter_level">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="member_check_3_1" name="member_check_3" value="all" checked>
                        <label for="member_check_3_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_3_2" name="member_check_3">
                        <label for="member_check_3_2" class="block w-full px-2 py-1">등급1</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_3_3" name="member_check_3">
                        <label for="member_check_3_3" class="block w-full px-2 py-1">등급2</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="member_check_3_4" name="member_check_3">
                        <label for="member_check_3_4" class="block w-full px-2 py-1">등급3</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>*}
    <div>
        <div class="mb-1 text-slate-500 font-medium">가입구분</div>
        <select id="filter_channel" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
            {@ INC['social']}
                <option value="{.key_}">{.value_}</option>
            {/}
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">성별</div>
        <select id="filter_sex" name="state[]" multiple autocomplete="off" class="tom-select min-w-36">
            <option value="all" selected>전체</option>
            <option value="none">미입력</option>
            <option value="M">남</option>
            <option value="F">여</option>
        </select>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">국적</div>
        <select id="filter_nationality_type" name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
            <option value="all" selected>전체</option>
            {@ data['nationality']}
                <option value="{data['nationality'][.index_]['nat_seq']}">{data['nationality'][.index_]['nat_nm_kr']}</option>
            {/}
        </select>
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
                <button id="tabulator-export-xlsx" class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export {*<i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>*} </button>
                {*<div class="dropdown-menu w-40">
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
                </div>*}
            </div>
            <!-- <button class="btn bg-emerald-600 border border-emerald-600 text-white"><img src="./dist/images/heyteetime/excel_icon.svg" class="mr-1">엑셀 다운로드</button> -->
        </div>
    </div>

    <!-- 테이블 -->
    <div class="overflow-x-auto mt-3">
        <div id="tabulator" class="table-report table-report--tabulator"></div>
    </div>
</div>
{#bottom}
<script>

    // 멀티셀렉박스
    let filter_status = new TomSelect('#filter_status', options);
    let filter_channel = new TomSelect('#filter_channel', options);
    let filter_sex = new TomSelect('#filter_sex', options);
    let filter_nationality_type = new TomSelect('#filter_nationality_type', options);

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
        ajaxURL : "/member/ajax_member.php",
        ajaxParams: function() {
            return {
                type: 'getMemberList',
                ...getParameterData()
            };
        },
        ajaxResponse : function (url, params, response) {
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
            {title:"가입구분", field:"social_name", minWidth:130, headerSort:false},
            {* {title:"회원구분", field:"member", minWidth:130, headerSort:false},*}
            {title:"회원명", field:"name_kr", minWidth:150, headerSort:false},
            {title:"이메일", field:"account", minWidth:150, headerSort:false},
            {title:"전화번호", field:"phone_number", minWidth:150, headerSort:false},
            {title:"성별", field:"sex", minWidth:100, headerSort:false},
            {title:"국적", field:"nat_nm_kr", minWidth:100, headerSort:false},
            {* {title:"회원등급", field:"level", minWidth:100, headerSort:false},*}
            {title:"회원상태", field:"status", minWidth:100, headerSort:false},
            {title:"가입일", field:"reg_date", minWidth:100, headerSort:false},
        ],
        rowFormatter: function(row) {
            row.getCell("number").setValue(((table.getPage()-1) * table.getPageSize()) + row.getPosition(true));
        }
    });

     // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        // 행 데이터 가져오기
        let rowData = row.getData();
        // 필요한 데이터 추출
        let memberId = rowData.idx;

        // detail 페이지로 이동
        location.href = './member_detail.php?id=' + memberId;
    });

    // Export
    $("#tabulator-export-xlsx").on("click", function (event) {
        let fileName = '회원목록_' + getFormattedDate_yymmdd();

        let data = {
            type: 'getExcelForMemberList',
            fileName : fileName,
            ...getParameterData()
        };

        $.ajax({
            url: '/member/ajax_member.php',
            method: 'GET',
            xhrFields: {
                responseType: 'blob'
            },
            data: data,
            success: function(data) {
                var blob = new Blob([data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = fileName +'.xlsx';
                link.click();
            },
            error : function (e) {
                console.log(e);
            }
        });
    });

    function getParameterData() {

        //가입일
        let reg_date = JSON.stringify($("#filter_reg_date").val().split(' ~ ').map(date => date.replace(/\./g, '-')));

        //회원상태
        let status = filter_status.getValue().includes('all') ? '' : JSON.stringify(filter_status.getValue());

        //회원구분 -> 2차개발

        //회원등급 -> 2차개발

        //가입구분
        let social = filter_channel.getValue().includes('all') ? '' : JSON.stringify(filter_channel.getValue());

        //성별
        let sex = filter_sex.getValue().includes('all') ? '' : JSON.stringify(filter_sex.getValue());

        //국적
        let nationality_type = filter_nationality_type.getValue().includes('all') ? '' : JSON.stringify(filter_nationality_type.getValue());

        //회원명, 이메일, 전화번호
        let text = $("#filter_text").val();

        return {
            reg_date,
            status,
            social,
            sex,
            nationality_type,
            text,
        };
    }

    function getMemberList() {
        table.setData("/member/ajax_member.php");
    }

</script>

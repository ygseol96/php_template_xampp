{#head}
{#header}
<div class="intro-y flex items-center mt-8">
    <h2 class="text-xl font-bold mr-auto">FAQ 목록</h2>
    <a href="./service_faq_regist.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>FAQ 추가</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">FAQ구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-36 text-left" aria-expanded="false" data-tw-toggle="dropdown" id="kind_gubun">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select multi">

                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" class="form-check-input" id="faq_category_1_all" value="" name="faq_category" onchange="gubun('전체','kind_gubun')">
                        <label for="faq_category_1_all" class="block w-full px-2 py-1">전체</label>
                    </li>
                    {@ data['KindList']}
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="faq_category_1_{.index_}" value="{.bbs_faq_option_key_idx}" name="faq_category" onchange="gubun('{.name}','kind_gubun')">
                            <label for="faq_category_1_{.index_}" class="block w-full px-2 py-1" data-name="{.name}">{.name}</label>
                        </li>
                    {/}
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">등록일</div>
        <div class="relative w-full md:w-64">
            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                <i data-lucide="calendar" class="w-4 h-4"></i>
            </div>
            <input type="text" class="datepicker form-control pl-12" id="filter_usedate">
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">FAQ언어</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-32 text-left" aria-expanded="false" data-tw-toggle="dropdown" id="lang_gubun">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="faq_language_1_all" name="faq_language" value="" onchange="gubun('전체','lang_gubun')">
                        <label for="faq_language_1_all" class="block w-full px-2 py-1">전체</label>
                    </li>
                    {@ data['data']['lang_kind'] }
                         <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="faq_language_1_{.index_}" name="faq_language" value="{.idx}" onchange="gubun('{.display_name}({.code})','lang_gubun')">
                            <label for="faq_language_1_{.index_}" class="block w-full px-2 py-1">{.display_name}({.code})</label>
                        </li>
                    {/}

                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">노출여부</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown" id="exposure_gubun">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="faq_exposure_1_1" value="" name="faq_exposure" onchange="gubun('전체','exposure_gubun')">
                        <label for="faq_exposure_1_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="faq_exposure_1_2" value="1" name="faq_exposure" onchange="gubun('노출','exposure_gubun')">
                        <label for="faq_exposure_1_2" class="block w-full px-2 py-1">노출</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="faq_exposure_1_3" value="0" name="faq_exposure" onchange="gubun('미노출','exposure_gubun')">
                        <label for="faq_exposure_1_3" class="block w-full px-2 py-1">미노출</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">제목</div>
        <input type="text" class="form-control" name="serach_subject" id="serach_subject">
    </div>
    <button class="btn btn-primary-soft" onclick="setTimeout(() => {getList()}, 250);">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 <span id="total">0</span>건</div>
        <div class="flex flex-wrap items-center gap-2">
            <!--<button class="btn btn-danger w-20">선택삭제</button>-->
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
{#bottom}
<script>
    /****** 필터링 ******/
    /* 등록일 */
    const picker = new Litepicker({
        element: document.querySelector('#filter_usedate'),
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

    // 데이터
    /*
    var tabledata = [
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 1",division:"로그인, 가입, 탈퇴", title:"공지 제목 공지 제목 공지 제목", exposure:"상위", state:"노출", writer:"홍길동", date_created:"24.01.01", views:"1,000" },
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 2",division:"결제,취소", title:"공지 제목 공지 제목 공지 제목", exposure:"상위", state:"노출", writer:"홍길동", date_created:"24.01.01", views:"1,000" },
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 3",division:"로그인, 가입, 탈퇴", title:"공지 제목 공지 제목 공지 제목", exposure:"상위", state:"노출", writer:"홍길동", date_created:"24.01.01", views:"1,000" },
    ]*/

    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        pagination: true,
        paginationMode: "remote",
        ajaxURL : "/service/ajax_service.php",
        ajaxParams: function() {
            return {
                mode: 'getFaqList',
                ...getParameterData()
            };
        },
        ajaxResponse : function (url, params, response) {
            console.log(response);
            if (response.data && response.data.length > 0) {
                response.data.forEach((record, index) => {
                    console.log(`Record ${index + 1}:`, record);
                });
            } else {
                console.log("No data received from server.");
            }

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
            {title:"번호", field:"number", minWidth:100, formatter:"html"},
            {title:"FAQ구분", field:"division", minWidth:130},
            {title:"FAQ제목", field:"title", minWidth:150},
            {title:"상태", field:"state", minWidth:150},
            {title:"작성자", field:"writer", minWidth:150},
            {title:"작성일", field:"date_created", minWidth:100},
            {title:"조회수", field:"views", minWidth:100},
        ],
        rowFormatter: function(row) {
            row.getCell("number").setValue(((table.getPage()-1) * table.getPageSize()) + row.getPosition(true));
        }
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./service_faq_modify.php?idx=' + row.getData().idx;
    });

    function getParameterData() {

        //가입일
        let usedate = JSON.stringify($("#filter_usedate").val().split(' ~ ').map(date => date.replace(/\./g, '-')));
        let exposure,language,category

        $('input[name="faq_exposure"]').each(function() {
            var radio = $(this);
            if (radio.is(':checked')) {
                exposure = radio.val();
            }
        });

        $('input[name="faq_language"]').each(function() {
            var radio = $(this);
            if (radio.is(':checked')) {
                language = radio.val();
            }
        });

        $('input[name="faq_category"]').each(function() {
            var radio = $(this);
            if (radio.is(':checked')) {
                category = radio.val();
            }
        });

        let serach_subject = $("#serach_subject").val();


         // 마일리지
        //const isMileageUsed = is_mileage_used.getValue().includes('all') ? '' : JSON.stringify(is_mileage_used.getValue());

        //국적
        /*
            let nationality_type = [];
            if(!$("#filter_nationality_type input:checkbox:first").prop("checked")){
                $("#filter_nationality_type input:checkbox:not(:first):checked").each(function () {
                    nationality_type.push($(this).val());
                });
                nationality_type = JSON.stringify(nationality_type);
            }

            //회원명, 이메일, 전화번호
            let text = $("#filter_text").val();
    */
        return {
            usedate,
            exposure,
            language,
            category,
            serach_subject,
        };
    }

    function getList() {
        table.setData("/service/ajax_service.php", getParameterData());
    }

    function gubun(vals,ids) {
        $('#'+ids).text(vals);
    }

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
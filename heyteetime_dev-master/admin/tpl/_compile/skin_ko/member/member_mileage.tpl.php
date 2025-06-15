<?php /* Template_ 2.2.8 2024/06/19 15:21:22 C:\xampp\heyteetime_dev\admin\_global\skin_ko\member\member_mileage.tpl 000011715 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">마일리지 지급 목록</h2>
    <a href="./member_mileage_regist.php" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 마일리지 지급</a>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">수령일</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" id="reg_date" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>

    <div>
        <div class="mb-1 text-slate-500 font-medium">사용일</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" id="use_date" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>

    <div>
         <div class="mb-1 text-slate-500 font-medium">지급사유</div>
        <select id="filter_status" name="state[]" multiple autocomplete="off" class="tom-select min-w-48">
            <option value="all" selected>전체</option>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['KindList'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
            <option value="<?php echo $TPL_V1["point_kind_key_idx"]?>"><?php echo $TPL_V1["kind_name"]?></option>
<?php }}?>
        </select>

    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">수령자</div>
        <input type="text" class="form-control" id="recipient">
    </div>
    <button class="btn btn-primary-soft" onclick="setTimeout(() => {getList()}, 250);">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
	<div>총 <span id="total">0</span>건</div>
        <div class="flex items-center gap-3">
        <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown" onclick="downloadExcel()"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export </button>
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

    const filter_status = new TomSelect('#filter_status', options);
    /* 수령일 */
    const reg_date = new Litepicker({
        element: document.querySelector('#reg_date'),
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
    })

    /* 사용일 */
    const use_date = new Litepicker({
        element: document.querySelector('#use_date'),
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
    })

    // 데이터


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
    var table = new Tabulator("#tabulator", {
	pagination: true,
        paginationMode: "remote",
        ajaxURL : "/member/ajax_member.php",
        ajaxParams: function() {
            let data = getParameterData();
            data.type = 'getMileageList';
            return data;
        },
        ajaxResponse : function (url, params, res) {
            if (res && res.data) {
            $("#total").text(res.data.length); // data 배열의 길이를 사용
            } else {
            console.error("res.data is undefined");
            $("#total").text(0); // 데이터가 없을 경우 0으로 설정
          }
              return res;
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
            {title:"번호", field:"number", minWidth:80},
            {title:"아이디", field:"id", minWidth:110},
            {title:"성명", field:"name", minWidth:110},
            {title:"지급사유", field:"reason", minWidth:130, formatter:"html"},
            {title:"이벤트", field:"event", minWidth:150},
            {title:"수령일", field:"receipt", minWidth:150},
            {title:"수령액", field:"receive", minWidth:110, formatter: function(cell) {
            return cell.getValue() == 0 ? "-" : cell.getValue();
            }},
            {title:"지급일", field:"date", minWidth:100},
            {title: "idx", field: "idx", visible: false},
             {
            title: "", field: "button", minWidth: 100, formatter: "html",
            cellClick: function (e, cell) {
                var rowData = cell.getRow().getData();
                resetReceive(rowData.idx);
            }
        },

        ],
        rowFormatter: function(row) {
            row.getCell("number").setValue(((table.getPage()-1) * table.getPageSize()) + row.getPosition(true));
        }
    });

    // Export
    $("#tabulator-export-csv").on("click", function (event) {
        table.download("csv", "data.csv");
    });
    $("#tabulator-export-json").on("click", function (event) {
        table.download("json", "data.json");
    });

    $("#tabulator-export-html").on("click", function (event) {
        table.download("html", "data.html", {
            style: true,
        });
    });

    function resetReceive(idx) {
    $.ajax({
        url: '/member/ajax_member.php',
        method: 'POST',
        data: {type: 'resetReceive', id: idx},
            beforeSend: function (xhr) {
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        },
        success: function (res) {
             if (res.status === 'success') {
                alert('지급취소 되었습니다.');
                location.reload(); // 페이지 새로고침
            } else {
                alert(res.message || 'Failed to reset receive.');
            }
        },
        error: function (e) {
            console.error('AJAX error:', e);
            console.log(e);
        }
    });
}

    function getParameterData() {

        //수령일
        let reg_date = JSON.stringify($("#reg_date").val().split(' ~ ').map(date => date.replace(/\./g, '-')));

	    //사용일
        let use_date = JSON.stringify($("#use_date").val().split(' ~ ').map(date => date.replace(/\./g, '-')));

        //지급사유

        let status = filter_status.getValue().includes('all') ? '' : JSON.stringify(filter_status.getValue());
        let recipient = $("#recipient").val();

        console.log("status: ", status);
         return  {
            reg_date,
	        use_date,
            status,
            recipient
        };

    }


    function getList() {
        table.setData("/member/ajax_member.php", getParameterData());
    }


    function downloadExcel() {
         let fileName = '마일리지지급목록' + getFormattedDate_yymmdd();

        let data = {
            type: 'getExcelForMileageList',
            fileName: fileName,
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
    }

    function getFormattedDate_yymmdd() {
        let today = new Date();
        let year = today.getFullYear().toString().substring(2);
        let month = (today.getMonth() + 1).toString().padStart(2, '0');
        let day = today.getDate().toString().padStart(2, '0');
        return year + month + day;
    }

      $(document).ready(function() {
            // 엔터키 이벤트 리스너 추가
            $(document).on("keydown", function(e) {
                if (e.key === "Enter") {
                    e.preventDefault(); // 기본 엔터키 동작 방지
                    setTimeout(() => { getList(); }, 250); // "검색하기" 버튼 클릭 이벤트 트리거
                }
            });
        });

</script>
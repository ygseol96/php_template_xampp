{#head}
{#header}
<form name="add_form" id="add_form" enctype="multipart/form-data">
<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./service_terms_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 약관 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">약관 등록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>약관등록</button>
        <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>약관취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4 overflow-x-scroll">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">약관구분</div>
        <div class="flex-1 flex flex-wrap gap-5">
            <select class="form-select w-52" name="terms_kind" id="terms_kind" onchange="show_event(this.value)">
    		    <!--{@ data['KindList']}-->
		        <option value="{.agree_kind_key_idx}" data-name="{.kind_name}">{.kind_name}</option>
                    <!--{/}-->
		    </select>
		    <!--
            <select class="form-select w-52">
                <option>서비스 이용약관</option>
                <option>개인정보 취급 방침</option>
                <option>국내 여행약관</option>
                <option>국외 여행약관</option>
                <option>개인(신용)정보 수집</option>
                <option>개인(신용)정보 제 3자 제공</option>
            </select>
            -->
            <button type="button" class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#terms_regitst_division-modal"><i data-lucide="plus" class="w-4 h-4"></i> 구분 추가</button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold shrink-0">약관내용</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                <li id="bylanguage-1-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-1" type="button" role="tab" aria-controls="bylanguage-tab-1" aria-selected="true">한국어</button>
                </li>
                <li id="bylanguage-2-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-2" type="button" role="tab" aria-controls="bylanguage-tab-2" aria-selected="false">영어</button>
                </li>
                <li id="bylanguage-3-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-3" type="button" role="tab" aria-controls="bylanguage-tab-3" aria-selected="false" >스페인어</button>
                </li>
                <li id="bylanguage-4-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-4" type="button" role="tab" aria-controls="bylanguage-tab-4" aria-selected="false">일본어</button>
                </li>
                <li id="bylanguage-5-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-5" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="false" >중국어</button>
                </li>
            </ul>

            <div class="tab-content w-full border-b-2 border-primary">

                <!-- 한국어 -->
                <div id="bylanguage-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-1-tab">

                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">버전</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" name="ko_version">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">적용일</div>
                        <div class="flex-1">
                            <!--<input type="text" class="form-control" name="ko_start_date" id="ko_start_date">-->
                            <input type="text" name="ko_start_date" id="ko_start_date" class="datepicker form-control" >
                        </div>
                    </div>
                    <input type="hidden" name="editorContent" id="editorContent">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용</div>
                        <div class="flex-1">
                            <!-- 에디터 영역 -->
                            <div class="editor w-full">
                                <textarea name="ko_content" id="ko_editor" class="w-full"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- 영어 -->
                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">버전</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="" name="en_version">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">적용일</div>
                        <div class="flex-1">
                            <input type="text" class="datepicker form-control" name="en_start_date" id="en_start_date">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용</div>
                        <div class="flex-1">
                            <!-- 에디터 영역 -->
                            <div class="editor w-full">
                              <textarea name="en_content" id="en_editor" class="w-full"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">버전</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="" name="sp_version">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">적용일</div>
                        <div class="flex-1">
                            <input type="text" class="datepicker form-control" id="sp_start_date" value="" name="sp_start_date">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용</div>
                        <div class="flex-1">
                            <!-- 에디터 영역 -->
                            <div class="editor w-full">
                               <textarea name="sp_content" id="sp_editor" class="w-full"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- 일본어 -->
                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-4-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">버전</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="" name="jp_version">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">적용일</div>
                        <div class="flex-1">
                            <input type="text" class="datepicker form-control" id="jp_start_date" value="" name="jp_start_date">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용</div>
                        <div class="flex-1">
                            <!-- 에디터 영역 -->
                            <div class="editor w-full">
                                <textarea name="jp_content" id="jp_editor" class="w-full"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-5-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">버전</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="" name="cn_version">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">적용일</div>
                        <div class="flex-1">
                            <input type="text" class="datepicker form-control" id="cn_start_date" value="" name="cn_start_date">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용</div>
                        <div class="flex-1">
                            <!-- 에디터 영역 -->
                            <div class="editor w-full">
                               <textarea name="cn_content" id="cn_editor" class="w-full"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 약관등록</button>
    <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 약관취소</button>
</div>
</form>


<!-- 약관 구분 모달 -->
<form name="add_kind-form" id="add_kind-form" enctype="multipart/form-data">
<div id="terms_regitst_division-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">약관 구분</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">한국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요." id="ko">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">영어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요." id="en">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">일본어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요." id="jp">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">스페인어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요." id="sp">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">중국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요." id="cn">
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button class="px-6 btn btn-primary" onclick="insertKind()">저장</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

{#bottom}
<script>
/* 적용일 */
    const date1 = new Litepicker({
        element: document.querySelector('#ko_start_date'),
        singleMode: true,
        firstDay: 0,
        format: 'YYYY.MM.DD',
        lang: "ko-KR",
        numberOfColumns: 1,
        numberOfMonths: 1,
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
        startDate : new Date(new Date().setDate(new Date().getDate())),
        maxDate : new Date(),
    })

    const date2 = new Litepicker({
        element: document.querySelector('#en_start_date'),
        singleMode: true,
        firstDay: 0,
        format: 'YYYY.MM.DD',
        lang: "ko-KR",
        numberOfColumns: 1,
        numberOfMonths: 1,
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
        startDate : new Date(new Date().setDate(new Date().getDate())),
        maxDate : new Date(),
    })

    const date3 = new Litepicker({
        element: document.querySelector('#sp_start_date'),
        singleMode: true,
        firstDay: 0,
        format: 'YYYY.MM.DD',
        lang: "ko-KR",
        numberOfColumns: 1,
        numberOfMonths: 1,
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
        startDate : new Date(new Date().setDate(new Date().getDate())),
        maxDate : new Date(),
    })

    const date4 = new Litepicker({
        element: document.querySelector('#jp_start_date'),
        singleMode: true,
        firstDay: 0,
        format: 'YYYY.MM.DD',
        lang: "ko-KR",
        numberOfColumns: 1,
        numberOfMonths: 1,
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
        startDate : new Date(new Date().setDate(new Date().getDate())),
        maxDate : new Date(),
    })

    const date5 = new Litepicker({
        element: document.querySelector('#cn_start_date'),
        singleMode: true,
        firstDay: 0,
        format: 'YYYY.MM.DD',
        lang: "ko-KR",
        numberOfColumns: 1,
        numberOfMonths: 1,
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
        startDate : new Date(new Date().setDate(new Date().getDate())),
        maxDate : new Date(),
    })
</script>
<!-- 에디터 -->
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
     // ClassicEditor.create( document.querySelector( '#editor' ) );

let ko_editor, en_editor, sp_editor, cn_editor; sp_editor;

ClassicEditor
    .create( document.querySelector( '#ko_editor' ) )
    .then( newEditor => {
        ko_editor = newEditor;
    } )
    .catch( error => {
        console.error( error );
    } );

ClassicEditor
    .create( document.querySelector( '#en_editor' ) )
    .then( newEditor => {
        en_editor = newEditor;
    } )
    .catch( error => {
        console.error( error );
    } );
ClassicEditor
    .create( document.querySelector( '#sp_editor' ) )
    .then( newEditor => {
        sp_editor = newEditor;
    } )
    .catch( error => {
        console.error( error );
    } );
ClassicEditor
    .create( document.querySelector( '#jp_editor' ) )
    .then( newEditor => {
        jp_editor = newEditor;
    } )
    .catch( error => {
        console.error( error );
    } );
ClassicEditor
    .create( document.querySelector( '#cn_editor' ) )
    .then( newEditor => {
        cn_editor = newEditor;
    } )
    .catch( error => {
        console.error( error );
    } );

</script>

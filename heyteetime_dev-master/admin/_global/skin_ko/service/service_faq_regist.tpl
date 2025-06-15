{#head}
{#header}
<form name="add_form" id="add_form" enctype="multipart/form-data">
<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./service_faq_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> FAQ 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">FAQ 등록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> FAQ 등록</button>
        <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> FAQ 취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4 overflow-x-scroll">
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">노출대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            {@ data['data']['lang_kind'] }
                <div class="form-check">
                    <input id="lang_1_{.index_}" data-index="{.index_}" value="{.idx}" class="form-check-input" type="checkbox" name="lang_1"{? .code == 'KO' } checked {/}>
                    <label class="form-check-label" for="lang_1_{.index_}">{.display_name}({.code})</label>
                </div>
            {/}
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">구분</div>
        <div class="flex-1 flex flex-wrap gap-5">
           <select class="form-select w-52" name="terms_kind" id="terms_kind" onchange="show_event(this.value)">
    		    {@ data['KindList']}
		            <option value="{.bbs_faq_option_key_idx}" data-name="{.name}">{.name}</option>
                {/}
		    </select>
            <button type="button" class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#faq_regitst_division-modal"><i data-lucide="plus" class="w-4 h-4"></i> 구분 추가</button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold shrink-0">언어별</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
               <input type="hidden" name="lang_cnt" value="{=count(data['data']['lang_kind'])}">
               {@ data['data']['lang_kind'] }
                    <li id="lang-{.index_}-tab" class="nav-item" role="presentation">
                        <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#lang-tab-{.index_}" type="button" role="tab" aria-controls="lang-tab-{.index_}" aria-selected="true" disabled>{.display_name}({.code})</button>
                    </li>
                {/}
            </ul>
            <div class="tab-content w-full border-b-2 border-primary">

                <!-- 한국어 -->
                {@ data['data']['lang_kind'] }
                <!--<div id="bylanguage-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-1-tab">-->
                <div id="lang-tab-{.index_}" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="lang-{.index_}-tab">

                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" name="subject-{.index_}">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용</div>
                        <div class="flex-1">
                            <!-- 에디터 영역 -->
                            <div class="editor w-full">
                                 <textarea name="content-{.index_}" id="editor" class="w-full"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">파일업로드</div>
                        <div class="flex-1 flex flex-col gap-2">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" name="uploaded_files-{.index_}[]" id="file1">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" name="uploaded_files-{.index_}[]" id="file2">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>
                </div>
                {/}
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">노출여부</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="form-check">
                <input id="top_exposure2_1" class="form-check-input" type="radio" name="top_exposure" value="1" checked>
                <label class="form-check-label" for="top_exposure2_1">노출</label>
            </div>
            <div class="form-check">
                <input id="top_exposure2_2" class="form-check-input" type="radio" name="top_exposure" value="0">
                <label class="form-check-label" for="top_exposure2_2">미노출</label>
            </div>
        </div>
    </div>


</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> FAQ등록</button>
    <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 등록취소</button>
</div>
</form>

<!-- FAQ 구분 모달 -->
<form name="add_kind-form" id="add_kind-form" enctype="multipart/form-data">
<div id="faq_regitst_division-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">FAQ 구분</h2>
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
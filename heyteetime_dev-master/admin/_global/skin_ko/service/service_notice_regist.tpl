{#head}
{#header}
<form name="add_notice-form" id="add_notice-form" enctype="multipart/form-data">
<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./service_notice_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 공지 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">공지 등록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공지등록</button>
        <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>등록취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4 overflow-x-scroll">
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">노출대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
        {@ data['data']['lang_kind'] }
            <div class="form-check">
                <input id="lang_1_{.index_}" data-index="{.index_}" value="{.idx}" class="form-check-input" type="checkbox" name="lang_1" {? .code == 'KO' } checked {/}>
                <label class="form-check-label" for="lang_1_{.index_}">{.display_name}({.code})</label>
            </div>
        {/}
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">제목</div>
        <div class="flex-1">
            <input type="text" class="form-control" name="subject">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold shrink-0">언어별</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                {@ data['data']['lang_kind'] }
                    <li id="lang-{.index_}-tab" class="nav-item" role="presentation">
                        <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#lang-tab-{.index_}" type="button" role="tab" aria-controls="lang-tab-{.index_}" aria-selected="true" disabled>{.display_name}({.code})</button>
                    </li>
                {/}
            </ul>

    <div class="tab-content w-full border-b-2 border-primary">
    {@ data['data']['lang_kind'] }
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
                    <textarea name="content-{.index_}" id="editor-{.index_}" class="w-full"></textarea>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-20 pt-2 font-semibold">파일업로드</div>
            <div class="flex-1 flex flex-col gap-2">
                <div class="flex flex-wrap items-center gap-3">
                    <input type="file" class="w-48" name="uploaded_files-{.index_}[]" id="file1-{.index_}">
                    <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <input type="file" class="w-48" name="uploaded_files-{.index_}[]" id="file2-{.index_}">
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
        <div class="w-full md:w-40 pt-2 font-semibold">상위노출</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="form-check">
                <input id="top_exposure2_1" class="form-check-input" type="radio" value="0" name="top_exposure" checked>
                <label class="form-check-label" for="top_exposure2_1">일반</label>
            </div>
            <div class="form-check">
                <input id="top_exposure2_2" class="form-check-input" type="radio" value="1" name="top_exposure">
                <label class="form-check-label" for="top_exposure2_2">상위</label>
            </div>
        </div>
    </div>
</div>
<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 공지등록</button>
    <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 공지취소</button>
</div>
</form>
{#bottom}
 <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>


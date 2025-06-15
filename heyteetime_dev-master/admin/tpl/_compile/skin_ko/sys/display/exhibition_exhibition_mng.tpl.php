<?php /* Template_ 2.2.8 2024/05/16 09:11:52 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\display\exhibition_exhibition_mng.tpl 000077206 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center mt-8">
    <h2 class="text-xl font-bold mr-auto">전시 목록</h2>
    <div class="tab-content">
        <div id="exhibition-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="exhibition-1-tab">
            <button class="btn btn-primary" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
        </div>
        <div id="exhibition-tab-2" class="tab-pane leading-relaxed h-[40.75px]" role="tabpanel" aria-labelledby="exhibition-2-tab">

        </div>
    </div>
</div>

<!-- 탭 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div class="flex flex-col md:flex-row gap-2 md:gap-6">
        <div>
            <ul class="nav nav-boxed-tabs bg-slate-200 rounded-full" role="tablist">
                <li id="exhibition-1-tab" class="nav-item flex-1" role="presentation">
                    <button class="nav-link w-full py-2 !rounded-full active" data-tw-toggle="pill" data-tw-target="#exhibition-tab-1" type="button" role="tab" aria-controls="exhibition-tab-1" aria-selected="true">PC</button>
                </li>
                <li id="exhibition-2-tab" class="nav-item flex-1" role="presentation">
                    <button class="nav-link w-full py-2 !rounded-full" data-tw-toggle="pill" data-tw-target="#exhibition-tab-2" type="button" role="tab" aria-controls="exhibition-tab-2" aria-selected="false">MOBILE</button>
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav nav-boxed-tabs bg-slate-200 rounded-full" role="tablist">
                <li id="exhibition-3-tab" class="nav-item " role="presentation">
                    <button class="nav-link w-full py-2 !rounded-full active" data-tw-toggle="pill" data-tw-target="#exhibition-tab-3" type="button" role="tab" aria-controls="exhibition-tab-3" aria-selected="true">홈</button>
                </li>
                <li id="exhibition-4-tab" class="nav-item " role="presentation">
                    <button class="nav-link w-full py-2 !rounded-full" data-tw-toggle="pill" data-tw-target="#exhibition-tab-4" type="button" role="tab" aria-controls="exhibition-tab-4" aria-selected="false">상품</button>
                </li>
                <li id="exhibition-5-tab" class="nav-item " role="presentation">
                    <button class="nav-link w-full py-2 !rounded-full" data-tw-toggle="pill" data-tw-target="#exhibition-tab-5" type="button" role="tab" aria-controls="exhibition-tab-5" aria-selected="false">마이페이지</button>
                </li>
                <li id="exhibition-6-tab" class="nav-item " role="presentation">
                    <button class="nav-link w-full py-2 !rounded-full" data-tw-toggle="pill" data-tw-target="#exhibition-tab-6" type="button" role="tab" aria-controls="exhibition-tab-6" aria-selected="false">고객센터</button>
                </li>
                <li id="exhibition-7-tab" class="nav-item " role="presentation">
                    <button class="nav-link w-full py-2 !rounded-full" data-tw-toggle="pill" data-tw-target="#exhibition-tab-7" type="button" role="tab" aria-controls="exhibition-tab-7" aria-selected="false">기타</button>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- 탭 컨텐츠 -->
<div class="intro-y mt-6">
    <div class="tab-content">
        <div id="exhibition-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="exhibition-1-tab">
            <h2 class="text-lg font-bold mr-auto">홈 전시관리</h2>
        </div>
        <div id="exhibition-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="exhibition-2-tab">

        </div>
    </div>


    <div class="intro-y box p-5 mt-2">
        <div class="tab-content">
            <div id="exhibition-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="exhibition-1-tab">
                <div class="relative flex flex-wrap items-end justify-between mt-2">
                    <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                        <li id="homex-1-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#homex-tab-1" type="button" role="tab" aria-controls="homex-tab-1" aria-selected="true">한국어</button>
                        </li>
                        <li id="homex-2-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#homex-tab-2" type="button" role="tab" aria-controls="homex-tab-2" aria-selected="false">영어</button>
                        </li>
                        <li id="homex-3-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#homex-tab-3" type="button" role="tab" aria-controls="homex-tab-3" aria-selected="false">스페인어</button>
                        </li>
                        <li id="homex-4-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#homex-tab-4" type="button" role="tab" aria-controls="homex-tab-4" aria-selected="false">일본어</button>
                        </li>
                        <li id="homex-5-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#homex-tab-5" type="button" role="tab" aria-controls="homex-tab-5" aria-selected="false">중국어</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content ">
                    <!-- 한국어 -->
                    <div id="homex-tab-1" class="tab-pane leading-relaxed p-5 active" role="tabpanel" aria-labelledby="homex-1-tab">
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>

                    <!-- 영어 -->
                    <div id="homex-tab-2" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="homex-2-tab">
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>

                    <!-- 스페인어 -->
                    <div id="homex-tab-3" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="homex-3-tab">
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>

                    <!-- 일본어 -->
                    <div id="homex-tab-4" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="homex-4-tab">
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>

                    <!-- 중국어 -->
                    <div id="homex-tab-5" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="homex-5-tab">
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>PC</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div id="exhibition-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="exhibition-2-tab">
                <div class="relative flex flex-wrap items-end justify-between mt-2">
                    <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                        <li id="homex-1-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#homex-tab-6" type="button" role="tab" aria-controls="homex-tab-6" aria-selected="true">한국어</button>
                        </li>
                        <li id="homex-2-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#homex-tab-7" type="button" role="tab" aria-controls="homex-tab-7" aria-selected="false">영어</button>
                        </li>
                        <li id="homex-3-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#homex-tab-8" type="button" role="tab" aria-controls="homex-tab-8" aria-selected="false">스페인어</button>
                        </li>
                        <li id="homex-4-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#homex-tab-9" type="button" role="tab" aria-controls="homex-tab-9" aria-selected="false">일본어</button>
                        </li>
                        <li id="homex-5-tab" class="nav-item" role="presentation">
                            <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#homex-tab-10" type="button" role="tab" aria-controls="homex-tab-10" aria-selected="false">중국어</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content ">
                    <!-- 한국어 -->
                    <div id="homex-tab-6" class="tab-pane leading-relaxed p-5 active" role="tabpanel" aria-labelledby="homex-6-tab">
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 목록 최상단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 상세 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 검색 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>

                    <!-- 영어 -->
                    <div id="homex-tab-7" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="homex-7-tab">
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 목록 최상단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 상세 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 검색 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>

                    <!-- 스페인어 -->
                    <div id="homex-tab-8" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="homex-8-tab">
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 목록 최상단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 상세 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 검색 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>

                    <!-- 일본어 -->
                    <div id="homex-tab-9" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="homex-9-tab">
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 목록 최상단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 상세 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 검색 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>

                    <!-- 중국어 -->
                    <div id="homex-tab-10" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="homex-10-tab">
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 목록 최상단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 상세 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-end mb-4">
                                <h2 class="text-lg font-bold mr-auto">상품 검색 하단</h2>
                                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibition_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>항목추가</button>
                            </div>
                            <div class="mb-4 flex gap-3">
                                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap w-full">
                                    <div class="flex flex-wrap items-start gap-2">
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">대상</div>
                                            <div>MOBILE</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿</div>
                                            <div>상품</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">템플릿명</div>
                                            <div>메인 롤링 배너</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">형태</div>
                                            <div>고정 (3*2)</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">정렬</div>
                                            <div>등록순</div>
                                        </div>
                                        <div class="flex-1 py-1.5 px-3">
                                            <div class="text-slate-500">항목수</div>
                                            <div>6</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-danger-soft">삭제</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- 전시등록 / pc/mobile 텍스트만 변경 -->
<div id="exhibition_add-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog md:!w-[800px]">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">PC 전시 등록</h2>
                <button class="flex items-center gap-1"  data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <!-- 필터 -->
                <div class="flex flex-wrap gap-2">
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">구분</div>
                        <div>
                            <select class="form-select w-24">
                                <option>전체</option>
                                <option>상품</option>
                                <option>콘텐츠</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">전체</div>
                        <div>
                            <select class="form-select w-24">
                                <option>전체</option>
                                <option>고정</option>
                                <option>롤링</option>
                                <option>탭</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">제목</div>
                        <div>
                            <select class="form-select w-24">
                                <option>전체</option>
                                <option>제목</option>
                                <option>설명</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">언어</div>
                        <div>
                            <select class="form-select w-24">
                                <option>전체</option>
                                <option>한국어</option>
                                <option>영어</option>
                                <option>스페인어</option>
                                <option>일본어</option>
                                <option>중국-번체</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 text-slate-500 font-medium">템플릿명</div>
                        <div class="flex items-center gap-2">
                            <input type="text" class="form-control">
                            <button class="btn btn-primary w-24">검색</button>
                        </div>
                    </div>
                </div>

                <!-- 테이블 -->
                <div class="mt-5">
                    <div class="overflow-x-auto">
                        <div id="tabulator" class="table-report table-report--tabulator"></div>
                    </div>
                </div>


                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">닫기</button>
                    <button class="px-6 btn btn-primary">추가</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 데이터
    var tabledata = [
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 1", detail:"상품", form:"고정형", templatename:"상품 템플릿 01", lang:"한,영,스,일,번,간"},
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 2", detail:"상품", form:"고정형", templatename:"상품 템플릿 01", lang:"한,영,스,일,번,간"},
        {number:"<input type='checkbox' class='form-check-input mr-1' /> 3", detail:"상품", form:"고정형", templatename:"상품 템플릿 01", lang:"한,영,스,일,번,간"},
    ]

    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        data:tabledata,
        printAsHtml: true,
        printStyled: true,
        pagination: "remote",
        paginationSize: 2,
        paginationInitialPage:2,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",

        columns:[ //define the table columns
            {title:"번호", field:"number", minWidth:50, formatter:"html"},
            {title:"내용", field:"detail", minWidth:100},
            {title:"형태", field:"form", minWidth:100},
            {title:"템플릿명", field:"templatename", minWidth:150},
            {title:"언어", field:"lang", minWidth:150},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    // table.on("rowClick", function(e, row){
    //     location.href='./service_message_detail.php'
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
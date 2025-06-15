<?php /* Template_ 2.2.8 2024/05/16 10:15:12 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\display\exhibition_theme_regist.tpl 000018131 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./exhibition_theme_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 테마 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">테마 등록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>테마삭제</button>
        <button class="btn btn-dark"><i data-lucide="x" class="w-4 h-4 mr-1"></i>저장취소</button>
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>테마저장</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="tem_mark_1_1" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_1">한국어</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_2" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_2">영어</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_3" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_3">스페인어</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_4" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_4">일본어</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_5" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_5">중국어</label>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">제목설정</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                <li id="bylanguage-1-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-1" type="button" role="tab" aria-controls="bylanguage-tab-1" aria-selected="true">한국어</button>
                </li>
                <li id="bylanguage-2-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-2" type="button" role="tab" aria-controls="bylanguage-tab-2" aria-selected="false">영어</button>
                </li>
                <li id="bylanguage-3-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-3" type="button" role="tab" aria-controls="bylanguage-tab-3" aria-selected="false" disabled>스페인어</button>
                </li>
                <li id="bylanguage-4-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-4" type="button" role="tab" aria-controls="bylanguage-tab-4" aria-selected="false">일본어</button>
                </li>
                <li id="bylanguage-5-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-5" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="false" disabled>중국어</button>
                </li>
            </ul>

            <div class="tab-content w-full border-b-2 border-primary">

                <!-- 한국어 -->
                <div id="bylanguage-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-1-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">아이콘</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 영어 -->
                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">아이콘</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">아이콘</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-4-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">아이콘</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-5-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="일본 3色 골프여행">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <input type="text" class="form-control" placeholder="色다른 계절, 色다른 지역, 色다른 라운드">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">아이콘</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">표시순서</div>
        <div class="flex flex-wrap items-center gap-6">
            <select name="" id="" class="form-select w-full md:w-54">
                <option value="">등록순</option>
                <option value="">가격낮은순</option>
                <option value="">인기순</option>
                <option value="">랜덤순</option>
            </select>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">상품선택</div>
        <div class="flex-1">
            <div class="overflow-y-auto max-h-36 p-4 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <div class="font-bold">상품</div>
                    <div class="mt-2">가산 레가시</div>
                </div>
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <div class="font-bold">상품</div>
                    <div class="mt-2">가산 레가시</div>
                </div>
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <div class="font-bold">테마(10)</div>
                    <div class="mt-2">0000 테마</div>
                </div>
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <div class="font-bold">지역(5)</div>
                    <div class="mt-2">아시아 > 일본 > 후쿠오카 > 가나다</div>
                </div>
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <div class="font-bold">기획전(10)</div>
                    <div class="mt-2">0000 기획전</div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출여부</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="travel_2_1" class="form-check-input" type="radio" name="travel_2">
                    <label class="form-check-label" for="travel_2_1">미노출</label>
                </div>
                <div class="form-check">
                    <input id="travel_2_2" class="form-check-input" type="radio" name="travel_2">
                    <label class="form-check-label" for="travel_2_2">노출</label>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출기간</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="travel_3_1" class="form-check-input" type="radio" name="travel_3">
                    <label class="form-check-label" for="travel_3_1">제한없음</label>
                </div>
                <div class="form-check flex-wrap">
                    <input id="travel_3_2" class="form-check-input" type="radio" name="travel_3">
                    <label class="form-check-label" for="travel_3_2">기간설정</label>
                    <div class="relative w-full md:w-64 ml-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                        </div>
                        <input type="text" class="datepicker form-control pl-12">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>테마삭제</button>
    <button class="btn btn-dark"><i data-lucide="x" class="w-4 h-4 mr-1"></i>저장취소</button>
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>테마저장</button>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
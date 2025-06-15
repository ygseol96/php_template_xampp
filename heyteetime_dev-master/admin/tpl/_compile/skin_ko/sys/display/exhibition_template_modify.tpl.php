<?php /* Template_ 2.2.8 2024/05/16 11:50:06 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\display\exhibition_template_modify.tpl 000081115 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./exhibition_template_regist.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 템플릿 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">템플릿 수정</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>템플릿저장</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>저장취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">템플릿 명</div>
        <div class="flex-1">
            <input type="text" class="form-control" value="">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">대상</div>
        <div class="flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="tem_division_1_1" class="form-check-input" type="radio" name="tem_divisio1" checked>
                <label class="form-check-label" for="tem_division_1_1">PC</label>
            </div>
            <div class="form-check">
                <input id="tem_division_1_2" class="form-check-input" type="radio" name="tem_divisio1">
                <label class="form-check-label" for="tem_division_1_2">MOBILE</label>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">구성</div>
        <div class="flex-1 flex flex-col flex-wrap items-start">
            <div class="flex flex-col md:flex-row gap-3 mb-3 items-center">
                <div class="w-full md:w-8 font-semibold text-slate-400">내용</div>
                <div class="flex-1 flex flex-wrap items-center gap-2">
                    <!-- 상품 콘텐츠별로 하위 컨텐츠 달라짐 -->
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="tem_detail_1_1" name="tem_detail1">
                        <label for="tem_detail_1_1" class="block w-full px-2 py-1">상품</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="tem_detail_1_2" name="tem_detail1">
                        <label for="tem_detail_1_2" class="block w-full px-2 py-1">콘텐츠</label>
                    </div>
                </div>
            </div>
            <div class="flex gap-6 mb-3 items-center">
                <div class="flex flex-col md:flex-row gap-3 items-center">
                    <div class="w-full md:w-8 font-semibold text-slate-400">제목</div>
                    <div class="flex-1 flex flex-wrap items-center gap-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="tem_title_1_1" name="tem_title1">
                            <label for="tem_title_1_1" class="block w-full px-2 py-1">제목</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="tem_title_1_2" name="tem_title1">
                            <label for="tem_title_1_2" class="block w-full px-2 py-1">설명</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-3 items-center">
                    <div class="w-full md:w-8 font-semibold text-slate-400">정렬</div>
                    <div class="flex-1 flex flex-wrap items-center gap-2">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="tem_sort_1_1" name="tem_sort1">
                            <label for="tem_sort_1_1" class="block w-full px-2 py-1">좌측</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="tem_sort_1_2" name="tem_sort1">
                            <label for="tem_sort_1_2" class="block w-full px-2 py-1">중앙</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-3 mb-3 items-start">
                <div class="w-full md:w-8 font-semibold text-slate-400 mt-2">형태</div>
                <div class="flex-1 flex flex-col gap-3">
                    <div class="flex-1 flex flex-wrap items-center gap-2">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="tem_form_1_1" name="tem_form1">
                            <label for="tem_form_1_1" class="block w-full px-2 py-1">고정</label>
                        </div>
                        <select name="" id="" class="form-select w-32">
                            <option value="">가로 3</option>
                        </select>
                        <select name="" id="" class="form-select w-32">
                            <option value="">세로 2</option>
                        </select>
                        <select name="" id="" class="form-select w-32">
                            <option value="">등록순</option>
                        </select>
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-400">* 등록순(가로*세로 수량까지), 랜덤순(제한 없음)</p>
                            <p class="text-sm text-slate-400">* 가로 PC 3~4, MO 1~2 / 세로 PC 1~4, MO 2~5</p>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-wrap items-center gap-2">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="tem_form_1_2" name="tem_form1">
                            <label for="tem_form_1_2" class="block w-full px-2 py-1">롤링</label>
                        </div>
                        <select name="" id="" class="form-select w-32">
                            <option value="">화면수</option>
                        </select>
                        <select name="" id="" class="form-select w-32">
                            <option value="">가로</option>
                        </select>
                        <select name="" id="" class="form-select w-32">
                            <option value="">세로</option>
                        </select>
                        <select name="" id="" class="form-select w-32">
                            <option value="">등록순</option>
                        </select>
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-400">* 등록순(화면*가로*세로 수량까지), 랜덤순(제한 없음)</p>
                            <p class="text-sm text-slate-400">* 가로 PC 3~4, MO 1~2 / 세로 PC 1~4, MO 2~5</p>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-wrap items-center gap-2">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="tem_form_1_3" name="tem_form1">
                            <label for="tem_form_1_3" class="block w-full px-2 py-1">탭</label>
                        </div>
                        <select name="" id="" class="form-select w-32">
                            <option value="">화면수</option>
                        </select>
                        <select name="" id="" class="form-select w-32">
                            <option value="">가로</option>
                        </select>
                        <select name="" id="" class="form-select w-32">
                            <option value="">세로</option>
                        </select>
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-400">* 등록순(탭별 / 가로*세로 수량까지), 랜덤순(제한 없음)</p>
                            <p class="text-sm text-slate-400">* 가로 PC 3~4, MO 1~2 / 세로 PC 1~4, MO 2~5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">표시</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <!-- 상품일때 -->
            <div class="form-check">
                <input id="tem_mark_1_1" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_1">이미지</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_2" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_2">지역</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_3" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_3">예약</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_4" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_4">상품명</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_5" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_5">정상가</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_6" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_6">정상가</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_7" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_7">판매가</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_8" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_8">할인율</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_9" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_9">키워드</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_10" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_10">평점</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_11" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_11">알림</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_12" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_12">관심</label>
            </div>
            <!-- 콘텐츠일때 -->
            <div class="form-check">
                <input id="tem_mark_1_13" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_13">이미지</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_14" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_14">제목</label>
            </div>
            <div class="form-check">
                <input id="tem_mark_1_15" class="form-check-input" type="checkbox" name="tem_mark1">
                <label class="form-check-label" for="tem_mark_1_15">제목</label>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold shrink-0">제목</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
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
                    <div>

                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                            <div class="flex-1 flex flex-wrap gap-2 items-end">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">배경</div>
                            <div class="flex-1 flex items-center flex-wrap gap-2">
                                <input type="file" class=" w-48" id="file_upload">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                            <div class="flex-1">
                                <textarea class="form-control h-12"></textarea>
                            </div>
                        </div>

                        <!-- 콘텐츠일때 -->
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-1 font-semibold">콘텐츠</div>
                            <div class="w-full">
                                <div class="flex-1 flex items-center flex-wrap gap-2">
                                    <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#content_regist-modal">콘텐츠 추가하기</button>
                                    <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#review_regist-modal">후기 추가하기</button>
                                    <p class="ml-auto text-sm">4 / 6개 (가로 3 * 세로 2)</p>
                                </div>

                                <!-- 콘텐츠 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 후기 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative border-4 bg-white rounded-lg cursor-pointer w-full md:max-w-[300px]">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <div class="flex items-center pt-3 pl-3 pr-3">
                                            <div class="flex items-center gap-2">
                                                <img class="w-10 h-10 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                                <p class="text-base font-bold">Mr Jim’s</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-auto mr-3">
                                                <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                                                <p class="text-base font-bold">4.5</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 p-3">
                                            <div class="flex flex-col gap-2">
                                                <p class="line-clamp-3 leading-4">비즈니스 호텔이라 작을줄 알았는데  2명이서 자기에는 딱 졸았어요!  2. 호텔에 들어가자마자...</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="font-bold">2024.03.01</span>
                                                    <div class="flex items-center gap-2">
                                                        <i data-lucide="thumbs-up" class="w-4 h-4"></i>
                                                        <span  class="font-bold">1,100K</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="w-1/3 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- 영어 -->
                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                    <div>

                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                            <div class="flex-1 flex flex-wrap gap-2 items-end">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">배경</div>
                            <div class="flex-1 flex items-center flex-wrap gap-2">
                                <input type="file" class=" w-48" id="file_upload" disabled>
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                            <div class="flex-1">
                                <textarea class="form-control h-12"></textarea>
                            </div>
                        </div>

                        <!-- 콘텐츠일때 -->
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-1 font-semibold">콘텐츠</div>
                            <div class="w-full">
                                <div class="flex-1 flex items-center flex-wrap gap-2">
                                    <button class="btn btn-sm btn-primary-soft">콘텐츠 추가하기</button>
                                    <button class="btn btn-sm btn-primary-soft">후기 추가하기</button>
                                    <p class="ml-auto text-sm">4 / 6개 (가로 3 * 세로 2)</p>
                                </div>

                                <!-- 콘텐츠 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 후기 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative border-4 bg-white rounded-lg cursor-pointer w-full md:max-w-[300px]">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <div class="flex items-center pt-3 pl-3 pr-3">
                                            <div class="flex items-center gap-2">
                                                <img class="w-10 h-10 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                                <p class="text-base font-bold">Mr Jim’s</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-auto mr-3">
                                                <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                                                <p class="text-base font-bold">4.5</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 p-3">
                                            <div class="flex flex-col gap-2">
                                                <p class="line-clamp-3 leading-4">비즈니스 호텔이라 작을줄 알았는데  2명이서 자기에는 딱 졸았어요!  2. 호텔에 들어가자마자...</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="font-bold">2024.03.01</span>
                                                    <div class="flex items-center gap-2">
                                                        <i data-lucide="thumbs-up" class="w-4 h-4"></i>
                                                        <span  class="font-bold">1,100K</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="w-1/3 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- 스페인어 -->
                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                    <div>

                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                            <div class="flex-1 flex flex-wrap gap-2 items-end">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">배경</div>
                            <div class="flex-1 flex items-center flex-wrap gap-2">
                                <input type="file" class=" w-48" id="file_upload" disabled>
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                            <div class="flex-1">
                                <textarea class="form-control h-12"></textarea>
                            </div>
                        </div>

                        <!-- 콘텐츠일때 -->
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-1 font-semibold">콘텐츠</div>
                            <div class="w-full">
                                <div class="flex-1 flex items-center flex-wrap gap-2">
                                    <button class="btn btn-sm btn-primary-soft">콘텐츠 추가하기</button>
                                    <button class="btn btn-sm btn-primary-soft">후기 추가하기</button>
                                    <p class="ml-auto text-sm">4 / 6개 (가로 3 * 세로 2)</p>
                                </div>

                                <!-- 콘텐츠 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 후기 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative border-4 bg-white rounded-lg cursor-pointer w-full md:max-w-[300px]">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <div class="flex items-center pt-3 pl-3 pr-3">
                                            <div class="flex items-center gap-2">
                                                <img class="w-10 h-10 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                                <p class="text-base font-bold">Mr Jim’s</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-auto mr-3">
                                                <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                                                <p class="text-base font-bold">4.5</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 p-3">
                                            <div class="flex flex-col gap-2">
                                                <p class="line-clamp-3 leading-4">비즈니스 호텔이라 작을줄 알았는데  2명이서 자기에는 딱 졸았어요!  2. 호텔에 들어가자마자...</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="font-bold">2024.03.01</span>
                                                    <div class="flex items-center gap-2">
                                                        <i data-lucide="thumbs-up" class="w-4 h-4"></i>
                                                        <span  class="font-bold">1,100K</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="w-1/3 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- 일본어 -->
                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                    <div>

                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                            <div class="flex-1 flex flex-wrap gap-2 items-end">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">배경</div>
                            <div class="flex-1 flex items-center flex-wrap gap-2">
                                <input type="file" class=" w-48" id="file_upload" disabled>
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                            <div class="flex-1">
                                <textarea class="form-control h-12"></textarea>
                            </div>
                        </div>

                        <!-- 콘텐츠일때 -->
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-1 font-semibold">콘텐츠</div>
                            <div class="w-full">
                                <div class="flex-1 flex items-center flex-wrap gap-2">
                                    <button class="btn btn-sm btn-primary-soft">콘텐츠 추가하기</button>
                                    <button class="btn btn-sm btn-primary-soft">후기 추가하기</button>
                                    <p class="ml-auto text-sm">4 / 6개 (가로 3 * 세로 2)</p>
                                </div>

                                <!-- 콘텐츠 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 후기 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative border-4 bg-white rounded-lg cursor-pointer w-full md:max-w-[300px]">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <div class="flex items-center pt-3 pl-3 pr-3">
                                            <div class="flex items-center gap-2">
                                                <img class="w-10 h-10 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                                <p class="text-base font-bold">Mr Jim’s</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-auto mr-3">
                                                <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                                                <p class="text-base font-bold">4.5</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 p-3">
                                            <div class="flex flex-col gap-2">
                                                <p class="line-clamp-3 leading-4">비즈니스 호텔이라 작을줄 알았는데  2명이서 자기에는 딱 졸았어요!  2. 호텔에 들어가자마자...</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="font-bold">2024.03.01</span>
                                                    <div class="flex items-center gap-2">
                                                        <i data-lucide="thumbs-up" class="w-4 h-4"></i>
                                                        <span  class="font-bold">1,100K</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="w-1/3 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- 중국어 -->
                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-5-tab">
                    <div>

                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                            <div class="flex-1 flex flex-wrap gap-2 items-end">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">배경</div>
                            <div class="flex-1 flex items-center flex-wrap gap-2">
                                <input type="file" class=" w-48" id="file_upload" disabled>
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">설명글</div>
                            <div class="flex-1">
                                <textarea class="form-control h-12"></textarea>
                            </div>
                        </div>

                        <!-- 콘텐츠일때 -->
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-1 font-semibold">콘텐츠</div>
                            <div class="w-full">
                                <div class="flex-1 flex items-center flex-wrap gap-2">
                                    <button class="btn btn-sm btn-primary-soft">콘텐츠 추가하기</button>
                                    <button class="btn btn-sm btn-primary-soft">후기 추가하기</button>
                                    <p class="ml-auto text-sm">4 / 6개 (가로 3 * 세로 2)</p>
                                </div>

                                <!-- 콘텐츠 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <!-- 이미지로만 사용시 아래 div 제거 -->
                                        <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                            <div class="text-xs">태국 • 방콕</div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                                <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                            </div>
                                            <div class="text-sm truncate">설명글입니다설명글입니다설명글입니다설명글입니다</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 후기 추가 시 -->
                                <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                                    <div class="overflow-hidden relative border-4 bg-white rounded-lg cursor-pointer w-full md:max-w-[300px]">
                                        <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                                        <div class="flex items-center pt-3 pl-3 pr-3">
                                            <div class="flex items-center gap-2">
                                                <img class="w-10 h-10 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                                <p class="text-base font-bold">Mr Jim’s</p>
                                            </div>
                                            <div class="flex items-center gap-2 ml-auto mr-3">
                                                <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                                                <p class="text-base font-bold">4.5</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 p-3">
                                            <div class="flex flex-col gap-2">
                                                <p class="line-clamp-3 leading-4">비즈니스 호텔이라 작을줄 알았는데  2명이서 자기에는 딱 졸았어요!  2. 호텔에 들어가자마자...</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="font-bold">2024.03.01</span>
                                                    <div class="flex items-center gap-2">
                                                        <i data-lucide="thumbs-up" class="w-4 h-4"></i>
                                                        <span  class="font-bold">1,100K</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="w-1/3 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-1 font-semibold">상품</div>
        <div class="flex-1 w-full">
            <div class="flex-1 flex items-center flex-wrap gap-2">
                <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibit_prod_select-modal">상품 추가하기</button>
            </div>

            <div class="overflow-y-auto max-h-52 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                    <p class="absolute left-1.5 top-1.5 bg-emerald-500 text-white px-3 py-1 text-xs rounded-md font-semibold">상품</p>
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                    <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                        <div class="flex items-center justify-between">
                            <div class="text-base font-bold">가산 레가시</div>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                    <p class="absolute left-1.5 top-1.5 bg-sky-500 text-white px-3 py-1 text-xs rounded-md font-semibold">테마 (10)</p>
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                    <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                        <div class="flex items-center justify-between">
                            <div class="text-base font-bold">OOO테마</div>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                    <p class="absolute left-1.5 top-1.5 bg-violet-500 text-white px-3 py-1 text-xs rounded-md font-semibold">지역 (5)</p>
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                    <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                        <div class="flex items-center justify-between">
                            <div class="text-base font-bold">아시아 > 일본 > 후쿠오카 > 가나다</div>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden relative flex items-center gap-2 border-4 bg-white rounded-lg cursor-pointer">
                    <p class="absolute left-1.5 top-1.5 bg-orange-500 text-white px-3 py-1 text-xs rounded-md font-semibold">기획전 (10)</p>
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img class="w-40" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                    <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                        <div class="flex items-center justify-between">
                            <div class="text-base font-bold">OOO기획전</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>템플릿저장</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>저장취소</button>
</div>
<!-- 콘텐츠 추가하기 모달 -->
<div id="content_regist-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">콘텐츠 등록</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex flex-wrap items-center w-full gap-3 md:gap-6 mb-3">
                    <div class="mb-1 text-slate-500 font-medium w-full md:w-auto">이미지</div>
                    <div class="flex-1 flex flex-col md:flex-row md:items-center gap-3">
                        <input type="text" class="form-control w-full md:w-48" placeholder="콘텐츠 이미지를 선택해주세요" readonly>
                        <input type="file" class="w-full md:w-48" id="file_upload">
                        <button class="btn btn-sm btn-danger-soft shrink-0"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                    </div>
                </div>
                <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                    <li id="content_regist-1-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1 active" data-tw-toggle="pill" data-tw-target="#content_regist-tab-1" type="button" role="tab" aria-controls="content_regist-tab-1" aria-selected="true">한국어</button>
                    </li>
                    <li id="content_regist-2-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1" data-tw-toggle="pill" data-tw-target="#content_regist-tab-2" type="button" role="tab" aria-controls="content_regist-tab-2" aria-selected="false">영어</button>
                    </li>
                    <li id="content_regist-3-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1" data-tw-toggle="pill" data-tw-target="#content_regist-tab-3" type="button" role="tab" aria-controls="content_regist-tab-3" aria-selected="false">스페인어</button>
                    </li>
                    <li id="content_regist-4-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1" data-tw-toggle="pill" data-tw-target="#content_regist-tab-4" type="button" role="tab" aria-controls="content_regist-tab-4" aria-selected="false">일본어</button>
                    </li>
                    <li id="content_regist-5-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1" data-tw-toggle="pill" data-tw-target="#content_regist-tab-5" type="button" role="tab" aria-controls="content_regist-tab-5" aria-selected="false">중국어</button>
                    </li>
                </ul>
                <div class="tab-content overflow-y-auto h-[400px]">
                    <div id="content_regist-tab-1" class="tab-pane leading-relaxed pt-3 active" role="tabpanel" aria-labelledby="content_regist-1-tab">
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-12"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">설명</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-52"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content_regist-tab-2" class="tab-pane leading-relaxed pt-3" role="tabpanel" aria-labelledby="content_regist-2-tab">
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-12"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">설명</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-52"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content_regist-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="content_regist-3-tab">
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-12"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">설명</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-52"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content_regist-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="content_regist-4-tab">
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-12"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">설명</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-52"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content_regist-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="content_regist-5-tab">
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-12"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3 mb-3">
                                <div class="w-full md:w-20 pt-2 font-semibold">설명</div>
                                <div class="flex-1">
                                    <textarea class="form-control h-52"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-1 mt-4">
                    <button class="btn btn-danger" data-tw-dismiss="modal"></i> 닫기</button>
                    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 선택추가</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 후기추가하기 등록 모달 -->
<div id="review_regist-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">후기 등록</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-3 mb-3">
                    <select class="form-select">
                        <option>대륙</option>
                        <option>미주</option>
                        <option>유럽</option>
                        <option>아시아</option>
                        <option>중동</option>
                        <option>남태평양</option>
                        <option>아프리카</option>
                    </select>
                    <select class="form-select">
                        <option>국가</option>
                        <option>대한민국</option>
                        <option>중국</option>
                        <option>일본</option>
                        <option>태국</option>
                        <option>베트남</option>
                        <option>필리핀</option>
                    </select>
                    <select class="form-select">
                        <option>지역</option>
                        <option>큐슈</option>
                        <option>오키나와</option>
                        <option>간사이</option>
                        <option>간토</option>
                        <option>추부</option>
                        <option>주고쿠</option>
                    </select>
                    <select class="form-select">
                        <option>도시</option>
                        <option>큐슈</option>
                        <option>오키나와</option>
                        <option>간사이</option>
                        <option>간토</option>
                        <option>추부</option>
                        <option>주고쿠</option>
                    </select>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-3">
                    <div class="flex-1 flex items-center gap-3 w-full md:w-auto">
                        <input type="text" class="form-control w-full">
                        <button class="btn btn-primary-soft shrink-0">검색하기</button>
                    </div>
                    <select class="form-select w-full md:w-28">
                        <option>좋아요순</option>
                    </select>
                </div>

                <div class="border-t border-slate-400 mt-3">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-[1px] bg-slate-400">
                        <div class="overflow-y-auto h-[140px] md:h-[440px] p-3 bg-white flex flex-col gap-3">
                            <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                            <button class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary rounded-md">
                                <p>태국 치앙마이</p>
                                <p class="text-sm mt-2">가산레가시</p>
                            </button>
                            <button class="block w-full text-left p-2 border border-slate-200 rounded-md">
                                <p>태국 치앙마이</p>
                                <p class="text-sm mt-2">가산레가시</p>
                            </button>
                            <button class="block w-full text-left p-2 border border-slate-200 rounded-md">
                                <p>태국 치앙마이</p>
                                <p class="text-sm mt-2">가산레가시</p>
                            </button>
                            <button class="block w-full text-left p-2 border border-slate-200 rounded-md">
                                <p>태국 치앙마이</p>
                                <p class="text-sm mt-2">가산레가시</p>
                            </button>
                            <button class="block w-full text-left p-2 border border-slate-200 rounded-md">
                                <p>태국 치앙마이</p>
                                <p class="text-sm mt-2">가산레가시</p>
                            </button>
                            <button class="block w-full text-left p-2 border border-slate-200 rounded-md">
                                <p>태국 치앙마이</p>
                                <p class="text-sm mt-2">가산레가시</p>
                            </button>
                        </div>

                        <div class="md:col-span-2 overflow-y-auto max-h-[320px] h-[320px]  md:max-h-[440px] md:h-[440px] p-3 bg-white flex flex-col gap-3">
                            <!-- active 시  border-primary 추가-->
                            <div class="relative border-4 border-primary bg-white rounded-lg cursor-pointer w-full">
                                <div class="flex items-center pt-3 pl-3 pr-3">
                                    <div class="flex items-center gap-2">
                                        <img class="w-10 h-10 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <p class="text-base font-bold">Mr Jim’s</p>
                                    </div>
                                    <div class="flex items-center gap-2 ml-auto mr-3">
                                        <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                                        <p class="text-base font-bold">4.5</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 p-3">
                                    <div class="flex flex-col gap-2">
                                        <p class="line-clamp-3 leading-4">비즈니스 호텔이라 작을줄 알았는데  2명이서 자기에는 딱 졸았어요!  2. 호텔에 들어가자마자...</p>
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold">2024.03.01</span>
                                            <div class="flex items-center gap-2">
                                                <i data-lucide="thumbs-up" class="w-4 h-4"></i>
                                                <span  class="font-bold">1,100K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <img class="w-1/3 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                </div>
                            </div>
                            <!-- active 시  border-primary 추가-->
                            <div class="relative border-4 bg-white rounded-lg cursor-pointer w-full">
                                <div class="flex items-center pt-3 pl-3 pr-3">
                                    <div class="flex items-center gap-2">
                                        <img class="w-10 h-10 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <p class="text-base font-bold">Mr Jim’s</p>
                                    </div>
                                    <div class="flex items-center gap-2 ml-auto mr-3">
                                        <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                                        <p class="text-base font-bold">4.5</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 p-3">
                                    <div class="flex flex-col gap-2">
                                        <p class="line-clamp-3 leading-4">비즈니스 호텔이라 작을줄 알았는데  2명이서 자기에는 딱 졸았어요!  2. 호텔에 들어가자마자...</p>
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold">2024.03.01</span>
                                            <div class="flex items-center gap-2">
                                                <i data-lucide="thumbs-up" class="w-4 h-4"></i>
                                                <span  class="font-bold">1,100K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <img class="w-1/3 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                </div>
                            </div>
                            <!-- active 시  border-primary 추가-->
                            <div class="relative border-4 bg-white rounded-lg cursor-pointer w-full">
                                <div class="flex items-center pt-3 pl-3 pr-3">
                                    <div class="flex items-center gap-2">
                                        <img class="w-10 h-10 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                        <p class="text-base font-bold">Mr Jim’s</p>
                                    </div>
                                    <div class="flex items-center gap-2 ml-auto mr-3">
                                        <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                                        <p class="text-base font-bold">4.5</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 p-3">
                                    <div class="flex flex-col gap-2">
                                        <p class="line-clamp-3 leading-4">비즈니스 호텔이라 작을줄 알았는데  2명이서 자기에는 딱 졸았어요!  2. 호텔에 들어가자마자...</p>
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold">2024.03.01</span>
                                            <div class="flex items-center gap-2">
                                                <i data-lucide="thumbs-up" class="w-4 h-4"></i>
                                                <span  class="font-bold">1,100K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <img class="w-1/3 rounded-md" src="/_global/skin_ko/sys/display/dist/images/sample_img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-1 mt-4">
                    <button class="btn btn-danger" data-tw-dismiss="modal"></i> 닫기</button>
                    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 추가</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
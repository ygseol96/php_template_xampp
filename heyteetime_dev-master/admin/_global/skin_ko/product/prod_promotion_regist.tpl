{#head}
{#header}
<div class="intro-y flex flex-wrap items-center justify-between">
    <div>
        <div class="flex items-center mt-4">
            <a href="/sys/product/prod_promotion.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 프로모션 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">프로모션 등록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 프로모션 등록</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4"></i> 등록취소</button>
    </div>
</div>

<!-- detail -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">프로모션명</div>
        <div class="flex-1">
            <input type="text" class="form-control">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">구분</div>
        <div class="flex-1">
            <select class="form-select w-52">
                <option>결제</option>
                <option>재결제</option>
                <option>가입</option>
                <option>후기</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">기간</div>
        <div class="flex-1 flex items-center gap-2">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">혜택</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check flex-wrap gap-1">
                    <input id="promotion_1_1" class="form-check-input" type="checkbox" name="promotion_1">
                    <label class="form-check-label" for="promotion_1_1">할인</label>
                    <div class="flex flex-wrap items-center gap-1">
                        <select class="form-select w-28">
                            <option>정액</option>
                            <option>정률</option>
                        </select>
                        <input type="text" class="form-control w-40">
                    </div>
                </div>
                <div class="form-check gap-1">
                    <input id="promotion_1_2" class="form-check-input" type="checkbox" name="promotion_1">
                    <label class="form-check-label" for="promotion_1_2">마일리지</label>
                    <input type="text" class="form-control w-32">
                </div>
                <div class="form-check gap-1">
                    <input id="promotion_1_3" class="form-check-input" type="checkbox" name="promotion_1">
                    <label class="form-check-label" for="promotion_1_3">쿠폰</label>
                    <select class="form-select w-28">
                        <option>쿠폰선택</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">사용대상</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <div class="flex flex-wrap items-center gap-6">
                    <div class="form-check">
                        <input id="promotion_2_1" class="form-check-input" type="radio" name="promotion_2">
                        <label class="form-check-label" for="promotion_2_1">전체사용</label>
                    </div>
                    <div class="form-check">
                        <input id="promotion_2_2" class="form-check-input" type="radio" name="promotion_2">
                        <label class="form-check-label" for="promotion_2_2">국가/지역/상품지정</label>
                    </div>
                    <div class="form-check">
                        <input id="promotion_2_3" class="form-check-input" type="radio" name="promotion_2">
                        <label class="form-check-label" for="promotion_2_3">일부제외</label>
                    </div>
                </div>
                <div>
                    <!-- 국가/지역/상품지정 선택시 버튼표기 -->
                    <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibit_prod_select-modal"><i data-lucide="plus" class="w-4 h-4"></i> 대상 추가하기</button>
                </div>
            </div>
            <div class="overflow-y-auto max-h-36 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
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
        <div class="w-full md:w-40 pt-2 font-semibold">사용채널</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <div class="flex flex-wrap items-center gap-6">
                    <div class="form-check">
                        <input id="coupon_4_1" class="form-check-input" type="radio" name="coupon_4">
                        <label class="form-check-label" for="coupon_4_1">전체사용</label>
                    </div>
                    <div class="form-check">
                        <input id="coupon_4_2" class="form-check-input" type="radio" name="coupon_4">
                        <label class="form-check-label" for="coupon_4_2">채널지정</label>
                    </div>
                    <div class="form-check">
                        <input id="coupon_4_3" class="form-check-input" type="radio" name="coupon_4">
                        <label class="form-check-label" for="coupon_4_3">일부제외</label>
                    </div>
                </div>
                <div>
                    <!-- 채널지정 선택시 버튼표기 -->
                    <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#coupon_channel_add-modal"><i data-lucide="plus" class="w-4 h-4"></i> 채널 추가하기</button>
                </div>
            </div>
            <div class="overflow-y-auto max-h-36 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                    <div>아시아나</div>
                    <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                </div>
                <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                    <div>아시아나</div>
                    <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                </div>
                <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                    <div>아시아나</div>
                    <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                </div>
            </div>
        </div>
    </div>



    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="coupon_1_1" class="form-check-input" type="checkbox" name="coupon_1">
                <label class="form-check-label" for="coupon_1_1">한국어</label>
            </div>
            <div class="form-check">
                <input id="coupon_1_2" class="form-check-input" type="checkbox" name="coupon_1">
                <label class="form-check-label" for="coupon_1_2">영어</label>
            </div>
            <div class="form-check">
                <input id="coupon_1_3" class="form-check-input" type="checkbox" name="coupon_1">
                <label class="form-check-label" for="coupon_1_3">스페인어</label>
            </div>
            <div class="form-check">
                <input id="coupon_1_4" class="form-check-input" type="checkbox" name="coupon_1">
                <label class="form-check-label" for="coupon_1_4">일본어</label>
            </div>
            <div class="form-check">
                <input id="coupon_1_5" class="form-check-input" type="checkbox" name="coupon_1">
                <label class="form-check-label" for="coupon_1_5">중국어</label>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">여행정보</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                <li id="coupon-1-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#coupon-tab-1" type="button" role="tab" aria-controls="coupon-tab-1" aria-selected="true">한국어</button>
                </li>
                <li id="coupon-2-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-2" type="button" role="tab" aria-controls="coupon-tab-2" aria-selected="false">영어</button>
                </li>
                <li id="coupon-3-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-3" type="button" role="tab" aria-controls="coupon-tab-3" aria-selected="false" disabled>스페인어</button>
                </li>
                <li id="coupon-4-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-4" type="button" role="tab" aria-controls="coupon-tab-4" aria-selected="false">일본어</button>
                </li>
                <li id="coupon-5-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-5" type="button" role="tab" aria-controls="coupon-tab-5" aria-selected="false">중국어</button>
                </li>
            </ul>
            <div class="tab-content w-full border-b-2 border-primary">
                <!-- 한국어 -->
                <div id="coupon-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="coupon-1-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">프로모션명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">조건설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">혜택설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>

                </div>

                <!-- 영어 -->
                <div id="coupon-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-2-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">프로모션명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">조건설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">혜택설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="coupon-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-3-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">프로모션명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">조건설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">혜택설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="coupon-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-4-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">프로모션명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">조건설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">혜택설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="coupon-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-5-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">프로모션명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">조건설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">혜택설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출여부</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="coupon_7_1" class="form-check-input" type="radio" name="coupon_7">
                <label class="form-check-label" for="coupon_7_1">미노출</label>
            </div>
            <div class="form-check">
                <input id="coupon_7_2" class="form-check-input" type="radio" name="coupon_7">
                <label class="form-check-label" for="coupon_7_2">노출</label>
            </div>
        </div>
    </div>
</div>


<div class="intro-y flex flex-wrap w-full items-center justify-between gap-2 mt-4">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 프로모션 복사</button>
    <div class="flex items-center gap-1">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 프로모션 등록</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4"></i> 등록취소</button>
    </div>
</div>
{#bottom}
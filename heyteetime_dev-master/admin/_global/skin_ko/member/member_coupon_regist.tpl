{#head}
{#header}
<form name="add_coupon-form" id="add_coupon-form" enctype="multipart/form-data">
<div class="intro-y flex items-center justify-between mt-8" id="coupon_reg_top">
    <h2 class="text-xl font-bold mr-auto">쿠폰 등록</h2>
    <div>
        <button type="button" class="btn btn-primary insert"><i data-lucide="plus" class="w-4 h-4"></i> 쿠폰등록</button>
        <button type="button" class="btn btn-danger cancel"><i data-lucide="x" class="w-4 h-4"></i> 등록취소</button>
    </div>
</div>

<!-- detail -->

<div class="intro-y box p-5 mt-4">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">쿠폰종류</div>
            <div class="flex-1">
                <select name="coupon_kind" onchange="coupon_kind_chage(this.value)"class="form-select w-52">
                    <!--<option>전체</option>-->
                    <option value="3">할인권</option>
                    <option value="1">예약권</option>
                    <option value="3">금액권</option>
                    <option value="4">교환권</option>
                    <option value="5">멤버쉽</option>
                    <option value="6">할인샵</option>
                </select>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">쿠폰구분</div>
            <div class="flex-1">
                <select name="coupon_type" class="form-select w-52">
                    <!--<option>전체</option>-->
                    <option value="1">회원가입</option>
                    <option value="2">상품구매</option>
                    <option value="3">이벤트</option>
                    <option value="4">기타</option>
                    <option value="5">멤버쉽</option>
                    <option value="6">회원등급</option>
                </select>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">쿠폰명</div>
        <div class="flex-1">
            <input type="text" class="form-control" name="names" value="신규가입 쿠폰">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">사용대상</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <div class="flex flex-wrap items-center gap-6">
                    <div class="form-check">
                        <input id="coupon_3_1" onclick="use_target_control(0)" class="form-check-input" type="radio" name="use_target" value="0" checked>
                        <label class="form-check-label" for="coupon_3_1">전체사용</label>
                    </div>
                    <div class="form-check">
                        <input id="coupon_3_2" onclick="use_target_control(1)" class="form-check-input" type="radio" name="use_target" value="1">
                        <label class="form-check-label" for="coupon_3_2">국가/지역/상품지정</label>
                    </div>
                </div>
                <div>
                    <!-- 국가/지역/상품지정 선택시 버튼표기 -->
                    <button type="button" class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#exhibit_prod_select-modal"><i data-lucide="plus" class="w-4 h-4"></i> 대상 추가하기</button>
                </div>
            </div>
            <div class="overflow-y-auto max-h-96 p-4 mt-3 bg-slate-100 rounded" id="coupon_3_22">
                <div class="flex flex-col md:flex-row gap-3 mb-2">
                    <div class="w-full md:w-20 pt-2 font-semibold">지역</div>
                    <div class="flex-1">
                        <div class="inline-flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                            <div>아시아 > 일본 > 추부</div>
                            <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-3 mb-2">
                    <div class="w-full md:w-20 pt-2 font-semibold">기획전</div>
                    <div class="flex-1">
                        <div class="inline-flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                            <div>일본아코디아</div>
                            <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-3 mb-2">
                    <div class="w-full md:w-20 pt-2 font-semibold">테마</div>
                    <div class="flex-1">
                        <div class="inline-flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                            <div>#아코디아</div>
                            <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-3 mb-2">
                    <div class="w-full md:w-20 pt-2 font-semibold">상품</div>
                    <div class="flex-1 flex flex-wrap items-center gap-2">
                        <div class="overflow-hidden relative flex items-center gap-2 border border-slate-300 bg-white rounded-lg">
                            <img class="w-40" src="./dist/images/sample_img.jpg" alt="">
                            <button class="z-10 absolute right-1 top-1 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                            <!-- 이미지로만 사용시 아래 div 제거 -->
                            <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                <div class="text-xs">태국 • 방콕</div>
                                <div class="flex items-center justify-between">
                                    <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                    <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                </div>
                                <div>KRW 199,000 ~ <span class="text-xs line-through">299,000</span></div>
                            </div>
                        </div>
                        <div class="overflow-hidden relative flex items-center gap-2 border border-slate-300 bg-white rounded-lg">
                            <img class="w-40" src="./dist/images/sample_img.jpg" alt="">
                            <button class="z-10 absolute right-1 top-1 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                            <!-- 이미지로만 사용시 아래 div 제거 -->
                            <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                <div class="text-xs">태국 • 방콕</div>
                                <div class="flex items-center justify-between">
                                    <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                    <!-- 하트 색 채우기 fill- -->
                                    <button><i data-lucide="heart" class="w-4 h-4 text-red-500 fill-red-500"></i></button>
                                </div>
                                <div>KRW 199,000 ~ <span class="text-xs line-through">299,000</span></div>
                            </div>
                        </div>
                    </div>
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
                        <input id="coupon_4_1" onclick="use_channel_control(0)" class="form-check-input" type="radio" name="use_channel" value="0" checked>
                        <label class="form-check-label" for="coupon_4_1">전체사용</label>
                    </div>
                    <div class="form-check">
                        <input id="coupon_4_2" onclick="use_channel_control(1)" class="form-check-input" type="radio" name="use_channel" value="1">
                        <label class="form-check-label" for="coupon_4_2">채널지정</label>
                    </div>
                </div>
                <div>
                    <!-- 채널지정 선택시 버튼표기 -->
                    <button type="button" class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#coupon_channel_add-modal"><i data-lucide="plus" class="w-4 h-4"></i> 채널 추가하기</button>
                </div>
            </div>
            <div class="overflow-y-auto max-h-36 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded" id="coupon_4_22">
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
        <div class="w-full md:w-40 pt-2 font-semibold">사용방법</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="coupon_5_1" class="form-check-input" type="radio" name="use_type" value="0" checked>
                <label class="form-check-label" for="coupon_5_1">쿠폰지급</label>
            </div>
            <div class="form-check flex-wrap">
                <input id="coupon_5_2" class="form-check-input" type="radio" name="use_type" value="1">
                <label class="form-check-label" for="coupon_5_2">쿠폰번호배포</label>
                <!-- 쿠폰번호배포 선택시 표기 -->
                <div class="flex items-center gap-1 ml-4">
                    <input type="text" class="form-control form-control-sm w-full md:w-40" name="coupon_number">
                    <button type="button" class="btn btn-sm btn-primary-soft" id="btn_duplication">중복체크</button>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">적용언어</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="coupon_ko" class="form-check-input lang" type="checkbox" name="lang_type" value="ko">
                <label class="form-check-label" for="coupon_ko">한국어</label>
            </div>
            <div class="form-check">
                <input id="coupon_en" class="form-check-input lang" type="checkbox" name="lang_type" value="en">
                <label class="form-check-label" for="coupon_en">영어</label>
            </div>
            <div class="form-check">
                <input id="coupon_sp" class="form-check-input lang" type="checkbox" name="lang_type" value="sp">
                <label class="form-check-label" for="coupon_sp">스페인어</label>
            </div>
            <div class="form-check">
                <input id="coupon_jp" class="form-check-input lang" type="checkbox" name="lang_type" value="jp">
                <label class="form-check-label" for="coupon_jp">일본어</label>
            </div>
            <div class="form-check">
                <input id="coupon_cn" class="form-check-input lang" type="checkbox" name="lang_type" value="cn">
                <label class="form-check-label" for="coupon_cn">중국어</label>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">쿠폰설정</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                <li id="coupon-1-tab" class="nav-item" role="presentation">
                    <button id="btn_coupon-1-tab" class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-1" type="button" role="tab" aria-controls="coupon-tab-1" aria-selected="false" disabled>한국어</button>
                </li>
                <li id="coupon-2-tab" class="nav-item" role="presentation">
                    <button id="btn_coupon-2-tab" class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-2" type="button" role="tab" aria-controls="coupon-tab-2" aria-selected="false" disabled>영어</button>
                </li>
                <li id="coupon-3-tab" class="nav-item" role="presentation">
                    <button id="btn_coupon-3-tab" class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-3" type="button" role="tab" aria-controls="coupon-tab-3" aria-selected="false" disabled>스페인어</button>
                </li>
                <li id="coupon-4-tab" class="nav-item" role="presentation">
                    <button id="btn_coupon-4-tab" class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-4" type="button" role="tab" aria-controls="coupon-tab-4" aria-selected="false" disabled>일본어</button>
                </li>
                <li id="coupon-5-tab" class="nav-item" role="presentation">
                    <button id="btn_coupon-5-tab" class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#coupon-tab-5" type="button" role="tab" aria-controls="coupon-tab-5" aria-selected="false" disabled>중국어</button>
                </li>
            </ul>
            <div class="tab-content w-full border-b-2 border-primary">
                <!-- 한국어 -->
                <div id="coupon-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="coupon-1-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">쿠폰명</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="ko신규가입 쿠폰" name="ko_coupon_name">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" id="ko_coupon_kind0">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32" name="ko_discount_member">
                                    <option value="1">1인</option>
                                    <option value="2">2인</option>
                                    <option value="3">3인</option>
                                    <option value="4">4인</option>
                                    <option value="5">5인</option>
                                    <option value="6">6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="ko_discount_price0">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="ko_coupon_kind1">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" name="ko_discount_price1">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="ko_coupon_kind2">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_1_1" class="form-check-input" type="radio" value="0" name="ko_discount_kind">
                                <label class="form-check-label" for="coupon_2_1_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" name="ko_discount_price2-1">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_1_2" class="form-check-input" type="radio" value="1" name="ko_discount_kind">
                                <label class="form-check-label" for="coupon_2_1_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" name="ko_discount_price2-2">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2" name="ko_is_decimal">
                                    <option value="0">반올림</option>
                                    <option value="1">올림</option>
                                    <option value="2">버림</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="ko_min_price">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" name="ko_max_discount_price">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- 영어 -->
                <div id="coupon-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-2-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">쿠폰명</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="신규가입 쿠폰" name="en_coupon_name">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" id="en_coupon_kind0">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32" name="en_discount_member">
                                    <option value="1">1인</option>
                                    <option value="2">2인</option>
                                    <option value="3">3인</option>
                                    <option value="4">4인</option>
                                    <option value="5">5인</option>
                                    <option value="6">6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28"  name="en_discount_price0">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="en_coupon_kind1">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28"  name="en_discount_price1">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="en_coupon_kind2">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_2_1" class="form-check-input" type="radio" name="en_discount_kind">
                                <label class="form-check-label" for="coupon_2_2_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_2_2" class="form-check-input" type="radio" name="en_discount_kind">
                                <label class="form-check-label" for="coupon_2_2_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2" name="en_is_decimal">
                                    <option value="0">반올림</option>
                                    <option value="1">올림</option>
                                    <option value="2">버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="en_min_price">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" name="en_max_discount_price">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="coupon-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-3-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">쿠폰명</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="sp신규가입 쿠폰" name="sp_coupon_name">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" id="sp_coupon_kind0">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32" name="sp_discount_member">
                                    <option value="1">1인</option>
                                    <option value="2">2인</option>
                                    <option value="3">3인</option>
                                    <option value="4">4인</option>
                                    <option value="5">5인</option>
                                    <option value="6">6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="sp_discount_price0">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="sp_coupon_kind1">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" name="sp_discount_price1">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="sp_coupon_kind2">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_3_1" class="form-check-input" type="radio" name="sp_discount_kind">
                                <label class="form-check-label" for="coupon_2_3_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_3_2" class="form-check-input" type="radio" name="sp_discount_kind">
                                <label class="form-check-label" for="coupon_2_3_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2" name="sp_is_decimal">
                                    <option value="0">반올림</option>
                                    <option value="1">올림</option>
                                    <option value="2">버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="sp_min_price">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" name="sp_max_discount_price">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="coupon-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-4-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">쿠폰명</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="jp신규가입 쿠폰" name="jp_coupon_name">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" id="jp_coupon_kind0">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32" name="jp_discount_member">
                                    <option value="1">1인</option>
                                    <option value="2">2인</option>
                                    <option value="3">3인</option>
                                    <option value="4">4인</option>
                                    <option value="5">5인</option>
                                    <option value="6">6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="jp_discount_price0">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="jp_coupon_kind1">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" name="jp_discount_price1">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="jp_coupon_kind2">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_4_1" class="form-check-input" type="radio" name="jp_discount_kind">
                                <label class="form-check-label" for="coupon_2_4_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_4_2" class="form-check-input" type="radio" name="jp_discount_kind">
                                <label class="form-check-label" for="coupon_2_4_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2" name="jp_is_decimal">
                                    <option value="0">반올림</option>
                                    <option value="1">올림</option>
                                    <option value="2">버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="jp_min_price">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" name="jp_max_discount_price">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="coupon-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-5-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">쿠폰명</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="cn신규가입 쿠폰" name="cn_coupon_name">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" id="cn_coupon_kind0">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32" name="cn_discount_member">
                                    <option value="1">1인</option>
                                    <option value="2">2인</option>
                                    <option value="3">3인</option>
                                    <option value="4">4인</option>
                                    <option value="5">5인</option>
                                    <option value="6">6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="cn_discount_price0">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="cn_coupon_kind1">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" name="cn_discount_price1">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3" id="cn_coupon_kind2">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_5_1" class="form-check-input" type="radio" name="cn_discount_kind">
                                <label class="form-check-label" for="coupon_2_5_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_5_2" class="form-check-input" type="radio" name="cn_discount_kind">
                                <label class="form-check-label" for="coupon_2_5_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2" name="cn_is_decimal">
                                    <option value="0">반올림</option>
                                    <option value="1">올림</option>
                                    <option value="2">버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" name="cn_min_price">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" name="cn_max_discount_price">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">발급수량</div>
            <div class="flex-1 flex items-center gap-2">
                <input type="text" class="form-control w-40" name="count_limit">
                <div class="form-check">
                    <input id="coupon_6_1" class="form-check-input" type="checkbox" name="is_count" value="1">
                    <label class="form-check-label" for="coupon_6_1">무제한</label>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">발급기간</div>
            <div class="flex-1">
                <div class="relative w-full md:w-64">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                    </div>
                    <input type="text" id="issue_date" class="datepicker form-control pl-12 required" name="issue_date" placeholder="발급기간을 선택해주세요">
                </div>
            </div>
        </div>

	
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">유효기간</div>
        <div class="flex-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" id="valid_date" class="datepicker form-control pl-12 required" name="valid_date" placeholder="유효기간을 선택해주세요">
            </div>
        </div>
    </div>
</div>


<div class="intro-y flex w-full items-center justify-end gap-2 mt-4" id="coupon_reg_bottom">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 쿠폰등록</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4"></i> 등록취소</button>
</div>
</form>


{#bottom}

<script>
    /* 수령일 */
    const issue_date = new Litepicker({
        element: document.querySelector('#issue_date'),
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
        /*startDate : new Date(new Date().setDate(new Date().getDate() - 7)),*/
        endDate : new Date(),
        maxDate : new Date(),
    })

    /* 사용일 */
    const valid_date = new Litepicker({
        element: document.querySelector('#valid_date'),
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
        /*startDate : new Date(new Date().setDate(new Date().getDate() - 7)),*/
        endDate : new Date(),
        maxDate : new Date(),
    })
</script>
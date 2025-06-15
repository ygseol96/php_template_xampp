{#head}
{#header}
<div class="intro-y flex flex-wrap items-center justify-between gap-2">
    <div>
        <div class="flex items-center mt-4">
            <a href="/sys/member/member_coupon_list.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 쿠폰 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">쿠폰 상세</h2>
        </div>
    </div>
    <div class="flex flex-wrap items-center gap-2 ml-auto">
        <button class="btn bg-purple-800 text-white">쿠폰 재발행</button>
        <button class="btn btn-dark"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 쿠폰삭제</button>
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 쿠폰저장</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 저장취소</button>
    </div>
</div>

<!-- detail -->
<div class="intro-y box p-5 mt-4">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">쿠폰종류</div>
            <div class="flex-1">
                <input type="text" class="form-control w-52" value="할인권" readonly>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">쿠폰구분</div>
            <div class="flex-1">
                <select class="form-select w-52">
                    <option>전체</option>
                    <option>회원가입</option>
                    <option>상품구매</option>
                    <option>이벤트</option>
                    <option>기타</option>
                    <option>멤버쉽</option>
                    <option>회원등급</option>
                </select>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-10">
        <div class="w-full md:w-40 pt-2 font-semibold">쿠폰명</div>
        <div class="flex-1">
            <input type="text" class="form-control" value="신규가입 쿠폰">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">적용언어</div>
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
        <div class="w-full md:w-40 pt-2 font-semibold">쿠폰설정</div>
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
                        <div class="w-full md:w-20 pt-2 font-semibold">쿠폰명</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="신규가입 쿠폰">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32">
                                    <option>1인</option>
                                    <option>2인</option>
                                    <option>3인</option>
                                    <option>4인</option>
                                    <option>5인</option>
                                    <option>6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="100,000">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" value="100,000">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_1_1" class="form-check-input" type="radio" name="coupon_2_1">
                                <label class="form-check-label" for="coupon_2_1_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_1_2" class="form-check-input" type="radio" name="coupon_2_1">
                                <label class="form-check-label" for="coupon_2_1_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2">
                                    <option>반올림</option>
                                    <option>올림</option>
                                    <option>버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="50,000">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" value="50,000">
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
                            <input type="text" class="form-control" value="신규가입 쿠폰">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32">
                                    <option>1인</option>
                                    <option>2인</option>
                                    <option>3인</option>
                                    <option>4인</option>
                                    <option>5인</option>
                                    <option>6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="100,000">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" value="100,000">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_2_1" class="form-check-input" type="radio" name="coupon_2_2">
                                <label class="form-check-label" for="coupon_2_2_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_2_2" class="form-check-input" type="radio" name="coupon_2_2">
                                <label class="form-check-label" for="coupon_2_2_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2">
                                    <option>반올림</option>
                                    <option>올림</option>
                                    <option>버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="50,000">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" value="50,000">
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
                            <input type="text" class="form-control" value="신규가입 쿠폰">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32">
                                    <option>1인</option>
                                    <option>2인</option>
                                    <option>3인</option>
                                    <option>4인</option>
                                    <option>5인</option>
                                    <option>6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="100,000">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" value="100,000">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_3_1" class="form-check-input" type="radio" name="coupon_2_3">
                                <label class="form-check-label" for="coupon_2_3_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_3_2" class="form-check-input" type="radio" name="coupon_2_3">
                                <label class="form-check-label" for="coupon_2_3_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2">
                                    <option>반올림</option>
                                    <option>올림</option>
                                    <option>버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="50,000">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" value="50,000">
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
                            <input type="text" class="form-control" value="신규가입 쿠폰">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32">
                                    <option>1인</option>
                                    <option>2인</option>
                                    <option>3인</option>
                                    <option>4인</option>
                                    <option>5인</option>
                                    <option>6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="100,000">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" value="100,000">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_4_1" class="form-check-input" type="radio" name="coupon_2_4">
                                <label class="form-check-label" for="coupon_2_4_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_4_2" class="form-check-input" type="radio" name="coupon_2_4">
                                <label class="form-check-label" for="coupon_2_4_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2">
                                    <option>반올림</option>
                                    <option>올림</option>
                                    <option>버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="50,000">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" value="50,000">
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
                            <input type="text" class="form-control" value="신규가입 쿠폰">
                        </div>
                    </div>

                    <!-- 예약권일때 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">인원수</div>
                            <div class="flex-1">
                                <select class="form-select w-full md:w-32">
                                    <option>1인</option>
                                    <option>2인</option>
                                    <option>3인</option>
                                    <option>4인</option>
                                    <option>5인</option>
                                    <option>6인</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="100,000">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>

                    <!-- 금액권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">1인한도</div>
                        <div class="flex-1 flex items-center gap-2">
                            <input type="text" class="form-control w-28" value="100,000">
                            <span>JPY</span>
                        </div>
                    </div>

                    <!-- 할인권일때 -->
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">할인구분</div>
                        <div class="flex-1 flex flex-wrap items-center gap-7">
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_5_1" class="form-check-input" type="radio" name="coupon_2_5">
                                <label class="form-check-label" for="coupon_2_5_1">정액할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                            </div>
                            <div class="form-check flex-wrap gap-1">
                                <input id="coupon_2_5_2" class="form-check-input" type="radio" name="coupon_2_5">
                                <label class="form-check-label" for="coupon_2_5_2">정률할인</label>
                                <input type="text" class="form-control w-28 ml-2 mr-1" value="50,000">
                                <span>JPY</span>
                                <select class="form-select w-32 ml-2">
                                    <option>반올림</option>
                                    <option>올림</option>
                                    <option>버림</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">최소결제</div>
                            <div class="flex-1 flex items-center gap-2">
                                <input type="text" class="form-control w-28" value="50,000">
                                <span>JPY</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 mb-3">
                            <div class="w-full md:w-20 pt-2 font-semibold">할인한도</div>
                            <div class="flex-1 flex items-center gap-2">
                                <!-- 정액할인일때 한도 비활성화 -->
                                <input type="text" class="form-control w-28" value="50,000">
                                <span>JPY</span>
                            </div>
                        </div>
                    </div>
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
                <input type="text" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">발급수량</div>
            <div class="flex-1">
                <input type="text" class="form-control w-52" value="100,000">
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">발급기간</div>
            <div class="flex-1">
                <div class="relative w-full md:w-64">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                    </div>
                    <input type="text" class="datepicker form-control pl-12">
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">쿠폰상태</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="coupon_3_1" class="form-check-input" type="radio" name="coupon_3">
                <label class="form-check-label" for="coupon_3_1">정상</label>
            </div>
            <div class="form-check">
                <input id="coupon_3_2" class="form-check-input" type="radio" name="coupon_3">
                <label class="form-check-label" for="coupon_3_2">발행정지</label>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">등록</div>
            <div class="flex-1">
                <input type="text" class="form-control w-full md:w-2/3" value="홍길동 / 2024.01.01 12:34:56" readonly>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">수정</div>
            <div class="flex-1">
                <input type="text" class="form-control w-full md:w-2/3" value="홍길동 / 2024.01.01 12:34:56" readonly>
            </div>
        </div>
    </div>

</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 쿠폰저장</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 저장취소</button>
</div>
{#bottom}
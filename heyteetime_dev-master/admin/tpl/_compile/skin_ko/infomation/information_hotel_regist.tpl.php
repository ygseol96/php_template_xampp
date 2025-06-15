<?php /* Template_ 2.2.8 2024/06/05 14:18:38 C:\xampp\heytee_dev\admin\_global\skin_ko\infomation\information_hotel_regist.tpl 000027381 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between">
    <div>
        <div class="flex items-center mt-4">
            <a href="./information_hotel_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 호텔정보 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">호텔정보 등록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <button class="btn btn-primary">저장</button>
        <button class="btn btn-danger">취소</button>
    </div>
</div>

<!-- detail -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">호텔명</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-2">
                <div class="flex items-center flex-wrap gap-1 w-1/3">
                    <input type="text" class="form-control">
                </div>
                <div class="flex items-center flex-wrap gap-1">
                    <div>호텔코드</div>
                    <input type="text" class="form-control w-40" placeholder="">
                </div>
                <div class="flex items-center flex-wrap gap-1">
                    <div>평점</div>
                    <input type="text" class="form-control w-40" placeholder="">
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">지역</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-2">
                <div class="dropdown">
                    <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">아시아</button>
                    <div class="dropdown-menu w-full">
                        <ul class="dropdown-content custom_select multi">
                            <li class="flex items-center">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_1_1" name="hotelregist_radio1">
                                <label for="hotelregist_radio_1_1" class="block w-full px-2 py-1">지역1</label>
                            </li>
                            <li class="flex items-center mt-0.5">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_1_2" name="hotelregist_radio1">
                                <label for="hotelregist_radio_1_2" class="block w-full px-2 py-1">지역2</label>
                            </li>
                            <li class="flex items-center mt-0.5">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_1_3" name="hotelregist_radio1">
                                <label for="hotelregist_radio_1_3" class="block w-full px-2 py-1">지역3</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">일본</button>
                    <div class="dropdown-menu w-full">
                        <ul class="dropdown-content custom_select multi">
                            <li class="flex items-center">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_2_1" name="hotelregist_radio2">
                                <label for="hotelregist_radio_2_1" class="block w-full px-2 py-1">지역1</label>
                            </li>
                            <li class="flex items-center mt-0.5">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_2_2" name="hotelregist_radio2">
                                <label for="hotelregist_radio_2_2" class="block w-full px-2 py-1">지역2</label>
                            </li>
                            <li class="flex items-center mt-0.5">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_2_3" name="hotelregist_radio2">
                                <label for="hotelregist_radio_2_3" class="block w-full px-2 py-1">지역3</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">큐슈</button>
                    <div class="dropdown-menu w-full">
                        <ul class="dropdown-content custom_select multi">
                            <li class="flex items-center">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_3_1" name="hotelregist_radio3">
                                <label for="hotelregist_radio_3_1" class="block w-full px-2 py-1">지역1</label>
                            </li>
                            <li class="flex items-center mt-0.5">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_3_2" name="hotelregist_radio3">
                                <label for="hotelregist_radio_3_2" class="block w-full px-2 py-1">지역2</label>
                            </li>
                            <li class="flex items-center mt-0.5">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_3_3" name="hotelregist_radio3">
                                <label for="hotelregist_radio_3_3" class="block w-full px-2 py-1">지역3</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">도쿄</button>
                    <div class="dropdown-menu w-full">
                        <ul class="dropdown-content custom_select multi">
                            <li class="flex items-center">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_4_1" name="hotelregist_radio4">
                                <label for="hotelregist_radio_4_1" class="block w-full px-2 py-1">지역1</label>
                            </li>
                            <li class="flex items-center mt-0.5">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_4_2" name="hotelregist_radio4">
                                <label for="hotelregist_radio_4_2" class="block w-full px-2 py-1">지역2</label>
                            </li>
                            <li class="flex items-center mt-0.5">
                                <input type="radio" class="form-check-input" id="hotelregist_radio_4_3" name="hotelregist_radio4">
                                <label for="hotelregist_radio_4_3" class="block w-full px-2 py-1">지역3</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center flex-wrap gap-1">
                    <div>위도</div>
                    <input type="text" class="form-control w-40" placeholder="">
                </div>
                <div class="flex items-center flex-wrap gap-1">
                    <div>경도</div>
                    <input type="text" class="form-control w-40" placeholder="">
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">연락처</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-1">
                <select class="form-select w-28">
                    <option>+82</option>
                    <option></option>
                </select>
                <input type="text" class="form-control w-40" placeholder="1234-1234-1234">
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">홈페이지</div>
        <div class="flex-1">
            <input type="text" class="form-control" placeholder="http://">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">이미지</div>
        <div class="flex-1">
            <div class="flex items-center gap-3">
                <div class="btn btn-sm btn-primary-soft">
                    <input type="file">
                </div>
            </div>
            <div class="overflow-y-auto max-h-36 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img src="/_global/skin_ko/infomation/dist/images/sample_img.jpg" class="w-full h-[80px] object-cover" alt="">
                </div>
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img src="/_global/skin_ko/infomation/dist/images/sample_img.jpg" class="w-full h-[80px] object-cover" alt="">
                </div>
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img src="/_global/skin_ko/infomation/dist/images/sample_img.jpg" class="w-full h-[80px] object-cover" alt="">
                </div>
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img src="/_global/skin_ko/infomation/dist/images/sample_img.jpg" class="w-full h-[80px] object-cover" alt="">
                </div>
                <div class="relative p-2 min-w-36 border border-slate-300 bg-white rounded-lg">
                    <button class="absolute right-1.5 top-1.5 btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    <img src="/_global/skin_ko/infomation/dist/images/sample_img.jpg" class="w-full h-[80px] object-cover" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">서비스</div>

        <div class="flex-1  gap-2 p-4 flex flex-wrap items-center bg-slate-100 rounded">
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_1" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_1">무료 WIFI</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_2" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_2">무료 24시 데스크</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_3" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_3">송영(공항)</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_4" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_4">가방보관</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_5" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_5">현금인출기</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_6" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_6">조식뷔페</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_7" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_7">커피숍</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_8" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_8">스파</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_9" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_9">수영장</label>
            </div>
            <div class="form-check flex-wrap">
                <input type="checkbox"  class="form-check-input" id="hotelinfo_check_1_10" name="hotelinfo_check1">
                <label class="form-check-label" for="hotelinfo_check_1_10">편의점</label>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">언어별</div>
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
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔명</div>
                        <div class="flex-1 flex flex-wrap gap-2">
                            <input type="text" class="form-control w-80">
                            <div class="flex items-center flex-wrap gap-1">
                                <div>호텔코드</div>
                                <input type="text" class="form-control w-40" placeholder="">
                            </div>
                            <div class="flex items-center flex-wrap gap-1">
                                <div>사용화폐</div>
                                <select name="" id="" class="form-select w-28">
                                    <option value="">JPY</option>
                                    <option value="">JPY</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">주소</div>
                        <div class="flex-1">
                            <input type="text" class="form-control w-40" placeholder="">
                        </div>
                    </div>
                </div>

                <!-- 영어 -->
                <div id="coupon-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-2-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔명</div>
                        <div class="flex-1 flex flex-wrap gap-2">
                            <input type="text" class="form-control w-80">
                            <div class="flex items-center flex-wrap gap-1">
                                <div>호텔코드</div>
                                <input type="text" class="form-control w-40" placeholder="">
                            </div>
                            <div class="flex items-center flex-wrap gap-1">
                                <div>사용화폐</div>
                                <select name="" id="" class="form-select w-28">
                                    <option value="">JPY</option>
                                    <option value="">JPY</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">주소</div>
                        <div class="flex-1">
                            <input type="text" class="form-control w-40" placeholder="">
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="coupon-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-3-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔명</div>
                        <div class="flex-1 flex flex-wrap gap-2">
                            <input type="text" class="form-control w-80">
                            <div class="flex items-center flex-wrap gap-1">
                                <div>호텔코드</div>
                                <input type="text" class="form-control w-40" placeholder="">
                            </div>
                            <div class="flex items-center flex-wrap gap-1">
                                <div>사용화폐</div>
                                <select name="" id="" class="form-select w-28">
                                    <option value="">JPY</option>
                                    <option value="">JPY</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">주소</div>
                        <div class="flex-1">
                            <input type="text" class="form-control w-40" placeholder="">
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="coupon-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-4-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔명</div>
                        <div class="flex-1 flex flex-wrap gap-2">
                            <input type="text" class="form-control w-80">
                            <div class="flex items-center flex-wrap gap-1">
                                <div>호텔코드</div>
                                <input type="text" class="form-control w-40" placeholder="">
                            </div>
                            <div class="flex items-center flex-wrap gap-1">
                                <div>사용화폐</div>
                                <select name="" id="" class="form-select w-28">
                                    <option value="">JPY</option>
                                    <option value="">JPY</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">주소</div>
                        <div class="flex-1">
                            <input type="text" class="form-control w-40" placeholder="">
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="coupon-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="coupon-5-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔명</div>
                        <div class="flex-1 flex flex-wrap gap-2">
                            <input type="text" class="form-control w-80">
                            <div class="flex items-center flex-wrap gap-1">
                                <div>호텔코드</div>
                                <input type="text" class="form-control w-40" placeholder="">
                            </div>
                            <div class="flex items-center flex-wrap gap-1">
                                <div>사용화폐</div>
                                <select name="" id="" class="form-select w-28">
                                    <option value="">JPY</option>
                                    <option value="">JPY</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">호텔설명</div>
                        <div class="flex-1">
                            <textarea class="form-control h-12"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">주소</div>
                        <div class="flex-1">
                            <input type="text" class="form-control w-40" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">사용여부</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="hotelinfo_2_1" class="form-check-input" type="radio" name="hotelinfo2">
                <label class="form-check-label" for="hotelinfo_2_1">미노출</label>
            </div>
            <div class="form-check">
                <input id="hotelinfo_2_2" class="form-check-input" type="radio" name="hotelinfo2">
                <label class="form-check-label" for="hotelinfo_2_2">노출</label>
            </div>
        </div>
    </div>
</div>

<div class="intro-y flex flex-wrap w-full items-center justify-between gap-2 mt-4">
    <div class="flex items-center gap-1 ml-auto">
        <button class="btn btn-primary">저장</button>
        <button class="btn btn-danger">취소</button>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
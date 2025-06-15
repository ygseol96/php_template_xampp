<?php /* Template_ 2.2.8 2024/04/22 13:59:07 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\product\prod_teetime_detail.tpl 000045660 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between">
    <div>
        <div class="flex items-center mt-4">
            <a href="/sys/product/prod_teetime.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 티타임 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">티타임 상세</h2>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 티타임저장</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4"></i> 저장취소</button>
    </div>
</div>

<!-- 티타임 정보 -->
<div class="intro-y box p-5 mt-3">
    <div class="flex items-center justify-between mb-2">
        <h3 class="text-lg font-bold mr-auto">티타임정보</h3>
    </div>
    <div class="flex flex-wrap items-start gap-2 p-2 border border-slate-200 rounded whitespace-nowrap">
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">지역</div>
            <div>아시아 > 일본 > 큐슈 > 도쿄</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">상품구분</div>
            <div>숙박/송영+</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">골프장</div>
            <div>도쿄 유명한 골프장<br/>(AJA0001)</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">티타임</div>
            <div>24.03.17~<br/>24.04.30</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">공급가</div>
            <div>100,000~</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">판매가</div>
            <div>110,000~</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">사용여부</div>
            <div>사용</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">수정</div>
            <div>홍길동<br/>2024.03.31</div>
        </div>
    </div>
</div>

<!-- 폼 -->
<div class="intro-y box p-5 mt-3">
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">지역</div>
        <div class="flex-1 flex flex-wrap gap-1">
            <input type="text" class="form-control w-24" value="아시아">
            <input type="text" class="form-control w-24" value="일본">
            <input type="text" class="form-control w-24" value="큐슈">
            <input type="text" class="form-control w-24" value="도쿄">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">상품</div>
        <div class="flex-1">
            <input type="text" class="form-control w-40" value="숙박/송영+">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">티타임</div>
        <div class="flex-1 flex flex-wrap gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" class="datepicker form-control pl-12" value="2024.03.17 ~ 2024.03.17">
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">이미지/영상</div>
        <div class="flex-1 grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="col-span-1 lg:col-span-2">
                <div>이미지</div>
                <div class="relative img_slide px-6 mt-2">
                    <div class="img_slide_box overflow-hidden">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div>
                <div>영상</div>
                <div class="relative video_slide px-6 mt-2">
                    <div class="video_slide_box overflow-hidden">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <video muted="muted" controls>
                                    <source src="/_global/dist/images/video01.mp4" type="video/mp4">
                                </video>
                            </li>
                            <li class="swiper-slide">
                                <video muted="muted" controls>
                                    <source src="/_global/dist/images/video01.mp4" type="video/mp4">
                                </video>
                            </li>
                            <li class="swiper-slide">
                                <video muted="muted" controls>
                                    <source src="/_global/dist/images/video01.mp4" type="video/mp4">
                                </video>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">코스</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="flex items-center gap-2">
                <span>Hole</span>
                <input type="text" class="form-control w-24" value="9">
            </div>
            <div class="flex items-center gap-2">
                <span>Par</span>
                <input type="text" class="form-control w-24" value="9">
            </div>
            <div class="flex items-center gap-2">
                <span>전장</span>
                <input type="text" class="form-control w-24" value="7110">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">위도/경도</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="flex items-center gap-2">
                <span>위도</span>
                <input type="text" class="form-control w-40" value="000.000000">
            </div>
            <div class="flex items-center gap-2">
                <span>경도</span>
                <input type="text" class="form-control w-40" value="000.000000">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">연락처</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="flex items-center gap-2">
                <span>홈페이지</span>
                <input type="text" class="form-control w-full md:w-80" value="http://www.golfgolfgolfgolfgolfgolf.com">
            </div>
            <div class="flex items-center gap-2">
                <span>이메일</span>
                <input type="text" class="form-control w-48" value="hj.yoo@aglgw.com">
            </div>
            <div class="flex items-center gap-2">
                <span>전화</span>
                <input type="text" class="form-control w-48" value="+82-1234-5678-1234">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">적용언어</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="teetime_1_1" class="form-check-input" type="checkbox" name="teetime_1">
                    <label class="form-check-label" for="teetime_1_1">한국어</label>
                </div>
                <div class="form-check">
                    <input id="teetime_1_2" class="form-check-input" type="checkbox" name="teetime_1">
                    <label class="form-check-label" for="teetime_1_2">영어</label>
                </div>
                <div class="form-check">
                    <input id="teetime_1_3" class="form-check-input" type="checkbox" name="teetime_1">
                    <label class="form-check-label" for="teetime_1_3">스페인어</label>
                </div>
                <div class="form-check">
                    <input id="teetime_1_4" class="form-check-input" type="checkbox" name="teetime_1">
                    <label class="form-check-label" for="teetime_1_4">일본어</label>
                </div>
                <div class="form-check">
                    <input id="teetime_1_5" class="form-check-input" type="checkbox" name="teetime_1">
                    <label class="form-check-label" for="teetime_1_5">중국어</label>
                </div>
            </div>
            <div class="mt-2 text-xs text-slate-600">* 사용자 언어에 해당하는 정보가 없을 경우 영어가 표시됨</div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">골프장</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                <li id="teetime-1-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#teetime-tab-1" type="button" role="tab" aria-controls="teetime-tab-1" aria-selected="true">한국어</button>
                </li>
                <li id="teetime-2-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#teetime-tab-2" type="button" role="tab" aria-controls="teetime-tab-2" aria-selected="false">영어</button>
                </li>
                <li id="teetime-3-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#teetime-tab-3" type="button" role="tab" aria-controls="teetime-tab-3" aria-selected="false" disabled>스페인어</button>
                </li>
                <li id="teetime-4-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#teetime-tab-4" type="button" role="tab" aria-controls="teetime-tab-4" aria-selected="false">일본어</button>
                </li>
                <li id="teetime-5-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#teetime-tab-5" type="button" role="tab" aria-controls="teetime-tab-5" aria-selected="false">중국어</button>
                </li>
            </ul>
            <div class="tab-content w-full border-b-2 border-primary">
                <!-- 한국어 -->
                <div id="teetime-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="teetime-1-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">골프장명*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">골프장소개*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주소*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">시설*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-24 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">공항거리*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">필수사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">수상정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- 영어 -->
                <div id="teetime-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="teetime-2-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 1t-2 font-medium">골프장명*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">골프장소개*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주소*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">시설*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-24 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">공항거리*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">필수사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">수상정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="teetime-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="teetime-3-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 1t-2 font-medium">골프장명*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">골프장소개*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주소*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">시설*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-24 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">공항거리*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">필수사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">수상정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="teetime-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="teetime-4-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 1t-2 font-medium">골프장명*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">골프장소개*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주소*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">시설*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-24 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">공항거리*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">필수사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">수상정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="teetime-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="teetime-5-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 1t-2 font-medium">골프장명*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">골프장소개*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주소*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">시설*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-24 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">공항거리*</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">필수사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함사항*</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">수상정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-20 resize-none"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="shrink-0 w-full md:w-40 pt-2 font-semibold">Ratio 설정</div>
        <div class="flex-1 w-full md:w-calc-40">
            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#coupon_channel_add-modal">채널 추가</button>
            <div class="overflow-x-auto">
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th class="whitespace-nowrap">채널명</th>
                        <th class="whitespace-nowrap">평일</th>
                        <th class="whitespace-nowrap">주말</th>
                        <th class="whitespace-nowrap">야간</th>
                        <th class="whitespace-nowrap">T-BGM</th>
                        <th class="whitespace-nowrap">임직원</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" class="form-control w-24"></td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn p-1.5 btn-danger-soft rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                            <input type="text" class="form-control w-24">
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn p-1.5 btn-danger-soft rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                            <input type="text" class="form-control w-24">
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">Tiger 마일리지</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div>
                <div class="mb-1">평일</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
            <div>
                <div class="mb-1">주말</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
            <div>
                <div class="mb-1">야간</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
            <div>
                <div class="mb-1">T-BGM</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
            <div>
                <div class="mb-1">임직원</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">사용여부</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="teetime_2_1" class="form-check-input" type="radio" name="teetime_2">
                <label class="form-check-label" for="teetime_2_1">사용</label>
            </div>
            <div class="form-check">
                <input id="teetime_2_2" class="form-check-input" type="radio" name="teetime_2">
                <label class="form-check-label" for="teetime_2_2">미사용</label>
            </div>
        </div>
    </div>

</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 티타임저장</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 저장취소</button>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    var imgSwiper = new Swiper(".img_slide_box", {
        slidesPerView:2,
        spaceBetween: 10,
        observer:true,
        observeParents:true,
        navigation: {
            nextEl: ".img_slide .swiper-button-next",
            prevEl: ".img_slide .swiper-button-prev",
        },
        breakpoints: {
            1400: {
                slidesPerView: 4,
            },
            767: {
                slidesPerView: 3,
            },
        }

    });
    var videoSwiper = new Swiper(".video_slide_box", {
        slidesPerView:2,
        spaceBetween: 10,
        observer:true,
        observeParents:true,
        navigation: {
            nextEl: ".video_slide .swiper-button-next",
            prevEl: ".video_slide .swiper-button-prev",
        },

    });
</script>
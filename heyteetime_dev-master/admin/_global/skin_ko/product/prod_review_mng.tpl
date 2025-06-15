{#head}
{#header}
<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">여행후기 목록</h2>
</div>

<!-- 필터 -->
<div class="intro-y box p-5 flex flex-wrap items-end gap-2 mt-3">
    <div>
        <div class="mb-1 text-slate-500 font-medium">등록일</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">지역</div>
        <div class="flex flex-wrap items-center gap-1">
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">대륙</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select multi">
                        <li class="flex items-center">
                            <input type="radio" class="form-check-input" class="form-check-input" id="review_check_1_1" name="review_check">
                            <label for="review_check_1_1" class="block w-full px-2 py-1">대륙</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="review_check_1_2" name="review_check">
                            <label for="review_check_1_2" class="block w-full px-2 py-1">미주</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="review_check_1_3" name="review_check">
                            <label for="review_check_1_3" class="block w-full px-2 py-1">유럽</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="radio" class="form-check-input" id="review_check_1_4" name="review_check">
                            <label for="review_check_1_4" class="block w-full px-2 py-1">아시아</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">국가</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="checkbox" class="form-check-input" id="review_check_2_1" name="review_check_2">
                            <label for="review_check_2_1" class="block w-full px-2 py-1">국가</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="review_check_2_2" name="review_check_2">
                            <label for="review_check_2_2" class="block w-full px-2 py-1">대한민국</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="review_check_2_3" name="review_check_2">
                            <label for="review_check_2_3" class="block w-full px-2 py-1">일본</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="review_check_2_4" name="review_check_2">
                            <label for="review_check_2_4" class="block w-full px-2 py-1">중국</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">지역</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="checkbox" class="form-check-input" id="review_check_3_1" name="review_check_3">
                            <label for="review_check_3_1" class="block w-full px-2 py-1">큐슈</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="review_check_3_2" name="review_check_3">
                            <label for="review_check_3_2" class="block w-full px-2 py-1">후쿠오카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="review_check_3_3" name="review_check_3">
                            <label for="review_check_3_3" class="block w-full px-2 py-1">간사이</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">도시</button>
                <div class="dropdown-menu w-full">
                    <ul class="dropdown-content custom_select">
                        <li class="flex items-center">
                            <input type="checkbox" class="form-check-input" id="review_check_4_1" name="review_check_4">
                            <label for="review_check_4_1" class="block w-full px-2 py-1">도쿄</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="review_check_4_2" name="review_check_4">
                            <label for="review_check_4_2" class="block w-full px-2 py-1">오사카</label>
                        </li>
                        <li class="flex items-center mt-0.5">
                            <input type="checkbox" class="form-check-input" id="review_check_4_3" name="review_check_4">
                            <label for="review_check_4_3" class="block w-full px-2 py-1">나라</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상품구분</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-32 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="review_check_5_1" name="review_check_5">
                        <label for="review_check_5_1" class="block w-full px-2 py-1">전체</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_5_2" name="review_check_5">
                        <label for="review_check_5_2" class="block w-full px-2 py-1">티타임</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_5_3" name="review_check_5">
                        <label for="review_check_5_3" class="block w-full px-2 py-1">숙박+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_5_4" name="review_check_5">
                        <label for="review_check_5_4" class="block w-full px-2 py-1">송영+</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_5_5" name="review_check_5">
                        <label for="review_check_5_5" class="block w-full px-2 py-1">숙박/송영+</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">평점</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="review_check_6_1" name="review_check_6">
                        <label for="review_check_6_1" class="block w-full px-2 py-1">5</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_6_2" name="review_check_6">
                        <label for="review_check_6_2" class="block w-full px-2 py-1">4~5</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_6_3" name="review_check_6">
                        <label for="review_check_6_3" class="block w-full px-2 py-1">3~4</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_6_4" name="review_check_6">
                        <label for="review_check_6_4" class="block w-full px-2 py-1">2~3</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_6_5" name="review_check_6">
                        <label for="review_check_6_5" class="block w-full px-2 py-1">1~2</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">키워드</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-32 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="checkbox" class="form-check-input" id="review_check_7_1" name="review_check_7">
                        <label for="review_check_7_1" class="block w-full px-2 py-1">#가나다</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_7_2" name="review_check_7">
                        <label for="review_check_7_2" class="block w-full px-2 py-1">#라마바</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_7_3" name="review_check_7">
                        <label for="review_check_7_3" class="block w-full px-2 py-1">#사아자</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_7_4" name="review_check_7">
                        <label for="review_check_7_4" class="block w-full px-2 py-1">#차카타</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="checkbox" class="form-check-input" id="review_check_7_5" name="review_check_7">
                        <label for="review_check_7_5" class="block w-full px-2 py-1">#파하</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">골프장명/코드</div>
        <input type="text" class="form-control">
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">상태</div>
        <div class="dropdown">
            <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">전체</button>
            <div class="dropdown-menu w-full">
                <ul class="dropdown-content custom_select">
                    <li class="flex items-center">
                        <input type="radio" class="form-check-input" id="review_check_8_1" name="review_check_8">
                        <label for="review_check_8_1" class="block w-full px-2 py-1">신고</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="review_check_8_2" name="review_check_8">
                        <label for="review_check_8_2" class="block w-full px-2 py-1">노출(정상)</label>
                    </li>
                    <li class="flex items-center mt-0.5">
                        <input type="radio" class="form-check-input" id="review_check_8_3" name="review_check_8">
                        <label for="review_check_8_3" class="block w-full px-2 py-1">미노출</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="mb-1 text-slate-500 font-medium">작성자 ID, 성명, 에디터명 후기</div>
        <input type="text" class="form-control w-36">
        <input type="text" class="form-control w-36">
    </div>
    <button class="btn btn-primary-soft">검색하기</button>
</div>

<div class="intro-y box p-5 mt-5">
    <!-- 테이블 -->
    <div class="flex flex-wrap gap-2 items-center justify-between">
        <div>총 000건</div>
        <div class="flex flex-wrap items-center gap-2">
            <button class="btn btn-primary w-20">노출</button>
            <button class="btn btn-pending w-20">미노출</button>
            <div class="dropdown w-40 sm:w-auto">
                <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV </a>
                        </li>
                        <li>
                            <a id="tabulator-export-json" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON </a>
                        </li>
                        <li>
                            <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX </a>
                        </li>
                        <li>
                            <a id="tabulator-export-html" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <button class="btn bg-emerald-600 border border-emerald-600 text-white"><img src="./dist/images/heyteetime/excel_icon.svg" class="mr-1">엑셀 다운로드</button> -->
        </div>
    </div>

    <!-- 테이블 -->
    <div class="overflow-x-auto mt-3">
        <div id="tabulator" class="table-report table-report--tabulator"></div>
    </div>
</div>

<!-- 이미지 상세 모달 -->
<div id="img_detail-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">다낭 호이아나쇼어스 뉴월드</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i>닫기</button>
            </div>
            <div class="modal-body p-3 lg:p-5 text-center">
                <div class="img_swiper overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                    </ul>
                </div>
                <div class="thumb_swiper mt-3 overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="./dist/images/heyteetime/sample_img2.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 영상 상세 모달 -->
<div id="video_detail-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">다낭 호이아나쇼어스 뉴월드</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i>닫기</button>
            </div>
            <div class="modal-body p-3 lg:p-5 text-center">
                <div class="video_swiper overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <video muted="muted" controls>
                                <source src="./dist/images/video01.mp4" type="video/mp4">
                            </video>
                        </li>
                    </ul>
                </div>
                <div class="vthumb_swiper mt-3 overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide cursor-pointer">
                            <video>
                                <source src="./dist/images/video01.mp4" type="video/mp4">
                            </video>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 신고내역 모달 -->
<div id="declaration_detail-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">신고내역</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex flex-col gap-2 max-h-[300px] overflow-y-scroll">
                    <div class="flex flex-wrap items-start gap-4 mb-2">
                        <div class="shrink-0 flex flex-col py-2 font-semibold gap-2">
                            <p class="text-slate-500">24.01.01</p>
                            <p>test@test.com<br/>Jim Hwang(Mr.Jim)</p>
                        </div>
                        <div class="flex-1 py-2">
                            <p>등록된 사진에 저작권이 있다. 불량한 사진이 등록되었다. 광고성 문구가 포함되어있다 등등 등록된 사진에 저작권이 있다. 불량한 사진이 등록되었다. 광고성 문구가 포함되어있다 등등</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start gap-4 mb-2">
                        <div class="shrink-0 flex flex-col py-2 font-semibold gap-2">
                            <p class="text-slate-500">24.01.01</p>
                            <p>test@test.com<br/>Jim Hwang(Mr.Jim)</p>
                        </div>
                        <div class="flex-1 py-2">
                            <p>등록된 사진에 저작권이 있다. 불량한 사진이 등록되었다. 광고성 문구가 포함되어있다 등등 등록된 사진에 저작권이 있다. 불량한 사진이 등록되었다. 광고성 문구가 포함되어있다 등등</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start gap-4 mb-2">
                        <div class="shrink-0 flex flex-col py-2 font-semibold gap-2">
                            <p class="text-slate-500">24.01.01</p>
                            <p>test@test.com<br/>Jim Hwang(Mr.Jim)</p>
                        </div>
                        <div class="flex-1 py-2">
                            <p>등록된 사진에 저작권이 있다. 불량한 사진이 등록되었다. 광고성 문구가 포함되어있다 등등 등록된 사진에 저작권이 있다. 불량한 사진이 등록되었다. 광고성 문구가 포함되어있다 등등</p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">미노출</button>
                </div>
            </div>

        </div>
    </div>
</div>
{#bottom}
<script>
    // 데이터
    var tabledata = [
        {check:"<input type='checkbox' class='form-check-input' />", number:"1", continent:"아시아", nation:"일본", area:"큐슈", city:"도쿄", kind:"<span>숙박/<br/>송영+</span>", product:"<span>일본아코디아<br/>골프상품</span>", grade:"4.5", review:"<div class='truncate-3'>일본 아코디아 좋았다 일본 아코디아 좋았다 일본 아코디아 좋았다 일본 아코디아 좋았다 일본 아코디아 좋았다</div>", pic:'<div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#img_detail-modal"><span class="absolute left-0 right-0 top-0 bottom-0 m-auto !w-6 !h-6 flex items-center justify-center bg-primary rounded-full text-white">5</span><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></button></div>', video:'<div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#video_detail-modal"><span class="absolute left-0 right-0 top-0 bottom-0 m-auto !w-6 !h-6 flex items-center justify-center bg-primary rounded-full text-white">1</span><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></button></div>', keyword:"<div>가성비,<br/>접근성,<br/>직원의친절</div>", score:"<div>72<br/>최고9<br/>최악3</div>", zzim:"200,000", state:"노출", write:"<div>test@test.com<br/>짐황(Mr.Jim)</div>", date:"24.01.01"},
        {check:"<input type='checkbox' class='form-check-input' />", number:"2", continent:"아시아", nation:"일본", area:"큐슈", city:"도쿄", kind:"<span>숙박/<br/>송영+</span>", product:"<span>일본아코디아<br/>골프상품</span>", grade:"4.5", review:"<div class='truncate-3'>일본 아코디아 좋았다 일본 아코디아 좋았다 일본 아코디아 좋았다 일본 아코디아 좋았다 일본 아코디아 좋았다</div>", pic:'<div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#img_detail-modal"><span class="absolute left-0 right-0 top-0 bottom-0 m-auto !w-6 !h-6 flex items-center justify-center bg-primary rounded-full text-white">5</span><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></button></div>', video:'<div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#video_detail-modal"><span class="absolute left-0 right-0 top-0 bottom-0 m-auto !w-6 !h-6 flex items-center justify-center bg-primary rounded-full text-white">1</span><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></button></div>', keyword:"<div>가성비,<br/>접근성,<br/>직원의친절</div>", score:"<div>72<br/>최고9<br/>최악3</div>", zzim:"200,000", state:'<div><button class="btn btn-sm btn-danger-soft" data-tw-toggle="modal" data-tw-target="#declaration_detail-modal">신고</button></div>', write:"<div>test@test.com<br/>짐황(Mr.Jim)</div>", date:"24.01.01"},
    ]

    // 테이블 tabulator 사용
    var table = new Tabulator("#tabulator", {
        data:tabledata,
        printAsHtml: true,
        printStyled: true,
        pagination: "remote",
        paginationSize: 20,
        paginationSizeSelector: [20, 50, 100],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        responsiveLayoutCollapseUseFormatters:false,
        placeholder: "데이터가 없습니다.",

        columns:[ //define the table columns
            {title:"", field:"check", minWidth:60, formatter:"html"},
            {title:"번호", field:"number", minWidth:60, },
            {title:"대륙", field:"continent", minWidth:60},
            {title:"국가", field:"nation", minWidth:60},
            {title:"지역", field:"area", minWidth:60},
            {title:"도시", field:"city", minWidth:60},
            {title:"상품구분", field:"kind", minWidth:110, formatter:"html"},
            {title:"상품", field:"product", minWidth:110, formatter:"html"},
            {title:"평점", field:"grade", minWidth:100},
            {title:"후기", field:"review", minWidth:100, formatter:"html"},
            {title:"사진", field:"pic", minWidth:100, formatter:"html"},
            {title:"영상", field:"video", minWidth:100, formatter:"html"},
            {title:"키워드", field:"keyword", minWidth:100, formatter:"html"},
            {title:"스코어,홀", field:"score", minWidth:100, formatter:"html"},
            {title:"좋아요", field:"zzim", minWidth:100},
            {title:"상태", field:"state", minWidth:60, formatter:"html"},
            {title:"등록자", field:"write", minWidth:60, formatter:"html"},
            {title:"등록일", field:"date", minWidth:60},
        ],
    });

    // row 클릭시 detail 페이지로 링크
    table.on("rowClick", function(e, row){
        location.href='./prod_review_detail.php'
    });

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

    // 이미지슬라이드
    window.addEventListener('load',function(){
        // 이미지 슬라이드 썸네일
        var imgThumb = new Swiper(".thumb_swiper", {
            spaceBetween: 10,
            slidesPerView: 8,
            freeMode: true,
            watchSlidesProgress: true,
            observer:true,
            observeParents:true,
        });
        // 이미지 슬라이드
        var imgSwiper = new Swiper(".img_swiper", {
            spaceBetween: 10,
            observer:true,
            observeParents:true,
            thumbs: {
                swiper: imgThumb,
            },
        });

        // 영상 슬라이드 썸네일
        var videoThumb = new Swiper(".vthumb_swiper", {
            spaceBetween: 10,
            slidesPerView: 8,
            freeMode: true,
            watchSlidesProgress: true,
            observer:true,
            observeParents:true,
        });
        // 영상 슬라이드
        var videoSwiper = new Swiper(".video_swiper", {
            spaceBetween: 10,
            observer:true,
            observeParents:true,
            thumbs: {
                swiper: videoThumb,
            },
        });
    });
</script>

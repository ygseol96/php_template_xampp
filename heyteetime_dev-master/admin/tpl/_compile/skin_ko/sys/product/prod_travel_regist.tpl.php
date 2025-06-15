<?php /* Template_ 2.2.8 2024/04/22 15:46:16 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\product\prod_travel_regist.tpl 000094137 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between">
    <div>
        <div class="flex items-center mt-4">
            <a href="/sys/product/prod_travel.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 여행상품 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">여행상품 등록</h2>
        </div>
    </div>
</div>

<!-- 폼 -->
<div class="intro-y box p-5 mt-3">
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">상품명</div>
        <div class="flex-1 flex flex-wrap gap-1">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">지역</div>
        <div class="flex-1 flex flex-wrap items-center gap-1">
            <select class="form-select w-24">
                <option>대륙</option>
            </select>
            <select class="form-select w-36">
                <option>국가</option>
            </select>
            <select class="form-select w-36">
                <option>지역</option>
            </select>
            <select class="form-select w-36">
                <option>도시</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">출발일</div>
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
        <div class="w-full md:w-40 pt-2 font-semibold">여행기간</div>
        <div class="flex-1 flex items-center gap-1">
            <select class="form-select w-36">
                <option>여행일수</option>
            </select>
            <select class="form-select w-36">
                <option>숙박일수</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">노출대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="travel_1_1" class="form-check-input" type="checkbox" name="travel_1">
                <label class="form-check-label" for="travel_1_1">한국어</label>
            </div>
            <div class="form-check">
                <input id="travel_1_2" class="form-check-input" type="checkbox" name="travel_1">
                <label class="form-check-label" for="travel_1_2">영어</label>
            </div>
            <div class="form-check">
                <input id="travel_1_3" class="form-check-input" type="checkbox" name="travel_1">
                <label class="form-check-label" for="travel_1_3">스페인어</label>
            </div>
            <div class="form-check">
                <input id="travel_1_4" class="form-check-input" type="checkbox" name="travel_1">
                <label class="form-check-label" for="travel_1_4">일본어</label>
            </div>
            <div class="form-check">
                <input id="travel_1_5" class="form-check-input" type="checkbox" name="travel_1">
                <label class="form-check-label" for="travel_1_5">중국어</label>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">내용</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                <li id="travel-1-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#travel-tab-1" type="button" role="tab" aria-controls="travel-tab-1" aria-selected="true">한국어</button>
                </li>
                <li id="travel-2-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#travel-tab-2" type="button" role="tab" aria-controls="travel-tab-2" aria-selected="false">영어</button>
                </li>
                <li id="travel-3-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#travel-tab-3" type="button" role="tab" aria-controls="travel-tab-3" aria-selected="false" disabled>스페인어</button>
                </li>
                <li id="travel-4-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#travel-tab-4" type="button" role="tab" aria-controls="travel-tab-4" aria-selected="false">일본어</button>
                </li>
                <li id="travel-5-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#travel-tab-5" type="button" role="tab" aria-controls="travel-tab-5" aria-selected="false">중국어</button>
                </li>
            </ul>
            <div class="tab-content w-full border-b-2 border-primary">
                <!-- 한국어 -->
                <div id="travel-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="travel-1-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">상품명</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함 사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">취소/환불</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">옵션사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">기타정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>입국정보</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">여행일정</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span>00일차</span>
                                <div class="flex-1">
                                    <textarea class="form-control resize-none h-14"></textarea>
                                    <div class="flex flex-wrap items-center gap-3 mt-2">
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>000 골프장</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#golf_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>골프장</button>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>00 호텔</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#hotel_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>호텔</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">전체일정표</div>
                        <div class="flex-1">
                            <input type="file">
                        </div>
                    </div>
                </div>

                <!-- 영어 -->
                <div id="travel-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="travel-2-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">상품명</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함 사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">취소/환불</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">옵션사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">기타정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>입국정보</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">여행일정</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span>00일차</span>
                                <div class="flex-1">
                                    <textarea class="form-control resize-none h-14"></textarea>
                                    <div class="flex flex-wrap items-center gap-3 mt-2">
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>000 골프장</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#golf_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>골프장</button>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>00 호텔</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#hotel_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>호텔</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">전체일정표</div>
                        <div class="flex-1">
                            <input type="file">
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="travel-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="travel-3-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">상품명</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함 사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">취소/환불</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">옵션사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">기타정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>입국정보</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">여행일정</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span>00일차</span>
                                <div class="flex-1">
                                    <textarea class="form-control resize-none h-14"></textarea>
                                    <div class="flex flex-wrap items-center gap-3 mt-2">
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>000 골프장</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#golf_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>골프장</button>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>00 호텔</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#hotel_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>호텔</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">전체일정표</div>
                        <div class="flex-1">
                            <input type="file">
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="travel-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="travel-4-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">상품명</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함 사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">취소/환불</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">옵션사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">기타정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>입국정보</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">여행일정</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span>00일차</span>
                                <div class="flex-1">
                                    <textarea class="form-control resize-none h-14"></textarea>
                                    <div class="flex flex-wrap items-center gap-3 mt-2">
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>000 골프장</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#golf_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>골프장</button>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>00 호텔</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#hotel_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>호텔</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">전체일정표</div>
                        <div class="flex-1">
                            <input type="file">
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="travel-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="travel-5-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">상품명</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함 사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">취소/환불</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">옵션사항</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">기타정보</div>
                        <div class="flex-1">
                            <textarea class="form-control block h-16 resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">출국정보</div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <span>항공사</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                                <div class="flex items-center gap-2">
                                    <span>편명</span>
                                    <input type="text" class="form-control w-32">
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>입국정보</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착일시</span>
                                    <div class="relative w-full md:w-36">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                    </div>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                    <select class="form-select w-20">
                                        <option>00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 mt-2">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>출국공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span>도착공항</span>
                                    <input type="text" class="form-control w-32">
                                    <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#airport_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공항선택</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">여행일정</div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span>00일차</span>
                                <div class="flex-1">
                                    <textarea class="form-control resize-none h-14"></textarea>
                                    <div class="flex flex-wrap items-center gap-3 mt-2">
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>000 골프장</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#golf_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>골프장</button>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                                                <div>00 호텔</div>
                                                <button class="btn p-1 btn-outline-danger rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                            </div>
                                            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#hotel_select-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>호텔</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">전체일정표</div>
                        <div class="flex-1">
                            <input type="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="shrink-0 w-full md:w-40 pt-2 font-semibold">Ratio 설정</div>
        <div class="flex-1 w-full md:w-calc-40">
            <div class="overflow-x-auto">
                <table class="table table-sm">
                    <thead class="text-center">
                    <tr>
                        <th class="whitespace-nowrap"></th>
                        <th class="whitespace-nowrap">정상가</th>
                        <th class="whitespace-nowrap">판매가</th>
                        <th class="whitespace-nowrap">소매가</th>
                        <th class="whitespace-nowrap">도매가</th>
                        <th class="whitespace-nowrap">임직원가</th>
                        <th class="whitespace-nowrap">TBGM</th>
                        <th class="whitespace-nowrap">마일리지(%)</th>
                        <th class="whitespace-nowrap">환율</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>KRW</td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>USD</td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td class="text-center">10</td>
                    </tr>
                    <tr>
                        <td>JPY</td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td class="text-center">1300</td>
                    </tr>
                    <tr>
                        <td>EUR</td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td class="text-center">13</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="shrink-0 w-full md:w-40 pt-2 font-semibold">Ratio 설정</div>
        <div class="flex-1 w-full md:w-calc-40">
            <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#coupon_channel_add-modal">채널 추가</button>
            <div class="overflow-x-auto mt-2">
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th class="whitespace-nowrap">채널명</th>
                        <th class="whitespace-nowrap">KRW</th>
                        <th class="whitespace-nowrap">USD</th>
                        <th class="whitespace-nowrap">JPY</th>
                        <th class="whitespace-nowrap">EUR</th>
                        <th class="whitespace-nowrap">SGD</th>
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

<div class="intro-y flex w-full items-center justify-between gap-2 mt-4">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 상품 복사</button>
    <div class="flex items-center gap-1">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 상품 등록</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 등록취소</button>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
<?php /* Template_ 2.2.8 2024/05/16 10:46:48 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\display\exhibition_pop_detail.tpl 000032653 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./exhibition_pop_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 팝업 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">팝업 상세</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>팝업등록</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>등록취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">팝업명</div>
        <div class="flex-1">
            <input type="text" class="form-control" value="">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">팝업 이미지</div>
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
                    <div class="flex flex-col md:flex-row gap-6 mb-6">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">PC 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file2" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">Mobile 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file2" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>

                <!-- 영어 -->
                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                    <div class="flex flex-col md:flex-row gap-6 mb-6">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file3" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">PC 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file3" type="file" class="hidden" />
                            </label>
                        </div>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file4" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">Mobile 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file4" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                    <div class="flex flex-col md:flex-row gap-6 mb-6">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file5" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">PC 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file5" type="file" class="hidden" />
                            </label>
                        </div>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file6" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">Mobile 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file6" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-4-tab">
                    <div class="flex flex-col md:flex-row gap-6 mb-6">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file7" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">PC 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file7" type="file" class="hidden" />
                            </label>
                        </div>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file8" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">Mobile 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file8" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-5-tab">
                    <div class="flex flex-col md:flex-row gap-6 mb-6">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file9" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">PC 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file9" type="file" class="hidden" />
                            </label>
                        </div>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file10" class="flex flex-col items-center justify-center w-full h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"">Mobile 이미지를 추가해주세요</p>
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (600*1400px 1mb / 이하)</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file10" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">팝업 구분</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="pop_division_1_1" class="form-check-input" type="radio" name="pop_division1">
                    <label class="form-check-label" for="pop_division_1_1">공통팝업</label>
                </div>
                <div class="form-check">
                    <input id="pop_division_1_2" class="form-check-input" type="radio" name="pop_division1">
                    <label class="form-check-label" for="pop_division_1_2">사이트별 팝업</label>
                    <button class="btn btn-primary-soft btn-sm ml-3" data-tw-toggle="modal" data-tw-target="#site_select-modal"><i data-lucide="plus" class="w-4 h-4"></i> 사이트 선택</button>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">고객사</div>
        <div class="flex-1">
            <button class="btn btn-primary-soft btn-sm"><i data-lucide="plus" class="w-4 h-4"></i> 고객사 선택</button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">노출기간</div>
        <div class="flex-1">
            <div class="relative w-full md:w-64 ml-2">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" class="datepicker form-control pl-12">
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">링크설정</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="link_set_1_1" class="form-check-input" type="radio" name="link_set1">
                    <label class="form-check-label" for="link_set_1_1">미설정</label>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <div class="form-check">
                        <input id="link_set_1_2" class="form-check-input" type="radio" name="link_set1">
                        <label class="form-check-label" for="link_set_1_2">설정</label>
                    </div>
                    <input type="text" class="form-control w-full md:w-52">
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">링크방식</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="link_system_1_1" class="form-check-input" type="radio" name="link_system1">
                    <label class="form-check-label" for="link_system_1_1">새창열기</label>
                </div>
                <div class="form-check">
                    <input id="link_system_1_2" class="form-check-input" type="radio" name="link_system1">
                    <label class="form-check-label" for="link_system_1_2">페이지로 이동</label>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">팝업노출</div>
        <div class="flex-1">
            <select name="" id="" class="form-select w-full md:w-28">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">상태</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
                <div class="form-check">
                    <input id="link_state_1_1" class="form-check-input" type="radio" name="link_state1">
                    <label class="form-check-label" for="link_state_1_1">노출</label>
                </div>
                <div class="form-check">
                    <input id="link_state_1_2" class="form-check-input" type="radio" name="link_state1">
                    <label class="form-check-label" for="link_state_1_2">미노출</label>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">등록자</div>
        <div class="flex-1">
            <p>2024-03-02 홍길동</p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">수정자</div>
        <div class="flex-1">
            <p>2024-03-02 홍길동</p>
        </div>
    </div>

</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>팝업삭제</button>
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>팝업등록</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>등록취소</button>
</div>
<!-- 사이트 선택 모달 -->
<div id="site_select-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="flex items-center justify-between p-3 border-b border-slate-400">
                    <div class="flex-1">
                        <div class="relative w-2/3 md:w-1/2">
                            <input type="text" class="form-control" id="coupon_channel">
                            <label for="coupon_channel"><i data-lucide="search" class="absolute right-2 top-2.5 w-4 h-4"></i></label>
                            <!-- 연관검색어 표기시 hidden 클래스 삭제 -->
                            <div class="hidden absolute left-0 top-full w-full overflow-y-auto max-h-32 bg-white p-1 border border-slate-300 border-t-0 rounded">
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길일</button>
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길이</button>
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길삼</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[1px] bg-slate-400">
                    <div class="overflow-y-auto h-[140px] md:h-[440px] p-3 bg-white">
                        <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                        <button class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">골프장</button>
                        <button class="block w-full text-left p-2">골프장예약</button>
                        <button class="block w-full text-left p-2">골프장ERP</button>
                        <button class="block w-full text-left p-2">검색/포털</button>
                        <button class="block w-full text-left p-2">OTA/여행사</button>
                        <button class="block w-full text-left p-2">항공/숙박/차량</button>
                        <button class="block w-full text-left p-2">금융/은행/카드</button>
                        <button class="block w-full text-left p-2">쇼핑/마켓</button>
                        <button class="block w-full text-left p-2">대기업/브랜드</button>
                        <button class="block w-full text-left p-2">멤버쉽/마일리지</button>
                        <button class="block w-full text-left p-2">소셜/메신저/기타</button>
                    </div>
                    <div class="md:col-span-2 overflow-y-auto max-h-[auto] md:max-h-[440px] md:h-[440px] p-3 bg-white">
                        <div class="flex flex-wrap items-center gap-1">
                            <button class="px-5 py-2 rounded">전체(11)</button>
                            <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                            <button class="px-5 py-2 rounded bg-primary bg-opacity-10 font-bold text-primary">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                            <button class="px-5 py-2 rounded bg-primary bg-opacity-10 font-bold text-primary">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                            <button class="px-5 py-2 rounded bg-primary bg-opacity-10 font-bold text-primary">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
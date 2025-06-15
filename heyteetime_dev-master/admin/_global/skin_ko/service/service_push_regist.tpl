{#head}
{#header}
<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./service_push_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 푸시 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">푸시 등록</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>발송등록</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>발송취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">푸시명</div>
        <div class="flex-1">
            <input type="text" class="form-control" value="">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">푸시구분</div>
        <div class="flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="push_classification_1_1" class="form-check-input" type="radio" name="push_classification" checked>
                <label class="form-check-label" for="push_classification_1_1">기획전</label>
            </div>
            <div class="form-check">
                <input id="push_classification_1_2" class="form-check-input" type="radio" name="push_classification">
                <label class="form-check-label" for="push_classification_1_2">상품</label>
            </div>
            <div class="form-check">
                <input id="push_classification_1_3" class="form-check-input" type="radio" name="push_classification">
                <label class="form-check-label" for="push_classification_1_3">이벤트</label>
            </div>
            <div class="form-check">
                <input id="push_classification_1_4" class="form-check-input" type="radio" name="push_classification">
                <label class="form-check-label" for="push_classification_1_4">공지/알림</label>
            </div>
            <div class="form-check">
                <input id="push_classification_1_5" class="form-check-input" type="radio" name="push_classification">
                <label class="form-check-label" for="push_classification_1_5">기타</label>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">언어</div>
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
        <div class="w-full md:w-40 pt-2 font-semibold shrink-0">발송내용</div>
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

                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용<span class="text-danger">*</span></div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <textarea class="form-control h-12 w-full md:w-11/12"></textarea>
                            <span class="text-slate-500">00/250</span>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">링크<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>

                </div>

                <!-- 영어 -->
                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용<span class="text-danger">*</span></div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <textarea class="form-control h-12 w-full md:w-11/12"></textarea>
                            <span class="text-slate-500">00/250</span>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">링크<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                </div>

                <!-- 스페인어 -->
                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용<span class="text-danger">*</span></div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <textarea class="form-control h-12 w-full md:w-11/12"></textarea>
                            <span class="text-slate-500">00/250</span>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">링크<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                </div>

                <!-- 일본어 -->
                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용<span class="text-danger">*</span></div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <textarea class="form-control h-12 w-full md:w-11/12"></textarea>
                            <span class="text-slate-500">00/250</span>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">링크<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                </div>

                <!-- 중국어 -->
                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-5-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용<span class="text-danger">*</span></div>
                        <div class="flex-1 flex flex-wrap gap-2 items-end">
                            <textarea class="form-control h-12 w-full md:w-11/12"></textarea>
                            <span class="text-slate-500">00/250</span>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">링크<span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">수신자설정</div>
        <div class="flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="recipient_settings_1_1" class="form-check-input" type="radio" name="recipient_settings" checked>
                <label class="form-check-label" for="recipient_settings_1_1">전체발송 (총 000,000명 / 정상, 수신허용)</label>
            </div>
            <div class="form-check">
                <input id="recipient_settings_1_2" class="form-check-input" type="radio" name="recipient_settings">
                <label class="form-check-label" for="recipient_settings_1_2">파일등록</label>
            </div>
            <div class="form-check">
                <input id="recipient_settings_1_3" class="form-check-input" type="radio" name="recipient_settings">
                <label class="form-check-label" for="recipient_settings_1_3">조건선택</label>
            </div>
            <div class="form-check">
                <input id="recipient_settings_1_4" class="form-check-input" type="radio" name="recipient_settings">
                <label class="form-check-label" for="recipient_settings_1_4">발송자선택</label>
            </div>
        </div>
    </div>

    <!-- 파일등록일때-->
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">파일선택</div>
        <div class="flex-1 flex flex-wrap gap-2">
            <input type="text" class="form-control w-80" value="" placeholder="양식파일에 수령자 아이디, 성명을 기재해주세요.">
            <a href="javascript:;" class="btn btn-sm btn-primary-soft">양식다운받기</a>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">파일선택</div>
        <div class="flex-1 flex items-center flex-wrap gap-2">
            <input type="file" class=" w-48" id="file_upload" disabled>
            <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">발송자수</div>
        <div class="flex-1 flex items-center flex-wrap gap-2">
            <input type="text" class="form-control w-80" value="총 000,000명" readonly>
            <p>· 발송시점 기준 탈퇴/접속제한, 수신거부 사용자는 제외 후 발송</p>
        </div>
    </div>

    <!-- 조건 선택 일 때 -->
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">조건선택</div>
        <div class="flex-1 flex-col flex flex-wrap gap-2">
            <div>
                <div class="overflow-y-auto max-h-36 p-4 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                    <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                        <div>2024.01.01~2024.1.31 가입</div>
                        <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    </div>
                    <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                        <div>애플가입</div>
                        <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    </div>
                    <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                        <div>한국 국적</div>
                        <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    </div>
                    <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                        <div>일본 국적</div>
                        <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex flex-wrap gap-2">
                <div class="flex flex-col flex-wrap gap-1 pt-2">
                    <span>가입일</span>
                    <div class="relative w-full md:w-64">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                        </div>
                        <input type="text" class="datepicker form-control pl-12">
                    </div>
                </div>
                <div class="flex flex-col flex-wrap gap-1 pt-2">
                    <span>회원구분</span>
                    <div class="dropdown">
                        <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">미선택</button>
                        <div class="dropdown-menu w-full">
                            <ul class="dropdown-content custom_select multi">
                                <li class="flex items-center">
                                    <input type="radio" class="form-check-input" id="member_classification_1_1" name="member_classification">
                                    <label for="member_classification_1_1" class="block w-full px-2 py-1">미선택</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="radio" class="form-check-input" id="member_classification_1_2" name="member_classification">
                                    <label for="member_classification_1_2" class="block w-full px-2 py-1">일반</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="radio" class="form-check-input" id="member_classification_1_3" name="member_classification">
                                    <label for="member_classification_1_3" class="block w-full px-2 py-1">멤버쉽</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col flex-wrap gap-1 pt-2">
                    <span>가입구분</span>
                    <div class="dropdown">
                        <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">미선택</button>
                        <div class="dropdown-menu w-full">
                            <ul class="dropdown-content custom_select multi">
                                <li class="flex items-center">
                                    <input type="checkbox" class="form-check-input" id="subscription_category_1_1" name="subscription_category">
                                    <label for="subscription_category_1_1" class="block w-full px-2 py-1">미선택</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="subscription_category_1_2" name="subscription_category">
                                    <label for="subscription_category_1_2" class="block w-full px-2 py-1">구글</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="subscription_category_1_3" name="subscription_category">
                                    <label for="subscription_category_1_3" class="block w-full px-2 py-1">애플</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="subscription_category_1_4" name="subscription_category">
                                    <label for="subscription_category_1_4" class="block w-full px-2 py-1">페이스북</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="subscription_category_1_5" name="subscription_category">
                                    <label for="subscription_category_1_5" class="block w-full px-2 py-1">라인</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="subscription_category_1_6" name="subscription_category">
                                    <label for="subscription_category_1_6" class="block w-full px-2 py-1">카카오톡</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="subscription_category_1_7" name="subscription_category">
                                    <label for="subscription_category_1_7" class="block w-full px-2 py-1">네이버</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col flex-wrap gap-1 pt-2">
                    <span>성별</span>
                    <div class="dropdown">
                        <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">미선택</button>
                        <div class="dropdown-menu w-full">
                            <ul class="dropdown-content custom_select multi">
                                <li class="flex items-center">
                                    <input type="radio" class="form-check-input" id="push_gender_1_1" name="push_gender">
                                    <label for="push_gender_1_1" class="block w-full px-2 py-1">미선택</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="radio" class="form-check-input" id="push_gender_1_2" name="push_gender">
                                    <label for="push_gender_1_2" class="block w-full px-2 py-1">미입력 </label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="radio" class="form-check-input" id="push_gender_1_3" name="push_gender">
                                    <label for="push_gender_1_3" class="block w-full px-2 py-1">남성</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="radio" class="form-check-input" id="push_gender_1_4" name="push_gender">
                                    <label for="push_gender_1_4" class="block w-full px-2 py-1">여성</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col flex-wrap gap-1 pt-2">
                    <span>국적</span>
                    <div class="dropdown">
                        <button class="dropdown-toggle form-select w-28 text-left" aria-expanded="false" data-tw-toggle="dropdown">미선택</button>
                        <div class="dropdown-menu w-full">
                            <ul class="dropdown-content custom_select multi">
                                <li class="flex items-center">
                                    <input type="checkbox" class="form-check-input" id="push_nationality_1_1" name="push_nationality">
                                    <label for="push_nationality_1_1" class="block w-full px-2 py-1">미선택</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="push_nationality_1_2" name="push_nationality">
                                    <label for="push_nationality_1_2" class="block w-full px-2 py-1">미국 </label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="push_nationality_1_3" name="push_nationality">
                                    <label for="push_nationality_1_3" class="block w-full px-2 py-1">한국</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="push_nationality_1_4" name="push_nationality">
                                    <label for="push_nationality_1_4" class="block w-full px-2 py-1">중국</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="push_nationality_1_5" name="push_nationality">
                                    <label for="push_nationality_1_5" class="block w-full px-2 py-1">일본</label>
                                </li>
                                <li class="flex items-center mt-0.5">
                                    <input type="checkbox" class="form-check-input" id="push_nationality_1_6" name="push_nationality">
                                    <label for="push_nationality_1_6" class="block w-full px-2 py-1">프랑스</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 발송자선택 일 때 -->
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">발송자선택</div>
        <div class="flex-1 flex flex-wrap gap-2">
            <div class="relative w-80">
                <input type="text" class="form-control w-full" value="홍길">
                <!-- 검색 시 list / hidden 풀어야함 class hidden 걸려있음 -->
                <div class="absolute w-full rounded-md border border-slate-200 p-4 bg-white hidden">
                    <ul class="flex flex-col gap-2">
                        <li class="flex items-center">
                            <input type="checkbox" class="form-check-input" id="push_select_sender_1_1" name="push_select_sender">
                            <label for="push_select_sender_1_1" class="block w-full px-2 py-1">홍길일 (hong1@hong.com)</label>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" class="form-check-input" id="push_select_sender_1_2" name="push_select_sender">
                            <label for="push_select_sender_1_2" class="block w-full px-2 py-1">홍길이 (hong2@hong.com)</label>
                        </li>
                    </ul>
                </div>
            </div>
            <button href="javascript:;" class="btn btn-sm btn-primary-soft"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>발송자추가</button>
            <button href="javascript:;" class="btn btn-sm btn-primary-soft"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>파일추가</button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">발송자 목록</div>
        <div class="flex-1 flex-col flex flex-wrap gap-2">
            <div class="flex-1 flex flex-wrap items-center gap-2">
                <span>홍길동 외 000명</span>
                <button href="javascript:;" class="btn btn-sm btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>모두삭제</button>
                <span>· 발송시점 기준 탈퇴/접속제한, 수신거부 사용자는 제외 후 발송</span>
            </div>
            <div>
                <div class="overflow-y-auto max-h-36 p-4 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                    <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                        <div>홍길동 (test@test.com)입</div>
                        <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    </div>
                    <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                        <div>홍길일 (test@test.com)가입</div>
                        <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    </div>
                    <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                        <div>홍길일 (test@test.com)</div>
                        <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    </div>
                    <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-lg">
                        <div>홍길일 (test@test.com)</div>
                        <button class="btn p-0.5 btn-outline-danger rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">발송구분</div>
        <div class="flex-1 flex flex-wrap gap-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="push_shipping_type_2_1" name="push_shipping_type_2">
                <label for="push_shipping_type_2_1" class="block w-full px-2 py-1">즉시발송</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="push_shipping_type_2_2" name="push_shipping_type_2">
                <label for="push_shipping_type_2_2" class="block w-full px-2 py-1">예약발송</label>
            </div>
            <!-- 예약발송일 때 -->
            <div class="flex-1 flex flex-wrap items-center gap-2">
                <div class="relative w-36">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> <i data-lucide="calendar" class="w-4 h-4"></i> </div> <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                </div>
                <select class="form-select w-52">
                    <option>09시</option>
                    <option>10시</option>
                    <option>11시</option>
                    <option>12시</option>
                    <option>13시</option>
                </select>
                <span>시 (대한민국 기준 / UCT +9 / 대상자 국가별 분할발송)</span>
            </div>
        </div>
    </div>

</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 발송등록</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 발송취소</button>
</div>
{#botom}
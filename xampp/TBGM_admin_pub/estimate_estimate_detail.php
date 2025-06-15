<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'estimate';
        $side_2depth = 'estimate';
        $depth_1 = '견적관리';
        $depth_2 = '견적목록';
        $depth_3 = '견적상세';
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content relative">

                <?php include_once('_header.php'); ?>

                <div class="flex flex-wrap items-center justify-between sticky top-0 bg-slate-100 z-50 pt-16 pb-3 border-b">
                    <div>
                        <div class="flex items-center mt-4">
                            <a href="./estimate_estimate_mng.php" class="flex items-center gap-1 text-primary">
                                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 견적목록
                            </a>
                        </div>
                        <div class="flex items-center mt-2">
                            <h2 class="text-xl font-bold mr-auto">견적 상세</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <button type="button" class="btn btn-primary">견적요청</button>
                        <button type="button" class="btn btn-pending">미진행</button>
                    </div>
                </div>

                <!-- 상세 -->

                <!-- 기획서상 3-3 견적상세1 (1차)1 -->
                <div class="grid grid-cols-12 gap-6 mt-10">
                    <!-- 좌측 -->
                    <div class="col-span-12 xl:col-span-8">
                        <div class="intro-y">
                            <div class="flex h-[38px]">
                                <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">견적내용</h3>
                                <button type="button" class="btn btn-outline-dark" onclick="modalOpen('fixes-modal')">수정사항(10)</button>
                                <button type="button" class="btn btn-primary-soft ml-3" onclick="modalOpen('consultation-modal')">상담내역(3)</button>
                            </div>
                            <!-- 좌측 box -->
                            <div class="box p-5 mt-2">
                                <div class="flex items-center justify-end">
                                    <button type="button" class="btn btn-success"><i data-lucide="save" class="w-4 h-4 !stroke-2 mr-1"></i> SAVE</button>
                                </div>
                                <div class="mt-4 flex flex-col gap-2 md:gap-4">
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">가입자명 <span class="text-danger">*</span></p>
                                            <a href="javascript:;" onclick="modalOpen01('subscriber_sel-modal')" class="rounded-md border border-slate-200 h-[38px] flex-1 px-3 flex items-center">
                                                <span></span>
                                            </a>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">지점명</p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">담당자명 <span class="text-danger">*</span></p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">연락처 <span class="text-danger">*</span></p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">견적제목 <span class="text-danger">*</span></p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">기간 <span class="text-danger">*</span></p>
                                            <div class="relative w-full flex-1">
                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> 
                                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                                </div>
                                                <input type="text" class="datepicker form-control pl-12">
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">인원수 <span class="text-danger">*</span></p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">희망지역 <span class="text-danger">*</span></p>
                                            <a href="javascript:;" onclick="modalOpen01('region-modal')" class="rounded-md border border-slate-200 h-[38px] flex-1 px-3 flex items-center">
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">요청사항</p>
                                            <textarea class="form-control h-24 md:h-full flex-1"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">골프장등급</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">회원제</option>
                                                <option value="2">대중제</option>
                                            </select>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">티오프시간</p>
                                            <div class="flex-1 flex items-center gap-2 flex-wrap">
                                                <input type="time" class="form-control w-full md:w-auto flex-1">~<input type="time" class="form-control  w-full md:w-auto flex-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">숙소등급</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">5성급</option>
                                                <option value="2">4성급</option>
                                            </select>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">숙소종류</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">다인실</option>
                                                <option value="2">트윈</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">식사</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">라운드 전</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">객단가</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">130,000~150,000</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">식사장소</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">홈 식사</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">기타</p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 우측 -->
                    <div class="col-span-12 xl:col-span-4">
                          <div class="intro-y">
                            <div class="flex h-[38px]">
                                <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">진행관리</h3>
                            </div>
                            <!-- 우측 box -->
                            <div class="box p-5 mt-2">
                                <div class="flex flex-col gap-6">
                                    <div class="flex gap-3">
                                        <button class="bg-amber-200 font-medium text-sm rounded-md text-amber-800 w-16 h-8">견적</button>
                                        <ul class="mt-1 flex-1 text-slate-600 flex flex-col gap-2">
                                            <li>2024.05.01  견적등록</li>
                                        </ul>
                                    </div>
                                    <div class="flex gap-3">
                                        <button class="bg-emerald-200 font-medium text-sm rounded-md text-emerald-800 w-16 h-8">견적중</button>
                                        <ul class="mt-1 flex-1 text-slate-600 flex flex-col gap-2">
                                            <li>2024.05.01  베어크리크(춘천) 견적요청/li>
                                            <li>2024.05.01  클럽72 견적요청</li>
                                            <li>2024.05.01  베어크리크(춘천) 견적접수</li>
                                            <li>2024.05.01  베어크리크(춘천) 견적제출</li>
                                        </ul>
                                    </div>
                                    <div class="flex gap-3">
                                        <button class="bg-violet-200 font-medium text-sm rounded-md text-violet-800 w-16 h-8">예약</button>
                                        <ul class="mt-1 flex-1 text-slate-600 flex flex-col gap-2">
                                            <li>2024.05.01  베어크리크(춘천) 예약요청</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr class="border-t my-14">

                <!-- 기획서상 3-3 견적상세 (1차)2 추후삭제 -->
                <div class="p-3 border rounded-md text-base border-danger text-danger font-medium mb-4">기획서상 3-3 견적상세 (1차)2</div>
                
                <div class="grid grid-cols-12 gap-6">
                    <!-- 좌측 -->
                    <div class="col-span-12 xl:col-span-3">
                        <div class="intro-y">
                            <div class="flex h-[38px]">
                                <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">추천견적</h3>
                                <button type="button" class="btn btn-primary ml-3">견적작성</button>
                            </div>
                            <!-- 좌측 box -->
                            <div class="box p-5 mt-2 overflow-y-scroll max-h-[748px]">
                                <!-- 등록된 견적 없을 때 -->
                                <div class="text-slate-400">등록된 견적이 없습니다.</div>
                                <ul class="flex flex-col gap-3">
                                    <!-- 클릭 시  bg-white border-primary-->
                                    <li class="bg-white p-4 rounded-md border border-primary hover:bg-white hover:shadow-md hover:border-primary">
                                        <div class="flex items-center">
                                            <span>요청 2024.05.01</span>
                                            <div class="bg-teal-600 text-white p-1 text-sm ml-auto rounded-md">견적검토</div>
                                        </div>
                                        <div class="mt-2 text-sm">대한민국 | 서울/경기도</div>
                                        <div class="mt-2 text-base font-semibold">베어크리크 (춘천)</div>
                                        <div class="flex justify-end text-base font-semibold pt-2 mt-2 border-t">KRW 100,000,000</div>
                                    </li>
                                    <li class="bg-slate-50 p-4 rounded-md border border-slate-300 hover:bg-white hover:shadow-md hover:border-primary">
                                        <div class="flex items-center">
                                            <span>요청 2024.05.01</span>
                                            <div class="bg-blue-600 text-white p-1 text-sm ml-auto rounded-md">제출완료</div>
                                        </div>
                                        <div class="mt-2 text-sm">대한민국 | 서울/경기도</div>
                                        <div class="mt-2 text-base font-semibold">베어크리크 (춘천)</div>
                                        <div class="flex justify-end text-base font-semibold pt-2 mt-2 border-t">KRW 100,000,000</div>
                                    </li>
                                    <li class="bg-slate-50 p-4 rounded-md border border-slate-300 hover:bg-white hover:shadow-md hover:border-primary">
                                        <div class="flex items-center">
                                            <span>요청 2024.05.01</span>
                                            <div class="bg-pink-600 text-white p-1 text-sm ml-auto rounded-md">견적수정</div>
                                        </div>
                                        <div class="mt-2 text-sm">대한민국 | 서울/경기도</div>
                                        <div class="mt-2 text-base font-semibold">베어크리크 (춘천)</div>
                                        <div class="flex justify-end text-base font-semibold pt-2 mt-2 border-t">KRW 100,000,000</div>
                                    </li>
                                    <li class="bg-slate-50 p-4 rounded-md border border-slate-300 hover:bg-white hover:shadow-md hover:border-primary">
                                        <div class="flex items-center">
                                            <span>요청 2024.05.01</span>
                                            <div class="bg-slate-600 text-white p-1 text-sm ml-auto rounded-md">미제출</div>
                                        </div>
                                        <div class="mt-2 text-sm">대한민국 | 서울/경기도</div>
                                        <div class="mt-2 text-base font-semibold">베어크리크 (춘천)</div>
                                        <div class="flex justify-end text-base font-semibold pt-2 mt-2 border-t">KRW 100,000,000</div>
                                    </li>
                                    <li class="bg-slate-50 p-4 rounded-md border border-slate-300 hover:bg-white hover:shadow-md hover:border-primary">
                                        <div class="flex items-center">
                                            <span>요청 2024.05.01</span>
                                            <div class="bg-slate-600 text-white p-1 text-sm ml-auto rounded-md">미제출</div>
                                        </div>
                                        <div class="mt-2 text-sm">대한민국 | 서울/경기도</div>
                                        <div class="mt-2 text-base font-semibold">베어크리크 (춘천)</div>
                                        <div class="flex justify-end text-base font-semibold pt-2 mt-2 border-t">KRW 100,000,000</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 우측 -->
                    <div class="col-span-12 xl:col-span-9">
                        <div class="intro-y">
                            <div class="flex h-[38px]">
                                <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">상세견적</h3>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn bg-white">견적저장</button>
                                    <i data-lucide="move-right" class="w-4 h-4"></i>
                                    <button type="button" class="btn btn-primary-soft">견적보기</button>
                                    <i data-lucide="move-right" class="w-4 h-4"></i>
                                    <button type="button" class="btn btn-primary">견적제출</button>
                                </div>
                            </div>
                            <!-- 우측 box -->
                            <div class="box p-5 mt-2">
                                <div class="flex flex-col gap-2 md:gap-4">
                                    <div class="flex-1 flex flex-wrap gap-3">
                                        <p class="mt-2 w-16 font-medium">상품명</p>
                                        <input type="text" class="form-control flex-1" value="후쿠오카&나가사키 골프 3박 4일">
                                    </div>
                                    <div class="flex-1 flex-col md:flex-row flex flex-wrap gap-2 md:gap-4">
                                        <div class="flex-1 flex gap-3">
                                            <p class="mt-2 w-16 font-medium">상품지역</p>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="right_detail_01_01" name="right_detail_01">
                                                <label class="form-check-label" for="right_detail_01_01">해외</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="right_detail_01_02" name="right_detail_01">
                                                <label class="form-check-label" for="right_detail_01_02">국내</label>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex gap-3">
                                            <p class="mt-2 w-16 font-medium">일정</p>
                                            <div class="relative w-full flex-1">
                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> 
                                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                                </div>
                                                <input type="text" class="datepicker form-control pl-12">
                                            </div>
                                        </div>
                                        <div class="flex-1 flex gap-3">
                                            <p class="mt-2 w-16 font-medium">인원수</p>
                                            <input type="text" class="form-control flex-1" value="40,000">
                                        </div>
                                        <div class="flex-1 flex  gap-3">
                                            <p class="mt-2 w-16 font-medium">팀수</p>
                                            <input type="text" class="form-control flex-1" value="10,000">
                                        </div>
                                    </div>
                                    <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                        <div class="flex-1 flex flex-wrap gap-3">
                                            <p class="mt-2 w-16 font-medium">매입가</p>
                                            <div class="flex-1 flex items-center">
                                                <input type="text" class="form-control" value="20,000,000,000">
                                                <div class="form-check ml-2">
                                                    <input type="checkbox" class="form-check-input" id="right_detail_02_01" name="right_detail_02">
                                                    <label class="form-check-label" for="right_detail_02_01">VAT</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap gap-3">
                                            <p class="mt-2 w-16 font-medium">수수료</p>
                                            <div class="flex-1 flex items-center">
                                                <input type="text" class="form-control" value="20,000,000,000">
                                                <div class="form-check ml-2">
                                                    <input type="checkbox" class="form-check-input" id="right_detail_02_02" name="right_detail_02">
                                                    <label class="form-check-label" for="right_detail_02_02">VAT</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex gap-3">
                                            <p class="mt-2 w-16 font-medium">견적표기</p>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="right_detail_03_01" name="right_detail_03">
                                                <label class="form-check-label" for="right_detail_03_01">전체</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="right_detail_03_02" name="right_detail_03">
                                                <label class="form-check-label" for="right_detail_03_02">인당</label>
                                            </div>
                                            <div class="form-check ml-2">
                                                <input type="checkbox" class="form-check-input" id="right_detail_03_03" name="right_detail_03">
                                                <label class="form-check-label" for="right_detail_03_03">상세</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 상품정보 탭 -->
                                    <div class="flex-1 flex flex-wrap gap-3">
                                        <p class="mt-2 w-16 font-medium">상품정보</p>
                                        <div class="flex-1 flex flex-wrap items-center">
                                            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                                                <li id="bylanguage-1-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-1" type="button" role="tab" aria-controls="bylanguage-tab-1" aria-selected="true">포함사항</button> 
                                                </li>
                                                <li id="bylanguage-2-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-2" type="button" role="tab" aria-controls="bylanguage-tab-2" aria-selected="false">불포함사항</button> 
                                                </li>
                                                <li id="bylanguage-3-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-3" type="button" role="tab" aria-controls="bylanguage-tab-3" aria-selected="false">유의사항</button> 
                                                </li>
                                                <li id="bylanguage-4-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-4" type="button" role="tab" aria-controls="bylanguage-tab-4" aria-selected="false">선택/기타사항</button> 
                                                </li>
                                            </ul>

                                            <div class="tab-content w-full border-primary">
                                                
                                                <!-- 포함사항 -->
                                                <div id="bylanguage-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-1-tab">
                                                    <textarea type="text" class="p-4 text-slate-500 h-[150px] overflow-y-scroll border border-t-0 rounded-b-md w-full" disabled>그린피+카트피 18홀X 3회 호텔 3박 (조식 포함)</textarea>
                                                </div>

                                                <!-- 불포함사항 -->
                                                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                                                    <textarea type="text" class="p-4 text-slate-500 h-[150px] overflow-y-scroll border border-t-0 rounded-b-md w-full" disabled>그린피+카트피 18홀X 3회 호텔 3박 (조식 포함)</textarea>
                                                </div>

                                                <!-- 유의사항 -->
                                                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                                                    <textarea type="text" class="p-4 text-slate-500 h-[150px] overflow-y-scroll border border-t-0 rounded-b-md w-full" disabled>그린피+카트피 18홀X 3회 호텔 3박 (조식 포함)</textarea>
                                                </div>

                                                <!-- 선택/기타사항 -->
                                                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-4-tab">
                                                    <textarea type="text" class="p-4 text-slate-500 h-[150px] overflow-y-scroll border border-t-0 rounded-b-md w-full" disabled>그린피+카트피 18홀X 3회 호텔 3박 (조식 포함)</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 일정탭 -->
                                    <div class="flex-1 flex flex-wrap flex-col gap-1 overflow-x-scroll">
                                        <div class="flex-1 flex">
                                            <button class="btn btn btn-warning md:ml-auto" onclick="modalOpen01('schedule-modal')">일정추가</button>
                                        </div>
                                        <div class="flex-1 flex flex-wrap items-center min-w-[780px]">
                                            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                                                <li id="bylanguage-1-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-5" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="true">1일 (24.04.09)</button> 
                                                </li>
                                                <li id="bylanguage-2-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-6" type="button" role="tab" aria-controls="bylanguage-tab-6" aria-selected="false">2일 (24.04.10)</button> 
                                                </li>
                                                <li id="bylanguage-3-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-7" type="button" role="tab" aria-controls="bylanguage-tab-7" aria-selected="false">3일 (24.04.11)</button> 
                                                </li>
                                                <li id="bylanguage-4-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-8" type="button" role="tab" aria-controls="bylanguage-tab-8" aria-selected="false">4일 (24.04.12)</button> 
                                                </li>
                                            </ul>

                                            <div class="tab-content w-full border-primary">
                                                
                                                <!-- 포함사항 -->
                                                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-5-tab">
                                                    
                                                    <div class="">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="text-center bg-slate-100">
                                                                    <th class="whitespace-nowrap">항목</th>
                                                                    <th class="whitespace-nowrap">일정</th>
                                                                    <th class="whitespace-nowrap">매입가</th>
                                                                    <th class="whitespace-nowrap">수수료</th>
                                                                    <th class="whitespace-nowrap">기능</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">항공</td>
                                                                    <td>대한항공 (KE787) - 인천공항 00:00 ~ 제주공항 00:00</td>
                                                                    <td>항공료 100,000,000</td>
                                                                    <td>항공료 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">골프장</td>
                                                                    <td>
                                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br/>
                                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                                    </td>
                                                                    <td>
                                                                        그린피 100,000,000<br/>
                                                                        카트피 10,000,000
                                                                    </td>
                                                                    <td>그린피 10,000,0000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">일정</td>
                                                                    <td>호텔 체크인 후 휴식</td>
                                                                    <td>일정비 100,000,000</td>
                                                                    <td>일정비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">숙박</td>
                                                                    <td>미야코 호텔 하카타 (슈페리얼 트윈 또는 동급)</td>
                                                                    <td>숙박비 100,000,000</td>
                                                                    <td>숙박비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">식사</td>
                                                                    <td>
                                                                        조식 - 호텔식<br/>
                                                                        중식 - 클럽식 (단품)<br/>
                                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                                    </td>
                                                                    <td> 
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">운영비</td>
                                                                    <td>
                                                                        운영 수수료
                                                                    </td>
                                                                    <td> 
                                                                        -
                                                                    </td>
                                                                    <td>
                                                                        운영비 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>

                                                <!-- 불포함사항 -->
                                                <div id="bylanguage-tab-6" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-6-tab">
                                                     <div class="overflow-x-auto">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="text-center bg-slate-100">
                                                                    <th class="whitespace-nowrap">항목</th>
                                                                    <th class="whitespace-nowrap">일정</th>
                                                                    <th class="whitespace-nowrap">매입가</th>
                                                                    <th class="whitespace-nowrap">수수료</th>
                                                                    <th class="whitespace-nowrap">기능</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">항공</td>
                                                                    <td>대한항공 (KE787) - 인천공항 00:00 ~ 제주공항 00:00</td>
                                                                    <td>항공료 100,000,000</td>
                                                                    <td>항공료 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">골프장</td>
                                                                    <td>
                                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br/>
                                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                                    </td>
                                                                    <td>
                                                                        그린피 100,000,000<br/>
                                                                        카트피 10,000,000
                                                                    </td>
                                                                    <td>그린피 10,000,0000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">일정</td>
                                                                    <td>호텔 체크인 후 휴식</td>
                                                                    <td>일정비 100,000,000</td>
                                                                    <td>일정비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">숙박</td>
                                                                    <td>미야코 호텔 하카타 (슈페리얼 트윈 또는 동급)</td>
                                                                    <td>숙박비 100,000,000</td>
                                                                    <td>숙박비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">식사</td>
                                                                    <td>
                                                                        조식 - 호텔식<br/>
                                                                        중식 - 클럽식 (단품)<br/>
                                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                                    </td>
                                                                    <td> 
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">운영비</td>
                                                                    <td>
                                                                        운영 수수료
                                                                    </td>
                                                                    <td> 
                                                                        -
                                                                    </td>
                                                                    <td>
                                                                        운영비 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <!-- 유의사항 -->
                                                <div id="bylanguage-tab-7" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-7-tab">
                                                <div class="overflow-x-auto">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="text-center bg-slate-100">
                                                                    <th class="whitespace-nowrap">항목</th>
                                                                    <th class="whitespace-nowrap">일정</th>
                                                                    <th class="whitespace-nowrap">매입가</th>
                                                                    <th class="whitespace-nowrap">수수료</th>
                                                                    <th class="whitespace-nowrap">기능</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">항공</td>
                                                                    <td>대한항공 (KE787) - 인천공항 00:00 ~ 제주공항 00:00</td>
                                                                    <td>항공료 100,000,000</td>
                                                                    <td>항공료 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">골프장</td>
                                                                    <td>
                                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br/>
                                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                                    </td>
                                                                    <td>
                                                                        그린피 100,000,000<br/>
                                                                        카트피 10,000,000
                                                                    </td>
                                                                    <td>그린피 10,000,0000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">일정</td>
                                                                    <td>호텔 체크인 후 휴식</td>
                                                                    <td>일정비 100,000,000</td>
                                                                    <td>일정비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">숙박</td>
                                                                    <td>미야코 호텔 하카타 (슈페리얼 트윈 또는 동급)</td>
                                                                    <td>숙박비 100,000,000</td>
                                                                    <td>숙박비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">식사</td>
                                                                    <td>
                                                                        조식 - 호텔식<br/>
                                                                        중식 - 클럽식 (단품)<br/>
                                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                                    </td>
                                                                    <td> 
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">운영비</td>
                                                                    <td>
                                                                        운영 수수료
                                                                    </td>
                                                                    <td> 
                                                                        -
                                                                    </td>
                                                                    <td>
                                                                        운영비 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <!-- 선택/기타사항 -->
                                                <div id="bylanguage-tab-8" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-8-tab">
                                                <div class="overflow-x-auto">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="text-center bg-slate-100">
                                                                    <th class="whitespace-nowrap">항목</th>
                                                                    <th class="whitespace-nowrap">일정</th>
                                                                    <th class="whitespace-nowrap">매입가</th>
                                                                    <th class="whitespace-nowrap">수수료</th>
                                                                    <th class="whitespace-nowrap">기능</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">항공</td>
                                                                    <td>대한항공 (KE787) - 인천공항 00:00 ~ 제주공항 00:00</td>
                                                                    <td>항공료 100,000,000</td>
                                                                    <td>항공료 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">골프장</td>
                                                                    <td>
                                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br/>
                                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                                    </td>
                                                                    <td>
                                                                        그린피 100,000,000<br/>
                                                                        카트피 10,000,000
                                                                    </td>
                                                                    <td>그린피 10,000,0000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">일정</td>
                                                                    <td>호텔 체크인 후 휴식</td>
                                                                    <td>일정비 100,000,000</td>
                                                                    <td>일정비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">숙박</td>
                                                                    <td>미야코 호텔 하카타 (슈페리얼 트윈 또는 동급)</td>
                                                                    <td>숙박비 100,000,000</td>
                                                                    <td>숙박비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">식사</td>
                                                                    <td>
                                                                        조식 - 호텔식<br/>
                                                                        중식 - 클럽식 (단품)<br/>
                                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                                    </td>
                                                                    <td> 
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">운영비</td>
                                                                    <td>
                                                                        운영 수수료
                                                                    </td>
                                                                    <td> 
                                                                        -
                                                                    </td>
                                                                    <td>
                                                                        운영비 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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


                <!-- 기획서상 3-3 견적상세 (1차)3 추후삭제 -->
                <div class="p-3 border rounded-md text-base border-danger text-danger font-medium mb-4">기획서상 3-3 견적상세 (1차)3</div>
                
                <div class="grid grid-cols-12 gap-6">
                    <!-- 좌측 -->
                    <div class="col-span-12 xl:col-span-3">
                        <div class="intro-y">
                            <div class="flex h-[38px]">
                                <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">추천견적</h3>
                                <button type="button" class="btn btn-primary ml-3">견적작성</button>
                            </div>
                            <!-- 좌측 box -->
                            <div class="box p-5 mt-2 overflow-y-scroll max-h-[748px]">
                                <ul class="flex flex-col gap-3">
                                    <li class="bg-teal-50 p-4 rounded-md border border-teal-600 shadow-md">
                                        <div class="flex items-center">
                                            <span>요청 2024.05.01</span>
                                            <div class="bg-teal-600 text-white p-1 text-sm ml-auto rounded-md">예약요청</div>
                                        </div>
                                        <div class="mt-2 text-sm">대한민국 | 서울/경기도</div>
                                        <div class="mt-2 text-base font-semibold">베어크리크 (춘천)</div>
                                        <div class="flex justify-end text-base font-semibold pt-2 mt-2 border-t">KRW 100,000,000</div>
                                    </li>
                                    <li class="bg-blue-50 p-4 rounded-md border border-blue-300 shadow-md">
                                        <div class="flex items-center">
                                            <span>요청 2024.05.01</span>
                                            <div class="bg-blue-600 text-white p-1 text-sm ml-auto rounded-md">예약확정</div>
                                        </div>
                                        <div class="mt-2 text-sm">대한민국 | 서울/경기도</div>
                                        <div class="mt-2 text-base font-semibold">베어크리크 (춘천)</div>
                                        <div class="flex justify-end text-base font-semibold pt-2 mt-2 border-t">KRW 100,000,000</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 우측 -->
                    <div class="col-span-12 xl:col-span-9">
                        <div class="intro-y">
                            <div class="flex h-[38px]">
                                <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">상세견적</h3>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn btn-primary-soft" onclick="modalOpen01('reservation_request-modal')">예약요청</button>
                                    <i data-lucide="move-right" class="w-4 h-4"></i>
                                    <button type="button" class="btn btn-secondary-soft">예약요청</button>
                                    <i data-lucide="move-right" class="w-4 h-4"></i>
                                    <button type="button" class="btn btn-primary" onclick="modalOpen01('reservation_info-modal')">예약안내</button>
                                </div>
                            </div>
                            <!-- 우측 box -->
                            <div class="box p-5 mt-2">
                                <div class="flex flex-col gap-2 md:gap-4">
                                    <div class="flex-1 flex flex-wrap gap-3">
                                        <p class="mt-2 w-16 font-medium">상품명</p>
                                        <input type="text" class="form-control flex-1" value="후쿠오카&나가사키 골프 3박 4일">
                                    </div>
                                    <div class="flex-1 flex-col md:flex-row flex flex-wrap gap-2 md:gap-4">
                                        <div class="flex-1 flex gap-3">
                                            <p class="mt-2 w-16 font-medium">상품지역</p>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="right_est_01_01" name="right_est_01">
                                                <label class="form-check-label" for="right_est_01_01">해외</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="right_est_01_02" name="right_est_01">
                                                <label class="form-check-label" for="right_est_01_02">국내</label>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex gap-3">
                                            <p class="mt-2 w-16 font-medium">일정</p>
                                            <div class="relative w-full flex-1">
                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> 
                                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                                </div>
                                                <input type="text" class="datepicker form-control pl-12">
                                            </div>
                                        </div>
                                        <div class="flex-1 flex gap-3">
                                            <p class="mt-2 w-16 font-medium">인원수</p>
                                            <input type="text" class="form-control flex-1" value="40,000">
                                        </div>
                                        <div class="flex-1 flex  gap-3">
                                            <p class="mt-2 w-16 font-medium">팀수</p>
                                            <input type="text" class="form-control flex-1" value="10,000">
                                        </div>
                                    </div>
                                    <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                        <div class="flex-1 flex flex-wrap gap-3">
                                            <p class="mt-2 w-16 font-medium">매입가</p>
                                            <div class="flex-1 flex items-center">
                                                <input type="text" class="form-control" value="20,000,000,000">
                                                <div class="form-check ml-2">
                                                    <input type="checkbox" class="form-check-input" id="right_est_01_03">
                                                    <label class="form-check-label" for="right_est_01_03">VAT</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap gap-3">
                                            <p class="mt-2 w-16 font-medium">수수료</p>
                                            <div class="flex-1 flex items-center">
                                                <input type="text" class="form-control" value="20,000,000,000">
                                                <div class="form-check ml-2">
                                                    <input type="checkbox" class="form-check-input" id="right_est_01_04">
                                                    <label class="form-check-label" for="right_est_01_04">VAT</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex gap-3">
                                            <p class="mt-2 w-16 font-medium">견적표기</p>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="right_est_02_01" name="right_est_02">
                                                <label class="form-check-label" for="right_est_02_01">전체</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="right_est_02_02" name="right_est_02">
                                                <label class="form-check-label" for="right_est_02_02">인당</label>
                                            </div>
                                            <div class="form-check ml-2">
                                                <input type="checkbox" class="form-check-input" id="right_est_02_03" name="right_est_02">
                                                <label class="form-check-label" for="right_est_02_03">상세</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 상품정보 탭 -->
                                    <div class="flex-1 flex flex-wrap gap-3">
                                        <p class="mt-2 w-16 font-medium">상품정보</p>
                                        <div class="flex-1 flex flex-wrap items-center">
                                            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                                                <li id="bylanguage-1-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-1" type="button" role="tab" aria-controls="bylanguage-tab-1" aria-selected="true">포함사항</button> 
                                                </li>
                                                <li id="bylanguage-2-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-2" type="button" role="tab" aria-controls="bylanguage-tab-2" aria-selected="false">불포함사항</button> 
                                                </li>
                                                <li id="bylanguage-3-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-3" type="button" role="tab" aria-controls="bylanguage-tab-3" aria-selected="false">유의사항</button> 
                                                </li>
                                                <li id="bylanguage-4-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-4" type="button" role="tab" aria-controls="bylanguage-tab-4" aria-selected="false">선택/기타사항</button> 
                                                </li>
                                            </ul>

                                            <div class="tab-content w-full border-primary">
                                                
                                                <!-- 포함사항 -->
                                                <div id="bylanguage-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-1-tab">
                                                    <textarea type="text" class="p-4 text-slate-500 h-[150px] overflow-y-scroll border border-t-0 rounded-b-md w-full" disabled>그린피+카트피 18홀X 3회 호텔 3박 (조식 포함)</textarea>
                                                </div>

                                                <!-- 불포함사항 -->
                                                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                                                    <textarea type="text" class="p-4 text-slate-500 h-[150px] overflow-y-scroll border border-t-0 rounded-b-md w-full" disabled>그린피+카트피 18홀X 3회 호텔 3박 (조식 포함)</textarea>
                                                </div>

                                                <!-- 유의사항 -->
                                                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">
                                                    <textarea type="text" class="p-4 text-slate-500 h-[150px] overflow-y-scroll border border-t-0 rounded-b-md w-full" disabled>그린피+카트피 18홀X 3회 호텔 3박 (조식 포함)</textarea>
                                                </div>

                                                <!-- 선택/기타사항 -->
                                                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-4-tab">
                                                    <textarea type="text" class="p-4 text-slate-500 h-[150px] overflow-y-scroll border border-t-0 rounded-b-md w-full" disabled>그린피+카트피 18홀X 3회 호텔 3박 (조식 포함)</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 일정탭 -->
                                    <div class="flex-1 flex flex-wrap flex-col gap-1 overflow-x-scroll">
                                        <div class="flex-1 flex">
                                            <button class="btn btn btn-warning md:ml-auto" data-tw-toggle="modal" data-tw-target="#schedule-modal">일정추가</button>
                                        </div>
                                        <div class="flex-1 flex flex-wrap items-center min-w-[780px]">
                                            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                                                <li id="bylanguage-1-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-5" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="true">1일 (24.04.09)</button> 
                                                </li>
                                                <li id="bylanguage-2-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-6" type="button" role="tab" aria-controls="bylanguage-tab-6" aria-selected="false">2일 (24.04.10)</button> 
                                                </li>
                                                <li id="bylanguage-3-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-7" type="button" role="tab" aria-controls="bylanguage-tab-7" aria-selected="false">3일 (24.04.11)</button> 
                                                </li>
                                                <li id="bylanguage-4-tab" class="nav-item" role="presentation"> 
                                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-8" type="button" role="tab" aria-controls="bylanguage-tab-8" aria-selected="false">4일 (24.04.12)</button> 
                                                </li>
                                            </ul>

                                            <div class="tab-content w-full border-primary">
                                                
                                                <!-- 포함사항 -->
                                                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-5-tab">
                                                    
                                                    <div class="">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="text-center bg-slate-100">
                                                                    <th class="whitespace-nowrap">항목</th>
                                                                    <th class="whitespace-nowrap">일정</th>
                                                                    <th class="whitespace-nowrap">매입가</th>
                                                                    <th class="whitespace-nowrap">수수료</th>
                                                                    <th class="whitespace-nowrap">기능</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">항공</td>
                                                                    <td>대한항공 (KE787) - 인천공항 00:00 ~ 제주공항 00:00</td>
                                                                    <td>항공료 100,000,000</td>
                                                                    <td>항공료 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">골프장</td>
                                                                    <td>
                                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br/>
                                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                                    </td>
                                                                    <td>
                                                                        그린피 100,000,000<br/>
                                                                        카트피 10,000,000
                                                                    </td>
                                                                    <td>그린피 10,000,0000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">일정</td>
                                                                    <td>호텔 체크인 후 휴식</td>
                                                                    <td>일정비 100,000,000</td>
                                                                    <td>일정비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">숙박</td>
                                                                    <td>미야코 호텔 하카타 (슈페리얼 트윈 또는 동급)</td>
                                                                    <td>숙박비 100,000,000</td>
                                                                    <td>숙박비 10,000,000</td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">식사</td>
                                                                    <td>
                                                                        조식 - 호텔식<br/>
                                                                        중식 - 클럽식 (단품)<br/>
                                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                                    </td>
                                                                    <td> 
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50 text-center">운영비</td>
                                                                    <td>
                                                                        운영 수수료
                                                                    </td>
                                                                    <td> 
                                                                        -
                                                                    </td>
                                                                    <td>
                                                                        운영비 10,000,000
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>

                                                <!-- 불포함사항 -->
                                                <div id="bylanguage-tab-6" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-6-tab">
                                                     <div class="overflow-x-auto">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="text-center bg-slate-100">
                                                                    <th class="whitespace-nowrap">항목</th>
                                                                    <th class="whitespace-nowrap">일정</th>
                                                                    <th class="whitespace-nowrap">매입가</th>
                                                                    <th class="whitespace-nowrap">수수료</th>
                                                                    <th class="whitespace-nowrap">기능</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">항공</td>
                                                                    <td>대한항공 (KE787) - 인천공항 00:00 ~ 제주공항 00:00</td>
                                                                    <td>항공료 100,000,000</td>
                                                                    <td>항공료 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">골프장</td>
                                                                    <td>
                                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br/>
                                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                                    </td>
                                                                    <td>
                                                                        그린피 100,000,000<br/>
                                                                        카트피 10,000,000
                                                                    </td>
                                                                    <td>그린피 10,000,0000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">일정</td>
                                                                    <td>호텔 체크인 후 휴식</td>
                                                                    <td>일정비 100,000,000</td>
                                                                    <td>일정비 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">숙박</td>
                                                                    <td>미야코 호텔 하카타 (슈페리얼 트윈 또는 동급)</td>
                                                                    <td>숙박비 100,000,000</td>
                                                                    <td>숙박비 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">식사</td>
                                                                    <td>
                                                                        조식 - 호텔식<br/>
                                                                        중식 - 클럽식 (단품)<br/>
                                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                                    </td>
                                                                    <td> 
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">운영비</td>
                                                                    <td>
                                                                        운영 수수료
                                                                    </td>
                                                                    <td> 
                                                                        -
                                                                    </td>
                                                                    <td>
                                                                        운영비 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <!-- 유의사항 -->
                                                <div id="bylanguage-tab-7" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-7-tab">
                                                <div class="overflow-x-auto">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="text-center bg-slate-100">
                                                                    <th class="whitespace-nowrap">항목</th>
                                                                    <th class="whitespace-nowrap">일정</th>
                                                                    <th class="whitespace-nowrap">매입가</th>
                                                                    <th class="whitespace-nowrap">수수료</th>
                                                                    <th class="whitespace-nowrap">기능</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">항공</td>
                                                                    <td>대한항공 (KE787) - 인천공항 00:00 ~ 제주공항 00:00</td>
                                                                    <td>항공료 100,000,000</td>
                                                                    <td>항공료 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">골프장</td>
                                                                    <td>
                                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br/>
                                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                                    </td>
                                                                    <td>
                                                                        그린피 100,000,000<br/>
                                                                        카트피 10,000,000
                                                                    </td>
                                                                    <td>그린피 10,000,0000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">일정</td>
                                                                    <td>호텔 체크인 후 휴식</td>
                                                                    <td>일정비 100,000,000</td>
                                                                    <td>일정비 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">숙박</td>
                                                                    <td>미야코 호텔 하카타 (슈페리얼 트윈 또는 동급)</td>
                                                                    <td>숙박비 100,000,000</td>
                                                                    <td>숙박비 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">식사</td>
                                                                    <td>
                                                                        조식 - 호텔식<br/>
                                                                        중식 - 클럽식 (단품)<br/>
                                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                                    </td>
                                                                    <td> 
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">운영비</td>
                                                                    <td>
                                                                        운영 수수료
                                                                    </td>
                                                                    <td> 
                                                                        -
                                                                    </td>
                                                                    <td>
                                                                        운영비 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <!-- 선택/기타사항 -->
                                                <div id="bylanguage-tab-8" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-8-tab">
                                                <div class="overflow-x-auto">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="text-center bg-slate-100">
                                                                    <th class="whitespace-nowrap">항목</th>
                                                                    <th class="whitespace-nowrap">일정</th>
                                                                    <th class="whitespace-nowrap">매입가</th>
                                                                    <th class="whitespace-nowrap">수수료</th>
                                                                    <th class="whitespace-nowrap">기능</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">항공</td>
                                                                    <td>대한항공 (KE787) - 인천공항 00:00 ~ 제주공항 00:00</td>
                                                                    <td>항공료 100,000,000</td>
                                                                    <td>항공료 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">골프장</td>
                                                                    <td>
                                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br/>
                                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br/>
                                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                                    </td>
                                                                    <td>
                                                                        그린피 100,000,000<br/>
                                                                        카트피 10,000,000
                                                                    </td>
                                                                    <td>그린피 10,000,0000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">일정</td>
                                                                    <td>호텔 체크인 후 휴식</td>
                                                                    <td>일정비 100,000,000</td>
                                                                    <td>일정비 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">숙박</td>
                                                                    <td>미야코 호텔 하카타 (슈페리얼 트윈 또는 동급)</td>
                                                                    <td>숙박비 100,000,000</td>
                                                                    <td>숙박비 10,000,000</td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">식사</td>
                                                                    <td>
                                                                        조식 - 호텔식<br/>
                                                                        중식 - 클럽식 (단품)<br/>
                                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                                    </td>
                                                                    <td> 
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        식비 100,000,000<br/>
                                                                        연회장 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cursor-pointer" onclick="modalOpen01('schedule-modal')">
                                                                    <td class="bg-slate-50">운영비</td>
                                                                    <td>
                                                                        운영 수수료
                                                                    </td>
                                                                    <td> 
                                                                        -
                                                                    </td>
                                                                    <td>
                                                                        운영비 10,000,000
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger">삭제</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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


            </div>

        </div>
        
        <!-- 가입자선택 모달 -->
        <div id="subscriber_sel-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">가입자 선택</h2> 
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('subscriber_sel-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- 내용 -->
                        <div class="overflow-y-scroll relative h-[460px]">
                            <div class="flex items-center flex-wrap gap-2 sticky top-0 bg-white">
                                <div>
                                    <select name="" id="" class="form-select">
                                        <option value="">구분</option>
                                        <option value="">...</option>
                                    </select>
                                </div>
                                <div class="flex-1">
                                    <input type="text" class="form-control" placeholder="가입자명, 담당자명">
                                </div>
                                <button type="button" class="btn btn-primary-soft">검색</button>
                            </div>
                            <ul class="flex flex-col gap-2 mt-2">
                                <li>
                                    <input type="radio" id="estlist01" value="" class="hidden peer" name="eslist">
                                    <label for="estlist01" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                        <div class="block">
                                            <div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
                                            <div class="w-full text-base">담당자명</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="estlist02" value="" class="hidden peer" name="eslist">
                                    <label for="estlist02" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                        <div class="block">
                                            <div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
                                            <div class="w-full text-base">담당자명</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="estlist03" value="" class="hidden peer" name="eslist">
                                    <label for="estlist03" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                        <div class="block">
                                            <div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
                                            <div class="w-full text-base">담당자명</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="estlist04" value="" class="hidden peer" name="eslist">
                                    <label for="estlist04" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                        <div class="block">
                                            <div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
                                            <div class="w-full text-base">담당자명</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="estlist05" value="" class="hidden peer" name="eslist">
                                    <label for="estlist05" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                        <div class="block">
                                            <div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
                                            <div class="w-full text-base">담당자명</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="estlist06" value="" class="hidden peer" name="eslist">
                                    <label for="estlist06" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                        <div class="block">
                                            <div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
                                            <div class="w-full text-base">담당자명</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="estlist07" value="" class="hidden peer" name="eslist">
                                    <label for="estlist07" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                        <div class="block">
                                            <div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
                                            <div class="w-full text-base">담당자명</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="estlist08" value="" class="hidden peer" name="eslist">
                                    <label for="estlist08" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                        <div class="block">
                                            <div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
                                            <div class="w-full text-base">담당자명</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="flex gap-2 justify-center mt-5">
                            <button type="button" class="px-6 btn btn-primary" onclick="closeModal('subscriber_sel-modal')">적용하기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 지역선택 모달 -->
        <div id="region-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header justify-between">
                        <h4 class="text-base font-bold">지역 선택</h4>
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('region-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body !px-0 !pb-0">
                        <div class="flex-wrap flex items-center px-4 border-b border-slate-200 font-semibold text-slate-500">
                            <!-- 선택시 border-b-4 border-primary 클래스 추가 -->
                            <button type="button" class="py-3 px-4 border-b-4 border-primary text-black">미주</button>
                            <button type="button" class="py-3 px-4">유럽</button>
                            <button type="button" class="py-3 px-4">아시아</button>
                            <button type="button" class="py-3 px-4">남태평양</button>
                            <button type="button" class="py-3 px-4">아프리카</button>
                            <button type="button" class="py-3 px-4">중동/기타</button>
                        </div>
                        <div class="flex items-start pt-4">
                            <div class="w-24 md:w-32 pl-2 md:pl-4 pr-2 overflow-y-auto text-slate-500 text-left" style="max-height:calc(70vh - 220px)">
                                <!-- 선택시 bg-primary text-white 클래스 추가 -->
                                <button type="button" class="w-full h-14 mb-1 px-2 rounded text-left bg-primary text-white">일본</button>
                                <button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">대한민국</button>
                                <button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">태국</button>
                                <button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">필리핀</button>
                                <button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">베트남</button>
                                <button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">미얀마</button>
                                <button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">인도네시아</button>
                            </div>
                            <div class="flex-1 grid grid-cols-2 md:grid-cols-4 gap-3 px-4 overflow-y-auto" style="max-height:calc(70vh - 220px)">
                                <!-- 선택시 btn-outline-primary 클래스 추가 -->
                                <button type="button" class="h-14 btn btn-outline-primary">미야자키</button>
                                <button type="button" class="h-14 btn btn-secondary-soft">오키나와</button>
                                <button type="button" class="h-14 btn btn-secondary-soft">나가사키</button>
                                <button type="button" class="h-14 btn btn-secondary-soft">도쿄/하코네</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="relative flex justify-end w-full gap-3">
                            <button type="button" class="btn btn-primary" onclick="closeModal('region-modal')">적용하기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 수정사항 모달 -->
        <div id="fixes-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header justify-between">
                        <h4 class="text-base font-bold">수정사항</h4>
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('fixes-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="h-[380px] overflow-y-hidden">
                            <ul class="flex flex-col gap-2">
                                <li class="p-2 rounded-md bg-slate-100 hover:bg-blue-100">2024.05.01 11:22:33</li>
                                <li class="p-2 rounded-md bg-slate-100 hover:bg-blue-100">인원 : 20 > 25</li>
                                <li class="p-2 rounded-md bg-slate-100 hover:bg-blue-100">희망지역 : 서울/경기 > 서울/경기, 충청도</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 상담내역 모달 -->
        <div id="consultation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header justify-between">
                        <h4 class="text-base font-bold">상담내역</h4>
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('consultation-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="h-[380px] overflow-y-scroll relative">
                            <ul class="flex flex-col gap-2">
                                <li class="p-2 rounded-md bg-slate-50">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm">2024.05.01 11:22:33</span>
                                        <button type="button" class="btn btn-sm btn-danger-soft">삭제</button>
                                    </div>
                                    <div class="mt-2">
                                        상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용
                                    </div>
                                </li>
                                <li class="p-2 rounded-md bg-slate-50">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm">2024.05.01 11:22:33</span>
                                        <button type="button" class="btn btn-sm btn-danger-soft">삭제</button>
                                    </div>
                                    <div class="mt-2">
                                        상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용
                                    </div>
                                </li>
                                <li class="p-2 rounded-md bg-slate-50">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm">2024.05.01 11:22:33</span>
                                        <button type="button" class="btn btn-sm btn-danger-soft">삭제</button>
                                    </div>
                                    <div class="mt-2">
                                        상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용
                                    </div>
                                </li>
                                <li class="p-2 rounded-md bg-slate-50">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm">2024.05.01 11:22:33</span>
                                        <button type="button" class="btn btn-sm btn-danger-soft">삭제</button>
                                    </div>
                                    <div class="mt-2">
                                        상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용 상담내용
                                    </div>
                                </li>
                            </ul>
                            <div class="flex items-center gap-2 mt-2 bg-white sticky bottom-0">
                                <textarea name="" id="" class="form-control flex-1"></textarea>
                                <button type="button" class="btn btn-primary">상담<br/>등록</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 일정 모달 -->
        <div id="schedule-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header justify-between">
                        <h4 class="text-base font-bold">일정</h4>
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('schedule-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="flex flex-wrap items-center">
                            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                                <li id="bylanguage-10-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-10" type="button" role="tab" aria-controls="bylanguage-tab-10" aria-selected="true">항공</button> 
                                </li>
                                <li id="bylanguage-11-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-11" type="button" role="tab" aria-controls="bylanguage-tab-11" aria-selected="false">골프장</button> 
                                </li>
                                <li id="bylanguage-12-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-12" type="button" role="tab" aria-controls="bylanguage-tab-12" aria-selected="false">숙박</button> 
                                </li>
                                <li id="bylanguage-13-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-13" type="button" role="tab" aria-controls="bylanguage-tab-13" aria-selected="false">일정</button> 
                                </li>
                                <li id="bylanguage-14-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-14" type="button" role="tab" aria-controls="bylanguage-tab-14" aria-selected="false">식사</button> 
                                </li>
                                <li id="bylanguage-15-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-15" type="button" role="tab" aria-controls="bylanguage-tab-15" aria-selected="false">차량</button> 
                                </li>
                                <li id="bylanguage-16-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-16" type="button" role="tab" aria-controls="bylanguage-tab-16" aria-selected="false">수수료</button> 
                                </li>
                            </ul>

                            <div class="tab-content w-full border-primary mt-4">
                                
                                <!-- 모달 항공 -->
                                <div id="bylanguage-tab-10" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-10-tab">
                                    <div class="flex flex-wrap flex-col gap-2 md:gap-4">
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">항공사 <span class="text-danger">*</span></p>
                                                <input type="text" class="form-control flex-1" value="대한항공">
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">편명 <span class="text-danger">*</span></p>
                                                <input type="text" class="form-control flex-1" value="KE787">
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">출발 <span class="text-danger">*</span></p>
                                                <div class="flex-1 flex items-center">
                                                    <select name="" id="" class="form-select">
                                                        <option value="">08</option>
                                                        <option value="">...</option>
                                                    </select>
                                                    <select name="" id="" class="form-select ml-1">
                                                        <option value="">00</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">공항 <span class="text-danger">*</span></p>
                                                <div class="flex-1 flex items-center">
                                                    <input type="text" class="form-control flex-1" value="인천 국제공항">
                                                    <button class="btn btn-primary ml-1" onclick="modalOpen02('airport_select-modal')">공항선택</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">도착 <span class="text-danger">*</span></p>
                                                <div class="flex-1 flex items-center">
                                                    <select name="" id="" class="form-select">
                                                        <option value="">08</option>
                                                        <option value="">...</option>
                                                    </select>
                                                    <select name="" id="" class="form-select ml-1">
                                                        <option value="">00</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">공항 <span class="text-danger">*</span></p>
                                                <div class="flex-1 flex items-center">
                                                    <input type="text" class="form-control flex-1" value="후쿠오카 국제공항">
                                                    <button class="btn btn-primary ml-1" onclick="modalOpen02('airport_select-modal')">공항선택</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">항공비</p>
                                                <div class="flex-1 flex flex-col md:flex-row items-center gap-2">
                                                   <input type="text" class="form-control" value="1,000,000"> x
                                                   <input type="text" class="form-control" value="인원수"> =
                                                   <input type="text" class="form-control" value="1,000,000,000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 골프장 -->
                                <div id="bylanguage-tab-11" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-11-tab">
                                    <div class="flex flex-wrap flex-col gap-2 md:gap-4">
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">골프장 <span class="text-danger">*</span></p>
                                                <div class="flex-1 flex items-center">
                                                    <input type="text" class="form-control flex-1" value=" 오션 팰리스 GC">
                                                    <button class="btn btn-primary ml-1" onclick="modalOpen01('golf_select-modal')">골프장선택</button>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">홀 <span class="text-danger">*</span></p>
                                                <div class="flex items-center">
                                                    <input type="text" class="form-control w-full md:w-16 text-center" value="18">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">티오프 <span class="text-danger">*</span></p>
                                                <textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
                                            </div>
                                        </div>
                                        <!-- 통합금액일 때 -->
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium">금액설정</p>
                                                <div class="flex-1 flex flex-col gap-2">
                                                    <div class="flex-1 flex items-center">
                                                        <div class="form-check">
                                                            <input id="check_money01_01" class="form-check-input" type="radio" name="check_money01" value="" checked>
                                                            <label class="form-check-label" for="check_money01_01">통합금액</label>
                                                        </div>
                                                        <div class="form-check ml-2">
                                                            <input id="check_money01_02" class="form-check-input" type="radio" name="check_money01" value="">
                                                            <label class="form-check-label" for="check_money01_02">개별금액</label>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
                                                        <input type="text" class="form-control lg:w-auto" value="1,000,000">
                                                        x
                                                        <select name="" id="" class="form-select lg:w-auto">
                                                            <option value="">인원</option>
                                                            <option value="">팀</option>
                                                        </select>
                                                        =
                                                        <input type="text" class="form-control lg:w-auto" value="1,000,000,000">
                                                        <div class="flex-1 flex lg:items-center w-full lg:w-auto gap-2">
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money02_01" class="form-check-input" type="checkbox" name="check_money02" value="">
                                                                <label class="form-check-label" for="check_money02_01">그린피</label>
                                                            </div>
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money02_02" class="form-check-input" type="checkbox" value="">
                                                                <label class="form-check-label" for="check_money02_02">카트피</label>
                                                            </div>
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money02_03" class="form-check-input" type="checkbox" value="">
                                                                <label class="form-check-label" for="check_money02_03">캐디피</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 개별금액일 때 -->
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium">금액설정</p>
                                                <div class="flex-1 flex flex-col gap-2">
                                                    <div class="flex-1 flex items-center">
                                                        <div class="form-check">
                                                            <input id="check_money01_03" class="form-check-input" type="radio" name="check_money02" value="">
                                                            <label class="form-check-label" for="check_money01_03">통합금액</label>
                                                        </div>
                                                        <div class="form-check ml-2">
                                                            <input id="check_money01_04" class="form-check-input" type="radio" name="check_money02" value="" checked>
                                                            <label class="form-check-label" for="check_money01_04">개별금액</label>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 flex flex-col gap-2">
                                                        <div class="flex-1 flex items-center gap-2">
                                                            <div class="form-check shrink-0">
                                                                <label class="form-check-label w-16 font-medium" for="check_money03_01">그린피</label>
                                                                <input id="check_money03_01" class="form-check-input" type="checkbox" value="">
                                                            </div>
                                                            <div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
                                                                <input type="text" class="form-control flex-1" value="1,000,000"> x
                                                                <select name="" id="" class="form-select flex-1">
                                                                    <option value="">인원</option>
                                                                    <option value="">팀</option>
                                                                </select> =
                                                                <input type="text" class="form-control flex-1" value="1,000,000,000">
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 flex items-center gap-2">
                                                            <div class="form-check shrink-0">
                                                                <label class="form-check-label w-16 font-medium" for="check_money03_01">카트피</label>
                                                                <input id="check_money03_01" class="form-check-input" type="checkbox" value="">
                                                            </div>
                                                            <div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
                                                                <input type="text" class="form-control flex-1" value="1,000,000"> x
                                                                <select name="" id="" class="form-select flex-1">
                                                                    <option value="">인원</option>
                                                                    <option value="">팀</option>
                                                                </select> =
                                                                <input type="text" class="form-control flex-1" value="1,000,000,000">
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 flex items-center gap-2">
                                                            <div class="form-check shrink-0">
                                                                <label class="form-check-label w-16 font-medium" for="check_money03_01">캐디피</label>
                                                                <input id="check_money03_01" class="form-check-input" type="checkbox" value="">
                                                            </div>
                                                            <div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
                                                                <input type="text" class="form-control flex-1" value="1,000,000"> x
                                                                <select name="" id="" class="form-select flex-1">
                                                                    <option value="">인원</option>
                                                                    <option value="">팀</option>
                                                                </select> =
                                                                <input type="text" class="form-control flex-1" value="1,000,000,000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">포함</p>
                                                <textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">불포함</p>
                                                <textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 숙박 -->
                                <div id="bylanguage-tab-12" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-12-tab">
                                    <div class="flex flex-wrap flex-col gap-2 md:gap-4">
                                        <div class="flex-1 flex flex-wrap gap-3">
                                            <p class="mt-2 w-16 font-medium">숙박 <span class="text-danger">*</span></p>
                                            <div class="flex-1 flex items-center">
                                                <input type="text" class="form-control flex-1" value="미야코 호텔 하카타">
                                                <button class="btn btn-primary ml-1" onclick="modalOpen01('hotel_select-modal')">숙소선택</button>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">룸타입 <span class="text-danger">*</span></p>
                                                <input type="text" class="form-control flex-1" value="슈페리얼 트윈 또는 동급">
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium ">투숙자수</p>
                                                <div class="flex-1 flex items-center gap-2">
                                                    <input type="text" class="form-control w-10" value="2">
                                                    <span>인</span>
                                                    <input type="text" class="form-control w-10" value="1">
                                                    <span>실</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">포함</p>
                                                <textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">불포함</p>
                                                <textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium">숙박비</p>
                                                <div class="flex-1 flex flex-col gap-2">
                                                    <div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
                                                        <input type="text" class="form-control lg:w-auto" value="1,000,000">
                                                        x
                                                        <input type="text" class="form-control lg:w-32" value="5,000">
                                                        =
                                                        <input type="text" class="form-control lg:w-auto" value="1,000,000,000">
                                                        <div class="flex-1 flex lg:items-center w-full lg:w-auto gap-2">
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money020_01" class="form-check-input" type="checkbox" value="">
                                                                <label class="form-check-label" for="check_money020_01">조식포함</label>
                                                            </div>
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money020_02" class="form-check-input" type="checkbox" value="">
                                                                <label class="form-check-label" for="check_money020_02">중식포함</label>
                                                            </div>
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money020_03" class="form-check-input" type="checkbox" value="">
                                                                <label class="form-check-label" for="check_money020_03">석식포함</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 일정 -->
                                <div id="bylanguage-tab-13" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-13-tab">
                                    <div class="flex flex-wrap flex-col gap-2 md:gap-4">
                                        <div class="flex-1 flex flex-wrap gap-3">
                                            <p class="mt-2 w-16 font-medium">일정 <span class="text-danger">*</span></p>
                                            <div class="flex-1 flex items-center">
                                                <input type="text" class="form-control flex-1" value="호텔 체크인 후 휴식">
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">일정설명</p>
                                                <textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex gap-3">
                                                <p class="mt-2 w-16 font-medium">이미지</p>
                                                <div class="flex-1 flex items-center flex-wrap gap-2 p-1 border rounded-md">
                                                    <input type="file" class=" w-48" id="file_upload">
                                                    <button class="btn btn-sm btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">일정비</p>
                                                <div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
                                                    <input type="text" class="form-control" value="1,000,000"> x
                                                    <input type="text" class="form-control" value="인원수"> =
                                                    <input type="text" class="form-control" value="1,000,000,000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 식사 -->
                                <div id="bylanguage-tab-14" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-14-tab">
                                    <div class="flex flex-wrap flex-col gap-2 md:gap-4">
                                         <!-- 통합금액일 때 -->
                                         <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium">금액설정</p>
                                                <div class="flex-1 flex flex-col gap-2">
                                                    <div class="flex-1 flex items-center">
                                                        <div class="form-check">
                                                            <input id="check_money10_01" class="form-check-input" type="radio" name="check_money10" value="" checked>
                                                            <label class="form-check-label" for="check_money10_01">통합금액</label>
                                                        </div>
                                                        <div class="form-check ml-2">
                                                            <input id="check_money10_02" class="form-check-input" type="radio" name="check_money10" value="">
                                                            <label class="form-check-label" for="check_money10_02">개별금액</label>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
                                                        <div class="flex-1 flex lg:items-center gap-2 w-full lg:w-auto shrink-0">
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money11_01" class="form-check-input" type="checkbox" value="">
                                                                <label class="form-check-label" for="check_money11_01">조식포함</label>
                                                            </div>
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money12_01" class="form-check-input" type="checkbox" value="">
                                                                <label class="form-check-label" for="check_money12_01">중식포함</label>
                                                            </div>
                                                            <div class="form-check shrink-0">
                                                                <input id="check_money13_01" class="form-check-input" type="checkbox" value="">
                                                                <label class="form-check-label" for="check_money13_01">석식포함</label>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control lg:w-auto" value="1,000,000"> x
                                                        <input type="text" class="form-control lg:w-32" value="10,000"> =
                                                        <input type="text" class="form-control lg:w-auto" value="1,000,000,000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 개별금액일 때 -->
                                        <div class="flex-1 flex flex-wrap gap-2 md:gap-4">
                                            <div class="flex-1 flex gap-3">
                                                <p class="w-16 font-medium">금액설정</p>
                                                <div class="flex-1 flex flex-col gap-2">
                                                    <div class="flex-1 flex items-center">
                                                        <div class="form-check">
                                                            <input id="check_money20_01" class="form-check-input" type="radio" name="check_money02" value="">
                                                            <label class="form-check-label" for="check_money20_01">통합금액</label>
                                                        </div>
                                                        <div class="form-check ml-2">
                                                            <input id="check_money20_02" class="form-check-input" type="radio" name="check_money02" value="" checked>
                                                            <label class="form-check-label" for="check_money20_02">개별금액</label>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 flex flex-col gap-3">
                                                        <div class="flex-1 flex flex-col gap-2">
                                                            <div class="flex-1 flex items-center flex-col lg:flex-row gap-2">
                                                                <div class="form-check w-full lg:w-auto">
                                                                    <label class="form-check-label w-16 font-medium" for="check_money22_01">조식 <span class="text-danger">*</span></label>
                                                                    <input id="check_money22_01" class="form-check-input" type="checkbox" value="">
                                                                </div>
                                                                <div class="flex-1 w-full flex items-center gap-2 flex-col lg:flex-row">
                                                                    <input type="text" class="form-control lg:w-24" value="1,000,000"> x
                                                                    <input type="text" class="form-control lg:w-20" value="10,000"> =
                                                                    <input type="text" class="form-control lg:w-32" value="1,000,000,000">
                                                                </div>
                                                                <div class="flex-1 w-full flex items-center gap-2">
                                                                    <div class="form-check">
                                                                        <input id="check_money50_01" class="form-check-input" type="radio" name="check_money20" value="" >
                                                                        <label class="form-check-label" for="check_money50_01">룸</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input id="check_money50_02" class="form-check-input" type="radio" name="check_money20" value="" >
                                                                        <label class="form-check-label" for="check_money50_02">홀</label>
                                                                    </div>
                                                                    <div class="flex-1 flex items-center gap-2 ">
                                                                        <div class="form-check">
                                                                            <input id="check_money50_03" class="form-check-input" type="radio" name="check_money20" value="" checked>
                                                                            <label class="form-check-label shrink-0" for="check_money50_03">연회장</label>
                                                                        </div>
                                                                        <input type="text" class="form-control flex-1 w-24" value="10,000,000">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <textarea name="" id="" class="form-control h-[80px]"">치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골</textarea>
                                                        </div>
                                                        <div class="flex-1 flex flex-col gap-2">
                                                            <div class="flex-1 flex items-center flex-col lg:flex-row gap-2">
                                                                <div class="form-check w-full lg:w-auto">
                                                                    <label class="form-check-label w-16 font-medium">중식 <span class="text-danger">*</span></label>
                                                                    <input id="check_money22_01" class="form-check-input" type="checkbox" value="">
                                                                </div>
                                                                <div class="flex-1 w-full flex items-center gap-2 flex-col lg:flex-row">
                                                                    <input type="text" class="form-control lg:w-24" value="1,000,000"> x
                                                                    <input type="text" class="form-control lg:w-20" value="10,000"> =
                                                                    <input type="text" class="form-control lg:w-32" value="1,000,000,000">
                                                                </div>
                                                                <div class="flex-1 w-full flex items-center gap-2">
                                                                    <div class="form-check">
                                                                        <input id="check_money52_01" class="form-check-input" type="radio" name="check_money21" value="" >
                                                                        <label class="form-check-label" for="check_money52_01">룸</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input id="check_money52_02" class="form-check-input" type="radio" name="check_money21" value="" >
                                                                        <label class="form-check-label" for="check_money52_02">홀</label>
                                                                    </div>
                                                                    <div class="flex-1 flex items-center gap-2 ">
                                                                        <div class="form-check">
                                                                            <input id="check_money52_03" class="form-check-input" type="radio" name="check_money21" value="" checked>
                                                                            <label class="form-check-label shrink-0" for="check_money52_03">연회장</label>
                                                                        </div>
                                                                        <input type="text" class="form-control flex-1 w-24" value="10,000,000">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <textarea name="" id="" class="form-control h-[80px]"">치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골</textarea>
                                                        </div>
                                                        <div class="flex-1 flex flex-col gap-2">
                                                            <div class="flex-1 flex items-center flex-col lg:flex-row gap-2">
                                                                <div class="form-check w-full lg:w-auto">
                                                                    <label class="form-check-label w-16 font-medium">석식 <span class="text-danger">*</span></label>
                                                                    <input id="check_money22_01" class="form-check-input" type="checkbox" value="">
                                                                </div>
                                                                <div class="flex-1 w-full flex items-center gap-2 flex-col lg:flex-row">
                                                                    <input type="text" class="form-control lg:w-24" value="1,000,000"> x
                                                                    <input type="text" class="form-control lg:w-20" value="10,000"> =
                                                                    <input type="text" class="form-control lg:w-32" value="1,000,000,000">
                                                                </div>
                                                                <div class="flex-1 w-full flex items-center gap-2">
                                                                    <div class="form-check">
                                                                        <input id="check_money53_01" class="form-check-input" type="radio" name="check_money22" value="" >
                                                                        <label class="form-check-label" for="check_money53_01">룸</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input id="check_money53_02" class="form-check-input" type="radio" name="check_money22" value="" >
                                                                        <label class="form-check-label" for="check_money53_02">홀</label>
                                                                    </div>
                                                                    <div class="flex-1 flex items-center gap-2 ">
                                                                        <div class="form-check">
                                                                            <input id="check_money53_03" class="form-check-input" type="radio" name="check_money22" value="" checked>
                                                                            <label class="form-check-label shrink-0" for="check_money53_03">연회장</label>
                                                                        </div>
                                                                        <input type="text" class="form-control flex-1 w-24" value="10,000,000">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <textarea name="" id="" class="form-control h-[80px]"">치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
                                                        <div class="flex-1 flex flex-wrap gap-3">
                                                            <p class="mt-2 w-16 font-medium">포함</p>
                                                            <input type="text" class="form-control flex-1 h-[80px]" value="빔, 스크린 사용가능">
                                                        </div>
                                                        <div class="flex-1 flex flex-wrap gap-3">
                                                            <p class="mt-2 w-16 font-medium">불포함</p>
                                                            <input type="text" class="form-control flex-1 h-[80px]" value="주류, 음료 이용료">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 차량 -->
                                <div id="bylanguage-tab-15" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-15-tab">
                                    <div class="flex flex-wrap flex-col gap-2 md:gap-4">
                                        <div class="flex-1 flex flex-wrap gap-3 flex-col lg:flex-row">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">차량 <span class="text-danger">*</span></p>
                                                <select name="" id="" class="form-select flex-1">
                                                    <option value="">렌트카</option>
                                                    <option value="">...</option>
                                                </select>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">차량수</p>
                                                <input type="text" class="form-control flex-1"value="10">
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap gap-3 flex-col lg:flex-row">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">출발지 <span class="text-danger">*</span></p>
                                                <input type="text" class="form-control flex-1" value="인천 국제공항">
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">출발일시</p>
                                                <div class="flex-1 flex flex-wrap gap-2">
                                                    <select name="" id="" class="form-select flex-1">
                                                        <option value="">09</option>
                                                        <option value="">...</option>
                                                    </select>
                                                    <select name="" id="" class="form-select flex-1">
                                                        <option value="">09</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap gap-3 flex-col lg:flex-row">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">도착지 <span class="text-danger">*</span></p>
                                                <input type="text" class="form-control flex-1" value="후쿠오카 국제공항">
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="mt-2 w-16 font-medium">출발일시</p>
                                                <div class="flex-1 flex flex-wrap gap-2">
                                                    <select name="" id="" class="form-select flex-1">
                                                        <option value="">09</option>
                                                        <option value="">...</option>
                                                    </select>
                                                    <select name="" id="" class="form-select flex-1">
                                                        <option value="">09</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-col gap-2">
                                            <div class="flex-1 flex items-center flex-col lg:flex-row gap-2">
                                                <p class="mt-2 w-16 font-medium">교통비</p>
                                                <div class="flex-1 w-full flex items-center gap-2 flex-col lg:flex-row">
                                                    <input type="text" class="form-control lg:w-24" value="1,000,000"> x
                                                    <input type="text" class="form-control lg:w-20" value="10,000"> =
                                                    <input type="text" class="form-control lg:w-32" value="1,000,000,000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 수수료 -->
                                <div id="bylanguage-tab-16" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-16-tab">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium">일정</p>
                                                <div class="flex-1 flex flex-col gap-2">
                                                    <div class="flex-1 flex flex-wrap items-center gap-2">
                                                        <div class="form-check shrink-0">
                                                            <input id="check_money01_01" class="form-check-input" type="radio" name="check_money01" value="" checked>
                                                            <label class="form-check-label" for="check_money01_01">전체일정</label>
                                                        </div>
                                                        <div class="form-check shrink-0">
                                                            <input id="check_money01_02" class="form-check-input" type="radio" name="check_money01" value="">
                                                            <label class="form-check-label" for="check_money01_02">개별일정</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium">부가세</p>
                                                <div class="flex-1 flex items-center">
                                                    <input id="check_01_01" class="form-check-input" type="checkbox" name="check_01" value="">
                                                    <label class="form-check-label" for="check_01_01">전체 총액 10% 추가</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">전체/인당</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">비용추가</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">운영비</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">전체/인당 추가</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>전체/인당 비용은 견적표기 설정에서 “전체/인당” 구분에 따라 표시</div>
                                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">항공비</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">인당 추가</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">숙박비</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">룸당 추가</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">그린피</p>
                                                <div class="flex-1 flex flex-col md:flex-row gap-3 items-start md:items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">팀/인당 추가(통합:그린피/카트피)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">그린피</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">팀/인당 추가</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">카트피</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">팀/인당 추가</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>골프장에서 통합금액 / 개별금액 설정에 따라 구분표시</div>
                                        <div>팀/인당 비용은 골프장 설정에서 팀/인당 설정에 따라 표시</div>
                                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">식사</p>
                                                <div class="flex-1 flex flex-col md:flex-row gap-3 items-start md:items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">팀/인당 추가 (통합 : 조식/중식/석식)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">조식</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">인당 추가</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">중식</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">인당 추가</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">석식</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">인당 추가</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-wrap gap-3">
                                                <p class="w-16 font-medium mt-2">연회장</p>
                                                <div class="flex-1 flex gap-3 items-center">
                                                    <input type="text" class="form-control">
                                                    <span class="shrink-0">인당 추가</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>식사에서 통합금액 / 개별금액 설정에 따라 구분 표시 </div>
                                        <div>팀/인당 비용은 골프장 설정에서 팀/인당 설정에 따라 표시</div>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="relative flex justify-end w-full gap-3">
                            <button type="button" class="btn btn-primary">저장</button>
                            <button type="button" class="btn" onclick="closeModal('schedule-modal')">닫기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 예약요청 모달 -->
        <div id="reservation_request-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">예약요청</h2> 
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('reservation_request-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- 내용 -->
                        <p class="text-center">베이크리크 (춘천) (으)로 예약을 요청하시겠습니까?</p>
                        
                        <div class="flex gap-2 justify-center mt-5">
                            <button type="button" class="px-6 btn" onclick="closeModal('reservation_request-modal')">닫기</button>
                            <button type="button" class="px-6 btn btn-primary" onclick="closeModal('reservation_request-modal')">예약요청</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 예약안내 모달 -->
        <div id="reservation_info-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">예약안내</h2> 
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('reservation_info-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- 내용 -->
                        <p class="text-center">확정된 예약건에 대하여 예약안내를 요청자에게 발송하시겠습니까?</p>
                        
                        <div class="flex gap-2 justify-center mt-5">
                            <button type="button" class="px-6 btn" onclick="closeModal('reservation_info-modal')">닫기</button>
                            <button type="button" class="px-6 btn btn-primary" onclick="closeModal('reservation_info-modal')">예약안내 발송</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include_once('_footer.php'); ?>
        
    </body>
</html>
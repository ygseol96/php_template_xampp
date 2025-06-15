<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'event';
        $side_2depth = 'eventregist';
        $depth_1 = '행사관리';
        $depth_2 = '행사등록';
        // $depth_3 = '행사등록';
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="flex flex-wrap items-center justify-between sticky top-0 bg-slate-100 z-50 pt-16 md:pt-0 pb-3 border-b">
                    <div>
                        <div class="flex items-center mt-4">
                            <a href="./event_event_mng.php" class="flex items-center gap-1 text-primary">
                                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 행사목록
                            </a>
                        </div>
                        <div class="flex items-center mt-2">
                            <h2 class="text-xl font-bold mr-auto">행사 등록</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <button type="button" class="btn bg-white">등록취소</button>
                        <button type="button" class="btn btn-primary">행사등록</button>
                    </div>
                </div>

                <!-- 상세 -->
                <!-- 기획서상 4-2 행사등록 1 추후삭제 -->
                <div class="p-3 border rounded-md text-base border-danger text-danger font-medium mb-4">기획서상 4-2 행사등록 1</div>
                
                <div class="intro-y mt-10">
                    <div class="flex h-[38px]">
                        <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">기본정보</h3>
                    </div>
                    <div class="box p-5 mt-2">
                        <div class="flex flex-col gap-2 md:gap-4">
                            <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">행사명</p>
                                    <input type="text" class="form-control flex-1" value="고객 초청행사">
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <div class="flex gap-3 w-full">
                                        <p class="mt-2 w-16 font-medium">행사기간</p>
                                        <div class="relative w-full">
                                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> 
                                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                            </div>
                                            <input type="text" class="datepicker form-control pl-12">
                                        </div>
                                    </div>
                                    <div class="w-full md:w-auto flex gap-3">
                                        <p class="mt-2 w-16 font-medium">참여자수</p>
                                        <input type="text" class="form-control flex-1" value="20">
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">업체</p>
                                    <input type="text" class="form-control flex-1" value="0000 업체 > 0000 지점">
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">담당자</p>
                                    <input type="text" class="form-control flex-1" value="홍길동">
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">연락처</p>
                                    <input type="text" class="form-control flex-1" value="010-1111-1111  /  honggildong@honggildong.com">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="intro-y mt-10">
                    <div class="flex h-[38px]">
                        <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">행사 페이지 구성</h3>
                    </div>
                    <div class="box p-5 mt-2">
                        <div class="flex flex-col gap-2 md:gap-4">
                            <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                <p class="mt-2 w-16 font-medium">행사 URL</p>
                                <p class="md:mt-2">https://tbgm.com/c/2405/</p>
                                <input type="text" class="form-control flex-1" value="">
                                <button type="button" class="btn btn-primary ">중복확인</button>
                                <p class="md:mt-2">· 도메인/구분 (기업 c, 단체 g, 개인 i) / 현재년월 (YYMM) / 직접입력</p>
                            </div>
                            <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                <p class="mt-2 w-16 font-medium">행사이미지</p>
                                <div class="flex flex-col gap-2">
                                    <div class="flex-1 flex gap-2 md:gap-4">
                                        <div class="flex gap-2 md:gap-4">
                                            <p class="md:mt-2 w-16">행사일정</p>
                                            <div class="border border-slate-300 p-1 rounded-md flex justify-center items-center">
                                                <input type="file" class=" w-48" id="file_upload">
                                            </div>
                                            <button class="btn btn-danger-soft"><i data-lucide="x"></i>파일삭제</button>
                                        </div>
                                        <div class="flex gap-2 md:gap-4">
                                            <p class="md:mt-2 w-16">골프장</p>
                                            <div class="border border-slate-300 p-1 rounded-md flex justify-center items-center">
                                                <input type="file" class=" w-48" id="file_upload">
                                            </div>
                                            <button class="btn btn-danger-soft"><i data-lucide="x"></i>파일삭제</button>
                                        </div>
                                        <div class="flex gap-2 md:gap-4">
                                            <p class="md:mt-2 w-16">숙박</p>
                                            <div class="border border-slate-300 p-1 rounded-md flex justify-center items-center">
                                                <input type="file" class=" w-48" id="file_upload">
                                            </div>
                                            <button class="btn btn-danger-soft"><i data-lucide="x"></i>파일삭제</button>
                                        </div>
                                    </div>
                                    <div class="flex-1 flex gap-2 md:gap-4">
                                        <div class="flex gap-2 md:gap-4">
                                            <p class="md:mt-2 w-16">식사</p>
                                            <div class="border border-slate-300 p-1 rounded-md flex justify-center items-center">
                                                <input type="file" class=" w-48" id="file_upload">
                                            </div>
                                            <button class="btn btn-danger-soft"><i data-lucide="x"></i>파일삭제</button>
                                        </div>
                                        <div class="flex gap-2 md:gap-4">
                                            <p class="md:mt-2 w-16">후기</p>
                                            <div class="border border-slate-300 p-1 rounded-md flex justify-center items-center">
                                                <input type="file" class=" w-48" id="file_upload">
                                            </div>
                                            <button class="btn btn-danger-soft"><i data-lucide="x"></i>파일삭제</button>
                                        </div>
                                        <div class="flex gap-2 md:gap-4">
                                            <p class="md:mt-2 w-16">참여자</p>
                                            <div class="border border-slate-300 p-1 rounded-md flex justify-center items-center">
                                                <input type="file" class=" w-48" id="file_upload">
                                            </div>
                                            <button class="btn btn-danger-soft"><i data-lucide="x"></i>파일삭제</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="intro-y mt-10">
                    <div class="flex h-[38px]">
                        <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">포함/불포함 정보</h3>
                    </div>
                    <div class="box p-5 mt-2">
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-1 gap-2">
                                <p class="w-24 mt-2">포함사항</p>
                                <textarea name="" id="" class="form-control">그린피+카트피 18홀X 3회</textarea>
                            </div>
                            <div class="flex flex-1 gap-2">
                                <p class="w-24 mt-2">불포함사항</p>
                                <textarea name="" id="" class="form-control">캐디피 팀당 100,000원 (현장 지불), 그늘집 이용료</textarea>
                            </div>
                            <div class="flex flex-1 gap-2">
                                <p class="w-24 mt-2">유의사항</p>
                                <textarea name="" id="" class="form-control">2인, 5인 라운드 불가</textarea>
                            </div>
                            <div class="flex flex-1 gap-2">
                                <p class="w-24 mt-2">선택/기타사항</p>
                                <textarea name="" id="" class="form-control">싱글룸 이용시 1박당 50,000원 현장지불</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border-t my-14">

                <!-- 기획서상 4-2 행사등록2 추후삭제 -->
                <div class="p-3 border rounded-md text-base border-danger text-danger font-medium mb-4">기획서상 4-2 행사등록2</div>
                
                <div class="intro-y">
                    <div class="flex h-[38px]">
                        <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">행사일정</h3>
                        <button class="btn btn btn-warning md:ml-auto" onclick="modalOpen01('schedule-modal')">일정추가</button>
                    </div>
                    <div class="box p-5 mt-3">
                    <div class="flex-1 flex flex-wrap flex-col gap-1 overflow-x-scroll">
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
                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br>
                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br>
                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br>
                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                    </td>
                                                    <td>
                                                        그린피 100,000,000<br>
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
                                                        조식 - 호텔식<br>
                                                        중식 - 클럽식 (단품)<br>
                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                    </td>
                                                    <td> 
                                                        식비 100,000,000<br>
                                                        연회장 10,000,000
                                                    </td>
                                                    <td>
                                                        식비 100,000,000<br>
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
                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br>
                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br>
                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br>
                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                    </td>
                                                    <td>
                                                        그린피 100,000,000<br>
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
                                                        조식 - 호텔식<br>
                                                        중식 - 클럽식 (단품)<br>
                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                    </td>
                                                    <td> 
                                                        식비 100,000,000<br>
                                                        연회장 10,000,000
                                                    </td>
                                                    <td>
                                                        식비 100,000,000<br>
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
                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br>
                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br>
                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br>
                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                    </td>
                                                    <td>
                                                        그린피 100,000,000<br>
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
                                                        조식 - 호텔식<br>
                                                        중식 - 클럽식 (단품)<br>
                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                    </td>
                                                    <td> 
                                                        식비 100,000,000<br>
                                                        연회장 10,000,000
                                                    </td>
                                                    <td>
                                                        식비 100,000,000<br>
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
                                                        오션펠리스 (18홀) - 그린피, 카트피 포함<br>
                                                        2024.05.01 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br>
                                                        2024.05.02 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀<br>
                                                        2024.05.03 베어코스 06:07~06:21 IN 3팀,   06:07~06:21 OUT 3팀
                                                    </td>
                                                    <td>
                                                        그린피 100,000,000<br>
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
                                                        조식 - 호텔식<br>
                                                        중식 - 클럽식 (단품)<br>
                                                        석식 - 치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골
                                                    </td>
                                                    <td> 
                                                        식비 100,000,000<br>
                                                        연회장 10,000,000
                                                    </td>
                                                    <td>
                                                        식비 100,000,000<br>
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

                <div class="intro-y mt-10">
                    <div class="flex h-[38px]">
                        <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">참여자 명단 (참여자 총 12명) </h3>
                        <div class="ml-auto flex gap-2">
                            <button type="button" class="btn btn-primary-soft">관리자 지정</button>
                            <button type="button" class="btn btn-pending-soft" onclick="modalOpen01('invitation-modal')">고객초대</button>
                        </div>
                    </div>
                    <div class="box p-5 mt-3 h-[220px] overflow-y-scroll">
                        <ul class="grid w-full gap-6 md:grid-cols-3">
                            <li>
                                <input type="checkbox" id="option01" value="" class="hidden peer" required="">
                                <label for="option01" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-slate-300 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                    <div class="block">
                                        <div class="w-full text-sm">고객명  |  부서명  | gildong, hong | 관리자1 | 골프1팀| 숙박 2팀</div>
                                    </div>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="option02" value="" class="hidden peer" required="">
                                <label for="option02" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-slate-300 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                    <div class="block">
                                        <div class="w-full text-sm">고객명  |  부서명  | gildong, hong | 관리자1 | 골프1팀| 숙박 2팀</div>
                                    </div>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="option03" value="" class="hidden peer" required="">
                                <label for="option03" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-slate-300 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
                                    <div class="block">
                                        <div class="w-full text-sm">고객명  |  부서명  | gildong, hong | 관리자1 | 골프1팀| 숙박 2팀</div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 예약확정 모달 -->
        <div id="reservation_confirmed-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">예약확정</h2> 
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('reservation_confirmed-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- 내용 -->
                        <p class="text-center">예약요청 건에 대하여 예약을 확정하고 결제를 요청하시겠습니까?</p>
                        
                        <div class="flex gap-2 justify-center mt-5">
                            <button type="button" class="px-6 btn" onclick="closeModal('reservation_confirmed-modal')">닫기</button>
                            <button type="button" class="px-6 btn btn-primary" onclick="closeModal('reservation_confirmed-modal')">예약확정</button>
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
                                                    <button class="btn btn-primary ml-1" onclick="modalOpen02('golf_select-modal')">골프장선택</button>
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
                                                <button class="btn btn-primary ml-1" onclick="modalOpen02('hotel_select-modal')">숙소선택</button>
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

        <!-- 공항선택 모달 -->
        <div id="airport_select-modal" class="modal" tabindex="-1" aria-hidden="true">
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
                                        <button type="button" class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길일</button>
                                        <button type="button" class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길이</button>
                                        <button type="button" class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길삼</button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">공항추가 추가</button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-[1px] bg-slate-400">
                            <div class="overflow-y-auto h-[140px] md:h-[440px] p-3 bg-white">
                                <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                                <button type="button" class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">골프장</button>
                                <button type="button" class="block w-full text-left p-2">미주</button>
                                <button type="button" class="block w-full text-left p-2">유럽</button>
                                <button type="button" class="block w-full text-left p-2">아시아</button>
                                <button type="button" class="block w-full text-left p-2">남태평양</button>
                                <button type="button" class="block w-full text-left p-2">아프리카</button>
                                <button type="button" class="block w-full text-left p-2">중동/기타</button>
                            </div>
                            <div class="overflow-y-auto max-h-[auto] md:max-h-[440px] md:h-[440px] p-3 bg-white">
                                <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                                <button type="button" class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">대한민국</button>
                                <button type="button" class="block w-full text-left p-2">일본</button>
                                <button type="button" class="block w-full text-left p-2">중국</button>
                                <button type="button" class="block w-full text-left p-2">필리핀</button>
                                <button type="button" class="block w-full text-left p-2">베트남</button>
                                <button type="button" class="block w-full text-left p-2">태국</button>
                            </div>
                            <div class="overflow-y-auto max-h-[auto] md:max-h-[440px] md:h-[440px] p-3 bg-white">
                                <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                                <button type="button" class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">인천공항</button>
                                <button type="button" class="block w-full text-left p-2">제주공항</button>
                                <button type="button" class="block w-full text-left p-2">김해공항</button>
                                <button type="button" class="block w-full text-left p-2">부산공항</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 골프장선택 모달 -->
        <div id="golf_select-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">골프장 선택</h2> 
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('golf_select-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body p-3">
                        <div class="flex flex-wrap items-center gap-2">
                            <select class="form-select w-32">
                                <option>대륙선택</option>
                                <option>미주</option>
                                <option>유럽</option>
                                <option>아시아</option>
                                <option>중동</option>
                                <option>남태평양</option>
                                <option>아프리카</option>
                            </select>
                            <select class="form-select w-32">
                                <option>국가선택</option>
                            </select>
                            <select class="form-select w-32">
                                <option>지역선택</option>
                            </select>
                            <select class="form-select w-32">
                                <option>도시선택</option>
                            </select>
                        </div>
                        <div class="flex flex-wrap items-center gap-2 mt-2">
                            <select class="form-select w-40">
                                <option>골프장선택</option>
                            </select>
                            <input type="text" class="form-control w-72" placeholder="골프장명을 입력하세요">
                            <button type="button" class="btn btn-primary w-24">검색</button>
                        </div>
                        <div class="overflow-x-auto mt-5">
                            <table class="table table-sm table-hover">
                                <thead class="text-center bg-slate-100">
                                    <tr>
                                        <th class="whitespace-nowrap">번호</th>
                                        <th class="whitespace-nowrap">대륙</th>
                                        <th class="whitespace-nowrap">국가</th>
                                        <th class="whitespace-nowrap">지역</th>
                                        <th class="whitespace-nowrap">도시</th>
                                        <th class="whitespace-nowrap">골프장명</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center cursor-pointer">
                                    <tr>
                                        <td>1</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 골프장</td>
                                    </tr>
                                    <!-- tr 클릭시 bg-primary bg-opacity-10 클래스추가-->
                                    <tr class="bg-primary bg-opacity-10">
                                        <td>2</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 골프장</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 골프장</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 골프장</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 골프장</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-5 h-5 mr-1"></i> 골프장 추가</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 호텔선택 모달 -->
        <div id="hotel_select-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">호텔 선택</h2> 
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('hotel_select-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body p-3">
                        <div class="flex flex-wrap items-center gap-2">
                            <select class="form-select w-32">
                                <option>대륙선택</option>
                                <option>미주</option>
                                <option>유럽</option>
                                <option>아시아</option>
                                <option>중동</option>
                                <option>남태평양</option>
                                <option>아프리카</option>
                            </select>
                            <select class="form-select w-32">
                                <option>국가선택</option>
                            </select>
                            <select class="form-select w-32">
                                <option>지역선택</option>
                            </select>
                            <select class="form-select w-32">
                                <option>도시선택</option>
                            </select>
                        </div>
                        <div class="flex flex-wrap items-center gap-2 mt-2">
                            <select class="form-select w-40">
                                <option>호텔선택</option>
                            </select>
                            <input type="text" class="form-control w-72" placeholder="호텔명을 입력하세요">
                            <button type="button" class="btn btn-primary w-24">검색</button>
                        </div>
                        <div class="overflow-x-auto mt-5">
                            <table class="table table-hover table-sm">
                                <thead class="text-center bg-slate-100">
                                    <tr>
                                        <th class="whitespace-nowrap">번호</th>
                                        <th class="whitespace-nowrap">대륙</th>
                                        <th class="whitespace-nowrap">국가</th>
                                        <th class="whitespace-nowrap">지역</th>
                                        <th class="whitespace-nowrap">도시</th>
                                        <th class="whitespace-nowrap">골프장명</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center cursor-pointer">
                                    <tr>
                                        <td>1</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 호텔</td>
                                    </tr>
                                    <!-- tr 클릭시 bg-primary bg-opacity-10 클래스추가-->
                                    <tr class="bg-primary bg-opacity-10">
                                        <td>2</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 호텔</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 호텔</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 호텔</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>아시아</td>
                                        <td>일본</td>
                                        <td>큐슈</td>
                                        <td>도쿄</td>
                                        <td>도쿄 유명한 호텔</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-5 h-5 mr-1"></i> 호텔 추가</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 고객초대 모달 -->
        <div id="invitation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">고객초대</h2> 
                        <button type="button" class="flex items-center gap-1"  onclick="closeModal('invitation-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- 내용 -->
                         <p>행사등록이 완료되었습니다.</p>
                        <div class="p-3 border border-slate-300 flex flex-wrap gap-2 mt-3 rounded-sm">
                            <button class="btn btn-primary-soft">관리자1<i data-lucide="x" class="w-4 h-4"></i></button>
                            <button class="btn btn-primary-soft">관리자2<i data-lucide="x" class="w-4 h-4"></i></button>
                            <button class="btn btn-primary-soft">관리자3<i data-lucide="x" class="w-4 h-4"></i></button>
                        </div>

                        <div class="p-3 border border-slate-300 mt-3 rounded-sm">
                            행사정보 : 2024 신한은행 VIP 초청 행사<br/><br/>

                            일자: 2024.05.01~2024.05.03 (2박 3일)<br/><br/>

                            골프장 : 클럽 72<br/>
                            주소 : 인천 중구 공항도로 392<br/>
                            전화번호 : 1544-7272<br/><br/>

                            숙소: 메이플 비치 골프앤 리조트<br/>
                            주소: 강원도 강릉시 강동면 염전길 255<br/>
                            전화번호 : 1544-7272
                        </div>
                        
                        <div class="flex gap-2 justify-center mt-5">
                            <button type="button" class="px-6 btn btn-primary">초대하기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('_footer.php'); ?>


    </body>
</html>
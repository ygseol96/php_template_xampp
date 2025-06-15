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
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="flex flex-wrap items-center justify-between sticky top-0 bg-slate-100 z-50 pt-16 md:pt-0 pb-3 border-b">
                    <div>
                        <div class="flex items-center mt-4">
                            <a href="./golf_estimate_mng.php" class="flex items-center gap-1 text-primary">
                                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 견적목록
                            </a>
                        </div>
                        <div class="flex items-center mt-2">
                            <h2 class="text-xl font-bold mr-auto">견적 상세</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <button type="button" class="btn bg-white">견적수정</button>
                        <i data-lucide="move-right" class="w-4 h-4"></i>
                        <button type="button" class="btn btn-primary-soft">견적저장</button>
                        <button type="button" class="btn btn-primary">견적확인</button>
                        <i data-lucide="move-right" class="w-4 h-4"></i>
                        <button type="button" class="btn btn-dark">확인완료</button>
                        <button type="button" class="btn btn-primary" onclick="modalOpen01('reservation_confirmed-modal')">예약확정</button>
                    </div>
                </div>

                <!-- 상세 -->
                <!-- 기획서상 3-2 견적상세 1 (골프장) 추후삭제 -->
                <div class="p-3 border rounded-md text-base border-danger text-danger font-medium mb-4">기획서상 3-2 견적상세 1 (골프장)</div>
                
                <div class="intro-y mt-10">
                    <div class="flex h-[38px]">
                        <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">요청사항</h3>
                    </div>
                    <div class="box p-5 mt-2">
                        <div class="flex flex-col gap-2 md:gap-4">
                            <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">업체</p>
                                    <input type="text" class="form-control flex-1" value="0000 업체 > 0000 지점">
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">상품명</p>
                                    <input type="text" class="form-control flex-1" value="회원제">
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">티오프시간</p>
                                    <input type="text" class="form-control flex-1" value="06시~, 07시~ ">
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">견적제목</p>
                                    <input type="text" class="form-control flex-1" value="고객 초청행사">
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">숙소등급</p>
                                    <input type="text" class="form-control flex-1" value="5성급, 4성급">
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">숙소종류</p>
                                    <input type="text" class="form-control flex-1" value="다인실, 트윈">
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                <div class="flex-1 flex gap-3">
                                    <div class="flex gap-3 w-full">
                                        <p class="mt-2 w-16 font-medium">기간</p>
                                        <input type="text" class="form-control flex-1" value="2024.05.01 ~ 2024.05.03">
                                    </div>
                                    <div class="w-full md:w-auto flex gap-3">
                                        <p class="mt-2 w-16 font-medium">인원수</p>
                                        <input type="text" class="form-control flex-1" value="20">
                                    </div>
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">식사</p>
                                    <input type="text" class="form-control flex-1" value="라운드 전, 라운드 후">
                                </div>
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">객단가</p>
                                    <input type="text" class="form-control flex-1" value="130,000~150,000">
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-2 md:gap-4">
                                <div class="flex-1 flex gap-3">
                                    <p class="mt-2 w-16 font-medium">요청사항</p>
                                    <input type="text" class="form-control flex-1 h-24" value="오전시간, 식사, 숙박">
                                </div>
                                <div class="flex-1 flex flex-col justify-between gap-2">
                                    <div class="flex-1 flex gap-3">
                                        <p class="mt-2 w-16 font-medium">식사장소</p>
                                        <input type="text" class="form-control flex-1" value="홈 식사">
                                    </div>
                                    <div class="flex-1 flex gap-3">
                                        <p class="mt-2 w-16 font-medium">기타</p>
                                        <input type="text" class="form-control flex-1" value="빔 스크린, 마이크/엠프, 현수막">
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="intro-y mt-10">
                    <div class="flex h-[38px]">
                        <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">견적정보</h3>
                    </div>
                    <div class="box p-5 mt-2">
                       <div class="grid grid-cols-12 gap-4">
                            <!-- 좌측 -->
                            <div class="col-span-12 md:col-span-6">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-1 flex-col gap-2">
                                        <p>티오프</p>
                                        <p class="overflow-y-scroll form-control p-3 border border-slate-200">
                                            2024.05.01 베어코스 06:07 ~ 06:21 IN 3팀,<br/>
                                            2024.05.01 베어코스 06:07 ~ 06:21 IN 3팀,<br/>
                                            2024.05.01 베어코스 06:07 ~ 06:21 IN 3팀
                                        </p>
                                    </div>
                                    <div class="flex flex-1 flex-col gap-2">
                                        <p>포함사항</p>
                                        <p class="overflow-y-scroll form-control p-3 border border-slate-200">
                                            그린피, 카트피<br/>
                                            조식, 중식, 석식, 연회장<br/>
                                            빔 스크린 사용 가능, 마이크/확성기 사용 불가
                                        </p>
                                    </div>
                                    <div class="flex flex-1 flex-col gap-2">
                                        <p>불포함사항</p>
                                        <p class="overflow-y-scroll form-control p-3 border border-slate-200">
                                            그늘집 이용료<br/>
                                            캐디피 팀당 50,000원 현장 지급<br/>
                                            2인/5인 라운드 불가, 3인은 4인비용 지불
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 우측 -->
                            <div class="col-span-12 md:col-span-6">
                                <div class="grid grid-cols-12 grid-row-10 gap-2 h-full">
                                    <!-- 현장결제 -->
                                    <div class="col-span-12">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md bg-slate-50">현장결제</div>
                                    </div>
                                    <!-- 제목 -->
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md bg-emerald-50">구분</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md bg-emerald-50">항목</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md bg-emerald-50">견적가</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md bg-emerald-50">단위</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md bg-emerald-50">견적가 소개</div>
                                    </div>
                                    <!-- 첫번째라인 -->
                                    <div class="col-span-2 row-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">골프</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">그린피</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">300,000</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">20</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">6,000,000</div>
                                    </div>
                                    <!-- 두번째라인 -->
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">카트피 (팀)</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">100,000</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">20</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">6,000,000</div>
                                    </div>
                                    <!-- 세번째라인 -->
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">캐디피 (팀)</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">150,000</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">5</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">750,000</div>
                                    </div>
                                    <!-- 네번째라인 -->
                                    <div class="col-span-2 row-span-4">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">식사</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">조식</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">20,000</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">20</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">400,000</div>
                                    </div>
                                    <!-- 다섯번째라인 -->
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">중식</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">20,000</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">20</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">400,000</div>
                                    </div>
                                    <!-- 여섯번째라인 -->
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">석식</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">100,000</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">20</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">2,000,000</div>
                                    </div>
                                    <!-- 일곱번째라인 -->
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">연회장</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">500,000</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">1</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">500,000</div>
                                    </div>
                                    <!-- 여덟번째라인 -->
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">숙박</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">5성급 (2인 1실)</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">300,000</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">10</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md">750,000</div>
                                    </div>
                                    <!-- 아홉번째라인 -->
                                    <div class="col-span-9">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md bg-emerald-600 text-white">골프장 견적가</div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center h-full border border-slate-200 rounded-md bg-emerald-600 text-white">9,900,000</div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>

                <hr class="border-t my-14">

                <!-- 기획서상 3-2 견적상세 2 (골프장) 추후삭제 -->
                <div class="p-3 border rounded-md text-base border-danger text-danger font-medium mb-4">기획서상 3-2 견적상세 2 (골프장)</div>
                
                <div class="intro-y">
                    <div class="flex h-[38px]">
                        <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">결제기한</h3>
                    </div>
                    <div class="box p-5 mt-3">
                        <div class="flex flex-col lg:flex-row gap-2 lg:gap-10">
                            <span class=" font-medium lg:w-20 mt-2">패널티 금액</span>
                            <div class="flex-1 flex flex-col gap-4">
                                <div class="flex-1 flex flex-col lg:flex-row items-center">
                                    <div class="flex items-center gap-4 w-full lg:w-[260px]">
                                        <input type="checkbox" class="form-check-input">
                                        <span>내일 당일</span>
                                        <div class="flex items-center gap-2 lg:w-[120px] lg:ml-auto">
                                            <input type="text" class="form-control text-center" value="100">
                                            <span class="shrink-0">% 위약금</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col lg:flex-row items-center">
                                    <div class="flex items-center gap-4 w-full lg:w-[260px]">
                                        <input type="checkbox" class="form-check-input">
                                        <div class="flex items-center gap-2">
                                            <input type="text" class="form-control text-center" value="5">
                                            <span class="shrink-0">일전</span>
                                        </div>
                                        <div class="flex items-center gap-2 lg:w-[120px] shrink-0">
                                            <input type="text" class="form-control text-center" value="80">
                                            <span class="shrink-0">% 위약금</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col lg:flex-row items-center gap-2 lg:gap-10">
                                    <div class="flex items-center gap-4 w-full lg:w-[260px]">
                                        <input type="checkbox" class="form-check-input">
                                        <div class="flex items-center gap-2">
                                            <input type="text" class="form-control text-center" value="10">
                                            <span class="shrink-0">일전</span>
                                        </div>
                                        <div class="flex items-center gap-2 lg:w-[120px] shrink-0">
                                            <input type="text" class="form-control text-center" value="30">
                                            <span class="shrink-0">% 위약금</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col lg:flex-row items-center gap-2 lg:gap-10">
                                    <div class="flex items-center gap-4 w-full lg:w-[260px]">
                                        <input type="checkbox" class="form-check-input">
                                        <div class="flex items-center gap-2">
                                            <input type="text" class="form-control text-center" value="15">
                                            <span class="shrink-0">일전</span>
                                        </div>
                                        <div class="flex items-center gap-2 lg:w-[120px] shrink-0">
                                            <input type="text" class="form-control text-center" value="50">
                                            <span class="shrink-0">% 위약금</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col gap-4">
                                <div class="flex items-center gap-4 w-full lg:w-[350px]">
                                    <span class="w-20">명단제출기한</span>
                                    <div class="flex-1 flex items-center gap-2">
                                        <input type="text" class="form-control text-center" value="20">
                                        <span class="shrink-0">일전 미제출 자동취소</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 w-full lg:w-[350px]">
                                    <span class="w-20">결제기한</span>
                                    <div class="flex-1 flex items-center gap-2">
                                        <input type="text" class="form-control text-center" value="20">
                                        <span class="shrink-0">일전 미제출 자동취소</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <?php include_once('_footer.php'); ?>


    </body>
</html>
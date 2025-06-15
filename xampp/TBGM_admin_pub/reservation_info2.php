<?php include_once('_head.php'); ?>

<body class="mo_page p-0">
    

    <!-- BEGIN: Content -->
    <div class="content flex flex-col w-full">
        <div class="flex-1">
            <div class="flex items-center justify-between mt-8 mb-4">
                <h2 class="text-lg font-bold mr-auto">
                    골프여행 예약안내
                </h2>
                <div class="flex items-center gap-2">
                    <a href="javascript:;"><i data-lucide="x" class="w-6 h-6"></i></a>
                </div>
            </div>

            <div class="mb-4 text-slate-600">
                <div class="flex w-full md:w-auto mb-2">
                    <div class="w-20 font-bold">골프여행</div>
                    <div class="flex-1">후쿠오카&나가사키 골프 3박 4일</div>
                </div>
                <div class="flex w-full md:w-auto mb-2">
                    <div class="w-20 font-bold">여행기간</div>
                    <div class="flex-1">2024.05.01 ~ 2024.05.03</div>
                </div>
                <div class="flex w-full md:w-auto mb-2">
                    <div class="w-20 font-bold">참여인원</div>
                    <div class="flex-1">20명</div>
                </div>
                <div class="flex w-full md:w-auto mb-2">
                    <div class="w-20 font-bold">결제금액</div>
                    <div class="flex-1">인당 550,000원 (VAT 포함)</div>
                </div>
            </div>

            <div>
                <ul class="nav nav-boxed-tabs border-b border-slate-300" role="tablist">
                  
                    <li id="detail-2-tab" class="nav-item flex-1 active" role="presentation"> 
                        <button class="nav-link w-full py-2 px-0 !rounded-b-none active" data-tw-toggle="pill" data-tw-target="#detail-tab-2" type="button" role="tab" aria-controls="detail-tab-2" aria-selected="true">상세일정</button> 
                    </li>
                    <li id="detail-3-tab" class="nav-item flex-1" role="presentation"> 
                        <button class="nav-link w-full py-2 px-0 !rounded-b-none" data-tw-toggle="pill" data-tw-target="#detail-tab-3" type="button" role="tab" aria-controls="detail-tab-3" aria-selected="false">포함/불포함</button> 
                    </li>
                </ul>
                <div class="tab-content mt-5">
                    <div id="detail-tab-2" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="detail-2-tab">
                        <div id="detail-accordion" class="accordion">
                            <div class="accordion-item mb-3 p-2 bg-slate-50 rounded shadow">
                                <div id="detail-title-1" class="accordion-header">
                                    <button class="accordion-button collapsed flex items-center gap-2 !py-2 !border-0" type="button" data-tw-toggle="collapse" data-tw-target="#detail-content-1" aria-expanded="false" aria-controls="detail-content-1"> 
                                        <p> 1일차 2024.05.01</p>
                                        <div class="ml-auto flex items-center gap-2"><i data-lucide="chevron-down" class="w-6 h-6"></i> </div>
                                    </button>
                                </div>
                                <div id="detail-content-1" class="accordion-collapse collapse" aria-labelledby="detail-title-1" data-tw-parent="#detail-accordion">
                                    <div class="accordion-body pt-2 p-1 text-slate-600 leading-relaxed">
                                        <div class="font-bold text-base mb-2">골프</div>
                                        <div class="mySwiper overflow-hidden" data-per="2" data-gap="10">
                                            <div class="swiper-container">
                                                <ul class="swiper-wrapper">
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="pagination justify-center mt-2"></div>
                                        </div>
                                        <div class="py-4 px-2 text-slate-600">
                                            <div class="mb-3">
                                                <b>클럽 72</b>
                                                <div>인천 중구 공항도로 392<br/>1544-7272</div>
                                            </div>
                                            <div class="mb-3">
                                                <b>티오프타임</b>
                                                <div>하늘코스  07:00~ OUT 3팀<br/>하늘코스  07:00~ IN 2팀</div>
                                            </div>
                                        </div>

                                        <div class="font-bold text-base mb-2">숙박</div>
                                        <div class="mySwiper overflow-hidden" data-per="2" data-gap="10">
                                            <div class="swiper-container">
                                                <ul class="swiper-wrapper">
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="pagination justify-center mt-2"></div>
                                        </div>
                                        <div class="py-4 px-2 text-slate-600">
                                            <div class="mb-3">
                                                <b>하야트</b>
                                                <div>인천 중구 공항도로 392<br/>1544-7272</div>
                                            </div>
                                            <div class="mb-3">
                                                <b>룸 타입</b>
                                                <div>트윈 또는 동급<br/>2인 1실</div>
                                            </div>
                                        </div>

                                        <div class="font-bold text-base mb-2">식사</div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">조식</div>
                                            <div class="flex-1">호텔 조식<br/>주류, 음료 현장 추가결제</div>
                                        </div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">중식</div>
                                            <div class="flex-1">클럽식 (단품)<br/>메뉴 변경 / 추가시 현장 추가 결제</div>
                                        </div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">석식</div>
                                            <div class="flex-1">호텔 뷔페식<br/>주류, 음료 현장 추가결제</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 p-2 bg-slate-50 rounded shadow">
                                <div id="detail-title-2" class="accordion-header">
                                    <button class="accordion-button collapsed flex items-center gap-2 !py-2 !border-0" type="button" data-tw-toggle="collapse" data-tw-target="#detail-content-2" aria-expanded="false" aria-controls="detail-content-2"> 
                                        <p> 2일차 2024.05.02</p>
                                        <div class="ml-auto flex items-center gap-2"><i data-lucide="chevron-down" class="w-6 h-6"></i> </div>
                                    </button>
                                </div>
                                <div id="detail-content-2" class="accordion-collapse collapse" aria-labelledby="detail-title-2" data-tw-parent="#detail-accordion">
                                    <div class="accordion-body pt-2 p-1 text-slate-600 leading-relaxed">
                                        <div class="font-bold text-base mb-2">골프</div>
                                        <div class="mySwiper overflow-hidden" data-per="2" data-gap="10">
                                            <div class="swiper-container">
                                                <ul class="swiper-wrapper">
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="pagination justify-center mt-2"></div>
                                        </div>
                                        <div class="py-4 px-2 text-slate-600">
                                            <div class="mb-3">
                                                <b>클럽 72</b>
                                                <div>인천 중구 공항도로 392<br/>1544-7272</div>
                                            </div>
                                            <div class="mb-3">
                                                <b>티오프타임</b>
                                                <div>하늘코스  07:00~ OUT 3팀<br/>하늘코스  07:00~ IN 2팀</div>
                                            </div>
                                        </div>

                                        <div class="font-bold text-base mb-2">숙박</div>
                                        <div class="mySwiper overflow-hidden" data-per="2" data-gap="10">
                                            <div class="swiper-container">
                                                <ul class="swiper-wrapper">
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="pagination justify-center mt-2"></div>
                                        </div>
                                        <div class="py-4 px-2 text-slate-600">
                                            <div class="mb-3">
                                                <b>하야트</b>
                                                <div>인천 중구 공항도로 392<br/>1544-7272</div>
                                            </div>
                                            <div class="mb-3">
                                                <b>룸 타입</b>
                                                <div>트윈 또는 동급<br/>2인 1실</div>
                                            </div>
                                        </div>

                                        <div class="font-bold text-base mb-2">식사</div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">조식</div>
                                            <div class="flex-1">호텔 조식<br/>주류, 음료 현장 추가결제</div>
                                        </div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">중식</div>
                                            <div class="flex-1">클럽식 (단품)<br/>메뉴 변경 / 추가시 현장 추가 결제</div>
                                        </div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">석식</div>
                                            <div class="flex-1">호텔 뷔페식<br/>주류, 음료 현장 추가결제</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 p-2 bg-slate-50 rounded shadow">
                                <div id="detail-title-3" class="accordion-header">
                                    <button class="accordion-button collapsed flex items-center gap-2 !py-2 !border-0" type="button" data-tw-toggle="collapse" data-tw-target="#detail-content-3" aria-expanded="false" aria-controls="detail-content-3"> 
                                        <p> 3일차 2024.05.03</p>
                                        <div class="ml-auto flex items-center gap-2"><i data-lucide="chevron-down" class="w-6 h-6"></i> </div>
                                    </button>
                                </div>
                                <div id="detail-content-3" class="accordion-collapse collapse" aria-labelledby="detail-title-3" data-tw-parent="#detail-accordion">
                                    <div class="accordion-body pt-2 p-1 text-slate-600 leading-relaxed">
                                        <div class="font-bold text-base mb-2">골프</div>
                                        <div class="mySwiper overflow-hidden" data-per="2" data-gap="10">
                                            <div class="swiper-container">
                                                <ul class="swiper-wrapper">
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/golf_1.png" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="pagination justify-center mt-2"></div>
                                        </div>
                                        <div class="py-4 px-2 text-slate-600">
                                            <div class="mb-3">
                                                <b>클럽 72</b>
                                                <div>인천 중구 공항도로 392<br/>1544-7272</div>
                                            </div>
                                            <div class="mb-3">
                                                <b>티오프타임</b>
                                                <div>하늘코스  07:00~ OUT 3팀<br/>하늘코스  07:00~ IN 2팀</div>
                                            </div>
                                        </div>

                                        <div class="font-bold text-base mb-2">숙박</div>
                                        <div class="mySwiper overflow-hidden" data-per="2" data-gap="10">
                                            <div class="swiper-container">
                                                <ul class="swiper-wrapper">
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                    <li class="swiper-slide"><img class="w-full" src="./dist/images/banner/hotel_1.png" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="pagination justify-center mt-2"></div>
                                        </div>
                                        <div class="py-4 px-2 text-slate-600">
                                            <div class="mb-3">
                                                <b>하야트</b>
                                                <div>인천 중구 공항도로 392<br/>1544-7272</div>
                                            </div>
                                            <div class="mb-3">
                                                <b>룸 타입</b>
                                                <div>트윈 또는 동급<br/>2인 1실</div>
                                            </div>
                                        </div>

                                        <div class="font-bold text-base mb-2">식사</div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">조식</div>
                                            <div class="flex-1">호텔 조식<br/>주류, 음료 현장 추가결제</div>
                                        </div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">중식</div>
                                            <div class="flex-1">클럽식 (단품)<br/>메뉴 변경 / 추가시 현장 추가 결제</div>
                                        </div>
                                        <div class="flex gap-2 mb-2">
                                            <div class="w-10 font-semibold">석식</div>
                                            <div class="flex-1">호텔 뷔페식<br/>주류, 음료 현장 추가결제</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="detail-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="detail-3-tab">
                        <div class="font-bold text-base mb-2">포함</div>
                        <div class="pb-4">
                            <div>제주항공 항공료 (인천 ~ 나리타)</div>
                            <div>골프 18홀 (그린피, 카트피) 3회분</div>
                            <div>숙박 3일 (5성급 호텔 또는 골프텔)</div>
                        </div>
                        <div class="font-bold text-base mb-2">불포함</div>
                        <div class="pb-4">
                            <div>그늘집 이용료</div>
                            <div>캐디피 팀당 50,000원 현장지급</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky bottom-0 w-full bg-white z-10 flex items-center gap-2 py-4">
            <button type="button" class="btn flex-1 btn-primary">예약 요청하기</button>
            <button type="button" class="btn flex-1 btn-primary" onclick="modalOpen01('share-modal')">일정 공유하기</button>
        </div>
        

        
    </div>
    <!-- END: Content -->


    <!-- 공유하기 모달 -->
    <div id="share-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-bold text-base mr-auto">공유하기 </h2> 
                    <button class="flex items-center gap-1" onclick="modalClose('share-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                </div>
                <div class="modal-body text-slate-600">
                    <div class="mb-4 text-slate-600">골프여행을 함께하시는 분들에게 아래 내용을 복사해서 공유해주세요</div>
                    <div class="text-slate-500">
                        <p>[AGL 골프예약]</p>
                        <div class="flex gap-2 mt-1">
                            <div class="w-16 text-black">예약번호</div>
                            <div class="flex-1">24050101</div>
                        </div>
                        <div class="flex gap-2 mt-2">
                            <div class="w-16 text-black">골프여행</div>
                            <div class="flex-1">나가사기 3박 4일</div>
                        </div>
                        <div class="flex gap-2 mt-2">
                            <div class="w-16 text-black">골프장</div>
                            <div class="flex-1">아소스카이블루, 토마코마이 베어크리크</div>
                        </div>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="w-16 text-black">예약자</div>
                            <div class="flex-1"><input type="text" class="form-control"></div>
                        </div>
                    </div>
                    <div class="mt-3">
                        예약정보 확인하러가기<br/>
                        <a href="javascript:;">http://tbgm.com/r/24050101</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="relative flex justify-end w-full gap-3">
                        <button type="button" class="btn btn-primary w-full">복사하기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('_footer.php'); ?>
</body>
   
</html>
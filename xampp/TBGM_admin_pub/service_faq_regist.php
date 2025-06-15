<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'service';
        $side_2depth = 'faq';
        $depth_1 = '서비스관리';
        $depth_2 = '자주묻는질문';
        $depth_3 = '자주묻는질문 등록'; 
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y flex flex-wrap items-center justify-between ">
                    <div>
                        <div class="flex items-center mt-4">
                            <a href="./service_notice_mng.php" class="flex items-center gap-1 text-primary">
                                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 자주묻는질문
                            </a>
                        </div>
                        <div class="flex items-center mt-2">
                            <h2 class="text-xl font-bold mr-auto">자주묻는 질문 등록</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>자주묻는 질문 등록</button>
                    </div>
                </div>

                <!-- 상세 -->
                <div class="intro-y box p-5 mt-4">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">구분</div>
                        <div class="flex-1 flex flex-wrap gap-2">
                            <select name="" id="" class="form-select md:w-52">
                                <option value="">가입 변경 탈퇴</option>
                                <option value="">티타임 예약</option>
                                <option value="">결제 취소</option>
                                <option value="">마일리지</option>
                                <option value="">쿠폰</option>
                                <option value="">여행후기</option>
                                <option value="">신고</option>
                            </select>
                            <button type="button" class="btn btn-primary-soft btn-sm w-full md:w-auto" onclick="modalOpen01('faq_add-modal')">구분추가</button>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">제목 <span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">내용 <span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <textarea class="resize-none form-control h-40"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">첨부파일</div>
                        <div class="flex-1 flex flex-col gap-2">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button type="button" class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button type="button" class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-3 mb-4">
                        <div class="md:w-40 pt-2 font-semibold">노출여부</div>
                        <div class="flex-1 flex flex-wrap items-center gap-5">
                            <div class="form-check"> 
                                <input id="top_exposure2_1" class="form-check-input" type="radio" name="top_exposure" checked> 
                                <label class="form-check-label" for="top_exposure2_1">노출</label> 
                            </div>
                            <div class="form-check"> 
                                <input id="top_exposure2_2" class="form-check-input" type="radio" name="top_exposure"> 
                                <label class="form-check-label" for="top_exposure2_2">미노출</label> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
                    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 자주묻는 질문 등록</button>
                </div>

            </div>

        </div>

        <!-- 구분추가 모달 -->
        <div id="faq_add-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">자주묻는질문 구분</h2> 
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('faq_add-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- 내용 -->
                        <div>
                            <input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
                        </div>
                        <div class="flex gap-2 justify-center mt-5">
                            <button type="button" class="px-6 btn btn-primary" onclick="closeModal('faq_add-modal')">구분추가</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('_footer.php'); ?>

    </body>
</html>
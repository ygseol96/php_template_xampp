<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'service';
        $side_2depth = 'notice';
        $depth_1 = '서비스관리';
        $depth_2 = '공지사항';
        $depth_3 = '공지등록';
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
                                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 공지 사항
                            </a>
                        </div>
                        <div class="flex items-center mt-2">
                            <h2 class="text-xl font-bold mr-auto">공지사항 등록</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공지저장</button>
                    </div>
                </div>

                <!-- 상세 -->
                <div class="intro-y box p-5 mt-4 overflow-x-scroll">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">제목</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">내용</div>
                        <div class="flex-1">
                            <!-- 에디터 영역 -->
                            <div class="editor w-full">
                                <p>내용을 작성해주세요</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">파일업로드</div>
                        <div class="flex-1 flex flex-col gap-2">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" id="file_upload">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-3 mb-4">
                        <div class="md:w-40 pt-2 font-semibold">상위노출</div>
                        <div class="flex-1 flex flex-wrap items-center gap-5">
                            <div class="form-check"> 
                                <input id="top_exposure2_1" class="form-check-input" type="radio" name="top_exposure" checked> 
                                <label class="form-check-label" for="top_exposure2_1">일반</label> 
                            </div>
                            <div class="form-check"> 
                                <input id="top_exposure2_2" class="form-check-input" type="radio" name="top_exposure"> 
                                <label class="form-check-label" for="top_exposure2_2">상위</label> 
                            </div>
                        </div>
                    </div>
                    

                </div>

                <div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
                    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 공지저장</button>
                </div>


            </div>

        </div>

        <?php include_once('_footer.php'); ?>
        
    </body>
</html>
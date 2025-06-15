<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'service';
        $side_2depth = 'estimate';
        $depth_1 = '서비스관리';
        $depth_2 = '1:1견적';
        $depth_3 = '1:1견적 상세'; 
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y flex flex-wrap items-center justify-between gap-2">
                    <div>
                        <div class="flex items-center mt-4">
                            <a href="./service_estimate_mng.php" class="flex items-center gap-1 text-primary">
                                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 1:1견적
                            </a>
                        </div>
                        <div class="flex items-center mt-2">
                            <h2 class="text-xl font-bold mr-auto">1:1견적 상세</h2>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-2 ml-auto">
                        <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 답변등록</button>
                    </div>
                </div>

                <!-- detail -->
                <div class="intro-y box p-5 mt-4">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-40 pt-2 font-semibold">견적자</div>
                        <div class="flex-1 flex flex-wrap items-center gap-2">
                            <input type="text" class="form-control w-full md:w-40" value="홍길동" readonly>
                            <input type="text" class="form-control w-full md:w-40" value="82-10-1234-5678" readonly>
                            <input type="text" class="form-control w-full md:w-40" value="test@test.com" readonly>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-40 pt-2 font-semibold">견적구분</div>
                        <div class="flex-1">
                            <input type="text" class="form-control w-full md:w-40" value="회원" readonly>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-40 pt-2 font-semibold">견적제목</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" value="회원가입 문의입니다." readonly>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-40 pt-2 font-semibold">견적내용</div>
                        <div class="flex-1">
                            <textarea class="resize-none form-control h-40" readonly>내용입니다.</textarea>
                            <input type="text" class="form-control" value="회원가입 문의입니다." readonly>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-40 pt-2 font-semibold">첨부파일</div>
                        <div class="flex-1">
                            <button type="button" class="btn btn-outline-secondary">첨부파일1.pdf</button>
                            <button type="button" class="btn btn-outline-secondary">첨부파일2.pdf</button>
                        </div>
                    </div>
                </div>

                <div class="intro-y box p-5 mt-4">
                    <div class="flex flex-wrap flex-col md:flex-row gap-3 mb-3">
                        <div class="flex flex-col md:flex-row items-center gap-3">
                            <div class="w-full md:w-40 pt-1 font-semibold">답변상태</div>
                            <input type="text" class="form-control w-full md:w-40" value="홍길동">
                        </div>
                        <div class="flex flex-col md:flex-row items-center gap-3">
                            <div class="w-full pt-1 font-semibold">답변일시</div>
                            <input type="text" class="form-control w-full md:w-40" value="-">
                        </div>
                        <div class="flex flex-col md:flex-row items-center gap-3">
                            <div class="w-full pt-1 font-semibold">답변자</div>
                            <input type="text" class="form-control w-full md:w-40" value="홍길동">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-40 pt-2 font-semibold">답변내용</div>
                        <div class="flex-1">
                            <textarea class="resize-none form-control h-40">내용입니다</textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-40 pt-2 font-semibold">첨부파일</div>
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
                </div>

                <div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
                    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 답변등록</button>
                </div>

                

            </div>

        </div>

        <?php include_once('_footer.php'); ?>

    </body>
</html>
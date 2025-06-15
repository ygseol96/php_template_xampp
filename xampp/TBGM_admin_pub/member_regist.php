<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'member';
        $side_2depth = 'regist';
        $depth_1 = '회원관리';
        // $depth_2 = '회원목록';
        $depth_3 = '회원등록';
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y flex flex-wrap items-center justify-between ">
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-xl font-bold mr-auto">회원등록</h2>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <button type="button" class="btn btn-dark">가입거절</button>
                        <button type="button" class="btn btn-success">가입승인</button>
                        <button type="button" class="btn btn-primary">회원등록</button>
                    </div>
                </div>

                <!-- 상세 -->
                
                <!-- TBGM 계정 정보 -->
                <div class="intro-y box p-5 mt-3">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold mr-auto">TBGM 계정 정보</h3>
                    </div>
                    <div class="flex items-center justify-center pb-6">
                        <div class="relative w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center">
                            <!-- 이미지 추가 시  아이콘 삭제 후 img 태크로 변경 클래스 참고 -->
                            <i data-lucide="user" class="w-12 h-12 text-slate-400"></i>
                            <!-- <img src="./dist/images/sample_img.jpg" class="w-24 h-24 object-cover rounded-full" alt=""> -->
                            <label for="my_photos1_1">
                                <div class="absolute cursor-pointer bg-emerald-500 rounded-full w-8 h-8 right-0 bottom-0 p-0 flex items-center justify-center hover:contrast-125">
                                    <i data-lucide="camera" class="w-4 h-4 text-white"></i>
                                </div>
                            </label>
                        
                            <input type="file" id="my_photos1_1" name="my_photos1" class="hidden">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 md:gap-10">
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">아이디 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-center gap-2 min-w-[200px]">
                                <input type="text" class="form-control" placeholder="testhong" readonly="">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">비밀번호 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex flex-col items-start gap-2 min-w-[200px]">
                                <input type="password" class="form-control" placeholder="">
                                <span class="text-xs">* 영문,숫자 8~20자리로 입력해주세요.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 가입정보 -->
                <div class="intro-y box p-5 mt-3">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold mr-auto">가입정보</h3>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 md:gap-10">
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">가입자명 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-center gap-2 min-w-[200px]">
                                <input type="text" class="form-control" placeholder="홍길동">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">지점명</div>
                            <div class="flex-1 flex items-start gap-2 min-w-[200px]">
                                <input type="password" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 md:gap-10 mt-2">
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">사업자번호 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-center gap-2 min-w-[200px]">
                                <input type="text" class="form-control" placeholder="홍길동">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">사업자등록증 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-start gap-2 min-w-[200px]">
                                <input type="password" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-wrap items-start md:gap-2 mt-2">
                        <div class="shrink-0 w-24 py-2 font-semibold">주소</div>
                        <div class="flex-1 flex items-start gap-2 min-w-[200px]">
                            <input type="password" class="form-control" placeholder="대한민국 서울특별시 000구 000길 0000 - 00 0000빌딩 000층 0000호 (000동 000-000)">
                        </div>
                    </div>
                    <div class="flex-1 flex flex-wrap items-start md:gap-2 mt-2">
                        <div class="shrink-0 w-24 py-2 font-semibold">홈페이지URL</div>
                        <div class="flex-1 flex items-start gap-2 min-w-[200px]">
                            <input type="password" class="form-control" placeholder="http://honggildong.honggildonghonggildong.com/honggildong">
                        </div>
                    </div>
                </div>

                <!-- 담당자 정보 -->
                <div class="intro-y box p-5 mt-3">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold mr-auto">담당자 정보</h3>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 md:gap-10">
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">담당자명 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-center gap-2 min-w-[160px]">
                                <input type="text" class="form-control" placeholder="홍길동">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">휴대전화번호 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-start gap-2 min-w-[160px]">
                                <input type="password" class="form-control" placeholder="+82-010-1111-2222">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">E-Mail 주소 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-start gap-2 min-w-[160px]">
                                <input type="password" class="form-control" placeholder="honggildonghonggildong@honggildonghonggilddong.com">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 md:gap-10 mt-2">
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">회계담당자명 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-center gap-2 min-w-[160px]">
                                <input type="text" class="form-control" placeholder="홍길동">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">휴대전화번호 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-start gap-2 min-w-[160px]">
                                <input type="password" class="form-control" placeholder="+82-010-1111-2222">
                            </div>
                        </div>
                        <div class="flex-1 flex flex-wrap items-start md:gap-2">
                            <div class="shrink-0 w-24 py-2 font-semibold">E-Mail 주소 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex items-start gap-2 min-w-[160px]">
                                <input type="password" class="form-control" placeholder="honggildonghonggildong@honggildonghonggilddong.com">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <?php include_once('_footer.php'); ?>

    </body>
</html>
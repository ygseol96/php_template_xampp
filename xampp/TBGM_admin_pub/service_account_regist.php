<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'service';
        $side_2depth = 'account';
        $depth_1 = '서비스관리';
        $depth_2 = '계정관리';
        $depth_3 = '계정등록'; 
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
                            <a href="./service_account_mng.php" class="flex items-center gap-1 text-primary">
                                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 계정관리
                            </a>
                        </div>
                        <div class="flex items-center mt-2">
                            <h2 class="text-xl font-bold mr-auto">계정 등록</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <a href="./service_account_department_mng.php" class="btn btn-pending">부서별 권한관리</a>
                        <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>계정등록</button>
                        <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>등록취소</button>
                    </div>
                </div>

                <!-- 상세 -->
                <div class="intro-y box p-5 mt-4">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">사용자명 <span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <input type="text" class="form-control md:w-52" placeholder="사용자를 입력해주세요">
                        </div>
                    </div>
                    <div class="flex flex-wrap flex-col md:flex-row gap-3 mb-3">
                        <div class="flex flex-col md:flex-row gap-3">
                            <div class="md:w-40 pt-2 font-semibold">사용자계정 <span class="text-danger">*</span></div>
                            <div class="">
                                <input type="text" class="form-control md:w-52" placeholder="계정을 입력해주세요.">
                            </div>
                        </div>
                        <div class="flex flex-wrap flex-col md:flex-row gap-3">
                            <div class="md:w-40 pt-2 font-semibold">비밀번호 <span class="text-danger">*</span></div>
                            <div class="flex-1 flex flex-wrap flex-col md:flex-row gap-3">
                                <input type="text" class="form-control md:w-52" placeholder="계정을 입력해주세요.">
                                <div class="flex items-center gap-3"><span>*</span> 영문,숫자,특수문자포함 8자이상</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap flex-col md:flex-row gap-3 mb-3">
                        <div class="flex flex-col md:flex-row gap-3">
                            <div class="md:w-40 pt-2 font-semibold">전화번호 <span class="text-danger">*</span></div>
                            <div class="flex gap-2">
                                <select name="" id="" class="form-select w-32">
                                    <option value="">+82</option>
                                    <option value="">...</option>
                                </select>
                                <input type="text" class="form-control md:w-52" placeholder="전화번호를 입력해주세요.">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3">
                            <div class="md:w-40 pt-2 font-semibold">이메일 <span class="text-danger">*</span></div>
                            <input type="text" class="form-control md:w-52" placeholder="이메일을 입력해주세요.">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">상태 <span class="text-danger">*</span></div>
                        <div class="flex-1">
                            <select name="" id="" class="form-select w-52">
                                <option value="">정상</option>
                                <option value="">..</option>
                            </select>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="md:w-40 pt-2 font-semibold">권한설정</div>
                        <div class="flex-1 flex flex-col">
                            <div class="flex-1 flex items-center gap-2 mb-3">
                                <span class="font-medium">부서</span>
                                <select name="" id="" class="form-select w-52">
                                    <option value="">경영</option>
                                    <option value="">..</option>
                                </select>
                            </div>
                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                <span class=" font-medium md:w-20">회원관리</span>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_1">
                                    <label for="accpunt_regit_1_1" class="block w-full px-2 py-1">메뉴1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_2">
                                    <label for="accpunt_regit_1_2" class="block w-full px-2 py-1">메뉴2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_3">
                                    <label for="accpunt_regit_1_3" class="block w-full px-2 py-1">메뉴3</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_4">
                                    <label for="accpunt_regit_1_4" class="block w-full px-2 py-1">메뉴4</label>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                <span class=" font-medium md:w-20"">견적관리</span>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_5">
                                    <label for="accpunt_regit_1_5" class="block w-full px-2 py-1">메뉴1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_6">
                                    <label for="accpunt_regit_1_6" class="block w-full px-2 py-1">메뉴2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_7">
                                    <label for="accpunt_regit_1_7" class="block w-full px-2 py-1">메뉴3</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_8">
                                    <label for="accpunt_regit_1_8" class="block w-full px-2 py-1">메뉴4</label>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                <span class=" font-medium md:w-20"">상품관리</span>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_9">
                                    <label for="accpunt_regit_1_9" class="block w-full px-2 py-1">메뉴1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_10">
                                    <label for="accpunt_regit_1_10" class="block w-full px-2 py-1">메뉴2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_11">
                                    <label for="accpunt_regit_1_11" class="block w-full px-2 py-1">메뉴3</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_12">
                                    <label for="accpunt_regit_1_12" class="block w-full px-2 py-1">메뉴4</label>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                <span class=" font-medium md:w-20">행사관리</span>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_13">
                                    <label for="accpunt_regit_1_13" class="block w-full px-2 py-1">메뉴1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_14">
                                    <label for="accpunt_regit_1_14" class="block w-full px-2 py-1">메뉴2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_15">
                                    <label for="accpunt_regit_1_15" class="block w-full px-2 py-1">메뉴3</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_16">
                                    <label for="accpunt_regit_1_16" class="block w-full px-2 py-1">메뉴4</label>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                <span class=" font-medium md:w-20">매출관리</span>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_17">
                                    <label for="accpunt_regit_1_17" class="block w-full px-2 py-1">메뉴1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_18">
                                    <label for="accpunt_regit_1_18" class="block w-full px-2 py-1">메뉴2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_19">
                                    <label for="accpunt_regit_1_19" class="block w-full px-2 py-1">메뉴3</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_20">
                                    <label for="accpunt_regit_1_20" class="block w-full px-2 py-1">메뉴4</label>
                                </div>
                            </div>
                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                <span class=" font-medium md:w-20">서비스관리</span>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_21">
                                    <label for="accpunt_regit_1_21" class="block w-full px-2 py-1">메뉴1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_22">
                                    <label for="accpunt_regit_1_22" class="block w-full px-2 py-1">메뉴2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_23">
                                    <label for="accpunt_regit_1_23" class="block w-full px-2 py-1">메뉴3</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" class="form-check-input" class="form-check-input" id="accpunt_regit_1_24">
                                    <label for="accpunt_regit_1_24" class="block w-full px-2 py-1">메뉴4</label>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>

                <div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
                    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>계정등록</button>
                    <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>등록취소</button>
                </div>

            </div>

        </div>

        <?php include_once('_footer.php'); ?>

    </body>
</html>
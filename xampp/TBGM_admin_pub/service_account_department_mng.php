<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'service';
        $side_2depth = 'estimate';
        $depth_1 = '계정관리';
        $depth_2 = '부서별 권한 관리';
        // $depth_3 = '공지등록';
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y flex flex-wrap items-center justify-between mt-8">
                    <div>
                        <div class="flex items-center">
                            <h2 class="text-xl font-bold mr-auto">부서별 권한 관리</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <a href="javascript:;" class="btn btn-primary" onclick="modalOpen01('department_add-modal')"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>부서 추가</a>
                    </div>
                </div>

                <!-- 상세 -->
                <div class="intro-y box p-5 mt-4">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="flex-1 flex flex-wrap items-center gap-5">
                            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
                                <li id="bylanguage-1-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-1" type="button" role="tab" aria-controls="bylanguage-tab-1" aria-selected="true">경영</button> 
                                </li>
                                <li id="bylanguage-2-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-2" type="button" role="tab" aria-controls="bylanguage-tab-2" aria-selected="false">전략</button> 
                                </li>
                                <li id="bylanguage-3-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-3" type="button" role="tab" aria-controls="bylanguage-tab-3" aria-selected="false">기획</button> 
                                </li>
                                <li id="bylanguage-4-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-4" type="button" role="tab" aria-controls="bylanguage-tab-4" aria-selected="false">사업</button> 
                                </li>
                                <li id="bylanguage-5-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-5" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="false">운영</button> 
                                </li>
                                <li id="bylanguage-6-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-6" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="false">개발</button> 
                                </li>
                                <li id="bylanguage-7-tab" class="nav-item" role="presentation"> 
                                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-7" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="false">기타</button> 
                                </li>
                            </ul>

                            <div class="tab-content w-full border-b-2 border-primary">
                                
                                <!-- 경영 -->
                                <div id="bylanguage-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-1-tab">

                                    <div class="flex flex-col md:flex-row gap-3 px-3">
                                        <div class="flex-1 flex flex-col">
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">회원관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input"id="accpunt_regit_1_1">
                                                    <label for="accpunt_regit_1_1" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input"  id="accpunt_regit_1_2">
                                                    <label for="accpunt_regit_1_2" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox"  class="form-check-input" id="accpunt_regit_1_3">
                                                    <label for="accpunt_regit_1_3" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_4">
                                                    <label for="accpunt_regit_1_4" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">견적관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_5">
                                                    <label for="accpunt_regit_1_5" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_6">
                                                    <label for="accpunt_regit_1_6" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_7">
                                                    <label for="accpunt_regit_1_7" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_8">
                                                    <label for="accpunt_regit_1_8" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">상품관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_9">
                                                    <label for="accpunt_regit_1_9" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_10">
                                                    <label for="accpunt_regit_1_10" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_11">
                                                    <label for="accpunt_regit_1_11" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_12">
                                                    <label for="accpunt_regit_1_12" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">행사관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_13">
                                                    <label for="accpunt_regit_1_13" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_14">
                                                    <label for="accpunt_regit_1_14" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_15">
                                                    <label for="accpunt_regit_1_15" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_16">
                                                    <label for="accpunt_regit_1_16" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">매출관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_17">
                                                    <label for="accpunt_regit_1_17" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_18">
                                                    <label for="accpunt_regit_1_18" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_19">
                                                    <label for="accpunt_regit_1_19" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_20">
                                                    <label for="accpunt_regit_1_20" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">서비스관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_21">
                                                    <label for="accpunt_regit_1_21" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_22">
                                                    <label for="accpunt_regit_1_22" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_23">
                                                    <label for="accpunt_regit_1_23" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_24">
                                                    <label for="accpunt_regit_1_24" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- 전략 -->
                                <div id="bylanguage-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-2-tab">
                                    <div class="flex flex-col md:flex-row gap-3 px-3">
                                        <div class="flex-1 flex flex-col">
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">회원관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_1">
                                                    <label for="accpunt_regit_1_1" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_2">
                                                    <label for="accpunt_regit_1_2" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_3">
                                                    <label for="accpunt_regit_1_3" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_4">
                                                    <label for="accpunt_regit_1_4" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">견적관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_5">
                                                    <label for="accpunt_regit_1_5" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_6">
                                                    <label for="accpunt_regit_1_6" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_7">
                                                    <label for="accpunt_regit_1_7" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_8">
                                                    <label for="accpunt_regit_1_8" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">상품관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_9">
                                                    <label for="accpunt_regit_1_9" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_10">
                                                    <label for="accpunt_regit_1_10" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_11">
                                                    <label for="accpunt_regit_1_11" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_12">
                                                    <label for="accpunt_regit_1_12" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">행사관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_13">
                                                    <label for="accpunt_regit_1_13" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_14">
                                                    <label for="accpunt_regit_1_14" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_15">
                                                    <label for="accpunt_regit_1_15" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_16">
                                                    <label for="accpunt_regit_1_16" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">매출관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_17">
                                                    <label for="accpunt_regit_1_17" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_18">
                                                    <label for="accpunt_regit_1_18" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_19">
                                                    <label for="accpunt_regit_1_19" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_20">
                                                    <label for="accpunt_regit_1_20" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">서비스관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_21">
                                                    <label for="accpunt_regit_1_21" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_22">
                                                    <label for="accpunt_regit_1_22" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_23">
                                                    <label for="accpunt_regit_1_23" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_24">
                                                    <label for="accpunt_regit_1_24" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 기획 -->
                                <div id="bylanguage-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-3-tab">

                                    <div class="flex flex-col md:flex-row gap-3 px-3">
                                        <div class="flex-1 flex flex-col">
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">회원관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_1">
                                                    <label for="accpunt_regit_1_1" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_2">
                                                    <label for="accpunt_regit_1_2" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_3">
                                                    <label for="accpunt_regit_1_3" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_4">
                                                    <label for="accpunt_regit_1_4" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">견적관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_5">
                                                    <label for="accpunt_regit_1_5" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_6">
                                                    <label for="accpunt_regit_1_6" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_7">
                                                    <label for="accpunt_regit_1_7" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_8">
                                                    <label for="accpunt_regit_1_8" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">상품관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_9">
                                                    <label for="accpunt_regit_1_9" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_10">
                                                    <label for="accpunt_regit_1_10" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_11">
                                                    <label for="accpunt_regit_1_11" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_12">
                                                    <label for="accpunt_regit_1_12" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">행사관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_13">
                                                    <label for="accpunt_regit_1_13" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_14">
                                                    <label for="accpunt_regit_1_14" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_15">
                                                    <label for="accpunt_regit_1_15" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_16">
                                                    <label for="accpunt_regit_1_16" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">매출관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_17">
                                                    <label for="accpunt_regit_1_17" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_18">
                                                    <label for="accpunt_regit_1_18" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_19">
                                                    <label for="accpunt_regit_1_19" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_20">
                                                    <label for="accpunt_regit_1_20" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">서비스관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_21">
                                                    <label for="accpunt_regit_1_21" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_22">
                                                    <label for="accpunt_regit_1_22" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_23">
                                                    <label for="accpunt_regit_1_23" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_24">
                                                    <label for="accpunt_regit_1_24" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- 사업 -->
                                <div id="bylanguage-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-4-tab">
                                    
                                    <div class="flex flex-col md:flex-row gap-3 px-3">
                                        <div class="flex-1 flex flex-col">
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">회원관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_1">
                                                    <label for="accpunt_regit_1_1" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_2">
                                                    <label for="accpunt_regit_1_2" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_3">
                                                    <label for="accpunt_regit_1_3" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_4">
                                                    <label for="accpunt_regit_1_4" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">견적관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_5">
                                                    <label for="accpunt_regit_1_5" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_6">
                                                    <label for="accpunt_regit_1_6" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_7">
                                                    <label for="accpunt_regit_1_7" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_8">
                                                    <label for="accpunt_regit_1_8" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">상품관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_9">
                                                    <label for="accpunt_regit_1_9" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_10">
                                                    <label for="accpunt_regit_1_10" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_11">
                                                    <label for="accpunt_regit_1_11" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_12">
                                                    <label for="accpunt_regit_1_12" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">행사관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_13">
                                                    <label for="accpunt_regit_1_13" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_14">
                                                    <label for="accpunt_regit_1_14" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_15">
                                                    <label for="accpunt_regit_1_15" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_16">
                                                    <label for="accpunt_regit_1_16" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">매출관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_17">
                                                    <label for="accpunt_regit_1_17" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_18">
                                                    <label for="accpunt_regit_1_18" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_19">
                                                    <label for="accpunt_regit_1_19" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_20">
                                                    <label for="accpunt_regit_1_20" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">서비스관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_21">
                                                    <label for="accpunt_regit_1_21" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_22">
                                                    <label for="accpunt_regit_1_22" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_23">
                                                    <label for="accpunt_regit_1_23" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_24">
                                                    <label for="accpunt_regit_1_24" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>

                                <!-- 운영 -->
                                <div id="bylanguage-tab-5" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-5-tab">

                                    <div class="flex flex-col md:flex-row gap-3 px-3">
                                        <div class="flex-1 flex flex-col">
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">회원관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_1">
                                                    <label for="accpunt_regit_1_1" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_2">
                                                    <label for="accpunt_regit_1_2" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_3">
                                                    <label for="accpunt_regit_1_3" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_4">
                                                    <label for="accpunt_regit_1_4" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">견적관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_5">
                                                    <label for="accpunt_regit_1_5" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_6">
                                                    <label for="accpunt_regit_1_6" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_7">
                                                    <label for="accpunt_regit_1_7" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_8">
                                                    <label for="accpunt_regit_1_8" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">상품관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_9">
                                                    <label for="accpunt_regit_1_9" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_10">
                                                    <label for="accpunt_regit_1_10" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_11">
                                                    <label for="accpunt_regit_1_11" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_12">
                                                    <label for="accpunt_regit_1_12" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">행사관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_13">
                                                    <label for="accpunt_regit_1_13" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_14">
                                                    <label for="accpunt_regit_1_14" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_15">
                                                    <label for="accpunt_regit_1_15" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_16">
                                                    <label for="accpunt_regit_1_16" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">매출관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_17">
                                                    <label for="accpunt_regit_1_17" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_18">
                                                    <label for="accpunt_regit_1_18" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_19">
                                                    <label for="accpunt_regit_1_19" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_20">
                                                    <label for="accpunt_regit_1_20" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">서비스관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_21">
                                                    <label for="accpunt_regit_1_21" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_22">
                                                    <label for="accpunt_regit_1_22" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_23">
                                                    <label for="accpunt_regit_1_23" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_24">
                                                    <label for="accpunt_regit_1_24" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- 개발 -->
                                <div id="bylanguage-tab-6" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-6-tab">
                                    
                                    <div class="flex flex-col md:flex-row gap-3 px-3">
                                        <div class="flex-1 flex flex-col">
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">회원관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_1">
                                                    <label for="accpunt_regit_1_1" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_2">
                                                    <label for="accpunt_regit_1_2" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_3">
                                                    <label for="accpunt_regit_1_3" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_4">
                                                    <label for="accpunt_regit_1_4" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">견적관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_5">
                                                    <label for="accpunt_regit_1_5" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_6">
                                                    <label for="accpunt_regit_1_6" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_7">
                                                    <label for="accpunt_regit_1_7" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_8">
                                                    <label for="accpunt_regit_1_8" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">상품관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_9">
                                                    <label for="accpunt_regit_1_9" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_10">
                                                    <label for="accpunt_regit_1_10" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_11">
                                                    <label for="accpunt_regit_1_11" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_12">
                                                    <label for="accpunt_regit_1_12" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">행사관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_13">
                                                    <label for="accpunt_regit_1_13" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_14">
                                                    <label for="accpunt_regit_1_14" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_15">
                                                    <label for="accpunt_regit_1_15" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_16">
                                                    <label for="accpunt_regit_1_16" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">매출관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_17">
                                                    <label for="accpunt_regit_1_17" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_18">
                                                    <label for="accpunt_regit_1_18" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_19">
                                                    <label for="accpunt_regit_1_19" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_20">
                                                    <label for="accpunt_regit_1_20" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">서비스관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_21">
                                                    <label for="accpunt_regit_1_21" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_22">
                                                    <label for="accpunt_regit_1_22" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_23">
                                                    <label for="accpunt_regit_1_23" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_24">
                                                    <label for="accpunt_regit_1_24" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 기타 -->
                                <div id="bylanguage-tab-7" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-7-tab">
                                    
                                    <div class="flex flex-col md:flex-row gap-3 px-3">
                                        <div class="flex-1 flex flex-col">
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">회원관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_1">
                                                    <label for="accpunt_regit_1_1" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_2">
                                                    <label for="accpunt_regit_1_2" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_3">
                                                    <label for="accpunt_regit_1_3" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_4">
                                                    <label for="accpunt_regit_1_4" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">견적관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_5">
                                                    <label for="accpunt_regit_1_5" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_6">
                                                    <label for="accpunt_regit_1_6" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_7">
                                                    <label for="accpunt_regit_1_7" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_8">
                                                    <label for="accpunt_regit_1_8" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20"">상품관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_9">
                                                    <label for="accpunt_regit_1_9" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_10">
                                                    <label for="accpunt_regit_1_10" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_11">
                                                    <label for="accpunt_regit_1_11" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_12">
                                                    <label for="accpunt_regit_1_12" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">행사관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_13">
                                                    <label for="accpunt_regit_1_13" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_14">
                                                    <label for="accpunt_regit_1_14" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_15">
                                                    <label for="accpunt_regit_1_15" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_16">
                                                    <label for="accpunt_regit_1_16" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">매출관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_17">
                                                    <label for="accpunt_regit_1_17" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_18">
                                                    <label for="accpunt_regit_1_18" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_19">
                                                    <label for="accpunt_regit_1_19" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_20">
                                                    <label for="accpunt_regit_1_20" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 flex items-center flex-wrap gap-3 mb-3">
                                                <span class=" font-medium md:w-20">서비스관리</span>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_21">
                                                    <label for="accpunt_regit_1_21" class="block w-full px-2 py-1">메뉴1</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_22">
                                                    <label for="accpunt_regit_1_22" class="block w-full px-2 py-1">메뉴2</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_23">
                                                    <label for="accpunt_regit_1_23" class="block w-full px-2 py-1">메뉴3</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" class="form-check-input" id="accpunt_regit_1_24">
                                                    <label for="accpunt_regit_1_24" class="block w-full px-2 py-1">메뉴4</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
                    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 부서저장</button>
                    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 저장취소</button>
                </div>


            </div>

        </div>

        <!-- 모달 -->

        <!-- 부서 추가 모달 -->
        <div id="department_add-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">부서추가</h2> 
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('department_add-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- 내용 -->
                        <div class="flex items-center">
                            <div class="w-24">부서명</div>
                            <input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
                        </div>
                        <div class="flex gap-2 justify-center mt-5">
                            <button type="button" class="px-6 btn btn-danger" onclick="closeModal('department_add-modal')">취소</button>
                            <button type="button" class="px-6 btn btn-primary" onclick="closeModal('department_add-modal')">저장</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('_footer.php'); ?>

    </body>
</html>
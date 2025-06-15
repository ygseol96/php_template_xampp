<?php /* Template_ 2.2.8 2024/05/30 09:11:13 C:\xampp\heytee_dev\admin\_global\skin_ko\information\multilingual_mng.tpl 000022882 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between mt-8">
    <div>
        <div class="flex items-center">
            <h2 class="text-xl font-bold mr-auto">다국어 관리</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <a href="./lang_mng.php" class="btn btn-primary">언어 관리 (5)</a>
    </div>
</div>

<div class="intro-y flex flex-wrap gap-8 mt-5">
    <!-- 대분류 -->
    <div id="topCate0" class="box md:min-h-[600px]">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">대분류</p>
            <button type="button" class="btn btn-primary p-1 rounded-full" onClick="create_category(0);"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2" id="categoryArea0" data-depth="0">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['list'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div id="cate_<?php echo $TPL_V1["idx"]?>" class="mb-2 px-2" data-idx="<?php echo $TPL_V1["idx"]?>" data-code="<?php echo $TPL_V1["code_name"]?>">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base"><?php echo $TPL_V1["name"]?></p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<?php }}?>
        </div>
    </div>

    <!-- 중분류 -->
    <div id="topCate1" class="box md:min-h-[600px] hidden">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">중분류</p>
            <button class="btn btn-primary p-1 rounded-full" onClick="create_category(1);"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2" id="categoryArea1" data-depth="1">
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div class="mb-2 px-2 border-r-2 border-primary border-opacity-50">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 border border-slate-200 bg-slate-50 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">상품목록</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">상품상세</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">상품검색</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 소분류 -->
    <div id="topCate2" class="box md:min-h-[600px] hidden">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">소분류</p>
            <button class="btn btn-primary p-1 rounded-full" onClick="create_category(2);"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2" id="categoryArea2" data-depth="2">
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div class="mb-2 px-2 border-r-2 border-primary border-opacity-50">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 border border-slate-200 bg-slate-50 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">기본정보</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">티타임</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">옵션</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onClick="create_category(3);""> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">여행정보</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">골프장정보</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">후기</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('add_category-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 다국어 -->
    <div id="topCate3" class="box md:min-h-[600px] flex-1 hidden">
        <div class="flex items-center justify-between w-full p-3 border-b border-slate-300">
            <p class="font-bold">다국어</p>
            <button class="btn btn-primary p-1 rounded-full" onclick="create_multi_lang();"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2" id="categoryArea3" data-depth="3">
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div class="mb-2 px-2 border-r-2 border-primary border-opacity-50">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 border border-slate-200 bg-slate-50 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">Language001  날짜선택</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('multilingual_save-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">Language002 인원수 선택</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('multilingual_save-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <p class="mt-1 font-bold text-base">Language003  티타임 선택</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('multilingual_save-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 분류 추가 -->
<div id="add_category-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form name="add_category-modal-form" id="add_category-modal-form" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <!-- 클릭된 분류명으로 타이틀 변경되어야함 -->
                <h2 class="font-bold text-base mr-auto">상품 > 상품상세 > 분류추가</h2>
                <button type="button" class="flex items-center gap-1" onclick="closeModal('add_category-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">코드명</div>
                    <div class="flex-1">
                        <input type="text" name="code" class="form-control required" placeholder="코드를 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">항목명</div>
                    <div class="flex-1">
                        <input type="text" name="name" class="form-control required" placeholder="항목명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button type="button" class="px-6 btn btn-outline-danger" onclick="closeModal('add_category-modal')">취소</button>
                    <button type="button" class="px-6 btn btn-primary">저장</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- 다국어 저장 -->
<div id="multilingual_save-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">다국어 저장</h2>
                <button class="flex items-center gap-1" onclick="closeModal('multilingual_save-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="flex items-center gap-2">
                        <div class="shrink-0 w-20 py-2 font-semibold">코드명</div>
                        <p>PR_DE_TT_</p>
                    </div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="코드를 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">한국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="한국어를 입력해주세요">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">영어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="영어를 입력해주세요">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">일본어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="일본어를 입력해주세요">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">스페인어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="스페인어를 입력해주세요">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">중국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="중국어를 입력해주세요">
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" onclick="closeModal('multilingual_save-modal')">취소</button>
                    <button class="px-6 btn btn-primary">저장</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
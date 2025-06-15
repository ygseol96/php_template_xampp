<?php /* Template_ 2.2.8 2024/05/07 09:04:53 C:\xampp\heytee_dev\admin\_global\skin_ko\service\service_menu.tpl 000010204 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">메뉴 관리</h2>
</div>
<div class="intro-y flex flex-wrap gap-8 mt-5">
    <!-- 대메뉴 -->
    <div id="topMenu" class="box md:min-h-[600px]">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">대메뉴</p>
            <button class="btn btn-primary p-1 rounded-full" onclick="create_menu(0);"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2" id="menuArea">
<?php if(!empty($TPL_VAR["data"]['data'])){?>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div id="menu_<?php echo $TPL_V1["idx"]?>" class="mb-2 px-2" data-idx="<?php echo $TPL_V1["idx"]?>">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500"><?php echo $TPL_V1["code_name"]?></span>
                        <p class="mt-1 font-bold text-base"><?php echo $TPL_V1["name"]?></p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li><a href="javascript:;" class="dropdown-item" onclick="modify_menu(<?php echo $TPL_V1["idx"]?>)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pencil" class="lucide lucide-pencil w-4 h-4 mr-2">
                                        <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                                        <path d="m15 5 4 4"></path>
                                    </svg> 수정
                                </a></li>
                                <li><a href="javascript:;" class="dropdown-item" onclick="delete_menu(<?php echo $TPL_V1["idx"]?>)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash" class="lucide lucide-trash w-4 h-4 mr-2">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    </svg> 삭제
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<?php }}?>
<?php }?>

        </div>
    </div>

    <!-- 중메뉴 -->
    <div id="subMenu" class="box md:min-h-[600px] hidden">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">중메뉴</p>
            <button class="btn btn-primary p-1 rounded-full" onclick="create_menu(1)"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2" id="subMenuArea">
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div class="mb-2 px-2 border-r-2 border-primary border-opacity-50">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 border border-slate-200 bg-slate-50 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Sub01</span>
                        <p class="mt-1 font-bold text-base">회원 관리</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('menu_save-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Sub02</span>
                        <p class="mt-1 font-bold text-base">쿠폰 관리</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('menu_save-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Sub03</span>
                        <p class="mt-1 font-bold text-base">마일리지 관리</p>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown"><i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i></button>
                        <div class="dropdown-menu w-32">
                            <ul class="dropdown-content">
                                <li> <a href="javascript:;" class="dropdown-item" onclick="modalOpen('menu_save-modal')"> <i data-lucide="pencil" class="w-4 h-4 mr-2"></i> 수정 </a> </li>
                                <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 삭제 </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- 메뉴저장 -->
<div id="menu_save-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form name="menu_save-modal-form" id="menu_save-modal-form" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">메뉴 저장</h2>
                <button type="button" class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">코드명</div>
                    <div class="flex-1">
                        <input type="text" name="code" class="form-control required" placeholder="코드를 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">메뉴명</div>
                    <div class="flex-1">
                        <input type="text" name="name" class="form-control required" placeholder="항목명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">링크URL</div>
                    <div class="flex-1">
                        <input type="text" name="url" class="form-control" placeholder="메뉴 링크 URL을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">아이콘</div>
                    <div class="flex-1">
                        <input type="file" id="menu_save-modal-upload_file" multiple>
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button type="button" class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button type="button" class="px-6 btn btn-primary">저장</button>
                </div>
            </div>
        </div>
</form>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
<?php /* Template_ 2.2.8 2024/05/14 14:43:19 C:\xampp\heytee_dev\admin\_global\skin_ko\information\lang_mng.tpl 000007007 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="/sys/information/multilingual_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 다국어 관리
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">언어 관리</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button class="btn btn-primary" data-tw-toggle="modal" data-tw-target="#add_lang-modal"><i data-lucide="plus" class="w-4 h-4"></i> 언어 추가</button>
    </div>
</div>

<!-- 관리 시작 -->
<form id="lang_modify_form" enctype="multipart/form-data">
<?php if(!empty($TPL_VAR["data"]['list'])){?>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['list'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
<div class="intro-y box p-5 mt-4 item_list">
<input type="hidden" name="idx[]" value="<?php echo $TPL_V1["idx"]?>">
    <div class="flex flex-col">
        <div class="flex flex-col md:flex-row flex-wrap md:items-center gap-2 md:gap-6">
            <div class="flex-1 w-full">
                <div class="mb-1 text-slate-500 font-medium">언어코드</div>
                <input type="text" name="code" value="<?php echo $TPL_V1["code"]?>" class="form-control" placeholder="KOR">
            </div>
            <div class="flex-1 w-full">
                <div class="mb-1 text-slate-500 font-medium">언어명</div>
                <input type="text" name="name" value="<?php echo $TPL_V1["code"]?>" class="form-control" placeholder="한국어">
            </div>
            <div class="flex-1 w-full">
                <div class="mb-1 text-slate-500 font-medium">화면 표시명</div>
                <input type="text" name="disp_name" value="<?php echo $TPL_V1["display_name"]?>" class="form-control" placeholder="한국어">
            </div>
            <div class="flex-1 w-full">
                    <div class="mb-1 text-slate-500 font-medium">언어 아이콘</div>
                    <div class="flex-1 flex flex-col md:flex-row md:items-center gap-3">
<?php if($TPL_V1["ori_name"]){?>
                        <input type="text" name="oIcon" value="<?php echo $TPL_V1["ori_name"]?>" class="form-control w-full md:w-24" placeholder="kr.jgp" readonly>
<?php }?>
                        <input type="file" name="icon[]" class="w-full md:w-48 lang_icon_files">
<?php if($TPL_V1["ori_name"]){?>
                        <button type="button" data-lang_idx="<?php echo $TPL_V1["idx"]?>" class="btn btn-sm btn-danger-soft shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4 mr-1"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>파일삭제</button>
<?php }?>
                    </div>
                </div>
            <div>
                <div class="mb-1 text-slate-500 font-medium">표시 순서</div>
                <select class="form-select w-24" name="disp_order" aria-label="Default select example">
<?php if(is_array($TPL_R2=range( 1, 10))&&!empty($TPL_R2)){foreach($TPL_R2 as $TPL_K2=>$TPL_V2){?>
                    <option value="<?php echo $TPL_K2+ 1?>" <?php if($TPL_K2+ 1==$TPL_V1["display_order"]){?>selected<?php }?>><?php echo $TPL_K2+ 1?></option>
<?php }}?>
                </select>
            </div>
        </div>
    </div>
</div>
<?php }}?>
<?php }?>
</form>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button type="button" class="btn btn-danger" onClick="location.href='/sys/information/multilingual_mng.php';">취소</button>
    <button type="button" class="btn btn-primary" id="btn_lang_all_save">저장</button>
</div>

<!-- 언어저장 -->
<div id="add_lang-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form name="add_lang-modal-form" id="add_lang-modal-form">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">언어 저장</h2>
                <button type="button" class="flex items-center gap-1"  data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">언어코드</div>
                    <div class="flex-1">
                        <input type="text" name="code" class="form-control required" placeholder="언어코드를 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">언어명</div>
                    <div class="flex-1">
                        <input type="text" name="name" class="form-control required" placeholder="언어명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">화면 표시명</div>
                    <div class="flex-1">
                        <input type="text" name="disp_name" class="form-control required" placeholder="화면에 표시되는 언어명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">언어 아이콘</div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-3">
                            <input type="file" name="icon[]" class=" w-48 required" id="file_upload" placeholder="언어 아이콘을 선택해주세요.">
                            <!-- button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button //-->
                        </div>
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
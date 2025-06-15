<?php /* Template_ 2.2.8 2024/06/19 17:30:59 C:\Users\devco\Documents\heyteetime_dev\admin\_global\skin_ko\service\service_notice_modify.tpl 000008408 */ ?>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<form name="modify_notice-form" id="modify_notice-form" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $TPL_VAR["data"]['data']['main_idx']?>" name="main_idx">
<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./service_notice_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 공지 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">공지 수정</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공지저장</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>저장취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4 overflow-x-scroll">
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">노출대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
            <div class="form-check">
               <input id="lang_1_<?php echo $TPL_I1?>" data-index="<?php echo $TPL_I1?>" value="<?php echo $TPL_V1["idx"]?>" class="form-check-input" type="checkbox" name="lang_1" <?php if($TPL_VAR["data"]['data']['lang_kind'][$TPL_I1]['lang_chkYN']=="Y"){?> checked <?php }?>>
               <label class="form-check-label" for="lang_1_<?php echo $TPL_I1?>"><?php echo $TPL_V1["display_name"]?>(<?php echo $TPL_V1["code"]?>)</label>
            </div>
<?php }}?>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">제목</div>
    <div class="flex-1">
            <input type="text" class="form-control" name="subject" value="<?php echo $TPL_VAR["data"]['data'][ 0]['subject']?>">
      </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold shrink-0">언어별</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
            <input type="hidden" name="lang_cnt" value="<?php echo count($TPL_VAR["data"]['data']['lang_kind'])?>">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                    <li id="lang-<?php echo $TPL_I1?>-tab" class="nav-item" role="presentation">
                        <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#lang-tab-<?php echo $TPL_I1?>" type="button" role="tab" aria-controls="lang-tab-<?php echo $TPL_I1?>" aria-selected="true" disabled><?php echo $TPL_V1["display_name"]?>(<?php echo $TPL_V1["code"]?>)</button>
                    </li>
<?php }}?>
            </ul>

    <div class="tab-content w-full border-b-2 border-primary">

<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                <div id="lang-tab-<?php echo $TPL_I1?>" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="lang-<?php echo $TPL_I1?>-tab">
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">제목</div>
                        <div class="flex-1">
                            <input type="text" class="form-control" name="subject-<?php echo $TPL_I1?>" value="<?php echo $TPL_V1["subjects"]?>">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">내용</div>
                        <div class="flex-1">
                            <!-- 에디터 영역 -->
                            <div class="editor w-full">
                                <textarea name="content-<?php echo $TPL_I1?>" id="editor-<?php echo $TPL_I1?>" class="w-full"><?php echo $TPL_V1["contents"]?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">파일업로드</div>
                        <div class="flex-1 flex flex-col gap-2">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class="w-48" name="uploaded_files-<?php echo $TPL_I1?>[]" id="file1-<?php echo $TPL_I1?>">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class="w-48" name="uploaded_files-<?php echo $TPL_I1?>[]" id="file2-<?php echo $TPL_I1?>">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php }}?>

            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">상위노출</div>
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
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i>공지저장</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i>저장취소</button>
</div>
</form>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
 $(document).ready(function() {
        var isTab = false;
        var firstTabIndex = null;
        $("[id^='lang_1_']").each(function() {

            var _index = $(this).data('index');

        if( $(this).is(':checked') ) {
            isTab = true;
              if (firstTabIndex === null) {
                    firstTabIndex = _index;
                }
            $("#lang-" + _index + "-tab").find('button').prop('disabled', false);
        } else {
            $("#lang-" + _index + "-tab").find('button').prop('disabled', true);
            $("#lang-" + _index + "-tab").find('button').removeClass('active');
        }
    });

    if( isTab == false ) {
        $('.nav-item > button').removeClass('active');
        $("[id^=lang-tab-]").removeClass('active');
    } else {
            // 첫 번째 체크된 탭을 활성화
            $("#lang-" + firstTabIndex + "-tab").find('button').addClass('active');
            $("#lang-tab-" + firstTabIndex).addClass('active');
        }

    var urlParams = new URLSearchParams(window.location.search);
        var idx = urlParams.get('idx');
        if (idx) {
            $('#main_idx').val(idx);
        }
    });
</script>
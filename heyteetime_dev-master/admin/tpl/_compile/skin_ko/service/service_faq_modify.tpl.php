<?php /* Template_ 2.2.8 2024/06/18 18:35:43 C:\Users\devco\Documents\heyteetime_dev\admin\_global\skin_ko\service\service_faq_modify.tpl 000015004 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<form name="modify_form" id="modify_form" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $TPL_VAR["data"]['data']['main_idx']?>" name="main_idx">
<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="./service_faq_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> FAQ 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">FAQ 수정</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> FAQ저장</button>
        <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 저장취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4 overflow-x-scroll">
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">노출대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                <div class="form-check">
                    <input id="lang_1_<?php echo $TPL_I1?>" data-index="<?php echo $TPL_I1?>" value="<?php echo $TPL_V1["idx"]?>" class="form-check-input" type="checkbox" name="lang_1" <?php if($TPL_VAR["data"]['data']['lang_kind'][$TPL_I1]['lang_chkYN']=="Y"){?> checked <?php }?>>
                    <label class="form-check-label" for="lang_1_<?php echo $TPL_I1?>"><?php echo $TPL_V1["display_name"]?>(<?php echo $TPL_V1["code"]?>)</label>
                </div>
<?php }}?>
            <!--
            <div class="form-check">
                <input id="exposure_target_1_1" class="form-check-input" type="checkbox" name="exposure_target">
                <label class="form-check-label" for="exposure_target_1_1">한국어</label>
            </div>
            <div class="form-check">
                <input id="exposure_target_1_2" class="form-check-input" type="checkbox" name="exposure_target">
                <label class="form-check-label" for="exposure_target_1_2">영어</label>
            </div>
            <div class="form-check">
                <input id="exposure_target_1_3" class="form-check-input" type="checkbox" name="exposure_target">
                <label class="form-check-label" for="exposure_target_1_3">스페인어</label>
            </div>
            <div class="form-check">
                <input id="exposure_target_1_4" class="form-check-input" type="checkbox" name="exposure_target">
                <label class="form-check-label" for="exposure_target_1_4">일본어</label>
            </div>
            <div class="form-check">
                <input id="exposure_target_1_5" class="form-check-input" type="checkbox" name="exposure_target">
                <label class="form-check-label" for="exposure_target_1_5">중국어</label>
            </div>
            -->
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">구분</div>
        <div class="flex-1 flex flex-wrap gap-5">
            <select class="form-select w-52" name="terms_kind" id="terms_kind" onchange="show_event(this.value)">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['KindList'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
		            <option value="<?php echo $TPL_V1["bbs_faq_option_key_idx"]?>" data-name="<?php echo $TPL_V1["name"]?>"><?php echo $TPL_V1["name"]?></option>
<?php }}?>
		    </select>
		    <!--
            <select class="form-select w-52">
                <option>가입 변경 탈퇴</option>
                <option>티타임 예약</option>
                <option>결제 취소</option>
                <option>마일리지</option>
                <option>쿠폰</option>
                <option>여행후기</option>
                <option>신고</option>
            </select>
            -->
            <button type="button" class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#faq_regitst_division-modal"><i data-lucide="plus" class="w-4 h-4"></i> 구분 추가</button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold shrink-0">언어별</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">

            <!--
                <li id="bylanguage-1-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-1" type="button" role="tab" aria-controls="bylanguage-tab-1" aria-selected="true">한국어</button>
                </li>
                <li id="bylanguage-2-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-2" type="button" role="tab" aria-controls="bylanguage-tab-2" aria-selected="false">영어</button>
                </li>
                <li id="bylanguage-3-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-3" type="button" role="tab" aria-controls="bylanguage-tab-3" aria-selected="false" disabled>스페인어</button>
                </li>
                <li id="bylanguage-4-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-4" type="button" role="tab" aria-controls="bylanguage-tab-4" aria-selected="false">일본어</button>
                </li>
                <li id="bylanguage-5-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-5" type="button" role="tab" aria-controls="bylanguage-tab-5" aria-selected="false" disabled>중국어</button>
                </li>
            -->
               <input type="hidden" name="lang_cnt" value="<?php echo count($TPL_VAR["data"]['data']['lang_kind'])?>">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                    <li id="lang-<?php echo $TPL_I1?>-tab" class="nav-item" role="presentation">
                        <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#lang-tab-<?php echo $TPL_I1?>" type="button" role="tab" aria-controls="lang-tab-<?php echo $TPL_I1?>" aria-selected="true" disabled><?php echo $TPL_V1["display_name"]?>(<?php echo $TPL_V1["code"]?>)</button>
                    </li>
<?php }}?>
            </ul>

            <div class="tab-content w-full border-b-2 border-primary">

                <!-- 한국어 -->
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                <!--<div id="bylanguage-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-1-tab">-->
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
                                 <textarea name="content-<?php echo $TPL_I1?>" id="editor" class="w-full"><?php echo $TPL_V1["contents"]?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-3 mb-3">
                        <div class="w-full md:w-20 pt-2 font-semibold">파일업로드</div>
                        <div class="flex-1 flex flex-col gap-2">
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" name="uploaded_files-<?php echo $TPL_I1?>[]" id="file1">
                                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <input type="file" class=" w-48" name="uploaded_files-<?php echo $TPL_I1?>[]" id="file2">
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
        <div class="w-full md:w-40 pt-2 font-semibold">노출여부</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="form-check">
                <input id="top_exposure2_1" class="form-check-input" type="radio" name="top_exposure" value="1" <?php if($TPL_VAR["data"]['data'][ 0]['status']=='1'){?> checked <?php }?>>
                <label class="form-check-label" for="top_exposure2_1">노출</label>
            </div>
            <div class="form-check">
                <input id="top_exposure2_2" class="form-check-input" type="radio" name="top_exposure" value="0" <?php if($TPL_VAR["data"]['data'][ 0]['status']=='0'){?> checked <?php }?>>
                <label class="form-check-label" for="top_exposure2_2">미노출</label>
            </div>
        </div>
    </div>


</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> FAQ저장</button>
    <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 저장취소</button>
</div>
</form>

<!-- FAQ 구분 모달 -->
<div id="faq_regitst_division-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">FAQ 구분</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">한국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">영어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">일본어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">스페인어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">중국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button class="px-6 btn btn-primary">저장</button>
                </div>
            </div>
        </div>
    </div>
</div>
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
    });
</script>
<?php /* Template_ 2.2.8 2024/06/17 13:32:59 C:\Users\코드아이디어\projects\heyteetime_dev\admin\_global\skin_ko\product\prod_teetime_detail.tpl 000030854 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between">
    <div>
        <div class="flex items-center mt-4">
            <a href="/product/prod_teetime.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 티타임 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">티타임 상세</h2>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <button type="button" class="btn btn-primary btn_submit"><i data-lucide="plus" class="w-4 h-4"></i> 티타임저장</button>
        <button type="button" class="btn btn-danger" onClick="location.href='/product/prod_teetime.php';"><i data-lucide="x" class="w-4 h-4"></i> 저장취소</button>
    </div>
</div>

<!-- 티타임 정보 -->
<div class="intro-y box p-5 mt-3">
    <div class="flex items-center justify-between mb-2">
        <h3 class="text-lg font-bold mr-auto">티타임정보</h3>
    </div>
    <div class="flex flex-wrap items-start gap-2 p-2 border border-slate-200 rounded whitespace-nowrap">
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">지역</div>
            <div><?php echo $TPL_VAR["data"]['data']['location']?></div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">상품구분</div>
            <div><?php echo $TPL_VAR["data"]['data']['PRODUCT_TYPE']?></div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">골프장</div>
            <div><?php echo $TPL_VAR["data"]['data']['PRD_NAME']?><br/>(<?php echo $TPL_VAR["data"]['data']['FIELD_ID']?>)</div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">티타임</div>
            <div><?php echo $TPL_VAR["data"]['data']['TEETIME']?></div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">공급가</div>
            <div><?php echo number_format($TPL_VAR["data"]['data']['ORIGIN_PRICE'], 2)?></div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">판매가</div>
            <div><?php echo number_format($TPL_VAR["data"]['data']['SALES_PRICE'], 2)?></div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">사용여부</div>
            <div><?php echo $TPL_VAR["data"]['data']['H_USE_YN']?></div>
        </div>
        <div class="flex-1 py-1.5 px-3">
            <div class="mb-0.5 text-slate-500">수정</div>
            <div><?php if($TPL_VAR["data"]['data']['MOD_TEXT']!='-'){?><?php echo $TPL_VAR["data"]['data']['MOD_TEXT']?> ( <?php echo $TPL_VAR["data"]['data']['UPTDATE']?> )<?php }?></div>
        </div>
    </div>
</div>

<!-- 폼 -->
<div class="intro-y box p-5 mt-3">
    <!--
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">지역</div>
        <div class="flex-1 flex flex-wrap gap-1">
            <input type="text" class="form-control w-24" value="<?php echo $TPL_VAR["data"]['data']['AREA_NAME']?>">
            <input type="text" class="form-control w-24" value="<?php echo $TPL_VAR["data"]['data']['NAT_NM']?>">
            <input type="text" class="form-control w-24" value="<?php echo $TPL_VAR["data"]['data']['STATE_NM']?>">
            <input type="text" class="form-control w-24" value="<?php echo $TPL_VAR["data"]['data']['CITY_NM']?>">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">상품</div>
        <div class="flex-1">
            <input type="text" class="form-control w-40" value="<?php echo $TPL_VAR["data"]['data']['PRD_NAME']?>">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">티타임</div>
        <div class="flex-1 flex flex-wrap gap-1">
            <div class="relative w-full md:w-64">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
                <input type="text" class="datepicker form-control pl-12" value="<?php echo $TPL_VAR["data"]['data']['TEETIME']?>">
            </div>
        </div>
    </div>
    //-->
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">이미지/영상</div>
        <div class="flex-1 grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="col-span-1 lg:col-span-2">
                <div>이미지</div>
                <div class="relative img_slide px-6 mt-2">
                    <div class="img_slide_box overflow-hidden">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                            <li class="swiper-slide overflow-hidden rounded"><img src="/_global/skin_ko/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div>
                <div>영상</div>
                <div class="relative video_slide px-6 mt-2">
                    <div class="video_slide_box overflow-hidden">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <video muted="muted" controls>
                                    <source src="/_global/skin_ko/dist/images/video01.mp4" type="video/mp4">
                                </video>
                            </li>
                            <li class="swiper-slide">
                                <video muted="muted" controls>
                                    <source src="/_global/skin_ko/dist/images/video01.mp4" type="video/mp4">
                                </video>
                            </li>
                            <li class="swiper-slide">
                                <video muted="muted" controls>
                                    <source src="/_global/skin_ko/dist/images/video01.mp4" type="video/mp4">
                                </video>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">코스</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="flex items-center gap-2">
                <span>Hole</span>
                <input type="text" class="form-control w-24" value="<?php echo $TPL_VAR["data"]['data']['HOLE_CNT']?>">
            </div>
            <div class="flex items-center gap-2">
                <span>Par</span>
                <input type="text" class="form-control w-24" value="<?php echo $TPL_VAR["data"]['data']['PAR_CNT']?>">
            </div>
            <div class="flex items-center gap-2">
                <span>전장</span>
                <input type="text" class="form-control w-24" value="<?php echo $TPL_VAR["data"]['data']['DISTANCE']?>">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">위도/경도</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="flex items-center gap-2">
                <span>위도</span>
                <input type="text" class="form-control w-40" value="<?php echo $TPL_VAR["data"]['data']['LAT']?>">
            </div>
            <div class="flex items-center gap-2">
                <span>경도</span>
                <input type="text" class="form-control w-40" value="<?php echo $TPL_VAR["data"]['data']['LNG']?>">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">연락처</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="flex items-center gap-2">
                <span>홈페이지</span>
                <input type="text" class="form-control w-full md:w-80" value="<?php echo $TPL_VAR["data"]['data']['WEBSITE']?>">
            </div>
            <div class="flex items-center gap-2">
                <span>이메일</span>
                <input type="text" class="form-control w-48" value="<?php echo $TPL_VAR["data"]['data']['RESERVE_EMAIL']?>">
            </div>
            <div class="flex items-center gap-2">
                <span>전화</span>
                <input type="text" class="form-control w-48" value="<?php echo $TPL_VAR["data"]['data']['PHONE']?>">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">적용언어</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-6">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                <div class="form-check">
                    <input id="teetime_1_<?php echo $TPL_I1?>" data-index="<?php echo $TPL_I1?>" value="<?php echo $TPL_V1["idx"]?>" class="form-check-input" type="checkbox" name="teetime_1">
                    <label class="form-check-label" for="teetime_1_<?php echo $TPL_I1?>"><?php echo $TPL_V1["display_name"]?>(<?php echo $TPL_V1["code"]?>)</label>
                </div>
<?php }}?>
            </div>
            <div class="mt-2 text-xs text-slate-600">* 사용자 언어에 해당하는 정보가 없을 경우 영어가 표시됨</div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">골프장</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                <li id="teetime-<?php echo $TPL_I1?>-tab" class="nav-item" role="presentation">
                    <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#teetime-tab-<?php echo $TPL_I1?>" type="button" role="tab" aria-controls="teetime-tab-<?php echo $TPL_I1?>" aria-selected="true" disabled><?php echo $TPL_V1["display_name"]?>(<?php echo $TPL_V1["code"]?>)</button>
                </li>
<?php }}?>
            </ul>
            <div class="tab-content w-full border-b-2 border-primary">
                <!-- 한국어 -->
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['lang_kind'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                <div id="teetime-tab-<?php echo $TPL_I1?>" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="teetime-<?php echo $TPL_I1?>-tab">
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">골프장명*</div>
                        <div class="flex-1">
                            <input name="prod_name" type="text" class="form-control inp required" value="<?php echo $TPL_VAR["data"]['data']['PRD_NAME']?>">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">골프장소개*</div>
                        <div class="flex-1">
                            <textarea name="prod_info" class="form-control block h-20 resize-none inp required"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주소*</div>
                        <div class="flex-1">
                            <input name="prod_addr" type="text" class="form-control inp required" value="<?php echo $TPL_VAR["data"]['data']['ADDR']?>">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">시설*</div>
                        <div class="flex-1">
                            <textarea name="prod_facility" class="form-control block h-24 resize-none inp required"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">공항거리*</div>
                        <div class="flex-1">
                            <input name="prod_distance" type="text" class="form-control inp required" value="<?php echo $TPL_VAR["data"]['data']['DISTANCE']?> <?php echo $TPL_VAR["data"]['data']['DISTANCE_ME']?>">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">주의사항*</div>
                        <div class="flex-1">
                            <textarea name="prod_notandum" class="form-control block h-20 resize-none inp required"><?php echo $TPL_VAR["data"]['data']['RESERVE_MEMO']?></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">필수사항*</div>
                        <div class="flex-1">
                            <textarea name="prod_essential" class="form-control block h-20 resize-none inp required"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">포함사항*</div>
                        <div class="flex-1">
                            <textarea name="prod_essential" class="form-control block h-20 resize-none inp required"><?php echo $TPL_VAR["data"]['data']['PIN_MEMO']?></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">불포함사항*</div>
                        <div class="flex-1">
                            <textarea name="prod_not_essential" class="form-control block h-20 resize-none inp required"><?php echo $TPL_VAR["data"]['data']['POUT_MEMO']?></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-1 mb-2">
                        <div class="w-full md:w-28 pt-1 font-medium">수상정보</div>
                        <div class="flex-1">
                            <textarea name="prod_award" class="form-control block h-20 resize-none inp"></textarea>
                        </div>
                    </div>
                </div>
<?php }}?>
            </div>
        </div>
    </div>

    <form name="teetimeRatioForm" id="teetimeRatioForm" method="post">
    <input type="hidden" name="teetime_field_id" value="<?php echo $TPL_VAR["data"]['data']['fieldId']?>">
    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="shrink-0 w-full md:w-40 pt-2 font-semibold">Ratio 설정</div>
        <div class="flex-1 w-full md:w-calc-40">
            <button type="button" class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#coupon_channel_add-modal">채널 추가</button>
            <div class="overflow-x-auto">
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th class="whitespace-nowrap">채널명</th>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['exchang_kind'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                        <th class="whitespace-nowrap"><?php echo $TPL_V1["currency_code"]?></th>
<?php }}?>
                    </tr>
                    </thead>
                    <tbody>

<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['ratio'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                        <tr class="ratio_area">
                            <input type="hidden" name="channel_code[]" value="<?php echo $TPL_V1["channel"]?>">
                            <td>공통</td>
<?php if(is_array($TPL_R2=$TPL_VAR["data"]['data']['exchang_kind'])&&!empty($TPL_R2)){foreach($TPL_R2 as $TPL_V2){?>
                                <input type="hidden" name="currency[]" value="<?php echo $TPL_V2["currency_code"]?>">
                                <td>
                                    <div class="flex items-center gap-1">
                                        <select class="form-select w-20" name="<?php echo $TPL_V2["currency_code"]?>_type[]]">
                                            <option value="F" <?php if($TPL_VAR["data"]['data']['ratio'][$TPL_I1][$TPL_V2["currency_code"]]['gubun']=='F'){?> selected <?php }?>>금액</option>
                                            <option value="R" <?php if($TPL_VAR["data"]['data']['ratio'][$TPL_I1][$TPL_V2["currency_code"]]['gubun']=='R'){?> selected <?php }?>>비율</option>
                                        </select>
                                        <input type="text" value="<?php echo number_format($TPL_VAR["data"]['data']['ratio'][$TPL_I1][$TPL_V2["currency_code"]]['RATIO'], 2)?>" name="<?php echo $TPL_V2["currency_code"]?>_price[]" class="form-control w-24">
                                    </div>
                                </td>
<?php }}?>
                        </tr>
<?php }}?>
                    <!--
                    <tr>
                        <td>
                            <button class="btn p-1.5 btn-danger-soft rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                            <input type="text" class="form-control w-24">
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn p-1.5 btn-danger-soft rounded-full"><i data-lucide="x" class="w-3 h-3"></i></button>
                            <input type="text" class="form-control w-24">
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                <select class="form-select w-20">
                                    <option>금액</option>
                                    <option>비율</option>
                                </select>
                                <input type="text" class="form-control w-24">
                            </div>
                        </td>
                    </tr>
                    //-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">Tiger 마일리지</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div>
                <!-- <div class="mb-1">평일</div> //-->
                <div class="flex items-center gap-1">
                    <select class="form-select w-20" name="point_type">
                        <option value="F" <?php if($TPL_VAR["data"]['data']['MEMBER_RATIO_GUBUN']=='F'){?>selected<?php }?>>금액</option>
                        <option value="R" <?php if($TPL_VAR["data"]['data']['MEMBER_RATIO_GUBUN']=='R'){?>selected<?php }?>>비율</option>
                    </select>
                    <input type="text" name="point" value="<?php echo number_format($TPL_VAR["data"]['data']['MEMBER_RATIO'], 2)?>" class="form-control w-24">
                </div>
            </div>
            <!--
            <div>
                <div class="mb-1">주말</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
            <div>
                <div class="mb-1">야간</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
            <div>
                <div class="mb-1">T-BGM</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
            <div>
                <div class="mb-1">임직원</div>
                <div class="flex items-center gap-1">
                    <select class="form-select w-20">
                        <option>금액</option>
                        <option>비율</option>
                    </select>
                    <input type="text" class="form-control w-24">
                </div>
            </div>
            //-->
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 mb-5">
        <div class="w-full md:w-40 pt-2 font-semibold">사용여부</div>
        <div class="flex-1 flex flex-wrap items-center gap-6">
            <div class="form-check">
                <input id="teetime_2_1" class="form-check-input" value="Y" <?php if($TPL_VAR["data"]['data']['H_USE_YN']=='Y'){?> checked <?php }?> type="radio" name="teetime_2">
                <label class="form-check-label" for="teetime_2_1">사용</label>
            </div>
            <div class="form-check">
                <input id="teetime_2_2" class="form-check-input" value="N" <?php if($TPL_VAR["data"]['data']['H_USE_YN']=='N'){?> checked <?php }?> type="radio" name="teetime_2">
                <label class="form-check-label" for="teetime_2_2">미사용</label>
            </div>
        </div>
    </div>
    </form>

</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button type="button" class="btn btn-primary btn_submit"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 티타임저장</button>
    <button type="button" class="btn btn-danger" onClick="location.href='/product/prod_teetime.php';"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 저장취소</button>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    var imgSwiper = new Swiper(".img_slide_box", {
        slidesPerView:2,
        spaceBetween: 10,
        observer:true,
        observeParents:true,
        navigation: {
            nextEl: ".img_slide .swiper-button-next",
            prevEl: ".img_slide .swiper-button-prev",
        },
        breakpoints: {
            1400: {
                slidesPerView: 4,
            },
            767: {
                slidesPerView: 3,
            },
        }

    });
    var videoSwiper = new Swiper(".video_slide_box", {
        slidesPerView:2,
        spaceBetween: 10,
        observer:true,
        observeParents:true,
        navigation: {
            nextEl: ".video_slide .swiper-button-next",
            prevEl: ".video_slide .swiper-button-prev",
        },

    });
</script>
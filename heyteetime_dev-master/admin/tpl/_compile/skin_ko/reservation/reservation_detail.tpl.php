<?php /* Template_ 2.2.8 2024/06/19 17:33:33 C:\Users\코드아이디어\projects\heyteetime_dev\admin\_global\skin_ko\reservation\reservation_detail.tpl 000027767 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between">
    <div>
        <div class="flex items-center mt-4">
            <a href="./reservation_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 예약목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">예약 상세</h2>
        </div>
    </div>

    <div class="flex items-center gap-2 ml-auto">
    <!--이미 예약확정/예약취소 상태인 경우 해당 버튼 숨기기-->
<?php if($TPL_VAR["data"]['data']['booking_status']==='예약요청'){?>
        <button class="btn btn-primary" onclick="modalOpen('confirm_check-modal')"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 예약확정</button>
        <button class="btn btn-danger cancel_btn" onclick="modalOpen('reser_cancel-modal')"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 예약취소</button>
<?php }elseif($TPL_VAR["data"]['data']['booking_status']==='예약확정'){?>
        <button class="btn btn-danger cancel_btn" onclick="modalOpen('reser_cancel-modal')"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 예약취소</button>
<?php }?>
    </div>
</div>

<div class="intro-y mt-6">
    <div class="flex items-center justify-between">
        <h3 class="text-lg font-semibold mr-auto">예약정보</h3>
        <div>예약상태 : 예약요청, 예약확정, 예약취소 / 확정상태(예약요청일때) : 확정대기, 예약확정, 예약취소</div>
    </div>
    <div class="intro-y box p-5 mt-2 flex flex-wrap items-center overflow-hidden whitespace-nowrap">
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">예약번호</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['booking_number']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">요청일시</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['reg_date']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">예약상태</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['booking_status']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">확정상태</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['confirm_status']?></div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">확정일시</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['fix_date']?></div>
        </div>
    </div>
</div>

<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">예약자정보</h3>
    <div class="intro-y box p-5 mt-2 flex flex-wrap items-center overflow-hidden whitespace-nowrap">
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">ID</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['rev_email']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">예약자</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['rev_name']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">연락처</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['rev_phone_number']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">국적</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['rev_country_name']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">성별</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['rev_sex_type']?></div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">동반여부</div>
            <div class="truncate text-base"><?php echo $TPL_VAR["data"]['data']['has_partner']?></div>
        </div>
    </div>
</div>

<div class="intro-y mt-6">
    <div class="flex items-center justify-between">
        <h3 class="text-lg font-semibold mr-auto">상품정보</h3>
        <div class="text-lg font-semibold">총 상품가격 : <?php echo $TPL_VAR["data"]['data']['currency_code']?> <?php echo $TPL_VAR["data"]['data']['total_price']?></div>
    </div>
    <div class="intro-y box p-5 mt-2">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['product'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
            <h4 <?php if($TPL_I1> 0){?> class="mt-4" <?php }?>>예약번호 : <?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['booking_number']?></h4>
            <div class="md:flex gap-2">
                <div class="flex-1 mt-1 p-3 border border-slate-300 rounded-lg overflow-hidden whitespace-nowrap">
                    <div class="flex flex-wrap items-center">
                        <div class="flex-1 px-5 py-2">
                            <div class="text-slate-500">일자</div>
                            <div class="text-base"><?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['play_date']?></div>
                        </div>
                        <div class="flex-1 px-5 py-2">
                            <div class="text-slate-500">예약상품명</div>
                            <div class="text-base"><?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['prod_name']?></div>
                        </div>
                        <div class="flex-1 px-5 py-2">
                            <div class="text-slate-500">티타임</div>
                            <div class="text-base"><?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['tee_time']?> <?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['course_name']?></div>
                        </div>
                        <div class="flex-1 px-5 py-2">
                            <div class="text-slate-500">예약금액</div>
                            <div class="text-base"><?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['currency_code']?> <?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['sale_price']?></div>
                        </div>
                        <div class="flex-1 px-5 py-2">
                            <div class="text-slate-500">인원수</div>
                            <div class="text-base"><?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['person_count']?></div>
                        </div>
                        <div class="flex-1 px-5 py-2">
                            <div class="text-slate-500">총 예약금액</div>
                            <div class="text-base"><?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['currency_code']?> <?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['sale_price']?></div>
                        </div>
                        <div class="flex-1 px-5 py-2">
                            <div class="text-slate-500">예약상태</div>
                            <div class="text-base"><?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['status']?></div>
                        </div>
                    </div>

<?php if($TPL_VAR["data"]['data']['product'][$TPL_I1]['total_option']> 0){?>
                    <div class="flex flex-wrap items-center px-5 pt-2">
                        <div class="text-slate-500 w-24 shrink-0">선택옵션</div>
                        <div class="text-slate-500 w-24 shrink-0">옵션가격</div>
                        <div class="text-slate-500 flex-1">옵션정보</div>
                    </div>

<?php if(is_array($TPL_R2=$TPL_VAR["data"]['data']['product'][$TPL_I1]['options'])&&!empty($TPL_R2)){$TPL_I2=-1;foreach($TPL_R2 as $TPL_V2){$TPL_I2++;?>
                            <div class="flex flex-wrap whitespace-normal px-5 <?php if($TPL_I2> 0){?> pt-2 <?php }?>">
                                <div class="relative text-base w-24 shrink-0 <?php if($TPL_VAR["data"]['data']['product'][$TPL_I1]['options'][$TPL_I2]->status== 0){?> text-danger line-through <?php }?>">
                                    <button type="button" class="absolute -left-6 top-1 btn btn-sm btn-danger rounded-full p-0.5" data-tw-toggle="modal" data-tw-target="#reser_cancel-modal">
                                        <i data-lucide="x" class="w-3 h-3"></i>
                                    </button>
                                    <?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['options'][$TPL_I2]->option_kind?>

                                </div>
                                <div class="text-base w-24 shrink-0 <?php if($TPL_VAR["data"]['data']['product'][$TPL_I1]['options'][$TPL_I2]->status== 0){?> text-danger line-through <?php }?>">50,000</div>
                                <div class="text-base <?php if($TPL_VAR["data"]['data']['product'][$TPL_I1]['options'][$TPL_I2]->status== 0){?> text-danger line-through <?php }?>">
                                    -
                                </div>
                            </div>
<?php }}?>
<?php }?>
                </div>
<?php if($TPL_VAR["data"]['data']['product'][$TPL_I1]['status']=='예약취소'){?>
                    <button class="btn btn-dark-soft w-full md:w-12 mt-2 md:mt-0 p-3">취소완료</button>
<?php }else{?>
                    <button class="btn btn-success w-full md:w-12 mt-2 md:mt-0 p-3 cancel_btn" data-teeidx="<?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['idx']?>" data-tw-toggle="modal" data-tw-target="#reser_cancel-modal">예약취소</button>
<?php }?>
            </div>
<?php }}?>
    </div>
</div>

<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">요청사항</h3>
    <div class="intro-y box p-5 mt-2 overflow-hidden">
        <?php echo $TPL_VAR["data"]['data']['request_memo']?>

    </div>
</div>

<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">결제정보</h3>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['payment'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
        <div class="intro-y box p-5 mt-2 flex flex-wrap items-center overflow-hidden whitespace-nowrap">
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">총금액</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['price_currency']?> <?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['price']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">쿠폰</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['coupon_discount']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">마일리지</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['point_discount']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">결제금액</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['price_currency']?> <?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['price']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">적립예정마일리지</div>
                <div class="text-base">-</div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">결제수단</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['payment_method']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">결제상태</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['status']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">승인번호</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['auth_code']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">PG결제번호</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['store_code']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">결제일시</div>
                <div class="text-base"><?php echo $TPL_VAR["data"]['data']['payment'][$TPL_I1]['create_date']?></div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">PG취소번호</div>
                <div class="text-base">-</div>
            </div>
            <div class="flex-1 px-5 py-2">
                <div class="text-slate-500">취소일시</div>
                <div class="text-base">-</div>
            </div>
        </div>
<?php }}?>
</div>

<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">내장정보</h3>
    <div class="intro-y box overflow-x-auto p-5 mt-2 overflow-hidden whitespace-nowrap">
        <table class="table">
            <colgroup>
                <col width="13%">
                <col width="13%">
                <col width="*">
                <col width="*">
                <col width="13%">
                <col width="13%">
            </colgroup>
            <thead>
            <tr>
                <th>예약번호</th>
                <th>일자</th>
                <th>성</th>
                <th>이름</th>
                <th>성별</th>
                <th>수정</th>
            </tr>
            </thead>
            <tbody>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['product'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
<?php if(is_array($TPL_R2=$TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'])&&!empty($TPL_R2)){$TPL_I2=-1;foreach($TPL_R2 as $TPL_V2){$TPL_I2++;?>
                        <tr data-idx="<?php echo $TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->idx?>" data-tidx="<?php echo $TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->teeIdx?>">
                            <td class="!px-1"><input type="text" class="form-control" value="<?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['booking_number']?>" disabled></td>
                            <td class="!px-1"><input type="text" class="form-control" value="<?php echo $TPL_VAR["data"]['data']['product'][$TPL_I1]['play_date']?>" disabled></td>
                            <td class="!px-1"><input type="text" class="form-control" <?php if($TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->hasData=='true'){?> disabled <?php }?> placeholder='입력가능'  value="<?php echo $TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->last_name?>"></td>
                            <td class="!px-1"><input type="text" class="form-control" <?php if($TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->hasData=='true'){?> disabled <?php }?> placeholder='입력가능'  value="<?php echo $TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->first_name?>"></td>
                            <td class="!px-1">
                                <select class="form-select" <?php if($TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->hasData=='true'){?> disabled <?php }?>>
<?php if($TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->sex=='M'){?> -->
                                        <option value="M" selected>남</option>
                                        <option value="F">여</option>
<?php }elseif($TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->sex=='F'){?>
                                        <option value="M">남</option>
                                        <option value="F" selected>여</option>
<?php }else{?>
                                        <option value="M">남</option>
                                        <option value="F">여</option>
<?php }?>
                                </select>
                            </td>
                            <td class="!px-1">
<?php if($TPL_VAR["data"]['data']['partners'][$TPL_I1]['partner_info'][$TPL_I2]->hasData==='true'){?>
                                <button class="btn btn-danger editPartnerInfoBtn" onclick="editPartnerInfo(this)">수정하기</button>
                                <button class="btn btn-primary savePartnerInfoBtn" onclick="savePartnerInfo(this)" style="display: none">저장하기</button>
<?php }else{?>
                                <button class="btn btn-danger editPartnerInfoBtn" onclick="editPartnerInfo(this)" style="display: none">수정하기</button>
                                <button class="btn btn-primary savePartnerInfoBtn" onclick="savePartnerInfo(this)">저장하기</button>
<?php }?>
                            </td>
                        </tr>
<?php }}?>
<?php }}?>
            </tbody>
        </table>
    </div>
</div>


<div id="reser_cancel-modal" class="modal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="font-medium text-base mr-auto">취소사유</h2>
            <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
        </div>
        <div class="modal-body p-10 text-center">
            <div class="flex items-center gap-2 mb-2">
                <div class="shrink-0 w-20 py-2 font-semibold">취소구분</div>
                <div class="flex-1">
                    <select name="" id="cancel_type" class="form-select">
                        <option value="" disabled hidden selected>선택</option>
<?php if(is_array($TPL_R1=$TPL_VAR["INC"]['cancel_type'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_K1=>$TPL_V1){?>
                            <option value="<?php echo $TPL_K1?>"><?php echo $TPL_V1?></option>
<?php }}?>
                    </select>
                </div>
            </div>
            <div class="flex items-center gap-2 mb-2">
                <div class="shrink-0 w-20 py-2 font-semibold">취소사유</div>
                <div class="flex-1">
                    <textarea name="" id="cancel_memo" class="form-control"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" onclick="cancelCheck(this)">예약취소</button>
            </div>
        </div>
    </div>
</div>
</div>
<div id="confirm_check-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">안내</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="items-center gap-2 mb-2">
                    <div class="shrink-0  py-2 font-semibold message">예약을 확정하시겠습니까?</div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button class="px-6 btn btn-primary" onclick="confirmReservation()">확인</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="cancel_check-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">안내</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="items-center gap-2 mb-2">
                    <div class="shrink-0  py-2 font-semibold message">예약을 취소하시겠습니까?</div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button class="px-6 btn btn-primary" onclick="cancelReservation(this)">확인</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    function editPartnerInfo(editBtn) {
        $(editBtn).parents('tr').find('input, select').slice(2).prop('disabled', false);
        $(editBtn).hide();
        $(editBtn).siblings('button.savePartnerInfoBtn').show();
    }

    function savePartnerInfo(saveBtn) {
        const $input = $(saveBtn).parents('tr').find('input, select').slice(2);
        const infoIdx = $(saveBtn).parents('tr').data('idx');

        // validation start --
        if(!$input.eq(0).val()) {
            $('#submit_error-modal .message').text('성을 입력해주세요.');
            modalOpen("submit_error-modal")
            return false;
        }

        if(!$input.eq(1).val()) {
            $('#submit_error-modal .message').text('이름을 입력해주세요.');
            modalOpen("submit_error-modal")
            return false;
        }

        if(!$input.eq(2).val()) {
            $('#submit_error-modal .message').text('성별을 선택해주세요.');
            modalOpen("submit_error-modal")
            return false;
        }
        // validation end --

        let data = {
            type : infoIdx ? 'patchReservationDetail' : 'postReservationDetail',
            lastName: $input.eq(0).val(),
            fistName: $input.eq(1).val(),
            sex: $input.eq(2).val(),
        }
        console.log(data);

        if(!infoIdx) {
            data = {
                ...data,
                bookIdx : <?php echo $TPL_VAR["data"]['data']['idx']?>,
                teeIdx : $(saveBtn).parents('tr').data('tidx'),
            }
        } else {
            data = {
                ...data,
                idx : infoIdx,
            }
        }

        $.ajax({
            url: '/reservation/ajax_reservation.php',
            method: 'POST',
            data: data,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (result) {
                $('#submit_error-modal .message').text(result.msg);
                modalOpen("submit_error-modal")

                $(saveBtn).hide();
                $(saveBtn).siblings('button.editPartnerInfoBtn').show();
                $(saveBtn).parents('tr').data('idx', result.data);
                $($input).prop('disabled', true);
            },
            error: function (e) {
                console.log(e);
                $('#submit_error-modal .message').text(e.responseJSON.msg);
                modalOpen("submit_error-modal")
            }
        })
    }

    function confirmReservation() {
        closeModal("confirm_check-modal");
        $.ajax({
            url: '/reservation/ajax_reservation.php',
            method: 'POST',
            data : {
                type: 'patchConfirmReservation',
                idx: <?php echo $TPL_VAR["data"]['data']['idx']?>,
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (result) {
                console.log(result);
                location.reload();
            },
            error: function(e) {
                console.log(e)
                $('#submit_error-modal .message').text(e.responseJSON.msg);
                modalOpen("submit_error-modal")
            }
        })
    }

    $(document).on('click', '.cancel_btn', function() {
        if($(this).data('teeidx')) {
            $("#reser_cancel-modal .btn-primary").data('teeidx', $(this).data('teeidx'));
        } else {
            $("#reser_cancel-modal .btn-primary").data('teeidx', '');
        }
    })

    function cancelCheck(element) {
        if(!$("#cancel_type").val()) {
            $('#submit_error-modal .message').text('취소구분을 선택해주세요.');
            modalOpen02("submit_error-modal")
            return false;
        }

        if(!$("#cancel_memo").val()) {
            $('#submit_error-modal .message').text('취소사유를 작성해주세요.');
            modalOpen02("submit_error-modal")
            return false;
        }

        if($(element).data('teeidx')) {
            $("#cancel_check-modal .btn-primary").data('teeidx', $(element).data('teeidx'));
        } else {
            $("#cancel_check-modal .btn-primary").data('teeidx', '');
        }

        modalOpen02('cancel_check-modal');
    }

    function cancelReservation(element) {
        const teeIdx = $(element).data('teeidx');

        let cancel = {
            "code": $("#cancel_type").val(),
            "memo": $("#cancel_memo").val()
        };

       // 전체취소 & 부분취소 확인
       if(<?php echo $TPL_VAR["data"]['productSize']?> === 1 || !teeIdx) { // 전체취소
           $.ajax({
            url: '/reservation/ajax_reservation.php',
            method: 'POST',
            data : {
                type: 'patchCancelReservation',
                idx: <?php echo $TPL_VAR["data"]['data']['idx']?>,
                cancelMemo: JSON.stringify(cancel),
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (result) {
                console.log(result);
                location.reload();
            },
            error: function(e) {
                console.log(e)
                $('#submit_error-modal .message').text(e.responseJSON.msg);
                modalOpen("submit_error-modal")
            }
        })
       } else {
           // 부분취소
       }
    }

</script>
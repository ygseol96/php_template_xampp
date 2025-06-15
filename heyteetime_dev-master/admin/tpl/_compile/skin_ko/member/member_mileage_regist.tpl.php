<?php /* Template_ 2.2.8 2024/06/13 13:19:46 C:\Users\devco\Documents\heyteetime_dev\admin\_global\skin_ko\member\member_mileage_regist.tpl 000009229 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<form name="add_point-form" id="add_point-form" enctype="multipart/form-data">
    <div class="intro-y flex flex-wrap items-center justify-between" id="point_top">
        <div>
            <div class="flex items-center mt-4">
                <a href="/sys/member/member_mileage.php" class="flex items-center gap-1 text-primary">
                    <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 마일리지 목록
                </a>
            </div>
            <div class="flex items-center mt-2">
                <h2 class="text-xl font-bold mr-auto">마일리지지급</h2>
            </div>
        </div>
        <div class="flex items-center gap-2 ml-auto">
            <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 마일리지지급</button>
            <button type="button" class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 지급취소</button>
        </div>
    </div>

    <!-- 상세 -->
    <div class="intro-y box p-5 mt-4">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col md:flex-row gap-3 mb-4">
                <div class="w-full md:w-40 pt-2 font-semibold">지급사유</div>
                <div class="flex-1 flex-wrap flex items-center gap-1" id="select-container">
		<select class="form-select w-52" name="point_kind" id="point_kind" onchange="show_event(this.value)">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['KindList'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
		        <option value="<?php echo $TPL_V1["point_kind_key_idx"]?>" data-name="<?php echo $TPL_V1["kind_name"]?>"><?php echo $TPL_V1["kind_name"]?></option>
<?php }}?>
		 </select>

                    <!--
            <select class="form-select w-52" name="point_kind" id="point_kind" onclick="show_event(this.value)">
                        <option value="2">회원가입</option>
                        <option value="1">상품구매</option>
                        <option value="3">이벤트</option>
                        <option value="4">기타</option>
                        <option value="5">멤버십</option>
                        <option value="6">회원등급</option>
            </select>
            -->

                    <button type="button" class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#mileage_reason_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 지급사유추가</button>
                </div>
            </div>
            <!-- 지급사유가 이벤트일때 활성화 -->
            <div class="flex flex-col md:flex-row gap-3 mb-4" id="show_event">
                <div class="w-full md:w-40 pt-2 font-semibold">이벤트</div>
                <div class="flex-1">
                    <select class="form-select w-52">
                        <option>전체</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-4">
            <div class="w-full md:w-40 pt-2 font-semibold">지급금액</div>
            <div class="flex-1">
                <input type="text" class="form-control w-52 required" name="point" value="">
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-4">
            <div class="w-40 pt-2 font-semibold">지급구분</div>
            <div class="flex-1 flex flex-wrap items-center gap-5">
                <div class="form-check">
                    <input id="payment_1_1" class="form-check-input" type="radio" value="0" name="payment_1" onclick="show_payment(0)" checked>
                    <label class="form-check-label" for="payment_1_1">건별지급</label>
                </div>
                <div class="form-check">
                    <input id="payment_1_2" class="form-check-input" type="radio" value="1" name="payment_1" onclick="show_payment(1)">
                    <label class="form-check-label" for="payment_1_2">일괄지급</label>
                </div>
            </div>
        </div>

        <!-- 건별지급일때 -->
        <div class="flex flex-col md:flex-row gap-3 mb-4" id="show_payment_member">
            <div class="w-40 pt-2 font-semibold">수령자선택</div>
            <div class="flex-1">
                <div class="flex flex-wrap items-center gap-3">
                    <div class="relative w-48">
                        <!-- 2자 이상 입력시 연관검색어 표시 -->
                     <input type="text" class="form-control w-48" name="point_member" id="point_member" onkeyup="searchMembers(this.value)" placeholder="이름 검색">
                     <div id="suggestions" class="hidden absolute left-0 top-full w-full overflow-y-auto max-h-32 bg-white p-1 border border-slate-300 border-t-0 rounded"></div>
                        <!-- 연관검색어 표기시 hidden 클래스 삭제 -->
                     </div>
                    <button type="button" class="btn btn-primary-soft" onclick="point_member_insert()"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 수령자추가</button>
                </div>
            </div>
        </div>

        <!-- 일괄지급일때 -->
        <div id="show_payment_total">
            <div class="flex flex-col md:flex-row gap-3 mb-4">
                <div class="w-full md:w-40 pt-2 font-semibold">파일선택</div>
                <div class="flex-1 flex items-center gap-1">
                    <div>양식파일에 수령자 아이디, 성명을 기재해주세요.</div>
                    <button class="btn btn-sm btn-dark-soft">양식다운받기</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-3 mb-4">
                <div class="w-full md:w-40 pt-2 font-semibold">파일선택</div>
                <div class="flex-1 pt-1">
                    <input type="file" class=" w-48" id="file_upload">
                </div>
            </div>
        </div>

       <div class="flex flex-col md:flex-row gap-3 mb-4">
    <div class="w-full md:w-40 pt-2 font-semibold">수령자목록</div>
    <div class="flex-1">
        <div class="flex flex-wrap items-center gap-3" id="insert_name">
            <div></div>
            <button class="btn btn-sm btn-danger-soft" onclick="removeAllMembers()"><i data-lucide="x" class="w-4 h-4 mr-1"></i>전체삭제</button>
        </div>
        <input type="hidden" id="member_count" value="0">
        <input type="hidden" id="member_names">
        <input type="hidden" id="point_member_id">
        <input type="hidden" name="member_list" id="member_list" class="required" placeholder="수령자 선택">
        <div class="overflow-y-auto max-h-36 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded" id="insert_member" name="insert_member">
        </div>
    </div>
</div>


    </div>

    <div class="intro-y flex w-full items-center justify-end gap-2 mt-4" id="point_bottom">
        <button type="button" class="btn btn-primary insert"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 마일리지지급</button>
        <button type="button" class="btn btn-danger cancel"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 지급취소</button>
    </div>
</form>

<form name="add_kind-form" id="add_kind-form" enctype="multipart/form-data">
    <div id="mileage_reason_add-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-bold text-base mr-auto">지급사유추가</h2>
                    <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
                </div>
                <div class="modal-body" id="language-inputs">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['LanguageList'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                       <div class="flex items-start gap-2 mb-2">
                        <div class="shrink-0 w-20 py-2 font-semibold"><?php echo $TPL_V1["display_name"]?></div>
                        <div class="flex-1">
                            <input type="text" class="form-control" id="<?php echo $TPL_V1["code"]?>">
                        </div>
                    </div>
<?php }}?>
                    <div class="flex gap-2 justify-center mt-5">
                        <button type="button" class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                        <button type="button" class="px-6 btn btn-primary" onclick="insertKind()">저장</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $this->print_("bottom",$TPL_SCP,1);?>
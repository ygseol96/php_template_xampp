<?php /* Template_ 2.2.8 2024/06/20 13:17:40 C:\xampp\heyteetime_dev\admin\_global\skin_ko\member\member_coupon_payment.tpl 000014815 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between ">
    <div>
        <div class="flex items-center mt-4">
            <a href="/sys/member/member_coupon_payment_list.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 쿠폰지급 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">쿠폰지급</h2>
        </div>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 쿠폰지급</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 지급취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">쿠폰선택</div>
        <div class="flex-1">
            <select class="form-select w-52">
                <option>000 할인쿠폰</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-40 pt-2 font-semibold">지급대상</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="form-check">
                <input id="payment_1_1" class="form-check-input" type="radio" name="payment_1">
                <label class="form-check-label" for="payment_1_1">전체회원</label>
            </div>
            <div class="form-check">
                <input id="payment_1_2" class="form-check-input" type="radio" name="payment_1">
                <label class="form-check-label" for="payment_1_2">지급조건 선택</label>
            </div>
            <div class="form-check">
                <input id="payment_1_3" class="form-check-input" type="radio" name="payment_1">
                <label class="form-check-label" for="payment_1_3">대상자 선택</label>
            </div>
            <div class="form-check">
                <input id="payment_1_4" class="form-check-input" type="radio" name="payment_1">
                <label class="form-check-label" for="payment_1_4">파일업로드</label>
            </div>
        </div>
    </div>

    <!-- 지급조건 선택일떄 -->
    <div name="Payment_terms" class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-40 pt-2 font-semibold">지급조건선택</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-3 mb-3">
                <div class="flex flex-wrap items-center gap-1">
                    <div class="w-28 font-medium">가입일</div>
                    <div class="relative w-full md:w-64">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                        </div>
                        <input type="text" class="datepicker form-control pl-12">
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-1">
                    <div class="w-28 font-medium">여행완료일</div>
                    <div class="relative w-full md:w-64">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                        </div>
                        <input type="text" class="datepicker form-control pl-12">
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-3 mb-4">
                <div class="w-full md:w-28 font-medium">가입구분</div>
                <div class="flex-1 flex flex-wrap items-center gap-5">
                    <div class="form-check">
                        <input id="payment_2_1" class="form-check-input" type="checkbox" name="payment_2">
                        <label class="form-check-label" for="payment_2_1">구글</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_2_2" class="form-check-input" type="checkbox" name="payment_2">
                        <label class="form-check-label" for="payment_2_2">애플</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_2_3" class="form-check-input" type="checkbox" name="payment_2">
                        <label class="form-check-label" for="payment_2_3">페이스북</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_2_4" class="form-check-input" type="checkbox" name="payment_2">
                        <label class="form-check-label" for="payment_2_4">라인</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_2_4" class="form-check-input" type="checkbox" name="payment_2">
                        <label class="form-check-label" for="payment_2_4">카카오톡</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_2_4" class="form-check-input" type="checkbox" name="payment_2">
                        <label class="form-check-label" for="payment_2_4">네이버</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_2_4" class="form-check-input" type="checkbox" name="payment_2">
                        <label class="form-check-label" for="payment_2_4">일반</label>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-3 mb-4">
                <div class="w-full md:w-28 font-medium">성별</div>
                <div class="flex-1 flex flex-wrap items-center gap-5">
                    <div class="form-check">
                        <input id="payment_3_1" class="form-check-input" type="checkbox" name="payment_3">
                        <label class="form-check-label" for="payment_3_1">미입력</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_3_2" class="form-check-input" type="checkbox" name="payment_3">
                        <label class="form-check-label" for="payment_3_2">남성</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_3_3" class="form-check-input" type="checkbox" name="payment_3">
                        <label class="form-check-label" for="payment_3_3">여성</label>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-3 mb-4">
                <div class="w-full md:w-28 font-medium">앱사용자</div>
                <div class="flex-1 flex flex-wrap items-center gap-5">
                    <div class="form-check">
                        <input id="payment_4_1" class="form-check-input" type="checkbox" name="payment_4">
                        <label class="form-check-label" for="payment_4_1">앱사용</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_4_2" class="form-check-input" type="checkbox" name="payment_4">
                        <label class="form-check-label" for="payment_4_2">앱미사용</label>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-3 mb-3">
                <div class="w-full md:w-28 font-medium">구매자</div>
                <div class="flex-1 flex flex-wrap items-center gap-5">
                    <div class="form-check">
                        <input id="payment_5_1" class="form-check-input" type="checkbox" name="payment_5">
                        <label class="form-check-label" for="payment_5_1">미이용자</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_5_2" class="form-check-input" type="checkbox" name="payment_5">
                        <label class="form-check-label" for="payment_5_2">예약자</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_5_2" class="form-check-input" type="checkbox" name="payment_5">
                        <label class="form-check-label" for="payment_5_2">여행완료자</label>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-3 mb-3">
                <div class="w-full md:w-28 font-medium">국적</div>
                <div class="flex-1 flex flex-wrap items-center gap-5">
                    <div class="form-check">
                        <input id="payment_6_1" class="form-check-input" type="checkbox" name="payment_6">
                        <label class="form-check-label" for="payment_6_1">전체</label>
                    </div>
                    <div class="form-check">
                        <input id="payment_6_2" class="form-check-input" type="checkbox" name="payment_6">
                        <label class="form-check-label" for="payment_6_2">국적선택</label>
                        <select class="form-select w-36 ml-3">
                            <option>대한민국</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 대상자 선택일때 -->
    <div name="member_pick" class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">대상자선택</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center justify-between">
                <div class="flex items-center gap-3">
                    <input type="text" class="form-control w-48">
                    <button class="btn btn-primary-soft"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 대상자추가</button>
                </div>
                <div>
                    <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>전체삭제</button>
                </div>
            </div>
            <div class="overflow-y-auto max-h-36 p-4 mt-3 flex flex-wrap items-center gap-2 bg-slate-100 rounded">
                <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                    <div>홍길동 (hong@gildong.com)</div>
                    <button class="btn p-1 btn-outline-danger rounded-full"><i data-lucide="x" class="w-4 h-4"></i></button>
                </div>
                <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                    <div>홍길동 (hong@gildong.com)</div>
                    <button class="btn p-1 btn-outline-danger rounded-full"><i data-lucide="x" class="w-4 h-4"></i></button>
                </div>
                <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                    <div>홍길동 (hong@gildong.com)</div>
                    <button class="btn p-1 btn-outline-danger rounded-full"><i data-lucide="x" class="w-4 h-4"></i></button>
                </div>
                <div class="flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full">
                    <div>홍길동 (hong@gildong.com)</div>
                    <button class="btn p-1 btn-outline-danger rounded-full"><i data-lucide="x" class="w-4 h-4"></i></button>
                </div>
            </div>
        </div>
    </div>


    <div name="file_upload" class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">파일업로드</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-3">
                <input type="text" class="form-control w-full md:w-48" >
                <input type="file" class="form-control w-48 hidden" id="file_upload">
                <label for="file_upload" class="btn btn-primary-soft"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 파일선택</label>
                <button class="btn btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
            </div>
        </div>
    </div>


</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 쿠폰지급</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 지급취소</button>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    $(document).ready(function() {
        // 지급조건 선택 숨기기
        $("div[name='Payment_terms']").hide();

        // 대상자 선택 숨기기
        $("div[name='member_pick']").hide();

        // 파일업로드 숨기기
        $("div[name='file_upload']").hide();
    });

    // 지급조건 선택일때 보이기
    $("input[name='payment_1']").change(function() {
        if($(this).attr('id') == 'payment_1_2') {
            $("div[name='Payment_terms']").show();
        } else {
            $("div[name='Payment_terms']").hide();
        }
    });

    // 대상자 선택일때 보이기
    $("input[name='payment_1']").change(function() {
        if($(this).attr('id') == 'payment_1_3') {
            $("div[name='member_pick']").show();
        } else {
            $("div[name='member_pick']").hide();
        }
    });

    // 파일업로드일때 보이기
    $("input[name='payment_1']").change(function() {
        if($(this).attr('id') == 'payment_1_4') {
            $("div[name='file_upload']").show();
        } else {
            $("div[name='file_upload']").hide();
        }
    });

</script>
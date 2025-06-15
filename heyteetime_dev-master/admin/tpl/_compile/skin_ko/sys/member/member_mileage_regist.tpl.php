<?php /* Template_ 2.2.8 2024/04/22 13:19:55 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\member\member_mileage_regist.tpl 000009787 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between ">
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
        <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 마일리지지급</button>
        <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 지급취소</button>
    </div>
</div>

<!-- 상세 -->
<div class="intro-y box p-5 mt-4">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 mb-4">
            <div class="w-full md:w-40 pt-2 font-semibold">지급사유</div>
            <div class="flex-1 flex-wrap flex items-center gap-1">
                <select class="form-select w-52">
                    <option>회원가입</option>
                    <option>상품구매</option>
                    <option>이벤트</option>
                    <option>기타</option>
                    <option>멤버십</option>
                    <option>회원등급</option>
                </select>
                <button class="btn btn-primary-soft" data-tw-toggle="modal" data-tw-target="#mileage_reason_add-modal"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 지급사유추가</button>
            </div>
        </div>
        <!-- 지급사유가 이벤트일때 활성화 -->
        <div class="flex flex-col md:flex-row gap-3 mb-4">
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
            <input type="text" class="form-control w-52">
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-40 pt-2 font-semibold">지급구분</div>
        <div class="flex-1 flex flex-wrap items-center gap-5">
            <div class="form-check">
                <input id="payment_1_1" class="form-check-input" type="radio" name="payment_1">
                <label class="form-check-label" for="payment_1_1">건별지급</label>
            </div>
            <div class="form-check">
                <input id="payment_1_2" class="form-check-input" type="radio" name="payment_1">
                <label class="form-check-label" for="payment_1_2">일괄지급</label>
            </div>
        </div>
    </div>

    <!-- 건별지급일때 -->
    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-40 pt-2 font-semibold">수령자선택</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-3">
                <div class="relative w-48">
                    <!-- 2자 이상 입력시 연관검색어 표시 -->
                    <input type="text" class="form-control w-48">
                    <!-- 연관검색어 표기시 hidden 클래스 삭제 -->
                    <div class="hidden absolute left-0 top-full w-full overflow-y-auto max-h-32 bg-white p-1 border border-slate-300 border-t-0 rounded">
                        <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길일</button>
                        <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길이</button>
                        <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길삼</button>
                    </div>
                </div>
                <button class="btn btn-primary-soft"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 수령자추가</button>
            </div>
        </div>
    </div>

    <!-- 일괄지급일때 -->
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

    <div class="flex flex-col md:flex-row gap-3 mb-4">
        <div class="w-full md:w-40 pt-2 font-semibold">수령자목록</div>
        <div class="flex-1">
            <div class="flex flex-wrap items-center gap-3">
                <div>홍길동 외 000명</div>
                <button class="btn btn-sm btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>전체삭제</button>
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

</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 마일리지지급</button>
    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 지급취소</button>
</div>


<!-- 지급사유추가 -->
<div id="mileage_reason_add-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">지급사유추가</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">한국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">영어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">스페인어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">일본어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">중국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control">
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
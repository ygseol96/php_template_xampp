<?php /* Template_ 2.2.8 2024/05/16 10:58:45 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\reservation\reservation_cancel_detail.tpl 000017560 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between">
    <div>
        <div class="flex items-center mt-4">
            <a href="./reservation_cancel_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 취소목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">취소 상세</h2>
        </div>
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
            <div class="truncate text-base">240318001</div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">예약일시</div>
            <div class="truncate text-base">2024.03.18 11:22:33</div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">예약상태</div>
            <div class="truncate text-base">예약요청</div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">요청일시</div>
            <div class="truncate text-base">2024.03.18 11:22:34</div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">확정상태</div>
            <div class="truncate text-base">예약확정</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">확정일시</div>
            <div class="truncate text-base">2024.03.18 11:22:48</div>
        </div>
    </div>
</div>

<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">예약자정보</h3>
    <div class="intro-y box p-5 mt-2 flex flex-wrap items-center overflow-hidden whitespace-nowrap">
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">ID</div>
            <div class="truncate text-base">gildong@gong.com</div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">예약자</div>
            <div class="truncate text-base">gildong Hong</div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">연락처</div>
            <div class="truncate text-base">+82-1234-5678-1234</div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">국적</div>
            <div class="truncate text-base">Republic of Korea</div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">성별</div>
            <div class="truncate text-base">남</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">동반여부</div>
            <div class="truncate text-base">동반</div>
        </div>
    </div>
</div>

<div class="intro-y mt-6">
    <div class="flex items-center justify-between">
        <h3 class="text-lg font-semibold mr-auto">상품정보</h3>
        <div class="text-lg font-semibold">총 상품가격 : 1,300,000</div>
    </div>
    <div class="intro-y box p-5 mt-2">
        <div class="flex-1 mt-2 p-3 border border-slate-300 rounded-lg overflow-hidden whitespace-nowrap">
            <div class="flex flex-wrap items-center">
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">일자</div>
                    <div class="text-base">2024.04.01</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">예약상품명</div>
                    <div class="text-base">다낭 빈펄</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">티타임</div>
                    <div class="text-base">07:28 OUT코스</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">예약금액</div>
                    <div class="text-base">100,000</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">인원수</div>
                    <div class="text-base">4</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">총 예약금액</div>
                    <div class="text-base">400,000</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">예약상태</div>
                    <div class="text-base">예약확정</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">예약상태</div>
                    <div class="text-base">예약확정</div>
                </div>
            </div>
            <div class="flex flex-wrap items-center px-5 pt-2">
                <div class="text-slate-500 w-24 shrink-0">선택옵션</div>
                <div class="text-slate-500 w-24 shrink-0">옵션가격</div>
                <div class="text-slate-500 flex-1">옵션정보</div>
            </div>
            <div class="flex flex-wrap whitespace-normal px-5">
                <div class="relative text-base w-24 shrink-0">송영</div>
                <div class="text-base w-24 shrink-0">50,000</div>
                <div class="flex-1 flex flex-wrap items-center gap-x-5 gap-y-1">
                    <div class="flex items-center gap-2">
                        <span class="w-8 shrink-0 text-sm text-slate-500">이동</span>
                        <div>공항~골프장~숙소</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-8 shrink-0 text-sm text-slate-500">도착</span>
                        <div>KR201 - 2024.04.01 15:00</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-8 shrink-0 text-sm text-slate-500">도착</span>
                        <div>출발 KE201 - 2024.04.05 11:00</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-8 shrink-0 text-sm text-slate-500">요청</span>
                        <div>공항에서 나와서 가장 우측 끝으로 이동해 있을 예정입니다. 짐이 많아서 조금 큰 차량이면 좋겠습니다.</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap px-5 pt-2">
                <div class="relative text-base w-24 shrink-0">클럽렌탈</div>
                <div class="text-base w-24 shrink-0">200,000</div>
                <div class="text-base">남성 2, 여성 2</div>
            </div>
        </div>

        <div class="flex-1 mt-2 p-3 border border-slate-300 rounded-lg overflow-hidden whitespace-nowrap">
            <div class="flex flex-wrap items-center">
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">일자</div>
                    <div class="text-base">2024.04.01</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">예약상품명</div>
                    <div class="text-base">다낭 빈펄</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">티타임</div>
                    <div class="text-base">07:28 OUT코스</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">예약금액</div>
                    <div class="text-base">100,000</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">인원수</div>
                    <div class="text-base">4</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">총 예약금액</div>
                    <div class="text-base">400,000</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">예약상태</div>
                    <div class="text-base">예약확정</div>
                </div>
                <div class="flex-1 px-5 py-2">
                    <div class="text-slate-500">예약상태</div>
                    <div class="text-base">예약확정</div>
                </div>
            </div>
            <div class="flex flex-wrap items-center px-5 pt-2">
                <div class="text-slate-500 w-24 shrink-0">선택옵션</div>
                <div class="text-slate-500 w-24 shrink-0">옵션가격</div>
                <div class="text-slate-500 flex-1">옵션정보</div>
            </div>
            <div class="flex flex-wrap whitespace-normal px-5">
                <div class="relative text-base w-24 shrink-0">송영</div>
                <div class="text-base w-24 shrink-0">50,000</div>
                <div class="flex-1 flex flex-wrap items-center gap-x-5 gap-y-1">
                    <div class="flex items-center gap-2">
                        <span class="w-8 shrink-0 text-sm text-slate-500">이동</span>
                        <div>공항~골프장~숙소</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-8 shrink-0 text-sm text-slate-500">도착</span>
                        <div>KR201 - 2024.04.01 15:00</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-8 shrink-0 text-sm text-slate-500">도착</span>
                        <div>출발 KE201 - 2024.04.05 11:00</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-8 shrink-0 text-sm text-slate-500">요청</span>
                        <div>공항에서 나와서 가장 우측 끝으로 이동해 있을 예정입니다. 짐이 많아서 조금 큰 차량이면 좋겠습니다.</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap px-5 pt-2">
                <div class="relative text-base w-24 shrink-0">클럽렌탈</div>
                <div class="text-base w-24 shrink-0">200,000</div>
                <div class="text-base">남성 2, 여성 2</div>
            </div>
        </div>
    </div>
</div>

<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">요청사항</h3>
    <div class="intro-y box p-5 mt-2 overflow-hidden">
        요청사항을 기재해주세요. 요청사항을 기재해주세요. 요청사항을 기재해주세요. 요청사항을 기재해주세요. 요청사항을 기재해주세요. 요청사항을 기재해주세요. 요청사항을 기재해주세요. 요청사항을 기재해주세요. 요청사항을 기재해주세요. 요청사항을 기재해주세요.
    </div>
</div>

<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">결제정보</h3>
    <div class="intro-y box p-5 mt-2 flex flex-wrap items-center overflow-hidden whitespace-nowrap">
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">총금액</div>
            <div class="text-base">KRW 12,345,678</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">쿠폰</div>
            <div class="text-base">미사용</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">마일리지</div>
            <div class="text-base">100,000</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">결제금액</div>
            <div class="text-base">12,234,567</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">적립예정마일리지</div>
            <div class="text-base">100,000</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">결제수단</div>
            <div class="text-base">신용카드(VISA)</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">결제상태</div>
            <div class="text-base">결제완료</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">승인번호</div>
            <div class="text-base">1234567890</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">PG결제번호</div>
            <div class="text-base">EX20240318112233444</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">결제일시</div>
            <div class="text-base">2024.03.18 11:22:33</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">PG취소번호</div>
            <div class="text-base">EX20240318112233444</div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">취소일시</div>
            <div class="text-base">2024.03.18 11:22:33</div>
        </div>
    </div>
</div>

<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">내장정보</h3>
    <div class="intro-y box overflow-x-auto p-5 mt-2 overflow-hidden whitespace-nowrap">
        <table class="table">
            <colgroup>
                <col width="10%">
                <col width="15%">
                <col width="15%">
                <col width="20%">
                <col width="20%">
                <col width="10%">
            </colgroup>
            <thead>
            <tr>
                <th>번호</th>
                <th>성(first name)</th>
                <th>이름(last name)</th>
                <th>연락처</th>
                <th>국적</th>
                <th>성별</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="!px-1"><input type="text" class="form-control" disabled value="1"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="first name"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="last name"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="+82-1234-5678-1234"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="Republic of Korea"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="남"></td>
            </tr>
            <tr>
                <td class="!px-1"><input type="text" class="form-control" disabled value="2"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="first name"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="last name"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="+82-1234-5678-1234"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="Republic of Korea"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="남"></td>
            </tr>
            <tr>
                <td class="!px-1"><input type="text" class="form-control" disabled value="3"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="first name"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="last name"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="+82-1234-5678-1234"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="Republic of Korea"></td>
                <td class="!px-1"><input type="text" class="form-control" disabled value="남"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
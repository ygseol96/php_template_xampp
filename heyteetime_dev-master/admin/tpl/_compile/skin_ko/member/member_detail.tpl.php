<?php /* Template_ 2.2.8 2024/06/19 15:21:22 C:\xampp\heyteetime_dev\admin\_global\skin_ko\member\member_detail.tpl 000078079 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>


<div class="intro-y">
    <div class="flex items-center mt-4">
        <a href="/member/member_list.php" class="flex items-center gap-1 text-primary">
            <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 회원관리
        </a>
    </div>
    <div class="flex items-center mt-2">
        <h2 class="text-xl font-bold mr-auto">회원 상세</h2>
    </div>
</div>
<input type="hidden" id="social_user_idx" value="<?php echo $TPL_VAR["data"]['member']['social_user_idx']?>">
<input type="hidden" id="member_id" value="<?php echo $TPL_VAR["data"]['member']['idx']?>">
<div class="intro-y mt-6">
    <h3 class="text-lg font-semibold mr-auto">가입정보</h3>
    <div class="intro-y box p-5 mt-2 flex flex-wrap items-center overflow-hidden whitespace-nowrap">
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">가입방법</div>
            <div class="truncate text-base" id="signup-method"><?php echo $TPL_VAR["data"]['member']['social_name']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">가입일시</div>
            <div class="truncate text-base" id="signup-date"><?php echo $TPL_VAR["data"]['member']['reg_date']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">회원상태</div>
            <div class="truncate text-base" id="member-status"><?php echo $TPL_VAR["data"]['member']['status']?></div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">탈퇴일시</div>
            <div class="truncate text-base" id="withdrawal-date"><?php echo $TPL_VAR["data"]['member']['out_date']?></div>
        </div>
    </div>
</div>


<div class="intro-y mt-6">
    <div class="flex items-center gap-1">
        <h3 class="text-lg font-semibold mr-auto">회원정보</h3>
        <div class="flex items-center gap-1">
            <button class="btn btn-sm btn-primary-soft" data-tw-toggle="modal" data-tw-target="#member_modify-modal">회원정보 수정</button>
            <button class="btn btn-sm btn-danger-soft"  id="reset-password-btn"   onclick="resetPassword()"  style="display:none;">비밀번호 초기화</button>
        </div>
    </div>
    <div class="intro-y box p-5 mt-2 flex flex-wrap items-center overflow-hidden whitespace-nowrap">
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">Email/ID</div>
            <div id="account" class="truncate text-base"><?php echo $TPL_VAR["data"]['member']['account']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">이름(Last Name)</div>
            <div id="name" class="truncate text-base"><?php echo $TPL_VAR["data"]['member']['first_name']?> <?php echo $TPL_VAR["data"]['member']['last_name']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">연락처</div>
            <div id="contact" class="truncate text-base"><?php echo $TPL_VAR["data"]['member']['country_code']?> <?php echo $TPL_VAR["data"]['member']['phone_number']?></div>
        </div>
        <div class="flex-1 px-5 py-2 border-r border-slate-200/60">
            <div class="text-slate-500">국적</div>
            <div id="nationality" class="truncate text-base"><?php if($TPL_VAR["data"]['member']['nat_nm_kr']!=''){?> <?php echo $TPL_VAR["data"]['member']['nat_nm_kr']?> <?php }else{?> - <?php }?> </div>
        </div>
        <div class="flex-1 px-5 py-2">
            <div class="text-slate-500">성별</div>
            <div id="gender" class="truncate text-base"><?php echo $TPL_VAR["data"]['member']['sex']?></div>
        </div>
    </div>
</div>

<div class="intro-y  mt-6">
    <h3 class="text-lg font-semibold mr-auto">회원현황</h3>

    <div class="relative flex flex-wrap items-end justify-between mt-2">
        <ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
            <li id="member-1-tab" class="nav-item" role="presentation">
                <button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#member-tab-1" type="button" role="tab" aria-controls="member-tab-1" aria-selected="true">골프여행</button>
            </li>
            <li id="member-2-tab" class="nav-item" role="presentation">
                <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#member-tab-2" type="button" role="tab" aria-controls="member-tab-2" aria-selected="false">여행후기</button>
            </li>
            <li id="member-3-tab" class="nav-item" role="presentation">
                <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#member-tab-3" type="button" role="tab" aria-controls="member-tab-3" aria-selected="false">마일리지</button>
            </li>
            <li id="member-4-tab" class="nav-item" role="presentation">
                <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#member-tab-4" type="button" role="tab" aria-controls="member-tab-4" aria-selected="false">쿠폰</button>
            </li>
            <li id="member-5-tab" class="nav-item" role="presentation">
                <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#member-tab-5" type="button" role="tab" aria-controls="member-tab-5" aria-selected="false">팔로우</button>
            </li>
            <li id="member-6-tab" class="nav-item" role="presentation">
                <button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#member-tab-6" type="button" role="tab" aria-controls="member-tab-6" aria-selected="false">신고</button>
            </li>
        </ul>
        <div class="tab-content lg:absolute lg:right-0 lg:-top-1 lg:w-auto w-full lg:py-0 py-2 lg:px-0 px-2 lg:bg-transparent bg-white">
            <!-- 골프여행 -->
            <div id="member-tab-1" class="tab-pane leading-relaxed !w-auto active" role="tabpanel" aria-labelledby="member-1-tab">
                <div class="flex flex-wrap items-center gap-2">
                    <div>총 <span id="golfCount">000</span>건</div>
                    <div class="flex items-center gap-2 pager">
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-left" class="w-4 h-4 !stroke-2"></i></button>
                        <p>1-8 / 28</p>
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-right" class="w-4 h-4 !stroke-2"></i></button>
                    </div>
                    <select class="form-select w-24">
                        <option>20건</option>
                        <option>50건</option>
                        <option>100건</option>
                    </select>
                </div>
            </div>
            <!-- 여행후기 -->
            <div id="member-tab-2" class="tab-pane leading-relaxed !w-auto" role="tabpanel" aria-labelledby="member-2-tab">
                <div class="flex flex-wrap items-center gap-2">
                    <div>총 000건</div>
                    <div class="flex items-center gap-2 pager">
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-left" class="w-4 h-4 !stroke-2"></i></button>
                        <p>1-8 / 28</p>
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-right" class="w-4 h-4 !stroke-2"></i></button>
                    </div>
                    <select class="form-select w-24">
                        <option>20건</option>
                        <option>50건</option>
                        <option>100건</option>
                    </select>
                </div>
            </div>
            <!-- 마일리지 -->
            <div id="member-tab-3" class="tab-pane leading-relaxed !w-auto" role="tabpanel" aria-labelledby="member-3-tab">
                <div class="flex flex-wrap items-center gap-2">
                    <div>총 000건</div>
                    <div class="flex items-center gap-2 pager">
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-left" class="w-4 h-4 !stroke-2"></i></button>
                        <p>1-8 / 28</p>
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-right" class="w-4 h-4 !stroke-2"></i></button>
                    </div>
                    <select class="form-select w-24">
                        <option>20건</option>
                        <option>50건</option>
                        <option>100건</option>
                    </select>
                </div>
            </div>
            <!-- 쿠폰 -->
            <div id="member-tab-4" class="tab-pane leading-relaxed !w-auto" role="tabpanel" aria-labelledby="member-4-tab">
                <div class="flex flex-wrap items-center gap-2">
                    <div>총 000건</div>
                    <div class="flex items-center gap-2 pager">
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-left" class="w-4 h-4 !stroke-2"></i></button>
                        <p>1-8 / 28</p>
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-right" class="w-4 h-4 !stroke-2"></i></button>
                    </div>
                    <select class="form-select w-24">
                        <option>20건</option>
                        <option>50건</option>
                        <option>100건</option>
                    </select>
                </div>
            </div>
            <!-- 팔로우 -->
            <div id="member-tab-5" class="tab-pane leading-relaxed !w-auto" role="tabpanel" aria-labelledby="member-5-tab">
                <div class="flex flex-wrap items-center gap-2">
                    <div>총 000건</div>
                    <div class="flex items-center gap-2 pager">
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-left" class="w-4 h-4 !stroke-2"></i></button>
                        <p>1-8 / 28</p>
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-right" class="w-4 h-4 !stroke-2"></i></button>
                    </div>
                    <select class="form-select w-24">
                        <option>20건</option>
                        <option>50건</option>
                        <option>100건</option>
                    </select>
                </div>
            </div>
            <!-- 신고 -->
            <div id="member-tab-6" class="tab-pane leading-relaxed !w-auto" role="tabpanel" aria-labelledby="member-6-tab">
                <div class="flex flex-wrap items-center gap-2">
                    <div>총 000건</div>
                    <div class="flex items-center gap-2 pager">
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-left" class="w-4 h-4 !stroke-2"></i></button>
                        <p>1-8 / 28</p>
                        <button class="btn btn-outline-secondary px-2 bg-white"><i data-lucide="chevron-right" class="w-4 h-4 !stroke-2"></i></button>
                    </div>
                    <select class="form-select w-24">
                        <option>20건</option>
                        <option>50건</option>
                        <option>100건</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content ">
        <!-- 골프여행 -->
        <div id="member-tab-1" class="tab-pane leading-relaxed p-5 box active" role="tabpanel" aria-labelledby="member-1-tab">
            <div class="mb-4">
                <div class="flex items-center justify-between mb-1 px-2">
                    <div>예약번호 24030100123131</div>
                </div>
                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                    <div class="flex flex-wrap items-start gap-2">
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">예약번호</div>
                            <div>ATC001010</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">지역</div>
                            <div>태국 > 치앙마이</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">상품구분</div>
                            <div>티타임</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">상품명</div>
                            <div>가산레가시</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">티타임</div>
                            <div>2024.04.01 06:00 A코스</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">인원</div>
                            <div>4인</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">옵션</div>
                            <div>송영, 클럽렌탈</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start gap-2">
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">총금액</div>
                            <div>KRW 2,000,000</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">쿠폰</div>
                            <div>-100,000</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">마일리지</div>
                            <div>-100,000</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">결제금액</div>
                            <div>1,800,000</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">결제수단</div>
                            <div>신용카드</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">승인번호</div>
                            <div>12345678</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">결제일시</div>
                            <div>2024.03.01 11:22:23</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex items-center justify-between mb-1 px-2">
                    <div>예약번호 24030100123131</div>
                    <div>취소일 : 24.03.31 11:22:33</div>
                </div>
                <div class="p-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                    <div class="flex flex-wrap items-start gap-2">
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">예약번호</div>
                            <div>ATC001010</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">지역</div>
                            <div>태국 > 치앙마이</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">상품구분</div>
                            <div>패키지</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">상품명</div>
                            <div>가산레가시 3박4일</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">티타임</div>
                            <div>-</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">인원</div>
                            <div>4인</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">옵션</div>
                            <div>-</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start gap-2">
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">총금액</div>
                            <div>KRW 2,000,000</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">쿠폰</div>
                            <div>-100,000</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">마일리지</div>
                            <div>-100,000</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">결제금액</div>
                            <div>1,800,000</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">결제수단</div>
                            <div>신용카드</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">승인번호</div>
                            <div>12345678</div>
                        </div>
                        <div class="flex-1 py-1.5 px-3">
                            <div class="text-slate-500">결제일시</div>
                            <div>2024.03.01 11:22:23</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 여행후기 -->
        <div id="member-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="member-2-tab">
            <div class="box mb-4 p-4 flex flex-wrap items-start justify-between gap-2">
                <div class="py-1.5 px-3 w-1/2 md:w-1/5 shrink-0">
                    <div class="text-slate-500">지역</div>
                    <div>일본 > 도쿄</div>
                    <div class="text-slate-500 mt-2">상품명</div>
                    <div>일본아코디아 골프상품</div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">평점</div>
                    <div class="flex gap-3">
                        <b class="text-slate-700">4.5</b>
                        <div class="text-xs font-medium whitespace-nowrap">
                            <p class="flex items-center justify-between gap-3">
                                <span>코스디자인</span>
                                <span>5</span>
                            </p>
                            <p class="flex items-center justify-between gap-3 mt-0.5">
                                <span>코스컨디션</span>
                                <span>5</span>
                            </p>
                            <p class="flex items-center justify-between gap-3 mt-0.5">
                                <span>부대시설</span>
                                <span>5</span>
                            </p>
                            <p class="flex items-center justify-between gap-3 mt-0.5">
                                <span>접근성</span>
                                <span>4</span>
                            </p>
                            <p class="flex items-center justify-between gap-3 mt-0.5">
                                <span>서비스</span>
                                <span>4</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 py-1.5 px-3 shrink-0">
                    <div class="text-slate-500">후기</div>
                    <div class="truncate-4 cursor-pointer hover:underline"  data-tw-toggle="modal" data-tw-target="#review_detail-modal">일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다.</div>
                </div>
                <div class="py-1.5 px-2">
                    <div class="text-slate-500">사진</div>
                    <div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#img_detail-modal">
                            <span class="absolute left-0 right-0 top-0 bottom-0 m-auto w-6 h-6 flex items-center justify-center bg-primary rounded-full text-white">5</span>
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                        </button></div>
                </div>
                <div class="py-1.5 px-2">
                    <div class="text-slate-500">영상</div>
                    <div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#video_detail-modal">
                            <span class="absolute left-0 right-0 top-0 bottom-0 m-auto w-6 h-6 flex items-center justify-center bg-primary rounded-full text-white">1</span>
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                        </button></div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">키워드</div>
                    <div class="text-xs font-medium">
                        <p>가성비</p>
                        <p class="mt-0.5">주변관광지</p>
                        <p class="mt-0.5">직원의친절</p>
                        <p class="mt-0.5">접근성</p>
                        <p class="mt-0.5">코스상태</p>
                    </div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">라운드</div>
                    <div>핸디캡 72<br/>최고 9홀<br/>최악 3홀</div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">좋아요</div>
                    <div>123,456</div>
                    <div class="text-slate-500 mt-2">작성일</div>
                    <div>24.01.01</div>
                </div>
            </div>
            <div class="box mb-4 p-4 flex flex-wrap items-start justify-between gap-2">
                <div class="py-1.5 px-3 w-1/2 md:w-1/5 shrink-0">
                    <div class="text-slate-500">지역</div>
                    <div>일본 > 도쿄</div>
                    <div class="text-slate-500 mt-2">상품명</div>
                    <div>일본아코디아 골프상품</div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">평점</div>
                    <div class="flex gap-3">
                        <b class="text-slate-700">4.5</b>
                        <div class="text-xs font-medium whitespace-nowrap">
                            <p class="flex items-center justify-between gap-3">
                                <span>코스디자인</span>
                                <span>5</span>
                            </p>
                            <p class="flex items-center justify-between gap-3 mt-0.5">
                                <span>코스컨디션</span>
                                <span>5</span>
                            </p>
                            <p class="flex items-center justify-between gap-3 mt-0.5">
                                <span>부대시설</span>
                                <span>5</span>
                            </p>
                            <p class="flex items-center justify-between gap-3 mt-0.5">
                                <span>접근성</span>
                                <span>4</span>
                            </p>
                            <p class="flex items-center justify-between gap-3 mt-0.5">
                                <span>서비스</span>
                                <span>4</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/5 py-1.5 px-3 shrink-0">
                    <div class="text-slate-500">후기</div>
                    <div class="truncate-4 cursor-pointer hover:underline"  data-tw-toggle="modal" data-tw-target="#review_detail-modal">일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다.</div>
                </div>
                <div class="py-1.5 px-2">
                    <div class="text-slate-500">사진</div>
                    <div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#img_detail-modal">
                            <span class="absolute left-0 right-0 top-0 bottom-0 m-auto w-6 h-6 flex items-center justify-center bg-primary rounded-full text-white">5</span>
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                        </button></div>
                </div>
                <div class="py-1.5 px-2">
                    <div class="text-slate-500">영상</div>
                    <div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#video_detail-modal">
                            <span class="absolute left-0 right-0 top-0 bottom-0 m-auto w-6 h-6 flex items-center justify-center bg-primary rounded-full text-white">1</span>
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                        </button></div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">키워드</div>
                    <div class="text-xs font-medium">
                        <p>가성비</p>
                        <p class="mt-0.5">주변관광지</p>
                        <p class="mt-0.5">직원의친절</p>
                        <p class="mt-0.5">접근성</p>
                        <p class="mt-0.5">코스상태</p>
                    </div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">라운드</div>
                    <div>핸디캡 72<br/>최고 9홀<br/>최악 3홀</div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">좋아요</div>
                    <div>123,456</div>
                    <div class="text-slate-500 mt-2">작성일</div>
                    <div>24.01.01</div>
                </div>
            </div>
        </div>

        <!-- 마일리지 -->
        <div id="member-tab-3" class="tab-pane leading-relaxed p-4 box" role="tabpanel" aria-labelledby="member-3-tab">
            <div class="mb-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                <div class="flex flex-wrap items-start gap-2 p-2">
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">구분</div>
                        <div>지급</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사유</div>
                        <div>여행 완료 적립</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">마일리지</div>
                        <div class="text-blue-500">50,000</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">지급일</div>
                        <div>2024.01.01</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사용일</div>
                        <div>-</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">만료일</div>
                        <div>2026.12.31</div>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                <div class="flex flex-wrap items-start gap-2 p-2">
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">구분</div>
                        <div>사용</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사유</div>
                        <div>여행 상품 구매 사용</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">마일리지</div>
                        <div class="text-red-500">50,000</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">지급일</div>
                        <div>-</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사용일</div>
                        <div>2024.01.01</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">만료일</div>
                        <div>-</div>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                <div class="flex flex-wrap items-start gap-2 p-2">
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">구분</div>
                        <div>지급</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사유</div>
                        <div>여행 완료 적립</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">마일리지</div>
                        <div class="text-blue-500">50,000</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">지급일</div>
                        <div>2024.01.01</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사용일</div>
                        <div>-</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">만료일</div>
                        <div>2026.12.31</div>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                <div class="flex flex-wrap items-start gap-2 p-2">
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">구분</div>
                        <div>사용</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사유</div>
                        <div>여행 상품 구매 사용</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">마일리지</div>
                        <div class="text-red-500">50,000</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">지급일</div>
                        <div>-</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사용일</div>
                        <div>2024.01.01</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">만료일</div>
                        <div>-</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 쿠폰 -->
        <div id="member-tab-4" class="tab-pane leading-relaxed p-4 box" role="tabpanel" aria-labelledby="member-4-tab">
            <div class="mb-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                <div class="flex flex-wrap items-start gap-2 p-2">
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">쿠폰명</div>
                        <div>신규회원 할인쿠폰</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">할인금액</div>
                        <div>KRW 50,000 할인</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">최소결제금액</div>
                        <div>KRW 50,000 이상</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">할인한도</div>
                        <div>KRW 50,000</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">유효기간</div>
                        <div>2024.01.01 ~ 2024.03.31</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">쿠폰상태</div>
                        <div>정상</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사용여부</div>
                        <div>미사용</div>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                <div class="flex flex-wrap items-start gap-2 p-2">
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">쿠폰명</div>
                        <div>신규회원 할인쿠폰</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">할인금액</div>
                        <div>KRW 50,000 할인</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">최소결제금액</div>
                        <div>KRW 50,000 이상</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">할인한도</div>
                        <div>KRW 50,000</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">유효기간</div>
                        <div>2024.01.01 ~ 2024.03.31</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">쿠폰상태</div>
                        <div>정상</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사용여부</div>
                        <div>미사용</div>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                <div class="flex flex-wrap items-start gap-2 p-2">
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">쿠폰명</div>
                        <div>신규회원 할인쿠폰</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">할인금액</div>
                        <div>KRW 50,000 할인</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">최소결제금액</div>
                        <div>KRW 50,000 이상</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">할인한도</div>
                        <div>KRW 50,000</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">유효기간</div>
                        <div>2024.01.01 ~ 2024.03.31</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">쿠폰상태</div>
                        <div>정상</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사용여부</div>
                        <div>미사용</div>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-slate-200 rounded-3xl whitespace-nowrap">
                <div class="flex flex-wrap items-start gap-2 p-2">
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">쿠폰명</div>
                        <div>신규회원 할인쿠폰</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">할인금액</div>
                        <div>KRW 50,000 할인</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">최소결제금액</div>
                        <div>KRW 50,000 이상</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">할인한도</div>
                        <div>KRW 50,000</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">유효기간</div>
                        <div>2024.01.01 ~ 2024.03.31</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">쿠폰상태</div>
                        <div>정상</div>
                    </div>
                    <div class="flex-1 py-1.5 px-3">
                        <div class="text-slate-500">사용여부</div>
                        <div>미사용</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 팔로우 -->
        <div id="member-tab-5" class="tab-pane leading-relaxed p-4 box" role="tabpanel" aria-labelledby="member-5-tab">
            <h5 class="mb-3 text-lg font-bold">총 000명</h5>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="grid grid-cols-3 gap-3 cursor-pointer" onclick="location.href='./member_detail.php'">
                    <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/sample_img.jpg" alt=""></div>
                    <div class="flex flex-col justify-between col-span-2 py-2">
                        <div>Mr.Jim hwang</div>
                        <div>Republic of Korea</div>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div>9999</div>
                            <div class="flex items-center"><i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>4.5</div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-3 cursor-pointer" onclick="location.href='./member_detail.php'">
                    <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/sample_img.jpg" alt=""></div>
                    <div class="flex flex-col justify-between col-span-2 py-2">
                        <div>Mr.Jim hwang</div>
                        <div>Republic of Korea</div>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div>9999</div>
                            <div class="flex items-center"><i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>4.5</div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-3 cursor-pointer" onclick="location.href='./member_detail.php'">
                    <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/sample_img.jpg" alt=""></div>
                    <div class="flex flex-col justify-between col-span-2 py-2">
                        <div>Mr.Jim hwang</div>
                        <div>Republic of Korea</div>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div>9999</div>
                            <div class="flex items-center"><i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>4.5</div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-3 cursor-pointer" onclick="location.href='./member_detail.php'">
                    <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/sample_img.jpg" alt=""></div>
                    <div class="flex flex-col justify-between col-span-2 py-2">
                        <div>Mr.Jim hwang</div>
                        <div>Republic of Korea</div>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div>9999</div>
                            <div class="flex items-center"><i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>4.5</div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-3 cursor-pointer" onclick="location.href='./member_detail.php'">
                    <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/sample_img.jpg" alt=""></div>
                    <div class="flex flex-col justify-between col-span-2 py-2">
                        <div>Mr.Jim hwang</div>
                        <div>Republic of Korea</div>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div>9999</div>
                            <div class="flex items-center"><i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>4.5</div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-3 cursor-pointer" onclick="location.href='./member_detail.php'">
                    <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/sample_img.jpg" alt=""></div>
                    <div class="flex flex-col justify-between col-span-2 py-2">
                        <div>Mr.Jim hwang</div>
                        <div>Republic of Korea</div>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div>9999</div>
                            <div class="flex items-center"><i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>4.5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 신고 -->
        <div id="member-tab-6" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="member-6-tab">
            <div class="box mb-4 p-4 flex flex-wrap items-start justify-between gap-2">
                <div class="py-1.5 px-3 w-1/2 md:w-1/5 shrink-0">
                    <div class="text-slate-500">지역</div>
                    <div>일본 > 도쿄</div>
                    <div class="text-slate-500 mt-2">상품명</div>
                    <div>일본아코디아 골프상품</div>
                </div>
                <div class="w-1/2 md:w-1/5 py-1.5 px-3 shrink-0">
                    <div class="text-slate-500">후기</div>
                    <div class="truncate-4 cursor-pointer hover:underline"  data-tw-toggle="modal" data-tw-target="#review_detail-modal">일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다.</div>
                </div>
                <div class="py-1.5 px-2">
                    <div class="text-slate-500">사진</div>
                    <div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#img_detail-modal">
                            <span class="absolute left-0 right-0 top-0 bottom-0 m-auto w-6 h-6 flex items-center justify-center bg-primary rounded-full text-white">5</span>
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                        </button></div>
                </div>
                <div class="py-1.5 px-2">
                    <div class="text-slate-500">영상</div>
                    <div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#video_detail-modal">
                            <span class="absolute left-0 right-0 top-0 bottom-0 m-auto w-6 h-6 flex items-center justify-center bg-primary rounded-full text-white">1</span>
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                        </button></div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">신고 구분</div>
                    <div>광고</div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">신고 내용</div>
                    <div>내용과 사진, 동영상에 광고 내용이 포함되어있습니다.</div>
                </div>
                <div class="py-1.5 px-3">
                    <button class="btn btn-danger">미노출</button>
                </div>
            </div>
            <div class="box mb-4 p-4 flex flex-wrap items-start justify-between gap-2">
                <div class="py-1.5 px-3 w-1/2 md:w-1/5 shrink-0">
                    <div class="text-slate-500">지역</div>
                    <div>일본 > 도쿄</div>
                    <div class="text-slate-500 mt-2">상품명</div>
                    <div>일본아코디아 골프상품</div>
                </div>
                <div class="w-1/2 md:w-1/5 py-1.5 px-3 shrink-0">
                    <div class="text-slate-500">후기</div>
                    <div class="truncate-4 cursor-pointer hover:underline"  data-tw-toggle="modal" data-tw-target="#review_detail-modal">일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다. 일본 아코디아 좋았다.</div>
                </div>
                <div class="py-1.5 px-2">
                    <div class="text-slate-500">사진</div>
                    <div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#img_detail-modal">
                            <span class="absolute left-0 right-0 top-0 bottom-0 m-auto w-6 h-6 flex items-center justify-center bg-primary rounded-full text-white">5</span>
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                        </button></div>
                </div>
                <div class="py-1.5 px-2">
                    <div class="text-slate-500">영상</div>
                    <div><button class="relative w-full overflow-hidden rounded" data-tw-toggle="modal" data-tw-target="#video_detail-modal">
                            <span class="absolute left-0 right-0 top-0 bottom-0 m-auto w-6 h-6 flex items-center justify-center bg-primary rounded-full text-white">1</span>
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                        </button></div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">신고 구분</div>
                    <div>광고</div>
                </div>
                <div class="py-1.5 px-3">
                    <div class="text-slate-500">신고 내용</div>
                    <div>내용과 사진, 동영상에 광고 내용이 포함되어있습니다.</div>
                </div>
                <div class="py-1.5 px-3">
                    <button class="btn btn-primary">노출</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 모달영역 //-->
<!-- 이미지 상세 모달 -->
<div id="img_detail-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">다낭 호이아나쇼어스 뉴월드</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i>닫기</button>
            </div>
            <div class="modal-body p-3 lg:p-5 text-center">
                <div class="img_swiper overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                    </ul>
                </div>
                <div class="thumb_swiper mt-3 overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/skin_ko/member/dist/images/heyteetime/sample_img2.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 영상 상세 모달 -->
<div id="video_detail-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">다낭 호이아나쇼어스 뉴월드</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i>닫기</button>
            </div>
            <div class="modal-body p-3 lg:p-5 text-center">
                <div class="video_swiper overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <video muted="muted" controls>
                                <source src="./dist/images/video01.mp4" type="video/mp4">
                            </video>
                        </li>
                    </ul>
                </div>
                <div class="vthumb_swiper mt-3 overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide cursor-pointer">
                            <video>
                                <source src="./dist/images/video01.mp4" type="video/mp4">
                            </video>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 후기 상세 창 -->
<div id="review_detail-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header flex-wrap">
                <h2 class="font-medium text-base mr-auto flex flex-wrap items-center gap-1"><img class="sm:h-10 h-8 mr-2" src="/_global/skin_ko/member/dist/images/heyteetime/heyteetime_logo.png" alt="">과 함께한 골프여행의 추억</h2>
                <div class="flex items-center gap-1 ml-auto">
                    <button class="btn btn-sm btn-primary">노출</button>
                    <button class="btn btn-sm btn-danger">미노출</button>
                    <button class="flex items-center gap-1 ml-4" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i>닫기</button>
                </div>
            </div>
            <div class="modal-body p-3 lg:p-5 text-center">
                <div class="flex flex-col sm:flex-row items-start lg:items-center gap-4">
                    <div class="overflow-hidden w-full sm:w-40 rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/sample_img.jpg" alt=""></div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 flex-1">
                        <div>
                            <div class="flex items-center">
                                <p class="w-20 text-slate-700 font-medium text-left">ID</p>
                                <p class="text-slate-500">test@test.com</p>
                            </div>
                            <div class="flex items-center mt-2">
                                <p class="w-20 text-slate-700 font-medium text-left">사용자명</p>
                                <p class="text-slate-500">Jim Hwang</p>
                            </div>
                            <div class="flex items-center mt-2">
                                <p class="w-20 text-slate-700 font-medium text-left">에디터명</p>
                                <p class="text-slate-500">Mr.Jim</p>
                            </div>
                            <div class="flex items-center mt-2">
                                <p class="w-20 text-slate-700 font-medium text-left">전화번호</p>
                                <p class="text-slate-500">+82-1234-5678</p>
                            </div>
                            <div class="flex items-center mt-2">
                                <p class="w-20 text-slate-700 font-medium text-left">국적</p>
                                <p class="text-slate-500">Republic of Korea</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center">
                                <p class="w-20 text-slate-700 font-medium text-left">후기수</p>
                                <p class="text-slate-500">1,234</p>
                            </div>
                            <div class="flex items-center mt-2">
                                <p class="w-20 text-slate-700 font-medium text-left">전체평점</p>
                                <p class="text-slate-500">4.5</p>
                            </div>
                            <div class="flex items-center mt-2">
                                <p class="w-20 text-slate-700 font-medium text-left">팔로워</p>
                                <p class="text-slate-500">100,000</p>
                            </div>
                            <div class="flex items-center mt-2">
                                <p class="w-20 text-slate-700 font-medium text-left">SNS</p>
                                <div>
                                    <button><img class="w-8" src="/_global/skin_ko/member/dist/images/insta.png" alt=""></button>
                                    <button><img class="w-8" src="/_global/skin_ko/member/dist/images/youtube.png" alt=""></button>
                                    <button><img class="w-8" src="/_global/skin_ko/member/dist/images/face.png" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-7">
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <div class="text-left">
                            <b>베트남 - 다낭</b>
                            <div class="flex items-center mt-1">
                                <b class="text-2xl">호이아나</b>
                                <a class="btn btn-dark ml-2" href="javascript:;">골프장보기</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span>2024.02.03</span>
                            <p class="flex items-center gap-1"><i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i> 4.5</p>
                            <p class="flex items-center gap-1 font-bold text-primary"><i data-lucide="thumbs-up" class="w-5 h-5"></i> 10K</p>
                        </div>
                    </div>
                    <div class="mt-2 text-left">
                        일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다.
                    </div>
                    <div class="mt-3 flex flex-wrap items-center gap-3 text-slate-400">
                        <span>#만족스러운 가격</span>
                        <span>#훌륭한 골프코스</span>
                        <span>#아름다운 경치</span>
                        <span>#다양한 주변 관광지</span>
                    </div>
                    <div class="grid grid-cols-5 md:grid-cols-7 gap-2 mt-4">
                        <div class="col-span-5 md:col-span-2 row-span-5 md:row-span-2">
                            <video muted="muted" controls>
                                <source src="./dist/images/video01.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt=""></div>
                        <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt=""></div>
                        <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt=""></div>
                        <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt=""></div>
                        <div class="overflow-hidden rounded relative cursor-pointer" data-tw-toggle="modal" data-tw-target="#img_detail-modal">
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                            <span class="absolute left-0 right-0 top-0 bottom-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center text-white font-bold text-3xl">+5</span>
                        </div>
                        <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt=""></div>
                        <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt=""></div>
                        <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt=""></div>
                        <div class="overflow-hidden rounded"><img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt=""></div>
                        <div class="overflow-hidden rounded relative cursor-pointer" data-tw-toggle="modal" data-tw-target="#img_detail-modal">
                            <img class="w-full" src="/_global/skin_ko/member/dist/images/heyteetime/sample_img.png" alt="">
                            <span class="absolute left-0 right-0 top-0 bottom-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center text-white font-bold text-3xl">+5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="member_modify-modal" class="modal" tabindex="1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">회원정보 수정</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">전화번호</div>
                    <div class="flex-1 flex items-center gap-2">
                        <select class="form-select w-36" id="country_code">
<?php if(!$TPL_VAR["data"]['member']['country_code']){?>
                                <option value="" selected >미선택</option>
<?php }?>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['phoneCodes'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                                <option value="<?php echo $TPL_V1["phone_code"]?>" <?php if($TPL_V1["phone_code"]==$TPL_VAR["data"]['member']['country_code']){?> selected <?php }?>><?php echo $TPL_V1["phone_code"]?> (<?php echo $TPL_V1["nat_nm_kr"]?>)</option>
<?php }}?>
                        </select>
                        <input type="text" class="form-control" id="phone_number" value=<?php if($TPL_VAR["data"]['member']['phone_number']!=='-'){?> <?php echo $TPL_VAR["data"]['member']['phone_number']?> <?php }?>>
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">국적</div>
                    <div class="flex-1">
                        <select class="form-select" id="nationality_type">
<?php if(!$TPL_VAR["data"]['member']['nationality_type']){?>
                                <option value="" selected >미선택</option>
<?php }?>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['nationalityOptions'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                                <option value="<?php echo $TPL_V1["nat_seq"]?>" <?php if($TPL_V1["nat_seq"]==$TPL_VAR["data"]['member']['nationality_type']){?> selected <?php }?>><?php echo $TPL_V1["nat_nm_kr"]?></option>
<?php }}?>
                        </select>
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">성별</div>
                    <div class="flex-1">
                        <select class="form-select" id="sex">
                            <option value="M" <?php if($TPL_VAR["data"]['member']['sex']=='남'){?> selected <?php }?>>남성</option>
                            <option value="F" <?php if($TPL_VAR["data"]['member']['sex']=='여'){?> selected <?php }?>>여성</option>
<?php if($TPL_VAR["data"]['member']['sex']=='미입력'){?>
                                <option value=""<?php if($TPL_VAR["data"]['member']['sex']=='미입력'){?> selected <?php }?>>미입력</option>
<?php }?>
                        </select>
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger close-modal" data-tw-dismiss="modal">취소</button>
                    <button class="px-6 btn btn-primary" id="save-member-info" onclick="modalOpen02('update_check-modal')" disabled>저장</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="update_check-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">안내</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="items-center gap-2 mb-2">
                    <div class="shrink-0  py-2 font-semibold message">회원 정보를 수정하시겠습니까?</div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button class="px-6 btn btn-primary" onclick="updateMemberInfo()">확인</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 모달영역 //-->
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    $(document).ready(function() {
        validateForm();
    })

    function resetPassword() {
        if (confirm('비밀번호를 초기화 하시겠습니까?')) {
            const memberId = document.getElementById('member_id').value; // 숨겨진 필드에 회원 ID가 저장되어 있다고 가정
            $.ajax({
                url: '/member/ajax_member.php',
                type: 'POST',
                data: {
                    type: 'resetPassword',
                    memberId: memberId
                },
                headers: {
                    'X-CSRF-TOKEN': '<?php echo $_SESSION['CSRF_TOKEN']; ?>'
                },
                success: function(res) {
                    if (res.success) {
                        alert('비밀번호가 성공적으로 초기화되었습니다. 새 비밀번호가 이메일로 발송되었습니다.');
                    } else {
                        alert('비밀번호 초기화에 실패했습니다.');
                        console.error('Server res:', res);
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                    alert('비밀번호 초기화 중 오류가 발생했습니다.');
                }
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // social_user_idx 값을 JavaScript 변수로 가져옴
        const socialUserIdx = document.getElementById('social_user_idx').value;
        // 비밀번호 초기화 버튼 요소를 가져옴
        const resetPasswordBtn = document.getElementById('reset-password-btn');

        // social_user_idx가 null이면 버튼 숨기기
        if (!socialUserIdx) {
            resetPasswordBtn.style.display = 'block';
        } else {
            resetPasswordBtn.style.display = 'none';
        }

    });

    // 페이지 로드 시 또는 필요할 때 이 함수를 호출하여 회원 정보를 가져오고 표시합니다
    const urlParams = new URLSearchParams(window.location.search);
    const memberId = urlParams.get('id');

    // 회원현황 > 골프여행
    function getMemberGolfList() {
        $.ajax({						// ajax
            url		    : '/reservation/ajax_reservation.php',
            type		: 'POST',
            data		: {
                'type'  : 'getMemberReservationList',
                'id'    : '20'
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success		: function(res) {
                console.log('-------------');
                console.log( res );
                console.log('-------------');
            }, error : function(e) {

            }
        });
    }

    getMemberGolfList();

    // 회원정보 수정 모달
    $(document).ready(function() {
        const memberId = new URLSearchParams(window.location.search).get('id');
    });

    $("#member_modify-modal").find('select, input').on('change', function () {
       validateForm();
    })

    function validateForm() {
        let allInfoEntered = true;

        $("#member_modify-modal").find('select, input').each(function() {
            if(!$(this).val()) {
                allInfoEntered = false;
                $("#save-member-info").prop('disabled', true);
                return false;
            }
        })

        if(allInfoEntered) {
            $("#save-member-info").prop('disabled', false);
        }

    }

    function updateMemberInfo() {

        $.ajax({
            url: '/member/ajax_member.php',
            type: 'POST',
            data: {
                type: 'updateMember',
                memberId: <?php echo $TPL_VAR["data"]['member']['idx']?>,
                country_code: $('#country_code').val(),
                phone_number: $('#phone_number').val(),
                nationality_type: $('#nationality_type').val(),
                sex: $('#sex').val(),
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function(res) {
                location.reload();
            },
            error: function(error) {
                console.log(error);
                $('#submit_error-modal .message').text(error.responseJSON.msg);
                modalOpen02("submit_error-modal")
            }
        });
    }


    window.addEventListener('load',function(){
        // 이미지 슬라이드 썸네일
        var imgThumb = new Swiper(".thumb_swiper", {
            spaceBetween: 10,
            slidesPerView: 8,
            freeMode: true,
            watchSlidesProgress: true,
            observer:true,
            observeParents:true,
        });
        // 이미지 슬라이드
        var imgSwiper = new Swiper(".img_swiper", {
            spaceBetween: 10,
            observer:true,
            observeParents:true,
            thumbs: {
                swiper: imgThumb,
            },
        });

        // 영상 슬라이드 썸네일
        var videoThumb = new Swiper(".vthumb_swiper", {
            spaceBetween: 10,
            slidesPerView: 8,
            freeMode: true,
            watchSlidesProgress: true,
            observer:true,
            observeParents:true,
        });
        // 영상 슬라이드
        var videoSwiper = new Swiper(".video_swiper", {
            spaceBetween: 10,
            observer:true,
            observeParents:true,
            thumbs: {
                swiper: videoThumb,
            },
        });
    });
</script>
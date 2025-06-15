{data[0]}
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar justify-between">
        <a href="" class="flex">
            <img alt="logo" class="h-12" src="/_global/{_SESSION['adm_skin']}/dist/images/heyteetime/logo_white.svg">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        <ul class="scrollable__content py-2">
            <li>
                <a href="/dashboard.php" class="menu">
                    <div class="menu__icon"> <i data-lucide="layout-grid"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="users"></i> </div>
                    <div class="menu__title"> 회원관리 <i data-lucide="chevron-down" class="menu__sub-icon <?=$side_depth=='member'?'transform rotate-180':'' ?>"></i> </div>
                </a>
                <ul class="<?=$side_depth=='member'?'menu__sub-open':'' ?>">
                    <li>
                        <a href="/member/member_list.php" class="menu menu--active">
                            <div class="menu__title pl-4">회원 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="/member/member_coupon_payment_list.php" class="menu menu--active">
                            <div class="menu__title pl-4">쿠폰지급 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="/member/member_coupon_list.php" class="menu menu--active">
                            <div class="menu__title pl-4">쿠폰 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="/member/member_mileage.php" class="menu menu--active">
                            <div class="menu__title pl-4">마일리지 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="/member/member_inquiry.php" class="menu menu--active">
                            <div class="menu__title pl-4">1:1문의 관리</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="clock-4"></i> </div>
                    <div class="menu__title"> 상품관리 <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">티타임 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">여행상품 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">프로모션 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">후기 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">기획전 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">테마 관리</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="layers"></i> </div>
                    <div class="menu__title"> 전시관리 <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">전시 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">템플릿 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">팝업 관리</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                    <div class="menu__title"> 예약관리 <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">예약 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">취소 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">결제요청 관리</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="info"></i> </div>
                    <div class="menu__title"> 정보관리 <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">다국어 관리</div>
                        </a>
                    </li>
                    {*<li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">지역정보 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">골프장정보 관리</div>
                        </a>
                    </li>*}
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">항공정보 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">호텔정보 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">환율정보 관리</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="folder-open"></i> </div>
                    <div class="menu__title"> 서비스관리 <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">공지 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">FAQ 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">약관 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">푸시 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">메일 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">메시지 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">메뉴 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">계정 관리</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="align-start-horizontal"></i> </div>
                    <div class="menu__title"> 현황관리 <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">회원 현황</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">접속 현황</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">예약 현황</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">검색 현황</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">후기 현황</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">채널 현황</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">연동 현황</div>
                        </a>
                    </li>
                </ul>
            </li>
            {*<li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="settings-2"></i> </div>
                    <div class="menu__title"> 채널관리 <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">채널 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">채널 정산 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">WL 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">연동 관리</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu menu--active">
                            <div class="menu__title pl-4">연동 서비스 관리</div>
                        </a>
                    </li>
                </ul>
            </li>*}

        </ul>
    </div>
</div>
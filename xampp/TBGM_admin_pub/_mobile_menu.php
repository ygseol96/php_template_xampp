<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar justify-between">
        <a href="" class="flex">
            <img alt="logo" class="h-12" src="./dist/images/heyteetime/logo_white.svg">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        <ul class="scrollable__content py-2">
            <li>
                <a href="./dashboard.php" class="menu">
                    <div class="menu__icon"> <i data-lucide="layout-grid"></i> </div>
                    <div class="menu__title"> 대시보드 </div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="users"></i> </div>
                    <div class="menu__title"> 회원관리 <i data-lucide="chevron-down" class="menu__sub-icon <?=$side_depth=='member'?'transform rotate-180':'' ?>"></i> </div>
                </a>
                <ul class="<?=$side_depth=='member'?'menu__sub-open':'' ?>">
                    <li>
                        <a href="./member_mng.php" class="menu">
                            <div class="menu__title pl-4">회원 목록</div>
                        </a>
                    </li>
                    <li>
                        <a href="./member_regist.php" class="menu">
                            <div class="menu__title pl-4">회원 등록</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="users"></i> </div>
                    <div class="menu__title"> 견적관리 <i data-lucide="chevron-down" class="menu__sub-icon <?=$side_depth=='estimate'?'transform rotate-180':'' ?>"></i> </div>
                </a>
                <ul class="<?=$side_depth=='estimate'?'menu__sub-open':'' ?>">
                    <li>
                        <a href="./estimate_estimate_mng.php" class="menu">
                            <div class="menu__title pl-4">견적 목록</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-lucide="users"></i> </div>
                    <div class="menu__title"> 서비스관리 <i data-lucide="chevron-down" class="menu__sub-icon <?=$side_depth=='service'?'transform rotate-180':'' ?>"></i> </div>
                </a>
                <ul class="<?=$side_depth=='service'?'menu__sub-open':'' ?>">
                    <li>
                        <a href="./service_notice_mng.php" class="menu">
                            <div class="menu__title pl-4">공지 사항</div>
                        </a>
                    </li>
                    <li>
                        <a href="./service_estimate_mng.php" class="menu">
                            <div class="menu__title pl-4">1:1견적</div>
                        </a>
                    </li>
                    <li>
                        <a href="./service_faq_mng.php" class="menu">
                            <div class="menu__title pl-4">자주묻는질문</div>
                        </a>
                    </li>
                    <li>
                        <a href="./service_account_mng.php" class="menu">
                            <div class="menu__title pl-4">계정관리</div>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</div>
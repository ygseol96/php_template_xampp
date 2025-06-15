<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-3">
        <img alt="AGL" class="h-12" src="./dist/images/heyteetime/logo_white.svg">
    </a>
    <div class="side-nav__devider my-3"></div>
    <ul>
        <li>
            <a href="./dashboard.php" class="side-menu <?=$side_depth=='dashboard'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="layout-grid"></i> </div>
                <div class="side-menu__title">
                    대시보드
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?=$side_depth=='member'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                <div class="side-menu__title">
                    회원관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='member'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="./member_mng.php" class="side-menu <?=$side_depth=='member' && $side_2depth=='member'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 회원 목록 </div>
                    </a>
                </li>
                <li>
                    <a href="./member_regist.php" class="side-menu <?=$side_depth=='member' && $side_2depth=='regist'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 회원 등록 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?=$side_depth=='estimate'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="clipboard-list"></i> </div>
                <div class="side-menu__title">
                    견적관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='estimate'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="./estimate_estimate_mng.php" class="side-menu <?=$side_depth=='estimate' && $side_2depth=='estimate'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 견적 목록 </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu <?=$side_depth=='estimate' && $side_2depth=='reservation'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 예약 목록 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?=$side_depth=='event'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="clipboard-list"></i> </div>
                <div class="side-menu__title">
                    행사관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='event'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="./event_event_mng.php" class="side-menu <?=$side_depth=='event' && $side_2depth=='event'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 행사 목록 </div>
                    </a>
                </li>
                <li>
                    <a href="./event_event_regist.php" class="side-menu <?=$side_depth=='event' && $side_2depth=='eventregist'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 행사 등록 </div>
                    </a>
                </li>
                <li>
                    <a href="./event_event_review.php" class="side-menu <?=$side_depth=='event' && $side_2depth=='eventreview'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 행사 후기 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?=$side_depth=='service'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
                <div class="side-menu__title">
                    서비스관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='service'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="./service_notice_mng.php" class="side-menu <?=$side_depth=='service' && $side_2depth=='notice'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">공지사항</div>
                    </a>
                </li>
                <li>
                    <a href="./service_estimate_mng.php" class="side-menu <?=$side_depth=='service' && $side_2depth=='estimate'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">1:1견적</div>
                    </a>
                </li>
                <li>
                    <a href="./service_faq_mng.php" class="side-menu <?=$side_depth=='service' && $side_2depth=='faq'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">자주묻는질문</div>
                    </a>
                </li>
                <li>
                    <a href="./service_account_mng.php" class="side-menu <?=$side_depth=='service' && $side_2depth=='account'?'side-menu--active':'' ?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">계정관리</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
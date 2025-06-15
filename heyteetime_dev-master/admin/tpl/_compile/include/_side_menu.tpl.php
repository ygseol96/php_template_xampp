<?php /* Template_ 2.2.8 2024/04/22 17:32:16 C:\xampp\heytee_dev\admin\_global\include\_side_menu.tpl 000019959 */ ?>
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-3">
        <img alt="AGL" class="h-12" src="/_global/dist/images/heyteetime/logo_white.svg">
    </a>
    <div class="side-nav__devider my-3"></div>
    <ul>
        <li>
            <a href="/sys/dashboard" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='dashboard'){?>side-menu--active<?php }?>">
                <div class="side-menu__icon"> <i data-lucide="layout-grid"></i> </div>
                <div class="side-menu__title">
                    대시보드
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'){?>side-menu--active<?php }?>">
                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                <div class="side-menu__title">
                    회원관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?php if($TPL_VAR["data"]['menu']['group']=='member'){?>side-menu__sub-open<?php }?>">
                <li>
                    <a href="/sys/member/member_list.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='member'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 회원 관리 </div>
                    </a>
                </li>
                <li>
                    <a href="/sys/member/member_coupon_payment_list.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='coupon_pay'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 쿠폰지급 관리 </div>
                    </a>
                </li>
                <li>
                    <a href="/sys/member/member_coupon_list.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='coupon'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 쿠폰 관리 </div>
                    </a>
                </li>
                <li>
                    <a href="/sys/member/member_mileage.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='mileage'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 마일리지 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/sys/member/member_inquiry.php" class="side-menu  <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='inquiry'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 1:1문의 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='product'){?>side-menu--active<?php }?>">
                <div class="side-menu__icon"> <i data-lucide="clock-4"></i> </div>
                <div class="side-menu__title">
                    상품관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?php if($TPL_VAR["data"]['menu']['group']=='product'){?>side-menu__sub-open<?php }?>">
                <li>
                    <a href="/sys/product/prod_teetime.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='product'&&$TPL_VAR["data"]['menu']['item']=='teetime'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 티타임 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/sys/product/prod_travel.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='product'&&$TPL_VAR["data"]['menu']['item']=='travel'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 여행상품 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/sys/product/prod_promotion.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='product'&&$TPL_VAR["data"]['menu']['item']=='promotion'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 프로모션 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 후기 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 기획전 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 테마 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?=$side_depth=='exhibition'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="layers"></i> </div>
                <div class="side-menu__title">
                    전시관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='exhibition'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 전시 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 템플릿 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 팝업 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?=$side_depth=='reservation'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                <div class="side-menu__title">
                    예약관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='reservation'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 예약 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 취소 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 결제요청 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?=$side_depth=='information'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="info"></i> </div>
                <div class="side-menu__title">
                    정보관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='reservation'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 다국어 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 지역정보 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 골프장정보 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 항공정보 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 호텔정보 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 환율정보 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'){?>side-menu--active<?php }?>">
                <div class="side-menu__icon"> <i data-lucide="folder-open"></i> </div>
                <div class="side-menu__title">
                    서비스관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?php if($TPL_VAR["data"]['menu']['group']=='service'){?>side-menu__sub-open<?php }?>">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 공지 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> FAQ 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 약관 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 푸시 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 메일 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 메시지 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/sys/service/service_menu.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='menu'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 메뉴 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/sys/service/service_account.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='account'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 계정 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;.html" class="side-menu <?=$side_depth=='situation'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="align-start-horizontal"></i> </div>
                <div class="side-menu__title">
                    현황관리
                    <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='reservation'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 회원 현황</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 접속 현황</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 예약 현황</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 검색 현황</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 후기 현황</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 채널 현황</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 연동 현황</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?=$side_depth=='channel'?'side-menu--active':'' ?>">
                <div class="side-menu__icon"> <i data-lucide="settings-2"></i> </div>
                <div class="side-menu__title">
                    채널관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?=$side_depth=='reservation'?'side-menu__sub-open':'' ?>">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 채널 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 채널 정산 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> WL 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 연동 관리</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 연동 서비스 관리</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
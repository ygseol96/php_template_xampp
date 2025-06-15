<?php /* Template_ 2.2.8 2024/06/20 10:29:14 C:\Users\코드아이디어\projects\heyteetime_dev\admin\_global\skin_ko\include\_side_menu.tpl 000021135 */ ?>
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-3">
        <img alt="AGL" class="h-12" src="/_global/<?php echo $_SESSION['adm_skin']?>/dist/images/heyteetime/logo_white.svg">
    </a>
    <div class="side-nav__devider my-3"></div>
    <ul>
        <li>
            <a href="/dashboard.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='dashboard'){?>side-menu--active<?php }?>">
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
                    <a href="/member/member_list.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='member'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 회원 관리 </div>
                    </a>
                </li>
                <li>
                    <a href="/member/member_coupon_payment_list.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='coupon_pay'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 쿠폰지급 관리 </div>
                    </a>
                </li>
                <li>
                    <a href="/member/member_coupon_list.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='coupon'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 쿠폰 관리 </div>
                    </a>
                </li>
                <li>
                    <a href="/member/member_mileage.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='mileage'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 마일리지 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/member/member_inquiry.php" class="side-menu  <?php if($TPL_VAR["data"]['menu']['group']=='member'&&$TPL_VAR["data"]['menu']['item']=='inquiry'){?>side-menu--active<?php }?>">
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
                    <a href="/product/prod_teetime.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='product'&&$TPL_VAR["data"]['menu']['item']=='teetime'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 티타임 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/product/prod_travel.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='product'&&$TPL_VAR["data"]['menu']['item']=='travel'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 여행상품 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/product/prod_promotion.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='product'&&$TPL_VAR["data"]['menu']['item']=='promotion'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 프로모션 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/product/prod_review_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='product'&&$TPL_VAR["data"]['menu']['item']=='review'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 후기 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='display'){?>side-menu--active<?php }?>">
                <div class="side-menu__icon"> <i data-lucide="layers"></i> </div>
                <div class="side-menu__title">
                    전시관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?php if($TPL_VAR["data"]['menu']['group']=='display'){?>side-menu__sub-open<?php }?>">
                <li>
                    <a href="/display/exhibition_exhibition_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='display'&&$TPL_VAR["data"]['menu']['item']=='exhibition'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 전시 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/display/exhibition_template_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='display'&&$TPL_VAR["data"]['menu']['item']=='template'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 템플릿 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/display/exhibition_special_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='display'&&$TPL_VAR["data"]['menu']['item']=='special'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 기획전 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/display/exhibition_theme_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='display'&&$TPL_VAR["data"]['menu']['item']=='theme'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 테마 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/display/exhibition_pop_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='display'&&$TPL_VAR["data"]['menu']['item']=='pop'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 팝업 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='reservation'){?>side-menu--active<?php }?>">
                <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                <div class="side-menu__title">
                    예약관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?php if($TPL_VAR["data"]['menu']['group']=='reservation'){?>side-menu__sub-open<?php }?>">
                <li>
                    <a href="/reservation/reservation_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='reservation'&&$TPL_VAR["data"]['menu']['item']=='reservation'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 예약 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/reservation/reservation_cancel_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='reservation'&&$TPL_VAR["data"]['menu']['item']=='cancel'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 취소 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='infomation'){?>side-menu--active<?php }?>">
                <div class="side-menu__icon"> <i data-lucide="info"></i> </div>
                <div class="side-menu__title">
                    정보관리
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?php if($TPL_VAR["data"]['menu']['group']=='infomation'){?>side-menu__sub-open<?php }?>">
                <li>
                    <a href="/infomation/multilingual_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='infomation'&&$TPL_VAR["data"]['menu']['item']=='multilingual'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 다국어 관리</div>
                    </a>
                </li>
                <!--
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 골프장정보 관리</div>
                    </a>
                </li>
                //-->
                <li>
                    <a href="/infomation/infomation_flight_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='infomation'&&$TPL_VAR["data"]['menu']['item']=='flight'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 항공정보 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/infomation/infomation_hotel_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='infomation'&&$TPL_VAR["data"]['menu']['item']=='hotel'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 호텔정보 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/infomation/infomation_exchange_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='infomation'&&$TPL_VAR["data"]['menu']['item']=='exchange'){?>side-menu--active<?php }?>">
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
                    <a href="/service/service_notice_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='notice'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 공지 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/service/service_faq_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='faq'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> FAQ 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/service/service_terms_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='term'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 약관 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/service/service_push_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='push'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 푸시 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/service/service_mail_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='mail'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 메일 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/service/service_message_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='message'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 메시지 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/service/service_menu.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='menu'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 메뉴 관리</div>
                    </a>
                </li>
                <li>
                    <a href="/service/service_account.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='service'&&$TPL_VAR["data"]['menu']['item']=='account'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 계정 관리</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;.html" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='statistics'){?>side-menu--active<?php }?>">
                <div class="side-menu__icon"> <i data-lucide="align-start-horizontal"></i> </div>
                <div class="side-menu__title">
                    현황관리
                    <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?php if($TPL_VAR["data"]['menu']['group']=='statistics'){?>side-menu__sub-open<?php }?>">
                <li>
                    <a href="/statistics/situation_member_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='statistics'&&$TPL_VAR["data"]['menu']['item']=='member'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 회원 현황</div>
                    </a>
                </li>
                <li>
                    <a href="/statistics/situation_connect_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='statistics'&&$TPL_VAR["data"]['menu']['item']=='connect'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 접속 현황</div>
                    </a>
                </li>
                <li>
                    <a href="/statistics/situation_reservation_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='statistics'&&$TPL_VAR["data"]['menu']['item']=='reservation'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 예약 현황</div>
                    </a>
                </li>
                <li>
                    <a href="/statistics/situation_search_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='statistics'&&$TPL_VAR["data"]['menu']['item']=='search'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 검색 현황</div>
                    </a>
                </li>
                <li>
                    <a href="/statistics/situation_review_mng.php" class="side-menu <?php if($TPL_VAR["data"]['menu']['group']=='statistics'&&$TPL_VAR["data"]['menu']['item']=='review'){?>side-menu--active<?php }?>">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> 후기 현황</div>
                    </a>
                </li>
                <!--
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
                //-->
            </ul>
        </li>
    </ul>
</nav>
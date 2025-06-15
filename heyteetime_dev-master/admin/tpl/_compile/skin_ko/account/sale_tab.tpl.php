<?php /* Template_ 2.2.8 2024/02/16 08:59:08 /home/agl/www/admin/_global/skin_ko/account/sale_tab.tpl 000000519 */ ?>
<div class ="mainTab">
		<ul>
			<li <?php if($TPL_VAR["tab"]=='1'){?> class="active"<?php }?> onclick="go_gubun('')">목표 매출현황</li>
			<!--<li <?php if($TPL_VAR["tab"]=='2'){?> class="active"<?php }?> onclick="go_gubun('_month')">월간 매출현황</li>-->
			<li <?php if($TPL_VAR["tab"]=='3'){?> class="active"<?php }?> onclick="go_gubun('_day')">일간 매출현황</li>
		</ul>
	</div>
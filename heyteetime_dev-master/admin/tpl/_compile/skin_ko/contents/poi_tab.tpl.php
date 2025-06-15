<?php /* Template_ 2.2.8 2024/02/22 20:24:54 /home/agl/www/admin/_global/skin_ko/contents/poi_tab.tpl 000001274 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);?>
<div class ="mainTab" style="margin-bottom:10px;">
		<ul>
			<li <?php if($TPL_VAR["tab"]=='1'){?> class="active"<?php }?> onclick="go_tab('basic')">기본정보</li>
<?php if($TPL_data_1> 0){?>
			<li <?php if($TPL_VAR["tab"]=='2'){?> class="active"<?php }?> onclick="go_tab('facil')">시설 및 요금정보</li>
			<li <?php if($TPL_VAR["tab"]=='3'){?> class="active"<?php }?> onclick="go_tab('course')">코스정보</li>
			<li <?php if($TPL_VAR["tab"]=='4'){?> class="active"<?php }?> onclick="go_tab('hotel')">호텔정보</li>
			<li <?php if($TPL_VAR["tab"]=='5'){?> class="active"<?php }?> onclick="go_tab('rule')">규정/수상/대회 정보</li>
			<li <?php if($TPL_VAR["tab"]=='6'){?> class="active"<?php }?> onclick="go_tab('image')">이미지/동영상</li>
<?php }?>
		</ul>
	</div>
	<script type="text/javascript">
		function go_tab(arg) {
			var seq = $('#seq').val();
			var url = '';
			if(arg =='basic') {
				url = 'poi_write.html';
			}

			else  {
				url = 'poi_'+arg+'.html';
			}

			location.href = url +'?seq='+seq;
			

		}
	</script>
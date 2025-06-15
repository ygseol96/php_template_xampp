<?php /* Template_ 2.2.8 2024/02/05 15:27:37 /home/agl/www/admin/_global/skin_ko/account/sale_static_month.tpl 000017195 */ 
$TPL_data1_1=empty($TPL_VAR["data1"])||!is_array($TPL_VAR["data1"])?0:count($TPL_VAR["data1"]);
$TPL_data2_1=empty($TPL_VAR["data2"])||!is_array($TPL_VAR["data2"])?0:count($TPL_VAR["data2"]);
$TPL_data3_1=empty($TPL_VAR["data3"])||!is_array($TPL_VAR["data3"])?0:count($TPL_VAR["data3"]);
$TPL_data4_1=empty($TPL_VAR["data4"])||!is_array($TPL_VAR["data4"])?0:count($TPL_VAR["data4"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	<!-- Toast UI Grid 라이브러리 -->
<link rel="stylesheet" href="/inc/tui/node_modules/tui-grid/dist/tui-grid.css" />
<script src="/inc/tui/node_modules/tui-grid/dist/tui-grid.js"></script>
<script type="text/javascript">
	$(function() {
		$('.lmenu_<?php echo $TPL_VAR["dmenu"]?>').addClass("on");
		
		

		
	});

	
	

	function go_gubun(arg) {
		var  url = 'sale_static'+arg+'.html';
		location.href = url;
		

	}

	

</script>
<style type="text/css">
	.listTitle { font-size:12px; font-weight:bold; padding:15px 0 0px 0 }
	.ui-widget input {width:50px;}	
	.trinput {border:none; text-align:center; width:80px;}
	.trinput:focus {border:none; }

	.SYManagerTable01 input[type="text"]  {width:80px}
	
</style>


<style>
	.tableFixHead {
        overflow-y: auto; /* make the table scrollable if height is more than 200 px  */
        height: 700px; /* gives an initial height of 200px to the table */
      }
	.tableFixHead thead  {
        position: sticky; /* make the table heads sticky */
        top: 0px; /* table head will be placed from the top of the table and sticks to it */
      }

	 
	table {
        border-collapse: collapse; /* make the table borders collapse to each other */
        width: 100%;
      }
	th,	td {
        padding: 8px 16px;
        border: 1px solid #ccc;
		text-align:right;
		
      }
	th {
        background: #eee;
		text-align:center;
      }

	.outer {
		  position: relative;
		}
	.inner {
		overflow-x: scroll;
		overflow-y: visible;
		width: 1500px; 
  
	}

	.trline {border-top:2px solid #000;}

	.subsum td {background-color:#ffc1c1; text-align:right;}
	.trsummary th {background-color:#ff0000; font-weight:800; color:#fff; text-align:right;}




    </style>

<form name="schForm" id="schForm" >
	
	

	<?php echo $TPL_VAR["PageStr"]?>

	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">월간 매출현황</li>
			   <li id="SYMenuNavi" class="Navi">회계관리 > 매출 > 월간 매출현황 리스트</li>
			</ul>
	   </div>


<?php $this->print_("sale_static_tab",$TPL_SCP,1);?>



	   <div class="SYSearchBox01" >
			
			
			<div style="position:relative;padding:10px; border:1px solid #ddd;"  >
				<ul >
					<li>
						<select name="s_sdate" id="s_sdate" onchange="sch_list('schForm')">
							<?php echo selectOptionYear2( 2023,$_REQUEST["s_sdate"])?>

						</select>
						
					</li>
					  
				</ul>
			</div>
		</div>
				
			  
</form>

		


<form name="listForm" id="listForm" >
		
	

	<div class="outer">
	<div class="inner">
    <div class="tableFixHead">
      <table class="statTable01">
        <thead>
          <tr>
            <th colspan=2 rowspan=2>구분</th>
            <th colspan=3>합계</th>
            <th colspan=3>TDS 그룹</th>
            <th colspan=3>TDS FIT</th>
            <th colspan=3>TDS PASS</th>
            <th colspan=3>TDS PLUS</th>
			
          </tr>
		  <tr>
            <th>목표</th>
			<th>실적</th>
			<th>달성률</th>

            <th>목표</th>
			<th>실적</th>
			<th>달성률</th>

            <th>목표</th>
			<th>실적</th>
			<th>달성률</th>

            <th>목표</th>
			<th>실적</th>
			<th>달성률</th>

			<th>목표</th>
			<th>실적</th>
			<th>달성률</th>
          </tr>

		  <tr class="trsummary">
			<th colspan=2>합계</th>
            <th><?php echo number_format($TPL_VAR["data_total"]["tot_plan"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["tot_price"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["tot_p"], 2)?> (%)</th>
			

            <th><?php echo number_format($TPL_VAR["data_total"]["plan_grp"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["price_grp"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["p_grp"], 2)?> (%)</th>

            <th><?php echo number_format($TPL_VAR["data_total"]["plan_fit"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["price_fit"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["p_fit"], 2)?> (%)</th>

            <th><?php echo number_format($TPL_VAR["data_total"]["plan_pass"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["price_pass"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["p_pass"], 2)?> (%)</th>

			<th><?php echo number_format($TPL_VAR["data_total"]["plan_plus"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["price_plus"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["p_plus"], 2)?> (%)</th>
          </tr>

		 
        </thead>
        <tbody>
<?php if($TPL_data1_1){$TPL_I1=-1;foreach($TPL_VAR["data1"] as $TPL_V1){$TPL_I1++;?>
          <tr >
<?php if($TPL_I1== 0){?>
			<td rowspan=4>1분기</td>
<?php }?>
			
            <td><?php echo $TPL_V1["mdate"]?></td>
            <td><?php echo number_format($TPL_V1["tot_plan"])?></td>
            <td><?php echo number_format($TPL_V1["tot_price"])?></td>
            <td><?php echo number_format($TPL_V1["tot_p"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_grp"])?></td>
            <td><?php echo number_format($TPL_V1["price_grp"])?></td>
            <td><?php echo number_format($TPL_V1["p_grp"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_fit"])?></td>
            <td><?php echo number_format($TPL_V1["price_fit"])?></td>
            <td><?php echo number_format($TPL_V1["p_fit"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_pass"])?></td>
            <td><?php echo number_format($TPL_V1["price_pass"])?></td>
            <td><?php echo number_format($TPL_V1["p_pass"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_plus"])?></td>
            <td><?php echo number_format($TPL_V1["price_plus"])?></td>
            <td><?php echo number_format($TPL_V1["p_plus"], 2)?> (%)</td>

          </tr>
<?php }}?>

		  <tr class="subsum">
            <td>소계</td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["tot_plan"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["tot_price"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["tot_p"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data1_total"]["plan_grp"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["price_grp"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["p_grp"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data1_total"]["plan_fit"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["price_fit"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["p_fit"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data1_total"]["plan_pass"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["price_pass"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["p_pass"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data1_total"]["plan_plus"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["price_plus"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["p_plus"], 2)?> (%)</td>

          </tr>

<?php if($TPL_data2_1){$TPL_I1=-1;foreach($TPL_VAR["data2"] as $TPL_V1){$TPL_I1++;?>
          <tr >
<?php if($TPL_I1== 0){?>
			<td rowspan=4>2분기</td>
<?php }?>
			
            <td><?php echo $TPL_V1["mdate"]?></td>
            <td><?php echo number_format($TPL_V1["tot_plan"])?></td>
            <td><?php echo number_format($TPL_V1["tot_price"])?></td>
            <td><?php echo number_format($TPL_V1["tot_p"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_grp"])?></td>
            <td><?php echo number_format($TPL_V1["price_grp"])?></td>
            <td><?php echo number_format($TPL_V1["p_grp"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_fit"])?></td>
            <td><?php echo number_format($TPL_V1["price_fit"])?></td>
            <td><?php echo number_format($TPL_V1["p_fit"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_pass"])?></td>
            <td><?php echo number_format($TPL_V1["price_pass"])?></td>
            <td><?php echo number_format($TPL_V1["p_pass"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_plus"])?></td>
            <td><?php echo number_format($TPL_V1["price_plus"])?></td>
            <td><?php echo number_format($TPL_V1["p_plus"], 2)?> (%)</td>

          </tr>
<?php }}?>

		  <tr class="subsum">
            <td>소계</td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["tot_plan"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["tot_price"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["tot_p"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data2_total"]["plan_grp"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["price_grp"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["p_grp"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data2_total"]["plan_fit"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["price_fit"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["p_fit"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data2_total"]["plan_pass"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["price_pass"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["p_pass"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data2_total"]["plan_plus"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["price_plus"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["p_plus"], 2)?> (%)</td>

          </tr>


<?php if($TPL_data3_1){$TPL_I1=-1;foreach($TPL_VAR["data3"] as $TPL_V1){$TPL_I1++;?>
          <tr >
<?php if($TPL_I1== 0){?>
			<td rowspan=4>3분기</td>
<?php }?>
			
            <td><?php echo $TPL_V1["mdate"]?></td>
            <td><?php echo number_format($TPL_V1["tot_plan"])?></td>
            <td><?php echo number_format($TPL_V1["tot_price"])?></td>
            <td><?php echo number_format($TPL_V1["tot_p"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_grp"])?></td>
            <td><?php echo number_format($TPL_V1["price_grp"])?></td>
            <td><?php echo number_format($TPL_V1["p_grp"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_fit"])?></td>
            <td><?php echo number_format($TPL_V1["price_fit"])?></td>
            <td><?php echo number_format($TPL_V1["p_fit"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_pass"])?></td>
            <td><?php echo number_format($TPL_V1["price_pass"])?></td>
            <td><?php echo number_format($TPL_V1["p_pass"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_V1["plan_plus"])?></td>
            <td><?php echo number_format($TPL_V1["price_plus"])?></td>
            <td><?php echo number_format($TPL_V1["p_plus"], 2)?> (%)</td>

          </tr>
<?php }}?>

		  <tr class="subsum">
            <td>소계</td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["tot_plan"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["tot_price"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["tot_p"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data3_total"]["plan_grp"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["price_grp"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["p_grp"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data3_total"]["plan_fit"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["price_fit"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["p_fit"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data3_total"]["plan_pass"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["price_pass"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["p_pass"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data3_total"]["plan_plus"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["price_plus"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["p_plus"], 2)?> (%)</td>

          </tr>


<?php if($TPL_data4_1){$TPL_I1=-1;foreach($TPL_VAR["data4"] as $TPL_V1){$TPL_I1++;?>
          <tr >
<?php if($TPL_I1== 0){?>
			<td rowspan=4>4분기</td>
<?php }?>
			
            <td><?php echo $TPL_V1["mdate"]?></td>
            <td><?php echo number_format($TPL_V1["tot_plan"])?></td>
            <td><?php echo number_format($TPL_V1["tot_price"])?></td>
            <td><?php echo number_format($TPL_V1["tot_p"], 2)?></td>

			<td><?php echo number_format($TPL_V1["plan_grp"])?></td>
            <td><?php echo number_format($TPL_V1["price_grp"])?></td>
            <td><?php echo number_format($TPL_V1["p_grp"], 2)?></td>

			<td><?php echo number_format($TPL_V1["plan_fit"])?></td>
            <td><?php echo number_format($TPL_V1["price_fit"])?></td>
            <td><?php echo number_format($TPL_V1["p_fit"], 2)?></td>

			<td><?php echo number_format($TPL_V1["plan_pass"])?></td>
            <td><?php echo number_format($TPL_V1["price_pass"])?></td>
            <td><?php echo number_format($TPL_V1["p_pass"], 2)?></td>

			<td><?php echo number_format($TPL_V1["plan_plus"])?></td>
            <td><?php echo number_format($TPL_V1["price_plus"])?></td>
            <td><?php echo number_format($TPL_V1["p_plus"], 2)?></td>

          </tr>
<?php }}?>

		  <tr class="subsum">
            <td>소계</td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["tot_plan"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["tot_price"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["tot_p"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data4_total"]["plan_grp"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["price_grp"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["p_grp"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data4_total"]["plan_fit"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["price_fit"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["p_fit"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data4_total"]["plan_pass"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["price_pass"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["p_pass"], 2)?> (%)</td>

			<td><?php echo number_format($TPL_VAR["data4_total"]["plan_plus"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["price_plus"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["p_plus"], 2)?> (%)</td>

          </tr>
		 

		  <tr class="trsummary">
			<th colspan=2>합계</th>
            <th><?php echo number_format($TPL_VAR["data_total"]["tot_plan"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["tot_price"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["tot_p"], 2)?> (%)</th>
			

            <th><?php echo number_format($TPL_VAR["data_total"]["plan_grp"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["price_grp"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["p_grp"], 2)?> (%)</th>

            <th><?php echo number_format($TPL_VAR["data_total"]["plan_fit"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["price_fit"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["p_fit"], 2)?> (%)</th>

            <th><?php echo number_format($TPL_VAR["data_total"]["plan_pass"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["price_pass"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["p_pass"], 2)?> (%)</th>

			<th><?php echo number_format($TPL_VAR["data_total"]["plan_plus"])?></th>
			<th><?php echo number_format($TPL_VAR["data_total"]["price_plus"])?> </th>
			<th><?php echo number_format($TPL_VAR["data_total"]["p_plus"], 2)?> (%)</th>
          </tr>
		

        </tbody>
      </table>
    </div>
    </div>
    </div>




	
	<div class="btnlistarea" >
		<div class="btnlistleft">
			&nbsp;
		</div>
		<div class="btnlistright">
			&nbsp;
		</div>
	</div>		
		  
</form>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
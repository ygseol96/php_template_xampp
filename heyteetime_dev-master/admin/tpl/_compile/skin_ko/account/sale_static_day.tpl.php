<?php /* Template_ 2.2.8 2024/02/26 13:37:10 /home/agl/www/admin/_global/skin_ko/account/sale_static_day.tpl 000018721 */ 
$TPL_month_header1_1=empty($TPL_VAR["month_header1"])||!is_array($TPL_VAR["month_header1"])?0:count($TPL_VAR["month_header1"]);
$TPL_sum_total_1=empty($TPL_VAR["sum_total"])||!is_array($TPL_VAR["sum_total"])?0:count($TPL_VAR["sum_total"]);
$TPL_data1_1=empty($TPL_VAR["data1"])||!is_array($TPL_VAR["data1"])?0:count($TPL_VAR["data1"]);
$TPL_data1_total_day_1=empty($TPL_VAR["data1_total_day"])||!is_array($TPL_VAR["data1_total_day"])?0:count($TPL_VAR["data1_total_day"]);
$TPL_data2_1=empty($TPL_VAR["data2"])||!is_array($TPL_VAR["data2"])?0:count($TPL_VAR["data2"]);
$TPL_data2_total_day_1=empty($TPL_VAR["data2_total_day"])||!is_array($TPL_VAR["data2_total_day"])?0:count($TPL_VAR["data2_total_day"]);
$TPL_data3_1=empty($TPL_VAR["data3"])||!is_array($TPL_VAR["data3"])?0:count($TPL_VAR["data3"]);
$TPL_data3_total_day_1=empty($TPL_VAR["data3_total_day"])||!is_array($TPL_VAR["data3_total_day"])?0:count($TPL_VAR["data3_total_day"]);
$TPL_data4_1=empty($TPL_VAR["data4"])||!is_array($TPL_VAR["data4"])?0:count($TPL_VAR["data4"]);
$TPL_data4_total_day_1=empty($TPL_VAR["data4_total_day"])||!is_array($TPL_VAR["data4_total_day"])?0:count($TPL_VAR["data4_total_day"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

	<!-- Toast UI Grid 라이브러리 -->
<link rel="stylesheet" href="/inc/tui/node_modules/tui-grid/dist/tui-grid.css" />
<script src="/inc/tui/node_modules/tui-grid/dist/tui-grid.js"></script>
<script type="text/javascript">
	$(function() {
		$('.lmenu_<?php echo $TPL_VAR["dmenu"]?>').addClass("on");
		
		$('.rine').css("border-right", "1px solid #aaa");
		$('table tbody td').css("padding-right", "5px");
		
		
		
	});

	
	

	function go_gubun(arg) {
		var  url = 'sale_static'+arg+'.html';
		location.href = url;
		

	}


	function table_excel(file_nm) {
		var html = $('#table_data').html();
		$('#exceldata').val(html);
		var url  = 'excel_'+file_nm+'.php';

		document.listForm.action = url;
		document.listForm.method = 'post';
		document.listForm.submit();
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
		z-index:100;
      }

	 
	table {
        border-collapse: collapse; /* make the table borders collapse to each other */
        width: 100%;
      }
	th,	td {
        padding: 8px 16px;
        border: 1px solid #ccc;
		text-align:right;
		min-width:30px;
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

	.subsum td {background-color:#cee9ff; text-align:right;}
	.trsummary th {background-color:#005ca4; font-weight:500; color:#fff; text-align:right;}

	.lefthead {
		position:sticky;
			left:0;
		
			background:#fff;
		}
	

	




    </style>

<form name="schForm" id="schForm" >
	
	

	<?php echo $TPL_VAR["PageStr"]?>

	<div id="SYRightArea" >
	   <div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">일간 매출현황</li>
			   <li id="SYMenuNavi" class="Navi">회계관리 > 매출 > 일간 매출현황 리스트</li>
			</ul>
	   </div>


<?php $this->print_("sale_static_tab",$TPL_SCP,1);?>



	   <div class="SYSearchBox01" >
			
			
			<div style="position:relative;padding:10px; border:1px solid #ddd;"  >
				<ul >
					<li>
						<input type="text" name="s_sdate" id="s_sdate" class="SYInputStyle01 monthpicker"  value="<?php echo $_REQUEST["s_sdate"]?>"  autocomplete="off" style="width:60px" onchange="sch_list('schForm');">
						<!--
						
						<span class="bar">|</span>
					    <input type="button" class="SYButtonSearch02" value="검색" onclick="sch_list('schForm');">
						-->
						<span class="bar">|</span>
						<input type="button" class="SYButtonExcel03" title="엑셀다운로드" onclick="table_excel('sale_static_day')">
						
					</li>
					  
				</ul>
			</div>
		</div>
				
			  
</form>

		


<form name="listForm" id="listForm" >
	<input type="hidden" name="exceldata" id="exceldata">
	

	<div class="outer">
	<div class="inner">
    <div class="tableFixHead" id="table_data">
      <table class="statTable01" >
        <thead>
          <tr>
            <th  rowspan=3 class="rine lefthead">상품구분</th>
            <th  rowspan=2 class="rine lefthead">채널구분</th>
            <th colspan=5  class="rine ">합계</th>
<?php if($TPL_month_header1_1){foreach($TPL_VAR["month_header1"] as $TPL_V1){?>
			<th colspan=5  class="rine "><?php echo $TPL_V1?></th>
            
<?php }}?>
          </tr>
		  <tr>
            <th>취급액</th>
			<th>결제수</th>
			<th>티타임수</th>
			<th>인원수</th>
			<th  class="rine">매출액</th>
<?php if($TPL_month_header1_1){foreach($TPL_VAR["month_header1"] as $TPL_V1){?>
			<th>취급액</th>
			<th>결제수</th>
			<th>티타임수</th>
			<th>인원수</th>
			<th  class="rine">매출액</th>
            
<?php }}?>
          </tr>

		  <tr class="trsummary">
			
			<th   class="rine lefthead">합계</th>
            <th><?php echo number_format($TPL_VAR["data_total"]["jungsan_price"])?></th>
            <th><?php echo number_format($TPL_VAR["data_total"]["pay_cnt"])?></th>
            <th><?php echo number_format($TPL_VAR["data_total"]["tee_cnt"])?></th>
            <th><?php echo number_format($TPL_VAR["data_total"]["mem_cnt"])?></th>
            <th  class="rine"><?php echo number_format($TPL_VAR["data_total"]["profit_price"])?></th>
<?php if($TPL_sum_total_1){foreach($TPL_VAR["sum_total"] as $TPL_V1){?>
			<th><?php echo number_format($TPL_V1["jungsan_price"])?></th>
            <th><?php echo number_format($TPL_V1["pay_cnt"])?></th>
            <th><?php echo number_format($TPL_V1["tee_cnt"])?></th>
            <th><?php echo number_format($TPL_V1["mem_cnt"])?></th>
            <th  class="rine"><?php echo number_format($TPL_V1["profit_price"])?></th>
            
<?php }}?>
          </tr>
		  
        </thead>
        <tbody>
<?php if($TPL_data1_1> 0){?>
<?php if($TPL_data1_1){$TPL_I1=-1;foreach($TPL_VAR["data1"] as $TPL_V1){$TPL_I1++;
$TPL_item_2=empty($TPL_V1["item"])||!is_array($TPL_V1["item"])?0:count($TPL_V1["item"]);?>
          <tr >
<?php if($TPL_I1== 0){?>
            <td rowspan=<?php echo $TPL_data1_1+ 1?> class="lefthead" style="width:120px">TIGER GDS그룹상품</td>
<?php }?>
            <td class="rine lefthead" > <?php echo $TPL_V1["client_nm"]?> </td>
		
            <td><?php echo number_format($TPL_V1["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_V1["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["mem_cnt"])?></td>
            <td class="rine"><?php echo number_format($TPL_V1["profit_price"])?></td>
<?php if($TPL_item_2){foreach($TPL_V1["item"] as $TPL_V2){?>
			<td><?php echo number_format($TPL_V2["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_V2["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_V2["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_V2["mem_cnt"])?></td>
            <td class="rine"><?php echo number_format($TPL_V2["profit_price"])?></td>
<?php }}?>

          </tr>
<?php }}?>
		 <tr class="subsum">
		
            <td class="rine lefthead" >소계</td>
			
			<td><?php echo number_format($TPL_VAR["data1_total"]["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data1_total"]["mem_cnt"])?></td>
            <td class="rine"><?php echo number_format($TPL_VAR["data1_total"]["profit_price"])?></td>
<?php if($TPL_data1_total_day_1){foreach($TPL_VAR["data1_total_day"] as $TPL_V1){?>
			<td><?php echo number_format($TPL_V1["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_V1["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["mem_cnt"])?></td>
            <td class="rine"><?php echo number_format($TPL_V1["profit_price"])?></td>
<?php }}?>
          </tr>
<?php }?>


<?php if($TPL_data2_1> 0){?>
<?php if($TPL_data2_1){$TPL_I1=-1;foreach($TPL_VAR["data2"] as $TPL_V1){$TPL_I1++;
$TPL_item_2=empty($TPL_V1["item"])||!is_array($TPL_V1["item"])?0:count($TPL_V1["item"]);?>
          <tr  >
<?php if($TPL_I1== 0){?>
            <td rowspan=<?php echo $TPL_data2_1+ 1?> class="trline lefthead">TIGER FIT 상품</td>
<?php }?>
            <td <?php if($TPL_I1== 0){?> class="trline rine lefthead" <?php }else{?>class="rine lefthead"<?php }?>><?php echo $TPL_V1["client_nm"]?></td>
		
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["jungsan_price"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["pay_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["tee_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["mem_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline rine " <?php }else{?>class="rine"<?php }?>><?php echo number_format($TPL_V1["profit_price"])?></td>
<?php if($TPL_item_2){foreach($TPL_V1["item"] as $TPL_V2){?>
			<td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["jungsan_price"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["pay_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["tee_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["mem_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline rine" <?php }else{?>class="rine"<?php }?>><?php echo number_format($TPL_V2["profit_price"])?></td>
<?php }}?>

          </tr>
<?php }}?>
		 <tr class="subsum">
		
            <td class="rine lefthead">소계</td>
			
			<td><?php echo number_format($TPL_VAR["data2_total"]["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data2_total"]["mem_cnt"])?></td>
            <td class="rine"><?php echo number_format($TPL_VAR["data2_total"]["profit_price"])?></td>
<?php if($TPL_data2_total_day_1){foreach($TPL_VAR["data2_total_day"] as $TPL_V1){?>
			<td><?php echo number_format($TPL_V1["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_V1["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["mem_cnt"])?></td>
            <td class="rine"><?php echo number_format($TPL_V1["profit_price"])?></td>
<?php }}?>
          </tr>
<?php }?>

<?php if($TPL_data3_1> 0){?>
<?php if($TPL_data3_1){$TPL_I1=-1;foreach($TPL_VAR["data3"] as $TPL_V1){$TPL_I1++;
$TPL_item_2=empty($TPL_V1["item"])||!is_array($TPL_V1["item"])?0:count($TPL_V1["item"]);?>
          <tr  >
<?php if($TPL_I1== 0){?>
            <td rowspan=<?php echo $TPL_data3_1+ 1?> class="trline lefthead">TIGER PASS</td>
<?php }?>
            <td <?php if($TPL_I1== 0){?> class="trline rine lefthead" <?php }else{?>class="rine lefthead"<?php }?>><?php echo $TPL_V1["client_nm"]?></td>
		
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["jungsan_price"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["pay_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["tee_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["mem_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline rine" <?php }else{?>class="rine"<?php }?>><?php echo number_format($TPL_V1["profit_price"])?></td>
<?php if($TPL_item_2){foreach($TPL_V1["item"] as $TPL_V2){?>
			<td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["jungsan_price"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["pay_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["tee_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["mem_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline rine" <?php }else{?>class="rine"<?php }?>><?php echo number_format($TPL_V2["profit_price"])?></td>
<?php }}?>

          </tr>
<?php }}?>
		 <tr class="subsum">
		
            <td class="rine lefthead">소계</td>
			
			<td><?php echo number_format($TPL_VAR["data3_total"]["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data3_total"]["mem_cnt"])?></td>
            <td class="rine"><?php echo number_format($TPL_VAR["data3_total"]["profit_price"])?></td>
<?php if($TPL_data3_total_day_1){foreach($TPL_VAR["data3_total_day"] as $TPL_V1){?>
			<td><?php echo number_format($TPL_V1["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_V1["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["mem_cnt"])?></td>
            <td class="rine"><?php echo number_format($TPL_V1["profit_price"])?></td>
<?php }}?>
          </tr>
<?php }?>


<?php if($TPL_data4_1> 0){?>
<?php if($TPL_data4_1){$TPL_I1=-1;foreach($TPL_VAR["data4"] as $TPL_V1){$TPL_I1++;
$TPL_item_2=empty($TPL_V1["item"])||!is_array($TPL_V1["item"])?0:count($TPL_V1["item"]);?>
          <tr  >
<?php if($TPL_I1== 0){?>
            <td rowspan=<?php echo $TPL_data4_1+ 1?> class="trline lefthead">TIGER GDS PLUS</td>
<?php }?>
            <td <?php if($TPL_I1== 0){?> class="trline rine lefthead" <?php }else{?>class="rine lefthead"<?php }?>><?php echo $TPL_V1["client_nm"]?></td>
		
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["jungsan_price"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["pay_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["tee_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V1["mem_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline rine" <?php }else{?>class="rine"<?php }?>><?php echo number_format($TPL_V1["profit_price"])?></td>
<?php if($TPL_item_2){foreach($TPL_V1["item"] as $TPL_V2){?>
			<td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["jungsan_price"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["pay_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["tee_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline" <?php }?>><?php echo number_format($TPL_V2["mem_cnt"])?></td>
            <td <?php if($TPL_I1== 0){?> class="trline rine" <?php }else{?>class="rine"<?php }?>><?php echo number_format($TPL_V2["profit_price"])?></td>
<?php }}?>

          </tr>
<?php }}?>
		 <tr class="subsum">
		
            <td>소계</td>
			
			<td><?php echo number_format($TPL_VAR["data4_total"]["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["mem_cnt"])?></td>
            <td><?php echo number_format($TPL_VAR["data4_total"]["profit_price"])?></td>
<?php if($TPL_data4_total_day_1){foreach($TPL_VAR["data4_total_day"] as $TPL_V1){?>
			<td><?php echo number_format($TPL_V1["jungsan_price"])?></td>
            <td><?php echo number_format($TPL_V1["pay_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["tee_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["mem_cnt"])?></td>
            <td><?php echo number_format($TPL_V1["profit_price"])?></td>
<?php }}?>
          </tr>
<?php }?>
		
		<tr class="trsummary">
			<th style="background:#fff; color:#000" >상품구분</th>
			<th  class="lefthead">합계</th>
            <th ><?php echo number_format($TPL_VAR["data_total"]["jungsan_price"])?></th>
            <th><?php echo number_format($TPL_VAR["data_total"]["pay_cnt"])?></th>
            <th><?php echo number_format($TPL_VAR["data_total"]["tee_cnt"])?></th>
            <th><?php echo number_format($TPL_VAR["data_total"]["mem_cnt"])?></th>
            <th><?php echo number_format($TPL_VAR["data_total"]["profit_price"])?></th>
<?php if($TPL_sum_total_1){foreach($TPL_VAR["sum_total"] as $TPL_V1){?>
			<th><?php echo number_format($TPL_V1["jungsan_price"])?></th>
            <th><?php echo number_format($TPL_V1["pay_cnt"])?></th>
            <th><?php echo number_format($TPL_V1["tee_cnt"])?></th>
            <th><?php echo number_format($TPL_V1["mem_cnt"])?></th>
            <th><?php echo number_format($TPL_V1["profit_price"])?></th>
            
<?php }}?>
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
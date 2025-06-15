{#head}
<script type="text/javascript">
function goboard(s_brd) {
	location.href = '/board/board_list.html?s_brd='+s_brd;
}
function gofaboard() {
	location.href = '/facil/brd_free_list.html';
}
</script>		

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<link rel="stylesheet" href="./js/jquery-jvectormap-2.0.5.css" type="text/css" media="screen"/>
<script src="./js/jquery-jvectormap-2.0.5.min.js"></script>
<script src="./js/jquery-jvectormap-world-mill.js"></script>

<form name="form1" method="post" action="">


	<div id="SYRightArea">
		<div id="SYContentTitle">
			<ul>
			   <li id="SYMenuTitle" class="Title">DASH BOARD</li>
			   <li id="SYMenuNavi" class="Navi">메인</li>
			</ul>
		</div>

		<h1 class="main_h1"> 요청현황 </h1>
		<div id="SYBoardBox" class="SYManagerTable" style="margin:10px 0">
			<table class="SYManagerTable01" style="width:20%; float:left; margin-right:5px">
				<tr class="Title" >
					<td colspan=5 style="font-size:17px; height:20px; background:#eee; border-bottom:1px solid gray;font-weight:900;"> 회원 <span class="ico_new"></span> </td>
					
				</tr>
				<tr >
					<td style="width:60px; background:#ccc;" class="Title">골프장회원</td>
					<td style="width:40px;background:#eee;" class="Title ce">가입</td>
					<td style="width:50px;" class="ce">0</td>
					<td style="width:40px; background:#eee;" class="Title ce">탈퇴</td>
					<td  class="ce">0</td>
				</tr>
				<tr >
					<td style=" background:#ccc;" class="Title">골프장회원</td>
					<td style="background:#eee;" class="Title ce">가입</td>
					<td style="" class="ce">0</td>
					<td style=" background:#eee;" class="Title ce">탈퇴</td>
					<td  class="ce">0</td>
				</tr>
				<tr >
					<td style=" background:#ccc;" class="Title">골프장회원</td>
					<td style="background:#eee;" class="Title ce">가입</td>
					<td style="" class="ce">0</td>
					<td style=" background:#eee;" class="Title ce">탈퇴</td>
					<td  class="ce">0</td>
				</tr>
			</table>
			<table class="SYManagerTable01" style="width:20%; float:left; margin-right:5px">
				<tr class="Title" >
					<td colspan=5 style="font-size:17px; height:20px; background:#eee; border-bottom:1px solid gray;font-weight:900;"> 상품</td>
					
				</tr>
				<tr >
					<td style="width:60px; background:#ccc;" class="Title">GDS상품</td>
					<td style="width:40px;background:#eee;" class="Title ce">가입</td>
					<td style="width:50px;" class="ce">0</td>
					<td style="width:40px; background:#eee;" class="Title ce">환불</td>
					<td  class="ce">0</td>
				</tr>
				<tr >
					<td style=" background:#ccc;" class="Title">PASS상품</td>
					<td style="background:#eee;" class="Title ce">가입</td>
					<td style="" class="ce">0</td>
					<td style=" background:#eee;" class="Title ce">환불</td>
					<td  class="ce">0</td>
				</tr>
				<tr >
					<td style=" background:#ccc;" class="Title">PAY상품</td>
					<td style="background:#eee;" class="Title ce">가입</td>
					<td style="" class="ce">0</td>
					<td style=" background:#eee;" class="Title ce">환불</td>
					<td  class="ce">0</td>
				</tr>
			</table>
			<table class="SYManagerTable01" style="width:19%; float:left; margin-right:5px">
				<tr class="Title" >
					<td colspan=5 style="font-size:17px; height:20px; background:#eee; border-bottom:1px solid gray;font-weight:900;"> 운영</td>
					
				</tr>
				<tr >
					<td style="width:60px; background:#ccc;" class="Title">GC구축</td>
					<td style="width:40px;background:#eee;" class="Title ce">요청</td>
					<td style="width:50px;" class="ce">1</td>
				</tr>
				<tr >
					<td style=" background:#ccc;" class="Title">POI수정</td>
					<td style="width:40px;background:#eee;" class="Title ce">요청</td>
					<td style="width:50px;" class="ce">1</td>
				</tr>
				<tr >
					<td style=" background:#ccc;" class="Title"> GNR수정</td>
					<td style="width:40px;background:#eee;" class="Title ce">요청</td>
					<td style="width:50px;" class="ce">1</td>
				</tr>
			</table>
			<table class="SYManagerTable01" style="width:20%; float:left; margin-right:5px">
				<tr class="Title" >
					<td colspan=5 style="font-size:19px; height:20px; background:#eee; border-bottom:1px solid gray;font-weight:900;"> 예약</td>
					
				</tr>
				<tr >
					<td style="width:60px; background:#ccc;" class="Title">GDS상품</td>
					<td style="width:40px;background:#eee;" class="Title ce">예약</td>
					<td style="width:50px;" class="ce">1</td>
					
				</tr>
				<tr >
					<td style=" background:#ccc;" class="Title">Group상품</td>
					<td style="width:40px;background:#eee;" class="Title ce">예약</td>
					<td style="width:50px;" class="ce">1</td>
				</tr>
				
			</table>
			<table class="SYManagerTable01" style="width:19%; float:left; ">
				<tr class="Title" >
					<td colspan=5 style="font-size:17px; height:20px; background:#eee; border-bottom:1px solid gray;font-weight:900;"> CS</td>
					
				</tr>
				<tr >
					<td style="width:60px; background:#ccc;" class="Title">개인고객</td>
					<td style="width:40px;background:#eee;" class="Title ce">문의</td>
					<td style="width:50px;" class="ce">0</td>
					
				</tr>
				<tr >
					<td style=" background:#ccc;" class="Title">법인고객</td>
					<td style="width:40px;background:#eee;" class="Title ce">문의</td>
					<td style="width:50px;" class="ce">0</td>
				</tr>
				
			</table>
		</div>


		<div style="clear:both;display:block;width:100%;margin-top:20px;height:20px;"> </div>

		<h1 class="main_h1"> 목표현황 </h1>
		
		<div style="width:1500px; height:400px; margin-top:10px;border:1px solid gray;" >
			<canvas id="plan_a"style="width:1500px; height:400px;" ></canvas>
		
		</div>
		<script>

			$(function() {


				set_main_graph();

				
				
			});

			function set_main_graph() {

				$.post('/inc/ajax_common.php', { mode: 'get_main_graph' },
				function(json) { 
					var obj = $.parseJSON(json); 
					var msg = decodeURIComponent(obj.msg); 
					
					if(obj.result == 'Y') {

						

						var temp = msg.split('||||');

						var data_labels = temp[0].split('||');

						


						var plan_fit = temp[1].split('||');
						var price_fit = temp[2].split('||');


						var plan_grp = temp[3].split('||');
						var price_grp = temp[4].split('||');


						var plan_plus = temp[5].split('||');
						var price_plus = temp[6].split('||');


						var plan_pass = temp[7].split('||');
						var price_pass = temp[8].split('||');

						console.log(price_grp);



						const ctx = document.getElementById('plan_a').getContext('2d');
						const myChart = new Chart(ctx, {
							type: 'bar',
							data: {
								labels: data_labels,
								datasets: [
									// FIT 
									{
										label: 'FIT 목표 (KRW: 만원단위)',
										data: plan_fit,
										backgroundColor: [
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
											'rgba(0, 0, 0, 0.2)',
										],
										borderColor: [
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
										],
										borderWidth: 1
									},

									
									{
										label: 'FIT 실적 (KRW: 만원단위)',
										data: price_fit,
										backgroundColor: [
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
										],
										borderColor: [
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(255, 99, 132, 1)',
										],
										borderWidth: 1
									},

									// Group

									{
										label: '그룹 목표 (KRW: 만원단위)',
										data: plan_grp,
										backgroundColor: [
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
											'rgba(0, 0, 0, 0.6)',
										],
										borderColor: [
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
										],
										borderWidth: 1
									},

									
									{
										label: '그룹 실적 (KRW: 만원단위)',
										data: price_grp,
										backgroundColor: [
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(54, 162, 235, 0.2)',
										],
										borderColor: [
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(54, 162, 235, 1)',
										],
										borderWidth: 1
									},


									// Plus

									{
										label: 'PLUS 목표 (KRW: 만원단위)',
										data: plan_plus,
										backgroundColor: [
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
											'rgba(0, 0, 0, 0.8)',
										],
										borderColor: [
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
										],
										borderWidth: 1
									},

									
									{
										label: 'PLUS 실적 (KRW: 만원단위)',
										data: price_plus,
										backgroundColor: [
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
											'rgba(255, 206, 86, 0.2)',
										],
										borderColor: [
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(255, 206, 86, 1)',
										],
										borderWidth: 1
									},


									// PAss

									{
										label: 'PASS 목표 (KRW: 만원단위)',
										data: plan_pass,
										backgroundColor: [
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
										],
										borderColor: [
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(0, 0, 0, 1)',
										],
										borderWidth: 1
									},

									
									{
										label: 'PASS 실적 (KRW: 만원단위)',
										data: price_pass,
										backgroundColor: [
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
										],
										borderColor: [
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(75, 192, 192, 1)',
										],
										borderWidth: 1
									},



									
								]
							},
							//labels: plan_fit_txt,
							options: {

								tooltips: {
									callbacks: {
									   label: function(tooltipItem, data) {
										  var value = data.datasets[0].data[tooltipItem.index];
										  value = value.toString();
										  value = value.split(/(?=(?:...)*$)/);
										  value = value.join(',');
										  return value;
									   }
									}
								}, 
								scales: {
									yAxes: [{
										ticks: {
											beginAtZero: true,
                     						
											
										}
									}]
									
								},
								y: {
									title: {
									  display: true,
									  text: 'Value'
									},
								   
									ticks: {
									  // forces step size to be 50 units
									  //stepSize: 1000000
									}
								},

							}
						});
						
					}
					else {
						alert(decodeURIComponent(obj.msg));
						
					}
					
				}
			);
				
				/*
				const ctx = document.getElementById('plan_a').getContext('2d');
				const myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ['2024-01', '2024-02', '2024-03', '2024-04', '2024-05', '2024-06', '2024-07', '2024-08', '2024-09', '2024-10', '2024-11', '2024-12'],
						datasets: [
							
							{
							label: '목표 (%)',
							data: [100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100],
							backgroundColor: [
								'rgba(0, 0, 0, 0.2)',
								'rgba(0, 0, 0, 0.2)',
								'rgba(0, 0, 0, 0.2)',
								'rgba(0, 0, 0, 0.2)',
								'rgba(0, 0, 0, 0.2)',
								'rgba(0, 0, 0, 0.2)'
							],
							borderColor: [
								'rgba(0, 0, 0, 1)',
								'rgba(0, 0, 0, 1)',
								'rgba(0, 0, 0, 1)',
								'rgba(0, 0, 0, 1)',
								'rgba(0, 0, 0, 1)',
								'rgba(0, 0, 0, 1)'
							],
							borderWidth: 1
							},

							// TDS 데이터

							{
							label: '# of Votes',
							data: [12, 19, 3, 5, 2, 3],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
								'rgba(255, 99, 132, 1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
							},

							{
							label: '# of Votes',
							data: [22, 29, 13, 15, 12, 13],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
								'rgba(255, 99, 132, 1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
							}
							
						]
					},
					options: {
						scales: {
							y: {
								beginAtZero: true
							}
						}
					}
				});
				*/
			}
		</script>






		<div style="clear:both;display:block;width:100%;margin-top:20px;height:20px;"> </div>

		<h1 class="main_h1"> 회원 및 상품판매 현황 </h1>

		<div style="width:100%; display:flex;">

			<div style="width:750px; height:300px; margin-top:10px;border:1px solid gray;overflow:hidden; float:left;" >
				<div class="main_sub"> 골프장 회원/ 2,000개 </div>
				<div id="world-map-markers" style="width:750px; height:300px; border:1px solid gray;" >
				</div>
			</div>



			<script>
				$(function(){
				  $('#world-map-markers').vectorMap({
					map: 'world_mill',
					scaleColors: ['#C8EEFF', '#0071A4'],
					normalizeFunction: 'polynomial',
					hoverOpacity: 0.7,
					hoverColor: false,
					markerStyle: {
					  initial: {
						fill: '#F8E23B',
						stroke: '#383f47'
					  }
					},
					backgroundColor: '#383f47',
					markers: [
					  {latLng: [41.90, 12.45], name: 'Vatican City'},
					  {latLng: [43.73, 7.41], name: 'Monaco'},
					  {latLng: [-0.52, 166.93], name: 'Nauru'},
					  {latLng: [-8.51, 179.21], name: 'Tuvalu'},
					  {latLng: [43.93, 12.46], name: 'San Marino'},
					  {latLng: [47.14, 9.52], name: 'Liechtenstein'},
					  {latLng: [7.11, 171.06], name: 'Marshall Islands'},
					  {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
					  {latLng: [3.2, 73.22], name: 'Maldives'},
					  {latLng: [35.88, 14.5], name: 'Malta'},
					  {latLng: [12.05, -61.75], name: 'Grenada'},
					  {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
					  {latLng: [13.16, -59.55], name: 'Barbados'},
					  {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
					  {latLng: [-4.61, 55.45], name: 'Seychelles'},
					  {latLng: [7.35, 134.46], name: 'Palau'},
					  {latLng: [42.5, 1.51], name: 'Andorra'},
					  {latLng: [14.01, -60.98], name: 'Saint Lucia'},
					  {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
					  {latLng: [1.3, 103.8], name: 'Singapore'},
					  {latLng: [1.46, 173.03], name: 'Kiribati'},
					  {latLng: [-21.13, -175.2], name: 'Tonga'},
					  {latLng: [15.3, -61.38], name: 'Dominica'},
					  {latLng: [-20.2, 57.5], name: 'Mauritius'},
					  {latLng: [26.02, 50.55], name: 'Bahrain'},
					  {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
					]
				  });
				});
			</script>
			<div style="width:740px; height:300px; margin-top:10px;margin-left:10px;border:1px solid gray;overflow:hidden" >

				<div style="width:100%;">
					<div >
						<div class="main_sub" > 법인회원 / 650 업체, 개인회원 /20,350 </div>
						<div  class="main_card" >
							<p class="bGrey">
								<span>GSA/DMC <br> &nbsp;&nbsp;&nbsp;500</span>
							</p>
							<p class="bGrey">
								<span>GSA/DMC <br> &nbsp;&nbsp;&nbsp;500</span>
							</p>
							<p class="bGrey">
								<span>GSA/DMC <br> &nbsp;&nbsp;&nbsp;500</span>
							</p>
							<p class="bWhite">
								<span>GSA/DMC <br> &nbsp;&nbsp;&nbsp;500</span>
							</p>
							<p class="bWhite">
								<span>GSA/DMC <br> &nbsp;&nbsp;&nbsp;500</span>
							</p>
						</div>
					</div>
					<div style="margin-top:10px">
						<div class="main_sub"> 상품판매 </div>
						<div  class="main_card" >
							<p class="sub bBlue">
								<span>GDS가입<br> &nbsp;&nbsp; 500</span>
								
							</p>
							<p class="sub bGreen">
								<span>PASS가입 <br> &nbsp;&nbsp; 500</span>
							</p>
							<p class="sub bRed">
								<span>PAY가입 <br> &nbsp;&nbsp; 500</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div style="clear:both;display:block;width:100%;margin-top:20px;height:20px;"> </div>

		<h1 class="main_h1"> 요청게시판 </h1>
		

		<div id="SYBoardBox" class="SYManagerTable" style="margin-top:10px">
			<table class="SYManagerTable01" style="width:100%; float:left">
				<tr class="Title">
					<td style="width:10%;height:50px; background:#eee;">지역</td>
					<td style="width:20%;background:#eee;">회원가입<br>(시설기준)</td>
					<td style="width:20%;background:#eee;">이용대기중</td>
					<td style="width:25%;background:#eee;">정회원</td>
					<td style="width:12%;background:#eee;">재가입신청</td>
					<td style="width:12%;background:#eee;">탈퇴신청</td>
					
				</tr>
				<tbody>
				
					
					<tr >						
						<td  class="ce">{area_nm}</td>
						<td  class="ce"> {new_tot_cnt} ({new_a_cnt} / {new_f_cnt})</td>
						<td  class="ce"> {ready_tot_cnt} ({ready_a_cnt} / {ready_f_cnt})</td>
						<td  class="ce"> {mem_tot_cnt} ({mem_a_cnt} / {mem_f_cnt})</td>
						<td  class="ce">{re_cnt}</td>
						<td  class="ce">{out_cnt}</td>
					</tr>
					
					<tr >						
						<td  class="ce" style="background-color:#eee; font-weight:bold; height:26px" >전체</td>
						<td  class="ce" style="background-color:#eee; font-weight:bold"> {=(data_total.new_tot_cnt)} ({=(data_total.new_a_cnt)} / {=(data_total.new_f_cnt)})</td>
						<td  class="ce" style="background-color:#eee; font-weight:bold"> {=(data_total.ready_tot_cnt)} ({=(data_total.ready_a_cnt)} / {=(data_total.ready_f_cnt)})</td>
						<td  class="ce" style="background-color:#eee; font-weight:bold"> {=(data_total.mem_tot_cnt)} ({=(data_total.mem_a_cnt)} / {=(data_total.mem_f_cnt)})</td>
						<td  class="ce" style="background-color:#eee; font-weight:bold">{=(data_total.re_cnt)}</td>
						<td  class="ce" style="background-color:#eee; font-weight:bold">{=(data_total.out_cnt)}</td>
					</tr>
				
				</tbody>
			</table>
		</div>
		

	</div>
</form>
{#bottom}
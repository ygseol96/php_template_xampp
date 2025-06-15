<?php /* Template_ 2.2.8 2024/02/23 17:13:49 /home/agl/www/admin/_global/skin_ko/contents/poi_facil.tpl 000031575 */ 
$TPL_data_1=empty($TPL_VAR["data"])||!is_array($TPL_VAR["data"])?0:count($TPL_VAR["data"]);
$TPL_facility_1=empty($TPL_VAR["facility"])||!is_array($TPL_VAR["facility"])?0:count($TPL_VAR["facility"]);?>
<?php $this->print_("head",$TPL_SCP,1);?>

<style type="text/css">
.facility {display:inline-block;width:120px; margin-right:20px}

	</style>	
	<script type="text/javascript">

		$(function() {
			
		});

		

		function poi_facil_save(arg) {

			

			if($('#distance').val().length > 0 ) {
				var distance_me = $('#distance_me option:selected').val();
				if(!distance_me) {
					alert('전장단위를 선택하세요');
					$('#distance_me').focus();
					return;
				}
			}

			



			$('#iform').ajaxSubmit({
					
				dataType:  'json',
				url : 'ajax_contents.php',
				type : 'post',
				success:  function (obj) {
					var msg = decodeURIComponent(obj.msg);
					var opt_msg = decodeURIComponent(obj.opt_msg);
					
					if(obj.result == "Y") {
						//alert('저장되었습니다.');
						if(arg == 'next') {
							var seq = $('#seq').val();
							location.href = 'poi_course.html?seq='+seq;
						}
						else {
							window.close();
						}
					}
					else {
						alert(msg);	
						//$('#btn-popreg').attr("disabled", false);
					}
				}
			});

		}

		

		

		
	</script>
	<style type="text/css">
		.SYWirteTable td.Title {height:20px;}
	</style>
	
	<form name="iform" id="iform">
		<input type="hidden" name="mode" id="mode" value="<?php echo $TPL_VAR["editmode"]?>" />
		<input type="hidden" name="seq" id="seq" value="<?php echo $_REQUEST["seq"]?>" />
		
    
		<div id="SYRightArea" >
			<div id="SYContentTitle">
				<ul>
				   <li id="SYMenuTitle" class="Title"> POI <?php if($TPL_data_1> 0){?> 시설정보  - <?php echo $TPL_VAR["data"]["club_nm"]?><?php }?></li>
				   <li id="SYMenuNavi" class="Navi">Contents관리 > POI > POI 시설정보</li>
				</ul>
			</div>

<?php $this->print_("poi_tab",$TPL_SCP,1);?>

<?php $this->print_("poi_info",$TPL_SCP,1);?>

			
			<h1 class="main_h1">시설정보 </h1>
			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:150px">
					<col style="width:300px">
					<col style="width:160px">
					<col style="width:300px">
					<col style="width:150px">
					
					<col>
				</colgroup>

				<tr>
					
					<td class="Title" >총 홀수 / PAR 수 </td> 
					<td class="Content"  >
						<input type="text" name="hole_cnt" id="hole_cnt" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["hole_cnt"]?>"  autocomplete="off">
						/
						<input type="text" name="par_cnt" id="par_cnt" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["par_cnt"]?>"  autocomplete="off">
						
					</td>

				
					<td class="Title" >전장(distance) / 단위 *  </td> 
					<td class="Content"  >
						<input type="text" name="distance" id="distance" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["distance"]?>"  autocomplete="off">
						

						<select name="distance_me" id="distance_me" class="SYSelectBox01" >
							<option value="">== 단위선택 ==</option>
							<option value="meter" <?php if($TPL_VAR["data"]["distance_me"]=='meter'){?> selected<?php }?>>meter</option>
							<option value="yard" <?php if($TPL_VAR["data"]["distance_me"]=='yard'){?> selected<?php }?>>Yard</option>
						</select>
						
					</td>
					<td class="Title" >멤버쉽 정보 </td> 
					<td class="Content"  >
						
						<select name="membership" id="membership" class="SYSelectBox01" >
							<option value="">== 옵션선택 ==</option>
							<?php echo selectOption($TPL_VAR["INC"]["poi"]["membership"],$TPL_VAR["data"]["membership"],'array_reverse')?>

						</select>
					</td>
				</tr>
				<tr>
					<td class="Title" >우기/건기 </td> 
					<td class="Content"  >
						<input type="text" name="season_rain" id="season_rain" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["season_rain"]?>"  autocomplete="off">

						<input type="text" name="season_hot" id="season_hot" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["season_hot"]?>"  autocomplete="off">
						
						
					</td>

					<td class="Title" >개장일 / 리노베이션 </td> 
					<td class="Content"  >
						<input type="text" name="open_date" id="open_date" class="SYInputStyle02 "  value="<?php echo $TPL_VAR["data"]["open_date"]?>"  autocomplete="off">
						/
						<input type="text" name="rebuild" id="rebuild" class="SYInputStyle02 "  value="<?php echo $TPL_VAR["data"]["rebuild"]?>"  autocomplete="off">
						
					</td>

					<td class="Title" >코스설계자  </td> 
					<td class="Content"  >
						<input type="text" name="designer" id="designer" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["designer"]?>"  autocomplete="off" style="width:97%">
	
					</td>

					
				</tr>
				<tr>
					
					<td class="Title" >잔디종류 </td> 
					<td class="Content"  >
						<input type="text" name="green_kind" id="green_kind" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["green_kind"]?>"  autocomplete="off" style="width:97%">
						
					</td>
					<td class="Title" >사용가능외국어</td> 
					<td class="Content"  >
						<input type="text" name="use_lang" id="use_lang" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["use_lang"]?>"  autocomplete="off" style="width:98%">
						
						
					</td>

					<td class="Title" >에이전트 </td> 
					<td class="Content"  >
						<input type="text" name="agent" id="agent" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["agent"]?>"  autocomplete="off" style="width:97%">
						
					</td>
					
				</tr>
				<tr>
					<td class="Title" >픽업서비스 / 비용 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; ">
							<label class="switch">
							  <input type="checkbox" name="pickup_yn" id="pickup_yn" value="Y" <?php if($TPL_VAR["data"]["pickup_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>

						<div style="display:inline-block;position:relative;">
							
							<input type="text" name="pickup_price" id="pickup_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["pickup_price"]?>"  autocomplete="off" style="width:120px; margin-top:7px;">
						</div>
					</td>

					<td class="Title" >모바일 결제상품존재 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="mobile_pay_yn" id="mobile_pay_yn" value="Y" <?php if($TPL_VAR["data"]["mobile_pay_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
						
					</td>

					<td class="Title" >모바일 모바일결제지원 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="mobile_payapply_yn" id="mobile_payapply_yn" value="Y" <?php if($TPL_VAR["data"]["mobile_payapply_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
						
					</td>
				</tr>

				<tr>
					<td class="Title" >프론트결제 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; ">
							<label class="switch">
							  <input type="checkbox" name="front_pay_yn" id="front_pay_yn" value="Y" <?php if($TPL_VAR["data"]["front_pay_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>

						
					</td>

					<td class="Title" >쿠폰지원 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="cpn_yn" id="cpn_yn" value="Y" <?php if($TPL_VAR["data"]["cpn_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
						
					</td>


					<td class="Title" >Currency(화폐) </td> 
					<td class="Content"  >
						<input type="text" name="currency1" id="currency1" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["currency1"]?>"  autocomplete="off">
						<input type="text" name="currency2" id="currency2" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["currency2"]?>"  autocomplete="off">
						
					</td>

				
				</tr>

				

				<tr>
					<td class="Title">편의/시설 정보 </td> 
					<td class="Content" colspan=5 style="vertical-align:top">
<?php if($TPL_facility_1){foreach($TPL_VAR["facility"] as $TPL_V1){?>

						<label class="facility"><input type="checkbox" name="facil[]" id="facil_<?php echo $TPL_V1["value"]?>" value="<?php echo $TPL_V1["value"]?>" <?php echo $TPL_V1["checked"]?>><?php echo $TPL_V1["name"]?></label>
<?php }}?>
					</td>
				</tr>

				

				
			</table>
			

			<h1 class="main_h1">캐디 요금정보 </h1>
			<p class="Tip" style="margin-top:20px"> 코스 요금정보는 코스정보 탭에서 확인가능합니다. </p>

			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:100px">
					<col style="width:150px">
					<col style="width:100px">
					<col style="width:100px">
					<col style="width:300px">
					<col style="width:150px">
					
					<col>
				</colgroup>
				
				<tr>
					
					<td class="Title" rowspan=9>캐디피 </td> 
					<td class="Title" colspan=3 >
						캐디고용여부
					</td>

					<td class="Content" colspan='5'> 
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="caddie_hire_yn" id="caddie_hire_yn" value="Y" <?php if($TPL_VAR["data"]["caddie_hire_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
					</td> 
				</tr>

				<tr>
					
					
					<td class="Title" colspan=3 >
						캐디피 포함
					</td>

					<td class="Content" > 
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="caddie_fee_yn" id="caddie_fee_yn" value="Y" <?php if($TPL_VAR["data"]["caddie_fee_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>

						
					</td> 
					<td class="Title" >Tip 존재여부  </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="caddie_tip_yn" id="caddie_tip_yn" value="Y" <?php if($TPL_VAR["data"]["caddie_tip_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
						
					</td>
					<td class="Title" >캐디사용의무 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="caddie_must_yn" id="caddie_must_yn" value="Y" <?php if($TPL_VAR["data"]["caddie_must_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
					</td>
					
				</tr>
				<tr>
					
					
					<td class="Title" colspan=3 >
						캐디피 운영정보
					</td>

					<td class="Content" colspan=5 > 
						<textarea name="caddie_policy" id="caddie_policy" class="MWTextareaStyle01" ><?php echo dbUnEscape($TPL_VAR["data"]["caddie_policy"])?></textarea>
					</td>
					
				</tr>
				<tr>
					
					
					<td class="Content" rowspan=2 >
						

						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="caddie_team_yn" id="caddie_team_yn" value="Y" <?php if($TPL_VAR["data"]["caddie_team_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								Team
							  </span>
							</label> 
						</div>
					</td>

					<td class="Title" > 성수기 </td> 
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="caddie_twdh_price" id="caddie_twdh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_twdh_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_tweh_price" id="caddie_tweh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_tweh_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_tnh_price" id="caddie_tnh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_tnh_price"]?>"  autocomplete="off">
					</td>
				</tr>
				<tr>
					
					<td class="Title" > 비수기 </td> 				
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="caddie_twd_price" id="caddie_twd_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_twd_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_twe_price" id="caddie_twe_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_twe_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_tn_price" id="caddie_tn_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_tn_price"]?>"  autocomplete="off">
					</td>
				</tr>


				<tr>
					
					
					<td class="Content" rowspan=2 >
						
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="caddie_1_yn" id="caddie_1_yn" value="Y" <?php if($TPL_VAR["data"]["caddie_1_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								1인1캐디
							  </span>
							</label> 
						</div>
					</td>

					<td class="Title" > 성수기 </td> 
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="caddie_1wdh_price" id="caddie_1wdh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_1wdh_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_1weh_price" id="caddie_1weh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_1weh_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_1nh_price" id="caddie_1nh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_1nh_price"]?>"  autocomplete="off">
					</td>
				</tr>
				<tr>
					
					<td class="Title" > 비수기 </td> 				
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="caddie_1wd_price" id="caddie_1wd_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_1wd_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_1we_price" id="caddie_1we_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_1we_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_1n_price" id="caddie_1n_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_1n_price"]?>"  autocomplete="off">
					</td>
				</tr>

				<tr>
					
					
					<td class="Content" rowspan=2 >
						
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="caddie_2_yn" id="caddie_2_yn" value="Y" <?php if($TPL_VAR["data"]["caddie_2_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								1인2캐디
							  </span>
							</label> 
						</div>
					</td>

					<td class="Title" > 성수기 </td> 
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="caddie_2wdh_price" id="caddie_2wdh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_2wdh_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_2weh_price" id="caddie_2weh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_2weh_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_2nh_price" id="caddie_2nh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_2nh_price"]?>"  autocomplete="off">
					</td>
				</tr>
				<tr>
					
					<td class="Title" > 비수기 </td> 				
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="caddie_2wd_price" id="caddie_2wd_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_2wd_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_2we_price" id="caddie_2we_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_2we_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="caddie_2n_price" id="caddie_2n_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["caddie_2n_price"]?>"  autocomplete="off">
					</td>
				</tr>

				

				
			
				
			</table>



			<h1 class="main_h1">카트 요금정보 </h1>
			

			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:100px">
					<col style="width:150px">
					<col style="width:100px">
					<col style="width:100px">
					<col style="width:300px">
					<col style="width:150px">
					
					<col>
				</colgroup>
				
				
				<tr>
					
					<td class="Title" rowspan=8>전동 카트 </td> 
					<td class="Title" colspan=3 >
						전동카트 존재
					</td>

					<td class="Content" > 
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="acart_yn" id="acart_yn" value="Y" <?php if($TPL_VAR["data"]["acart_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>

						
					</td> 

					<td class="Title"  >
						전동카트피 포함
					</td>

					<td class="Content" > 
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="acart_fee_yn" id="acart_fee_yn" value="Y" <?php if($TPL_VAR["data"]["acart_fee_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>

						
					</td> 
					
					<td class="Title" >전동카트사용의무 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="acart_must_yn" id="acart_must_yn" value="Y" <?php if($TPL_VAR["data"]["acart_must_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
					</td>
					
				</tr>


				<tr>
					
					
					<td class="Title" colspan=3 >
						카트피 운영정보
					</td>

					<td class="Content" colspan=5 > 
						<textarea name="" id="" class="MWTextareaStyle01" ><?php echo dbUnEscape($TPL_VAR["data"]["cart_policy"])?></textarea>
					</td>
					
				</tr>
			
				<tr>
					
					
					<td class="Content" rowspan=2 >
						
						<label class="switch">
						  <input type="checkbox" name="acart_team_yn" id="acart_team_yn" value="Y" <?php if($TPL_VAR["data"]["acart_team_yn"]=='Y'){?> checked<?php }?>>  
						  <span class="slider round"></span>
						  <span class="text"> 
							Team
						  </span>
						</label> 
					</td>

					<td class="Title" >성수기 </td> 
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="acart_twdh_price" id="acart_twdh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_twdh_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="acart_tweh_price" id="acart_tweh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_tweh_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="acart_tnh_price" id="acart_tnh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_tnh_price"]?>"  autocomplete="off">
					</td>
				</tr>
				<tr>
					
					<td class="Title" > 비수기 </td> 				
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="acart_twd_price" id="acart_twd_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_twd_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="acart_twe_price" id="acart_twe_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_twe_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="acart_tn_price" id="acart_tn_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_tn_price"]?>"  autocomplete="off">
					</td>
				</tr>


				<tr>
					
					
					<td class="Content" rowspan=2 >
						
						<label class="switch">
						  <input type="checkbox" name="acart_1_yn" id="acart_1_yn" value="Y" <?php if($TPL_VAR["data"]["acart_1_yn"]=='Y'){?> checked<?php }?>>  
						  <span class="slider round"></span>
						  <span class="text"> 
							1인 1카트
						  </span>
						</label> 
					</td>

					<td class="Title" > 성수기 </td> 
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="acart_1wdh_price" id="acart_1wdh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_1wdh_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="acart_1weh_price" id="acart_1weh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_1weh_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="acart_1nh_price" id="acart_1nh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_1nh_price"]?>"  autocomplete="off">
					</td>
				</tr>
				<tr>
					
					<td class="Title" > 비수기 </td> 				
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="acart_1wd_price" id="acart_1wd_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_1wd_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="acart_1we_price" id="acart_1we_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_1we_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="acart_1n_price" id="acart_1n_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_1n_price"]?>"  autocomplete="off">
					</td>
				</tr>

				<tr>
					
					
					<td class="Content" rowspan=2 >
						
						<label class="switch">
						  <input type="checkbox" name="acart_2_yn" id="acart_2_yn" value="Y" <?php if($TPL_VAR["data"]["acart_2_yn"]=='Y'){?> checked<?php }?>>  
						  <span class="slider round"></span>
						  <span class="text"> 
							1인 2카트
						  </span>
						</label> 
					</td>

					<td class="Title" > 성수기 </td> 
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="acart_2wdh_price" id="acart_2wdh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_2wdh_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="acart_2weh_price" id="acart_2weh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_2weh_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="acart_2nh_price" id="acart_2nh_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_2nh_price"]?>"  autocomplete="off">
					</td>
				</tr>
				<tr>
					
					<td class="Title" > 비수기 </td> 				
					<td class="Title" >주중  </td> 
					<td class="Content"  >
						<input type="text" name="acart_2wd_price" id="acart_2wd_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_2wd_price"]?>"  autocomplete="off">
						
					</td>
					<td class="Title" >주말 </td> 
					<td class="Content"  >
						<input type="text" name="acart_2we_price" id="acart_2we_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_2we_price"]?>"  autocomplete="off">
					</td>

					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="acart_2n_price" id="acart_2n_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["acart_2n_price"]?>"  autocomplete="off">
					</td>
				</tr>


				<tr>
					
					<td class="Title" >수동 카트 </td> 
					<td class="Title"  >
						수동카트 존재
					</td>

					<td class="Content" > 
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="mcart_yn" id="mcart_yn" value="Y" <?php if($TPL_VAR["data"]["mcart_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>

						
					</td> 

					<td class="Title"  >
						 주중
					</td>

					<td class="Content" > 
						<input type="text" name="mcart_wd_price" id="mcart_wd_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["mcart_wd_price"]?>"  autocomplete="off">
					</td> 

					<td class="Title"  >
						주말
					</td>

					<td class="Content" > 
						<input type="text" name="mcart_we_price" id="mcart_we_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["mcart_we_price"]?>"  autocomplete="off">
					</td> 
					
					<td class="Title" >야간 </td> 
					<td class="Content"  >
						<input type="text" name="mcart_n_price" id="mcart_n_price" class="SYInputStyle02"  value="<?php echo $TPL_VAR["data"]["mcart_n_price"]?>"  autocomplete="off">
					</td>
					
				</tr>


			</table>


			<h1 class="main_h1">렌탈 요금정보 </h1>
			

			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:100px">
					<col style="width:100px">
					<col style="width:70px">
					<col style="width:100px">
					<col style="width:300px">
					<col style="width:150px">
					
					<col>
				</colgroup>
				
				
				<tr>
					
					<td class="Title" >렌탈정보 </td> 
					<td class="Title"  >
						렌탈가능 
					</td>

					<td class="Content" > 
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="rent_yn" id="rent_yn" value="Y" <?php if($TPL_VAR["data"]["rent_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>

						
					</td> 

					<td class="Title"  >
						 클럽세트
					</td>

					<td class="Content" > 
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="rent_set_yn" id="rent_set_yn" value="Y" <?php if($TPL_VAR["data"]["rent_set_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
					</td> 

					<td class="Title"  >
						단일클럽
					</td>

					<td class="Content" > 
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="rent_single_yn" id="rent_single_yn" value="Y" <?php if($TPL_VAR["data"]["rent_single_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
					</td> 
					
					<td class="Title" >골프화 </td> 
					<td class="Content"  >
						<div style="display:inline-block;position:relative; width:150px">
							<label class="switch">
							  <input type="checkbox" name="rent_shoe_yn" id="rent_shoe_yn" value="Y" <?php if($TPL_VAR["data"]["rent_shoe_yn"]=='Y'){?> checked<?php }?>>  
							  <span class="slider round"></span>
							  <span class="text"> 
								
							  </span>
							</label> 
						</div>
					</td>
					
				</tr>
			</table>

			
		</div>


		<div class="btnlistarea" style="margin-top:20px; ">
			<div class="btnlistleft" >
				&nbsp;
				<input type="button" class="SYButtonSubmit08" value="저장 후 닫기" onclick="poi_facil_save()">
				<input type="button" class="SYButtonSubmit08" value="저장 후 다음" onclick="poi_facil_save('next')">
				
				<input type="button" class="SYButtonBack04" value="목록으로" title="목록으로" onclick="golist()" id="btn-list">
				<input type="button" class="SYButtonBack04" value="닫기" title="닫기" onclick="self.close()" id="btn-close">
			</div>
			<div class="btnlistright">
				&nbsp;

			</div>
		</div>

	 
</form>
	

<div id="popLayer" class="popLayer" style="width:450px">

	<div style="text-align:center; padding:20px">
		<img src="/_global/img/loading-web.gif" width=150><br>
		처리중입니다.. 잠시 기다려주세요...
	</div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>
<?php /* Template_ 2.2.8 2024/02/20 09:53:27 /home/agl/www/admin/_global/skin_ko/contents/poi_info.tpl 000002248 */ ?>
<h1 class="main_h1">기본정보 요약 </h1>
			
			<table class="SYWirteTable" style="margin-top:10px; margin-bottom:20px;">
				<colgroup>
					<col style="width:150px">
					<col style="width:300px">
					<col style="width:150px">
					<col style="width:300px">
					<col style="width:150px">
					
					<col>
				</colgroup>
				
				<tr>
					<td class="Title" >POI  </td> 
					<td class="Content"  >
						
						<?php echo $TPL_VAR["data"]["poi_seq"]?> - <?php echo $TPL_VAR["data"]["club_nm"]?>

						
						
					</td>
					<td class="Title" >W/L 코드 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["code_wl"]?>

						
					</td>

					<td class="Title" >GDS 코드 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["code_gds"]?>

					</td>
					
				</tr>
				<tr>
					
					<td class="Title" >국가코드 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["nat_cd"]?>

					</td>
					<td class="Title" >지역코드</td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["state_cd"]?>

						
					</td>

					<td class="Title" >도시코드 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["city_code"]?>

						
					</td>
					
				</tr>
				<tr>
					<td class="Title" >전화번호 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["phone"]?>


					</td>
					<td class="Title" >팩스</td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["fax"]?>

						
					</td>

					<td class="Title" >공식이메일 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["email"]?>

					</td>
				</tr>

				<tr>
					<td class="Title" >담당자명 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["contact_name"]?>

					</td>
					<td class="Title" >담당자 직책</td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["contact_title"]?>

						
					</td>

					<td class="Title" >담당자 이메일 </td> 
					<td class="Content"  >
						<?php echo $TPL_VAR["data"]["contact_email"]?>

						
					</td>
				</tr>
			</table>
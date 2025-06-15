<?php
/** ---------------------------------------------------------------
@program : 공통 처리
@description : 
@fileinfo : /inc/ajax_common.php
@filedescription : 

@auth : 현민원
@since : 2022.7
------------------------------------------------------------------**/

include_once $_SERVER['DOCUMENT_ROOT']."/inc/setup.php";
?>
<?php

if(!$_POST['mode']) close();
switch($_POST['mode']) {

	//이전 달 가져오기
	case "grp_prev_month" :
		$sdate = $_POST['sdate'];

		if(!$sdate) $sdate = date('Y-m')."-01";

		$sdate = date("Y-m-d", strtotime($sdate." - 1 month"));

		$edate = substr($sdate,0,8). date_lastday($sdate);

		return_json('Y', $sdate, $edate);
		break;


	//다음 달 가져오기
	case "grp_next_month" :
		$sdate = $_POST['sdate'];

		if(!$sdate) $sdate = date('Y-m')."-01";

		$sdate = date("Y-m-d", strtotime($sdate." + 1 month"));

		$edate = substr($sdate,0,8). date_lastday($sdate);

		return_json('Y', $sdate, $edate);
		break;



	case "login" :
        if(!$_POST['user-id']) close();
        if(!$_POST['user-password']) close();
        if(empty($_POST['remember-me'])) $_POST['remember-me'] ='N';



        $sql = "
            select 
				* 
				, aes_decrypt(adm_pwd, '".$_INC['env']['encrypt_key']."') as passwd
				, (select jk_name from comp_jikgub where cj_seq = a.cj_seq) as jk_name
				, (select part_name from comp_part where cp_seq = a.adm_part_seq) as part_name 
				
            from admin_member as a
            where 
                   adm_id ='".$_POST['user-id']."'
        ";
        //echo $sql;
        $row = my_select($sql, $myconn);
        $row_cnt = my_count($row);

        if($row_cnt == 0 || $row[0]['passwd'] != $_POST['user-password']) {
            return_json('N','아이디 또는 비밀번호가 일치하지 않습니다.');
        }



        $data = $row[0];


        //권한체크
        if($data['use_yn'] != 'Y') {
            return_json('N', '등록된 관리자가 아닙니다');
        }

		if($data['confirm_yn'] != 'Y') {
            return_json('N', '승인대기중입니다.');
        }
        
		
        
       
        

        session_regenerate_id(); // 세션아이디 초기화


        $_SESSION['admin_name'] = $data['adm_name'];
        $_SESSION['admin_id'] = $data['adm_id'];
        $_SESSION['admin_seq'] = $data['adm_seq'];
        $_SESSION['admin_part_name'] = $data['part_name'];
        $_SESSION['admin_jikgub'] = $data['jk_name'];
        
        
        
        $sql = "
                select now() as now_date 
        ";
        $now_date = my_read($sql, $myconn);

        $_SESSION['login_date'] = $now_date ;
		

		//make_apply_menu();





        //print_r($_SESSION);

        if($_POST['remember-me'] == 'Y') {
            setcookie("user_id", $data['adm_id'], time() +604800,"/");
        }
        else {
            setcookie("user_id", "", time() -604800, "/");
        }


		//print_r($_SESSION);



        return_json('Y');
        break;

    case "logout" :

		foreach($_SESSION as $key=> $value) {
			if(substr($key, 0,3) == "adm") {
				$_SESSION[$key] = "";
			}
		}
        
        return_json('Y');
        break;



	//왼쪽메뉴 가져오기
	case "get_leftmenu" :
		if(empty($_POST['seq'])) close();

		$html = get_admin_leftmenu($_POST['seq']);

		

		

		
		return_json('Y', $html);
		break;


	//메인 그래프 가져오기
	case "get_main_graph" :

		$year = date('Y');

		$sql = "
			SELECT

				* 
				, ROUND(IF(t1.plan_fit > 0 ,t1.price_fit / t1.plan_fit *100, 0),2) AS p_fit
				, ROUND(IF(t1.plan_grp > 0 ,t1.price_grp / t1.plan_grp *100, 0),2) AS p_grp
				, ROUND(IF(t1.plan_pass > 0 ,t1.price_pass / t1.plan_pass *100, 0),2) AS p_pass
				, ROUND(IF(t1.plan_plus > 0 ,t1.price_plus / t1.plan_plus *100, 0),2) AS p_plus

				, (t1.price_fit + t1.price_grp + t1.price_pass + t1.price_plus) AS tot_price
				, (t1.plan_fit + t1.plan_grp + t1.plan_pass + t1.plan_plus) AS tot_plan
				, ROUND(IF( (t1.plan_fit + t1.plan_grp + t1.plan_pass + t1.plan_plus) > 0, (t1.price_fit + t1.price_grp + t1.price_pass + t1.price_plus) / (t1.plan_fit + t1.plan_grp + t1.plan_pass + t1.plan_plus) * 100, 0) ,2) AS tot_p

			
			FROM (
				SELECT 
					dt.mdate,

					ROUND(IFNULL(fit.profit_price,0)/10000,1) AS price_fit,
					ROUND(IFNULL(pass.profit_price,0)/10000,1) AS price_pass,
					ROUND(IFNULL(grp.profit_price,0)/10000,1) AS price_grp,
					ROUND(IFNULL(plus.profit_price,0)/10000,1) AS price_plus,
					ROUND(fn_acnt_month_price('1' , ".$year.",CAST(RIGHT(dt.mdate,2) AS UNSIGNED))/10000,0) AS plan_fit,
					ROUND(fn_acnt_month_price('2' , ".$year.",CAST(RIGHT(dt.mdate,2) AS UNSIGNED))/10000,0) AS plan_pass,
					ROUND(fn_acnt_month_price('3' , ".$year.",CAST(RIGHT(dt.mdate,2) AS UNSIGNED))/10000,0) AS plan_grp,
					ROUND(fn_acnt_month_price('4' , ".$year.",CAST(RIGHT(dt.mdate,2) AS UNSIGNED))/10000,0) AS plan_plus
					
					




				FROM (
					SELECT '".$year."01' AS mdate 
					UNION ALL 
					SELECT '".$year."02' AS mdate
					UNION ALL 
					SELECT '".$year."03' AS mdate
					UNION ALL 
					SELECT '".$year."04' AS mdate
					UNION ALL 
					SELECT '".$year."05' AS mdate
					UNION ALL 
					SELECT '".$year."06' AS mdate
					UNION ALL 
					SELECT '".$year."07' AS mdate
					UNION ALL 
					SELECT '".$year."08' AS mdate
					UNION ALL 
					SELECT '".$year."09' AS mdate
					UNION ALL 
					SELECT '".$year."10' AS mdate
					UNION ALL 
					SELECT '".$year."11' AS mdate
					UNION ALL 
					SELECT '".$year."12' AS mdate
					
				) dt

				LEFT OUTER JOIN 
				(
					-- fit	
					SELECT 
						mdate,
						SUM(profit_price) AS profit_price

					FROM (
					
					(
						-- 자동매출
						SELECT
							LEFT(salelocaldt,6) AS mdate,
							SUM(
								CASE WHEN 
									EXISTS (
										SELECT 1 FROM acnt_grp_sale 
										WHERE 
											fid = b.fid 
											AND LEFT(b.salelocaldt,8)  BETWEEN LEFT(REPLACE(sdate,'-',''),8) AND LEFT(REPLACE(edate,'-',''),8) 
											
									) THEN ROUND(IFNULL(b.jungsan_price,0),0) 
								ELSE ROUND(IFNULL(b.jungsan_price,0),0) - ROUND(IFNULL(b.cms_price,0),0) 
								
								END 
							) AS profit_price
							
							
							
							
						FROM ta_client AS a
							LEFT OUTER JOIN ta_payment AS b 
								ON a.client_id = b.client_id 
									AND b.salelocaldt LIKE '".$year."%' 
									
						WHERE
							a.use_yn ='Y'
							-- AND a.view_yn ='Y'
							AND a.test_yn ='N'
						GROUP BY 1
						ORDER BY 1
					)

					UNION ALL
					(
						-- 수기등록 매출
						SELECT
							LEFT(REPLACE(c.pay_date,'-',''),6) AS mdate,
							SUM(IFNULL(c.pay_price,0)) AS profit_price
							
							
							
						FROM acnt_group AS a
							INNER JOIN acnt_channel AS b ON a.acg_seq = b.acg_seq AND b.use_yn = 'Y'
							INNER JOIN acnt_channel_price AS c ON b.ach_seq = c.ach_seq AND c.pay_date LIKE '".$year."%'
						WHERE
							a.gubun = '1'
							
							
						GROUP BY 1
						ORDER BY 1
							
					) ) AS aa

					GROUP BY 1
					
				) fit ON dt.mdate = fit.mdate	

				LEFT OUTER JOIN 
				(
					-- pass
					SELECT 
						aa.mdate,
						SUM(aa.profit_price) AS profit_price
					
					FROM (
					(
						-- 자동
						SELECT
							LEFT(b.pay_date,6) AS mdate,
							ROUND(SUM(IFNULL(b.price,0)),0)  * IFNULL((SELECT fee FROM ta_gc_info_fee WHERE gc_seq =a.gc_seq AND b.pay_date BETWEEN REPLACE(sdate,'-','') AND REPLACE(edate,'-','')) ,0) AS profit_price
							
							
						FROM ta_gc_info AS a
							INNER JOIN ta_pass_payment AS b ON a.fid = b.fid AND b.pay_date LIKE '".$year."%'
						WHERE
							b.pay_date LIKE '".$year."%'
							AND a.ftype ='1'
							AND a.fid NOT LIKE '1%'
						GROUP BY 1
						ORDER BY 1
					)
					UNION ALL
					(
						-- 수기등록 매출
						SELECT
							LEFT(REPLACE(c.pay_date,'-',''),6) AS mdate,
							SUM(IFNULL(c.pay_price,0)) AS profit_price
							
							
							
						FROM acnt_group AS a
							INNER JOIN acnt_channel AS b ON a.acg_seq = b.acg_seq AND b.use_yn = 'Y'
							INNER JOIN acnt_channel_price AS c ON b.ach_seq = c.ach_seq AND c.pay_date LIKE '".$year."%'
						WHERE
							a.gubun = '2'
							
							
						GROUP BY 1
						ORDER BY 1
							
					) ) AS aa

					GROUP BY 1
					
				) pass ON dt.mdate = pass.mdate	

				LEFT OUTER JOIN 
				(
					-- 그룹상품 
					SELECT 
						aa.mdate,
						SUM(aa.profit_price) AS profit_price
					
					FROM (
					
					
						-- 수기등록 그룹상품
						SELECT
							LEFT(REPLACE(c.pay_date,'-',''),6) AS mdate,
							SUM(IFNULL(c.pay_price,0)) AS profit_price
							
							
							
						FROM acnt_group AS a
							INNER JOIN acnt_channel AS b ON a.acg_seq = b.acg_seq AND b.use_yn = 'Y'
							INNER JOIN acnt_channel_price AS c ON b.ach_seq = c.ach_seq AND c.pay_date LIKE '".$year."%'
						WHERE
							a.gubun = '3'
							
							
						GROUP BY 1
						ORDER BY 1
							
					 ) AS aa

					GROUP BY 1
					
				) grp ON dt.mdate = grp.mdate
				LEFT OUTER JOIN 
				(
						
					SELECT
						LEFT(REPLACE(c.pay_date,'-',''),6) AS mdate,
						SUM(IFNULL(c.pay_price,0)) AS profit_price
						
						
					FROM acnt_group AS a
						INNER JOIN acnt_channel AS b ON a.acg_seq = b.acg_seq AND b.use_yn = 'Y'
						INNER JOIN acnt_channel_price AS c ON b.ach_seq = c.ach_seq AND c.pay_date LIKE '".$year."%'
					WHERE
						a.gubun = '4'
						
						
					GROUP BY 1
					ORDER BY 1
							
					
				) plus ON dt.mdate = plus.mdate	

				
								
						
				
			) AS t1
		";

		//write($sql);
		$row = my_select($sql, $myconn);
		$row_cnt = my_count($row);
		
		////// 데이터 가공
		

		for($i=0; $i < $row_cnt; $i++) {

			//$row[$i]['tot_plan'] += $row[$i]['plan_fit']+ $row[$i]['plan_grp']+$row[$i]['plan_pass']+$row[$i]['plan_plus'];
			
			/*
			if($row[$i]['mdate'] <= date('Ym')) {
				$row[$i]['sum_plan'] += $row[$i]['plan_fit']+ $row[$i]['plan_grp']+$row[$i]['plan_pass']+$row[$i]['plan_plus'];
			}
			*/

			//$row[$i]['tot_price'] += $row[$i]['price_fit']+ $row[$i]['price_grp']+$row[$i]['price_pass']+$row[$i]['price_plus'];
		

			/*

			/// 천원단위로 변환
		
			if($row[$i]['price_grp'] > 0 ) $row[$i]['price_grp'] = floor($row[$i]['price_grp'] /10000);
			if($row[$i]['price_plus'] > 0 ) $row[$i]['price_plus'] = floor($row[$i]['price_plus'] /10000);
			if($row[$i]['price_fit'] > 0 ) $row[$i]['price_fit'] = floor($row[$i]['price_fit'] /10000);
			if($row[$i]['price_pass'] > 0 ) $row[$i]['price_pass'] = floor($row[$i]['price_pass'] /10000);

			if($row[$i]['plan_grp'] > 0 ) $row[$i]['plan_grp'] = floor($row[$i]['plan_grp'] /10000);
			if($row[$i]['plan_plus'] > 0 ) $row[$i]['plan_plus'] = floor($row[$i]['plan_plus'] /10000);
			if($row[$i]['plan_fit'] > 0 ) $row[$i]['plan_fit'] = floor($row[$i]['plan_fit'] /10000);
			if($row[$i]['plan_pass'] > 0 ) $row[$i]['plan_pass'] = floor($row[$i]['plan_pass'] /10000);
			*/
			
		}


		


		////// 차트 데이터 만들기
		// 그래프 x축 라벨

		$ym ="";

		$plan_fit ="";
		$price_fit ="";
		
		$plan_grp ="";
		$price_grp ="";

		$plan_plus ="";
		$price_plus ="";

		$plan_pass ="";
		$price_pass ="";


		$plan_tot ="";
		$price_tot ="";
		

		for($i=0; $i < $row_cnt; $i++) {
			
			if($i > 0 ) {
				
				$ym.="||";
				$plan_fit.="||";
				$price_fit.="||";

				$plan_grp.="||";
				$price_grp.="||";

				$plan_plus.="||";
				$price_plus.="||";

				$plan_pass.="||";
				$price_pass.="||";

				$plan_tot.="||";
				$price_tot.="||";
			}
			
				
				


				$ym .= $row[$i]['mdate'];
				$plan_fit .= $row[$i]['plan_fit'];
				$price_fit .= $row[$i]['price_fit'];

				$plan_grp .= $row[$i]['plan_grp'];
				$price_grp .= $row[$i]['price_grp'];

				$plan_plus .= $row[$i]['plan_plus'];
				$price_plus .= $row[$i]['price_plus'];

				$plan_pass .= $row[$i]['plan_pass'];
				$price_pass .= $row[$i]['price_pass'];

				$plan_tot .= $row[$i]['tot_plan'];
				$price_tot .= $row[$i]['tot_price'];
				
			


		}

		//echo "ym = $ym ";

		$res = $ym ."||||".$plan_fit."||||".$price_fit."||||".$plan_grp."||||".$price_grp."||||".$plan_plus."||||".$price_plus."||||".$plan_pass."||||".$price_pass."||||".$plan_tot."||||".$price_tot;

		//echo $price_fit;




		return_json('Y', $res);
		break;

	

	//관리자 신청폼
	case "form_admin_apply" :

		//부서정보
		$sql = "
			SELECT
				part_name AS name,
				cp_seq AS value
			FROM comp_part AS a
			WHERE
				use_yn ='Y'
			ORDER BY order_no ASC
		";
		$part = my_select($sql, $myconn);


		//직급정보
		$sql = "
			SELECT
				jk_name AS name,
				cj_seq AS value
			FROM comp_jikgub AS a
			WHERE
				use_yn ='Y'
			ORDER BY order_no ASC
		";
		$jk = my_select($sql, $myconn);



		$html = '
			<form name="popForm" id="popForm">
			<input type="hidden" name="mode" id="popmode" value="admin_apply">
			<input type="hidden" name="idvalid" id="idvalid" value="">
			<div id="SYTopTitle" class="txtTitle" >관리자신청</div>
				<div id="SYPopupContent">
					<div id="SYMainContent" >

						
						<table class="SYWirteTableMini">
							<colgroup>
								<col style="width:20%">
								<col  >
								
							</colgroup>
							<tr>
								<td class="Title" >
									아이디 *
								</td>
								<td class="Content" >
									 <input type="text" name="adm_id" id="adm_id" class="SYInputStyle02 idOnly" style="width:150px;" value="" placeholder="아이디" autocomplete="off" onkeyup="chk_valid_id()" >
									 <p class="Tip01" id="view_valid_id">아이디는 4자이상 영문,숫자,_ - . 기호만 가능합니다.</p>
								</td>
							</tr>
							<tr>
								<td class="Title" >
									이름 *
								</td>
								<td class="Content" >
									 <input type="text" name="adm_name" id="adm_name" class="SYInputStyle02" style="width:150px;" value="" placeholder="이름" autocomplete="off">
								</td>
							</tr>
							<tr>
								<td class="Title" >
									비밀번호 *
								</td>
								<td class="Content" >
									 <input type="password" name="pwd" id="pwd" class="SYInputStyle02" style="width:150px;" value="" placeholder="비밀번호" autocomplete="off">
									 <p class="Tip01" >비밀번호는 4자이상  가능합니다.</p>
								</td>
							</tr>
							<tr>
								<td class="Title" >
									비밀번호 확인 *
								</td>
								<td class="Content" >
									 <input type="password" name="pwd2" id="pwd2" class="SYInputStyle02" style="width:150px;" value="" placeholder="비밀번호 확인" autocomplete="off">
								</td>
							</tr>
							
							<tr>
								<td class="Title" >
									부서 *
								</td>
								<td class="Content" colspan=3>
									<select name="part_seq" id="part_seq" class="SYSelectBox01" >
										<option value="">선택</option>
										'.selectOption($part, '', 'db').'
									</select>
								</td>
							</tr>

							<tr>
								<td class="Title" >
									직급 *
								</td>
								<td class="Content" colspan=3>
									<select name="cj_seq" id="cj_seq" class="SYSelectBox01" >
										'.selectOption($jk, '', 'db').'
									</select>
								</td>
							</tr>
							
							
						</table>


						<div class="SYButtonArea">
							<input type="button" class="SYButtonWrite02" value="저장" onclick="admin_apply_save()">
							<input type="button" class="SYButtonCancel02" value="닫기" onclick="viewLayer(\'off\',\'popCommon\')">
						</div>

					</div>
				</div>
			</div>
			</form>
		';

		return_json('Y',$html);
		break;

	//어드민 id valid
	case "admin_id_valid" :
		if(empty($_POST['id'])) close();
		
		//중복id 검사
		$sql = "
			select count(*)
			from admin_member
			where
				adm_id = '".$_POST['id']."'
		";
		$cnt = my_read($sql, $myconn);

		if($cnt > 0 ) {
			return_json('N','중복된 아이디가 존재합니다.');
		}

		
		/// 특수문자 한번이상사용 체크
		$strcnt = substr_count($_POST['id'], "-", 0);
		$strcnt2 = substr_count($_POST['id'], "_", 0);
		$strcnt3 = substr_count($_POST['id'], ".", 0);

		if($strcnt > 1 || $strcnt2 > 1 || $strcnt3 > 1 || ($strcnt+ $strcnt2 +$strcnt3) > 1) {
			return_json('N','특수문자 _ - . 는 한번만 사용가능합니다.');
		}


		return_json('Y','사용가능한 아이디 입니다.');
		break;


	//관리자 등록신청 저장
	case "admin_apply" :
		if(empty($_POST['adm_id'])) close();

		$sql = "
			select count(*) from admin_member
			where
				adm_id = '".$_POST['adm_id']."'
		";
		$cnt = my_read($sql, $myconn);
		if($cnt > 0 ) {
			return_json('N','중복된 아이디가 존재합니다.');
		}

		my_begin_trans($myconn);


		//사용자등록하기
		$sql = "
			insert into admin_member
			set
				adm_id = '".$_POST['adm_id']."'
				, adm_name = '".dbEscape($_POST['adm_name'])."'
				, adm_pwd = aes_encrypt('".$_POST['pwd']."', '".$_INC['env']['encrypt_key']."') 
				, adm_part_seq = '".$_POST['part_seq']."'
				, cj_seq = '".$_POST['cj_seq']."'
				, email = ''
				, confirm_yn ='N'
				, regdt = now()
				, moddt = now()
		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			my_rollback($myconn, $sql);
			return_json('N', '관리자등록 실패');
		}


		$idx = my_insert_id($myconn);


		//부서권한을 사용자 권한으로 등록하기 admin_part_menu -> admin_member_dnb
		// 시스템 권한을 제외한 것으로 임의로 등록해줌 
		$sql = "

			insert into admin_member_dnb ( adm_seq, md_seq)
			SELECT  ".$idx." as adm_seq, c.md_seq
			FROM menu_gnb AS a
				INNER JOIN menu_snb AS b ON a.mg_seq = b.mg_seq
				INNER JOIN menu_dnb AS c ON b.ms_seq = c.ms_seq
			WHERE
				a.mg_seq <> 6
			
		";

		$rt = my_query($sql, $myconn);
		if(!$rt) {
			my_rollback($myconn, $sql);
			return_json('N', '권한등록 실패');
		}

		my_commit($myconn);
		return_json('Y');

		break;
		

		
	//// 국가확인 공통
	case "chk_nat_cd" :
		if(empty($_POST['nat_cd'])) close();

		$temp = explode("(", $_POST['nat_cd']);
		$nat_cd = str_replace(")","", $temp[1]);

		$sql = "
			select * from code_nation
			where
				nat_cd = '".$nat_cd."'
		";
		$data = my_select_one($sql, $myconn);

		if(empty($data['nat_cd'])) {
			return_json('N','해당 국가를 찾을 수 없음');
		}

		return_json('Y', $nat_cd);

		break;

	

	

	
}
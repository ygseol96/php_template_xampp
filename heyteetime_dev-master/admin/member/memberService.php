<?php

class MemberService {
    private $myDB;
    private $msDB;
    private static $ENCRYPT_KEY;

    public function __construct() {
        global $_INC;
        $this->myDB = myConn();
        $this->msDB = msConn();
        self::$ENCRYPT_KEY = $_INC['env']['encrypt_key'];
    }

    function getChannelList()
    {
        $query = "
        SELECT * FROM HTT_CLIENT
        WHERE VALID = 1 AND DELETED = 0
    ";

        return ms_select($query, $this->msDB);
    }

    function combineChannel(array $dataArr): array
    {
        $channelArr = $this->getChannelList();

        foreach ($dataArr as $key => $data) {
            foreach ($channelArr as $channel) {
                if($data['channel'] === $channel['CLIENT_CODE']) {
                    $dataArr[$key]['channel_name'] = $channel['CLIENT_NAME'];
                    break;
                }
            }
        }

        return $dataArr;
    }

    function getNationalityList()
    {
        $query = "
            SELECT
            nat_seq, nat_cd, nat_nm_kr
            FROM code_nation
            WHERE use_yn = 'Y' AND view_yn = 'Y'
        ";
        return my_select($query, myConn());
    }

    // 국가 전화 코드 조회
    public function getPhoneCodes() {
        $query = "
            SELECT
                  code_nation_phone.nat_cd
                , code_nation_phone.phone_code
                , code_nation.nat_nm_kr
            FROM code_nation_phone
            INNER JOIN code_nation
            ON code_nation.nat_cd = code_nation_phone.nat_cd AND code_nation.use_yn = 'Y' AND code_nation.view_yn = 'Y'
            WHERE code_nation_phone.use_yn = 'Y' AND code_nation_phone.view_yn = 'Y'
        ";

        return my_select($query, $this->myDB);
    }

    /**
     * 회원 목록 조회
     * 엑셀일 경우 -> 페이지네이션 X, 개인정보 마스킹처리 X
     */
    function getMemberList($param, bool $isExcel)
    {
        global $_INC;
        $key = self::$ENCRYPT_KEY;
        $whereQuery = "";

        // 가입일
        if(isset($param['reg_date'])) {
            $dateArr = json_decode($param['reg_date']);
            $whereQuery .= " AND DATE(reg_date) >= '". $dateArr[0]
                ."' AND DATE(reg_date) <= '". $dateArr[1] ."'";
        }

        // 상태
        if(isset($param['status']) && $param['status'] != "") {
            $status = implode(',', json_decode($param['status']));
            $whereQuery .= " AND status IN (". $status .") ";
        }

        //가입구분
        if(isset($param['social']) && $param['social'] != "" ) {

            $socialArr = array_map(function($social) {
                if($social == 'EMAIL') {
                    return " social_name IS NULL ";
                } else {
                    return " social_name = '" . $social . "' ";
                }
            }, json_decode($param['social']));

            $whereQuery .= " AND (" . implode(' OR ', $socialArr) . ")";
        }

        // 성별
        if(isset($param['sex']) && $param['sex'] != '') {
            $sexArr = json_decode($param['sex']);

            $whereQuery .= " AND ( ";
            $hasNone = false;
            if (in_array('none', $sexArr)) {
                $hasNone = true;
                $whereQuery .= " AES_DECRYPT(sex, '$key') IS NULL ";
                $sexArr = array_diff($sexArr, ['none']);
            }

            if(!empty($sexArr) && $hasNone) {
                $whereQuery .= " OR ";
            }
            if (!empty($sexArr)) {
                $sexArr = array_map(function($sex) {
                    return '"' . $sex . '"';
                }, $sexArr);

                $sexArr = implode(',', $sexArr);
                $whereQuery .= " AES_DECRYPT(sex, '$key') IN ($sexArr) ";
            }


            $whereQuery .= " ) ";

            /*if($param['sex'] == 'none') {
                $whereQuery .= " AND sex IS NULL ";
            } else {
                $whereQuery .= " AND sex = AES_ENCRYPT('". $param['sex'] ."', '". $_INC['env']['encrypt_key'] ."') ";
            }*/
        }

        // 국적
        if(isset($param['nationality_type']) && $param['nationality_type'] != '') {
            $nationalityIdx = implode(',', json_decode($param['nationality_type']));
            $whereQuery .= " AND  code_nation.nat_seq IN (". $nationalityIdx .") ";
        }

        //회원명, 이메일, 전화번호
        if(isset($param['text']) && $param['text'] != '') {
            $param['text'] = strtolower($param['text']);
            $whereQuery .= " AND ( 
                CONCAT(LOWER(CAST(AES_DECRYPT(first_name, '$key') AS CHAR )), LOWER(CAST(AES_DECRYPT(last_name, '$key') AS CHAR ))) LIKE '%". $param['text'] ."%' 
            OR LOWER(account) LIKE '%". $param['text'] ."%' 
            OR AES_DECRYPT(phone_number, '$key') LIKE '%". $param['text'] ."%'
            OR AES_DECRYPT(country_code, '$key') LIKE '%". $param['text'] ."%'
            OR CONCAT(AES_DECRYPT(country_code, '$key'), AES_DECRYPT(phone_number, '$key')) LIKE '%". $param['text'] ."%'
            ) ";
        }

        $query = "
            SELECT 
                  ht_user.idx
                , social_user_idx
                , account
                , member_type
                , `level`
                , TRIM(CAST(AES_DECRYPT(last_name, '$key') AS CHAR ))AS last_name
                , TRIM(CAST(AES_DECRYPT(first_name, '$key') AS CHAR ))AS first_name
                , AES_DECRYPT(birth, '$key') AS birth
                , CAST(AES_DECRYPT(nationality_type, '$key') AS CHAR) AS nationality_type
                , nat_nm_kr
                , AES_DECRYPT(country_code, '$key') AS country_code 
                , AES_DECRYPT(phone_number, '$key') AS phone_number 
                , CASE AES_DECRYPT(sex, '$key')
                    WHEN 'M' THEN '남'
                    WHEN 'F' THEN '여'
                    ELSE '미입력'
                  END AS sex 
                , CASE status
                    WHEN '0' THEN '탈퇴'
                    WHEN '1' THEN '정상'
                  END AS status
                , DATE_FORMAT(reg_date, '%y.%m.%d') AS reg_date
                , IFNULL(social_name, 'EMAIL') AS social_name
            FROM ht_user
            LEFT JOIN ht_social_user
            ON ht_user.social_user_idx = ht_social_user.idx
            LEFT JOIN code_nation
            ON code_nation.nat_seq = AES_DECRYPT(nationality_type, '$key')
            WHERE 1=1
            ". $whereQuery ."
            ORDER BY idx DESC
        ";
//        echo $query;

        if(!$isExcel) {
            $data['total'] = count(my_select($query, $this->myDB));
            $data['last_page'] = ceil($data['total'] / $param['size']);

            $offset = ($param['page'] - 1) * $param['size'];
            $limit = $param['size'];
            $query .= " LIMIT " . $offset . "," . $limit;
        }

        $data['data'] = my_select($query, $this->myDB);


        for ($i = 0; $i < count($data['data']); $i++) {
            $data['data'][$i]['social_name'] = $data['data'][$i]['social_name'] ? $_INC['social'][$data['data'][$i]['social_name']] : $_INC['social']['EMAIL'];

            if($data['data'][$i]['country_code'] && $data['data'][$i]['country_code'][0] !='+') {
                $data['data'][$i]['country_code'] = '+' .$data['data'][$i]['country_code'] ;
            }
        }

        if(!$isExcel) { // 마스킹 처리
            for ($i = 0; $i < count($data['data']); $i++) {
                $data['data'][$i]['account'] = accountMasking($data['data'][$i]['account']);
                $data['data'][$i]['name_kr'] = nameMasking($data['data'][$i]['first_name'].$data['data'][$i]['last_name']);
                $data['data'][$i]['phone_number'] = phoneMasking($data['data'][$i]['country_code'] .' ' .$data['data'][$i]['phone_number']);
            }
        }

        return $data;
    }

    function getMember($idx)
    {
        // 쿼리 작성
        global $_INC;
        $key = self::$ENCRYPT_KEY;

        $query = "
            SELECT 
                  ht_user.idx
                , social_user_idx
                , account
                , member_type
                , `level`
                , CAST(AES_DECRYPT(last_name, '$key') AS CHAR) AS last_name
                , CAST(AES_DECRYPT(first_name, '$key') AS CHAR) AS first_name
                , AES_DECRYPT(birth, '$key') AS birth
                , CAST(AES_DECRYPT(nationality_type, '$key') AS CHAR) AS nationality_type
                , nat_nm_kr
                , AES_DECRYPT(country_code, '$key') AS country_code
                , AES_DECRYPT(phone_number, '$key') AS phone_number
                , CASE AES_DECRYPT(sex, '$key')
                    WHEN 'M' THEN '남'
                    WHEN 'F' THEN '여'
                    ELSE '미입력'
                 END  AS sex
                , channel
                , case status
                    WHEN '0' then '탈퇴'
                    WHEN '1' then '정상'
                  END AS status
                , DATE_FORMAT(reg_date, '%Y.%m.%d %H:%i:%s') AS reg_date
                , ifnull(DATE_FORMAT(out_date, '%Y.%m.%d %H:%i:%s'), '-') AS out_date
                , social_name
            FROM ht_user
            LEFT JOIN ht_social_user
            ON ht_user.social_user_idx = ht_social_user.idx
            LEFT JOIN code_nation
            on code_nation.nat_seq = AES_DECRYPT(nationality_type, '$key')
            WHERE ht_user.idx = " . $idx  ."
        ";

        $data = my_select_one($query, $this->myDB);

        $data['social_name'] = $data['social_name'] ? $_INC['social'][$data['social_name']] : $_INC['social']['EMAIL'];

        if(!is_null($data['country_code']) && $data['country_code'][0] !='+') {
            $data['country_code'] = '+' .$data['country_code'];
        }

        $data['phone_number'] = $data['phone_number'] ?? '-';

        return $data;
    }

    /***************************** 문의 ***************************/
    function getInquiryList(array $param, bool $isPagination)
    {
        global $_INC;
        $key = self::$ENCRYPT_KEY;
        $whereQuery = "";

        // 문의일 & 답변일
        if(isset($param['reg_date']) && isset($param['answer_date'])) {
            $reg_dateArr = json_decode($param['reg_date']);
            $answer_dateArr = json_decode($param['answer_date']);
            $whereQuery .=
                " AND (
                   (DATE(ht_inquiry.reg_date) >= '". $reg_dateArr[0] ."' AND DATE(ht_inquiry.reg_date) <= '". $reg_dateArr[1] ."')
                OR (DATE(ht_inquiry.answer_date) >= '". $answer_dateArr[0] ."' AND DATE(ht_inquiry.answer_date) <= '". $answer_dateArr[1] ."')
            )";
        }

        // 문의 구분
        if(isset($param['gubun']) && $param['gubun'] != "[]") {
            $gubun = implode(',', json_decode($param['gubun']));
            $whereQuery .= " AND ht_inquiry.gubun IN (" . $gubun . ") ";
        }

        // 답변 여부
        if(isset($param['status']) && $param['status'] != 'all') {
            $whereQuery .= " AND ht_inquiry.status =". $param['status'];
        }

        // 문의 제목
        if(isset($param['subject']) && $param['subject'] != '') {
            $whereQuery .= " AND ht_inquiry.subject LIKE '%". $param['subject'] ."%' ";
        }

        // 문의자
        if(isset($param['name_kr']) && $param['name_kr'] != '') {
            $whereQuery .= " AND CAST(AES_DECRYPT(name_kr, '$key') AS CHAR ) LIKE '%". $param['name_kr'] ."%'";
        }

        $totalQuery = "
            SELECT COUNT(*) as count FROM ht_inquiry 
            LEFT JOIN ht_user
            ON ht_inquiry.user_idx = ht_user.idx
            WHERE 1=1 " . $whereQuery;

        $limitQuery = "";
        if($isPagination) {
            $data['total'] = intval(my_select_one($totalQuery, $this->myDB)['count']);
            $data['last_page'] = ceil($data['total'] / $param['size']);

            $offset = ($param['page'] - 1) * $param['size'];
            $limit = $param['size'];
            $limitQuery = 'LIMIT '. $offset  .', '. $limit;
        }

        $query = "
            SELECT
                ht_inquiry.idx, ht_inquiry.user_idx, ht_inquiry.gubun, ht_inquiry.subject, ht_inquiry.status
                , DATE_FORMAT(ht_inquiry.reg_date, '%Y.%m.%d') AS reg_date
                , CASE ht_inquiry.answer_date
                    WHEN '0000-00-00 00:00:00' THEN ''
                    ELSE DATE_FORMAT(ht_inquiry.answer_date, '%Y.%m.%d')
                    END AS answer_date
                , account
                , CAST(AES_DECRYPT(name_kr, '$key') AS CHAR )AS name_kr
            FROM ht_inquiry
            LEFT JOIN ht_user
            ON ht_inquiry.user_idx = ht_user.idx
            WHERE 1=1
            ". $whereQuery ."
            ORDER BY ht_inquiry.idx DESC
            ". $limitQuery ."
        ";

        $data['data'] = my_select($query,$this->myDB);


        foreach ($data['data'] as $key1 => $value) {
            foreach ($_INC['inquiry_status'] as $key2 => $status) {
                if($value['status'] == $key2) {
                    $data['data'][$key1]['status_name'] = $status;
                }
            }

            foreach ($_INC['inquiry_gubun'] as $key2 => $status) {
                if($value['gubun'] == $key2) {
                    $data['data'][$key1]['gubun_name'] = $status;
                }
            }
        }

        return $data;
    }

    function getInquiryDetail(int $idx)
    {
        global $_INC;
        $key = self::$ENCRYPT_KEY;

        $query = "
            SELECT
              ht_inquiry.idx, ht_inquiry.user_idx
            , ht_inquiry.gubun, ht_inquiry.subject, ht_inquiry.content
            , ht_inquiry.status
            , DATE_FORMAT(ht_inquiry.reg_date, '%Y.%m.%d') AS reg_date
            , ht_inquiry.answer, ht_inquiry.a_content
            , CASE ht_inquiry.answer_date
                WHEN '0000-00-00 00:00:00' THEN ''
                ELSE DATE_FORMAT(ht_inquiry.answer_date, '%Y.%m.%d')
                END AS answer_date
            , account , CAST(AES_DECRYPT(name_kr, '$key') AS CHAR )AS name_kr
            FROM ht_inquiry
            LEFT JOIN ht_user
            ON ht_inquiry.user_idx = ht_user.idx
            WHERE ht_inquiry.idx = $idx
        ";

        $data = my_select_one($query, $this->myDB);

        foreach ($_INC['inquiry_status'] as $key => $status) {
            if($data['status'] == $key) {
                $data['status_name'] = $status;
                break;
            }
        }

        foreach ($_INC['inquiry_gubun'] as $key => $status) {
            if($data['gubun'] == $key) {
                $data['gubun_name'] = $status;
                break;
            }
        }

        $data['inquiry_files'] = $this->getInquiryFiles($idx, 'Q');
        $data['answer_files'] = $this->getInquiryFiles($idx, 'A');

        return $data;
    }

    function getInquiryFiles(int $idx, string $type)
    {
        $query = "
            SELECT
                idx, inquiry_idx, gubun, ori_name, up_name, file_ext
            FROM ht_inquiry_files
            WHERE inquiry_idx = $idx AND gubun = '$type'
        ";

        return my_select($query, $this->myDB);
    }

    function patchInquiryResponse(array $param, $file=null, $path=null)
    {
        $query = "
            UPDATE ht_inquiry
                SET a_content = '". $param['content'] ."',
                    answer = '". $_SESSION['admin_name'] ."',
                    answer_date = now(),
                    up_date = now(),
                    status = 2
            WHERE ht_inquiry.idx = ". $param['idx'] ."
        ";

        my_begin_trans($this->myDB);
        if(my_query($query, $this->myDB)) {
            my_commit($this->myDB);

            return array('status' => true);

        } else {
//        my_rollback($query);
            return array('status'=>false, 'code'=> 500, 'msg'=> '오류가 발생했습니다.');
        }
    }

    function postInquiryFile($idx, $file, $path)
    {
        $filename= pathinfo($file['name'], PATHINFO_FILENAME);
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

        $query = "
            INSERT INTO ht_inquiry_files
            (inquiry_idx, gubun, ori_name, up_name, file_ext, file_size, reg_date) VALUES
            ($idx, 'A', '$filename', '$path', '$extension', '". $file['size'] ."' , now())
        ";

        my_begin_trans($this->myDB);
        if(my_query($query, $this->myDB)) {
            my_commit($this->myDB);

            return array('status' => true, 'idx' => my_insert_id($this->myDB));
        } else {
            return array('status'=>false, 'code'=> 500, 'msg'=> '파일정보를 저장하는 데 실패했습니다.');
        }

    }

    public function resetPassword($memberId) {
        // 랜덤 비밀번호 생성
        $newPassword = $this->generateRandomPassword();

        // 비밀번호 암호화 (예: 비밀번호를 암호화하여 저장)
        $encryptedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

        // 비밀번호 업데이트 쿼리
        $query = "
            UPDATE ht_user
            SET passwd = '$encryptedPassword',
                up_date = NOW()
            WHERE idx = $memberId
        ";

        $result = my_query($query, $this->myDB);

        if ($result) {
            return $newPassword;
        } else {
            return false;
        }
    }

    private function generateRandomPassword($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function sendEmailToMember($email, $newPassword) {
        $subject = "Your password has been reset";
        $message = "Your new password is: $newPassword";
        $headers = "From: no-reply@example.com\r\n";

        mail($email, $subject, $message, $headers);
    }

    /****************************  쿠폰 시작 *************************/


    /**
     * 쿠폰 등록
     */
    function insertCoupon(array $param)
    {
        $is_count = isset($param['is_count'])?$param['is_count']:0;
        $count_limits = $param['count_limit'] === '' ? 0 : $param['count_limit'];
        $issue_date = isset($param['issue_date']) ? $param['issue_date'] : '';
        $valid_date = isset($param['valid_date']) ? $param['valid_date'] : '';

        $coupon_number = isset($param['coupon_number']) ? $param['coupon_number'] : '';
        $lang_type = isset($param['lang_type']) ? $param['lang_type'] : '';


        $is_issue = $issue_date === '' ? 1 : 0;
        $is_valid = $valid_date === '' ? 1 : 0;

        $query = "
            INSERT INTO ht_coupon SET
                coupon_kind = ".$param['coupon_kind'].",
				coupon_type = ".$param['coupon_type'].",
				name = '".$param['names']."',
				use_target = ".$param['use_target'].",
				use_channel = ".$param['use_channel'].",
				use_type = ".$param['use_type'].",
				coupon_number = '".$coupon_number."',
				lang_type = '".$lang_type."',
				is_count = ".$is_count.",
				count_limit = ".$count_limits.",
                is_issue = ".$is_issue.",
				issue_date = '".$issue_date."',
				is_valid = ".$is_issue.",
				valid_date = '".$valid_date."',
				status = '1',
				reg_date = '".date("Y-m-d h:i:s")."',
				up_date = '".date("Y-m-d h:i:s")."' ";
	/*
		$langs = explode(",", $param['langs']);

		for($i=0; $i<count($langs); $i++){

			$coupon_name = $param[$langs[$i].'_coupon_name'] === '' ? 0 : $param['count_limit'];
			$count_limits = $param['count_limit'] === '' ? 0 : $param['count_limit'];
			$count_limits = $param['count_limit'] === '' ? 0 : $param['count_limit'];


			$query = "
            INSERT INTO ht_coupon_lang SET
                coupon_idx = ".$param['coupon_kind'].",
				language_idx = ".$param['coupon_type'].",
				coupon_name = '".$param[$langs[$i].'_coupon_name']."',
				discount_kind = ".$param['use_target'].",
				discount_price = ".$param['use_channel'].",
				is_decimal = ".$param['use_type'].",
				min_price = ".$param['min_price'].",
				max_discount_price = ".$coupon_number." ";
		}*/
        if( my_query($query, $this->myDB) ) {
            return 1;
        } else {
            return 0;
        }
    }


	/**
     * 쿠폰관리 리스트
     */
    function getCouponList(array $param, bool $isPagination)
    {
        global $_INC;
        $whereQuery = "";

        //  수령일 사용일
        //if(isset($param['reg_date']) && isset($param['answer_date'])) {
		if(isset($param['reg_date'])) {
            $reg_dateArr = json_decode($param['reg_date']);
            //$answer_dateArr = json_decode($param['answer_date']);
            $whereQuery .=
                " AND (
                   (DATE(reg_date) >= '". $reg_dateArr[0] ."' AND DATE(reg_date) <= '". $reg_dateArr[1] ."')
            )";
        }

		//지급사유
		/*
        if(isset($param['status']) && $param['status'] != "[]") {
            $status = implode(',', json_decode($param['status']));
            $whereQuery .= " AND point_kind IN (" . $status . ") ";
        }*/

        $totalQuery = "
        SELECT COUNT(*) as count FROM ht_coupon
        WHERE 1=1 " . $whereQuery;

        $limitQuery = "";
        if($isPagination) {
            $data['total'] = intval(my_select_one($totalQuery, $this->myDB)['count']);
            $data['last_page'] = ceil($data['total'] / $param['size']);

            $offset = ($param['page'] - 1) * $param['size'];
            $limit = $param['size'];
            $limitQuery = 'LIMIT '. $offset  .', '. $limit;
        }

        $query = "
        SELECT *
    FROM ht_coupon        
        WHERE 1=1
        ". $whereQuery ."
        ORDER BY idx desc
        ". $limitQuery ."
    ";

        //$data['data'] = my_select($query,$this->myDB);

		$result = my_select($query,$this->myDB);

		$data = array();
		$i = 1;
		if( !empty( $result ) ) {
			foreach ($result as $key => $item) {

				$kind = ($item['coupon_kind'] == 1) ? "예약권" : (($item['coupon_kind'] == 2) ? "금액권" : (($item['coupon_kind'] == 3) ? "할인권" : "기타"));
				$division = ($item['coupon_type'] == 1) ? "회원가입" : (($item['coupon_type'] == 2) ? "상품구매" : (($item['coupon_type'] == 3) ? "이벤트" : "기타"));
				$status = $item['status'] == 1 ? "정상" : "발행중지";

				$data['data'][$key]['number'] = $i;
				$data['data'][$key]['kind'] = $kind;
				$data['data'][$key]['division'] = $division;
				$data['data'][$key]['coupon'] = $item['name'];
				$data['data'][$key]['expiry'] = $item['issue_date'];
				$data['data'][$key]['period'] = $item['valid_date'];
				$data['data'][$key]['state'] = $status;
				$data['data'][$key]['minimum'] = 1;
				$data['data'][$key]['amount'] = $item['count_limit'];
				$data['data'][$key]['person'] = $item['reg_name'];
				$data['data'][$key]['date'] = str_replace('-', '.', SUBSTR( $item['reg_date'], 0, 10 ) );
				$i++;
			}
		}

        return $data;
    }
	/****************************  쿠폰 끝  *************************/




	/**************************** 마일리지 시작 **********************/

	/**
     * 마일리지 지급사유 리스트에 표시
     */
	function getSelectKindList()
    {
        $query = " SELECT * FROM ht_point_kind WHERE language_idx = 1 group by point_kind_key_idx ";

        return my_select($query, $this->myDB);
    }

    function getLanguageList() {
        $query = "SELECT * FROM ht_language ORDER BY display_order ASC";
        return my_select($query, $this->myDB);
    }


    public function searchMembers($query) {
        $escapedQuery = $this->myDB->real_escape_string($query);
        $sql = "
            SELECT 
                idx,
                CAST(AES_DECRYPT(name_kr, 'AGL_AES_s9s8yBQ2') AS CHAR) AS name,
                account
            FROM ht_user
            WHERE CAST(AES_DECRYPT(name_kr, 'AGL_AES_s9s8yBQ2') AS CHAR) LIKE '%$escapedQuery%'
            LIMIT 10
        ";
        return my_select($sql, $this->myDB);
    }


    /**
     * 마일리지 리스트
     */
    function getMileageList(array $param)
    {
        global $_INC;
        $whereQuery = "";

        // 수령일 사용일
        if (isset($param['reg_date'])) {
            $reg_dateArr = json_decode($param['reg_date']);
            $whereQuery .= " AND (DATE(ht_point.reg_date) >= '" . $reg_dateArr[0] . "' AND DATE(ht_point.reg_date) <= '" . $reg_dateArr[1] . "')";
        }

        // 지급사유
        if (isset($param['status']) && $param['status'] != "") {
            $status = implode(',', json_decode($param['status']));
            $whereQuery .= " AND ht_point.point_kind IN (" . $status . ") ";
        }

        // 수령자 조회
        if (isset($param['recipient']) && $param['recipient'] != '') {
            $recipient = $param['recipient'];
            $whereQuery .= " AND CAST(AES_DECRYPT(ht_point_issue_target.user_name, 'AGL_AES_s9s8yBQ2') AS CHAR) LIKE '%$recipient%'";
        }

        // 전체 데이터 개수 조회
        $totalQuery = "
        SELECT COUNT(*) as count 
        FROM ht_point 
        JOIN ht_point_issue_target ON ht_point.user_idx = ht_point_issue_target.user_idx
        JOIN ht_user ON ht_point.user_idx = ht_user.idx
        WHERE 1=1 " . $whereQuery;


        $totalResult = my_select_one($totalQuery, $this->myDB);
        $total = intval($totalResult['count']);

        // 페이지네이션 처리
        $offset = ($param['page'] - 1) * $param['size'];
        $limit = $param['size'];
        $last_page = ceil($total / $limit);

        // 실제 데이터 조회 쿼리
        $query = "
        SELECT DISTINCT ht_point.*, 
        CAST(AES_DECRYPT(ht_point_issue_target.user_name, 'AGL_AES_s9s8yBQ2') AS CHAR) AS issue_target_user_name,
        CAST(AES_DECRYPT(ht_user.name_kr, 'AGL_AES_s9s8yBQ2') AS CHAR) AS user_name_kr,
        ht_user.account,
        (SELECT kind_name FROM ht_point_kind WHERE ht_point.point_kind = point_kind_key_idx AND language_idx = 1) AS kind_name
        FROM ht_point
        LEFT JOIN ht_point_issue_target ON ht_point.user_idx = ht_point_issue_target.user_idx
        LEFT JOIN ht_user ON ht_point.user_idx = ht_user.idx
        WHERE 1=1
        " . $whereQuery . "
        ORDER BY ht_point.idx DESC
        LIMIT $offset, $limit
        ";

        $result = my_select($query, $this->myDB);
        $data = array();
        $i = 1;
        if (!empty($result)) {
            foreach ($result as $key => $item) {
                if (isset($data[$item['idx']])) {
                    continue; // 이미 추가된 항목은 건너뛴다
                }
                $kind = $item['kind_name'];
                $status = ($item['status'] == 0) ? "취소" : (($item['status'] == 1) ? "대기" : (($item['status'] == 2) ? "적립" : "사용"));
                $reason = "<a href='./member_mileage_detail.php' class='text-primary underline'>" . $kind . "</a>";
                $button = "<button class='btn btn-sm btn-danger'>지급취소</button>";

                $data[$item['idx']] = array(
                    'number' => $i,
                    'idx' => $item['idx'],
                    'id' => $item['account'],
                    'name' => $item['user_name_kr'],
                    'reason' => $reason,
                    'point_kind' => $kind,
                    'event' => '',
                    'receipt' => str_replace('-', '.', substr($item['reg_date'], 0, 10)),
                    'receive' => $item['point'], // 수령액
                    'state' => $status,
                    'button' => $button,
                    'date' => str_replace('-', '.', substr($item['reg_date'], 0, 10))
                );
                $i++;
            }
        }
        $response = array('data' => array_values($data));

        return $response;

    }

    // 수령액 초기화
    public function resetReceive($idx)
    {

        $query = "UPDATE ht_point SET point = 0 WHERE idx = ?";
        $stmt = $this->myDB->prepare($query);
        $stmt->bind_param('i', $idx);
        $result = $stmt->execute();

        if ($result) {
            return array('status' => 'success');
        } else {
            return array('status' => 'error', 'message' => 'Failed to reset receive.');
        }
    }

    /**
     * 회원정보 수정
     */
    public function updateMember(array $data) {

        // validation --------------------------------------- start
        if(!isset($data['memberId']) && !$data['memberId']) {
            return array('status'=>false, 'code'=>400, 'msg'=>'인덱스값이 없습니다.');
        }

        // 국가코드와 전화번호를 변경할 때는 모두 값이 있어야 한다.
        if (isset($data['country_code']) && isset($data['phone_number'])) {
            if ($data['country_code'] || $data['phone_number']) {
                if(!$data['country_code'] || !$data['phone_number'])
                return array('status'=>false, 'code'=>400, 'msg'=>'전화번호는 국가코드와 전화번호를 모두 입력해야 합니다.');
            }
        }
        // validation --------------------------------------- end

        $query = "
            UPDATE ht_user
            SET
                  country_code = AES_ENCRYPT('". $data['country_code'] ."', '" . self::$ENCRYPT_KEY . "')
                , phone_number = AES_ENCRYPT('". $data['phone_number'] ."', '" . self::$ENCRYPT_KEY . "') 
                , nationality_type = AES_ENCRYPT('". $data['nationality_type'] ."', '" . self::$ENCRYPT_KEY . "')
                , sex = AES_ENCRYPT('". $data['sex'] ."', '" . self::$ENCRYPT_KEY . "')
            WHERE idx = ". $data['memberId'] ."
        ";

        my_begin_trans($this->myDB);
        if(my_query($query, $this->myDB)) {
            my_commit($this->myDB);
            return array('status'=>true, 'msg'=>'회원 정보가 성공적으로 수정되었습니다.');
        } else {
            db_close();
            return array('status'=>false, 'code'=>500, 'msg'=>'쿼리 실행 중 오류가 발생했습니다.');
        }
    }

    /**
     * 마일리지 등록
     */
    function insertMileage(array $param)
    {
        // 트랜잭션 시작
        $this->myDB->begin_transaction();

        try {
            // ht_point_issue 테이블에 데이터 삽입
            $query = "
            INSERT INTO ht_point_issue SET
                point_kind_key_idx = {$param['point_kind']},
                point_price = {$param['point']},
                is_issue = {$param['payment_1']}
        ";
            my_query($query, $this->myDB);
            $point_issue_id = my_insert_id($this->myDB);

            // ht_point_issue_target 테이블에 데이터 삽입
            $user_idx = explode(",", $param['member_list']);
            foreach ($user_idx as $idx) {
                // user_name을 ht_user 테이블에서 가져오기
                $user_query = "SELECT AES_DECRYPT(name_kr, 'AGL_AES_s9s8yBQ2') AS user_name FROM ht_user WHERE idx = $idx";
                $user_result = my_select_one($user_query, $this->myDB);
                if (!$user_result) {
                    throw new Exception("User not found: $idx");
                }
                $user_name = $user_result['user_name'];

                $query = "
                INSERT INTO ht_point_issue_target SET
                    point_issue_idx = {$param['point_kind']},
                    user_idx = $idx,
                    user_name = AES_ENCRYPT('$user_name', 'AGL_AES_s9s8yBQ2')
            ";
                if (!my_query($query, $this->myDB)) {
                    throw new Exception("Error inserting into ht_point_issue_target");
                }
            }

            // ht_point 테이블에 데이터 삽입
            foreach ($user_idx as $idx) {
                $query = "
                INSERT INTO ht_point SET
                    user_idx = $idx,
                    point_kind = {$param['point_kind']},
                    point = {$param['point']},
                    status = '1',
                    reg_date = '" . date("Y-m-d h:i:s") . "',
                    reg_name = '" . $_SESSION['admin_id'] . "',
                    up_date = '" . date("Y-m-d h:i:s") . "'
            ";
                my_query($query, $this->myDB);
            }

            // 트랜잭션 커밋
            $this->myDB->commit();
            return ['success' => true];
        } catch (Exception $e) {
            // 트랜잭션 롤백
            $this->myDB->rollback();
            return ['success' => false, 'message' => $e->getMessage()];
        }

    }


	/**
     * 마일리지 지급사유 등록
     */
    function insertKindMileage(array $param)
    {
		$querys = "INSERT INTO ht_point_kind_key () VALUES () ";
		my_query($querys, $this->myDB);
		$point_kind_key = my_insert_id($this->myDB);


		if($param['KO']){ //한국
			$query = "
				INSERT INTO ht_point_kind SET
					point_kind_key_idx = ".$point_kind_key.",
					language_idx = 1,
					kind_name = '".$param['KO']."' ";

			 my_query($query, $this->myDB);
		}
		if($param['EN']){ //영어
			$query = "
				INSERT INTO ht_point_kind SET
					point_kind_key_idx = ".$point_kind_key.",
					language_idx = 2,
					kind_name = '".$param['EN']."' ";

			 my_query($query, $this->myDB);
		}
		if($param['ES']){ //스페인
			$query = "
				INSERT INTO ht_point_kind SET
					point_kind_key_idx = ".$point_kind_key.",
					language_idx = 3,
					kind_name = '".$param['ES']."' ";

			 my_query($query, $this->myDB);
		}
		if($param['JA']){ //일본
			$query = "
				INSERT INTO ht_point_kind SET
					point_kind_key_idx = ".$point_kind_key.",
					language_idx = 6,
					kind_name = '".$param['JA']."' ";

			 my_query($query, $this->myDB);
		}
		if($param['CN']){ //중국
			$query = "
				INSERT INTO ht_point_kind SET
					point_kind_key_idx = ".$point_kind_key.",
					language_idx = 4,
					kind_name = '".$param['CN']."' ";

			 my_query($query, $this->myDB);
		}

    }

	/**************************** 마일리지 끝 **********************/

}

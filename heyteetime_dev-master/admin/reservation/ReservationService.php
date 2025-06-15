<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/../func.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mail/mail_send.php';
class ReservationService
{
    private $myDB;
    private $msDB;
    private static $ENCRYPT_KEY;

    public function __construct() {
        global $_INC;
        $this->myDB = myConn();
        $this->msDB = msConn();
        self::$ENCRYPT_KEY = $_INC['env']['encrypt_key'];
    }

    /**
     * 예약목록 조회
     */
    function getReservationList(array $param, bool $isExcel): array
    {
        global $_INC;

        /************ 필터링 ************/
        $whereQuery = "";

        //예약상태
        if(isset($param['reservationStatus']) && $param['reservationStatus'] != '') {
            $statusArr = json_decode($param['reservationStatus']);
            $status = implode(',', $statusArr);
            $whereQuery .= " AND booking_status IN (". $status .") ";
        }

        // 예약일
        if(isset($param['reg_date']) && $param['reg_date'] != '[]' && $param['reg_date'] != '[""]') {
            $dateArr = json_decode($param['reg_date']);
            $whereQuery .= " AND DATE(play_date) >= '". $dateArr[0]
                ."' AND DATE(play_date) <= '". $dateArr[1] ."'";
        }

        // 예약정보
        // 지역 - 대륙
        if(isset($param['continent']) && $param['continent'] != 'all' && $param['continent'] != ''){
            $whereQuery .= " AND continent_idx = '". $param['continent'] ."' ";
        }

        // 지역 - 국가
        if(isset($param['nation']) && $param['nation'] != 'all' && $param['nation'] != ''){
            $whereQuery .= " AND nation_idx = '". $param['nation'] ."' ";
        }

        // 지역 - 주, 도시(협의전)

        // 예약번호
        if(isset($param['bookingNumber']) && $param['bookingNumber'] != '') {
            $whereQuery .= " AND booking_number LIKE '%". $param['bookingNumber'] ."%' ";
        }

        // 결제상태
        // 결제수단
        // 결제 금액

        // 마일리지
        if(isset($param['isMileageUsed']) && $param['isMileageUsed'] != '') {
            $isMileageUsed = json_decode($param['isMileageUsed']);
            $conditions = [];

            if (in_array('Y', $isMileageUsed)) {
                $conditions[] = "total_point_discount > 0";
            }

            if (in_array('N', $isMileageUsed)) {
                $conditions[] = "total_point_discount = 0 OR total_coupon_discount IS NULL";
            }

            if (!empty($conditions)) {
                $whereQuery .= " AND (" . implode(' OR ', $conditions) . ")";
            }
        }

        // 쿠폰
        if(isset($param['isCouponUsed']) && $param['isCouponUsed'] != '') {
            $isCouponUsed = json_decode($param['isCouponUsed']);
            $conditions = [];

            if (in_array('Y', $isCouponUsed)) {
                $conditions[] = "total_coupon_discount > 0";
            }

            if (in_array('N', $isCouponUsed)) {
                $conditions[] = "total_coupon_discount = 0 OR total_coupon_discount IS NUll";
            }

            if (!empty($conditions)) {
                $whereQuery .= " AND (" . implode(' OR ', $conditions) . ")";
            }
        }

        // 상품구분
        if(isset($param['productType']) && $param['productType'] != '') {
            $typeArr = json_decode($param['productType']);
            $type = implode(',', $typeArr);
            $whereQuery .= " AND prod_kind IN (". $type .")";
        }

        // 상품옵션

        // 예약상품명
        if(isset($param['productName']) && $param['productName'] != '') {
            $whereQuery .= " AND prod_name LIKE '%". $param['productName'] ."%' ";
        }

        // 예약 인원수
        if(isset($param['totalPartner']) && $param['totalPartner'] != '') {
            $totalPartner = json_decode($param['totalPartner']);
            $totalPartner = implode(',', $totalPartner);
            $whereQuery .= " AND person_count IN (". $totalPartner .") ";
        }

        // 내장자 정보 입력여부
        if(isset($param['isPartnerInfoEntered']) && $param['isPartnerInfoEntered'] != '') {

            $isPartnerInfoEntered = json_decode($param['isPartnerInfoEntered']);
            $conditions = [];

            if (in_array('Y', $isPartnerInfoEntered)) {
                $conditions[] = "total_input_partner = person_count";
            }

            if (in_array('N', $isPartnerInfoEntered)) {
                $conditions[] = "total_input_partner <> person_count";
            }

            if (!empty($conditions)) {
                $whereQuery .= " AND (" . implode(' OR ', $conditions) . ")";
            }
        }

        // 예약자명 연락처
        if(isset($param['reservationInfo']) && $param['reservationInfo'] != '') {
            if(is_numeric($param['reservationInfo'])) { // 숫자이면 연락처로 검색
                $whereQuery .= " AND rev_phone_number LIKE '%". $param['reservationInfo'] ."%' ";
            } else  { //문자이면 예약자명으로 검색
                $whereQuery .= " AND rev_name LIKE '%". $param['reservationInfo'] ."%' ";
            }
        }

        // 동반자명
        if(isset($param['partnerInfo']) && $param['partnerInfo'] != '') {
            $whereQuery .= " AND partner_name LIKE '%". $param['partnerInfo'] ."%'";
        }

        $query = "
            SELECT
                *
            FROM (
                SELECT
                    -- ht_booking
                      ht_booking.idx
                    , ht_booking.user_idx
                    , AES_DECRYPT(ht_booking.rev_name, 'AGL_AES_s9s8yBQ2') AS rev_name
                    , AES_DECRYPT(ht_booking.rev_country_code, 'AGL_AES_s9s8yBQ2') AS rev_country_code
                    , rev_nation.nat_nm_kr AS rev_country_name
                    , AES_DECRYPT(ht_booking.rev_phone_number, 'AGL_AES_s9s8yBQ2') AS rev_phone_number
        
                    -- ht_booking_tee
                    , ht_booking_tee.idx AS tee_idx
                    , ht_booking_tee.currency_code
                    , ht_booking_tee.booking_number
                    , ht_booking_tee.prod_id, ht_booking_tee.prod_kind, ht_booking_tee.prod_name
                    , ht_booking_tee.play_date, ht_booking_tee.time_id, ht_booking_tee.tee_time
                    , ht_booking_tee.course_id, ht_booking_tee.course_name
                    , ht_booking_tee.prod_cnt
                    , ht_booking_tee.person_count AS person_count
                    , ht_booking_tee.regular_price AS regular_price
                    , ht_booking_tee.sale_price AS sale_price
                    , ht_booking_tee.status AS booking_status
                    , ht_booking_tee.is_flight
                    , ht_booking_tee.is_locker
                    , ht_booking_tee.is_cart
                    , ht_booking_tee.is_caddie
                    , ht_booking_tee.is_club
                    , ht_booking_tee.is_hotel
                    , ht_booking_tee.is_pickup
                    , DATE_FORMAT(ht_booking_tee.fix_date, '%y.%m.%d') AS fix_date
                    , DATE_FORMAT(ht_booking_tee.reg_date, '%y.%m.%d') AS reg_date
                    , CASE ht_booking_tee.status
                        WHEN 0 -- 예약취소
                            THEN ifnull(DATE_FORMAT(ht_booking_tee.cancel_date, '%y.%m.%d'), '-' )
                        ELSE
                            if(TIMESTAMPDIFF(HOUR, now(), ht_booking_tee.cancel_use_date) > 0, concat('취소 -', TIMESTAMPDIFF(HOUR, now(), ht_booking_tee.cancel_use_date), '시간'), '-')
                        END AS cancel_date
                    , code_continent.cd AS continent_idx
                    , code_continent.cd_name AS continent_name
                    , code_nation.nat_seq AS nation_idx
                    , code_nation.nat_nm_kr AS nation_name
                    , state_code
                    , city_code
    
                    -- ht_payment
                    , SUM(ht_payment.price) AS price
                    , ht_payment.price_currency AS price_currency
                    , ht_payment.payment_method AS payment_method
                    , ht_payment.status AS payment_status
                    , SUM(ht_payment.coupon_discount) AS total_coupon_discount
                    , IF(ht_payment.user_coupon_idx !=0 , ifnull(ht_user_coupon.name , '-'), '-')  AS used_coupon_name
                    , SUM(ht_payment.point_discount) AS total_point_discount
                    , IF(SUM(ht_payment.point_discount)>0, SUM(ht_payment.point_discount), '미사용') AS is_point_used
    
                      -- ht_booking_partner_info
                    ,  partner_name
                    , total_input_partner
                    , IF(person_count = total_input_partner, '입력완료', '미입력') AS partner_info_input_status
        
                FROM ht_booking
                LEFT JOIN code_nation AS rev_nation -- 예약자 국적
                ON AES_DECRYPT(ht_booking.rev_country_code, 'AGL_AES_s9s8yBQ2') = rev_nation.nat_cd
                LEFT JOIN ht_booking_tee            -- 예약상품
                ON ht_booking.idx = ht_booking_tee.booking_idx
                LEFT JOIN code_continent            -- 예약상품 > 대륙
                ON ht_booking_tee.continent_code = code_continent.cd
                LEFT JOIN code_nation               -- 예약상품 > 국가
                ON ht_booking_tee.nation_code = code_nation.nat_seq
                LEFT JOIN ht_payment                -- 결제
                ON ht_booking.idx = ht_payment.booking_idx
                LEFT JOIN ht_user_coupon            -- 결제 > 쿠폰
                ON ht_payment.user_coupon_idx = ht_user_coupon.coupon_idx
                LEFT JOIN (                         -- 내장자
                    SELECT
                          booking_tee_idx
                        , group_concat(AES_DECRYPT(last_name, 'AGL_AES_s9s8yBQ2')) AS last_name
                        , group_concat(AES_DECRYPT(first_name, 'AGL_AES_s9s8yBQ2')) AS first_name
                        , concat(group_concat(AES_DECRYPT(last_name, 'AGL_AES_s9s8yBQ2')), group_concat(AES_DECRYPT(first_name, 'AGL_AES_s9s8yBQ2'))) AS partner_name
                        , count(*) AS total_input_partner
                    FROM ht_booking_partner_info
                    GROUP BY booking_tee_idx
                ) AS ht_booking_partner_info
                ON ht_booking_tee.idx = ht_booking_partner_info.booking_tee_idx
                GROUP BY idx, tee_idx
                ORDER BY idx DESC
            ) AS reservation
            WHERE 1=1
            ". $whereQuery ."
            GROUP BY idx, tee_idx
            ORDER BY idx DESC
        ";

        if(!$isExcel) {
            $data['total'] = count(my_select($query, $this->myDB));
            $data['last_page'] = ceil($data['total'] / $param['size']);

            $offset = ($param['page'] - 1) * $param['size'];
            $limit = $param['size'];

            $query .= " LIMIT " . $offset . "," . $limit;
        }

        $data['data'] =my_select($query, $this->myDB);
        $data['data'] = $this->getSelectedOptionAsString($data['data']);

        // 데이터 가공
        for ($i = 0; $i < count($data['data']); $i++) {
            // 예약상태
            $data['data'][$i]['booking_status'] = $_INC['reservation_type'][$data['data'][$i]['booking_status']];

            //결제상태
            $data['data'][$i]['payment_status'] = $data['data'][$i]['payment_status'] ? $_INC['payment_type'][$data['data'][$i]['payment_status']] : '-';

            // 가격
            $data['data'][$i]['regular_price'] = addCommasToNumberString($data['data'][$i]['regular_price']);
            $data['data'][$i]['sale_price'] = addCommasToNumberString($data['data'][$i]['sale_price']);
            $data['data'][$i]['price'] = addCommasToNumberString($data['data'][$i]['price']);
        }

        // 없는 값은 - 처리
        for ($i = 0; $i < count($data['data']); $i++) {
            $data['data'][$i] = replaceNullWithCustomValue($data['data'][$i], '-');
        }

        // 개인정보 마스킹처리
        if(!$isExcel) {
            for ($i = 0; $i < count($data['data']); $i++) {
                $data['data'][$i]['rev_phone_number'] = phoneMasking($data['data'][$i]['rev_phone_number']);
            }
        }

        return $data;
    }

    function getSelectedOptionAsString(array $data): array
    {

        for ($i = 0; $i < count($data); $i++) {
            $selectedOption_kr = [];
            if($data[$i]['is_flight'] === 'Y') {
                $selectedOption_kr[] = '항공';
            }
            if($data[$i]['is_locker'] === 'Y') {
                $selectedOption_kr[] = '락커';
            }
            if($data[$i]['is_cart'] === 'Y') {
                $selectedOption_kr[] = '카트';
            }
            if($data[$i]['is_caddie'] === 'Y') {
                $selectedOption_kr[] = '캐디';
            }
            if($data[$i]['is_club'] === 'Y') {
                $selectedOption_kr[] = '클럽';
            }
            if($data[$i]['is_hotel'] === 'Y') {
                $selectedOption_kr[] = '숙박';
            }
            if($data[$i]['is_pickup'] === 'Y') {
                $selectedOption_kr[] = '송영';
            }

            $data[$i]['selectedOption_kr'] = implode(',', $selectedOption_kr);
        }

        return $data;
    }

    /**
     * 예약상세 조회
     */
    function getReservationDetail(int $idx) : array
    {
        global $_INC;

        /********************* 예약, 예약자, 요청사항 *********************/
        $query = "
            SELECT
                 -- ht_booking
                  ht_booking.idx, ht_booking_tee.idx AS tee_idx
                , ht_booking.user_idx
                , CASE AES_DECRYPT(ht_booking.rev_sex_type, '". $_INC['env']['encrypt_key']."')
                    WHEN 'M' THEN '남'
                    WHEN 'F' THEN '여'
                  END AS rev_sex_type
                , AES_DECRYPT(ht_booking.rev_name, '". $_INC['env']['encrypt_key']."') AS rev_name
                , AES_DECRYPT(ht_booking.rev_email, '". $_INC['env']['encrypt_key']."') AS rev_email
                , AES_DECRYPT(ht_booking.rev_country_code, '". $_INC['env']['encrypt_key']."') AS rev_country_code
                , rev_nation.nat_nm_kr AS rev_country_name
                , AES_DECRYPT(ht_booking.rev_phone_number, '". $_INC['env']['encrypt_key']."') AS rev_phone_number
                , ht_booking.request_memo
                , IF(MAX(ht_booking_tee.person_count) > 1, '동반', '-') AS has_partner
                , IF(count(booking_number) >1, CONCAT(booking_number, ' 외 ', count(booking_number) - 1, '건'), booking_number) as booking_number
                , IF(count(ht_booking_tee.reg_date) >1, CONCAT(ht_booking_tee.reg_date, ' 외 ', count(ht_booking_tee.reg_date) - 1, '건'), ht_booking_tee.reg_date) as reg_date
                , group_concat(ht_booking_tee.status) AS booking_status
                , IF(MIN(ht_booking_tee.fix_date), DATE_FORMAT(ht_booking_tee.fix_date, '%Y.%m.%d %H:%i:%s'), '-') AS fix_date
                , ht_booking_tee.currency_code AS currency_code
                , SUM(ht_booking_tee.sale_price) AS total_price

            FROM ht_booking
            LEFT JOIN ht_booking_tee
            ON ht_booking.idx = ht_booking_tee.booking_idx
            LEFT JOIN code_nation AS rev_nation -- 예약자 국적
            ON AES_DECRYPT(ht_booking.rev_country_code, '". $_INC['env']['encrypt_key']."') = rev_nation.nat_cd
            WHERE ht_booking.idx = ". $idx ."
        ";
        $data =  my_select_one($query, $this->myDB);

        // 예약정보 > 예약상태
        // 예약한 상품이 2개 이상일 경우 -> 모두 다 예약 취소일 경우에만 예약 취소로 설정
        $statusArr = explode(',', $data['booking_status']);
        $status = '';
        for($i=0; $i<count($statusArr); $i++) {

            if($statusArr[$i] !== '0') {
                $status = !$status || $status > $statusArr[$i] ? $statusArr[$i] : $status;
            }

        }
        if(!$status) $status = 0;
        $data['confirm_status'] = $_INC['confirm_type'][$status];
        $data['booking_status'] = $_INC['reservation_type'][$status];

        // 예약자정보 > 연락처
        $data['rev_phone_number'] = stringToPhoneNumberWithNationalCode($data['rev_phone_number']);

        // 상품총가격
        $data['total_price'] = preg_replace('/\B(?=(\d{3})+(?!\d))/', ',', $data['total_price'] ?? '');


        /********************* 상품정보 *********************/
        $query = "
            SELECT
                  ht_booking_tee.idx
                , ht_booking_tee.currency_code
                , ht_booking_tee.booking_number
                , ht_booking_tee.prod_id , ht_booking_tee.prod_kind
                , ht_booking_tee.prod_name, ht_booking_tee.play_date, ht_booking_tee.time_id, ht_booking_tee.tee_time
                , ht_booking_tee.course_id, ht_booking_tee.course_name
                , ht_booking_tee.prod_cnt
                , ht_booking_tee.regular_price, ht_booking_tee.sale_price
                , ht_booking_tee.person_count
                , ht_booking_tee.status
                , ht_booking_tee.is_flight, ht_booking_tee.is_locker, ht_booking_tee.is_cart
                , ht_booking_tee.is_caddie, ht_booking_tee.is_club, ht_booking_tee.is_hotel, ht_booking_tee.is_pickup
                , DATE_FORMAT(ht_booking_tee.fix_date, '%Y.%m.%d %H:%i:%s') AS fix_date
                , DATE_FORMAT(ht_booking_tee.reg_date, '%Y.%m.%d %H:%i:%s') AS reg_date
                , DATE_FORMAT(ht_booking_tee.cancel_date, '%Y.%m.%d %H:%i:%s') AS cancel_date
                , COUNT(ht_booking_tee_option.idx) AS total_option
                , JSON_ARRAYAGG(
                    JSON_OBJECT(
                        'idx', ht_booking_tee_option.idx,
                        'option_kind', ht_booking_tee_option.option_kind,
                        'option_data', ht_booking_tee_option.option_data,
                        'status', ht_booking_tee_option.status
                    )
                ) AS options
            FROM ht_booking
            LEFT JOIN ht_booking_tee
            ON ht_booking.idx = ht_booking_tee.booking_idx
            LEFT JOIN ht_booking_tee_option
            ON ht_booking_tee.idx = ht_booking_tee_option.booking_tee_idx
            WHERE ht_booking.idx = ". $idx ."
            GROUP BY ht_booking_tee.idx
        ";
        $data['product'] =  my_select($query, $this->myDB);

        for ($i = 0; $i < count($data['product']); $i++) {
            $data['product'][$i]['options'] = json_decode($data['product'][$i]['options']);

            // ex) 20240101073009 -> 2024-01-01 07:30:09
            $data['product'][$i]['play_date'] = stringToDateWithDelimiter( $data['product'][$i]['play_date'] ?? '', '.');

            // ex) 1200 -> 12:00
            $data['product'][$i]['tee_time'] = stringToTime($data['product'][$i]['tee_time'] ?? '');

            // ex) 1000 -> 1,000
            $data['product'][$i]['sale_price'] =  preg_replace('/\B(?=(\d{3})+(?!\d))/', ',' , $data['product'][$i]['sale_price'] ?? '');
            $data['product'][$i]['regular_price'] =  preg_replace('/\B(?=(\d{3})+(?!\d))/', ',' , $data['product'][$i]['regular_price'] ?? '');
            $data['product'][$i]['price'] =  preg_replace('/\B(?=(\d{3})+(?!\d))/', ',' , $data['product'][$i]['price'] ?? '');

            // ex) 1 -> 예약요청
            $data['product'][$i]['status'] = $_INC['reservation_type'][$data['product'][$i]['status']];

            // ex) 1 -> 락카
            for($j=0; $j<count($data['product'][$i]['options']); $j++) {
                if($data['product'][$i]['options'][$j]->option_kind) {
                    $data['product'][$i]['options'][$j]->option_kind = $_INC['option'][$data['product'][$i]['options'][$j]->option_kind];
                } else {
                    $data['product'][$i]['options'][$j]->option_kind = '';
                }
            }
        }

        /********************* 내장정보 *********************/
        $query = "
            SELECT
                JSON_ARRAYAGG(
                    JSON_OBJECT(
                        'idx', idx,
                        'teeIdx', booking_tee_idx,
                        'last_name', AES_DECRYPT(last_name, '". $_INC['env']['encrypt_key'] ."'),
                        'first_name', AES_DECRYPT(first_name, '". $_INC['env']['encrypt_key'] ."'),
                        'sex', AES_DECRYPT(sex_type, '". $_INC['env']['encrypt_key'] ."'),
                        'hasData', 'true'
                    )
                ) AS partner_info
            FROM ht_booking_partner_info
            WHERE booking_idx = ". $idx ."
            GROUP BY booking_tee_idx
        ";
        $data['partners'] =  my_select($query, $this->myDB);

        for($i=0; $i<count($data['product']); $i++) {
            // 내장정보
            if(isset($data['partners'][$i]['partner_info'])) {
                $data['partners'][$i]['partner_info'] = json_decode($data['partners'][$i]['partner_info']);
                for ($j = 0; $j < $data['product'][$i]['person_count']; $j++) {
                    $info = $data['partners'][$i]['partner_info'][$j] ?? (object) array();

                    $info->idx = $info->idx ?? '';
                    $info->teeIdx = $info->teeIdx ?? $data['product'][$i]['idx'];
                    $info->last_name = $info->last_name ?? '';
                    $info->first_name = $info->first_name ?? '';
                    $info->sex = $info->sex ?? '';
                    $info->hasData =  $info->idx ? 'true' : 'false';

                    $data['partners'][$i]['partner_info'][$j] = $info;
                }
            } else {
                for ($j = 0; $j < $data['product'][$i]['person_count']; $j++) {
                    $data['partners'][$i]['partner_info'][$j] = (object) array(
                        'teeIdx'=> $data['product'][$i]['idx'],
                        'name' => '',
                        'sex' => '',
                        'hasData' => 'false',
                    );
                }
            }
        }

        /********************* 결제정보 *********************/
        $query = "
            SELECT
                  idx, booking_idx, user_idx
                , orderID, paymentID
                , price, user_coupon_idx
                , coupon_discount, point_discount
                , price_currency_origin, price_currency
                , payment_method, payment_code
                , status, store_code
                , AES_DECRYPT(auth_code, '". $_INC['env']['encrypt_key'] ."') AS auth_code
                , card_number, payment_name
                , DATE_FORMAT(create_date, '%Y.%m.%d %H:%i:%s') AS create_date
                , DATE_FORMAT(last_update, '%Y.%m.%d %H:%i:%s') AS last_update
                , memo
                FROM ht_payment
            WHERE booking_idx = ". $idx ."
        ";
        $data['payment'] = my_select($query, $this->myDB);

        for ($i = 0; $i < count($data['payment']); $i++) {
            $data['payment'][$i]['price'] = preg_replace('/\B(?=(\d{3})+(?!\d))/', ',' , $data['payment'][$i]['price'] ?? '');
            $data['payment'][$i]['status'] = $_INC['payment_type'][$data['payment'][$i]['status']];
        }
        return $data;
    }

    function postReservationDetail(array $param) : array
    {
        global $_INC;

        if(!isset($param['bookIdx'])) {
            return array('status'=>false, 'code'=>400, 'msg'=>'인덱스값이 없습니다.');
        }
        if(!isset($param['teeIdx'])) {
            return array('status'=>false, 'code'=>400, 'msg'=>'인덱스값이 없습니다.');
        }


        $query = "
            INSERT INTO ht_booking_partner_info (booking_idx, booking_tee_idx, last_name, first_name, sex_type)
            VALUES (".$param['bookIdx'] .", ". $param['teeIdx'] .", AES_ENCRYPT('". $param['lastName'] ."', '". $_INC['env']['encrypt_key'] ."'), AES_ENCRYPT('". $param['fistName'] ."', '". $_INC['env']['encrypt_key'] ."'), AES_ENCRYPT('". $param['sex'] ."', '". $_INC['env']['encrypt_key'] ."'))
        ";
        my_begin_trans($this->myDB);
        if(my_query($query, $this->myDB)) {
            my_commit($this->myDB);
            return array('status'=>true, 'data'=>my_insert_id($this->myDB) ,'msg'=>'내장정보가 등록되었습니다.');
        } else {
            db_close();
            return array('status'=>false, 'code'=>500, 'msg'=>'쿼리 실행 중 오류가 발생했습니다.');
        }
    }

    function patchReservationDetail(array $param) : array
    {
        global $_INC;
        if(!isset($param['idx'])) {
            return array('status'=>false, 'code'=>400, 'msg'=>'인덱스값이 없습니다.');
        }

        $query = "
            UPDATE ht_booking_partner_info
            SET  
                  last_name = AES_ENCRYPT('". $param['lastName'] ."', '". $_INC['env']['encrypt_key'] ."')
                , first_name = AES_ENCRYPT('". $param['fistName'] ."', '". $_INC['env']['encrypt_key'] ."')
                , sex_type = AES_ENCRYPT('". $param['sex'] ."', '". $_INC['env']['encrypt_key'] ."')
            WHERE idx = ". $param['idx'] ."
        ";

        my_begin_trans($this->myDB);
        if(my_query($query, $this->myDB)) {
            my_commit($this->myDB);
            return array('status'=>true, 'msg'=>'내장정보가 수정되었습니다.');
        } else {
            db_close();
            return array('status'=>false, 'code'=>500, 'msg'=>'쿼리 실행 중 오류가 발생했습니다.');
        }
    }

    /**
     * 예약확정
     */
    function patchConfirmReservation(string $bookingIndexes)
    {
        global $_INC;

        // 예약 요청인 예약건만 필터링
        $query = "
            SELECT
                group_concat(booking_idx) AS booking_idxes
            FROM ht_booking_tee
            WHERE status = 1 AND booking_idx IN (".$bookingIndexes .")
        ";
        $filteredBookingIndexes = my_select_one($query, $this->myDB)['booking_idxes'];

        $query = "
            UPDATE ht_booking_tee
                SET 
                      status = 2
                    , fix_date = now()
            WHERE booking_idx IN (".$filteredBookingIndexes .") AND status = 1;
        ";

        my_begin_trans($this->myDB);
        if(my_query($query, $this->myDB)) {
            my_commit($this->myDB);

            // 예약확정으로 변경된 예약건에 대한 바우처 발송 API 로직 필요

            // 확정 이메일 발송
            $idx_cnt = explode(",",$filteredBookingIndexes);
            for($y=0; $y<count($idx_cnt); $y++){

                $query = "
                SELECT
                      AES_DECRYPT(ht_booking.rev_name, '". $_INC['env']['encrypt_key']."') AS rev_name
                    , AES_DECRYPT(ht_booking.rev_email, '". $_INC['env']['encrypt_key']."') AS rev_email
                    , ht_booking_tee.prod_name
                    , ht_booking_tee.play_date
                    , ht_booking_tee.course_name
                    , ht_booking_tee.person_count
                    , ht_booking_tee.booking_number
                FROM ht_booking
                LEFT JOIN ht_booking_tee
                ON ht_booking.idx = ht_booking_tee.booking_idx
                WHERE ht_booking.idx = ".$idx_cnt[$y]." ";

                $result = my_select_one($query, $this->myDB);
                $array = array(
                    "{예약자명}" => $result['rev_name'],
                    "{예약번호}" => $result['booking_number'],
                    "{골프장명}" => $result['prod_name'],
                    "{예약일시}" => $result['play_date'],
                    "{예약코스}" => $result['course_name'],
                    "{예약인원}" => $result['person_count']
                );

                $return = mail_send("temp_confirm.html", $array, "[AGL] 골프여행 예약 확정 되었습니다.", $result['rev_email']);

                $query = "
                INSERT INTO ht_email SET
                    email_type = '예약확정',
                    email_html = 'temp_confirm.html',
                    email_subject = '[AGL] 골프여행 예약 확정 되었습니다.',
                    product_code = '".$result['booking_number']."',
                    reg_date = '".date("Y-m-d h:i:s")."',
                    return_code = '".$return."',
                    send_YN = 'Y' ";

                my_query($query, $this->myDB);

            }

            return array('status'=>true, 'msg'=>'예약을 확정을 완료했습니다.');
        } else {
            db_close();
            return array('status'=>false, 'code'=>500, 'msg'=>'쿼리 실행 중 오류가 발생했습니다.');
        }
    }

    function patchCancelReservation(array $data)
    {
        global $_INC;

        $bookingIndexes = $data['idx'];
        $cancelMemo = $data['cancelMemo'];
        // 예약 요청인 예약건만 필터링
        $query = "
            SELECT
                group_concat(booking_idx) AS booking_idxes
            FROM ht_booking_tee
            WHERE status IN (1, 2) AND booking_idx IN (".$bookingIndexes .")
        ";
        $filteredBookingIndexes = my_select_one($query, $this->myDB)['booking_idxes'];

        $query = "
            UPDATE ht_booking_tee
                SET 
                      status = 0
                    , cancel_date = now()
                    , cancel_memo = '$cancelMemo'
            WHERE booking_idx IN (".$filteredBookingIndexes .") AND status IN (1, 2);
        ";
        my_begin_trans($this->myDB);

        if(my_query($query, $this->myDB)) {
            my_commit($this->myDB);

            // 예약취소로 변경된 예약건에 대한 취소바우처 발송 API 로직 필요

            // 취소 이메일 발송
            $idx_cnt = explode(",",$filteredBookingIndexes);
            for($y=0; $y<count($idx_cnt); $y++){

                $query = "
                SELECT
                      AES_DECRYPT(ht_booking.rev_name, '". $_INC['env']['encrypt_key']."') AS rev_name
                    , AES_DECRYPT(ht_booking.rev_email, '". $_INC['env']['encrypt_key']."') AS rev_email
                    , ht_booking_tee.prod_name
                    , ht_booking_tee.play_date
                    , ht_booking_tee.course_name
                    , ht_booking_tee.person_count
                    , ht_booking_tee.booking_number
                FROM ht_booking
                LEFT JOIN ht_booking_tee
                ON ht_booking.idx = ht_booking_tee.booking_idx
                WHERE ht_booking.idx = ".$idx_cnt[$y]." ";

                $result = my_select_one($query, $this->myDB);
                $array = array(
                    "{예약자명}" => $result['rev_name'],
                    "{예약번호}" => $result['booking_number'],
                    "{골프장명}" => $result['prod_name'],
                    "{예약일시}" => $result['play_date'],
                    "{예약코스}" => $result['course_name'],
                    "{예약인원}" => $result['person_count']
                );

                $return = mail_send("temp_cancel.html", $array, "[AGL] 골프여행 예약 취소 되었습니다.", $result['rev_email']);

                $query = "
                INSERT INTO ht_email SET
                    email_type = '예약취소',
                    email_html = 'temp_cancel.html',
                    email_subject = '[AGL] 골프여행 예약 취소 되었습니다.',
                    product_code = '".$result['booking_number']."',
                    reg_date = '".date("Y-m-d h:i:s")."',
                    return_code = '".$return."',
                    send_YN = 'Y' ";
                my_query($query, $this->myDB);

            }

            return array('status'=>true, 'msg'=>'예약 취소를 완료했습니다.');
        } else {
            db_close();
            return array('status'=>false, 'code'=>500, 'msg'=>'쿼리 실행 중 오류가 발생했습니다.');
        }


    }

    /**
     * 회원상세 > 골프여행목록 ( 회원 예약현황 )
     */
    function getMemberReservationList(array $param)
    {
        if( empty( $parma ) ) return false;
        $query = "
            SELECT
                -- ht_booking
                  ht_booking.idx
                , ht_booking.user_idx
                , AES_DECRYPT(ht_booking.rev_name, 'AGL_AES_s9s8yBQ2') AS rev_name
                , AES_DECRYPT(ht_booking.rev_country_code, 'AGL_AES_s9s8yBQ2') AS rev_country_code
                , AES_DECRYPT(ht_booking.rev_phone_number, 'AGL_AES_s9s8yBQ2') AS rev_phone_number
            
                -- ht_booking_tee
                , ht_booking_tee.currency_code
                , ht_booking_tee.booking_number
                , ht_booking_tee.prod_id, ht_booking_tee.prod_kind, ht_booking_tee.prod_name
                , ht_booking_tee.play_date, ht_booking_tee.time_id, ht_booking_tee.tee_time
                , ht_booking_tee.course_id, ht_booking_tee.course_name
                , ht_booking_tee.prod_cnt
                , SUM(ht_booking_tee.person_count) AS person_count
                , SUM(ht_booking_tee.regular_price) AS regular_price
                , SUM(ht_booking_tee.sale_price) AS sale_price
                , group_concat(ht_booking_tee.status) AS booking_status
                , IF(SUM(ht_booking_tee.is_flight = 'Y') > 0, 'Y', 'N') AS is_flight
                , IF(SUM(ht_booking_tee.is_locker = 'Y') > 0, 'Y', 'N') AS is_locker
                , IF(SUM(ht_booking_tee.is_cart = 'Y') > 0, 'Y', 'N') AS is_cart
                , IF(SUM(ht_booking_tee.is_caddie = 'Y') > 0, 'Y', 'N') AS is_caddie
                , IF(SUM(ht_booking_tee.is_club = 'Y') > 0, 'Y', 'N') AS is_club
                , IF(SUM(ht_booking_tee.is_hotel = 'Y') > 0, 'Y', 'N') AS is_hotel
                , IF(SUM(ht_booking_tee.is_pickup = 'Y') > 0, 'Y', 'N') AS is_pickup
                , ht_booking_tee.fix_date
                , DATE_FORMAT(ht_booking_tee.reg_date, '%y.%m.%d') AS reg_date
                , DATE_FORMAT(ht_booking_tee.cancel_date, '%y.%m.%d') AS cancel_date
                , COALESCE(MAX(DATE_FORMAT(ht_booking_tee.cancel_date, '%y.%m.%d')), '-') AS DATE
            
                -- payment
                , ifnull(ht_payment.price, 0) AS price
                , ifnull(ht_payment.price_currency, '') AS price_currency
                , IFNULL(ht_payment.payment_method, '-') AS payment_method
                , IFNULL(ht_payment.status, '-') AS payment_status
                , total_coupon_discount
                , IFNULL(ht_payment.used_coupon_name, '-') AS used_coupon_name
                , total_point_discount
                , IFNULL(ht_payment.is_point_used, '-') AS is_point_used
                
                -- ht_booking_partner_info
                , partner_name
                , ht_booking_partner_info.total_input_partner
                , IF(SUM(person_count) = total_input_partner, '입력완료', '미입력') AS partner_info_input_status
            FROM ht_booking
            INNER JOIN ht_booking_tee
            ON ht_booking.idx = ht_booking_tee.booking_idx
            LEFT JOIN (
                SELECT
                     booking_idx
                    , ht_payment.price_currency
                    , SUM(ht_payment.price) AS price
                    , ht_payment.payment_method
                    , ht_payment.status
                    , SUM(ht_payment.coupon_discount) AS total_coupon_discount
                    , IF(ht_payment.user_coupon_idx !=0 , ifnull(ht_user_coupon.name , '-'), '-')  AS used_coupon_name
                    , SUM(ht_payment.point_discount) AS total_point_discount
                    , IF(SUM(ht_payment.point_discount)>0, SUM(ht_payment.point_discount), '미사용') AS is_point_used
                FROM ht_payment
                LEFT JOIN ht_user_coupon
                ON ht_payment.user_coupon_idx = ht_user_coupon.coupon_idx
                WHERE ht_payment.status = 1 -- 정상결제에 한해서 조회
                GROUP BY booking_idx
            ) AS ht_payment
            ON ht_payment.booking_idx = ht_booking.idx
            LEFT JOIN (
                SELECT 
                      booking_idx
                    , group_concat(AES_DECRYPT(partner_name, 'AGL_AES_s9s8yBQ2')) AS partner_name
                    , count(*) AS total_input_partner
                FROM ht_booking_partner_info
                GROUP BY booking_idx
            ) AS ht_booking_partner_info
            ON ht_booking.idx = ht_booking_partner_info.booking_idx
            WHERE 
                ht_booking.user_idx='".$param['id']."'
            GROUP BY ht_booking.idx
            ORDER BY ht_booking.idx DESC
        ";

        return my_select($query, $this->myDB);
    }
}
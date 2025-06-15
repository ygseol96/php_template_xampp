<?php

class ProductService {
    private $myDB;
    private $msDB;
    private static $ENCRYPT_KEY;

    public function __construct()
    {
        $this->myDB = myConn();
        $this->msDB = msConn();
    }

    function getTeeTimeList(array $param, $pg=null)
    {
        $query = "
            SELECT 
                CURRENCY, 
                CLIENT_ID 
            FROM 
                HTT_CLIENT WITH(NOLOCK) 
            WHERE 
                CLIENT_CODE = 'HEYTEETIME';
        ";
        $client = ms_select_one( $query, $this->msDB );

        $today = date('Ymd');

        $whereQuery = "";
        // 티타임

        if( isset( $param['f_date'] ) && $param['f_date'] != 'undefined' && $param['f_date'] != '[""]' )
        {
            $dateArr = json_decode($param['f_date']);
            $whereQuery .= " AND E.START_DATE >= '".str_replace('-', '', $dateArr[0] )."'";
            $whereQuery .= " AND E.END_DATE <= '". str_replace( '-', '', $dateArr[1] ) ."'";
        }

        // 대륙
        if( isset( $param['f_area'] ) && $param['f_area'] != 'undefined' ) {
            $whereQuery .= " AND I.CD = '".$param['f_area']."'";
        }

        // 국가
        if( isset( $param['f_nation'] ) && $param['f_nation'] != 'undefined' ) {
            $whereQuery .= " AND F.NAT_CD = '".$param['f_nation']."'";
        }

        // 지역
        if( isset( $param['f_state'] ) && $param['f_state'] != 'undefined' ) {
            $whereQuery .= " AND S.STATE_CD = '".$param['f_state']."'";
        }

        // 도시
        if( isset( $param['f_city'] ) && $param['f_city'] != 'undefined' ) {
            $whereQuery .= " AND G.CITY_CODE = '".$param['f_city']."'";
        }

        // 상품구분
        if( isset( $param['f_kind'] ) && $param['f_kind'] != 'undefined' ) {
            // 티타임 온리
            if( $param['f_kind'] == '1' ) {
                $whereQuery .= " AND A.HOTEL_PRD_YN = 'N'";
                $whereQuery .= " AND A.PICKUP_PRD_YN = 'N'";
                $whereQuery .= " AND A.AIR_PRD_YN = 'N'";
            }
            // 항공+
            else if( $param['f_kind'] == '2' ) {
                $whereQuery .= " AND A.AIR_PRD_YN = 'Y'";
            }
            // 숙박+
            else if( $param['f_kind'] == '3' ) {
                $whereQuery .= " AND A.HOTEL_PRD_YN = 'Y'";
            }
            // 송영+
            else if( $param['f_kind'] == '4' ) {
                $whereQuery .= " AND A.PICKUP_PRD_YN = 'Y'";
            }
            // 항공/숙박+
            else if( $param['f_kind'] == '5' ) {
                $whereQuery .= " AND A.AIR_PRD_YN = 'Y'";
                $whereQuery .= " AND A.HOTEL_PRD_YN = 'Y'";
            }
            // 항공/송영+
            else if( $param['f_kind'] == '6' ) {
                $whereQuery .= " AND A.AIR_PRD_YN = 'Y'";
                $whereQuery .= " AND A.PICKUP_PRD_YN = 'Y'";
            }
            // 숙박/송영+
            else if( $param['f_kind'] == '7' ) {
                $whereQuery .= " AND A.HOTEL_PRD_YN = 'Y'";
                $whereQuery .= " AND A.PICKUP_PRD_YN = 'Y'";
            }
            // 항공/숙박/송영+
            else if( $param['f_kind'] == '8' ) {
                $whereQuery .= " AND A.AIR_PRD_YN = 'Y'";
                $whereQuery .= " AND A.HOTEL_PRD_YN = 'Y'";
                $whereQuery .= " AND A.PICKUP_PRD_YN = 'Y'";
            }
        }

        // 사용여부
        if( isset( $param['f_use_yn'] ) && $param['f_use_yn'] != 'undefined' ) {
            if( $param['f_use_yn'] == 'Y' ) {
                $whereQuery .= " AND ( PO.USE_YN IS NULL OR PO.USE_YN = 'Y' )";
            } else if( $param['f_use_yn'] == 'N' ) {
                $whereQuery .= " AND PO.USE_YN = 'N'";
            }
        }

        // 골프장명/코드
        if( isset( $param['f_text'] ) && $param['f_text'] != 'f_use_yn' ) {
            $whereQuery .= " AND ( A.PRD_NAME LIKE '%".$param['f_text']."%' ";
            $whereQuery .= " OR B.CODE_GDS LIKE '%".$param['f_text']."%' )";
        }

        $query = "
            SELECT 
                  AAA.GCPRD_SEQ
                , AAA.CONTINENT_CD
                , AAA.AREA_CD  
                , AAA.AREA_NAME  
                , AAA.NAT_CD
                , AAA.NAT_NM  
                , AAA.STATE_CD
                , AAA.STATE_NM
                , AAA.CITY_CODE
                , AAA.CITY_NM
                , AAA.FIELD_ID
                , AAA.PRD_NAME
                , AAA.RESERVE_EMAIL
                , AAA.PRODUCT_TYPE
                , AAA.START_DATE
                , AAA.END_DATE 
                , AAA.TEETIME
                , ROUND( DBO.GDSFN_SetDecimal(AAA.ORIGIN_PRICE * DBO.UFN_CurrencyRate_Return(AAA.Currency, '".$client['CURRENCY']."', '20240604'),   '".$client['CURRENCY']."'), 2 ) ORIGIN_PRICE		
                , DBO.GDSFN_SetDecimal(AAA.LOCAL_PRICE  * DBO.UFN_CurrencyRate_Return(AAA.Currency, '".$client['CURRENCY']."', '20240604') * 1.2,   '".$client['CURRENCY']."') MARKET_PRICE 
                , DBO.GDSFN_SetDecimal(CASE WHEN AAA.RATIO_GUBUN = 1 THEN AAA.ORIGIN_PRICE * (1 + AAA.RATIO) ELSE AAA.ORIGIN_PRICE + AAA.RATIO END * DBO.UFN_CurrencyRate_Return(AAA.Currency, '".$client['CURRENCY']."', '20240604'), '".$client['CURRENCY']."') SALES_PRICE 
                , CASE
                    WHEN AAA.USE_YN='Y' THEN '사용'
                    ELSE '사용안함'
                  END AS USE_YN    
                , AAA.REGDT
                , AAA.MODDT
                , '-' AS MODYFY_YN
                , '-' AS MODIFY_DATE
                , AAA.MOD_TEXT
                , CONVERT(VARCHAR, AAA.UPTDATE, 102) AS UPTDATE    
                , CASE 
                    WHEN AAA.H_USE_YN IS NULL THEN '사용'
                    WHEN AAA.H_USE_YN = 'Y' THEN '사용'
                    ELSE '미사용'
                END AS H_USE_YN    
            FROM
            (
                SELECT 
                  AA.GCPRD_SEQ
                , AA.CONTINENT_CD
                , AA.AREA_CD 
                , AA.AREA_NAME  
                , AA.NAT_CD
                , AA.NAT_NM  
                , AA.STATE_CD
                , AA.STATE_NM
                , AA.CITY_CODE
                , AA.CITY_NM
                , AA.CODE_GDS
                , AA.CODE_GDS FIELD_ID
                , AA.PRD_NAME
                , AA.PRODUCT_TYPE
                , AA.RESERVE_EMAIL
                , AA.START_DATE
                , AA.END_DATE 
                , AA.TEETIME
                , ROUND( AA.ORIGIN_PRICE, 2 ) AS ORIGIN_PRICE 
                , AA.LOCAL_PRICE
                , CASE WHEN AA.RATIO_GUBUN = 1 THEN AA.ORIGIN_PRICE * (1 + AA.RATIO) ELSE AA.ORIGIN_PRICE + AA.RATIO END SALES_PRICE
                , AA.CURRENCY
                , AA.RATIO_GUBUN
                , AA.RATIO
                , AA.USE_YN 
                , AA.REGDT
                , AA.MODDT
                , AA.MOD_TEXT
                , AA.UPTDATE
                , AA.H_USE_YN
                FROM (
                   SELECT 
                   A.GCPRD_SEQ
                    , F.AREA_CD
                    , CASE 'KO' 
                        WHEN 'KO' THEN I.CD_NAME_KR 
                        WHEN 'EN' THEN I.CD_NAME_EN 
                        WHEN 'JP' THEN I.CD_NAME_JP
                        WHEN 'CN' THEN I.CD_NAME_CN
                    ELSE I.CD_NAME_KR END AS AREA_NAME	-- 국가
                    , I.CD CONTINENT_CD
                    , F.NAT_CD
                    , CASE 'KO' 
                        WHEN 'KO' THEN F.NAT_NM_KR 
                        WHEN 'EN' THEN F.NAT_NM_EN 
                        WHEN 'JP' THEN F.NAT_NM_JP
                        WHEN 'CN' THEN F.NAT_NM_CN
                    ELSE F.NAT_NM_KR END AS NAT_NM	-- 국가
                    , S.STATE_CD
                    , CASE 'KO' 
                        WHEN 'KO' THEN S.STATE_NM_KR
                        WHEN 'EN' THEN S.STATE_NM_EN
                        WHEN 'JP' THEN S.STATE_NM_JP
                    ELSE S.STATE_NM_KR END AS STATE_NM	-- 지역
                    , G.CITY_CODE
                    , CASE 'KO' 
                        WHEN 'KO' THEN G.CITY_NM_KR 
                        WHEN 'EN' THEN G.CITY_NM_EN 
                        WHEN 'JP' THEN G.CITY_NM_JP
                        WHEN 'CN' THEN G.CITY_NM_CN
                    ELSE G.CITY_NM_KR END AS CITY_NM	-- 국가
                    , CASE WHEN A.HOTEL_PRD_YN = 'N' AND A.PICKUP_PRD_YN = 'N' AND A.AIR_PRD_YN = 'N' THEN '티타임' 
                         WHEN A.HOTEL_PRD_YN = 'Y' AND A.PICKUP_PRD_YN = 'N' AND A.AIR_PRD_YN = 'N' THEN '숙박+'  
                         WHEN A.HOTEL_PRD_YN = 'N' AND A.PICKUP_PRD_YN = 'Y' AND A.AIR_PRD_YN = 'N' THEN '송영+'  
                         WHEN A.HOTEL_PRD_YN = 'N' AND A.PICKUP_PRD_YN = 'N' AND A.AIR_PRD_YN = 'Y' THEN '항공+' 
                         WHEN A.HOTEL_PRD_YN = 'Y' AND A.PICKUP_PRD_YN = 'Y' AND A.AIR_PRD_YN = 'N' THEN '숙박/송영+'
                         WHEN A.HOTEL_PRD_YN = 'Y' AND A.PICKUP_PRD_YN = 'N' AND A.AIR_PRD_YN = 'Y' THEN '항공/숙박+'
                         WHEN A.HOTEL_PRD_YN = 'N' AND A.PICKUP_PRD_YN = 'Y' AND A.AIR_PRD_YN = 'Y' THEN '항공/송영+' 
                    END PRODUCT_TYPE
                    , B.CODE_GDS
                    , A.PRD_NAME
                    , A.RATIO_GUBUN
                    , ISNULL(A.RATIO, 0) RATIO
                    , A.RESERVE_EMAIL
                    , E.START_DATE
                    , E.END_DATE 
                    , FORMAT(CAST(E.START_DATE AS DATE), 'yy.MM.dd') + ' ~ ' + FORMAT(CAST(E.END_DATE AS DATE), 'yy.MM.dd') AS TEETIME
                    , E.GREEN_FEE_AGL   ORIGIN_PRICE
                    , E.GREEN_FEE_LOCAL LOCAL_PRICE
                    , E.GREEN_FEE_LIMIT PRICE_LIMIT  
                    , H.CURRENCY
                    , A.USE_YN 
                    , A.REGDT
                    , A.MODDT
                    , CASE
                        WHEN PO.CODE_GDS IS NOT NULL THEN '수정'
                        ELSE '-'
                    END AS MOD_TEXT
                    , PO.UPTDATE
                    , PO.USE_YN AS H_USE_YN
                    FROM 
                        GC_COMPANY_PRODUCT A 
                        INNER JOIN GC_COMPANY_PRODUCT_FIELD B ON A.GCPRD_SEQ = B.GCPRD_SEQ 
                        INNER JOIN GC_COMPANY_MEMBER C ON B.CGMEM_SEQ = C.CGMEM_SEQ 
                        INNER JOIN GC_MEMBER D ON C.GMEM_SEQ = D.GMEM_SEQ
                        INNER JOIN (SELECT * FROM (SELECT FIELD_ID, START_DATE, END_DATE, GREEN_FEE_LOCAL, GREEN_FEE_AGL, GREEN_FEE_LIMIT, ROW_NUMBER() OVER (PARTITION BY FIELD_ID ORDER BY FIELD_ID ASC) AS SEQ
                                    FROM HTT_PRICE_MASTER_G10 GROUP BY FIELD_ID, START_DATE, END_DATE, GREEN_FEE_LOCAL, GREEN_FEE_AGL, GREEN_FEE_LIMIT) P WHERE P.SEQ = 1) E ON B.CODE_GDS = E.FIELD_ID
                        INNER JOIN HTT_CODE_NATION F ON D.NAT_CD = F.NAT_CD
                        INNER JOIN HTT_CODE_CITY G ON F.NAT_CD = G.NAT_CD AND D.CITY_CODE = G.CITY_CODE
                        INNER JOIN HTT_GOLF_FIELD H ON E.FIELD_ID = H.FIELD_ID
                        INNER JOIN HTT_CODE_CONTINENT I ON I.CD = F.CD
                        LEFT OUTER JOIN HTT_CODE_STATE S ON S.STATE_CD = D.STATE_CD		
                        LEFT OUTER JOIN HTT_ADMIN_MARKUP_POINT PO ON B.CODE_GDS = PO.CODE_GDS
                    WHERE 1 = 1 
                    ".$whereQuery."
                ) AA
            ) AAA
        ";

        $size = $param['size'] ?? 20;
        $page = $param['page'] ?? 1;

        $result = ms_select( $query, $this->msDB );
        $data['total']  = count( $result );
        $data['last_page'] = ceil($data['total'] / $size);

        $offset = ($page - 1) * $size;
        $limit = $size;

        if( !$pg ) {
            $query = $query . "
            ORDER BY AAA.GCPRD_SEQ
            OFFSET " . $offset . " ROWS 
            FETCH NEXT " . $limit . " ROWS ONLY";
        }
        $data['data'] = ms_select( $query, $this->msDB );
        ms_close();

        return $data;
    }

    /**
     * 상품 상세정보
     * request : field_id
     */
    function getProductDetail( $field_id )
    {
        if( !$field_id ) return false;

        $query = "
            SELECT 
                CURRENCY, 
                CLIENT_ID 
            FROM 
                HTT_CLIENT WITH(NOLOCK) 
            WHERE 
                CLIENT_CODE = 'HEYTEETIME';
        ";
        $client = ms_select_one( $query, $this->msDB );

        $today = date('Ymd');

        $query = "
        SELECT 
              AAA.GCPRD_SEQ
            , AAA.ADDR
            , AAA.LAT
            , AAA.LNG
            , AAA.PHONE
            , AAA.WEBSITE
            , AAA.HOLE_CNT
            , AAA.PAR_CNT
            , AAA.DISTANCE
            , AAA.DISTANCE_ME  
            , AAA.CONTINENT_CD
            , AAA.AREA_CD  
            , AAA.AREA_NAME  
            , AAA.NAT_CD
            , AAA.NAT_NM  
            , AAA.STATE_CD
            , AAA.STATE_NM
            , AAA.CITY_CODE
            , AAA.CITY_NM
            , AAA.FIELD_ID
            , AAA.PRD_NAME
            , AAA.RESERVE_EMAIL 
            , AAA.RESERVE_MEMO 
            , AAA.PRODUCT_TYPE
            , AAA.START_DATE
            , AAA.END_DATE 
            , AAA.TEETIME
            , DBO.GDSFN_SetDecimal(AAA.ORIGIN_PRICE * DBO.UFN_CurrencyRate_Return(AAA.Currency, 'KRW', '20240604'),   'KRW') ORIGIN_PRICE		
            , DBO.GDSFN_SetDecimal(AAA.LOCAL_PRICE  * DBO.UFN_CurrencyRate_Return(AAA.Currency, 'KRW', '20240604') * 1.2,   'KRW') MARKET_PRICE 
            , DBO.GDSFN_SetDecimal(CASE WHEN AAA.RATIO_GUBUN = 1 THEN AAA.ORIGIN_PRICE * (1 + AAA.RATIO) ELSE AAA.ORIGIN_PRICE + AAA.RATIO END * DBO.UFN_CurrencyRate_Return(AAA.Currency, 'KRW', '20240604'), 'KRW') SALES_PRICE
            , AAA.USE_YN
            , CASE
                WHEN AAA.USE_YN='Y' THEN '사용'
                ELSE '사용안함'
              END AS USE_YN_TEXT
            , AAA.REGDT
            , AAA.MODDT
            , '-' AS MODYFI_YN
            , '-' AS MODIFY_DATE
            , AAA.PIN_MEMO
            , AAA.POUT_MEMO
            , AAA.MEMBER_RATIO_GUBUN
            , AAA.MEMBER_RATIO
            , AAA.MOD_TEXT
            , AAA.UPTDATE
            , CASE 
                WHEN AAA.H_USE_YN IS NULL THEN '사용'
                WHEN AAA.H_USE_YN = 'Y' THEN '사용'
                ELSE '미사용'
            END AS H_USE_YN    
        FROM
        (
            SELECT 
              AA.GCPRD_SEQ
            , AA.ADDR
            , AA.LAT
            , AA.LNG
            , AA.PHONE
            , AA.WEBSITE
            , AA.HOLE_CNT
            , AA.PAR_CNT
            , AA.DISTANCE
            , AA.DISTANCE_ME    
            , AA.CONTINENT_CD
            , AA.AREA_CD 
            , AA.AREA_NAME  
            , AA.NAT_CD
            , AA.NAT_NM  
            , AA.STATE_CD
            , AA.STATE_NM
            , AA.CITY_CODE
            , AA.CITY_NM
            , AA.CODE_GDS
            , AA.CODE_GDS FIELD_ID
            , AA.PRD_NAME
            , AA.RESERVE_EMAIL   
            , AA.RESERVE_MEMO     
            , AA.PRODUCT_TYPE
            , AA.START_DATE
            , AA.END_DATE 
            , AA.TEETIME
            , AA.ORIGIN_PRICE 
            , AA.LOCAL_PRICE
            , CASE WHEN AA.RATIO_GUBUN = 1 THEN AA.ORIGIN_PRICE * (1 + AA.RATIO) ELSE AA.ORIGIN_PRICE + AA.RATIO END SALES_PRICE
            , AA.CURRENCY
            , AA.RATIO_GUBUN
            , AA.RATIO
            , AA.USE_YN 
            , AA.REGDT
            , AA.MODDT
            , AA.PIN_MEMO
            , AA.POUT_MEMO
            , AA.MEMBER_RATIO_GUBUN
            , AA.MEMBER_RATIO
            , AA.MOD_TEXT
            , AA.UPTDATE
            , AA.H_USE_YN
            FROM (
               SELECT 
               A.GCPRD_SEQ
                , D.ADDR
                , D.LAT
                , D.LNG
                , D.PHONE
                , D.WEBSITE
                , D.HOLE_CNT
                , D.PAR_CNT
                , D.DISTANCE
                , D.DISTANCE_ME    
                , F.AREA_CD
                , CASE 'KO' 
                    WHEN 'KO' THEN I.CD_NAME_KR 
                    WHEN 'EN' THEN I.CD_NAME_EN 
                    WHEN 'JP' THEN I.CD_NAME_JP
                    WHEN 'CN' THEN I.CD_NAME_CN
                ELSE I.CD_NAME_KR END AS AREA_NAME	-- 대륙
                , F.CD CONTINENT_CD
                , F.NAT_CD
                , CASE 'KO' 
                    WHEN 'KO' THEN F.NAT_NM_KR 
                    WHEN 'EN' THEN F.NAT_NM_EN 
                    WHEN 'JP' THEN F.NAT_NM_JP
                    WHEN 'CN' THEN F.NAT_NM_CN
                ELSE F.NAT_NM_KR END AS NAT_NM	-- 국가
                , S.STATE_CD
                , CASE 'KO' 
                    WHEN 'KO' THEN S.STATE_NM_KR
                    WHEN 'EN' THEN S.STATE_NM_EN
                    WHEN 'JP' THEN S.STATE_NM_JP
                ELSE S.STATE_NM_KR END AS STATE_NM	-- 지역
                , G.CITY_CODE
                , CASE 'KO' 
                    WHEN 'KO' THEN G.CITY_NM_KR 
                    WHEN 'EN' THEN G.CITY_NM_EN 
                    WHEN 'JP' THEN G.CITY_NM_JP
                    WHEN 'CN' THEN G.CITY_NM_CN
                ELSE G.CITY_NM_KR END AS CITY_NM	-- 국가
                , CASE WHEN A.HOTEL_PRD_YN = 'N' AND A.PICKUP_PRD_YN = 'N' AND A.AIR_PRD_YN = 'N' THEN '티타임' 
                     WHEN A.HOTEL_PRD_YN = 'Y' AND A.PICKUP_PRD_YN = 'N' AND A.AIR_PRD_YN = 'N' THEN '숙박+'  
                     WHEN A.HOTEL_PRD_YN = 'N' AND A.PICKUP_PRD_YN = 'Y' AND A.AIR_PRD_YN = 'N' THEN '송영+'  
                     WHEN A.HOTEL_PRD_YN = 'N' AND A.PICKUP_PRD_YN = 'N' AND A.AIR_PRD_YN = 'Y' THEN '항공+' 
                     WHEN A.HOTEL_PRD_YN = 'Y' AND A.PICKUP_PRD_YN = 'Y' AND A.AIR_PRD_YN = 'N' THEN '숙박/송영+'
                     WHEN A.HOTEL_PRD_YN = 'Y' AND A.PICKUP_PRD_YN = 'N' AND A.AIR_PRD_YN = 'Y' THEN '항공/숙박+'
                     WHEN A.HOTEL_PRD_YN = 'N' AND A.PICKUP_PRD_YN = 'Y' AND A.AIR_PRD_YN = 'Y' THEN '항공/송영+' 
                END PRODUCT_TYPE
                , B.CODE_GDS
                , A.PRD_NAME
                , A.RATIO_GUBUN
                , ISNULL(A.RATIO, 0) RATIO
                , A.RESERVE_EMAIL    
                , A.RESERVE_MEMO    
                , E.START_DATE
                , E.END_DATE 
                , FORMAT(CAST(E.START_DATE AS DATE), 'yy.MM.dd') + ' ~ ' + FORMAT(CAST(E.END_DATE AS DATE), 'yy.MM.dd') AS TEETIME
                , E.GREEN_FEE_AGL   ORIGIN_PRICE
                , E.GREEN_FEE_LOCAL LOCAL_PRICE
                , E.GREEN_FEE_LIMIT PRICE_LIMIT  
                , H.CURRENCY
                , A.USE_YN 
                , A.REGDT
                , A.MODDT
                , ( SELECT TOP 1 PIN_MEMO from GC_COMPANY_PRODUCT_TEETIME where B.GCP_FIELD_SEQ = GCP_FIELD_SEQ ) AS PIN_MEMO
                , ( SELECT TOP 1 POUT_MEMO from GC_COMPANY_PRODUCT_TEETIME where B.GCP_FIELD_SEQ = GCP_FIELD_SEQ ) AS POUT_MEMO               
                , MP.RATIO_GUBUN AS MEMBER_RATIO_GUBUN
                , ISNULL(MP.RATIO, 0) AS MEMBER_RATIO
                , CASE
                    WHEN PO.CODE_GDS IS NOT NULL THEN '수정'
                    ELSE '-'
                END AS MOD_TEXT
                , CASE
                    WHEN PO.UPTDATE IS NOT NULL THEN CONVERT(VARCHAR, PO.UPTDATE, 102) 
                    ELSE '-'
                END AS UPTDATE
               , PO.USE_YN AS H_USE_YN
                FROM GC_COMPANY_PRODUCT A 
                INNER JOIN GC_COMPANY_PRODUCT_FIELD B ON A.GCPRD_SEQ = B.GCPRD_SEQ 
                INNER JOIN GC_COMPANY_MEMBER C ON B.CGMEM_SEQ = C.CGMEM_SEQ 
                INNER JOIN GC_MEMBER D ON C.GMEM_SEQ = D.GMEM_SEQ
                INNER JOIN (SELECT * FROM (SELECT FIELD_ID, START_DATE, END_DATE, GREEN_FEE_LOCAL, GREEN_FEE_AGL, GREEN_FEE_LIMIT, ROW_NUMBER() OVER (PARTITION BY FIELD_ID ORDER BY FIELD_ID ASC) AS SEQ
                            FROM HTT_PRICE_MASTER_G10 GROUP BY FIELD_ID, START_DATE, END_DATE, GREEN_FEE_LOCAL, GREEN_FEE_AGL, GREEN_FEE_LIMIT) P WHERE P.SEQ = 1) E ON B.CODE_GDS = E.FIELD_ID
                INNER JOIN HTT_CODE_NATION F ON D.NAT_CD = F.NAT_CD
                INNER JOIN HTT_CODE_CITY G ON F.NAT_CD = G.NAT_CD AND D.CITY_CODE = G.CITY_CODE
                INNER JOIN HTT_GOLF_FIELD H ON E.FIELD_ID = H.FIELD_ID
                LEFT OUTER JOIN HTT_CODE_STATE S ON S.STATE_CD = D.STATE_CD	
                INNER JOIN HTT_CODE_CONTINENT I ON I.CD = F.CD	
                LEFT OUTER JOIN HTT_ADMIN_MARKUP_POINT MP ON B.CODE_GDS = MP.CODE_GDS		
                LEFT OUTER JOIN HTT_ADMIN_MARKUP_POINT PO ON B.CODE_GDS = PO.CODE_GDS
         
                WHERE B.CODE_GDS = '".$field_id."'
            ) AA
        ) AAA
        ";

        return ms_select_one( $query, $this->msDB );
    }

    /**
     * 지역정보에서 대륙 목록 조회
     */
    function getAreaList()
    {
        $query = "
            SELECT
                *
            FROM
                HTT_CODE_CONTINENT
        ";

        return ms_select( $query, $this->msDB );
    }

    /**
     * 지역정보에서 국가 목록 조회
     */
    function getNationList(array $param)
    {
        $query = "
            SELECT
                NAT_CD,
                CASE 'KO'
                    WHEN 'KO' THEN NAT_NM_KR
                    WHEN 'EN' THEN NAT_NM_EN
                    WHEN 'JP' THEN NAT_NM_JP
                    WHEN 'CN' THEN NAT_NM_CN
                ELSE NAT_NM_KR END AS NAT_NM
            FROM
                HTT_CODE_NATION
            WHERE
                CD='".$param['f_area']."'
                AND VIEW_YN='Y'
                AND USE_YN='Y'
            ORDER BY VIEW_SEQ ASC    
        ";

        return ms_select( $query, $this->msDB );
    }

    /**
     * 지역정보에서 지역 목록 조회
     */
    function getStateList(array $param)
    {
        $query = "
            SELECT
                STATE_CD,
                CASE 'KO'
                    WHEN 'KO' THEN STATE_NM_KR
                    WHEN 'EN' THEN STATE_NM_EN
                    WHEN 'JP' THEN STATE_NM_JP
                ELSE STATE_NM_KR END AS STATE_NM
            FROM
                HTT_CODE_STATE
            WHERE
                NAT_CD='".$param['f_nation']."'
                AND VIEW_YN='Y'
                AND USE_YN='Y'
        ";

        return ms_select( $query, $this->msDB );
    }

    /**
     * 지역정보에서 도시 목록 조회
     */
    function getCityList(array $param)
    {
        $query = "
            SELECT
                CITY_CODE,
                CASE 'KO'
                    WHEN 'KO' THEN CITY_NM_KR
                    WHEN 'EN' THEN CITY_NM_EN
                    WHEN 'JP' THEN CITY_NM_JP
                    WHEN 'CN' THEN CITY_NM_CN
                ELSE CITY_NM_KR END AS CITY_NM
            FROM
                HTT_CODE_CITY
            WHERE
                CITY_CODE='".$param['f_state']."'
                AND VIEW_YN='Y'
                AND USE_YN='Y'
        ";

        return ms_select( $query, $this->msDB );
    }

    function getProductRatio($idx)
    {
        if( !$idx ) return false;

        $query = "
            SELECT
                *
            FROM
                HTT_ADMIN_MARKUP
            WHERE
                CODE_GDS='".$idx."'
            ORDER BY CLIENT_CD ASC
        ";
        return ms_select( $query, $this->msDB );
    }

    function inTeeTimeRatio(array $param)
    {
        if( empty( $param['columns'] ) ) return false;

        foreach( $param['columns'] AS $k => $row ) {
            $query = "
                INSERT INTO HTT_ADMIN_MARKUP VALUES(
                    '', 
                    '".$param['field_id']."', 
                    '".$k."',
                    '".$row['type']."',
                    '".$row['price']."',
                    '".$row['channel']."',
                    '')
            ";
            ms_query( $query, $this->msDB );
        }
    }

    function inTeeTimePoint(array $param)
    {
        if( !isset( $param['point'] ) ) return false;

        $query = "
            INSERT INTO HTT_ADMIN_MARKUP_POINT VALUES(
                '', 
                '".$param['field_id']."',
                '".$param['point_type']."',
                '".$param['point']."',
                '".date('Y-m-d H:i:s')."',
                '".$param['use_yn']."'
            )
        ";
        ms_query( $query, $this->msDB );
    }

    function delTeeTimeRatio($idx)
    {
        if( !$idx ) return false;

        $query = "
            DELETE FROM HTT_ADMIN_MARKUP WHERE CODE_GDS='".$idx."'
        ";
        ms_query( $query, $this->msDB );
    }

    function delTeeTimePoint($idx)
    {
        if( !$idx ) return false;

        $query = "
            DELETE FROM HTT_ADMIN_MARKUP_POINT WHERE CODE_GDS='".$idx."'
        ";
        ms_query( $query, $this->msDB );
    }
}

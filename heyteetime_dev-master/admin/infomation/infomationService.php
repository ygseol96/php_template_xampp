<?php

class InfomationService
{
    private $myDB;
    private $msDB;

    public function __construct()
    {
        $this->myDB = myConn();
        $this->msDB = msConn();
    }

    // 정보관리 > 다국어관리 > 하위 메뉴 노출
    function getCategoryMenu(array $param)
    {
        $result = [];
        if( $param['depth'] == 3 ) {
            $query = "
                SELECT
                    *
                FROM
                    ht_multi_lang
                WHERE
                    p_code REGEXP '".$param['code']."'
            ";
            $result = my_select( $query, $this->myDB );
        } else {
            $query = "
                SELECT
                    *
                FROM
                    ht_multi_language
                WHERE
                    p_idx='".$_POST['idx']."'
                    AND depth='".$_POST['depth']."'
            ";
            $result = my_select($query, $this->myDB);
        }
        return $result;
    }

    // 정보관리 > 다국어관리 > 메뉴추가
    function inCategoryMenu(array $param)
    {
        $p_idx = $param['p_idx'] ? $param['p_idx'] : 0;

        $query = "
            INSERT INTO ht_multi_language SET
                code_name='".$param['code']."',
                name='".addslashes( $param['name'] )."',
                depth='".$param['gubun']."',
                p_idx='".$p_idx."'
        ";
        // 쿼리실행
        if( my_query($query, $this->myDB) ) {
            return 1;
        } else {
            return 0;
        }
    }

    // 정보관리 > 다국어관리 > 메뉴수정
    function upCategoryMenu( $param )
    {
        if( empty( $param ) ) return false;

        $query = "
            UPDATE ht_multi_language SET
                code_name='".$param['code']."',
                name='".$param['name']."'
            WHERE
                idx='".$param['idx']."'               
        ";
        // 쿼리실행
        if( my_query($query, $this->myDB) ) {
            return 1;
        } else {
            return 0;
        }
    }

    // 정보관리 > 다국어관리 > 메뉴 수정창
    function getCategoryOne($param)
    {
        if( empty( $param ) ) return false;

        $query = "
            SELECT
                *
            FROM
                ht_multi_language
            WHERE
                idx='".$param['idx']."'
        ";

        return my_select_one( $query, $this->myDB );
    }

    // 정보관리 > 다국어관리 > 다국어등록
    function inMultiLingual(array $param)
    {
        if( empty( $param ) ) return false;

        // 이미 등록여부 체크
        $chk = $this->chkMultiLingual( $param );

        // 이미등록됨 -> 등록불가
        if( !empty( $chk ) ) {
        }
        // 등록가능
        else {
            $isTrue = true;
            my_begin_trans( $this->myDB );
            foreach( $param['lang_kind'] AS $key => $lang ) {
                $name = $lang['code'].'_name';
                $query = "
                    INSERT INTO ht_multi_lang SET
                        language_idx = '".$lang['idx']."',
                        p_code = '".$param['p_code']."',
                        code_name = '".$param['code_name']."',
                        name = '".addslashes( $param[$name] )."'
                ";
                if( !my_query( $query, $this->myDB ) )
                    $isTrue = false;
            }

            if( $isTrue == true ) {
                my_commit( $this->myDB );
                return 1;
            } else {
                my_rollback( $this->myDB, $query='');
                return 0;
            }
        }

        return 0;
    }

    // 정보관리 > 다국어관리 > 다국어등록여부 체크
    function chkMultiLingual( $param )
    {
        if( empty( $param ) ) return false;

        $query = "
            SELECT
                p_code
            FROM
                ht_multi_lang
            WHERE
                code_name='".$param['code_name']."'
                AND p_code='".$param['p_code']."'
            LIMIT 1    
        ";

        return my_select_one( $query, $this->myDB ); 
    }

    // 정보관리 > 다국어관리 > 언어등록
    function inLanguage(array $param)
    {
        if( !$param['code'] || !$param['name'] || !$param['disp_name'] ) {
            return 0;
            exit;
        }

        $query = "
            INSERT INTO ht_language SET
                code = '".$param['code']."',
                name = '".addslashes( $param['name'] )."',
                display_name = '".addslashes( $param['disp_name'] )."'
        ";
        if( my_query( $query, $this->myDB ) )
            return 1;
        else
            return 0;
    }

    // 정보관리 > 다국어관리 > 언어수정
    function upLanguage(array $param)
    {
        $ret1 = true;

        for( $i = 0; $i < count( $param['idx'] ); $i++ ) {
            $query = "
                UPDATE ht_language SET
                    code = '".$param['code'][$i]."',
                    name = '".addslashes( $param['name'][$i] )."',
                    display_name = '".addslashes( $param['disp_name'][$i] )."',
                    display_order = '".$param['disp_order'][$i]."'
                WHERE
                    idx='".$param['idx'][$i]."'
            ";
            if( !my_query($query, $this->myDB) ) $ret1 = false;
        }

        if( $ret1 )
            return 1;
        else
            return 0;
    }

    function getCategoryList($depth=0)
    {
        $query = "
            SELECT
                *
            FROM
                ht_multi_language
            WHERE
                depth='".$depth."'
            ORDER BY p_idx ASC, idx ASC
        ";
        
        return my_select( $query, myConn() );
    }

    // 언어 정보 조회 ( 한국어, 영어, 스페인어......)
    function getLanguageKind()
    {
        $query = "
            SELECT
                *
            FROM
                ht_language
            ORDER BY display_order ASC
        ";

        return my_select( $query, myConn() );
    }

    // 통화 정보 조회 ( kRW, USD..... )
   function getCurrencyKind()
   {
        $query = "
            SELECT
                *
            FROM
                ht_currency
            ORDER BY display_order ASC            
        ";

        return my_select( $query, myConn() );
   }

   // 언어관리
}
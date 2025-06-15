<?php
/**
 * 대륙, 국가, 주, 도시를 조회하는 유틸리티 클래스
 */
class Location
{
    private  function __construct() {}
    static function getContinents()
    {
        $query = "
            SELECT
                cd, cd_name
            FROM code_continent
        ";
        return my_select($query, myConn());
    }

    static function getNations($idx=null)
    {
        $whereQuery = "";
        if($idx) {
            $whereQuery .= " AND cd = '$idx' ";
        }

        $query = "
            SELECT
                cd, nat_seq, nat_cd, nat_nm_kr
            FROM code_nation
            WHERE use_yn = 'Y' AND view_yn = 'Y'
            ". $whereQuery ."
        ";
        return my_select($query, myConn());
    }

    static function getStates()
    {

    }

    static function getCities($idx=null)
    {
        $whereQuery = "";
        if($idx) {
            $whereQuery .= " AND nat_seq = '$idx' ";
        }

        $query = "
            SELECT
                  code_nation.nat_seq, code_nation.nat_cd
                , city_seq, city_code, city_nm_kr
            FROM code_city
            LEFT JOIN code_nation
            ON code_city.nat_cd = code_nation.nat_cd AND code_nation.use_yn = 'Y' AND code_nation.view_yn = 'Y'
            WHERE code_city.use_yn = 'Y' AND code_city.view_yn = 'Y'
            ". $whereQuery ."
        ";
        return my_select($query, myConn());
    }
}
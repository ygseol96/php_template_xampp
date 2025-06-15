<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/mail/mail_send.php';
include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";

global $myconn;

$query  = "SELECT * 
            FROM ht_email 
            WHERE send_YN = 'N' and reservation_date < '".date('Y-m-d h:i:s')."' ";


$value = my_select($query, $myconn);
foreach ($value as $key => $item) {

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
                WHERE ht_booking_tee.booking_number = '".$item['product_code']."' ";

    $result = my_select_one($query, $myconn);

    $array = array(
        "{예약자명}" => $result['rev_name'],
        "{예약번호}" => $result['booking_number'],
        "{골프장명}" => $result['prod_name'],
        "{예약일시}" => $result['play_date'],
        "{예약코스}" => $result['course_name'],
        "{예약인원}" => $result['person_count']
    );

    $return = mail_send($item['email_html'], $array, $item['email_subject'], $result['rev_email']);

    $query = "
                UPDATE ht_email SET
                    return_code = '".$return."',
                    reservation_up_date = '".date('Y-m-d h:i:s')."',
                    send_YN = 'Y'
                where idx = ".$item['idx']." ";

    my_query($query, $myconn);
}

?>
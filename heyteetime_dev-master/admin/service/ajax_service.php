<?php
/** ---------------------------------------------------------------
 * 서비스관리 처리
 * create kr.kevin 2024.04.24
 *
------------------------------------------------------------------**/

include_once $_SERVER['DOCUMENT_ROOT']."/inc/adm_include.php";
include_once $_SERVER['DOCUMENT_ROOT']."/inc/lib/Upload.class.php";
include_once $_SERVER['DOCUMENT_ROOT']."/service/ServiceService.php";

$myConn = myConn();
$upload = new Upload();

$ServiceService = new ServiceService();

if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST') {
    $mode = $_REQUEST['mode'];
}


if(empty($mode)) {
    http_response_code(400);
    echo json_encode(array('statusCode'=>400, 'message'=>'잘못된 요청입니다.'));
    exit;
}

/**
 * mode 에따라 분기
 * 'get_menu_content'   : 서비스관리 > 메뉴관리 > 메뉴수정시 데이터 호출
 * 'menu_regist'        : 서비스관리 > 메뉴관리 > 메뉴 등록
 */
switch( $mode ) {
    case 'get_menu_content' :
        $query = "
            SELECT
                *
            FROM
                ht_admin_menu
            WHERE
                idx='".$_POST['idx']."'
            LIMIT 1    
        ";
        $result = my_select_one( $query, $myConn );

        echo json_encode( $result );
    break;
    // 중메뉴 노출
    case 'show_sub_menu' :
        $query = "
            SELECT
                *
            FROM
                ht_admin_menu
            WHERE
                p_idx='".$_POST['idx']."'
                and gubun=1
        ";
        $result = my_select($query, $myConn);

        echo json_encode( $result );
    break;    
    case 'menu_regist' :

        $p_idx = $_POST['p_idx'] ? $_POST['p_idx'] : 0;

        $query = "
            INSERT INTO ht_admin_menu SET
                code_name='".$_POST['code']."',
                p_idx='".$p_idx."',
                gubun='".$_POST['gubun']."',
                name='".addslashes( $_POST['name'] )."',
                url='".$_POST['url']."'
        ";
        // 쿼리실행
        if( my_query($query, $myConn) ) {
            echo 1;
        } else {
            echo 0;
        }

    break;
    case 'menu_modify' :
        $query = "
            UPDATE ht_admin_menu SET
                code_name='".$_POST['code']."',
                name='".addslashes( $_POST['name'] )."',
                url='".$_POST['url']."'
            WHERE
                idx='".$_POST['idx']."'    
        ";
        // 쿼리실행
        if( my_query($query, $myConn) ) {
            echo 1;
        } else {
            echo 0;
        }
    break;
    // 메뉴 삭제
    case 'delete_menu' :

        // 데이터 조회
        $query = "
            SELECT
                ham.*,
                hamf.idx AS hidx,
                hamf.up_name
            FROM
                ht_admin_menu AS ham
                LEFT OUTER JOIN ht_admin_menu_files AS hamf ON hamf.admin_menu_idx=ham.idx
            WHERE ham.idx='".$_POST['idx']."'
            LIMIT 1                
        ";
        $result = my_select_one($query, $myConn);

        my_begin_trans($myConn);
        // 이미지 삭제
        $m1 = true;
        if( $result['up_name'] ) {
            @unlink('/data/service/icons/'.$result['up_name'] );
            $query = "
                DELETE FROM ht_admin_menu_files WHERE idx='".$result['hidx']."';
            ";
            $m1 = my_query( $query, $myConn );
        }

        // 메뉴 데이터 삭제
        $query = "
            DELETE FROM ht_admin_menu WHERE idx='".$result['idx']."'
        ";
        $m2 = my_query( $query, $myConn );

        if( $m1 && $m2 ) {
            my_commit($myConn);
            echo 1;
        } else {
            my_rollback($myConn, $query = "");
            echo 0;
        }
    break;
    // 서비스관리 > 계정관리 > 부서추가
    case 'department_regist' :
        $query = "
            INSERT INTO ht_department SET
                name='".addslashes( $_POST['name'] )."'
        ";
        if( !my_query( $query, $myConn) ) {
            echo 0;
        } else {
            echo 1;
        }
    break;
    // 서비스관리 > 계정관리 > 부서별권한설정
    case 'department_auth_regist' :

        // 기존 권한정보 삭제
        $query = "DELETE FROM ht_department_auth_menu";
        my_query( $query, $myConn );

        // 새로운 권한정보 등록
        if( isset( $_POST['auth'] ) ) {
            foreach ($_POST['auth'] as $k => $item) {
                foreach ($_POST['auth'][$k] as $val) {
                    $query = "
                    INSERT INTO ht_department_auth_menu SET
                        department_idx='" . $k . "',
                        admin_menu_idx='" . $val . "'
                ";
                    my_query($query, $myConn);
                }
            }
        }

        echo 1;
    break;
    // 서비스관리 > 계정관리 권한설정 초기 세팅
    case 'set_department_auth' :
        $query = "
            SELECT
                *
            FROM
                ht_admin_menu
            ORDER BY gubun ASC, idx ASC 
        ";
        $result   = my_select($query, $myconn);
        $_menu = array();
        foreach( $result AS $menu ) {
            if( $menu['gubun'] == 0 ) {
                $_menu[$menu['idx']]['idx'] = $menu['idx'];
                $_menu[$menu['idx']]['code_name'] = $menu['code_name'];
                $_menu[$menu['idx']]['gubun'] = $menu['gubun'];
                $_menu[$menu['idx']]['name'] = $menu['name'];
                $_menu[$menu['idx']]['url'] = $menu['url'];
            } else {
                $count = isset( $_menu[$menu['p_idx']]['menu'] ) ? count( $_menu[$menu['p_idx']]['menu'] ) : 0;

                $_menu[$menu['p_idx']]['menu'][$count]['idx'] = $menu['idx'];
                $_menu[$menu['p_idx']]['menu'][$count]['code_name'] = $menu['code_name'];
                $_menu[$menu['p_idx']]['menu'][$count]['gubun'] = $menu['gubun'];
                $_menu[$menu['p_idx']]['menu'][$count]['name'] = $menu['name'];
                $_menu[$menu['p_idx']]['menu'][$count]['url'] = $menu['url'];
            }
        }

        $i = 0;
        foreach( $_menu AS $key => $val ) {
            unset($_menu[$key] );

            $new_key = $i;
            $_menu[$new_key] = $val;

            $i++;
        }

        $query = "
            SELECT
                *
            FROM
                ht_department_auth_menu
            WHERE
                department_idx='".$_POST['department']."'
        ";
        $result = my_select($query, $myConn);
        $_AUTH_DEPARTMENT = array();
        foreach( $result AS $obj ) {
            // 부서
            $_AUTH_DEPARTMENT[$obj['department_idx']][$obj['admin_menu_idx']] = 1;
        }

        $ret['html'] = '';
        if( !empty( $_menu ) ) {
            foreach ($_menu as $m => $row) {
                $ret['html'] .= '
                <div class="flex flex-col md:flex-row items-center gap-3 mb-5">
                    <div class="w-full md:w-20 font-medium text-slate-600">' . $row['name'] . '</div>
                    <div class="flex-1 flex flex-wrap items-center gap-5">';
                if (!empty($row['menu'])) {
                    foreach ($row['menu'] as $k => $item) {
                        $checked = ( isset( $_AUTH_DEPARTMENT[$row['idx']][$item['idx']] ) ) ? 'checked' : '';
                        $ret['html'] .= '                    
                        <div class="form-check">
                            <input id="account_' . $m . '_' . $k . '" class="form-check-input mTypeVal" type="checkbox" '.$checked.' value="' . $item['idx'] . '">
                            <label class="form-check-label" for="account_' . $m . '_' . $k . '">' . $item['name'] . '</label>
                        </div>';
                    }
                }
                $ret['html'] .= '            
                    </div>
                </div>';
            }
        }

        echo json_encode( $ret );
        exit;
    break;
    // 서비스관리 > 계정등록
    case 'account_regist' :
        if( empty( $_POST ) || !$_POST['name'] || !$_POST['account'] || !$_POST['passwd'] || !$_POST['hp_number'] || !$_POST['email'] ) {
            echo 0;
            exit;
        }

        $department = isset( $_POST['department'] ) ? $_POST['department'] : '1';
        $account = isset( $_POST['account'] ) ? $_POST['account'] : '';
        $passwd = isset( $_POST['passwd'] ) ? $_POST['passwd'] : '';
        $name = isset( $_POST['name'] ) ? $_POST['name'] : '';
        $country = isset( $_POST['country'] ) ? $_POST['country'] : '82';
        $hp_number = isset( $_POST['hp_number'] ) ? $_POST['hp_number'] : '';
        $email = isset( $_POST['email'] ) ? $_POST['email'] : '';
        $status = isset( $_POST['status'] ) ? $_POST['status'] : '1';

        // 게정정보 중복 체크
        $query = "
            SELECT
                idx
            FROM
                ht_admin
            WHERE
                passwd = hex(aes_encrypt('".$passwd."', '".$_INC['env']['encrypt_key']."'))
        ";
        $result = my_select_one($query, $myConn);

        print_re( $result );

        if( !empty( $result ) ) {
            echo 0;
            exit;
        } else {
            // transaction start
            my_begin_trans($myConn);

            $query = "
                INSERT INTO ht_admin SET
                    department_idx='".$department."',
                    account=hex(aes_encrypt('".$account."', '".$_INC['env']['encrypt_key']."')),
                    passwd=hex(aes_encrypt('".$passwd."', '".$_INC['env']['encrypt_key']."')),
                    name=hex(aes_encrypt('".$name."', '".$_INC['env']['encrypt_key']."')),
                    country='".$country."',
                    hp_number=hex(aes_encrypt('".$hp_number."', '".$_INC['env']['encrypt_key']."')),
                    email=hex(aes_encrypt('".$email."', '".$_INC['env']['encrypt_key']."')),
                    status='".$status."',
                    reg_date='".$_INC['date_type']['DATE_YMDHIS']."'
            ";
            $ret1 = my_query($query, $myConn);

            $ret2_flag = true;
            if( !empty( $_POST['auth'] ) ) {
                $my_insert_id = my_insert_id($myConn);

                foreach( $_POST['auth'] AS $auth ) {
                    $query = "
                    INSERT INTO ht_admin_auth_menu SET
                        admin_idx='" . $my_insert_id . "',
                        department_idx='" . $department . "',
                        admin_menu_idx='".$auth."'
                ";
                    if (!my_query($query, $myConn)) {
                        $ret2_flag = false;
                    }
                }
            }

            if( $ret1 && $ret2_flag ) {
                my_commit($myConn);
                echo 1;
            } else {
                my_rollback($myConn);
                echo 2;
            }
        }
    break;
	
	/* 공지사항 리스트 */
	case "getNoticeList":
        echo json_encode($ServiceService->getNoticeList($_REQUEST, true));
    break;

	/* 공지사항 등록하기 */
	case "NoticeInsert":
        echo json_encode($ServiceService->NoticeInsert($_REQUEST, true));
    break;
    /*공지사할 수정*/

    case "NoticeModify":
        echo json_encode($ServiceService->NoticeModify($_REQUEST, true));
        break;

    /* 약관 등록하기 */
    case "TermsInsert":
        echo json_encode($ServiceService->TermsInsert($_REQUEST, true));
    break;

    /* 약관리스트 리스트 */
    case "getTermsList":
        echo json_encode($ServiceService->getTermsList($_REQUEST, true));
    break;

    /* 약관 구분 추가하기 */
    case 'insertTermsKind' :
        echo json_encode( $ServiceService->insertTermsKind( $_REQUEST ) );
    break;


    /* FAQ 등록하기 */
    case "FaqInsert":
        echo json_encode($ServiceService->FaqInsert($_REQUEST, true));
        break;

    /* FAQ  수정하기 */
    case "FaqModify":
        echo json_encode($ServiceService->FaqModify($_REQUEST, true));
        break;

    /* FAQ 리스트 리스트 */
    case "getFaqList":
        echo json_encode($ServiceService->getFaqList($_REQUEST, true));
        break;

    /* FAQ 구분 추가하기 */
    case 'insertFaqKind' :
        echo json_encode( $ServiceService->insertFaqKind( $_REQUEST ) );
        break;


	
}
?>
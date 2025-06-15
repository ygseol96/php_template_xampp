<?php
/** ---------------------------------------------------------------
 * 서비스관리 처리
 * create kr.kevin 2024.04.24
 *
------------------------------------------------------------------**/

include_once $_SERVER['DOCUMENT_ROOT']."/inc/setup.php";
include_once $_SERVER['DOCUMENT_ROOT']."/inc/lib/Upload.class.php";
include_once $_SERVER['DOCUMENT_ROOT']."/infomation/infomationService.php";

//header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_REQUEST['type'];
}

if(empty($type)) {
    http_response_code(400);
    echo json_encode(array('statusCode'=>400, 'message'=>'잘못된 요청입니다.'));
    exit;
}

$infomationService = new InfomationService();

switch( $type ) {
    // 다국어관리 하위 메뉴 노출
    case 'show_sub_category' :
        echo json_encode( $infomationService->getCategoryMenu($_REQUEST) );
        exit;
    // 다국어관리 > 메뉴추가
    case 'category_regist' :
        echo $infomationService->inCategoryMenu($_REQUEST);
        exit;
    // 다국어관리 > 메뉴수정
    case 'category_modify' :
        echo $infomationService->upCategoryMenu($_REQUEST);
        exit;
    // 다국어관리 > 메뉴수정 노출
    case 'get_category_content' :
        echo json_encode( $infomationService->getCategoryOne($_REQUEST) );
        exit;
    // 정보관리 > 다국어관리 > 다국어 등록
    case 'inMultilingual' :
        $_REQUEST['lang_kind'] = $infomationService->getLanguageKind();
        echo $infomationService->inMultiLingual($_REQUEST);
        exit;
    // 정보관리 > 다국어관리 > 언어추가
    case 'lang_regist' :
        echo $infomationService->inLanguage($_REQUEST);
        exit;
    // 정보관리 > 다국어관리 > 언어수정
    case 'lang_update' :
        echo $infomationService->upLanguage($_REQUEST);
        exit;
    default :
        exit;
}

/*
switch( $_POST['mode'] ) {
    // 정보관리 > 다국어관리 > 언어추가
    case 'lang_regist' :
        if( !$_POST['code'] || !$_POST['name'] || !$_POST['disp_name'] ) {
            echo 0;
            exit;
        }

        // transaction start
        my_begin_trans($myConn);

        $ret2 = true;
        $query = "
            INSERT INTO ht_language SET
                code = '".$_POST['code']."',
                name = '".addslashes( $_POST['name'] )."',
                display_name = '".addslashes( $_POST['disp_name'] )."'
        ";
        $ret1 = my_query( $query, $myConn );

        // 첨부파일이 있을경우 파일 업로드
        if( !empty( $_FILES ) ) {
            $idx = my_insert_id( $myConn );

            $_DFILES = array();
            // 키값, 폴더, 업로드파일, 삭제파일
            $_files = $upload->upload( $idx, $_SERVER['DOCUMENT_ROOT'].'/data/information/icons/', $_FILES['icon'], $_DFILES );

            // 업로드 성공시 return array(), 실패시 return false
            if( !empty( $_files ) ) {
                foreach( $_files AS $file ) {
                    $query = "
                        INSERT INTO ht_language_files SET
                            language_idx='".$idx."',
                            ori_name='".$file['fName']."',
                            up_name='".$file['uName']."',
                            file_ext='".$file['ext']."',
                            file_size='".$file['size']."',
                            reg_date='".date('Y-m-d H:i:s' )."'
                    ";
                    if( !my_query( $query, $myConn ) ) {
                        $ret2 = false;
                    }
                }
            } else {
                $ret2 = false;
            }
        }

        if( $ret1 && $ret2 ) {
            my_commit($myConn);
            echo 1;
        } else {
            my_rollback($myConn, $query = "");
            $upload->file_delete($_SERVER['DOCUMENT_ROOT'].'/data/information/icons/', $_files);
            echo 0;
        }
    break;
    // 정보관리 > 언어관리 > 언어 아이콘 삭제
    case 'icon_delete' :
        if( !$_POST['idx'] ) {
            echo 0;
            exit;
        }

        $query = "
            SELECT
                up_name
            FROM
                ht_language_files
            WHERE
                language_idx='".$_POST['idx']."'
        ";
        $icon = my_select_one($query, $myConn);

        if( $icon['up_name'] ) {
            @unlink( $_SERVER['DOCUMENT_ROOT'].'/data/information/icons/'.$icon['up_name'] );

            $query = "DELETE FROM ht_language_files WHERE language_idx='".$_POST['idx']."'";
            if( my_query( $query, $myConn ) )
                echo 1;
            else
                echo 0;

            exit;
        }
        echo 1;
    break;
    case 'lang_update' :
        $ret1 = true;
        $fileIdx = '';
        $idxKeyVal = array();

        // transaction start
        my_begin_trans($myConn);

        for( $i = 0; $i < count( $_POST['idx'] ); $i++ ) {
            $query = "
                UPDATE ht_language SET
                    code = '".$_POST['code'][$i]."',
                    name = '".addslashes( $_POST['name'][$i] )."',
                    display_name = '".addslashes( $_POST['disp_name'][$i] )."',
                    display_order = '".$_POST['disp_order'][$i]."'
                WHERE
                    idx='".$_POST['idx'][$i]."'
            ";
            if( !my_query($query, $myConn) )
                $ret1 = false;

            // 업로드된 아이콘의 키값 설정
            if( isset( $_POST['icon'][$i] ) && $_POST['icon'][$i] != '' ) {
                $idxKeyVal[$i] = $_POST['idx'][$i];
                $fileIdx = $fileIdx ? $fileIdx.','.$_POST['idx'][$i] : $_POST['idx'][$i];
            }
        }

        $fieldArray = array_map('intval', explode(',', $fileIdx));
        $fieldArray = implode("','", $fieldArray);

        // 업로드할 아이콘 있을시 업로드
        $ret2 = true;
        $ret3 = true;
        if( !empty( $_FILES ) ) {
            $_DFILES = array();
            // 기존 아이콘 파일 조회
            $query = "
                SELECT
                    up_name
                FROM
                    ht_language_files
                WHERE
                    language_idx IN( '".$fieldArray."' )
            ";
            $result = my_select($query, $myConn);

            // 삭제할 아이콘파일 설정
            foreach( $result AS $i => $icon ) {
                $_DFILES[$i]['icon'] = $icon['up_name'];
            }

            // 아이콘 업로드
            $_files = $upload->upload( $idxKeyVal, $_SERVER['DOCUMENT_ROOT'].'/data/information/icons/', $_FILES['icon'], $_DFILES );

            // 기존파일 삭제
            if( $fieldArray ) {
                $query = "DELETE FROM ht_language_files WHERE language_idx IN( '" . $fieldArray . "' )";
                if (!my_query($query, $myConn)) {
                    $ret2 = false;
                }
            }

            if( !empty( $_files ) ) {
                foreach( $_files AS $file ) {
                    $query = "
                        INSERT INTO ht_language_files SET
                            language_idx='".$file['idx']."',
                            ori_name='".$file['fName']."',
                            up_name='".$file['uName']."',
                            file_ext='".$file['ext']."',
                            file_size='".$file['size']."',
                            reg_date='".date('Y-m-d H:i:s' )."'
                    ";
                    if( !my_query( $query, $myConn ) )
                        $ret3 = false;
                }
            }
        }

        if( $ret1 && $ret2 && $ret3 ) {
            my_commit($myConn);
            echo 1;
            exit;
        } else {
            my_rollback($myConn, $query = "");
            $upload->file_delete($_SERVER['DOCUMENT_ROOT'].'/data/information/icons/', $_files);
            echo 0;
            exit;
        }
        echo 1;
    break;
    // 다국어관리 > 분류추가
    case 'category_regist' :

        $p_idx = $_POST['p_idx'] ? $_POST['p_idx'] : 0;
        print_re( $_POST );

        $query = "
            INSERT INTO ht_multi_language SET
                code_name='".$_POST['code']."',
                name='".addslashes( $_POST['name'] )."',
                depth='".$_POST['gubun']."',
                p_idx='".$p_idx."'
        ";
        // 쿼리실행
        if( my_query($query, $myConn) ) {
            echo 1;
        } else {
            echo 0;
        }
    break;
    case 'show_sub_category' :
        $result = [];
        if( $_POST['depth'] == 3 ) {
            $query = "
                SELECT
                    *
                FROM
                    ht_multi_language_name
                WHERE
                    code_name REGEXP '^".$_POST['code']."'
            ";
            $result = my_select( $query, $myConn );
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
            $result = my_select($query, $myConn);
        }
        echo json_encode( $result );
    break;
}
*/
?>
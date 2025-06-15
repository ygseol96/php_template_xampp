<?php

class ServiceService {
    private $myDB;
    //private $msDB;
    private static $ENCRYPT_KEY;

    public function __construct() {
        global $_INC;
        $this->myDB = myConn();
        //$this->msDB = msConn();
        self::$ENCRYPT_KEY = $_INC['env']['encrypt_key'];
    }

    /********************* 공통데이터 ****************************/
    // 언어 정보 조회 ( 한국어, 영어, 스페인어......) 선택하는것때문에 info에서 안가져오고 직접 가져온다.
    function getServiceLanguageKind($idx)
    {
                $query = "SELECT *
                ,(SELECT GROUP_CONCAT(up_name) from ht_bbs_faq_lang_files d WHERE c.lang_idx = d.bbs_faq_lang_idx ) AS up_name
                ,if(c.lang_idx IS NOT null, 'Y', 'N') AS lang_chkYN
                FROM(
                SELECT * 
                ,(SELECT subject from ht_bbs_faq_lang b WHERE a.display_order = b.language_idx AND bbs_faq_idx = ".$idx.") AS subjects
                ,(SELECT content from ht_bbs_faq_lang b WHERE a.display_order = b.language_idx AND bbs_faq_idx = ".$idx.") AS contents
                ,(SELECT idx from ht_bbs_faq_lang b WHERE a.display_order = b.language_idx AND bbs_faq_idx = ".$idx.") AS lang_idx
                FROM ht_language a 
                ORDER BY display_order ASC
        )c   ";


        return my_select( $query, myConn() );
    }

    // 공지 정보 조회
    function getNoticeLanguageKind($idx)
    {
        $query = "SELECT *
                ,(SELECT GROUP_CONCAT(up_name) from ht_bbs_notice_lang_files d WHERE c.lang_idx = d.bbs_notice_lang_idx ) AS up_name
                ,if(c.lang_idx IS NOT null, 'Y', 'N') AS lang_chkYN
                FROM(
                SELECT * 
                ,(SELECT subject from ht_bbs_notice_lang b WHERE a.display_order = b.language_idx AND bbs_notice_idx = ".$idx.") AS subjects
                ,(SELECT content from ht_bbs_notice_lang b WHERE a.display_order = b.language_idx AND bbs_notice_idx = ".$idx.") AS contents
                ,(SELECT idx from ht_bbs_notice_lang b WHERE a.display_order = b.language_idx AND bbs_notice_idx = ".$idx.") AS lang_idx
                FROM ht_language a 
                ORDER BY display_order ASC
        )c   ";


        return my_select( $query, myConn() );
    }

    /**************************** 공지사항 시작 **********************/
    /**
     * 공지사항 리스트
     **/
    function getNoticeList(array $param, bool $isPagination)
    {
        global $_INC;
        $whereQuery = "";

        //  수령일 사용일
        //if(isset($param['reg_date']) && isset($param['answer_date'])) {
        if(isset($param['usedate'])) {
            $reg_dateArr = json_decode($param['usedate']);
            //$answer_dateArr = json_decode($param['answer_date']);
            $whereQuery .=
                " AND (
                   (DATE(reg_date) >= '". $reg_dateArr[0] ."' AND DATE(reg_date) <= '". $reg_dateArr[1] ."')
            )";
        }


        $totalQuery = "
        SELECT COUNT(*) as count FROM ht_bbs_notice
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
    FROM ht_bbs_notice        
        WHERE 1=1
        ". $whereQuery ."
        ORDER BY idx desc
        ". $limitQuery ."
    ";


        $result = my_select($query,$this->myDB);

        $data = array();
        $i = 1;

        if( !empty( $result ) ) {
            foreach ($result as $key => $item) {

                $data['data'][$key]['number'] = $i;
                $data['data'][$key]['idx'] = $item['idx'];
                $data['data'][$key]['title'] = $item['subject'];
                $data['data'][$key]['exposure'] = $item['is_noti'];
                $data['data'][$key]['status'] = $item['status'];
                $data['data'][$key]['writer'] = $item['name'];
                $data['data'][$key]['views'] = $item['view_count'];
                $data['data'][$key]['date_created'] = str_replace('-', '.', SUBSTR( $item['reg_date'], 0, 10 ) );
                $i++;
            }
        }

        return $data;
    }

    /**
     * 공지 데이터 호출
     */
    function getNoticeDetail( $idx )
    {

        $query = "SELECT * FROM ht_bbs_notice WHERE idx = ".$idx." ";
        $result = my_select($query,$this->myDB);
        return $result;

    }

    /**
     * 공지사항 등록
     **/
    function NoticeInsert(array $param, bool $isPagination)
    {

        // Debugging: Output the contents of $_FILES superglobal to error log

        error_log("FILES array contents: " . print_r($_FILES, true));
        $top_exposure = $param['top_exposure'] === '' ? 0 : $param['top_exposure'];
        $name = "test";

        $querys = "
        INSERT INTO ht_bbs_notice SET
            subject = '".$param['subject']."',
            name = '".$name."',
            is_noti = ".$top_exposure.",
            status = 1,
            reg_date = '".date("Y-m-d h:i:s")."',
            up_date = '".date("Y-m-d h:i:s")."' ";

        if(my_query($querys, $this->myDB) ) {
            $returns = 1;
        } else {
            $returns = 0;
        }

        $bbs_notice_idx = my_insert_id($this->myDB);
        $langs = explode(",", $param['langs']);

        for($i = 0; $i < count($langs); $i++) {
            $cnt = $langs[$i] - 1;
            $subject = $param['subject-'.$cnt];
            $content = $param['content-'.$cnt];

            $query = "
        INSERT INTO ht_bbs_notice_lang SET
            bbs_notice_idx = ".$bbs_notice_idx.",
            language_idx = ".$langs[$i].",
            subject = '".$subject."',
            content = '".$content."' ";

            if(my_query($query, $this->myDB)) {
                $bbs_notice_lang_idx = my_insert_id($this->myDB);
                $uploadDir = '../_file/notice/'.date("Ymd").'/';

                // 디렉토리가 존재하지 않는 경우 생성
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // 업로드된 파일들 처리
                if (isset($_FILES['uploaded_files-' . $cnt])) {
                    $numFiles = count($_FILES['uploaded_files-' . $cnt]['name']);
                    $uploadedFiles = [];

                    for ($y = 0; $y < $numFiles; $y++) {
                        $file = $_FILES['uploaded_files-' . $cnt];

                        // 파일 업로드 처리
                        $uploadFile = $uploadDir . basename($file['name'][$y]);

                        if (move_uploaded_file($file['tmp_name'][$y], $uploadFile)) {
                            if (!in_array($uploadFile, $uploadedFiles)) {
                                $uploadedFiles[] = $uploadFile;
                                $ori_name = htmlspecialchars(basename($file['name'][$y]));
                                $up_name = htmlspecialchars(basename($file['name'][$y]));
                                $file_size = htmlspecialchars($file['size'][$y]);
                                $file_type = htmlspecialchars($file['type'][$y]);

                                $fileQuery = "
                        INSERT INTO ht_bbs_notice_lang_files SET
                            bbs_notice_lang_idx = " . $bbs_notice_lang_idx . ",
                            ori_name = '" . $ori_name . "',
                            up_name = '" . $up_name . "',
                            file_ext = '" . $file_type . "',
                            file_size = " . $file_size . ",
                            reg_date = '" . date("Y-m-d h:i:s") . "' ";

                                my_query($fileQuery, $this->myDB);
                            }
                        }
                    }
                }
            }
        }

        return $returns;
    }

    /**
     * 공지 사항 수정
     */
    function NoticeModify(array $param, bool $isPagination)
    {
        // Debugging: Output the contents of $_FILES superglobal to error log


        $top_exposure = isset($param['top_exposure']) ? 1 : 0;
        $main_idx = isset($param['main_idx']) ? $param['main_idx'] : null;
        $name = "test";
        $subject = isset($param['subject']) ? $param['subject'] : null;

        // Update main notice
        $querys = "
        UPDATE ht_bbs_notice SET
            subject = '".$subject."',
            name = '".$name."',
            is_noti = ".$top_exposure.",
            status = 1,
            up_date = '".date("Y-m-d h:i:s")."' 
        WHERE idx = ".$main_idx." ";
        error_log("Update query: " . $querys);

        if(my_query($querys, $this->myDB)) {
            $returns = 1;
        } else {
            $returns = 0;
        }

        $langs = explode(",", $param['langs']);
        for($i = 0; $i < count($langs); $i++) {
            $cnt = $langs[$i] - 1;
            $subject = $param['subject-'.$cnt];
            $content = $param['content-'.$cnt];

            // Check if the language entry exists
            $query1 = "SELECT idx FROM ht_bbs_notice_lang WHERE bbs_notice_idx = ". $param['main_idx']." and language_idx = ".$langs[$i]." ";
            $dataChk = my_select_one($query1, $this->myDB);

            $uploadDir = '../_file/notice/' . date("Ymd") . '/';

            // 디렉토리가 존재하지 않는 경우 생성
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // 업로드된 파일들 처리
            $numFiles = count($_FILES['uploaded_files-' . $cnt]['name']);
            $uploadedFiles = [];

            if(count($dataChk) === 1) { // Update existing entry
                $bbs_notice_lang_idx = $dataChk['idx'];

                for ($y = 0; $y < $numFiles; $y++) {
                    $file = $_FILES['uploaded_files-' . $cnt];

                    // 파일 업로드 처리
                    $uploadFile = $uploadDir . basename($file['name'][$y]);

                    if (move_uploaded_file($file['tmp_name'][$y], $uploadFile)) {
                        if (!in_array($uploadFile, $uploadedFiles)) {
                            $uploadedFiles[] = $uploadFile;
                            $ori_name = htmlspecialchars(basename($file['name'][$y]));
                            $up_name = htmlspecialchars(basename($file['name'][$y]));
                            $file_size = htmlspecialchars($file['size'][$y]);
                            $file_type = htmlspecialchars($file['type'][$y]);

                            $fileQuery = "
                    INSERT INTO ht_bbs_notice_lang_files SET
                        bbs_notice_lang_idx = " . $bbs_notice_lang_idx . ",
                        ori_name = '" . $ori_name . "',
                        up_name = '" . $up_name . "',
                        file_ext = '" . $file_type . "',
                        file_size = " . $file_size . ",
                        reg_date = '" . date("Y-m-d h:i:s") . "' ";

                            my_query($fileQuery, $this->myDB);
                        }
                    }
                }

                $query = "
            UPDATE ht_bbs_notice_lang SET
                subject = '".$subject."',
                content = '".$content."' 
            WHERE bbs_notice_idx = ".$param['main_idx']." AND language_idx = ".$langs[$i]." ";

                my_query($query, $this->myDB);

            } else { // Insert new entry
                $query = "
            INSERT INTO ht_bbs_notice_lang SET
                bbs_notice_idx = ".$param['main_idx'].",
                language_idx = ".$langs[$i].",
                subject = '".$subject."',
                content = '".$content."' ";

                if(my_query($query, $this->myDB)) {
                    $bbs_notice_lang_idx = my_insert_id($this->myDB);

                    for ($y = 0; $y < $numFiles; $y++) {
                        $file = $_FILES['uploaded_files-' . $cnt];

                        // 파일 업로드 처리
                        $uploadFile = $uploadDir . basename($file['name'][$y]);

                        if (move_uploaded_file($file['tmp_name'][$y], $uploadFile)) {
                            if (!in_array($uploadFile, $uploadedFiles)) {
                                $uploadedFiles[] = $uploadFile;
                                $ori_name = htmlspecialchars(basename($file['name'][$y]));
                                $up_name = htmlspecialchars(basename($file['name'][$y]));
                                $file_size = htmlspecialchars($file['size'][$y]);
                                $file_type = htmlspecialchars($file['type'][$y]);

                                $fileQuery = "
                        INSERT INTO ht_bbs_notice_lang_files SET
                            bbs_notice_lang_idx = " . $bbs_notice_lang_idx . ",
                            ori_name = '" . $ori_name . "',
                            up_name = '" . $up_name . "',
                            file_ext = '" . $file_type . "',
                            file_size = " . $file_size . ",
                            reg_date = '" . date("Y-m-d h:i:s") . "' ";

                                my_query($fileQuery, $this->myDB);
                            }
                        }
                    }
                }
            }
        }

        return $returns;
    }

    /****************************  공지사항 끝  *************************/


    /**************************** 약관등록 시작 **********************/

    /**
     * 약관등록 리스트
     **/
    function getTermsList(array $param, bool $isPagination)
    {
        global $_INC;
        $whereQuery = "";

        //  수령일 사용일
        //if(isset($param['reg_date']) && isset($param['answer_date'])) {
        if(isset($param['usedate'])) {
            $reg_dateArr = json_decode($param['usedate']);
            //$answer_dateArr = json_decode($param['answer_date']);
            $whereQuery .=
                " AND (
                   (DATE(reg_date) >= '". $reg_dateArr[0] ."' AND DATE(reg_date) <= '". $reg_dateArr[1] ."')
            )";
        }


        $totalQuery = "
        SELECT COUNT(*) as count FROM ht_agree
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
    FROM ht_agree        
        WHERE 1=1
        ". $whereQuery ."
        ORDER BY idx desc
        ". $limitQuery ."
    ";


        $result = my_select($query,$this->myDB);

        $data = array();
        $i = 1;

        if( !empty( $result ) ) {
            foreach ($result as $key => $item) {

                $data['data'][$key]['number'] = $i;
                $data['data'][$key]['idx'] = $item['idx'];
                $data['data'][$key]['division'] = $item['agree_kind_key_idx'];
                $data['data'][$key]['writer'] = '홍길동';
                $data['data'][$key]['date_apply'] = str_replace('-', '.', SUBSTR( $item['start_date'], 0, 10 ) );
                $data['data'][$key]['date_created'] = str_replace('-', '.', SUBSTR( $item['reg_date'], 0, 10 ) );
                $i++;
            }
        }

        return $data;
    }

    /**
     * 약관등록 등록
     **/
    function TermsInsert(array $param, bool $isPagination)
    {

        $content = "약관등록중";

        $querys = "
            INSERT INTO ht_agree SET
                agree_kind_key_idx = '".$param['terms_kind']."',
                admin_idx = 0,
				start_date = '".$param['ko_start_date']."',
				reg_date = '".date("Y-m-d h:i:s")."',
				up_date = '".date("Y-m-d h:i:s")."' ";


        if(my_query($querys, $this->myDB) ) {
            $returns = 1;
        } else {
            $returns = 0;
        }

        /*언어별 업데이트*/
        $terms_idx = my_insert_id($this->myDB);

        if($param['ko_version']) {
            $query = "
            INSERT INTO ht_agree_lang SET
                agree_idx = ".$terms_idx.",
				language_idx = 1,
				content = '".$param['ko_content']."' ";
            my_query($query, $this->myDB);
        }
        if($param['en_version']) {
            $query = "
            INSERT INTO ht_agree_lang SET
                agree_idx = ".$terms_idx.",
				language_idx = 2,
				content = '".$param['en_content']."' ";
            my_query($query, $this->myDB);
        }
        if($param['cn_version']) {
            $query = "
            INSERT INTO ht_agree_lang SET
                agree_idx = ".$terms_idx.",
				language_idx = 4,
				content = '".$param['cn_content']."' ";
            my_query($query, $this->myDB);
        }
        if($param['jp_version']) {
            $query = "
            INSERT INTO ht_agree_lang SET
                agree_idx = ".$terms_idx.",
				language_idx = 6,
				content = '".$param['jp_content']."' ";
            my_query($query, $this->myDB);
        }
        if($param['sp_version']) {
            $query = "
            INSERT INTO ht_agree_lang SET
                agree_idx = ".$terms_idx.",
				language_idx = 3,
				content = '".$param['sp_content']."' ";
            my_query($query, $this->myDB);
        }

        return $returns;

    }


    /**
     * 약관등록 구분 표시
     */
    function getTermsSelectKindList()
    {
        $query = " SELECT * FROM ht_agree_kind WHERE language_idx = 1 group by agree_kind_key_idx ";

        return my_select($query, $this->myDB);
    }

    /**
     * 약관등록 구분 등록
     */
    function insertTermsKind(array $param)
    {
        $querys = "INSERT INTO ht_agree_kind_key () VALUES () ";
        my_query($querys, $this->myDB);
        $term_kind_key = my_insert_id($this->myDB);


        if($param['ko']){ //한국
            $query = "
				INSERT INTO ht_agree_kind SET
					agree_kind_key_idx = ".$term_kind_key.",
					language_idx = 1,
					kind_name = '".$param['ko']."' ";

            my_query($query, $this->myDB);
        }
        if($param['en']){ //영어
            $query = "
				INSERT INTO ht_agree_kind SET
					agree_kind_key_idx = ".$term_kind_key.",
					language_idx = 2,
					kind_name = '".$param['en']."' ";

            my_query($query, $this->myDB);
        }
        if($param['sp']){ //스페인
            $query = "
				INSERT INTO ht_agree_kind SET
					agree_kind_key_idx = ".$term_kind_key.",
					language_idx = 3,
					kind_name = '".$param['sp']."' ";

            my_query($query, $this->myDB);
        }
        if($param['jp']){ //일본
            $query = "
				INSERT INTO ht_agree_kind SET
					agree_kind_key_idx = ".$term_kind_key.",
					language_idx = 6,
					kind_name = '".$param['jp']."' ";

            my_query($query, $this->myDB);
        }
        if($param['cn']){ //중국
            $query = "
				INSERT INTO ht_agree_kind SET
					agree_kind_key_idx = ".$term_kind_key.",
					language_idx = 4,
					kind_name = '".$param['cn']."' ";

            my_query($query, $this->myDB);
        }

        return 1;

    }


    /****************************  약관등록 끝  *************************/



    /**************************** FAQ 시작 **********************/

    /**
     * FAQ 리스트
     **/
    function getFaqList(array $param, bool $isPagination)
    {
        global $_INC;
        $whereQuery = "";

        //  수령일 사용일
        //if(isset($param['reg_date']) && isset($param['answer_date'])) {
        if(isset($param['usedate'])) {
            $reg_dateArr = json_decode($param['usedate']);
            //$answer_dateArr = json_decode($param['answer_date']);
            $whereQuery .=
                " AND (
                   (DATE(reg_date) >= '". $reg_dateArr[0] ."' AND DATE(reg_date) <= '". $reg_dateArr[1] ."')
            )";
        }

        if(!$param['exposure'] && $param['exposure'] != 'undefined') {
            $whereQuery .=
                " AND (status = ".$param['exposure']." )";
        }
        /*
            if(!$param['language'] && $param['language'] != 'undefined') {
                $whereQuery .=
                    " AND (status = ".$param['language']." )";
            }
        */
        if($param['category'] && $param['category'] != 'undefined') {
            $whereQuery .=
                " AND (bbs_faq_option_key_idx = ".$param['category']." )";
        }


        $totalQuery = "
        SELECT COUNT(*) as count FROM ht_bbs_faq
        WHERE 1=1 " . $whereQuery;

        $limitQuery = "";
        if($isPagination) {
            $data['total'] = intval(my_select_one($totalQuery, $this->myDB)['count']);
            $data['last_page'] = ceil($data['total'] / $param['size']);

            $offset = ($param['page'] - 1) * $param['size'];
            $limit = $param['size'];
            $limitQuery = 'LIMIT '. $offset  .', '. $limit;
        }
        $sub_query = ", (SELECT subject from ht_bbs_faq_lang WHERE ht_bbs_faq_lang.bbs_faq_idx = ht_bbs_faq.idx AND language_idx = 1) AS lang_subject
                    , (SELECT name from ht_bbs_faq_option WHERE ht_bbs_faq_option.bbs_faq_option_key_idx = ht_bbs_faq.bbs_faq_option_key_idx AND language_idx = 1) AS option_name ";
        $query = "
        SELECT * ".$sub_query ."
    FROM ht_bbs_faq        
        WHERE 1=1
        ". $whereQuery ."
        ORDER BY idx desc
        ". $limitQuery ."
    ";

        $result = my_select($query,$this->myDB);


        $data = array();
        $i = 1;

        if( !empty( $result ) ) {
            foreach ($result as $key => $item) {

                $stats = $item['status'] == 0 ? "미노출" : "노출";

                $data['data'][$key]['number'] = $i;
                $data['data'][$key]['idx'] = $item['idx'];
                $data['data'][$key]['division'] = $item['option_name'];
                $data['data'][$key]['state'] = $stats;
                $data['data'][$key]['title'] = $item['lang_subject'];
                $data['data'][$key]['date_created'] = str_replace('-', '.', SUBSTR( $item['reg_date'], 0, 10 ) );
                $i++;
            }
        }



        return $data;
    }

    /**
     * FAQ 상세페이지 idx
     **/
    function getFaqDetail( $idx )
    {

        $query = "SELECT * FROM ht_bbs_faq WHERE idx = ".$idx." ";
        $result = my_select($query,$this->myDB);
        return $result;

    }

    /**
     * FAQ 등록
     **/
    function FaqInsert(array $param, bool $isPagination)
    {

        $querys = "
            INSERT INTO ht_bbs_faq SET
                bbs_faq_option_key_idx = '".$param['terms_kind']."',
                status = '".$param['top_exposure']."',
				reg_date = '".date("Y-m-d h:i:s")."',
				up_date = '".date("Y-m-d h:i:s")."' ";


        if(my_query($querys, $this->myDB) ) {
            $returns = 1;
        } else {
            $returns = 0;
        }

        /*언어별 업데이트*/
        $insert_idx = my_insert_id($this->myDB);
        $lang_cnt = $param['lang_cnt'];

        $langs = explode(",", $param['langs']);
        for($i=0; $i<count($langs); $i++){
            $cnt = $langs[$i] - 1;
            $subject = $param['subject-'.$cnt];
            $content = $param['content-'.$cnt];

            $uploadDir = '../_file/service/'.date("Ymd").'/';

            // 디렉토리가 존재하지 않는 경우 생성
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // 업로드된 파일들 처리
            $numFiles = count($_FILES['uploaded_files-'.$cnt]['name']);

            for ($y = 0; $y < $numFiles; $y++) {
                $file = $_FILES['uploaded_files-'.$cnt];

                // 파일 업로드 처리
                $uploadFile = $uploadDir . basename($file['name'][$y]);

                if (move_uploaded_file($file['tmp_name'][$y], $uploadFile)) {

                    $ori_name = htmlspecialchars(basename($file['name'][$y]));
                    $up_name = htmlspecialchars(basename($file['name'][$y]));
                    $file_size = htmlspecialchars($file['size'][$y]);
                    $file_type = htmlspecialchars($file['type'][$y]);

                    $query = "
                        INSERT INTO ht_bbs_faq_lang_files SET
                            bbs_faq_lang_idx = ".$insert_idx.",
                            ori_name = '".$ori_name."',
                            up_name = '".$up_name."',
                            file_ext = '".$file_type."',
                            file_size = ".$file_size.",
                            reg_date = '".date("Y-m-d h:i:s")."' ";
                    my_query($query, $this->myDB);


                }
            }

            $query = "
            INSERT INTO ht_bbs_faq_lang SET
                bbs_faq_idx = ".$insert_idx.",
				language_idx = ".$langs[$i].",
				subject = '".$subject."',
				content = '".$content."' ";
            my_query($query, $this->myDB);



            /*
              for ($i = 0; $i < $numFiles; $i++) {
                  $file = $_FILES['uploaded_files'];

                  // 파일 업로드 처리
                  $uploadFile = $uploadDir . basename($file['name'][$i]);

                  if (move_uploaded_file($file['tmp_name'][$i], $uploadFile)) {
                      echo "File " . ($i + 1) . " successfully uploaded.";
                      echo "<br>File name: " . htmlspecialchars(basename($file['name'][$i]));
                      echo "<br>File type: " . htmlspecialchars($file['type'][$i]);
                      echo "<br>File size: " . htmlspecialchars($file['size'][$i]) . " bytes";
                      echo "<br>";
                  } else {
                      echo "File " . ($i + 1) . " upload failed.";
                      echo "<br>";
                  }
              }
  */

        }


        return $returns;

    }



    /**
     * FAQ 수정하기
     **/
    function FaqModify(array $param, bool $isPagination)
    {

        $querys = "
            UPDATE ht_bbs_faq SET
                bbs_faq_option_key_idx = " . $param['terms_kind'] . ",
                status = " . $param['top_exposure'] . ",
				up_date = '" . date("Y-m-d h:i:s") . "' 
			where idx = " . $param['main_idx'] . " ";


        if (my_query($querys, $this->myDB)) {
            $returns = 1;
        } else {
            $returns = 0;
        }

        $langs = explode(",", $param['langs']);
        for ($i = 0; $i < count($langs); $i++) {

            /*값이 존재하는지 확인합니다*/
            $query1 = "SELECT idx FROM ht_bbs_faq_lang WHERE bbs_faq_idx = " . $param['main_idx'] . " and language_idx = " . $langs[$i] . " ";
            $dataChk = my_select_one($query1, $this->myDB);

            $cnt = $langs[$i] - 1;
            $subject = $param['subject-' . $cnt];
            $content = $param['content-' . $cnt];

            if (count($dataChk) === 1) { //UPDATE

                $uploadDir = '../_file/service/' . date("Ymd") . '/';

                // 디렉토리가 존재하지 않는 경우 생성
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // 업로드된 파일들 처리
                $numFiles = count($_FILES['uploaded_files-' . $cnt]['name']);

                for ($y = 0; $y < $numFiles; $y++) {
                    $file = $_FILES['uploaded_files-' . $cnt];

                    // 파일 업로드 처리
                    $uploadFile = $uploadDir . basename($file['name'][$y]);

                    if (move_uploaded_file($file['tmp_name'][$y], $uploadFile)) {

                        $ori_name = htmlspecialchars(basename($file['name'][$y]));
                        $up_name = htmlspecialchars(basename($file['name'][$y]));
                        $file_size = htmlspecialchars($file['size'][$y]);
                        $file_type = htmlspecialchars($file['type'][$y]);

                        $query = "
                            update ht_bbs_faq_lang_files SET
                                ori_name = '" . $ori_name . "',
                                up_name = '" . $up_name . "',
                                file_ext = '" . $file_type . "',
                                file_size = " . $file_size . ",
                                reg_date = '" . date("Y-m-d h:i:s") . "' 
                            where idx = " . $param['main_idx'] . " ";
                        my_query($query, $this->myDB);


                    }
                }

                $query = "
                update ht_bbs_faq_lang SET
                    bbs_faq_idx = " . $param['main_idx'] . ",
                    language_idx = " . $langs[$i] . ",
                    subject = '" . $subject . "',
                    content = '" . $content . "' 
                where bbs_faq_idx = " . $param['main_idx'] . " and language_idx = " . $langs[$i] . " ";

                my_query($query, $this->myDB);

            } else {


                $uploadDir = '../_file/service/' . date("Ymd") . '/';

                // 디렉토리가 존재하지 않는 경우 생성
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // 업로드된 파일들 처리
                $numFiles = count($_FILES['uploaded_files-' . $cnt]['name']);

                for ($y = 0; $y < $numFiles; $y++) {
                    $file = $_FILES['uploaded_files-' . $cnt];

                    // 파일 업로드 처리
                    $uploadFile = $uploadDir . basename($file['name'][$y]);

                    if (move_uploaded_file($file['tmp_name'][$y], $uploadFile)) {

                        $ori_name = htmlspecialchars(basename($file['name'][$y]));
                        $up_name = htmlspecialchars(basename($file['name'][$y]));
                        $file_size = htmlspecialchars($file['size'][$y]);
                        $file_type = htmlspecialchars($file['type'][$y]);

                        $query = "
                    INSERT INTO ht_bbs_faq_lang_files SET
                        bbs_faq_lang_idx = " . $param['main_idx'] . ",
                        ori_name = '" . $ori_name . "',
                        up_name = '" . $up_name . "',
                        file_ext = '" . $file_type . "',
                        file_size = " . $file_size . ",
                        reg_date = '" . date("Y-m-d h:i:s") . "' ";
                        my_query($query, $this->myDB);
                    }
                }

                $query = "
                INSERT INTO ht_bbs_faq_lang SET
                    bbs_faq_idx = " . $param['main_idx'] . ",
                    language_idx = " . $langs[$i] . ",
                    subject = '" . $subject . "',
                    content = '" . $content . "' ";
                my_query($query, $this->myDB);
            }
        }

        return $returns;

    }


    /**
     * FAQ 구분 표시
     */
    function getFaqSelectKindList()
    {
        $query = " SELECT * FROM ht_bbs_faq_option WHERE language_idx = 1 group by bbs_faq_option_key_idx ";

        return my_select($query, $this->myDB);
    }

    /**
     * FAQ 구분 등록
     */
    function insertFaqKind(array $param)
    {
        $querys = "INSERT INTO ht_bbs_faq_option_key () VALUES () ";
        my_query($querys, $this->myDB);
        $term_kind_key = my_insert_id($this->myDB);


        if($param['ko']){ //한국
            $query = "
				INSERT INTO ht_bbs_faq_option SET
					bbs_faq_option_key_idx = ".$term_kind_key.",
					language_idx = 1,
					reg_date = '".date("Y-m-d h:i:s")."',
					name = '".$param['ko']."' ";

            my_query($query, $this->myDB);
        }
        if($param['en']){ //영어
            $query = "
				INSERT INTO ht_bbs_faq_option SET
					bbs_faq_option_key_idx = ".$term_kind_key.",
					language_idx = 2,
					reg_date = '".date("Y-m-d h:i:s")."',
					name = '".$param['en']."' ";

            my_query($query, $this->myDB);
        }
        if($param['sp']){ //스페인
            $query = "
				INSERT INTO ht_bbs_faq_option SET
					bbs_faq_option_key_idx = ".$term_kind_key.",
					language_idx = 3,
					reg_date = '".date("Y-m-d h:i:s")."',
					name = '".$param['sp']."' ";

            my_query($query, $this->myDB);
        }
        if($param['jp']){ //일본
            $query = "
				INSERT INTO ht_bbs_faq_option SET
					bbs_faq_option_key_idx = ".$term_kind_key.",
					language_idx = 6,
					reg_date = '".date("Y-m-d h:i:s")."',
					name = '".$param['jp']."' ";

            my_query($query, $this->myDB);
        }
        if($param['cn']){ //중국
            $query = "
				INSERT INTO ht_bbs_faq_option SET
					bbs_faq_option_key_idx = ".$term_kind_key.",
					language_idx = 4,
					reg_date = '".date("Y-m-d h:i:s")."',
					name = '".$param['cn']."' ";

            my_query($query, $this->myDB);
        }

        return 1;

    }


    /****************************  FAQ 끝  *************************/
}

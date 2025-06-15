<?php
/**
 * 파일 업로드 클래스
 * create kr.kevin 2024.04.25
 */
class Upload{

    /**
     * 파일 업로드
     * $idx     : 파일키값
     * $dir     : 파일위치
     * $nFiles  : 신규파일
     * $dFiles  : 삭제파일
     */
    public function upload($key, $dir, $nFiles, $dFiles=array(), $opts=array())
    {
        if( ( !$key && empty( $key ) ) || !$dir || empty( $nFiles ) ) return false;

        try {
            // 파일 삭제
            if( !empty( $dFiles ) ) {
                foreach( $dFiles AS $d ) {
                    @unlink( $dir.$d['icon'] );
                }
            }

            $fileList = array();
            $uploadFlag = true;
            foreach( $nFiles['name'] AS $f => $file ) {
                if( isset( $nFiles['tmp_name'][$f] ) && $nFiles['tmp_name'][$f] != '' ) {
                    $idx = ( is_array( $key ) ) ? $key[$f] : $key;

                    $file_ext = explode('.', $file);
                    $ufileName = $idx . '_' . time() . '_' . $f . '.' . end($file_ext);

                    // 파일 업로드
                    if( move_uploaded_file( $nFiles['tmp_name'][$f], $dir.$ufileName ) ) {
                        $fileList[$f]['idx']    = $idx;
                        $fileList[$f]['fName']  = $file;
                        $fileList[$f]['uName']  = $ufileName;
                        $fileList[$f]['ext']    = $file_ext[1];
                        $fileList[$f]['size']   = $nFiles['size'][$f];

                        // 썸네일 설정
                        if (!empty($opts) && $opts['isThumb']) {
                            $uThumbName = $idx . '_' . time() . '_' . $f . '_thumb.' . end($file_ext);

                            resizeImage($dir . $ufileName, $opts['maxWidth'], $opts['maxHeight'], $dir, $uThumbName);
                            $fileList[$f]['tName'] = $uThumbName;
                        }
                    } else {
                        $uploadFlag = false;
                    }
                }
            }

            if( $uploadFlag )
                return $fileList;
            else {
                $this->file_delete($dir, $fileList);
                return false;
            }
        } catch(Excetpion $e) {
            return false;
        }
    }

    /**
     * 파일 삭제
     * $dir     : 파일위치
     * $dFiles  : 삭제파일
     */
    public function file_delete($dir, $dFile)
    {
        if( !$dir || empty( $dFile ) ) return false;

        foreach( $dFile AS $d ) {
            @unlink( $dir.$d );
        }
    }
}
?>
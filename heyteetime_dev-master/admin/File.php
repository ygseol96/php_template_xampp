<?php

class File
{
    private  function __construct() {}

    static function uploadOne(array $file, string $category)
    {
        $directory = "/_files/$category/".getCurrentYearMonth();
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $uniqueFileName = basename(generateUniqueFilename($extension));

        if (!file_exists($_SERVER['DOCUMENT_ROOT'].$directory)) {
            $result = mkdir($_SERVER['DOCUMENT_ROOT'].$directory, 0777, true);
            if (!$result) {
                return array('status'=>false, 'code'=>500 ,'msg'=> '디렉토리 생성에 실패했습니다.');
            }
        }

        $fullPath = $directory ."/" .$uniqueFileName;

        if(move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$fullPath)) {
            chmod($_SERVER['DOCUMENT_ROOT'].$fullPath, 0777);
            return array('status'=>true, 'file'=>$file, 'path'=>$fullPath);
        } else {
            return array('status'=>false, 'code'=>500, 'msg'=> '파일 업로드에 실패했습니다.');
        }
    }
}
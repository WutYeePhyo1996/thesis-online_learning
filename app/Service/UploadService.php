<?php 

namespace App\Service;
use Storage;

use Service;

class UploadService
{
    static function fileUpload($file, $path)
    {
        $file->storeAs($path,$file->getClientOriginalName());
    }

    static function checkFileExist($file, $file_name, $path)
    {
        if(isset($file)){
            Storage::delete($path.$file_name);
            $file_name= $file->getClientOriginalName();
            self::fileUpload($file, $path);
        }
        return $file_name;
    }
}
<?php 
namespace App\Helper;
class mHelper
{

    static function split($icerik,$limit)
    {  
    if(strlen($icerik) > $limit) 
    {
        $icerik = mb_substr($icerik,0,$limit,"UTF-8")."  ...";
    }
    return strip_tags($icerik);
    }   
    static function largeImage($image)
    {
        $imageExplode = explode('/',$image);
        $filename = end($imageExplode);
        $key = key($imageExplode);
        unset($imageExplode[$key]);
        $implodeImage = implode('/',$imageExplode);
        return $implodeImage."/large/".$filename;
    }

}

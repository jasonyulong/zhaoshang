<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/3/20
 * Time: 14:22
 */

namespace app\common\model;

use think\Model;

class Filem extends Model
{
    static function file_add($file,$dir,$ext,$size){
        if(!empty($file)){
            $file->rule("uniqid");
            $file->validate(['size' =>$size, 'ext' => $ext]);   //2M
            $info = $file->move(ROOT_PATH . 'public' . DS .$dir);
            if ($info) {
                return $dir . $info->getSaveName();
            } else {
                return $file->getError();
            }
        }else{
            return '';
        }
    }

    static function file_del($picurl){
        $picurl='./'.$picurl;
        if(strlen($picurl)>4&&file_exists($picurl)){
            @unlink($picurl);
        }
    }
}
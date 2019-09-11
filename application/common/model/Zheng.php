<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/3/22
 * Time: 10:40
 */

namespace app\common\model;

use think\Model;

class Zheng extends Model
{
    function add($data,$file){
        $map=explode(",",$data["map"]);
        if(count($map)==2){
            $data["mapx"]=$map[0];
            $data["mapy"]=$map[1];
            unset($data["map"]);
        }
        $data["pic"]=Filem::file_add($file,'/uploads/feng/',"jpg,png,gif",1024*1024*2);

        if(empty($data["pic"])) $data["pic"]="";
        if(empty($data["pro"])) $data["pro"]="";
        if(empty($data["city"])) $data["city"]="";
        if(empty($data["picsid"])) $data["picsid"]=0;
        if(empty($data["hangye"])) $data["hangye"]="";
        if(empty($data["guimo"])) $data["guimo"]="";
        if(empty($data["qiye"])) $data["qiye"]=0;
        if(empty($data["area"])) $data["area"]=0;
        if(empty($data["mapx"])) $data["mapx"]="";
        if(empty($data["mapy"])) $data["mapy"]="";
        if(empty($data["huanjing"])) $data["huanjing"]="";
        if(empty($data["zhengche"])) $data["zhengche"]="";
        if(empty($data["dili"])) $data["dili"]="";
        if(empty($data["fengcai"])) $data["fengcai"]="";
        if(empty($data["look"])) $data["look"]=0;
        if(empty($data["zheng"])) $data["zheng"]=0;

        $data["time"]=time();
        $res = $this->validate("Zheng.add")->allowField(true)->save($data);
        return $res;
    }
    function edit($data,$file){
        $map=explode(",",$data["map"]);
        if(count($map)==2){
            $data["mapx"]=$map[0];
            $data["mapy"]=$map[1];
            unset($data["map"]);
        }
        $data["pic"]=Filem::file_add($file,'/uploads/feng/',"jpg,png,gif",1024*1024*2);
        if(!empty($info["pic"])) Filem::file_del($this->where(array('id'=>$data["id"]))->value('pic'));

        $res=$this->validate("Zheng.edit")->allowField(true)->isUpdate()->save($data);
        return $res;
    }
    function del($id){
        $info=$this->where(array('id'=>$id))->find();
        if(!empty($info["pic"])) Filem::file_del($info["pic"]);

        $res = $this->where(array('id' => $id))->delete();
        return $res;
    }
}
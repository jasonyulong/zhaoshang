<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/3/22
 * Time: 10:40
 */

namespace app\common\model;

use think\Model;

class Tudi extends Model
{
    function add($data,$file){
        $map=explode(",",$data["map"]);
        if(count($map)==2){
            $data["mapx"]=$map[0];
            $data["mapy"]=$map[1];
            unset($data["map"]);
        }
        $data["pic"]=Filem::file_add($file,'/uploads/feng/',"jpg,png,gif",1024*1024*2);

        if(empty($data["member_id"])) $data["member_id"]=0;
        if(empty($data["pic"])) $data["pic"]="";
        if(empty($data["pro"])) $data["pro"]="";
        if(empty($data["city"])) $data["city"]="";
        if(empty($data["picsid"])) $data["picsid"]=0;
        if(empty($data["area"])) $data["area"]=0;
        if(empty($data["hangye"])) $data["hangye"]="";
        if(empty($data["zujing"])) $data["zujing"]=0;
        if(empty($data["shou"])) $data["shou"]=0;
        if(empty($data["year"])) $data["year"]=0;
        if(empty($data["xingzhi"])) $data["xingzhi"]="";
        if(empty($data["zheng"])) $data["zheng"]="";
        if(empty($data["mapx"])) $data["mapx"]="";
        if(empty($data["mapy"])) $data["mapy"]="";
        if(empty($data["look"])) $data["look"]="";
        if(empty($data["seo_key"])) $data["seo_key"]="";
        if(empty($data["seo_des"])) $data["seo_des"]="";

        if(empty($data["uptype"])) $data["uptype"]="";
        if(empty($data["liang"])) $data["liang"]="";

        if(!empty($data["liang"])){
            $tp=$data["liang"];
            unset($data["liang"]);
            $data["liang"]=implode(",",$tp);
        }

        $data["time"]=time();
        $res = $this->validate("Tudi.add")->allowField(true)->save($data);
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

        if(!empty($data["liang"])){
            $tp=$data["liang"];
            unset($data["liang"]);
            $data["liang"]=implode(",",$tp);
        }

        $res=$this->validate("Tudi.edit")->allowField(true)->isUpdate()->save($data);
        return $res;
    }
    function del($id){
        $info=$this->where(array('id'=>$id))->find();
        if(!empty($info["pic"])) Filem::file_del($info["pic"]);

        $res = $this->where(array('id' => $id))->delete();
        return $res;
    }
}
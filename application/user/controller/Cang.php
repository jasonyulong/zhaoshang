<?php
namespace app\user\controller;

use app\common\controller\User;
use app\common\model\Member as MemberModel;

class Cang extends User
{
    public function article()
    {
        $where=array();

        $allid=db("MemberCang")->field("cid")->where(array("type"=>"article","member_id"=>$this->userinfo["id"]))->order("id desc")->select();
        foreach($allid as $v){
            $ids[]=$v["cid"];
        }
        if(isset($ids)){
            $where["id"]=array("in",implode(",",$ids));
        }else{
            $where["id"]="-1";
        }

        $list=db("article")->where($where)->order("id desc")->limit(3)->select();
        for($i=0;$i<count($list);$i++){
            $list[$i]["content"]=remove_html($list[$i]["content"]);
            $list[$i]["content"] = mb_substr($list[$i]['content'], 0, 50, 'utf-8');
        }
        $this->assign("list",$list);

        $ran=db("article")->order("rand()")->limit(3)->select();
        for($i=0;$i<count($ran);$i++){
            $ran[$i]["content"]=remove_html($ran[$i]["content"]);
            $ran[$i]["content"] = mb_substr($ran[$i]['content'], 0, 50, 'utf-8');
        }
        $this->assign("ran",$ran);

        return $this->fetch();
    }
    public function fang()
    {
        $where=array();

        $allid=db("MemberCang")->field("cid")->where(array("type"=>"fang","member_id"=>$this->userinfo["id"]))->order("id desc")->select();
        foreach($allid as $v){
            $ids[]=$v["cid"];
        }
        if(isset($ids)){
            $where["id"]=array("in",implode(",",$ids));
        }else{
            $where["id"]="-1";
        }

        $list=db("Fang")->where($where)->order("id desc")->limit(6)->select();
        $this->assign("list",$list);

        $ran=db("Fang")->order("rand()")->limit(3)->select();
        $this->assign("ran",$ran);

        return $this->fetch();
    }
    public function tudi()
    {
        $where=array();

        $allid=db("MemberCang")->field("cid")->where(array("type"=>"tudi","member_id"=>$this->userinfo["id"]))->order("id desc")->select();
        foreach($allid as $v){
            $ids[]=$v["cid"];
        }
        if(isset($ids)){
            $where["id"]=array("in",implode(",",$ids));
        }else{
            $where["id"]="-1";
        }

        $list=db("Tudi")->where($where)->order("id desc")->limit(6)->select();
        $this->assign("list",$list);

        $ran=db("Tudi")->order("rand()")->limit(3)->select();
        $this->assign("ran",$ran);

        return $this->fetch();
    }
    public function lou()
    {
        $where=array();

        $allid=db("MemberCang")->field("cid")->where(array("type"=>"lou","member_id"=>$this->userinfo["id"]))->order("id desc")->select();
        foreach($allid as $v){
            $ids[]=$v["cid"];
        }
        if(isset($ids)){
            $where["id"]=array("in",implode(",",$ids));
        }else{
            $where["id"]="-1";
        }

        $list=db("Lou")->where($where)->order("id desc")->limit(6)->select();
        $this->assign("list",$list);

        $ran=db("Lou")->order("rand()")->limit(3)->select();
        $this->assign("ran",$ran);

        return $this->fetch();
    }
}
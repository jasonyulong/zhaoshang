<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Member as MemberModel;

class Tudi extends Defa
{
    public function info()
    {
        if($this->request->isPost()) {
            if(!$this->islogin){
                $this->error("您还没有登录");
                die();
            }
            $data = input('post.');
            db("Message")->insert(array("title"=>"土地需求","time"=>time(),"member_id"=>$data["member_id"],"content"=>serialize($data)));
            $this->success("提交成功", url("index/index/index"),'',0);
        }else{
            $id = input('id', '', 'trim,intval');
            $info = db('Tudi')->where(array('id' => $id))->find();
            if($info){
                $info["pro"]=db("province")->where(array("code"=>$info["pro"]))->value("name");
                $info["city"]=db("city")->where(array("code"=>$info["city"]))->value("name");
            }
            if($info["shou"]>9999) $info["shou"]=(round($info["shou"]/10000,1))."万";

            if(empty($info["seo_key"])) $info["seo_key"]=$info["title"];
            if(empty($info["seo_des"])) $info["seo_des"]=mb_substr(strip_tags($info['des']),0,100,'utf-8');

            $this->assign("info",$info);

            $ran=db('Tudi')->order("rand()")->limit(4)->select();
            for($i=0;$i<count($ran);$i++){
                $ran[$i]["pro"]=db("province")->where(array("code"=>$ran[$i]["pro"]))->value("name");
                $ran[$i]["city"]=db("city")->where(array("code"=>$ran[$i]["city"]))->value("name");
            }
            $this->assign("ran",$ran);

            $piclist=array();
            if(!empty($info["picsid"])&&$info["picsid"]>0) $piclist=db("pic")->order("id desc")->where(array("sortid" => $info["picsid"]))->select();
            $this->assign("piclist", $piclist);

            db("Tudi")->where(array('id' => $id))->setInc("look");
            return $this->fetch();
        }
    }
}

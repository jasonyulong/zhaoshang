<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/3/29
 * Time: 11:04
 */

namespace app\admin\controller;

use app\common\controller\Admin;

class Zheng extends Admin
{
    function index(){
        $info=db('Zheng')->order('id desc')->paginate(15,false,['query'=>request()->param()]);
        $this->assign("list",$info);
        return $this->fetch();
    }
    public function add(){
        if($this->request->isPost()){
            $data=input('post.');
            $mod=new \app\common\model\Zheng();
            $result=$mod->add($data,$this->request->file('pic'));
            if($result!==false){
                $this->success("成功", url("admin/zheng/index"),'',0);
            }else{
                $this->error($mod->getError());
            }
        }else{
            $this->assign("dic",dic());
            $this->assign("province",db("province")->select());
            $this->assign("picsid",time());
            return $this->fetch();
        }
    }
    public function edit(){
        if($this->request->isPost()){
            $data=input('post.');
            $mod=new \app\common\model\Zheng();
            $resutl=$mod->edit($data,$this->request->file('pic'));
            if($resutl!==false){
                $this->success("成功", url("admin/zheng/index"),'',0);
            }else{
                $this->error($mod->getError());
            }
        }else{
            $id=input('id');
            $info=db('Zheng')->where(array('id'=>$id))->find();
            $this->assign("info",$info);

            $this->assign("dic",dic());
            $this->assign("province",db("province")->select());

            if(empty($info["picsid"])) $info["picsid"]=time();
            $this->assign("picsid",$info["picsid"]);
            $piclist=db("Pic")->where(array("sortid"=>$info["picsid"]))->select();
            $this->assign("piclist",$piclist);

            return $this->fetch();
        }
    }
    public function del(){
        $id=input('id');
        $mod=new \app\common\model\Zheng();
        $result=$mod->del($id);
        if($result!==false){
            $this->success("成功", url("admin/zheng/index"),'',0);
        }else{
            $this->error($mod->getError());
        }
    }
}
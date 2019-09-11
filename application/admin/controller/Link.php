<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/3/29
 * Time: 11:04
 */

namespace app\admin\controller;

use app\common\controller\Admin;
use app\common\model\Link as LinkModel;

class Link extends Admin
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        if(!in_array("04",$this->userinfo['roleary'])) $this->error('没有权限');
    }
    public function index()
    {
        $info=db('Link')->select();
        $this->assign("list",$info);
        return $this->fetch();
    }
    function edit(){
        if($this->request->isPost()){
            $data=input('post.');
            $mod=new LinkModel();
            $result=$mod->validate("Link.edit")->allowField(true)->isUpdate()->save($data);
            if($result!==false){
                $this->success("修改成功", url("admin/link/index"),'',0);
            }else{
                $this->error($mod->getError());
            }

        }else{
            $info=db('Link')->where(array('id'=>input('id', '', 'trim,intval')))->find();
            $this->assign('info',$info);
            return $this->fetch();
        }
    }
    public function add()
    {
        if($this->request->isPost()){
            $data=input('post.');
            $validate = validate('Link');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            $mod=new LinkModel();
            $result=$mod->add($data);
            if($result !== false){
                $this->success("添加成功", url("admin/link/index"),'',0);
            }else{
                $this->error($mod->getError());
            }
        }else {
            return $this->fetch();
        }
    }
    public function del(){
        $mod=new LinkModel();
        $result=$mod->del(input('id', '', 'trim,intval'));
        if($result==1){
            $this->success("删除成功", url("admin/link/index"),'',0);
        }else{
            $this->error('删除失败');
        }
    }
}
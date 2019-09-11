<?php
namespace app\admin\controller;

use app\common\controller\Admin;
use app\common\model\Admin as AdminModel;

class Adminuser extends Admin
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        if($this->userinfo['issup']!=1) $this->error('没有权限');
    }

    public function edit(){
        if($this->request->isPost()){
            $data=input('post.');
            if(!empty($data['role'])){
                foreach($data['role'] as $k=>$v){
                    $rolelist[]=$k;
                }
            }
            $rolestr='';
            if(!empty($rolelist)) $rolestr=implode($rolelist,',');
            $data['role']=$rolestr;

            if($data['id']==1){
                if(cookie('uid')!=1) $this->error('没有权限修改超级管理员');
                unset($data['state']);
            }

            if(empty($data['password'])) unset($data['password']);
            if(empty($data['password2'])) unset($data['password2']);

            if(!empty($data['password'])||!empty($data['password2'])){
                $validate = validate('Admin');
                if(!$validate->scene('edit_pwd')->check($data)){
                    $this->error($validate->getError());
                }
                $data['password']=md5($data['password']);
            }
            unset($data['username']);

            $mod=new AdminModel();
            $mod->allowField(true)->isUpdate()->save($data);
            $this->success("修改成功", url("admin/adminuser/index"),'',0);
        }else{
            $id=input('id', '', 'trim,intval');
            $info=db('admin')->where(array('id'=>$id))->find();
            $this->assign("info",$info);
            return $this->fetch();
        }
    }
    public function del(){
        if(input('id', '', 'trim,intval')==1){
            $this->error('不能删除超级管理员');
        }
        $admin=new AdminModel();
        $result=$admin->del(input('id', '', 'trim,intval'));
        if($result){
            $this->success("删除成功", url("admin/adminuser/index"),'',0);
        }else{
            $this->error('删除失败');
        }
    }
    public function add(){
        if($this->request->isPost()){
            $data=input('post.');
            $validate = validate('Admin');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            $mod=new AdminModel();
            $mod->add($data);
            $this->success("添加成功", url("admin/adminuser/index"),'',0);
        }else{
            return $this->fetch();
        }
    }
    public function index()
    {
        $list=db('Admin')->order('id desc')->select();
        for($i=0;$i<count($list);$i++){
            $list[$i]['regtime']=date("Y/m/d",$list[$i]['regtime']);
                $list[$i]['lasttime']=date("Y-m-d H:i",$list[$i]['lasttime']);
        }
        $this->assign("list",$list);
        return $this->fetch();
    }
}
<?php
namespace app\user\controller;

use app\common\controller\User;
use app\common\model\Member as MemberModel;
use app\common\model\Member;
use app\common\model\Pro;

class Index extends User
{
    public function index(){
        if($this->request->isPost()){
            $data=input('post.');
            $data["id"]=$this->userinfo["id"];
            $mod=new Member();
            $resutl=$mod->edit($data);
            if($resutl!==false){
                $this->success("成功", url("user/index/index"),'',0);
            }else{
                $this->error($mod->getError());
            }
        }else{
            $this->assign("info",$this->userinfo);
            return $this->fetch();
        }
    }
    public function logout(){
        $admin=new MemberModel();
        $admin->logout();
        $this->redirect('index/index/userlogin');
    }
    public function find(){
        $this->redirect('user/index/find_tudi');
    }
    public function find_tudi(){
        $list=db("Tudi")->where(array("member_id"=>$this->userinfo["id"]))->limit(10)->order("id desc")->select();
        $this->assign("list",$list);

        $xu=db("Message")->where(array("member_id"=>$this->userinfo["id"]))->limit(10)->order("id desc")->select();
        $this->assign("xu",$xu);

        $tuijian=db("Tudi")->where(array("pic"=>array('NEQ','')))->limit(3)->select();
        $this->assign("tuijian",$tuijian);
        return $this->fetch();
    }
    public function find_fang(){
        $list=db("Fang")->where(array("member_id"=>$this->userinfo["id"]))->limit(10)->order("id desc")->select();
        $this->assign("list",$list);

        $xu=db("Message")->where(array("member_id"=>$this->userinfo["id"]))->limit(10)->order("id desc")->select();
        $this->assign("xu",$xu);

        $tuijian=db("Fang")->where(array("pic"=>array('NEQ','')))->limit(3)->select();
        $this->assign("tuijian",$tuijian);
        return $this->fetch();
    }
    public function find_lou(){
        $list=db("lou")->where(array("member_id"=>$this->userinfo["id"]))->limit(10)->order("id desc")->select();
        $this->assign("list",$list);

        $xu=db("Message")->where(array("member_id"=>$this->userinfo["id"]))->limit(10)->order("id desc")->select();
        $this->assign("xu",$xu);

        $tuijian=db("Lou")->where(array("pic"=>array('NEQ','')))->limit(3)->select();
        $this->assign("tuijian",$tuijian);
        return $this->fetch();
    }
    public function face(){
        if($this->request->isPost()){
            $data=input('post.');

            $file = $this->request->file('face');
            if (!empty($file)) {
                $file->validate(['size' => 1024 * 1024 * 2, 'ext' => 'jpg,png,gif']);   //2M
                $info = $file->rule("uniqid")->move(ROOT_PATH . 'public' . DS . 'uploads/memberface');
                if ($info) {
                    $data['face'] = "/uploads/memberface/".$info->getSaveName();
                    $oldpicurl='.'.db('Member')->where(array('id'=>$this->userinfo['id']))->value('face');
                    if(strlen($oldpicurl)>3&&file_exists($oldpicurl)) unlink($oldpicurl);
                } else {
                    $this->error($file->getError());
                }
            }
            if(!empty($data['face'])) db('Member')->where(array('id'=>$this->userinfo['id']))->update(array('face'=>$data['face']));

            $this->success("修改成功", url("user/index/face"),'',2);
        }else{
            $this->assign("info",$this->userinfo);
            return $this->fetch();
        }
    }
}
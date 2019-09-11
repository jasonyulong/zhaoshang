<?php
namespace app\admin\controller;

use app\common\controller\Admin;
use app\common\model\Admin as AdminModel;
use think\response\Json;

class Index extends Admin
{
    public function index()
    {
        $set=db('set')->where(array('tp'=>'set'))->value('des');
        $setinfo=unserialize($set);
        $this->assign("setinfo",$setinfo);

        return $this->fetch();
    }
    public function home(){
        if(!cache('member_all')){
            $member_all=db('Member')->count();
            cache('member_all',$member_all,3600*12);
        }else{
            $member_all=cache('member_all');
        }
        $this->assign('member_all',$member_all);

        if(!cache('article_all')){
            $article_all=db('Article')->count();
            cache('article_all',$article_all,3600*12);
        }else{
            $article_all=cache('article_all');
        }
        $this->assign('article_all',$article_all);

        if(!cache('link_sum')){
            $link_sum=db('Link')->count();
            cache('link_sum',$link_sum,3600*12);
        }else{
            $link_sum=cache('link_sum');
        }
        $this->assign('link_sum',$link_sum);

        $artlist=db('Article')->order('look desc')->limit(10)->select();
        $this->assign('artlist',$artlist);

        $artlist=db('Article')->order('id desc')->limit(5)->select();
        $this->assign('hotlist',$artlist);

        return $this->fetch();
    }
    public function logout(){
        $admin=new AdminModel();
        $admin->logout();
        $this->redirect('index/index/adminlogin');
    }

    function upload()
    {
        $files = $this->request->file();
        $jsonlog['errno']=0;
        if($files){
            foreach($files as $file){
                $file->validate(['size'=>1024*1024,'ext'=>'jpg,png,gif']);  //1M
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads/editpic');
                if($info){
                    $jsonlog['data'][]='/uploads/editpic/'.$info->getSaveName();
                }
            }
        }
        echo(json_encode($jsonlog));
    }

    function area(){
        // http://www.zhaoshang.com/admin/index/area/id/130000.html
        header("Access-Control-Allow-Origin: *");
        $list=db("city")->field("code,name")->where(array("provincecode"=>input("id")))->select();

        $jmod=new Json($list);
        $jmod->send();
        die();
    }

    function picup(){
        $picsid=intval(input("picsid"));
        if(empty($picsid)) $picsid=-1;

        $files=$_FILES;
        if($files){
            foreach($files as $v){
                $exp=explode(".",$v["name"][0]);
                $expname=strtolower(end($exp));
                if(in_array($expname,array("jpg","png","bmg"))){
                    $a=uniqid();
                    $filename=ROOT_PATH . 'public' . DS . 'uploads/pro_pic/'.$a.'.'.$expname;
                    $inname= '/uploads/pro_pic/'.$a.'.'.$expname;
                    move_uploaded_file($v["tmp_name"][0],$filename);
                    db("Pic")->insert(array("pic"=>$inname,"sortid"=>$picsid));
                }else{
                    return "文件格式错误";
                }
            }
        }
        return 1;
    }
    function picdel(){
        $id=input("id");
        if(empty($id)) $id=0;
        db("Pic")->where(array("id"=>$id))->delete();
        return "ok";
    }

}
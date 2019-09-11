<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Article;

class Hcy extends Defa
{
    public function index()
    {
        $new=db("Article")->where(array("sort"=>array("in","57")))->limit(8)->order("id desc")->select();
        $this->assign("new",$new);
        return $this->fetch();
    }
    public function newsinfo(){
        $id = input('id', '', 'trim,intval');
        $info = db('Article')->where(array('id' => $id))->find();
        $info['description']=mb_substr(strip_tags($info['content']),0,100,'utf-8');
        $info['time']=date("Y-m-d",$info['time']);
        $info['sortinfo']=db('Sort')->where(array('id'=>$info['sort']))->find();
        $this->assign("info",$info);

        $mod=new Article();
        $updown=$mod->getUpDown($id,$info['sort']);
        $this->assign("updown", $updown);

        return $this->fetch();
    }
    public function about(){
        return $this->fetch();
    }
    public function jiagou(){
        return $this->fetch();
    }
    public function chanye(){
        return $this->fetch();
    }
    public function fuwu(){
        return $this->fetch();
    }
    public function ruzhu(){
        return $this->fetch();
    }
    public function zhaoshang(){
        if($this->request->isPost()){
            $data = input('post.');
            db("Message")->insert(array("title"=>"惠创优留言","time"=>time(),"member_id"=>0,"content"=>serialize($data)));
            $this->success("提交成功", url("index/hcy/index"),'',0);
        }
        return $this->fetch();
    }
    public function anli(){
        return $this->fetch();
    }
    public function project2(){
        return $this->fetch();
    }
    public function project3(){
        return $this->fetch();
    }
    public function project4(){
        return $this->fetch();
    }
    public function project5(){
        return $this->fetch();
    }
    public function project6(){
        return $this->fetch();
    }
    public function project7(){
        return $this->fetch();
    }
    public function project8(){
        return $this->fetch();
    }
    public function project9(){
        return $this->fetch();
    }
    public function project10(){
        return $this->fetch();
    }
    public function project11(){
        return $this->fetch();
    }
    public function project12(){
        return $this->fetch();
    }
    public function project13(){
        return $this->fetch();
    }
    public function project14(){
        return $this->fetch();
    }
    public function zhengce(){
        $where=array();

        $sort=input("sort");
        $this->assign("sort",$sort);
        if(empty($sort)){
            $where["sort"]=array("in","57");
        }else{
            $where["sort"]=$sort;
        }

        $list=db('Article')->order('id desc')->where($where)->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item['time1']=date("Y-m",$item['time']);
            $item['time2']=date("d",$item['time']);
            $item['des']=remove_html($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            $item['des']=str_replace("&nbsp;","",$item['des']);
            $item['sortname']=db('Sort')->where(array('id'=>$item['sort']))->value("name");
            return $item;
        }));
        $this->assign("list",$list);

        return $this->fetch();
    }
    public function xiangmu(){
        return $this->fetch();
    }
    public function content(){
        return $this->fetch();
    }
}
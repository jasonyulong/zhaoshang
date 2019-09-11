<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Article;
use app\common\model\Member as MemberModel;

class Teshe extends Defa
{
    public function index()
    {
        $top=db("Article")->where(array("sort"=>26,"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("top",$top);

        $new=db("Article")->where(array("sort"=>26))->limit(8)->order("id desc")->select();
        $this->assign("new",$new);

        $tuijian=db("Article")->where(array("sort"=>26,"hot"=>1))->limit(3)->order("id desc")->select();
        $this->assign("tuijian",$tuijian);

        $tuijianhot=db("Article")->where(array("sort"=>26,"hot"=>1))->limit(3)->order("look desc")->select();
        $this->assign("tuijianhot",$tuijianhot);

        $zhengpin=db("Zheng")->limit(4)->order("rand()")->select();
        $this->assign("zhengpin",$zhengpin);

        $zhenganli=db("Zheng")->limit(4)->order("rand()")->select();
        $this->assign("zhenganli",$zhenganli);

        return $this->fetch();
    }

    public function news(){
        $where=array();
        if(!empty($sortid)) $where['sort']=array("in","27,28,29,30,31");
        $list=db('Article')->order('id desc')->where($where)->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item['time']=date("Y-m-d H:i:s",$item['time']);
            $item['des']=remove_html($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            $item['sortname']=db('Sort')->where(array('id'=>$item['sort']))->value("name");
            return $item;
        }));
        $this->assign("list",$list);

        $hot=db('Article')->order('look desc')->paginate(10,false,['query'=>request()->param()]);
        $this->assign("hot",$hot);
        $tuijiantudi=db('Tudi')->where(array("pic"=>array('NEQ','')))->order('rand()')->limit(2)->select();
        $this->assign("tuijiantudi",$tuijiantudi);

        $bomtudi=db('Tudi')->where(array("pic"=>array('NEQ','')))->order('rand()')->limit(4)->select();
        for($i=0;$i<count($bomtudi);$i++){
            $bomtudi[$i]["pro"]=db("province")->where(array("code"=>$bomtudi[$i]["pro"]))->value("name");
            $bomtudi[$i]["city"]=db("city")->where(array("code"=>$bomtudi[$i]["city"]))->value("name");
        }
        $this->assign("bomtudi",$bomtudi);

        return $this->fetch();
    }
    public function newsinfo(){
        $hot=db('Article')->order('look desc')->paginate(10,false,['query'=>request()->param()]);
        $this->assign("hot",$hot);
        $tuijiantudi=db('Tudi')->where(array("pic"=>array('NEQ','')))->order('rand()')->limit(2)->select();
        $this->assign("tuijiantudi",$tuijiantudi);

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

    public function newstwo(){
        $where=array();

        $sort=input("sort");
        if(!empty($sort)){
            $where["sort"]=$sort;
        }
        $this->assign("sort",$sort);

        $list=db('Article')->order('id desc')->where($where)->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item['time1']=date("Y-m",$item['time']);
            $item['time2']=date("d",$item['time']);
            $item['des']=remove_html($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            $item['sortname']=db('Sort')->where(array('id'=>$item['sort']))->value("name");
            return $item;
        }));
        $this->assign("list",$list);

        return $this->fetch();
    }
    public function ai(){
        return $this->fetch();
    }
    public function nongye(){
        return $this->fetch();
    }
    public function gongye(){
        return $this->fetch();
    }
    public function fuwu(){
        return $this->fetch();
    }
    public function anli(){
        return $this->fetch();
    }
}
<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Article;
use app\common\model\Member as MemberModel;
use think\response\Json;

class Chouhua extends Defa
{
    public function index()
    {
        $top=db("Article")->where(array("sort"=>array("in","20,21,22"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("top",$top);

        $new=db("Article")->where(array("sort"=>array("in","20,21,22")))->limit(8)->order("id desc")->select();
        $this->assign("new",$new);

        $new=db("Article")->where(array("sort"=>array("in","20,21,22")))->limit(8)->order("id desc")->select();
        $this->assign("new",$new);

        $tuijian=db("Article")->where(array("sort"=>array("in","20,21,22"),"hot"=>1))->limit(3)->order("id desc")->select();
        $this->assign("tuijian",$tuijian);

        $tuijianhot=db("Article")->where(array("sort"=>array("in","20,21,22"),"hot"=>1))->limit(3)->order("look desc")->select();
        $this->assign("tuijianhot",$tuijianhot);

        $look=db("Article")->where(array("sort"=>array("in","20,21,22"),"hot"=>1))->limit(3)->order("id desc")->select();
        $this->assign("look",$look);

        $zhaoshangcenter=db("Article")->where(array("sort"=>20,"pic"=>array('NEQ','')))->limit(4)->order("id desc")->select();
        $this->assign("zhaoshangcenter",$zhaoshangcenter);

        $fuwu=db("Article")->where(array("sort"=>21,"pic"=>array('NEQ','')))->limit(6)->order("id desc")->select();
        $this->assign("fuwu",$fuwu);

        $anli=db("Article")->where(array("sort"=>22,"pic"=>array('NEQ','')))->limit(4)->order("id desc")->select();
        $this->assign("anli",$anli);

        return $this->fetch();
    }
    public function sixin(){
        $toutiao=db("Article")->where(array("sort"=>array("in","23,24,25"),"hot"=>1))->limit(3)->order("id desc")->select();
        $this->assign("toutiao",$toutiao);

        $top=db("Article")->where(array("sort"=>array("in","23,24,25"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("top",$top);

        $list=db("Article")->where(array("sort"=>array("in","23,24,25"),"pic"=>array('NEQ','')))->limit(10)->order("id desc")->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item['time']=date("Y年m月d日",$item['time']);
            $item['des']=remove_html($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            $item['sortname']=db('Sort')->where(array('id'=>$item['sort']))->value("name");
            return $item;
        }));
        $this->assign("list",$list);

        $nei=db("Article")->where(array("sort"=>23,"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("nei",$nei);

        $fagui=db("Article")->where(array("sort"=>24))->limit(3)->order("id desc")->select();
        $this->assign("fagui",$fagui);

        $touzhi=db("Article")->where(array("sort"=>25))->limit(3)->order("id desc")->select();
        $this->assign("touzhi",$touzhi);

        $look=db("Article")->where(array("sort"=>array("in","23,24,25")))->limit(5)->order("look desc")->select();
        $this->assign("look",$look);

        return $this->fetch();
    }
    public function yuan(){
        return $this->fetch();
    }
    public function news(){
        $sort=input("sort");
        if(empty($sort)) $sort="defa";
        $this->assign("sort",$sort);
        $where=array();
        if($sort="zongbu") $where["sort"]=array("in","20,21,22");
        if($sort="sixin") $where["sort"]=array("in","23,24,25");

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

        $newszi=db('Article')->order('id desc')->limit(4)->where(array("sort"=>array("in","20,21,22")))->select();
        $this->assign("newszi",$newszi);
        $newstu=db('Article')->order('id desc')->limit(4)->where(array("sort"=>array("in","23,24,25"),"pic"=>array('NEQ','')))->select();
        $this->assign("newstu",$newstu);

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
    public function zhaoshang(){
        $hot=db('Article')->order('id desc')->where(array("hot"=>1))->find();
        $this->assign("hot",$hot);
        $newszi=db('Article')->order('id desc')->limit(6)->select();
        $this->assign("newszi",$newszi);
        $newstu=db('Article')->order('rand()')->limit(6)->select();
        $this->assign("newstu",$newstu);
        return $this->fetch();
    }
    public function zhaoshangp(){
        header("Access-Control-Allow-Origin: *");





        $where=array();
        $page=input("page");
        if(empty($page)) $page=1;

        $list=db('Zheng')->order('id desc')->where($where)->paginate(5,false,array("page"=>$page));
        $list->each((function($item, $key){
            $item['des']=remove_html($item['des']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            if(empty($item["pic"])) $item["pic"]="/images/newzs/img/27.jpg";

            $item['time']=time_ago($item['time']);
            $item['url']=url("index/chouhua/zhengsdsdsd",array("id"=>$item["id"]));

            $item['des']=str_replace("&nbsp;","",$item['des']);

            unset($item["content"]);
            return $item;
        }));





        $jmod=new Json($list);
        $jmod->send();
        die();
    }
    public function zheng(){
        $id = input('id', '', 'trim,intval');
        $info = db('Zheng')->where(array('id' => $id))->find();
        $info["pro"]=db("province")->where(array("code"=>$info["pro"]))->value("name");
        $info["city"]=db("city")->where(array("code"=>$info["city"]))->value("name");
        $this->assign("info",$info);

        $tuijian=db('Zheng')->where(array("pic"=>array('NEQ','')))->limit(2)->order('rand()')->select();
        $this->assign("tuijian",$tuijian);
        return $this->fetch();
    }
    public function fuwu(){
        return $this->fetch();
    }
    public function anli(){
        return $this->fetch();
    }
    public function huoban(){
        return $this->fetch();
    }
}

<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Article;
use app\common\model\Member as MemberModel;

class Zht extends Defa
{
    public function index()
    {
        $top=db("Article")->where(array("sort"=>array("in","49,50"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("top",$top);

        $t1=db("Article")->where(array("sort"=>array("in","49,50")))->limit(9)->order("id desc")->select();
        $this->assign("t1",$t1);
        $t2=db("Article")->where(array("sort"=>array("in","49")))->limit(9)->order("id desc")->select();
        $this->assign("t2",$t2);
        $t3=db("Article")->where(array("sort"=>array("in","50")))->limit(9)->order("id desc")->select();
        $this->assign("t3",$t3);

        $zt=db("Zheng")->where(array("pic"=>array('NEQ','')))->limit(8)->order("id desc")->select();
        $this->assign("zt",$zt);

        $huoding=db("Article")->where(array("sort"=>array("in","56")))->limit(3)->order("id desc")->select();
        $this->assign("huoding",$huoding);

        return $this->fetch();
    }

    public function zc(){
        $t1=db("Article")->where(array("sort"=>array("in","51,52")))->limit(5)->order("id desc")->select();
        $this->assign("t1",$t1);
        $t2=db("Article")->where(array("sort"=>array("in","51,52"),"pic"=>array('NEQ','')))->limit(5)->order("id desc")->select();
        $this->assign("t2",$t2);
        $t3=db("Article")->where(array("sort"=>array("in","51")))->limit(4)->order("id desc")->select();
        $this->assign("t3",$t3);
        $t4=db("Article")->where(array("sort"=>array("in","52")))->limit(4)->order("id desc")->select();
        $this->assign("t4",$t4);

        return $this->fetch();
    }

    public function t(){
        $top=db("Article")->where(array("sort"=>array("in","53,54"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("top",$top);

        $t1=db("Article")->where(array("sort"=>array("in","53,54")))->limit(9)->order("id desc")->select();
        $this->assign("t1",$t1);
        $t2=db("Article")->where(array("sort"=>array("in","53")))->limit(9)->order("id desc")->select();
        $this->assign("t2",$t2);
        $t3=db("Article")->where(array("sort"=>array("in","54")))->limit(9)->order("id desc")->select();
        $this->assign("t3",$t3);

        $zt=db("Zheng")->where(array("pic"=>array('NEQ','')))->limit(8)->order("id desc")->select();
        $this->assign("zt",$zt);

        $huoding=db("Article")->where(array("sort"=>array("in","56")))->limit(3)->order("id desc")->select();
        $this->assign("huoding",$huoding);

        $anli=db("Mall")->where(array("pic"=>array('NEQ','')))->limit(5)->order("id desc")->select();
        $this->assign("anli",$anli);

        return $this->fetch();
    }

    public function anli(){
        return $this->fetch();
    }

    public function mall(){
        $prolist=db("province")->select();
        $this->assign("prolist",$prolist);

        $area=input("area");
        $this->assign("area",$area);
        $city=input("city");
        $this->assign("city",$city);

        $ct=db("city")->where(array("provincecode"=>$area))->select();
        $this->assign("ct",$ct);

        $where=array();
        if(!empty($area)){
            $where['pro']=$area;
            if(!empty($city)) $where['city']=$city;
        }

        $list=db('Mall')->order('id desc')->where($where)->paginate(15,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item["pro"]=db("province")->where(array("code"=>$item["pro"]))->value("name");
            $item["city"]=db("city")->where(array("code"=>$item["city"]))->value("name");
            return $item;
        }));
        $this->assign("list",$list);

        return $this->fetch();
    }
    public function mallinfo(){
        $id = input('id', '', 'trim,intval');
        $info = db('Mall')->where(array('id' => $id))->find();
        $this->assign("info",$info);

        $ran=db('Mall')->order("rand()")->limit(4)->select();
        for($i=0;$i<count($ran);$i++){
            $ran[$i]["pro"]=db("province")->where(array("code"=>$ran[$i]["pro"]))->value("name");
            $ran[$i]["city"]=db("city")->where(array("code"=>$ran[$i]["city"]))->value("name");
        }
        $this->assign("ran",$ran);

        return $this->fetch();
    }
    public function huodong(){
        $hot = db('Article')->order("look desc")->where(array('sort' =>56))->limit(12)->select();
        $this->assign("hot",$hot);

        $new = db('Article')->order("id desc")->where(array('sort' =>56))->limit(12)->select();
        $this->assign("new",$new);

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
}
<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Member as MemberModel;

class Dj extends Defa
{
    public function index()
    {
        $prolist=db("province")->select();
        $this->assign("prolist",$prolist);

        $area=input("area");
        $this->assign("area",$area);
        $city=input("city");
        $this->assign("city",$city);
        $title=input("title");
        $this->assign("title",$title);

        $ct=db("city")->where(array("provincecode"=>$area))->select();
        $this->assign("ct",$ct);

        $sort=input("sort");
        if(empty($sort)) $sort="zf";
        if($sort=="zf") $sortid=33;
        if($sort=="gc") $sortid=34;
        if($sort=="js") $sortid=35;
        $this->assign("sort",$sort);

        $where=array();
        if(!empty($sortid)) $where['sort']=$sortid;
        if(!empty($title)) $where['title']=array("like","%{$title}%");
        if(!empty($area)){
            $where['pro']=$area;
            if(!empty($city)) $where['city']=$city;
        }

        $list=db('Article')->order('id desc')->where($where)->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item['time1']=date("Y-m",$item['time']);
            $item['time2']=date("d",$item['time']);
            $item['des']=remove_html($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            $item['sortname']=db('Sort')->where(array('id'=>$item['sort']))->value("name");

            $item["pro"]=db("province")->where(array("code"=>$item["pro"]))->value("name");
            $item["city"]=db("city")->where(array("code"=>$item["city"]))->value("name");
            return $item;
        }));
        $this->assign("list",$list);


        $tuijian=db('Article')->order('rand()')->where(array("sort"=>array("in","33,34,35")))->limit(10)->select();
        $this->assign("tuijian",$tuijian);

        return $this->fetch();
    }
    public function newsinfo(){
        $id = input('id', '', 'trim,intval');
        $info = db('Article')->where(array('id' => $id))->find();
        $info['description']=mb_substr(strip_tags($info['content']),0,100,'utf-8');
        $info['time']=date("Y-m-d",$info['time']);
        $info['sortinfo']=db('Sort')->where(array('id'=>$info['sort']))->find();
        $this->assign("info",$info);

        return $this->fetch();
    }
}
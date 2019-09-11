<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Member as MemberModel;

class Xz extends Defa
{
    public function index()
    {
        $prolist=db("province")->select();
        $this->assign("prolist",$prolist);

        $area=input("area");
        $this->assign("area",$area);
        $city=input("city");
        $this->assign("city",$city);

        $ct=db("city")->where(array("provincecode"=>$area))->select();
        $this->assign("ct",$ct);

        $sort=input("sort");
        if(empty($sort)) $sort="gs";
        if($sort=="gs") $sortid=37;
        if($sort=="sw") $sortid=38;
        if($sort=="zs") $sortid=39;
        if($sort=="fl") $sortid=40;
        $this->assign("sort",$sort);

        $where=array();
        if(!empty($sortid)) $where['sort']=$sortid;
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
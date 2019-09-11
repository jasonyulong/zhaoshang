<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Article;
use app\common\model\Member as MemberModel;
use think\response\Json;

class Zc extends Defa
{
    public function index()
    {
        $top=db("Article")->where(array("sort"=>array("in","42,43,44"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("top",$top);

        $new=db("Article")->where(array("sort"=>array("in","42,43,44")))->limit(8)->order("id desc")->select();
        $this->assign("new",$new);

        $ran=db("Article")->where(array("sort"=>array("in","42,43,44")))->limit(8)->order("id desc")->select();
        $this->assign("ran",$ran);

        $t1=db("Article")->where(array("sort"=>42))->limit(8)->order("id desc")->select();
        $this->assign("t1",$t1);
        $t2=db("Article")->where(array("sort"=>43))->limit(8)->order("id desc")->select();
        $this->assign("t2",$t2);
        $t3=db("Article")->where(array("sort"=>44))->limit(8)->order("id desc")->select();
        $this->assign("t3",$t3);

        return $this->fetch();
    }
    public function news(){
        $where=array();

        $sort=input("sort");
        $this->assign("sort",$sort);
        if(empty($sort)){
            $where["sort"]=array("in","42,43,44");
        }else{
            $where["sort"]=$sort;
        }

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

        $newszi=db('Article')->order('id desc')->limit(4)->where(array("sort"=>array("in","42,43,44")))->select();
        $this->assign("newszi",$newszi);
        $newstu=db('Article')->order('id desc')->limit(4)->where(array("sort"=>array("in","42,43,44"),"pic"=>array('NEQ','')))->select();
        $this->assign("newstu",$newstu);

        return $this->fetch();
    }
    public function newsinfo(){
        $id = input('id', '', 'trim,intval');
        $info = db('Article')->where(array('id' => $id))->find();
        if(empty($info)) abort(404,'页面不存在');
        $info['description']=mb_substr(strip_tags($info['content']),0,100,'utf-8');
        $info['time']=time_ago($info['time']);
        $info['sortinfo']=db('Sort')->where(array('id'=>$info['sort']))->find();
        $info['content']=preg_replace("/<a[^>]*>(.*?)<\/a>/is", "$1", $info["content"]);
        //$info['content']=strip_tags($info['content'], "<p><br><img>");
        if(!empty($info['file'])){
            $info['fileext']=explode('.', $info['file']);
            $info['fileext']=end($info['fileext']);
        }else{
            $info['fileext']="";
        }

        if(empty($info["seo_key"])) $info["seo_key"]=$info["title"];
        if(empty($info["seo_des"])) $info["seo_des"]=$info["description"];
        $this->assign("info",$info);

        $mod=new Article();
        $updown=$mod->getUpDown($id,$info['sort']);
        $this->assign("updown", $updown);

        $newszi=db('Article')->order('id desc')->limit(6)->select();
        $this->assign("newszi",$newszi);
        $newstu=db('Article')->where(array("sort"=>$info["sort"]))->order('rand()')->limit(6)->select();
        $this->assign("newstu",$newstu);

        db("Article")->where(array('id' => $id))->setInc("look");

        //项目对接的
        $bbb=array();
        $aaa=db("Sort")->where("pid=32")->order("id asc")->select();
        if($aaa){
            foreach($aaa as $v){
                $bbb[]=$v["id"];
            }
        }
        if(in_array($info["sort"],$bbb)){
            return $this->fetch('Zc/dnmp_info');
        }else{
            return $this->fetch();
        }
    }

    public function newslist(){
        $id = input('id', '', 'trim,intval');
        $sortinfo=db("Sort")->where(array("id"=>$id))->find();
        if(empty($sortinfo)) abort(404,'页面不存在');
        $this->assign("sortinfo",$sortinfo);

        $order=input("order");
        $this->assign("order",$order);

        //是否省级市级
        $sss=array();
        $isin=db("Sort")->where("pid=41")->order("id asc")->select();
        if($isin){
            foreach($isin as $v){
                $sss[]=$v["id"];
            }
        }
        $bg="no";
        if(in_array($id,$sss)) $bg="yes";
        $this->assign("bg",$bg);

        $linksort=db("Sort")->where(array("pid"=>$sortinfo["pid"]))->order("id asc")->select();
        $this->assign("linksort",$linksort);

        $where=array();
        $where["sort"]=$sortinfo["id"];
        if(!empty($order)&&$order=="pro") $where["is_pro"]=1;
        if(!empty($order)&&$order=="city") $where["is_city"]=1;
        $list=db('Article')->order('id desc')->where($where)->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item['time']=time_ago($item['time']);
            $item['des']=strip_tags($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            return $item;
        }));
        $this->assign("list",$list);

        $hot=db('Article')->order('id desc')->where(array("sort"=>$sortinfo["id"],"hot"=>1))->find();
        $this->assign("hot",$hot);
        $newszi=db('Article')->order('id desc')->limit(6)->select();
        $this->assign("newszi",$newszi);
        $newstu=db('Article')->where(array("sort"=>$sortinfo["id"]))->order('rand()')->limit(6)->select();
        $this->assign("newstu",$newstu);


        //项目对接的
        $bbb=array();
        $aaa=db("Sort")->where("pid=32")->order("id asc")->select();
        if($aaa){
            foreach($aaa as $v){
                $bbb[]=$v["id"];
            }
        }
        if(in_array($id,$bbb)){
            return $this->fetch('Zc/dnmp');
        }else{
            return $this->fetch();
        }
    }




    public function dj(){
        $hot=db('Article')->order('id desc')->where(array("hot"=>1))->find();
        $this->assign("hot",$hot);
        $newszi=db('Article')->order('id desc')->limit(6)->select();
        $this->assign("newszi",$newszi);
        $newstu=db('Article')->order('rand()')->limit(6)->select();
        $this->assign("newstu",$newstu);
        $this->assign("dic",dic());
        return $this->fetch();
    }
    public function djp(){
        header("Access-Control-Allow-Origin: *");





        $where=array();


        $where["sort"]=array("in","33,34,35");
        $p_area=input("p_area");
        if(!empty($p_area)){
            $where["p_area"]=$p_area;
        }
        $p_sort=input("p_sort");
        if(!empty($p_sort)){
            $where["p_sort"]=$p_sort;
        }
        $p_type=input("p_type");
        if(!empty($p_type)){
            $where["p_type"]=$p_type;
        }
        $page=input("page");
        if(empty($page)) $page=1;

        $list=db('Article')->order('id desc')->where($where)->paginate(7,false,array("page"=>$page));
        $list->each((function($item, $key){
            $item['des']=remove_html($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            $item['sortname']=db('Sort')->where(array('id'=>$item['sort']))->value("name");
            if(empty($item["pic"])) $item["pic"]="/images/newzs/img/24.jpg";

            $item['time']=time_ago($item['time']);
            #$item['url']=url("index/zc/newsinfo",array("id"=>$item["id"]));
            $item['url']=url("index/index/404");
            unset($item["content"]);
            return $item;
        }));





        $jmod=new Json($list);
        $jmod->send();
        die();
    }



    public function bg(){
        $hot=db('Article')->order('id desc')->where(array("hot"=>1))->find();
        $this->assign("hot",$hot);
        $newszi=db('Article')->order('id desc')->limit(6)->select();
        $this->assign("newszi",$newszi);
        $newstu=db('Article')->order('rand()')->limit(6)->select();
        $this->assign("newstu",$newstu);
        $this->assign("dic",dic());

        $t=db('sort')->where("pid=59")->select();
        $this->assign("t",$t);

        $pro=db("province")->select();
        $this->assign("pro",$pro);

        return $this->fetch();
    }
    public function bgp(){
        header("Access-Control-Allow-Origin: *");





        $where=array();




        $sortid=input("sortid");
        if(!empty($sortid)){
            $where["sort"]=$sortid;
        }else{
            $where["sort"]=array("in","62,63,64,65,66,67,68");
        }
        $pro=input("pro");
        if(!empty($pro)){
            $where["pro"]=$pro;
        }
        $time=input("time");
        if(!empty($time)){
            if($time=="最近三天") $where["time"]=array("gt", time()-(3*86400) );
            if($time=="最近一周") $where["time"]=array("gt", time()-(7*86400) );
            if($time=="最近一月") $where["time"]=array("gt", time()-(30*86400) );
            if($time=="最近三月") $where["time"]=array("gt", time()-(90*86400) );
            if($time=="最近半年") $where["time"]=array("gt", time()-(180*86400) );
        }
        $page=input("page");
        if(empty($page)) $page=1;

        $list=db('Article')->order('id desc')->where($where)->paginate(7,false,array("page"=>$page));
        $list->each((function($item, $key){
            $item['des']=remove_html($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            $item['sortname']=db('Sort')->where(array('id'=>$item['sort']))->value("name");
            if(empty($item["pic"])) $item["pic"]="/images/newzs/img/24.jpg";

            $item['time']=time_ago($item['time']);
            $item['url']=url("index/zc/newsinfo",array("id"=>$item["id"]));
            unset($item["content"]);
            return $item;
        }));





        $jmod=new Json($list);
        $jmod->send();
        die();
    }



}
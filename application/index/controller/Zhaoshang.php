<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Article;
use app\common\model\Fang;
use app\common\model\Lou;
use app\common\model\Tudi;

class Zhaoshang extends Defa
{
    public function xuqiu(){
        if($this->request->isPost()) {
            $data = input('post.');
            $copydata=$data;
            unset($copydata["title"]);
            $indat=array("title"=>$data["title"],"member_id"=>$data["member_id"],"content"=>serialize($copydata),"time"=>time());
            db("Message")->insert($indat);
            $this->success("提交成功", url("index/index/index"),'',0);
        }else{
            $type=input("type");
            if(empty($type)) $this->error("参数错误");
            switch($type){
                case "tudi":
                    $type_ch="土地";
                    break;
                case "lou":
                    $type_ch="写字楼";
                    break;
                case "fang":
                    $type_ch="厂房";
                    break;
            }
            $this->assign("type",$type);
            $this->assign("type_ch",$type_ch);

            return $this->fetch();
        }
    }
    public function fabu(){
        if($this->request->isPost()) {
            $data = input('post.');

            if($data["需求类型"]=="厂房"){
                $mod=new Fang();
            }
            if($data["需求类型"]=="土地"){
                $mod=new Tudi();
            }
            if($data["需求类型"]=="写字楼"){
                $mod=new Lou();
            }

            if(!empty($data["省"])&&!empty($data["市"])){
                $a=db("province")->where(array("name"=>array("like","%".$data['省']."%")))->find();
                if($a) $data["pro"]=$a["code"];
                $b=db("city")->where(array("name"=>array("like","%".$data['市']."%")))->find();
                if($b) $data["city"]=$b["code"];
            }
            $result=$mod->add($data,"");
            if($result!==false){
                $this->success("提交成功", url("index/index/index"),'',0);
            }else{
                $this->error($mod->getError());
            }
        }else{
            $type=input("type");
            if(empty($type)) $this->error("参数错误");
            switch($type){
                case "tudi":
                    $type_ch="土地";
                    break;
                case "lou":
                    $type_ch="写字楼";
                    break;
                case "fang":
                    $type_ch="厂房";
                    break;
            }
            $this->assign("type",$type);
            $this->assign("type_ch",$type_ch);

            return $this->fetch();
        }
    }
    public function index()
    {
        $pro=db("province")->where("code like '%000' and LENGTH(name)<10")->limit(12)->select();
        $this->assign("pro",$pro);

        $hotbanner=db("Fang")->where(array("pic"=>array('NEQ','')))->limit(4)->order("id desc")->select();
        $this->assign("hotbanner",$hotbanner);

        //土地
        $tudipic=db("Tudi")->where(array("pic"=>array('NEQ','')))->limit(6)->order("id desc")->select();
        $this->assign("tudipic",getpro($tudipic));
        $tudizi=db("Tudi")->limit(6)->order("id desc")->select();
        $this->assign("tudizi",getpro($tudizi));
        $tudiart=db("Article")->where(array("sort"=>"5"))->limit(14)->order("id desc")->select();
        $this->assign("tudiart",$tudiart);

        //厂房
        $fangpic=db("Fang")->where(array("pic"=>array('NEQ','')))->limit(6)->order("id desc")->select();
        $this->assign("fangpic",getpro($fangpic));
        $fangzi=db("Fang")->limit(6)->order("id desc")->select();
        $this->assign("fangzi",getpro($fangzi));
        $fangart=db("Article")->where(array("sort"=>"6"))->limit(14)->order("id desc")->select();
        $this->assign("fangart",$fangart);

        //写字楼
        $loupic=db("Lou")->where(array("pic"=>array('NEQ','')))->limit(6)->order("id desc")->select();
        $this->assign("loupic",getpro($loupic));
        $louzi=db("Fang")->limit(6)->order("id desc")->select();
        $this->assign("louzi",getpro($louzi));
        $louart=db("Article")->where(array("sort"=>"7"))->limit(14)->order("id desc")->select();
        $this->assign("louart",$louart);

        return $this->fetch();
    }
    public function friend(){
        $list=db("Da")->where(array("cate"=>"名企合作"))->order("id desc")->limit(20)->select();
        $this->assign("list",$list);
        return $this->fetch();
    }
    public function news(){
        $sort_tudi=db('Sort')->where(array('pid'=>2))->select();
        $this->assign("sort_tudi",$sort_tudi);
        $sort_fang=db('Sort')->where(array('pid'=>3))->select();
        $this->assign("sort_fang",$sort_fang);
        $sort_lou=db('Sort')->where(array('pid'=>4))->select();
        $this->assign("sort_lou",$sort_lou);

        $where=array();
        $sortid=input('sort');
        $this->assign("sortid",$sortid);
        if(!empty($sortid)) $where['sort']=$sortid;
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
        $sort_tudi=db('Sort')->where(array('pid'=>2))->select();
        $this->assign("sort_tudi",$sort_tudi);
        $sort_fang=db('Sort')->where(array('pid'=>3))->select();
        $this->assign("sort_fang",$sort_fang);
        $sort_lou=db('Sort')->where(array('pid'=>4))->select();
        $this->assign("sort_lou",$sort_lou);

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

    public function tudi_index(){
        $top=db("Tudi")->limit(12)->order("rand()")->select();
        for($i=0;$i<count($top);$i++){
            $top[$i]["pro"]=db("province")->where(array("code"=>$top[$i]["pro"]))->value("name");
            $top[$i]["city"]=db("city")->where(array("code"=>$top[$i]["city"]))->value("name");
        }
        $this->assign("top",$top);
        $xuan=db("Tudi")->limit(5)->order("rand()")->select();
        for($i=0;$i<count($xuan);$i++){
            $xuan[$i]["pro"]=db("province")->where(array("code"=>$xuan[$i]["pro"]))->value("name");
            $xuan[$i]["city"]=db("city")->where(array("code"=>$xuan[$i]["city"]))->value("name");
        }
        $this->assign("xuan",$xuan);

        $prolimit=db("province")->where("code like '%000' and LENGTH(name)<10")->limit(4)->select();
        $this->assign("prolimit",$prolimit);

        $area=input("area");
        $city=input("city");
        $mou=input("mou");
        $hy=input("hy");
        $fs=input("fs");
        $order=input("order");

        if(!empty($area)&&!empty($city)){
            $l3=substr($area,0,2);
            $d3=substr($city,0,2);
            if($l3!=$d3) $city="";
        }

        $pro=db("province")->select();
        $this->assign("pro",$pro);
        $ct=db("city")->where(array("provincecode"=>$area))->select();
        $this->assign("ct",$ct);


        $this->assign("dic",dic());
        $this->assign("area",$area);
        $this->assign("city",$city);
        $this->assign("mou",$mou);
        $this->assign("hy",$hy);
        $this->assign("fs",$fs);
        $this->assign("order",$order);

        $where=array();
        if($area) $where["pro"]=$area;
        if($city) $where["city"]=$city;
        if($hy) $where["hangye"]=$hy;
        if($fs) $where["uptype"]=$fs;

        $ordersql='id desc';
        switch($order){
            case 'all':
                $ordersql='id desc';
                break;
            case 'new':
                $ordersql='id desc';
                break;
            case 'pricea':
                $ordersql='zujing asc';
                break;
            case 'priceb':
                $ordersql='zujing desc';
                break;
            case 'areaa':
                $ordersql='area asc';
                break;
            case 'areab':
                $ordersql='area desc';
                break;
        }

        switch($mou){
            case 'a':
                $where["area"]=array('between', '0,100');;
                break;
            case 'b':
                $where["area"]=array('between', '100,500');;
                break;
            case 'c':
                $where["area"]=array('between', '500,1000');;
                break;
            case 'd':
                $where["area"]=array('gt', '1000');;
                break;
        }
        $list=db('Tudi')->where($where)->order($ordersql)->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item["pro"]=db("province")->where(array("code"=>$item["pro"]))->value("name");
            $item["city"]=db("city")->where(array("code"=>$item["city"]))->value("name");

            $item["shou"]=(round($item["shou"]/10000,1));

            $item["picsum"]=db("pic")->where(array("sortid" => $item["picsid"]))->count();
            return $item;
        }));
        $this->assign("list",$list);

        return $this->fetch();
    }
    public function lou_index(){
        $top=db("Lou")->limit(12)->order("rand()")->select();
        for($i=0;$i<count($top);$i++){
            $top[$i]["pro"]=db("province")->where(array("code"=>$top[$i]["pro"]))->value("name");
            $top[$i]["city"]=db("city")->where(array("code"=>$top[$i]["city"]))->value("name");
        }
        $this->assign("top",$top);
        $xuan=db("Lou")->limit(5)->order("rand()")->select();
        for($i=0;$i<count($xuan);$i++){
            $xuan[$i]["pro"]=db("province")->where(array("code"=>$xuan[$i]["pro"]))->value("name");
            $xuan[$i]["city"]=db("city")->where(array("code"=>$xuan[$i]["city"]))->value("name");
        }
        $this->assign("xuan",$xuan);

        $prolimit=db("province")->where("code like '%000' and LENGTH(name)<10")->limit(4)->select();
        $this->assign("prolimit",$prolimit);

        $area=input("area");
        $city=input("city");
        $mou=input("mou");
        $order=input("order");

        if(!empty($area)&&!empty($city)){
            $l3=substr($area,0,2);
            $d3=substr($city,0,2);
            if($l3!=$d3) $city="";
        }

        $pro=db("province")->select();
        $this->assign("pro",$pro);
        $ct=db("city")->where(array("provincecode"=>$area))->select();
        $this->assign("ct",$ct);


        $this->assign("dic",dic());
        $this->assign("area",$area);
        $this->assign("city",$city);
        $this->assign("mou",$mou);
        $this->assign("order",$order);

        $ordersql='id desc';
        switch($order){
            case 'all':
                $ordersql='id desc';
                break;
            case 'new':
                $ordersql='id desc';
                break;
            case 'pricea':
                $ordersql='zujing asc';
                break;
            case 'priceb':
                $ordersql='zujing desc';
                break;
            case 'areaa':
                $ordersql='area asc';
                break;
            case 'areab':
                $ordersql='area desc';
                break;
        }

        $where=array();
        if($area) $where["pro"]=$area;
        if($city) $where["city"]=$city;
        switch($mou){
            case 'a':
                $where["area"]=array('between', '0,100');;
                break;
            case 'b':
                $where["area"]=array('between', '100,500');;
                break;
            case 'c':
                $where["area"]=array('between', '500,1000');;
                break;
            case 'd':
                $where["area"]=array('gt', '1000');;
                break;
        }
        $list=db('Lou')->where($where)->order($ordersql)->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item["pro"]=db("province")->where(array("code"=>$item["pro"]))->value("name");
            $item["city"]=db("city")->where(array("code"=>$item["city"]))->value("name");

            $item["shou"]=(round($item["shou"]/10000,1));

            $item["picsum"]=db("pic")->where(array("sortid" => $item["picsid"]))->count();
            return $item;
        }));
        $this->assign("list",$list);

        return $this->fetch();
    }
    public function fang_index(){
        $top=db("Fang")->limit(12)->order("rand()")->select();
        for($i=0;$i<count($top);$i++){
            $top[$i]["pro"]=db("province")->where(array("code"=>$top[$i]["pro"]))->value("name");
            $top[$i]["city"]=db("city")->where(array("code"=>$top[$i]["city"]))->value("name");
        }
        $this->assign("top",$top);
        $xuan=db("Fang")->limit(5)->order("rand()")->select();
        for($i=0;$i<count($xuan);$i++){
            $xuan[$i]["pro"]=db("province")->where(array("code"=>$xuan[$i]["pro"]))->value("name");
            $xuan[$i]["city"]=db("city")->where(array("code"=>$xuan[$i]["city"]))->value("name");
        }
        $this->assign("xuan",$xuan);

        $prolimit=db("province")->where("code like '%000' and LENGTH(name)<10")->limit(4)->select();
        $this->assign("prolimit",$prolimit);

        $area=input("area");
        $city=input("city");
        $mou=input("mou");
        $hy=input("hy");
        $fs=input("fs");
        $order=input("order");

        if(!empty($area)&&!empty($city)){
            $l3=substr($area,0,2);
            $d3=substr($city,0,2);
            if($l3!=$d3) $city="";
        }

        $pro=db("province")->select();
        $this->assign("pro",$pro);
        $ct=db("city")->where(array("provincecode"=>$area))->select();
        $this->assign("ct",$ct);


        $this->assign("dic",dic());
        $this->assign("area",$area);
        $this->assign("city",$city);
        $this->assign("mou",$mou);
        $this->assign("hy",$hy);
        $this->assign("fs",$fs);
        $this->assign("order",$order);

        $ordersql='id desc';
        switch($order){
            case 'all':
                $ordersql='id desc';
                break;
            case 'new':
                $ordersql='id desc';
                break;
            case 'pricea':
                $ordersql='price asc';
                break;
            case 'priceb':
                $ordersql='price desc';
                break;
            case 'areaa':
                $ordersql='area asc';
                break;
            case 'areab':
                $ordersql='area desc';
                break;
        }

        $where=array();
        if($area) $where["pro"]=$area;
        if($city) $where["city"]=$city;
        if($hy) $where["type"]=$hy;
        switch($mou){
            case 'a':
                $where["area"]=array('between', '0,100');;
                break;
            case 'b':
                $where["area"]=array('between', '100,500');;
                break;
            case 'c':
                $where["area"]=array('between', '500,1000');;
                break;
            case 'd':
                $where["area"]=array('gt', '1000');;
                break;
        }
        $list=db('Fang')->where($where)->order($ordersql)->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item["pro"]=db("province")->where(array("code"=>$item["pro"]))->value("name");
            $item["city"]=db("city")->where(array("code"=>$item["city"]))->value("name");

            $item["shou"]=(round($item["shou"]/10000,1));

            $item["picsum"]=db("pic")->where(array("sortid" => $item["picsid"]))->count();
            return $item;
        }));
        $this->assign("list",$list);

        return $this->fetch();
    }
    public function fang_xuqiu(){
        return $this->fetch();
    }
    public function fang_fabu(){
        return $this->fetch();
    }
}

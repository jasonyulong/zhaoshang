<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Member as MemberModel;

class About extends Defa
{
    public function index(){
        return $this->fetch();
    }
    public function guimo(){
        return $this->fetch();
    }
    public function yuangong(){
        $list=db("Article")->where(array("sort"=>17))->order("id desc")->paginate(5,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item['time']=date("Y-m-d H:i:s",$item['time']);
            $item['des']=strip_tags($item['content']);
            $item['des']=mb_substr($item['des'],0,130,'utf-8');
            $item['sortname']=db('Sort')->where(array('id'=>$item['sort']))->value("name");
            return $item;
        }));
        $this->assign("list",$list);
        return $this->fetch();
    }
    public function link(){
        return $this->fetch();
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/3/29
 * Time: 11:04
 */

namespace app\admin\controller;

use app\common\controller\Admin;
use app\common\model\Link as LinkModel;

class Message extends Admin
{
    public function index()
    {
        $list=db('Message')->order("id desc")->paginate(10,false,['query'=>request()->param()]);
        $list->each((function($item, $key){
            $item["s"]="";
            $vary=unserialize($item["content"]);
            if(is_array($vary)) {
                foreach ($vary as $k => $v) {
                    $item["s"] .= "<br>" . $k . ':' . $v;
                }
            }else{
                $item["s"]=$vary;
            }
            return $item;
        }));
        $this->assign("list",$list);
        return $this->fetch();
    }
    public function del(){
        $result=db("Message")->delete(array("id"=>input('id')));
        if($result==1){
            $this->success("删除成功", url("admin/message/index"),'',0);
        }else{
            $this->error('删除失败');
        }
    }
}
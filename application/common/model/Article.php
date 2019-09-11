<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/3/22
 * Time: 10:40
 */

namespace app\common\model;

use think\Model;

class Article extends Model
{
    function add($data){
        $data["zan"]=0;
        $data["rep_sum"]=0;
        if(empty($data["is_pro"])) $data["is_pro"]=0;
        if(empty($data["is_city"])) $data["is_city"]=0;

        if(empty($data["seo_key"])) $data["seo_key"]='';
        if(empty($data["seo_des"])) $data["seo_des"]='';

        if(empty($data["time"])) $data["time"]=time();
        if(empty($data["hot"])) $data["hot"]=0;
        if(empty($data["look"])) $data["look"]=0;
        if(empty($data["pic"])) $data["pic"]='';
        if(empty($data["file"])) $data["file"]='';
        if(empty($data["addid"])) $data["addid"]=1;
        if(empty($data["pro"])) $data["pro"]=0;
        if(empty($data["city"])) $data["city"]=0;
        if(empty($data["p_area"])) $data["p_area"]="";
        if(empty($data["p_sort"])) $data["p_sort"]="";
        if(empty($data["p_type"])) $data["p_type"]="";
        if(empty($data["p_yusuan"])) $data["p_yusuan"]="";

        $res = $this->save($data);
        return $res;
    }
    function del($id){
        $oldpicurl='.'.$this->where(array('id'=>$id))->value('pic');
        if(strlen($oldpicurl)>3&&file_exists($oldpicurl)) unlink($oldpicurl);

        $oldpicurl='.'.$this->where(array('id'=>$id))->value('file');
        if(strlen($oldpicurl)>3&&file_exists($oldpicurl)) unlink($oldpicurl);

        db('ArticleRep')->where(array('article_id'=>$id))->delete();

        $this->where(array('id'=>$id))->delete();
        return 1;
    }

    /**
     * 获取上一篇下一篇
     * @param string $id
     * @return mixed
     */
    public function getUpDown($id,$sort=0)
    {
        if($sort>0) $map['sort']=$sort;

        $map['id'] = array('lt',$id);
        $data['up'] = $this->where($map)->order('id desc')->limit(1)->find();
        if(empty($data['up'])) $data['up']=null;

        $map['id'] = array('gt',$id);
        $data['down'] = $this->where($map)->order('id asc')->limit(1)->find();
        if(empty($data['down'])) $data['down']=null;

        return $data;
    }

    function showlist($d,$limit=5,$page=1){
        $list = $this->where($d["where"])->order($d["order"])->paginate($limit,false,['page'=>$page]);
        //echo($this->getLastSql());
        $list->each((function($item, $key){
            $item['time']=date("Y-m-d H:i:s",$item['time']);
            $item['des']=strip_tags($item['content']);
            $item['des']=mb_substr($item['des'],0,70,'utf-8');
            return $item;
        }));
        return $list;
    }
}
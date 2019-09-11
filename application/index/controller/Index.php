<?php
namespace app\index\controller;

use app\common\controller\Defa;
use app\common\model\Admin as AdminModel;
use app\common\model\Article;
use app\common\model\Member as MemberModel;

class Index extends Defa
{
    public function index()
    {
        $top=db("Da")->where("cate='首页banner'")->limit(4)->order("id desc")->select();
        $this->assign("top",$top);

        $news=db("Article")->limit(10)->order("id desc")->select();
        $this->assign("news",$news);

        $zc_all=db("Article")->where(array("sort"=>array("in","5,8,11,14,6,9,12,15,7,10,13,16")))->limit(8)->order("id desc")->select();
        $this->assign("zc_all",$zc_all);
        $zc_gs=db("Article")->where(array("sort"=>array("in","5")))->limit(8)->order("id desc")->select();
        $this->assign("zc_gs",$zc_gs);
        $zc_sw=db("Article")->where(array("sort"=>array("in","8")))->limit(8)->order("id desc")->select();
        $this->assign("zc_sw",$zc_sw);
        $zc_cq=db("Article")->where(array("sort"=>array("in","11")))->limit(8)->order("rand()")->select();
        $this->assign("zc_cq",$zc_cq);
        $zc_ran=db("Article")->where(array("sort"=>array("in","5,8,11,14,6,9,12,15,7,10,13,16")))->limit(3)->order("rand()")->select();
        $this->assign("zc_ran",$zc_ran);

        $zs_fang=db("Fang")->where(array("pic"=>array('NEQ','')))->limit(8)->order("id desc")->select();
        $this->assign("zs_fang",$zs_fang);
        $zs_tudi=db("Tudi")->where(array("pic"=>array('NEQ','')))->limit(8)->order("id desc")->select();
        $this->assign("zs_tudi",$zs_tudi);
        $zs_lou=db("Lou")->where(array("pic"=>array('NEQ','')))->limit(8)->order("id desc")->select();
        $this->assign("zs_lou",$zs_lou);

        $zht_all=db("Article")->where(array("sort"=>array("in","46,47,48,49,50,51,52,53,54"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("zht_all",$zht_all);
        $zht_fhq=db("Article")->where(array("sort"=>array("in","46,49,50"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("zht_fhq",$zht_fhq);
        $zht_zckj=db("Article")->where(array("sort"=>array("in","47,51,52"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("zht_zckj",$zht_zckj);
        $zht_zht=db("Article")->where(array("sort"=>array("in","48,53,54"),"pic"=>array('NEQ','')))->limit(3)->order("id desc")->select();
        $this->assign("zht_zht",$zht_zht);

        $zheng=db('Zheng')->limit(4)->order('id desc')->select();
        $this->assign("zheng",$zheng);

        return $this->fetch();
    }
    public function search(){
        $title=input('title');
        $list=db("Article")->where(array("title"=>array("like","%".$title."%")))->order("id desc")->limit(10)->select();
        for($i=0;$i<count($list);$i++){
            $list[$i]['time']=time_ago($list[$i]['time']);
            $list[$i]['des']=remove_html($list[$i]['content']);
            $list[$i]['des']=mb_substr($list[$i]['des'],0,130,'utf-8');
        }
        $this->assign("list",$list);

        $hot=db('Article')->order('rand()')->where(array("hot"=>1))->find();
        $this->assign("hot",$hot);

        $newszi=db('Article')->order('id desc')->limit(6)->select();
        $this->assign("newszi",$newszi);
        $newstu=db('Article')->order('rand()')->limit(6)->select();
        $this->assign("newstu",$newstu);

        return $this->fetch();
    }
    public function msg(){
        $data = input('post.');
        $indat=array("title"=>"意向留言","member_id"=>0,"content"=>serialize($data),"time"=>time());
        db("Message")->insert($indat);
        $this->success("提交成功", url("index/index/index"),'',0);
    }
    public function getpwd(){
        if ($this->request->isPost()) {
            $data=input('post.');
            $newpwd=md5($data['password']);
            unset($data['password']);

            if(!captcha_check($data['captcha'])) $this->error("验证码错误");
            unset($data['captcha']);

            $isfind=db("Member")->where($data)->find();
            if(!empty($isfind)){
                db('Member')->where(array('id'=>$isfind["id"]))->update(array('password'=>$newpwd));
                $this->success("找回成功", url("index/index/userlogin"),'',2);
            }else{
                $this->error("验证信息错误");
            }
            print_r($data);
        }else{
            return $this->fetch();
        }
    }
    public function adminlogin(){
        $mod = new AdminModel;

        if ($this->request->isPost()) {
            $result=$mod->login(input('post.'));
            if($result>0){
                $this->success("登录成功", url("admin/index/index"),'',1);
            }elseif($result==0){
                $this->error("账号被禁用");
            }elseif($result==-1){
                $this->error("账号或密码错误");
            }
        }else{
            if($mod->cookiecheck()){
                $this->redirect('admin/index/index');
            }
            return $this->fetch();
        }
    }
    public function userlogin(){
        $mod = new MemberModel;
        if ($this->request->isPost()) {
            $data=input('post.');

            if(!captcha_check($data['captcha'])) $this->error("验证码错误");
            unset($data['captcha']);

            $result=$mod->login($data);
            if($result>0){
                $this->success("登录成功", url("user/index/index"),'',1);
            }elseif($result==0){
                $this->error("账号被禁用");
            }elseif($result==-1){
                $this->error("账号或密码错误");
            }
        }else{
            if($mod->cookiecheck()){
                $this->redirect('user/index/index');
            }
            return $this->fetch();
        }
    }
    public function userregister(){
        if($this->request->isPost()) {
            $data=input('post.');

            if(!captcha_check($data['captcha'])) $this->error("验证码错误");
            unset($data['captcha']);

            $validate = validate('Member');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            $mod=new MemberModel();
            $mod->add($data);

            $last=db('member')->where(array('username'=>$data['username']))->find();
            if(!empty($last['id'])&&$last['id']>0){
                $result=$mod->login(array('username'=>$data['username'],'password'=>$data['password']));
                if($result>0){
                    $this->success("注册成功", url("user/index/index"),'',1);
                }elseif($result==0){
                    $this->error("账号被禁用");
                }elseif($result==-1){
                    $this->error("账号或密码错误");
                }
            }else{
                $this->error("注册失败");
            }
        }else{
            return $this->fetch();
        }
    }







    public function cj(){
        /*
        社保局新闻  http://www.mohrss.gov.cn/SYrlzyhshbzb/dongtaixinwen/dfdt/gzdt/
        环保局新闻  http://www.mee.gov.cn/xxgk/gzdt/
        消防局新闻  http://www.119.gov.cn/xiaofang/shxf/index.htm
        */
        $a=input("a");
        if(empty($a)) die('aaa');

        //国税要闻
        if($a==1){
            $html=$this->httpget("http://www.chinatax.gov.cn/n810219/n810724/index.html");
            $html=$this->sub_string($html,'列表页内容全集','</dl>');
            $href=$this->gethref($html);
            if($href){
                for($i=0;$i<count($href);$i++){
                    $href[$i]["title"]=explode("]",$href[$i]["title"]);
                    $href[$i]["title"]=trim(end($href[$i]["title"]));
                    $href[$i]["url"]=str_replace("../../","http://www.chinatax.gov.cn/",$href[$i]["url"]);
                }
                foreach($href as $v){
                    $body=$this->httpget($v["url"]);
                    $body=$this->sub_string($body,'tax_content">','</li>');
                    $body=str_replace("../../../","http://www.chinatax.gov.cn/",$body);
                    $newdata=array("title"=>$v["title"],"content"=>$body,"sort"=>62);
                    $this->artadd($newdata);
                }
            }
        }
        //各地税闻
        if($a==2){
            $html=$this->httpget("http://www.chinatax.gov.cn/n810219/n810739/index.html");
            $html=$this->sub_string($html,'列表页内容全集','</dl>');
            $href=$this->gethref($html);
            if($href){
                for($i=0;$i<count($href);$i++){
                    $href[$i]["title"]=explode("]",$href[$i]["title"]);
                    $href[$i]["title"]=trim(end($href[$i]["title"]));
                    $href[$i]["url"]=str_replace("../../","http://www.chinatax.gov.cn/",$href[$i]["url"]);
                }
                foreach($href as $v){
                    $body=$this->httpget($v["url"]);
                    $body=$this->sub_string($body,'tax_content">','</li>');
                    $body=str_replace("../../../","http://www.chinatax.gov.cn/",$body);
                    $newdata=array("title"=>$v["title"],"content"=>$body,"sort"=>63);
                    $this->artadd($newdata);
                }
            }
        }
        //工商局要闻
        if($a==3){
            $html=$this->httpget("http://samr.saic.gov.cn/xw/zyxw/");
            $html=$this->sub_string($html,'Three_zhnlist_dw01','所在页从0开始');
            $href=$this->gethref($html);
            if($href){
                for($i=0;$i<count($href);$i++){
                    $href[$i]["title"]=explode("]",$href[$i]["title"]);
                    $href[$i]["title"]=trim(end($href[$i]["title"]));
                    $href[$i]["url"]=str_replace("./","http://samr.saic.gov.cn/xw/zyxw/",$href[$i]["url"]);
                }
                foreach($href as $v){
                    $body=$this->httpget($v["url"]);
                    $body=$this->sub_string($body,'<div class="Three_xilan_07">','<ul class="contentLeft0102box">');
                    $newdata=array("title"=>$v["title"],"content"=>$body,"sort"=>64);
                    $this->artadd($newdata);
                }
            }
        }
        //科创委新闻
        if($a==4){
            $html=$this->httpget("http://www.most.gov.cn/dfkj/dfkjyw/dfzxdt/");
            $html=iconv("gb2312","utf-8",$html);
            $html=$this->sub_string($html,'<ul class="lh28 blue">','</ul>');
            $href=$this->gethref($html);
            if($href){
                for($i=0;$i<count($href);$i++){
                    $href[$i]["title"]=explode("]",$href[$i]["title"]);
                    $href[$i]["title"]=trim(end($href[$i]["title"]));
                    $href[$i]["url"]=str_replace("../../","http://www.most.gov.cn/dfkj/",$href[$i]["url"]);
                }
                foreach($href as $v){
                    $body=$this->httpget($v["url"]);
                    $body=iconv("gb2312","utf-8",$body);
                    $body=$this->sub_string($body,'<meta name="ContentStart"/>','<meta name="ContentEnd"/> ');
                    $newdata=array("title"=>$v["title"],"content"=>$body,"sort"=>68);
                    $this->artadd($newdata);
                }
            }
        }
        //环保局
        if($a==5){
            $html=$this->httpget("http://www.mee.gov.cn/xxgk/gzdt/");
            $html=$this->sub_string($html,'<div class="main_rt_tit_line">','<div class="page">');
            $href=$this->gethref($html);
            if($href){
                for($i=0;$i<count($href);$i++){
                    $href[$i]["title"]=explode("]",$href[$i]["title"]);
                    $href[$i]["title"]=trim(end($href[$i]["title"]));
                    $href[$i]["url"]=str_replace("./","http://www.mee.gov.cn/xxgk/gzdt/",$href[$i]["url"]);
                }
                foreach($href as $v){
                    $body=$this->httpget($v["url"]);
                    $body=$this->sub_string($body,'<div class="Custom_UnionStyle">','<script language=\'Javascript\'>');
                    $newdata=array("title"=>$v["title"],"content"=>$body,"sort"=>66);
                    $this->artadd($newdata);
                }
            }
        }
        //消防局
        if($a==6){
            $html=$this->httpget("http://www.119.gov.cn/xiaofang/shxf/index.htm");
            $html=iconv("gb2312","utf-8",$html);
            $html=$this->sub_string($html,'<table width="575" border="0" cellpadding="0" cellspacing="0">','<td height="30" colspan="2" align="center">');
            $href=$this->gethref($html);
            if($href){
                for($i=0;$i<count($href);$i++){
                    $href[$i]["title"]=explode("]",$href[$i]["title"]);
                    $href[$i]["title"]=trim(end($href[$i]["title"]));
                    if(strlen($href[$i]["url"])<25){
                        $href[$i]["url"]='http://www.119.gov.cn'.$href[$i]["url"];
                        $nd[]=$href[$i];
                    }
                }
                foreach($nd as $v){
                    $body=$this->httpget($v["url"]);
                    $body=iconv("gb2312","utf-8",$body);
                    $body=$this->sub_string($body,'<td height="87" valign="top" class="font_14_wz">','<td height="30" colspan="2" align="center">');
                    $newdata=array("title"=>$v["title"],"content"=>$body,"sort"=>67);
                    $this->artadd($newdata);
                }
            }
        }
        die('over');
    }
    function artadd($newdata){
        $iffind=db("Article")->where(array("title"=>array("like",'%'.$newdata["title"].'%')))->find();
        if(!$iffind){
            $mod=new Article();
            $result=$mod->add($newdata);
            if($result !== false){
                echo('添加成功:'.$newdata["title"]);
            }else{
                echo('失败:'.$mod->getError());
            }
        }else{
            echo('文章存在:'.$newdata["title"]);
        }
        echo('<br>');
    }
    function httpget($url){
        $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_REFERER, "http://www.chinatax.gov.cn/");

        $headers = array();
        $headers[] = 'X-Apple-Tz: 0';
        $headers[] = 'X-Apple-Store-Front: 143444,12';
        $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
        $headers[] = 'Accept-Encoding: gzip, deflate';
        $headers[] = 'Accept-Language: en-US,en;q=0.5';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
        $headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0';
        $headers[] = 'X-MicrosoftAjax: Delta=true';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //若给定url自动跳转到新的url,有了下面参数可自动获取新url内容：302跳转
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); //设置cURL允许执行的最长秒数。 curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0');
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
        $content = curl_exec($ch); //获取请求返回码，请求成功返回200
        curl_close($ch);
        return $content;
    }
    function gethref($str){
        preg_match_all('%<a[\s\S]*?href="([^"]+)[^>]+>([\s\S]*?)</a>%', $str, $result, PREG_PATTERN_ORDER);
        $d=array();
        for($i=0;$i<count($result[2]);$i++){
            $result[2][$i]=strip_tags($result[2][$i]);
            if(strlen($result[2][$i])>0){
                $d[]=array('title'=>$result[2][$i],'url'=>$result[1][$i]);
            }
        }
        return $d;
    }
    function sub_string($str,$start,$end){
        $str=mb_substr($str,mb_strpos($str,$start)+strlen($start));
        $str=mb_substr($str,0,mb_strpos($str,$end));
        return $str;
    }
    function compress_html($string,$isbr=true) {
        if($isbr){
            $string = str_replace("\r\n", '', $string); //清除换行符
            $string = str_replace("\n", '', $string); //清除换行符
            $string = str_replace("\t", '', $string); //清除制表符
        }

        $string = str_replace(" ", '', $string);
        $string = str_replace("　", '', $string);
        $string = preg_replace('/(<br\s*\/>)+/','<br />',$string);

        $pattern = array (
            "/> *([^ ]*) *</", //去掉注释标记
            "/<!--[^!]*-->/",
            "/\" /",
            "/ \"/",
            "'/\*[^*]*\*/'"
        );
        $replace = array (
            ">\\1<",
            "",
            "\"",
            "\"",
            ""
        );
        return preg_replace($pattern, $replace, $string);
    }
}

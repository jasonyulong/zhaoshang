<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/3/22
 * Time: 9:35
 */

namespace app\common\validate;

use think\Validate;
/**
 * 设置模型
 */
class Zheng extends Validate{
    protected $rule =   [
        'title'  => 'require|max:24',
        'name'  => 'require|max:10',
        'des'  => 'require',

        'area'  => 'number',
        'qiye'  => 'number',
        'huanjing'  => 'max:200',
        'zhengche'  => 'max:200',
        'dili'  => 'max:200',
        'fengcai'  => 'max:200',
    ];
    protected $field = [
        'title'  => '名称',
        'name'  => '联系人',
        'des'  => '详情',

        'area'  => '面积',
        'qiye'  => '入驻企业',
        'huanjing'  => '发展环境',
        'zhengche'  => '优惠政策',
        'dili'  => '地理优势',
        'fengcai'  => '企业风采',
    ];
    protected $scene = [
        'add'  =>  ['title','name','des','area','huanjing','zhengche','dili','fengcai','qiye'],
        'edit'  =>  ['title','name','des','area','huanjing','zhengche','dili','fengcai','qiye'],
    ];
}
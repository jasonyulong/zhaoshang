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
class Tudi extends Validate{
    protected $rule =   [
        'title'  => 'require|max:24',
        'name'  => 'require|max:10',
        'des'  => 'require',

        'area'  => 'number',
        'zujing'  => 'number',
        'year'  => 'number',
    ];
    protected $field = [
        'title'  => '名称',
        'name'  => '联系人',
        'des'  => '详情',

        'area'  => '面积',
        'zujing'  => '土地租金',
        'year'  => '使用年限',
    ];
    protected $scene = [
        'add'  =>  ['title','name','des','area','zujing','year'],
        'edit'  =>  ['title','name','des','area','zujing','year'],
    ];
}
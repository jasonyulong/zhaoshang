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
class Lou extends Validate{
    protected $rule =   [
        'title'  => 'require|max:24',
        'name'  => 'require|max:10',
        'des'  => 'require',

        'area'  => 'number',
        'zujing'  => 'number',
        'lx'  => 'number',
        'wuye'  => 'number',
    ];
    protected $field = [
        'title'  => '名称',
        'name'  => '联系人',
        'des'  => '详情',

        'area'  => '面积',
        'zujing'  => '租金',
        'lx'  => '得房率',
        'wuye'  => '物业费',
    ];
    protected $scene = [
        'add'  =>  ['title','name','des','area','zujing','lx','wuye'],
        'edit'  =>  ['title','name','des','area','zujing','lx','wuye'],
    ];
}
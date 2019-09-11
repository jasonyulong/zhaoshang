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
class Fang extends Validate{
    protected $rule =   [
        'title'  => 'require|max:24',
        'name'  => 'require|max:10',
        'des'  => 'require',

        'area'  => 'number',
        'price'  => 'number',
        'ji'  => 'number',
        'new'  => 'number',
        'shu'  => 'number',
    ];
    protected $field = [
        'title'  => '名称',
        'name'  => '联系人',
        'des'  => '详情',

        'area'  => '面积',
        'price'  => '单价',
        'ji'  => '办公面积',
        'new'  => '新旧程度',
        'shu'  => '宿舍面积',
    ];
    protected $scene = [
        'add'  =>  ['title','name','des','area','price','ji','new','shu'],
        'edit'  =>  ['title','name','des','area','price','ji','new','shu'],
    ];
}
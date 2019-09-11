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
class Mall extends Validate{
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

        'hangye'  => '项目类型',
        'addtime'  => '开业时间',
        'jianzhu'  => '商业建筑面积',
        'lou'  => '商业楼层',
        'address'  => '项目地址',
        'gaikuang'  => '项目概况',
        'fenxi'  => '项目分析',
    ];
    protected $scene = [
        'add'  =>  ['title','name','des','area','hangye','addtime','jianzhu','lou','address','gaikuang','fenxi'],
        'edit'  =>  ['title','name','des','area','hangye','addtime','jianzhu','lou','address','gaikuang','fenxi'],
    ];
}
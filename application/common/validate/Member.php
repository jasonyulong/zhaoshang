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
class Member extends Validate{
    protected $rule =   [
        'username'  => 'unique:member|alphaNum|max:12|min:4',
        'password'  => 'require|min:4|max:12',
        'phone'  => 'require|regex:/^1[34578]{1}\d{9}$/',
        'email'  => 'require|email',
        'nk_name'  => 'require|max:16',
    ];
    protected $field  =   [
        'username'     => '用户名',
        'password'     => '密码',
        'phone'     => '手机',
        'email'     => '邮箱',
        'nk_name'     => '真实姓名',
    ];
    protected $scene = [
        'add'  =>  ['username','password','email'],
        'edit'  =>  ['nk_name','email'],
        'edit_pwd'  =>  ['password','phone'],
        'userrepass'  =>  ['password'],
        'getpwd'  =>  ['email'],
        'getpwdset'  =>   ['password'],
    ];
}
<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '__alias__' =>  [
        'zhaoshang'  =>  'index/zhaoshang',
        'zht'  =>  'index/zht',
        'dj'  =>  'index/dj',
        'xz'  =>  'index/xz',
        'teshe'  =>  'index/teshe',
        'zc'  =>  'index/zc',
        'about'  =>  'index/about',
        'hcy'  =>  'index/hcy',
        'chouhua'  =>  'index/chouhua',
    ],
    'a'=>'index/index/adminlogin',
    '/'=>'index/index/index',

    'zcdt'=>'index/zc/bg',

    'tudi_info/:id'=>'index/tudi/info',
    'fang_info/:id'=>'index/fang/info',
    'lou_info/:id'=>'index/lou/info',
    'zheng_info/:id'=>'index/chouhua/zheng',
    'mall_info/:id'=>'index/zht/mallinfo',

    'zhaoshang_newsinfo/:id'=>'index/zhaoshang/newsinfo',
    'newsinfo/:id'=>'index/zc/newsinfo',
    'dj_newsinfo/:id'=>'index/dj/newsinfo',
    'chouhua_newsinfo/:id'=>'index/chouhua/newsinfo',
    'xz_newsinfo/:id'=>'index/xz/newsinfo',
    'zht_newsinfo/:id'=>'index/zht/newsinfo',

    '/404'=>'index/index/404',
];
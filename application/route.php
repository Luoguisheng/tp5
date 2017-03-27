<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'get']],
//    ],
 //   'lihao/[:name]' => 'index/index/lihao',


//];

//return [
//    '[blog]' =>[
//        ':year/:month' => ['blog/archive',['method'=>'get'],['year'=>'\d{4}','month'=>'\d{2}']],
//        ':name'        => ['blog/read',['method'=>'get'],['name'=>'\w+']],
//        ':id'         => ['blog/get',['method'=>'get'],['id'=>'\d+']]
//    ],
//];

/*return [
    'blog/:name' => ['blog/read',['method'=>'get'],['name'=>'[a-zA-Z]+']],
    'blog-<year>-<month>'=>['blog/archive',['method'=>'get'],['year'=>'\d{4}','month'=>'\d{2}']],
    'blog/:id'=> ['blog/get',['method'=>'get'],['id'=>'\d+']]
    ];*/

//return [
//   // '__pattern__'=>[
//   // /    'name'=> '[a-zA-Z]+',
//    //],
//    //'index/:name'=>['index/index',['method'=>'get'],['name'=>'[a-zA-Z]+']],
//
//];
//return [
//  '__pattern__'=>[
//      'id'=>'\d+'
//  ],
//    'user/index'=>'index/user/index',
//    'user/add'=>'index/user/add',
//    'user/add_list'=>'index/user/add_list',
//    'user/create'=>'index/user/create',
//    'user/update/:id'=>'index/user/update',
//    'user/read/[:id]'=>'index/user/read',
//    'user/delete/:id'=>'index/user/delete',
//];
//return [
//// 定义test模块的自动生成
//    'test' => [
//        '__dir__' => ['controller', 'model', 'view'],
//        'controller' => ['User', 'UserType'],
//        'model' => ['User', 'UserType'],
//        'view' => ['index/index', 'index/test'],
//    ],
//];
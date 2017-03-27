<?php
namespace app\index\controller;
 use think\Url;

 class Blog
 {
     public function get($id) {
         return url('blog/get',['id'=>233]);

     }
     public function read($name) {
         return url('blog/read',['name'=>'think']);
     }
     public function archive($year,$month) {
         return url('blog/archive', ['year' => '2015', 'month' => '05']);
     }
     public function hello($name) {

         dump(request()->param('name'));
         //echo 'name:'.$request->user->name;
         // print_r($request);
         return 'hello' . $name;

     }

 }
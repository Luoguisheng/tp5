<?php
namespace app\index\controller;
use app\index\model\Book;
use app\index\model\Role;
use app\index\model\User as UserModel;
use app\index\model\Profile;
use tests\thinkphp\library\think\controllerTest;
use think\Controller;
use think\Db;


class User extends Controller
{
    public function index() {



    }
    public function add() {
        $user = new UserModel;
        {
            $user = UserModel::get(1);
            $book = new Book;
            //$book -> title  = '独白日记';
            //$book -> publish_time  = '2016-02-18';
            $list = [
              ['title'=>'ddddd','publish_time'=>'2016-03-19'],
              ['title'=>'rrrrr','publish_time'=>'2016-02-19']
            ];
            $user->books()->saveAll($list);


           /* $user = new UserModel;
            $user->name = 'thinkphp';
            $user->password = '123456';
            $user->nickname = '流年';
            if ($user->save()) {
            // 写入关联数据
                $profile = new Profile;
                $profile['truename'] = '刘晨';
                $profile['birthday'] = '1977-03-05';
                $profile['address'] = '中国上海';
                $profile['email'] = 'thinkphp@qq.com';
                $user->profile()->save($profile);
                return '用户新增成功';*/



            //} else {
             //   return $user->getError();
           // }
        }
/*//        $list = [
//            ['nickname'=>'ddd','email'=>'dddd@11.com','birthday'=>strtotime('2012-02-20')],
//            ['nickname'=>'ddd','email'=>'dddd@11.com','birthday'=>strtotime('2012-02-20')]
//        ];
//        if ($user->saveAll($list)) {
//            return '新增成功！';
//        } else {
//            $user->getError();
//        }
        if ($user->allowField(true)->validate(true)->save(input('post.'))) {
            return '新增成功！';
        } else {
            return $user->getError();
        }*/


    }
    public function add_list(){
        $user = new UserModel;
        $list = [
            ['nickname'=>'流年','email'=>'dddd@11.com'],
            ['nickname'=>'ddd','email'=>'dddd@11.com']
        ];
        if ($user->saveAll($list)) {
            return '批量新增成功！';
        } else {
           return $user->getError();
        }
    }
    public function delete($id){
        $user = UserModel::get($id);
        if ($user->delete()) {
            $user->profile->delete();
        } else {

        }


    }
    public function update($id = 1) {
       $user = UserModel::get(1);
       if ($user->save()) {
           $user->profile->truename = 'dddd';
           $user->profile->save();
       }


    }

    public function read($id=0) {


     }

     public function create() {
         $list = UserModel::paginate(3);
         $title = '传递变量';
         $this->assign('list', $list);
         $this->assign('count', count($list));
         $this->assign('title',$title );
         //$this->view->engine->layout(false);
         //$this->view->replace(['__PUBLIC__'=>'/static/default']);
         //return $this->fetch('user/create');
         return view('user/create',['list'=>$list],['__PUBLIC__'=>'/static/default']);
     }
}

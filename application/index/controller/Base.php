<?php
namespace app\index\controller;
use think\console\command\make\Controller;
use think\Request;
use think\Session;
use app\index\model\User;
class Base  extends Controller {
    public function _initialize() {
         $user = User::get(Session::get('user_id'));
                Request::instance()->bind('user',$user);
    }

}
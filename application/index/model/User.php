<?php
namespace app\index\model;
use think\Model;

class User extends Model {
    protected $autoWriteTimestamp = true;
    protected $insert = ['status'=>1];
    public function profile() {
        //用hasOne关联档案关系
        return $this->hasOne('Profile');
    }


    public function getStatusAttr($value) {
        $status = ['-1'=>'未审核','0'=>'未通过','1'=>'审核成功'];
        return  $status[$value];
    }

    public function books() {
        return $this->hasMany('Book');
    }


    public function roles() {
        return $this->belongsToMany('role','access');
    }
}
<?php
namespace app\index\model;

use think\Model;

class Book extends Model {
    protected $insert = ['status'=>1];
    protected $autoWriteTimestamp = true;
    protected $type = [
        'publish_time' => 'timestamp:Y-m-d',
    ];
    /* public function user () {
        $this->belongsTo('User');
    }*/




}
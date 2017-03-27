<?php
namespace app\admin\controller;

class Index
{
    public function index()
    {
        echo $_SERVER['DOCUMENT_ROOT'] .'/'. $_SERVER['REQUEST_URI'];
    }
    public function hello($name = 'world'){
        echo $name;
    }
}

<?php
namespace app\index\controller;
use think\Console;
class Index
{
    public function index()
    {
        // 调用命令行的指令

        $output = Console::call('make:model',['index/Blog']);
        return $output->fetch();
    }


}

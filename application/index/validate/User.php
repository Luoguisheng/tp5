<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate {
    // 验证规则
    protected $rule = [
        ['nickname','require|min:5','昵称不能为空|昵称不能小于5位'],
        ['email','checkMail:thinkphp.cn','邮件格式不对'],
        ['birthday','dateFormat:Y-m-d','生日不格式不正确']
    ];

    // 验证邮箱格式 是否符合指定的域名
    protected function checkMail($value, $rule)
    {
        $result = preg_match('/^\w+([-+.]\w+)*@' . $rule . '$/', $value);
        if (!$result) {
            return '邮箱只能是' . $rule . '域名';
        } else {
            return true;
        }

    }


}
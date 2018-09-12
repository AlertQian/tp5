<?php 
namespace app\index\validate;

use think\Validate;

class Login extends Validate
{
    protected $rule = [
        'logname' =>  'require|length:2,20',
        'password'   =>  'require'
    ];
    protected $message=[
        'logname.require'=>'用户名不能为空！',
        'logname.length'=>'用户名长度必须在2到20之间！',
        'logname.token' =>'请不要重复提交',
        'password.require'=>'密码不能为空！',
    ];

}
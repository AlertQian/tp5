<?php 
namespace app\wap\validate;

use think\Validate;

class Reg extends Validate
{
    protected $rule = [
        'nickname' =>  'require|length:2,20|token',
        'chrphone' =>  'require|number',
        'chrpwd'   =>  'require'
    ];
   protected $message=[

        'nickname.require'=>'用户名不能为空！',
        'nickname.length'=>'用户名长度必须在2到20之间！',
        'nickname.token' =>'请不要重复提交',
        'chrpwd.require'=>'密码不能为空！',
        'chrphone.require'=>'手机号不能为空！',
        'chrphone.number'=>'正确填写手机号！',

    ];

}
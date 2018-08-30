<?php 
namespace app\index\validate;

use think\Validate;

class UserInfo extends Validate
{
    protected $rule = [
        'realname' =>  'require|length:2,15|token',
        'sex'      =>  'require',
        'age'      =>  'require',
        'place'    =>  'require',
        'jytype'   =>  'require',
        'qq'       =>  'number',
        'phone'    =>  'require|number'
    ];
    protected $message=[

        'nickname.require'=>'用户名不能为空！',
        'nickname.length'=>'正确填写用户名',
        'nickname.token' =>'请不要重复提交',
        'chrphone.require'=>'手机号不能为空！',
        'chrphone.number'=>'正确填写手机号！',
        'qq.number'=>'正确填写QQ号！',
        'sex.require'=>'请选择性别',
        'age.require'=>'请填写年龄',
        'place.require'=>'请填写地区',
        'jytype.require'=>'请选择交友方式',

    ];

}
<?php 
namespace app\wap\validate;

use think\Validate;

class Comment extends Validate
{
    protected $rule = [
        'cont' =>  'require|token',
    ];
    protected $message=[
        'cont.require'=>'请填写回复内容',
        'cont.token' =>'请不要重复提交'
    ];

}
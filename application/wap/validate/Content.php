<?php 
namespace app\wap\validate;

use think\Validate;

class Content extends Validate
{
    protected $rule = [
        'title' =>  'require|token',
        'content'   =>  'require'
    ];
    protected $message=[
        'title.require'=>'请填写标题',
        'title.token' =>'请不要重复提交',
        'content.require'=>'请填写内容',
    ];

}
<?php
namespace app\wap\controller;
use think\Controller;
class Common extends Controller
{
    public function _initialize(){
    	
    }
    //数据验证
    public function check_form($method,$data){
    	$validate = validate($method);
    	if(!$validate->check($data)){
			$msg=$validate->getError();
			return $this->error($msg);
		}
    }
    
}
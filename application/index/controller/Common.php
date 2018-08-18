<?php
namespace app\index\controller;
use think\Controller;
class Common extends Controller
{
    public function _initialize(){
    	
    }
    public function check_form($method,$data){
    	$validate = validate($method);
    	if(!$validate->check($data)){
			$msg=$validate->getError();
			return $this->error($msg);
		}
    }
}
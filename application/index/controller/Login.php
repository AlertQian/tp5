<?php
namespace app\index\controller;
use think\Request;
use think\captcha\Captcha;
class Login extends Common
{
	public function index(){
		/*if(!session('validate')){

		}else{
			//$this->redirect('user/set');
		}*/
       
		return $this->fetch();
	}

	public function reg(){
		if(!session('validate')){
			if(request()->isPost()){
				
			}
			return $this->fetch();
		}else{
			$this->redirect('use/set');
		}
		
	}
	public function login(){
		return $this->fetch();
	}
}
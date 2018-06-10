<?php
namespace app\index\controller;

class Login extends Common
{
	public function index(){
		if(!session('validate')){

		}else{
			$this->redirect('user/set');
		}
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
}
<?php
namespace app\index\controller;
/**
 * 
 */
class User extends Common
{
	public function _initialize(){
    	if(!session('validate')){
    		$this->redirect('login/index');
    	}
    }
	public function index(){
		return $this->fetch();
	}
	public function addinfo(){
		return $this->fetch();
	}
}
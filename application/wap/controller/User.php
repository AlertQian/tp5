<?php
namespace app\wap\controller;
/**
 * 
 */
class User extends Common
{
	
	public function index(){
		return $this->fetch();
	}
	public function set(){
		echo "hellow user set";
	}
	public function addinfo(){

		$yeararr= yearArr();
		$starr= statureArr();
		$townarr= townArr();

		$this->assign('yeararr',$yeararr);
		$this->assign('starr',$starr);
		$this->assign('townarr',$townarr);
		return $this->fetch();
	}
	public function real(){
		return $this->fetch();
	}
}
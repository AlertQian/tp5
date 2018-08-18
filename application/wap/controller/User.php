<?php
namespace app\wap\controller;
/**
 * 
 */
class User extends Common
{
	
	public function index(){

	}
	public function set(){
		echo "hellow user set";
	}
	public function addinfo(){
		return $this->fetch();
	}
}
<?php
namespace app\wap\controller;
use think\Request;

class Forum extends Common
{
   public function index(){
   	$this->assign('title','会员社区');
   	return $this->fetch();
   }
   public function detail(){
   	$this->assign('title','会员社区');
   	return $this->fetch();
   }
}
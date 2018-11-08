<?php
namespace app\index\controller;
use think\Controller;
class Index extends Common
{
    public function index()
    {
        return $this->fetch();
    }
    public function hello($idsa){
    	//return 'Hello,'.$idsa;
    	//return $this->request->param('name');
    }
    public function homepage(){
    	echo "e1q2e";
    }
}

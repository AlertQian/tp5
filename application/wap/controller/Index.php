<?php
namespace app\wap\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {

        return $this->fetch();
    }
    public function hello($idsa){
    	return 'Hello,'.$idsa;
    	//return $this->request->param('name');
    }
    public function layuiAdmin(){
    	
    }
    //个人主页
    public function homepage($id){
        $id=input('id');
        echo $id;
       return $this->fetch('template1');
    }
}

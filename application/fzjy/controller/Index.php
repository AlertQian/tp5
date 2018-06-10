<?php
namespace app\fzjy\controller;
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
}

<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
class Index extends Common
{
    public function index()
    {
        if (Request::instance()->isMobile()) {
            $this->redirect("http://wap.0794jxw.cn");
        }
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

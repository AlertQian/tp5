<?php
namespace app\wap\controller;
use app\index\model\UserInfo;
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

        if(request()->isPost()){
        	$userinfo=new UserInfo;
        	$data=input('post.');
        	$place=$data['county'].$data['town'].$data['dtarea'];
        	$data['place']=$place;
        	$data['addtime']=time();
        	$data['signature']=remove_xss($data['signature']);
        	$data['content']=remove_xss($data['content']);
        	$this->check_form('UserInfo',$data);
        	$ret=$userinfo->add($data);
        	if($ret){
        		$this->success('已提交');
        	}else{
        		$this->error('提交失败');
        	}
        }
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
<?php
namespace app\wap\controller;
use app\index\model\UserInfo;
use app\index\model\Yaoqiu;
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
	//添加基本资料
	public function addinfo(){
        if(request()->isPost()){
        	$userinfo=new UserInfo;
        	$data=input('post.');
        	$place=$data['county'].$data['town'].$data['dtarea'];
        	$data['place']=$place;
        	$data['userid']='';
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
		$eduarr= eduArr();
		$wagesarr= wagesArr();
		$signarr= signArr();
		$this->assign('yeararr',$yeararr);
		$this->assign('starr',$starr);
		$this->assign('townarr',$townarr);
		$this->assign('eduarr',$eduarr);
		$this->assign('wagesarr',$wagesarr);
		$this->assign('signarr',$signarr);
		return $this->fetch();
	}
	public function yaoqiu(){
		if(request()->isPost()){
			$yaoqiu=new Yaoqiu;
			$data=input('post.');
			$data['userid']='';
			$data['addtime']=time();
			$ret=$yaoqiu->save($data);
			if($ret){
				$this->success('已提交');
			}else{
				$this->error('提交失败');
			}
		}
	}
	public function real(){
		return $this->fetch();
	}
}
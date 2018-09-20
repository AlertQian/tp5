<?php
namespace app\wap\controller;
use app\index\model\UserInfo;
use app\index\model\Yaoqiu;
use app\index\model\User as UserModel;
/**
 * 
 */
class User extends Common
{
	public function _initialize(){
    	if(!session('validate')){
    		return $this->redirect('login/index');
    	}else{
    		$user=new UserModel;
    		$ret=$user->where('pwd_hash',session('validate'))->find();
    		if(!$ret){
    			session('validate',null);
    			session('nickname',null);
                return $this->redirect('login/index');
    		}
    	}
    }
	public function index(){
		return $this->fetch();
	}
	public function set(){

		echo session('nickname');
	}
	//添加基本资料
	public function addinfo(){
		$user=new UserModel;
		$userinfo=new UserInfo;
		$info=$user->where(['pwd_hash'=>session('validate'),'nickname'=>session('nickname')])->find();
		if($info){
			$userid=$info['userid'];
			$phone=$info['phone'];
			$this->assign('phone',$phone);
		}
        $is_uerinfo=$userinfo::where('userid',$userid)->find();
        if($is_uerinfo){
        	$this->assign('ret',$is_uerinfo);
        }
        if(request()->isPost()){
        	$data=input('post.');
        	$place=$data['county'].$data['town'].$data['dtarea'];
        	$data['place']=$place;
        	$data['userid']=$userid;
        	$data['addtime']=time();
        	$data['signature']=remove_xss($data['signature']);
        	$data['content']=remove_xss($data['content']);
        	$this->check_form('UserInfo',$data);
        	if($is_uerinfo){
        		$data['tables_id']=$is_uerinfo['tables_id'];
        		$ret=$userinfo->edit($data);
        	}else{
        		$ret=$userinfo->add($data);
        	}
        	if($ret){
        	    return $this->success('已提交');
        	}else{
        		return $this->error('提交失败');
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
	//退出
    public function logout(){
        session('validate',null);
        session('nickname',null);
        return $this->redirect('login/index');
    }
}
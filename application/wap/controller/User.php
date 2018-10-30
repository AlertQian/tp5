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
	protected $userid;
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
    	    $this->userid=$ret['userid'];
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
		$yaoqiu=new Yaoqiu;
		$info=$user->where(['pwd_hash'=>session('validate'),'nickname'=>session('nickname')])->find();
		if($info){
			$userid=$info['userid'];
			$phone=$info['phone'];
			$this->assign('phone',$phone);
		}
        $is_uerinfo=$userinfo::where('userid',$userid)->find();
        $is_yaoqiu=$yaoqiu::where('userid',$userid)->find();
        if(!$is_uerinfo){
        	$is_uerinfo['sex']="男";
        }
        $this->assign('ret',$is_uerinfo);
        if($is_yaoqiu){
        	$this->assign('yaoqiu',$is_yaoqiu);
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
		$yaoqiu=new Yaoqiu;
		$userid=$this->userid;
		$is_yaoqiu=$yaoqiu::where('userid',$userid)->find();
		if(request()->isPost()){	
			$data=input('post.');
			$data['userid']=$userid;
			$data['addtime']=time();
			if($is_yaoqiu){
				$data['id']=$is_yaoqiu['id'];
				$ret=$yaoqiu->edit($data);
			}else{
				$ret=$yaoqiu->save($data);
			}
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
    //上传头像
    public function headimg(){
    	$imgurl=input('imgurl');
    	$userinfo=new UserInfo;
    	$userid=$this->userid;
	    $ret=$userinfo->where('userid',$userid)->update(['headimg'=>$imgurl]);
	    if($ret){
	        $this->success('ok');
	    }else{
	    	$this->error('no');
	    }
    }
}
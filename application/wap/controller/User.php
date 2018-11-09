<?php
namespace app\wap\controller;
use app\index\model\UserInfo;
use app\index\model\UserImprove;
use app\index\model\Yaoqiu;
use app\index\model\User as UserModel;
use think\Validate;
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
		$userinfo=new UserInfo;
		$user=new UserModel;
		$userid=$this->userid;
		$obj=$user::field('nickname,userid')->where('userid',$userid)->find();
		if($obj){
			$ret=$userinfo->where('userid',$userid)->find();
			if($ret){
				$obj['headimg']=$ret['headimg'];
				$this->assign('ret',$ret);
			}else{
				$obj['headimg']='/wap/main/images/jiaoyou_face_nofind.jpg';
			}
            $this->assign('obj',$obj);
		}else{
			return $this->redirect('login/index');
		}
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
		$improve=new UserImprove;
		$info=$user->where(['pwd_hash'=>session('validate')])->find();
		if($info){
			$userid=$info['userid'];
			$phone=$info['phone'];
			$this->assign('phone',$phone);
		}else{
			return $this->redirect('login/index');
		}
        $is_uerinfo=$userinfo::where('userid',$userid)->find();
        $is_yaoqiu=$yaoqiu::where('userid',$userid)->find();
        $is_improve=$improve::where('userid',$userid)->find();
        if(!$is_uerinfo){
        	$is_uerinfo['sex']="男";
        }
        $this->assign('ret',$is_uerinfo);
        $this->assign('yaoqiu',$is_yaoqiu);
        $this->assign('improve',$is_improve);
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
	//完善资料
	public function improve(){
		$object=new UserImprove;
		$userid=$this->userid;
		$is_object=$object::where('userid',$userid)->find();
		if(request()->isPost()){	
			$data=input('post.');
			$data['userid']=$userid;
			$data['addtime']=time();
			if($is_object){
				$data['id']=$is_object['id'];
				$ret=$object->edit($data);
			}else{
				$ret=$object->save($data);
			}
			if($ret){
				$this->success('已提交');
			}else{
				$this->error('提交失败');
			}
		}
	}
	//要求
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
    //安全设置
    public function safe(){
    	$user=new UserModel;
    	$userid=$this->userid;
    	$obj=$user::where('userid',$userid)->find();
    	if($obj){
    		$nickname=$obj['nickname'];
    		$pwd_hash=$obj['pwd_hash'];
    		$password=$obj['password'];
    		$this->assign('nickname',$nickname);
    	}
    	if(request()->isPost()){
    		$data=input('post.');
    		$type=$data['types'];
    		if($type==1){
    			$name=$data['nickname'];
    			//还要判断nickname的长度
    			$rules=[
    				'nickname'  => 'require|max:25',
    			];
    			$msg=[
    				'nickname.require'=>'昵称不能为空',
    				'nickname.max'=>'名称太长'
    			];
    			$validate=new Validate($rules,$msg);
    			if(!$validate->check($data)){
					$msg=$validate->getError();
					return $this->error($msg);
				}
				if($nickname == $name){
					$this->success('保存成功');
				}
				$isset=$user::where('nickname',$name)->find();
				if($isset){
					$this->error('该昵称已被注册');
				}
    			$ret=$user::where('userid',$userid)->update(['nickname'=>$name]);
    			if($ret){
					$this->success('保存成功','user/index');
				}else{
					$this->error('提交失败');
				}
    		}else if($type==2){
    			$pwd=$data['pwd'];
    			$newpwd=$data['newpwd'];
    			$againpwd=$data['againpwd'];
    			if($password !== md5($pwd.$pwd_hash)){
    				$this->error('原始密码错误！');
    			}
    			$rules=[
    				'pwd'  => 'require|length:6,16',
    				'newpwd'  => 'require|length:6,16',
    				'againpwd'  => 'require|length:6,16',
    			];
    			$msg=[
    				'pwd.require'=>'必填项不能为空',
    				'pwd.length'=>'密码长度必须在6到16之间！',
    				'newpwd.require'=>'必填项不能为空',
    				'newpwd.length'=>'密码长度必须在6到16之间！',
    				'againpwd.require'=>'必填项不能为空',
    				'againpwd.length'=>'密码长度必须在6到16之间！'
    			];
    			$validate=new Validate($rules,$msg);
    			if(!$validate->check($data)){
					$msg=$validate->getError();
					return $this->error($msg);
				}
    			if($newpwd !== $againpwd){
    				$this->error('两次密码不一致！');
    			}else{
    				$newpassword=md5($newpwd.$pwd_hash);
    				$ret=$user::where('userid',$userid)->update(['password'=>$newpassword]);
    				if($ret){
						$this->success('保存成功','user/index');
					}else{
						$this->error('提交失败');
					}
    			}
    		}
    	}
    	return $this->fetch();
    }
}
<?php
namespace app\wap\controller;
use app\index\model\UserInfo;
use app\index\model\UserImprove;
use app\index\model\Yaoqiu;
use app\index\model\User as UserModel;
use think\Validate;
use think\Db;
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
		$msg=db('message')->where(['user_id'=>$userid,'status'=> 1])->where('friend_id !='.$userid)->select();
		if($msg){
			$this->assign('msg',$msg);
		}
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
		$this->assign('title','会员中心');
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
		$userid=$this->userid;
		$info=$user->where('userid',$userid)->find();
		if($info){
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
        	$data['yearsitem']=yeasItem($data['age']);
        	$data['addtime']=time();
        	$data['signature']=remove_xss($data['signature']);
        	$data['content']=remove_xss($data['content']);
        	$this->check_form('UserInfo',$data);
	        $tables_id=$userinfo::where('userid',$userid)->value('tables_id');
        	if($tables_id){
        		$data['tables_id']=$tables_id;
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
		$yeararritem= yearArritem();
		$starr= statureArr();
		$townarr= townArr();
		$eduarr= eduArr();
		$wagesarr= wagesArr();
		$signarr= signArr();
		$this->assign('yeararritem',$yeararritem);
		$this->assign('yeararr',$yeararr);
		$this->assign('starr',$starr);
		$this->assign('townarr',$townarr);
		$this->assign('eduarr',$eduarr);
		$this->assign('wagesarr',$wagesarr);
		$this->assign('signarr',$signarr);
		$this->assign('title','交友信息');
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
		$this->assign('title','实名认证');
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
    	$this->assign('title','安全设置');
    	return $this->fetch();
    }
    //上传图片
    public function imglist(){
    	$userinfo=new UserInfo;
    	$userid=$this->userid;
    	$showimgs=$userinfo->where('userid',$userid)->value('showimgs');
    	if(request()->isPost())
    	{
    		$data=input('post.');
    		$imgs=$data['imgs'];
    		if($imgs == $showimgs){
    			$this->success('已保存');
    		}
    		$ret=$userinfo->where('userid',$userid)->update(['showimgs'=>$imgs]);
    		if($ret){
				$this->success('保存成功');
			}else{
				$this->error('保存失败');
			}
    	}
    	if($showimgs){
    		$imgsarr=explode(',', $showimgs);
        	$this->assign('imgsarr', $imgsarr);
    		$this->assign('showimgs',$showimgs);
    	}
    	$this->assign('title','我的相册');
    	return $this->fetch();
    }
    //删除图片
    public function unsetimg(){
    	$urls=input('urls');
    	$delet_url='.'.DS.$urls;
    	if(unlink($delet_url)){
			$this->success('已删除,记得点击保存');
		}else{
			$this->error('删除失败');
		}
    }
    //私信消息
    public function message(){
    	$userinfo=new UserInfo;
		$user=new UserModel;
    	$userid=$this->userid;
    	$ret=db::query("select a.*,count(a.id) count from (select * from lv_message where user_id =".$userid." order by id desc) as a group by friend_id order by id desc;");
    	$this->assign('title','私信列表');
    	$this->assign('userid',$userid);
    	if($ret){
    		foreach ($ret as $key => $value) {
    			$friend_id=$value['friend_id'];
    			$msgnotice=db('message')->where(['friend_id'=>$friend_id,'status'=>1,'user_id'=>$userid])->count('id');
    			$nickname=$user->where('userid',$friend_id)->value('nickname');
    			$headimg=$userinfo->where('userid',$friend_id)->value('headimg');
    			$ret[$key]['nickname']=$nickname;
    			$ret[$key]['headimg']=$headimg;
    			$ret[$key]['msgnotice']=$msgnotice;
    		}
    		$this->assign('ret',$ret);
    	}
    	return $this->fetch();
    }
    //消息内容
    public function msginfo(){
    	$userinfo=new UserInfo;
		$user=new UserModel;
    	$user_id=input('user_id');
    	$friend_id=input('friend_id');
    	$userid=$this->userid;
    	$this->assign('userid',$userid);
    	$ret=db('message')->where(['user_id'=>$user_id,'friend_id'=>$friend_id])->select();
    	if($ret){
    		//更新阅读状态
    		db('message')->where(['user_id'=>$user_id,'friend_id'=>$friend_id])->update(['status'=>2]);
    		foreach ($ret as $key => $value) {
    			$friend_id=$value['friend_id'];
    			$nickname=$user->where('userid',$friend_id)->value('nickname');
    			$friend_headimg=$userinfo->where('userid',$friend_id)->value('headimg');
    			$my_headimg=$userinfo->where('userid',$userid)->value('headimg');
    			$ret[$key]['nickname']=$nickname;
    			$ret[$key]['friend_headimg']=$friend_headimg;
    			$ret[$key]['my_headimg']=$my_headimg;
    		}
    		$this->assign('nickname',$nickname);
    		$this->assign('friend_id',$friend_id);
    		$this->assign('ret',$ret);
    	}
    	$this->assign('title','消息内容');
    	return $this->fetch();
    }
}
<?php
namespace app\index\controller;
use app\index\model\User;
use think\Request;
class Login extends Common
{
	public function index(){
		if(request()->isMobile()){
			$this->redirect('/wap/login/index');
		}
		if(!session('validate')){
			if(request()->isPost()){
				$user=new User();
				$data=input('post.');
				$ip=request()->ip();
				$logname=$data['logname'];
				$passwd=md5($data['password']);
				$this->check_form('Login',$data);
				if(check_phone($logname)){
				  $ret=$user->where(['phone'=>$logname,'password'=>$passwd])->find();
				}else if(check_email($logname)){
				  $ret=$user->where(['email'=>$logname,'password'=>$passwd])->find();
				}else{
                  $ret=$user->where(['nickname'=>$logname,'password'=>$passwd])->find();
				}
				if($ret){
					session('validate',$ret['pwd_hash']);
					$updata=[
						'logintime'=>time(),
						'logip'    =>$ip
					];
					$user->where('userid',$ret['userid'])->update($updata);
					return $this->success('登入成功','user/index');
				}else{
					return $this->error('账号或密码错误');
				}
			}
			return $this->fetch();
		}else{
			return $this->redirect('user/index');
		}

	}

	public function reg(){
		if(request()->isMobile()){
			$this->redirect('/wap/login/reg');
		}
		if(!session('validate')){
			if(request()->isPost()){
				$ip=request()->ip();
				$data=input('post.');
				$user=new User();
				$phone=$user::where('phone',$data['chrphone'])->find();
				if(!$phone){
					$nickname=$user::where('nickname',$data['nickname'])->find();
					if(!$nickname){
						$this->check_form('Reg',$data);
						$pwd=md5($data['chrpwd']);
						$pwd_hash=substr(md5($data['chrphone']), 8, 16);
						$info=[
							'nickname' =>$data['nickname'],
							'phone'    =>$data['chrphone'],
							'password' =>$pwd,
							'type'     =>$data['typeid'],
							'pwd_hash' =>$pwd_hash,
							'regtime'  =>time(),
							'regip'    =>$ip,
							'logintime'=>time(),
							'logip'    =>$ip
						];
						$ret=$user->save($info);
						if($ret){
							session('validate',$pwd_hash);
							return $this->success('注册成功','user/index');
						}else{
							return $this->error('注册失败');
						}
					}else{
						return $this->error('该昵称已存在');
					}
				}else{
					return $this->error('电话号码已经注册');
				}
			}else{
				return $this->fetch();
			}
		}else{
			$this->redirect('user/index');
		}
		
	}
}
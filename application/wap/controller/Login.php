<?php
namespace app\wap\controller;
use think\Request;
use think\captcha\Captcha;
use app\index\model\User;
class Login extends Common
{

	public function index(){
       if(!session('validate')){
			if(request()->isPost()){
				$user=new User();
				$data=input('post.');
				$ip=request()->ip();
				$logname=$data['logname'];
				$this->check_form('Login',$data);
				if(check_phone($logname)){
				  $ret=$user->where(['phone'=>$logname])->find();
				}else if(check_email($logname)){
				  $ret=$user->where(['email'=>$logname])->find();
				}else{
                  $ret=$user->where(['nickname'=>$logname])->find();
				}
				if($ret){
					$passwd=md5($data['password'].$ret['pwd_hash']);
					if($ret['password']==$passwd){
					session('validate',$ret['pwd_hash']);
					session('nickname',$ret['nickname']);
					$updata=[
						'logintime'=>time(),
						'logip'    =>$ip
					];
					$user->where('userid',$ret['userid'])->update($updata);
					return $this->success('登入成功','user/index');
					}
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
		if(!session('validate')){
			if(request()->isPost()){
				$validate = validate('Reg');
				$ip=request()->ip();
				$data=input('post.');
				$user=new User();
				$phone=$user::where('phone',$data['chrphone'])->find();
				if(!$phone){
					$nickname=$user::where('nickname',$data['nickname'])->find();
					if(!$nickname){
						if(!$validate->check($data)){
							$msg=$validate->getError();
							return $this->error($msg);
						}
						//生成密盐
						$salt=$data['chrphone'].mt_rand(1524, 9758).time();
						$pwd_hash=substr(md5($salt), 8, 16);
						$pwd=md5($data['chrpwd'].$pwd_hash);
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
							session('nickname',$data['nickname']);
							return $this->success('注册成功');
						}else{
							return $this->error('注册失败');
						}
					}else{
						return $this->error('该昵称已存在');
					}
				}else{
					return $this->error('电话号码已经注册');
				}
			}
			return $this->fetch();
		}else{
			$this->redirect('user/index');
		}
		
	}
	
	public function code(){
		//require_once 'curl.func.php';
		$appkey = 'f480c8cb2795c75e';//你的appkey
		$mobile = '18146688170';//手机号 超过1024请用POST
		$content = '用户您好。【yanzhengma】';//utf8
		$url = "http://api.jisuapi.com/sms/send?appkey=$appkey&mobile=$mobile&content=$content";
		$result = curlOpen($url);
		$jsonarr = json_decode($result, true);
		//exit(var_dump($jsonarr));
		if($jsonarr['status'] != 0)
		{
		    echo $jsonarr['msg'];
		    exit();
		}
		$result = $jsonarr['result'];
		echo $result['count'].' '.$result['accountid'].'<br>';
	}
	 /* tp5邮件
     * @param
     * @author staitc7 <static7@qq.com>
     * @return mixed
     */
    public function email() {
        $toemail='2697572428@qq.com';
        $name='玛塔';
        $param = str_pad(mt_rand(0, 999999), 6, "0", STR_PAD_BOTH);
        $code=md5(md5($param));
        if($code){
        	session('code',$code);
        }
        //echo $code;exit();
        $subject='[红娘网]邮箱验证';
        $content='亲爱的用户'.$name.'： 您好！'.'您的邮箱验证码：'.$param;
        //echo session('code');
        send_mail($toemail,$name,$subject,$content);
    }
}
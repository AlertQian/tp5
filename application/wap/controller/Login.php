<?php
namespace app\wap\controller;
use think\Request;
use think\captcha\Captcha;
use app\index\model\User;
class Login extends Common
{
	public function index(){
		/*if(!session('validate')){

		}else{
			//$this->redirect('user/set');
		}*/
       
		return $this->fetch();
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
			$this->redirect('user/set');
		}
		
	}
	public function login(){

		return $this->fetch();
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
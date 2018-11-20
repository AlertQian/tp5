<?php
namespace app\wap\controller;
use app\index\model\UserInfo;
use app\index\model\UserImprove;
use app\index\model\Yaoqiu;
use app\index\model\User as UserModel;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        echo yeasItem('1987'); 
        //return $this->fetch();
    }
    public function hello($idsa){
    	return 'Hello,'.$idsa;
    	//return $this->request->param('name');
    }
    //个人主页
    public function homepage($id){
        $id=input('id');
        $user=new UserModel;
        $userimprove=new UserImprove;
        $yaoqiu=new Yaoqiu;
        $ret=$user::alias('a')->join('lv_user_info b','a.userid=b.userid')->field('a.nickname,b.*')->where('a.userid',$id)->find();
        if($ret){
            $ret['place']=$ret['county'].$ret['town'];
            $showimgs=$ret['showimgs'];
            $imgsarr=explode(',', $showimgs);
            $this->assign('imgsarr', $imgsarr);
            $this->assign('ret',$ret);
        }else{
            return "is not exit";
        }
        $improve=$userimprove::where('userid',$id)->find();
        if($improve){
            $this->assign('improve',$improve);
        }
        $is_yaoqiu=$yaoqiu::where('userid',$id)->find();
        $this->assign('yaoqiu',$is_yaoqiu);
        return $this->fetch();
    }
    public function xieyi(){
        return $this->fetch();
    }
}

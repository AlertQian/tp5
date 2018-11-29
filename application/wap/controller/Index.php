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
        $this->assign('title','首页');
        return $this->fetch();
    }
    public function data($page,$pagesize=2,$orderby=''){
        $user=new UserModel;
        $order="b.addtime desc";
        $where="1=1";
        if($orderby == 1){
            $order="b.addtime desc";
        }else if($orderby == 2){
            $where="b.sex ='女'";
        }else if($orderby == 3){
            $where="b.sex ='男'";
        }else{
            $order="b.addtime desc";
        }
    	$list=$user::alias('a')->join('lv_user_info b','a.userid=b.userid')->field('a.nickname,b.*')->where($where)->order($order)->page($page,$pagesize)->select();
        $number=$user::alias('a')->join('lv_user_info b','a.userid=b.userid')->field('a.nickname,b.*')->where($where)->order($order)->select();
        $listnum=count($number);
        $res['pages'] = ceil($listnum/$pagesize);//统计总数。
        $res['data']  = $list;//返回列表
        return $res;
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
            $headpic=$ret['headimg'];
            if(!$headpic){
                $ret['headimg']="/wap/main/images/jiaoyou_face_nofind.jpg";
            }
            $showimgs=$ret['showimgs'];
            $sex=$ret['sex'];
            $yearsitem=$ret['yearsitem'];
            $imgsarr=explode(',', $showimgs);
            $this->assign('imgsarr', $imgsarr);
            $this->assign('ret',$ret);
        }else{
            return "is not exit";
        }
        $where="a.userid != $id";
        $userlist=$user::alias('a')->join('lv_user_info b','a.userid=b.userid')->field('a.nickname,a.userid,b.headimg')->where(['b.sex'=>$sex,'b.yearsitem'=>$yearsitem])->where($where)->order('userid desc')->limit(5)->select();
        if($userlist){
            foreach ($userlist as $key => $value) {
                $headimg=$value['headimg'];
                if(!$headimg){
                    $userlist[$key]['headimg']='/wap/main/images/30.jpeg';
                }
            }
            $this->assign('userlist',$userlist);
        }
        $improve=$userimprove::where('userid',$id)->find();
        if($improve){
            $this->assign('improve',$improve);
        }
        $is_yaoqiu=$yaoqiu::where('userid',$id)->find();
        $this->assign('yaoqiu',$is_yaoqiu);
        $this->assign('title',$ret['nickname']);
        return $this->fetch();
    }
    //服务协议
    public function xieyi(){
        return $this->fetch();
    }
}

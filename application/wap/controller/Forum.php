<?php
namespace app\wap\controller;
use app\index\model\Content;
use think\Db;
use think\Request;

class Forum extends Common
{
   public function index(){
   	$obj=new Content;
   	$order="";
   	$where="shows=1 and settop=0";
   	$act=input('act')?input('act'):'nr';
   	switch ($act) {
   		case 'nr':
   			$order="replytime desc";
   			break;
   		case 'nd':
   			$order="id desc";
   			break;
   	    case 'ht':
   			$order="reply desc,id desc";
   			break;
   	    case 'jh':
   			$order="reply desc";
   			$where.=" and choice =1";
   			break;				
   		default:
   			$order="id desc";
   			break;
   	}
   	$ret=$obj->alias('a')->join('lv_user_info b','b.userid=a.uid')->field('a.*,b.headimg')->where($where)->order($order)->paginate(20);
    foreach ($ret as $key => $value) {
      $showimgs=$value['pic'];
      if($showimgs){
        $imgsarr=explode(',', $showimgs);
        $ret[$key]['imgsarr']=$imgsarr;
      }
    }
    $topret=$obj->field('id,title,choice')->where(['shows'=>1,'settop'=>1])->limit(3)->order('id desc')->select();
    if($topret){
    	$this->assign('topret',$topret);
    }
   	$this->assign('title','会员社区');
   	$this->assign('ret',$ret);
   	$this->assign('act',$act);
   	return $this->fetch();
   }
   public function detail(){
    $id=input('id');
    $ret=db('Content')->alias('a')->join('lv_user_info b','b.userid=a.uid')->field('a.*,b.headimg')->where(['id'=>$id,'shows'=>1])->find();
    if($ret){
      db('Content')->where(['id'=>$id,'shows'=>1])->setInc('view');
      $showimgs=$ret['pic'];
      if($showimgs){
        $imgsarr=explode(',', $showimgs);
        $this->assign('imgsarr',$imgsarr);
      }
      $this->assign('ret',$ret);
    }
   	$this->assign('title','会员社区');
   	return $this->fetch();
   }
   public function add(){
   	if (!session('validate')) {
        return $this->redirect('login/index');
    }
    if(request()->isPost()){
    	$obj=new Content;
    	$data=input('post.');
    	$this->check_form('Content',$data);
    	$userid=db('user')->where('pwd_hash',session('validate'))->value('userid');
    	$data['uid']=$userid;
    	$data['author']=session('nickname');
    	$data['time']=time();
    	$ret=$obj->allowField(true)->save($data);
    	if($ret){
    		$id=$obj->id;
			$this->success('已提交','forum/detail?id='.$id);
		}else{
			$this->error('提交失败');
		}
    }
   	$this->assign('title','发布新帖');
   	return $this->fetch();
   }
}
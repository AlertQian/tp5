<?php
namespace app\wap\controller;
use app\index\model\Content;
use think\Db;
use think\Request;

class Forum extends Common
{
   public function index(){
   	$obj=new Content;
   	$ret=$obj->alias('a')->join('lv_user_info b','b.userid=a.uid')->field('a.*,b.headimg')->order('id desc')->select();
    foreach ($ret as $key => $value) {
      $showimgs=$value['pic'];
      if($showimgs){
        $imgsarr=explode(',', $showimgs);
        $ret[$key]['imgsarr']=$imgsarr;
      }
    }
   	$this->assign('title','会员社区');
   	$this->assign('ret',$ret);
   	return $this->fetch();
   }
   public function detail(){
    $id=input('id');
    $ret=db('Content')->where(['id'=>$id,'shows'=>1])->find();
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
			$this->success('已提交');
		}else{
			$this->error('提交失败');
		}
    }
   	$this->assign('title','发布新帖');
   	return $this->fetch();
   }
}
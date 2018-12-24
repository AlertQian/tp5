<?php
namespace app\wap\controller;
use app\index\model\Content;
use think\Db;
use think\Request;

class Forum extends Common
{
   public function index(){
   	$obj=new Content;
   	$ret=$obj->order('id desc')->select();
   	$this->assign('title','会员社区');
   	$this->assign('ret',$ret);
   	return $this->fetch();
   }
   public function detail(){
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
    	$title=$data['title'];
    	$content=$data['content'];
    	if(empty($title)) $this->error('请填写标题');
    	if(empty($content)) $this->error('请填写内容');
    	$userid=db('user')->where('pwd_hash',session('validate'))->value('userid');
    	$data['uid']=$userid;
    	$data['author']=session('nickname');
    	$data['time']=time();
    	$ret=$obj->save($data);
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
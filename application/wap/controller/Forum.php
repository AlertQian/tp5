<?php
namespace app\wap\controller;
use app\index\model\Content;
use app\index\model\Comment;
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
    $comment=db('comment')->where('fid',$id)->order('id asc')->select();
    if($comment){
    	$comarr=getSubTree($comment,'mid','id');
    	foreach ($comarr as $key => $value) {
    		$uid=$value['uid'];
	    	$headimg=db('user_info')->where('userid',$uid)->value('headimg');
	    	$comarr[$key]['headimg']=$headimg;
	    	switch ($key) {
	    		case '0':
	    			$comarr[$key]['louceng']='<span class="shafa" style="vertical-align: baseline;">沙发</span>';
	    			break;
	    		case '1':
	    			$comarr[$key]['louceng']='<span class="bandeng" style="vertical-align: baseline;">板凳</span>';
	    			break;
	    		case '2':
	    			$comarr[$key]['louceng']='<span class="diban" style="vertical-align: baseline;">地板</span>';
	    			break;		
	    		default:
	    			$comarr[$key]['louceng']=($key+1).'楼';
	    			break;
	    	}
    	}
        $this->assign('comarr',$comarr);
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
      $data['content']=strip_tags($data['content'],"<img>");
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
   public function fatie(){
    if (!session('validate')) {
        $this->error('请先登入','login/index');
    }
    if(request()->isPost()){
	    $obj=new Comment;
	    $cot=new Content;
	    $data=input('post.');
	    $is_cot=$cot->where('id',$data['fid'])->find();
	    if(!$is_cot) $this->error('该帖不存在');
	    $this->check_form('Comment',$data);
	    $userid=db('user')->where('pwd_hash',session('validate'))->value('userid');
    	$data['uid']=$userid;
      $data['content']=strip_tags($data['cont'],"<img>");
    	$data['uname']=session('nickname');
    	$data['time']=time();
    	$ret=$obj->allowField(true)->save($data);
      //楼主的uid
      $lz_uid=$cot->where('id',$data['fid'])->value('uid');
      //楼层接收消息提醒
      if($data['mid'] != 0){
        $lc_uid=$obj->where('id',$data['mid'])->value('uid');
        db('user')->where('userid',$lc_uid)->setInc('reply', 1);
      }
    	if($ret){
      	$cot->where('id',$data['fid'])->setInc('reply');
        db('user')->where('userid',$lz_uid)->setInc('reply', 1);
  			$this->success('已发表');
    	}else{
  			$this->error('提交失败');
  		}
	   }
   }
}
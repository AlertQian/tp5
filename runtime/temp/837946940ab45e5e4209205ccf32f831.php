<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\wamp\www\tp5\public/../application/wap\view\user\comment.html";i:1547109689;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>开始使用Layui</title>
  <link rel="stylesheet" href="/static/layui/css/layui.css">
  <link rel="stylesheet" href="/wap/main/css/mb-common.css" />
</head>
<style type="text/css">
.jie-row li{position:relative;margin-bottom:10px;padding-bottom:10px;border-bottom:1px dotted #E9E9E9;font-size:0}
.jie-row li .jie-title{max-width:330px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.jie-row li a{padding-right:15px;font-size:14px}
.jie-row li *{display:inline-block;vertical-align:top;line-height:24px;font-size:12px}
.jie-row li cite,.jie-row li em,.jie-row li i{font-size:12px;color:#999;font-style:normal}
.jie-row li em{position:absolute;right:0;top:0}
.jie-row li .mine-edit{margin-left:15px;padding:0 6px;background-color:#8FCDA0;color:#fff;font-size:12px}
.home-dacontent{margin-top:10px;padding:10px 15px;background-color:#F2F2F5;border-radius:5px;word-wrap:break-word}
.home-jieda li p{color:#999}
.home-jieda li p span{padding-right:5px}
.home-jieda li a{padding:0 5px;color:#4F99CF}
.home-jieda li .mine-edit{margin-left:15px;padding:4px 6px;background-color:#8FCDA0;color:#fff;font-size:12px}
.layui-elem-quote .mine-edit{margin-left:15px;padding:4px 6px;background-color:#8FCDA0;color:#fff;font-size:12px}
.home-jieda li{margin-bottom:20px;line-height:24px}
</style>
<body>
<!-- 你的HTML代码 --> 
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layui/layui.js"></script>
<div class="layui-main" style="width: 100%;">
<div class="header">
	<a href="javascript:history.back(-1)" id="header_back" class="back">返回</a>
	<div class="search" id="search_ico" onclick="showNewPage('搜索',searchHtml,newPageSearch);" style="display:none;">搜索</div>
	<?php if(\think\Session::get('nickname') != null): ?>
	<a href="<?php echo url('user/index'); ?>" class="my ico_ok" id="login_ico">我的</a>
	<?php else: ?>
	<a href="<?php echo url('login/index'); ?>" class="my" id="login_ico">我的</a>
	<?php endif; ?>
	<div class="type" id="nav_ico">导航</div>
	<span id="ipageTitle" style=""><?php echo $title; ?></span>
	<div class="nav_APP" id="nav_APP" style="display: none;">
		<ul class="clearfix" id="nav_APP_data2">
		<li><a href="<?php echo url('wap/index/index'); ?>">首页<s class="s" style="background-image:url(/wap/main/images/nav_icon/headIcon.png);"></s></a></li>
		<li><a href="">活动<s class="s" style="background-image:url(/wap/main/images/nav_icon/201705251752370917548.png);"></s></a></li>
		<li><a href="<?php echo url('forum/index'); ?>">社区<s class="s" style="background-image:url(/wap/main/images/nav_icon/201705251752556953922.png);"></s></a></li>
		</ul><span class="arrow-up"></span>
	</div>
</div>
<div class="wrapper">
	<div class="layui-tab layui-tab-brief" lay-filter="info">
	  <ul class="layui-tab-title">
	    <li><a href="<?php echo url('user/managetie'); ?>">我的发帖</a></li>
	    <li class="layui-this"><a href="<?php echo url('user/comment'); ?>">我的回复</a></li>
	  </ul>
	  <div class="layui-tab-content">
    	<?php if(isset($comment)): ?>
    	<ul class="home-jieda">
    	<?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li>
		<p>
		<span><?php echo date("Y-m-d",$vo['time']); ?></span>
		在 
		<a href="<?php echo url('forum/detail',['id'=>$vo['fid']]); ?>" target="_blank"><?php echo $vo['title']; ?></a>
		中回答 
		<a class="mine-edit" href="<?php echo url('user/editcom',['id'=>$vo['id']]); ?>">编辑</a>
		<a class="mine-edit comt-del" href="javascript:;" style="background-color: #FF5722" id="<?php echo $vo['id']; ?>">删除</a>
		</p>
		<div class="home-dacontent">
		<?php echo htmlspecialchars_decode($vo['content']); ?>
		</div>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<?php echo $comment->render(); else: ?>
    	<p style="text-align: center;color: #666;padding: 10px;">暂无内容</p>
    	<?php endif; ?>
	  </div>
	</div>
</div>
<div class="foot_link" id="foot_link">
	<ul class="link">
	<li><a href="<?php echo url('wap/index/index'); ?>">首页</a></li><!--<li><a href="https://www.mh163k.com/request.ashx?action=iswap&iswap=0">电脑版</a></li>--><li><a href="https://www.mh163k.com/help/article_13.html">联系我们</a></li><!--<li><a href="http://app.163k.com/download.aspx?id=12299" data-img="../UploadFile/index/2015/9-7/201509071154513472674.png">客户端</a></li>--><li><a href="https://www.mh163k.com/service/">反馈留言</a></li>
	</ul>
	<!--163k地方门户网站系统：<a href="https://www.mh163k.com/">mh163k.com</a>　皖ICP备11020229号-->Copyright @ 2003-2018 mh163k.com
	<input type="hidden" name="nickname" value="<?php echo \think\Session::get('nickname'); ?>">
</div>
<script>
$(function(){
	$('#nav_ico').click(function(e){
		e.preventDefault();
		$('#nav_APP').fadeToggle('fast');
	});
});
</script>
</div>
<script type="text/javascript">
	layui.use(['element','layer'], function(){
        var $ = layui.jquery
            ,layer=layui.layer
            ,element = layui.element;
        $(".comt-del").click(function(){
        	$id=$(this).attr('id');
        	layer.confirm('确定删除?',{icon: 3, title:'提示'},function(index){
        		$.post("<?php echo url('user/delcomt'); ?>",{id:$id},function(data){
        			if(data.code ==1){
		              layer.msg(data.msg,{icon: 1,anim: 6, time: 2000},function(){
		                location.href=data.url;
		              });
		            }else{
		              layer.msg(data.msg,function(){
		                location.reload();
		              });
		            }
        		});
        		layer.close(index);
        	});
        })
    })
</script>
</body>
</html>
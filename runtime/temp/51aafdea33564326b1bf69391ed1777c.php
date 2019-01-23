<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\wamp\www\tp5\public/../application/wap\view\user\myhuifu.html";i:1548213273;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
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
.mine-msg{min-height: 300px;}
.mine-msg li{position:relative;margin-bottom:15px;padding:10px 0 5px;line-height:24px;border-bottom:1px dotted #E9E9E9}
.mine-msg li cite{padding:0 5px;color:#4F99CF}
.mine-msg li .fly-delete{position:relative;top:-3px;}
.mine-msg li>p{position:relative;margin: 8px 0 5px 0;line-height:26px;text-align:right;}
.mine-msg li>p span{position:absolute;left:0;top:0;color:#999}
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
	    <li><a href="<?php echo url('user/comment'); ?>">我的回复</a></li>
	    <li class="layui-this"><a href="<?php echo url('user/myhuifu'); ?>">评论我的</a></li>
	  </ul>
	  <div class="layui-tab-content">
		<button class="del_btns tpts-btn layui-btn layui-btn-danger">清空全部消息</button>
		<ul class="mine-msg">
		<?php if(is_array($ret) || $ret instanceof \think\Collection || $ret instanceof \think\Paginator): $i = 0; $__LIST__ = $ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li class="messagelist">
		<blockquote class="layui-elem-quote">
		<a href="/jiaoyou/<?php echo $vo['uid']; ?>.html" target="_blank">
		<cite><?php echo $vo['uname']; ?></cite>
		</a>
		回复了您的内容
		<a href="<?php echo url('forum/detail',['id'=>$vo['fid']]); ?>" target="_blank"><cite><?php echo $vo['title']; ?></cite></a>
		</blockquote>
		<div style="color:#999;font-size: 13px;" class="cl">
		<?php echo content_zh($vo['content'],0,120); ?>...
		</div>
		<p><span><?php echo date("m-d H:i",$vo['time']); ?></span><a id="<?php echo $vo['id']; ?>" title="清空" class="del_btn layui-btn layui-btn-sm layui-btn-danger fly-delete">清空</a></p>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="pages cl"></div>
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
        $(".del_btn").click(function(){
        	$id=$(this).attr('id');
        	layer.confirm('确定清空此消息么?',{icon: 3, title:'提示'},function(index){
        		$.post("<?php echo url('user/messagedels'); ?>",{id:$id},function(data){
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
        $(".del_btns").click(function(){
        	layer.confirm('确定清空全部消息么?',{icon: 3, title:'提示'},function(index){
        		$.post("<?php echo url('user/messagedelss'); ?>",function(data){
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
<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"D:\wamp\www\tp5\public/../application/wap\view\user\safe.html";i:1543376179;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>安全设置</title>
	<link rel="stylesheet" href="/static/layui/css/layui.css">
	<link rel="stylesheet" href="/wap/main/css/mb-common.css" />
    <link rel="stylesheet" href="/wap/main/css/addinfo.css">
    <script src="/fds/js/jquery-1.11.3.min.js"></script>
    <script src="/static/layui/layui.js"></script>
</head>
<body>
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
	<div class="layui-collapse">
	  <div class="layui-colla-item">
	    <h2 class="layui-colla-title">修改昵称</h2>
	    <form class="layui-form">
	    <div class="layui-colla-content layui-show">
	    	<div class="layui-form-item">
	    	<label class="ly-form-label">昵称</label>
	    	<div class="layui-input-inline">
                <input type="text" name="nickname" required  lay-verify="required" placeholder="昵称" autocomplete="off" class="ly-input" value="<?php echo !empty($nickname)?$nickname:''; ?>">
            </div>
            </div>
            <input type="hidden" name="types" value="1">
            <div style="text-align: center;">
            <button class="layui-btn" lay-submit lay-filter="subt" style="background: #5cc55c;width: 60%;border-radius: 50px;">保存</button>
            </div>
	    </div>
	    </form>
	  </div>
	  <div class="layui-colla-item">
	    <h2 class="layui-colla-title">修改密码</h2>
	    <form class="layui-form">
	    <div class="layui-colla-content layui-show">
	    	<div class="layui-form-item">
	    	<label class="ly-form-label">原始密码</label>
	    	<div class="layui-input-inline">
                <input type="password" name="pwd" required  lay-verify="required" placeholder="必填" autocomplete="off" class="ly-input" value="">
            </div>
            </div>
            <div class="layui-form-item">
	    	<label class="ly-form-label">新密码</label>
	    	<div class="layui-input-inline">
                <input type="password" name="newpwd" required  lay-verify="required" placeholder="必填" autocomplete="off" class="ly-input" value="">
            </div>
            </div>
            <div class="layui-form-item">
	    	<label class="ly-form-label">确认密码</label>
	    	<div class="layui-input-inline">
                <input type="password" name="againpwd" required  lay-verify="required" placeholder="必填" autocomplete="off" class="ly-input" value="">
            </div>
            </div>
            <input type="hidden" name="types" value="2">
            <div style="text-align: center;">
            <button class="layui-btn" lay-submit lay-filter="subt" style="background: #5cc55c;width: 60%;border-radius: 50px;">保存</button>
            </div>
	    </div>
	    </form>
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
<script>
//注意：折叠面板 依赖 element 模块，否则无法进行功能性操作
layui.use(['element','form'], function(){
	var element = layui.element
		,form    = layui.form
	    ,jq = layui.jquery;
	form.on('submit(subt)',function(data){
	  loading = layer.load(2, {
	    shade: [0.2,'#000']
	  });
	  var param = data.field;
	  jq.post('<?php echo url("user/safe"); ?>',param,function(data){
	    if(data.code==1){
	      layer.close(loading);
	      layer.msg(data.msg, {icon: 1, anim: 6, time: 1000},function(){
	        location.href=data.url;
	      });
	    }else{
	      layer.close(loading);
	      layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
	    }
	  })
	  return false;
	})
  //
});
</script>
</body>
</html>
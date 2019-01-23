<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\wamp\www\tp5\public/../application/wap\view\user\real.html";i:1543386519;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>开始使用Layui</title>
  <link rel="stylesheet" href="/static/layui/css/layui.css">
  <link rel="stylesheet" href="/wap/main/css/addinfo.css">
  <link rel="stylesheet" href="/wap/main/css/mb-common.css" />
</head>
<body>
<!-- 你的HTML代码 --> 
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
	<div style="background-color:#f8f8f8; padding:10px; text-align:center;">以下资料不会向第三方公开</div>
	<form class="layui-form">
		<div class="layui-form-item">
          <label class="ly-form-label">姓名</label>
          <div class="layui-input-inline">
            <input type="text" name="title" required  lay-verify="required" placeholder="必填" autocomplete="off" class="ly-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="ly-form-label">身份证号</label>
          <div class="layui-input-inline">
            <input type="text" name="title" required  lay-verify="required" placeholder="必填" autocomplete="off" class="ly-input">
          </div>
        </div>
        <div class="layui-form-item" style="border-bottom: none;">
		    <label class="layui-form-label">认证图片</label>
			<div class="upload-img">
<button type="button" class="layui-btn layui-btn-primary" id="image"><i class="layui-icon"></i>上传图片</button><input class="layui-upload-file" name="file" type="file">
<input name="userzm" value="" class="layui-input" type="hidden">
</div>
		 </div>
		 <div class="layui-form-item" style="border-bottom: none;">
		    <div class="layui-input-block">
			  <button class="layui-btn" lay-submit="" lay-filter="member_edit">立即提交</button>
		    </div>
		 </div>
	</form>
</div>
</div>
</body>
</html>
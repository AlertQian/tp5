<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\wamp\www\tp5\public/../application/wap\view\login\index.html";i:1545529423;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>移动端</title>
  <meta name="keywords" content="关键字"/>
  <meta name="description" content="描述"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="/wap/main/css/mb-base.css" rel="stylesheet" type="text/css">
  <link href="/wap/main/css/mb-common.css" rel="stylesheet" rev="stylesheet" />
  <link href="/wap/main/css/member-mb.css" rel="stylesheet" type="text/css">
	<script src="/fds/js/jquery-1.10.2.min.js"></script>
  <script src="/static/layer/layer.js"></script>
  <style type="text/css">
  .nofixed { padding-top:0;}
  body { background-color:#fff!important;}
  .foot_link { display:none!important;}
  </style>
</head>
<body class="nofixed">
<div class="header alpha" style="position:absolute;">
  <div class="back"><a href="javascript:void(0);" onClick="return window.history.go(-1);">返回</a></div>
  <div class="type" id="nav_ico">导航</div>
  <div class="nav_APP" id="nav_APP" style="display: none;">
    <ul class="clearfix" id="nav_APP_data2">
    <li><a href="<?php echo url('wap/index/index'); ?>">首页<s class="s" style="background-image:url(/wap/main/images/nav_icon/headIcon.png);"></s></a></li>
    <li><a href="">活动<s class="s" style="background-image:url(/wap/main/images/nav_icon/201705251752370917548.png);"></s></a></li>
    <li><a href="<?php echo url('forum/index'); ?>">社区<s class="s" style="background-image:url(/wap/main/images/nav_icon/201705251752556953922.png);"></s></a></li>
    </ul><span class="arrow-up"></span>
  </div>
</div>
<div class="slogan"><img src="/wap/main/images/login_slogan.png" width="100%" alt="" /></div>
<form id="formRegStep1Main" name="formRegStep1Main" method="post">
<div class="login">
  <ul>
    <li class="item2 userName"><input type="text" id="logname" name="logname" autocomplete="off" placeholder="昵称/手机/邮箱" maxlength="32" /></li>
    <li class="item2 pw"><input type="password" name="passwd" id="passwd" autocomplete="off" placeholder="密码" maxlength="32" /><a href="/find.aspx" style="display:block; position:absolute; right:12px; top:9px; font-size:12px;">忘记?</a></li>
    <?php echo token(); ?>
  </ul>
</div> 
<button type="submit" class="dl" id="form_submit_disabled">登 录</button>
</form>
<div class="login_nav" style="padding-bottom:20px;">
  <div class="title"><span>快捷登录/注册</span></div>
  <ul>
    <li class="qq" style="display:;"><a href="<?php echo url('wap/qq'); ?>">QQ登录</a></li>
    <li class="wx display1"><a href="<?php echo url('wap/weixin'); ?>">微信登录</a></li>
    <li class="reg"><a href="<?php echo url('login/reg'); ?>">注册账号</a></li>
  </ul>
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
<script type="text/javascript">
  /*登陆模块*/
  $("#form_submit_disabled").click(function(e){
    e.preventDefault();
    var logname=$.trim($('#logname').val())
       ,token=$("input[name=__token__]").val()
         ,password=$.trim($('#passwd').val());
      if(logname.length==0){
        layer.msg('请填写登录名');
        return false;
      }
      if(password.length==0){
        layer.msg('请输入密码');
        return false;
      }
      $.ajax({
        url:'<?php echo url("login/index"); ?>',
        type:"post",
        data:{logname:logname,password:password,__token__:token},
        success:function(data){
          if(data.code==1){
            layer.msg(data.msg,{icon: 1, anim: 6, time: 1000},function(){
              window.location=data.url;
            });
          }else{
            layer.msg(data.msg,{icon: 2, anim: 6, time: 1000},function(){
              window.location.reload();
            });
          }
        },
        error:function(){
          layer.msg("系统繁忙，稍后再试");
        }
      })
  })
</script>
</body>
</html>
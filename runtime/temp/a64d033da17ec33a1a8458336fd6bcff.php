<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\wamp\www\tp5\public/../application/wap\view\user\index.html";i:1544325918;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1543373634;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>开始使用Layui</title>
  <link href="/wap/main/css/mb-base.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/wap/main/css/member-index-mb.css">
  <link rel="stylesheet" href="/wap/main/css/mb-common.css">
  <script src="/fds/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div id="pageMain" class="page_srcoll page-current">
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
	<div class="wrapper" style="background: #eee">
		<div class="member_head member_head_2">
		  <div class="user_head"><a href="/member/modify.aspx?action=tou" class="face"><img src="<?php echo $obj['headimg']; ?>" alt="" width="96" height="96"></a><s class="s"></s></div>
		  <div class="userName" id="userName"><?php echo $obj['nickname']; ?></div>
		  <a href="<?php echo url('user/addinfo'); ?>" class="txt">修改资料</a><s class="s_bor"></s><a href="<?php echo url('user/safe'); ?>" class="txt">安全设置</a>
		  <a href="javascript:void(0);" class="real real_0_0">未认证<s class="s"></s></a>
		 </div>
		<?php if(!isset($ret)): ?>
		<div class="amount_addjiaoyou">
		  <a href="<?php echo url('user/addinfo'); ?>"><s class="ico"></s><span class="txt">您还未加入交友哦！<em>现在加入</em>！</span></a><s class="s"></s>
		</div>
		<?php else: ?>
		<div class="amount_addjiaoyou">
		   <a href="<?php echo url('wap/index/homepage',['id'=>$obj['userid']]); ?>"><s class="ico"></s><span class="txt">您已加入交友哦！<em style="position: absolute;right: 38px;">我的主页</em></span></a><s class="s"></s>
		</div>
		<?php endif; ?>
		<div id="memberNav">
		   <ul class="memberNav">
		   <li class="jy_ico_01"><a href="<?php echo url('user/addinfo'); ?>">基本信息</a></li>
		   <li class="jy_ico_02"><a href="<?php echo url('user/addinfo?#info=detail'); ?>">完善资料</a></li>
		   <li class="jy_ico_03"><a href="<?php echo url('user/addinfo?#info=yaoqiu'); ?>">交友要求</a></li>
		   <li class="jy_ico_04"><a href="<?php echo url('user/imglist'); ?>">我的相册</a></li>
		   <li class="jy_ico_05"><a href="<?php echo url('user/real'); ?>">实名认证</a></li>
		   <li class="jy_ico_06"><a href="<?php echo url('user/commend'); ?>">我要推荐</a></li>
		   <!-- <li class="jy_ico_07"><a href="<?php echo url('user/slctfriend'); ?>">智能匹配</a></li> -->
		   <li class="jy_ico_15"><a href="<?php echo url('user/hongniang'); ?>">红娘牵线</a></li>
		   <li class="jy_ico_10"><a href="<?php echo url('user/message'); ?>">私信消息
		   	<?php if(isset($msg)): ?>
		   	<span class="tips"></span>
		   	<?php endif; ?>
		   </a></li>
		   </ul>
		   <!-- <ul class="memberNav">
		   <li class="jy_ico_08"><a href="connections.aspx?action=selectbrowselist&amp;type=0">我看过谁</a></li>
		   <li class="jy_ico_09"><a href="connections.aspx?action=selectkeeplist&amp;type=0">我的收藏</a></li>
		   <li class="jy_ico_10"><a href="connections.aspx?action=selectbuylist&amp;type=0">我联系过</a></li>
		   <li class="jy_ico_11"><a href="connections.aspx?action=selectbrowselist&amp;type=1">谁看过我</a></li>
		   <li class="jy_ico_12"><a href="connections.aspx?action=selectkeeplist&amp;type=1">谁收藏我</a></li>
		   <li class="jy_ico_13"><a href="connections.aspx?action=selectbuylist&amp;type=1">谁联系我</a></li>
		   <li class="jy_ico_14"><a href="connections.aspx?action=flowerlist&amp;type=1">收到鲜花</a></li>
		   		  </ul> -->
		  </div>
		  <div class="member_exit">
		  	<a href="<?php echo url('user/logout'); ?>"><button type="button" class="exit">安全退出</button></a>
		  </div>
		  <div class="foot_link" id="foot_link">
	<ul class="link">
	<li><a href="<?php echo url('wap/index/index'); ?>">首页</a></li><!--<li><a href="https://www.mh163k.com/request.ashx?action=iswap&iswap=0">电脑版</a></li>--><li><a href="https://www.mh163k.com/help/article_13.html">联系我们</a></li><!--<li><a href="http://app.163k.com/download.aspx?id=12299" data-img="../UploadFile/index/2015/9-7/201509071154513472674.png">客户端</a></li>--><li><a href="https://www.mh163k.com/service/">反馈留言</a></li>
	</ul>
	<!--163k地方门户网站系统：<a href="https://www.mh163k.com/">mh163k.com</a>　皖ICP备11020229号-->Copyright @ 2003-2018 mh163k.com
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
    </div>	
</body>
</html>
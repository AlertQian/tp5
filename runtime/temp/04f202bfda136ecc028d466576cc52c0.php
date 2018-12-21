<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"D:\wamp\www\tp5\public/../application/wap\view\forum\index.html";i:1545359848;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1543373634;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>首页-征婚-163k地方门户网站系统</title>
<meta name="keywords" content="交友栏目关键字,关键字,关键字,关键字,关键字" />
<meta name="description" content="交友栏目描述" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-base.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-index.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-common.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/tieba-mb.css" />
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layui/layui.js"></script>
<style type="text/css">
.foot_link { margin-top:0!important;}
#pageNavigation { display:none;}
#noMore { padding:10px 0 20px;}
#hideHead,#hideHead2 { background-color:#eee; padding-bottom:10px;}
#listEmpty { display:none!important;}
.headerblack { background-color:#000!important;}
</style>
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
	<div class="o_main" style="padding-bottom:50px;">
	<!-- <div id="slide" class="clearfix" style="width: 414px;">
		<div id="content" style="width: 1242px; transform: translate3d(-826.959px, 0px, 0px) scale(1);">
			<div class="cell" style="width: 414px;"><a href="#3"><img src="/wap/main/images/201710011203108436508.jpg" alt=""></a></div>
			<div class="cell" style="width: 414px;"><a href="#3"><img src="/wap/main/images/201710011203108436508.jpg" alt=""></a></div>
			<div class="cell" style="width: 414px;"><a href="#3"><img src="/wap/main/images/201710011203108436508.jpg" alt=""></a></div>
		</div>
		<ul id="indicator"><li class="active">1</li><li class="">2</li><li class="">3</li></ul>
	</div> -->
	<span class="prev" id="slide_prev" style="display:none">上一张</span><span class="next" id="slide_next" style="display:none">下一张</span>
	<div class="tb_top_1">
		<ul>
			<li class="li_1"><a href=""><em>会员活动</em>会员线下聚会活动</a></li>
			<li class="li_2"><a href="<?php echo url('forum/index'); ?>"><em>会员社区</em>分享你我的情感之路</a></li>
			<!-- <li class="li_3"><a href="https://www.mh163k.com/gift/"><em>积分商城</em>会员积分兑换</a></li> -->
		</ul>
	</div>
	<div id="hideHead2">
    <div class="p_tabs clearfix">
      <ul>
        <li id="s_e_0" class="cur"><span data-catid="0" >最新回复</span></li>
        <li id="s_e_1"><span data-catid="1" >最新发布</span></li>
        <li id="s_e_3"><span data-catid="3" >热帖排行</span></li>
        <li id="s_h_1"><span data-catid="1" >精华热帖</span></li>
      </ul>
    </div>
   </div>
  <div class="post_list">
	<div class="item iszhiding0" id="item6">
 <div class="item_hd">
  <div class="pic"><img src="../UploadFile/tongxiang/2016/8-24/2016082409545714391791.jpg" onerror="this.src='https://www.mh163k.com/template/wap/main/default/images/user_small.gif';this.onerror='';"></div>
  <p class="chrname">x4demo8　<span class="vipnum display0">无</span></p>
  <div class="clearfix">
    <div class="right"><span class="num num_1">3740</span></div>
    <span class="date">07-13 10:57</span>
  </div>
  <div class="jinghua display0">精</div>
 </div>
 <a href="<?php echo url('forum/detail'); ?>" style="color:" class="link bold0" onclick="return setCookieID('6');">
 <h2><span class="d display0">顶</span><span class="j display0">精</span>葫芦真机入手小测 ，专为情侣量身定制</h2>
 <div class="chrcontent">当下，手机拼功能的时代已一去不复返，用户体验是当前手机厂商们的聚焦点。坚持做好产品，努力提升用户体验是当前真正关注的事情</div>
 <div class="hashongbao_forbox" style="top:60px;right:10px;"></div>
 </a>
 <div class="con display_video_false_0"><div class="n_img" id="n_img_6" data-ischeck="1"><a href="" target="_blank" class="itemAlbum" original=""><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png" data-src="/UploadFile/tieba/image/20160820/636073022778892908474846301.png" original="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png" data-ifshow="1" alt="" style="width: 115px; height: 90px;"><div class="feed_highlight" data-ischeck="0"></div></a><a href="" target="_blank" class="itemAlbum" original=""><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png" data-src="/UploadFile/tieba/image/20160820/636073022778892908474846301.png" original="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png" data-ifshow="1" alt="" style="width: 115px; height: 90px;"><div class="feed_highlight" data-ischeck="0"></div></a><a href="" target="_blank" class="itemAlbum" original=""><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png" data-src="/UploadFile/tieba/image/20160820/636073022778892908474846301.png" original="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png" data-ifshow="1" alt="" style="width: 115px; height: 90px;"><div class="feed_highlight" data-ischeck="0"></div></a><a href="" target="_blank" class="itemAlbum" original=""><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png" data-src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png" original="" data-ifshow="1" alt="" style="width: 100px; height: 90px;"><div class="feed_highlight" data-ischeck="0"></div></a></div></div>
 <ul class="item_ft">
  <li><span class="num num_1">5</span></li>
  <li><span class="num num_2" data-id="6" data-ischeck="0"><span class="zan">198</span></span></li>
  <li><a href="https://www.mh163k.com/tieba_show_6.html" class="num num_3" onclick="return setCookieID('6');"></a></li>
 </ul>
</div>
</div>
<div class="nav_index_bottom nav_tb_bottom">
  <ul>
    <li><a href="https://www.mh163k.com/"><span class="home"></span>首页</a></li>
    <li id="nav_bankuai" class="current"><a href="javascript:void(0);" onclick="return showCatState(false);" style="color: #5cc55c"><span class="bankuai"></span>版块</a></li>
    <li><a href="<?php echo url('forum/add'); ?>" class="seniorSend" style="background-color: #5cc55c"><span class="fatie"></span>发帖</a></li>
    <li><a href="javascript:void(0);" onclick="location.reload()"><span class="refresh"></span>刷新</a></li>
    <li><a href="<?php echo url('user/index'); ?>"><span class="mine"></span>我的</a></li>
  </ul>
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
<script type="text/javascript">
  function showCatState() {
    //alert('2');
  }
</script>
</body>
</html>
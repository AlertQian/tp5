<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\wamp\www\tp5\public/../application/wap\view\forum\detail.html";i:1545204428;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1543374719;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1543373634;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/wap/main/css/comment-mb.css" />
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layui/layui.js"></script>
<style type="text/css">
.foot_link { display:none!important;}
#pageNavigation { display:none;}
.noMore { list-style:none; border-top:1px solid #eaebec; background-color:#eee!important; padding:20px 0; text-align:center; color:#666;}
#wrapper { position:static!important;}
#listEmpty { display:none!important;}
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
		<li><a href="">社区<s class="s" style="background-image:url(/wap/main/images/nav_icon/201705251752556953922.png);"></s></a></li>
		</ul><span class="arrow-up"></span>
	</div>
</div>
	<div class="o_main" style="padding-bottom:50px;">
    <div class="posts" id="resizeIMG">
  <!--<div class="tabs">
   <ul>
    <li>加入收藏</li>
    <li id="showLouzhu">只看楼主</li>
   </ul>
  </div>-->
	<input id="pagenum" type="hidden" value="1">
	<div id="wrapper">
		<div class="player_h5" id="player_h5" style="display: none; width: 394px; height: 222px;"><video controls="" webkit-playsinline="" playsinline="" autoplay=""></video></div>
		<div class="title">
			<span class="d display0">顶</span>葫芦真机入手小测 ，专为情侣量身定制
			<span class="jinghua display0">精</span>
			<div class="info clearfix">
				<div class="right">3746阅读<s class="line"></s>5回帖</div>
				<div class="left"><a href="../tieba_a2276_b0_c0_d0_e0_f0_g0_h0_i0_p1.html" class="cat display2276">通讯数码</a></div>
			</div>
		</div>
		  <div class="Oposter" id="louzhuNode">
		   <div class="user_info">
			<div class="user_head"><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png"></div>
			<ul>
			  <li>
			   <span class="uName">x4demo8</span>
			   <span class="grade i_1" title="初级">1</span>
			   <span class="vipnum display0">无</span>
			   <span class="bazhu display0">版主</span>
			  </li>
			  <li>07-13 10:57</li>
			</ul>
			<div class="op">楼主</div>
		   </div>
		   <div class="con" id="louzhuCon">
			
			<p>当下，手机拼功能的时代已一去不复返，用户体验是当前手机厂商们的聚焦点。坚持做好产品，努力提升用户体验是当前真正关注的事情。作为后起之秀的葫芦手机，虽然定位在了小众的情侣市场，但为了给情侣用户们更好的体验，葫芦也是在庞大的粉丝群体中不断的征集手机体验官，为葫芦提意见和建议，旨为给到用户更好的使用体验。</p><p>今天小编本着公平公正的原则，为大家评测一下刚刚到手的葫芦手机，为大家揭露其真正的葫芦手机真面目。</p><p>葫芦手机的机身正面搭载了一块5.5英寸1080P分辨率的显示屏。航空级铝镁合金边框+双面玻璃材质机身。电源键在机身的右侧，音量的加减键则放在了机身的左侧，方便很多，左侧中下部是手机的SIM卡和SD卡的卡槽，底部为扬声器和数据线接口，耳机接口则放在了机身的顶部，机身的正面底部为3个虚拟按键，分别是功能键、HOME键和返回键。整体的细节处理还是挺到位的。</p><p><br></p><p><img src="/UploadFile/tieba/image/20160820/63607302200059173476046380.png" style="" title="14_3.png"></p><p><img src="/UploadFile/tieba/image/20160820/63607302200715440212055830.png" style="" title="14_1.png"></p><p><img src="/UploadFile/tieba/image/20160820/63607302277889290847484630.png" style="" title="14_2.png"></p><p><br></p>
			<p class="blod"></p>
			<div class="p_btns">
				<p class="manage">　<a href="javascript:void(0);" onclick="superManage('6');" class="blue">超级管理</a>　<a href="https://www.mh163k.com/tieba/addedit.aspx?action=edit&amp;id=6" class="blue">编辑</a>　<a href="javascript:void(0);" onclick="$.managerTBisdel('6','2276');" class="blue">删除</a></p>
			 </div>
		   </div>
		  </div>
		  
		<div class="post_list">
			<div id="pagingList" class="isrevert1"><div class="gentie post_item">
	<div class="user_info">
		<div class="user_head"><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png"></div>
		<ul>
			<li>
			<span class="uName">energy</span>
			<span class="grade i_1" title="初级">1</span>
			<span class="vipnum display0">无</span>
			<span class="bazhu display1">版主</span>
			</li>
			<li><span class="shafa">沙发</span> 07-16 16:27</li>
		</ul>
			<div class="reply_btn" onclick="return loadRevertReplay(this,'84','energy');"></div>
	</div>
	<div class="con">
		
		<div class="replaycontent1">
			
			<p>为基友而生的吧</p>
		</div>
	</div>
	<p class="manage_replay display0" data-isrep="0">回复：<span class="replaycontent2"></span>　<span class="time"></span></p>
	<p class="manage"><a href="#" onclick="return edit_replay(this,'84');" class="blue">编辑和回评</a><a href="#" onclick="return loadDelQuick(this,'84');" class="blue" style="padding:0 13px;">更多操作</a></p>
</div><div class="gentie post_item">
	<div class="user_info">
		<div class="user_head"><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png"></div>
		<ul>
			<li>
			<span class="uName">spirit</span>
			<span class="grade i_1" title="初级">1</span>
			<span class="vipnum display0">无</span>
			<span class="bazhu display0">版主</span>
			</li>
			<li><span class="bandeng">板凳</span> 08-23 13:15</li>
		</ul>
			<div class="reply_btn" onclick="return loadRevertReplay(this,'487','spirit');"></div>
	</div>
	<div class="con">
		<div class="comment_reply">
	
	<div class="comment_user clearfix"><a href="#" onclick="return loadRevertReplay(this,'84','energy');" class="replay_btn replay_life">回复</a><span class="comment_floor right">1</span><span class="userName">energy</span><span class="dtappenddate">07-16 16:27</span></div>
	<p class="comment_content">为基友而生的吧</p>
</div>
		<div class="replaycontent1">
			
			<p><span style="color: rgb(51, 51, 51); font-family: 'Microsoft Yahei', arial, 宋体; font-size: 14px; line-height: 24px;">葫芦手机的机身正面搭载了一块5.5英寸1080P分辨率的显示屏</span><img src="http://img.baidu.com/hi/bobo/B_0055.gif"></p>
		</div>
	</div>
	<p class="manage_replay display0" data-isrep="0">回复：<span class="replaycontent2"></span>　<span class="time"></span></p>
	<p class="manage"><a href="#" onclick="return edit_replay(this,'487');" class="blue">编辑和回评</a><a href="#" onclick="return loadDelQuick(this,'487');" class="blue" style="padding:0 13px;">更多操作</a></p>
</div><div class="gentie post_item">
	<div class="user_info">
		<div class="user_head"><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png"></div>
		<ul>
			<li>
			<span class="uName">shuiguo</span>
			<span class="grade i_1" title="初级">1</span>
			<span class="vipnum display0">无</span>
			<span class="bazhu display0">版主</span>
			</li>
			<li><span class="diban">地板</span> 09-08 21:39</li>
		</ul>
			<div class="reply_btn" onclick="return loadRevertReplay(this,'500','shuiguo');"></div>
	</div>
	<div class="con">
		
		<div class="replaycontent1">
			
			<p><span style="color: rgb(51, 51, 51); font-family: 'Microsoft Yahei', arial, 宋体; font-size: 14px; line-height: 24px;">耳机接口则放在了机身的顶部 &nbsp;非常喜欢,听音乐很方便</span></p>
		</div>
	</div>
	<p class="manage_replay display0" data-isrep="0">回复：<span class="replaycontent2"></span>　<span class="time"></span></p>
	<p class="manage"><a href="#" onclick="return edit_replay(this,'500');" class="blue">编辑和回评</a><a href="#" onclick="return loadDelQuick(this,'500');" class="blue" style="padding:0 13px;">更多操作</a></p>
</div><div class="gentie post_item">
	<div class="user_info">
		<div class="user_head"><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png"></div>
		<ul>
			<li>
			<span class="uName">buding</span>
			<span class="grade i_1" title="初级">1</span>
			<span class="vipnum display0">无</span>
			<span class="bazhu display0">版主</span>
			</li>
			<li>5楼 09-08 22:00</li>
		</ul>
			<div class="reply_btn" onclick="return loadRevertReplay(this,'514','buding');"></div>
	</div>
	<div class="con">
		
		<div class="replaycontent1">
			
			<p><span style="color: rgb(51, 51, 51); font-family: 'Microsoft Yahei', arial, 宋体; font-size: 14px; line-height: 24px;">5.5英寸1080P分辨率的显示屏 &nbsp;这么大, 手小拿着还不方便呢</span></p>
		</div>
	</div>
	<p class="manage_replay display0" data-isrep="0">回复：<span class="replaycontent2"></span>　<span class="time"></span></p>
	<p class="manage"><a href="#" onclick="return edit_replay(this,'514');" class="blue">编辑和回评</a><a href="#" onclick="return loadDelQuick(this,'514');" class="blue" style="padding:0 13px;">更多操作</a></p>
</div><div class="gentie post_item">
	<div class="user_info">
		<div class="user_head"><img src="\uploads\headimg\20181211\63e02036d0aadd51104674ed39c2da0d.png"></div>
		<ul>
			<li>
			<span class="uName">x4demo1</span>
			<span class="grade i_1" title="初级">1</span>
			<span class="vipnum display1">官方认证</span>
			<span class="bazhu display1">版主</span>
			</li>
			<li>6楼 04-21 18:21</li>
		</ul>
			<div class="reply_btn" onclick="return loadRevertReplay(this,'600','x4demo1');"></div>
	</div>
	<div class="con">
		
		<div class="replaycontent1">
			
			回复 无需审核
		</div>
	</div>
	<p class="manage_replay display0" data-isrep="0">回复：<span class="replaycontent2"></span>　<span class="time"></span></p>
	<p class="manage"><a href="#" onclick="return edit_replay(this,'600');" class="blue">编辑和回评</a><a href="#" onclick="return loadDelQuick(this,'600');" class="blue" style="padding:0 13px;">更多操作</a></p>
</div><div class="noMore" id="noMore">没有更多了</div></div>
			<div id="pullUp" style="display:none;"><span class="loader">loadding</span></div>
			<div class="pageNavigation" id="pageNavigation"><div class="FirstPage"><span class="kill">&lt;</span></div><div class="EndPage"><span class="kill">&gt;</span></div><span class="pageNo">1/1</span></div>
		</div>
		<span class="loader" id="pageLoader" style="display:none;">loadding</span>
	</div>
</div>
	<div class="footFixed">
		<p class="display_isrevert_1">该帖已关闭回复</p>
		<div class="reply_hd clearfix display1" id="reply_hd">
			<ul>
				<li id="share2015"><span class="share">分享</span></li>
				<li id="openReply2"><span class="num" id="show_total_revert1">5</span></li>
				<li id="reply_zan"><span class="zan">198</span></li>
				<li><a href="#" id="openReply" class="btn replay_louzhu">回楼主</a></li>
			</ul>
		</div>
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
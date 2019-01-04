<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"D:\wamp\www\tp5\public/../application/wap\view\forum\index.html";i:1546570628;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>首页-征婚-163k地方门户网站系统</title>
<meta name="keywords" content="交友栏目关键字,关键字,关键字,关键字,关键字" />
<meta name="description" content="交友栏目描述" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" href="/static/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-base.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-index.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-common.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/tieba-mb.css" />
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layer/layer.js"></script>
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
        <li class='<?php if($act == 'nr'): ?>cur<?php endif; ?>'><a href="<?php echo url('forum/index',['act'=>'nr']); ?>"><span data-act="nr" >最新回复</span></a></li>
        <li class='<?php if($act == 'nd'): ?>cur<?php endif; ?>'><a href="<?php echo url('forum/index',['act'=>'nd']); ?>"><span data-act="nd" >最新发布</span></a></li>
        <li class='<?php if($act == 'ht'): ?>cur<?php endif; ?>'><a href="<?php echo url('forum/index',['act'=>'ht']); ?>"><span data-act="ht" >热帖排行</span></a></li>
        <li class='<?php if($act == 'jh'): ?>cur<?php endif; ?>'><a href="<?php echo url('forum/index',['act'=>'jh']); ?>"><span data-act="jh" >精华热帖</span></a></li>
      </ul>
    </div>
   </div>
  <div class="post_list">
  <div id="pagingList">
    <?php if(isset($topret)): ?>
    <div id="zhidingNode" class="zhidingNode">
      <?php if(is_array($topret) || $topret instanceof \think\Collection || $topret instanceof \think\Paginator): $i = 0; $__LIST__ = $topret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <div class="item iszhiding1" id="item65">
        <a href="<?php echo url('forum/detail',['id'=>$vo['id']]); ?>" class="link bold1" onclick="return setCookieID('65');">
        <h2><span class="d display1">顶</span><span class="j <?php echo !empty($vo['choice'])?'':'display0'; ?>">精</span><?php echo $vo['title']; ?></h2>
        </a>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php endif; if(is_array($ret) || $ret instanceof \think\Collection || $ret instanceof \think\Paginator): $i = 0; $__LIST__ = $ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
	<div class="item iszhiding0" id="item6">
 <div class="item_hd">
  <div class="pic"><img src="<?php echo $vo['headimg']; ?>" onerror="this.src='/wap/main/images/user_small.gif';this.onerror='';"></div>
  <p class="chrname"><?php echo $vo['author']; ?><span class="vipnum display0">无</span></p>
  <div class="clearfix">
    <!-- <div class="right"><span class="num num_1"><?php echo $vo['view']; ?></span></div> -->
    <span class="date"><?php echo date("m-d H:i",$vo['time']); ?></span>
  </div>
  <div class="jinghua <?php echo !empty($vo['choice'])?'':'display0'; ?>">精</div>
 </div>
 <a href="<?php echo url('forum/detail',['id'=>$vo['id']]); ?>" style="color:" class="link bold0">
 <h2><span class="d <?php echo !empty($vo['settop'])?'':'display0'; ?>">顶</span><span class="j display0">精</span><?php echo $vo['title']; ?></h2>
 <div class="chrcontent"><?php echo $vo['content']; ?></div>
 <div class="hashongbao_forbox" style="top:60px;right:10px;"></div>
 </a>
 <?php if($vo['pic']): ?>
 <div class="con display_video_false_0"><div class="n_img" id="n_img_6" data-ischeck="1">
  <?php if(is_array($vo['imgsarr']) || $vo['imgsarr'] instanceof \think\Collection || $vo['imgsarr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['imgsarr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$imglist): $mod = ($i % 2 );++$i;?>
  <a href="javascript:;" class="itemAlbum" original=""><img src="<?php echo $imglist; ?>" data-src="<?php echo $imglist; ?>" original="<?php echo $imglist; ?>" data-ifshow="1" alt="" style="width: 115px; height: 90px;"></a>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  </div></div>
 <?php endif; ?>
 <ul class="item_ft">
  <li><span class="num num_1"><?php echo $vo['reply']; ?></span></li>
  <li><span class="num num_2" data-id="6" data-ischeck="0"><span class="zan"><?php echo $vo['view']; ?></span></span></li>
  <li><a href="<?php echo url('forum/detail',['id'=>$vo['id']]); ?>" class="num num_3"></a></li>
 </ul>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
<?php echo $ret->render(); ?>
<div class="nav_index_bottom nav_tb_bottom">
  <ul>
    <li><a href="<?php echo url('wap/index/index'); ?>"><span class="home"></span>首页</a></li>
    <li id="nav_bankuai" class="current"><a href="javascript:void(0);" onclick="return showCatState(false);" style="color: #5cc55c"><span class="bankuai"></span>版块</a></li>
    <li><a href="javascript:;" class="seniorSend" style="background-color: #5cc55c"><span class="fatie"></span>发帖</a></li>
    <li><a href="javascript:void(0);" onclick="location.reload()"><span class="refresh"></span>刷新</a></li>
    <li><a href="<?php echo url('user/index'); ?>"><span class="mine"></span>我的</a></li>
  </ul>
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
</div>
<script type="text/javascript">
  $(".seniorSend").click(function(){
    var nickname=$('input[name=nickname]').val();
    if(nickname.length==0){
      layer.msg('请先登入',function(){
        location.href="<?php echo url('login/index'); ?>";
      });
    }else{
        location.href="<?php echo url('forum/add'); ?>";
    }
  })
</script>
</body>
</html>
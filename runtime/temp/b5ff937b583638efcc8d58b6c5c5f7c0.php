<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"D:\wamp\www\tp5\public/../application/wap\view\index\index.html";i:1545189570;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>首页-征婚-163k地方门户网站系统</title>
<meta name="keywords" content="交友栏目关键字,关键字,关键字,关键字,关键字" />
<meta name="description" content="交友栏目描述" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/jiaoyou-mb.css">
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-base.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-index.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-common.css" />
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layui/layui.js"></script>
<style type="text/css">
.filter2 .inner_parent { height:420px!important;}
#pageNavigation { display:none;}
#pagingList .noMore { padding:15px 0 25px; text-align:center; color:#aaa; border-bottom:0 none;}
.sys_more2 { text-align:center; padding:10px 10px;}
#returnFirstPage1 { padding-bottom:0;}
#returnFirstPage { padding-top:0;}
.sys_more2 a { display:block; background-color:#fff; color:#ff7da9; border:1px solid #ff7da9; border-radius:3px; padding:4px 0;}
.layui-flow-more {padding: 15px 0 25px;text-align: center;color: #aaa;border-bottom: 0 none;}
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
	<div id="slide" class="clearfix" style="width: 414px;">
		<div id="content" style="width: 1242px; transform: translate3d(-826.959px, 0px, 0px) scale(1);">
			<div class="cell" style="width: 414px;"><a href="#3"><img src="/wap/main/images/201710011203108436508.jpg" alt=""></a></div>
			<div class="cell" style="width: 414px;"><a href="#3"><img src="/wap/main/images/201710011203108436508.jpg" alt=""></a></div>
			<div class="cell" style="width: 414px;"><a href="#3"><img src="/wap/main/images/201710011203108436508.jpg" alt=""></a></div>
		</div>
		<ul id="indicator"><li class="active">1</li><li class="">2</li><li class="">3</li></ul>
	</div>
	<span class="prev" id="slide_prev" style="display:none">上一张</span><span class="next" id="slide_next" style="display:none">下一张</span>
	<div class="tb_top_1">
		<ul>
			<li class="li_1"><a href=""><em>会员活动</em>会员线下聚会活动</a></li>
			<li class="li_2"><a href="<?php echo url('forum/index'); ?>"><em>会员社区</em>分享你我的情感之路</a></li>
			<!-- <li class="li_3"><a href="https://www.mh163k.com/gift/"><em>积分商城</em>会员积分兑换</a></li> -->
		</ul>
	</div>
	<div class="slide_tabs" id="wrapper2">
		<ul id="scroller2" style="width: 560px; transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 500ms; transform: translate(0px, 0px) translateZ(0px);">
			<li class="select"><a href="javascript:;" class="item" data-orderby="">首页推荐</a></li>
			<!-- <li><a href="?orderby=6" class="item" data-orderby="6">附近</a></li> -->
			<li><a href="javascript:;" class="item" data-orderby="1">最新加入</a></li>
			<li><a href="javascript:;" class="item" data-orderby="2">女神榜</a></li>
			<li><a href="javascript:;" class="item" data-orderby="3">男神榜</a></li>
			<!-- <li><a href="?orderby=4" class="item" data-orderby="4">鲜花榜</a></li>
			<li><a href="?orderby=5" class="item" data-orderby="5">收藏榜</a></li> -->
		</ul>
		<!-- <div class="more" id="iscrollto"><span></span></div> -->
	</div>
	<div class="blank10"></div>
	<div class="fullbg" id="fullbg" style="display:none;"><i class="pull2"></i></div>	
	<div class="friend" id="mapPoint">
	    <ul class="sh-list friend-list" id="pagingList"></ul>
	   <!--  <div class="sys_more2" id="returnFirstPage"><a href="<?php echo url('wap/index/index'); ?>">返回第一页</a></div> -->
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
layui.use(['flow','layer'], function(){
  var $ = layui.jquery; //不用额外加载jQuery，flow模块本身是有依赖jQuery的，直接用即可。
  var flow = layui.flow
     ,layer = layui.layer
  $orderby='';
  flow.load({
    elem: '#pagingList' //指定列表容器
    ,isLazyimg:true
    ,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
      var lis = [];
      
      //以jQuery的Ajax请求为例，请求下一页数据（注意：page是从2开始返回）
      $.get('/wap/index/data?page='+page+'&orderby='+$orderby, function(res){
        //假设你的列表返回在data集合中
        layui.each(res.data, function(index, item){
          $html='<li class="item clearfix" id="item81" data-x="116.417025" data-y="39.918348">'+
                '<a href="/jiaoyou/'+item.userid+'.html" class="link"><div class="sh-img">'+
                '<img class="img" lay-src="'+item.headimg+'"  onerror="this.src=\'/wap/main/images/kuaison_nofind_product.gif\';"><p><i class="icon display1"></i></p></div>'+
                '<div class="wen">'+
                '<h1><span class="name"><span class="commend1">'+item.nickname+'</span><i class="icon man0"></i><i class="icon wsc1"></i><s class="s keepnum">6</s><s class="s flowernum">13</s></span></h1>'+
                '<h2><span>'+item.yearsitem+'</span><span>'+item.stature+'cm</span></h2>'+
                '<p>'+item.signature+'</p><p class="juli">距离未知</p>'+
                '</div><div class="hashongbao_forbox" style="top:auto; bottom:10px; right:8px;"></div></a></li>';
          lis.push($html);
        }); 
        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
        next(lis.join(''), page < res.pages);
      });
    }
  });
  $('.item').click(function(data){
  	$orderby=$(this).data('orderby');
  	$('#pagingList').remove();
  	$('#mapPoint').append('<ul class="sh-list friend-list" id="pagingList"></ul>');
  	flow.load({
    elem: '#pagingList' //指定列表容器
    ,isLazyimg:true
    ,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
      var lis = [];
      //以jQuery的Ajax请求为例，请求下一页数据（注意：page是从2开始返回）
      $.get('/wap/index/data?page='+page+'&orderby='+$orderby, function(res){
        //假设你的列表返回在data集合中
        layui.each(res.data, function(index, item){
          $html='<li class="item clearfix" id="item81" data-x="116.417025" data-y="39.918348">'+
                '<a href="/jiaoyou/'+item.userid+'.html" class="link"><div class="sh-img">'+
                '<img class="img" lay-src="'+item.headimg+'"  onerror="this.src=\'/wap/main/images/kuaison_nofind_product.gif\';"><p><i class="icon display1"></i></p></div>'+
                '<div class="wen">'+
                '<h1><span class="name"><span class="commend1">'+item.nickname+'</span><i class="icon man0"></i><i class="icon wsc1"></i><s class="s keepnum">6</s><s class="s flowernum">13</s></span></h1>'+
                '<h2><span>'+item.yearsitem+'</span><span>'+item.stature+'cm</span></h2>'+
                '<p>'+item.signature+'</p><p class="juli">距离未知</p>'+
                '</div><div class="hashongbao_forbox" style="top:auto; bottom:10px; right:8px;"></div></a></li>';
          lis.push($html);
        }); 
        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
        next(lis.join(''), page < res.pages);
      });
    }
    });
  });
});
</script>
</body>
</html>
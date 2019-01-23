<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"D:\wamp\www\tp5\public/../application/wap\view\index\homepage.html";i:1545185888;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $ret['nickname']; ?>-征婚-163k地方门户网站系统</title>
<meta name="keywords" content="交友栏目关键字,关键字,关键字,关键字,关键字" />
<meta name="description" content="交友栏目描述" />
<link href="/wap/main/css/jiaoyou-mb.css" rel="stylesheet" type="text/css">
<link href="/wap/main/css/jiaoyou-mb-<?php echo $ret['tempnum']; ?>.css" rel="stylesheet" type="text/css">
<style type="text/css">
.headerblack { background-color:#000!important;}
.layui-layer-content{text-align: center;}
</style>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" rev="stylesheet" href="/wap/main/css/mb-base.css?tc=150759" />
<link rel="stylesheet" rev="stylesheet" href="/wap/main/css/mb-common.css" />
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layer/layer.js"></script>
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
<div class="login_inner" id="login_inner"></div>
<div class="o_main" style="padding-bottom:50px;">
	<div class="contain-top">
		<div class="renqi">总人气：<em>1307</em>　近30天：80</div>
		<div class="img_wrap">
		<img class="img" src="/wap/main/images/<?php echo $ret['tempnum']; ?>/jiaoyou_wap_banner.jpg" />
		</div>
	</div>
	<div class="contain-bottom">
	<div class="tops">
		<div class="topm"><img src="<?php echo $ret['headimg']; ?>"><p class="display1">推荐会员</p></div>
		<div class="topl" id="giveflower2" data-selector="flower"><i class="icon"></i><span id="flowernum">13</span></div>
		<div class="topr"><a href="javascript:void(0);"><i class="icon"></i><span id="keepnum" data-iskeep="0">6</span></a></div>
		<h2><?php echo $ret['nickname']; ?><i class="icon wsc1"></i><!-- <span class="ico1 display1">单</span> <span class="ico2 display0">离</span> --></h2>
		<h3><?php echo $ret['signature']; ?></h3>
		<h4 id="tagList">
			<span class="list"><?php echo $ret['place']; ?></span>
			<?php if(isset($improve)): ?>
			<span class="list"><?php echo signArrCn($improve['sign']); ?></span>
			<span class="list"><?php if($improve['wages']): ?><?php echo wagesArrCn($improve['wages']); ?>元<?php else: ?>未填写<?php endif; ?></span>
			<?php endif; ?>
		</h4>
	    <?php if(\think\Session::get('validate') != $ret['pwd_hash']): ?>
		<div class="top-link">
		<a href="javascript:void(0);" class="links icon" id="givecontact2" data-selector="contact">联系Ta</a>
		<a href="javascript:void(0);" class="links links2 icon" id="handshandle2" data-selector="handshandle_way">私信消息</a>
		<!-- <a href="javascript:void(0);" class="links links2 icon" id="handshandles2" data-selector="handshandle_way">私信消息</a> -->
	    </div>
	    <?php endif; ?>
		<div class="tb_top_1">
			<ul>
				<li class="li_3"><em><?php echo emotionCn($ret['emotion']); ?></em>感情</li>
				<li class="li_3"><em><?php echo $ret['stature']; ?>cm</em>身高</li>
				<li class="li_3">
					<em><?php if(isset($improve) and $improve['edu']): ?><?php echo eduArrCn($improve['edu']); else: ?>未填写<?php endif; ?></em>学历
				</li>
				<li class="li_3"><em><?php echo $ret['yearsitem']; ?></em>年龄</li>
			</ul>
		</div>
	</div>	
	<div class="picsaNode" id="picsaNode">
		<?php if(isset($imgsarr)): ?>
		<div class="inner" id="layer-photos-demo">
			<ul class="clearfix" id="picsaNodeInner">
				<?php if(is_array($imgsarr) || $imgsarr instanceof \think\Collection || $imgsarr instanceof \think\Paginator): $i = 0; $__LIST__ = $imgsarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li data-id="310"><img src="<?php echo $vo; ?>" layer-src="<?php echo $vo; ?>"></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<?php else: ?>
		<!-- <div class="noisreal" data-num="1">对不起，需要成为<a href="" style="color:#36c;">推荐</a>会员才能查看我的相册</div> -->
		<div class="noisreal" data-num="1">对不起，该会员还没有上传相片</div>
		<?php endif; ?>
	</div> 
	<div class="contain-middle">
		<div class="containr">
			<div class="containr_bd">
			<h2><em class="em1 icon"></em>内心独白</h2>
			<p style="padding-left:24px;"><?php echo $ret['content']; ?></p>
			</div>
			<?php if(isset($improve)): ?>
			<div class="containr_bd">
			<h2><em class="em2 icon"></em>完善资料</h2>
			<p><span>学历：</span><?php if($improve['edu']): ?><?php echo eduArrCn($improve['edu']); else: ?>未填写<?php endif; ?></p>
			<p><span>星座：</span><?php echo signArrCn($improve['sign']); ?></p>
			<p><span>个性：</span><?php echo !empty($improve['character'])?$improve['character']:'未填写'; ?></p>
			<p><span>月薪：</span><?php if($improve['wages']): ?><?php echo wagesArrCn($improve['wages']); else: ?>未填写<?php endif; ?></p>
			<p><span>从事行业：</span><?php echo !empty($improve['industry'])?$improve['industry']:'未填写'; ?></p>
			<p><span>兴趣爱好：</span><?php echo !empty($improve['intrste'])?$improve['intrste']:'未填写'; ?></p>
			</div>
			<?php endif; if(isset($yaoqiu)): ?>
			<div class="containr_bd">
			<h2><em class="em3 icon"></em>交友要求</h2>
			<p><span>年龄：</span><?php echo !empty($yaoqiu['yq_age'])?$yaoqiu['yq_age']:'不限制'; ?></p>
			<p><span>学历：</span><?php echo eduArrCn($yaoqiu['yq_edu']); ?></p>
			<p><span>月薪：</span><?php echo wagesArrCn($yaoqiu['yq_wages']); ?></p>
			<p><span>从事行业：</span><?php echo !empty($yaoqiu['yq_industry'])?$yaoqiu['yq_industry']:'不限制'; ?></p>
			<p><span>接受离异：</span><?php if($yaoqiu['yq_divorced'] ==1): ?>接受<?php else: ?>不接受<?php endif; ?></p>
			<p><span>身高：</span><?php echo !empty($yaoqiu['yq_stature_min'])?$yaoqiu['yq_stature_min']:'不限制'; ?> - <?php echo !empty($yaoqiu['yq_stature_max'])?$yaoqiu['yq_stature_max']:'不限制'; if($yaoqiu['yq_stature_max']): ?> cm<?php endif; ?></p>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if(isset($userlist)): ?>
	<div class="contain-tj">
		<h2><i class="icon"></i><span>相似推荐</span><div class="line"></div></h2>
		<ul class="contain-tjlist clearfix" id="myDiv">
			<?php if(is_array($userlist) || $userlist instanceof \think\Collection || $userlist instanceof \think\Paginator): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li class="item">
			<a href="<?php echo url('wap/index/homepage',['id'=>$vo['userid']]); ?>"><img src="<?php echo $vo['headimg']; ?>" alt="" /><p><?php echo $vo['nickname']; ?></p></a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<!-- <a href="javascript:void(0);" onClick="return getxiangsi();" style="display:block; text-align:center; margin:15px 0 0; padding:0 0 25px; color:#999;">轻击一下 换一换</a> -->
	</div>
	<?php endif; ?>
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
<div class="windowIframe" id="windowIframe" data-loaded="0">
	<div class="header"><a href="javascript:;" class="back close">返回</a><span id="windowIframeTitle"></span></div>
	<div class="body" id="windowIframeBody"></div>
</div>
</div>
<div class="bottom clearfix">
	<div class="bottoml"><img src="<?php echo $ret['headimg']; ?>"/><p><em><?php echo $ret['nickname']; ?></em><span><?php echo $ret['sex']; ?> <?php echo $ret['yearsitem']; ?></span></p><b></b>
		<input type="hidden" name="userid" value="<?php echo $ret['userid']; ?>">
	</div>
	<div class="bottomr">
		<a href="javascript:void(0);" class="contents" id="givecontact" data-selector="contact"><i class="icon"></i>联系</a>
		<a href="javascript:void(0);" class="giveflower" id="giveflower" data-selector="flower"><i class="icon"></i>送花</a>
		<a href="javascript:void(0);" onClick="return addkeep();"><i class="icon"></i><span id="keeptxt">收藏</span></a>
		<a href="javascript:void(0);" id="handshandle" data-selector="handshandle_way"><i class="icon"></i>牵线</a>
	</div>
</div>
<script>
//图片放大
layer.photos({
  photos: '#layer-photos-demo'
  ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
});
$(function(){
	$('#handshandle2').click(function(){
		var html='<textarea class="msg_cont" id="content" placeholder="请发送消息..."></textarea>';
		var userid=$('input[name=userid]').val();
		var index =layer.open({
		 	type: 1,
		 	title:'发送私信',
		 	area:['90%','220px'],
		 	btn:['确定','取消'],
            content: html,
            yes:function(){
            	var content=$('#content').val();
            	$.post('<?php echo url("/wap/index/message"); ?>',{content:content,userid:userid},function(data){
            		layer.msg(data.msg);
            	})
            	layer.close(index);
            }
		});     
	})
})
</script>
</body>
</html>
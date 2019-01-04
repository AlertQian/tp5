<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"D:\wamp\www\tp5\public/../application/wap\view\forum\detail.html";i:1546569429;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\huitie.html";i:1546394791;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/wap/main/css/comment-mb.css" />
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layui/layui.js"></script>
<script src="/wap/main/js/upload.js"></script>
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
		<li><a href="<?php echo url('forum/index'); ?>">社区<s class="s" style="background-image:url(/wap/main/images/nav_icon/201705251752556953922.png);"></s></a></li>
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
			<span class="d display0">顶</span><?php echo $ret['title']; ?>
			<span class="jinghua display0">精</span>
			<div class="info clearfix">
				<div class="right"><?php echo $ret['view']; ?>阅读<s class="line"></s><?php echo $ret['reply']; ?>回帖</div>
				<div class="left"><a href="../tieba_a2276_b0_c0_d0_e0_f0_g0_h0_i0_p1.html" class="cat display2276">通讯数码</a></div>
			</div>
		</div>
		  <div class="Oposter" id="louzhuNode">
		   <div class="user_info">
			<div class="user_head"><img src="<?php echo $ret['headimg']; ?>" onerror="this.src='/wap/main/images/user_small.gif';this.onerror='';"></div>
			<ul>
			  <li>
			   <span class="uName"><?php echo $ret['author']; ?></span>
			   <!-- <span class="grade i_1" title="初级">1</span> 
			   <span class="vipnum display0">无</span>
			   <span class="bazhu display0">版主</span>-->
			  </li>
			  <li><?php echo date("m-d H:i",$ret['time']); ?></li>
			</ul>
			<div class="op">楼主</div>
		   </div>
		   <div class="con" id="louzhuCon">
			<?php echo $ret['content']; if(isset($imgsarr)): if(is_array($imgsarr) || $imgsarr instanceof \think\Collection || $imgsarr instanceof \think\Paginator): $i = 0; $__LIST__ = $imgsarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<p><img src="<?php echo $vo; ?>" style="width: 100%"></p>
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
			<p class="blod"></p>
			<div class="p_btns">
				<p class="manage">　<a href="javascript:void(0);" onclick="superManage('6');" class="blue">超级管理</a>　<a href="https://www.mh163k.com/tieba/addedit.aspx?action=edit&amp;id=6" class="blue">编辑</a>　<a href="javascript:void(0);" onclick="$.managerTBisdel('6','2276');" class="blue">删除</a></p>
			</div>
		   </div>
		  </div>
		<?php if(isset($comarr)): ?>  
		<div class="post_list">
			<div id="pagingList" class="isrevert1">
				<?php if(is_array($comarr) || $comarr instanceof \think\Collection || $comarr instanceof \think\Paginator): $i = 0; $__LIST__ = $comarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<div class="gentie post_item">
					<div class="user_info">
						<div class="user_head"><img src="<?php echo $vo['headimg']; ?>" onerror="this.src='/wap/main/images/user_small.gif';this.onerror='';"></div>
						<ul>
							<li>
							<span class="uName"><?php echo $vo['uname']; ?></span>
							<!-- <span class="grade i_1" title="初级">1</span>
							<span class="vipnum display0">无</span>
							<span class="bazhu display0">版主</span> -->
							</li>
							<li><?php echo $vo['louceng']; ?> <?php echo date("m-d H:i",$vo['time']); ?></li>
						</ul>
						<div class="reply_btn" onclick="return loadRevertReplay(this,<?php echo $vo['id']; ?>,'<?php echo $vo['uname']; ?>','0');"></div>
					</div>
					<div class="con">
						<div class="replaycontent1">
							<?php echo $vo['content']; ?>
						</div>
						<?php if($vo['pic']): ?>
						<p class=""><img src="<?php echo $vo['pic']; ?>" style="width: 100%"></p>
						<?php endif; if($vo['child']): if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<div class="comment_reply">
							<div class="comment_user clearfix"><a href="#" onclick="return loadRevertReplay(this,<?php echo $vo['id']; ?>,'<?php echo $v['uname']; ?>','1');" class="replay_btn replay_life">回复</a><span class="comment_floor right"><?php echo $i; ?></span><span class="userName"><?php echo $v['uname']; ?></span><span class="dtappenddate"><?php echo date("m-d H:i",$v['time']); ?></span></div>
							<p class="comment_content"><?php echo $v['content']; ?></p>
							<?php if($v['pic']): ?>
							<p class=""><img src="<?php echo $v['pic']; ?>" style="width: 100%"></p>
							<?php endif; ?>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; endif; ?>
					</div>
					<p class="manage_replay display0" data-isrep="0">回复：<span class="replaycontent2"></span>　<span class="time"></span></p>
					<p class="manage"><a href="#" onclick="return edit_replay(this,<?php echo $vo['id']; ?>);" class="blue">编辑和回评</a><a href="#" onclick="return loadDelQuick(this,<?php echo $vo['id']; ?>);" class="blue" style="padding:0 13px;">更多操作</a></p>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="noMore" id="noMore">没有更多了</div>
			</div>
			<div id="pullUp" style="display:none;"><span class="loader">loadding</span></div>
			<div class="pageNavigation" id="pageNavigation"><div class="FirstPage"><span class="kill">&lt;</span></div><div class="EndPage"><span class="kill">&gt;</span></div><span class="pageNo">1/1</span></div>
		</div>
		<?php endif; ?>
		<span class="loader" id="pageLoader" style="display:none;">loadding</span>
	</div>
	</div>
	<div class="reply_box page_srcoll" id="pageOther" style="display:none;z-index: 1019;">
	<div class="inner">
		<span class="title">回复<span id="replyName"></span></span>
		<div class="return_close" id="closeReply">返回</div>
		<div class="cmt_txt2" id="cmt_txt" placeholder="想跟他说点什么~" style=" margin-bottom:10px; height:160px; overflow:auto; -webkit-overflow-scrolling:touch; -webkit-user-select:auto;" contenteditable="true"></div>
		<input id="isrep" name="isrep" type="hidden">
		<input id="perid" name="perid" type="hidden">
		<input id="fid" name="fid" type="hidden" value="<?php echo $ret['id']; ?>">
		<div class="reply_tabs" id="reply_tabs">
			<ul class="clearfix tab-hd">
				<li class="item" data-isvideo="0" data-isopen="0"><s class="s s_1"></s>表情</li>
				<li class="item" data-isvideo="0" data-isopen="0"><s class="s s_2"></s>图片</li>
			</ul>
			<div class="tab-cont" style="display:none;">
				<div class="face" id="emot_inner"></div>
			</div>
			<div class="tab-cont" style="display:none;">
			    <div class="imgcon">
		            <div id="xiangce" class="my_prop_imgitem_node clearfix">
		              <div class="upimgFileBtnNode"><div id="pageLoaderNode"><span id="pageLoader">loadding</span></div><img src="/wap/main/images/upimg.png" id="upimgFileBtn" class="upimgFileBtn imgview" alt="" style="height: 81.75px;"></div>
		            </div>
		            <input type="hidden" name="imgs" class="layui-input" value="">
		            <input type="hidden" name="isimgs" class="layui-input" value="">
	            </div>
			</div>
			<?php echo token(); ?>
		</div>
		<input type="submit" class="rsubmit" value="发表" id="fabiao"/>
		<div style="margin:10px 10px 20px;">
		<input class="comn-submit fabu_btn" type="submit" id="upimgs" value="确认所选图片" style="display: none;background: #5cc55c;">
	    </div>
	</div>
</div>
	<div class="footFixed">
		<p class="display_isrevert_1">该帖已关闭回复</p>
		<div class="reply_hd clearfix display1" id="reply_hd">
			<ul>
				<!-- <li id="share2015"><span class="share">分享</span></li> -->
				<li id="openReply2"><span class="num" id="show_total_revert1"><?php echo $ret['reply']; ?></span></li>
				<!-- <li id="reply_zan"><span class="zan"><?php echo $ret['view']; ?></span></li> -->
				<li><a href="javascript:;" class="btn replay_louzhu" onclick="return loadRevertReplay(this,'0','楼主','0');">回楼主</a></li>
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
	$(function(){
		$("#closeReply").click(function(){
			$("#pageOther").hide(500);
		})
		$("#fabiao").click(function(data){
			var data={};
			    data.cont=$("#cmt_txt").text();
			    data.isrep=$("#isrep").val();
			    data.mid=$("#perid").val();
			    data.pic=$("input[name=imgs]").val();
			    data.__token__=$("input[name=__token__]").val();
			    data.fid=$("#fid").val();
			var $this=$(this);    
			$.post("/wap/forum/fatie",data,function(data){
				if(data.code==1){
		          layer.msg(data.msg, {icon: 1, anim: 6, time: 1000},function(){
		            location.reload();
		          });
		        }else{
		          layer.msg(data.msg,function(){
		            location.href=data.url;
		          });
		        }
			});
		})
	})
	function loadRevertReplay(o,perid,uname,isrep){
		$("#replyName").text(uname);
		$("#perid").val(perid);
		$("#isrep").val(isrep);
		$("#pageOther").show(500);
		console.log(isrep);
		if(isrep==1){
            $("#cmt_txt").text("@"+uname+" : ");
		}
	}
</script>
</body>
</html>
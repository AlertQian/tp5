<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\wamp\www\tp5\public/../application/wap\view\user\message.html";i:1545028612;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>南城交友网</title>
	<link rel="stylesheet" href="/static/layui/css/layui.css">
	<link rel="stylesheet" href="/wap/main/css/mb-common.css" />
	<script src="/fds/js/jquery-1.11.3.min.js"></script>
    <script src="/static/layer/layer.js"></script>
</head>
<style type="text/css">
	.msglist{padding: 10px;}
	.msglist .item{padding: 10px 0px 10px 86px;position: relative;border-bottom: 1px solid #eee;}
	.msglist .sh-img{position: absolute;top: 16px;left: 0;}
	.msglist img{display: block;width: 70px;height: 70px;border-radius: 3px;}
	.msglist .name{color: #8cbb5a;font-size: 14px;}
	.msglist .send{color: #333;font-size: 14px;padding-right: 5px;}
	.msglist p{color: #333;font-size: 12px;line-height: 18px;padding: 5px 0px;}
	.msglist .juli{color: #666}
	.msglist .tip{position: absolute;right: 0px;color: #8cbb5a;top:65px;}
	.msglist .tip a{color: #8cbb5a;}
	.nomsg{text-align: center;color: #666;padding: 10px;font-size: 14px;}
	.tips{width: 15px;height: 15px;border-radius: 15px;background: red;display: inline-block;text-align: center;padding: 2px;color: #fff;position: absolute;top:-5px;left: 60px;}
	.layui-layer-content{text-align: center;}
	.msg_cont{width: 84%;height: 75px;resize: none;padding: 10px;font-size: 13px;margin-top: 10px;-webkit-appearance: none;border:1px solid #eee;}
</style>
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
	<div class="friend">
		<?php if(isset($ret)): ?>
	    <ul class="msglist">
	    	<?php if(is_array($ret) || $ret instanceof \think\Collection || $ret instanceof \think\Paginator): $i = 0; $__LIST__ = $ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	    	<li class="item">
	    		<div class="sh-img">
	    			<a href="<?php echo url('wap/index/homepage',['id'=>$vo['friend_id']]); ?>">
	    			<img class="img" onerror="this.src='/wap/main/images/kuaison_nofind_product.gif';" src="<?php echo $vo['headimg']; ?>">
	    		    </a>
	    		    <?php if($vo['msgnotice']): ?><span class="tips"><?php echo $vo['msgnotice']; ?></span><?php endif; ?>
	    		</div>
	    		<a href="<?php echo url('wap/user/msginfo',['user_id'=>$vo['user_id'],'friend_id'=>$vo['friend_id']]); ?>">
	    		<div class="wen"><h2><?php if($vo['sender_id'] == $userid): ?><span class="send">我发送给</span><?php endif; ?><span class="name"><?php echo $vo['nickname']; ?></span></h2><p><?php echo $vo['message_content']; ?></p><p class="juli"><?php echo date('Y-m-d H:i:s',$vo['send_time']); ?></p>
	    		</div>
	    		</a>
	    		<span class="tip"><a href="<?php echo url('wap/user/msginfo',['user_id'=>$vo['user_id'],'friend_id'=>$vo['friend_id']]); ?>">共<?php echo $vo['count']; ?>条对话</a> | <a href="javascript:;" class="handshandle2" userid="<?php echo $vo['friend_id']; ?>" nickname="<?php echo $vo['nickname']; ?>">回复</a> | <a href="javascript:;" class="delt_msg_all" fid="<?php echo $vo['friend_id']; ?>">删除</a></span>
	    	</li>
	    	<?php endforeach; endif; else: echo "" ;endif; ?>
	    </ul>
	    <?php else: ?>
	    <div class="nomsg">暂无消息</div>
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
<script type="text/javascript">
$(function(){
	$('.handshandle2').click(function(){
		var html='<textarea class="msg_cont" id="content" placeholder="请发送消息..."></textarea>';
		var userid=$(this).attr('userid');
		var name=$(this).attr('nickname');
		var index =layer.open({
		 	type: 1,
		 	title:'发送私信给 -- '+name,
		 	area:['90%','220px'],
		 	btn:['确定','取消'],
            content: html,
            yes:function(){
            	var content=$('#content').val();
            	$.post('<?php echo url("/wap/index/message"); ?>',{content:content,userid:userid},function(data){
            		layer.msg(data.msg, {icon: 1, anim: 6, time: 1000},function(){
				        location.href=data.url;
				    });
            	})
            	layer.close(index);
            }
		});     
	});
	//删除
	$('.delt_msg_all').click(function(){
		var fid=$(this).attr('fid'),
		    nickname=$(this).parent('.tip').find('.handshandle2').attr('nickname');
		    namehtml="<span style='color:red;padding:0px 5px;'>"+nickname+"</span>";
		layer.confirm('确定删除与'+namehtml+'对话？',{
			btn:['确定','取消']
		},function(){
			$.post("<?php echo url('user/delmsgs'); ?>",{fid,fid},function(data){
				if(data.code==1){
					layer.msg(data.msg, {icon: 1, anim: 6, time: 1000},function(){
				        location.href=data.url;
				    });
				}else{
					layer.msg(data.msg);
				}
			})
		})
	})
})
</script>
</body>
</html>
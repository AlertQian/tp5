<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\wamp\www\tp5\public/../application/wap\view\user\imglist.html";i:1543375316;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>独倚画屏-征婚-163k地方门户网站系统</title>
<meta name="keywords" content="交友栏目关键字,关键字,关键字,关键字,关键字" />
<meta name="description" content="交友栏目描述" />
<link href="/wap/main/css/jiaoyou-mb.css" rel="stylesheet" type="text/css">
<style type="text/css">
.headerblack { background-color:#000!important;}
</style>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" href="/static/layui/css/layui.css">
<link rel="stylesheet" rev="stylesheet" href="/wap/main/css/mb-base.css?tc=150759" />
<link rel="stylesheet" href="/wap/main/css/member-mb.css">
<link rel="stylesheet" rev="stylesheet" href="/wap/main/css/mb-common.css?tc=150759" />
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layui/layui.js"></script>
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
<div class="inp_Itembox">
    <div style="padding:10px; text-align:center; color:#f93; background-color:#fff8f2;">图片</div>
    <div class="my_prop_img">
		<div id="J_imageView" class="my_prop_imgitem_node clearfix" style="margin-right:0;">
			<div class="upimgFileBtnNode"><div id="pageLoaderNode"><span id="pageLoader">loadding</span></div><img src="/wap/main/images/upimg.png" id="upimgFileBtn" class="upimgFileBtn imgview" alt="" style="height: 89px;"></div>
			<input type="hidden" name="imgs" class="layui-input" value="<?php echo !empty($showimgs)?$showimgs:''; ?>">
			<input type="hidden" name="isimgs" class="layui-input" value="<?php echo !empty($showimgs)?$showimgs:''; ?>">
			<?php if(isset($showimgs)): if(is_array($imgsarr) || $imgsarr instanceof \think\Collection || $imgsarr instanceof \think\Paginator): $i = 0; $__LIST__ = $imgsarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="my_prop_imgitem"><div class="imgviewNode"><img src="<?php echo $vo; ?>" class="imgview" style="height: 89px;"></div><a href="javascript:;" class="del">删除</a></div>
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</div>
    </div>
</div>
<div class="reg_tips" style="margin-bottom:15px;">点击"提交"就表示我已同意<a href="<?php echo url('index/xieyi'); ?>">网上征婚交友服务协议</a></div>
<button type="submit" id="submit" class="save">保 存</button>
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
	layui.use('upload',function(){
		var $ = layui.jquery
		,arr =new Array()
        ,upload = layui.upload;
        upload.render({
		    elem: '#upimgFileBtn'
		    ,url: "<?php echo url('upload/upimgs'); ?>"
		    ,multiple: true
		    ,before: function(obj){
		      //预读本地文件示例，不支持ie8
		      obj.preview(function(index, file, result){	     	  
		        $('#J_imageView').append('<div class="my_prop_imgitem"><div class="imgviewNode"><img src="'+ result +'" class="imgview" style="height: 89px;" alt="'+ file.name +'"></div><a href="javascript:;" class="del">删除</a></div>')
		      });
		    }
		    ,done: function(res){
		      arr.push(res.url);
		      str = arr.join(',');
		      $imgs=$('input[name=isimgs]').val();
		      if($imgs.length !== 0){
		      	$imgurl=$imgs+','+str;
		      }else{
		      	$imgurl=str;
		      }
		      $('input[name=imgs]').val($imgurl);
			}
        });
        $('#submit').click(function(e){
	    	e.preventDefault();
	    	var imgs=$('input[name=imgs]').val();
	    	$.ajax({
	    		url:"<?php echo url('user/imglist'); ?>",
	    		data:{imgs:imgs},
	    		type:'post',
	    		success:function(data){
	    			if(data.code ==1){
	    				layer.msg(data.msg,{icon: 1,anim: 6, time: 2000},function(){
	    					location.reload();
	    				});
	    			}else{
	    				layer.msg(data.msg,{icon: 2,anim: 6, time: 2000});
	    			}
	    		},
	    		error:function(){
	    			layer.msg('error');
	    		}
	    	})
	    })
		$(document).on('click',".del",function(e){
			e.preventDefault();
			var index = $(".del").index(this)
			,tag=","
			,imgs=$('input[name=imgs]').val();
			arrList = imgs.split(",");
			$url=arrList[index];
			arrList.splice(index,1);
			var delimg=arrList.join(',');
			$.post("<?php echo url('user/unsetimg'); ?>",{urls:$url},function(data){
				if(data.code ==1){
    				layer.msg(data.msg,{icon: 1,anim: 6, time: 2000});
    			}else{
    				layer.msg(data.msg,{icon: 2,anim: 6, time: 2000});
    			}	
			});
		    $("input[name=imgs]").val(delimg);
		    $(this).parent('.my_prop_imgitem').remove();
		})
	})
    
</script>
</body>
</html>
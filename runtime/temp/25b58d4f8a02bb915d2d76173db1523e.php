<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\wamp\www\tp5\public/../application/wap\view\user\editcom.html";i:1547109503;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/wap/main/css/member-mb.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/mb-common.css" />
<link rel="stylesheet" type="text/css" href="/wap/main/css/tieba-mb.css" />
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layui/layui.js"></script>
<script src="/wap/main/js/upload.js"></script>
<script src="/public/js/emotData.js"></script>
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
   <div class="tabItem tab-cont" style="display:block;">
    <div class="inp_Itembox">
        <dl class="clearfix" style="padding-left:0;">
          <dd style="padding-left:0;">
            <p class="reply_tips" style="color:#aaa;">内容(必填)</p>
            <div class="qita" id="cmt_txt" placeholder="内容(必填)" style="height:160px; overflow:auto; -webkit-overflow-scrolling:touch;-webkit-user-select:auto;" contenteditable="true"><?php echo htmlspecialchars_decode($ret['content']); ?></div>
            <input id="chrmarkForm" name="chrcontent" type="hidden">
          </dd>
        </dl>
    </div>
    </div>
    <div class="fill_content">
      <div class="reply_tabs" id="reply_tabs">
        <ul class="clearfix tab-hd">
          <li class="item" data-isopen="0"><s class="s s_1"></s>表情</li>
          <li class="item current" data-isopen="1"><s class="s s_2"></s>图片</li>
        </ul>
        <div class="tab-cont" style="display:none;">
          <div class="face" id="emot_inner"></div>
        </div>
        <div class="tab-cont">
          <div class="imgcon">
            <div id="xiangce" class="my_prop_imgitem_node clearfix">
              <div class="upimgFileBtnNode"><div id="pageLoaderNode"><span id="pageLoader">loadding</span></div><img src="/wap/main/images/upimg.png" id="upimgFileBtn" class="upimgFileBtn imgview" alt="" style="height: 81.75px;"></div>
              <?php if(isset($imgsarr)): if(is_array($imgsarr) || $imgsarr instanceof \think\Collection || $imgsarr instanceof \think\Paginator): $i = 0; $__LIST__ = $imgsarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	          <div class="my_prop_imgitem"><div class="imgviewNode"><img src="<?php echo $vo; ?>" class="imgview" style="height: 81.75px;"></div><a href="javascript:;" class="del">删除</a></div>
	          <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </div>
            <input type="hidden" name="imgs" class="layui-input" value="<?php echo !empty($showimgs)?$showimgs:''; ?>">
			<input type="hidden" name="isimgs" class="layui-input" value="<?php echo !empty($showimgs)?$showimgs:''; ?>">
          </div>
        </div>
        <?php echo token(); ?>
        <div style="margin:10px 10px 20px;">
          <input class="comn-submit fabu_btn" type="submit" id="submit" value="保 存">
          <input class="comn-submit fabu_btn" type="submit" id="upimgs" value="确认所选图片" style="display: none;background: #5cc55c;">
        </div>
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
    $('#submit').click(function(e){
        e.preventDefault();
        var content=$.trim($("#cmt_txt").html());
        var pic=$('input[name=imgs]').val()
            ,id=<?php echo $ret['id']; ?>
            ,token=$("input[name=__token__]").val();
        if(content.length == 0){
          layer.msg('请填写内容');
          $("#cmt_txt").focus();
          return false;
        }
        $.ajax({
          url:"<?php echo url('user/editcom'); ?>",
          data:{cont:content,pic:pic,__token__:token,id:id},
          type:'post',
          success:function(data){
            if(data.code ==1){
              layer.msg(data.msg,{icon: 1,anim: 6, time: 2000},function(){
                location.href=data.url;
              });
            }else{
              layer.msg(data.msg,{icon: 2,anim: 6, time: 2000},function(){
                location.reload();
              });
            }
          },
          error:function(){
            layer.msg('error');
          }
        })
    })
  })
</script>
</body>
</html>
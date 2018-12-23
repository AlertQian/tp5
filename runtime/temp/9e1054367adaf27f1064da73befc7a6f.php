<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"D:\wamp\www\tp5\public/../application/wap\view\forum\add.html";i:1545549291;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1545358047;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1545529423;}*/ ?>
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
          <dd style="padding-left:0;"><input type="text" name="title" id="fabu_title" value="" placeholder="标题(必填)"></dd>
        </dl>
        <dl class="clearfix" style="padding-left:0;">
          <dd style="padding-left:0;">
            <p class="reply_tips" style="color:#aaa;">内容(必填)</p>
            <div class="qita" id="cmt_txt" placeholder="内容(必填)" style="height:160px; overflow:auto; -webkit-overflow-scrolling:touch;-webkit-user-select:auto;" contenteditable="true"></div>
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
          <div class="face" id="emot_inner"><div class="clearfix"><ul class="clearfix ul_0"><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_01.png');" data-src="/template/wap/main/default/images/emotion/e_01.png" data-alt="拥抱"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_02.png');" data-src="/template/wap/main/default/images/emotion/e_02.png" data-alt="撇嘴"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_03.png');" data-src="/template/wap/main/default/images/emotion/e_03.png" data-alt="色"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_04.png');" data-src="/template/wap/main/default/images/emotion/e_04.png" data-alt="发呆"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_05.png');" data-src="/template/wap/main/default/images/emotion/e_05.png" data-alt="得意"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_06.png');" data-src="/template/wap/main/default/images/emotion/e_06.png" data-alt="流泪"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_07.png');" data-src="/template/wap/main/default/images/emotion/e_07.png" data-alt="害羞"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_08.png');" data-src="/template/wap/main/default/images/emotion/e_08.png" data-alt="闭嘴"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_09.png');" data-src="/template/wap/main/default/images/emotion/e_09.png" data-alt="睡"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_10.png');" data-src="/template/wap/main/default/images/emotion/e_10.png" data-alt="大哭"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_11.png');" data-src="/template/wap/main/default/images/emotion/e_11.png" data-alt="尴尬"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_12.png');" data-src="/template/wap/main/default/images/emotion/e_12.png" data-alt="发怒"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_13.png');" data-src="/template/wap/main/default/images/emotion/e_13.png" data-alt="调皮"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_14.png');" data-src="/template/wap/main/default/images/emotion/e_14.png" data-alt="呲牙"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_15.png');" data-src="/template/wap/main/default/images/emotion/e_15.png" data-alt="惊讶"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_16.png');" data-src="/template/wap/main/default/images/emotion/e_16.png" data-alt="难过"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_17.png');" data-src="/template/wap/main/default/images/emotion/e_17.png" data-alt="酷"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_18.png');" data-src="/template/wap/main/default/images/emotion/e_18.png" data-alt="冷汗"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_19.png');" data-src="/template/wap/main/default/images/emotion/e_19.png" data-alt="抓狂"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_20.png');" data-src="/template/wap/main/default/images/emotion/e_20.png" data-alt="吐"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_21.png');" data-src="/template/wap/main/default/images/emotion/e_21.png" data-alt="偷笑"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_22.png');" data-src="/template/wap/main/default/images/emotion/e_22.png" data-alt="发怒"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_23.png');" data-src="/template/wap/main/default/images/emotion/e_23.png" data-alt="调皮"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_24.png');" data-src="/template/wap/main/default/images/emotion/e_24.png" data-alt="呲牙"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_25.png');" data-src="/template/wap/main/default/images/emotion/e_25.png" data-alt="惊讶"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_26.png');" data-src="/template/wap/main/default/images/emotion/e_26.png" data-alt="难过"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_27.png');" data-src="/template/wap/main/default/images/emotion/e_27.png" data-alt="酷"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_28.png');" data-src="/template/wap/main/default/images/emotion/e_28.png" data-alt="冷汗"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_29.png');" data-src="/template/wap/main/default/images/emotion/e_29.png" data-alt="抓狂"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li><li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,'cmt_txt','/template/wap/main/default/images/emotion/e_30.png');" data-src="/template/wap/main/default/images/emotion/e_30.png" data-alt="吐"><img src="/template/wap/main/default/images/emotion/24x24tranparent.gif" alt=""></a></li></ul></div></div>
        </div>
        <div class="tab-cont" style="display:block;">
          <div class="imgcon">
            <div class="clearfix sel_confirm_form" style="margin-bottom:10px;" data-name="ishidecontent">
             <span class="display0"><input id="ishidecontent" type="hidden" value="0"></span>
             </div>
            <div id="xiangce" class="my_prop_imgitem_node clearfix">
              <div class="upimgFileBtnNode"><div id="pageLoaderNode"><span id="pageLoader">loadding</span></div><img src="/wap/main/images/upimg.png" id="upimgFileBtn" class="upimgFileBtn imgview" alt="" style="height: 81.75px;"></div>
            </div>
            <input type="hidden" name="imgs" class="layui-input" value="">
            <input type="hidden" name="isimgs" class="layui-input" value="">
          </div>
        </div>
        <div style="margin:10px 10px 20px;"><input class="comn-submit fabu_btn" type="submit" id="submit" value="发 布"><input type="hidden" id="onestatenum" name="onestatenum" value="115909126046068"></div>
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
    $('#reply_tabs ul li').each(function(i){
      $(this).click(function(){
        var isopen= $(this).attr('data-isopen');
        var conts=$(this).parents('.reply_tabs').find('.tab-cont');
        var tabs=$(this);
        if(isopen === '0'){
          $(this).addClass('current').attr('data-isopen','1').siblings().removeClass('current').attr('data-isopen','0');
          conts.hide().eq(i).show();
        }else{
          conts.hide();
          tabs.removeClass('current').attr('data-isopen','0');
        }
      })
    })

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
            $('#xiangce').append('<div class="my_prop_imgitem"><div class="imgviewNode"><img src="'+ result +'" class="imgview" style="height: 81.75px;" alt="'+ file.name +'"></div><a href="javascript:;" class="del">删除</a></div>')
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

    $('#submit').click(function(e){
        e.preventDefault();
        var title=$("#fabu_title").val();
        var content=$("#cmt_txt").text();
        var imgs=$('input[name=imgs]').val();
        console.log(title+"---"+content+"---"+imgs);
        $.ajax({
          url:"<?php echo url('forum/add'); ?>",
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
  })
</script>
</body>
</html>
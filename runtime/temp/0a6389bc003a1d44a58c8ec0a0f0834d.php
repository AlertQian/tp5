<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\wamp\www\tp5\public/../application/wap\view\user\addinfo.html";i:1544320912;s:55:"D:\wamp\www\tp5\application\wap\view\public\header.html";i:1543374719;s:55:"D:\wamp\www\tp5\application\wap\view\public\footer.html";i:1543373634;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>开始使用Layui</title>
  <link rel="stylesheet" href="/static/layui/css/layui.css">
  <link rel="stylesheet" href="/wap/main/css/addinfo.css">
  <link rel="stylesheet" href="/wap/main/css/mb-common.css" />
  <link rel="stylesheet" href="/static/crop/css/cropper.css">
</head>
<style>
.file-box{
display: inline-block;
position: relative;
padding: 3px 18px;
overflow: hidden;
color:#fff;
background-color: #009688;
top:3px;
line-height: 25px;
}
.file-btn{
position: absolute;
width: 100%;
height: 100%;
top: 0;
left: 0;
outline: none;
background-color: transparent;
filter:alpha(opacity=0);
-moz-opacity:0;
-khtml-opacity: 0;
opacity: 0;
cursor: pointer;
}
.view-item{
width: 60%;text-align: left;color: #666;
}
.view-item i{position: relative;right: -60%;color: #666;}
.select_muban_inner .inner { padding:10px 0;}
.select_muban_inner ul { overflow-x:hidden; overflow-y:auto; height:330px;}
.select_muban_inner li { margin:0 10px 10px 10px; text-align:center; border:1px solid #eee; background-color:#f9f9f9; padding:5px;}
.select_muban_inner .selected { border:1px solid #82cc13;}
.select_muban_inner li .tit { font-size:14px; margin-top:5px;}
.select_muban_inner li img { vertical-align:top; width:100%;}
.select_muban_inner .hd { height:50px; line-height:50px; padding:0 8px; background-color:#fcfcfc; border-top-left-radius:4px; border-top-right-radius:4px;}
.select_muban_inner .hd .btn { display:block; background-color:#69a90f; color:#fff; font-size:14px; padding:0 9px; line-height:30px; height:30px; margin-top:9px;}

</style>
<body>
<!-- 你的HTML代码 --> 
<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/static/layui/layui.js"></script>
<script src="/static/crop/js/cropper.js"></script>
<div class="layui-main" style="width: 100%;">
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
<div class="wrapper"> 
	<div class="layui-tab layui-tab-brief" lay-filter="info">
	  <ul class="layui-tab-title">
	    <li class="layui-this" lay-id="baseinfo">基本资料</li>
	    <li lay-id="detail">完善资料</li>
      <li lay-id="headimg">上传头像</li>
      <li lay-id="yaoqiu">交友要求</li>
	  </ul>
	  <div class="layui-tab-content">
	    <div class="layui-tab-item layui-show">
        <form class="layui-form" action="">
            <?php echo token(); ?>
            <div class="layui-form-item">
              <label class="ly-form-label">姓名</label>
              <div class="layui-input-inline">
                <input type="text" name="realname" required  lay-verify="required|username" placeholder="必填" autocomplete="off" class="ly-input" value="<?php echo !empty($ret['realname'])?$ret['realname']:''; ?>">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">性别</label>
              <div class="layui-input-block">
                <input name="sex" value="男" title="男" type="radio" <?php if($ret['sex'] == '男'): ?>checked<?php endif; ?>>
                <input name="sex" value="女" title="女" type="radio" <?php if($ret['sex'] == '女'): ?>checked<?php endif; ?>>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">年龄</label>
              <div class="layui-input-inline">
               <select name="age" lay-verify="required" lay-search="">
                <option value="<?php echo !empty($ret['age'])?$ret['age']:''; ?>"><?php echo !empty($ret['age'])?$ret['age']:'未填写'; ?></option>
                <?php if(is_array($yeararr) || $yeararr instanceof \think\Collection || $yeararr instanceof \think\Paginator): $i = 0; $__LIST__ = $yeararr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">身高</label>
              <div class="layui-input-inline">
               <select name="stature" lay-verify="" lay-search="">
                <option value="<?php echo !empty($ret['stature'])?$ret['stature']:''; ?>"><?php echo !empty($ret['stature'])?$ret['stature']:'未填写'; ?></option>
                <?php if(is_array($starr) || $starr instanceof \think\Collection || $starr instanceof \think\Paginator): $i = 0; $__LIST__ = $starr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">感情</label>
              <div class="layui-input-inline">
              <select name="emotion" lay-verify="required" lay-search="">
                <option value="<?php echo !empty($ret['emotion'])?$ret['emotion']:''; ?>"><?php if(isset($ret['emotion'])): ?><?php echo emotionCn($ret['emotion']); else: ?>必填<?php endif; ?></option>
                <option value="1">单身</option>
                <option value="2">离异</option>
                <option value="3">保密</option>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">地区</label>
              <div class="layui-input-inline">
                <select name="county" lay-verify="required">
                  <option value="">请选择县</option>
                  <option value="南城县" selected="">南城县</option>
                </select>
              </div>
              <div class="layui-input-inline">
                <select name="town" lay-verify="required">
                  <option value="<?php echo !empty($ret['town'])?$ret['town']:''; ?>"><?php echo !empty($ret['town'])?$ret['town']:'请选择镇'; ?></option>
                  <?php if(is_array($townarr) || $townarr instanceof \think\Collection || $townarr instanceof \think\Paginator): $i = 0; $__LIST__ = $townarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
              <div class="layui-input-inline">
                <input type="text" name="dtarea" placeholder="详细地址" class="ly-input" value="<?php echo !empty($ret['dtarea'])?$ret['dtarea']:''; ?>">
              </div>  
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">签名</label>
              <div class="layui-input-inline">
                <textarea name="signature" required lay-verify="" placeholder="仅限50字" class="ly-textarea"><?php echo !empty($ret['signature'])?$ret['signature']:''; ?></textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">内心独白</label>
              <div class="layui-input-inline">
                <textarea name="content" required lay-verify="" placeholder="仅限300字" class="ly-textarea" style="height: 100px;"><?php echo !empty($ret['content'])?$ret['content']:''; ?></textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">选择模板</label>
              <div class="ly-form-label view-item"><span><?php echo !empty($ret['tempcn'])?$ret['tempcn']:'花好月圆'; ?></span><i class="layui-icon layui-icon-right"></i></div>
              <input type="hidden" name="tempnum" value="1">
              <input type="hidden" name="tempcn" value="花好月圆">
            </div>
            <blockquote class="layui-elem-quote quote">以下信息将作为您的征婚交友联系方式</blockquote>
            <div class="layui-form-item">
              <label class="ly-form-label">交友方式</label>
              <div class="layui-input-block">
                <input name="jytype" value="1" title="公开交友" checked="" type="radio">
                <input name="jytype" value="2" title="委托红娘" type="radio">
                <div class="layui-form-mid layui-word-aux">1.公开交友：其他会员需向网站支付相应的积分即可获得您的联系资料</div>
                <div class="layui-form-mid layui-word-aux" style="padding-top: 0px!important;">2.委托红娘：向所有人隐藏联系资料，其他会员只能通过红娘牵线服务取得您的同意后方可获得联系方式</div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">Q Q</label>
              <div class="layui-input-inline">
                <input type="text" name="qq"  lay-verify="" placeholder="未填写" autocomplete="off" class="ly-input" value="<?php echo !empty($ret['qq'])?$ret['qq']:''; ?>">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">微信</label>
              <div class="layui-input-inline">
                <input type="text" name="wechat" lay-verify="" placeholder="未填写" autocomplete="off" class="ly-input" value="<?php echo !empty($ret['wechat'])?$ret['wechat']:''; ?>">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">手机</label>
              <div class="layui-input-inline">
                <input type="text" name="phone" required  lay-verify="required|ckphone" placeholder="必填" autocomplete="off" class="ly-input" value="<?php echo !empty($phone)?$phone:''; ?>">
              </div>
            </div>
            <div style="text-align: center;">
              <div class="layui-form-mid layui-word-aux" style="float: none;">点击"提交"就表示我已同意<a href="" style="color: #4fbe3e">网上征婚交友服务协议</a></div>
              <button class="layui-btn" lay-submit lay-filter="addinfo" style="background-color: #ff78a2;width: 60%;border-radius: 50px;">立即提交</button>
            </div>
        </form>
      </div>
	    <div class="layui-tab-item">
        <form class="layui-form" action="">
            <div class="layui-form-item">
              <label class="ly-form-label">学历</label>
              <div class="layui-input-inline">
               <select name="edu" lay-verify="required" lay-search="">
                <option value="<?php echo !empty($improve['edu'])?$improve['edu']:''; ?>"><?php if($improve['edu']): ?><?php echo eduArrCn($improve['edu']); else: ?>未填写<?php endif; ?></option>
                <?php if(is_array($eduarr) || $eduarr instanceof \think\Collection || $eduarr instanceof \think\Paginator): $i = 0; $__LIST__ = $eduarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">月薪</label>
              <div class="layui-input-inline">
               <select name="wages" lay-verify="required" lay-search="">
                <option value="<?php echo !empty($improve['wages'])?$improve['wages']:''; ?>"><?php if($improve['wages']): ?><?php echo wagesArrCn($improve['wages']); else: ?>未填写<?php endif; ?></option>
                <?php if(is_array($wagesarr) || $wagesarr instanceof \think\Collection || $wagesarr instanceof \think\Paginator): $i = 0; $__LIST__ = $wagesarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">星座</label>
              <div class="layui-input-inline">
               <select name="sign" lay-verify="required" lay-search="">
                <option value="<?php echo !empty($improve['sign'])?$improve['sign']:''; ?>"><?php if($improve['sign']): ?><?php echo signArrCn($improve['sign']); else: ?>未填写<?php endif; ?></option>
                <?php if(is_array($signarr) || $signarr instanceof \think\Collection || $signarr instanceof \think\Paginator): $i = 0; $__LIST__ = $signarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">个性</label>
              <div class="layui-input-inline">
                <textarea name="character" placeholder="仅限50字" class="ly-textarea"><?php echo !empty($improve['character'])?$improve['character']:''; ?></textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">从事行业</label>
              <div class="layui-input-inline">
                <input type="text" name="industry" placeholder="从事行业" autocomplete="off" class="ly-input" value="<?php echo !empty($improve['industry'])?$improve['industry']:''; ?>">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">兴趣爱好</label>
              <div class="layui-input-inline">
                <input type="text" name="intrste" placeholder="未填写" autocomplete="off" class="ly-input" value="<?php echo !empty($improve['intrste'])?$improve['intrste']:''; ?>">
              </div>
            </div>
            <div style="text-align: center;">
              <button class="layui-btn" lay-submit="" lay-filter="improve" style="background-color: #ff78a2;width: 60%;border-radius: 50px;">立即提交</button>
            </div>
        </form>
      </div>
      <div class="layui-tab-item">
        <div class="layui-form-item" style="border-bottom: none;">
          <label class="ly-form-label">头像</label>
          <div class="upload-img">
          <div class="file-box">
          <input type="file" name="file" class="file-btn" id="inputImage"/>
          <i class="layui-icon" style="font-size: 18px;position: relative;top: 2px;"></i> 上传文件
          </div>
          <input name="userzm" value="" class="layui-input" type="hidden">
            <div class="base-img" style="margin-top: 20px;width: 100%;text-align: center;">
            <img id="image" style="width: 80%;min-height: 150px;border: 1px solid #eee;border-radius: 5px;" src="<?php echo !empty($ret['headimg'])?$ret['headimg']:'/wap/main/images/jiaoyou_face_nofind.jpg'; ?>">
            </div>
          </div>
          <div class="layui-form-item" style="border-bottom: none;margin-top: 10px;display: none;" id="gnitem">
            <div style="text-align: center;">
              <button class="layui-btn" id="rotate-left"  lay-submit>左旋</button>
              <button class="layui-btn" id="rotate-right" lay-submit>右旋</button>
              <button class="layui-btn" id="reset-images" lay-submit>重置</button>
              <button class="layui-btn" id="uploadaction" lay-submit>保存</button>
            </div>
          </div>
        </div>  
      </div>  
	    <div class="layui-tab-item">
        <form class="layui-form" action="">
            <div class="layui-form-item">
              <label class="ly-form-label">学历</label>
              <div class="layui-input-inline">
               <select name="yq_edu" lay-search="">
                <option value="<?php echo !empty($yaoqiu['yq_edu'])?$yaoqiu['yq_edu']:''; ?>"><?php if($yaoqiu['yq_edu']): ?><?php echo eduArrCn($yaoqiu['yq_edu']); else: ?>不限制<?php endif; ?>
                </option>
                <?php if(is_array($eduarr) || $eduarr instanceof \think\Collection || $eduarr instanceof \think\Paginator): $i = 0; $__LIST__ = $eduarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">月薪</label>
              <div class="layui-input-inline">
                <select name="yq_wages" lay-search="">
                <option value="<?php echo !empty($yaoqiu['yq_wages'])?$yaoqiu['yq_wages']:'不限制'; ?>"><?php if($yaoqiu['yq_wages']): ?><?php echo wagesArrCn($yaoqiu['yq_wages']); else: ?>不限制<?php endif; ?></option>
                <?php if(is_array($wagesarr) || $wagesarr instanceof \think\Collection || $wagesarr instanceof \think\Paginator): $i = 0; $__LIST__ = $wagesarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">年龄</label>
              <div class="layui-input-inline">
               <select name="yq_age" lay-search="">
                <option value="<?php echo !empty($yaoqiu['yq_age'])?$yaoqiu['yq_age']:''; ?>"><?php echo !empty($yaoqiu['yq_age'])?$yaoqiu['yq_age']:'不限制'; ?></option>
                <?php if(is_array($yeararritem) || $yeararritem instanceof \think\Collection || $yeararritem instanceof \think\Paginator): $i = 0; $__LIST__ = $yeararritem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">身高</label>
              <div class="layui-input-inline" style="width: 22%;display: inline-block;margin:0px;">
               <select name="yq_stature_min" lay-search="">
                <option value="<?php echo !empty($yaoqiu['yq_stature_min'])?$yaoqiu['yq_stature_min']:''; ?>"><?php echo !empty($yaoqiu['yq_stature_min'])?$yaoqiu['yq_stature_min']:'不限'; ?></option>
                <?php if(is_array($starr) || $starr instanceof \think\Collection || $starr instanceof \think\Paginator): $i = 0; $__LIST__ = $starr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
              <span style="color: #666;margin-left: 20px"> - </span> 
              <div class="layui-input-inline" style="width: 22%;display: inline-block;margin: 0 20px;">
               <select name="yq_stature_max" lay-search="">
                <option value="<?php echo !empty($yaoqiu['yq_stature_max'])?$yaoqiu['yq_stature_max']:''; ?>"><?php echo !empty($yaoqiu['yq_stature_max'])?$yaoqiu['yq_stature_max']:'不限'; ?></option>
                <?php if(is_array($starr) || $starr instanceof \think\Collection || $starr instanceof \think\Paginator): $i = 0; $__LIST__ = $starr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">星座</label>
              <div class="layui-input-inline">
               <select name="yq_sign" lay-search="">
                <option value="<?php echo !empty($yaoqiu['yq_sign'])?$yaoqiu['yq_sign']:''; ?>"><?php if($yaoqiu['yq_sign']): ?><?php echo signArrCn($yaoqiu['yq_sign']); else: ?>请选择<?php endif; ?></option>
                <?php if(is_array($signarr) || $signarr instanceof \think\Collection || $signarr instanceof \think\Paginator): $i = 0; $__LIST__ = $signarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">接受离异</label>
              <div class="layui-input-inline">
               <select name="yq_divorced" lay-verify="required" lay-search="">
                <option value="1">接受</option>
                <option value="2" selected="">不接受</option>
              </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">从事行业</label>
              <div class="layui-input-inline">
                <input type="text" name="yq_industry" placeholder="从事行业" autocomplete="off" class="ly-input" value="<?php echo !empty($yaoqiu['yq_industry'])?$yaoqiu['yq_industry']:''; ?>">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="ly-form-label">兴趣爱好</label>
              <div class="layui-input-inline">
                <input type="text" name="yq_intrste" placeholder="未填写" autocomplete="off" class="ly-input" value="<?php echo !empty($yaoqiu['yq_intrste'])?$yaoqiu['yq_intrste']:''; ?>">
              </div>
            </div>
            <div style="text-align: center;">
              <button class="layui-btn" lay-submit lay-filter="yaoqiu" style="background-color: #ff78a2;width: 60%;border-radius: 50px;">立即提交</button>
            </div>
        </form>
      </div>
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
<script type="text/javascript">
$(function(){
    var $image = $('#image');
    var originalImageURL = $image.attr('src');
    var uploadedImageName = 'cropped.jpg';
    var uploadedImageType = 'image/jpeg';
    var uploadedImageURL;
    var URL = window.URL || window.webkitURL;
    var $inputImage = $('#inputImage');
    var options = {
      aspectRatio: 9 / 9,
      preview: '.img-preview',
      
    };
  
  $('#rotate-right').click(function(){
    $image.cropper('rotate',90);
  });
  $('#rotate-left').click(function(){
    $image.cropper('rotate',-90);
  });
  $('#reset-images').click(function(){
    $image.cropper('reset');
  })  
  $('#uploadaction').click(function(){
    $canvas=$image.cropper('getCroppedCanvas');
    $canvas.toBlob(function (blob) {
      var formData = new FormData();
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
      formData.append('croppedImage', blob);
      $.ajax({
        url:"<?php echo url('upload/head'); ?>",
        method: "POST",
        data: formData,
        dataType:'json',
        processData: false,
        contentType: false,
        success: function (e) {
          if(e.code == 200){
            layer.close(loading);
            layer.msg(e.msg, {icon: 1, anim: 6, time: 1000},function(){
              $.post('<?php echo url("user/headimg"); ?>',{imgurl:e.url},function(data){
                if(data.code==1){
                  location.reload();
                }
              });
            });
          }else{
            layer.close(loading);
            layer.msg(e.msg, {icon: 2, anim: 6, time: 1000});
          }
        },
        error: function () {
          layer.msg('Upload error');
        }
      });
    },"image/jpeg");
  });
  if (URL) {
    $inputImage.change(function () {
      var files = this.files;
      var file;
      $("#gnitem").css('display','block');
      $image.cropper(options);
      if (!$image.data('cropper')) {
        return;
      }
      if (files && files.length) {
        file = files[0];
        if (/^image\/\w+$/.test(file.type)) {
          uploadedImageName = file.name;
          uploadedImageType = file.type;
          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
          }
          uploadedImageURL = URL.createObjectURL(file);
          $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
          $inputImage.val('');
        } else {
          window.alert('Please choose an image file.');
        }
      }
    });
  } else {
    $inputImage.prop('disabled', true).parent().addClass('disabled');
  }
  
})
</script>
<script>
layui.use(['element','form','upload','layer'], function(){
  var element = layui.element
     ,form    = layui.form
     ,jq = layui.jquery
     ,layer = layui.layer
     ,upload = layui.upload;
      var layid = location.hash.replace(/^#info=/, '');
      element.tabChange('info', layid); //假设当前地址为：http://a.com#test1=222，那么选项卡会自动切换到“发送消息”这一项
      
      //监听Tab切换，以改变地址hash值
      element.on('tab(info)', function(){
        location.hash = 'info='+ this.getAttribute('lay-id');
      });
     form.verify({
        username: function(value, item){ //value：表单的值、item：表单的DOM对象
          if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
            return '正确输入姓名';
          }
          if(/(^\_)|(\__)|(\_+$)/.test(value)){
            return '正确输入姓名';
          }
          if(/^\d+\d+\d$/.test(value)){
            return '正确输入姓名';
          }
        }
        ,ckphone:function(value,item){
          if(!(/^0?1[3|4|5|6|7|8][0-9]\d{8}$/).test(value)){
            return '填写正确的手机号'
          }
        }
      });
     form.on('submit(addinfo)',function(data){
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
      var param = data.field;
      jq.post('<?php echo url("user/addinfo"); ?>',param,function(data){
        if(data.code==1){
          layer.close(loading);
          layer.msg(data.msg, {icon: 1, anim: 6, time: 1000},function(){
            location.reload();
          });
        }else{
          layer.close(loading);
          layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
        }
      })
      return false;
     })
     //完善资料
     form.on('submit(improve)',function(data){
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
      var param = data.field;
      jq.post('<?php echo url("user/improve"); ?>',param,function(data){
        if(data.code==1){
          layer.close(loading);
          layer.msg(data.msg, {icon: 1, anim: 6, time: 1000},function(){
            location.reload();
          });
        }else{
          layer.close(loading);
          layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
        }
      })
      return false;
     })
     //要求
     form.on('submit(yaoqiu)',function(data){
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
      var param = data.field;
      jq.post('<?php echo url("user/yaoqiu"); ?>',param,function(data){
        if(data.code==1){
          layer.close(loading);
          layer.msg(data.msg, {icon: 1, anim: 6, time: 1000},function(){
            location.reload();
          });
        }else{
          layer.close(loading);
          layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
        }
      })
      return false;
     })
     $('.view-item').on('click',function(){
      layer.open({
        type: 1,
        title:'选择模板',
        area: ['90%', '636px'],
        btn:['确认','取消'],
        btnAlign: 'c',
        content: '<div class="select_muban_inner"><div class="inner"><ul id="select_muban_inner_inner" style="height: 566px;"><li data-val="1" class="selected"><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_1.jpg" alt=""><p class="tit">花好月圆</p></li><li data-val="2" class=""><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_2.jpg" alt=""><p class="tit">大花轿</p></li><li data-val="3" class=""><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_3.jpg" alt=""><p class="tit">相伴一生</p></li><li data-val="4" class=""><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_4.jpg" alt=""><p class="tit">情窦初开</p></li><li data-val="5" class=""><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_5.jpg" alt=""><p class="tit">等待缘分</p></li><li data-val="6" class=""><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_6.jpg" alt=""><p class="tit">想有个家</p></li><li data-val="7" class=""><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_7.jpg" alt=""><p class="tit">才子佳人</p></li><li data-val="8" class=""><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_8.jpg" alt=""><p class="tit">相濡以沫</p></li><li data-val="9" class=""><img src="/wap/main/images/tempimgs/jiaoyou_muban_wap_9.jpg" alt=""><p class="tit">夕阳相伴</p></li></ul></div></div>',
        yes:function(){
          $val=$('.inner .selected').attr('data-val');
          $name=$('.inner .selected').find('.tit').html();
          $('input[name=tempnum]').val($val);
          $('input[name=tempcn]').val($name);
          $('.view-item > span').text($name);
          layer.closeAll();
        }
      });
      //模板选择
      $('.inner').find('li').each(function(data){
        $(this).click(function(){ 
          $(this).addClass('selected').siblings().removeClass('selected');
        })
      })
     })
});
</script>
</div>
</body>
</html>
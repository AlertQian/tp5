<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\wamp\www\tp5\public/../application/index\view\index\index.html";i:1528616726;s:57:"D:\wamp\www\tp5\application\index\view\layout\layout.html";i:1533980281;s:56:"D:\wamp\www\tp5\application\index\view\index\header.html";i:1534300679;s:56:"D:\wamp\www\tp5\application\index\view\index\footer.html";i:1528594257;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>征婚交友-门户网站系统</title>
<meta name="keywords" content="征婚交友关键词，关键词，关键关键词" />
<meta name="description" content="认真严肃的同城征婚交友平台，拒绝非结婚目的的交友！" />
<link href="/fds/css/jiaoyou.css" rel="stylesheet" />
<link href="/fds/css/g2013.css" type="text/css" rel="stylesheet" />
<link href="/fds/css/common.css" type="text/css" rel="stylesheet" />
<link href="/fds/css/head.css" type="text/css" rel="stylesheet" />

<script src="/fds/js/jquery-1.11.3.min.js"></script>
<script src="/fds/js/head.js"></script>
<script src="/static/layer/layer.js"></script>

</head>
<body>
<div class="wrapper head8">
<div class="public-top-layout">
	<div class="topBar w-1200">
		<div class="user-entry">
			<img src="/fds/images/index8/icon.png">
			<a href="" class="display1 mb_false_0">手机版</a><span class="display1 mb_false_0"></span>
			<a href="" class="display1 mb_true_0">返回手机版</a><span class="display1 mb_true_0"></span>
			<a href="" target="_blank">客户端</a><span></span>
			<a href="javascript:void(0);" onClick="window.external.AddFavorite('https://www.mh163k.com/','163k地方门户网站系统');return false;">收藏本站</a>            
		</div>
		<div class="quick-menu login_info" id="login_info">
			<dl style="width:84px;"><dt>你好，<a href="<?php echo url('login/index'); ?>" class="cur">请登录</a></dt></dl><dl><dt class="zn"><a href="<?php echo url('login/reg'); ?>">免费注册</a></dt></dl><dl class="xian"></dl><dl><dt class="zn"><a href="">QQ登录</a></dt></dl><dl class="xian"></dl><dl><dt class="zn"><a href="">微信登录</a></dt></dl><dl class="xian"></dl>
		   <dl> 
	           <dt class="zn"><a href="">积分商城</a></dt>
	       </dl>
	       <dl class="xian"></dl>
	      <dl class="long">
	        <dt><a href="javascript:void(0);">我的中心</a><i></i></dt>
	        <dd>
	          <ul>
	            <li><a href="">基本资料</a></li>
	            <li><a href="">我的收藏</a></li>
				<li><a href="">我的订单</a></li>
				<li><a href="">我的信息</a></li>
	            <li><a href="">修改密码</a></li>
	          </ul>
	        </dd>
	      </dl>
		  <dl class="xian"></dl>
		  <dl class="long">
	        <dt><a href="javascript:void(0);" style="color:#f78115;">工作平台</a><i></i></dt>
	        <dd>
	          <ul>
			    <li><a href="" target="_blank">商家平台</a></li>
			    <li><a href="" target="_blank">企业平台</a></li>
	            <li><a href="" target="_blank">中介平台</a></li>
	            <li><a href="" target="_blank">配送员</a></li>
				<li><a href="" target="_blank">会员中心</a></li>
	          </ul>
	        </dd>
	      </dl>
	      <dl class="xian"></dl>
	      <dl class="long">
	        <dt><a href="javascript:void(0);">快速发布</a><i></i></dt>
	        <dd>
	          <p><a href="" target="_blank">生活信息</a></p>
				<p><a href="" target="_blank">求职简历</a></p>
				<p><a href="" target="_blank">招聘信息</a></p>
				<p><a href="" target="_blank">新闻投稿</a></p>
				<p><a href="" target="_blank">登记店铺</a></p>
				<p><a href="" target="_blank">发布商品</a></p>
				<p><a href="" target="_blank">房源出租</a></p>
				<p><a href="" target="_blank">房源出售</a></p>
	        </dd>
	      </dl>
	      <dl class="xian"></dl>
	      <dl class="long">
	        <dt><a href="javascript:void(0);">网站导航</a><i></i></dt>
	        <dd>
	          <ul>
	            <li><a href="">帮助中心</a></li>
	            <li><a href="">留言建议</a></li>
	            <li><a href="">联系我们</a></li>
	          </ul>
	        </dd>
	      </dl>
	    </div>
	</div>
</div>

<div class="content w-1200 clearfix">
<style type="text/css">
.footWrap { margin-top:0;}
.jiaoyou { width:1200px; padding:15px 15px 0; margin:0 auto; border:1px solid #eee; background-color:#fff;}
#connections_list tr,#connections_list td { display:block;}
</style>
</div>

	<div class="content" style="background-color:#fff2f6; padding-bottom:35px;">
		<div class="jiaoyouBanner" style="background:url('/fds/images/jiaoyou_banner.jpg') no-repeat 50% 0;">
			<a href="https://www.mh163k.com/jiaoyou/connections.aspx?action=add" class="btn">现在加入</a>
		</div>
		<div class="w-1200"><div style="margin-bottom:20px;">交友首页通栏自定义html广告</div></div>
		<div class="jiaoyou">
			<div class="fliter" id="jiaoyou_filter">
				<form id="form_filter" onSubmit="return checkMyForm();">
				<input name="p" type="hidden" value="1" />
				<div style="display:none;">
					<select name="sex" id="sex">
						<option value="-1" >性别</option>
						<option value="1" >男</option>
						<option value="0" >女</option>
					</select>
					<select name="real" id="real">
						<option value="-1" >是否认证</option>
						<option value="1" >已认证</option>
						<option value="0" >未认证</option>
					</select>
					
	
	<span class="a">分类：</span>
	<span class="b">
	<select name="classifyid" id="classifyid" onclick="">
	
	<option value=""  >分类</option>
	
	<option value="1" >找女友</option>
	
	<option value="2" >找男友</option>
	
	</select>
	<span id="other_classifyid_1" style="display:none;"> </span>
	</span>
	
	
	<span class="a">年龄：</span>
	<span class="b">
	<select name="chryears" id="chryears" onclick="">
	
	<option value=""   >年龄</option>
	
	<option value="1"  >50后</option>
	
	<option value="2"  >55后</option>
	
	<option value="3"  >60后</option>
	
	<option value="4"  >65后</option>
	
	<option value="5"  >70后</option>
	
	<option value="6"  >75后</option>
	
	<option value="7"  >80后</option>
	
	<option value="8"  >85后</option>
	
	<option value="9"  >90后</option>
	
	<option value="10" >95后</option>
	
	<option value="11" >00后</option>
	
	</select>
	<span id="other_chryears_1" style="display:none;"> - </span>
	</span>
	
	
	<span class="a">月薪：</span>
	<span class="b">
	<select name="yuexin" id="yuexin" onclick="">
	
	<option value="" >月薪</option>
	
	<option value="1"  >1000元以下</option>
	
	<option value="2"  >1000-2000元</option>
	
	<option value="3" >2000-3000元</option>
	
	<option value="4" >3000-4000元</option>
	
	<option value="5" >4000-5000元</option>
	
	<option value="6" >5000-8000元</option>
	
	<option value="7" >8000-10000元</option>
	
	<option value="8" >10000元以上</option>
	
	</select>
	<span id="other_yuexin_1" style="display:none;"> - </span>
	</span>
	
	
	<span class="a">身高：</span>
	<span class="b">
	<select name="height" id="height" onclick="">
	
	<option value=""   >身高</option>
	
	<option value="1"  >150</option>
	
	<option value="6"  >155</option>
	
	<option value="11" >160</option>
	
	<option value="16" >165</option>
	
	<option value="21" >170</option>
	
	<option value="26" >175</option>
	
	<option value="31" >180</option>
	
	<option value="36" >185</option>
	
	<option value="41" >190</option>
	
	<option value="46" >195</option>
	
	<option value="51" >200</option>
	
	</select>
	<span id="other_height_1" style="display:none;"> - <select name='height1' id='height1' > <option value=''>身高</option><option value='1' >150</option><option value='6' >155</option><option value='11' >160</option><option value='16' >165</option><option value='21' >170</option><option value='26' >175</option><option value='31' >180</option><option value='36' >185</option><option value='41' >190</option><option value='46' >195</option><option value='51' >200</option></select></span>
	</span>
	
	
	<span class="a">感情：</span>
	<span class="b">
	<select name="ganqing" id="ganqing" onclick="">
	
	<option value=""  >感情</option>
	
	<option value="1" >单身</option>
	
	<option value="2" >离异</option>
	
	<option value="3" >丧偶</option>
	
	</select>
	<span id="other_ganqing_1" style="display:none;"> - </span>
	</span>
	
	
	<span class="a">学历：</span>
	<span class="b">
	<select name="xueli" id="xueli" onclick="">
	
	<option value=""  >学历</option>
	
	<option value="1"  >初中及以下</option>
	
	<option value="2"  >高中/中专</option>
	
	<option value="3"   >大学专科</option>
	
	<option value="4"   >大学本科</option>
	
	<option value="5"   >研究生</option>
	
	<option value="6"  >博士及以上</option>
	
	</select>
	<span id="other_xueli_1" style="display:none;"> -</span>
	</span>
	
				</div>
				<ul class="clearfix">
					<li class="col tit">为您寻找满意的Ta</li>
					<li class="col">
						<div class="select" data-name="sex" style="width:85px;">
							<span style="display:none;"></span>
							<p class="select_cur">性别</p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col">
						<div class="select" data-name="classifyid" style="width:90px;">
							<p class="select_cur">找男友</p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col">
						<div class="select" data-name="chryears" style="width:85px;">
							<p class="select_cur">年龄</p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col">
						<div class="select" data-name="xueli" style="width:120px;">
							<p class="select_cur">学历</p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col">
						<div class="select" data-name="height" style="width:80px;">
							<p class="select_cur"></p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col txt">至</li>
					<li class="col">
						<div class="select" data-name="height1" style="width:80px;">
							<p class="select_cur"></p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col">
						<div class="select" data-name="yuexin" style="width:150px;">
							<p class="select_cur">月薪</p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col">
						<div class="select" data-name="ganqing" style="width:80px;">
							<p class="select_cur">感情</p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col">
						<div class="select" data-name="real" style="width:100px;">
							<p class="select_cur">是否认证</p>
							<ul class="inner po"></ul>
						</div>
					</li>
					<li class="col btn"><button class="submit" type="submit">搜索</button></li>
				</ul>
				</form>
			</div>
			<div class="jiaoyou_nav">
				<ul class="clearfix" id="orderbyList">
					<li id="orderby_"><a href="?orderby=" onclick="return getPagingGlobal({'orderby':'','p':'1'});" data-orderby="">首页推荐</a></li>
					<li id="orderby_1"><a href="?orderby=1" onclick="return getPagingGlobal({'orderby':'1','p':'1'});" data-orderby="1">最新加入</a></li>
					<li id="orderby_2"><a href="?orderby=2" onclick="return getPagingGlobal({'orderby':'2','p':'1'});" data-orderby="2">女神榜</a></li>
					<li id="orderby_3"><a href="?orderby=3" onclick="return getPagingGlobal({'orderby':'3','p':'1'});" data-orderby="3">男神榜</a></li>
					<li id="orderby_4"><a href="?orderby=4" onclick="return getPagingGlobal({'orderby':'4','p':'1'});" data-orderby="4">鲜花榜</a></li>
					<li id="orderby_5"><a href="?orderby=5" onclick="return getPagingGlobal({'orderby':'5','p':'1'});" data-orderby="5">收藏榜</a></li>
				</ul>
			</div>
			<div class="jiaoyou_index_list" id="jiaoyou_index_list">
				<ul class="clearfix" id="connections_list">
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_70.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205827_819900.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">1</div><div class="left">6</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_70.html" target="_blank">隐隐的湖光</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>80后</span><span>165cm</span><span>大学专科</span></p>
							<p class="info">小太阳一枚，期待跟有趣的他，过好有趣的生活。</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_70.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_81.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205918_171000.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">6</div><div class="left">13</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_81.html" target="_blank">独倚画屏</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>90后</span><span>164cm</span><span>大学专科</span></p>
							<p class="info">我在等一个我可以在他身上找出一百个缺点却还是执意要爱的人</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_81.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_80.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205913_891800.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">3</div><div class="left">6</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_80.html" target="_blank">爱笑的女孩</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>00后</span><span>164cm</span><span>高中/中专</span></p>
							<p class="info">我的宿命就是遇到了你，一瞬间凝固停止延续到永远</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_80.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_79.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205908_425200.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">2</div><div class="left">1</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_79.html" target="_blank">弹钢琴的貓</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>95后</span><span>168cm</span><span>大学专科</span></p>
							<p class="info">上帝賜我一雙會流淚的雙眼，我要找到能拭去我淚水的人</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_79.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_78.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205903_755300.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">3</div><div class="left">11</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_78.html" target="_blank">空山牧歌</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>90后</span><span>166cm</span><span>研究生</span></p>
							<p class="info">没有风花雪月只求实实在在</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_78.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_77.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205859_155600.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">1</div><div class="left">3</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_77.html" target="_blank">微微</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>85后</span><span>174cm</span><span>高中/中专</span></p>
							<p class="info">活在当下，尽情享受青春吧……</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_77.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_76.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205855_810600.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">3</div><div class="left">19</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_76.html" target="_blank">迷鹿</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>85后</span><span>172cm</span><span>研究生</span></p>
							<p class="info">比较欣赏成熟稳重，浪漫有情调，喜欢享受生活，阳光开朗的大男孩</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_76.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_75.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205852_314600.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">1</div><div class="left">2</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_75.html" target="_blank">不染凡尘</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>75后</span><span>168cm</span><span>大学专科</span></p>
							<p class="info">乐观向上，随遇而安，不喜欢做勉强的事</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_75.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_74.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205848_428900.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">2</div><div class="left">4</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_74.html" target="_blank">丸子</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>00后</span><span>167cm</span><span>大学本科</span></p>
							<p class="info">爱的最高境界是习惯</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_74.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_73.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205842_740100.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">4</div><div class="left">47</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_73.html" target="_blank">茉绮</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>95后</span><span>165cm</span><span>高中/中专</span></p>
							<p class="info">玩这个纯粹是碰碰运气，嘻嘻万一遇到对的人了呢</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_73.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_72.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205838_550500.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">4</div><div class="left">6</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_72.html" target="_blank">荷叶小露</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>90后</span><span>176cm</span><span>大学本科</span></p>
							<p class="info">希望找一个可以聊得来的soulmate 懂彼此 相伴一生</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_72.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex0">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_71.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115205833_232900.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">3</div><div class="left">8</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_71.html" target="_blank">清淡绿茶</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>85后</span><span>167cm</span><span>大学专科</span></p>
							<p class="info">希望大家都可以早日脱单</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_71.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_94.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203759_885100.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">1</div><div class="left">8</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_94.html" target="_blank">走在冷风中</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>00后</span><span>196cm</span><span>研究生</span></p>
							<p class="info">相信这个世界还有一个人为你默默在等待。</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_94.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_93.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203750_331100.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">2</div><div class="left">4</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_93.html" target="_blank">安然如斯</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>95后</span><span>162cm</span><span>大学专科</span></p>
							<p class="info">希望能有个懂我的人分享每天的成功和喜悦</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_93.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_92.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203743_830900.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">2</div><div class="left">7</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_92.html" target="_blank">众里寻她</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>90后</span><span>178cm</span><span>高中/中专</span></p>
							<p class="info">百善孝为先,家和万事兴</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_92.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_91.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203738_083700.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">1</div><div class="left">2</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_91.html" target="_blank">橘子熊</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>85后</span><span>178cm</span><span>大学本科</span></p>
							<p class="info">你就一天不知道哪一个才是陪你走到最后的人</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_91.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_90.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203732_996000.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">1</div><div class="left">4</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_90.html" target="_blank">浓郁咖啡香</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>80后</span><span>189cm</span><span>博士及以上</span></p>
							<p class="info">请认真看我下面的资料有惊喜哦  嘻嘻~</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_90.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_89.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203727_102700.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">3</div><div class="left">3</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_89.html" target="_blank">阿龙</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>70后</span><span>185cm</span><span>大学专科</span></p>
							<p class="info">热爱生活，热爱大自然，而且喜欢到处旅游</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_89.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_88.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203721_611700.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">0</div><div class="left">0</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_88.html" target="_blank">梦醒时分</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>75后</span><span>163cm</span><span>大学本科</span></p>
							<p class="info">生活不是童话,所以我不求童话般的结局</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_88.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_87.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203716_639000.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display1">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">1</div><div class="left">4</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_87.html" target="_blank">吴源</a><span class="rz_1">是否认证</span></p>
							<p class="tag"><span>00后</span><span>178cm</span><span>高中/中专</span></p>
							<p class="info">一直在寻找我的My girl！</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_87.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
					<li class="sex1">
						<a href="https://www.mh163k.com/jiaoyou/jiaoyou_86.html" target="_blank" class="img"><img src="..//uploadfile/connections_user/2017/01-15/20170115203711_616500.png" onerror="this.src='https://www.mh163k.com/template/pc/main/default/images/kuaison_nofind_product.gif';this.onerror='';" alt="" /><span class="tj display0">推荐会员</span><div class="po clearfix" style="display:block;"><div class="right">0</div><div class="left">0</div></div></a>
						<div class="txt">
							<p class="tit"><a href="https://www.mh163k.com/jiaoyou/jiaoyou_86.html" target="_blank">一世相伴</a><span class="rz_0">是否认证</span></p>
							<p class="tag"><span>95后</span><span>188cm</span><span>大学专科</span></p>
							<p class="info">是我的那个她吗？</p>
							<a href="https://www.mh163k.com/jiaoyou/jiaoyou_86.html" target="_blank" class="btn">查看资料</a>
						</div>
					</li>
					
				</ul>
				<div class="pageNavigation" id="pageNavigation"><em class="firstpage"><span class="kill">&lt;</span></em> <span class="current">1</span> <a href="#" onclick="return getPagingGlobal({'p':'2'});"  >2</a> <a href="#" onclick="return getPagingGlobal({'p':'3'});"  >3</a> <em class="endpage"><a href="#" onclick="return getPagingGlobal({'p':'2'});"  title="下一页">&gt;</a></em></div>
			</div>
		</div>
	</div>
	</div>


<div class="footWrap clearfix" id="footer">
	<div class="foot_Top clearfix">
		<div class="foot_box clearfix">
			<div class="foot_TL">
				<h2>客服电话</h2>
				<span>4006755354</span>
				<p>工作时间 周一至周六 8:00-17:30</p>
				<b>客服QQ<a href="//wpa.qq.com/msgrd?v=3&uin=910002968&site=qq&menu=yes" target="_blank"><img src="https://www.mh163k.com/template/pc/main/default/images/button_11.gif" alt="点击咨询"></a></b>
			</div>
			<div class="foot_TM">
				<dl>
					<dt>购物</dt>
					<dd><a href="https://www.mh163k.com/mall/">省啦商城</a></dd>
					<dd><a href="https://www.mh163k.com/k/">同城快店</a></dd>
					<dd><a href="https://www.mh163k.com/company/join.aspx">商家入驻</a></dd>
					<dd><a href="https://www.mh163k.com/member/userindex_s.aspx">商家管理</a></dd>
				</dl>
				<dl>
					<dt>供求</dt>
					<dd><a href="https://www.mh163k.com/live/default.html?colname=1">跳蚤市场</a></dd>
					<dd><a href="https://www.mh163k.com/live/default.html?colname=5">交友征婚</a></dd>
					<dd><a href="https://www.mh163k.com/live/default.html?colname=6">商业服务</a></dd>
					<dd><a href="https://www.mh163k.com/live/default.html?colname=3">同城活动</a></dd>
				</dl>
				<dl>
					<dt>房产</dt>
					<dd><a href="https://www.mh163k.com/house/loupan.html">新楼盘</a></dd>
					<dd><a href="https://www.mh163k.com/house/chushou.html">二手房</a></dd>
					<dd><a href="https://www.mh163k.com/house/chuzhu.html">出租房</a></dd>
					<dd><a href="https://www.mh163k.com/house/zhongjie.html">找中介</a></dd>
				</dl>
				<dl>
					<dt>招聘</dt>
					<dd><a href="https://www.mh163k.com/job/zhiwei.html?key=0">找工作</a></dd>
					<dd><a href="https://www.mh163k.com/job/rencai.html">找人才</a></dd>
					<dd><a href="https://www.mh163k.com/member/myzhiwei.aspx?action=add">发招聘</a></dd>
					<dd><a href="https://www.mh163k.com/member/myjianli.aspx?styleid=1">填简历</a></dd>
				</dl>
			</div>
			<div class="foot_TR">
				<div class="TR_LL">
					<p>微信公众号</p>
					<a href="javascript:void(0);"><img src="../UploadFile/adv/2018/4-10/201804101428416541969.jpg" alt="nihao163k" /></a> 
				</div>
				<div class="TR_RR">
					<p>APP客户端</p>	
					<a href="http://app.163k.com/download.aspx?id=12299" target="_blank"><img src="https://www.mh163k.com/../UploadFile/index/2015/9-7/201509071154513472674.png"></a> 
				</div>
			</div>
		</div>
	</div>
	<div class="foot_Mid clearfix">
		<div class="foot_MC">
			<ul class="clearfix">
				<li class="first"><a href="javascript:void(0);" onClick="window.external.AddFavorite('https://www.mh163k.com/','163k地方门户网站系统');return false;">加为收藏</a></li><li><a href="https://www.mh163k.com/help/article_1.html" target="_blank">网站介绍</a></li><li><a href="https://www.mh163k.com/help/article_7.html" target="_blank">关于我们</a></li><li><a href="https://www.mh163k.com/help/article_10.html" target="_blank">服务条款</a></li><li><a href="https://www.mh163k.com/help/article_11.html" target="_blank">广告服务</a></li><li><a href="https://www.mh163k.com/help/article_12.html" target="_blank">招聘信息</a></li><li><a href="https://www.mh163k.com/help/article_14.html" target="_blank">免责声明</a></li><li><a href="https://www.mh163k.com/service/">留言反馈</a></li>
			</ul>
		</div>
	</div>
	<div class="foot_Bot clearfix">
		<p>Copyright @ 2003-2017 163k.com All Right Reserved @为互联网事业发展助跑 <a href="http://www.miitbeian.gov.cn/" target="_blank">皖ICP备11020229号</a> <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5858171'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/stat.php%3Fid%3D5858171%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></p>
	</div>
</div>
</div>

<div class="layer" id="fixed_menu">
	<ul>
		<li class="join"><a href="https://www.mh163k.com/jiaoyou/connections.aspx?action=add" class="iconB">我要加入</a></li>
		<li class="homepage"><a href="#" id="myzhuye" class="iconB">我的主页</a></li>
		<li class="data"><a href="https://www.mh163k.com/jiaoyou/connections.aspx?action=main" class="iconB">资料管理</a></li>
		<li class="gotop" id="top"><a href="#" class="iconB">返回顶部</a></li>
	</ul>
</div>
</body>
</html>
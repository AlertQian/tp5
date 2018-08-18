$(document).ready(function(){
	//显示、隐藏密码
	var if_eye_show = false;
	$('#showpwd').click(function(){
		if(!!if_eye_show){
			$(this).removeClass('on');
			$('#chrpwd').attr({'type':'password'});
			if_eye_show = false;
		}else{
			$(this).addClass('on');
			$('#chrpwd').attr({'type':'text'});
			if_eye_show = true;
		}
	});
	//判断电话号码
	function isPoneAvailable($str) {
	  var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;  
	  if (!myreg.test($str)) {  
	      return false;  
	  } else {  
	      return true;  
	  }  
	}
	//切换个人、商家值
	$("#sel_styleid .item").each(function(){
		$(this).click(function(){
			$(this).addClass('current').siblings().removeClass('current');
			$val=$(this).data("val");
			$("input[name=typeid]").val($val);
		});
	})
	//提交表单
	$('#reg_submit').click(function(e){
		e.preventDefault();
		var chrphone=$.trim($("#chrphone").val())
		   ,nickname=$("#nickname").val()
		   ,chrpwd  =$("#chrpwd").val()
		   ,token   =$("input[name=__token__]").val()
		   ,typeid  =$("input[name=typeid]").val();
		if(chrphone.length == 0 || !isPoneAvailable(chrphone)){
			layer.msg("请正确填写手机号");
			return false;
		}
		if(nickname.length == 0){
			layer.msg("请输入昵称");
			return false;
		}
		if(chrpwd.length == 0){
			layer.msg("请输入密码");
			return false;
		}
		
		$.ajax({
			url:"/wap/login/reg",
			type:"post",
			data:{chrphone:chrphone,nickname:nickname,chrpwd:chrpwd,typeid:typeid,__token__:token},
			success:function(data){
				layer.msg(data.msg);
			},
			error:function(){
				layer.msg('error'); 
			}
		});
	})
})
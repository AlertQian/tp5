$(document).ready(function(){
    var right="<img src='/fds/images/note_ok.gif'>";
    var error="<img src='/fds/images/note_error.gif'>";
    var phone_none_error=error+"<font color=red> 请正确填写手机号</font>";
    var user_none_error=error+"<font color=red> 请输入昵称</font>";
    var user_regist_error=error+"<font color=red> 该登录名已经被注册。</font>";
    var pwd_none_error=error+"<font color=red> 请输入密码</font>";
    var pwd_insert_align=error+"<font color=red > 请再一次输入遍您上面输入的密码</font>";
    var pwd_same_error=error+"<font color=red > 两次密码不符，请重新输入</font>";
    var pwd_length=error+"<font color=red > 密码长度6~16位</font>";
    
	function setmsg(obj,$msg){
		$(obj).css('visibility','visible').html($msg);
	}

	function isPoneAvailable($str) {
	  var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;  
	  if (!myreg.test($str)) {  
	      return false;  
	  } else {  
	      return true;  
	  }  
	}
	//手机号输入判断
    $("#chrphone").blur(function(){
    	var chrphone=$.trim($(this).val());
    	if(chrphone.length == 0 || !isPoneAvailable(chrphone)){
    		setmsg('#chkphone',phone_none_error);
    		return false;
    	}else{
    		setmsg('#chkphone',right);
    	}

    })
    //昵称输入判断
    $("#nickname").blur(function(){
    	var nickname=$.trim($(this).val());
    	if(nickname.length == 0){
    		setmsg('#chknickname',user_none_error);
    		return false;
    	}else{
    		setmsg('#chknickname',right);
    	}
    	
    })
    //再次密码输入判断
    $("#chrpwd1").blur(function(){
    	var chrpwd1=$.trim($(this).val()),
    	    chrpwd =$.trim($("#chrpwd").val());
    	if(chrpwd1.length == 0){
    		setmsg('#rchkpwd',pwd_insert_align);
    		return false;
    	}
		if(chrpwd !== chrpwd1){
			setmsg('#rchkpwd',pwd_same_error);
		    return false;
		}else{
			setmsg('#rchkpwd',right);
		}	
    
    })
    //密码输入判断
    $("#chrpwd").blur(function(){
    	var chrpwd=$.trim($(this).val());
    	if(chrpwd.length == 0){
    		setmsg('#chkpwd',pwd_none_error);
    		return false;
    	}else if(chrpwd.length < 6 || chrpwd.length > 16){
    		setmsg('#chkpwd',pwd_length);
    		return false;
    	}else{
    		setmsg('#chkpwd',right);
    	}
    	
    })
	$('#reg_submit').click(function(e){
		e.preventDefault();
		var chrphone=$.trim($("#chrphone").val())
		   ,nickname=$("#nickname").val()
		   ,chrpwd  =$("#chrpwd").val()
		   ,token   =$("input[name=__token__]").val()
		   ,chrpwd1 =$("#chrpwd1").val();
		if(chrphone.length == 0){
			setmsg('#chkphone',phone_none_error);
			return false;
		}
		if(nickname.length == 0){
			setmsg('#chknickname',user_none_error);
			return false;
		}
		if(chrpwd.length == 0){
			setmsg('#chkpwd',pwd_none_error);
			return false;
		}
		if(chrpwd1.length == 0){
			setmsg('#rchkpwd',pwd_insert_align);
			return false;
		}
		if(chrpwd !== chrpwd1){
			setmsg('#rchkpwd',pwd_same_error);
			return false;
		}
		$.ajax({
			url:"/index/login/reg",
			type:"post",
			data:{chrphone:chrphone,nickname:nickname,chrpwd:chrpwd,token:token},
			success:function(data){
				alert('ok');
			},
			error:function(){
				alert('error');
			}
		});
	})
})
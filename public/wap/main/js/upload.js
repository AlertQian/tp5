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

    /*$(document).on('click',".del",function(e){
        e.preventDefault();
        var index = $(".del").index(this)
        ,tag=","
        ,imgs=$('input[name=imgs]').val();
        arrList = imgs.split(",");
        $url=arrList[index];
        arrList.splice(index,1);
        var delimg=arrList.join(',');
        $.post("/wap/user/unsetimg",{urls:$url},function(data){
          if(data.code ==1){
              layer.msg(data.msg,{icon: 1,anim: 6, time: 2000});
            }else{
              layer.msg(data.msg,{icon: 2,anim: 6, time: 2000});
            } 
        });
		$("input[name=imgs]").val(delimg);
		$(this).parent('.my_prop_imgitem').remove();
    })*/
})

layui.use('upload',function(){
	var $ = layui.jquery
	,arr =new Array()
  ,upload = layui.upload;
  var uploadListIns = upload.render({
    elem: '#upimgFileBtn'
    ,url: "/wap/upload/upimgs"
    ,auto: false
    ,multiple: true
    ,bindAction:"#fabiao"
    ,choose: function(obj){
      //预读本地文件示例，不支持ie8
      var files = this.files = obj.pushFile();
      obj.preview(function(index, file, result){
        var html=$(['<div class="my_prop_imgitem"><div class="imgviewNode"><img src="'+ result +'" class="imgview" style="height: 81.75px;" alt="'+ file.name +'"></div><a href="javascript:;" class="del">删除</a></div>'].join(''));
        //$('#xiangce').append('<div class="my_prop_imgitem"><div class="imgviewNode"><img src="'+ result +'" class="imgview" style="height: 81.75px;" alt="'+ file.name +'"></div><a href="javascript:;" class="del">删除</a></div>')
        $('#xiangce').append(html);
  		  html.find(".del").on('click',function(){
    			delete files[index];
    			html.remove();
          uploadListIns.config.elem.next()[0].value = '';
  		  })
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

    

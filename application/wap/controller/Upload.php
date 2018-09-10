<?php
namespace app\wap\controller;
use think\Controller;

class Upload extends Controller
{
    public function head()
    {
    	$file = request()->file('file');
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    $image = \think\Image::open($file);
	    $size = $image->size();
	    
	    $thumbpath=ROOT_PATH . DS . '/public/uploads/imgthumb/'.date('Ymd');
	    if(!is_dir($thumbpath)){
	    	mkdir($thumbpath);
	    }
	    $name=time().rand(100, 1000).'.jpg';
	    $ret=$image->thumb(300, 300)->save($thumbpath. DS .$name);
	    $imgpath=ROOT_PATH . DS . '/public/uploads/imgupload';
	    if($file){
	        $info = $file->validate(['size'=>307200,'ext'=>'jpg,png,gif'])->move($imgpath);
	        if($info){
	        	$savename= $info->getSaveName();
	        	$url=$imgpath. DS .$savename;
	        	$response = array(
				   'url'  => $url 
				);
	        	echo json_encode($response);
	        }else{
	            // 上传失败获取错误信息
	            echo $file->getError();
	        }
	    }else{
	    	echo ROOT_PATH . DS.'------';
	    }
    }
    
}

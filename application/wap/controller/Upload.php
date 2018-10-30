<?php
namespace app\wap\controller;
use app\index\model\UserInfo;
use think\Controller;

class Upload extends Controller
{
    public function head()
    {
    	$file = request()->file('croppedImage');
    	
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    $image = \think\Image::open($file);
	    $thumbpath=ROOT_PATH . DS . 'public'. DS .'uploads'. DS .'headimg'. DS .date('Ymd');
	    if(!is_dir($thumbpath)){
	    	mkdir($thumbpath,0777,true);
	    }
	    $name=md5(time().rand(100, 1000)).'.png';
	    if($image){
	        $ret=$image->thumb(300, 300)->save($thumbpath. DS .$name);
	        $imgurl=DS .'uploads'. DS .'headimg'. DS .date('Ymd'). DS .$name;
	        if($ret){
	        	$response = array(
	        	   'code' => 200,
				   'msg'  => '上传成功',
				   'url'  => $imgurl
				);
	        	echo json_encode($response);
	        }else{
	            // 上传失败获取错误信息
	            $response = array(
				   'msg'  => '上传失败'
				);
	            echo json_encode($response);
	        }
	    }else{
	    	return '文件上传有误';
	    }
    }
}

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
	    $path=ROOT_PATH . 'uploads';
	    $name='123.jpg';
	    $ret= $image->thumb(150, 150)->save($path. DS .$name);
	    return $ret;
	    if($file){
	        $info = $file->validate(['size'=> 376200 ,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . DS . 'uploads');
	        if($info){
	        	
	        }else{
	            // 上传失败获取错误信息
	            //echo $file->getError();
	            echo "noo";
	        }
	    }else{
	    	echo ROOT_PATH . DS.'------';
	    }
    }
    
}

<?php
namespace app\wap\controller;
use think\Controller;

class Upload extends Controller
{
	private $file;
    public function head()
    {
    	$file = request()->file('file');
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    $image = \think\Image::open($file);
	    $size = $image->size();
	    $thumbpath=ROOT_PATH . DS . 'public'. DS .'uploads'. DS .'imgthumb'. DS .date('Ymd');
	    if(!is_dir($thumbpath)){
	    	mkdir($thumbpath,0777,true);
	    }
	    $name=time().rand(100, 1000).'.jpg';
	    $ret=$image->thumb(300, 300)->save($thumbpath. DS .$name);
	    $imgpath=ROOT_PATH . DS . 'public'. DS .'uploads'. DS .'imgupload';
	    if($file){
	        $info = $file->validate(['size'=>3017200,'ext'=>'jpg,png,gif'])->move($imgpath);
	        if($info){
	        	$savename= $info->getSaveName();
	        	$url=DS .'uploads'. DS .'imgupload'. DS .$savename;
	        	$response = array(
	        	   'code' => 200,
				   'msg'  => '上传成功'
				);
	        	echo json_encode($response);
	        }else{
	            // 上传失败获取错误信息
	            $msg = array(
				   'msg'  => $file->getError()
				);
	            echo json_encode($msg);
	        }
	    }else{
	    	return '文件上传有误';
	    }
    }
    public function uploadImg(){
    	$errorCode = $file['error'];

      if ($errorCode === UPLOAD_ERR_OK) {
        $type = exif_imagetype($file['tmp_name']);

        if ($type) {
          $extension = image_type_to_extension($type);
          $src = 'img/' . date('YmdHis') . '.original' . $extension;

          if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_JPEG || $type == IMAGETYPE_PNG) {

            if (file_exists($src)) {
              unlink($src);
            }

            $result = move_uploaded_file($file['tmp_name'], $src);

            if ($result) {
              $this -> src = $src;
              $this -> type = $type;
              $this -> extension = $extension;
              $this -> setDst();
            } else {
               $this -> msg = 'Failed to save file';
            }
          } else {
            $this -> msg = 'Please upload image with the following types: JPG, PNG, GIF';
          }
        } else {
          $this -> msg = 'Please upload image file';
        }
      } else {
        $this -> msg = $this -> codeToMessage($errorCode);
      }
    }
}

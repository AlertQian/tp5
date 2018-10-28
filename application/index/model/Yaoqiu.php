<?php
namespace app\index\model;
use think\Model;
/**
 * 
 */
class Yaoqiu extends Model
{
	public function add($data){
		$result = $this->isUpdate(false)->allowField(true)->save($data);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	//修改
	public function edit($data){
		$result = $this->isUpdate(true)->allowField(true)->save($data);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
}
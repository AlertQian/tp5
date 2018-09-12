<?php
namespace app\index\model;
use think\Model;
/**
 * 
 */
class UserInfo extends Model
{
	public function add($data){
		$result = $this->isUpdate(false)->allowField(true)->save($data);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
}
<?php
namespace app\filters;

#[\Attribute]
class Profile extends \app\core\AccessFilter{
	public function execute(){
		if(!isset($_SESSION['profile_id'])){
			header('location:/Profile/create?message=You need to create a profile to access products/order_items and payment functonalities.');
			return true;
		}
		return false;
	}
}
?>
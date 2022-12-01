<?php
namespace app\filters;

#[\Attribute]
class noProfile extends \app\core\AccessFilter{
	public function execute(){
		if(isset($_SESSION['profile_id'])){
			header('location:/Profile/edit?message=You need to edit a profile to access products/order_items and payment functonalities.');
			return true;
		}
		return false;
	}
}
?>
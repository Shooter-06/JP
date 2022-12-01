<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class MainUser extends \app\core\AccessFilter{
	public function execute(){
		header('Main/index');
		return true;
	}
}
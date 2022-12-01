<?php
namespace app\validators;

#[\Attribute]
class Name extends \app\core\Validator{
	public function isValidData($data){
		return preg_match('/\w+/u',$dat) != false;
	}
}
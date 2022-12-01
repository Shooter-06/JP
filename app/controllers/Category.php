<?php
namespace app\controllers;

class Category extends \app\core\Controller{

	#[\app\filters\Login]
 	public function add(){
		if(isset($_POST['action'])){
			
			$category= new \app\models\Category();
			$category->category_name = $_POST['name'];
			$category->insert();

			header("location:/Product/createCategory?Create a new category");
		}else{
			$this->view('Category/index');
		}
	}
}
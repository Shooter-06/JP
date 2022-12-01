<?php
namespace app\controllers;

#[\app\filters\MainUser]
class Inventory extends \app\core\Controller{
	public function index(){
		$products =new \app\models\inventory();
		$product=$products->getAll();
		$this->view('Main/index', $products);
	}

	public function search(){
		$productsFind = new \app\models\Product();
		$productsFind = $productsFind->search($_GET['searching']);
		$this->view('inventory/index', $productsFind);
	}
}
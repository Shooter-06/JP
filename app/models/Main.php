<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view('Main/index');
	}

	public function test(){
		$this->view('Cart/productsCart');
	}

	// Use: /Default/makeQRCode?data=protocol://address
	public function makeQRCode(){
		$data = $_GET['data'];
		\QRcode::png($data);
	}
}
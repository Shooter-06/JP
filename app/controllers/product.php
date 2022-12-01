<?php
namespace app\controllers;

class product extends \app\core\Controller{
	public function index(){
		$products = new \app\models\Product();
		$products = $products->getAll();
		$this->view('Product/index');
	}	

	public function indexPProducts(){
		$products = new \app\models\Product();
		$products = $products->getAll();
		$this->view('Product/indexPProducts',['products'=>$products]);
	}	

	public function create(){
		$profile = new \app\models\Profile();
		$profile=$profile->getProfile($_SESSION['profile_id']);

		$product = new \app\models\Product();
		
		if(isset($_POST['action'])){
			$filename = $this->saveFile($_FILES['picture']);

			$product->title = $_POST['title'];
			$product->description = $_POST['description'];
			$product->price = $_POST['price'];
			$product->picture = $filename;

			$product->profile_id=$_SESSION['profile_id'];
		
		// var_dump($_SESSION);
		
			if($filename){
				if(isset($_SESSION['picture']))
					unlink("images/$_SESSION[picture]");

				$_SESSION['picture'] = $filename;
			}
			if(isset($_SESSION['picture'])){
				$product->picture=$_SESSION['picture'];
			}
			if($product->insert()){
				header('location:/Profile/index/' . $profile_id);
			}else{
				$this->view('Product/create', ['$profile'=>$profile]);
			}
		}else{
			$this->view('Product/create',['product'=>$product]);
		}
	}


	#[\app\filters\Login]
 	public function addToCart(){
		if(isset($_POST['action'])){
			
			$cartItem= new \app\models\Cart();
			$cartItems->cartItem = $_POST['quantity'];
			$cartItems->insert();

			header("location:/Product/create?Create a new category with your items to sale");
			$this->view('Category/add');
		}
	}


	public function edit($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);

		if(isset($_POST['action'])){

			$product->title = $_POST['title'];
			$product->description = $_POST['description'];
			$product->price = $_POST['price'];
			$product->picture = $filename;

			$product->profile_id=$_SESSION['profile_id'];

			
			$product->update();

			header('location:/Product/indexPProducts/');
		}else{
			$this->view('Product/edit',['product'=>$product]);
		}
	}

	public function delete($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);

		if(isset($_POST['action'])){

			$product->delete();

			header('location:/Product/index/');
		}else{
			$this->view('Product/delete',['product'=>$product]);
		}
	}
}
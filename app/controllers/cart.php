<?php
namespace app\controllers;

class cart extends \app\core\Controller{

	public function inndex(){
		echo"empyt cart";
	}

	public function index(){

		$cart = new \app\models\Cart();
        $carts = $cart->getProfile();
        $code = '';
        
        require 'app/views/Product/productsCart.php';

		// if(empty($_SESSION["cart_item"])){
		// 	echo "No products are found in the cart";
		// 	header('location:/Product/index');
		// }
	}

	public function remove(){
		if(!empty($_SESSION["cart_item"])){
			foreach ($_SESSION["cart_item"] as $key => $value) {
				if($_GET["key"==$value]){
					unset($_SESSION["cart_item"][$value]);
				}
				if(empty($_SESSION["cart_item"])){
					unset($_SESSION["cart_item"][$value]);
				}
			}
		}
	}

	public function addToCart(){
		if(isset($_SESSION["cart"])){

			$cart = new \app\models\cart();

			
			$profile= $_SESSION['profile_id'];
			//$product= $_SESSION['product_id'];

			$cartobjects= $cart->getAllProfileProduct($product_id, $profile_id);


			// $product_id=array_column($_SESSION["cart"], "product_id");


			if ($cartobjects) {
                $cart->qty = $checkCart->qty + $_POST['qty'];
                $cart->updateById($checkCart->cart_id);

            } 
            else {
                $cart->profile_id = $profile_id;
                $cart->product_id = $productId;
                $cart->qty = $_POST['qty'];
                $cart->create();
            }

            header("location:/cart/index");

		// 	if(!in_array($_GET['id'], $product_id)){
		// 		$count = count($_SESSION['cart']);
		// 		$products = array('product_id' => $_GET['id'],
		// 							'title' => $_GET['title'],
		// 							'description' => $_GET['description'],
		// 							'price' => $_GET['price']);
		// 		$_SESSION['cart'][$count] =$products;
		// 	}else{
		// 		header("location:/Cart/productsCart?this item exist in the cart already");
		// 		$this->view('Cart/productsCart');
		// 	}
		// }else{
		// 	$products = array('product_id' => $_GET['id'],
		// 							'title' => $_GET['title'],
		// 							'description' => $_GET['description'],
		// 							'price' => $_GET['price']);
		// 	$_SESSION['cart'][0] =$products;
		// }
        }
	}

	public function emptyCart(){
		unset($_SESSION["cart_item"]);
	}

	public function delete($cart_id)
    {
        $cartModel = new \app\models\Cart();
        $cartModel->delete($cart_id);
        header("location:/Cart/index");
    }

    public function update($cart_id)
    {
        $cart = new \app\models\Cart();
        $cart->qty = $_POST['qty'];
        $cart->update($cart_id);
    }
}
<?php 

namespace app\controllers;

class profile extends \app\core\Controller{
	
	#[\app\filters\Login]
	#[\app\filters\Profile]
	public function index(){
		$profile = new \app\models\profile();
		$profile = $profile->get($_SESSION['profile_id']);

		$product = new \app\models\Product();
		$products =$product->getForProfile($_SESSION['profile_id']);


		$this->view('Product/indexPProducts', ['profile'=>$profile, 'products'=>$products]);

	}

	public function details($profile_id){
		$profile = new \app\models\profile();
		$profile = $profile->get($profile_id);
		$this->view('Profile/details', $profile);
	}

	#[\app\filters\Login]
	#[\app\filters\Profile]
	public function edit(){
		$profile = new \app\models\profile();
		$profile = $profile->get($_SESSION['profile_id']);


		if(isset($_POST['action'])){
			$profile->first_name = $_POST['first_name'];
			$profile->last_name = $_POST['last_name'];
			$profile->address = $_POST['address'];
			$profile->city = $_POST['city'];
			$profile->postal_code = $_POST['postal_code'];

			$profile->update();
			header('location:/Profile/index');
		}else{
			$this->view('Profile/create',$profile);
		}
	}

	#[\app\filters\Login]
	#[\app\filters\noProfile]
	public function create(){
		if(isset($_POST['action'])){

			$profile = new \app\models\Profile();
			$profile->first_name = $_POST['first_name'];
			$profile->last_name = $_POST['last_name'];
			$profile->address = $_POST['address'];
			$profile->city = $_POST['city'];
			$profile->postal_code = $_POST['postal_code'];
			$profile->user_id = $_SESSION['user_id'];
			$_SESSION['profile_id']=$profile->insert();

			header('location:/Profile/index');
		}else{
			$this->view('Profile/create');
		}
	}

	public function logout(){
		session_destroy();
		header('location:/Profile/index?message=You\'ve been successfully logged out.');
	}
}
<?php
namespace app\controllers;

class User extends \app\core\Controller{
	
	public function index(){
		if(isset($_POST['action'])){
			//select the user record as per the request
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);
			//verify the password match
			if(password_verify($_POST['password'], $user->password_hash)){
				//correct password provided
				$_SESSION['username'] = $user->username;
				$_SESSION['user_id'] = $user->user_id;
				$profile = new \app\models\Profile();
				$profile=$profile->getProfileByUser($user->user_id);
				$_SESSION['profile_id']=$profile->profile_id;

				header('location:/Main/index');
			}else{
				//incorret password provided
				header('location:/User/index?error=Incorrect username/password combination!');
			}
		}else{
			$this->view('User/index');
		}
	}

	public function register(){
		if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_confirmation']){
				$user = new \app\models\User();
				if($user->get($_POST['username'])){
					header('location:/User/register?error=The username "'.$_POST['username'].'" already exists. Choose another.');
				}else{
					$user->username = $_POST['username'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

					$_SESSION['user_id'] = $user->insert();
					$_SESSION['username'] = $_POST['username'];


					// $_SESSION['profile_id']=$profile_id->get();

					header('location:/Product/index');
				}

			}else{
				header('location:/User/register?error=Passwords do not match.');
			}

		}else{
			$this->view('User/register');
		}
	}

	// public function register(){
	// 	//when we submit the form
	// 	if(isset($_POST['action'])){
	// 		//verify that the password and password_confirmation match
	// 		if($_POST['password'] == $_POST['password_confirmation']){

	// 			$user = new \app\models\User();

	// 			if($user->get($_POST['username'])){
	// 				//redirect with an error message
	// 				header('location:/User/register?error=The username "'.$_POST['username'].'" already exists. Choose another.');
	// 			}else{
	// 				$user->username = $_POST['username'];
	// 				$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

	// 				$_SESSION['user_id'] = $user->insert();
	// 				$_SESSION['username'] = $_POST['username'];

	// 				header('location:/Product/index?message=these are items on our website to be sold!');
	// 			}
	// 			else{
	// 				header('location:/User/register?error=Passwords do not match.');
	// 			}
	// 		}
	// 	}else{
	// 		$this->view('User/register');
	// 	}
	// }

	public function logout(){
		session_destroy();
		header('location:/User/index?message=You\'ve been successfully logged out.');
	}
}
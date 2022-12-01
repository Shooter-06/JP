<?php 

namespace app\controllers;

class test extends \app\core\Controller{

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
				}

			}else{
				header('location:/User/register?error=Passwords do not match.');
			}

		}else{
			$this->view('User/register');
		}
	}
}

public function register(){
		//when we submit the form
		if(isset($_POST['action'])){
			//verify that the password and password_confirmation match
			if($_POST['password'] == $_POST['password_confirmation']){

				$user = new \app\models\User();

				if($user->get($_POST['username'])){
					//redirect with an error message
					header('location:/User/register?error=The username "'.$_POST['username'].'" already exists. Choose another.');
				}else{
					$user->username = $_POST['username'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

					$_SESSION['user_id'] = $user->insert();
					$_SESSION['username'] = $_POST['username'];

					header('location:/Product/index?message=these are items on our website to be sold!');
				}
				else{
					header('location:/User/register?error=Passwords do not match.');
				}
			}
		}else{
			$this->view('User/register');
		}
	}
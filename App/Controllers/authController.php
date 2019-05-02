<?php
namespace App\Controller;

use App\Model\User;

class authController{
	
	public function createForm(){
		require_once('App\view\Auth\register.php');
		return true;
	}
	
	public function register(){

		$data = $_POST;
		
		$flag = 'checkName';
		$result = user::checkUser($data, $flag);
		if($result){
			header("Location: /test_iceberg/item/index");
		}else{
			
			header("Location: /test_iceberg/auth/create");
		}
		return true;
	}
	
	public function loginForm(){
		require_once('App\View\Auth\login.php');
		return true;
	}
	
	public function login(){
		$data = $_POST;
		$flag = 'checkUser';
		
		$result = user::checkUser($data, $flag);
		if($result){
			header("Location: /test_iceberg/item/index");
		}else{
			
			header("Location: /test_iceberg/auth/loginForm");
		}
		return true;
	}
	
	public function logout(){
		$_SESSION['auth'] = '';
		header("Location: /test_iceberg");
	}
}
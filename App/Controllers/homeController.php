<?php 
namespace App\Controller;

class homeController{
	
	public function index(){
		include_once('App\View\home.php');
		return true;
	}
}
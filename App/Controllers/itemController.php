<?php
namespace App\Controller;
use App\Model\item;

class itemController{
	
	
	public function index(){
		$user = $_SESSION['auth'];
		$itemArray = item::getListItem($user);
		
		require_once('App\View\item.php');
		return true;
	}
	
	public function show($id){
		return true;
	}
	
	public function create(){
		require_once('App\View\itemCreate.php');
		return true;
	}
	
	public function store(){
		/*
		*/
		
		$data = $_POST;
		$file = $_FILES['file'];
		$fileName = time() . '.jpg';
		$resultUpload = move_uploaded_file($file['tmp_name'], 'Storage/' . $fileName);
		
			if($resultUpload){
				$data['fileName'] = $fileName;
				$data['user'] = $_SESSION['auth'];
			}else{
				die;
			}
		
		
		$result = item::createItem($data);
		
		if($result){
			header('Location: /test_iceberg/item/index');
		}else{
			die;
		}
		
		return true;
	}
	
	public function edit($id){
		$item = item::getItem($id);

		require_once('App\View\itemEdit.php');
		return true;
	}
	
	public function update($id){
		$data = $_POST;
		$data['user'] = $_SESSION['auth'];
		$file = $_FILES['file'];
		if($file['name']){
			unlink('Storage/' . $data['fileName']);
			$file = $_FILES['file'];
			$fileName = time() . '.jpg';
			$resultUpload = move_uploaded_file($file['tmp_name'], 'Storage/' . $fileName);
			$data['fileName'] = $fileName;
			

		}
		$result = item::updateItem($id, $data);
		
		if($result){
			header('Location: /test_iceberg/item/index');
		}else{
			die;
		}
		
		return true;
	}
	
	public function destroy($id){
		$item = item::getItem($id);
		
		unlink('Storage/' . $item['image']);
		
		$result = item::destroyItem($id);

		if($result){
			header('Location: /test_iceberg/item/index');
		}else{
			die;
		}
		return true;
	}
}
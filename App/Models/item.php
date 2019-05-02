<?php

namespace App\Model;
use App\Components\db;
use \PDO;

class item{
	
	public static function getListItem($user){
		$db = db::getConnection();
		
		$sql = $db->prepare("SELECT * FROM item WHERE user=:user");
		
		$sql->bindValue(':user', $user);
		$sql->execute();
		$array = $sql->fetchAll(PDO::FETCH_ASSOC);
		
		if($array){
			return $array;
		}else{
			return false;
		}
		
	}
	
	public static function createItem($data){
		
		$db = db::getConnection();
		
		$sql = $db->prepare("INSERT INTO item (user, name, description, cost, image) VALUES(:user, :name, :description, :cost, :image)");
		$sql->bindValue(':user', $data['user']);
		$sql->bindValue(':name', $data['name']);
		$sql->bindValue(':description', $data['description']);
		$sql->bindValue(':cost', $data['cost']);
		$sql->bindValue(':image', $data['fileName']);
		
		$result = $sql->execute();
		
		return $result;
	}
	
	public static function updateItem($id, $data){
		$db = db::getConnection();
		
		$sql = $db->prepare("UPDATE item SET user=:user, name=:name, description=:description, cost=:cost, image=:image WHERE id=:id");
		
		$sql->bindValue(':id', $id);
		$sql->bindValue(':user', $data['user']);
		$sql->bindValue(':name', $data['name']);
		$sql->bindValue(':description', $data['description']);
		$sql->bindValue(':cost', $data['cost']);
		$sql->bindValue(':image', $data['fileName']);
		
		$result = $sql->execute();
		
		return $result;
	}
	
	public static function getItem($id){
		$db = db::getConnection();
		
		$sql = $db->prepare('SELECT * FROM item WHERE id=:id');
		$sql->bindValue(':id', $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_ASSOC);
		
		return $result;
	}
	
	public static function destroyItem($id){
		$db = db::getConnection();
		
		$sql = $db->prepare('DELETE FROM item WHERE id=:id');
		$sql->bindValue(':id', $id);
		$result = $sql->execute();
		
		return $result;
		
	}
}
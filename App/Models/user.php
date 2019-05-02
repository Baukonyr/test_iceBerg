<?php
namespace App\Model;
use App\Components\db;
use \PDO;
class user{
	
	public static function checkUser($data, $flag){
		$db = db::getConnection();
		$name = $data['name'];
		$password = $data['password'];
		if($flag == 'checkName'){
			$sql = $db->prepare("SELECT EXISTS (SELECT name FROM user WHERE name=:name)");
			$sql->bindValue(':name', $name, PDO::PARAM_STR);
			$sql->execute();
			$result = $sql->fetch();
				if($result[0]){
					$_SESSION['massage'] = $name . ' ' . 'Данное имя уже занято';
					return false;
				}else{
					self::createUser($data, $db);
					$_SESSION['auth'] = $data['name'];
					return true;
				}
		}elseif($flag == 'checkUser'){
			$sql = $db->prepare("SELECT EXISTS(SELECT name FROM user WHERE name=:name AND password=:password)");
			$sql->bindValue(':name', $name, PDO::PARAM_STR);
			$sql->bindValue(':password', $password, PDO::PARAM_STR);
			$sql->execute();
			$result = $sql->fetch();
				if($result[0]){
					$_SESSION['auth'] = $name;
					return true;
				}else{
					$_SESSION['massage'] = 'данные не верные';
					return false;
				}
		}else{
			die;
		}
	}

	
	public static function createUser($data, $db){
		$name = $data['name'];
		$password = $data['password'];
		
		$sql = $db->prepare("INSERT INTO user (name, password) VALUES(:name, :password)");
		
		$sql->bindValue(':name', $name, PDO::PARAM_STR);
		$sql->bindValue(':password', $password, PDO::PARAM_STR);
		
		$result = $sql->execute();
		
		return $name;
	}
}
<?php
namespace App\Components;
use \PDO;
class db{
  
  public static function getConnection(){
    
    
    
    $paramsPath = './config/db_params.php';
    $params = include($paramsPath);
    
    $dns = "mysql:host={$params['host']};dbname={$params['dbname']}";
    $db = new PDO($dns, $params['user'], $params['password']);
    
    $db->exec("set names utf8");
    
    return $db;
  }
}
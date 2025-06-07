<?php
require_once "./config.php";
require_once ROOT_DIR."src/scripts/redirection.php";
require_once ROOT_DIR."src/classes/database.php";

class UserDefault{
  static function registerUser(string $username, string $password){

  }

  static function loginUser(string $username, string $password){
    

  }

  static function logoutUser(){

  }

  static function checkLogged(Database $db){
    if(!isset($_SESSION['id']) || !isset($_SESSION['username']))
      redirect("index.php");
    
    $sessionId = $_SESSION['id'];
    $sessionUsername = $_SESSION['username'];

    $queryResult = $db->query("SELECT *  FROM users WHERE id=? & username=?", [$sessionId, $sessionUsername]);
  }
}

trait UserTrait{
  private int $id;
  private string $username;
  private string $first_name;
  private string $last_name;
}

class User{
  use UserTrait;
}
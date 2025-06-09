<?php
require_once "./config.php";
require_once "./src/scripts/redirection.php";
require_once "./src/classes/database.php";

class User{
  static function registerUser(string $username, string $password){

  }

  static function loginUser(string $username, string $password){
    
  }

  static function logoutUser(){

  }

  static function checkLogged(Database $db){
    if(!isset($_SESSION['id']) || !isset($_SESSION['email']))
      redirect("index.php");
    
    $sessionId = $_SESSION['id'];
    $sessionEmail = $_SESSION['email'];

    $queryResult = $db->query("SELECT *  FROM users WHERE id=? & username=?", [$sessionId, $sessionEmail]);
  }
}

trait UserTrait{
  private int $id;
  private string $username;
  private string $first_name;
  private string $last_name;
}
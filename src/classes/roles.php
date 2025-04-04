<?php
require "./config.php";
require ROOT_DIR."/src/scripts/redirection.php";

class UserDefault{
  static function createUser(){
    
  }

  static function loginUser(){

  }

  static function logoutUser(){

  }

  static function checkLogged(){
    session_start();

    if(!isset($_SESSION['id']) || !isset($_SESSION['username']))
      redirect("index.php");
    
    $sessionId = $_SESSION['id'];
    $sessionUsername = $_SESSION['username'];

  }
}

trait UserTrait{
  private ?int $id;
  private ?string $username;
  private ?string $first_name;
  private ?string $last_name;

  
}

class User{
  use UserTrait;
}
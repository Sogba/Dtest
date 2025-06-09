<?php
  require_once "./config.php";
  require_once "./src/classes/database.php";
  require_once "./src/scripts/redirection.php";

  function logout(){
    unset($_SESSION['id']);
    unset($_SESSION['email']);
  
    redirect("index.php");
  }

  function login($email, $password){
    echo "login<br>";
    echo $email."<br>";
    echo $password."<br>";
  }

  function register($email, $first_name, $second_name, $password){
    echo "register";
    echo $email."<br>";
    echo $first_name."<br>";
    echo $second_name."<br>";
    echo $password."<br>";
  }
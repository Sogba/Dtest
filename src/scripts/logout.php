<?php
  require_once "./../../config.php";
  require_once ROOT_DIR."src/scripts/redirection.php";

function logout(){
  unset($_SESSION['id']);
  unset($_SESSION['email']);

  echo "hello";
}
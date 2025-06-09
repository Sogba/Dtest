<?php
require_once "./config.php";

function redirect(string $address){
  header("location: ./".$address);
  exit;
}
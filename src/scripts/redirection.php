<?php
require "./config.php";

function redirect(?string $address){
  header("location: ".ROOT_DIR.$address);
  exit;
}
<?php
require_once "./config.php";
require_once "./src/scripts/redirection.php";

enum Availability: int{
  
}

enum Role: int{
  case Admin = 0;
  case Approver = 1;
  case BasicBitch = 2;
  case Unapproved = 3;
}

function basicPostResolve(){
  if(isset($_POST["home"]) && $_POST["home"] == "koko")
    redirect("index.php");

  if(isset($_POST["demo"]) && $_POST["demo"] == "koko")
    redirect("demo.php");

  if(isset($_POST["rooms"]) && $_POST["rooms"] == "koko")
    redirect("rooms.php");
}
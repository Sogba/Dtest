<?php
require_once "./config.php";
require_once "./src/scripts/redirection.php";
require_once "./src/classes/database.php";



trait UserTrait{
  private int $id;
  private string $username;
  private string $first_name;
  private string $last_name;
}
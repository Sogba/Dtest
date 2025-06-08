<?php
require_once "config.php";
require_once ROOT_DIR."src/components/basicComponents.php";
require_once ROOT_DIR."src/components/authenticationComponets.php";
require_once ROOT_DIR."src/classes/database.php";
require_once ROOT_DIR."src/classes/roles.php";
?>
<h1>DEMO</h1>
<?php
  $db = new Database;

  createHead("Demo page");

  loginForm();
  registerForm();
  logoutButton();
?>
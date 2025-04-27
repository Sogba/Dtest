<?php
require_once "config.php";
require_once ROOT_DIR."src/components/xxComp.php";
require_once ROOT_DIR."src/classes/database.php";
require_once ROOT_DIR."src/components/basicComponents.php";
require_once ROOT_DIR."src/classes/roles.php";
?>

<?php createHead("Domovská stránka");
  loginForm();
  registerForm();
?>
<?php
require_once "config.php";
require_once "./src/components/basicComponents.php";
require_once "./src/components/authenticationComponets.php";
require_once "./src/classes/database.php";
require_once "./src/classes/roles.php";
require_once "./src/scripts/authenticationScripts.php";

createHead("Demo page");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  authenticatePostResolve();
}

?>
<h1>DEMO</h1>
<?php
  //$db = new Database;
  
  loginForm();
  registerForm();
  logoutButton();
?>
<?php
require_once "config.php";
require_once "./src/classes/database.php";
require_once "./src/components/basicComponents.php";
require_once "./src/components/authenticationComponets.php";
require_once "./src/scripts/authenticationScripts.php";
require_once "./src/scripts/javascript.php";

createHead("Domovská stránka");
initJavascript();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  basicPostResolve();
  authenticatePostResolve();
}



?>
  <h1>Index</h1>
<?php 
if(!isset($_SESSION["user"]))
  loginForm();

  authForm();
<?php
require_once "config.php";
require_once "./src/classes/database.php";
require_once "./src/components/basicComponents.php";
require_once "./src/components/authenticationComponets.php";
require_once "./src/scripts/authenticationScripts.php";
require_once "./src/scripts/basicScripts.php";

createHead("Místnosti");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  basicPostResolve();
  authenticatePostResolve();
}

checkLogged();
checkRole(Role::Admin->value);

?>
  <h1>Místnosti</h1>

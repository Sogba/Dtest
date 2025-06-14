<?php
require_once "config.php";
require_once "./src/components/basicComponents.php";
require_once "./src/components/authenticationComponets.php";
require_once "./src/classes/database.php";
require_once "./src/classes/roles.php";
require_once "./src/scripts/authenticationScripts.php";
require_once "./src/components/roomComponets.php";

createHead("Demo page");

checkLogged();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  basicPostResolve();
  authenticatePostResolve();
  
}

?>
<h1>DEMO</h1>
<?php
  $db = Database::getInstance();
  loginForm();
  registerForm();
  logoutButton();

  $rooms = Room::fetchFromStatement($db->executeQuery("SELECT * from rooms"));

  foreach($rooms as $room){
    room($room);
  }
?>
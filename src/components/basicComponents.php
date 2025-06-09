<?php
require_once "./src/scripts/basicScripts.php";
require_once "./src/classes/databaseBound.php";
require_once "./src/components/authenticationComponets.php";


function createHead(string $pageName){
  if(true):?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $pageName ?></title>
      <link rel="icon" type="image/x-icon" href="./src/style/favicon.ico">  
      <link rel="stylesheet" href="./src/style/index.css">
    </head>
    <?php
    navbar();
  endif;
}

function navbar(){
  if(true):?>
  <div class="navbar">
    <div class="navbar-home-button">
      <form action="" method="post">
        <input type="hidden" name="home" value="koko">
        <input type="submit" value="Home">
      </form>
    </div>
    <div class="navbar-demo-button">
      <form action="" method="post">
        <input type="hidden" name="demo" value="koko">
        <input type="submit" value="Demo">
      </form>
    </div>
  </div>
  <?php
  
  if(isset($_SESSION["user"]["id"])){
    $db = Database::getInstance();
    $sessionId = $_SESSION["user"]["id"];
    $query = $db->executeQuery("SELECT * from users where id=?", [$sessionId]);
    $user = User::bindFromStatement($query);

    /* if($user->role === Role::BasicBitch->value){

    }
      
    if($user->role === Role::Approver->value){

    }  */
      
    if($user->role == Role::Admin->value){
      if(true):?>
      <div class="navbar-rooms-button">
        <form action="" method="post">
          <input type="hidden" name="rooms" value="koko">
          <input type="submit" value="Rooms">
        </form>
      </div><?php
      endif;
    }
  }
  

  logoutButton();
  endif;
}

<?php
  require_once "./config.php";
  require_once "./src/classes/database.php";
  require_once "./src/scripts/redirection.php";
  require_once "./src/classes/databaseBound.php";
  require_once "./src/scripts/basicScripts.php";

  function logout(){
    unset($_SESSION['user']);
  
    redirect("index.php");
  }

  function login(string $email, string $password) {
    $db = Database::getInstance();
    $result = $db->executeQuery("SELECT * FROM users WHERE email = ?", 
      [$email]
    );
    
    if($result->rowCount() != 1)
      return;

    $user = User::bindFromStatement($result);
    if(!password_verify($password, $user->password))
      return;

    $_SESSION["user"] = [
        "id" => $user->id,
        "logged_in_at" => time()
    ];
  }


  function register($email, $first_name, $second_name, $password){
    $db = Database::getInstance();
    echo "register<br>";
    echo $email."<br>";
    echo $first_name."<br>";
    echo $second_name."<br>";
    echo $password."<br>";
    $db->executeQuery("INSERT INTO users (email, password, first_name, second_name, role)
      VALUES (?, ?, ?, ?, ?)",
      [$email, $password, $first_name, $second_name, Role::Unapproved->value]);
  }

  function checkLogged(){
    $db = Database::getInstance();
    if(!isset($_SESSION["user"] ))
      redirect("index.php");
    
    $sessionId = $_SESSION["user"]["id"];

    $queryResult = $db->executeQuery("SELECT *  FROM users WHERE id=?", [$sessionId]);
    $user = User::bindFromStatement($queryResult);

    echo "Logged as $user->first_name";
  }

  function authenticatePostResolve(){
  if (isset($_POST["logout"]) && $_POST["logout"] === "koko") {
    logout();
  }

  if (isset($_POST["register"]) && $_POST["register"] === "koko") {
    if($_POST["password"] != $_POST["confirm_password"]){
      echo "Not same password";
      return;
    }
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $first_name = filter_var($_POST["first_name"],FILTER_SANITIZE_STRING);
    $second_name = filter_var($_POST["second_name"],FILTER_SANITIZE_STRING);
    register($email, $first_name, $second_name, password_hash($_POST["password"], PASSWORD_BCRYPT));
  }

  if (isset($_POST["login"]) && $_POST["login"] === "koko") {
    login($_POST["email"], $_POST["password"]);
  }
}

  function checkRole($role){
    $db = Database::getInstance();
    $sessionId = $_SESSION["user"]["id"];
    $query = $db->executeQuery("SELECT * from users where id=?", [$sessionId]);
    $user = User::bindFromStatement($query);
    if($user->role > $role)
      redirect("index.php");
  }
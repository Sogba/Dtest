<?php
  require_once "./config.php";

class Database{
  private static $instance = null;
  private PDO $connection;

  public function __construct()
  {
    $this->connection = $this->connect();
  }

  private function connect(){
    $connection = "mysql:host=".DATABASE_SERVER.";dbname=".DATABASE_NAME.";charset=utf8";

    try{
      $db = new PDO($connection,DATABASE_USER,DATABASE_KEY);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    }catch(PDOException $e){
      echo $e->getMessage();
      exit;
    }
  }

  public function executeQuery(string $query, array $params = []){
      $stmt = $this->connection->prepare($query);
      $stmt->execute($params);
      return $stmt;
  }

  public static function getInstance(): Database {
    if (self::$instance === null) {
        self::$instance = new Database();
    }
    return self::$instance;
  }
}
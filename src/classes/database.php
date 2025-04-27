<?php
class Database {
  private PDO $connection;

  public function __construct()
  {
    $this->connection = $this->connect();
  }

  private function connect(){
    $connection = "mysql:host=DATABASE_SERVER;dbname=DATABASE_NAME;charset=utf8";

    try{
      $db = new PDO($connection,"DATABASE_USER","DATABASE_KEY");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    }catch(PDOException $e){
      echo $e->getMessage();
      exit;
    }
  }

  public function query(string $query, array $params = []){
    try{
      $stmt = $this->connection->prepare($query);
      $stmt->execute($params);
      return $stmt;
    }
    catch(PDOException $e){
      echo $e->getMessage();
      exit;
    }
    
  }
}
<?php
require_once "./config.php";
require_once ROOT_DIR."/src/classes/roles.php";
require_once ROOT_DIR."/src/classes/database.php";

$db = new Database();
$query = $db->query("SELECT * FROM users");

$results = $query->fetchAll(PDO::FETCH_ASSOC);

if (empty($results)) {
  echo "No users found.\n";
} else {
  print_r($results);
}
$rowCount = $query->rowCount();
echo "Found $rowCount users.\n";

?>
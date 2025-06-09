<?php
require_once "config.php";
require_once "./src/classes/database.php";
require_once "./src/components/basicComponents.php";

createHead("Test databáze");?>
<H1>Test databáze</H1><?php


  $users = $db->query("SELECT * from users");
  $rooms = $db->query("SELECT * from rooms");
  $reservations = $db->query("SELECT * from reservations");

echo "<h2>Users</h2>";
foreach ($users as $user) {
    echo "<pre>" . print_r($user, true) . "</pre>";
}

echo "<h2>Rooms</h2>";
foreach ($rooms as $room) {
    echo "<pre>" . print_r($room, true) . "</pre>";
}

echo "<h2>Reservations</h2>";
foreach ($reservations as $reservation) {
    echo "<pre>" . print_r($reservation, true) . "</pre>";
}
?>
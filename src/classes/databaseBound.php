<?php
abstract class databaseBound{
  public static function fetchFromStatement(PDOStatement $stmt):array {
    $stmt->setFetchMode(PDO::FETCH_CLASS, static::class);
    return $stmt->fetchAll();
  }
}


class User extends databaseBound{
  public $id;
  public $email;
  public $password;
  public $first_name;
  public $second_name;
  public $role;
  public $created_at;

  public static function bindFromStatement(PDOStatement $stmt):self {
    $user = new self();
    $stmt->bindColumn('id', $user->id);
    $stmt->bindColumn('email', $user->email);
    $stmt->bindColumn('password', $user->password);
    $stmt->bindColumn('first_name', $user->first_name);
    $stmt->bindColumn('second_name', $user->second_name);
    $stmt->bindColumn('role', $user->role);
    $stmt->bindColumn('created_at', $user->created_at);

    $stmt->fetch(PDO::FETCH_BOUND);
    return $user;
  }
}

class Room extends databaseBound{
  public $id;
  public $name;
  public $description;
  public $availability;

  public static function bindFromStatement(PDOStatement $stmt):self {
    $room = new self();
    $stmt->bindColumn('id', $room->id);
    $stmt->bindColumn('name', $room->name);
    $stmt->bindColumn('description', $room->description);
    $stmt->bindColumn('availability', $room->availability);

    $stmt->fetch(PDO::FETCH_BOUND);
    return $room;
  }
}

class Reservation extends databaseBound{
  public $id;
  public $booker;
  public $room;
  public $description;
  public $start_time;
  public $end_time;
  public $status;

  public static function bindFromStatement(PDOStatement $stmt):self {
    $reservation = new self();
    $stmt->bindColumn('id', $reservation->id);
    $stmt->bindColumn('booker', $reservation->booker);
    $stmt->bindColumn('room', $reservation->room);
    $stmt->bindColumn('description', $reservation->description);
    $stmt->bindColumn('start_time', $reservation->start_time);
    $stmt->bindColumn('end_time', $reservation->end_time);
    $stmt->bindColumn('status', $reservation->status);

    $stmt->fetch(PDO::FETCH_BOUND);
    return $reservation;
  }
}
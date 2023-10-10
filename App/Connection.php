<?php

namespace App;

class Connection {
  public static function getDb() {
    try {
      $conn = new \PDO("mysql:host={hostname};dbname={database name};charset=utf8", "{username}", "{password}");
      return $conn;
    } catch (\PDOException $error) {
      echo $error;
    }
  }
}

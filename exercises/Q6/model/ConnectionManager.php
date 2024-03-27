<?php
class ConnectionManager
{
  public function getConnection()
  {
    $HOST = "localhost";
    $DB = "ellipsis-wad1-workshop";
    $USER = "root";
    $PASSWORD = "root";
    $dsn = "mysql:host=" . $HOST . ";dbname=" . $DB;
    $pdo = new PDO($dsn, $USER, $PASSWORD);
    // TO DO: set the PDO error mode to exception and silent mode
    return $pdo;
  }
}

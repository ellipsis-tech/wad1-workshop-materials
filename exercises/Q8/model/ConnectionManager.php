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
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        return $pdo;
    }
}

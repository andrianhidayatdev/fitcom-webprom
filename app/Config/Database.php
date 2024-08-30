<?php
require_once __DIR__ . '/../../config/databases.php';
class Database
{
  private static $pdo;

  static function getConnection(): PDO
  {
    if (self::$pdo == null) {
      $config = getConfigDatabase();
      $dsn = $config['url'] . $config['dbname'];
      $username = $config['username'];
      $password = $config['password'];

      self::$pdo = new PDO($dsn, $username, $password);
    }

    return self::$pdo;
  }

  static function getLastId()
  {
    $pdo = self::getConnection();
    return $pdo->lastInsertId();
  }
}

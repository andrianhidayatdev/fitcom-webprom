<?php
require_once __DIR__ . '/../Entities/UserEntity.php';

class UserModel
{
  private PDO $pdo;

  function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function findByUsername(string $username)
  {
    $stmt = $this->pdo->prepare('SELECT * FROM master_user WHERE username = :username');

    $stmt->bindValue(':username', $username);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ);
  }
}

<?php

require_once __DIR__ . '/../Model/UserModel.php';
require_once __DIR__ . '/../Entities/UserEntity.php';
require_once __DIR__ . '/../Exception/ValidationException.php';


class AuthService
{

  private UserModel $userModel;

  function __construct(UserModel $userModel)
  {
    $this->userModel = $userModel;
  }

  function login(UserEntitiy $user)
  {
    $result = $this->userModel->findByUsername($user->username);

    if (!$result) {
      throw new ValidationExcepion('Username atau Password Salah !!');
    }

    if ($result->password == $user->password) {
      $_SESSION['username'] = $result->username;
      $_SESSION['kode_user'] = $result->kode_user;
    }
  }

  function validation(UserEntitiy $user)
  {
    if (trim($user->username) == "" && trim($user->password) == "") {
      throw new ValidationExcepion('Username atau Password Salah !!');
    }
  }
}

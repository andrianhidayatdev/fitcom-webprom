<?php
require_once __DIR__ . '/../Model/UserModel.php';
require_once __DIR__ . '/../Config/Database.php';
require_once __DIR__ . '/../../config/base_url.php';
require_once __DIR__ . '/../Service/AuthService.php';

class AuthController
{

  private AuthService $authService;
  private UserModel $userModel;

  function __construct()
  {
    $this->userModel = new UserModel(Database::getConnection());
    $this->authService = new AuthService($this->userModel);
  }

  function index()
  {
    View::render('Admin/view_master_kategori');
  }
  function login()
  {
    View::render('Auth/login');
  }
  function postLogin()
  {
    $user = new UserEntitiy();
    $user->username =  $_POST['username'];
    $user->password =  $_POST['password'];
    header("Location: " . BASE_URL . 'admin/kategori');

    try {
      $this->authService->login($user);
    } catch (ValidationExcepion $e) {
      View::render('Auth/Login', ['errors' => $e->getMessage()]);
    }
  }
}

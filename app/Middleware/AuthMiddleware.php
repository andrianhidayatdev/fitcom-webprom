<?php
require_once __DIR__ . '/../Middleware/Middleware.php';
require_once __DIR__ . '/../../config/base_url.php';
class AuthMiddleware implements Middleware
{

  function before()
  {
    if (!isset($_SESSION['username'])) {
      header("Location: " . BASE_URL);
      exit();
    }
  }
}

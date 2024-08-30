<?php
require_once __DIR__ . '/../../library/View.php';
class UserController
{
  function index()
  {
    View::render('Ecommerce/home');
    View::render('EcommerceLayout/footer', ['script' => [
      'nav-bar-top-header',
      'promo-slide',
      'change-background'
    ]]);
  }

  function postLogin() {}
}

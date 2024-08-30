<?php
require_once __DIR__ . '/../../library/View.php';
class HomeController
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

  function searchPage($search)
  {
    View::render('EcommerceLayout/header');
    View::render('EcommerceLayout/navbar');
    View::render('Ecommerce/search');
    View::render('EcommerceLayout/footer', ['script' => []]);
  }

  function detailProduk($id)
  {

    View::render('EcommerceLayout/header', ['link' => ['detail']]);
    View::render('EcommerceLayout/navbar');
    View::render('Ecommerce/detail_produk');
    View::render('EcommerceLayout/footer', ['script' => ['nav-bar-top']]);
  }
}

<?php
require_once __DIR__ . '/../../library/View.php';
require_once __DIR__ . '/../Entities/KategoriEntitiy.php';
require_once __DIR__ . '/../Service/KategoriService.php';
require_once __DIR__ . '/../Model/KategoriModel.php';
require_once __DIR__ . '/../Config/Database.php';
require_once __DIR__ . '/../../config/base_url.php';

class KategoriController
{
  private KategoriService $kategoriService;
  private KategoriModel $kategoriModel;

  function __construct()
  {
    $this->kategoriModel = new KategoriModel(Database::getConnection());
    $this->kategoriService = new KategoriService($this->kategoriModel);
  }

  function index()
  {
    $data = $this->kategoriModel->findAll();
    View::render('Admin/view_master_kategori', ['data' => $data]);
  }

  function postAdd()
  {
    $kategori = new KategoriEntity();
    $kategori->nama_kategori = $_POST['name_kategori'];
    $kategori->url_gambar = $_FILES['file'];

    try {
      $this->kategoriService->addKategori($kategori);
      header("Location: " . BASE_URL . 'admin/kategori');
    } catch (ValidationExcepion $e) {
      echo $e->getMessage();
    }
  }

  function deleteKategori($id)
  {
    $this->kategoriService->deleteKategori($id);
    header("Location: " . BASE_URL . 'admin/kategori');
  }

  function produk()
  {
    View::render('Admin/view_product');
  }

  function tambah()
  {
    View::render('Admin/view_create_product');
  }
  function next()
  {
    View::render('Admin/view_next');
  }
}

<?php

require_once __DIR__ . '/../Model/UserModel.php';
require_once __DIR__ . '/../Entities/KategoriEntitiy.php';
require_once __DIR__ . '/../Exception/ValidationException.php';
require_once __DIR__ . '/../../config/base_url.php';


class KategoriService
{

  private KategoriModel $kategoriModel;

  function __construct(KategoriModel $kategoriModel)
  {
    $this->kategoriModel = $kategoriModel;
  }

  function addKategori(KategoriEntity $kategoriEntity)
  {
    $this->uploadImg($kategoriEntity->url_gambar);

    $this->kategoriModel->save($kategoriEntity);
  }
  protected function uploadImg(array $img)
  {


    $tmpName = $img['tmp_name'];
    $fileType = mime_content_type($tmpName);

    $filterType = [
      'image/jpeg',
      'image/png',
      'image/jpg',
      'image/webp'
    ];

    $fileSize = $img['size'];
    $maxSize = 3 * 1024 * 1024;
    $path = 'storage/img/kategori/';

    $upload = $path . $img['name'];

    if (!in_array($fileType, $filterType)) {
      throw new ValidationExcepion('Format Dokumen hanya bisa JPEG,JPG,PNG,WEBP');
    }

    if ($fileSize >= $maxSize) {
      throw new ValidationExcepion('Ukuran Dokumen maksimal 3MB');
    }
    if (!move_uploaded_file($tmpName, $upload)) {
      throw new ValidationExcepion('Gagal Upload File');
    }
  }

  public function deleteKategori($id)
  {
    $result = $this->kategoriModel->getKategoriById($id);
    $img = $result->url_gambar;

    if ($img != "") {
      $path = 'storage/img-kategori/' . $img;

      if (file_exists($path)) {
        unlink($path);
      }
    }

    $this->kategoriModel->deleteById($id);
  }
}

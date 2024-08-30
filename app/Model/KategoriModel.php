<?php
require_once __DIR__ . '/../Entities/KategoriEntitiy.php';
require_once __DIR__ . '/../../library/Random.php';

class KategoriModel
{
  private PDO $pdo;

  function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  function save(KategoriEntity $kategoriEntity)
  {
    $query = 'INSERT INTO master_kategori (kode_kategori, nama_kategori, url_gambar) VALUES (:kode_kategori, :nama_kategori, :url_gambar)';

    $result = $this->pdo->prepare($query);

    $result->bindValue(':kode_kategori', generateRandomCode());
    $result->bindValue(':nama_kategori', $kategoriEntity->nama_kategori);
    $result->bindValue(':url_gambar', $kategoriEntity->url_gambar['full_path']);

    $result->execute();
  }

  function findAll()
  {
    $query = 'SELECT * FROM master_kategori';

    $result = $this->pdo->query($query);

    return $result->fetchAll();
  }

  function getKategoriById($id)
  {
    // Menggunakan query parameter dengan placeholder
    $query = "SELECT * FROM master_kategori WHERE kode_kategori = :id";

    // Menyiapkan statement
    $stmt = $this->pdo->prepare($query);

    // Mengikat parameter dengan nilai
    $stmt->bindValue(':id', $id, PDO::PARAM_STR); // Gunakan PDO::PARAM_INT jika $id adalah integer

    // Mengeksekusi statement
    $stmt->execute();

    // Mengambil hasil sebagai objek
    return $stmt->fetch(PDO::FETCH_OBJ);
  }


  function deleteById($id)
  {
    $query = "DELETE FROM master_kategori WHERE kode_kategori = :id";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $stmt->execute(); // Gunakan PDO::PARAM_INT jika $id 
  }
}

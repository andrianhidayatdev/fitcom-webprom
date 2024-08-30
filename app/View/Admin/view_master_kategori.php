<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- css bootstrap link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/bootstrap/css/bootstrap.min.css" />
  <!-- css link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/kategori.css" />
  <!-- icon link -->
  <link href="<?= BASE_URL ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>assets/fontawesome/css/brands.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>assets/fontawesome/css/solid.css" rel="stylesheet" />
  <!-- poppins link -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <title>IndoMadura | Situs Belanja Online Terlengkap</title>
</head>

<body>
  <!-- Header/Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex align-items-center">
      <span class="toggle-btn ms-3 me-2" id="toggleSidebar">&#9776;</span>
      <a class="navbar-brand me-auto" href="#">
        <img src="<?= BASE_URL ?>/storage/img/indomadura-logo.png" alt="Indomadura Logo" style="height:30px;" class="">
      </a>
    </div>
  </nav>

  <!-- Main layout -->
  <div class="d-flex">
    <!-- Sidebar -->
    <div id="sidebar">
      <ul class="mt-4 list-unstyled">
        <li><a href="index.html">Master Kategori</a></li>
        <li><a href="<?= BASE_URL ?>admin/produk">Master Produk</a></li>
        <li><a href="../Auth/login.html">Log Out</a></li>
      </ul>
    </div>

    <!-- Content -->
    <div class="container-fluid mt-5 overflow-x-hidden" id="content">
      <h1 class="mb-2 text-gray-800 fw-bold">Master Kategori</h1>
      <div class="card shadow mb-4 me-3">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Tambah Data</button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Nama </th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($model['data'] as $row) {
                  # code...
                ?>
                  <tr>
                    <td><?= $row['kode_kategori'] ?></td>
                    <td><?= $row['nama_kategori'] ?></td>
                    <td><img src="<?= BASE_URL ?>/storage/img/kategori/<?= $row['url_gambar'] ?>" class="kategori-img justify-content-center align-item-center"></td>
                    <td>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                        Edit
                      </button>
                      <a class="btn btn-danger" href="<?= BASE_URL ?>admin/kategori/delete/<?= $row['kode_kategori'] ?>"> Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <footer>
        <p class="mt-5 d-flex justify-content-center align-item-center">&copy; 2024 Indomadura. All rights reserved.</p>
      </footer>
    </div>
  </div>

  <!-- Modal Input -->
  <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahDataLabel">Tambah Data Kategori</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= BASE_URL ?>admin/kategori/add" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
              <label for="namaKategori" class="form-label">Nama</label>
              <input type="text" class="form-control" name="name_kategori" id="namaKategori" placeholder="Masukkan Nama Kategori">
            </div>
            <div class="mb-3">
              <label for="namaKategori" class="form-label">Nama</label>
              <input type="file" class="form-control" name="file" id="namaKategori" placeholder="Masukkan Nama Kategori">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
          </div>
      </div>
      </form>

    </div>
  </div>

  <!-- Modal Edit -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit Data Kategori</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="KategoriName" class="form-label">Nama</label>
              <input type="text" class="form-control" id="KategoriName" placeholder="Masukka nama kategori baru" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Hapus -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Konfirmasi Hapus</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus kategori ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASE_URL ?>/assets/js/main.js"></script>
  <script src="<?= BASE_URL ?>/assets/js/sidebar.js"></script>
</body>

</html>
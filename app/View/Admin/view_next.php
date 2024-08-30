<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- css bootstrap link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css" />
  <!-- css link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/create_produk.css" />
  <!-- icon link -->
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/brands.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/solid.css" rel="stylesheet" />
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
        <img src="<?= BASE_URL ?>storage/img/indomadura-logo.png" alt="Indomadura Logo" style="height:30px;" class="">
      </a>
    </div>
  </nav>

  <!-- Main layout -->
  <div class="d-flex">
    <!-- Sidebar -->
    <div id="sidebar">
      <ul class="mt-4 list-unstyled">
        <li><a href="index.html">Dashboard</a></li>
        <li>
          <a href="#" class="d-flex justify-content-between align-items-center toggle-submenu me-3 mb-2">
            Master
            <i class="fas fa-chevron-right"></i>
          </a>
          <ul class="submenu list-unstyled" style="display: none;">
            <li><a href="user.html">Master User</a></li>
            <li><a href="kategori.html">Master Kategori</a></li>
            <li><a href="produk.html">Master Produk</a></li>
          </ul>
        </li>
        <li><a href="../Auth/login.html">Log Out</a></li>
      </ul>
    </div>

    <!-- Content -->
    <div class="container-fluid mt-5 overflow-x-hidden p-5" id="content">
      <h1 class="mb-2 text-gray-800 fw-bold">Tambah Data Barang</h1>
      <div class="row">
        <!-- Kolom Kiri: Form -->
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="kodeBarang" class="form-label">Kode Barang</label>
              <input type="text" class="form-control" id="kodeBarang" placeholder="Masukkan kode barang">
            </div>
            <div class="mb-3">
              <label for="kodeGambar" class="form-label">Kode Gambar</label>
              <input type="text" class="form-control" id="kodeGambar" placeholder="Masukkan kode gambar">
            </div>
            <div class="mb-3">
              <label for="varian" class="form-label">Varian</label>
              <input type="text" class="form-control" id="varian" placeholder="Masukkan nama varian">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" class="form-control" id="harga" placeholder="Masukkan harga">
            </div>
            <div class="mb-3">
              <label for="stok" class="form-label">Jumlah Stok</label>
              <input type="text" class="form-control" id="stok" placeholder="Masukkan stok">
            </div>
            <a href="create_produk.html" class="btn btn-secondary">Preview</a>
            <a href="produk.html" class="btn btn-success">Save</a>
          </form>
        </div>

        <div class="col-md-6 d-flex flex-column align-items-center">
          <div class="upload-box mb-4" id="uploadBox">
            <span class="plus-sign">+</span>
            <input type="file" id="uploadGambar" accept="image/*" style="display: none;">
          </div>

          <!-- Kotak Kecil untuk Upload Gambar Tambahan -->
          <div class="d-flex justify-content-between w-100">
            <div class="upload-box-small" id="uploadBox1">
              <span class="plus-sign-small">+</span>
              <input type="file" id="uploadGambar1" accept="image/*" style="display: none;">
            </div>
            <div class="upload-box-small" id="uploadBox2">
              <span class="plus-sign-small">+</span>
              <input type="file" id="uploadGambar2" accept="image/*" style="display: none;">
            </div>
            <div class="upload-box-small" id="uploadBox3">
              <span class="plus-sign-small">+</span>
              <input type="file" id="uploadGambar3" accept="image/*" style="display: none;">
            </div>
            <div class="upload-box-small" id="uploadBox4">
              <span class="plus-sign-small">+</span>
              <input type="file" id="uploadGambar4" accept="image/*" style="display: none;">
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/sidebar.js"></script>
    <script src="<?= BASE_URL ?>assets/js/img-produk.js"></script>
</body>

</html>
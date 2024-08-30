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
  <link href="<?= BASE_URL ?>/assets/assets/fontawesome/css/solid.css" rel="stylesheet" />
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
        <li><a href="index.html">Master Kategori</a></li>
        <li><a href="index.html">Master Produk</a></li>


        </li>
        <li><a href="../Auth/login.html">Log Out</a></li>
      </ul>
    </div>

    <!-- Content -->
    <div class="container-fluid mt-5 overflow-x-hidden p-5" id="content">
      <h1 class="mb-2 text-gray-800 fw-bold">Tambah Data Barang</h1>
      <form>
        <div class="mb-3">
          <label for="kodeBarang" class="form-label">Kode Barang</label>
          <input type="type" class="form-control" id="kodeBarang" placeholder="Masukkan kode barang">
        </div>
        <div class="mb-3">
          <label for="kategori" class="form-label">Nama Kategori</label>
          <select class="form-select" id="kategori" required>
            <option value="" disabled selected>Pilih Kategori</option>
            <option value="1">Makanan</option>
            <option value="2">Minuman</option>
            <option value="3">Sembako</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="barang" class="form-label">Nama Barang</label>
          <input type="type" class="form-control" id="barang" placeholder="Masukkan nama barang">
        </div>
        <div class="mb-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <input type="type" class="form-control" id="keterangan" placeholder="Masukkan keterangan">
        </div>
        <div class="mb-3">
          <label for="satuan" class="form-label">Satuan</label>
          <select class="form-select" id="satuan" required>
            <option value="" disabled selected>Pilih satuan</option>
            <option value="1">Liter</option>
            <option value="2">Kilogram</option>
            <option value="3">Gram</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="diskon" class="form-label">Diskon</label>
          <input type="type" class="form-control" id="diskon" placeholder="Masukkan diskon">
        </div>
        <a href="<?= BASE_URL ?>admin/produk/next" class="btn btn-secondary">Next </a>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/sidebar.js"></script>
</body>

</html>
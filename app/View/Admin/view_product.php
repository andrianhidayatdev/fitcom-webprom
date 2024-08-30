<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- css bootstrap link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css" />
  <!-- css link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/produk.css" />
  <!-- icon link -->
  <link href="<?= BASE_URL ?>/assets/assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/assets/fontawesome/css/brands.css" rel="stylesheet" />
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
        <img src="<?= BASE_URL ?>/storage/img/indomadura-logo.png" alt="Indomadura Logo" style="height:30px;" class="">
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
    <div class="container-fluid mt-5 overflow-x-hidden" id="content">
      <h1 class="mb-2 text-gray-800 fw-bold">Dashboard Produk</h1>
      <p class="mb-4 me-">Selamat datang di dashboard admin IndoMadura! Tabel di bawah digunakan untuk melihat data produk yang tersimpan.</a>.</p>
      <div class="card shadow mb-4 me-3">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
          <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
          <a href="<?= BASE_URL ?>admin/produk/tambah" class="btn btn-primary">Tambah Data </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode Produk</th>
                  <th>Kode Kategori</th>
                  <th>Gambar</th>
                  <th>Nama Produk</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td><img src="<?= BASE_URL ?>/storage/img/produk/kapal_api.webp" class="produk-img"></td>
                  <td>Kapal Api Kemasan Sachet</td>
                  <td>14,000</td>
                  <td>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#detailProdukModal">
                      Detail
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                      Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                      Hapus
                    </button>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ratingModal">
                      Rate
                    </button>
                  </td>
                </tr>
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

  <!-- Modal detail -->
  <div class="modal fade" id="detailProdukModal" tabindex="-1" aria-labelledby="detailProdukModalLabel" aria-hidden="true">
    <div class="modal-dialog odal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailProdukModalLabel">Detail Produk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="text-center mb-4">
              <img src="<?= BASE_URL ?>/storage/img/produk/kapal_api.webp" class="img-fluid rounded" alt="Gambar Produk" style="max-width: 200px;">
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Nama Produk:</strong> Kapal Api Kemasan Sachet</li>
              <li class="list-group-item"><strong>Kode Kategori:</strong> 2</li>
              <li class="list-group-item"><strong>Harga:</strong> 14,000</li>
              <li class="list-group-item"><strong>Stok:</strong> 120</li>
              <li class="list-group-item"><strong>Keterangan:</strong> Kapal api adalah produk kopi kemasan nomor 1 di Indonesia.</li>
              <li class="list-group-item"><strong>Varian:</strong> 5</li>
              <li class="list-group-item"><strong>Satuan:</strong> 500gram</li>
              <li class="list-group-item"><strong>Diskon</rkstrong> 10%</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Modal Edit -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog odal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit Data Produk</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editProdukForm">
            <div class="mb-3">
              <label for="editProdukName" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="editProdukName" value="Nama Produk" required>
            </div>
            <div class="mb-3">
              <label for="editKategoriId" class="form-label">ID Kategori</label>
              <select class="form-select" id="editKategoriId" required>
                <option value="1">Makanan</option>
                <option value="2">Minuman</option>
                <option value="3">Kebutuhan Rumah Tangga</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="editProdukImage" class="form-label">Gambar Produk</label>
              <input type="file" class="form-control" id="editProdukImage" accept="image/*">
              <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
            </div>
            <div class="mb-3">
              <label for="editHargaProduk" class="form-label">Harga</label>
              <input type="number" class="form-control" id="editHargaProduk" value="100" min="0" required>
            </div>
            <div class="mb-3">
              <label for="editStokProduk" class="form-label">Stok</label>
              <input type="number" class="form-control" id="editStokProduk" value="100" min="0" required>
            </div>
            <div class="mb-3">
              <label for="editKeteranganProduk" class="form-label">Keterangan Produk</label>
              <input type="text" class="form-control" id="editKeteranganProduk" value="Keterangan Produk" required>
            </div>
            <div class="mb-3">
              <label for="editVarian" class="form-label">Varian Produk</label>
              <input type="number" class="form-control" id="editVarian" value="500" min="0" required>
            </div>
            <div class="mb-3">
              <label for="editSatuan" class="form-label">Satuan Produk</label>
              <input type="number" class="form-control" id="editSatuan" value="500" min="0" required>
            </div>
            <div class="mb-3">
              <label for="editDiskon" class="form-label">Diskon Produk</label>
              <input type="number" class="form-control" id="editDiskon" value="500" min="0" required>
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
          Apakah Anda yakin ingin menghapus produk ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Rating -->
  <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel" aria-hidden="true">
    <div class="modal-dialog odal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="rating">Rating Produk</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editProdukForm">
            <div class="mb-3">
              <label for="kodeBarang" class="form-label">Kode Barang</label>
              <input type="text" class="form-control" id="kodeBarang" value="Kode Barang" required>
            </div>
            <div class="mb-3">
              <label for="kodeRating" class="form-label">Kode Rating</label>
              <input type="text" class="form-control" id="kodeRating" value="Kode Rating" required>
            </div>
            <div class="mb-3">
              <label for="nilaiProduk" class="form-label">Nilai Produk</label>
              <select class="form-select" id="nilaiProduk" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
          <button type="button" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="<?= BASE_URL ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/main.js"></script>
  <script src="<?= BASE_URL ?>assets/js/sidebar.js"></script>
</body>

</html>
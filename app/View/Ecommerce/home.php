<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IndoMadura | Situs Belanja Online Terlengkap</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/brands.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/solid.css" rel="stylesheet" />
  <link rel="icon" href="img/logo_canva_1.png" width="100" height="100" />
  <style>
    .wrapper {
      overflow-x: auto;
      overflow-y: hidden;
    }

    .wrapper::-webkit-scrollbar {
      width: 0;
    }

    .wrapper .card {
      min-width: 110px;
      height: 110px;
      margin-right: 5px;
    }
  </style>
  <link
    href="https://fonts.googleapis.com/css?family=Poppins"
    rel="stylesheet" />
</head>

<body>
  <header>
    <img src="<?= BASE_URL ?>/storage/img/suramadu.jpg" id="id-bg-img" class="bg-img" alt="" />
    <div class="position-absolute bg-red-gradient bg-img"></div>

    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <div class="container-fluid nav-bar">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
          <img src="<?= BASE_URL ?>/storage/img/indomadura-logo.png" alt="" />
        </a>
        <button
          class="navbar-toggler opacity-100"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse align-content-center"
          id="navbarNav">
          <form
            action="show-product.html"
            role="search"
            id="search"
            method="get">
            <div class="input-group d-flex flex-nowrap">
              <input
                type="text"
                name="search"
                id="in"
                class="form-control-sm search rounded-start-5 shadow-none border-0 input-search"
                placeholder="Cari Kebutuhan mu ..."
                aria-label="Recipient's username"
                aria-describedby="button-addon2" />
              <button
                class="btn btn-sm btn-light rounded-end-5 button-search"
                type="submit"
                id="button-addon2">
                <i class="fas fa-regular fa-magnifying-glass"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL ?>/#kategori">Kategori </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL ?>/#promo">Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL ?>#"> Keranjang </a>
            </li>
            <li class="nav-item align-content-center">
              <div class="dropdown">
                <button
                  class="btn text-white bg-transparent dropdown-toggle border-0 p-0"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img
                    src="<?= BASE_URL ?>/storage/img/user.png"
                    width="30px"
                    class="rounded-circle me-2"
                    height="30px" />
                  <p class="nav-link d-inline" href="index.html#kategori">
                    User
                  </p>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#"><i class="fas fa-user me-3"></i>Profile</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-3"></i>Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container header-text text-white slide-in">
      <h3>Halo Sobat Madura. Selamat datang Di</h3>
      <h1 class="display-3 fw-bold">IndoMadura</h1>
      <p>
        Cari kebutuhanmu di toko kami, karena disini semuanya ada. Specialist
        24 jam. Tutup saat kiamat saja!
      </p>
    </div>
  </header>
  <main>
    <section>
      <div class="container mt-5" id="kategori">
        <p class="content">Temukan kategori kebutuhanmu</p>
        <div class="row box-kategori justify-content-center">
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <a href="show-product.html?kategori=1">
              <div class="category-box">
                <img src="<?= BASE_URL ?>/storage/img/kategori/indomie.png" alt="Category 1" />
                <h6 class="mt-auto">Makanan</h6>
              </div>
            </a>
          </div>
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <a href="show-product.html?kategori=2">
              <div class="category-box">
                <img src="<?= BASE_URL ?>/storage/img/kategori/aqua.png" alt="Category 2" />
                <h6>Minuman</h6>
              </div>
            </a>
          </div>
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <a href="show-product.html?kategori=3">
              <div class="category-box">
                <img src="<?= BASE_URL ?>/storage/img/kategori/beras.png" alt="Category 3" />
                <h6>Sembako</h6>
              </div>
            </a>
          </div>
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <a href="show-product.html?kategori=4">
              <div class="category-box">
                <img src="<?= BASE_URL ?>/storage/img/kategori/indomie.png" alt="Category 4" />
                <h6>Bumbu</h6>
              </div>
            </a>
          </div>
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <a href="show-product.html?kategori=5">
              <div class="category-box">
                <img src="<?= BASE_URL ?>/storage/img/kategori/rokok.png" alt="Category 5" />
                <h6>Rokok</h6>
              </div>
            </a>
          </div>
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <a href="show-product.html?kategori=6">
              <div class="category-box">
                <img src="<?= BASE_URL ?>/storage/img/kategori/sabun.png" alt="Category 6" />
                <h6>Perawatan</h6>
              </div>
            </a>
          </div>
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <a href="show-product.html?kategori=7">
              <div class="category-box">
                <img
                  src="<?= BASE_URL ?>/storage/img/kategori/rapika1-removebg-preview.png"
                  alt="Category 7" />
                <h6>Pewangi</h6>
              </div>
            </a>
          </div>
          <div class="col-3 col-sm-3 col-md-3 col-lg-3">
            <a href="show-product.html?kategori=8">
              <div class="category-box">
                <img src="<?= BASE_URL ?>/storage/img/kategori/tolak_angin.png" alt="Category 8" />
                <h6>Obat</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid">
      <section class="container mt-5 mb-5" id="promo">
        <div
          class="shadow produck p-lg-5 p-0 rounded-5"
          style="
              background-image: url('<?= BASE_URL ?>/storage/img/diskon_agustus.png');
              background-size: cover;
              background-position: center;
              height: fit-content;
            ">
          <div class="row justify-content-center">
            <div
              class="row align-items-center justify-content-center shadow-lg rounded-5">
              <div class="col-10 ms-3 w-100 mt-3">
                <img src="<?= BASE_URL ?>/storage/img/flash-sale-text.png" alt="" class="img-fluid" />
              </div>
              <div class="col-lg-3 col-12">
                <img
                  src="<?= BASE_URL ?>/storage/img/flash-sale.png"
                  alt="flash-sale-50"
                  class="img-fluid"
                  style="max-width: 100%" />
              </div>
              <div class="col-lg-9 col-12 mt-3 mt-lg-0 rounded-5">
                <div class="d-flex align-items-center w-auto">
                  <button id="prevBtn" class="btn btn-light">
                    <i class="fas fa-solid fa-chevron-left"></i>
                  </button>
                  <div
                    class="wrapper overflow-hidden d-flex flex-nowrap m-3"
                    style="width: 100%"
                    id="promo-container">
                    <div class="item me-3">
                      <a href="detail.html?produk=product_id" class="text-decoration-none">
                        <div class="card shadow" style="width: 189px; height: 340px;">
                          <img
                            class="card-img-top img-fluid object-fit-contain"
                            src="product_image_url"
                            alt="product_name" />
                          <div class="card-body p-2">
                            <h5 class="card-title text-wrap">
                              product_name
                            </h5>
                            <p class="card-text font-diskon fw-bold m-0">
                              <s>Rp product_harga</s>
                            </p>
                            <p class="card-text fs-4 fw-bold m-0">diskon_value</p>
                            <p class="product-rating m-0">★ product_rating</p>
                            <div class="product-sold text-start">Terjual 109</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <button id="nextBtn" class="btn btn-light">
                    <i class="fas fa-solid fa-chevron-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section>
      <div class="container mt-4" id="produk">
        <p class="content">Rekomendasi barang kebutuhanmu</p>
        <div class="row" id="product-container">
          <div class="col-lg-2 col-md-4 col-6 h-100">
            <a href="detail.html?produk=product_id" class="text-decoration-none text-dark">
              <div class="product-card p-0 h-100">
                <img
                  src="product_image_url"
                  alt="product_name"
                  class="product-image" />
                <div class="product-title text-start ms-2 me-2">
                  product_name
                </div>
                <div class="product-price text-start ms-2 fw-bold">
                  Rp product_harga
                </div>
                <div class="product-rating text-start ms-2 mb-1">
                  ★ product_rating
                </div>
                <div class="product-sold text-start ms-2 mb-2">
                  Terjual product_terjual
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>
  </main>
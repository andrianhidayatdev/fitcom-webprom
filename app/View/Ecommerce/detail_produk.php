<main>
  <section>
    <div class="container">
      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide mt-5"
        data-bs-ride="carousel">
        <div class="carousel-inner rounded-3">
          <div class="carousel-item active">
            <a href="index.html#promo">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="<?= BASE_URL ?>/storage/img/banner_1.png" />
                <source
                  media="(min-width: 769px)"
                  srcset="<?= BASE_URL ?>/storage/img/banner-1.png" />
                <img
                  src="<?= BASE_URL ?>/storage/img/banner-1.png"
                  class="d-block w-100 banner-img"
                  alt="..." />
              </picture>
            </a>
          </div>
          <div class="carousel-item">
            <a href="index.html#promo">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="<?= BASE_URL ?>/storage/img/banner_2.png" />
                <source
                  media="(min-width: 769px)"
                  srcset="<?= BASE_URL ?>/storage/img/banner-2.png" />
                <img
                  src="<?= BASE_URL ?>/storage/img/banner-2.png"
                  class="d-block w-100 banner-img-2"
                  alt="..." />
              </picture>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100 border-0">
            <div class="card-body" id="product-img">
              <h3 class="card-title">Kopi Kapal Api Kemasan Sachet</h3>
              <!-- <img
                src="<?= BASE_URL ?>/storage/img/produk/kapal_api.webp"
                alt="Gambar Utama"
                class="img-fluid rounded mb-3" /> -->
              <div class="img-magnifier-container">
                <img id="myimage" src="<?= BASE_URL ?>/storage/img/produk/kapal_api.webp" class="img-fluid rounded mb-3" alt="Girl">
              </div>

              <div class="d-flex justify-content-between">
                <img
                  src="<?= BASE_URL ?>/storage/img/produk/kapal_api1.jpg"
                  class="img-thumbnail varian-img" />
                <img
                  src="<?= BASE_URL ?>/storage/img/produk/kapal_api2.jpeg"
                  class="img-thumbnail varian-img" />
                <img
                  src="<?= BASE_URL ?>/storage/img/produk/kapal_api3.jpeg"
                  class="img-thumbnail varian-img" />
                <img
                  src="<?= BASE_URL ?>/storage/img/produk/kapal_api4.jpg"
                  class="img-thumbnail varian-img" />
                <img
                  src="<?= BASE_URL ?>/storage/img/produk/kapal_api5.jpg"
                  class="img-thumbnail varian-img" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100 border-0">
            <div class="card-body" id="card-detail"></div>
            <h3 class="card-title fw-bold fs-1">Rp .....</h3>

            <h4 class="text-secondary mb-3 fw-medium">product.name </h4>
            <p class="text-muted mb-1">★ product.rating Ulasan</p>
            <p class="text-muted mb-3">Terjual {{ product.terjual }}</p>
            <hr />
            <h6>Spesifikasi Produk:</h6>
            <ul class="p-0">
              <li class="p-0 fw-light">Stok: {{ product.stok }}</li>
              <li class="p-0 fw-light">Merk: {{ product.merk }}</li>
              <li class="p-0 fw-light">Berat Produk: {{ product.berat }}</li>
              <li class="p-0 fw-light">Tanggal Kadaluwarsa: {{ product.tanggal_kadaluwarsa }}</li>
              <li class="p-0 fw-light">Jumlah Per Kemasan: {{ product.jumlah_per_kemasan }}</li>
            </ul>
            <hr />
            <h6>Detail Produk:</h6>
            <p class="fw-light">{{ product.detail }}</p>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card" style="height: fit-content">
            <div class="card-body">
              <p>
                <i class="fa fa-truck me-2" aria-hidden="true"></i>Garansi
                tiba: Hari ini
              </p>
              <hr />
              <p>
                <i class="fa fa-money me-2" aria-hidden="true"></i>COD (Cash
                on Delivery)
              </p>
              <hr />
              <h5>Atur Pemesanan</h5>
              <div
                class="quantity-control d-flex justify-content-center align-items-center my-3 text-center">
                <button
                  id="decrease"
                  class="btn btn-outline-secondary"
                  type="button"
                  style="height: 40px">
                  <i class="fas fa-solid fa-minus"></i>
                </button>
                <input
                  id="quantity"
                  type="number"
                  value="1"
                  min="1"
                  readonly
                  class="form-control text-center"
                  style="width: 60px; height: 40px" />
                <button
                  id="increase"
                  class="btn btn-outline-secondary"
                  type="button"
                  style="height: 40px">
                  <i class="fas fa-solid fa-plus"></i>
                </button>
              </div>

              <div class="d-grid gap-2">
                <button
                  class="btn rounded-5 button-tambah-keranjang"
                  type="button">
                  Tambah ke Keranjang
                </button>
                <button class="btn rounded-5 button-beli" type="button">
                  Beli Sekarang
                </button>
              </div>

              <div
                class="icons-container d-flex justify-content-center mt-3">
                <button class="icon-btn">
                  <i class="fa fa-heart-o"></i>
                </button>
                <button class="icon-btn mx-3">
                  <i class="fa fa-commenting-o"></i>
                </button>
                <button class="icon-btn">
                  <i class="fa fa-share-square-o"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
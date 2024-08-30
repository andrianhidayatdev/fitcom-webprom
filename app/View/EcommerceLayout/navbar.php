<header>
  <nav
    class="navbar navbar-expand-lg navbar-light background-first"
    id="navbar">
    <div class="container-fluid nav-bar">
      <a class="navbar-brand" href="/">
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
            <a class="nav-link" href="/#kategori">Kategori </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#promo">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Keranjang </a>
          </li>
          <li class="nav-item align-content-center">
            <div class="dropdown">
              <button
                class="btn text-white bg-transparent dropdown-toggle border-0 p-0"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                <img
                  src="<?= BASE_URL ?>/storage/img/user.png "
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
</header>
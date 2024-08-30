<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- css bootstrap link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css" />
  <!-- css link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/login.css" />
  <!-- icon link -->
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/brands.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/solid.css" rel="stylesheet" />
  <!-- poppins link -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <title>IndoMadura | Situs Belanja Online Terlengkap</title>
  <style>
    .login-image {
      position: relative;
      background-image: url('<?= BASE_URL ?>/storage/img/bg-warung-madura.png');
      background-size: cover;
      background-position: center;
      width: 551px;
      height: 100vh;
      opacity: 1;
      transition: opacity 0.5s ease, width 0.5s ease, height 0.5s ease;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row login-container">
      <!-- Left side for image -->
      <div class="login-image d-none d-md-block">
        <div class="gradient-overlay"></div> <!-- Gradient overlay div -->
      </div>

      <!-- Right side for login form -->
      <div class="login-form d-flex align-items-center justify-content-center">
        <div class="w-75">
          <h4 class="mb-2 mt-3 header-text text-center">Selamat Datang di</h4>
          <h1 class="mb-2 header-text text-center fw-bold">IndoMadura</h1>
          <h3 class="mb-5 header-text text-center">Masuk ke Akun Admin</h3>
          <div class="form-container m-0 m-auto">
            <form method="post" action="<?= BASE_URL ?>admin/login">
              <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="username" name="username" class="form-control" id="username" placeholder="Massukkan Username">
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password anda">
              </div>
              <button type="submit" class="btn btn-primary w-100 mb-3 custom-button align-content-center">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
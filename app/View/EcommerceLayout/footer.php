<footer>
  <hr />

  <div class="container-fluid">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-6 mb-4">
          <div class="card h-100" style="border: none">
            <div class="card-body">
              <h5 class="card-title fw-bold mb-3">Tentang Kami</h5>
              <p class="card-text text-justify">
                Kami adalah toko kelontong yang berkomitmen untuk
                menyediakan berbagai kebutuhan sehari-hari dengan harga
                terjangkau dan kualitas terbaik. Di toko kami, Anda dapat
                menemukan berbagai produk mulai dari bahan makanan,
                kebutuhan rumah tangga, hingga perlengkapan pribadi. Kami
                juga terus berinovasi untuk meningkatkan layanan kami agar
                dapat memenuhi kebutuhan Anda dengan lebih baik.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mb-4">
          <div class="card h-100" style="border: none">
            <div class="card-body">
              <h5 class="card-title fw-bold mb-3">Kontak</h5>
              <p class="card-text">
                Alamat Toko: Jl. Bukhori, Candi, Sidoarjo<br />
                Telepon: (+62) 1234-5678<br />
                Email: indomadura@tokokelontong.com
              </p>
              <p class="card-text">
                Jam Operasional:<br />
                Senin - Sabtu: 08:00 - 21:00<br />
                Minggu: 09:00 - 18:00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
<script src="<?= BASE_URL ?>/assets/jquery-3.4.1.min.js"></script>
<script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  let images = [
    "<?= BASE_URL ?>/storage/img/bg-warung-madura.png",
    "<?= BASE_URL ?>/storage/img/bg-rumah-warung.jpg",
    "<?= BASE_URL ?>/storage/img/suramadu.jpg",
  ];
</script>
<?php if (isset($model['script'])) { ?>
  <?php foreach ($model['script'] as $value) { ?>
    <script src="<?= BASE_URL ?>/assets/js/<?= $value ?>.js"></script>
  <?php } ?>
<?php } ?>
<script>
  /* Execute the magnify function: */
  magnify("myimage", 3);
  /* Specify the id of the image, and the strength of the magnifier glass: */
</script>

</html>
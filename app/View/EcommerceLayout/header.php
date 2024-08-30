<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- css bootstrap link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css" />
  <!-- css link -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css" />
  <!-- icon link -->
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/brands.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/assets/fontawesome/css/solid.css" rel="stylesheet" />
  <?php if (isset($model['link'])) { ?>
    <?php foreach ($model['link'] as $link) {
    ?>
      <link href="<?= BASE_URL ?>/assets/css/<?= $link ?>.css" rel="stylesheet" />

    <?php } ?>
  <?php } ?>
  <!-- poppins link -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <title>IndoMadura | Situs Belanja Online Terlengkap</title>
  <style>
    * {
      box-sizing: border-box;
    }

    .img-magnifier-container {
      position: relative;
    }

    .img-magnifier-glass {
      position: absolute;
      border: 3px solid #000;
      border-radius: 50%;
      cursor: none;
      /*Set the size of the magnifier glass:*/
      width: 100px;
      height: 100px;
    }
  </style>
  <script>
    function magnify(imgID, zoom) {
      var img, glass, w, h, bw;
      img = document.getElementById(imgID);

      /* Create magnifier glass: */
      glass = document.createElement("DIV");
      glass.setAttribute("class", "img-magnifier-glass");

      /* Insert magnifier glass: */
      img.parentElement.insertBefore(glass, img);

      /* Set background properties for the magnifier glass: */
      glass.style.backgroundImage = "url('" + img.src + "')";
      glass.style.backgroundRepeat = "no-repeat";
      glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
      bw = 3;
      w = glass.offsetWidth / 2;
      h = glass.offsetHeight / 2;

      /* Execute a function when someone moves the magnifier glass over the image: */
      glass.addEventListener("mousemove", moveMagnifier);
      img.addEventListener("mousemove", moveMagnifier);

      /*and also for touch screens:*/
      glass.addEventListener("touchmove", moveMagnifier);
      img.addEventListener("touchmove", moveMagnifier);

      function moveMagnifier(e) {
        var pos, x, y;
        /* Prevent any other actions that may occur when moving over the image */
        e.preventDefault();
        /* Get the cursor's x and y positions: */
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /* Prevent the magnifier glass from being positioned outside the image: */
        if (x > img.width - (w / zoom)) {
          x = img.width - (w / zoom);
        }
        if (x < w / zoom) {
          x = w / zoom;
        }
        if (y > img.height - (h / zoom)) {
          y = img.height - (h / zoom);
        }
        if (y < h / zoom) {
          y = h / zoom;
        }
        /* Set the position of the magnifier glass: */
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /* Display what the magnifier glass "sees": */
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
      }

      function getCursorPos(e) {
        var a, x = 0,
          y = 0;
        e = e || window.event;
        /* Get the x and y positions of the image: */
        a = img.getBoundingClientRect();
        /* Calculate the cursor's x and y coordinates, relative to the image: */
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /* Consider any page scrolling: */
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {
          x: x,
          y: y
        };
      }
    }
  </script>
  <link rel="stylesheet" href="<?= BASE_URL ?>/storage/img/logo_canva_1.png" />
</head>

<body>
<?php
  include_once 'greetings.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Bontang Tanggap Covid</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"
    />
    <meta name="description" content="Finapp HTML Mobile Template" />
    <meta
      name="keywords"
      content="bootstrap, mobile template, cordova, phonegap, mobile, html, responsive"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/img/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      href="assets/img/favicon.png"
      sizes="32x32"
    />
    <link rel="shortcut icon" href="assets/img/favicon.png" />
  </head>

  <body>
    <!-- loader -->
    <div id="loader">
      <img src="assets/img/loading-bars.svg" alt="icon" class="loading-icon" />
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <?php include 'menu-header.php' ?>

    <!-- * App Header -->
    <?php
      $page = (isset($_GET['page']))? $_GET['page'] : "main";
      switch ($page) {
        case 'form': include "form.php"; break;
        // case 'master_category': include "page/master/master_category.php"; break;
        // case 'master_project': include "page/master/master_project.php"; break;
        default : include 'home.php'; 
      }
    ?>

    <!-- Menu Footer -->
    <?php include 'menu-footer.php' ?>


    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <!-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Pull To Refresh Js File -->
    <script src="//unpkg.com/hammer-touchemulator@0.0.2/touch-emulator.js"></script>
    <script>TouchEmulator()</script>
    <script src="assets/js/plugins/pulltorefresh/pulltorefresh.js"></script>
    <!-- <script src="assets/js/plugins/pulltorefresh/touch-emulator.js"></script> -->
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

  </body>
</html>

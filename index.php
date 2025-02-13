<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SSB Tunas Jaya Duriangkang Official Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include 'connection.php'; ?>

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.2.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'header.php'; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">SSB Tunas Jaya Duriangkang</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Ciptakan pemain yang berakhlak mulia, berkualitas dan profesional
          </h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="registration-member.php" class="btn-get-started scrollto">Registrasi Sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/logo-gambar.png" class="img-fluid animated" alt="logo gambar">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-4 col-12">
            <img src="assets/img/clients/pssi.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="assets/img/clients/fossbat.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="assets/img/clients/pemko-batam.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Berita ======= -->
    <section id="more-services" class="more-services">
      <div class="container">

        <div class="row">
          <?php
          $sql = 'SELECT * FROM `news`';
          $result = $conn->query($sql);

          while ($row = $result->fetch_assoc()) {
            $image_path = str_replace('..', '', $row['images']);
            $src = 'http://' . $_SERVER['HTTP_HOST'] . $image_path;
          ?>
            <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up">
              <div class="card">
                <img src="<?php echo $src ?>" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title"><a href=""><?php echo $row['name'] ?></a></h5>
                  <div class="meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="23-01-2020"><?php echo $row['date'] ?></time></a></li>
                    </ul>
                  </div>
                  <p class="card-text"><?php echo $row['description'] ?></p>
                  <div class="read-more"><a href="news-detail.php?id=<?php echo $row['id']; ?>"> Read More</a></div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Berita -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>THESIS HUB - Life Insurance Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url('assets/lib/animate/animate.min.css') ?>" />
  <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div
      class="spinner-border text-primary"
      style="width: 3rem; height: 3rem"
      role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Carousel Start -->
  <div class="header-carousel owl-carousel">
    <div class="header-carousel-item bg-primary">
      <div class="carousel-caption">
        <div class="container">
          <div class="row g-4 align-items-center">
            <div class="col-lg-7 animated fadeInLeft">
              <div class="text-sm-center text-md-start">
                <h4 class="text-white text-uppercase fw-bold mb-4">
                  Welcome To THESIS HUB
                </h4>
                <h1 class="display-1 text-white mb-4">
                  Unggah Dokumen Akhir Anda disini
                </h1>
                <p class="mb-5 fs-5">
                  Website Pengunggahan Laporan Projek Akhir Mahasiswa
                Politeknik ABC
                </p>
                <div
                  class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                  <a
                    class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                    href="<?php echo base_url('Login') ?>"><i class="fas fa-play-circle me-2"></i> Masuk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 animated fadeInRight">
              <div class="calrousel-img" style="object-fit: cover">
                <img src="<?php echo base_url('assets/img/awal.png') ?>" class="img-fluid w-100" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Copyright Start -->
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    .container-fluid {
      flex: 1;
    }

    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #333;
      /* Sesuaikan dengan warna yang diinginkan */
      color: white;
    }

    .container {
      padding: 10px;
    }
  </style>

  <footer>
    <div class="container-fluid copyright py-4">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-md-12 text-center text-md-end mb-md-0">
            <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>THESIS HUB
              </a>, All right reserved.</span>
          </div>
         
        </div>
      </div>
    </div>
  </footer>

  <!-- Copyright End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/lightbox/js/lightbox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>

  <!-- Template Javascript -->
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>

</html>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Libraries Stylesheet -->
  <link rel="stylesheet" href="lib/animate/animate.min.css') ?>">
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

  <!-- Topbar Start -->

  <!-- Topbar End -->
  <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
      <?php echo $this->session->flashdata('error'); ?>
    </div>
  <?php endif; ?>
  <!-- Contact Start -->
  <div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
      <div
        class="text-center mx-auto pb-5 wow fadeInUp"
        data-wow-delay="0.2s"
        style="max-width: 800px">
        <h4 class="text-primary">Halaman Login</h4>
        <h1 class="display-4 mb-4">Website THESIS HUB </h1>
      </div>
      <div class="row g-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
          <div class="contact-img d-flex justify-content-center">
            <div class="contact-img-inner">
              <img src="<?php echo base_url('assets/img/awal.png') ?>" class="img-fluid w-100" alt="Image" />
            </div>
          </div>
        </div>
        <div class="col-xl-6 wow fadeInRight d-flex align-items-center" data-wow-delay="0.4s">
          <div class="w-100">
            <h4 class="text-primary">Form Login</h4>
            <p>Masukkan Username dan Password Anda disini!</p>
            <form action="<?php echo base_url('Login/check_login'); ?>" method="post">
              <div class="row g-3">
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0"
                      id="username"
                      name="username"
                      placeholder="username" required />
                    <label for="username">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="password"
                      class="form-control border-0"
                      id="password"
                      name="password"
                      placeholder="password" required />
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100 py-3">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- Contact End -->



  <!-- Copyright Start -->
  <div class="container-fluid copyright py-4">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-md-12 text-center text-md-end mb-md-0">
          <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>THESIS HUB</a>, All right reserved.</span>
        </div>

      </div>
    </div>
  </div>
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
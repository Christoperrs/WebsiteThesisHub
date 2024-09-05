<!DOCTYPE html>
<html lang="en">
<?php
function isActive($url)
{
  return (strpos(current_url(), $url) != false) ? 'active' : '';
}
?>

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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Stylesheet -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
  <!-- DataTables Buttons Extension CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
  <!-- DataTables Buttons Extension -->
  <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
  <!-- JSZip for exporting to Excel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <!-- PDFMake for exporting to PDF -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <!-- HTML5 Buttons -->
  <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
  <!-- Print Button -->
  <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
  <style>
    #myTable {
      max-width: 100%;
      overflow-x: auto;
      white-space: nowrap;
    }

    #myTable2 {
      max-width: 100%;
      overflow-x: auto;
      white-space: nowrap;
    }

    .table-wrapper {
      overflow-x: auto;
    }

    .text-left {
      text-align: left;
    }
  </style>

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


  <!-- Navbar & Hero Start -->
  <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#" class="navbar-brand d-flex align-items-center" style="padding: 0 15px; width: auto;">
          <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Logo" style="height: 70px; width: auto;">
          <h1 class="text-primary mb-0 ms-3">THESIS HUB</h1>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-0 mx-lg-auto">
            <!-- <a href="index.html" class="nav-item nav-link">Home</a> -->
            <?php if (in_array($this->session->userdata('status'), [1])): ?>
              <a href="<?php echo base_url('Admin'); ?>" class="nav-item nav-link <?php echo isActive('Admin') ?>">Admin</a>
            <?php endif; ?>
            <?php if (in_array($this->session->userdata('status'), [1])): ?>
              <a href="<?php echo base_url('Mahasiswa'); ?>" class="nav-item nav-link <?php echo isActive('Mahasiswa') ?>">Mahasiswa</a>
            <?php endif; ?>
            <a href="<?php echo base_url('ProyekAkhir'); ?>" class="nav-item nav-link <?php echo isActive('ProyekAkhir') ?>">Projek Akhir</a>
            <a href="#" class="nav-item nav-link" id="logoutLink">Logout</a>


          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar & Hero End -->



  <!-- About Start -->

  <?php echo $contentPlaceHolder; ?>
  <!-- About End -->

  <!-- Copyright Start -->
  <footer class="container-fluid copyright py-4">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-md-12 text-center text-md-end mb-md-0">
          <span class="text-body">
            <a href="#" class="border-bottom text-white">
              <i class="fas fa-copyright text-light me-2"></i>THESIS HUB
            </a>, All rights reserved.
          </span>
        </div>
      
      </div>
    </div>
  </footer>

  <script>
    document.getElementById('logoutLink').addEventListener('click', function(e) {
      e.preventDefault(); // Mencegah tautan default berfungsi

      Swal.fire({
        title: 'Anda yakin ingin logout?',
        text: "Anda akan keluar dari sesi ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, logout!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "<?php echo base_url('Login/logout'); ?>";
        }
      });
    });
  </script>
  <!-- Copyright End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.jsjs') ?>"></script>
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
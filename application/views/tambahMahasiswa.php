<?php
ob_start();
?>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px">
    <h4
      class="text-white display-4 mb-4 wow fadeInDown"
      data-wow-delay="0.1s">
      Kelola Mahasiswa
    </h4>
    <ol
      class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
      data-wow-delay="0.3s">
      <li class="breadcrumb-item"><a href="index.html">Ta,bah Mahasiswa</a></li>
    </ol>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->

<div class="container py-5">
  <div class="row g-5">
    <div class="container mt-5">
      <h2>Tambah Mahasiswa</h2>
      <form action="<?= base_url('Mahasiswa/add'); ?>" method="post">
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input
            type="number"
            class="form-control"
            id="nim"
            name="nim"
            required />
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input
            type="text"
            class="form-control"
            id="nama"
            name="nama"
              oninput="validateTextInput(this)"
            required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group">
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              required />
            <button
              type="button"
              class="btn btn-outline-secondary"
              id="togglePassword">
              <i class="fas fa-eye"></i>
            </button>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              required />
          </div>
        </div>
        <button type="submit" class="btn btn-primary">
          Tambah Mahasiswa
        </button>
      </form>
    </div>

    <script>
      function validateTextInput(input) {
          input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
      }
      const togglePassword = document.querySelector("#togglePassword");
      const password = document.querySelector("#password");

      togglePassword.addEventListener("click", function() {
        const type =
          password.getAttribute("type") === "password" ?
          "text" :
          "password";
        password.setAttribute("type", type);
        this.classList.toggle("fa-eye-slash");
      });
    </script>
  </div>
</div>
<!-- About End -->
<?php
$contentPlaceHolder = ob_get_contents();
/* Clean out the buffer, and destroy the output buffer */
ob_end_clean();
/* Call the master page. It will echo the content of the placeholders in the designated locations */
include __DIR__ . "/layout.php";
?>
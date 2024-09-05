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
      <li class="breadcrumb-item">
        <a href="index.html">Data Mahasiswa</a>
      </li>
    </ol>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->

<div class="container py-5">
  <div class="row g-5">
    <div class="container mt-5">
      <h2>Daftar Mahasiswa</h2>
      <a href="<?= base_url('mahasiswa/tambahMahasiswa'); ?>" class="btn btn-primary mb-2">Tambah Mahasiswa</a>
      <div class="table-wrapper">
        <table class="table table-bordered" id="myTable">
          <thead>
            <tr>
             
              <th>Nama</th>
              <th>NIM</th>
              <th>Password</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($mahasiswas as $mahasiswa): ?>
              <tr>
              <td><?= $mahasiswa->nama; ?></td>
                <td><?= $mahasiswa->nim; ?></td>
               
                <td>
                  <div class="input-group">
                    <input
                      type="password"
                      class="form-control"
                      value="<?= $mahasiswa->password; ?>"
                      readonly />
                    <button
                      type="button"
                      class="btn btn-outline-secondary toggle-password">
                      <i class="fas fa-eye"></i>
                    </button>
                  </div>
                </td>
                <td>
                  <a
                    href="<?= base_url('Mahasiswa/edit/' . $mahasiswa->nim); ?>"
                    class="btn btn-warning">Edit</a>
                  <a
                    href="<?= base_url('Mahasiswa/delete/' . $mahasiswa->nim); ?>"
                    class="btn btn-danger"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?');">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        new DataTable('#myTable', {
          // Menambahkan opsi className untuk meratakan teks ke kiri
          columnDefs: [{
            className: "text-left",
            targets: "_all"
          }]
        });
      });

      document.querySelectorAll(".toggle-password").forEach((button) => {
        button.addEventListener("click", function() {
          const input = this.previousElementSibling;
          const type =
            input.getAttribute("type") === "password" ? "text" : "password";
          input.setAttribute("type", type);
          this.classList.toggle("fa-eye-slash");
        });
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
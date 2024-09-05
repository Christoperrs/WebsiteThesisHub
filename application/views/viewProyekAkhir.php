<?php
ob_start();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px">
    <h4
      class="text-white display-4 mb-4 wow fadeInDown"
      data-wow-delay="0.1s">
      Kelola Proyek Akhir
    </h4>
    <ol
      class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
      data-wow-delay="0.3s">
      <li class="breadcrumb-item"><a href="index.html">Data Proyek Akhir</a></li>
    </ol>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container py-5">
  <div class="row g-5">

    <?php if (in_array($this->session->userdata('status'), [2])): ?>
      <h2>Daftar Laporan Proyek Akhir Pribadi</h2>
      <div class="row">
        <?php if (count($laporan_proyek_akhir_saya) < 1): ?>
          <div class="col-md-3">
            <a href="<?= base_url('ProyekAkhir/tambahProyekAkhir'); ?>" class="btn btn-primary mb-2">Tambah Laporan</a>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if (in_array($this->session->userdata('status'), [2])): ?>

      <div class="table-wrapper">
        <table class="table table-bordered" id="myTable">
          <thead>
            <tr>
              <th class="text-left">Nama Laporan Proyek Akhir</th>
              <th class="text-left">File Laporan Proyek Akhir</th>
              <th class="text-left">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($laporan_proyek_akhir_saya as $laporan): ?>
              <tr>
                <td class="text-left"><?= $laporan->nama_laporan; ?></td>
                <td class="text-left" d>
                  <a
                    href="<?= base_url('uploads/' . $laporan->path); ?>"
                    target="_blank">Lihat Laporan</a>
                </td>
                <td class="text-left">
                <a href="#" class="btn btn-danger" onclick="confirmDelete('<?= $laporan->idProyek; ?>')">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
    <?php if (in_array($this->session->userdata('status'), [1])): ?>
    <h2>Daftar Laporan Proyek Akhir Mahasiswa</h2>
    <div class="table-wrapper">
      <table class="table table-bordered" id="myTable2">
        <thead>
          <tr>
            <th class="text-left">Nama Mahasiswa</th>
            <th class="text-left">Nama Laporan Proyek Akhir</th>
            <th class="text-left">File Laporan Proyek Akhir</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($laporan_proyek_akhir as $laporan): ?>
            <tr>
              <td class="text-left"><?= $laporan->nama; ?></td>
              <td class="text-left"><?= $laporan->nama_laporan; ?></td>
              <td class="text-left">
                <a
                  href="<?= base_url('uploads/' . $laporan->path); ?>"
                  target="_blank">Lihat Laporan</a>
              </td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php endif; ?>
  </div>
</div>
<script>
  function confirmDelete(idProyek) {
    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: 'Anda tidak akan dapat mengembalikan laporan ini!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '<?= base_url('ProyekAkhir/delete/'); ?>' + idProyek;
      }
    });
  }
</script>
<script>
  $(document).ready(function() {
    new DataTable('#myTable', {

    });
    new DataTable('#myTable2', {

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
<!-- About End -->
<?php
$contentPlaceHolder = ob_get_contents();
/* Clean out the buffer, and destroy the output buffer */
ob_end_clean();
/* Call the master page. It will echo the content of the placeholders in the designated locations */
include __DIR__ . "/layout.php";
?>
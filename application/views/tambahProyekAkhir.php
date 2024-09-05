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
      <li class="breadcrumb-item"><a href="index.html">Tambah Proyek Akhir</a></li>
    </ol>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->

<div class="container py-5">
  <div class="row g-5">

    <div class="container mt-5">
      <h2>Upload Laporan Proyek Akhir</h2>
      <form
        action="<?= base_url('ProyekAkhir/add'); ?>"
        method="post"
        enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nama_laporan" class="form-label">Nama Laporan Proyek Akhir</label>
          <input
            type="text"
            class="form-control"
            id="nama_laporan"
            name="nama_laporan"
            required />
        </div>
        <div class="mb-3">
          <label for="file_proyek_akhir" class="form-label">Upload File Laporan Proyek Akhir</label>
          <input
            type="file"
            class="form-control"
            id="path"
            name="path"
            required />
        </div>
        <button type="submit" class="btn btn-primary">
          Upload Laporan
        </button>
      </form>
    </div>
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
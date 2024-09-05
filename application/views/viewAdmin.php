<?php
ob_start();
?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />

<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4
            class="text-white display-4 mb-4 wow fadeInDown"
            data-wow-delay="0.1s">
            Kelola Admin
        </h4>
        <ol
            class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
            data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Data Admin</a></li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->

<div class="container py-5">
    <div class="row g-5">
        <div class="col-12">
            <h2 class="mt-1 mb-2">Daftar Admin</h2>
            <a href="<?= base_url('admin/tambahAdmin'); ?>" class="btn btn-primary mb-2">Tambah Admin</a>
            <div class="table-wrapper">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                           
                            <th>Nama</th>
                            <th>NPK</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($admins as $admin): ?>
                            <tr>
                                
                                <td><?= $admin->nama; ?></td>
                                <td><?= $admin->npk; ?></td>
                                <td><?= $admin->email; ?></td>
                                <td>
                                    <div class="input-group">
                                        <input type="password" class="form-control" value="<?= $admin->password; ?>" readonly>
                                        <button type="button" class="btn btn-outline-secondary toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/edit/' . $admin->npk); ?>" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmDelete('<?= $admin->npk; ?>')">Delete</a>



                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
  function confirmDelete(npk) {
    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: 'Anda tidak akan dapat mengembalikan data ini!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '<?= base_url('admin/delete/'); ?>' + npk;
      }
    });
  }
</script>
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
                const type = input.getAttribute("type") === "password" ? "text" : "password";
                input.setAttribute("type", type);
                this.classList.toggle("fa-eye-slash");
            });
        });
    </script>

</div>
<!-- About End -->
<?php
$contentPlaceHolder = ob_get_contents();
/* Clean out the buffer, and destroy the output buffer */
ob_end_clean();
/* Call the master page. It will echo the content of the placeholders in the designated locations */
include __DIR__ . "/layout.php";
?>
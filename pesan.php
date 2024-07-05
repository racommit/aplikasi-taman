<?php


?>
<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <!-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <?php
    include("header.php")
    ?>
    <?php
    include("sitebar.php")
    ?>
    </nav>
    </div> <!--end::Sidebar Wrapper-->
    </aside> <!--end::Sidebar--> <!--begin::App Main-->
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Pesan</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Pesan
                            </li>
                        </ol>
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->
        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->

                <div class="row"> <!-- Start col -->

                    <?php
                    $sql = "SELECT * FROM tb_pesanan ORDER BY id ASC";
                    $result = mysqli_query($conn, $sql);

                    ?>
                    <div class="card mb-4">
                        <div class="card-header">
                            
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
  Tambah Pesanan
</button>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Lauk utama</th>
                                        <th>Lauk tambahan 1</th>
                                        <th>Lauk tambahan 2</th>
                                        <th>Catatan</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['nim'] ?></td>
                                            <td><?= $row['lauk_utama'] ?></td>
                                            <td><?= $row['lauk_tambahan1'] ?></td>
                                            <td><?= $row['lauk_tambahan2'] ?></td>
                                            <td><?= $row['catatan'] ?></td>
                                            <td><?= $row['waktu'] ?></td>

                                            <td>
                                                <button type="button" class="btn btn-warning edit-btn" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama'] ?>" data-nim="<?= $row['nim'] ?>" data-lauk-utama="<?= $row['lauk_utama'] ?>" data-lauk-tambahan1="<?= $row['lauk_tambahan1'] ?>" data-lauk-tambahan2="<?= $row['lauk_tambahan2'] ?>" data-catatan="<?= $row['catatan'] ?>">Edit</button>
                                                <button type="button" class="btn btn-danger delete-btn" data-id="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#confirmModal">Delete</button>
                                            </td>

                                        </tr>

                                    <?php $no++;
                                    } ?>

                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->

                    </div> <!-- /.row (main row) -->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
    </main> <!--end::App Main--> <!--begin::Footer-->
    <?php
    include("footer.php")
    ?>
<!-- Modal Konfirmasi -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmModalLabel">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Yakin ingin menghapus pesanan ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="tambahForm" action="tambah.php" method="post">
      <div class="modal-body">
                    <input type="hidden" id="tambahId" name="id">
                    <div class="mb-3">
                        <label for="tambahNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="tambahNama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambahNim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="tambahNim" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambahLaukUtama" class="form-label">Lauk Utama</label>
                        <input type="text" class="form-control" id="tambahLaukUtama" name="lauk_utama" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambahLaukTambahan1" class="form-label">Lauk Tambahan 1</label>
                        <input type="text" class="form-control" id="tambahLaukTambahan1" name="lauk_tambahan1" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambahLaukTambahan2" class="form-label">Lauk Tambahan 2</label>
                        <input type="text" class="form-control" id="tambahLaukTambahan2" name="lauk_tambahan2" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambahCatatan" class="form-label">Catatan</label>
                        <textarea class="form-control" id="tambahCatatan" name="catatan" required></textarea>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                    <button name="submit" type="submit" class="btn btn-primary" id="simpan">Save</button>
                </div>
              
            </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" action="edit.php" method="post">
            <div class="modal-body">
                    <input type="hidden" id="editId" name="id">
                    <div class="mb-3">
                        <label for="editNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="editNama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="editNim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="editNim" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="editLaukUtama" class="form-label">Lauk Utama</label>
                        <input type="text" class="form-control" id="editLaukUtama" name="lauk_utama" required>
                    </div>
                    <div class="mb-3">
                        <label for="editLaukTambahan1" class="form-label">Lauk Tambahan 1</label>
                        <input type="text" class="form-control" id="editLaukTambahan1" name="lauk_tambahan1" required>
                    </div>
                    <div class="mb-3">
                        <label for="editLaukTambahan2" class="form-label">Lauk Tambahan 2</label>
                        <input type="text" class="form-control" id="editLaukTambahan2" name="lauk_tambahan2" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCatatan" class="form-label">Catatan</label>
                        <textarea class="form-control" id="editCatatan" name="catatan" required></textarea>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                    <button name="submit" type="submit" class="btn btn-primary" id="simpan">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
    var deleteBtns = document.querySelectorAll('.delete-btn');
    var confirmDeleteBtn = document.getElementById('confirmDelete');
    var itemId;

    deleteBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        itemId = this.getAttribute('data-id');
      });
    });

    confirmDeleteBtn.addEventListener('click', function () {
      if (itemId) {
        window.location.href = 'delete.php?id=' + itemId;
      }
    });


        let table = new DataTable('#myTable', {
    // options
});
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script>
        const connectedSortables =
            document.querySelectorAll(".connectedSortable");
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: "shared",
                handle: ".card-header",
            });
        });

        const cardHeaders = document.querySelectorAll(
            ".connectedSortable .card-header",
        );
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = "move";
        });
    </script> <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
   
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script> <!-- jsvectormap -->
    
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Pesanan berhasil dihapus!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                </div>
            </div>
        </div>
    </div>

    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        const editButtons = document.querySelectorAll('.edit-btn');
        const editForm = document.getElementById('editForm');
        
      
        function form_submit() {
            document.getElementById("simpan").submit();
        }    

        


        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');
                const nim = this.getAttribute('data-nim');
                const laukUtama = this.getAttribute('data-lauk-utama');
                const laukTambahan1 = this.getAttribute('data-lauk-tambahan1');
                const laukTambahan2 = this.getAttribute('data-lauk-tambahan2');
                const catatan = this.getAttribute('data-catatan');

                document.getElementById('editId').value = id;
                document.getElementById('editNama').value = nama;
                document.getElementById('editNim').value = nim;
                document.getElementById('editLaukUtama').value = laukUtama;
                document.getElementById('editLaukTambahan1').value = laukTambahan1;
                document.getElementById('editLaukTambahan2').value = laukTambahan2;
                document.getElementById('editCatatan').value = catatan;
            });
        });

        
    });
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Check if the modal should be shown
        <?php if (isset($_GET['deleted']) && $_GET['deleted'] == 'true') : ?>
            var myModal = new bootstrap.Modal(document.getElementById('successModal'), {
                keyboard: false
            });
            myModal.show();
            var close = document.getElementById("close");
            close.addEventListener("click", function() {
                window.location.href = "pesan.php";
            })
        <?php endif; ?>
    </script>
</body><!--end::Body-->

</html>
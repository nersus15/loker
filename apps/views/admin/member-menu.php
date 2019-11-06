<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font Awesome -->
  <link href="<?= BASEPATH . '/asset/vendor/fontawesome/css/all.css" rel="stylesheet' ?>">
  <link href="<?= BASEPATH . '/asset/vendor/fontawesome/css/fontawesome.css" rel="stylesheet' ?>">
  <link href="<?= BASEPATH . '/asset/vendor/fontawesome/css/solid.css" rel="stylesheet' ?>">
  <!-- My CSS -->
  <link rel='icon' href="<?= BASEPATH . '/asset/logo/dreamatika_ellipse.png' ?>">
  <!-- Custom styles for this page -->
  <link href="<?= BASEPATH . '/asset/vendor/datatables/dataTables.bootstrap4.min.css' ?>" rel="stylesheet">
  <link href="<?= BASEPATH . '/asset/css/sb-admin-2.min.css" rel="stylesheet' ?>">

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <img class="img-profile rounded-circle" width="60" height="60" src="<?= BASEPATH . '/asset/img/logo/logo.jpg' ?>" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Sistem Koperasi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL . '/admin/member_menu' ?>">
          <i class="fas fa-users-cog"></i>
          <span>Members</span></a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-money-check-alt"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Transaksi:</h6>
            <a class="collapse-item" href="utilities-color.html">Data Pinjaman</a>
            <a class="collapse-item" href="utilities-animation.html">Tabungan Anggota</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-print"></i>
          <span>Cetak Transaksi</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Tables</h1>
      <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2019</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= BASEPATH . '/asset/vendor/jquery/jquery.min.js' ?>"></script>
  <script src="<?= BASEPATH . '/asset/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= BASEPATH . '/asset/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js'?>"></script>

  <!-- Page level plugins -->
  <script src="<?= BASEPATH . '/asset/vendor/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?= BASEPATH . '/asset/vendor/datatables/dataTables.bootstrap4.min.js' ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= BASEPATH . '/asset/js/datatables.js' ?>"></script>

</body>

</html>
</body>

</html>
<?php
include('../konfig.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['pass']); // Mengenkripsi password

    $koneksikan = new Konfig();
    $conn = $koneksikan->getConnection();

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='lihat_login.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: {$conn->error}'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Menambah User</title>

  <!-- Favicons -->
  <link href="assets/img/iconcafe.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Custom fonts for this template -->
  <link href="../../login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="../../login/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="../../login/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
        
        </div>
        <div class="sidebar-brand-text mx-3">SELAMAT DATANG ADMIN</div>
      </a>




      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="lihat_login.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pengolahan Data
      </div>

     <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="lihat_login.php">
          <i class="fas fa-user"></i>
          <span>User</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="../menumakanan_a/lihat_menu.php">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Dosen</span></a>
      </li>
        <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="../pemesanan/lihat_pemesanan.php">
          <i class="fas fa-building"></i>
          <span>Fasilitas</span></a>
      </li>
      <!-- Nav Item - Tables -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <!--  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username;?></span> -->

                <img class="img-profile rounded-circle" src="../../img/CMH.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->




         <div class="container">
          <center><h4>Masukan Data Dengan Benar</h4></center>
          <!-- Outer Row -->
          <div class="row justify-content-center">
            <div class="col-xl-5">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                <div class="col-lg-12">
                  <div class="p-5"> 


                    <form class="user" action="ptambah_login.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Masukkan username" name="username" required>
    </div>   
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="pass" required>
    </div>   
    <input type="submit" class="btn bg-gradient-info btn-block" value="Simpan">
    <input type="reset" class="btn bg-gradient-info btn-block" value="Reset">  
    <hr>
</form>

                      <center><a href="lihat_login.php">Kembali Ke Pengolahan Data Login</a></center>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" untuk keluar akun..!</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!-- Bootstrap core JavaScript-->
  <script src="../../login/vendor/jquery/jquery.min.js"></script>
  <script src="../../login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../../login/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../../login/js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="../..login//vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../login/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="../../login/js/demo/datatables-demo.js"></script>

</body>

</html>
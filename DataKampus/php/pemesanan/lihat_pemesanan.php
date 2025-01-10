<?php
  include('../konfig.php');
  
  session_start();
  // $username = $_SESSION['nama_user'];


  $pemesanan     = new Konfig;
  $koneksikan = $pemesanan->getConnection();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Fasilitas</title>

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
        <a class="nav-link" href="../../dash_admin.php">
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
        <a class="nav-link" href="../login/lihat_login.php">
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
        <a class="nav-link" href="lihat_pemesanan.php">
          <i class="fas fa-building"></i>
          <span>Fasilitas</span></a>
      </li>
     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

      
     
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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <form action="" method="get">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Menurut Nama Username..."  aria-describedby="basic-addon2" name="keyword" aria-label="Search">
                <!-- <input type="text" name="cari" aria-label="Search"> -->
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="cari">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
              </form>
            </div>
          </form>

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


        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><center>DATA FASILITAS</center></h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            
             <center><i class="fas fa-user-plus"></i>  <a href="f_inputpemesanan.php">Tambah Data</a></center>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   
                    <tr align="center">
                      <th>Nomor</th>
                      <!-- <th>Nomor Pemesanan</th> -->
                      <th>Nama Fasilitas</th>
                      <th>Jenis Fasilitas</th>
                   <!--    <th>Uang Masuk</th>
                      <th>Uang Kembalian</th>
                      <th>No Meja</th>
                      <th>Nama Pembeli</th>
                      <th>No Hp</th> -->
                     <!--  <th colspan="3">OPSI</th> -->
                    </tr>
                
                  </thead>   
                  <?php
                    if(isset($_GET['cari']))
                    {
                      $q = $_GET['keyword'];
                      $tampilins = "SELECT * FROM tb_fasilitas '%$q%' ";
                    }
                    else
                    {
                      $tampilins = "select * from tb_fasilitas order by 1 asc";
                    }
                    $tampilins   = mysqli_query($koneksikan, $tampilins);
                    $nomortabel  = 1;
                    while($baris = mysqli_fetch_array($tampilins))
                    {
                      echo "<tbody>";
                      echo "<td>$nomortabel</td>";

                      // echo "<td>$baris[id_pemesanan]</td>";
                      echo "<td>$baris[nama_fasilitas]</td>";
                      echo "<td>$baris[jenis_fasilitas]</td>";
                      // echo "<td>$baris[uang_masuk]</td>";
                      // echo "<td>$baris[uang_kembalian]</td>";
                      // echo "<td>$baris[no_meja]</td>";
                      // echo "<td>$baris[nama_pembeli]</td>";
                      // echo "<td>$baris[no_hp]</td>";

                      // echo "<td><a class='btn btn-success' href='tampilubah_pemesanan.php?id=$baris[id_pemesanan]'>Edit</a></td>"; 
                      // echo "<td><a class='btn btn-danger' href='hapus_pemesanan.php?id=$baris[id_pemesanan]'>Hapus</a></td>"; 
                    
                      echo "</tbody>";
                      $nomortabel++;
                    }
                  ?>
               
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
            <span>Copyright &copy; StudentOfSTTC</span>
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
  <script src="../../login//bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../../login/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../../login/js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="../../login/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../login/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="../../login/js/demo/datatables-demo.js"></script>

</body>
</html>
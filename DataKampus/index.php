<?php
  include('php/konfig.php');
  
  // session_start();
  // $username = $_SESSION['nama_user'];


  $petugas     = new Konfig;
  $koneksikan = $petugas->getConnection();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <title>STT Cipasung</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="shortcut icon" href="../images/sttc.png" type="image/x-icon" />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- boot -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>

    <!-- lightslider -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"
      integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"
      integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbarKu fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../images/sttc.png" alt="STT Cipasung" />
          <h1>STT CIPASUNG<br />High Education for All</h1>
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.html">Home</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="../profile.html">Profil</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../fasilitas.html">Fasilitas</a>
            </li>

            <li class="nav-item active">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                id="dropdownMenuLink"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                More
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                <a class="dropdown-item" href="ekstrakulikuler.html"
                  >Unit Kegiatan Mahasiswa</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Contact Us</a>
              </div>
            </li>
          </ul>
          
          <a class="nav-link login-admin ml-auto d-flex align-items-center" href="tampil_login.php">
            <img src="images/icon.png" alt="Login Icon" style="width: 60px; height: 60px; margin-right: 8px;" />
          </a>
          </form>
        </div>
      </div>
    </nav>

    <br><br><br><br><br>

        <!-- Begin Page Content -->
        <div class="container-fluid">
      
          <h1 class="h3 mb-2 text-gray-800"><center></center></h1>
        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            
             <center><a><i>Data Dosen</a></center>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   
                    <tr align="center">
                      <th>Nomor</th>
                      <th>Nama</th>
                      <th>NIDN</th>
                      <th>Departemen</th>
                      <th>Email</th>
                    </tr>
                
                  </thead>   


                  <?php
                    if(isset($_GET['cari']))
                    {
                      $q = $_GET['keyword'];
                      $tampilins = "SELECT * FROM tb_dosen WHERE nama LIKE '%$q%' ";
                    }
                    else
                    {
                      $tampilins = "select * from tb_dosen order by 1 asc";
                    }
                    $tampilins   = mysqli_query($koneksikan, $tampilins);
                    $nomortabel  = 1;
                    while($baris = mysqli_fetch_array($tampilins))
                    {
                      echo "<tbody>";
                      echo "<td>$nomortabel</td>";

                      // echo "<td>$baris[id_menumakanan]</td>";
                      echo "<td>$baris[nama]</td>";
                      echo "<td>$baris[NIDN]</td>";
                      echo "<td>$baris[departemen]</td>";
                      echo "<td>$baris[email]</td>";


                      // echo "<td><a class='btn btn-success' href='tampilubah_menu.php?id=$baris[id_menumakanan]'>Edit</a></td>";
                      // echo "<td><a class='btn btn-danger' href='hapus_menu.php?id=$baris[id_menumakanan]'>Hapus</a></td>"; 
                   
                   
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



       <!-- Begin Page Content -->
       <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><center></center></h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            
             <center><a>Data Fasilitas</a></center>
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
    
    
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4 class="my-4 text-white text-center">Contact Us</h4>

            <div class="footerContactUs">
              <div class="perFooterContactUs">
                <i class="fas text-white fa-envelope"></i>
                <p class="text-white">admin@sttcipasung.ac.id</p>
              </div>

              <div class="perFooterContactUs">
                <i class="fas text-white fa-phone-alt"></i>
                <p class="text-white">08111121212</p>
              </div>

              <div class="perFooterContactUs">
                <i class="fas text-white fa-road"></i>
                <p class="text-white">
                  Jl. Cisinga No.KM1, Cilampunghilir, Kec. Padakembang,
                  Kabupaten Tasikmalaya, Jawa Barat 46466
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <h4 class="my-4 text-center text-white">About</h4>
            <div class="footerAbout">
              <a href="" class="text-white">Fasilitas</a>
              <a href="" class="text-white">Galeri</a>
              <a href="" class="text-white">Contact Us</a>
              <a href="" class="text-white">Ekstrakulikuler</a>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <h4 class="my-4 text-white">Newsletter</h4>
            <form>
              <div class="form-group">
                <input
                  class="form-control"
                  type="search"
                  placeholder="Example@gmail.com"
                  aria-label="Search"
                />
                <button class="btn btn-success btn-newsletter" type="submit">
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footerCopyright">
      <p class="text-white">
        <i class="far fa-copyright"></i>2024 By :
        <span>ARKOM Group</span>.&nbsp; Inspired by
        <a href="https://sttcipasung.ac.id/">STT Cipasung</a>
      </p>
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
<?php
  include('php/login.php'); // Memasuk-kan skrip Login 
  
  if(isset($_SESSION['nama_user']))
  {
    if(isset($_SESSION['admin']))
    {
      	?><script language="JavaScript">alert("Selamat Datang Admin.!");
		document.location='dash_admin.php'</script><?php
    }
    else
    {
      if(isset($_SESSION['kasir']))
      {
        ?><script language="JavaScript">alert("Selamat Datang Kasir.!");
		document.location='dash_kasir.php'</script><?php
      }
      else
      {
        ?><script language="JavaScript">alert("Selamat Datang Manager.!");
		document.location='dash_manager.php'</script><?php
      }
    }
    
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
  <title>Login</title>

  <!-- Favicons -->
  <link href="../images/sttc.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Custom fonts for this template-->
  <link href="login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="login/css/sb-admin-2.min.css" rel="stylesheet">



</head>
<body class="bg-success">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-5">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="bg-white">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-12">
                <div class="p-5">

                  <center>
                  <table border="0">
                    <tr>
                      <td>
                    <img src="images/iconlogin.png" width="200" height="200">
                  <br></td>
                    </tr>
                  </table>
                  </center>
                  <br>
                  
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Masukan user" name="username">
                    </div>
                    
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass">
                    </div>
                    <input type="submit" name="login" class="btn bg-success btn-user btn-block" value="Login">  
                    <hr>
                  </form>
                    <center><a href="index.php">Kembali</a></center>
                  <hr>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="login/vendor/jquery/jquery.min.js"></script>
  <script src="login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="login/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="login/js/sb-admin-2.min.js"></script>

  </body>
</html>
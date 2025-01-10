<?php
include('konfig.php'); // Pastikan path benar

// Buat objek dari kelas Konfig
$admin = new konfig();
$koneksikan = $admin->getConnection();

// Mulai session
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pasword = md5($_POST['pasword']); // Password di-hash dengan MD5

    // Query SQL
    $sql = mysqli_query($koneksikan, "SELECT * FROM tb_user WHERE username='$username' AND pasword='$pasword'");
    $num = mysqli_num_rows($sql);

    // Validasi input
    if (!empty($username) && !empty($pasword)) {
        if ($num == 1) {
            // Buat session jika login berhasil
            $_SESSION['nama_user'] = $username;

            // Ambil hak akses dari database
            $row = mysqli_fetch_object($sql);
            $hak = $row->level;

            // Set session berdasarkan level user
            if ($hak == 'admin') {
                $_SESSION['admin'] = $hak;
                echo "<script>alert('Selamat Datang Admin!'); document.location='dash_admin.php';</script>";
            } elseif ($hak == 'kasir') {
                $_SESSION['kasir'] = $hak;
                echo "<script>alert('Selamat Datang Kasir!'); document.location='dash_kasir.php';</script>";
            } elseif ($hak == 'manager') {
                $_SESSION['manager'] = $hak;
                echo "<script>alert('Selamat Datang Manager!'); document.location='dash_manager.php';</script>";
            } else {
                echo "<script>alert('Hak akses tidak dikenal!'); document.location='tampil_login.php';</script>";
            }
        } else {
            // Jika login gagal
            echo "<script>alert('Login Gagal! Username atau Password salah.'); document.location='tampil_login.php';</script>";
        }
    } else {
        // Jika ada input kosong
        echo "<script>alert('Harap isi semua input!'); document.location='tampil_login.php';</script>";
    }
}
?>

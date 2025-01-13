<?php
// Membangun koneksi dengan server
$connection = mysqli_connect("localhost", "root", "", "db_sttc");

// Mulai session
session_start();

// Ambil data dari session
if (isset($_SESSION['nama_user'])) {
    $nama_user = $_SESSION['nama_user'];

    // Query untuk mengambil data user
    $ses_sql = mysqli_query($connection, "SELECT id, username, level FROM tb_user WHERE username='$nama_user'");
    $row = mysqli_fetch_assoc($ses_sql);

    $_SESSION['id_user'] = $row['id'];
    $_SESSION['level'] = $row['level'];

    // Jika session tidak ditemukan
    if (!isset($_SESSION['nama_user'])) {
        mysqli_close($connection);
        header('Location: tampil_login.php');
    }
} else {
    header('Location: tampil_login.php');
}
?>

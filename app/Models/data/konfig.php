<?php
$host = "localhost";  // Host database
$user = "root";       // Username database (sesuai konfigurasi XAMPP/WAMP)
$pass = "";           // Password database
$db   = "db_dosen";   // Nama database

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

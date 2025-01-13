<?php
include('../konfig.php');

// Buat koneksi ke database
$koneksikan = new Konfig;
$conn = $koneksikan->getConnection();

// Input yang diterima dari form
$username = $_POST['username'];
$password = md5($_POST['pass']); // Mengenkripsi password

// Simpan data ke tabel `tb_user`
$sql = "INSERT INTO tb_user (username, pasword) VALUES (?, ?)"; // Perbaiki nama kolom jadi "pasword"
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Gagal menyiapkan statement: " . $conn->error);
}

$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "<script>alert('Data berhasil disimpan!'); window.location='lihat_login.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data: {$conn->error}'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>

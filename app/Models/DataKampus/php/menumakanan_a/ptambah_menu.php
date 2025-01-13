<?php
include('../konfig.php');

// Buat koneksi ke database
$koneksikan = new Konfig;
$conn = $koneksikan->getConnection();

// Input yang diterima dari form
$nama = $_POST['nama'];
$NIDN = $_POST['NIDN'];
$departemen = $_POST['departemen'];
$email = $_POST['email'];

// Simpan data ke tabel `tb_dosen`
$sql = "INSERT INTO tb_dosen (nama, NIDN, departemen, email) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Gagal menyiapkan statement: " . $conn->error);
}

$stmt->bind_param("ssss", $nama, $NIDN, $departemen, $email);

if ($stmt->execute()) {
    echo "<script>alert('Data berhasil disimpan!'); window.location='lihat_menu.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data: {$stmt->error}'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>

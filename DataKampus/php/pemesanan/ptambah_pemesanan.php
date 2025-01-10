<?php
include('../konfig.php');

// Buat koneksi ke database
$koneksikan = new Konfig;
$conn = $koneksikan->getConnection();

// Input yang diterima dari form
$nama_fasilitas = $_POST['nama_fasilitas'];
$jenis_fasilitas = $_POST['jenis_fasilitas'];

// Simpan data ke tabel `tb_fasilitas`
$sql = "INSERT INTO tb_fasilitas (nama_fasilitas, jenis_fasilitas) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Gagal menyiapkan statement: " . $conn->error);
}

// Mengikat parameter dengan tipe data string
$stmt->bind_param("ss", $nama_fasilitas, $jenis_fasilitas);

if ($stmt->execute()) {
    echo "<script>alert('Data berhasil disimpan!'); window.location='lihat_pemesanan.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data: {$stmt->error}'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>

<?php
include("../konfig.php");

$petugas = new Konfig;
$koneksikan = $petugas->getConnection(); // Perbaikan, cukup gunakan satu objek Konfig

// INPUTAN YANG DITERIMA
$id = $_POST['id'];
$username = $_POST['username'];
$pasword = md5($_POST['pasword']); // Mengenkripsi password

// PROSES EDIT DATA
$petugas->edit("tb_user", "id", $id_user, array(
    "username" => $usern,
    "password" => $password // Pastikan nama kolom benar sesuai dengan tabel
));
?>
<script language="JavaScript">
    alert("Data berhasil disimpan dan diedit.");
    document.location="lihat_login.php";
</script>

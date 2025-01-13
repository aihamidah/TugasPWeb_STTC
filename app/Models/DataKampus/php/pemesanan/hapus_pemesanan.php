<?php
	include("../konfig.php");

	$petugas = new Konfig;

	$id = $_GET['id'];

	$petugas->hapus('tb_pemesanan', 'id_pemesanan', $id);
	
	?>
	<script language="JavaScript">
		alert("Data Berhasil Di Hapus!")
		document.location="lihat_pemesanan.php";
	</script>
	<?php

?>
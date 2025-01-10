<?php
	include("../konfig.php");

	$petugas = new Konfig;

	$id = $_GET['id'];

	$petugas->hapus('tb_login', 'id_login', $id);
	
	?>
	<script language="JavaScript">
		alert("DATA BERHASIL DIHAPUS!");
		document.location="lihat_login.php";
	</script>
	<?php

?>
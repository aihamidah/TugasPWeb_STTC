<?php
	include("../konfig.php");

	$petugas = new Konfig;

	$id = $_GET['id'];

	$petugas->hapus('tb_menumakanan', 'id_menumakanan', $id);
	
	?>
	<script language="JavaScript">
		alert("Data Berhasil di hapus!")
		document.location="lihat_menu.php";
	</script>
	<?php

?>
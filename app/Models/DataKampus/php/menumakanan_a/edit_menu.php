<?php

  include("../konfig.php");

  $petugas  = new Konfig;
  $koneksikan = new Konfig;

  $koneksikan =  $koneksikan->getConnection();
  
  //INPUTAN YANG DITERIMA
  //$id_petugas     = $_POST['id_petugas'];
  $id_menumakanan     = $_POST['id_menumakanan'];
  $nama_makanan          = $_POST['nama_makanan'];
  $satuan_harga           = $_POST['satuan_harga'];

  
  //proses simpan
  $petugas->edit("tb_menumakanan", "id_menumakanan", $id_menumakanan, array(  
                  "nama_makanan"        => $nama_makanan,
                  "satuan_harga"        => $satuan_harga
                  ));

    ?>
    <script language="JavaScript">
      alert("Data berhasi disimpan dan diedit.!");
      document.location="lihat_menu.php";
    </script>
    <?php

    

?>
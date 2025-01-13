<?php

  include("../konfig.php");

  $petugas  = new Konfig;
  $koneksikan = new Konfig;

  $koneksikan =  $petugas->getConnection();
  
  //INPUTAN YANG DITERIMA
  //$id_petugas     = $_POST['id_petugas'];
  $id_pemesanan         = $_POST['id_pemesanan'];
  $tgl_pemesanan        = $_POST['tgl_pemesanan'];
  $total_bayar          = $_POST['total_bayar'];
  $uang_masuk           = $_POST['uang_masuk'];
  $uang_kembalian       = $_POST['uang_kembalian'];
  $no_meja              = $_POST['no_meja'];
  $nama_pembeli         = $_POST['nama_pembeli'];
  $no_hp                = $_POST['no_hp'];

  
  //proses simpan
  $petugas->edit("tb_pemesanan", "id_pemesanan", $id_pemesanan, array(  
              
              'tgl_pemesanan'     => $tgl_pemesanan,
              'total_bayar'       => $total_bayar,
              'uang_masuk'        => $uang_masuk,
              'uang_kembalian'    => $uang_kembalian,
              'no_meja'           => $no_meja,
              'nama_pembeli'      => $nama_pembeli,
              'no_hp'             => $no_hp
                  ));

    ?>
    <script language="JavaScript">
      alert("Data berhasi disimpan dan diedit.!");
      document.location="lihat_pemesanan.php";
    </script>
    <?php

    

?>
<?php
  include "koneksi.php";
  $query = "SELECT * FROM pendaftaran";
  $tampil = $koneksi->query($query);
  $sql = "DELETE FROM pendaftaran WHERE id = ('$_GET[id]')";
  $data = $koneksi->query($sql);

  if(mysqli_query($koneksi, $sql)){
    echo "Data Berhasil Dihapus!";
      header ('location: lihat-pendaftaran.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($koneksi);
  }
  mysqli_close($koneksi);
?>

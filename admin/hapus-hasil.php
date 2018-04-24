<?php
  include "koneksi.php";
  $query = "SELECT * FROM hasil-tes";
  $tampil = $koneksi->query($query);
  $sql = "DELETE FROM hasil_tes WHERE id = ('$_GET[id]')";
  $data = $koneksi->query($sql);

  if(mysqli_query($koneksi, $sql)){
    echo "Data Berhasil Dihapus!";
      header ('location: hasil_tes.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($koneksi);
  }
  mysqli_close($koneksi);
?>

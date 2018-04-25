<?php
  include "koneksi.php";
  $query = "SELECT * FROM peserta";
  $tampil = $koneksi->query($query);
  $sql = "DELETE FROM peserta WHERE id = ('$_GET[id]')";
  $data = $koneksi->query($sql);

  if(mysqli_query($koneksi, $sql)){
    echo "Data Berhasil Dihapus!";
      header ('location: lihat-peserta.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($koneksi);
  }
  mysqli_close($koneksi);
?>

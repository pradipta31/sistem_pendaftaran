<?php
  include "koneksi.php";
  $query = "SELECT * FROM soal";
  $tampil = $koneksi->query($query);
  $sql = "DELETE FROM soal WHERE id_soal = ('$_GET[id_soal]')";
  $data = $koneksi->query($sql);

  if(mysqli_query($koneksi, $sql)){
    echo "Data Berhasil Dihapus!";
      header ('location: soal-tes.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($koneksi);
  }
  mysqli_close($koneksi);
?>

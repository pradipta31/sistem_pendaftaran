<?php
  include "koneksi.php";
  $query = "SELECT * FROM hasil_tes";
  $tampil = $koneksi->query($query);
  $sql = "DELETE FROM hasil_tes WHERE id_hasil_tes = ('$_GET[id_hasil_tes]')";
  $data = $koneksi->query($sql);
  $sql = "DELETE FROM tes WHERE id_hasil_tes = ('$_GET[id_hasil_tes]')";
  $data = $koneksi->query($sql);

  if(mysqli_query($koneksi, $sql)){
    header ('location: hasil-tes.php');
    echo "<script language='javascript'>alert('Data berhasil dihapus!');</script>";
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($koneksi);
  }
  mysqli_close($koneksi);
?>

<?php
  include "../koneksi.php";

  $sql = "DELETE a.*, b.* FROM pendaftaran a JOIN calon_peserta b ON a.id = b.id_calon_peserta WHERE a.id = 1";

  $result  = mysqli_query($koneksi, $sql);

  if(mysqli_query($koneksi, $sql)){
    echo "Data Berhasil Dihapus!";
      header ('location: lihat-pendaftaran.php');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($koneksi);
  }
  mysqli_close($koneksi);
?>

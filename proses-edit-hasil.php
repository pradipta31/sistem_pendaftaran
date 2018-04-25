<?php
  include "koneksi.php";
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $nilai_tulis= $_POST['nilai_tulis'];
  $nilai_wawancara = $_POST['nilai_wawancara'];
  $total_nilai = $_POST['total_nilai'];
  $status = $_POST['status'];

  $query = "UPDATE hasil_tes SET  nama ='$nama', nilai_tulis = '$nilai_tulis', nilai_wawancara= '$nilai_wawancara',
  total_nilai = '$total_nilai', status ='$status', WHERE id = '$id'";
  mysqli_query($koneksi,$query);
  header ("location: hasil-tes.php");
 ?>

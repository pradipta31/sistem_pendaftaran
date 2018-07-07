<?php
  include "koneksi.php";
  $id = $_POST['id_hasil_tes'];
  $nomor_peserta = $_POST['nomor_peserta'];
  $nama = $_POST['nama'];
  $nilai_tulis = $_POST['nilai_tulis'];
  $nilai_wawancara = $_POST['nilai_wawancara'];
  $total_nilai = $_POST['total_nilai'];
  $status = $_POST['status'];

  $query = "UPDATE hasil_tes SET nomor_peserta='$nomor_peserta', nama='$nama', nilai_tulis = '$nilai_tulis',
  nilai_wawancara = '$nilai_wawancara', total_nilai = '$total_nilai', status = '$status' WHERE id_hasil_tes = '$id'";

  mysqli_query($koneksi,$query);
  header ("location: hasil-tes.php");
 ?>

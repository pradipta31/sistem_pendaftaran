<?php
  include "koneksi.php";
    $nomor_pendaftaran = $_POST['nomor_pendaftaran'];
    $nama = $_POST['nama'];
    $nilai_tulis = $_POST['nilai_tulis'];
    $nilai_wawancara = $_POST['nilai_wawancara'];
    $total_nilai = $_POST['total_nilai'];
    $status = $_POST['status'];
    if ($koneksi) {
      $query = "INSERT INTO hasil_tes (nomor_pendaftaran,nama,nilai_tulis,nilai_wawancara, total_nilai, status) VALUES
      ('$nomor_pendaftaran','$nama','$nilai_tulis','$nilai_wawancara','$total_nilai', '$status')";
      $hasil = mysqli_query($koneksi, $query);
      header ('location: hasil-tes.php');
      }else{
        echo "Server Not Connected";
      }
?>

<?php
  include "koneksi.php";
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $nomor_pendaftaran = $_POST['nomor_pendaftaran'];
    $nama = $_POST['nama'];
    $nilai_tulis = $_POST['nilai_tulis'];
    $nilai_wawancara = $_POST['nilai_wawancara'];
    $total_nilai = $nilai_tulis + $nilai_wawancara;
    if ($koneksi) {
    $query = "INSERT INTO hasil_tes SET (id_pendaftaran,nomor_pendaftaran,nama,nilai_tulis,nilai_wawancara,total_nilai) VALUES
    ('$id_pendaftaran', '$nomor_pendaftaran','$nama','$nilai_tulis','$nilai_wawancara','$total_nilai')";
    $hasil = mysqli_query($koneksi, $query);
    header ('location: hasil-tes.php');
    }else{
    echo "Server Not Connected";
  }
?>

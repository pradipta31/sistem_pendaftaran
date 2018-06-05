<?php
  include "koneksi.php";
    $soal = $_POST['soal'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $kunci_jawaban = $_POST['knc_jawaban'];
    $status = $_POST['aktif'];
    if ($koneksi) {
      $query = "INSERT INTO soal (soal,a,b,c,d,knc_jawaban,aktif) VALUES
      ('$soal', '$a','$b','$c','$d','$kunci_jawaban', '$status')";
      $hasil = mysqli_query($koneksi, $query);
      header ('location: soal-tes.php');
      }else{
        echo "Server Not Connected";
      }
?>

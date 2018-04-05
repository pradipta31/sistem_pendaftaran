<?php
  include "koneksi.php";
  if ($koneksi) {
    $nilaiA=$_POST['txNilaiA'];
    $nilaiB=$_POST['txNilaiB'];
    $hasil=$nilaiA+$nilaiB;
    $sql="INSERT INTO tb_nilai SET nilai_a='$nilaiA', nilai_b='$nilaiB', jumlah_nilai='$hasil'";
    $query=mysql_query($sql) or die(mysql_error());
  }
?>

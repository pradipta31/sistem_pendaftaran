<?php
    include "koneksi.php";
    $id = $_POST['id_soal'];
    $soal = $_POST['soal'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $knc_jawaban = $_POST['knc_jawaban'];
    $aktif = $_POST['aktif'];


    $query = "UPDATE soal SET soal='$soal', a='$a', b='$b', c = '$c', d = '$d', knc_jawaban = '$knc_jawaban', aktif = '$aktif' WHERE id_soal = '$id'";
    $result = mysqli_query($koneksi,$query);
    header ("location: soal-tes.php");
 ?>

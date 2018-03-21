<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hasil</title>
  </head>
  <body>
    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran ORDER BY id DESC LIMIT 1");
    $tgl_pendaftaran = date("Y-m-d H:i:s");
    $row = mysqli_num_rows($query);
    $rows = mysqli_fetch_array($query);
    if ($row <= 0) {
      $id_calon_peserta = 1;
    }
    else {
      $id_calon_peserta = $rows['id_calon_peserta'] + 1;
    }
    if ($row <= 0 ) {
      $nomor_pendaftaran = 1;
    }
    else {
      $nomor_pendaftaran = $rows['nomor_pendaftaran'] + 1;
    }

    $query3 = mysqli_query($koneksi, "SELECT * FROM calon_peserta ORDER BY id_calon_peserta DESC LIMIT 1");

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tgl_lahir = date($_POST['tgl_lahir']);
    $pendidikan = $_POST['pendidikan'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $berat_badan = $_POST['berat_badan'];
    $alamat = $_POST['alamat'];
    $no_telp= $_POST['no_telp'];

    if ($koneksi) {
      $query1 = mysqli_query($koneksi, "INSERT INTO pendaftaran (id_calon_peserta,nomor_pendaftaran,tgl_pendaftaran) VALUES ('$id_calon_peserta','$nomor_pendaftaran', '$tgl_pendaftaran')");
      $query2 = "INSERT INTO calon_peserta (nik, nama, umur, tgl_lahir, pendidikan, tahun_lulus, agama, jenis_kelamin, tinggi_badan, berat_badan, alamat, no_telp) VALUES ('$nik', '$nama', '$umur', '$tgl_lahir', '$pendidikan', '$tahun_lulus', '$agama', '$jenis_kelamin', '$tinggi_badan', '$berat_badan', '$alamat', '$no_telp')";
      $hasil = mysqli_query($koneksi, $query2);
      echo "<script>alert('Data Berhasil Ditambahkan');</script>";
      mysqli_close($koneksi);
    }else {
      echo "Server tidak terhubung";
    }
  ?>
  </body>
</html>

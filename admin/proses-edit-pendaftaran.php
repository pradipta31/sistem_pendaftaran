<?php
  include "koneksi.php";
  $id = $_POST['id'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tgl_lahir = date($_POST['tgl_lahir']);
  $pendidikan = $_POST['pendidikan'];
  $tahun_lulus = $_POST['tahun_lulus'];
  $agama = $_POST['agama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tinggi_badan = $_POST['tinggi_badan'];
  $berat_badan = $_POST['berat_badan'];
  $alamat = $_POST['alamat'];
  $no_telp= $_POST['no_telp'];

  $query = "UPDATE pendaftaran SET nik='$nik', nama='$nama', umur = '$umur',
  tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', pendidikan = '$pendidikan', tahun_lulus = '$tahun_lulus',
  agama = '$agama', jenis_kelamin = '$jenis_kelamin', tinggi_badan = '$tinggi_badan', berat_badan = '$berat_badan',
  alamat='$alamat', no_telp='$no_telp' WHERE id = '$id'";

  mysqli_query($koneksi,$query);
  header ("location: lihat-pendaftaran.php");
 ?>

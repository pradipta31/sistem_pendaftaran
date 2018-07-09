<?php
  include "koneksi.php";
  $id = $_POST['id'];
  $jurusan = $_POST['jurusan'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $umur = $_POST['umur'];
  $tgl_lahir = date($_POST['tgl_lahir']);
  $pendidikan = $_POST['pendidikan'];
  $tahun_lulus = $_POST['tahun_lulus'];
  $agama = $_POST['agama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tinggi_badan = $_POST['tinggi_badan'];
  $berat_badan = $_POST['berat_badan'];
  $alamat = $_POST['alamat'];
  $kabupaten = $_POST['kabupaten'];
  $no_telp= $_POST['no_telp'];

  $query = "UPDATE peserta SET nik='$nik', nama='$nama', email='$email', umur = '$umur',
  tgl_lahir = '$tgl_lahir', pendidikan = '$pendidikan', tahun_lulus = '$tahun_lulus',
  agama = '$agama', jenis_kelamin = '$jenis_kelamin', tinggi_badan = '$tinggi_badan', berat_badan = '$berat_badan',
  alamat='$alamat', kabupaten = '$kabupaten', no_telp='$no_telp' WHERE id = '$id'";

  $query1 = "UPDATE jurusan SET jurusan='$jurusan' WHERE id_peserta='$id'";
  $result1 = mysqli_query($koneksi,$query1);
  $result = mysqli_query($koneksi,$query);
  header ("location: lihat-peserta.php");
 ?>

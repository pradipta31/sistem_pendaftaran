<?php
include 'koneksi.php';

$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
$sql = "select * from peserta where nik = '$nik'";
$process = mysqli_query($koneksi, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " ✔ NIK Belum Terpakai";
}else{
	echo " ❌ NIK Sudah Terpakai";
}
 ?>

<?php
include 'koneksi.php';

$no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);
$sql = "select * from peserta where no_telp = '$no_telp'";
$process = mysqli_query($koneksi, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " ✔ Nomor Telepon Belum Terpakai";
}else{
	echo " ❌ Nomor Telepon Sudah Terpakai";
}
 ?>

<?php
include 'koneksi.php';

$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$sql = "select * from peserta where email = '$email'";
$process = mysqli_query($koneksi, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " ✔ Email Belum Terpakai";
}else{
	echo " ❌ Email Sudah Terpakai";
}
 ?>

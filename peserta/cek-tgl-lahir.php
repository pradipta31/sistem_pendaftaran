<?php
	// tanggal lahir
	$tgl_lahir = date($_POST['tgl_lahir']);;

	// tanggal hari ini
	$today = date("Y-m-d H:i:s");

	// tahun
	$y = $today->diff($tgl_lahir)->y;

	// bulan
	$m = $today->diff($tgl_lahir)->m;

	// hari
	$d = $today->diff($tgl_lahir)->d;
	echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
?>
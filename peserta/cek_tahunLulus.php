<?php
	include 'koneksi.php';
	//menvegah sql injeksi
	$bday = new DateTime($_POST["tgl_lahir"]);
	$umur = new DateTime($_POST["umur"]);
	$today = new DateTime('Y');
	$diff = $today->diff($bday);
	if($diff->y>18) {
            $born_error = "";
        }else {
            $born_error = ('<span class="notutfyllt">*You need to be 18 years</span><br/>');
        }
?>
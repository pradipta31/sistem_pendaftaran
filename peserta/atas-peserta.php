<?php
  include 'koneksi.php';
  session_start();
  if( !isset($_SESSION['email_user']) )
  {
      exit();
    }
  $nomor = ( isset($_SESSION['nomor']) ) ? $_SESSION['nomor'] : '';
  $query = mysqli_query($koneksi, "SELECT * FROM hasil_tes WHERE nomor_peserta = '$nomor'");
  $row = mysqli_fetch_assoc($query);
	$hasil = $row['']
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistem Informasi Eksekutif Pendaftaran Peserta Pelatihan Kapal Pesiar</title>
	<link rel="icon" href="img/dinas11.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<header>
				<div class="navbar navbar-default navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<a class="navbar" href="index.html"><img src="img/dinas11.png"  width="80" height="70" /></a>
						</div>
						<div class="navbar-collapse collapse ">
							<ul class="nav navbar-nav">
								<li><a href="profil.php"  style="font-size: 1.3em">Profil</a></li>
								<li><a href="tes.php" style="font-size: 1.3em">Tes</a></li>
								<li><a href="hasil-tes.php" style="font-size: 1.3em">Hasil Tes</a></li>
                <li><a href="logout.php" style="font-size: 1.3em">Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>

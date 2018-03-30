<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pendaftaran Sukses</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Peserta Pelatihan Kapal Pesiar DISNAKER ESDM Provinsi Bali</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--
    Multi Profile
    http://www.templatemo.com/preview/templatemo_457_multi_profile
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body class="templatemo-container">
    <div class="header-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 site-name-container">
                    <img src="img/dinas11.png" alt="site-logo" class="site-logo">
                    <h1 class="site-name"></h1>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 templatemo-nav-container">
                    <nav class="templatemo-nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="pendaftaran.php" class="active">Pendaftaran</a></li>
                            <li><a href="hasil.php">Hasil Tes</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="templatemo-container background-image-logo section-shadow-bottom">
        <div class="container">
            <div class="row section-title-container">
                <div class="col-lg-12 text-uppercase text-center">
                    <h5 class="section-title-2">Formulir Pendaftaran</h5>
                    <hr class="section-title-underline">
                </div>
                <div class="form-input">
                    <div class="card mx-xl-5" style="width: 500px; border-radius: 7px; margin-left:20px">
                        <div class="card-body">
                              <?php
                              include 'koneksi.php';
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
                              $alamat_rumah = $_POST['alamat_rumah'];
                              $no_telp = $_POST['no_telp'];

                              if($connection){
                                $query ="insert into pendaftaran (nik, nama, umur, tempat_lahir, tgl_lahir, pendidikan, tahun_lulus, agama, jenis_kelamin, tinggi_badan, berat_badan, alamat_rumah, no_telp)
                                VALUES ('$nama','')";

                                $hasil = mysqli_query($connection,$query);
                                echo "<br>";
                                echo "<br>";
                                echo "Pelaksanaan Tes Tulis dan Wawancara akan diinfokan lebih lanjut melalui sms";
                                echo "<br>";
                                echo " ";
                                mysqli_close($connection);
                              }else{
                                echo "Server Not Connected";
                              }
                               ?>
                                <div class="text-center py-4 mt-3">
                                    <button  name="close" class="btn btn-primary btn-lg" style="padding: 10px 25px; border-radius:7px" type="close">Tutup</button>
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    </section>
  </body>
</html>

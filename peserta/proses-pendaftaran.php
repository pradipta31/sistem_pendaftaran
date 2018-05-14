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
                            <li><a href="form-hasil.php">Hasil Tes</a></li>
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
                    <div class="card mx-xl-5" style="width: 700px; border-radius: 7px; margin-right: :10px; margin-left: 20px">
                        <div class="card-body">
                          <form action="" method="post">
                              <?php
                              include 'koneksi.php';
                              $query = mysqli_query($koneksi,"SELECT * FROM peserta ORDER BY nomor_peserta DESC LIMIT 1 ");
                              $tgl_pendaftaran = date("Y-m-d H:i:s");
                              $row = mysqli_num_rows($query);
                              $rows = mysqli_fetch_array($query);

                              // jika $datakode
                              if ($rows) {
                               // membuat variabel baru untuk mengambil kode barang mulai dari 1
                               $nilaikode = substr($rows['0'], 1);
                               // menjadikan $nilaikode ( int )
                               $kode = (int) $nilaikode;
                               // setiap $kode di tambah 1
                               $kode = $kode + 1;
                               // hasil untuk menambahkan kode
                               // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
                               // atau angka sebelum $kode
                               $nomor_peserta = "2018.".str_pad($kode, 3, "0", STR_PAD_LEFT);
                              } else {
                               $nomor_peserta = "2018.001";
                              }

                              // $tahun_pendaftaran = $rows['nomor_peserta'];
                              // $nomorBaru = (int) substr($tahun_pendaftaran, 3, 3);
                              //
                              // $char = "2018";
                              // $nomor_peserta = $char . sprintf(".%03s", $nomorBaru +1);

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
                              $alamat_rumah = $_POST['alamat'];
                              $kabupaten = $_POST['kabupaten'];
                              $no_telp = $_POST['no_telp'];
                              if($koneksi){
                                echo "<h3><center>Data Peserta Pelatihan Kapal Pesiar Pada Disnaker ESDM Provini Bali </center> ";
                                echo "<pre>";
                                echo "<br>";
                                echo "NIK              : $nik";
                                echo "<br>";
                                echo "Nama             : $nama";
                                echo "<br>";
                                echo "Email            : $email";
                                echo "<br>";
                                echo "Umur             : $umur";
                                echo "<br>";
                                echo "Tanggal Lahir    : $tgl_lahir";
                                echo "<br>";
                                echo "Pendidikan       : $pendidikan";
                                echo "<br>";
                                echo "Tahun Lulus      : $tahun_lulus";
                                echo "<br>";
                                echo "Agama            : $agama";
                                echo "<br>";
                                echo "Jenis Kelamin    : $jenis_kelamin";
                                echo "<br>";
                                echo "Tinggi Badan     : $tinggi_badan";
                                echo "<br>";
                                echo "Berat Badan      : $berat_badan";
                                echo "<br>";
                                echo "Alamat Rumah     : $alamat_rumah";
                                echo "<br>";
                                echo "Kabupaten/Kota   : $kabupaten";
                                echo "<br>";
                                echo "Nomor Telepon    : $no_telp";
                                echo "<br>";

                                $query1 ="insert into peserta (nomor_peserta, tgl_pendaftaran, nik, nama, email, umur, tgl_lahir, pendidikan, tahun_lulus, agama, jenis_kelamin, tinggi_badan,berat_badan,alamat,kabupaten,no_telp)
                                VALUES ('$nomor_peserta','$tgl_pendaftaran','$nik', '$nama','$email', '$umur', '$tgl_lahir', '$pendidikan', '$tahun_lulus', '$agama', '$jenis_kelamin', '$tinggi_badan', '$berat_badan', '$alamat_rumah','$kabupaten', '$no_telp')";
                                $hasil = mysqli_query($koneksi,$query1);
                                echo "<br>";
                                echo "<br>";
                                echo "Nomor Pendaftaran Anda Adalah : $nomor_peserta";
                                echo "<br>";
                                echo "Pelaksanaan Tes Tulis dan Wawancara akan diinfokan lebih lanjut melalui sms</h3>";
                                echo "<br>";
                                echo " ";
                                mysqli_close($koneksi);
                              }else{
                                echo "Server Not Connected";
                              }
                                echo "</pre>";
                               ?>
                               </form>
                                <div class="text-center py-4 mt-3">
                                    <button  name="close" class="btn btn-primary btn-lg" onclick="window.location.href='pendaftaran.php'" style="padding: 10px 25px; border-radius:7px" type="close">Tutup</button>
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    </section>
  </body>
</html>

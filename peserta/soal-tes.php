<?php
  session_start();
  if( !isset($_SESSION['nama_user']) )
  {
      exit();
  }
  $nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
  $nomor = ( isset($_SESSION['nomor']) ) ? $_SESSION['nomor'] : '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pendaftran Peserta Pelatihan Kapal Pesiar DISNAKER ESDM Provinsi Bali</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!--
        Multi Profile
        http://www.templatemo.com/preview/templatemo_457_multi_profile
        -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

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
                                <li><a href="pendaftaran.php">Pendaftaran</a></li>
                                <li><a href="login-peserta.php" class="active">Tes</a></li>
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
                        <h5 class="section-title-2">Soal Ujian Online</h5>
                        <hr class="section-title-underline">
                    </div>
                </div>
                <style media="screen">
                  .soal{
                    margin-left: 150px;
                    margin-top: -50px;
                    line-height: 2;
                  }
                  .font-soal{
                    font-size: 25px;
                  }
                  .font-jawab{
                    font-size: 15px;
                  }
                </style>
                <div class="soal">
                  <div style="width:100%; overflow:scroll;height:700px;">
                    <form class="form-group" action="jawab.php" method="post">
                  <?php
                    include 'koneksi.php';
                    $query = mysqli_query($koneksi,"SELECT * FROM soal WHERE aktif='Y' ORDER BY RAND()");
                    $jumlah = mysqli_num_rows($query);
                    $urut = 0;
                    while ($row = mysqli_fetch_array($query)) {
                      $id = $row['id_soal'];
                      $soal = $row['soal'];
                      $a = $row['a'];
                      $b = $row['b'];
                      $c = $row['c'];
                      $d = $row['d'];
                      ?>


                        <table width="100%" border="0">
                        <input type="hidden" name="id[]" value=<?php echo $id;?>>
                        <input type="hidden" name="jumlah" value=<?php echo $jumlah;?>>
                        <input type="hidden" name="nomor_peserta" value=<?php echo $nomor; ?>>
                        <input type="hidden" name="nama" value=<?php echo $nama; ?>>
                          <tr>
                                <td width="17"><font color="#000000" class="font-soal"><?php echo $urut=$urut+1; ?>.</font></td>
                                <td><font color="#000000" class="font-soal"><?php echo "$soal"; ?></font></td>
                          </tr>
                        <br>
                          <tr>
                              <td height="21"><font color="#000000" class="font-jawab">&nbsp;</font></td>
                              <td><font color="#000000" class="font-jawab">
                             A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                              <?php echo "$a";?></font> </td>
                          </tr>
                          <tr>
                              <td height="21"><font color="#000000" class="font-jawab">&nbsp;</font></td>
                              <td><font color="#000000" class="font-jawab">
                             B.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                              <?php echo "$b";?></font> </td>
                          </tr>
                          <tr>
                              <td height="21"><font color="#000000" class="font-jawab">&nbsp;</font></td>
                              <td><font color="#000000" class="font-jawab">
                             C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                              <?php echo "$c";?></font> </td>
                          </tr>
                          <tr>
                              <td height="21"><font color="#000000" class="font-jawab">&nbsp;</font></td>
                              <td><font color="#000000" class="font-jawab">
                             D.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                              <?php echo "$d";?></font> </td>
                          </tr>
                      </table>



                      <?php
                    }
                  ?>

                  <tr>
                  <td>&nbsp;</td>
                    <td><button type="button" data-toggle="modal" data-target="#jawabModal" class="btn btn-lg btn-primary" style="padding: 10px 30px; font-size: 20px; margin-left: 350px; margin-top: 50px; margin-bottom: 10px; border-radius:5px;">SIMPAN JAWABAN</button></td>
                  </tr>
                  <style media="screen">
                    .font-type{
                      font-size: 15px;
                    }
                  </style>
                  <div class="modal fade" id="jawabModal" tabindex="-1" role="dialog" aria-labelledby="jawabModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content" style="border-radius: 5px">
                        <div class="modal-header">
                          <h5 class="modal-title font-type" id="jawabModalTitle">Yakin jawaban yang anda input sudah benar ?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body font-type">
                          Jawaban akan disimpan jika memilih tombol simpan
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary font-type" data-dismiss="modal">Kembali</button>
                          <input type="submit" name="submit" class="btn btn-primary font-type" value="Simpan">
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                  </div>
                </div>
            </div>
        </section>

        <!-- Blog -->

        <!-- Features -->



        <footer class="text-center" style="margin-top: 81px">
            <p class="small copyright-text">Copyright &copy; 2084 Company Name</p>
        </footer>

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
        <script type="text/javascript" src="js/responsiveCarousel.min.js"></script>      <!-- Carousel -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
        <script>

            $(function() {
                $('.crsl-items').carousel({
                    visible: 1,
                    itemMinWidth: 320,
                    itemEqualHeight: 320,
                    itemMargin: 9,
                });
                $(".crsl-nav a[href=#]").on('click', function(e) {
                    e.preventDefault();
                });
            });

        </script>
    </body>
</html>

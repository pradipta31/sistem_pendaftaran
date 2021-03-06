
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
        <!-- header -->
        <div class="header-bg">
            <div class="container">
              <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-4 site-name-container">
                      <img src="img/dinas11.png" alt="site-logo" class="site-logo">
                      <h1 class="site-name"></h1>
                  </div>
                    <div class="mobile-menu-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-8 templatemo-nav-container">
                        <nav class="templatemo-nav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="pendaftaran.php">Pendaftaran</a></li>
                                  <li><a href="login-peserta.php">Tes</a></li>
                                <li><a href="form-hasil.php" class="active">Hasil Tes</a></li>
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
                        <h1 class="section-title-2">Pencarian Hasil Tes Peserta Pelatihan </h1>
                        <hr class="section-title-underline">
                    </div>
                    <div class="form-input">
                        <div class="card mx-xl-5" style="width: 500px; border-radius: 7px; margin-left:20px">
                          <div class="card-body">
                              <form  name="form" method="get" onsubmit="return validasi_input(this)">
                                  <p class="h1 text-center py-1">Form Input</p>
                                  <label style="font-size: 14px">Cari Nomor Peserta</label>
                                  <input type="text" class="form-control" name="cari">
                                  <p>*)isi kolom dengan Nomor Peserta</p>
                                  <br>

                                  <div class="text-center py-4 mt-3">
                                      <button class="btn btn-primary btn-lg" style="padding: 10px 25px; border-radius:7px" type="submit">Cari Hasil</button>
                                  </div>
                              </form>
                              <?php
                              include 'koneksi.php';

                              if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                echo "<b>Hasil pencarian : ".$cari."</b>";
                                echo "<br>";
                              }
                              ?>



                                <?php
                                $no= 1;
                                if(isset($_GET['cari'])){
                                  $cari = $_GET['cari'];
                                  $data = mysqli_query($koneksi,"select * from hasil_tes where nomor_peserta like '%".$cari."%'");
                                }else{
                                  $data = mysqli_query($koneksi,"select * from hasil_tes");
                                }
                                ?>
                                <table class="table table-bordered">
                                  <tr>
                                    <th><center>No</center></th>
                                    <th><center>Nomor Peserta</center></th>
                                    <th><center>Nama</center></th>
                                    <th><center>Status</center></th>
                                  </tr>
                                <?php
                                while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                  <td><center><?php echo $no++;?></center></td>
                                  <td><center><?= $d['nomor_peserta'];?></center></td>
                                  <td><?= $d['nama'];?></td>
                                  <td><?= $d['status'];?></td>
                                </tr>
                                <?php } ?>
                              </table>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
        </section>
        <script type="text/javascript">
        function validasi_input(form){
          if (form.cari.value == ""){
            alert("Kolom Nomor Peserta Masih Kosong!");
            form.cari.focus();
            return (false);
          }
        return (true);
        }
        </script>

      <footer class="text-center" style="margin-top: 5px">
            <p class="small copyright-text">Copyright &copy; 2084 Company Name</p>
        </footer>

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>      <!-- Isotope, http://isotope.metafizzy.co -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
        <script>
            // All images are loaded. Call isotope
            $(window).load(function() {
                 var $container = $('#folio-container');
                // init
                $container.isotope({
                // options
                itemSelector: '.folio-item',
                animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                });

                // filter items when filter link is clicked
                jQuery('#filters a').click(function(){
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector });
                    return false;
                });

                jQuery('#filters li a').click(function(){

                    jQuery('#filters li').removeClass('current');
                    jQuery(this).parent().addClass('current');
                });
            });
        </script>
    </body>
</html>

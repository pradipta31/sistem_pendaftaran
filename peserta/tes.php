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
                                <li><a href="tes.php" class="active">Tes</a></li>
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
                        <h2 class="section-title-2">Tes Online Peserta Pelatihan Kapal Pesiar</h2>
                        <hr class="section-title-underline">
                    </div>
                    <div class="form-input">
                        <div class="card mx-xl-5" style="width: 500px; border-radius: 7px; margin-left:20px">
                            <div class="card-body">
                                <form  name="form" method="post" action="proses-pendaftaran.php" onsubmit="return validasi_input(this)">

                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
        </section>
        <!-- Blog -->

        <!-- Features -->



        <footer class="text-center">
            <p class="small copyright-text">Copyright &copy; 2084 Company Name</p>
        </footer>

        <!-- JS -->
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

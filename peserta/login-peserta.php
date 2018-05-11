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
      <style media="screen">
      body {
        background: white;
        font-family: 'Open Sans', sans-serif;
        }
        .login {
        width: 400px;
        margin: 16px auto;
        font-size: 16px;
        }
        /* Reset top and bottom margins from certain elements */
        .login-header,
        .login p {
        margin-top: 0;
        margin-bottom: 0;
        }
        .login-header {
        background: gray;
        padding: 20px;
        font-size: 1.4em;
        font-weight: normal;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        }
        .login-container {
        background: #ebebeb;
        padding: 12px;
        }
        /* Every row inside .login-container is defined with p tags */
        .login p {
        padding: 12px;
        }
        .login input {
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        padding: 16px;
        outline: 0;
        font-family: inherit;
        font-size: 0.95em;
        }
        .login input[type="email"],
        .login input[type="password"] {
        background: #fff;
        border-color: #bbb;
        color: #555;
        }
        /* Text fields' focus effect */
        .login input[type="email"]:focus,
        .login input[type="password"]:focus {
        border-color: #888;
        }
        .login input[type="submit"] {
        background: gray;
        border-color: transparent;
        color: #fff;
        cursor: pointer;
        }
        .login input[type="submit"]:hover {
        background: #17c;
        }
        /* Buttons' focus effect */
        .login input[type="submit"]:focus {
        border-color: #05a;
        }
      </style>
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
                                <li><a href="login-peserta.php" class="active">Tes</a></li>
                                <li><a href="form-hasil.php">Hasil Tes</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section>
          <div class="login">
              <h5 class="login-header" style="font-size: 15px"><b>Sebelum melakukan tes secara online, harap melakukan login terlebih dahulu</b></h5>
                  <form class="login-container" action="proses-login.php" method="post">
                      <p>
                          <input type="text" placeholder="Email" name="email">
                      </p>
                      <p>
                          <input type="text" placeholder="Nomor Peserta" name="nomor_peserta">
                      </p>
                      <p>
                          <input type="submit" value="Masuk" name="submit">
                      </p>
                  </form>
          </div>
        </section>
        <!-- Blog -->

        <!-- Features -->



        <footer class="text-center" style="margin-top: 72px">
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

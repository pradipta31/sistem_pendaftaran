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
                    <div class="form-input">
                        <div class="card mx-xl-5" style="width: 700px; border-radius: 7px; margin-right: :10px; margin-left: 20px">
                            <div class="card-body">
          <?php
include "koneksi.php";
echo "<h4>";
echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>";
 echo '<table width="100%" border="0">';

        $hasil = mysqli_query($koneksi,"select * from soal WHERE aktif='Y' ORDER BY id_soal");
        $jumlah = mysqli_num_rows($hasil);
        $urut = 0;
        while($row = mysqli_fetch_array($hasil))
        {
            $id=$row["id_soal"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"];

            ?>
            <form name="form1" method="post" action="jawab.php">
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <tr>
                <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
            </tr>
            <tr>
                <td height="21"><font color="#000000">&nbsp;</font></td>
              <td><font color="#000000">
             A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
              <?php echo "$pilihan_a";?></font> </td>
            </tr>
            <tr>
                <td><font color="#000000">&nbsp;</font></td>
              <td><font color="#000000">
             B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B">
              <?php echo "$pilihan_b";?></font> </td>
            </tr>
            <tr>
                <td><font color="#000000">&nbsp;</font></td>
              <td><font color="#000000">
            C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C">
              <?php echo "$pilihan_c";?></font> </td>
            </tr>
            <tr>
                <td><font color="#000000">&nbsp;</font></td>
              <td><font color="#000000">
            D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D">
              <?php echo "$pilihan_d";?></font> </td>
            </tr>


        <?php
        }
        ?>
        <br>
            <tr class="text-center py-4 mt-3">
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Jawab" class="btn btn-primary btn-lg" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
            </table>
</form>
        </p>
</div>
</h4>
        </section>
        <!-- Blog -->

        <!-- Features -->



        <footer class="text-center" style="margin-top: 81px">
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

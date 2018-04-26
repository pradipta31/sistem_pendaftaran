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
                    <div class="col-lg-9 col-md-8 col-sm-8 templatemo-nav-container">
                        <nav class="templatemo-nav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="pendaftaran.php" class="active">Pendaftaran</a></li>
                                  <li><a href="tes.php">Tes</a></li>
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
                        <h2 class="section-title-2">Form Pendaftaran Pelatihan Kapal Pesiar DISNAKER ESDM Provinsi Bali</h2>
                        <hr class="section-title-underline">
                    </div>
                    <div class="form-input">
                        <div class="card mx-xl-5" style="width: 500px; border-radius: 7px; margin-left:20px">
                            <div class="card-body">
                                <form  name="form" method="post" action="proses-pendaftaran.php" onsubmit="return validasi_input(this)">
                                    <p class="h1 text-center py-1">PENDAFTARAN DISNAKER </p>
                                    <label style="font-size: 14px">NIK</label>
                                    <input type="number" class="form-control" name="nik">
                                    <br>
                                    <label style="font-size: 14px">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama">
                                    <br>
                                    <label style="font-size: 14px">Umur</label>
                                    <select name="umur" class="form-control" style="height: 36px" >
                                        <option value="All">-- Pilih  Umur--</option>
                                        <option value="18">18 tahun</option>
                                        <option value="19">19 tahun</option>
                                        <option value="20">20 tahun</option>
                                        <option value="21">21 tahun</option>
                                        <option value="22">22 tahun</option>
                                        <option value="23">23 tahun</option>
                                        <option value="24">24 tahun</option>
                                        <option value="25">25 tahun</option>
                                        <option value="26">26 tahun</option>
                                        <option value="27">27 tahun</option>
                                        <option value="28">28 tahun</option>
                                        <option value="29">29 tahun</option>
                                        <option value="30">30 tahun</option>
                                      </select>
                                    <br>
                                    <label style="font-size: 14px">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir">
                                    <br>
                                    <label style="font-size: 14px">Pendidikan/Ijazah</label>
                                    <input type="text" class="form-control" name="pendidikan">
                                    <br>
                                    <label style="font-size: 14px">Tahun Lulus</label>
                                    <input type="number" class="form-control" name="tahun_lulus">
                                    <br>
                                    <label style="font-size: 14px">Agama</label>
                                    <input type="text" class="form-control" name="agama">
                                    <br>
                                    <label style="font-size: 14px">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin"  style="height: 36px">
                                        <option>-- Jenis Kelamin--</option>
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                    <br>
                                    <label style="font-size: 14px">Tinggi Badan</label>
                                    <input type="number" class="form-control" name="tinggi_badan">
                                    <br>
                                    <label style="font-size: 14px">Berat Badan</label>
                                    <input type="year" class="form-control" name="berat_badan">
                                    <br>
                                    <label style="font-size: 14px">Alamat Rumah</label>
                                    <input type="text" class="form-control" name="alamat">
                                    <br>
                                    <label style="font-size: 14px">Kabupaten/Kota</label>
                                    <select class="form-control" name="kabupaten"  style="height: 36px">
                                        <option>-- Kabupaten/Kota Alamat Rumah--</option>
                                        <option value="Denpasar">Denpasar</option>
                                        <option value="Badung">Badung</option>
                                        <option value="Gianyar">Gianyar</option>
                                        <option value="Klungkung">Klungkung</option>
                                        <option value="Bangli">Bangli</option>
                                        <option value="Karangasem">Karangasem</option>
                                        <option value="Tabanan">Tabanan</option>
                                        <option value="Buleleng">Buleleng</option>
                                        <option value="Negara">Negara</option>
                                    </select>
                                    <br>
                                    <label style="font-size: 14px">No Telepon</label>
                                    <input type="number" class="form-control" name="no_telp">
                                    <div class="text-center py-4 mt-3">
                                        <button  name="submit" class="btn btn-primary btn-lg" style="padding: 10px 25px; border-radius:7px" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
        </section>
        <script type="text/javascript">
        function validasi_input(form){
          if (form.nik.value == ""){
            alert("kolom NIK masih kosong!");
            form.nik.focus();
            return (false);
          }else if (form.nama.value=="") {
            alert("Kolom nama masih kosong");
            form.nama.focus();
            return (false);
          }else if (form.umur.value=="All") {
            alert("Kolom umur belum dipilih");
            form.umur.focus();
            return (false);
          }else if (form.tgl_lahir.value=="") {
            alert("Kolom tanggal lahir masih kosong");
            form.tgl_lahir.focus();
            return (false);
          }else if (form.pendidikan.value=="") {
            alert("Kolom Pendidikan/Ijazah masih kosong");
            form.tgl_lahir.focus();
            return (false);
          }else if (form.tahun_lulus.value=="") {
            alert("Kolom Tahun Lulus masih kosong");
            form.tahun_lulus.focus();
            return (false);
          }else if (form.agama.value=="") {
            alert("Kolom agama masih kosong");
            form.agama.focus();
            return (false);
          }else if (form.jk.value=="jk") {
            alert("Kolom Jenis Kelamin belum dipilih");
            form.jk.focus();
            return (false);
          }else if (form.tb.value=="") {
            alert("Kolom Tinggi Badan masih kosong");
            form.tb.focus();
            return (false);
          }else if (form.bb.value=="") {
            alert("Kolom Berat Badan masih kosong");
            form.bb.focus();
            return (false);
          }else if (form.alamat.value=="") {
            alert("Kolom Alamat Rumah masih kosong");
            form.alamat.focus();
            return (false);
          }else if (form.alamat.value=="") {
            alert("Kolom Kabupaten/Kota masih kosong");
            form.kabupaten.focus();
            return (false);
          }else if (form.telp.value=="") {
            alert("Kolom Nomor Telepon masih kosong");
            form.telp.focus();
            return (false);
          }
        return (true);
        }
        </script>


        <footer class="text-center">
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

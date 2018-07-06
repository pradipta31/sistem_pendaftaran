<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b34e241dcca4c0f4fa24c7c956ad6b1a7772ba32
<?php
session_start();

if( !isset($_SESSION['session_kepalakantor']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
$username = $_SESSION['username_user'];
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
 ?>
<<<<<<< HEAD
>>>>>>> fab0ff35c83a3017281daea3c3e7fa9ca6847475
=======
=======
>>>>>>> 7b88d0f3e1d976d03c9894adfe3de12d896d6272
>>>>>>> b34e241dcca4c0f4fa24c7c956ad6b1a7772ba32
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DISNAKER Provinsi Bali | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <style media="screen">
    .style-judul{
      color: #fff;
      margin-top: 5px;
      font-style: normal;
      position: absolute;
    }
  </style>

  <header class="main-header">
    <nav class="navbar navbar-static-top" style="margin-left: -230px;">
      <b class="style-judul" style="margin-left: 230px; font-size:25px;">SISTEM INFORMASI EKSEKUTIF PESERTA PELATIHAN KAPAL PESIAR</b>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="user user-menu">
            <a href="../logout.php" onclick="return confirm('Yakin ingin Logout ?')"><b>Logout</b></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dinas11.png" class="img-responsive">
        </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b34e241dcca4c0f4fa24c7c956ad6b1a7772ba32
        <div class="pull-left info">
          <p>Selamat Datang</p>
          <p><?php echo $nama; ?></p>
        </div>
<<<<<<< HEAD
>>>>>>> fab0ff35c83a3017281daea3c3e7fa9ca6847475
=======
=======
>>>>>>> 7b88d0f3e1d976d03c9894adfe3de12d896d6272
>>>>>>> b34e241dcca4c0f4fa24c7c956ad6b1a7772ba32
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li>
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Laporan</span>
<<<<<<< HEAD
<<<<<<< HEAD
            <span class="pull-righ">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
              <ul class="treeview-menu">
=======
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
>>>>>>> fab0ff35c83a3017281daea3c3e7fa9ca6847475
=======
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
=======
            <span class="pull-righ">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
              <ul class="treeview-menu">
>>>>>>> 7b88d0f3e1d976d03c9894adfe3de12d896d6272
>>>>>>> b34e241dcca4c0f4fa24c7c956ad6b1a7772ba32
            <li><a href="laporan-peserta.php"> Laporan Data Peserta</a></li>
            <li><a href="laporan-umur.php"> Laporan Data Umur </a></li>
            <li><a href="laporan-jk.php"> Laporan Data Jenis Kelamin </a></li>
            <li><a href="laporan-wilayah.php"> Laporan Data Wilayah </a></li>
            <li><a href="laporan-tes.php"> Laporan Data Hasil Tes </a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b34e241dcca4c0f4fa24c7c956ad6b1a7772ba32
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
</body>
</html>
<<<<<<< HEAD
>>>>>>> fab0ff35c83a3017281daea3c3e7fa9ca6847475
=======
=======
>>>>>>> 7b88d0f3e1d976d03c9894adfe3de12d896d6272
>>>>>>> b34e241dcca4c0f4fa24c7c956ad6b1a7772ba32

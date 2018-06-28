<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Pendaftaran</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
      <nav class="navbar navbar-static-top" style="margin-left: -220px;">
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
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dinas11.png" class="img-responsive">
          </div>
          <div class="pull-left info">
          </div>
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
          <li>
            <a href="lihat-peserta.php">
            <!-- <a href="pendaftaranV2/lihat-pendaftaran.php"> -->
              <i class="fa fa-newspaper-o"></i> <span>Data Peserta</span>
            </a>
          </li>
          <li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i>
                <span>Soal dan Nilai Tes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="soal-tes.php"> Soal Tes</a></li>
                <li><a href="nilai-online.php"> Nilai Tes Online</a></li>
              </ul>
            </li>
          </li>
          <!-- <li>
            <a href="hasil-tes.php">
              <i class="fa fa-table"></i> <span>Hasil Tes Peserta</span>
            </a>
          </li> -->

          <li>
            <a href="hasil-tes.php">
              <i class="fa fa-table"></i>
              <span>Hasil Tes Peserta</span>
              <!-- <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="tambah-hasil-tes.php"> Tambah Hasil Tes</a></li>
              <li><a href="hasil-tes.php"> Hasil Tes Peserta</a></li>
            </ul> -->
          </li>

      </section>
      <!-- /.sidebar -->
  </aside>
</body>
</html>

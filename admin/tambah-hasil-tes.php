
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
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dinas11.png" class="img-responsive">
        </div>
      </div>
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
            <a href="nilai-online.php">
              <i class="fa fa-table"></i>
              <span>Nilai Tes Online</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i>
              <span>Hasil Tes Peserta</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="tambah-hasil-tes.php"> Tambah Hasil Tes</a></li>
              <li><a href="hasil-tes.php"> Hasil Tes Peserta</a></li>
            </ul>
          </li>
      </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Hasil Tes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">

                <tr>
                  <th style="width: 10px"><center>No</center></th>
                  <th><center>Nomor Peserta</center></th>
                  <th><center>Nama</center></th>
                </tr>
                <?php
                  include "koneksi.php";
                  $query = mysqli_query($koneksi, "SELECT * FROM peserta");
                  $no = 1;
                  while($row = mysqli_fetch_assoc($query)){
                    ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><center><a href="form-tambah-hasil-tes.php?id=<?php echo "$row[id]"; ?>"><?php echo $row['nomor_peserta']; ?></a></center></td>
                  <td><?php echo $row['nama'];?></td>
                </tr>
                <?php
                }
              ?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <!-- <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul> -->
            </div>
          </div>

          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="#">DISNAKER Prov. Bali</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>

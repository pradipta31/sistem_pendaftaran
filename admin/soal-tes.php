<?php
session_start();

if( !isset($_SESSION['session_admin']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
$username = $_SESSION['username_user'];
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Soal</title>
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
            <p>Selamat Datang</p>
            <p><?php echo $nama; ?></p>
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
                <li><a href="tambah-soal.php"> Tambah Soal Tes</a></li>
                <li><a href="soal-tes.php"> Soal Tes</a></li>
                <li><a href="nilai-tes-online.php"> Nilai Tes Online</a></li>
              </ul>
            </li>
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
        <div class="col-xs-12">
          <div class="box">

            <div class="box-header with-border">
              <h3 class="box-title">Data Soal Tes Peserta Online</h3>
            </div>
            <div class="btn btn-lg">
              <a href="tambah-soal.php" class="btn btn-primary">Tambah Soal</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">

                <tr>
                  <th style="width: 10px"><center>No</center></th>
                  <th><center>Soal</center></th>
                  <th><center>A</center></th>
                  <th><center>B</center></th>
                  <th><center>C</center></th>
                  <th><center>D</center></th>
                  <th><center>Kunci Jawaban</center></th>
                  <th><center>Status</center></th>
                  <th><center>Opsi</center></th>
                </tr>
                <?php
                  include "koneksi.php";
                  $query = mysqli_query($koneksi, "SELECT * FROM soal");
                  $no = 1;
                  while($row = mysqli_fetch_assoc($query)){
                    ?>

                <tr>
                  <td><?php echo $no++;?></td>
                  <td><center><?php echo $row['soal']; ?></center></td>
                  <td><center><?php echo $row['a']; ?></center></td>
                  <td><center><?php echo $row['b']; ?></center></td>
                  <td><center><?php echo $row['c']; ?></center></td>
                  <td><center><?php echo $row['d']; ?></center></td>
                  <td><center> <?php echo $row['knc_jawaban']; ?> </center></td>
                  <td><?php echo $row['aktif'];?></td>
                  <td> <a href="form-edit-soal.php?id=<?php echo "$row[id_soal]"; ?>"><i class="fa fa-edit"></i></a>
                  <a href="hapus-soal.php?id=<?php echo "$row[id_soal]"; ?>" onclick="return confirm ('Yakin Ingin Hapus Data Ini ?')"><i class="fa fa-trash"></i></a>
                </td>
                </tr>
                <?php
                }
              ?>
              </table>
            </div>
          </div>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>

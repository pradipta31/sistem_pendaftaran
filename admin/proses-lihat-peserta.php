<?php
  include "koneksi.php";
  $id = $_GET['id'];
  $query = "SELECT * FROM peserta WHERE id='$id'";
  $hasil = mysqli_query($koneksi,$query);
  $row = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Peserta</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
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
          <!-- <a href="pendaftaranV2/lihat-pendaftaran.php"> -->
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
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pendaftaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nomor Peserta : <?php echo $row['nomor_peserta']; ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label>NIK </label>
                </br>
                <label>Nama</label>
                </br>
                <label>Umur</label>
                </br>
                <label>Tanggal Lahir</label>
                </br>
                <label>Pendidikan</label>
                </br>
                <label>Tahun Lulus</label>
                </br>
                <label>Agama</label>
                </br>
                <label>Jenis Kelamin</label>
                </br>
                <label>Tinggi Badan</label>
                </br>
                <label>Berat Badan</label>
                </br>
                <label>Alamat</label>
                </br>
                <label>Kabupaten/Kota</label>
                </br>
                <label>Nomor Telepon</label>
                </br>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label>: <?php echo $row['nik']; ?></label>
                </br>
                <label>: <?php echo $row['nama']; ?></label>
                </br>
                <label>: <?php echo $row['umur']; ?></label>
                </br>
                <label>: <?php echo $row['tgl_lahir']; ?></label>
                </br>
                <label>: <?php echo $row['pendidikan']; ?></label>
                </br>
                <label>: <?php echo $row['tahun_lulus']; ?></label>
                </br>
                <label>: <?php echo $row['agama']; ?></label>
                </br>
                <label>: <?php echo $row['jenis_kelamin']; ?></label>
                </br>
                <label>: <?php echo $row['tinggi_badan']; ?></label>
                </br>
                <label>: <?php echo $row['berat_badan']; ?></label>
                </br>
                <label>: <?php echo $row['alamat']; ?></label>
                </br>
                <label>: <?php echo $row['kabupaten']; ?></label>
                </br>
                <label>: <?php echo $row['no_telp']; ?></label>
                </br>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <button type="button" class="btn btn-default" name="button" onclick="window.location='lihat-peserta.php'">Kembali</button>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="#">DISNAKER Prov. Bali</a>.</strong> All rights
    reserved.
  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
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
  function editRapat(){
    $("#editModal").modal('show');
  }
</script>
</body>
</html>

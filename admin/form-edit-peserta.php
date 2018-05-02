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
  <title>Data Pendaftaran</title>
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
  <!-- Left side column. contains the logo and sidebar -->

  <!-- Left side column. contains the logo and sidebar -->
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
          <a href="soal-tes.php">
            <i class="fa fa-table"></i>
            <span>Soal Tes Peserta</span>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Peserta</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nomor Peserta : <?php echo $row['nomor_peserta']; ?></h3>
        </div>
          <form action="proses-edit-peserta.php" method="post">
            <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $row['id'];?>">
              <div class="form-group">
                <label>NIK</label>
                <input type="number" class="form-control" name="nik" value="<?php echo $row['nik']; ?>">
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
              </div>
              <div class="form-group">
                <label>Umur</label>
                <input type="text" class="form-control" name="umur"value="<?php echo $row['umur']; ?>">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" class="form-control" name="pendidikan" value="<?php echo $row['pendidikan']; ?>">
              </div>
              <div class="form-group">
                <label>Tahun Lulus</label>
                <input type="text" class="form-control" name="tahun_lulus" value="<?php echo $row['tahun_lulus']; ?>">
              </div>
              <div class="form-group">
                <label>Agama</label>
                <input type="text" class="form-control" name="agama" value="<?php echo $row['agama']; ?>">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>">
              </div>
              <div class="form-group">
                <label>Tinggi Badan</label>
                <input type="text" class="form-control" name="tinggi_badan" value="<?php echo $row['tinggi_badan']; ?>">
              </div>
              <div class="form-group">
                <label>Berat Badan</label>
                <input type="text" class="form-control" name="berat_badan" value="<?php echo $row['berat_badan']; ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
              </div>
              <div class="form-group">
                <label>Kabupaten/kota</label>
                <input type="text" class="form-control" name="kabupaten" value="<?php echo $row['kabupaten']; ?>">
              </div>
              <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telp" value="<?php echo $row['no_telp']; ?>">
              </div>
              <button type="button" class="btn btn-default" name="button" onclick="window.location='lihat-peserta.php'">Kembali</button>
              <input type="submit" value="Simpan" class="btn btn-primary"  onclick="return confirm ('Yakin simpan perubahan ?')">
            </div>
          </form>
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

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Pendaftaran</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

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

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
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
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li>
          <a href="../index.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="active">
          <a href="lihat-pendaftaran.php">
            <i class="fa fa-bar-chart"></i> <span>Pendaftaran</span>
          </a>
        </li>
        <li>
          <a href="../tambah-pendaftaran.php">
            <i class="fa fa-bar-chart"></i> <span>Tambah Pendaftaran</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Hasil Pendaftaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"> Tambah Hasil Pendaftaran</a></li>
            <li><a href="pages/charts/morris.html"> Hasil Pendaftaran</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"> Tambah Laporan</a></li>
            <li><a href="pages/charts/morris.html"> Laporan</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pendaftaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pendaftaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pendaftaran</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><center>Nomor</center></th>
                    <th><center>ID Pendaftar</center></th>
                    <th><center>Nomor Pendaftaran</center></th>
                    <th><center>Tanggal Pendaftaran</center></th>
                    <th><center>Opsi</center></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      include "../koneksi.php";

                      $query = "SELECT * FROM pendaftaran";
                      $hasil = $koneksi->query($query);
                      $no = 1;
                      if ($hasil->num_rows > 0) {
                        foreach ($hasil as $row) {
                            ?>
                          <tr>
                            <td><center><?php echo $no; ?></center></td>
                            <td><center><?php echo $row['id_calon_peserta']; ?></center></td>
                            <td><center><?php echo $row['nomor_pendaftaran']; ?></center></td>
                            <td><center> <?php echo $row['tgl_pendaftaran']; ?> </center></td>
                            <td><center>
                              <?php echo "<a href='#readModal' id='custId' data-toggle='modal' data-id=".$row['id']."><i class='fa fa-eye'></i></a>"; ?>
                              <a href="javascript:void();" onclick="editRapat()"><i class="fa fa-edit"></i></a>
                              <a href="hapus-pendaftaran.php?id=<?php echo "$row[id]"; ?>" onclick="return confirm ('Yakin Ingin Hapus Data Ini ?')"><i class="fa fa-trash"></i></a>
                            </center></td>
                          </tr>
                          <?php
                            $no++;
                        }
                      }else {
                        echo "0 results";
                      } $koneksi->close();
                      ?>
                  </tfoot>
                </table>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


  <div class="modal fade" id="readModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="">Biodata Peserta</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            <div class="fetched-data"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        </div>
        </div>
      </div>
    </div>

  <!-- End Read Data Peserta -->

  <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="">Data : </h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">No Pendaftaran </label>
            <input type="text" class="form-control" id="" value="0000010" name="" disabled>
          </div>
          <div class="form-group">
            <label for="">Nama </label>
            <input type="text" class="form-control" id="" placeholder="" name="">
          </div>
          <div class="form-group">
            <label for="">Umur </label>
            <select class="form-control" name="">
              <option value="18">18 Tahun</option>
              <option value="19">19 Tahun</option>
              <option value="20">20 Tahun</option>
              <option value="21">21 Tahun</option>
              <option value="22">22 Tahun</option>
              <option value="23">23 Tahun</option>
              <option value="24">24 Tahun</option>
              <option value="25">25 Tahun</option>
              <option value="26">26 Tahun</option>
              <option value="27">27 Tahun</option>
              <option value="28">28 Tahun</option>
              <option value="29">29 Tahun</option>
              <option value="30">30 Tahun</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Tempat Lahir : </label>
            <input type="text" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">Tanggal Lahir : </label>
            <input type="date" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">Pendidikan/Ijazah : </label>
            <input type="text" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">Tahun Lulus : </label>
            <input type="number" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">Agama : </label>
            <input type="text" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin : </label>
            <input type="text" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">Tinggi Badan : </label>
            <input type="number" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">Berat Badan : </label>
            <input type="number" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">Alamat Rumah : </label>
            <input type="text" class="form-control" name="" value="">
          </div>
          <div class="form-group">
            <label for="">No.Telp/HP : </label>
            <input type="number" class="form-control" name="" value="">
          </div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
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
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#readModal').on('show.bs.modal', function(e){
      var rowid = $(e.relatedTarget).data('id');
      $.ajax({
        type : 'post',
        url : 'detail-pendaftaran.php',
        data : 'rowid='+ rowid,
        success : function(data){
          $('.fetched-data').html(data);
        }
      });
    });
  });
</script>
</body>
</html>

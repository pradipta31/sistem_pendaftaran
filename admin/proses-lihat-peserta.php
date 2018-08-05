<?php
include "kiri.php";
  include "koneksi.php";
  $id = $_GET['id_peserta'];
  $query = "SELECT * FROM peserta WHERE id_peserta='$id'";
  $hasil = mysqli_query($koneksi,$query);
  $row = mysqli_fetch_array($hasil);
  $query1 = "SELECT * FROM jurusan WHERE id_peserta='$id'";
  $hasil1 = mysqli_query($koneksi,$query1);
  $row1 = mysqli_fetch_array($hasil1);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nomor Peserta : <?php echo $row['nomor_peserta']; ?></h3>
        </div>
        <!-- /.box-header -->
        <form class="" action="print-peserta.php" method="post">
          <div class="box-body">
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label>NIK </label>
                  </br>
                  <label>Jurusan </label>
                  </br>
                  <label>Nama</label>
                  </br>
                  <label>Email</label>
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
              <div class="col-md-4">
                <div class="form-group">
                  <label>: <?php echo $row['nik']; ?></label>
                  </br>
                  <label>: <?php echo $row1['jurusan']; ?></label>
                  </br>
                  <label>: <?php echo $row['nama']; ?></label>
                  </br>
                  <label>: <?php echo $row['email']; ?></label>
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
              <div class="col-md-5">
                <div class="form-group">
                  <?php
                    if ($row['file'] == null) {
                      echo '<img src="../peserta/images/peserta.png" height="227px" width="152px" style="border-radius: 5px" class="img-responsive">';
                    }else{ ?>
                      <img src="../peserta/images/<?= $row['file'];?>" height="227px" width="189px" style="border-radius: 5px" class="img-responsive">
                  <?php
                    }
                  ?>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <button type="button" class="btn btn-default" name="button" onclick="window.location='lihat-peserta.php'">Kembali</button>
            <a href="print-peserta.php?id_peserta=<?= $id; ?>" class="btn btn-primary">Print</a>
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

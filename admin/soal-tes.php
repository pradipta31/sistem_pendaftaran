<?php

include "kiri.php";
session_start();

if( !isset($_SESSION['session_admin']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
$username = $_SESSION['username_user'];
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';

?>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-header with-border">
              <ul class="nav nav-tabs">

              <h3 class="box-title">Data Soal Tes Peserta Online</h3>
            </div>
            <div class="btn btn-lg">
              <a href="tambah-soal.php" class="btn btn-primary">Tambah Soal</a>
            </div>
            <div class="btn btn-lg">
              <a href="print-soal.php" class="btn btn-primary">Print Soal</a>
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
                  <td> <a href="form-edit-soal.php?id_soal=<?php echo "$row[id_soal]"; ?>"><i class="fa fa-edit"></i></a>
                  <a href="hapus-soal.php?id_soal=<?php echo "$row[id_soal]"; ?>" onclick="return confirm ('Yakin Ingin Hapus Data Ini ?')"><i class="fa fa-trash"></i></a>
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

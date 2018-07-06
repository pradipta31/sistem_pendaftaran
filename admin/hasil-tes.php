<?php
include "kiri.php";
?>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Tes Peserta</h3>
            </div>
            <!-- /.box-header -->
            <div class="btn btn-lg">
              <a href="print-hasil.php" class="btn btn-primary">Cetak Data</a>
            </div>
            <div class="box-body">

              <table class="table table-bordered">


                <tr>
                  <th style="width: 10px"><center>No</center></th>
                  <th><center>Nomor Peserta</center></th>
                  <th><center>Nama</center></th>
                  <th><center>Total Nilai</center></th>
                  <th><center>Status</center></th>
                  <th><center>Opsi</center></th>
                </tr>
                <?php
                  include "koneksi.php";
                  $query = mysqli_query($koneksi, "SELECT * FROM hasil_tes");
                  $no = 1;
                  while($row = mysqli_fetch_assoc($query)){
                    ?>

                <tr>
                  <td><?php echo $no++;?></td>
                  <td><center><?php echo $row['nomor_peserta']; ?></center></td>
                  <td><center><?php echo $row['nama']; ?></center></td>
                  <td><center> <?php echo $row['total_nilai']; ?> </center></td>
                  <td><?php echo $row['status'];?></td>
                  <td> <a href="form-edit-hasil.php?id=<?php echo "$row[id]"; ?>"><i class="fa fa-edit"></i></a>
                  <a href="hapus-hasil.php?id=<?php echo "$row[id]"; ?>" onclick="return confirm ('Yakin Ingin Hapus Data Ini ?')"><i class="fa fa-trash"></i></a>
                 <a href="print.php?id=<?php echo "$row[id]"; ?>"><i class="fa fa-print"></i></a>
                </td>
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

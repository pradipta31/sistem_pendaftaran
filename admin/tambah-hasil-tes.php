<?php
include "kiri.php";
?>
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

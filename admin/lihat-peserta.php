<?php
include "kiri.php";
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Peserta
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Peserta</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peserta</h3>
            </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><center>Nomor Peserta</center></th>
                    <th><center>Tanggal Pendaftaran</center></th>
                    <th><center>Nama Peserta</center></th>
                    <th><center>Opsi</center></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      include "koneksi.php";
                      $query = mysqli_query($koneksi, "SELECT * FROM peserta");
                      while($row = mysqli_fetch_assoc($query)){
                        ?>
                          <tr>
                            <td><center><?php echo $row['nomor_peserta']; ?></center></td>
                            <td><center> <?php echo $row['tgl_pendaftaran']; ?> </center></td>
                            <td><center><?php echo $row['nama']; ?></center></td>
                            <td><center>
                              <a href="proses-lihat-peserta.php?id_peserta=<?php echo "$row[id_peserta]"; ?>"><i class="fa fa-eye"></i></a>
                              <a href="form-edit-peserta.php?id_peserta=<?php echo "$row[id_peserta]"; ?>"><i class="fa fa-edit"></i></a>
                              <a href="hapus-peserta.php?id_peserta=<?php echo "$row[id_peserta]"; ?>" onclick="return confirm ('Yakin Ingin Hapus Data Ini ?')"><i class="fa fa-trash"></i></a>
                            </center></td>
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

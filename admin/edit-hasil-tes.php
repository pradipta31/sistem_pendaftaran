<?php
  include "kiri.php";
  include "koneksi.php";
  $id = $_GET['id_hasil_tes'];
  $query = "SELECT * FROM peserta WHERE id_hasil_tes='$id'";
  $hasil = mysqli_query($koneksi,$query);
  $row = mysqli_fetch_array($hasil);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Hasil Tes Peserta
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
        </div>
          <form action="proses-edit-pendaftara.php" method="post">
            <div class="box-body">
              <input type="hidden" name="id_hasil_tes" value="<?php echo $row['id_hasil_tes'];?>">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?> ">
              </div>
              <div class="form-group">
                <label>Nilai Tes Tulis</label>
                <input type="number" class="form-control" name="nilai_tulis" id="nilaiTesTulis" onkeyup="sum();">
              </div>
              <div class="form-group">
                <label>Nilai Tes Wawancara</label>
                <input type="number" class="form-control" name="nilai_wawancara" id="nilaiTesWawancara" onkeyup="sum();">
              </div>
              <div class="form-group">
                <label>Total Nilai</label>
                <input type="number" class="form-control" name="total_nilai" id="totalNilai" readonly>
              </div>
              <div class="form-group">
                <label>Status</label>
                <input type="text" class="form-control" name="status" id="statusNilai" readonly>
              </div>
              <button type="button" class="btn btn-default" name="button" onclick="window.location='tambah-hasil-tes.php'">Kembali</button>
              <input type="submit" value="Simpan" class="btn btn-primary"  onclick="return confirm ('Yakin simpan perubahan ?')">
            </div>
          </form>
        </div>
    </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php
    include 'bawah.php';
   ?>
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

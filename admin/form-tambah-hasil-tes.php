<?php
  include "kiri.php";
  include "koneksi.php";
  $id = $_GET['id'];
  $query = "SELECT * FROM peserta WHERE id='$id'";
  $hasil = mysqli_query($koneksi,$query);
  $row = mysqli_fetch_array($hasil);
  $query1 = "SELECT * FROM hasil_tes WHERE id = '$id'";
  $hasil1 = mysqli_query($koneksi,$query1);
  $rows = mysqli_fetch_array($hasil1);
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pendaftaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Hasil Tes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Data Peserta : <?php echo $row['nomor_peserta']; ?></h3>
          </div>
            <form action="proses-tambah-hasil-tes.php" method="post">
              <div class="box-body">
                <input type="hidden" name="id_peserta" value="<?php echo $row['id_peserta'];?>">
                <div class="form-group">
                  <label>Nomor Peserta</label>
                  <input type="text" class="form-control" name="nomor_peserta" value="<?php echo $row['nomor_peserta']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?> " readonly>
                </div>
                <div class="form-group">
                  <label>Nilai Tes Tulis</label>
                  <input type="number" class="form-control" name="nilai_tulis" id="nilaiTesTulis" onkeyup="sum();" value="<?php echo $rows['nilai_tulis'];?>">
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
</div>
<script>
  function sum() {
      var nilaiTesTulis = document.getElementById('nilaiTesTulis').value;
      var nilaiTesWawancara = document.getElementById('nilaiTesWawancara').value;
      var result = (parseInt(nilaiTesTulis) + parseInt(nilaiTesWawancara)) / 2;
      var ket = ("");
      document.getElementById('totalNilai').value = result;
      var ket = ("");
      if (result == 100) {
        ket = ("lulus");
      }else if (result >= 80) {
        ket = ("Lulus");
      }
      else if (result < 80) {
        ket = ("Tidak Lulus");
      }

      document.getElementById('statusNilai').value = ket;
  }
</script>
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
  function editRapat(){
    $("#editModal").modal('show');
  }
</script>
</body>
</html>

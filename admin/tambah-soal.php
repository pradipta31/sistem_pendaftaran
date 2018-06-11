<?php
include "kiri.php";
?>


  <!-- Content Wrapper. Contains page content -->
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
            <form action="proses-tambah-soal.php" method="post">
              <div class="box-body">
                <input type="hidden" name="id_soal">
                <div class="form-group">
                  <label>Soal</label>
                  <input type="text" class="form-control" name="soal">
                </div>
                <div class="form-group">
                  <label>A</label>
                  <input type="text" class="form-control" name="a">
                </div>
                <div class="form-group">
                  <label>B</label>
                  <input type="text" class="form-control" name="b">
                </div>
                <div class="form-group">
                  <label>C</label>
                  <input type="text" class="form-control" name="c">
                </div>
                <div class="form-group">
                  <label>D</label>
                  <input type="text" class="form-control" name="d">
                </div>
                <div class="form-group">
                  <label>Kunci Jawaban</label>
                  <select class="form-control" name="knc_jawaban">
                    <option value="E">Pilih Kunci Jawaban</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="aktif">
                    <option value="F">Pilih Status Soal</option>
                    <option value="Y">Aktif</option>
                    <option value="T">Tidak Aktif</option>
                  </select>
                </div>
                <button type="button" class="btn btn-default" name="button" onclick="window.location='tambah-soal.php'">Kembali</button>
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

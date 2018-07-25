<?php
include "kiri.php";
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Soal Tes
      </h1>
    </section>
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
            <form name="form" action="proses-tambah-soal.php" method="post"  onsubmit="return validasi_input(this)">
              <div class="box-body">
                <input type="hidden" name="id_soal">
                <div class="form-group">
                  <label>Soal</label>
                  <input type="text" class="form-control" name="soal" id="soal">
                </div>
                <div class="form-group">
                  <label>A</label>
                  <input type="text" class="form-control" name="a" id="a">
                </div>
                <div class="form-group">
                  <label>B</label>
                  <input type="text" class="form-control" name="b" id="b">
                </div>
                <div class="form-group">
                  <label>C</label>
                  <input type="text" class="form-control" name="c" id="c">
                </div>
                <div class="form-group">
                  <label>D</label>
                  <input type="text" class="form-control" name="d" id="d">
                </div>
                <div class="form-group">
                  <label>Kunci Jawaban</label>
                  <select class="form-control" name="knc_jawaban" id="knc_jawaban">
                    <option value="E">Pilih Kunci Jawaban</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="aktif" id="aktif">
                    <option value="F">Pilih Status Soal</option>
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
                  </select>
                </div>
                <button type="button" class="btn btn-default" name="button" onclick="window.location='soal-tes.php'">Kembali</button>
                <input type="submit" value="Simpan" class="btn btn-primary"  onclick="return confirm ('Yakin data sudah benar?')">
              </div>
            </form>
          </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <script type="text/javascript">
    function validasi_input(form){
      if (form.soal.value == ""){
        alert("kolom soal masih kosong");
        form.soal.focus();
        return (false);
      }else if (form.a.value=="") {
        alert("Kolom jawaban A masih kosong");
        form.a.focus();
        return (false);
      }else if (form.b.value=="") {
        alert("Kolom jawaban B masih kosong");
        form.b.focus();
        return (false);
      }else if (form.c.value=="") {
        alert("Kolom jawaban C masih kosong");
        form.c.focus();
        return (false);
      }else if (form.d.value=="All") {
        alert("Kolom jawaban D masih kosong");
        form.d.focus();
        return (false);
      }else if (form.knc_jawaban.value=="") {
        alert("Kolom Kunci Jawaban belum dipilih");
        form.knc_jawaban.focus();
        return (false);
      }else if (form.aktif.value=="") {
        alert("Kolom Status masih Kosong");
        form.aktif.focus();
        return (false);
      }
    return (true);
    }
    </script>
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

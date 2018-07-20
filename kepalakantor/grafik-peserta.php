<?php
include 'kiri.php';
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Peserta
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
      </div>
        <form action="laporan-peserta.php" method="post">
          <div class="box-body">
            <div class="col-md-12">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Dari Tanggal</label>
                  <input type="date" class="form-control" name="tgl_awal">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Sampai Tanggal</label>
                  <input type="date" class="form-control" name="tgl_akhir">
                </div>
              </div>
              <div class="col-md-10">
                <button type="button" class="btn btn-default" name="button" onclick="window.location='hasil-tes.php'">Kembali</button>
                <input type="submit" value="Simpan" name="submit" class="btn btn-primary"  onclick="return confirm ('Yakin simpan perubahan ?')">
              </div>
            </div>
          </div>
        </form>
      </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<?php
include 'bawah.php';
?>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="tgl_awal"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
    })
    $(document).ready(function(){
      var date_input=$('input[name="tgl_akhir"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
    })
</script>

<?php
include 'kiri.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Grafik Pensiun</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="grafik-pensiun.php">

                                        <div class="form-group">
                                            <label>Dari Tanggal</label>
                                            <input class="form-control" name="tgl_awal">
                                        </div>
                                        <div class="form-group">
                                            <label>Sampai Tanggal</label>
                                            <input class="form-control" name="tgl_akhir">
                                        </div>
                                        <button type="reset" class="btn btn-danger">Reset </button>
                                        <input type="submit" class="btn btn-primary" name="save">
                                    </form>
                                    </div>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
      date_input.datepicker(options);
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
      date_input.datepicker(options);
    })
</script>

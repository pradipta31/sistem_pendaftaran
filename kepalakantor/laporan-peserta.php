<?php
  include "kiri.php";
  include "koneksi.php";

?>
<html>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
           <script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['name']."', ".$row['rating']."],";
          }
      }
      ?>
    ]);

    var options = {
        title: 'Most Popular Social Media',
        width: 900,
        height: 500,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}
</script>
  <body>

  </body>
</html>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: white">
  <!-- Content Header (Page header) -->
  <div class="text-center" style="margin-top: -20px">
      <h2>Laporan Data Peserta</h2>
    </div>
    <div class="col-md-12">
      <div class="col-md-2">
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
      </div>

  </div>
</div>
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

<?php
  include 'bawah.php';
?>

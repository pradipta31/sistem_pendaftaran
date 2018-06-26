<?php
include "kiri.php";
include "koneksi.php";
// $tahun18 = $koneksi->query("SELECT * FROM peserta");
// $jumlah_18= mysqli_fetch_assoc($tahun18);
// $data = explode("-", $jumlah_18['tgl_pendaftaran']);
// // $tahun = $data[0];
// $query = mysqli_query($koneksi,"SELECT * FROM peserta WHERE tgl_pendaftaran = '$data'");
// $result = mysqli_fetch_assoc($query);

 ?>

<html>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['2017',     <?php echo $tahun;?>],
          ['2018',      <?php echo $tahun;?>],

        ]);

        var options = {
          title: 'Laporan Data Jenis Kelamin'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data);
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

  <section class="content">
    <div class="row">
      <div id="piechart" style="width: 100%; height: 640px; margin-left: 150px">
      </div>
    </div>
  </section>
</div>

<footer class="main-footer">
<div class="pull-right hidden-xs">
  <b>Version</b> 1.0.0
</div>
<strong>Copyright &copy; 2016-2017 <a href="#">DISNAKER Prov. Bali</a>.</strong> All rights
reserved.
</footer>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

</body>
</html>

<?php
include "kiri.php";
include "koneksi.php";
$pria = $koneksi->query("SELECT * FROM peserta WHERE jenis_kelamin ='Pria'");
$wanita = $koneksi->query("SELECT * FROM peserta WHERE jenis_kelamin ='wanita'");
$jumlah_pria= mysqli_num_rows($pria);
$jumlah_wanita= mysqli_num_rows($wanita);
 ?>

<html>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Pria',     <?php echo $jumlah_pria;?>],
          ['Wanita',      <?php echo $jumlah_wanita;?>],

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
      <h2>Laporan Data Jenis Kelamin</h2>
  </div>
  <div class="col-md-12">
    <div class="col-md-2">
      <div class="box-default">
        <div class="box-body">
          <div class="form-group">
            <select name="umur" class="form-control">
<?php
$mulai= date('Y') - 10;
for($i = $mulai;$i<$mulai + 50;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>

            </select>
          </div>
        </div>
      </div>
    </div>
      <div class="col-md-2">
      </div>
  </div>
  <section class="content">
    <div class="row">
      <div id="piechart" style="width: 100%; height: 640px; margin-left: 150px; margin-top: 35px">
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

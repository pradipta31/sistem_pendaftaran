<?php
include "kiri.php";
include "koneksi.php";
$gianyar = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Gianyar'");
$denpasar = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Denpasar'");
$badung = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Badung'");
$negara = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Negara'");
$karangasem = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Karangasem'");
$bangli = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Bangli'");
$buleleng = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Buleleng'");
$tabanan = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Tabanan'");
$klungkung = $koneksi->query("SELECT * FROM peserta WHERE kabupaten ='Klungkung'");


$jumlah_gianyar= mysqli_num_rows($gianyar);
$jumlah_denpasar= mysqli_num_rows($denpasar);
$jumlah_badung= mysqli_num_rows($badung);
$jumlah_negara= mysqli_num_rows($negara);
$jumlah_karangasem= mysqli_num_rows($karangasem);
$jumlah_bangli= mysqli_num_rows($bangli);
$jumlah_buleleng= mysqli_num_rows($buleleng);
$jumlah_tabanan= mysqli_num_rows($tabanan);
$jumlah_klungkung= mysqli_num_rows($klungkung);

 ?>

 <html>
   <head>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load("current", {packages:['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ["Element", "Jumlah", { role: "style" } ],
         ['Gianyar',     <?php echo $jumlah_gianyar;?>, 'color: gray'],
         ['Denpasar',      <?php echo $jumlah_denpasar;?>, 'color: #76A7FA'],
         ['Badung',     <?php echo $jumlah_badung;?>, 'color: black'],
         ['Negara',      <?php echo $jumlah_negara;?>,'color: yellow' ],
         ['Karangasem',     <?php echo $jumlah_karangasem;?>, 'color: black'],
         ['Bangli',      <?php echo $jumlah_bangli;?>, 'color: black'],
         ['Buleleng',     <?php echo $jumlah_buleleng;?>, 'color: black'],
         ['Tabanan',      <?php echo $jumlah_tabanan;?>, 'color: black'],
         ['Klungkung',     <?php echo $jumlah_klungkung;?>, 'color: black'],
       ]);

       var view = new google.visualization.DataView(data);
       view.setColumns([0, 1,
                        { calc: "stringify",
                          sourceColumn: 1,
                          type: "string",
                          role: "annotation" },
                        2]);

       var options = {
         title: "",
         width: 1000,
         height: 500,
         bar: {groupWidth: "95%"},
         legend: { position: "none" },
       };
       var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
       chart.draw(view, options);
   }
   </script>
</html>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: white">
  <!-- Content Header (Page header) -->
  <div class="text-center" style="margin-top: -20px">
      <h2>Laporan Data Wilayah</h2>
  </div>
  <div class="col-md-12">
    <div class="col-md-2">
      <div class="box-default">
        <div class="box-body">
          <div class="form-group">
            <select name="umur" class="form-control">
                <option value="All">-- Pilih  Tahun--</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
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
      <div id="columnchart_values" style="width: 100%; height: 640px; margin-left: 10px; margin-top: 30px">
      </div>

      <a href="#" onclick="window.print()"> Print </a>

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

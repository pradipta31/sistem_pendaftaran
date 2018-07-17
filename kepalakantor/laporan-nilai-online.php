<?php
include "kiri.php";
include "koneksi.php";
$nilai1 = $koneksi->query("SELECT * FROM hasil_tes WHERE nilai_tulis>=0 AND nilai_tulis<=20");
$nilai2 = $koneksi->query("SELECT * FROM hasil_tes WHERE nilai_tulis>=21 AND nilai_tulis<=40");
$nilai3 = $koneksi->query("SELECT * FROM hasil_tes WHERE nilai_tulis>=41 AND nilai_tulis<=60");
$nilai4 = $koneksi->query("SELECT * FROM hasil_tes WHERE nilai_tulis>=61 AND nilai_tulis<=80");
$nilai5 = $koneksi->query("SELECT * FROM hasil_tes WHERE nilai_tulis>=81 AND nilai_tulis<=100");



$jumlah_nilai1= mysqli_num_rows($nilai1);
$jumlah_nilai2= mysqli_num_rows($nilai2);
$jumlah_nilai3= mysqli_num_rows($nilai3);
$jumlah_nilai4= mysqli_num_rows($nilai4);
$jumlah_nilai5= mysqli_num_rows($nilai5);


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
         ['Nilai<20',     <?php echo $jumlah_nilai1;?>, 'color: gray'],
         ['Nilai<40',      <?php echo $jumlah_nilai2;?>, 'color: #76A7FA'],
         ['Nilai<60',     <?php echo $jumlah_nilai3;?>, 'color: black'],
         ['Nilai<80',      <?php echo $jumlah_nilai4;?>, 'color: #76A7FA'],
         ['Nilai<100',     <?php echo $jumlah_nilai5;?>, 'color: black'],

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
         width: 700,
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
      <h2>Laporan Data Nilai</h2>
    </div>
    <div class="col-md-12">
      <div class="col-md-2">
        <div class="box-default">
          <div class="box-body">
            <div class="form-group">
              <select name="tahun" class="form-control">
                <?php
                $mulai= date('Y') - 10;
                for($i = $mulai;$i<$mulai + 50;$i++){
                    $sel = $i == date('Y') ? ' selected="selected"' : '';
                    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                }
                ?>
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
      <div id="columnchart_values" style="width: 100%; height: 640px; margin-left: 200px; margin-top: 30px">
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

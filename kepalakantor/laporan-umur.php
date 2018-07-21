<?php
include 'kiri.php';

include "koneksi.php";

  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  $query = "SELECT DISTINCT YEAR(tgl_pendaftaran) FROM peserta ORDER BY YEAR(tgl_pendaftaran) ASC";

  $statement = $connect->prepare($query);

  $statement->execute();

  $result = $statement->fetchAll();

$umur1 = $koneksi->query("SELECT * FROM peserta WHERE umur=20");
$umur2 = $koneksi->query("SELECT * FROM peserta WHERE umur=21 AND umur<23");
$umur3 = $koneksi->query("SELECT * FROM peserta WHERE umur=24 AND umur<26");
$umur4 = $koneksi->query("SELECT * FROM peserta WHERE umur=27 AND umur<29");
$umur5 = $koneksi->query("SELECT * FROM peserta WHERE umur=30");



$jumlah_umur1= mysqli_num_rows($umur1);
$jumlah_umur2= mysqli_num_rows($umur2);
$jumlah_umur3= mysqli_num_rows($umur3);
$jumlah_umur4= mysqli_num_rows($umur4);
$jumlah_umur5= mysqli_num_rows($umur5);


 ?>

 <html>
   <head>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script type="text/javascript">
     google.charts.load("current", {packages:['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ["Element", "Jumlah", { role: "style" } ],
         ['Umur<20',     <?php echo $jumlah_umur1;?>, 'color: gray'],
         ['Umur<23',      <?php echo $jumlah_umur2;?>, 'color: #76A7FA'],
         ['Umur<26',     <?php echo $jumlah_umur3;?>, 'color: black'],
         ['Umur<28',      <?php echo $jumlah_umur4;?>, 'color: #76A7FA'],
         ['Umur<30',     <?php echo $jumlah_umur5;?>, 'color: black'],

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
      <h2>Laporan Data Umur Peserta</h2>
    </div>
    <div class="col-md-12">
      <div class="col-md-2">
        <div class="box-default">
          <div class="box-body">
            <div class="form-group">



                  <select class="form-control">
                    <option value="tampil_semua">Tampilkan Semua</option>
                   <?php
                   foreach($result as $row)
                   {
                    echo '<option value="'.$row["tahun"].'">'.print_r($row).'</option>';
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

<?php
  include 'bawah.php';
?>

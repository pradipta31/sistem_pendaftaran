<?php
include 'kiri.php';
include 'koneksi.php';
$connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");
$tgl1 = $koneksi->query("SELECT * FROM peserta WHERE tgl_pendaftaran >= '2017-01-01' AND tgl_pendaftaran <= '2017-12-31'");
$tgl2 = $koneksi->query("SELECT * FROM peserta WHERE tgl_pendaftaran >= '2018-01-01' AND tgl_pendaftaran <= '2018-12-31'");
$tgl3 = $koneksi->query("SELECT * FROM peserta WHERE tgl_pendaftaran >= '2019-01-01' AND tgl_pendaftaran <= '2019-12-31'");
$tgl4 = $koneksi->query("SELECT * FROM peserta WHERE tgl_pendaftaran >= '2020-01-01' AND tgl_pendaftaran <= '2020-12-31'");
$tgl5 = $koneksi->query("SELECT * FROM peserta WHERE tgl_pendaftaran >= '2021-01-01' AND tgl_pendaftaran <= '2021-12-31'");
$tgl6 = $koneksi->query("SELECT * FROM peserta WHERE tgl_pendaftaran >= '2022-01-01' AND tgl_pendaftaran <= '2022-12-31'");

$count_tanggal1 = mysqli_num_rows($tgl1);
$count_tanggal2 = mysqli_num_rows($tgl2);
$count_tanggal3 = mysqli_num_rows($tgl3);
$count_tanggal4 = mysqli_num_rows($tgl4);
$count_tanggal5 = mysqli_num_rows($tgl5);
$count_tanggal6 = mysqli_num_rows($tgl6);

$qGetChartByYear = "SELECT SUM(CASE WHEN tgl_pendaftaran BETWEEN = '2017-01-01' AND '2017-12-31' THEN 1 ELSE 0 END) AS a,
SUM(CASE WHEN tgl_pendaftaran BETWEEN = '2018-01-01' AND '2018-12-31' THEN 1 ELSE 0 END) AS b,
SUM(CASE WHEN tgl_pendaftaran BETWEEN = '2019-01-01' AND '2019-12-31' THEN 1 ELSE 0 END) AS c,
SUM(CASE WHEN tgl_pendaftaran BETWEEN = '2020-01-01' AND '2020-12-31' THEN 1 ELSE 0 END) AS d,
SUM(CASE WHEN tgl_pendaftaran BETWEEN = '2021-01-01' AND '2021-12-31' THEN 1 ELSE 0 END) AS e,
SUM(CASE WHEN tgl_pendaftaran BETWEEN = '2022-01-01' AND '2022-12-31' THEN 1 ELSE 0 END) AS f,
SUM(CASE WHEN tgl_pendaftaran BETWEEN = '2023-01-01' AND '2023-12-31' THEN 1 ELSE 0 END) AS g,
SUM(CASE WHEN tgl_pendaftaran BETWEEN = '2024-01-01' AND '2024-12-31' THEN 1 ELSE 0 END) AS h FROM peserta";

$rChart = $connect->query($qGetChartByYear);
 ?>

 <div class="content-wrapper">
   <section class="content-header">
     <h1>
     Data Peserta
     </h1>
   </section>

   <section class="content">
     <div class="row">
       <div class="col-md-12">
         <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Laporan Data Peserta</h3>
           </div>

           <div class="box-body">
             <canvas id="chart" height="100px"> </canvas>
           </div>
         </div>
       </div>
     </div>
   </section>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
 <script>
 var ctx = document.getElementById('chart').getContext('2d');
 var chart = new Chart(ctx, {
     // The type of chart we want to create
     type: 'bar',

     // The data for our dataset
     data: {
         labels: ["2017", "2018", "2019", "2020", "2021", "2022", "2023"],
         datasets: [{
             label: "Data Peserta Per tahun",
             backgroundColor: 'rgb(35, 13, 143)',
             borderColor: 'rgb(35, 13, 143)',
             data: [
               <?= $count_tanggal1;?>,
               <?= $count_tanggal2;?>,
               <?= $count_tanggal3;?>,
               <?= $count_tanggal4;?>,
               <?= $count_tanggal5;?>,
               <?= $count_tanggal6;?>
             ],
         }]
     },

     // Configuration options go here
     options: {}
 });
</script>

<?php
  include 'bawah.php';
?>

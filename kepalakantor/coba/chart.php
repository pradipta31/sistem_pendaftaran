<?php
//koneksi ke MySQL
$conn = new mysqli('localhost', 'root', '', 'sistem_informasi_eksekutif');

//Query ke database
$laki_laki = $conn->query("SELECT * FROM  peserta WHERE jenis_kelamin='pria'");
$perempuan = $conn->query("SELECT * FROM  peserta WHERE jenis_kelamin='wanita'");

$jumlah_laki_laki = mysqli_num_rows($laki_laki);
$jumlah_perempuan = mysqli_num_rows($perempuan);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Jenis Kelamin', 'Jumlah'],
          ['Laki-laki',     <?php echo $jumlah_laki_laki; ?>],
          ['Perempuan',      <?php echo $jumlah_perempuan; ?>]

        ]);

        var options = {
          title: 'Jumlah karyawan menurut jenis kelamin'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

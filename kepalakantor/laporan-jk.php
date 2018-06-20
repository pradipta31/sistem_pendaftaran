<?php
$conn = new mysqli("localhost","root","","sistem_informasi_eksekutif");
$pria = $conn->query("SELECT * FROM peserta WHERE jenis_kelamin ='Pria'");
$wanita = $conn->query("SELECT * FROM peserta WHERE jenis_kelamin ='wanita'");
$jumlah_pria= mysqli_num_rows($pria);
$jumlah_wanita= mysqli_num_rows($wanita);
 ?>

<html>
  <head>
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
          title: 'My Daily Activities'
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

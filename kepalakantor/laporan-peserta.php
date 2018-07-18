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
              <?php
                echo $result['tgl_pendaftaran'];
                echo $tahun18;
                print_r($result);
              ?>
            </div>
          </div>
        </div>
      </div>

  </div>

  <section class="content">
    <div id="piechart"></div>
  </section>
</div>

<footer class="main-footer">
<div class="pull-right hidden-xs">
  <b>Version</b> 1.0.0
</div>
<strong>Copyright &copy; 2016-2017 <a href="#">DISNAKER Prov. Bali</a>.</strong> All rights
reserved.
</footer>


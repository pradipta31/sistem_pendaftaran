<?php
include "kiri.php";
include "koneksi.php";
$lulus = $koneksi->query("SELECT * FROM hasil_tes WHERE status ='Lulus'");
$tdklulus = $koneksi->query("SELECT * FROM hasil_tes WHERE status ='Tidak Lulus'");

$jumlah_lulus= mysqli_num_rows($lulus);
$jumlah_tidaklulus= mysqli_num_rows($tdklulus);


 ?>

 <html>
     <script type="text/javascript" src="loader.js"></script>
     <script type="text/javascript">
       google.charts.load('current', {'packages':['corechart']});
       google.charts.setOnLoadCallback(drawChart);

       function drawChart() {

         var data = google.visualization.arrayToDataTable([
           ['Task', 'Hours per Day'],
           ['Lulus',     <?php echo $jumlah_lulus;?>],
           ['Tidak Lulus',      <?php echo $jumlah_tidaklulus;?>],


         ]);

         var options = {
           title: 'Laporan '
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
      <h2>Laporan Data Hasil Peserta</h2>
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
  <!-- <select class="form-control form-control-lg">
  <option>Large select</option>
</select>
<select class="form-control">
  <option>Default select</option>
</select> -->
  <section class="content">
    <div class="row">
      <div id="piechart" style="width: 100%; height: 640px; margin-left: 150px; margin-top: 30px">
      </div>
    </div>
  </section>
</div>

<?php
  include 'bawah.php';
?>

<?php
include "kiri.php";
?>
<?php
  include 'koneksi.php';
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");
  $year = date('Y');
  if(isset($_GET['tahun'])){
    $year = $_GET['tahun'];
  }
  $qGetDate = "SELECT DISTINCT tahun FROM peserta ORDER BY tahun ASC";

  $qGetChartByYear = "SELECT SUM(CASE WHEN jenis_kelamin = 'pria' THEN 1 ELSE 0 END) AS a, SUM(CASE WHEN jenis_kelamin = 'wanita' THEN 1 ELSE 0 END) AS b FROM peserta WHERE tahun LIKE '$year%'";

  $rChart = $connect->query($qGetChartByYear);

  $statement = $connect->prepare($qGetDate);
  // $statement = $connect->prepare($qGetChartByYear);
  $statement->execute();

  $result = $statement->fetchAll();

?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Laporan Data Jenis Kelamin
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lapororan Data Jenis Kelamin Tahun <?php echo $year; ?></h3>
            </div>

            <div class="box-body">
              <div class="row">
                <div class="col-md-3">
                  <form class="" action="" method="GET" id="frmTahun" name="frmTahun">
                    <select class="form-control" name="tahun" id="getData">
                      <option>-- Pilih Tahun --</option>
                      <!-- <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option> -->
                      <?php
                      foreach($result as $row)
                      {
                       $date = $row['tahun'];
                       echo '<option value="'.$date.'">'.$date.'</option>';
                      }
                      ?>
                    </select>
                    <!-- <input type="submit" name="submit" id="submit" value="Generate"> -->
                  </form>
                </div>
              </div>
              <canvas id="chart" height="115px"></canvas>
              <br>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <script>

    $(function(){
      var dataChart = JSON.parse('<?php echo json_encode($rChart->fetch(PDO::FETCH_ASSOC)); ?>');
      var ctx = document.getElementById('chart').getContext('2d');
      var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'pie',

          // The data for our dataset
          data: {
              labels: ["Pria", "Wanita"],
              datasets: [{
                  labels: "Data Jenis Kelamin",
                  backgroundColor: ['blue','green'],
                  data: [dataChart['a'],dataChart['b']],
              }]
          },

          // Configuration options go here
          options: {}
      });
    });
    $('#getData').change(function(){
      $('#frmTahun').submit();
    });
</script>
<?php
  include 'bawah.php';
?>

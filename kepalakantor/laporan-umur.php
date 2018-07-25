<?php
include "kiri.php";
?>
<?php
  include 'koneksi.php';
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");
  if(isset($_GET['tahun'])){
    $year = date('Y');
    $year = $_GET['tahun'];
  }
  $qGetDate = "SELECT DISTINCT tgl_pendaftaran as tgl_pendaftaran FROM peserta ORDER BY YEAR(tgl_pendaftaran) ASC";

  $qGetChartByYear = "SELECT SUM(CASE WHEN umur <= 20 THEN 1 ELSE 0 END) AS a,
  SUM(CASE WHEN umur BETWEEN 21 AND 23 THEN 1 ELSE 0 END) AS b,
  SUM(CASE WHEN umur BETWEEN 24 AND 26 THEN 1 ELSE 0 END) AS c,
  SUM(CASE WHEN umur BETWEEN 27 AND 30 THEN 1 ELSE 0 END) AS d FROM peserta WHERE tgl_pendaftaran LIKE '$year%'";

  $rChart = $connect->query($qGetChartByYear);

  $statement = $connect->prepare($qGetDate);
  // $statement = $connect->prepare($qGetChartByYear);
  $statement->execute();

  $result = $statement->fetchAll();

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
              <h3 class="box-title">Data Peserta Berdasarkan Umur</h3>
            </div>

            <div class="box-body">
              <div class="row">
                <div class="col-md-3">
                  <form class="" action="" method="GET" id="frmTahun" name="frmTahun">
                    <select class="form-control" name="tahun" id="getData">
                      <option value="1" disabled>-- Pilih Tahun --</option>
                      <!-- <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option> -->
                      <?php
                      foreach($result as $row)
                      {
                       $date = $row['tgl_pendaftaran'];
                       $date = date("Y", strtotime($date));
                       echo '<option value="'.$date.'">'.$date.'</option>';
                      }
                      ?>
                    </select>
                  </form>
                </div>
              </div>
              <canvas id="chart" height="100px"> </canvas>
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
          type: 'bar',

          // The data for our dataset
          data: {
              labels: ["<20", "21 - 22", "23 - 26", "27 - 30"],
              datasets: [{
                  label: "Data Umur",
                  backgroundColor: 'rgb(35, 13, 143)',
                  borderColor: 'rgb(35, 13, 143)',
                  data: [dataChart['a'],dataChart['b'],dataChart['c'],dataChart['d']],
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

<?php
  include 'atas-peserta.php';
  include 'koneksi.php';
  session_start();
  $nomor = (isset($_SESSION['nomor'])) ? $_SESSION['nomor'] : '';
  $query = mysqli_query($koneksi, "SELECT * FROM hasil_tes WHERE nomor_peserta='$nomor'");
  $row = mysqli_fetch_assoc($query);
?>

  <section id="content">
    <div class="container">
        <div class="row">
          <div class="text-center">
            <hr class="colorgraph">
            <h1 style="color: black">Hasil Tes</h2>
          </div>
      <div class="form-input">
        <div class="card mx-xl-5" style="width: 870px; height: 200px; border-radius: 7px; margin-left:300px">
          <div class="card-body">
            <div class="form-group">
              <select class="form-control" name="tahun">
                <option>2018</option>
                <option>2019</option>
              </select>
              <div style="color : black">


              <label> Nomor Peseta <b style="margin-left : 100px">: <?php echo $row['nomor_peserta'];?></label><br></b>
              <label> Nama   <b style="margin-left : 155px">: <?php echo $row['nama'];?></label><br></b>
              <label> Nilai Tes Online <b style="margin-left : 90px"> : <?php echo $row['nilai_tulis'];?></label><br></b>
              <label> Nilai Tes Wawancara  <b style="margin-left : 58px">: <?php echo $row['nilai_wawancara'];?></label><br></b>
              <label> Total Nilai <b style="margin-left : 130px"> : <?php echo $row['total_nilai'];?></label><br></b>
              <label> Hasil  <b style="margin-left : 161px">: <?php echo $row['status'];?></label><br></b>
            </div>
              </div>
           </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    </div>
<?php
  include 'bawah.php';
?>

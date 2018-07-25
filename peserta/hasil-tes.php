<?php
  include 'atas-peserta.php';
  include 'koneksi.php';
  $query = mysqli_query($koneksi, "SELECT * FROM hasil_tes WHERE nomor_peserta='$nomor'");
  $row = mysqli_fetch_assoc($query);
?>

  <section id="content">
    <div class="container">
        <div class="row">
          <div class="text-center">
            <h1 style="color: black">Hasil Tes</h2>
            <hr class="colorgraph">
          </div>
      <div class="form-input">
        <div class="card mx-xl-5" style="width: 870px; height: 300px; border-radius: 7px; margin-left:380px">
          <div class="card-body">
              <div style="color : black">
              <label> Nomor Peserta <b style="margin-left : 90px">: <?php echo $row['nomor_peserta'];?></label><br></b>
              <label> Nama   <b style="margin-left : 155px">: <?php echo $row['nama'];?></label><br></b>
              <label> Nilai Tes Online <b style="margin-left : 88px"> : <?php echo $row['nilai_tulis'];?></label><br></b>
              <label> Nilai Tes Wawancara  <b style="margin-left : 52px">: <?php echo $row['nilai_wawancara'];?></label><br></b>
              <label> Total Nilai <b style="margin-left : 125px"> : <?php echo $row['total_nilai'];?></label><br></b>
              <label> Hasil  <b style="margin-left : 161px">: <?php echo $row['status'];?></label><br></b>
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

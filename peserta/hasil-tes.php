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
      <div class="form-input">
        <div class="card mx-xl-5" style="width: 870px; border-radius: 7px; margin-left:300px">
          <div class="card-body">
            <div class="form-group">
              <select class="form-control" name="tahun">
                <option>2018</option>
                <option>2019</option>
              </select>
              <label> HASIL : <?php echo $row['status'];?></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  include 'bawah.php';
?>

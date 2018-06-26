<?php
include "kiripeserta1.php";
include "koneksi.php";
session_start();
if( !isset($_SESSION['nama_user']) )
{
    exit();
}elseif ( isset($_SESSION['nama_user'])) {
  $query = mysqli_query($koneksi, "SELECT * FROM hasil_tes");
  $row = mysqli_fetch_assoc($query);
}
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
$nomor = ( isset($_SESSION['nomor']) ) ? $_SESSION['nomor'] : '';
?>
        <section class="templatemo-container background-image-logo section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h1 class="section-title-2">Pencarian Hasil Tes Peserta Pelatihan </h1>
                        <hr class="section-title-underline">
                    </div>
                    <div class="form-input">
                        <div class="card mx-xl-5" style="width: 500px; border-radius: 7px; margin-left:20px">
                            <div class="card-body">
                              <form>
                                <div class="form-group" style="font-size: 17px; text-align: left">
                              
                                  <label>    Hasil       : <?php echo $row['status']; ?></label>
                                  </br>
                                </div>
                              </div>

                              </form>

                            </div>
                        </div>
                    </div>
                  </div>
                </div>
        </section>

      <?php
      include "bawahpeserta.php";
      ?>

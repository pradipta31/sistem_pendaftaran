<?php
include "kiripeserta1.php";
include 'koneksi.php';
  session_start();
  if( !isset($_SESSION['email_user']) )
  {
      exit();
    }
  $email = ( isset($_SESSION['email_user']) ) ? $_SESSION['email_user'] : '';
  $nomor = ( isset($_SESSION['nomor']) ) ? $_SESSION['nomor'] : '';
  $id = ( isset($_SESSION['id_user']) ) ? $_SESSION['id_user'] : '';
  $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nomor_peserta = '$nomor'");
  $query1 = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE nomor_peserta = '$nomor'");
  $row1 = mysqli_fetch_array($query1);
  $row = mysqli_fetch_assoc($query);
?>

<section class="templatemo-container background-image-logo section-shadow-bottom">
    <div class="container">
        <div class="row section-title-container">
            <div class="col-lg-12 text-uppercase text-center">
                <h1 class="section-title-2">Data Profil Peserta : <?php echo $row['nomor_peserta'];?></h1>
                <hr class="section-title-underline">
            </div>
            <div class="form-input" style="margin-left: 200px">
                <div class="card mx-xl-5" style="width: 769px; border-radius: 7px">
                    <div class="card-body">
                        <form>
                          <div class="form-group" style="font-size: 17px; text-align: left">
                            <pre style="text-align: left; line-height: 0.5;">
                            <label>Jurusan        : <?php echo $row1['jurusan']; ?></label>
                            </br>
                            <label>NIK            : <?php echo $row['nik']; ?></label>
                            </br>
                            <label>Nama           : <?php echo $row['nama']; ?></label>
                            </br>
                            <label>Email          : <?php echo $row['email'];?></label>
                            </br>
                            <label>Umur           : <?php echo $row['umur'];?></label>
                            </br>
                            <label>Tanggal Lahir  : <?php echo $row['tgl_lahir'];?></label>
                            </br>
                            <label>Pendidikan     : <?php echo $row['pendidikan'];?></label>
                            </br>
                            <label>Tahun Lulus    : <?php echo $row['tahun_lulus'];?></label>
                            </br>
                            <label>Agama          : <?php echo $row['agama'];?></label>
                            </br>
                            <label>Jenis Kelamin  : <?php echo $row['jenis_kelamin'];?></label>
                            </br>
                            <label>Tinggi Badan   : <?php echo $row['tinggi_badan'];?></label>
                            </br>
                            <label>Berat Badan    : <?php echo $row['berat_badan'];?></label>
                            </br>
                            <label>Alamat         : <?php echo $row['alamat'];?></label>
                            </br>
                            <label>Kabupaten/Kota : <?php echo $row['kabupaten'];?></label>
                            </br>
                            <label>Nomor Telepon  : <?php echo $row['no_telp'];?></label>
                            </br>
                            </pre>
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

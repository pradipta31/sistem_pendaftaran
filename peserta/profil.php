<?php
  include 'atas-peserta.php';
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
<style media="screen">
  .style-line{
    line-height: 1.2;
    color: rgb(0, 0, 0);
  }
</style>
<section id="content">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <hr class="colorgraph">
        <h1 style="color: black">Data Peserta (<?php echo $row['nomor_peserta'];?>)</h1>
      </div>
      <div class="col-md-12">
        <div class="col-md-2">

        </div>
        <div class="col-md-6 style-line">
          <div class="form-group">
            <label>Jurusan        <b style="margin-left: 85px">:</b> <?php echo $row1['jurusan']; ?></label>
          </div>
          <div class="form-group">
            <label>NIK            <b style="margin-left: 115px">:</b> <?php echo $row['nik']; ?></label>
          </div>
          <div class="form-group">
            <label>Nama           <b style="margin-left: 99px">:</b> <?php echo $row['nama']; ?></label>
          </div>
          <div class="form-group">
            <label>Email          <b style="margin-left: 103px">:</b> <?php echo $row['email']; ?></label>
          </div>
          <div class="form-group">
            <label>Umur           <b style="margin-left: 102px">:</b> <?php echo $row['umur']; ?></label>
          </div>
          <div class="form-group">
            <label>Tanggal Lahir  <b style="margin-left: 48px">:</b> <?php echo $row['tgl_lahir']; ?></label>
          </div>
          <div class="form-group">
            <label>Pendidikan     <b style="margin-left: 63px">:</b> <?php echo $row['pendidikan']; ?></label>
          </div>
          <div class="form-group">
            <label>Tahun Lulus    <b style="margin-left: 57px">:</b> <?php echo $row['tahun_lulus']; ?></label>
          </div>
          <div class="form-group">
            <label>Agama          <b style="margin-left: 95px">:</b> <?php echo $row['agama']; ?></label>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin            <b style="margin-left: 49px">:</b> <?php echo $row['jenis_kelamin']; ?></label>
          </div>
          <div class="form-group">
            <label>Tinggi Badan            <b style="margin-left: 55px">:</b> <?php echo $row['tinggi_badan']; ?></label>
          </div>
          <div class="form-group">
            <label>Berat Badan            <b style="margin-left: 59px">:</b> <?php echo $row['berat_badan']; ?></label>
          </div>
          <div class="form-group">
            <label>Alamat           <b style="margin-left: 95px">:</b> <?php echo $row['alamat']; ?></label>
          </div>
          <div class="form-group">
            <label>Kabupaten            <b style="margin-left: 70px">:</b> <?php echo $row['kabupaten']; ?></label>
          </div>
          <div class="form-group">
            <label>Nomor Telepon            <b style="margin-left: 38px">:</b> <?php echo $row['no_telp']; ?></label>
          </div>
        </div>
        <div class="col-md-2 text-center">
          <?php
            if ($row['file'] == null) {
              echo '<img src="images/peserta.png" height="150px" width="150px" style="border-radius: 5px">';
            }else{ ?>
              <img src="images/<?= $row['file'];?>" height="150px" width="150px" style="border-radius: 5px">
          <?php
            }
          ?>
          <br>
          <a href="form-edit-fp.php" class="btn btn-primary">Ganti Foto</a>
        </div>
      </div>
    </div>
    <hr class="colorgraph">

  </div>
</section>
<?php
  include 'bawah.php';
?>

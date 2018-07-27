<?php
include "koneksi.php";
$id=$_GET['id_peserta'];
$query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id_peserta = '$id'");
$result = mysqli_fetch_assoc($query);
$query1= mysqli_query($koneksi, "SELECT * FROM jurusan WHERE id_peserta = '$id'");
$result1 = mysqli_fetch_assoc($query1);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<!-- <link href="../peserta/css/bootstrap.min.css" rel="stylesheet" /> -->
</head>
<body>
  <style media="screen">
    .style-line{
      line-height: 1.2;
      color: rgb(0, 0, 0);
    }
  </style>
  <img src="header.png" style="width:1080px; height: 195px; margin-left: 30px">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-12"> -->

          <div class="col-md-6 style-line">
            <div class="form-group">
              <br>
          <label>Nomor Peserta  <b style="margin-left: 35px;">:</b> <?php echo $result['nomor_peserta']; ?></label>
            </div>
            <div class="form-group">
              <label>NIK            <b style="margin-left: 115px">:</b> <?php echo $result['nik']; ?></label>
            </div>
            <div class="form-group">
              <label>Jurusan            <b style="margin-left: 87px">:</b> <?php echo $result1['jurusan']; ?></label>
            </div>
            <div class="form-group">
              <label>Nama           <b style="margin-left: 99px">:</b> <?php echo $result['nama']; ?></label>
            </div>
            <div class="form-group">
              <label>Email          <b style="margin-left: 103px">:</b> <?php echo $result['email']; ?></label>
            </div>
            <div class="form-group">
              <label>Umur           <b style="margin-left: 102px">:</b> <?php echo $result['umur']; ?></label>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir  <b style="margin-left: 48px">:</b> <?php echo $result['tgl_lahir']; ?></label>
            </div>
            <div class="form-group">
              <label>Pendidikan     <b style="margin-left: 63px">:</b> <?php echo $result['pendidikan']; ?></label>
            </div>
            <div class="form-group">
              <label>Tahun Lulus    <b style="margin-left: 57px">:</b> <?php echo $result['tahun_lulus']; ?></label>
            </div>
            <div class="form-group">
              <label>Agama          <b style="margin-left: 95px">:</b> <?php echo $result['agama']; ?></label>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin            <b style="margin-left: 49px">:</b> <?php echo $result['jenis_kelamin']; ?></label>
            </div>
            <div class="form-group">
              <label>Tinggi Badan            <b style="margin-left: 55px">:</b> <?php echo $result['tinggi_badan']; ?></label>
            </div>
            <div class="form-group">
              <label>Berat Badan            <b style="margin-left: 59px">:</b> <?php echo $result['berat_badan']; ?></label>
            </div>
            <div class="form-group">
              <label>Alamat           <b style="margin-left: 95px">:</b> <?php echo $result['alamat']; ?></label>
            </div>
            <div class="form-group">
              <label>Kabupaten            <b style="margin-left: 70px">:</b> <?php echo $result['kabupaten']; ?></label>
            </div>
            <div class="form-group">
              <label>Nomor Telepon            <b style="margin-left: 38px">:</b> <?php echo $result['no_telp']; ?></label>
            </div>
          </div>
          <div class="col-md-2">

          </div>
          <div class="col-md-2">
            <div class="form-group">
              <?php
                if ($result['file'] == null) {
                  echo '<img src="images/peserta.png" height="227px" width="188px" style="border-radius: 5px">';
                }else{ ?>
                  <img src="../peserta/images/<?= $result['file'];?>" height="227px" width="188px" style="border-radius: 5px" class="img-responsive">

              <?php
            }
            ?>
            </div>
          </div>

        </div>
        <br>
      <div style=" margin-left: 600px">


      <label>Plt. Kepala Dinas tenaga Kerja dan Energi</label><br>
      <label>Sumber Daya Mineral Provinsi Bali</label>
      <br>
      <br>
      <br>
      <br>
      <br>

      <label><u>I Dewa Putu Sunartha, SE. M.Si</u></label><br>
      <label>Pembina Utama Muda</label><br>
      <label>NIP. 19650430 199112 1 002</label>
      </div>
      </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</html>

<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

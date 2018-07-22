<?php
include "koneksi.php";
$id=$_GET['id_peserta'];
$query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id_peserta = '$id'");
$result = mysqli_fetch_assoc($query);
$nomor = $result['nomor_peserta'];
$query1= mysqli_query($koneksi, "SELECT * FROM jurusan WHERE nomor_peserta = '$nomor'");
$result1 = mysqli_fetch_assoc($query1);

?>
<html>
<head>
<meta charset="utf-8">
<title></title>

</head>
<body>
  <img src="header.png" style="width:650px; height: 105px; margin-left: 30px">

  <pre style="font-size : 15px">
    <label>Berikut merupakan hasil dariserangkaian pelaksanaan Tes Penerimaan Peserta </label>
    <label>Pelatihan Kapal Pesiar yaitu sebagai berikut : </label> <br><div style="margin-left : 30px">
    <label>Nomor Peserta        : <?php echo $result['nomor_peserta']; ?></label>
    <label>NIK                  : <?php echo $result['nik']; ?></label>
    <label>Jurusan              : <?php echo $result1['jurusan']; ?></label>
    <label>Nama                 : <?php echo $result['nama']; ?></label>
    <label>Email                : <?php echo $result['alamat']; ?></label>
    <label>Umur                 : <?php echo $result['umur']; ?></label>
    <label>Tanggal Lahir        : <?php echo $result['tgl_lahir']; ?></label>
    <label>Pendidikan           : <?php echo $result['pendidikan']; ?></label>
    <label>Tahun Lulus          : <?php echo $result['tahun_lulus']; ?></label>
    <label>Agama                : <?php echo $result['agama']; ?></label>
    <label>Jenis Kelamin        : <?php echo $result['jenis_kelamin']; ?></label>
    <label>Tinggi Badan         : <?php echo $result['tinggi_badan']; ?></label>
    <label>Berat Badan          : <?php echo $result['berat_badan']; ?></label>
    <label>Alamat               : <?php echo $result['alamat']; ?></label>
    <label>Kabupaten/Kota       : <?php echo $result['kabupaten']; ?></label>
    <label>Nomor Telepon        : <?php echo $result['no_telp']; ?></label>
    <div class="col-md-1">
      <div class="form-group">
        <?php
          if ($result['file'] == null) {
            echo '<img src="images/peserta.png" height="227px" width="152px" style="border-radius: 5px">';
          }else{ ?>
            <img src="../peserta/images/<?= $result['file'];?>" height="227px" width="189px" style="border-radius: 5px" class="img-responsive">

        <?php
      }
      ?>

  </div>

      </div>








</div>
    </pre>


  </div>
  <div style=" margin-left: 400px">


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

</body>
</html>

<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

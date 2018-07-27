<?php
include "koneksi.php";
$id=$_GET['id_hasil_tes'];
$query = mysqli_query($koneksi, "SELECT * FROM hasil_tes WHERE id_hasil_tes = '$id'");
$result = mysqli_fetch_assoc($query);
$nomor = $result['nomor_peserta'];
$query1= mysqli_query($koneksi, "SELECT * FROM peserta WHERE nomor_peserta = '$nomor'");
$result1 = mysqli_fetch_assoc($query1);

?>
<html>
<head>
<meta charset="utf-8">
<title></title>

</head>
<body>
  <img src="header.png" style="width:700px; height: 105px; margin-left: 30px">

  <pre style="font-size : 15px">
    <label>Berikut merupakan hasil dariserangkaian pelaksanaan Tes Penerimaan Peserta </label>
    <label>Pelatihan Kapal Pesiar yaitu sebagai berikut : </label> <br><div style="margin-left : 30px">
    <label>Nomor Peserta        : <?php echo $result['nomor_peserta']; ?></label>
    <label>NIK                  : <?php echo $result1['nik']; ?></label>
    <label>Nama                 : <?php echo $result['nama']; ?></label>
    <label>Alamat               : <?php echo $result1['alamat']; ?></label>
    <label>Tanggal Lahir        : <?php echo $result1['tgl_lahir']; ?></label>
    <label>Nilai Tes Tulis      : <?php echo $result['nilai_tulis']; ?></label>
    <label>Nilai Tes Wawancara  : <?php echo $result['nilai_wawancara']; ?></label>
    <label>Total Nilai          : <?php echo $result['total_nilai']; ?></label>
    <label>status               : <?php echo $result['status']; ?></label>








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

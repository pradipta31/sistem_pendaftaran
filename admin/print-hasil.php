<html>
<head>
<meta charset="utf-8">
<title></title>
<img src="header.png" style="width:700px; height: 105px; margin-left: 30px">
</head>
<body>


<div style="margin-top :12px">

  <label style="margin-left : 40px">Hasil dari pelaksanaan Tes Penerimaan Peserta Pelatihan Kapal Pesiar yaitu sebagai berikut : </label>
  <table style="margin-top : 12px" width="600" border="1" align="center">
    <tr>
      <th><center>No</center></th>
      <th><center>No Peserta</center></th>
      <th><center>Nama</center></th>
      <th><center>Total Nilai</center></th>
      <th><center>Status</center></th>
    </tr>
    <?php
    $tahun = !empty($_GET['tahun']) ? $_GET['tahun'] : null;
    $status = !empty($_GET['status']) ? $_GET['status'] : null;
    $qDataTable = "SELECT * FROM hasil_tes ORDER BY id_hasil_tes DESC";
    if ($tahun != null && $status == null) {
      $qDataTable = "SELECT * FROM hasil_tes WHERE tahun='$tahun' ORDER BY id_hasil_tes DESC";
    }elseif ($tahun == null && $status != null) {
      $qDataTable = "SELECT * FROM hasil_tes WHERE status='$status' ORDER BY id_hasil_tes DESC";
    } elseif($tahun != null && $status != null) {
      $qDataTable = "SELECT * FROM hasil_tes WHERE tahun='$tahun' AND status='$status' ORDER BY id_hasil_tes DESC";
    }
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, $qDataTable);
  while ($result = mysqli_fetch_assoc($query)) {
  ?>
          <tr>
            <td><center><?php echo $no++; ?></center></td>
              <td><center><?php echo $result['nomor_peserta']; ?></center></td>
              <td><center><?php echo $result['nama']; ?></center></td>
              <td><center><?php echo $result['total_nilai']; ?></center></td>
              <td><center> <?php echo $result['status']; ?> </center></td>
            </tr>
            <?php
            }
        ?>
  </table>
  </div>

</body>
</html>

<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

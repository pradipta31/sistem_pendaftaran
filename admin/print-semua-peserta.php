<html>
<head>
<meta charset="utf-8">
<title></title>
<img src="header.png" style="width:700px; height: 105px; margin-left: 30px">
</head>
<body>


<div style="margin-top :12px">

  <label style="margin-left : 40px">Data Calon Peserta Pelatihan Kapal Pesiar yaitu sebagai berikut : </label>
  <table style="margin-top : 12px" width="600" border="1" align="center" >
    <tr>
      <th><center>No</center></th>
      <th><center>No Peserta</center></th>
      <th><center>Nama</center></th>
    </tr>
    <?php
<<<<<<< HEAD
      include "koneksi.php";
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT * FROM peserta");
      while ($result = mysqli_fetch_assoc($query)) {
    ?>
=======
    $tahun = !empty($_GET['tgl_pendaftaran']) ? $_GET['tgl_pendaftaran'] : null;
    $qDataTable = "SELECT * FROM peserta ORDER BY id_peserta DESC";
    if ($tahun != null) {
      $qDataTable = "SELECT * FROM peserta WHERE YEAR(tgl_pendaftaran)='$tahun' ORDER BY id_peserta DESC";
    }
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, $qDataTable);
  while ($result = mysqli_fetch_assoc($query)) {
  ?>
>>>>>>> 9535612a8fd160f4415615e9be27356aadd1b3f6
          <tr>
            <td><center><?php echo $no++; ?></center></td>
              <td><center><?php echo $result['nomor_peserta']; ?></center></td>
              <td><center><?php echo $result['nama']; ?></center></td>
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

<html>
<head>
<meta charset="utf-8">
<title></title>
<img src="header.png" style="width:650px; height: 105px; margin-left: 30px">
</head>
<body>


<div style="margin-top :12px">

  <label style="margin-left : 40px">Hasil dari pelaksanaan Tes Penerimaan Peserta Pelatihan Kapal Pesiar yaitu sebagai berikut : </label>
  <table style="margin-top : 12px" width="600" border="1" align="center">
    <tr>
      <th><center>No</center></th>
      <th><center>No Peserta</center></th>
      <th><center>Nama</center></th>
    </tr>
    <?php
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM peserta");
  while ($result = mysqli_fetch_assoc($query)) {
  ?>
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

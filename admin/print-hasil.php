<html>
<head>
<meta charset="utf-8">
<title>Hasil Tes</title>
</head>
<body>

  

  <table width="600" border="1" align="center">
    <tr>
      <th><center>No</center></th>
      <th><center>No Peserta</center></th>
      <th><center>Nama</center></th>
      <th><center>Total Nilai</center></th>
      <th><center>Status</center></th>
    </tr>
    <?php
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM hasil_tes");
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

</body>
</html>

<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

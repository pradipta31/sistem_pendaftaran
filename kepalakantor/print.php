<?php
include "koneksi.php";
$id=$_GET['id_hasil_tes'];
$query = mysqli_query($koneksi, "SELECT * FROM hasil_tes WHERE id_hasil_tes = '$id'");
$result = mysqli_fetch_assoc($query);
?>
<html>
<head>
<meta charset="utf-8">
<title>Data Hasil Tes Peserta</title>
</head>
<body>

<table width="600" border="1" align="center">
<tr>
<td>Nama </td>
<td><?php echo $result['nama'];?> </td>
</tr>
<tr>
<td>Nilai Tes Online</td>
<td><?php echo $result['nilai_tulis'];?></td>
</tr>
<tr>
<td>Nilai Wawancara</td>
<td><?php echo $result['nilai_wawancara'];?></td>
</tr>
<tr>
<td>Status</td>
<td><?php echo $result['status'];?></td>
</tr>
</table>


</body>
</html>

<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

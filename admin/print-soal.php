<html>
<head>
<meta charset="utf-8">
<title>Soal Tes</title>
<h5>Nama Peserta :</h5>
<h5>Nomor Peserta :</h5>
</head>
<body>

  <?php
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM soal");
  while ($result = mysqli_fetch_assoc($query)) {
  ?>

<div class="form-group">
<div class="card-body">
  <?php echo $no++; ?>.
  <?php echo $result['soal'];?><br>
  a. <?php echo $result['a'];?><br>
  b. <?php echo $result['b'];?><br>
  c. <?php echo $result['c'];?><br>
  d. <?php echo $result['d'];?><br>
</div>
</div>
<?php
}
 ?>


</body>
</html>

<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

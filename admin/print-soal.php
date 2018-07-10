<html>
<head>
<meta charset="utf-8">

<title>Soal Tes</title>

</head>
<body>

    Nama Peserta :
  </br>
    Nomor Peserta :
</br>

  <?php
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM soal");
  while ($result = mysqli_fetch_assoc($query)) {
  ?>

<div class="form-group">
<div class="card-body">
</br>
  <?php echo $no++; ?>.
  <?php echo $result['soal'];?><br>


  &nbsp; &nbsp;  a. <?php echo $result['a'];?><br>
  &nbsp; &nbsp;  b. <?php echo $result['b'];?><br>
  &nbsp; &nbsp;  c. <?php echo $result['c'];?><br>
  &nbsp; &nbsp;  d. <?php echo $result['d'];?><br>

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

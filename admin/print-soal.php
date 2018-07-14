<html>
<head>
<meta charset="utf-8">

<title></title>
  <img src="header.png" style="width:650px; height: 105px; margin-left: 30px">
</head>
<body>
  <div style="margin-left : 30px">


<pre style="font-size : 14px"> <b>
  <label>Nama Peserta  :...........................................</label>
  <label>Nomor Peserta :...........................................</label></pre>
</b>
  <?php
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM soal WHERE aktif='Y' ORDER BY RAND(), id_soal DESC LIMIT 50");
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
  </div>


</body>
</html>

<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

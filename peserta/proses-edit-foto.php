<?php
  include 'koneksi.php';
  if (isset($_POST['submit'])) {
    $id = $_POST['id_peserta'];
    $problem = $_FILES['file']['error'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];

    if ($nama_file != ''){
      if ($problem === 0) {
        move_uploaded_file($lokasi_file, 'images/' .$nama_file);
        $update = "UPDATE peserta SET file = '$nama_file' WHERE id_peserta='$id'";
        $query = mysqli_query($koneksi, $update);
        if ($query) {
          echo "<script>alert('Data Berhasil Diubah!'); window.location='profil.php';</script>";
        }else{
          echo "<script>alert('Data Gagal Diubah!'); window.location='profil.php';</script>";
        }
      }
    }
    
  }

?>

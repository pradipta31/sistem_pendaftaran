<?php
include "kiri.php";
session_start();

if( !isset($_SESSION['session_admin']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
$username = $_SESSION['username_user'];
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="text-center">
          <h1><p>Halaman <?php echo $nama; ?></p><h1>
          <h1>Selamat Datang di Sistem Informasi Eksekutif Peserta Pelatihan Kapal Pesiar Pada Disnaker ESDM Provinsi Bali</h1>
          <p style="margin-top: 100px; margin-bottom: 250px;">
            <img src="dinasku.png" alt="DISNAKER Prov Bali" height="400px" width="400px">
          </p>
        </div>
      </div>
    </section>

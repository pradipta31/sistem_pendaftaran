<?php
include "kiri.php";
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="text-center">
<<<<<<< HEAD
          <h1>Halaman Admin <br>Selamat Datang di Sistem Informasi Eksekutif Peserta Pelatihan Kapal Pesiar Pada Disnaker ESDM Provinsi Bali</h1>
=======
          <h1><p>Halaman
          <?php
            $nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
            echo $nama;
          ?>
        </p></h1>
          <h1>Selamat Datang di Sistem Informasi Eksekutif Peserta Pelatihan Kapal Pesiar Pada Disnaker ESDM Provinsi Bali</h1>
>>>>>>> 92c72cf68a231d8d3a5f24af627825c1e9088f1e
          <p style="margin-top: 100px; margin-bottom: 250px;">
            <img src="dinasku.png" alt="DISNAKER Prov Bali" height="400px" width="400px">
          </p>
        </div>
      </div>
    </section>
  </div>
  <?php
    include 'bawah.php';
   ?>

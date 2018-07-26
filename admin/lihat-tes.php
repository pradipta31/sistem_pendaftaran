<?php
  include "kiri.php";
  include "koneksi.php";
  $id = $_GET['id_hasil_tes'];
  $query = "SELECT * FROM tes WHERE id_hasil_tes='$id'";
  $hasil = mysqli_query($koneksi,$query);
  $row = mysqli_fetch_array($hasil);
  $q = "SELECT * FROM hasil_tes WHERE id_hasil_tes ='$id'";
  $a = mysqli_query($koneksi,$q);
  $rows = mysqli_fetch_assoc($a);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pendaftaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Data Jawaban : <?php echo $rows['nomor_peserta']; ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <?php
              $benar = 0;
              $salah = 0;
              $kosong = 0;
              $id_soal = $row['id_soal'];
              $benar = $row['benar'];
              $salah = $row['salah'];
              $kosong = $row['kosong'];
              $nilai = $benar*2;
              $q = mysqli_query($koneksi,"SELECT *,LEFT(pilihan,49) pilihan FROM tes WHERE id_hasil_tes = '$id'");
              $a = mysqli_fetch_assoc($q);
              $q1 = mysqli_query($koneksi,"SELECT *,substr(pilihan, 51,98) pilihan FROM tes WHERE id_hasil_tes = '$id'");
              $b = mysqli_fetch_assoc($q1);
              $pilihan = $a['pilihan'];
              $pilihan1 = $b['pilihan'];
              $array1 = explode(",",$pilihan1);
              $array = explode(",",$pilihan);
              $no = 1;
              $no1 = 26;
              echo "<div class='col-md-3'>";
              foreach ($array as $key) {
                echo
                '
                  '.$no++.'.
                ';
                echo
                ''.$key.'</br>';
              }
              echo "</div>";
              echo "<div class='col-md-2'>";
              foreach ($array1 as $key1) {
                echo
                '
                  '.$no1++.'.
                ';
                echo
                ''.$key1.'</br>';
              }
              echo "</div>";
              ?>

            </div>
          </div>
          <p>
            <br>
          <h5>Benar = <?php echo $row['benar'];?> x 2, Salah = <?php echo $row['salah'];?> x 0, Kosong = <?php echo $row['kosong'];?> x 0</h5>
          Total Nilai = <?php echo $nilai; ?>
        </p>
          <button type="button" class="btn btn-default" name="button" onclick="window.location='hasil-tes.php'">Kembali</button>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php
    include 'bawah.php';
  ?>

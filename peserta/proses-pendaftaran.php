<?php
include "kiripeserta.php";
?>
    <section class="templatemo-container background-image-logo section-shadow-bottom">
        <div class="container">
            <div class="row section-title-container">
                <div class="col-lg-12 text-uppercase text-center">
                    <h5 class="section-title-2">Formulir Pendaftaran</h5>
                    <hr class="section-title-underline">
                </div>
                <div class="form-input">
                    <div class="card mx-xl-5" style="width: 700px; border-radius: 7px; margin-right: :10px; margin-left: 20px">
                        <div class="card-body">
                          <form action="" method="post">
                              <?php
                              include 'koneksi.php';
                              $query = mysqli_query($koneksi,"SELECT * FROM peserta ORDER BY nomor_peserta DESC LIMIT 1 "); //menampilkan data pada tabel peserta dengan mengurutkan data nomor peserta dari yang paling bawah
                              $tgl_pendaftaran = date("Y-m-d H:i:s"); // menampilkan tanggal pendaftaran peserta hari ini

                              $id_peserta = $_POST['id_peserta'];
                              $nomor_peserta = $_POST['nomor_peserta']; //mengambil data nomor peserta
                              $jurusan = $_POST['jurusan'];
                              $nik = $_POST['nik']; //mengambil data nik
                              $nama = $_POST['nama']; //mengambil data nama
                              $email = $_POST['email']; //mengambil data email
                              $lahir = new DateTime($_POST['tgl_lahir']); //membuat baru format tanggal sekaligus mengambil data tanggal lahir
                              $today = new DateTime(); // membuat data tanggal hari ini
                              $calculate_umur = $today->diff($lahir); // pengurangan umur yaitu tanggal lahir - hari ini
                              $umur = $calculate_umur->y; // menampilkan tahun
                              // $bulan = $calculate_umur->m; // menampilkan bulan
                              // $hari = $calculate_umur->d; // menampilkan hari
                              $tgl_lahir = date($_POST['tgl_lahir']); // mengambil data tanggal lahir dengan format date
                              $pendidikan = $_POST['pendidikan']; //mengambil data pendidikan
                              $tahun_lulus = $_POST['tahun_lulus']; //mengambil data tahun lulus
                              $agama = $_POST['agama']; //mengambil data agama
                              $jenis_kelamin = $_POST['jenis_kelamin']; //mengambil data jenis kelamin
                              $tinggi_badan = $_POST['tinggi_badan']; //mengambil data tinggi badan
                              $berat_badan = $_POST['berat_badan']; //mengambil data berat badan
                              $alamat_rumah = $_POST['alamat']; //mengambil data alamat
                              $kabupaten = $_POST['kabupaten']; //mengambil data kabupaten
                              $no_telp = $_POST['no_telp']; //mengambil data nomor telepon


                              $cek = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nik='$nik'"); // mengecek apakah data nik pada tabel peserta
                              if (mysqli_num_rows($cek) == 0) { // mengecek data nik dengan variabel cek apakah nik belum terpakai
                                if ($umur < 18) { // mengecek umur
                                  echo "<script>alert('Umur Anda tidak cukup untuk melakukan pendaftaran!');
                                  window.location.href='index.php';
                                </script>";
                                }else{
                                  $query1 ="insert into peserta (nomor_peserta, tgl_pendaftaran, nik, nama, email, umur, tgl_lahir, pendidikan, tahun_lulus, agama, jenis_kelamin, tinggi_badan,berat_badan,alamat,kabupaten,no_telp)
                                  VALUES ('$nomor_peserta','$tgl_pendaftaran','$nik', '$nama','$email', '$umur', '$tgl_lahir', '$pendidikan', '$tahun_lulus', '$agama', '$jenis_kelamin', '$tinggi_badan', '$berat_badan', '$alamat_rumah','$kabupaten', '$no_telp')"; //menambah data
                                    $query2 = "insert into jurusan (jurusan) values ('$jurusan')";
                                  $hasil = mysqli_query($koneksi,$query1); // menjalankan query
                                  $hasil2 = mysqli_query($koneksi, $query2);
                                  echo "<h3><center>Data Peserta Pelatihan Kapal Pesiar Pada Disnaker ESDM Provini Bali </center> ";
                                  echo "<pre>";
                                  echo "<br>";
                                  echo "Jurusan          : $jurusan";
                                  echo "<br>";
                                  echo "NIK              : $nik";
                                  echo "<br>";
                                  echo "Nama             : $nama";
                                  echo "<br>";
                                  echo "Email            : $email";
                                  echo "<br>";
                                  echo "Umur             : $umur";
                                  echo "<br>";
                                  echo "Tanggal Lahir    : $tgl_lahir";
                                  echo "<br>";
                                  echo "Pendidikan       : $pendidikan";
                                  echo "<br>";
                                  echo "Tahun Lulus      : $tahun_lulus";
                                  echo "<br>";
                                  echo "Agama            : $agama";
                                  echo "<br>";
                                  echo "Jenis Kelamin    : $jenis_kelamin";
                                  echo "<br>";
                                  echo "Tinggi Badan     : $tinggi_badan";
                                  echo "<br>";
                                  echo "Berat Badan      : $berat_badan";
                                  echo "<br>";
                                  echo "Alamat Rumah     : $alamat_rumah";
                                  echo "<br>";
                                  echo "Kabupaten/Kota   : $kabupaten";
                                  echo "<br>";
                                  echo "Nomor Telepon    : $no_telp";
                                  echo "<br>";
                                  echo "<br>";
                                  echo "<br>";
                                  echo "Nomor Pendaftaran Anda Adalah : $nomor_peserta";
                                  echo " ";
                                  mysqli_close($koneksi);
                                }
                              }else{
                                echo "<script>alert('Anda sudah melakukan pendaftaran sebelumnya!');
                                  window.location.href='index.php';
                                </script>";
                              }

                               ?>
                               </form>
                                <div class="text-center py-4 mt-3">
                                    <button class="btn btn-primary btn-lg" onclick="window.location.href='index.php'" style="padding: 10px 25px; border-radius:7px">Tutup</button>
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    </section>
    <?php
    include "bawahpeserta.php";
    ?>

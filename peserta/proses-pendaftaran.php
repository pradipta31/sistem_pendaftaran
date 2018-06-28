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
                              $query = mysqli_query($koneksi,"SELECT * FROM peserta ORDER BY nomor_peserta DESC LIMIT 1 ");
                              $tgl_pendaftaran = date("Y-m-d H:i:s");

                              $nomor_peserta = $_POST['nomor_peserta'];
                              $nik = $_POST['nik'];
                              $nama = $_POST['nama'];
                              $email = $_POST['email'];
                              $umur = $_POST['umur'];
                              $tgl_lahir = date($_POST['tgl_lahir']);
                              $pendidikan = $_POST['pendidikan'];
                              $tahun_lulus = $_POST['tahun_lulus'];
                              $agama = $_POST['agama'];
                              $jenis_kelamin = $_POST['jenis_kelamin'];
                              $tinggi_badan = $_POST['tinggi_badan'];
                              $berat_badan = $_POST['berat_badan'];
                              $alamat_rumah = $_POST['alamat'];
                              $kabupaten = $_POST['kabupaten'];
                              $no_telp = $_POST['no_telp'];

                              //cek data nik
                              // $cekdata = "SELECT nik FROM peserta where nik = '$nik'";
                              // $ada = mysqli_query($koneksi, $cekdata) or die(mysqli_error($koneksi));

                              if(!$koneksi){
                                echo "GAGAL KONEKSI";
                              }else{
                                echo "<h3><center>Data Peserta Pelatihan Kapal Pesiar Pada Disnaker ESDM Provini Bali </center> ";
                                echo "<pre>";
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

                                $query1 ="insert into peserta (nomor_peserta, tgl_pendaftaran, nik, nama, email, umur, tgl_lahir, pendidikan, tahun_lulus, agama, jenis_kelamin, tinggi_badan,berat_badan,alamat,kabupaten,no_telp)
                                VALUES ('$nomor_peserta','$tgl_pendaftaran','$nik', '$nama','$email', '$umur', '$tgl_lahir', '$pendidikan', '$tahun_lulus', '$agama', '$jenis_kelamin', '$tinggi_badan', '$berat_badan', '$alamat_rumah','$kabupaten', '$no_telp')";
                                $hasil = mysqli_query($koneksi,$query1);
                                echo "<br>";
                                echo "<br>";
                                echo "Nomor Pendaftaran Anda Adalah : $nomor_peserta";
                                echo " ";
                                mysqli_close($koneksi);
                              }
                               ?>
                               </form>
                                <div class="text-center py-4 mt-3">
                                    <button  name="close" class="btn btn-primary btn-lg" onclick="window.location.href='pendaftaran.php'" style="padding: 10px 25px; border-radius:7px" type="close">Tutup</button>
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

<?php
  include 'atas.php';
?>
<section id="content">
        <div class="container">
            <div class="row section-title-container">
                <div class="col-lg-12 text-uppercase text-center">
                    <h3 style="color : black">Data Peserta Pelatihan Kapal Pesiar Pada Disnaker ESDM Provini Bali </h3>
                    <hr class="section-title-underline">
                </div>
                </div>
                <div class="form-input">
                    <div class="card mx-xl-5" style="width: 700px;height: 600px;border-radius: 7px; margin-right: :10px; margin-left: 300px">
                        <div class="card-body" style="color : black">
                          <form action="" method="post">
                              <?php
                              include 'koneksi.php';
                              $tgl_pendaftaran = date("Y-m-d"); // menampilkan tanggal pendaftaran peserta hari ini
                              $d = date("Y");
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
                              $jenis_kelamin = '';
                              $jenis_kelamin = $_POST['jenis_kelamin']; //mengambil data jenis kelamin
                              $tinggi_badan = $_POST['tinggi_badan']; //mengambil data tinggi badan
                              $berat_badan = $_POST['berat_badan']; //mengambil data berat badan
                              $alamat_rumah = $_POST['alamat']; //mengambil data alamat
                              $kabupaten = $_POST['kabupaten']; //mengambil data kabupaten
                              $no_telp = $_POST['no_telp']; //mengambil data nomor telepon
                              $lokasi_file = $_FILES['file']['tmp_name'];
                              $tipe_file = $_FILES['file']['type'];
                              $nama_file = $_FILES['file']['name'];
                              $direktori = "images/$nama_file";
                              $cek = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nik='$nik'"); // mengecek apakah data nik pada tabel peserta
                              $putty = mysqli_fetch_assoc($cek);
                              $num = mysqli_num_rows($cek);
                              $tanggal = $putty['tgl_pendaftaran'];
                              $tahun = date("Y",strtotime($tanggal));
                              $cek_nik = $putty['nik'];
                              if ($tahun != date("Y") AND mysqli_num_rows($cek) == 1 OR mysqli_num_rows($cek) == 0) {
                                if ($umur < 18) { // mengecek umur
                                  echo "<script>alert('Umur Anda tidak cukup untuk melakukan pendaftaran!');
                                  window.location.href='index.php';
                                </script>";
                                }elseif ($umur > 30) {
                                  echo "<script>alert('Umur Anda tidak dapat terdaftar karena batas 30 tahun!');
                                  window.location.href='index.php';
                                </script>";
                              }
                              elseif ($jenis_kelamin == 'pria' AND $tinggi_badan < 165) {
                                echo "<script>alert('Tinggi Badan Anda tidak cukup untuk melakukan pendaftaran!');
                                window.location.href='index.php';
                              </script>";
                            }elseif ($jenis_kelamin == 'wanita' AND $tinggi_badan < 155) {
                              echo "<script>alert('Tinggi Badan Anda tidak cukup untuk melakukan pendaftaran!');
                              window.location.href='index.php';
                            </script>";
                          }elseif ($jenis_kelamin == 'wanita' AND $berat_badan < 45) {
                            echo "<script>alert('Berat Badan Anda tidak cukup untuk melakukan pendaftaran!');
                            window.location.href='index.php';
                          </script>";
                        }elseif ($jenis_kelamin == 'pria' AND $berat_badan < 58) {
                          echo "<script>alert('Berat Badan Anda tidak cukup untuk melakukan pendaftaran!');
                          window.location.href='index.php';
                        </script>";
                        }elseif(!empty($lokasi_file)){
                                  move_uploaded_file($lokasi_file,$direktori);
                                  $query1 ="insert into peserta (nomor_peserta, tgl_pendaftaran, tahun, nik, nama, email, umur, tgl_lahir, pendidikan, tahun_lulus, agama, jenis_kelamin, tinggi_badan,berat_badan,alamat,kabupaten,no_telp,file)
                                  VALUES ('$nomor_peserta','$tgl_pendaftaran','$d','$nik', '$nama','$email', '$umur', '$tgl_lahir', '$pendidikan', '$tahun_lulus', '$agama', '$jenis_kelamin', '$tinggi_badan', '$berat_badan', '$alamat_rumah','$kabupaten', '$no_telp','$nama_file')"; //menambah data
                                  $mysqli = $koneksi->query($query1);

                                  $query2 = "insert into jurusan (id_peserta,jurusan) values (LAST_INSERT_ID(),'$jurusan')";
                                  $mysqli1 = $koneksi->query($query2);
                                }
                                    ?>
                                  <div class="col-md-12">
                                    <div class="col-md-8">
                                      <label>Jurusan        <b style="margin-left: 85px">:</b> <?php echo $jurusan; ?></label><br>
                                      <label>NIK            <b style="margin-left: 115px">:</b> <?php echo $nik; ?></label><br>
                                      <label>Nama           <b style="margin-left: 99px">:</b> <?php echo $nama; ?></label><br>
                                      <label>Email          <b style="margin-left: 103px">:</b> <?php echo $email; ?></label><br>
                                      <label>Umur           <b style="margin-left: 102px">:</b> <?php echo $umur; ?></label><br>
                                      <label>Tanggal Lahir  <b style="margin-left: 48px">:</b> <?php echo $tgl_lahir; ?></label><br>
                                      <label>Pendidikan     <b style="margin-left: 63px">:</b> <?php echo $pendidikan; ?></label><br>
                                      <label>Tahun Lulus    <b style="margin-left: 57px">:</b> <?php echo $tahun_lulus; ?></label><br>
                                      <label>Agama          <b style="margin-left: 95px">:</b> <?php echo $agama; ?></label><br>
                                      <label>Jenis Kelamin            <b style="margin-left: 49px">:</b> <?php echo $jenis_kelamin; ?></label><br>
                                      <label>Tinggi Badan            <b style="margin-left: 55px">:</b> <?php echo $tinggi_badan; ?></label><br>
                                      <label>Berat Badan            <b style="margin-left: 59px">:</b> <?php echo $berat_badan; ?></label><br>
                                      <label>Alamat           <b style="margin-left: 95px">:</b> <?php echo $alamat_rumah; ?></label><br>
                                      <label>Kabupaten            <b style="margin-left: 70px">:</b> <?php echo $kabupaten; ?></label><br>
                                      <label>Nomor Telepon            <b style="margin-left: 38px">:</b> <?php echo $no_telp; ?></label><br>
                                      <label>Nomor Pendaftaran Anda Adalah          :</b> <?php echo $nomor_peserta; ?></label><br>
                                    </div>

                                    <div class="col-md-2 text-center">
                                      <?php
                                        if ($nama_file == null) {
                                          echo '<img src="images/peserta.png" height="227px" width="152px" style="border-radius: 5px">';
                                        }else{ ?>
                                          <img src="images/<?php echo $nama_file; ?>" height="227px" width="189px" style="border-radius: 5px">
                                      <?php
                                        }
                                      ?>
                                      <?php
                                    }else{
                                      echo "<script>alert('Anda sudah melakukan pendaftaran sebelumnya!');
                                        window.location.href='index.php';
                                      </script>";
                                    }
                                ?>
                              </div>
                                  </div>
                          </form>

                          <div class="text-center py-4 mt-3">
                            <a href="index.php" class="btn btn-primary btn-lg" style="padding: 10px 25px; border-radius:7px; margin-top: 20px">Tutup</a>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    </section>
  <?php
    include 'bawah.php';
  ?>

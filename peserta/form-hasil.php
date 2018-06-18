<?php
include "kiripeserta.php";
?>
        <section class="templatemo-container background-image-logo section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h1 class="section-title-2">Pencarian Hasil Tes Peserta Pelatihan </h1>
                        <hr class="section-title-underline">
                    </div>
                    <div class="form-input">
                        <div class="card mx-xl-5" style="width: 500px; border-radius: 7px; margin-left:20px">
                          <div class="card-body">
                              <form  name="form" method="get" onsubmit="return validasi_input(this)">
                                  <p class="h1 text-center py-1">Form Input</p>
                                  <label style="font-size: 14px">Cari Nomor Peserta</label>
                                  <input type="text" class="form-control" name="cari">
                                  <p>*)isi kolom dengan Nomor Peserta</p>
                                  <br>

                                  <div class="text-center py-4 mt-3">
                                      <button class="btn btn-primary btn-lg" style="padding: 10px 25px; border-radius:7px" type="submit">Cari Hasil</button>
                                  </div>
                              </form>
                              <?php
                              include 'koneksi.php';

                              if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                echo "<b>Hasil pencarian : ".$cari."</b>";
                                echo "<br>";
                              }
                              ?>



                                <?php
                                $no= 1;
                                if(isset($_GET['cari'])){
                                  $cari = $_GET['cari'];
                                  $data = mysqli_query($koneksi,"select * from hasil_tes where nomor_peserta like '%".$cari."%'");
                                }else{
                                  $data = mysqli_query($koneksi,"select * from hasil_tes");
                                }
                                ?>
                                <table class="table table-bordered">
                                  <tr>
                                    <th><center>No</center></th>
                                    <th><center>Nomor Peserta</center></th>
                                    <th><center>Nama</center></th>
                                    <th><center>Status</center></th>
                                  </tr>
                                <?php
                                while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                  <td><center><?php echo $no++;?></center></td>
                                  <td><center><?= $d['nomor_peserta'];?></center></td>
                                  <td><?= $d['nama'];?></td>
                                  <td><?= $d['status'];?></td>
                                </tr>
                                <?php } ?>
                              </table>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
        </section>
        <script type="text/javascript">
        function validasi_input(form){
          if (form.cari.value == ""){
            alert("Kolom Nomor Peserta Masih Kosong!");
            form.cari.focus();
            return (false);
          }
        return (true);
        }
        </script>

      <?php
      include "bawahpeserta.php";
      ?>

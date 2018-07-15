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
                                  <?php
                                  include 'koneksi.php';
                                  $nama= $_GET['nama']; //get the nama value from form
                                  $q = "SELECT * from hasil_tes where nama like '%$nama%' "; //query to get the search result
                                  $result = mysql_query($q); //execute the query $q
                                  echo "<center>";
                                  echo "<h2> Hasil Pencarian </h2>";
                                  echo "<table>";
                                  echo "
                                  <tr>
                                  <td>Nama Peserta</td>
                                  <td>Status</td>
                                  </tr>";
                                  while ($data = mysqli_fetch_array($result)) {  //fetch the result from query into an array
                                  echo "
                                  <tr>
                                  <td>".$data['nama']."</td>
                                  <td>".$data['status']."</td>
                                  </tr>";
                                  }
                                  echo "</table>";
                                  ?>

                                    <div class="text-center py-4 mt-3">
                                        <button  name="close" class="btn btn-primary btn-lg" onclick="window.location.href='form-hasil.php'" style="padding: 10px 25px; border-radius:7px" type="close">OK</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
        </section>
        <script type="text/javascript">
        function validasi_input(form){
          if (form.hasil.value == ""){
            alert("kolom hasil kosong!");
            form.hasil.focus();
            return (false);
          }
          return (true);
          }
          </script>
          <?php
          include "bawahpeserta.php";
          ?>

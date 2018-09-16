<?php
  include 'atas-peserta.php';
  $q = mysqli_query($koneksi,"SELECT * FROM peserta WHERE nomor_peserta = '$nomor'");
  $ro = mysqli_fetch_assoc($q);
?>
          <section id="content">
              <!-- <div class="row section-title-container"> -->
                  <div class="col-md-12 text-uppercase text-center">
                      <h1 class="section-title-2">Soal Ujian Online</h1>
                  </div>
              <!-- </div> -->
              <style media="screen">
                .soal{
                  margin-left: 100px;
                  margin-top: -50px;
                  line-height: 1;
                  margin-bottom: 50px;
                }
                .font-soal{
                  font-size: 25px;
                }
                .font-jawab{
                  font-size: 19px;
                }
                input[value="A"]{
                  margin-left: 1px;
                }
                input[value="B"]{
                  margin-left: 3px;
                }
                input[value="C"]{
                  margin-left: 2px;
                }
                input[value="D"]{
                  margin-left: 1px;
                }
                td{
                  line-height: 20px;
                }

                .timer {
                  font-size: 5em;
                  text-align: center;
                  color: green;
                  margin-left: -150px;
                  margin-bottom: 20px;
                }
              </style>
          <div class="container">
              <div class="soal">
              <div class="timer">
                  <time id="countdown"></time>
              </div>
                <div style="width:100%; height:100%">
                  <form class="form-group" action="jawab.php" method="post" id="formSoal" name="formSoal">
                <?php
                  include 'koneksi.php';
                  $query = mysqli_query($koneksi,"SELECT * FROM soal WHERE aktif='Y' ORDER BY RAND(), id_soal, id_soal DESC LIMIT 50");
                  $jumlah = mysqli_num_rows($query);
                  $urut = 0;
                  while ($row = mysqli_fetch_array($query)) {
                    $id = $row['id_soal'];
                    $soal = $row['soal'];
                    $a = $row['a'];
                    $b = $row['b'];
                    $c = $row['c'];
                    $d = $row['d'];
                    ?>


                      <table width="100%" border="0">
                      <input type="hidden" name="id_soal[]" value=<?php echo $id;?>>
                      <input type="hidden" name="jumlah" value=<?php echo $jumlah;?>>
                      <input type="hidden" name="id_peserta" value=<?php echo $ro['id_peserta']; ?>>
                        <tr>
                              <td width="21" height="21"><font color="#000000" class="font-soal"><?php echo $urut=$urut+1; ?>.</font></td>
                              <td><font color="black" class="font-soal"><?php echo "$soal"; ?></font></td>
                        </tr>
                      <br>
                        <tr>
                            <td><font color="#000000" class="font-jawab">&nbsp;</font></td>
                            <td><font color="#000000" class="font-jawab">
                           A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                            <?php echo "$a";?></font> </td>
                        </tr>
                        <tr>
                            <td><font color="#000000" class="font-jawab">&nbsp;</font></td>
                            <td><font color="#000000" class="font-jawab">
                           B.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B">
                            <?php echo "$b";?></font> </td>
                        </tr>
                        <tr>
                            <td><font color="#000000" class="font-jawab">&nbsp;</font></td>
                            <td><font color="#000000" class="font-jawab">
                           C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C">
                            <?php echo "$c";?></font> </td>
                        </tr>
                        <tr>
                            <td><font color="#000000" class="font-jawab">&nbsp;</font></td>
                            <td><font color="#000000" class="font-jawab">
                           D.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D">
                            <?php echo "$d";?></font> </td>
                        </tr>
                    </table>



                    <?php
                  }
                ?>

                <tr>
                <td>&nbsp;</td>
                  <!-- <button type="button" class="btn btn-secondary font-type" onclick="window.location = ''">Kembali</button> -->
                  <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Simpan" style="padding: 8px 20px; font-size: 15px; margin-left: 400px; margin-top: 50px; margin-bottom: 20px">
                </tr>
                </form>
                </div>
              </div>
            </div>
      </section>



      <?php
        include 'bawah.php';
      ?>

      <script>
      var seconds = 2400; // 3600 detik / 60 menit
      var form = document.getElementById('formSoal'); // mengambil id dari form
        function secondPassed() { // membuat function secondPassed
            var minutes = Math.round((seconds - 30)/60), // mengembalikan bilangan bulat kebilangan bulat terdekat
                remainingSeconds = seconds % 60; // waktu = seconds mod 60

            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }

            document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
            if (seconds == 0) {
                clearInterval(countdownTimer);
               //form1 is your form name
                document.getElementById('submit').click();
            } else {
                seconds--;
            }
        }
        var countdownTimer = setInterval('secondPassed()', 1000);

      </script>

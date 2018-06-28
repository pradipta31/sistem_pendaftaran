<?php
session_start();
if( !isset($_SESSION['email_user']) )
{
    exit();
  }
$email = ( isset($_SESSION['email_user']) ) ? $_SESSION['email_user'] : '';
$nomor = ( isset($_SESSION['nomor']) ) ? $_SESSION['nomor'] : '';
?>
<?php
include "kiripeserta1.php";
?>
        <section class="templatemo-container background-image-logo section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h5 class="section-title-2">Soal Ujian Onlin</h5>
                        <hr class="section-title-underline">
                    </div>
                </div>
                <style media="screen">
                  .soal{
                    margin-left: 150px;
                    margin-top: -50px;
                    line-height: 2;
                  }
                  .font-soal{
                    font-size: 25px;
                  }
                  .font-jawab{
                    font-size: 15px;
                  }
                </style>
                <div class="soal">
                  <div style="width:100%; overflow:scroll;height:700px;">
                    <form class="form-group" action="jawab.php" method="post">
                  <?php
                    include 'koneksi.php';
                    $query = mysqli_query($koneksi,"SELECT * FROM soal WHERE aktif='Y' ORDER BY RAND()");
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
                        <input type="hidden" name="nomor_peserta" value=<?php echo $nomor; ?>>
                        <input type="hidden" name="email" value=<?php echo $email; ?>>
                          <tr>
                                <td width="17"><font color="#000000" class="font-soal"><?php echo $urut=$urut+1; ?>.</font></td>
                                <td><font color="#000000" class="font-soal"><?php echo "$soal"; ?></font></td>
                          </tr>
                        <br>
                          <tr>
                              <td height="21"><font color="#000000" class="font-jawab">&nbsp;</font></td>
                              <td><font color="#000000" class="font-jawab">
                             A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                              <?php echo "$a";?></font> </td>
                          </tr>
                          <tr>
                              <td height="21"><font color="#000000" class="font-jawab">&nbsp;</font></td>
                              <td><font color="#000000" class="font-jawab">
                             B.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B">
                              <?php echo "$b";?></font> </td>
                          </tr>
                          <tr>
                              <td height="21"><font color="#000000" class="font-jawab">&nbsp;</font></td>
                              <td><font color="#000000" class="font-jawab">
                             C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C">
                              <?php echo "$c";?></font> </td>
                          </tr>
                          <tr>
                              <td height="21"><font color="#000000" class="font-jawab">&nbsp;</font></td>
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
                    <td><button type="button" data-toggle="modal" data-target="#jawabModal" class="btn btn-lg btn-primary" style="padding: 10px 30px; font-size: 20px; margin-left: 350px; margin-top: 50px; margin-bottom: 10px; border-radius:5px;">SIMPAN JAWABAN</button></td>
                  </tr>
                  <style media="screen">
                    .font-type{
                      font-size: 15px;
                    }
                  </style>
                  <div class="modal fade" id="jawabModal" tabindex="-1" role="dialog" aria-labelledby="jawabModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content" style="border-radius: 5px">
                        <div class="modal-header">
                          <h5 class="modal-title font-type" id="jawabModalTitle">Yakin jawaban yang anda input sudah benar ?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body font-type">
                          Jawaban akan disimpan jika memilih tombol simpan
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary font-type" data-dismiss="modal">Kembali</button>
                          <input type="submit" name="submit" class="btn btn-primary font-type" value="Simpan">
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                  </div>
                </div>
            </div>
        </section>



        <?php
        include "bawahpeserta.php";
        ?>

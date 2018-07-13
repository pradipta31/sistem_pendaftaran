<?php
  include 'atas-peserta.php';
  include 'koneksi.php';
  session_start();
  if( !isset($_SESSION['email_user']) )
  {
      exit();
    }
  $nomor = ( isset($_SESSION['nomor']) ) ? $_SESSION['nomor'] : '';
  $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nomor_peserta = '$nomor'");
  $row = mysqli_fetch_assoc($query);
?>
<section id="content">
  <div class="container">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <div class="row">
        <form class="register-form" action="proses-edit-foto.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" class="form-control" name="id_peserta" value="<?php echo $row['id_peserta']; ?>">
          </div>
          <div class="form-group text-center">
            <?php
              if ($row['file'] == null) {
                echo '<img src="images/peserta.png" height="180px" width="180px" style="border-radius: 5px">';
              }else{
                ?>
                <img src="images/<?= $row['file'];?>" height="180px" width="180px">
                <?php
              }
            ?>
            <br>
            <input type="file" class="form-control" name="file" value="<?php echo $row['file'];?>">
          </div>
          <div class="form-group text-center">
            <input class="btn btn-primary" type="submit" value="Simpan" name="submit">
            <button type="button" class="btn btn-light" onclick="window.location='profil.php'">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
  include 'bawah.php';
?>

<?php
include "kiripeserta1.php";
include "koneksi.php";
session_start();
if( !isset($_SESSION['nama_user']) )
{
    exit();
}elseif ( isset($_SESSION['nama_user'])) {
  $query = mysqli_query($koneksi, "SELECT * FROM hasil_tes");
  $row = mysqli_fetch_assoc($query);
}
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
$nomor = ( isset($_SESSION['nomor']) ) ? $_SESSION['nomor'] : '';
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
                              <form>
                                <div class="form-group" style="font-size: 17px; text-align: left">
                                  
                                  <label>    Hasil       : <?php echo $row['status']; ?></label>
                                  </br>
                                </div>
                              </div>

                              </form>

                            </div>
                        </div>
                    </div>
                  </div>
                </div>
        </section>

        <footer class="text-center" style="margin-top: 168px">
              <p class="small copyright-text">Copyright &copy; 2084 Company Name</p>
          </footer>

          <!-- JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
          <script type="text/javascript" src="js/responsiveCarousel.min.js"></script>      <!-- Carousel -->
          <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
          <script>
              // All images are loaded. Call isotope
              $(window).load(function() {
                   var $container = $('#folio-container');
                  // init
                  $container.isotope({
                  // options
                  itemSelector: '.folio-item',
                  animationOptions: {
                          duration: 750,
                          easing: 'linear',
                          queue: false
                      },
                  });

                  // filter items when filter link is clicked
                  jQuery('#filters a').click(function(){
                      var selector = $(this).attr('data-filter');
                      $container.isotope({ filter: selector });
                      return false;
                  });

                  jQuery('#filters li a').click(function(){

                      jQuery('#filters li').removeClass('current');
                      jQuery(this).parent().addClass('current');
                  });
              });
          </script>
      </body>
  </html>

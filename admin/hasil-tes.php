<?php
include "kiri.php";
?>
<?php
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  $query = "SELECT DISTINCT tahun FROM hasil_tes ORDER BY tahun ASC";

  $statement = $connect->prepare($query);

  $statement->execute();

  $result = $statement->fetchAll();
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Hasil Tes
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->
            <input type="hidden" name="hidden_hasil" id="hidden_hasil" />
            <div class="btn btn-xs">
              <select name="multi_search_filter" id="multi_search_filter" class="form-control">
                <option value="tampil_semua">Tampilkan Semua</option>
               <?php
               foreach($result as $row)
               {
                echo '<option value="'.$row["tahun"].'">'.$row["tahun"].'</option>';
               }
               ?>
               </select>
            </div>
            <div class="btn btn-lg" id="btn">

            </div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
               <thead>
                <tr>
                 <th><center>No</th>
                 <th><center>Nomor Peserta</th></center>
                 <th><center>Nama Peserta</th></center>
                 <th><center>Nilai Tes Online</th></center>
                 <th><center>Nilai Tes Wawancara</th></center>
                 <th><center>Total Nilai</th></center>
                 <th><center>Status</th></center>
                 <th><center>Opsi</th></center>
                </tr>
               </thead>
               <tbody>
               </tbody>
              </table>
             <br />
             <br />
             <br />
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    $(document).ready(function(){

     load_data();
     loadData();

     function load_data(query='')
     {
      $.ajax({
       url:"tampil_data.php",
       method:"POST",
       data:{query:query},
       success:function(data)
       {
        $('tbody').html(data);
       }
      })
     }
   function loadData(query='')
   {
    $.ajax({
     url:"ajax-hasil.php",
     method:"POST",
     data:{query:query},
     success:function(data)
     {
      $('#btn').html(data);
    }
    })
   }

     $('#multi_search_filter').change(function(){
      $('#hidden_hasil').val($('#multi_search_filter').val());
      var query = $('#hidden_hasil').val();
      load_data(query);
      loadData(query);
     });
    });
</script>
<?php
  include 'bawah.php';
?>

<?php
include "kiri.php";
?>
<?php
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  $query = "SELECT DISTINCT nik FROM peserta ORDER BY nik ASC";

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
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->
            <div class="btn btn-lg">
              <a href="print-hasil.php" class="btn btn-primary">Cetak Hasil Tes</a>
            </div>
            <input type="hidden" name="hidden_peserta" id="hidden_peserta" />
            <div class="btn btn-xs">
              <select name="multi_search_filter" id="multi_search_filter" class="form-control">
                <option value="tampil_semua">Tampilkan Semua</option>
               <?php
               foreach($result as $row)
               {
                echo '<option value="'.$row["nik"].'">'.$row["nik"].'</option>';
               }
               ?>
               </select>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
               <thead>
                <tr>
                 <th>No</th>
                 <th>Nomor Peserta</th>
                 <th>Nama Peserta</th>
                 <th>Total Nilai</th>
                 <th>Status</th>
                 <th>Opsi</th>
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

     function load_data(query='')
     {
      $.ajax({
       url:"tampil-peserta.php",
       method:"POST",
       data:{query:query},
       success:function(data)
       {
        $('tbody').html(data);
       }
      })
     }

     $('#multi_search_filter').change(function(){
      $('#hidden_peserta').val($('#multi_search_filter').val());
      var query = $('#hidden_peserta').val();
      load_data(query);
     });
    });
</script>
<?php
  include 'bawah.php';
?>

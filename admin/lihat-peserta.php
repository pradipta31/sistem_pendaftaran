<?php
include "kiri.php";
?>
<?php
  include 'koneksi.php';
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  $query = "SELECT DISTINCT tgl_pendaftaran AS "Year" FROM peserta ORDER BY "Year" ASC";

  $statement = $connect->prepare($query);

  $statement->execute();

  $result = $statement->fetchAll();

?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Data Peserta
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->

            <input type="hidden" name="hidden_peserta" id="hidden_peserta" />
            <div class="btn btn-xs">
              <select name="multi_search_filter" id="multi_search_filter" class="form-control">
                <option value="tampil_semua">Tampilkan Semua</option>
               <?php
               foreach($result as $row)
               {
                $date = $row['tgl_pendaftaran'];
                $date = strftime("%Y", strtotime($date));
                echo '<option value="'.$date.'">'.$date.'</option>';
               }
               ?>
               </select>
            </div>
            <div class="btn btn-lg" id="btn">

            </div>

            <div class="table-responsive" id="table">
              <table class="table table-striped table-bordered">
               <thead>
                <tr>
                 <th><center>No</th></center>
                 <th><center>Nomor Peserta</th></center>
                 <th><center>Tanggal Pendaftaran</th></center>
                 <th><center>Nama Peserta</th></center>
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
       url:"tampil-peserta.php",
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
       url:"ajax.php",
       method:"POST",
       data:{query:query},
       success:function(data)
       {
        $('#btn').html(data);
      }
      })
     }

     $('#multi_search_filter').change(function(){
      $('#hidden_peserta').val($('#multi_search_filter').val());
      var query = $('#hidden_peserta').val();
      load_data(query);
      loadData(query);
     });
    });
</script>
<?php
  include 'bawah.php';
?>

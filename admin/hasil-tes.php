<?php
include "kiri.php";
?>
<?php
  include 'koneksi.php';
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  $query = "SELECT DISTINCT tahun FROM hasil_tes ORDER BY tahun ASC";

  $statement = $connect->prepare($query);

  $statement->execute();

  $result = $statement->fetchAll();
  // function fill_Peserta($koneksi){
  //   $output = '';
  //   $sql = "SELECT * FROM peserta";
  //   $hasil = mysqli_query($koneksi,$sql);
  //   while ($rowss = mysqli_fetch_assoc($hasil)) {
  //     $tanggal = $rowss['tgl_pendaftaran'];
  //     $tahun_extract = date("Y",strtotime($tanggal));
  //     $output .= '<option value="'.$rowss["id_peserta"].'">'.$tahun_extract.'</option>';
  //   }
  //   return $output;
  // }
  //
  // function fill_hasilTes($koneksi){
  //   $output = '';
  //   $sql = "SELECT * FROM hasil_tes";
  //   $hasil = mysqli_query($koneksi,$sql);
  //   $nomor = 1;
  //   $output .= '<table class="table table-bordered">';
  //   $output .= '<tr>';
  //   $output .= '<th style="width: 20px"><center>No</center></th>';
  //   $output .= '<th><center>Nomor Peserta</center></th>
  //               <th><center>Nama Peserta</center></th>
  //               <th><center>Total Nilai</center></th>
  //               <th><center>Status</center></th>
  //               <th><center>Opsi</center></th>';
  //   while ($rowss = mysqli_fetch_assoc($hasil)) {
  //     $output .= '<tr><td><center>'.$nomor++.'</center></td><td><center>'.$rowss['nomor_peserta'].'</center></td><td><center>'.$rowss['nama'].'</center></td><td><center>'.$rowss['total_nilai'].'</center></td>
  //       <td><center>'.$rowss['status'].'</center></td>
  //       <td><center>
  //       <a href="form-edit-hasil.php?id_hasil_tes ='.$rowss['id_hasil_tes'].'"><i class="fa fa-edit"></i></a>
  //       <a href="hapus-hasil.php?id_hasil_tes='.$rowss['id_hasil_tes'].'" onclick="return confirm ("Yakin Ingin Hapus Data Ini ?")"><i class="fa fa-trash"></i></a>
  //       <a href="print.php?id_hasil_tes =' .$rowss['id_hasil_tes'].'"><i class="fa fa-print"></i></a></center></td>
  //     </tr>';
  //   }
  //   $output .= '</tr>';
  //   $output .= '</table>';
  //   return $output;
  // }
?>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Tes Peserta</h3>
            </div>
            <!-- /.box-header -->
            <div class="btn btn-lg">
              <a href="print-hasil.php" class="btn btn-primary">Cetak Data</a>
            </div>
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
       url:"tampil_data.php",
       method:"POST",
       data:{query:query},
       success:function(data)
       {
        $('tbody').html(data);
       }
      })
     }

     $('#multi_search_filter').change(function(){
      $('#hidden_hasil').val($('#multi_search_filter').val());
      var query = $('#hidden_hasil').val();
      load_data(query);
     });
    });
</script>
<?php
  include 'bawah.php';
?>

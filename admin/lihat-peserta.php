<?php
include "kiri.php";
?>
<?php
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");
  $tahun = !empty($_GET['tahun']) ? $_GET['tahun'] : null;

  $query = "SELECT DISTINCT tahun FROM peserta ORDER BY tahun ASC";

  $qDataTable = "SELECT * FROM peserta ORDER BY id_peserta DESC";
  if ($tahun != null) {
    $qDataTable = "SELECT * FROM peserta WHERE tahun='$tahun' ORDER BY id_peserta DESC";
  }

  $statement = $connect->prepare($query);

  $statement->execute();

  $result = $statement->fetchAll();

  $dataTable = $connect->query($qDataTable);

?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Peserta
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->

            <form class="" action="" method="get" id="form_search">
              <label style="margin-left:20px">Pilih Tahun : </label>
              <div class="btn btn-xs">
                <select name="tahun" id="tahun" class="form-control">
                  <option value="">Tampilkan Semua</option>
                  <?php foreach($result as $row) : ?>
                    <option value="<?php echo $row["tahun"]; ?>" <?php echo $tahun == $row["tahun"] ? 'selected' : '' ?>><?php echo $row["tahun"];?></option>';
                  <?php endforeach; ?>
                 </select>
              </div>
              <div class="btn btn-lg">
                <?php
                echo "<a class='btn btn-primary' href='print-satu-peserta.php?tahun=".$tahun."'>Cetak Data</a>";
                ?>
              </div>
            </form>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
               <thead>
                <tr>
                 <th><center>No</th>
                 <th><center>Nomor Peserta</th></center>
                 <th><center>Nama Peserta</th></center>
                 <th><center>tgl_pendaftaran</th></center>
                 <th><center>Opsi</th></center>
                </tr>
               </thead>
               <tbody>
                 <?php $no = 1; ?>
                 <?php foreach($dataTable as $hasil) : ?>
                   <tr>
                     <td><center><?php echo $no++; ?></center></td>
                     <td><center><?php echo $hasil['nomor_peserta']; ?></center></td>
                     <td><center><?php echo $hasil['nama']; ?></center></td>
                     <td><center><?php echo $hasil['tgl_pendaftaran']; ?></center></td>
                     <td>
                       <center>
                       <a href="proses-lihat-peserta.php?id_peserta=<?= $hasil['id_peserta'] ?>"><i class="fa fa-eye"></i></a>
                       <a href="form-edit-peserta.php?id_peserta=<?= $hasil['id_peserta'] ?>"><i class="fa fa-edit"></i></a>
                       <a href="hapus-peserta.php?id_peserta=<?= $hasil['id_peserta'] ?>" onclick = "return confirm(/Yakin Ingin hapus data ini/)"><i class="fa fa-trash"></i></a>
                       <a href="print-semua-peserta.php?id_peserta=<?= $hasil['id_peserta'] ?>"><i class="fa fa-print"></i></a>
                       <center>
                     </td>
                   </tr>
                 <?php endforeach;?>
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
  console.log("<?php echo $qDataTable; ?>");
    $(function(){
      $('#tahun').on('change', function(){
        $('#form_search').submit();
      });
    });
  </script>


<?php
  include 'bawah.php';
?>

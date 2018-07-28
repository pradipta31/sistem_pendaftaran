<?php
include "kiri.php";
?>
<?php
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");
  $tahun = !empty($_GET['tahun']) ? $_GET['tahun'] : null;
  $status = !empty($_GET['status']) ? $_GET['status'] : null;
  $query = "SELECT DISTINCT tahun FROM hasil_tes ORDER BY tahun ASC";

  $qDataTable = "SELECT * FROM hasil_tes ORDER BY id_hasil_tes DESC";
  if ($tahun != null && $status == null) {
    $qDataTable = "SELECT * FROM hasil_tes WHERE tahun='$tahun' ORDER BY id_hasil_tes DESC";
  }elseif ($tahun == null && $status != null) {
    $qDataTable = "SELECT * FROM hasil_tes WHERE status='$status' ORDER BY id_hasil_tes DESC";
  } elseif($tahun != null && $status != null) {
    $qDataTable = "SELECT * FROM hasil_tes WHERE tahun='$tahun' AND status='$status' ORDER BY id_hasil_tes DESC";
  }

  $statement = $connect->prepare($query);

  $statement->execute();

  $result = $statement->fetchAll();

  $query1 = "SELECT DISTINCT status FROM hasil_tes ORDER BY status ASC";

  $statement1 = $connect->prepare($query1);

  $statement1->execute();

  $result1 = $statement1->fetchAll();

  $dataTable = $connect->query($qDataTable);

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
              <label style="margin-left: 20px">Pilih Status :</label>
              <div class="btn btn-xs">
                <select name="status" id="status" class="form-control">
                  <option value="">Pilih Status</option>
                  <?php foreach ($result1 as $key) : ?>
                      <option value="<?php echo $key["status"]; ?>" <?php echo $status == $key["status"] ? 'selected' : '' ?>><?php echo $key["status"]; ?></option>';
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="btn btn-lg">
                <?php
                echo "<a class='btn btn-primary' href='print-hasil.php?tahun=".$tahun."&status=".$status."'>Cetak Data</a>";

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
                 <th><center>Nilai Tes Online</th></center>
                 <th><center>Nilai Tes Wawancara</th></center>
                 <th><center>Total Nilai</th></center>
                 <th><center>Status</th></center>
                 <th><center>Opsi</th></center>
                </tr>
               </thead>
               <tbody>
                 <?php $no = 1; ?>
                 <?php foreach($dataTable as $hasil) : ?>
                   <tr>
                     <td><?php echo $no++; ?></td>
                     <td><?php echo $hasil['nomor_peserta']; ?></td>
                     <td><?php echo $hasil['nama']; ?></td>
                     <td><?php echo $hasil['nilai_tulis']; ?></td>
                     <td><?php echo $hasil['nilai_wawancara']; ?></td>
                     <td><?php echo $hasil['total_nilai']; ?></td>
                     <td><?php echo $hasil['status']; ?></td>
                     <td>
                       <center>
                       <a href="lihat-tes.php?id_hasil_tes=<?= $hasil['id_hasil_tes'] ?>"><i class="fa fa-eye"></i></a>
                       <a href="form-edit-hasil.php?id_hasil_tes=<?= $hasil['id_hasil_tes'] ?>"><i class="fa fa-edit"></i></a>
                       <a href="hapus-hasil.php?id_hasil_tes=<?= $hasil['id_hasil_tes'] ?>" onclick = "return confirm(/Yakin Ingin hapus data ini/)"><i class="fa fa-trash"></i></a>
                       <a href="print-semua-hasil.php?id_hasil_tes=<?= $hasil['id_hasil_tes'] ?>"><i class="fa fa-print"></i></a>
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
      $('#status').on('change', function(){
        $('#form_search').submit();
      });
    });
  </script>


<?php
  include 'bawah.php';
?>

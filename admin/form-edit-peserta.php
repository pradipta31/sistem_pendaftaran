<?php
include "kiri.php";
  include "koneksi.php";
  $id = $_GET['id'];
  $query = "SELECT * FROM peserta WHERE id='$id'";
  $hasil = mysqli_query($koneksi,$query);
  $row = mysqli_fetch_array($hasil);
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Peserta</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nomor Peserta : <?php echo $row['nomor_peserta']; ?></h3>
        </div>
          <form action="proses-edit-peserta.php" method="post">
            <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $row['id'];?>">
              <div class="form-group">
                <label>NIK</label>
                <input type="number" class="form-control" name="nik" value="<?php echo $row['nik']; ?>">
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
              </div>
              <div class="form-group">
                <label>Umur</label>
                <select class="form-control" name="umur" value="<?php echo $row['umur'] ?>">
                  <option value="18" <?= ($row['umur'] == 18) ? 'selected' : '' ; ?>>18 Tahun</option>
                  <option value="19" <?= ($row['umur'] == 19) ? 'selected' : '' ; ?>>19 Tahun</option>
                  <option value="20" <?= ($row['umur'] == 20) ? 'selected' : '' ; ?>>20 Tahun</option>
                  <option value="21" <?= ($row['umur'] == 21) ? 'selected' : '' ; ?>>21 Tahun</option>
                  <option value="22" <?= ($row['umur'] == 22) ? 'selected' : '' ; ?>>22 Tahun</option>
                  <option value="23" <?= ($row['umur'] == 23) ? 'selected' : '' ; ?>>23 Tahun</option>
                  <option value="24" <?= ($row['umur'] == 24) ? 'selected' : '' ; ?>>24 Tahun</option>
                  <option value="25" <?= ($row['umur'] == 25) ? 'selected' : '' ; ?>>25 Tahun</option>
                  <option value="26" <?= ($row['umur'] == 26) ? 'selected' : '' ; ?>>26 Tahun</option>
                  <option value="27" <?= ($row['umur'] == 27) ? 'selected' : '' ; ?>>27 Tahun</option>
                  <option value="28" <?= ($row['umur'] == 28) ? 'selected' : '' ; ?>>28 Tahun</option>
                  <option value="29" <?= ($row['umur'] == 29) ? 'selected' : '' ; ?>>29 Tahun</option>
                  <option value="30" <?= ($row['umur'] == 30) ? 'selected' : '' ; ?>>30 Tahun</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" class="form-control" name="pendidikan" value="<?php echo $row['pendidikan']; ?>">
              </div>
              <div class="form-group">
                <label>Tahun Lulus</label>
                <input type="text" class="form-control" name="tahun_lulus" value="<?php echo $row['tahun_lulus']; ?>">
              </div>
              <div class="form-group">
                <label>Agama</label>
                <input type="text" class="form-control" name="agama" value="<?php echo $row['agama']; ?>">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'] ?>">
                  <option value="pria" <?= ($row['jenis_kelamin'] == 'pria') ? 'selected' : '' ; ?>>Pria</option>
                  <option value="wanita" <?= ($row['jenis_kelamin'] == 'wanita') ? 'selected' : '' ; ?>>Wanita</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tinggi Badan</label>
                <input type="text" class="form-control" name="tinggi_badan" value="<?php echo $row['tinggi_badan']; ?>">
              </div>
              <div class="form-group">
                <label>Berat Badan</label>
                <input type="text" class="form-control" name="berat_badan" value="<?php echo $row['berat_badan']; ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
              </div>
              <div class="form-group">
                <label>Kabupaten/kota</label>
                <select class="form-control" name="kabupaten" value="<?php echo $row['kabupaten'] ?>">
                  <option value="Denpasar" <?= ($row['kabupaten'] == 'Denpasar') ? 'selected' : '' ; ?>>Denpasar</option>
                  <option value="Badung" <?= ($row['kabupaten'] == 'Badung') ? 'selected' : '' ; ?>>Badung</option>
                  <option value="Gianyar" <?= ($row['kabupaten'] == 'Gianyar') ? 'selected' : '' ; ?>>Gianyar</option>
                  <option value="Klungkung"  <?= ($row['kabupaten'] == 'Klungkung') ? 'selected' : '' ; ?>>Klungkung</option>
                  <option value="Bangli" <?= ($row['kabupaten'] == 'Bangli') ? 'selected' : '' ; ?>>Bangli</option>
                  <option value="Karangasem"  <?= ($row['kabupaten'] == 'Karangasem') ? 'selected' : '' ; ?>>Karangasem</option>
                  <option value="Tabanan" <?= ($row['kabupaten'] == 'Tabanan') ? 'selected' : '' ; ?>>Tabanan</option>
                  <option value="Buleleng"  <?= ($row['kabupaten'] == 'Buleleng') ? 'selected' : '' ; ?>>Buleleng</option>
                  <option value="Negara" <?= ($row['kabupaten'] == 'Negara') ? 'selected' : '' ; ?>>Negara</option>
                </select>
              </div>
              <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telp" value="<?php echo $row['no_telp']; ?>">
              </div>
              <button type="button" class="btn btn-default" name="button" onclick="window.location='lihat-peserta.php'">Kembali</button>
              <input type="submit" value="Simpan" class="btn btn-primary"  onclick="return confirm ('Yakin simpan perubahan ?')">
            </div>
          </form>
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="#">DISNAKER Prov. Bali</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  function editRapat(){
    $("#editModal").modal('show');
  }
</script>
</body>
</html>

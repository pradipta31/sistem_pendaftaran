<?php
include "kiri.php";
session_start();

if( !isset($_SESSION['session_admin']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
$username = $_SESSION['username_user'];
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="text-center">
          <h1><p>Halaman <?php echo $nama; ?></p><h1>
          <h1>Selamat Datang di Sistem Informasi Eksekutif Peserta Pelatihan Kapal Pesiar Pada Disnaker ESDM Provinsi Bali</h1>
          <p style="margin-top: 100px; margin-bottom: 250px;">
            <img src="dinasku.png" alt="DISNAKER Prov Bali" height="400px" width="400px">
          </p>
        </div>
      </div>
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

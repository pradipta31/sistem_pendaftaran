<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DISNAKER Provinsi Bali | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<style media="screen">
  .style-judul{
    color: #fff;
    margin-top: 5px;
    font-style: normal;
    position: absolute;
  }
</style>
  <header class="main-header">
    <nav class="navbar navbar-static-top" style="margin-left: -220px;">
      <b class="style-judul" style="margin-left: 230px; font-size:25px;">SISTEM INFORMASI EKSEKUTIF PESERTA PELATIHAN KAPAL PESIAR</b>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="user user-menu">
            <a href="../logout.php" onclick="return confirm('Yakin ingin Logout ?')"><b>Logout</b></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dinas11.png" class="img-responsive">
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li>
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="lihat-pendaftaran.php">
          <!-- <a href="pendaftaranV2/lihat-pendaftaran.php"> -->
            <i class="fa fa-newspaper-o"></i> <span>Data Peserta</span>
          </a>
        </li>
        <li>
          <a href="soal-tes.php">
            <i class="fa fa-table"></i>
            <span>Soal Tes Peserta</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Hasil Tes Peserta</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tambah-hasil-tes.php"> Tambah Hasil Tes</a></li>
            <li><a href="hasil-tes.php"> Hasil Tes Peserta</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">

        <?php
        include "koneksi.php";
        $query = mysqli_query($koneksi, "SELECT * FROM soal");
        echo "<h3></h3>
            <b>Ujian Online Pilihan Ganda</b>";
        echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>";
         echo '<table width="100%" border="0">';

                $hasil=mysql_query("select * from soal WHERE aktif='Y' ORDER BY RAND ()");
                $jumlah=mysql_num_rows($hasil);
                $urut=0;
                while($row =mysql_fetch_array($hasil))
                {
                    $id=$row["id_soal"];
                    $pertanyaan=$row["soal"];
                    $pilihan_a=$row["a"];
                    $pilihan_b=$row["b"];
                    $pilihan_c=$row["c"];
                    $pilihan_d=$row["d"];

                    ?>
                    <form name="form1" method="post" action="jawab.php">
                    <input type="hidden" name="id[]" value=<?php echo $id; ?>>
                    <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                    <tr>
                          <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                          <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
                    </tr>
                    <?php
                        if (!empty($row["gambar"])) {
                            echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
                        }
                    ?>
                    <tr>
                          <td height="21"><font color="#000000">&nbsp;</font></td>
                        <td><font color="#000000">
                       A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                        <?php echo "$pilihan_a";?></font> </td>
                    </tr>
                    <tr>
                          <td><font color="#000000">&nbsp;</font></td>
                        <td><font color="#000000">
                       B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B">
                        <?php echo "$pilihan_b";?></font> </td>
                    </tr>
                    <tr>
                          <td><font color="#000000">&nbsp;</font></td>
                        <td><font color="#000000">
                      C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C">
                        <?php echo "$pilihan_c";?></font> </td>
                    </tr>
                    <tr>
                        <td><font color="#000000">&nbsp;</font></td>
                        <td><font color="#000000">
                      D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D">
                        <?php echo "$pilihan_d";?></font> </td>
                    </tr>

                <?php
                }
                ?>
                    <tr>
                        <td>&nbsp;</td>
                          <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
                    </tr>
                    </table>
        </form>
                </p>
        </div>
    </section>

  <div class="control-sidebar-bg"></div>

</div>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2016-2017 <a href="#">DISNAKER Prov. Bali</a>.</strong> All rights
  reserved.

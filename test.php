<?php
include 'head-chart.php';
include 'left.php';
include 'hak_akses_eksekutif.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Grafik pendapatan pajak </h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Grafik
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="chartdiv" style="width: 100%; height: 500px;"></div>
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       <th>Nama Kecamatan / Kelurahan</th>
                                       <th>Total Pelapor</th>
                                       <th>Jumlah Pembayar</th>
                                       <th>Total Tagihan</th>
                                       <th>Total Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$id_kecamatan=$_POST['kecamatan'];
$kel=$_POST['kel'];
$thn_awal=$_POST['thn_awal'];
$thn_akhir=$_POST['thn_akhir'];
$query="SELECT COUNT(p.id_pelaporan) as total_pelaporan,COUNT(t.id_pelaporan) as jumlah_pembayar,
SUM(t.jmlh_bayar) as total,kec.nama_kec,SUM(p.tagihan) as tagihan, p.thn_pajak,kel.nama_kel
FROM tb_pelaporan as p
LEFT JOIN tb_transaksi as t ON t.id_pelaporan=p.id_pelaporan
LEFT JOIN tb_wp as wp ON p.npwp=wp.npwp
INNER JOIN tb_kelurahan as kel ON wp.id_kel=kel.id_kel ";
if($kel<>'' && $kel<>'0') $query.=" AND kel.id_kel='$kel' ";
$query.="INNER JOIN tb_kecamatan as kec ON kel.id_kec=kec.id_kec";
if($id_kecamatan<>'' && $id_kecamatan<>'0') $query.=" AND kel.id_kec='$id_kecamatan' ";
$query.=" WHERE 1=1 AND p.thn_pajak BETWEEN '$thn_awal' AND '$thn_akhir'";
$query.=" GROUP BY p.thn_pajak,kel.id_kel ORDER BY p.thn_pajak ASC";
                                    $sql=mysqli_query($connect,$query);
                                    while ($hasil=mysqli_fetch_array($sql)) {
                                    ?>

                                    <tr>
                                        <td><?=$hasil['nama_kec']." / ".$hasil['nama_kel']?></td>
                                        <td><?=$hasil['total_pelaporan']?></td>
                                        <td><?=$hasil['jumlah_pembayar']?></td>
                                        <td><?=$hasil['tagihan']?></td>
                                        <td><?=$hasil['total']?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>

<?php
include"footer.php";
?>

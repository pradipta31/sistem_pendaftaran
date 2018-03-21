<?php
  include "../koneksi.php";

  if ($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM calon_peserta WHERE id_calon_peserta = $id";
    $hasil = $koneksi->query($sql);
    foreach ($hasil as $row) {
      // $query = mysqli_fetch_assoc(mysqli_query($koneksi,"select * from calon_peserta where id_calon_peserta='".$row['id_calon_peserta']."'"))
      ?>
      <table class="table">
        <tr>
          <td>NIK</td>
          <td>:</td>
          <td><?php echo $row['nik']; ?></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $row['nama']; ?></td>
        </tr>
        <tr>
          <td>Umur</td>
          <td>:</td>
          <td><?php echo $row['umur']; ?></td>
        </tr>
        <tr>
          <td>Tgl Lahir</td>
          <td>:</td>
          <td><?php echo $row['tgl_lahir']; ?></td>
        </tr>
        <tr>
          <td>Pendidikan</td>
          <td>:</td>
          <td><?php echo $row['pendidikan']; ?></td>
        </tr>
        <tr>
          <td>Tahun Lulus</td>
          <td>:</td>
          <td><?php echo $row['tahun_lulus']; ?></td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td><?php echo $row['agama']; ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?php echo $row['jenis_kelamin']; ?></td>
        </tr>
        <tr>
          <td>Tinggi Badan</td>
          <td>:</td>
          <td><?php echo $row['tinggi_badan']; ?></td>
        </tr>
        <tr>
          <td>Berat Badan</td>
          <td>:</td>
          <td><?php echo $row['berat_badan']; ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $row['alamat']; ?></td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td>:</td>
          <td><?php echo $row['no_telp']; ?></td>
        </tr>
      </table>
      <?php
    }
  }
  $koneksi->close();
?>

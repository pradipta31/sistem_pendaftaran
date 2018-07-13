<?php
  include 'atas.php';
?>
<section id="content">
  <div class="container">
    <div class="col-lg-12 text-uppercase text-center">
      <h2 class="section-title-2">Formulir pendaftaran</h2>
      <hr class="section-title-underline">
    </div>
    <div class="form-input">
      <div class="card mx-xl-5" style="width: 870px; border-radius: 7px; margin-left: 200px">
        <div class="card-body">
          <form  name="form" method="post" action="proses-pendaftaran.php" onsubmit="return validasi_input(this)" enctype="multipart/form-data">
            <?php
              include  "koneksi.php";
              $query = mysqli_query($koneksi,'SELECT nomor_peserta FROM peserta order by id_peserta DESC LIMIT 1'); // menampilkan data nomor peserta pada tabel peserta dengan mengurutkan id dari yang terbawah
              $a = mysqli_fetch_assoc($query); // menampilkan data nomor peserta
              $b = substr($a['nomor_peserta'],5,8); // memotong string dan mengambil nomor peserta yaitu urutan 5 dan 8
              $c = $b+1; // nomor peserta akan bertambah jika terdapat data sebelumnya
              $d = "00".$c; // untuk menggabungkan tahun
              $e = date("Y").".".substr($d,-3,10); // penggabungan antara tahun sekarang dan mengambil data nomor peserta kecuali 7 huruf terakhir
            ?>
            <p style="font-size: 15px">*) Mohon isi data sesuai dengan identitas diri</p>
            <input type="text" name="nomor_peserta" value="<?php echo $e; ?>" class="form-control" style="font-size:15px" readonly>
            <br>
            <label style="font-size: 14px">Jurusan</label>
            <select name="jurusan" class="form-control" style="font-size: 15px; height: 36px" />
              <option>-- Pilih Jurusan --</option>
              <option value="Tata Graha">Tata Graha</option>
              <option value="Tata Hidangan">Tata Hidangan</option>
              <option value="Tata Boga">Tata Boga</option>
            </select>
            <br>
              <label style="font-size: 14px">NIK</label>
                <input type="number" class="form-control" name="nik" id="nik" style="font-size: 15px" />
                <span id="data"></span>
              <br>
              <label style="font-size: 14px">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" style="font-size: 15px">
              <br>
              <label style="font-size: 14px">Email</label>
              <input type="email" class="form-control" name="email" id="email" style="font-size: 15px">
              <span id="cek-email"></span>
              <br>
              <label style="font-size: 14px">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" style="font-size: 15px">
              <br>

              <label style="font-size: 14px">Pendidikan/Ijazah</label>
              <input type="text" class="form-control" name="pendidikan" style="font-size: 15px">
              <br>
              <label style="font-size: 14px">Tahun Lulus</label>
              <input type="number" class="form-control" name="tahun_lulus" style="font-size: 15px" id="tahun_lulus">
              <br>
              <span id="cek_tahunLulus"></span>
              <label style="font-size: 14px">Agama</label>
              <input type="text" class="form-control" name="agama" style="font-size: 15px">
              <br>
              <label style="font-size: 14px">Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin"  style="font-size: 15px; height: 36px">
                  <option>-- Jenis Kelamin--</option>
                  <option value="pria">Pria</option>
                  <option value="wanita">Wanita</option>
              </select>
              <br>
              <label style="font-size: 14px">Tinggi Badan (cm)</label>
              <input type="number" class="form-control" name="tinggi_badan" style="font-size: 15px">
              <br>
              <label style="font-size: 14px">Berat Badan (kg)</label>
              <input type="number" class="form-control" name="berat_badan" style="font-size: 15px">
              <br>
              <label style="font-size: 14px">Alamat Rumah</label>
              <input type="text" class="form-control" name="alamat" style="font-size: 15px">
              <br>
              <label style="font-size: 14px">Kabupaten/Kota</label>
              <select class="form-control" name="kabupaten"  style="height: 36px; font-size: 15px">
                  <option>-- Kabupaten/Kota Alamat Rumah--</option>
                  <option value="Denpasar">Denpasar</option>
                  <option value="Badung">Badung</option>
                  <option value="Gianyar">Gianyar</option>
                  <option value="Klungkung">Klungkung</option>
                  <option value="Bangli">Bangli</option>
                  <option value="Karangasem">Karangasem</option>
                  <option value="Tabanan">Tabanan</option>
                  <option value="Buleleng">Buleleng</option>
                  <option value="Negara">Negara</option>
              </select>
              <br>
              <label style="font-size: 14px">No Telepon</label>
              <input type="number" class="form-control" name="no_telp" id="no_telp" style="font-size: 15px">
              <span id="cek-nope"></span>
              <br>
              <input type="file" name="file" class="form-control" style="font-size: 1em">
              <br>
              <div class="text-center py-4 mt-3">
                  <button name="submit" class="btn btn-primary btn-lg" style="padding: 10px 25px; border-radius:7px" type="submit" onclick="return confirm('Yakin data sudah benar diinputkan ?')">Simpan</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
function validasi_input(form){
  if (form.nik.value == ""){
    alert("kolom NIK masih kosong!");
    form.nik.focus();
    return (false);
  }else if (form.nama.value=="") {
    alert("Kolom nama masih kosong");
    form.nama.focus();
    return (false);
  }else if (form.email.value=="") {
    alert("Kolom email masih kosong");
    form.email.focus();
    return (false);
  }else if (form.umur.value=="All") {
    alert("Kolom umur belum dipilih");
    form.umur.focus();
    return (false);
  }else if (form.tgl_lahir.value=="") {
    alert("Kolom tanggal lahir masih kosong");
    form.tgl_lahir.focus();
    return (false);
  }else if (form.pendidikan.value=="") {
    alert("Kolom Pendidikan/Ijazah masih kosong");
    form.tgl_lahir.focus();
    return (false);
  }else if (form.tahun_lulus.value=="") {
    alert("Kolom Tahun Lulus masih kosong");
    form.tahun_lulus.focus();
    return (false);
  }else if (form.agama.value=="") {
    alert("Kolom agama masih kosong");
    form.agama.focus();
    return (false);
  }else if (form.jk.value=="jk") {
    alert("Kolom Jenis Kelamin belum dipilih");
    form.jk.focus();
    return (false);
  }else if (form.tb.value=="") {
    alert("Kolom Tinggi Badan masih kosong");
    form.tb.focus();
    return (false);
  }else if (form.bb.value=="") {
    alert("Kolom Berat Badan masih kosong");
    form.bb.focus();
    return (false);
  }else if (form.alamat.value=="") {
    alert("Kolom Alamat Rumah masih kosong");
    form.alamat.focus();
    return (false);
  }else if (form.alamat.value=="") {
    alert("Kolom Kabupaten/Kota masih kosong");
    form.kabupaten.focus();
    return (false);
  }else if (form.telp.value=="") {
    alert("Kolom Nomor Telepon masih kosong");
    form.telp.focus();
    return (false);
  }else if (form.file.value="") {
    alert("Kolom gambar masih kosong")
    form.file.focus();
    return(false);
  }
return (true);
}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
  $('document').ready(function(){
    $('#nik').blur(function(){

      var nik = $(this).val();
      $.ajax({
        method : 'post',
        url : 'checkdatapeserta.php',
        data : 'nik=' +nik,
        success: function(response){
          $('#data').html(response);
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $('document').ready(function(){
    $('#email').blur(function(){
      var email = $(this).val();
      $.ajax({
        method : 'post',
        url : 'cek-email.php',
        data : 'email=' +email,
        success: function(response){
          $('#cek-email').html(response);
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $('document').ready(function(){
    $('#no_telp').blur(function(){
      var no_telp = $(this).val();
      $.ajax({
        method : 'post',
        url : 'cek-nope.php',
        data : 'no_telp=' +no_telp,
        success: function(response){
          $('#cek-nope').html(response);
        }
      });
    });
  });
</script>
<?php
  include 'bawah.php';
?>

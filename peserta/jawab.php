<?php

include 'koneksi.php';

     if(isset($_POST['submit'])){
          $pilihan=$_POST["pilihan"];
          $id_soal=$_POST["id_soal"];
          $jumlah=$_POST['jumlah'];

          // $query1 = mysqli_query($koneksi,"SELECT * FROM soal");
          // $result = mysqli_fetch_array($query1);
          // $id_soal1 = $result['id_soal'];
          $score=0;
          $benar=0;
          $salah=0;
          $kosong=0;

          for ($i=0;$i<$jumlah;$i++){
              //id nomor soal

              $nomor=$id_soal[$i];

              //jika user tidak memilih jawaban
              if ($pilihan[$nomor]){
                $jawaban=$pilihan[$nomor];

                //mencocokan jawaban user dengan jawaban di database
                $query=mysqli_query($koneksi,"select * from soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
                $cek = mysqli_num_rows($query);
                $a = mysqli_fetch_array($query);

                if($cek){
                    //jika jawaban cocok (benar)
                    $benar ++;
                }else{
                    //jika salah
                    $salah++;
                }

              }elseif(empty($pilihan[$nomor])){
                $kosong++;
              }
              /*RUMUS
              Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan
              hasil= jawaban benar x 2
              */


          }
      }

        $result=mysqli_query($koneksi, "select * from soal WHERE aktif='Y'");
        $jumlah_soal=mysqli_num_rows($result);
        $score = $benar*2;

        session_start();//

        $nomor = ( isset($_SESSION['nomor']) ) ? $_SESSION['nomor'] : '';
        $sql = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nomor_peserta = '$nomor'");
        $fetch = mysqli_fetch_assoc($sql);
        $id_peserta = $fetch['id_peserta'];
        $tanggal = $fetch['tgl_pendaftaran'];
        $nama = $fetch['nama'];
        $tahun = date("Y",strtotime($tanggal));
        $implode_id_soal = implode(",",$id_soal);
        $implode_pilihan = implode(",",$pilihan);
        $cek = mysqli_query($koneksi, "SELECT * FROM hasil_tes WHERE nomor_peserta='$nomor'");
        if (mysqli_num_rows($cek) == 0) {
          $query = "insert into hasil_tes (id_peserta,nomor_peserta,nama,tahun,nilai_tulis) values ('$id_peserta','$nomor','$nama','$tahun','$score')";

          if ($query) {
            $syntax = mysqli_query($koneksi,$query);
            $a = mysqli_query($koneksi,"SELECT * FROM hasil_tes WHERE nomor_peserta = '$nomor'");
            $f = mysqli_fetch_array($a);
            $id_h = $f['id_hasil_tes'];

            $query1 = "INSERT INTO tes (id_peserta,id_hasil_tes,id_soal,pilihan,benar,salah,kosong) VALUES ('$id_peserta','$id_h','$implode_id_soal','$implode_pilihan','$benar','$salah','$kosong')";
            $syntax1 = mysqli_query($koneksi,$query1);
            // echo "<script>alert('Jawaban anda berhasil disimpan!');
            //   window.location.href='profil.php';
            // </script>";
            echo "Jawaban berhasil disimpan";
          }else{
            echo "Gagal Insert Data";
          }
        }else{
          // echo "<script>alert('Anda telah melakukan tes sebelumnya!');
          //   window.location.href='profil.php';
          // </script>";
        }


?>

<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'sistem_informasi_eksekutif');

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
        $nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';

        $cek = mysqli_query($koneksi, "SELECT * FROM hasil_tes WHERE nomor_peserta='$nomor'");
        if (mysqli_num_rows($cek) == 0) {
          $query = "INSERT INTO hasil_tes (nomor_peserta,nama,nilai_tulis) VALUES ('$nomor','$nama','$score')";
          $syntax = mysqli_query($koneksi,$query);

          session_destroy();

          echo "<script>alert('Jawaban anda berhasil disimpan!');
            window.location.href='index.php';
          </script>";
          // echo "Jawaban berhasil disimpan";
        }else{
          echo "<script>alert('Anda telah melakukan tes sebelumnya!');
            window.location.href='profil-peserta.php';
          </script>";
        }


?>
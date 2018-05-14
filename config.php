<?php
  $url    = 'http://localhost:8080/sistem_informasi_eksekutif';
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'sistem_informasi_eksekutif';
  $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
  if( $koneksi->connect_error ){
    die( 'Koneksi ke database gagal : '. $koneksi->connect_error );
  }
  $url = rtrim($url,'/');
 ?>

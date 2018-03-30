<?php
  $url    = 'http://localhost:8080/sistem_pendaftaran';
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'sistem_pendaftaran';
  $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
  if( $koneksi->connect_error ){
    die( 'Koneksi ke database gagal : '. $koneksi->connect_error );
  }
  $url = rtrim($url,'/');
 ?>

<?php
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  if($_POST["query"] != 0)
  {
   $search_array = explode(",", $_POST["query"]);
   $search_text = "'" . implode("', '", $search_array) . "'";
   $query = "SELECT * FROM peserta WHERE YEAR(tgl_pendaftaran) IN (".$search_text.") ORDER BY YEAR(tgl_pendaftaran) DESC";
  }
  else
  {
   $query = "SELECT * FROM peserta ORDER BY id_peserta DESC";
  }

  $statement = $connect->prepare($query);

  $statement->execute();

  $result = $statement->fetchAll();

  $total_row = $statement->rowCount();

  $output = '';

  $a = '';

  $no = 1;

  if($total_row > 0)
  {
   foreach($result as $row)
   {
    $output .= '';
   }
  }
  else
  {
   $output .= '
   <h5>Data tidak ditemukan</h5>
   ';
  }

  echo $output;
?>
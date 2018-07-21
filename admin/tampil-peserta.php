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

  $no = 1;

  if($total_row > 0)
  {
   foreach($result as $row)
   {
    $output .= '

    <tr>
     <td>'.$no++.'</td>
     <td>'.$row["nomor_peserta"].'</td>
     <td>'.$row["nama"].'</td>
     <td>'.$row["nik"].'</td>
     <td>'.$row["tgl_pendaftaran"].'</td>
     <td>
     <a href="proses-lihat-peserta.php?id_peserta='.$row["id_peserta"].'"><i class="fa fa-eye"></i></a>
     <a href="form-edit-peserta.php?id_peserta='.$row["id_peserta"].'"><i class="fa fa-edit"></i></a>
     <a href="hapus-peserta.php?id_peserta='.$row["id_peserta"].'"><i class="fa fa-trash"></i></a>
     <a href="print-semua-hasil.php?id_peserta='.$row['id_peserta'].'"><i class="fa fa-print"></i></a></td>
    </tr>
    ';
   }
  }
  else
  {
   $output .= '
   <tr>
    <td colspan="5" align="center">No Data Found</td>
   </tr>
   ';
  }

  echo $output;
?>
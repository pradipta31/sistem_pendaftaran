<?php
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  if($_POST["query"] != '')
  {
   $search_array = explode(",", $_POST["query"]);
   $search_text = "'" . implode("', '", $search_array) . "'";
   $query = "SELECT * FROM hasil_tes WHERE tahun IN (".$search_text.") ORDER BY id_hasil_tes DESC";
  }
  else
  {
   $query = "SELECT * FROM hasil_tes ORDER BY id_hasil_tes DESC";
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
     <td>'.$row["total_nilai"].'</td>
     <td>'.$row["status"].'</td>
     <td><a href="form-edit-hasil.php?id_hasil_tes='.$row["id_hasil_tes"].'"><i class="fa fa-edit"></i></a>
     <a href="hapus-hasil.php?id_hasil_tes='.$row["id_hasil_tes"].'"><i class="fa fa-trash"></i></a>
     <a href="print-semua-hasil.php?id_hasil_tes='.$row['id_hasil_tes'].'"><i class="fa fa-print"></i></a></td>
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

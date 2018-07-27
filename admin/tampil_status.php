<?php
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  if($_POST["query"] != 0)
  {
   $a = explode(",",$_POST["q"]);
   $s = "'". implode("', '", $a) ."'";
   $search_array = explode(",", $_POST["query"]);
   $search_text = "'" . implode("', '", $search_array) . "'";
   $query = "SELECT * FROM hasil_tes WHERE status IN (".$search_text.") AND tahun IN (".$s.") ORDER BY status DESC";
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
     <td><center>'.$no++.'</td></center>
     <td><center>'.$row["nomor_peserta"].'</td></center>
     <td><center>'.$row["nama"].'</td></center>
     <td><center>'.$row["nilai_tulis"].'</td></center>
     <td><center>'.$row["nilai_wawancara"].'</td></center>
     <td><center>'.$row["total_nilai"].'</td></center>
     <td><center>'.$row["status"].'</td></center>
     <td>
     <center>
     <a href="lihat-tes.php?id_hasil_tes='.$row["id_hasil_tes"].'"><i class="fa fa-eye"></i></a>
     <a href="form-edit-hasil.php?id_hasil_tes='.$row["id_hasil_tes"].'"><i class="fa fa-edit"></i></a>
     <a href="hapus-hasil.php?id_hasil_tes='.$row["id_hasil_tes"].'" onclick = "return confirm(/Yakin Ingin hapus data ini/)"><i class="fa fa-trash"></i></a>
     <a href="print-semua-hasil.php?id_hasil_tes='.$row['id_hasil_tes'].'"><i class="fa fa-print"></i></a>
     <center>
     </td>
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

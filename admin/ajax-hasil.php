<?php
  $connect = new PDO("mysql:host=localhost;dbname=sistem_informasi_eksekutif", "root", "");

  if($_POST["query"] != 0)
  {
   $search_array = explode(",", $_POST["query"]);
   $search_text = "'" . implode("', '", $search_array) . "'";
   $query = "SELECT * FROM hasil_tes WHERE tahun IN (".$search_text.") ORDER BY tahun DESC";
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

  $a = '';

  $no = 1;

  if($total_row > 0)
  {
   foreach($result as $row){
     $tahun = $row['tahun'];
   }
   $output .='<a href="print-hasil.php?tahun='.$tahun.'" class="btn btn-primary">Cetak Data Hasil</a>';
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

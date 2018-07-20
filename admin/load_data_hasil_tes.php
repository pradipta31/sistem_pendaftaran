<?php
	 include 'koneksi.php';
	 $output = '';
	 if(isset($_POST["id_hasil_tes"]))
	 {
	      if($_POST["id_hasil_tes"] != '')
	      {
	           $sql = "SELECT * FROM hasil_tes WHERE id_hasil_tes = '".$_POST["id_hasil_tes"]."'";
	      }
	      else
	      {
	           $sql = "SELECT * FROM hasil_tes";
	      }
	      $result = mysqli_query($connect, $sql);
	      while($row = mysqli_fetch_array($result))
	      {
	           $output .= '<tr><td><center>'.$nomor++.'</center></td><td><center>'.$rowss['nomor_peserta'].'</center></td><td><center>'.$rowss['nama'].'</center></td><td><center>'.$rowss['total_nilai'].'</center></td>
		        <td><center>'.$rowss['status'].'</center></td>
		        <td><center>
		        <a href="form-edit-hasil.php?id_hasil_tes ='.$rowss['id_hasil_tes'].'"><i class="fa fa-edit"></i></a>
		        <a href="hapus-hasil.php?id_hasil_tes='.$rowss['id_hasil_tes'].'" onclick="return confirm ("Yakin Ingin Hapus Data Ini ?")"><i class="fa fa-trash"></i></a>
		        <a href="print-semua-hasil.php?id_hasil_tes =' .$rowss['id_hasil_tes'].'"><i class="fa fa-print"></i></a></center></td>
		      </tr>';
	      }
	      echo $output;
	 }
?>

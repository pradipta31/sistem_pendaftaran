<?php
  if (isset($_POST&#91;'search'&#93;)) {
    include 'koneksi.php'
    $word = mysqli_real_escape_string($_POST&#91;'search'&#93;);
    $word = htmlentities($word)

    $sql = "SELECT nama FROM pendaftaran WHERE nomor_pendaftaran LIKE '%" . $word . "%' ORDER BY id LIMIT 10";
    $row = mysqli_fetch_array($sql);
    if (count($row)) {
      $end_result = '';
      foreach ($row as $r) {
        $result = $r['nama'];
        $bold = '<span class="found">' . $word . '</span>';
        $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';
      }
      echo $end_result;
    }else {
      echo "<li>No Results found</li>";
    }
  }
?>

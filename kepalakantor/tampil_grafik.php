<?php

  $dbconn = pg_connect("koneksi.php")
  or die('Erreur de connexion'.pg_last_error());

  $query = "SELECT * FROM peserta WHERE umur=20";
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());

  $array = array();
  while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
      $array[] = $row;
  }

  $data=json_encode($array);
  echo $data;

  pg_free_result($result);

  pg_close($dbconn);

?>

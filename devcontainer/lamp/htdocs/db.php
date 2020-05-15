<?php
try {
  $dbh = new PDO('mysql:host=host.docker.internal;dbname=mysql;port=8200', 'root', 'password');

  foreach($dbh->query('select * from time_zone_name') as $row) {
    echo $row['Name'] . '<br>';
  }
}
catch(PDOException $e){
  echo 'ERROR:'.$e->getMessage();
  exit;
}
?>

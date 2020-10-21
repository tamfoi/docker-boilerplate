<?php
try {
  $dbh = new PDO('mysql:host=localhost;dbname=mysql;port=3306', 'root', '');

  foreach($dbh->query('select * from help_category') as $row) {
    echo $row['name'] . '<br>';
  }
}
catch(PDOException $e){
  echo 'ERROR:'.$e->getMessage();
  exit;
}
?>

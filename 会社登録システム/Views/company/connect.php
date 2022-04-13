<?php
require_once(ROOT_PATH .'/database.php');
$pdo = new PDO(
  'mysql:dbname='.DB_NAME.
  ';host='.DB_HOST, DB_USER, DB_PASSWD);
?>

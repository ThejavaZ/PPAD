<?php
  $host = "localhost"; 
  $database = "ppad";
  $port = 3306;
  $user = "ppad";
  $password = "123";

  try {
    $connection = new PDO("mysql:host={$host};dbname={$database};port={$port}", $user, $password);
  } catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
  }

?>
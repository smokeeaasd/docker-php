<?php

try {

  $dsn = "mysql:host=mysql-db;dbname=app";
  $cnn = new PDO($dsn, "root", "root");

  $teste = $cnn->query("show variables");

  while ($row = $teste->fetch())
    echo "<p>Name: {$row[0]} : {$row[1]} </p>";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}

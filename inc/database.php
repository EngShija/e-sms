<?php

function database()
{

  $databasehost = 'localhost';

  $databaseUser = 'root';

  $databasePassword = '';

  $databaseName = 'myDB';

  try {
    $conn = new mysqli($databasehost, $databaseUser, $databasePassword, $databaseName);
    return $conn;
  } catch (Exception $e) {
    die("Error: {$e->getMessage()}");
  }
}


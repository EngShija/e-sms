<?php 
function database () {
   $databasehost = 'localhost';
   $databaseUser = 'root';
   $databasePassword = '';
   $databaseName = 'myDB';
   
    //Create a connection object.
    $conn = new mysqli($databasehost, $databaseUser, $databasePassword, $databaseName);
    //Check for any errors
    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }
  return $conn;
}


<?php
function connection(){
    try{
    $connection = new mysqli($dbhost = 'localhost', $username = 'root', $dbpassword = '', $dbname = 'chatwebdb');
    return $connection;
    }
    catch(Exception $e){
        die("Error connecting to database". $e->getMessage());
    }
}

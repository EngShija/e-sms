<?php 
session_start();
include_once "../inc/database.php";
require_once __DIR__. "/../helpers/functions.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    delete_user($id);
    header('location: ../studentsList.php?deleted');
}else{
    die(mysqli_error($conn));
}

//     $sql = "DELETE from students where id = $id";
//     $result = database()->query($sql);
//     if($result){
//         header('location: ../studentsList.php');
//     }else{
//         die(mysqli_error($conn));
//     }
// }
// 
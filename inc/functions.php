<?php
include "database.php";
function changeForgotenPassword(){
    $userId = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $RegNo = $_POST['RegNo'];
   

    $sql = "SELECT `password`, email, RegNo FROM students WHERE email = '$userId' AND RegNo = '$RegNo'";
    $result = database()->query($sql);
    $row = $result->fetch_assoc();
    
    if($row){
    if(isset($_POST['change'])){
        if($new_password == $confirm_password){
           $query = "UPDATE `students` SET `password`='$new_password' WHERE `email`='$userId'";
           $result = database()->query($query);
            header("location: ../login.php?changed");
           }else{
            header("location: ../forgot_password.php?notchanged");
        }
    }
        }
    else{
        header("location: ../forgot_password.php?notexist");
    }
}


 
 


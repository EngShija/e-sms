<?php
session_start();
 include_once "../inc/database.php";
 require_once __DIR__. "/../helpers/functions.php";
 $user_id = $_SESSION['userId'];

 $fname = $_POST['ufname'];
 $mname = $_POST['umname'];
 $lname = $_POST['ulname'];
 $address = $_POST['uaddress'];
 $birth = $_POST['ubirth'];
 $gender = $_POST['ugender'];
 $phone = $_POST['uphone'];
 $email = $_POST['uemail'];


$row = get_user_info_by_id($user_id);


if($row){
if(isset($_POST['update'])){  
    self_user_update($user_id, $fname, $mname, $lname, $address, $birth, $gender, $phone, $email,);
        header("location: ../prog.php?updated");
       }else{
        header("location: ../update.php?notchanged");
    }
}
else{
    header("location: ../update.php?abnormal");
}

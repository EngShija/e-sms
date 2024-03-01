<?php
session_start();
 include_once "../inc/database.php";
 require_once __DIR__. "/../helpers/functions.php";

 $fname = $_POST['ufname'];
 $mname = $_POST['umname'];
 $lname = $_POST['ulname'];
 $birth = $_POST['ubirth'];
 $phone = $_POST['uphone'];
 $email = $_POST['uemail'];
 $user_id = id() || $user_id = $_SESSION['std_id'];
$row = get_parent_info_by_id($user_id);


if($row){
if(isset($_POST['update'])){  
    update_parent($user_id, $fname, $mname, $lname, $birth,  $phone, $email);
        redirect_to("../prog.php?updated");
       }else{
        redirect_to(" ../update.php?notchanged");
    }
}
else{
    redirect_to("../update.php?abnormal");
}

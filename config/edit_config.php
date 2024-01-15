<?php
session_start();
include_once "../inc/database.php";
require_once __DIR__ . "/../helpers/functions.php";
$fname = $_POST['ufname'];
$mname = $_POST['umname'];
$lname = $_POST['ulname'];
$address = $_POST['uaddress'];
$birth = $_POST['ubirth'];
$gender = $_POST['ugender'];
$phone = $_POST['uphone'];
$email = $_POST['uemail'];
$RegNo = $_POST['uRegNo'];
$role = $_POST['role'];
$password = $_POST['upassword'];
$data = get_usrer_info_by_email($email);
$user_id = $data['id'];


if (get_user_info_by_id($user_id)) {
    if (isset($_POST['update'])) {
        if (update_user($user_id, $fname, $mname, $lname, $address, $birth, $gender, $RegNo, $phone, $email, $role)) {
            header("location: ../studentsList.php?updated");
        } else {
            header("location: ../edit.php.php?notchanged");
        }
    }
}

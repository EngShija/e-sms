<?php
session_start();
include_once "../inc/header.php";
include_once "../inc/database.php";
require_once __DIR__ . "/../helpers/functions.php";
//defining all variables and set to empty values
$fname = $mname = $lname = $address = $birth_date = $gender = $phone = $email = $password = $password2 = "";

if (isset($_POST['submit'])) {
    if (is_request_method_post()) {

        $fname = validate_inputs($_POST['fname']);

        $mname = validate_inputs($_POST['mname']);

        $lname = validate_inputs($_POST['lname']);

        $birth_date = validate_inputs($_POST['birth']);

        $phone = validate_inputs($_POST['phone']);

        $email = validate_inputs($_POST['email']);

        $password = validate_inputs($_POST['password1']);

        $relationship = validate_inputs($_POST['relationship']);

        $password2 = validate_inputs($_POST['password2']);

        $password_hash = hash_password($password);

        $student_id = id();


        //VALIDATION.

        if (empty($fname)) {
            redirect_to(" ../addParent.php?fnamecheck");
        }

        if (empty($mname)) {
            redirect_to(" ../addParent.php?mnamecheck");
        }

        if (empty($lname)) {
            redirect_to(" ../addParent.php?lnamecheck");
        }

        if (empty($phone)) {
            redirect_to("../addParent.php?phonecheck");
        }

        if (empty($email)) {
            redirect_to("../addParent.php?emailcheck");
        }


        if (empty($relationship)) {
            redirect_to("../addParent.php?relationcheck");
        }

        if (parent_exist($student_id)) {
            redirect_to("../addParent.php?parentPresent");
        } else {

            if (verify_password($password, $password2)) {

                register_parent($fname, $mname, $lname, $phone, $email, $birth_date, $relationship,  $password_hash, $student_id);
                redirect_to('../addParent.php?parentAdded');

            } else {
                redirect_to("../addParent.php?passmatch");
            }
        }
    }else{
        echo "Error occured";
    }
}
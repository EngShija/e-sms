<?php

require_once "../helpers/functions.php";
//defining all variables and set to empty values
$fname = $mname = $lname = $address = $birth_date = $gender = $phone = $email = $password = $password2 = "";

if (isset($_POST['submit'])) {
    if (is_request_method_post()) {

        $fname = validate_inputs($_POST['fname']);

        $mname = validate_inputs($_POST['mname']);

        $lname = validate_inputs($_POST['lname']);

        $address = validate_inputs($_POST['address']);

        $birth_date = validate_inputs($_POST['birth']);

        $gender = validate_inputs($_POST['gender']);

        $phone = validate_inputs($_POST['phone']);

        $email = validate_inputs($_POST['email']);

        $RegNo = null;

        $password = validate_inputs($_POST['password1']);

        $password2 = validate_inputs($_POST['password2']);

        $password_hash = hash_password($password);

        //VALIDATION.

        if (empty($fname)) {
            redirect_to(" ../register.php?fnamecheck");
        }

        if (empty($mname)) {
            redirect_to(" ../register.php?mnamecheck");
        }

        if (empty($lname)) {
            redirect_to(" ../register.php?lnamecheck");
        }

        if (empty($address)) {
            redirect_to(" ../register.php?addresscheck");
        }

        if (empty($birth_date)) {
            redirect_to(" ../register.php?birthcheck");
        }

        if (empty($gender)) {
            redirect_to("../register.php?gendercheck");
        }

        if (empty($phone)) {
            redirect_to("../register.php?phonecheck");
        }

        if (empty($email)) {
            redirect_to("../register.php?emailcheck");
        }

        if (is_user_present($email, $phone)) {
            redirect_to("../register.php?userPresent");
        } else {

            if (verify_password($password, $password2)) {

                register($fname, $mname, $lname, $address, $birth_date, $gender, $RegNo, $phone, $email, $password_hash);
                redirect_to('../login.php?sucess');

            } else {
                redirect_to("../register.php?passmatch");
            }
        }
    }else{
        echo "Error occured";
    }
}
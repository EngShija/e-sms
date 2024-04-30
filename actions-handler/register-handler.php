<?php
session_start();
require_once "../helpers/functions.php";
//defining all variables and set to empty values
 $fname = $mname = $lname = $address = $birth_date = $gender = $phone = $email = $password = $password2 = "";

 $_SESSION['status'] = $_POST['submit'];


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

        $birth = validate_inputs($_POST['birth']);

        $RegNo = null;

        $password = validate_inputs($_POST['password1']);

        $password2 = validate_inputs($_POST['password2']);

        $password_hash = hash_password($password);

        //VALIDATION.

        required_field($fname, " ../register.php?fnamecheck");

        required_field($mname, " ../register.php?mnamecheck");

        required_field($lname, " ../register.php?lnamecheck");

        required_field($address, "  ../register.php?addresscheck");

        required_field($birth, " ../register.php?birthcheck");

        required_field($gender, " ../register.php?gendercheck");

        required_field($phone, " ../register.php?phonecheck");

        required_field($email, "../register.php?emailcheck");


        if (is_user_present($email, $phone)) {
            redirect_to("../register.php?userPresent");
        } else {

            if (verify_password($password, $password2)) {

                register($fname, $mname, $lname, $address, $birth_date, $gender, $RegNo, $phone, $email, $password_hash);

                $enter="INSERT INTO Users (Firstname,Sirname,Email,Password,Phone) VALUES('$fname','$lname','$email','$password','$phone')";
                database()->query($enter);

                redirect_to('../login.php?success');

               

            } else {
                redirect_to("../register.php?passmatch");
            }
        }
    }else{
        echo "Error occured";
    }
}

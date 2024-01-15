<?php 

session_start();
require_once "../inc/database.php";
// include_once "../inc/reg_Errors.php";

$fname = $_POST['fname'];

$mname = $_POST['mname'];

$lname = $_POST['lname'];

$address = $_POST['address'];

$birth_date = $_POST['birth'];

$gender = $_POST['gender'];

$RegNo = $_POST['RegNo'];

$phone = $_POST['phone'];

$email = $_POST['email'];

$password = $_POST['password1'];

$password2 = $_POST['password2'];



$query = "INSERT INTO `students` (`fname`, `mname`, `lname`, `physicalAddress`, `birth_date`, `gender`, `RegNo`, `phone`, `email`, `password`) VALUES
('$fname', '$mname', '$lname', '$address', '$birth_date', '$gender', '$RegNo', $phone, '$email', '$password')";
if(database()->query($query) === true){
    header('Location: ../studentsList.php?sucess');
    exit;
}
else{
    // if($_SERVER['REQUEST_METHOD'] == "POST")
    header('location: ../register.php?fail');
    echo "Error " . $query . "<br>" . database()->error;
    exit;
}
 
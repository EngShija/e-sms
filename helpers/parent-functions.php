<?php
require_once __DIR__ . "/../inc/database.php";
require_once __DIR__. "/costants.php";

function parent()
{
    return database()->query("SELECT * FROM parent")->fetch_all(MYSQLI_ASSOC);
}
function delete_parent(int $user_id)
{
    $sql = "DELETE from parent where student_id = $user_id";
    $result = database()->query($sql);
    
return $result;
}

function parent_exist($student_id){
    $sql = "SELECT * FROM parent WHERE student_id = $student_id";
    return database()->query($sql)->num_rows > 0;
}


function register_parent($fname, $mname, $lname, $phone, $email, $birth_date, $relationship,  $password_hash, $student_id)
{

    $sql = "INSERT INTO parent(first_name, middle_name, last_name, phone, email, DOB, relationship, password, student_id)

  VALUES('$fname', '$mname', '$lname', '$phone', '$email', '$birth_date', '$relationship',  '$password_hash', $student_id)";
    return database()->query($sql);
}

function get_parent_info_by_id(string $student_id)
{
    $result = database()->query("SELECT * FROM parent WHERE student_id = '$student_id'");
    return $result->fetch_assoc();
}

function update_parent($student_id, $fname, $mname, $lname, $birth,  $phone, $email, $relationship)
{
    $query = "UPDATE parent SET first_name = '$fname', middle_name = '$mname', last_name = '$lname', DOB = '$birth', phone = $phone, email = '$email', relationship = '$relationship'
     WHERE student_id = $student_id";
    return database()->query($query);
}



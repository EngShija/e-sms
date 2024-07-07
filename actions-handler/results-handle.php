<?php
require_once __DIR__ . "/../helpers/functions.php";
kick_user_to("access.php");

$student_id = $_SESSION['student_id'];
$subject_id = $_SESSION['subject_id'];
$data = get_subject_info_by_id($subject_id);
$subject_name = $data['subject_name'];
$marks = $_POST['marks'];

if($marks >= 0 && $marks <= 30){
    $grade = 'F';
    $description = 'Fail';
    $point = '5';
}
elseif($marks >= 31 && $marks <= 44){
    $grade = 'D';
    $description = 'Satisfactory';
    $point = '4';
}
elseif($marks >=45 && $marks <= 59){
    $grade = 'C';
    $description = 'Good';
    $point = '3';
}
elseif($marks >=60 && $marks <= 69){
    $grade = 'B';
    $description = 'Very good';
    $point = '2';
}
elseif($marks >=70 && $marks <= 100){
    $grade = 'A';
    $description = 'Exellent';
    $point = '1';
}else{
    $grade = 'Invalid marks';
    $point = 'Invalid points';
}

if(add_results($student_id, $subject_id, $subject_name, $marks, $grade, $description)){
    redirect_to("../subjects.php?resultadded");
}

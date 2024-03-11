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
}
elseif($marks >= 31 && $marks <= 44){
    $grade = 'D';
    $description = 'Satisfactory';
}
elseif($marks >=45 && $marks <= 59){
    $grade = 'C';
    $description = 'Good';
}
elseif($marks >=60 && $marks <= 69){
    $grade = 'B';
    $description = 'Very good';
}
elseif($marks >=70 && $marks <= 100){
    $grade = 'A';
    $description = 'Exellent';
}else{
    $grade = 'Invalid marks';
}

if(add_results($student_id, $subject_id, $subject_name, $marks, $grade, $description)){
    redirect_to("../subjects.php?resultadded");
}

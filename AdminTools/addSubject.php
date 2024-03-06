<?php
require_once __DIR__. "/../helpers/functions.php";
$classname = $_POST['subName'];
if(isset($_POST['addsubject'])){
if(addSubject($classname)){
    redirect_to('../subject.php?added');
}else{
    redirect_to('../subject.php?notAdded');
}
}
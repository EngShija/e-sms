<?php
require_once __DIR__. "/../helpers/functions.php";
$classname = $_POST['className'];

if(addClass($classname)){
    redirect_to('../class.php?added');
}else{
    redirect_to('../class.php?notAdded');
}
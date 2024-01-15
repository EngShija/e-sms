<?php 
$t = date("H");

if($t <= 11){
    echo "Hello! Good Morning!\n";
}
elseif($t <= 15){
    echo "Hello! Good Afternoon!\n";
}
elseif($t <= 18){
    echo "Hello! Good Evening!\n";
}
elseif($t <= 4){
    echo "Hello! Good Night!\n";
}
else{
    echo "Hello! Good Night!\n";
}
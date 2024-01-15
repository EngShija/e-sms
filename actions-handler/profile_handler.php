<?php
include_once "../inc/database.php";

if(isset($_POST['upload'])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES['upload']) && $_FILES['profilepic']['error'] == UPLOAD_ERR_OK){
        $myimage = file_get_contents($_FILES['profilepic']["tmp_name"]);
$sql = "INSERT INTO `students`(`profilePicture`) VALUES(?)";
// $result = database()->query($sql);  
$stmt = database()->prepare($sql);
// $stmt->bindParam("", $profilepic);
$stmt->bind_param("b", $myimage);
$stmt->execute();
$stmt->close();
echo "Upload successfully!";
    } else {
        echo "Image not uploaded";
    }
}
}
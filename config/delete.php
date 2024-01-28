<?php
session_start();
include_once "../inc/database.php";

require_once __DIR__ . "/../helpers/functions.php";

if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    delete_student($id);

    redirect_to("../studentsList.php?deleted");

} else {
    redirect_to("../studentsList.php");
    // die(mysqli_error($conn));
}

<?php
require_once __DIR__ . "/helpers/functions.php";
?>
<div>
    <div class="header">
        <h><span>e-</span>SMS</h>
        <p><a href="login.php">Login</a></p>
        <p><a href="register.php">Register</a></p>
        <div class="time">
            <?php include_once "./inc/greetings.php"; ?>
        </div>
        <h6></h6>
    </div>

    <?php
    $i = 0;
    $newdata = get_subject_imfo();
    foreach ($newdata as $data) {
    ?>
        <a href="add-results.php?subject_id=<?= $data['id'] ?>"><?= $data['subject_name'] . "<br>" ?></a>
    <?php
    }
    $i++;
    $subject_id = $_SESSION['subject_id'];
    $subdata = get_subject_info_by_id($subject_id);
    $subject_name = $subdata['subject_name'];
    sweetAlert('resultadded', 'Successfully', $subject_name . ' Results added', 'success');
    ?>
    <?php require_once __DIR__ . "/inc/footer.php" ?>
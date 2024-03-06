<?php
require_once __DIR__. "/helpers/functions.php";
$data = get_subject_imfo();

$i = 0;
foreach($data as $data){
    echo $data['subject_name']. '<br>';
}
$i++;
?>

<select name="subject" id="sub">
    <option value="sub1">Sub1</option>
</select>
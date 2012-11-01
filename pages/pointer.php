<?php
include('/pages/db.php');
$code = $_GET['code'];

$pointer = $db->prepare("INSERT INTO `pointage`(`id`, `participant_id`, `date`) VALUES ()")
?>
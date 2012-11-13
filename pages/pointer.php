<?php
include('/pages/db.php');
//$code = $db->quote($_GET['code'],PDO::PARAM_INT);
//$session = $db->quote($_GET['session'], PDO::PARAM_INT);

$pointer = $db->prepare("INSERT INTO `pointage`(`participant_code`, `session`, `date_heure`) VALUES (?,?,NOW()) ON DUPLICATE KEY UPDATE id=id");
$pointer->execute(array($_GET['code'], $_GET['session']));
safe_redirect("index.php?r=scan&session=".$_GET['session']);
?>